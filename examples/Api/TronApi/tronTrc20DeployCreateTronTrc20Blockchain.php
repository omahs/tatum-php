<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Tron#operation/tronTrc20DeployCreateTronTrc20Blockchain
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trontrc20deploycreatetrontrc20blockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_tron_trc20_blockchain = new \Tatum\Model\CreateTronTrc20Blockchain();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronTrc20DeployCreateTronTrc20Blockchain($arg_create_tron_trc20_blockchain);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->tronTrc20DeployCreateTronTrc20Blockchain(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->tronTrc20DeployCreateTronTrc20Blockchain(): " . $exc->getMessage() . PHP_EOL;
}