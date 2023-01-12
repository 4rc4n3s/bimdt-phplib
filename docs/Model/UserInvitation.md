# # UserInvitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**redirect_uri** | **string** | User will be redirected to this uri when they accept the invitation |
**cloud_id** | **int** |  | [readonly]
**cloud_name** | **string** |  |
**project_id** | **int** |  | [readonly]
**project_name** | **string** |  | [optional]
**status** | **string** | A: Accepted         D: Denied         P: Pending | [optional]
**client_name** | **string** |  |
**sender** | [**\OpenAPI\Client\Model\User**](User.md) |  |
**created_at** | **\DateTime** |  | [readonly]
**responded_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
