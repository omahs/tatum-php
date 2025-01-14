<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainPKXpub
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainpkxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_erc20_offchain_pk_xpub = new \Tatum\Model\DeployErc20OffchainPKXpub();

// Shard to operate on
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->offchainOneHrm20DeployErc20OffchainPKXpub($arg_deploy_erc20_offchain_pk_xpub, $arg_shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainPKXpub(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainPKXpub(): " . $exc->getMessage() . PHP_EOL;
}