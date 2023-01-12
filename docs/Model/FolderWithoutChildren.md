# # FolderWithoutChildren

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**parent_id** | **int** |  | [optional]
**type** | **string** | DEPRECATED: Use &#39;nature&#39; instead. Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files | [readonly]
**nature** | **string** | Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files | [readonly]
**name** | **string** | Name of the folder |
**created_at** | **\DateTime** | Creation date | [readonly]
**updated_at** | **\DateTime** | Date of the last update | [readonly]
**created_by** | [**User**](User.md) |  | [readonly]
**groups_permissions** | [**\OpenAPI\Client\Model\FolderGroupPermission[]**](FolderGroupPermission.md) |  | [readonly]
**default_permission** | **int** | Permission for a Folder | [optional]
**user_permission** | **int** | Aggregate of group user permissions and folder default permission | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
