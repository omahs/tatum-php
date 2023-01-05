<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Auction#operation/blockchainAuctionGenerateAuctionCeloKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#blockchainauctiongenerateauctioncelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_auction_celo_kms = new \Tatum\Model\GenerateAuctionCeloKMS();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->blockchainAuctionGenerateAuctionCeloKMS($arg_generate_auction_celo_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->auction()->blockchainAuctionGenerateAuctionCeloKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->auction()->blockchainAuctionGenerateAuctionCeloKMS(): " . $exc->getMessage() . PHP_EOL;
}