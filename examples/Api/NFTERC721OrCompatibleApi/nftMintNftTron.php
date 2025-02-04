<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/NFTERC721OrCompatible#operation/nftMintNftTron
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#nftmintnfttron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_mint_nft_tron = new \Tatum\Model\MintNftTron();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftMintNftExpress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftMintNftTron($arg_mint_nft_tron, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->nftMintNftTron(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->nftMintNftTron(): " . $exc->getMessage() . PHP_EOL;
}