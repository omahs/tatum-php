# ApproveNftSpending

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getSpender()** | **string** | The blockchain address of the auction/marketplace smart contract |
**getIsErc721()** | **bool** | Set to "true" if the asset is an NFT; set to "false" is the asset is a Multi Token |
**getTokenId()** | **string** | The ID of the asset (NFT or Multi Token) |
**getContractAddress()** | **string** | The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
