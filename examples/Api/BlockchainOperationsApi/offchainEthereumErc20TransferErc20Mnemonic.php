<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20TransferErc20Mnemonic
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offchainethereumerc20transfererc20mnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_erc20_mnemonic = new \Tatum\Model\TransferErc20Mnemonic();

try {
    /** @var \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->offchainEthereumErc20TransferErc20Mnemonic($arg_transfer_erc20_mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offchainEthereumErc20TransferErc20Mnemonic(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offchainEthereumErc20TransferErc20Mnemonic(): " . $exc->getMessage() . PHP_EOL;
}