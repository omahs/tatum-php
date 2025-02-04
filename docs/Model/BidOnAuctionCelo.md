# BidOnAuctionCelo

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getContractAddress()** | **string** | Address of the auction smart contract. |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getBidder()** | **string** | In case of the ERC20 auction, it's possible to bid on behalf of someone else. This value is the address of the bidder, which should approve spending of the ERC20 tokens for the Auction contract. This could be used for a bidding from the custodial wallet address. | [optional]
**getId()** | **string** | ID of the auction. |
**getBidValue()** | **string** | Amount of the assets to be bid. This must include auction fee. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
