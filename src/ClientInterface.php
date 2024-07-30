<?php

namespace zaporylie\Vipps;

use Psr\Http\Client\ClientInterface as HttpClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use zaporylie\Vipps\Authentication\TokenStorageInterface;

interface ClientInterface
{
    /**
     * @return \zaporylie\Vipps\Authentication\TokenStorageInterface
     */
    public function getTokenStorage();

    /**
     * @param \zaporylie\Vipps\Authentication\TokenStorageInterface $tokenStorage
     *
     * @return $this
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage);

    /**
     * Gets clientId value.
     *
     * @return string
     */
    public function getClientId();

    /**
     * Sets clientId variable.
     *
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId);

    /**
     * Gets connection value.
     *
     * @return \zaporylie\Vipps\EndpointInterface
     */
    public function getEndpoint(): EndpointInterface;

    /**
     * Sets connection variable.
     *
     * @param \zaporylie\Vipps\EndpointInterface $endpoint
     *
     * @return $this
     */
    public function setEndpoint(EndpointInterface $endpoint);

    /**
     * Gets vippsSystemName value.
     *
     * @return string
     */
    public function getVippsSystemName(): string;

    /**
     * Gets vippsSystemVersion value.
     *
     * @return string
     */
    public function getVippsSystemVersion(): string;

    /**
     * Gets vippsSystemPluginName value.
     *
     * @return string
     */
    public function getVippsSystemPluginName(): string;

    /**
     * Gets vippsSystemPluginVersion value.
     *
     * @return string
     */
    public function getVippsSystemPluginVersion(): string;

    /**
     * Gets httpClient value.
     *
     * @return \Psr\Http\Client\ClientInterface
     */
    public function getHttpClient() : HttpClientInterface;

    /**
     * Sets httpClient variable.
     *
     * @param \Psr\Http\Client\ClientInterface|null $httpClient
     *
     * @return $this
     */
    public function setHttpClient(?HttpClientInterface $httpClient);

    /**
     * Gets requestFactoru value.
     *
     * @return \Psr\Http\Message\RequestFactoryInterface
     */
    public function getRequestFactory(): RequestFactoryInterface;

    /**
     * Gets streamFactory value.
     *
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    public function getStreamFactory(): StreamFactoryInterface;
}
