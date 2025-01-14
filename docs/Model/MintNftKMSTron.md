# MintNftKMSTron

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the NFT to |
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on |
**getTokenId()** | **string** | The ID of the NFT |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**getAccount()** | **string** | The blockchain address that will pay the fee for the transaction |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | [optional]
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX | [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency | [optional]

[[Back to Index]](../index.md)
