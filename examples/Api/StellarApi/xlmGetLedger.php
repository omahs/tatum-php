<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Stellar#operation/XlmGetLedger
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#xlmgetledger
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Sequence of the ledger.
$arg_sequence = 1;

try {
    /** @var \Tatum\Model\XlmLedger $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetLedger($arg_sequence);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->xlmGetLedger(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->xlmGetLedger(): " . $exc->getMessage() . PHP_EOL;
}