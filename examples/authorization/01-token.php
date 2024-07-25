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
    $result = $authorization->getToken($settings['client_secret']);
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

}
catch (\Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

?>
