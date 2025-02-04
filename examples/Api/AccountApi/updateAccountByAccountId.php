<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Account#operation/updateAccountByAccountId
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#updateaccountbyaccountid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account ID
$arg_id = '5e68c66581f2ee32bc354087';

$arg_update_account = new \Tatum\Model\UpdateAccount();

try {
        $sdk
        ->mainnet()
        ->api()
        ->account()
        ->updateAccountByAccountId($arg_id, $arg_update_account);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->updateAccountByAccountId(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->updateAccountByAccountId(): " . $exc->getMessage() . PHP_EOL;
}