<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Cardano#operation/AdaGetUTXOByAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagetutxobyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address
$arg_address = 'Ae2tdPwUPEZMmrkRoduJW9w7wRvnTcdeMbw7yyyjwPqo6zuaeJaDEkHUJSz';

try {
    /** @var \Tatum\Model\AdaUTXO[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetUTXOByAddress($arg_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->cardano()->adaGetUTXOByAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->cardano()->adaGetUTXOByAddress(): " . $exc->getMessage() . PHP_EOL;
}