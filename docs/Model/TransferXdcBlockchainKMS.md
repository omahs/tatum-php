# TransferXdcBlockchainKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | [optional]
**getCurrency()** | **string** | Currency of the transfer. |
**getTo()** | **string** | Blockchain address to send assets |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getAmount()** | **string** | Amount to be sent in XDC. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
