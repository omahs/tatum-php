<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Polygon#operation/PolygonWeb3Driver
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygonweb3driver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$arg_x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$arg_body = array('key' => new \stdClass);

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonWeb3Driver($arg_x_api_key, $arg_body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->polygon()->polygonWeb3Driver(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->polygon()->polygonWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}