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
    $vipps = new \zaporylie\Vipps\Vipps($client);
    $authorization = new \zaporylie\Vipps\Api\Authorization($client, $settings['subscription_key']);
    $authorization->getToken($settings['client_secret']);
    $payment = new \zaporylie\Vipps\Api\v3\RecurringPayment($client, $settings['subscription_key'], $settings['merchant_serial_number']);
    $result = $payment->createAgreement((new \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement())
        ->setPricing((new \zaporylie\Vipps\Model\RecurringPayment\v3\Pricing())
            ->setCurrency('NOK')
            ->setAmount(1000))
        ->setMerchantRedirectUrl('https://eoncxehuh2o2qyq.m.pipedream.net')
        ->setMerchantAgreementUrl('https://eoncxehuh2o2qyq.m.pipedream.net')
        ->setProductName('Recurring Product that is being purchased'));
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

}
catch (\Exception $e) {
    echo '<pre>';
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
    echo '</pre>';
}

?>
