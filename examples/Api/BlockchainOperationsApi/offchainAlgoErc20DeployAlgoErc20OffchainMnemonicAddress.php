<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offchainalgoerc20deployalgoerc20offchainmnemonicaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_algo_erc20_offchain_mnemonic_address = new \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress();

try {
    /** @var \Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress($arg_deploy_algo_erc20_offchain_mnemonic_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress(): " . $exc->getMessage() . PHP_EOL;
}