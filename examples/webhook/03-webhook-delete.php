<?php

include __DIR__ . '/../../vendor/autoload.php';

$yaml = new \Symfony\Component\Yaml\Parser();
$settings = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__.'/../config.yml'));

try {
    $http_client = new \GuzzleHttp\Client(
        ['headers' => [
            'Merchant-Serial-Number' => $settings['merchant_serial_number'],
        ]]
    );
    $client = new \zaporylie\Vipps\Client($settings['client_id'], ['http_client' => $http_client]);
    $vipps = new \zaporylie\Vipps\Vipps($client);
    $authorization = new \zaporylie\Vipps\Api\Authorization($vipps, $settings['subscription_key']);
    $authorization->getToken($settings['client_secret']);
    $payment = new \zaporylie\Vipps\Api\v1\Webhook($vipps, $settings['subscription_key'], $settings['merchant_serial_number']);
    $payment->deleteWebhook('1aaf0fde-afed-43c0-9af3-b876bba34e48');
    echo 'ok';

}
catch (\Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

?>
