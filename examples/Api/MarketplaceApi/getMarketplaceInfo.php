<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/GetMarketplaceInfo
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#getmarketplaceinfo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$arg_chain = 'SOL';

// Contract address
$arg_contract_address = '3MgkEwYY4b8iSX2yMLnbQ7n8KzNRKNAgTGJwVbEcKkUz';

try {
    /** @var \Tatum\Model\GetMarketplaceInfo200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceInfo($arg_chain, $arg_contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->getMarketplaceInfo(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->getMarketplaceInfo(): " . $exc->getMessage() . PHP_EOL;
}