# GenerateMarketplaceCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_recipient** | **string** | Address of the recipient of the fee for the trade. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**marketplace_fee** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to &lt;code&gt;100&lt;/code&gt;; to set 10%, set this parameter to &lt;code&gt;1000&lt;/code&gt;; to set 50%, set this parameter to &lt;code&gt;5000&lt;/code&gt;, and so on. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)