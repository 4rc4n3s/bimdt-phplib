# # MarketplaceApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**name** | **string** |  |
**short_description** | **string** |  |
**long_description** | **string** |  |
**activation_webhook_url** | **string** |  | [optional]
**post_activation_redirect_uri** | **string** |  | [optional]
**viewer_plugins_urls** | **string[]** |  | [optional]
**creator** | [**User**](User.md) |  | [readonly]
**scopes** | **string[]** |  | [readonly]
**settings_url** | **string** | this URL will be called with query params ?cloud_id&#x3D; | [optional]
**is_public** | **bool** |  | [readonly]
**tags** | **string[]** |  | [optional]
**logo** | **string** |  | [optional]
**file** | **string** |  | [optional]
**images** | [**\OpenAPI\Client\Model\MarketplaceAppImage[]**](MarketplaceAppImage.md) |  | [readonly]
**organization** | [**PublicOrganization**](PublicOrganization.md) |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
