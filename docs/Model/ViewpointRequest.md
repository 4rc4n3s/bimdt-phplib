# # ViewpointRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** |  | [optional]
**guid** | **string** |  | [optional]
**originating_system** | **string** | Name of the system in which the viewpoint is originated | [optional]
**authoring_tool_id** | **string** | System specific identifier of the viewpoint in the originating BIM tool | [optional]
**orthogonal_camera** | [**\OpenAPI\Client\Model\PatchedViewpointRequestOrthogonalCamera**](PatchedViewpointRequestOrthogonalCamera.md) |  | [optional]
**perspective_camera** | [**\OpenAPI\Client\Model\PatchedViewpointRequestPerspectiveCamera**](PatchedViewpointRequestPerspectiveCamera.md) |  | [optional]
**lines** | [**\OpenAPI\Client\Model\LineRequest[]**](LineRequest.md) |  | [optional]
**clipping_planes** | [**\OpenAPI\Client\Model\ClippingPlaneRequest[]**](ClippingPlaneRequest.md) |  | [optional]
**snapshot** | [**\OpenAPI\Client\Model\PatchedViewpointRequestSnapshot**](PatchedViewpointRequestSnapshot.md) |  | [optional]
**components** | [**\OpenAPI\Client\Model\PatchedViewpointRequestComponents**](PatchedViewpointRequestComponents.md) |  | [optional]
**pins** | [**\OpenAPI\Client\Model\PinRequest[]**](PinRequest.md) | Non standard field. Pins (or markers/annotations) are points of interest | [optional]
**temp_id** | **int** | Only used when using POST on the full-topic route to bind viewpoint with comment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
