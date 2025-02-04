<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Stellar#operation/XlmGetAccountInfo
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#xlmgetaccountinfo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_account = 'GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H';

try {
    /** @var \Tatum\Model\XlmAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetAccountInfo($arg_account);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->xlmGetAccountInfo(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->xlmGetAccountInfo(): " . $exc->getMessage() . PHP_EOL;
}