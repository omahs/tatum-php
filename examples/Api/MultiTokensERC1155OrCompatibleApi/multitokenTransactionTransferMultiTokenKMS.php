<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/MultiTokensERC1155OrCompatible#operation/multitokenTransactionTransferMultiTokenKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactiontransfermultitokenkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_multi_token_kms = new \Tatum\Model\TransferMultiTokenKMS();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multitokenTransactionTransferMultiTokenKMS($arg_transfer_multi_token_kms, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiTokenKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->multiTokensERC1155OrCompatible()->multitokenTransactionTransferMultiTokenKMS(): " . $exc->getMessage() . PHP_EOL;
}