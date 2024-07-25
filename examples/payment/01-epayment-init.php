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
    $payment = new \zaporylie\Vipps\Api\v1\EPayment($vipps, $settings['subscription_key'], $settings['merchant_serial_number']);
    $result = $payment->createPayment((new \zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest())
        ->setAmount((new \zaporylie\Vipps\Model\EPayment\v1\Amount())->setValue(1000)->setCurrency('NOK'))
        ->setPaymentMethod((new \zaporylie\Vipps\Model\EPayment\v1\PaymentMethod())->setType('WALLET'))
        ->setReference('test-12121212-3')
        ->setUserFlow('WEB_REDIRECT')
        ->setReturnUrl('https://eoncxehuh2o2qyq.m.pipedream.net'), 'costam2');
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

}
catch (\Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
}

?>
