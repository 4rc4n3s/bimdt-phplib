# # Visa

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**validations** | [**\OpenAPI\Client\Model\VisaValidation[]**](VisaValidation.md) |  | [readonly]
**validations_in_error** | **int[]** | Validation IDs where one or more validators have no longer access to the visa document. | [readonly]
**creator** | [**UserProject**](UserProject.md) |  | [readonly]
**document_id** | **int** |  | [readonly]
**status** | **string** |  | [readonly]
**description** | **string** | Description of the visa | [optional]
**comments** | [**\OpenAPI\Client\Model\VisaComment[]**](VisaComment.md) |  | [readonly]
**deadline** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
