# Tatum/Api/PolygonApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**polygonBlockchainSmartContractInvocation()**](#polygonBlockchainSmartContractInvocation) | **POST** /v3/polygon/smartcontract | Invoke a method in a smart contract on Polygon
[**polygonBlockchainTransfer()**](#polygonBlockchainTransfer) | **POST** /v3/polygon/transaction | Send MATIC from account to account
[**polygonBroadcast()**](#polygonBroadcast) | **POST** /v3/polygon/broadcast | Broadcast signed Polygon transaction
[**polygonGenerateAddress()**](#polygonGenerateAddress) | **GET** /v3/polygon/address/{xpub}/{index} | Generate Polygon account address from Extended public key
[**polygonGenerateAddressPrivateKey()**](#polygonGenerateAddressPrivateKey) | **POST** /v3/polygon/wallet/priv | Generate Polygon private key
[**polygonGenerateWallet()**](#polygonGenerateWallet) | **GET** /v3/polygon/wallet | Generate Polygon wallet
[**polygonGetBalance()**](#polygonGetBalance) | **GET** /v3/polygon/account/balance/{address} | Get Polygon Account balance
[**polygonGetBlock()**](#polygonGetBlock) | **GET** /v3/polygon/block/{hash} | Get Polygon block by hash
[**polygonGetCurrentBlock()**](#polygonGetCurrentBlock) | **GET** /v3/polygon/block/current | Get current block number
[**polygonGetTransaction()**](#polygonGetTransaction) | **GET** /v3/polygon/transaction/{hash} | Get Polygon Transaction
[**polygonGetTransactionByAddress()**](#polygonGetTransactionByAddress) | **GET** /v3/polygon/account/transaction/{address} | Get Polygon transactions by address
[**polygonGetTransactionCount()**](#polygonGetTransactionCount) | **GET** /v3/polygon/transaction/count/{address} | Get count of outgoing Polygon transactions
[**polygonWeb3Driver()**](#polygonWeb3Driver) | **POST** /v3/polygon/web3/{xApiKey} | Web3 HTTP driver


## `polygonBlockchainSmartContractInvocation()`

```php
api()->polygon()->polygonBlockchainSmartContractInvocation(
    ?\Tatum\Model\PolygonBlockchainSmartContractInvocationRequest $polygon_blockchain_smart_contract_invocation_request
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

Invoke a method in a smart contract on Polygon

<b><p>2 credits per API call</p></b> <p>Invoke a method in an existing smart contract on Polygon.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Signing a transaction</b></p> <p>When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>If <b>caller</b> field is present instead of the private key, Tatum will sign the transaction with the managed private key connected to the caller address. This is applicable only for paid mainnet plans and all testnet plans. Keep in mind that the caller address must have enough access right to perform the action in the smart contract method.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$polygon_blockchain_smart_contract_invocation_request = new \Tatum\Model\PolygonBlockchainSmartContractInvocationRequest();

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonBlockchainSmartContractInvocation($polygon_blockchain_smart_contract_invocation_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$polygon_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\PolygonBlockchainSmartContractInvocationRequest**](../Model/PolygonBlockchainSmartContractInvocationRequest.md)|  |

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonBlockchainTransfer()`

```php
api()->polygon()->polygonBlockchainTransfer(
    ?\Tatum\Model\PolygonBlockchainTransferRequest $polygon_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send MATIC from account to account

<b><p>2 credits per API call</p></b> <p>Send MATIC from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending MATIC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$polygon_blockchain_transfer_request = new \Tatum\Model\PolygonBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonBlockchainTransfer($polygon_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$polygon_blockchain_transfer_request** | [**\Tatum\Model\PolygonBlockchainTransferRequest**](../Model/PolygonBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonBroadcast()`

```php
api()->polygon()->polygonBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

Broadcast signed Polygon transaction

<b><p>2 credits per API call</p></b> <p>Broadcast signed transaction to Polygon blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGenerateAddress()`

```php
api()->polygon()->polygonGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\PolygonGenerateAddress200Response
```

Generate Polygon account address from Extended public key

<b><p>1 credit per API call</p></b> <p>Generate Polygon account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Extended public key of wallet.
$xpub = 'xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid';

// Derivation index of desired address to be generated.
$index = 1;

try {
    /** @var \Tatum\Model\PolygonGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\PolygonGenerateAddress200Response**](../Model/PolygonGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGenerateAddressPrivateKey()`

```php
api()->polygon()->polygonGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate Polygon private key

<b><p>1 credit per API call</p></b> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$priv_key_request = new \Tatum\Model\PrivKeyRequest();

try {
    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGenerateWallet()`

```php
api()->polygon()->polygonGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate Polygon wallet

<b><p>1 credit per API call</p></b> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Polygon wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Polygon wallet.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Mnemonic to use for generation of extended public and private keys.
$mnemonic = 'mnemonic_example';

try {
    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetBalance()`

```php
api()->polygon()->polygonGetBalance(
    ?string $address
): \Tatum\Model\PolygonGetBalance200Response
```

Get Polygon Account balance

<b><p>1 credit per API call</p></b> <p>Get Polygon account balance in MATIC. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

try {
    /** @var \Tatum\Model\PolygonGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\PolygonGetBalance200Response**](../Model/PolygonGetBalance200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetBlock()`

```php
api()->polygon()->polygonGetBlock(
    ?string $hash
): \Tatum\Model\EthBlock
```

Get Polygon block by hash

<b><p>1 credit per API call</p></b> <p>Get Polygon block by block hash or block number.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or block number
$hash = 6470657;

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetCurrentBlock()`

```php
api()->polygon()->polygonGetCurrentBlock(
): float
```

Get current block number

<b><p>1 credit per API call</p></b> <p>Get Polygon current block number. This is the number of the latest block in the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetTransaction()`

```php
api()->polygon()->polygonGetTransaction(
    ?string $hash
): \Tatum\Model\PolygonTx
```

Get Polygon Transaction

<b><p>2 credits per API call</p></b> <p>Get Polygon transaction by transaction hash.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var \Tatum\Model\PolygonTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\PolygonTx**](../Model/PolygonTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetTransactionByAddress()`

```php
api()->polygon()->polygonGetTransactionByAddress(
    ?string $address, 
    ?float $page_size, 
    ?float $offset, 
    ?float $from, 
    ?float $to, 
    ?string $sort
): \Tatum\Model\PolygonTx[]
```

Get Polygon transactions by address

<b><p>1 credit per API call</p></b> <p>Get Polygon transactions by address. This includes incoming and outgoing transactions for the address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

// Transactions from this block onwards will be included.
$from = 1087623;

// Transactions up to this block will be included.
$to = 1087823;

// Sorting of the data. ASC - oldest first, DESC - newest first.
$sort = 'ASC';

try {
    /** @var \Tatum\Model\PolygonTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetTransactionByAddress($address, $page_size, $offset, $from, $to, $sort);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetTransactionByAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$from** | **float**| Transactions from this block onwards will be included. | [optional]
 **$to** | **float**| Transactions up to this block will be included. | [optional]
 **$sort** | **string**| Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]

### Return type

[**\Tatum\Model\PolygonTx[]**](../Model/PolygonTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonGetTransactionCount()`

```php
api()->polygon()->polygonGetTransactionCount(
    ?string $address
): float
```

Get count of outgoing Polygon transactions

<b><p>1 credit per API call</p></b> <p>Get a number of outgoing Polygon transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// address
$address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonGetTransactionCount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonGetTransactionCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `polygonWeb3Driver()`

```php
api()->polygon()->polygonWeb3Driver(
    ?string $x_api_key, 
    ?object $body
): object
```

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Polygon node provided by Tatum. To learn more about Polygon Web3, visit the <a href="https://docs.matic.network/" target="_blank">Polygon developer's guide</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$body = array('key' => new \stdClass);

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->polygon()
        ->polygonWeb3Driver($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling polygon()->polygonWeb3Driver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling polygon()->polygonWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |

### Return type

**object**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)