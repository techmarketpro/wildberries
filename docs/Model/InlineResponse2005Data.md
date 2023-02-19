# InlineResponse2005Data

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imt_id** | **int** | Идентификатор карточки товара (нужен для группирования НМ в одно КТ) | [optional] 
**nm_id** | **int** | Числовой идентификатор номенклатуры Wildberries | [optional] 
**vendor_code** | **string** | Вендор код, текстовый идентификатор номенклатуры поставщика | [optional] 
**media_files** | **string[]** | Медиафайлы номенклатуры. &lt;br&gt;Фото, URL которого заканчивается на &lt;b&gt;1.jpg&lt;/b&gt; является главным в карточке. | [optional] 
**sizes** | [**\Wildberries\Client\Model\InlineResponse2005Sizes[]**](InlineResponse2005Sizes.md) |  | [optional] 
**characteristics** | **object[]** | Массив характеристик, индивидуальный для каждой категории | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

