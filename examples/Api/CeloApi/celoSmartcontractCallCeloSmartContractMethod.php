<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Celo#operation/celoSmartcontractCallCeloSmartContractMethod
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CeloApi.md#celosmartcontractcallcelosmartcontractmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_celo_smart_contract_method = new \Tatum\Model\CallCeloSmartContractMethod();

try {
    /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoSmartcontractCallCeloSmartContractMethod($arg_call_celo_smart_contract_method);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->celo()->celoSmartcontractCallCeloSmartContractMethod(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->celo()->celoSmartcontractCallCeloSmartContractMethod(): " . $exc->getMessage() . PHP_EOL;
}