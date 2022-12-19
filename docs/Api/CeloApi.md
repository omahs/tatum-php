# Tatum/Api/CeloApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**celoBlockchainSmartContractInvocation()**](#celoBlockchainSmartContractInvocation) | **POST** /v3/celo/smartcontract | Invoke a method in a smart contract on Celo
[**celoBlockchainTransfer()**](#celoBlockchainTransfer) | **POST** /v3/celo/transaction | Send Celo / ERC20 from account to account
[**celoBroadcast()**](#celoBroadcast) | **POST** /v3/celo/broadcast | Broadcast signed Celo transaction
[**celoGenerateAddress()**](#celoGenerateAddress) | **GET** /v3/celo/address/{xpub}/{index} | Generate Celo account address from Extended public key
[**celoGenerateAddressPrivateKey()**](#celoGenerateAddressPrivateKey) | **POST** /v3/celo/wallet/priv | Generate Celo private key
[**celoGenerateWallet()**](#celoGenerateWallet) | **GET** /v3/celo/wallet | Generate Celo wallet
[**celoGetBalance()**](#celoGetBalance) | **GET** /v3/celo/account/balance/{address} | Get Celo Account balance
[**celoGetBlock()**](#celoGetBlock) | **GET** /v3/celo/block/{hash} | Get Celo block by hash
[**celoGetCurrentBlock()**](#celoGetCurrentBlock) | **GET** /v3/celo/block/current | Get current block number
[**celoGetTransaction()**](#celoGetTransaction) | **GET** /v3/celo/transaction/{hash} | Get Celo Transaction
[**celoGetTransactionByAddress()**](#celoGetTransactionByAddress) | **GET** /v3/celo/account/transaction/{address} | Get Celo transactions by address
[**celoGetTransactionCount()**](#celoGetTransactionCount) | **GET** /v3/celo/transaction/count/{address} | Get count of outgoing Celo transactions
[**celoWeb3Driver()**](#celoWeb3Driver) | **POST** /v3/celo/web3/{xApiKey} | Web3 HTTP driver


## `celoBlockchainSmartContractInvocation()`

```php
api()->celo()->celoBlockchainSmartContractInvocation(
    ?\Tatum\Model\CeloBlockchainSmartContractInvocationRequest $celo_blockchain_smart_contract_invocation_request
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

Invoke a method in a smart contract on Celo

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Celo.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Signing a transaction</b></p> <p>When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$celo_blockchain_smart_contract_invocation_request = new \Tatum\Model\CeloBlockchainSmartContractInvocationRequest();

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoBlockchainSmartContractInvocation($celo_blockchain_smart_contract_invocation_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\CeloBlockchainSmartContractInvocationRequest**](../Model/CeloBlockchainSmartContractInvocationRequest.md)|  |

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoBlockchainTransfer()`

```php
api()->celo()->celoBlockchainTransfer(
    ?\Tatum\Model\CeloBlockchainTransferRequest $celo_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send Celo / ERC20 from account to account

<p><b>2 credits per API call</b></p> <p>Send Celo, cUSD or Tatum supported ERC20 token from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending CELO, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$celo_blockchain_transfer_request = new \Tatum\Model\CeloBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoBlockchainTransfer($celo_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_blockchain_transfer_request** | [**\Tatum\Model\CeloBlockchainTransferRequest**](../Model/CeloBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoBroadcast()`

```php
api()->celo()->celoBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

Broadcast signed Celo transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Celo blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

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
        ->celo()
        ->celoBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGenerateAddress()`

```php
api()->celo()->celoGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\CeloGenerateAddress200Response
```

Generate Celo account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate Celo account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

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
    /** @var \Tatum\Model\CeloGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\CeloGenerateAddress200Response**](../Model/CeloGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGenerateAddressPrivateKey()`

```php
api()->celo()->celoGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate Celo private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

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
        ->celo()
        ->celoGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGenerateWallet()`

```php
api()->celo()->celoGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate Celo wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Celo wallet with derivation path m'/44'/52752'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Celo wallet.</p>

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
        ->celo()
        ->celoGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetBalance()`

```php
api()->celo()->celoGetBalance(
    ?string $address
): \Tatum\Model\CeloGetBalance200Response
```

Get Celo Account balance

<p><b>1 credit per API call</b></p> <p>Get Celo account balance in ETH. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

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
    /** @var \Tatum\Model\CeloGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\CeloGetBalance200Response**](../Model/CeloGetBalance200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetBlock()`

```php
api()->celo()->celoGetBlock(
    ?string $hash
): \Tatum\Model\CeloBlock
```

Get Celo block by hash

<p><b>1 credit per API call</b></p> <p>Get Celo block by block hash or block number.</p>

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
    /** @var \Tatum\Model\CeloBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |

### Return type

[**\Tatum\Model\CeloBlock**](../Model/CeloBlock.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetCurrentBlock()`

```php
api()->celo()->celoGetCurrentBlock(
): float
```

Get current block number

<p><b>1 credit per API call</b></p> <p>Get Celo current block number. This is the number of the latest block in the blockchain.</p>

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
        ->celo()
        ->celoGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetTransaction()`

```php
api()->celo()->celoGetTransaction(
    ?string $hash
): \Tatum\Model\CeloTx
```

Get Celo Transaction

<p><b>2 credits per API call</b></p> <p>Get Celo transaction by transaction hash.</p>

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
    /** @var \Tatum\Model\CeloTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\CeloTx**](../Model/CeloTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetTransactionByAddress()`

```php
api()->celo()->celoGetTransactionByAddress(
    ?string $address, 
    ?float $page_size, 
    ?float $offset, 
    ?float $from, 
    ?float $to, 
    ?string $sort
): \Tatum\Model\CeloTx[]
```

Get Celo transactions by address

<p><b>1 credit per API call</b></p> <p>Get Celo transactions by address. This includes incoming and outgoing transactions for the address.</p>

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
    /** @var \Tatum\Model\CeloTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoGetTransactionByAddress($address, $page_size, $offset, $from, $to, $sort);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetTransactionByAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
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

[**\Tatum\Model\CeloTx[]**](../Model/CeloTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoGetTransactionCount()`

```php
api()->celo()->celoGetTransactionCount(
    ?string $address
): float
```

Get count of outgoing Celo transactions

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing Celo transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

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
        ->celo()
        ->celoGetTransactionCount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoGetTransactionCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `celoWeb3Driver()`

```php
api()->celo()->celoWeb3Driver(
    ?string $x_api_key, 
    ?object $body
): object
```

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Celo node provided by Tatum. To learn more about Celo Web3, visit the <a href="https://explorer.celo.org/api-docs" target="_blank">Celo developer's guide</a>.</p>

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
        ->celo()
        ->celoWeb3Driver($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling celo()->celoWeb3Driver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling celo()->celoWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
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