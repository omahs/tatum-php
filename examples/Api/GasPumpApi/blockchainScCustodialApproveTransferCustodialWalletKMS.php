<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/GasPump#operation/blockchainScCustodialApproveTransferCustodialWalletKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#blockchainsccustodialapprovetransfercustodialwalletkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_approve_transfer_custodial_wallet_kms = new \Tatum\Model\ApproveTransferCustodialWalletKMS();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->blockchainScCustodialApproveTransferCustodialWalletKMS($arg_approve_transfer_custodial_wallet_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->blockchainScCustodialApproveTransferCustodialWalletKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->blockchainScCustodialApproveTransferCustodialWalletKMS(): " . $exc->getMessage() . PHP_EOL;
}