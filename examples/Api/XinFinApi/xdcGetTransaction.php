<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/XinFin#operation/XdcGetTransaction
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XinFinApi.md#xdcgettransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var \Tatum\Model\XdcTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xinFin()
        ->xdcGetTransaction($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xinFin()->xdcGetTransaction(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xinFin()->xdcGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}