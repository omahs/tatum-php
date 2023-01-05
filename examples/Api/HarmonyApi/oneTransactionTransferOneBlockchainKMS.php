<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Harmony#operation/oneTransactionTransferOneBlockchainKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#onetransactiontransferoneblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_one_blockchain_kms = new \Tatum\Model\TransferOneBlockchainKMS();

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneTransactionTransferOneBlockchainKMS($arg_transfer_one_blockchain_kms, $arg_shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneTransactionTransferOneBlockchainKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneTransactionTransferOneBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}