# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор сборочного задания в Маркетплейсе | [optional] 
**rid** | **string** | Идентификатор сборочного задания в системе Wildberries | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Дата создания сборочного задания (RFC3339) | [optional] 
**warehouse_id** | **int** | Идентификатор склада продавца, на который поступило сборочное задание | [optional] 
**supply_id** | **string** | Идентификатор поставки. Возвращается, если заказ закреплён за поставкой | [optional] 
**priority_sc** | **string[]** | Массив приоритетных СЦ для доставки сборочного задания. Если поле не заполнено или массив пустой, приоритетного СЦ для данного сборочного задания нет | [optional] 
**offices** | **string[]** | Список офисов, куда следует привезти товар | [optional] 
**address** | [**\Wildberries\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional] 
**user** | [**\Wildberries\Client\Model\OrderUser**](OrderUser.md) |  | [optional] 
**skus** | **string[]** | Массив баркодов товара | [optional] 
**price** | **int** | Цена в валюте продажи с учетом всех скидок, умноженная на 100. Код валюты продажи в поле currencyCode. | [optional] 
**converted_price** | **int** | Цена в валюте продажи с учетом всех скидок, сконвертированная по курсу на момент продажи в российские копейки. Предоставляется в информационных целях. | [optional] 
**currency_code** | **int** | Код валюты продажи (ISO 4217) | [optional] 
**converted_currency_code** | **int** | Код валюты страны поставщика (ISO 4217) | [optional] 
**order_uid** | **string** | Идентификатор транзакции для группировки сборочных заданий. Сборочные задания в одной корзине покупателя будут иметь одинаковый orderUID | [optional] 
**delivery_type** | **string** | Тип доставки: fbs - доставка на склад Wildberries, dbs - доставка силами продавца | [optional] 
**nm_id** | **int** | Артикул товара в системе Wildberries | [optional] 
**chrt_id** | **int** | Идентификатор размера товара в системе Wildberries | [optional] 
**article** | **string** | Артикул продавца | [optional] 
**is_large_cargo** | [**Bool**](Bool.md) | сКГТ-признак товара, на который был сделан заказ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

