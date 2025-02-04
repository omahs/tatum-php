# TransactionFilterLedger

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Source account - source of transaction(s). | [optional]
**getCounterAccount()** | **string** | Counter account - transaction(s) destination account. | [optional]
**getCurrency()** | **string** | Currency of the transactions. | [optional]
**getFrom()** | **int** | Starting date to search for transactions from in UTC millis. If not present, search all history. | [optional]
**getAmount()** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Amount of the transaction. AND is used between filter options. | [optional]
**getCurrencies()** | **string[]** | List of currencies of the transactions. | [optional]
**getTransactionType()** | **string** | Type of payment | [optional]
**getTransactionTypes()** | **string[]** | Types of payment | [optional]
**getOpType()** | **string** | Type of operation. | [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**getPaymentId()** | **string** | Payment ID defined in payment order by sender. | [optional]
**getRecipientNote()** | **string** | Recipient note defined in payment order by sender. | [optional]
**getSenderNote()** | **string** | Sender note defined in payment order by sender. | [optional]
**getTo()** | **int** | Date until to search for transactions in UTC millis. If not present, search up till now. | [optional]

[[Back to Index]](../index.md)
