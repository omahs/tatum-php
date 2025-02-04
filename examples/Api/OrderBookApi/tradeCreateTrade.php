<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/OrderBook#operation/tradeCreateTrade
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#tradecreatetrade
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_trade = new \Tatum\Model\CreateTrade();

try {
    /** @var \Tatum\Model\Id $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->orderBook()
        ->tradeCreateTrade($arg_create_trade);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->tradeCreateTrade(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->tradeCreateTrade(): " . $exc->getMessage() . PHP_EOL;
}