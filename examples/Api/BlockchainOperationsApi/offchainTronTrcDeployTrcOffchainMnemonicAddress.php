<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainMnemonicAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainmnemonicaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_trc_offchain_mnemonic_address = new \Tatum\Model\DeployTrcOffchainMnemonicAddress();

try {
    /** @var \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->offchainTronTrcDeployTrcOffchainMnemonicAddress($arg_deploy_trc_offchain_mnemonic_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainMnemonicAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainMnemonicAddress(): " . $exc->getMessage() . PHP_EOL;
}