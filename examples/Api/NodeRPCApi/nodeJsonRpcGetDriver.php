<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/NodeRPC#operation/NodeJsonRpcGetDriver
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NodeRPCApi.md#nodejsonrpcgetdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to communicate with.
$arg_chain = 'ALGO';

// Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
$arg_x_api_key = 'ea8ce228-6ca3-465c-abb0-fd3c5d35c0d5';

// Type of the node to access for Algorand.
$arg_node_type = 'node_type_example';

// Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
$arg_rpc_path = 'v2/accounts';

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nodeRPC()
        ->nodeJsonRpcGetDriver($arg_chain, $arg_x_api_key, $arg_node_type, $arg_rpc_path);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nodeRPC()->nodeJsonRpcGetDriver(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nodeRPC()->nodeJsonRpcGetDriver(): " . $exc->getMessage() . PHP_EOL;
}