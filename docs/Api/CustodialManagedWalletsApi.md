# Tatum/Api/CustodialManagedWalletsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**custodialCreateWallet()**](#custodialCreateWallet) | **POST** /v3/custodial/wallet | Create managed address
[**custodialDeleteWallet()**](#custodialDeleteWallet) | **DELETE** /v3/custodial/wallet/{id} | Delete managed address
[**custodialGetWallet()**](#custodialGetWallet) | **GET** /v3/custodial/wallet/{id} | Get managed address
[**custodialGetWallets()**](#custodialGetWallets) | **GET** /v3/custodial/wallet | Get managed addresses
[**custodialTransferManagedAddress()**](#custodialTransferManagedAddress) | **POST** /v3/custodial/transaction | Sign and transfer using managed address


## `custodialCreateWallet()`

```php
api()->custodialManagedWallets()->custodialCreateWallet(
    ?\Tatum\Model\CustodialCreateWalletRequest $custodial_create_wallet_request
): \Tatum\Model\CustodialManagedAddress
```

Create managed address

<h4>2 credits per API call, 10 credits for each managed wallet every day.</h4><br/> <p>Create new managed address for a specific chain. If the address is mainnet or testnet one depends on the API Key - testnet API Key manages testnet addresses, mainnet API Key manages mainnet addresses. Result of the operation is address and walletId, which is used for identifying the wallet later on and/or exporting the private key if needed.<br/> Free users can manage only 10 addresses per API Key. </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$custodial_create_wallet_request = new \Tatum\Model\CustodialCreateWalletRequest();

try {
    /** @var \Tatum\Model\CustodialManagedAddress $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialCreateWallet($custodial_create_wallet_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling custodialManagedWallets()->custodialCreateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling custodialManagedWallets()->custodialCreateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$custodial_create_wallet_request** | [**\Tatum\Model\CustodialCreateWalletRequest**](../Model/CustodialCreateWalletRequest.md)|  | [optional]

### Return type

[**\Tatum\Model\CustodialManagedAddress**](../Model/CustodialManagedAddress.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `custodialDeleteWallet()`

```php
api()->custodialManagedWallets()->custodialDeleteWallet(
    ?string $id
)
```

Delete managed address

<h4>1 credit per API call.</h4><br/> <p>Delete managed address. Once deleted, the address won't be charged in a daily credit usage, but it <b>won't be possible to get the private key</b> for it.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// WalletID of the managed address
$id = '3ad54647-4166-4d34-9186-fd46caaba945';

try {
        $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialDeleteWallet($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling custodialManagedWallets()->custodialDeleteWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling custodialManagedWallets()->custodialDeleteWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| WalletID of the managed address |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `custodialGetWallet()`

```php
api()->custodialManagedWallets()->custodialGetWallet(
    ?string $id, 
    ?bool $export
): \Tatum\Model\CustodialManagedAddress[]
```

Get managed address

<h4>1 credit per API call.</h4><br/> <p>Get managed address for an API Key. It's possible to export the private key, if query parameter <b>export</b> is set to true.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// WalletID of the managed address
$id = '3ad54647-4166-4d34-9186-fd46caaba945';

// If set to "true", returns the private key in the response; if not set, defaults to "false" (the private key is not included in the response)
$export = 'false';

try {
    /** @var \Tatum\Model\CustodialManagedAddress[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialGetWallet($id, $export);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling custodialManagedWallets()->custodialGetWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling custodialManagedWallets()->custodialGetWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| WalletID of the managed address |
 **$export** | **bool**| If set to \&quot;true\&quot;, returns the private key in the response; if not set, defaults to \&quot;false\&quot; (the private key is not included in the response) | [optional] [default to false]

### Return type

[**\Tatum\Model\CustodialManagedAddress[]**](../Model/CustodialManagedAddress.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `custodialGetWallets()`

```php
api()->custodialManagedWallets()->custodialGetWallets(
): \Tatum\Model\CustodialManagedAddress[]
```

Get managed addresses

<h4>1 credit per API call.</h4><br/> <p>Get all managed addresses for an API Key.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\CustodialManagedAddress[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialGetWallets();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling custodialManagedWallets()->custodialGetWallets(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling custodialManagedWallets()->custodialGetWallets(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\CustodialManagedAddress[]**](../Model/CustodialManagedAddress.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `custodialTransferManagedAddress()`

```php
api()->custodialManagedWallets()->custodialTransferManagedAddress(
    ?\Tatum\Model\TransferManagedAddress $transfer_managed_address
): \Tatum\Model\TransactionHash
```

Sign and transfer using managed address

<h4>2 credits per API call, additional credits are charged for each gas covered operation.</h4><br/> <p>Sign transaction and transfer assets from a custodial managed address.<br/> Supported chains: <ul> <li><b>Solana</b></li> </ul> <br/> Logic for <b>Solana</b><br/> In Solana, it's possible to cover the fees connected to any arbitrary transaction by a third party. Tatum can cover these fees for any transaction on the Solana blockchain - transfer of SOL, SPL tokens, minting or transferring NFTs or invoking programs. In order to do this, Tatum fee address must be used as a feePayer address during transaction creation: <table> <tr><td></td><td><b>Mainnet address</b></td><td><b>Devnet address</b></td></tr> <tr><td><b>Address</b></td><td>DSpHmb7hLnetoybammcJBJiyqMVR3pDhCuW6hqVg9eBF</td><td>DSpHmb7hLnetoybammcJBJiyqMVR3pDhCuW6hqVg9eBF</td></tr> </table> Once transaction is constructed using <a href="https://github.com/solana-labs/solana-web3.js/" target="_blank">Solana SDK</a>, it can be serialized to HEX data string, which is then passed to the API and signed.<br/> Transaction could require multiple private keys for signing - fee payer, sender of the SOL assets, minting key during NFT mint operation etc. Some of the keys are used in Tatum - fee payer, or, in case of managed wallet holding SOL assets, the key of that managed wallet - those must be referenced in a list of walletIds to be used. For external keys, which are not managed by Tatum, those could either sign the transaction before it's serialization, or could be passed to the API in it's raw form - this is OK only for keys, which could be exposed and there is no harm of loosing assets on them.<br/> How to partially sign the transaction could be found <a href="https://solanacookbook.com/references/offline-transactions.html#partial-sign-transaction" target="_blank">here</a>.<br/> <b>Fee payer key is used by default, doesn't have to be mentioned in the list of wallets used for signing.</b><br/><br/> <b>Examples of different transaction payloads.</b><br/><br/> 1. Send SOL from account HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58 to FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU <pre> import { LAMPORTS_PER_SOL, PublicKey, SystemProgram, Transaction, Connection } from '@solana/web3.js'  const connection = new Connection('https://api.tatum.io/v3/blockchain/node/SOL') const from = 'HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58' const to = 'FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU' const amount = '0.000001' const devnet_fee_payer = '5zPr5331CtBjgVeLedhmJPEpFaUsorLCnb3aCQPsUc9w' const fromPubkey = new PublicKey(from) const transaction = new Transaction({ feePayer: new PublicKey(devnet_fee_payer) }) transaction.add(   SystemProgram.transfer({     fromPubkey: fromPubkey,     toPubkey: new PublicKey(to),     lamports: new BigNumber(amount).multipliedBy(LAMPORTS_PER_SOL).toNumber(),   }), ) const { blockhash, lastValidBlockHeight } = await connection.getLatestBlockhash('finalized') transaction.recentBlockhash = blockhash transaction.lastValidBlockHeight = lastValidBlockHeight transaction.partialSign(...signers) return transaction.serialize({ requireAllSignatures: false }).toString('hex') </pre> For the above example, developer have 2 options how to sign transaction - if the sender address HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58 is managed using a Tatum managed wallet with id 0b1eae3d-2520-4903-8bbf-5dec3ad2a5d4, the final payload to the custodial/transaction endpoint should look like this: <pre> {   "chain": "SOL",   "txData": "020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000",   "walletIds": [     {       "key": "0b1eae3d-2520-4903-8bbf-5dec3ad2a5d4",       "type": "MANAGED"     }   ] } </pre> If the sender address is not managed, the transaction could be signed with the private key of that address before the serialization and the payload will look like this: <pre> {   "chain": "SOL",   "txData": "020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000",   "walletIds": [] } </pre> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transfer_managed_address = new \Tatum\Model\TransferManagedAddress();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->custodialManagedWallets()
        ->custodialTransferManagedAddress($transfer_managed_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling custodialManagedWallets()->custodialTransferManagedAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling custodialManagedWallets()->custodialTransferManagedAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_managed_address** | [**\Tatum\Model\TransferManagedAddress**](../Model/TransferManagedAddress.md)|  | [optional]

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)