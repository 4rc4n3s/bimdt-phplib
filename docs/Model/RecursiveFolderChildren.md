# # RecursiveFolderChildren

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**parent_id** | **int** |  | [readonly]
**created_by** | [**\OpenAPI\Client\Model\RecursiveFolderChildrenCreatedBy**](RecursiveFolderChildrenCreatedBy.md) |  | [optional]
**creator** | [**\OpenAPI\Client\Model\RecursiveFolderChildrenCreatedBy**](RecursiveFolderChildrenCreatedBy.md) |  | [optional]
**type** | **string** | DEPRECATED: Use &#39;nature&#39; instead. Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Ifc&#39;. It is usefull to parse the tree and discriminate folders and files | [readonly]
**nature** | **string** | Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Model&#39;. It is usefull to parse the tree and discriminate folders and files | [readonly]
**model_type** | **string** | Model&#39;s type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD | [readonly]
**name** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**file_name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**size** | **int** |  | [optional]
**model_id** | **int** |  | [readonly]
**ifc_id** | **int** | DEPRECATED: Use &#39;model_id&#39; instead | [readonly]
**file** | **string** |  | [optional]
**groups_permissions** | [**\OpenAPI\Client\Model\FolderGroupPermission[]**](FolderGroupPermission.md) | Groups permissions of folder | [readonly]
**default_permission** | **int** | Default permissions of folder | [readonly]
**user_permission** | **int** | Aggregate of group user permissions and folder default permission | [readonly]
**history** | [**\OpenAPI\Client\Model\Document[]**](Document.md) | History of a document | [readonly]
**tags** | [**\OpenAPI\Client\Model\Tag[]**](Tag.md) | Tags of a document | [readonly]
**children** | [**\OpenAPI\Client\Model\RecursiveFolderChildren[]**](RecursiveFolderChildren.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
