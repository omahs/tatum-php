# GetMarketplaceInfo200Response

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFeeAccount()** | **string** | Fee Account Address |
**getTreasuryAccount()** | **string** | Treasury Account Address |
**getAuthority()** | **string** | Authority Address |
**getCreator()** | **string** | Creator Address |
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**getTreasuryMint()** | **string** | Address of a SPL token contract |
**getTreasuryWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace treasury account to own address |
**getFeeWithdrawalDestination()** | **string** | The address that will be able to withdraw funds from the marketplace fee account to own address |
**getRequiresSignOff()** | **bool** | If set to "true", the marketplace must sign all operations related to the listings and sales. |
**getCanChangeSalePrice()** | **bool** | If set to "true", the marketplace can change the sale price that the seller intentionally set to 0. |

[[Back to Index]](../index.md)
