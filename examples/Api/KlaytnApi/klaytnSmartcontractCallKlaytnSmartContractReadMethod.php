<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Klaytn#operation/klaytnSmartcontractCallKlaytnSmartContractReadMethod
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KlaytnApi.md#klaytnsmartcontractcallklaytnsmartcontractreadmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_klaytn_smart_contract_read_method = new \Tatum\Model\CallKlaytnSmartContractReadMethod();

try {
    /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->klaytn()
        ->klaytnSmartcontractCallKlaytnSmartContractReadMethod($arg_call_klaytn_smart_contract_read_method);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->klaytn()->klaytnSmartcontractCallKlaytnSmartContractReadMethod(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->klaytn()->klaytnSmartcontractCallKlaytnSmartContractReadMethod(): " . $exc->getMessage() . PHP_EOL;
}