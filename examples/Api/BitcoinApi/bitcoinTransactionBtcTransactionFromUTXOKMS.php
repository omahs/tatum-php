<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Bitcoin#operation/bitcoinTransactionBtcTransactionFromUTXOKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#bitcointransactionbtctransactionfromutxokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_btc_transaction_from_utxokms = new \Tatum\Model\BtcTransactionFromUTXOKMS();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bitcoin()
        ->bitcoinTransactionBtcTransactionFromUTXOKMS($arg_btc_transaction_from_utxokms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bitcoin()->bitcoinTransactionBtcTransactionFromUTXOKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bitcoin()->bitcoinTransactionBtcTransactionFromUTXOKMS(): " . $exc->getMessage() . PHP_EOL;
}