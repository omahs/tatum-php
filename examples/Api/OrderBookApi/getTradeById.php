<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/OrderBook#operation/getTradeById
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#gettradebyid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Trade ID
$arg_id = '5e68c66581f2ee32bc354087';

try {
    /** @var \Tatum\Model\Trade $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->orderBook()
        ->getTradeById($arg_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->getTradeById(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->getTradeById(): " . $exc->getMessage() . PHP_EOL;
}