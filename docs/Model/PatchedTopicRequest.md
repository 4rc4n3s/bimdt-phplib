# # PatchedTopicRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** |  | [optional]
**topic_type** | **string** |  | [optional]
**topic_status** | **string** |  | [optional]
**title** | **string** |  | [optional]
**priority** | **string** |  | [optional]
**labels** | **string[]** |  | [optional]
**creation_date** | **\DateTime** |  | [optional]
**creation_author** | **string** |  | [optional]
**modified_author** | **string** |  | [optional]
**assigned_to** | **string** |  | [optional]
**reference_links** | **string[]** |  | [optional]
**stage** | **string** |  | [optional]
**description** | **string** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**ifcs** | **int[]** | DEPRECATED: Use &#39;models&#39; instead | [optional]
**models** | **int[]** |  | [optional]
**format** | **string** | The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \&quot;standard\&quot;.         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \&quot;standard\&quot; format. | [optional]
**index** | **int** |  | [optional]
**project** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
