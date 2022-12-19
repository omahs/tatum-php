# GenerateCustodialWalletCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. |
**enable_fungible_tokens** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**enable_non_fungible_tokens** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**enable_semi_fungible_tokens** | **bool** | If address should support ERC1155 tokens, it should be marked as true. |
**enable_batch_transactions** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**nonce** | **float** | Nonce to be set to the transaction. If not present, last known nonce will be used. | [optional]

[[Back to API list]](../../README.md#api-endpoints)