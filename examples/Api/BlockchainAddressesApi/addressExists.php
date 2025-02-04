<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainAddresses#operation/addressExists
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainAddressesApi.md#addressexists
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The cryptocurrency of the blockchain address to check
$arg_currency = 'BNB';

// The blockchain address to check
$arg_address = 'tbnb1sfj9981j2eo1ij2e09';

// In case of XLM or XRP, this is a memo or DestinationTag to search for.
$arg_index = 1;

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainAddresses()
        ->addressExists($arg_currency, $arg_address, $arg_index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainAddresses()->addressExists(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainAddresses()->addressExists(): " . $exc->getMessage() . PHP_EOL;
}