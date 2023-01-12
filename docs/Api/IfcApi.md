# OpenAPI\Client\IfcApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIfcErrorsDeprecated()**](IfcApi.md#addIfcErrorsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/errors | Add errors to model |
| [**bulkDeleteIfcClassificationsDeprecated()**](IfcApi.md#bulkDeleteIfcClassificationsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements |
| [**bulkDeleteIfcPropertiesDeprecated()**](IfcApi.md#bulkDeleteIfcPropertiesDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_destroy | Delete many Property of a model |
| [**bulkDeleteIfcPropertyDefinitionsDeprecated()**](IfcApi.md#bulkDeleteIfcPropertyDefinitionsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model |
| [**bulkDeleteIfcUnitsDeprecated()**](IfcApi.md#bulkDeleteIfcUnitsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/bulk_destroy | Delete many Units of a model |
| [**bulkDeletePropertySetDeprecated()**](IfcApi.md#bulkDeletePropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model |
| [**bulkFullUpdateElementsDeprecated()**](IfcApi.md#bulkFullUpdateElementsDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined) |
| [**bulkFullUpdateIfcPropertyDeprecated()**](IfcApi.md#bulkFullUpdateIfcPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update some fields of many properties of a model |
| [**bulkRemoveClassificationsOfElementDeprecated()**](IfcApi.md#bulkRemoveClassificationsOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element |
| [**bulkRemoveDocumentsOfElementDeprecated()**](IfcApi.md#bulkRemoveDocumentsOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element |
| [**bulkRemoveElementsFromClassificationDeprecated()**](IfcApi.md#bulkRemoveElementsFromClassificationDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements |
| [**bulkUpdateElementsDeprecated()**](IfcApi.md#bulkUpdateElementsDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (all field must be defined) |
| [**bulkUpdateIfcPropertyDeprecated()**](IfcApi.md#bulkUpdateIfcPropertyDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update all fields of many properties of a model |
| [**createAccessTokenDeprecated()**](IfcApi.md#createAccessTokenDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Create a token for this model |
| [**createBuildingDeprecated()**](IfcApi.md#createBuildingDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Create a building of a model |
| [**createBuildingPlanDeprecated()**](IfcApi.md#createBuildingPlanDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building |
| [**createCheckerDeprecated()**](IfcApi.md#createCheckerDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Create a checker to a model |
| [**createCheckerResultDeprecated()**](IfcApi.md#createCheckerResultDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Create a CheckerResult |
| [**createClassificationElementRelationsDeprecated()**](IfcApi.md#createClassificationElementRelationsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | Create association between existing classification and existing element |
| [**createClassificationsOfElementDeprecated()**](IfcApi.md#createClassificationsOfElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Create one or many classifications to an element |
| [**createElementDeprecated()**](IfcApi.md#createElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Create an element in the model |
| [**createElementPropertySetDeprecated()**](IfcApi.md#createElementPropertySetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element |
| [**createElementPropertySetPropertyDefinitionDeprecated()**](IfcApi.md#createElementPropertySetPropertyDefinitionDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property |
| [**createElementPropertySetPropertyDefinitionUnitDeprecated()**](IfcApi.md#createElementPropertySetPropertyDefinitionUnitDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition |
| [**createElementPropertySetPropertyDeprecated()**](IfcApi.md#createElementPropertySetPropertyDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet |
| [**createIfcDeprecated()**](IfcApi.md#createIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-model | Make a PDF or Image file a Model |
| [**createIfcPropertyDefinitionDeprecated()**](IfcApi.md#createIfcPropertyDefinitionDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Create a PropertyDefinition on the model |
| [**createIfcUnitDeprecated()**](IfcApi.md#createIfcUnitDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Create a Unit on a model |
| [**createLayerDeprecated()**](IfcApi.md#createLayerDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Create a layer in the model |
| [**createMetaBuildingDeprecated()**](IfcApi.md#createMetaBuildingDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-metabuilding | Create an empty 3D Model |
| [**createPropertySetDeprecated()**](IfcApi.md#createPropertySetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Create one or many PropertySet |
| [**createPropertySetElementRelationsDeprecated()**](IfcApi.md#createPropertySetElementRelationsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset-element | Create association between PropertySet and element |
| [**createRawElementsDeprecated()**](IfcApi.md#createRawElementsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Create elements in an optimized format |
| [**createSpaceDeprecated()**](IfcApi.md#createSpaceDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Create a space in the model |
| [**createStoreyDeprecated()**](IfcApi.md#createStoreyDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Create a storey of a model |
| [**createStoreyPlanDeprecated()**](IfcApi.md#createStoreyPlanDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey |
| [**createSystemDeprecated()**](IfcApi.md#createSystemDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Create a system in the model |
| [**createTilesetDeprecated()**](IfcApi.md#createTilesetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Create the tileset of the model and upload all files |
| [**createZoneDeprecated()**](IfcApi.md#createZoneDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Create a zone in the model |
| [**createZoneSpaceDeprecated()**](IfcApi.md#createZoneSpaceDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Create a space in a zone |
| [**deleteAccessTokenDeprecated()**](IfcApi.md#deleteAccessTokenDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Delete a token |
| [**deleteBuildingDeprecated()**](IfcApi.md#deleteBuildingDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Delete a building of a model |
| [**deleteBuildingPlanDeprecated()**](IfcApi.md#deleteBuildingPlanDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building |
| [**deleteCheckerDeprecated()**](IfcApi.md#deleteCheckerDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Delete a checker of a model |
| [**deleteCheckerResultDeprecated()**](IfcApi.md#deleteCheckerResultDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult |
| [**deleteElementDeprecated()**](IfcApi.md#deleteElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Delete an element of a model |
| [**deleteIfcDeprecated()**](IfcApi.md#deleteIfcDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Delete a model |
| [**deleteIfcPropertyDefinitionDeprecated()**](IfcApi.md#deleteIfcPropertyDefinitionDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model |
| [**deleteIfcPropertyDeprecated()**](IfcApi.md#deleteIfcPropertyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Delete a Property of a model |
| [**deleteIfcUnitDeprecated()**](IfcApi.md#deleteIfcUnitDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Delete a Unit of a model |
| [**deleteIfcWithoutDocDeprecated()**](IfcApi.md#deleteIfcWithoutDocDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/delete-model | Delete the Model without deleting the related document |
| [**deleteLayerDeprecated()**](IfcApi.md#deleteLayerDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Delete a layer of a model |
| [**deletePropertySetDeprecated()**](IfcApi.md#deletePropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Delete a PropertySet of a model |
| [**deleteSpaceDeprecated()**](IfcApi.md#deleteSpaceDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Delete a space |
| [**deleteStoreyDeprecated()**](IfcApi.md#deleteStoreyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Delete a storey of a model |
| [**deleteStoreyPlanDeprecated()**](IfcApi.md#deleteStoreyPlanDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey |
| [**deleteSystemDeprecated()**](IfcApi.md#deleteSystemDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Delete a system of a model |
| [**deleteZoneDeprecated()**](IfcApi.md#deleteZoneDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Delete a zone of a model |
| [**deleteZoneSpaceDeprecated()**](IfcApi.md#deleteZoneSpaceDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone |
| [**exportIfcDeprecated()**](IfcApi.md#exportIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/export | Export IFC |
| [**fullUpdateElementDeprecated()**](IfcApi.md#fullUpdateElementDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update all fields of an element |
| [**getAccessTokenDeprecated()**](IfcApi.md#getAccessTokenDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Retrieve one token created for this model |
| [**getAccessTokensDeprecated()**](IfcApi.md#getAccessTokensDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Retrieve all tokens created for this model |
| [**getBuildingDeprecated()**](IfcApi.md#getBuildingDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Retrieve a building of a model |
| [**getBuildingPlanPositioningDeprecated()**](IfcApi.md#getBuildingPlanPositioningDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building |
| [**getBuildingsDeprecated()**](IfcApi.md#getBuildingsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Retrieve all buildings of a model |
| [**getCheckerDeprecated()**](IfcApi.md#getCheckerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Retrieve a checker of a model |
| [**getCheckerResultDeprecated()**](IfcApi.md#getCheckerResultDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult |
| [**getCheckerResultsDeprecated()**](IfcApi.md#getCheckerResultsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults |
| [**getCheckersDeprecated()**](IfcApi.md#getCheckersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Retrieve all checkers of a model |
| [**getClassificationsOfElementDeprecated()**](IfcApi.md#getClassificationsOfElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element |
| [**getDocumentsOfElementDeprecated()**](IfcApi.md#getDocumentsOfElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Retrieve all documents of an element |
| [**getElementDeprecated()**](IfcApi.md#getElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Retrieve an element of a model |
| [**getElementLinkedDocumentsDeprecated()**](IfcApi.md#getElementLinkedDocumentsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/documents | Retrieve all documents linked to any element |
| [**getElementPropertySetDeprecated()**](IfcApi.md#getElementPropertySetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element |
| [**getElementPropertySetPropertiesDeprecated()**](IfcApi.md#getElementPropertySetPropertiesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet |
| [**getElementPropertySetPropertyDefinitionDeprecated()**](IfcApi.md#getElementPropertySetPropertyDefinitionDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property |
| [**getElementPropertySetPropertyDefinitionUnitDeprecated()**](IfcApi.md#getElementPropertySetPropertyDefinitionUnitDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition |
| [**getElementPropertySetPropertyDefinitionUnitsDeprecated()**](IfcApi.md#getElementPropertySetPropertyDefinitionUnitsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition |
| [**getElementPropertySetPropertyDefinitionsDeprecated()**](IfcApi.md#getElementPropertySetPropertyDefinitionsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet |
| [**getElementPropertySetPropertyDeprecated()**](IfcApi.md#getElementPropertySetPropertyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet |
| [**getElementPropertySetsDeprecated()**](IfcApi.md#getElementPropertySetsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element |
| [**getElementsDeprecated()**](IfcApi.md#getElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Retrieve all elements of a model |
| [**getElementsFromClassificationDeprecated()**](IfcApi.md#getElementsFromClassificationDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification |
| [**getIfcClassificationsDeprecated()**](IfcApi.md#getIfcClassificationsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification | Retrieve all classifications in a model |
| [**getIfcDeprecated()**](IfcApi.md#getIfcDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Retrieve one model |
| [**getIfcMaterialDeprecated()**](IfcApi.md#getIfcMaterialDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material/{id} | Retrieve a material of a model |
| [**getIfcMaterialsDeprecated()**](IfcApi.md#getIfcMaterialsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material | Retrieve all materials of a model |
| [**getIfcPropertiesDeprecated()**](IfcApi.md#getIfcPropertiesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property | Retrieve all Properties of a model |
| [**getIfcPropertyDefinitionDeprecated()**](IfcApi.md#getIfcPropertyDefinitionDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model |
| [**getIfcPropertyDefinitionsDeprecated()**](IfcApi.md#getIfcPropertyDefinitionsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model |
| [**getIfcPropertyDeprecated()**](IfcApi.md#getIfcPropertyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Retrieve a Property of a model |
| [**getIfcUnitDeprecated()**](IfcApi.md#getIfcUnitDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Retrieve a Unit of a model |
| [**getIfcUnitsDeprecated()**](IfcApi.md#getIfcUnitsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Retrieve all Units of a model |
| [**getIfcsDeprecated()**](IfcApi.md#getIfcsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc | Retrieve all models |
| [**getLayerDeprecated()**](IfcApi.md#getLayerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Retrieve a layer of a model |
| [**getLayersDeprecated()**](IfcApi.md#getLayersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Retrieve all layers of a model |
| [**getMaterialDeprecated()**](IfcApi.md#getMaterialDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model |
| [**getMaterialsDeprecated()**](IfcApi.md#getMaterialsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material | Retrieve all materials of a model |
| [**getProcessorHandlerDeprecated()**](IfcApi.md#getProcessorHandlerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Retrieve a processor handler |
| [**getProcessorHandlersDeprecated()**](IfcApi.md#getProcessorHandlersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler | Get all processor handlers |
| [**getPropertySetDeprecated()**](IfcApi.md#getPropertySetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Retrieve a PropertySet of a model |
| [**getPropertySetsDeprecated()**](IfcApi.md#getPropertySetsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Retrieve all PropertySets of a model |
| [**getRawElementsDeprecated()**](IfcApi.md#getRawElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Retrieve all elements in a optimized format |
| [**getSimpleElementDeprecated()**](IfcApi.md#getSimpleElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation |
| [**getSimpleElementsDeprecated()**](IfcApi.md#getSimpleElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/simple | Retrieve all elements of a model with a simple value representation |
| [**getSpaceDeprecated()**](IfcApi.md#getSpaceDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Retrieve one space of the model |
| [**getSpacesDeprecated()**](IfcApi.md#getSpacesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Retrieve all spaces of the model |
| [**getStoreyDeprecated()**](IfcApi.md#getStoreyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Retrieve a storey of a model |
| [**getStoreyPlanPositioningDeprecated()**](IfcApi.md#getStoreyPlanPositioningDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey |
| [**getStoreysDeprecated()**](IfcApi.md#getStoreysDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Retrieve all storeys of a model |
| [**getSystemDeprecated()**](IfcApi.md#getSystemDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Retrieve a system of a model |
| [**getSystemsDeprecated()**](IfcApi.md#getSystemsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Retrieve all systems of a model |
| [**getTilesetDeprecated()**](IfcApi.md#getTilesetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Retrieve the tileset of the model |
| [**getZoneDeprecated()**](IfcApi.md#getZoneDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Retrieve one zone of a model |
| [**getZoneSpaceDeprecated()**](IfcApi.md#getZoneSpaceDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone |
| [**getZoneSpacesDeprecated()**](IfcApi.md#getZoneSpacesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone |
| [**getZonesDeprecated()**](IfcApi.md#getZonesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Retrieve zones of a model |
| [**launchNewCheckDeprecated()**](IfcApi.md#launchNewCheckDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id}/launch-check | Launch a new check on the model |
| [**linkDocumentsOfElementDeprecated()**](IfcApi.md#linkDocumentsOfElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Link one or many documents to an element |
| [**listClassificationElementRelationsDeprecated()**](IfcApi.md#listClassificationElementRelationsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | List all associations between classifications and elements |
| [**mergeIfcsDeprecated()**](IfcApi.md#mergeIfcsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/merge | Merge IFC files |
| [**optimizeIfcDeprecated()**](IfcApi.md#optimizeIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/optimize | Optimize the IFC |
| [**removeAllElementPropertySetDeprecated()**](IfcApi.md#removeAllElementPropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element |
| [**removeClassificationOfElementDeprecated()**](IfcApi.md#removeClassificationOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element |
| [**removeDocumentOfElementDeprecated()**](IfcApi.md#removeDocumentOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element |
| [**removeElementPropertySetDeprecated()**](IfcApi.md#removeElementPropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element |
| [**removeElementPropertySetPropertyDefinitionDeprecated()**](IfcApi.md#removeElementPropertySetPropertyDefinitionDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property |
| [**removeElementPropertySetPropertyDefinitionUnitDeprecated()**](IfcApi.md#removeElementPropertySetPropertyDefinitionUnitDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition |
| [**removeElementPropertySetPropertyDeprecated()**](IfcApi.md#removeElementPropertySetPropertyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet |
| [**removeElementsFromClassificationDeprecated()**](IfcApi.md#removeElementsFromClassificationDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements |
| [**reprocessIfcDeprecated()**](IfcApi.md#reprocessIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/reprocess | Reprocess Model file |
| [**updateAccessTokenDeprecated()**](IfcApi.md#updateAccessTokenDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update some fields of a token |
| [**updateBuildingDeprecated()**](IfcApi.md#updateBuildingDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Update some fields of a building |
| [**updateBuildingPlanPositioningDeprecated()**](IfcApi.md#updateBuildingPlanPositioningDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building |
| [**updateCheckerDeprecated()**](IfcApi.md#updateCheckerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Update some fields of a checker of a model |
| [**updateCheckerResultDeprecated()**](IfcApi.md#updateCheckerResultDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult |
| [**updateElementDeprecated()**](IfcApi.md#updateElementDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update some fields of an element |
| [**updateElementPropertySetPropertyDeprecated()**](IfcApi.md#updateElementPropertySetPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element |
| [**updateIfcDeprecated()**](IfcApi.md#updateIfcDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update some fields of a model |
| [**updateIfcFilesDeprecated()**](IfcApi.md#updateIfcFilesDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/files | Update models file (gltf, svg, structure, etc) |
| [**updateIfcPropertyDefinitionDeprecated()**](IfcApi.md#updateIfcPropertyDefinitionDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model |
| [**updateIfcPropertyDeprecated()**](IfcApi.md#updateIfcPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property |
| [**updateIfcUnitDeprecated()**](IfcApi.md#updateIfcUnitDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update some fields of a Unit of a model |
| [**updateLayerDeprecated()**](IfcApi.md#updateLayerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update some fields of a layer |
| [**updateOrderBuildingPlanDeprecated()**](IfcApi.md#updateOrderBuildingPlanDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building |
| [**updateOrderStoreyPlanDeprecated()**](IfcApi.md#updateOrderStoreyPlanDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey |
| [**updateOrderStoreysDeprecated()**](IfcApi.md#updateOrderStoreysDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/order | Update order of all storey of a model |
| [**updateProcessorHandlerDeprecated()**](IfcApi.md#updateProcessorHandlerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler |
| [**updatePropertySetDeprecated()**](IfcApi.md#updatePropertySetDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update some fields of a PropertySet |
| [**updateSpaceDeprecated()**](IfcApi.md#updateSpaceDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update some fields of a space |
| [**updateStoreyDeprecated()**](IfcApi.md#updateStoreyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Update some fields of a storey |
| [**updateStoreyPlanPositioningDeprecated()**](IfcApi.md#updateStoreyPlanPositioningDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey |
| [**updateSystemDeprecated()**](IfcApi.md#updateSystemDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update some fields of a system |
| [**updateZoneDeprecated()**](IfcApi.md#updateZoneDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update some fields of a zone |
| [**updateZoneSpaceDeprecated()**](IfcApi.md#updateZoneSpaceDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space |


## `addIfcErrorsDeprecated()`

```php
addIfcErrorsDeprecated($cloud_pk, $id, $project_pk, $model_errors_request): \OpenAPI\Client\Model\ModelErrors
```

Add errors to model

Model errors are warnings and errors during model process. They alert about missing elements or malformed files  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$model_errors_request = new \OpenAPI\Client\Model\ModelErrorsRequest(); // \OpenAPI\Client\Model\ModelErrorsRequest

try {
    $result = $apiInstance->addIfcErrorsDeprecated($cloud_pk, $id, $project_pk, $model_errors_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->addIfcErrorsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **model_errors_request** | [**\OpenAPI\Client\Model\ModelErrorsRequest**](../Model/ModelErrorsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelErrors**](../Model/ModelErrors.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcClassificationsDeprecated()`

```php
bulkDeleteIfcClassificationsDeprecated($cloud_pk, $ifc_pk, $project_pk)
```

Remove all classifications from model's elements

Delete relation between filtered classifications (eg. /classifications?name=untec) and all mode's elements. No classification will be deleted on this endpoint, only the relation between model's elements and their classification.  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int
$project_pk = 56; // int

try {
    $apiInstance->bulkDeleteIfcClassificationsDeprecated($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcClassificationsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcPropertiesDeprecated()`

```php
bulkDeleteIfcPropertiesDeprecated($cloud_pk, $ifc_pk, $project_pk)
```

Delete many Property of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteIfcPropertiesDeprecated($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcPropertiesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcPropertyDefinitionsDeprecated()`

```php
bulkDeleteIfcPropertyDefinitionsDeprecated($cloud_pk, $ifc_pk, $project_pk)
```

Delete many PropertyDefinitions of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteIfcPropertyDefinitionsDeprecated($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcPropertyDefinitionsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteIfcUnitsDeprecated()`

```php
bulkDeleteIfcUnitsDeprecated($cloud_pk, $ifc_pk, $project_pk)
```

Delete many Units of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteIfcUnitsDeprecated($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeleteIfcUnitsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeletePropertySetDeprecated()`

```php
bulkDeletePropertySetDeprecated($cloud_pk, $ifc_pk, $project_pk)
```

Delete many PropertySet of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeletePropertySetDeprecated($cloud_pk, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkDeletePropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkFullUpdateElementsDeprecated()`

```php
bulkFullUpdateElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
```

Update many elements at once (only changing fields may be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->bulkFullUpdateElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkFullUpdateElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **element_request** | [**\OpenAPI\Client\Model\ElementRequest[]**](../Model/ElementRequest.md)|  | |
| **classification** | **string**|  | [optional] |
| **classification__notation** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkFullUpdateIfcPropertyDeprecated()`

```php
bulkFullUpdateIfcPropertyDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_request): \OpenAPI\Client\Model\Property[]
```

Update some fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_request = array(new \OpenAPI\Client\Model\PropertyRequest()); // \OpenAPI\Client\Model\PropertyRequest[]

try {
    $result = $apiInstance->bulkFullUpdateIfcPropertyDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkFullUpdateIfcPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_request** | [**\OpenAPI\Client\Model\PropertyRequest[]**](../Model/PropertyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveClassificationsOfElementDeprecated()`

```php
bulkRemoveClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk)
```

Remove many classifications from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkRemoveClassificationsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveDocumentsOfElementDeprecated()`

```php
bulkRemoveDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk)
```

Remove many documents from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkRemoveDocumentsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRemoveElementsFromClassificationDeprecated()`

```php
bulkRemoveElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk)
```

Remove the classifications from all elements

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkRemoveElementsFromClassificationDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateElementsDeprecated()`

```php
bulkUpdateElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
```

Update many elements at once (all field must be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->bulkUpdateElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkUpdateElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **element_request** | [**\OpenAPI\Client\Model\ElementRequest[]**](../Model/ElementRequest.md)|  | |
| **classification** | **string**|  | [optional] |
| **classification__notation** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateIfcPropertyDeprecated()`

```php
bulkUpdateIfcPropertyDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_request): \OpenAPI\Client\Model\Property[]
```

Update all fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_request = array(new \OpenAPI\Client\Model\PropertyRequest()); // \OpenAPI\Client\Model\PropertyRequest[]

try {
    $result = $apiInstance->bulkUpdateIfcPropertyDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->bulkUpdateIfcPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_request** | [**\OpenAPI\Client\Model\PropertyRequest[]**](../Model/PropertyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccessTokenDeprecated()`

```php
createAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $ifc_access_token_request): \OpenAPI\Client\Model\IfcAccessToken
```

Create a token for this model

Tokens are read_only by default and are valid 1 day  Required scopes: ifc:token_manage, model:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_access_token_request = new \OpenAPI\Client\Model\IfcAccessTokenRequest(); // \OpenAPI\Client\Model\IfcAccessTokenRequest

try {
    $result = $apiInstance->createAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $ifc_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createAccessTokenDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ifc_access_token_request** | [**\OpenAPI\Client\Model\IfcAccessTokenRequest**](../Model/IfcAccessTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuildingDeprecated()`

```php
createBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_building_request): \OpenAPI\Client\Model\Building
```

Create a building of a model

Create a building of a model.  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_building_request = new \OpenAPI\Client\Model\StoreyBuildingRequest(); // \OpenAPI\Client\Model\StoreyBuildingRequest

try {
    $result = $apiInstance->createBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createBuildingDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_building_request** | [**\OpenAPI\Client\Model\StoreyBuildingRequest**](../Model/StoreyBuildingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBuildingPlanDeprecated()`

```php
createBuildingPlanDeprecated($building_uuid, $cloud_pk, $ifc_pk, $project_pk, $building_model_plan_request): \OpenAPI\Client\Model\Building
```

Create a relation between a 2d model and a building

Create a relation between a 2d model and a building. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$building_model_plan_request = new \OpenAPI\Client\Model\BuildingModelPlanRequest(); // \OpenAPI\Client\Model\BuildingModelPlanRequest

try {
    $result = $apiInstance->createBuildingPlanDeprecated($building_uuid, $cloud_pk, $ifc_pk, $project_pk, $building_model_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createBuildingPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **building_model_plan_request** | [**\OpenAPI\Client\Model\BuildingModelPlanRequest**](../Model/BuildingModelPlanRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCheckerDeprecated()`

```php
createCheckerDeprecated($cloud_pk, $ifc_pk, $project_pk, $ifc_checker_request): \OpenAPI\Client\Model\IfcChecker
```

Create a checker to a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_checker_request = new \OpenAPI\Client\Model\IfcCheckerRequest(); // \OpenAPI\Client\Model\IfcCheckerRequest

try {
    $result = $apiInstance->createCheckerDeprecated($cloud_pk, $ifc_pk, $project_pk, $ifc_checker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createCheckerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ifc_checker_request** | [**\OpenAPI\Client\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCheckerResultDeprecated()`

```php
createCheckerResultDeprecated($checker_pk, $cloud_pk, $ifc_pk, $project_pk, $checker_result_request): \OpenAPI\Client\Model\CheckerResult
```

Create a CheckerResult

TCreate a CheckerResult  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$checker_result_request = new \OpenAPI\Client\Model\CheckerResultRequest(); // \OpenAPI\Client\Model\CheckerResultRequest

try {
    $result = $apiInstance->createCheckerResultDeprecated($checker_pk, $cloud_pk, $ifc_pk, $project_pk, $checker_result_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createCheckerResultDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **checker_result_request** | [**\OpenAPI\Client\Model\CheckerResultRequest**](../Model/CheckerResultRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClassificationElementRelationsDeprecated()`

```php
createClassificationElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_classification_relation_request)
```

Create association between existing classification and existing element

Create association between existing classification and existing element  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_classification_relation_request = array(new \OpenAPI\Client\Model\ElementClassificationRelationRequest()); // \OpenAPI\Client\Model\ElementClassificationRelationRequest[]

try {
    $apiInstance->createClassificationElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_classification_relation_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createClassificationElementRelationsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **element_classification_relation_request** | [**\OpenAPI\Client\Model\ElementClassificationRelationRequest[]**](../Model/ElementClassificationRelationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClassificationsOfElementDeprecated()`

```php
createClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $classification_request): \OpenAPI\Client\Model\Classification[]
```

Create one or many classifications to an element

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors If classification created already exists, it will just be added to item's classifications and will not be duplicated  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification_request = array(new \OpenAPI\Client\Model\ClassificationRequest()); // \OpenAPI\Client\Model\ClassificationRequest[]

try {
    $result = $apiInstance->createClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $classification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createClassificationsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **classification_request** | [**\OpenAPI\Client\Model\ClassificationRequest[]**](../Model/ClassificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementDeprecated()`

```php
createElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
```

Create an element in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->createElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **element_request** | [**\OpenAPI\Client\Model\ElementRequest[]**](../Model/ElementRequest.md)|  | |
| **classification** | **string**|  | [optional] |
| **classification__notation** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetDeprecated()`

```php
createElementPropertySetDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_set_request): \OpenAPI\Client\Model\PropertySet
```

Create a PropertySets to an element

Create a PropertySets that will be automatically linked to the element  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.
$property_set_request = new \OpenAPI\Client\Model\PropertySetRequest(); // \OpenAPI\Client\Model\PropertySetRequest

try {
    $result = $apiInstance->createElementPropertySetDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_set_request** | [**\OpenAPI\Client\Model\PropertySetRequest**](../Model/PropertySetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetPropertyDefinitionDeprecated()`

```php
createElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk, $property_definition_request): \OpenAPI\Client\Model\PropertyDefinition
```

Create a Definition to a Property

Create a Definition to a Property  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$property_definition_request = new \OpenAPI\Client\Model\PropertyDefinitionRequest(); // \OpenAPI\Client\Model\PropertyDefinitionRequest

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk, $property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |
| **property_definition_request** | [**\OpenAPI\Client\Model\PropertyDefinitionRequest**](../Model/PropertyDefinitionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetPropertyDefinitionUnitDeprecated()`

```php
createElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $unit_request): \OpenAPI\Client\Model\Unit
```

Create a Unit to a Definition

Create a Unit to a Definition  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$unit_request = new \OpenAPI\Client\Model\UnitRequest(); // \OpenAPI\Client\Model\UnitRequest

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetPropertyDefinitionUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertydefinition_pk** | **int**| A unique integer value identifying this property definition. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |
| **unit_request** | [**\OpenAPI\Client\Model\UnitRequest**](../Model/UnitRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createElementPropertySetPropertyDeprecated()`

```php
createElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk, $property_request): \OpenAPI\Client\Model\Property
```

Create a property to a PropertySet

Create a property to a PropertySet  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$property_request = new \OpenAPI\Client\Model\PropertyRequest(); // \OpenAPI\Client\Model\PropertyRequest

try {
    $result = $apiInstance->createElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createElementPropertySetPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |
| **property_request** | [**\OpenAPI\Client\Model\PropertyRequest**](../Model/PropertyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIfcDeprecated()`

```php
createIfcDeprecated($cloud_pk, $project_pk, $create_model_request): \OpenAPI\Client\Model\Model
```

Make a PDF or Image file a Model

Make a PDF or Image file a Model to be used in BIMData services. If a model already exists, this route does nothing and returns a 201 with the model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$create_model_request = new \OpenAPI\Client\Model\CreateModelRequest(); // \OpenAPI\Client\Model\CreateModelRequest

try {
    $result = $apiInstance->createIfcDeprecated($cloud_pk, $project_pk, $create_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **project_pk** | **int**|  | |
| **create_model_request** | [**\OpenAPI\Client\Model\CreateModelRequest**](../Model/CreateModelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIfcPropertyDefinitionDeprecated()`

```php
createIfcPropertyDefinitionDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_definition_request): \OpenAPI\Client\Model\PropertyDefinition[]
```

Create a PropertyDefinition on the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_definition_request = array(new \OpenAPI\Client\Model\PropertyDefinitionRequest()); // \OpenAPI\Client\Model\PropertyDefinitionRequest[]

try {
    $result = $apiInstance->createIfcPropertyDefinitionDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createIfcPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_definition_request** | [**\OpenAPI\Client\Model\PropertyDefinitionRequest[]**](../Model/PropertyDefinitionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIfcUnitDeprecated()`

```php
createIfcUnitDeprecated($cloud_pk, $ifc_pk, $project_pk, $unit_request): \OpenAPI\Client\Model\Unit[]
```

Create a Unit on a model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$unit_request = array(new \OpenAPI\Client\Model\UnitRequest()); // \OpenAPI\Client\Model\UnitRequest[]

try {
    $result = $apiInstance->createIfcUnitDeprecated($cloud_pk, $ifc_pk, $project_pk, $unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createIfcUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **unit_request** | [**\OpenAPI\Client\Model\UnitRequest[]**](../Model/UnitRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLayerDeprecated()`

```php
createLayerDeprecated($cloud_pk, $ifc_pk, $project_pk, $layer_request): \OpenAPI\Client\Model\Layer
```

Create a layer in the model

The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$layer_request = new \OpenAPI\Client\Model\LayerRequest(); // \OpenAPI\Client\Model\LayerRequest

try {
    $result = $apiInstance->createLayerDeprecated($cloud_pk, $ifc_pk, $project_pk, $layer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createLayerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **layer_request** | [**\OpenAPI\Client\Model\LayerRequest**](../Model/LayerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMetaBuildingDeprecated()`

```php
createMetaBuildingDeprecated($cloud_pk, $project_pk, $create_building_by_name_request): \OpenAPI\Client\Model\Model
```

Create an empty 3D Model

Create an empty 3D Model to be used in BIMData services  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$create_building_by_name_request = new \OpenAPI\Client\Model\CreateBuildingByNameRequest(); // \OpenAPI\Client\Model\CreateBuildingByNameRequest

try {
    $result = $apiInstance->createMetaBuildingDeprecated($cloud_pk, $project_pk, $create_building_by_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createMetaBuildingDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **project_pk** | **int**|  | |
| **create_building_by_name_request** | [**\OpenAPI\Client\Model\CreateBuildingByNameRequest**](../Model/CreateBuildingByNameRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPropertySetDeprecated()`

```php
createPropertySetDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_set_request): \OpenAPI\Client\Model\PropertySet[]
```

Create one or many PropertySet

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_set_request = array(new \OpenAPI\Client\Model\PropertySetRequest()); // \OpenAPI\Client\Model\PropertySetRequest[]

try {
    $result = $apiInstance->createPropertySetDeprecated($cloud_pk, $ifc_pk, $project_pk, $property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_set_request** | [**\OpenAPI\Client\Model\PropertySetRequest[]**](../Model/PropertySetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPropertySetElementRelationsDeprecated()`

```php
createPropertySetElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_property_set_relation_request)
```

Create association between PropertySet and element

Create association between PropertySet and element  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_property_set_relation_request = array(new \OpenAPI\Client\Model\ElementPropertySetRelationRequest()); // \OpenAPI\Client\Model\ElementPropertySetRelationRequest[]

try {
    $apiInstance->createPropertySetElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk, $element_property_set_relation_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createPropertySetElementRelationsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **element_property_set_relation_request** | [**\OpenAPI\Client\Model\ElementPropertySetRelationRequest[]**](../Model/ElementPropertySetRelationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRawElementsDeprecated()`

```php
createRawElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $raw_elements_request)
```

Create elements in an optimized format

Create many elements in an optimized format to reduce JSON size and avoid redudancy. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. You can use the same optimized structure to post multiple elements, property_sets, properties, definitions and units at once. For performance reasons, we do not check the validity of the json. If the json is malformed, an error 500 without more explaination may be returned instead of a 400.  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$raw_elements_request = new \OpenAPI\Client\Model\RawElementsRequest(); // \OpenAPI\Client\Model\RawElementsRequest

try {
    $apiInstance->createRawElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $raw_elements_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createRawElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **raw_elements_request** | [**\OpenAPI\Client\Model\RawElementsRequest**](../Model/RawElementsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpaceDeprecated()`

```php
createSpaceDeprecated($cloud_pk, $ifc_pk, $project_pk, $space_request): \OpenAPI\Client\Model\Space[]
```

Create a space in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$space_request = array(new \OpenAPI\Client\Model\SpaceRequest()); // \OpenAPI\Client\Model\SpaceRequest[]

try {
    $result = $apiInstance->createSpaceDeprecated($cloud_pk, $ifc_pk, $project_pk, $space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **space_request** | [**\OpenAPI\Client\Model\SpaceRequest[]**](../Model/SpaceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Space[]**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoreyDeprecated()`

```php
createStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_building_request): \OpenAPI\Client\Model\Storey
```

Create a storey of a model

Create a storey of a model.  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_building_request = new \OpenAPI\Client\Model\StoreyBuildingRequest(); // \OpenAPI\Client\Model\StoreyBuildingRequest

try {
    $result = $apiInstance->createStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createStoreyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_building_request** | [**\OpenAPI\Client\Model\StoreyBuildingRequest**](../Model/StoreyBuildingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStoreyPlanDeprecated()`

```php
createStoreyPlanDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_uuid, $storey_model_plan_request): \OpenAPI\Client\Model\Storey
```

Create a relation between a 2d model and a storey

Create a relation between a 2d model and a storey. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$storey_model_plan_request = new \OpenAPI\Client\Model\StoreyModelPlanRequest(); // \OpenAPI\Client\Model\StoreyModelPlanRequest

try {
    $result = $apiInstance->createStoreyPlanDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_uuid, $storey_model_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createStoreyPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_uuid** | **string**|  | |
| **storey_model_plan_request** | [**\OpenAPI\Client\Model\StoreyModelPlanRequest**](../Model/StoreyModelPlanRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSystemDeprecated()`

```php
createSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $system_request): \OpenAPI\Client\Model\System
```

Create a system in the model

The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$system_request = new \OpenAPI\Client\Model\SystemRequest(); // \OpenAPI\Client\Model\SystemRequest

try {
    $result = $apiInstance->createSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $system_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createSystemDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **system_request** | [**\OpenAPI\Client\Model\SystemRequest**](../Model/SystemRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTilesetDeprecated()`

```php
createTilesetDeprecated($cloud_pk, $id, $project_pk)
```

Create the tileset of the model and upload all files

This route is internaly used by BIMData, you probably don't want to use it  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->createTilesetDeprecated($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createTilesetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createZoneDeprecated()`

```php
createZoneDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_request, $color): \OpenAPI\Client\Model\Zone[]
```

Create a zone in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_request = array(new \OpenAPI\Client\Model\ZoneRequest()); // \OpenAPI\Client\Model\ZoneRequest[]
$color = 'color_example'; // string

try {
    $result = $apiInstance->createZoneDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_request, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createZoneDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_request** | [**\OpenAPI\Client\Model\ZoneRequest[]**](../Model/ZoneRequest.md)|  | |
| **color** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Zone[]**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createZoneSpaceDeprecated()`

```php
createZoneSpaceDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_pk, $zone_space_request): \OpenAPI\Client\Model\ZoneSpace
```

Create a space in a zone

The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.
$zone_space_request = new \OpenAPI\Client\Model\ZoneSpaceRequest(); // \OpenAPI\Client\Model\ZoneSpaceRequest

try {
    $result = $apiInstance->createZoneSpaceDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_pk, $zone_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->createZoneSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_pk** | **int**| A unique integer value identifying this zone. | |
| **zone_space_request** | [**\OpenAPI\Client\Model\ZoneSpaceRequest**](../Model/ZoneSpaceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccessTokenDeprecated()`

```php
deleteAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token)
```

Delete a token

Deleting a token will revoke it.  Required scopes: ifc:token_manage, model:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string

try {
    $apiInstance->deleteAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteAccessTokenDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuildingDeprecated()`

```php
deleteBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete a building of a model

Delete a building of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteBuildingDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuildingPlanDeprecated()`

```php
deleteBuildingPlanDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete the relation between a 2d model and a building

Delete the relation between a 2d model and a building  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteBuildingPlanDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteBuildingPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCheckerDeprecated()`

```php
deleteCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteCheckerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCheckerResultDeprecated()`

```php
deleteCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a CheckerResult

Delete a CheckerResult  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteCheckerResultDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteElementDeprecated()`

```php
deleteElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete an element of a model

The IFC file will not be updated. The remaining elements are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcDeprecated()`

```php
deleteIfcDeprecated($cloud_pk, $id, $project_pk)
```

Delete a model

It will also delete the related document  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->deleteIfcDeprecated($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcPropertyDefinitionDeprecated()`

```php
deleteIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a PropertyDefinitions of a model

Delete a PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcPropertyDeprecated()`

```php
deleteIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a Property of a model

Delete a Property of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcUnitDeprecated()`

```php
deleteIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a Unit of a model

Delete a Unit of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIfcWithoutDocDeprecated()`

```php
deleteIfcWithoutDocDeprecated($cloud_pk, $id, $project_pk)
```

Delete the Model without deleting the related document

Delete the Model without deleting the related document  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->deleteIfcWithoutDocDeprecated($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteIfcWithoutDocDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLayerDeprecated()`

```php
deleteLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a layer of a model

The IFC file will not be updated. The remaining layers are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteLayerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePropertySetDeprecated()`

```php
deletePropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a PropertySet of a model

Delete a PropertySet of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deletePropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deletePropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpaceDeprecated()`

```php
deleteSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a space

It will not delete related zones. The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoreyDeprecated()`

```php
deleteStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete a storey of a model

Delete a storey of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteStoreyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoreyPlanDeprecated()`

```php
deleteStoreyPlanDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid)
```

Delete the relation between a 2d model and a storey

Delete the relation between a 2d model and a storey  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string

try {
    $apiInstance->deleteStoreyPlanDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteStoreyPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSystemDeprecated()`

```php
deleteSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid)
```

Delete a system of a model

The IFC file will not be updated. The remaining systems are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteSystemDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZoneDeprecated()`

```php
deleteZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk)
```

Delete a zone of a model

The IFC file will not be updated. The remaining zones are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteZoneDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZoneSpaceDeprecated()`

```php
deleteZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk)
```

Delete a space of a zone

The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $apiInstance->deleteZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->deleteZoneSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_pk** | **int**| A unique integer value identifying this zone. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportIfcDeprecated()`

```php
exportIfcDeprecated($cloud_pk, $id, $project_pk, $ifc_export_request): \OpenAPI\Client\Model\IfcExport
```

Export IFC

Only works for IFC files. Export IFC as requested in parameters. When the export is finished, a new IFC file with will be created in the same folder than the original IFC. You can query the folder or subscribe to the new document webhook to retrieve the result  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$ifc_export_request = new \OpenAPI\Client\Model\IfcExportRequest(); // \OpenAPI\Client\Model\IfcExportRequest

try {
    $result = $apiInstance->exportIfcDeprecated($cloud_pk, $id, $project_pk, $ifc_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->exportIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **ifc_export_request** | [**\OpenAPI\Client\Model\IfcExportRequest**](../Model/IfcExportRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IfcExport**](../Model/IfcExport.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullUpdateElementDeprecated()`

```php
fullUpdateElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $element_request): \OpenAPI\Client\Model\Element
```

Update all fields of an element

Update all fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$element_request = new \OpenAPI\Client\Model\ElementRequest(); // \OpenAPI\Client\Model\ElementRequest

try {
    $result = $apiInstance->fullUpdateElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $element_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->fullUpdateElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |
| **element_request** | [**\OpenAPI\Client\Model\ElementRequest**](../Model/ElementRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessTokenDeprecated()`

```php
getAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token): \OpenAPI\Client\Model\IfcAccessToken
```

Retrieve one token created for this model

Retrieve one token created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string

try {
    $result = $apiInstance->getAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getAccessTokenDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **token** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessTokensDeprecated()`

```php
getAccessTokensDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\IfcAccessToken[]
```

Retrieve all tokens created for this model

Retrieve all tokens created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getAccessTokensDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getAccessTokensDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken[]**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildingDeprecated()`

```php
getBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Building
```

Retrieve a building of a model

Retrieve a building of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getBuildingDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildingPlanPositioningDeprecated()`

```php
getBuildingPlanPositioningDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PositioningPlan
```

Retrieve the postioning of the plan in the building

Retrieve the postioning of the plan in the building  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getBuildingPlanPositioningDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getBuildingPlanPositioningDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuildingsDeprecated()`

```php
getBuildingsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Building[]
```

Retrieve all buildings of a model

Retrieve all buildings of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getBuildingsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getBuildingsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Building[]**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckerDeprecated()`

```php
getCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\IfcChecker
```

Retrieve a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getCheckerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckerResultDeprecated()`

```php
getCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\CheckerResult
```

Retrieve one CheckerResult

Retrieve one CheckerResult  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getCheckerResultDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckerResultsDeprecated()`

```php
getCheckerResultsDeprecated($checker_pk, $cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\CheckerResult[]
```

Retrieve all CheckerResults

Retrieve all CheckerResults  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckerResultsDeprecated($checker_pk, $cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getCheckerResultsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\CheckerResult[]**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckersDeprecated()`

```php
getCheckersDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\IfcChecker[]
```

Retrieve all checkers of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckersDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getCheckersDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\IfcChecker[]**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassificationsOfElementDeprecated()`

```php
getClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
```

Retrieve all classifications of an element

Retrieve all classifications of an element  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getClassificationsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getClassificationsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentsOfElementDeprecated()`

```php
getDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Document[]
```

Retrieve all documents of an element

Retrieve all documents of an element  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getDocumentsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementDeprecated()`

```php
getElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Element
```

Retrieve an element of a model

Retrieve an element of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementLinkedDocumentsDeprecated()`

```php
getElementLinkedDocumentsDeprecated($cloud_pk, $ifc_pk, $project_pk, $classification, $classification__notation, $type): \OpenAPI\Client\Model\DocumentWithElementList[]
```

Retrieve all documents linked to any element

Retrieve all documents linked to any element with the list of uuids  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->getElementLinkedDocumentsDeprecated($cloud_pk, $ifc_pk, $project_pk, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementLinkedDocumentsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **classification** | **string**|  | [optional] |
| **classification__notation** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DocumentWithElementList[]**](../Model/DocumentWithElementList.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetDeprecated()`

```php
getElementPropertySetDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
```

Retrieve a PropertySet of an element

Retrieve a PropertySet of an element  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementPropertySetDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertiesDeprecated()`

```php
getElementPropertySetPropertiesDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property[]
```

Retrieve all Properties of a PropertySet

Retrieve all Properties of a PropertySet  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertiesDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertiesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionDeprecated()`

```php
getElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition
```

Retrieve a Definition of a Property

Retrieve a Definition of a Property  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionUnitDeprecated()`

```php
getElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit
```

Retrieve a Unit of a Definition

Retrieve a Unit of a Definition  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertydefinition_pk** | **int**| A unique integer value identifying this property definition. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionUnitsDeprecated()`

```php
getElementPropertySetPropertyDefinitionUnitsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit[]
```

Retrieve all Units of a Definition

Retrieve all Units of a Definition  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnitsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionUnitsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertydefinition_pk** | **int**| A unique integer value identifying this property definition. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDefinitionsDeprecated()`

```php
getElementPropertySetPropertyDefinitionsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition[]
```

Retrieve all Definitions of a PropertySet

Retrieve all Definitions of a PropertySet  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDefinitionsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetPropertyDeprecated()`

```php
getElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property
```

Retrieve a Property of a PropertySet

Retrieve a Property of a PropertySet  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementPropertySetsDeprecated()`

```php
getElementPropertySetsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
```

Retrieve all PropertySets of an element

Retrieve all PropertySets of an element  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementPropertySetsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementPropertySetsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsDeprecated()`

```php
getElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
```

Retrieve all elements of a model

Retrieve all elements of a model. If not filtered, the json may be very large. To efficently retrieve all elements and their data, see getRawElements  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->getElementsDeprecated($cloud_pk, $ifc_pk, $project_pk, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **classification** | **string**|  | [optional] |
| **classification__notation** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElementsFromClassificationDeprecated()`

```php
getElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk): \OpenAPI\Client\Model\Element[]
```

Retrieve all elements with the classification

Retrieve all elements with the classification  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getElementsFromClassificationDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Element[]**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcClassificationsDeprecated()`

```php
getIfcClassificationsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
```

Retrieve all classifications in a model

Retrieve all classifications in a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int
$project_pk = 56; // int

try {
    $result = $apiInstance->getIfcClassificationsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcClassificationsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Classification[]**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcDeprecated()`

```php
getIfcDeprecated($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Model
```

Retrieve one model

Retrieve one model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $result = $apiInstance->getIfcDeprecated($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcMaterialDeprecated()`

```php
getIfcMaterialDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material
```

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this material.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcMaterialDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcMaterialDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this material. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcMaterialsDeprecated()`

```php
getIfcMaterialsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material[]
```

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcMaterialsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcMaterialsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Material[]**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertiesDeprecated()`

```php
getIfcPropertiesDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Property[]
```

Retrieve all Properties of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcPropertiesDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertiesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Property[]**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertyDefinitionDeprecated()`

```php
getIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition
```

Retrieve a PropertyDefinition of a model

Retrieve a PropertyDefinition of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertyDefinitionsDeprecated()`

```php
getIfcPropertyDefinitionsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition[]
```

Retrieve all PropertyDefinitions of a model

Retrieve all PropertyDefinitions of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcPropertyDefinitionsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertyDefinitionsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition[]**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcPropertyDeprecated()`

```php
getIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Property
```

Retrieve a Property of a model

Retrieve a Property of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcUnitDeprecated()`

```php
getIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Unit
```

Retrieve a Unit of a model

Retrieve a Unit of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcUnitsDeprecated()`

```php
getIfcUnitsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Unit[]
```

Retrieve all Units of a model

Retrieve all Units of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getIfcUnitsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcUnitsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIfcsDeprecated()`

```php
getIfcsDeprecated($cloud_pk, $project_pk, $source, $status, $type): \OpenAPI\Client\Model\Model[]
```

Retrieve all models

Retrieve all models. The field `type` allows you to discriminate which kind of model it is.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$source = 'source_example'; // string
$status = array('status_example'); // string[]
$type = array('type_example'); // string[]

try {
    $result = $apiInstance->getIfcsDeprecated($cloud_pk, $project_pk, $source, $status, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getIfcsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **project_pk** | **int**|  | |
| **source** | **string**|  | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Model[]**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayerDeprecated()`

```php
getLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Layer
```

Retrieve a layer of a model

Retrieve a layer of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getLayerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayersDeprecated()`

```php
getLayersDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Layer[]
```

Retrieve all layers of a model

Retrieve all layers of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getLayersDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getLayersDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Layer[]**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaterialDeprecated()`

```php
getMaterialDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material
```

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this material.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getMaterialDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getMaterialDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this material. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaterialsDeprecated()`

```php
getMaterialsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Material[]
```

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getMaterialsDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getMaterialsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Material[]**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessorHandlerDeprecated()`

```php
getProcessorHandlerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler
```

Retrieve a processor handler

Retrieve a processor handler  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this processor handler.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProcessorHandlerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getProcessorHandlerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this processor handler. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessorHandlersDeprecated()`

```php
getProcessorHandlersDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler[]
```

Get all processor handlers

Get all processor handlers  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProcessorHandlersDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getProcessorHandlersDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler[]**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertySetDeprecated()`

```php
getPropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
```

Retrieve a PropertySet of a model

Retrieve a PropertySet of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getPropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertySetsDeprecated()`

```php
getPropertySetsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
```

Retrieve all PropertySets of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getPropertySetsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getPropertySetsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\PropertySet[]**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRawElementsDeprecated()`

```php
getRawElementsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\RawElements
```

Retrieve all elements in a optimized format

Instead of a nested representation, this route respond with a flat structure and indices pointing to related object. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. Returns elements, property_sets, properties, definitions and units in a JSON optimized structure  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getRawElementsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getRawElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\RawElements**](../Model/RawElements.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleElementDeprecated()`

```php
getSimpleElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\SimpleElement
```

Retrieve an element of a model with a simple value representation

Retrieve an element of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getSimpleElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSimpleElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleElementsDeprecated()`

```php
getSimpleElementsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\SimpleElement
```

Retrieve all elements of a model with a simple value representation

Retrieve all elements of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSimpleElementsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSimpleElementsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpaceDeprecated()`

```php
getSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Space
```

Retrieve one space of the model

Retrieve one space of the model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpacesDeprecated()`

```php
getSpacesDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Space[]
```

Retrieve all spaces of the model

Retrieve all spaces of the model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSpacesDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSpacesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Space[]**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreyDeprecated()`

```php
getStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Storey
```

Retrieve a storey of a model

Retrieve a storey of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getStoreyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreyPlanPositioningDeprecated()`

```php
getStoreyPlanPositioningDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid): \OpenAPI\Client\Model\PositioningPlan
```

Retrieve the postioning of the plan in the storey

Retrieve the postioning of the plan in the storey  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string

try {
    $result = $apiInstance->getStoreyPlanPositioningDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getStoreyPlanPositioningDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreysDeprecated()`

```php
getStoreysDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Storey[]
```

Retrieve all storeys of a model

Retrieve all storeys of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getStoreysDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getStoreysDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Storey[]**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemDeprecated()`

```php
getSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid): \OpenAPI\Client\Model\System
```

Retrieve a system of a model

Retrieve a system of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSystemDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemsDeprecated()`

```php
getSystemsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\System[]
```

Retrieve all systems of a model

Retrieve all systems of a model.  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSystemsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getSystemsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\System[]**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTilesetDeprecated()`

```php
getTilesetDeprecated($cloud_pk, $id, $project_pk, $tile_format)
```

Retrieve the tileset of the model

This is only availble if the model is a POINT_CLOUD  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$tile_format = 'pnts'; // string

try {
    $apiInstance->getTilesetDeprecated($cloud_pk, $id, $project_pk, $tile_format);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getTilesetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **tile_format** | **string**|  | [optional] [default to &#39;pnts&#39;] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneDeprecated()`

```php
getZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk): \OpenAPI\Client\Model\Zone
```

Retrieve one zone of a model

Retrieve one zone of a model  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZoneDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneSpaceDeprecated()`

```php
getZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace
```

Retrieve one space of a zone

Retrieve one space of a zone  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $result = $apiInstance->getZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZoneSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_pk** | **int**| A unique integer value identifying this zone. | |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneSpacesDeprecated()`

```php
getZoneSpacesDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace[]
```

Retrieve all spaces of a zone

Retrieve all spaces of a zone  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $result = $apiInstance->getZoneSpacesDeprecated($cloud_pk, $ifc_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZoneSpacesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_pk** | **int**| A unique integer value identifying this zone. | |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace[]**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZonesDeprecated()`

```php
getZonesDeprecated($cloud_pk, $ifc_pk, $project_pk, $color): \OpenAPI\Client\Model\Zone[]
```

Retrieve zones of a model

Retrieve parent zones of a model. Children zones we'll be in the 'zones' field  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$color = 'color_example'; // string

try {
    $result = $apiInstance->getZonesDeprecated($cloud_pk, $ifc_pk, $project_pk, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->getZonesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **color** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Zone[]**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `launchNewCheckDeprecated()`

```php
launchNewCheckDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $ifc_checker_request)
```

Launch a new check on the model

A nex check will be played with the current state of elements, properties, etc.  Required scopes: check:write, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_checker_request = new \OpenAPI\Client\Model\IfcCheckerRequest(); // \OpenAPI\Client\Model\IfcCheckerRequest

try {
    $apiInstance->launchNewCheckDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $ifc_checker_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->launchNewCheckDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ifc_checker_request** | [**\OpenAPI\Client\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkDocumentsOfElementDeprecated()`

```php
linkDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Document[]
```

Link one or many documents to an element

Bulk relation create available. You can either post an id or a list of ids. Is you post a list, the response will be a list (in the same order) of created relation or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->linkDocumentsOfElementDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->linkDocumentsOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **request_body** | [**int[]**](../Model/int.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClassificationElementRelationsDeprecated()`

```php
listClassificationElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk): \OpenAPI\Client\Model\ElementClassificationRelation[]
```

List all associations between classifications and elements

List all associations between classifications and elements  Required scopes: ifc:read, model:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->listClassificationElementRelationsDeprecated($cloud_pk, $ifc_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->listClassificationElementRelationsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\ElementClassificationRelation[]**](../Model/ElementClassificationRelation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeIfcsDeprecated()`

```php
mergeIfcsDeprecated($cloud_pk, $project_pk, $ifc_merge_request)
```

Merge IFC files

Only works for IFC files. Merge IFC files. The merged IFC file will be put in the same folder that the first IFC of the list  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$ifc_merge_request = new \OpenAPI\Client\Model\IfcMergeRequest(); // \OpenAPI\Client\Model\IfcMergeRequest

try {
    $apiInstance->mergeIfcsDeprecated($cloud_pk, $project_pk, $ifc_merge_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->mergeIfcsDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **project_pk** | **int**|  | |
| **ifc_merge_request** | [**\OpenAPI\Client\Model\IfcMergeRequest**](../Model/IfcMergeRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optimizeIfcDeprecated()`

```php
optimizeIfcDeprecated($cloud_pk, $id, $project_pk, $ifc_optimize_request)
```

Optimize the IFC

Only works for IFC files. Optimize the IFC. A new optimized IFC file will be put in the same folder that the original IFC  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$ifc_optimize_request = new \OpenAPI\Client\Model\IfcOptimizeRequest(); // \OpenAPI\Client\Model\IfcOptimizeRequest

try {
    $apiInstance->optimizeIfcDeprecated($cloud_pk, $id, $project_pk, $ifc_optimize_request);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->optimizeIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **ifc_optimize_request** | [**\OpenAPI\Client\Model\IfcOptimizeRequest**](../Model/IfcOptimizeRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAllElementPropertySetDeprecated()`

```php
removeAllElementPropertySetDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk)
```

Remove all property sets from element

Remove all property sets from element. Property Sets will not be deleted, just detached from element  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$ifc_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeAllElementPropertySetDeprecated($cloud_pk, $element_uuid, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeAllElementPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeClassificationOfElementDeprecated()`

```php
removeClassificationOfElementDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk)
```

Remove a classification from an element

The classification will not be deleted  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeClassificationOfElementDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeClassificationOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this classification. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDocumentOfElementDeprecated()`

```php
removeDocumentOfElementDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk)
```

Remove a documents from an element

The document will not be deleted  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeDocumentOfElementDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeDocumentOfElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this document. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetDeprecated()`

```php
removeElementPropertySetDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk)
```

Remove a PropertySet from an element

Delete the relation between the element and the property set. Does not delete any object  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeElementPropertySetDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **ifc_pk** | **int**|  | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetPropertyDefinitionDeprecated()`

```php
removeElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk)
```

Delete a Definition to a Property

Delete a Definition to a Property  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetPropertyDefinitionDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetPropertyDefinitionUnitDeprecated()`

```php
removeElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk)
```

Remove a Unit from a Definition

Remove a Unit from a Definition  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetPropertyDefinitionUnitDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetPropertyDefinitionUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **property_pk** | **int**| A unique integer value identifying this property. | |
| **propertydefinition_pk** | **int**| A unique integer value identifying this property definition. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementPropertySetPropertyDeprecated()`

```php
removeElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk)
```

Remove a property from a PropertySet

Remove a property from a PropertySet  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementPropertySetPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeElementsFromClassificationDeprecated()`

```php
removeElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk, $uuid)
```

Remove the classification from all elements

Remove the classification from all elements. No element nor classification will be deleted  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$ifc_pk = 56; // int | A unique integer value identifying this model.
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->removeElementsFromClassificationDeprecated($cloud_pk, $ifc_pk, $model_classification_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->removeElementsFromClassificationDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reprocessIfcDeprecated()`

```php
reprocessIfcDeprecated($cloud_pk, $id, $project_pk)
```

Reprocess Model file

Reprocess the model. All data that are not in the original model files will be lost  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->reprocessIfcDeprecated($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->reprocessIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessTokenDeprecated()`

```php
updateAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token, $patched_ifc_access_token_request): \OpenAPI\Client\Model\IfcAccessToken
```

Update some fields of a token

You can update the expiration date or the read_only field  Required scopes: ifc:token_manage, model:token_manage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string
$patched_ifc_access_token_request = new \OpenAPI\Client\Model\PatchedIfcAccessTokenRequest(); // \OpenAPI\Client\Model\PatchedIfcAccessTokenRequest

try {
    $result = $apiInstance->updateAccessTokenDeprecated($cloud_pk, $ifc_pk, $project_pk, $token, $patched_ifc_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateAccessTokenDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **token** | **string**|  | |
| **patched_ifc_access_token_request** | [**\OpenAPI\Client\Model\PatchedIfcAccessTokenRequest**](../Model/PatchedIfcAccessTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuildingDeprecated()`

```php
updateBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_storey_building_request): \OpenAPI\Client\Model\Building
```

Update some fields of a building

Update some fields of a building  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_storey_building_request = new \OpenAPI\Client\Model\PatchedStoreyBuildingRequest(); // \OpenAPI\Client\Model\PatchedStoreyBuildingRequest

try {
    $result = $apiInstance->updateBuildingDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateBuildingDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |
| **patched_storey_building_request** | [**\OpenAPI\Client\Model\PatchedStoreyBuildingRequest**](../Model/PatchedStoreyBuildingRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuildingPlanPositioningDeprecated()`

```php
updateBuildingPlanPositioningDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk, $patched_positioning_plan_request): \OpenAPI\Client\Model\PositioningPlan
```

Update the postioning of the plan in the building

Update the postioning of the plan in the building  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_positioning_plan_request = new \OpenAPI\Client\Model\PatchedPositioningPlanRequest(); // \OpenAPI\Client\Model\PatchedPositioningPlanRequest

try {
    $result = $apiInstance->updateBuildingPlanPositioningDeprecated($building_uuid, $cloud_pk, $id, $ifc_pk, $project_pk, $patched_positioning_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateBuildingPlanPositioningDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_positioning_plan_request** | [**\OpenAPI\Client\Model\PatchedPositioningPlanRequest**](../Model/PatchedPositioningPlanRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckerDeprecated()`

```php
updateCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_ifc_checker_request): \OpenAPI\Client\Model\IfcChecker
```

Update some fields of a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_ifc_checker_request = new \OpenAPI\Client\Model\PatchedIfcCheckerRequest(); // \OpenAPI\Client\Model\PatchedIfcCheckerRequest

try {
    $result = $apiInstance->updateCheckerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_ifc_checker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateCheckerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_ifc_checker_request** | [**\OpenAPI\Client\Model\PatchedIfcCheckerRequest**](../Model/PatchedIfcCheckerRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckerResultDeprecated()`

```php
updateCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk, $patched_checker_result_request): \OpenAPI\Client\Model\CheckerResult
```

Update some fields of a CheckerResult

Update some fields of a CheckerResult  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_checker_result_request = new \OpenAPI\Client\Model\PatchedCheckerResultRequest(); // \OpenAPI\Client\Model\PatchedCheckerResultRequest

try {
    $result = $apiInstance->updateCheckerResultDeprecated($checker_pk, $cloud_pk, $id, $ifc_pk, $project_pk, $patched_checker_result_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateCheckerResultDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_checker_result_request** | [**\OpenAPI\Client\Model\PatchedCheckerResultRequest**](../Model/PatchedCheckerResultRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementDeprecated()`

```php
updateElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_element_request): \OpenAPI\Client\Model\Element
```

Update some fields of an element

Update some fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_element_request = new \OpenAPI\Client\Model\PatchedElementRequest(); // \OpenAPI\Client\Model\PatchedElementRequest

try {
    $result = $apiInstance->updateElementDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_element_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateElementDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |
| **patched_element_request** | [**\OpenAPI\Client\Model\PatchedElementRequest**](../Model/PatchedElementRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateElementPropertySetPropertyDeprecated()`

```php
updateElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $patched_property_request): \OpenAPI\Client\Model\Property
```

Update a property from an element

Update a property value from an element. If the element is the only one to have this property, the property will be update in place. If many elements share this property, a new property will be created to replace the property for this element. Keeping the property for all other elements. If you want to update the property of all elements, see updateIfcProperty  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$patched_property_request = new \OpenAPI\Client\Model\PatchedPropertyRequest(); // \OpenAPI\Client\Model\PatchedPropertyRequest

try {
    $result = $apiInstance->updateElementPropertySetPropertyDeprecated($cloud_pk, $element_uuid, $id, $ifc_pk, $project_pk, $propertyset_pk, $patched_property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateElementPropertySetPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **propertyset_pk** | **int**| A unique integer value identifying this property set. | |
| **patched_property_request** | [**\OpenAPI\Client\Model\PatchedPropertyRequest**](../Model/PatchedPropertyRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcDeprecated()`

```php
updateIfcDeprecated($cloud_pk, $id, $project_pk, $patched_model_request): \OpenAPI\Client\Model\Model
```

Update some fields of a model

Update some fields of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$patched_model_request = new \OpenAPI\Client\Model\PatchedModelRequest(); // \OpenAPI\Client\Model\PatchedModelRequest

try {
    $result = $apiInstance->updateIfcDeprecated($cloud_pk, $id, $project_pk, $patched_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **patched_model_request** | [**\OpenAPI\Client\Model\PatchedModelRequest**](../Model/PatchedModelRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcFilesDeprecated()`

```php
updateIfcFilesDeprecated($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $preview_file, $xkt_file): \OpenAPI\Client\Model\ModelFiles
```

Update models file (gltf, svg, structure, etc)

This route does not accept JSON, only files as x-www-form-urlencoded  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int
$structure_file = "/path/to/file.txt"; // \SplFileObject
$systems_file = "/path/to/file.txt"; // \SplFileObject
$map_file = "/path/to/file.txt"; // \SplFileObject
$gltf_file = "/path/to/file.txt"; // \SplFileObject
$gltf_with_openings_file = "/path/to/file.txt"; // \SplFileObject
$bvh_tree_file = "/path/to/file.txt"; // \SplFileObject
$preview_file = "/path/to/file.txt"; // \SplFileObject
$xkt_file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateIfcFilesDeprecated($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $preview_file, $xkt_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcFilesDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **id** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**|  | |
| **structure_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **systems_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **map_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **gltf_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **gltf_with_openings_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **bvh_tree_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **preview_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **xkt_file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelFiles**](../Model/ModelFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcPropertyDefinitionDeprecated()`

```php
updateIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_definition_request): \OpenAPI\Client\Model\PropertyDefinition
```

Update some fields of many PropertyDefinitions of a model

Update some fields of many PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_definition_request = new \OpenAPI\Client\Model\PatchedPropertyDefinitionRequest(); // \OpenAPI\Client\Model\PatchedPropertyDefinitionRequest

try {
    $result = $apiInstance->updateIfcPropertyDefinitionDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcPropertyDefinitionDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_property_definition_request** | [**\OpenAPI\Client\Model\PatchedPropertyDefinitionRequest**](../Model/PatchedPropertyDefinitionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcPropertyDeprecated()`

```php
updateIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_request): \OpenAPI\Client\Model\Property
```

Update some fields of a Property

Update some fields of a Property  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_request = new \OpenAPI\Client\Model\PatchedPropertyRequest(); // \OpenAPI\Client\Model\PatchedPropertyRequest

try {
    $result = $apiInstance->updateIfcPropertyDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcPropertyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_property_request** | [**\OpenAPI\Client\Model\PatchedPropertyRequest**](../Model/PatchedPropertyRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIfcUnitDeprecated()`

```php
updateIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_unit_request): \OpenAPI\Client\Model\Unit
```

Update some fields of a Unit of a model

Update some fields of a Unit of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_unit_request = new \OpenAPI\Client\Model\PatchedUnitRequest(); // \OpenAPI\Client\Model\PatchedUnitRequest

try {
    $result = $apiInstance->updateIfcUnitDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateIfcUnitDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_unit_request** | [**\OpenAPI\Client\Model\PatchedUnitRequest**](../Model/PatchedUnitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLayerDeprecated()`

```php
updateLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_layer_request): \OpenAPI\Client\Model\Layer
```

Update some fields of a layer

Update some fields of a layer. The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_layer_request = new \OpenAPI\Client\Model\PatchedLayerRequest(); // \OpenAPI\Client\Model\PatchedLayerRequest

try {
    $result = $apiInstance->updateLayerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_layer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateLayerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_layer_request** | [**\OpenAPI\Client\Model\PatchedLayerRequest**](../Model/PatchedLayerRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderBuildingPlanDeprecated()`

```php
updateOrderBuildingPlanDeprecated($building_uuid, $cloud_pk, $ifc_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Storey
```

Update order of all plan of a building

Update order of all plan of a building  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->updateOrderBuildingPlanDeprecated($building_uuid, $cloud_pk, $ifc_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateOrderBuildingPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **request_body** | [**int[]**](../Model/int.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStoreyPlanDeprecated()`

```php
updateOrderStoreyPlanDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_uuid, $request_body): \OpenAPI\Client\Model\Storey
```

Update order of all plan of a storey

Update order of all plan of a storey  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$request_body = array(56); // int[]

try {
    $result = $apiInstance->updateOrderStoreyPlanDeprecated($cloud_pk, $ifc_pk, $project_pk, $storey_uuid, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateOrderStoreyPlanDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_uuid** | **string**|  | |
| **request_body** | [**int[]**](../Model/int.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStoreysDeprecated()`

```php
updateOrderStoreysDeprecated($cloud_pk, $ifc_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Storey[]
```

Update order of all storey of a model

Update order of all storey of a model  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->updateOrderStoreysDeprecated($cloud_pk, $ifc_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateOrderStoreysDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Storey[]**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessorHandlerDeprecated()`

```php
updateProcessorHandlerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_processor_handler_request): \OpenAPI\Client\Model\ProcessorHandler
```

Update the status of a processor handler

Update the status of a processor handler  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this processor handler.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_processor_handler_request = new \OpenAPI\Client\Model\PatchedProcessorHandlerRequest(); // \OpenAPI\Client\Model\PatchedProcessorHandlerRequest

try {
    $result = $apiInstance->updateProcessorHandlerDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_processor_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateProcessorHandlerDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this processor handler. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_processor_handler_request** | [**\OpenAPI\Client\Model\PatchedProcessorHandlerRequest**](../Model/PatchedProcessorHandlerRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePropertySetDeprecated()`

```php
updatePropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_set_request): \OpenAPI\Client\Model\PropertySet
```

Update some fields of a PropertySet

Update some fields of a PropertySet  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_set_request = new \OpenAPI\Client\Model\PatchedPropertySetRequest(); // \OpenAPI\Client\Model\PatchedPropertySetRequest

try {
    $result = $apiInstance->updatePropertySetDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updatePropertySetDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_property_set_request** | [**\OpenAPI\Client\Model\PatchedPropertySetRequest**](../Model/PatchedPropertySetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpaceDeprecated()`

```php
updateSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_space_request): \OpenAPI\Client\Model\Space
```

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_space_request = new \OpenAPI\Client\Model\PatchedSpaceRequest(); // \OpenAPI\Client\Model\PatchedSpaceRequest

try {
    $result = $apiInstance->updateSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_space_request** | [**\OpenAPI\Client\Model\PatchedSpaceRequest**](../Model/PatchedSpaceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStoreyDeprecated()`

```php
updateStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_storey_building_request): \OpenAPI\Client\Model\Storey
```

Update some fields of a storey

Update some fields of a storey  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_storey_building_request = new \OpenAPI\Client\Model\PatchedStoreyBuildingRequest(); // \OpenAPI\Client\Model\PatchedStoreyBuildingRequest

try {
    $result = $apiInstance->updateStoreyDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateStoreyDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |
| **patched_storey_building_request** | [**\OpenAPI\Client\Model\PatchedStoreyBuildingRequest**](../Model/PatchedStoreyBuildingRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStoreyPlanPositioningDeprecated()`

```php
updateStoreyPlanPositioningDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid, $patched_positioning_plan_request): \OpenAPI\Client\Model\PositioningPlan
```

Update the postioning of the plan in the storey

Update the postioning of the plan in the storey  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$patched_positioning_plan_request = new \OpenAPI\Client\Model\PatchedPositioningPlanRequest(); // \OpenAPI\Client\Model\PatchedPositioningPlanRequest

try {
    $result = $apiInstance->updateStoreyPlanPositioningDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $storey_uuid, $patched_positioning_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateStoreyPlanPositioningDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **storey_uuid** | **string**|  | |
| **patched_positioning_plan_request** | [**\OpenAPI\Client\Model\PatchedPositioningPlanRequest**](../Model/PatchedPositioningPlanRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSystemDeprecated()`

```php
updateSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_system_request): \OpenAPI\Client\Model\System
```

Update some fields of a system

Update some fields of a system. The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_system_request = new \OpenAPI\Client\Model\PatchedSystemRequest(); // \OpenAPI\Client\Model\PatchedSystemRequest

try {
    $result = $apiInstance->updateSystemDeprecated($cloud_pk, $ifc_pk, $project_pk, $uuid, $patched_system_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateSystemDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **uuid** | **string**|  | |
| **patched_system_request** | [**\OpenAPI\Client\Model\PatchedSystemRequest**](../Model/PatchedSystemRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZoneDeprecated()`

```php
updateZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_zone_request): \OpenAPI\Client\Model\Zone
```

Update some fields of a zone

Update some fields of a zone. The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_zone_request = new \OpenAPI\Client\Model\PatchedZoneRequest(); // \OpenAPI\Client\Model\PatchedZoneRequest

try {
    $result = $apiInstance->updateZoneDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $patched_zone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateZoneDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_zone_request** | [**\OpenAPI\Client\Model\PatchedZoneRequest**](../Model/PatchedZoneRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZoneSpaceDeprecated()`

```php
updateZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $patched_zone_space_request): \OpenAPI\Client\Model\ZoneSpace
```

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IfcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$ifc_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.
$patched_zone_space_request = new \OpenAPI\Client\Model\PatchedZoneSpaceRequest(); // \OpenAPI\Client\Model\PatchedZoneSpaceRequest

try {
    $result = $apiInstance->updateZoneSpaceDeprecated($cloud_pk, $id, $ifc_pk, $project_pk, $zone_pk, $patched_zone_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IfcApi->updateZoneSpaceDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **ifc_pk** | **int**| A unique integer value identifying this model. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **zone_pk** | **int**| A unique integer value identifying this zone. | |
| **patched_zone_space_request** | [**\OpenAPI\Client\Model\PatchedZoneSpaceRequest**](../Model/PatchedZoneSpaceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
