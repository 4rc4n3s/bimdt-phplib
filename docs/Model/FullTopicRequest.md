# # FullTopicRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** |  | [optional]
**creation_date** | **\DateTime** |  | [optional]
**creation_author** | **string** |  | [optional]
**modified_author** | **string** |  | [optional]
**title** | **string** |  |
**description** | **string** |  | [optional]
**reference_links** | **string[]** |  | [optional]
**ifcs** | **int[]** | DEPRECATED: Use &#39;models&#39; instead | [optional]
**models** | **int[]** |  | [optional]
**labels** | **string[]** |  | [optional]
**topic_type** | **string** |  | [optional]
**topic_status** | **string** |  | [optional]
**stage** | **string** |  | [optional]
**priority** | **string** |  | [optional]
**index** | **int** |  | [optional]
**assigned_to** | **string** |  | [optional]
**format** | **string** | The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \&quot;standard\&quot;.         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \&quot;standard\&quot; format. | [optional]
**due_date** | **\DateTime** |  | [optional]
**comments** | [**\OpenAPI\Client\Model\CommentRequest[]**](CommentRequest.md) |  | [optional]
**viewpoints** | [**\OpenAPI\Client\Model\ViewpointRequest[]**](ViewpointRequest.md) |  | [optional]
**project** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
