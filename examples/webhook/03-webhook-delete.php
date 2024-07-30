<?php

include __DIR__ . '/../../vendor/autoload.php';

$yaml = new \Symfony\Component\Yaml\Parser();
$settings = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__.'/../config.yml'));

try {
    $http_client = new \GuzzleHttp\Client();
    $client = new \zaporylie\Vipps\Client($settings['client_id'], $settings['client_secret'], $settings['subscription_key'], $settings['merchant_serial_number'], [
        'http_client' => $http_client,
        'vipps_system_name' => 'vipps_zaporylie_example',
        'vipps_system_version' => \zaporylie\Vipps\Client::VERSION,
    ]);

    $authorization = new \zaporylie\Vipps\Api\Authorization($client);
    $authorization->getToken($settings['client_secret']);
    $payment = new \zaporylie\Vipps\Api\v1\Webhook($client);
    $payment->deleteWebhook('1aaf0fde-afed-43c0-9af3-b876bba34e48');
    echo 'ok';

}
catch (\Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

?>
