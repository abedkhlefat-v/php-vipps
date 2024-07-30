<html>
<head>
    <title>Merchant website</title>
    <script src="https://checkout.vipps.no/vippsCheckoutSDK.js"></script>
</head>
<body>
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
    $checkout = new \zaporylie\Vipps\Api\v3\Checkout($client, $settings['subscription_key'], $settings['merchant_serial_number'], $settings['client_secret']);
    $request = new \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest();
    $request->setType('PAYMENT');
    $request->setMerchantInfo((new \zaporylie\Vipps\Model\Checkout\v3\MerchantInfo())
        ->setCallbackUrl('https://eoncxehuh2o2qyq.m.pipedream.net')
        ->setReturnUrl('https://eoncxehuh2o2qyq.m.pipedream.net')
        ->setTermsAndConditionsUrl('https://eoncxehuh2o2qyq.m.pipedream.net')
        ->setCallbackAuthorizationToken('0101010'));
    $request->setTransaction((new \zaporylie\Vipps\Model\Checkout\v3\Transaction())
        ->setAmount((new \zaporylie\Vipps\Model\Checkout\v3\Amount())->setCurrency('NOK')->setValue(1000))
        ->setReference('test-checkout-3')
        ->setOrderSummary((new \zaporylie\Vipps\Model\Checkout\v3\OrderSummary())
            ->setOrderBottomLine((new \zaporylie\Vipps\Model\Checkout\v3\OrderBottomLine())
                ->setCurrency('NOK'))
            ->setOrderLines([(new \zaporylie\Vipps\Model\Checkout\v3\OrderLine())
                ->setName('test product')
                ->setId('test-product-id')
                ->setTotalAmount(1000)
                ->setTotalAmountExcludingTax(800)
                ->setTotalTaxAmount(200)
                ->setTaxPercentago(25)]))
        ->setPaymentDescription('This is test checkout order session'));
    $result = $checkout->createCheckoutSession($request);
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
?>
<section id="vipps-checkout-frame-container">
    <!-- This is where the iFrame will be embedded -->
</section>
<script>
    var vippsCheckout = VippsCheckout({
        checkoutFrontendUrl: "<?php echo $result->getCheckoutFrontendUrl(); ?>",
        iFrameContainerId: "vipps-checkout-frame-container",
        language: "nb",
        token: "<?php echo $result->getToken(); ?>",
    });
</script>
</body>
</html>
<?php



}
catch (\Exception $e) {
    echo '<pre>';
    var_dump($e->getMessage());
    var_dump($e->getTraceAsString());
    echo '</pre>';

}

?>
