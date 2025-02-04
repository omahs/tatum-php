# DeployKCSErc20OffchainMnemonicAddress

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Name of the ERC20 token - stored as a symbol on Blockchain |
**getSupply()** | **string** | max supply of ERC20 token. |
**getDescription()** | **string** | Description of the ERC20 token |
**getBasePair()** | **string** | Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**getAddress()** | **string** | Address on Ethereum blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both. |
**getMnemonic()** | **string** | Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both. |
**getIndex()** | **int** | derivation index of address to pay for deployment of ERC20 |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
