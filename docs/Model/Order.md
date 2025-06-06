# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | **Required if total_price is provided**&lt;br&gt; Currency of the &lt;code&gt;total_price&lt;/code&gt; and &lt;code&gt;total_tax&lt;/code&gt; amounts. | [optional]
**notes** | **string** | Custom buyer- or seller-provided notes about the order. | [optional]
**order_number** | **string** | An alphanumeric identifier for the order used by the seller/buyer. This identifier doesn&#39;t need to be unique. | [optional]
**order_status** | [**\OpenAPI\Client\Model\OrderStatusEnum**](OrderStatusEnum.md) |  | [optional]
**placed_at** | **string** | Date and time when the order was placed. This datetime can be different from the datetime of the order object creation on Shippo. |
**shipping_cost** | **string** | Amount paid by the buyer for shipping. This amount can be different from the price the seller will actually pay for shipping. | [optional]
**shipping_cost_currency** | **string** | **Required if shipping_cost is provided**&lt;br&gt; Currency of the &lt;code&gt;shipping_cost&lt;/code&gt; amount. | [optional]
**shipping_method** | **string** | Shipping method (carrier + service or other free text description) chosen by the buyer.  This value can be different from the shipping method the seller will actually choose. | [optional]
**subtotal_price** | **string** |  | [optional]
**total_price** | **string** | Total amount paid by the buyer for this order. | [optional]
**total_tax** | **string** | Total tax amount paid by the buyer for this order. | [optional]
**weight** | **string** | Total weight of the order. | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\WeightUnitEnum**](WeightUnitEnum.md) |  | [optional]
**from_address** | [**\OpenAPI\Client\Model\AddressFrom**](AddressFrom.md) |  | [optional]
**to_address** | [**\OpenAPI\Client\Model\AddressTo**](AddressTo.md) |  |
**line_items** | [**\OpenAPI\Client\Model\LineItem[]**](LineItem.md) | Array of &lt;a href&#x3D;\&quot;#section/Line-Item\&quot;&gt;line item&lt;/a&gt; objects representing the items in this order.  All objects will be returned expanded by default. | [optional]
**object_id** | **string** | Unique identifier of the order object. | [optional]
**object_owner** | **string** | Username of the user who created the object. | [optional]
**shop_app** | [**\OpenAPI\Client\Model\OrderShopAppEnum**](OrderShopAppEnum.md) |  | [optional]
**transactions** | **object[]** | Array of &lt;a href&#x3D;\&quot;#tag/Transactions\&quot;&gt;transaction&lt;/a&gt; objects representing all shipping labels purchased for this order. All objects are returned expanded with a limited number of fields by default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
