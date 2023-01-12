# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**parent_id** | **int** |  | [optional]
**created_by** | [**User**](User.md) |  | [readonly]
**project** | **int** |  | [readonly]
**name** | **string** | Shown name of the file |
**file_name** | **string** | Full name of the file | [optional]
**description** | **string** | Description of the file | [optional]
**file** | **string** |  |
**size** | **int** | Size of the file. | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag[]**](Tag.md) |  | [readonly]
**visas** | [**\OpenAPI\Client\Model\Visa[]**](Visa.md) |  | [readonly]
**created_at** | **\DateTime** | Creation date | [readonly]
**updated_at** | **\DateTime** | Date of the last update | [readonly]
**model_id** | **int** |  | [readonly]
**model_type** | **string** | Model&#39;s type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD | [readonly]
**ifc_id** | **int** | DEPRECATED: Use &#39;model_id&#39; instead. | [readonly]
**user_permission** | **int** | Aggregate of group user permissions and folder default permission | [readonly]
**is_head_version** | **bool** | Document is a head of version or is owned by another document | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
