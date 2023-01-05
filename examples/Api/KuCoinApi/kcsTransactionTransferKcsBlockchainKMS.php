<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/KuCoin#operation/kcsTransactionTransferKcsBlockchainKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KuCoinApi.md#kcstransactiontransferkcsblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_kcs_blockchain_kms = new \Tatum\Model\TransferKcsBlockchainKMS();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsTransactionTransferKcsBlockchainKMS($arg_transfer_kcs_blockchain_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->kuCoin()->kcsTransactionTransferKcsBlockchainKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->kuCoin()->kcsTransactionTransferKcsBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}