# TransferOneBlockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getCurrency()** | **string** | Currency of the transfer. |
**getNonce()** | **float** | Nonce to be set to ONE transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getAmount()** | **string** | Amount to be sent in One. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
