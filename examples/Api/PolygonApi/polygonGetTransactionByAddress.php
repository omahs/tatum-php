<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Polygon#operation/PolygonGetTransactionByAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygongettransactionbyaddress
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
$arg_address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain next page of the data.
$arg_offset = 0;

// Transactions from this block onwards will be included.
$arg_from = 1087623;

// Transactions up to this block will be included.
$arg_to = 1087823;

// Sorting of the data. ASC - oldest first, DESC - newest first.
$arg_sort = 'ASC';

try {
    /** @var \Tatum\Model\PolygonTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetTransactionByAddress($arg_address, $arg_page_size, $arg_offset, $arg_from, $arg_to, $arg_sort);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->polygon()->polygonGetTransactionByAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->polygon()->polygonGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}