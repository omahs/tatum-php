<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Auction#operation/blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#blockchainauctionrecipientupdatefeerecipientceloupdate
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_update_fee_recipient_celo = new \Tatum\Model\UpdateFeeRecipientCelo();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate($arg_update_fee_recipient_celo);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->auction()->blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate(): " . $exc->getMessage() . PHP_EOL;
}