<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolanaKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_cancel_sell_asset_on_marketplace_solana_kms = new \Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS();

try {
    /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolanaKMS($arg_cancel_sell_asset_on_marketplace_solana_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolanaKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}