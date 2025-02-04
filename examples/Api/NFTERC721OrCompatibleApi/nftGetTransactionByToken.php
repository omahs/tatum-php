<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/NFTERC721OrCompatible#operation/NftGetTransactionByToken
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = 'CELO';

// NFT Token ID.
$arg_token_id = 123;

// Address of the token smart contract
$arg_token_address = '0x1ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain next page of the data.
$arg_offset = 0;

// Transactions from this block onwards will be included.
$arg_from = 1087623;

// Transactions up to this block will be included.
$arg_to = 1087823;

try {
    /** @var \Tatum\Model\NftTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTransactionByToken($arg_chain, $arg_token_id, $arg_token_address, $arg_page_size, $arg_offset, $arg_from, $arg_to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->nftGetTransactionByToken(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->nftGetTransactionByToken(): " . $exc->getMessage() . PHP_EOL;
}