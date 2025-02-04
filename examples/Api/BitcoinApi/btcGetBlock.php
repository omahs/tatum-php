<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Bitcoin#operation/BtcGetBlock
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcgetblock
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or height.
$arg_hash = '00000000ca231a439a5c0a86a5a5dd6dc1918a8e897b96522fa9499288e70183';

try {
    /** @var \Tatum\Model\BtcBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bitcoin()
        ->btcGetBlock($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bitcoin()->btcGetBlock(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bitcoin()->btcGetBlock(): " . $exc->getMessage() . PHP_EOL;
}