<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/NotificationSubscriptions#operation/subscriptionCreateSubscriptionIncoming
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionincoming
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_subscription_incoming = new \Tatum\Model\CreateSubscriptionIncoming();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\Id $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->notificationSubscriptions()
        ->subscriptionCreateSubscriptionIncoming($arg_create_subscription_incoming, $arg_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->notificationSubscriptions()->subscriptionCreateSubscriptionIncoming(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->notificationSubscriptions()->subscriptionCreateSubscriptionIncoming(): " . $exc->getMessage() . PHP_EOL;
}