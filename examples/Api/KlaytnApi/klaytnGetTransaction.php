<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Klaytn#operation/KlaytnGetTransaction
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KlaytnApi.md#klaytngettransaction
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
    /** @var \Tatum\Model\KlaytnTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->klaytn()
        ->klaytnGetTransaction($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->klaytn()->klaytnGetTransaction(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->klaytn()->klaytnGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}