# ListOderBookHistoryBody

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | Account ID. If present, only closed trades for given account will be present. | [optional]
**getCustomerId()** | **string** | Customer ID. If present, only closed trades for given customer will be present. | [optional]
**getPageSize()** | **float** | Max number of items per page is 50. |
**getOffset()** | **float** | Offset to obtain next page of the data. | [optional]
**getPair()** | **string** | Trade pair. If present, list historical trades for that pair. | [optional]
**getCount()** | **bool** | Get the total trade pair count based on the filter. Either count or pageSize is accepted. | [optional]
**getTypes()** | **string[]** | Trade types. | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Amount of the trade. AND is used between filter options. | [optional]
**getFill()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Fill of the trade. AND is used between filter options. | [optional]
**getPrice()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Price of the trade. AND is used between filter options. | [optional]
**getCreated()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Created date of the trade. AND is used between filter options. | [optional]
**getSort()** | **string[]** | Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array. | [optional]

[[Back to Index]](../index.md)
