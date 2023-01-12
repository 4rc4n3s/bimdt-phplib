# # Viewpoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** |  | [optional]
**guid** | **string** |  | [optional]
**originating_system** | **string** | Name of the system in which the viewpoint is originated | [optional]
**authoring_tool_id** | **string** | System specific identifier of the viewpoint in the originating BIM tool | [optional]
**orthogonal_camera** | [**\OpenAPI\Client\Model\ViewpointOrthogonalCamera**](ViewpointOrthogonalCamera.md) |  | [optional]
**perspective_camera** | [**\OpenAPI\Client\Model\ViewpointPerspectiveCamera**](ViewpointPerspectiveCamera.md) |  | [optional]
**lines** | [**\OpenAPI\Client\Model\Line[]**](Line.md) |  | [optional]
**clipping_planes** | [**\OpenAPI\Client\Model\ClippingPlane[]**](ClippingPlane.md) |  | [optional]
**snapshot** | [**\OpenAPI\Client\Model\ViewpointSnapshot**](ViewpointSnapshot.md) |  | [optional]
**components** | [**\OpenAPI\Client\Model\ViewpointComponents**](ViewpointComponents.md) |  | [optional]
**pins** | [**\OpenAPI\Client\Model\Pin[]**](Pin.md) | Non standard field. Pins (or markers/annotations) are points of interest | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
