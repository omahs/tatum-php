# ApproveErc20

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The address of the smart contract |
**getSpender()** | **string** | The blockchain address to be allowed to transfer or burn the fungible tokens |
**getAmount()** | **string** | The amount of the tokens allowed to be transferred or burnt |
**getFromPrivateKey()** | **string** | The private key of the smart contract's owner; the fee will be deducted from the owner's address |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
