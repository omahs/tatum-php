# DeployErc721

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the ERC721 token |
**symbol** | **string** | Symbol of the ERC721 token |
**from_private_key** | **string** | Private key of Ethereum account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)