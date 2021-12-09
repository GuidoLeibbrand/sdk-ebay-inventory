# # OfferResponseWithListingId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\ld\php\sdkEbayInventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more errors associated with publishing the offer. | [optional]
**listingId** | **string** | The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing. | [optional]
**offerId** | **string** | The unique identifier of the offer that the seller published (or attempted to publish). | [optional]
**statusCode** | **int** | The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the &lt;strong&gt;offerId&lt;/strong&gt; field. See the &lt;strong&gt;HTTP status codes&lt;/strong&gt; table to see which each status code indicates. | [optional]
**warnings** | [**\ld\php\sdkEbayInventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more warnings associated with publishing the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
