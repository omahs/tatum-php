<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Polygon#operation/polygonSmartcontractCallPolygonSmartContractMethodCaller
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygonsmartcontractcallpolygonsmartcontractmethodcaller
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_polygon_smart_contract_method_caller = new \Tatum\Model\CallPolygonSmartContractMethodCaller();

try {
    /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonSmartcontractCallPolygonSmartContractMethodCaller($arg_call_polygon_smart_contract_method_caller);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->polygon()->polygonSmartcontractCallPolygonSmartContractMethodCaller(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->polygon()->polygonSmartcontractCallPolygonSmartContractMethodCaller(): " . $exc->getMessage() . PHP_EOL;
}