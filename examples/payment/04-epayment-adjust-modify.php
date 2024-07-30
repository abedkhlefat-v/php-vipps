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
    $payment = new \zaporylie\Vipps\Api\v1\EPayment($client);
    $result = $payment->capturePayment('test-12121212-3', (new \zaporylie\Vipps\Model\EPayment\v1\CaptureModificationRequest())->setModificationAmount((new \zaporylie\Vipps\Model\EPayment\v1\Amount())->setCurrency('NOK')->setValue(101)), 'costam3');
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
    $result = $payment->refundPayment('test-12121212-3', (new \zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest())->setModificationAmount((new \zaporylie\Vipps\Model\EPayment\v1\Amount())->setCurrency('NOK')->setValue(100)), 'costam3');
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

}
catch (\Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

?>
