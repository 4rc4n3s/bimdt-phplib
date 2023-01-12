# # Model

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**name** | **string** |  | [optional]
**type** | **string** |  | [readonly]
**creator** | [**User**](User.md) |  | [readonly]
**status** | **string** |  | [readonly]
**source** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [readonly]
**document_id** | **int** |  | [readonly]
**document** | [**Document**](Document.md) |  | [readonly]
**structure_file** | **string** |  | [readonly]
**systems_file** | **string** |  | [readonly]
**map_file** | **string** |  | [readonly]
**gltf_file** | **string** |  | [readonly]
**bvh_tree_file** | **string** |  | [readonly]
**preview_file** | **string** |  | [readonly]
**viewer_360_file** | **string** | DEPRECATED: Use &#39;preview_file&#39; instead. | [readonly]
**xkt_file** | **string** |  | [readonly]
**project_id** | **int** |  | [readonly]
**world_position** | **float[]** | [x,y,z] array of the position of the local_placement in world coordinates | [optional]
**size_ratio** | **float** | How many meters a unit represents | [optional]
**errors** | **string[]** | List of errors that happened during IFC processing | [readonly]
**warnings** | **string[]** | List of warnings that happened during IFC processing | [readonly]
**archived** | **bool** |  | [optional]
**version** | **string** | This field is only for information. Updating it won&#39;t impact the export. | [optional]
**north_vector** | **float[][]** | This field is only for information. Updating it won&#39;t impact the export. | [optional]
**recommanded_2d_angle** | **float** | This is the angle in clockwise degree to apply on the 2D to optimise the horizontality of objects. This field is only for information. Updating it won&#39;t impact the export. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
