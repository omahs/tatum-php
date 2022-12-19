# Tatum/Local/Wallet/XDC

XDC HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generateWallet) | Generate wallet
[**generateAddressFromXpub()**](#generateAddressFromXpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateAddressFromPrivateKey) | Generate address from xPub and index
[**generatePrivateKey()**](#generatePrivateKey) | Generate private key from mnemonic and index

## `generateWallet()`

```php
local()->wallet()->xdc()->generateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```
Generate wallet

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

try {
    /** @var \Tatum\Model\Wallet $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->xdc()
        ->generateWallet($mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->xdc()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../Model/Wallet.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../../README.md#local-wallet)

## `generateAddressFromXpub()`

```php
local()->wallet()->xdc()->generateAddressFromXpub(
    ?string $xpub, 
    ?int $index
): \Tatum\Model\GeneratedAddressBtc
```
Generate address from xPub and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Extended public key
$xpub = "xpub6EbLFMjuqrkUMBZzsu7u4QY9e1iUD6GRXHswW7cTTW3gx7BMcaK6EKujYkLuFCBQbX5PS4n3BpQDRvnaF1zfabo7FH9JGn56MkJKWkGjeHY";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->xdc()
        ->generateAddressFromXpub($xpub, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->xdc()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$xpub** | `string` | Extended public key | 
**$index** | `int` | Derivation index | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../../README.md#local-wallet)

## `generateAddressFromPrivateKey()`

```php
local()->wallet()->xdc()->generateAddressFromPrivateKey(
    ?\Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```
Generate address from xPub and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Private Key
$privateKey = (new \Tatum\Model\PrivKey())->setKey("0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->xdc()
        ->generateAddressFromPrivateKey($privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->xdc()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../Model/PrivKey.md) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../../README.md#local-wallet)

## `generatePrivateKey()`

```php
local()->wallet()->xdc()->generatePrivateKey(
    ?string $mnemonic, 
    ?int $index
): \Tatum\Model\PrivKey
```
Generate private key from mnemonic and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\PrivKey $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->xdc()
        ->generatePrivateKey($mnemonic, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->xdc()->generatePrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic | 
**$index** | `int` | Derivation index | 

### Return type

Private Key ([**\Tatum\Model\PrivKey**](../../Model/PrivKey.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../../README.md#local-wallet)