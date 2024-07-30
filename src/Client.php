<?php

namespace zaporylie\Vipps;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface as HttpClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use zaporylie\Vipps\Authentication\TokenMemoryCacheStorage;
use zaporylie\Vipps\Authentication\TokenStorageInterface;
use zaporylie\Vipps\Exceptions\Client\InvalidArgumentException;

class Client implements ClientInterface
{

    const VERSION = '3.x-dev';

    /**
     * @var \Psr\Http\Client\ClientInterface
     */
    protected $httpClient;

    /**
     * @var \zaporylie\Vipps\EndpointInterface
     */
    protected $endpoint;

    /**
     * @var \Psr\Http\Message\RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var \Psr\Http\Message\StreamFactoryInterface
     */
    protected StreamFactoryInterface $streamFactory;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $tokenType;

    /**
     * @var \zaporylie\Vipps\Authentication\TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $subscriptionKey;

    /**
     * @var string
     */
    protected $merchantSerialNumber;

    /**
     * @var string
     */
    protected $vippsSystemName;

    /**
     * @var string
     */
    protected $vippsSystemVersion;

    /**
     * @var string
     */
    protected $vippsSystemPluginName;

    /**
     * @var string
     */
    protected $vippsSystemPluginVersion;

    /**
     * Client constructor.
     *
     * @param string $client_id
     */
    public function __construct(string $client_id, string $client_secret, string $subscription_key, string $merchant_serial_number, array $options = [])
    {
        // Set Vipps MobilePay credentials.
        $this->clientId = $client_id;
        $this->clientSecret = $client_secret;
        $this->subscriptionKey = $subscription_key;
        $this->merchantSerialNumber = $merchant_serial_number;

        $this->vippsSystemPluginName = 'zaporylie/vipps (PHP)';
        $this->vippsSystemPluginVersion = static::VERSION;

        if (!isset($options['vipps_system_name'], $options['vipps_system_version'])) {
            throw new \InvalidArgumentException('Missing vipps_system_name and/or vipps_system_version');
        }
        $this->vippsSystemName = $options['vipps_system_name'];
        $this->vippsSystemVersion = $options['vipps_system_version'];

        // Set or discover http client.
        $this->setHttpClient(isset($options['http_client']) ? $options['http_client'] : null);

        // Set endpoint or use default one.
        if (isset($options['endpoint'])) {
            $this->setEndpoint(call_user_func([
                Endpoint::class,
                $options['endpoint']
            ]));
        } else {
            $this->setEndpoint(Endpoint::test());
        }

        // Set custom token storage. If option is missing default in-memory
        // storage will be in use.
        $this->setTokenStorage(
            isset($options['token_storage'])
                ? $options['token_storage']
                : new TokenMemoryCacheStorage()
        );
    }

    /**
     * Gets token value.
     *
     * @return string
     */
    public function getToken()
    {
        if (!isset($this->token)) {
            throw new InvalidArgumentException('Missing Token');
        }
        return $this->token;
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenStorage()
    {
        return $this->tokenStorage;
    }

    /**
     * {@inheritdoc}
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClientId(): string
    {
        if (!isset($this->clientId)) {
            throw new InvalidArgumentException('Missing Client ID');
        }
        return $this->clientId;
    }

    /**
     * {@inheritdoc}
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClientSecret(): string {
        if (!isset($this->clientSecret)) {
            throw new InvalidArgumentException('Missing Client Secret');
        }
        return $this->clientSecret;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscriptionKey(): string {
        if (!isset($this->subscriptionKey)) {
            throw new InvalidArgumentException('Missing Subscription Key');
        }
        return $this->subscriptionKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantSerialNumber(): string {
        if (!isset($this->merchantSerialNumber)) {
            throw new InvalidArgumentException('Missing Merchant Serial Number');
        }
        return $this->merchantSerialNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): EndpointInterface
    {
        return $this->endpoint;
    }

    /**
     * {@inheritdoc}
     */
    public function setEndpoint(EndpointInterface $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpClient(): HttpClientInterface
    {
        return $this->httpClient;
    }

    /**
     * Gets vippsSystemName value.
     *
     * @return string
     */
    public function getVippsSystemName(): string {
        return $this->vippsSystemName;
    }

    /**
     * Gets vippsSystemVersion value.
     *
     * @return string
     */
    public function getVippsSystemVersion(): string {
        return $this->vippsSystemVersion;
    }

    /**
     * Gets vippsSystemPluginName value.
     *
     * @return string
     */
    public function getVippsSystemPluginName(): string {
        return $this->vippsSystemPluginName;
    }

    /**
     * Gets vippsSystemPluginVersion value.
     *
     * @return string
     */
    public function getVippsSystemPluginVersion(): string {
        return $this->vippsSystemPluginVersion;
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpClient(?HttpClientInterface $httpClient)
    {
        $this->httpClient = self::httpClientDiscovery($httpClient);
        unset($this->requestFactory);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestFactory(): RequestFactoryInterface
    {
        if (!isset($this->requestFactory)) {
            $this->requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        }
        return $this->requestFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getStreamFactory(): StreamFactoryInterface
    {
        if (!isset($this->streamFactory)) {
            $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }
        return $this->streamFactory;
    }

    /**
     * Use this static method to get default HTTP Client.
     *
     * @param \Psr\Http\Client\ClientInterface|null $client
     *
     * @return \Psr\Http\Client\ClientInterface
     */
    protected function httpClientDiscovery(?HttpClientInterface $client = null) : HttpClientInterface
    {
        if (isset($client)) {
            return $client;
        }
        return Psr18ClientDiscovery::find();
    }
}
