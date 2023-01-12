# # PatchedDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_id** | **int** |  | [optional]
**name** | **string** | Shown name of the file | [optional]
**file_name** | **string** | Full name of the file | [optional]
**description** | **string** | Description of the file | [optional]
**file** | **\SplFileObject** |  | [optional]
**size** | **int** | Size of the file. | [optional]
**model_source** | **string** | Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional]
**ifc_source** | **string** | DEPRECATED: Use &#39;model_source&#39; instead. Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional]
**successor_of** | **int** | Old document version to replace. Only for create | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
