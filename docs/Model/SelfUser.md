# # SelfUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**email** | **string** |  |
**firstname** | **string** |  |
**lastname** | **string** |  |
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [readonly]
**organizations** | [**\OpenAPI\Client\Model\Organization[]**](Organization.md) |  | [readonly]
**clouds** | [**\OpenAPI\Client\Model\CloudRole[]**](CloudRole.md) |  | [readonly]
**projects** | [**\OpenAPI\Client\Model\ProjectRole[]**](ProjectRole.md) |  | [readonly]
**provider** | **string** |  | [readonly]
**provider_sub** | **string** | sub from original identity provider | [optional]
**sub** | **string** | sub from Keycloak | [readonly]
**profile_picture** | **string** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
