# OpenAPI\Client\ModelApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addModelErrors()**](ModelApi.md#addModelErrors) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/errors | Add errors to model |
| [**bulkDeleteModelClassifications()**](ModelApi.md#bulkDeleteModelClassifications) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements |
| [**bulkDeleteModelProperties()**](ModelApi.md#bulkDeleteModelProperties) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_destroy | Delete many Property of a model |
| [**bulkDeleteModelPropertyDefinitions()**](ModelApi.md#bulkDeleteModelPropertyDefinitions) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model |
| [**bulkDeleteModelUnits()**](ModelApi.md#bulkDeleteModelUnits) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/bulk_destroy | Delete many Units of a model |
| [**bulkDeletePropertySet()**](ModelApi.md#bulkDeletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model |
| [**bulkFullUpdateElements()**](ModelApi.md#bulkFullUpdateElements) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined) |
| [**bulkFullUpdateModelProperty()**](ModelApi.md#bulkFullUpdateModelProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update some fields of many properties of a model |
| [**bulkRemoveClassificationsOfElement()**](ModelApi.md#bulkRemoveClassificationsOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element |
| [**bulkRemoveDocumentsOfElement()**](ModelApi.md#bulkRemoveDocumentsOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element |
| [**bulkRemoveElementsFromClassification()**](ModelApi.md#bulkRemoveElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements |
| [**bulkUpdateElements()**](ModelApi.md#bulkUpdateElements) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (all field must be defined) |
| [**bulkUpdateModelProperty()**](ModelApi.md#bulkUpdateModelProperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update all fields of many properties of a model |
| [**createAccessToken()**](ModelApi.md#createAccessToken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Create a token for this model |
| [**createBuilding()**](ModelApi.md#createBuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Create a building of a model |
| [**createBuildingPlan()**](ModelApi.md#createBuildingPlan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building |
| [**createClassificationElementRelations()**](ModelApi.md#createClassificationElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | Create association between existing classification and existing element |
| [**createClassificationsOfElement()**](ModelApi.md#createClassificationsOfElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Create one or many classifications to an element |
| [**createElement()**](ModelApi.md#createElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Create an element in the model |
| [**createElementPropertySet()**](ModelApi.md#createElementPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element |
| [**createElementPropertySetProperty()**](ModelApi.md#createElementPropertySetProperty) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet |
| [**createElementPropertySetPropertyDefinition()**](ModelApi.md#createElementPropertySetPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property |
| [**createElementPropertySetPropertyDefinitionUnit()**](ModelApi.md#createElementPropertySetPropertyDefinitionUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition |
| [**createLayer()**](ModelApi.md#createLayer) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Create a layer in the model |
| [**createMetaBuilding()**](ModelApi.md#createMetaBuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-metabuilding | Create an empty 3D Model |
| [**createModel()**](ModelApi.md#createModel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-model | Make a PDF or Image file a Model |
| [**createModelPropertyDefinition()**](ModelApi.md#createModelPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Create a PropertyDefinition on the model |
| [**createModelUnit()**](ModelApi.md#createModelUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Create a Unit on a model |
| [**createPropertySet()**](ModelApi.md#createPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Create one or many PropertySet |
| [**createPropertySetElementRelations()**](ModelApi.md#createPropertySetElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset-element | Create association between PropertySet and element |
| [**createRawElements()**](ModelApi.md#createRawElements) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Create elements in an optimized format |
| [**createSpace()**](ModelApi.md#createSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Create a space in the model |
| [**createStorey()**](ModelApi.md#createStorey) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Create a storey of a model |
| [**createStoreyPlan()**](ModelApi.md#createStoreyPlan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey |
| [**createSystem()**](ModelApi.md#createSystem) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Create a system in the model |
| [**createTileset()**](ModelApi.md#createTileset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Create the tileset of the model and upload all files |
| [**createZone()**](ModelApi.md#createZone) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Create a zone in the model |
| [**createZoneSpace()**](ModelApi.md#createZoneSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Create a space in a zone |
| [**deleteAccessToken()**](ModelApi.md#deleteAccessToken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Delete a token |
| [**deleteBuilding()**](ModelApi.md#deleteBuilding) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Delete a building of a model |
| [**deleteBuildingPlan()**](ModelApi.md#deleteBuildingPlan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building |
| [**deleteElement()**](ModelApi.md#deleteElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Delete an element of a model |
| [**deleteLayer()**](ModelApi.md#deleteLayer) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Delete a layer of a model |
| [**deleteModel()**](ModelApi.md#deleteModel) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Delete a model |
| [**deleteModelProperty()**](ModelApi.md#deleteModelProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Delete a Property of a model |
| [**deleteModelPropertyDefinition()**](ModelApi.md#deleteModelPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model |
| [**deleteModelUnit()**](ModelApi.md#deleteModelUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Delete a Unit of a model |
| [**deleteModelWithoutDoc()**](ModelApi.md#deleteModelWithoutDoc) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/delete-model | Delete the Model without deleting the related document |
| [**deletePropertySet()**](ModelApi.md#deletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Delete a PropertySet of a model |
| [**deleteSpace()**](ModelApi.md#deleteSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Delete a space |
| [**deleteStorey()**](ModelApi.md#deleteStorey) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Delete a storey of a model |
| [**deleteStoreyPlan()**](ModelApi.md#deleteStoreyPlan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey |
| [**deleteSystem()**](ModelApi.md#deleteSystem) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Delete a system of a model |
| [**deleteZone()**](ModelApi.md#deleteZone) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Delete a zone of a model |
| [**deleteZoneSpace()**](ModelApi.md#deleteZoneSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone |
| [**exportIfc()**](ModelApi.md#exportIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/export | Export IFC |
| [**fullUpdateElement()**](ModelApi.md#fullUpdateElement) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update all fields of an element |
| [**getAccessToken()**](ModelApi.md#getAccessToken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Retrieve one token created for this model |
| [**getAccessTokens()**](ModelApi.md#getAccessTokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Retrieve all tokens created for this model |
| [**getBuilding()**](ModelApi.md#getBuilding) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Retrieve a building of a model |
| [**getBuildingPlanPositioning()**](ModelApi.md#getBuildingPlanPositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building |
| [**getBuildings()**](ModelApi.md#getBuildings) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Retrieve all buildings of a model |
| [**getClassificationsOfElement()**](ModelApi.md#getClassificationsOfElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element |
| [**getDocumentsOfElement()**](ModelApi.md#getDocumentsOfElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Retrieve all documents of an element |
| [**getElement()**](ModelApi.md#getElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Retrieve an element of a model |
| [**getElementLinkedDocuments()**](ModelApi.md#getElementLinkedDocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/documents | Retrieve all documents linked to any element |
| [**getElementPropertySet()**](ModelApi.md#getElementPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element |
| [**getElementPropertySetProperties()**](ModelApi.md#getElementPropertySetProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet |
| [**getElementPropertySetProperty()**](ModelApi.md#getElementPropertySetProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet |
| [**getElementPropertySetPropertyDefinition()**](ModelApi.md#getElementPropertySetPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property |
| [**getElementPropertySetPropertyDefinitionUnit()**](ModelApi.md#getElementPropertySetPropertyDefinitionUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition |
| [**getElementPropertySetPropertyDefinitionUnits()**](ModelApi.md#getElementPropertySetPropertyDefinitionUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition |
| [**getElementPropertySetPropertyDefinitions()**](ModelApi.md#getElementPropertySetPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet |
| [**getElementPropertySets()**](ModelApi.md#getElementPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element |
| [**getElements()**](ModelApi.md#getElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Retrieve all elements of a model |
| [**getElementsFromClassification()**](ModelApi.md#getElementsFromClassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification |
| [**getLayer()**](ModelApi.md#getLayer) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Retrieve a layer of a model |
| [**getLayers()**](ModelApi.md#getLayers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Retrieve all layers of a model |
| [**getMaterial()**](ModelApi.md#getMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model |
| [**getMaterials()**](ModelApi.md#getMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material | Retrieve all materials of a model |
| [**getModel()**](ModelApi.md#getModel) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Retrieve one model |
| [**getModelClassifications()**](ModelApi.md#getModelClassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification | Retrieve all classifications in a model |
| [**getModelMaterial()**](ModelApi.md#getModelMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material/{id} | Retrieve a material of a model |
| [**getModelMaterials()**](ModelApi.md#getModelMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material | Retrieve all materials of a model |
| [**getModelProperties()**](ModelApi.md#getModelProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property | Retrieve all Properties of a model |
| [**getModelProperty()**](ModelApi.md#getModelProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Retrieve a Property of a model |
| [**getModelPropertyDefinition()**](ModelApi.md#getModelPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model |
| [**getModelPropertyDefinitions()**](ModelApi.md#getModelPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model |
| [**getModelUnit()**](ModelApi.md#getModelUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Retrieve a Unit of a model |
| [**getModelUnits()**](ModelApi.md#getModelUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Retrieve all Units of a model |
| [**getModels()**](ModelApi.md#getModels) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model | Retrieve all models |
| [**getProcessorHandler()**](ModelApi.md#getProcessorHandler) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Retrieve a processor handler |
| [**getProcessorHandlers()**](ModelApi.md#getProcessorHandlers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler | Get all processor handlers |
| [**getPropertySet()**](ModelApi.md#getPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Retrieve a PropertySet of a model |
| [**getPropertySets()**](ModelApi.md#getPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Retrieve all PropertySets of a model |
| [**getRawElements()**](ModelApi.md#getRawElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Retrieve all elements in a optimized format |
| [**getSimpleElement()**](ModelApi.md#getSimpleElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation |
| [**getSimpleElements()**](ModelApi.md#getSimpleElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/simple | Retrieve all elements of a model with a simple value representation |
| [**getSpace()**](ModelApi.md#getSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Retrieve one space of the model |
| [**getSpaces()**](ModelApi.md#getSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Retrieve all spaces of the model |
| [**getStorey()**](ModelApi.md#getStorey) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Retrieve a storey of a model |
| [**getStoreyPlanPositioning()**](ModelApi.md#getStoreyPlanPositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey |
| [**getStoreys()**](ModelApi.md#getStoreys) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Retrieve all storeys of a model |
| [**getSystem()**](ModelApi.md#getSystem) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Retrieve a system of a model |
| [**getSystems()**](ModelApi.md#getSystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Retrieve all systems of a model |
| [**getTileset()**](ModelApi.md#getTileset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Retrieve the tileset of the model |
| [**getZone()**](ModelApi.md#getZone) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Retrieve one zone of a model |
| [**getZoneSpace()**](ModelApi.md#getZoneSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone |
| [**getZoneSpaces()**](ModelApi.md#getZoneSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone |
| [**getZones()**](ModelApi.md#getZones) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Retrieve zones of a model |
| [**linkDocumentsOfElement()**](ModelApi.md#linkDocumentsOfElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Link one or many documents to an element |
| [**listClassificationElementRelations()**](ModelApi.md#listClassificationElementRelations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | List all associations between classifications and elements |
| [**mergeIfcs()**](ModelApi.md#mergeIfcs) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/merge | Merge IFC files |
| [**optimizeIfc()**](ModelApi.md#optimizeIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/optimize | Optimize the IFC |
| [**removeAllElementPropertySet()**](ModelApi.md#removeAllElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element |
| [**removeClassificationOfElement()**](ModelApi.md#removeClassificationOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element |
| [**removeDocumentOfElement()**](ModelApi.md#removeDocumentOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element |
| [**removeElementPropertySet()**](ModelApi.md#removeElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element |
| [**removeElementPropertySetProperty()**](ModelApi.md#removeElementPropertySetProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet |
| [**removeElementPropertySetPropertyDefinition()**](ModelApi.md#removeElementPropertySetPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property |
| [**removeElementPropertySetPropertyDefinitionUnit()**](ModelApi.md#removeElementPropertySetPropertyDefinitionUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition |
| [**removeElementsFromClassification()**](ModelApi.md#removeElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements |
| [**reprocessModel()**](ModelApi.md#reprocessModel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/reprocess | Reprocess Model file |
| [**updateAccessToken()**](ModelApi.md#updateAccessToken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Update some fields of a token |
| [**updateBuilding()**](ModelApi.md#updateBuilding) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Update some fields of a building |
| [**updateBuildingPlanPositioning()**](ModelApi.md#updateBuildingPlanPositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building |
| [**updateElement()**](ModelApi.md#updateElement) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update some fields of an element |
| [**updateElementPropertySetProperty()**](ModelApi.md#updateElementPropertySetProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element |
| [**updateLayer()**](ModelApi.md#updateLayer) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Update some fields of a layer |
| [**updateModel()**](ModelApi.md#updateModel) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Update some fields of a model |
| [**updateModelFiles()**](ModelApi.md#updateModelFiles) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/files | Update models file (gltf, svg, structure, etc) |
| [**updateModelProperty()**](ModelApi.md#updateModelProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Update some fields of a Property |
| [**updateModelPropertyDefinition()**](ModelApi.md#updateModelPropertyDefinition) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model |
| [**updateModelUnit()**](ModelApi.md#updateModelUnit) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Update some fields of a Unit of a model |
| [**updateOrderBuildingPlan()**](ModelApi.md#updateOrderBuildingPlan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building |
| [**updateOrderStoreyPlan()**](ModelApi.md#updateOrderStoreyPlan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey |
| [**updateOrderStoreys()**](ModelApi.md#updateOrderStoreys) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/order | Update order of all storey of a model |
| [**updateProcessorHandler()**](ModelApi.md#updateProcessorHandler) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Update the status of a processor handler |
| [**updatePropertySet()**](ModelApi.md#updatePropertySet) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Update some fields of a PropertySet |
| [**updateSpace()**](ModelApi.md#updateSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Update some fields of a space |
| [**updateStorey()**](ModelApi.md#updateStorey) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Update some fields of a storey |
| [**updateStoreyPlanPositioning()**](ModelApi.md#updateStoreyPlanPositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey |
| [**updateSystem()**](ModelApi.md#updateSystem) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Update some fields of a system |
| [**updateZone()**](ModelApi.md#updateZone) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Update some fields of a zone |
| [**updateZoneSpace()**](ModelApi.md#updateZoneSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space |


## `addModelErrors()`

```php
addModelErrors($cloud_pk, $id, $project_pk, $model_errors_request): \OpenAPI\Client\Model\ModelErrors
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $result = $apiInstance->addModelErrors($cloud_pk, $id, $project_pk, $model_errors_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->addModelErrors: ', $e->getMessage(), PHP_EOL;
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

## `bulkDeleteModelClassifications()`

```php
bulkDeleteModelClassifications($cloud_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_pk = 56; // int
$project_pk = 56; // int

try {
    $apiInstance->bulkDeleteModelClassifications($cloud_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkDeleteModelClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_pk** | **int**|  | |
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

## `bulkDeleteModelProperties()`

```php
bulkDeleteModelProperties($cloud_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteModelProperties($cloud_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkDeleteModelProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkDeleteModelPropertyDefinitions()`

```php
bulkDeleteModelPropertyDefinitions($cloud_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteModelPropertyDefinitions($cloud_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkDeleteModelPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkDeleteModelUnits()`

```php
bulkDeleteModelUnits($cloud_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeleteModelUnits($cloud_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkDeleteModelUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkDeletePropertySet()`

```php
bulkDeletePropertySet($cloud_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkDeletePropertySet($cloud_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkDeletePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkFullUpdateElements()`

```php
bulkFullUpdateElements($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->bulkFullUpdateElements($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkFullUpdateElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkFullUpdateModelProperty()`

```php
bulkFullUpdateModelProperty($cloud_pk, $model_pk, $project_pk, $property_request): \OpenAPI\Client\Model\Property[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_request = array(new \OpenAPI\Client\Model\PropertyRequest()); // \OpenAPI\Client\Model\PropertyRequest[]

try {
    $result = $apiInstance->bulkFullUpdateModelProperty($cloud_pk, $model_pk, $project_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkFullUpdateModelProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkRemoveClassificationsOfElement()`

```php
bulkRemoveClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkRemoveClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkRemoveDocumentsOfElement()`

```php
bulkRemoveDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkRemoveDocumentsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkRemoveElementsFromClassification()`

```php
bulkRemoveElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->bulkRemoveElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkRemoveElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkUpdateElements()`

```php
bulkUpdateElements($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->bulkUpdateElements($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkUpdateElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `bulkUpdateModelProperty()`

```php
bulkUpdateModelProperty($cloud_pk, $model_pk, $project_pk, $property_request): \OpenAPI\Client\Model\Property[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_request = array(new \OpenAPI\Client\Model\PropertyRequest()); // \OpenAPI\Client\Model\PropertyRequest[]

try {
    $result = $apiInstance->bulkUpdateModelProperty($cloud_pk, $model_pk, $project_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->bulkUpdateModelProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createAccessToken()`

```php
createAccessToken($cloud_pk, $model_pk, $project_pk, $ifc_access_token_request): \OpenAPI\Client\Model\IfcAccessToken
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_access_token_request = new \OpenAPI\Client\Model\IfcAccessTokenRequest(); // \OpenAPI\Client\Model\IfcAccessTokenRequest

try {
    $result = $apiInstance->createAccessToken($cloud_pk, $model_pk, $project_pk, $ifc_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createBuilding()`

```php
createBuilding($cloud_pk, $model_pk, $project_pk, $storey_building_request): \OpenAPI\Client\Model\Building
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_building_request = new \OpenAPI\Client\Model\StoreyBuildingRequest(); // \OpenAPI\Client\Model\StoreyBuildingRequest

try {
    $result = $apiInstance->createBuilding($cloud_pk, $model_pk, $project_pk, $storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createBuilding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createBuildingPlan()`

```php
createBuildingPlan($building_uuid, $cloud_pk, $model_pk, $project_pk, $building_model_plan_request): \OpenAPI\Client\Model\Building
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$building_model_plan_request = new \OpenAPI\Client\Model\BuildingModelPlanRequest(); // \OpenAPI\Client\Model\BuildingModelPlanRequest

try {
    $result = $apiInstance->createBuildingPlan($building_uuid, $cloud_pk, $model_pk, $project_pk, $building_model_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createBuildingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createClassificationElementRelations()`

```php
createClassificationElementRelations($cloud_pk, $model_pk, $project_pk, $element_classification_relation_request)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_classification_relation_request = array(new \OpenAPI\Client\Model\ElementClassificationRelationRequest()); // \OpenAPI\Client\Model\ElementClassificationRelationRequest[]

try {
    $apiInstance->createClassificationElementRelations($cloud_pk, $model_pk, $project_pk, $element_classification_relation_request);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createClassificationElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createClassificationsOfElement()`

```php
createClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk, $classification_request): \OpenAPI\Client\Model\Classification[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification_request = array(new \OpenAPI\Client\Model\ClassificationRequest()); // \OpenAPI\Client\Model\ClassificationRequest[]

try {
    $result = $apiInstance->createClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk, $classification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createElement()`

```php
createElement($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_request = array(new \OpenAPI\Client\Model\ElementRequest()); // \OpenAPI\Client\Model\ElementRequest[]
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->createElement($cloud_pk, $model_pk, $project_pk, $element_request, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createElementPropertySet()`

```php
createElementPropertySet($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_set_request): \OpenAPI\Client\Model\PropertySet
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.
$property_set_request = new \OpenAPI\Client\Model\PropertySetRequest(); // \OpenAPI\Client\Model\PropertySetRequest

try {
    $result = $apiInstance->createElementPropertySet($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**|  | |
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

## `createElementPropertySetProperty()`

```php
createElementPropertySetProperty($cloud_pk, $element_uuid, $model_pk, $project_pk, $propertyset_pk, $property_request): \OpenAPI\Client\Model\Property
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$property_request = new \OpenAPI\Client\Model\PropertyRequest(); // \OpenAPI\Client\Model\PropertyRequest

try {
    $result = $apiInstance->createElementPropertySetProperty($cloud_pk, $element_uuid, $model_pk, $project_pk, $propertyset_pk, $property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createElementPropertySetPropertyDefinition()`

```php
createElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertyset_pk, $property_definition_request): \OpenAPI\Client\Model\PropertyDefinition
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$property_definition_request = new \OpenAPI\Client\Model\PropertyDefinitionRequest(); // \OpenAPI\Client\Model\PropertyDefinitionRequest

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertyset_pk, $property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createElementPropertySetPropertyDefinitionUnit()`

```php
createElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $unit_request): \OpenAPI\Client\Model\Unit
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$unit_request = new \OpenAPI\Client\Model\UnitRequest(); // \OpenAPI\Client\Model\UnitRequest

try {
    $result = $apiInstance->createElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk, $unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createLayer()`

```php
createLayer($cloud_pk, $model_pk, $project_pk, $layer_request): \OpenAPI\Client\Model\Layer
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$layer_request = new \OpenAPI\Client\Model\LayerRequest(); // \OpenAPI\Client\Model\LayerRequest

try {
    $result = $apiInstance->createLayer($cloud_pk, $model_pk, $project_pk, $layer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createMetaBuilding()`

```php
createMetaBuilding($cloud_pk, $project_pk, $create_building_by_name_request): \OpenAPI\Client\Model\Model
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$create_building_by_name_request = new \OpenAPI\Client\Model\CreateBuildingByNameRequest(); // \OpenAPI\Client\Model\CreateBuildingByNameRequest

try {
    $result = $apiInstance->createMetaBuilding($cloud_pk, $project_pk, $create_building_by_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createMetaBuilding: ', $e->getMessage(), PHP_EOL;
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

## `createModel()`

```php
createModel($cloud_pk, $project_pk, $create_model_request): \OpenAPI\Client\Model\Model
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$create_model_request = new \OpenAPI\Client\Model\CreateModelRequest(); // \OpenAPI\Client\Model\CreateModelRequest

try {
    $result = $apiInstance->createModel($cloud_pk, $project_pk, $create_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createModel: ', $e->getMessage(), PHP_EOL;
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

## `createModelPropertyDefinition()`

```php
createModelPropertyDefinition($cloud_pk, $model_pk, $project_pk, $property_definition_request): \OpenAPI\Client\Model\PropertyDefinition[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_definition_request = array(new \OpenAPI\Client\Model\PropertyDefinitionRequest()); // \OpenAPI\Client\Model\PropertyDefinitionRequest[]

try {
    $result = $apiInstance->createModelPropertyDefinition($cloud_pk, $model_pk, $project_pk, $property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createModelPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createModelUnit()`

```php
createModelUnit($cloud_pk, $model_pk, $project_pk, $unit_request): \OpenAPI\Client\Model\Unit[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$unit_request = array(new \OpenAPI\Client\Model\UnitRequest()); // \OpenAPI\Client\Model\UnitRequest[]

try {
    $result = $apiInstance->createModelUnit($cloud_pk, $model_pk, $project_pk, $unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createModelUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createPropertySet()`

```php
createPropertySet($cloud_pk, $model_pk, $project_pk, $property_set_request): \OpenAPI\Client\Model\PropertySet[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_set_request = array(new \OpenAPI\Client\Model\PropertySetRequest()); // \OpenAPI\Client\Model\PropertySetRequest[]

try {
    $result = $apiInstance->createPropertySet($cloud_pk, $model_pk, $project_pk, $property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createPropertySetElementRelations()`

```php
createPropertySetElementRelations($cloud_pk, $model_pk, $project_pk, $element_property_set_relation_request)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$element_property_set_relation_request = array(new \OpenAPI\Client\Model\ElementPropertySetRelationRequest()); // \OpenAPI\Client\Model\ElementPropertySetRelationRequest[]

try {
    $apiInstance->createPropertySetElementRelations($cloud_pk, $model_pk, $project_pk, $element_property_set_relation_request);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createPropertySetElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createRawElements()`

```php
createRawElements($cloud_pk, $model_pk, $project_pk, $raw_elements_request)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$raw_elements_request = new \OpenAPI\Client\Model\RawElementsRequest(); // \OpenAPI\Client\Model\RawElementsRequest

try {
    $apiInstance->createRawElements($cloud_pk, $model_pk, $project_pk, $raw_elements_request);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createRawElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createSpace()`

```php
createSpace($cloud_pk, $model_pk, $project_pk, $space_request): \OpenAPI\Client\Model\Space[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$space_request = array(new \OpenAPI\Client\Model\SpaceRequest()); // \OpenAPI\Client\Model\SpaceRequest[]

try {
    $result = $apiInstance->createSpace($cloud_pk, $model_pk, $project_pk, $space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createStorey()`

```php
createStorey($cloud_pk, $model_pk, $project_pk, $storey_building_request): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_building_request = new \OpenAPI\Client\Model\StoreyBuildingRequest(); // \OpenAPI\Client\Model\StoreyBuildingRequest

try {
    $result = $apiInstance->createStorey($cloud_pk, $model_pk, $project_pk, $storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createStorey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createStoreyPlan()`

```php
createStoreyPlan($cloud_pk, $model_pk, $project_pk, $storey_uuid, $storey_model_plan_request): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$storey_model_plan_request = new \OpenAPI\Client\Model\StoreyModelPlanRequest(); // \OpenAPI\Client\Model\StoreyModelPlanRequest

try {
    $result = $apiInstance->createStoreyPlan($cloud_pk, $model_pk, $project_pk, $storey_uuid, $storey_model_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createStoreyPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createSystem()`

```php
createSystem($cloud_pk, $model_pk, $project_pk, $system_request): \OpenAPI\Client\Model\System
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$system_request = new \OpenAPI\Client\Model\SystemRequest(); // \OpenAPI\Client\Model\SystemRequest

try {
    $result = $apiInstance->createSystem($cloud_pk, $model_pk, $project_pk, $system_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createTileset()`

```php
createTileset($cloud_pk, $id, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->createTileset($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createTileset: ', $e->getMessage(), PHP_EOL;
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

## `createZone()`

```php
createZone($cloud_pk, $model_pk, $project_pk, $zone_request, $color): \OpenAPI\Client\Model\Zone[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_request = array(new \OpenAPI\Client\Model\ZoneRequest()); // \OpenAPI\Client\Model\ZoneRequest[]
$color = 'color_example'; // string

try {
    $result = $apiInstance->createZone($cloud_pk, $model_pk, $project_pk, $zone_request, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createZoneSpace()`

```php
createZoneSpace($cloud_pk, $model_pk, $project_pk, $zone_pk, $zone_space_request): \OpenAPI\Client\Model\ZoneSpace
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.
$zone_space_request = new \OpenAPI\Client\Model\ZoneSpaceRequest(); // \OpenAPI\Client\Model\ZoneSpaceRequest

try {
    $result = $apiInstance->createZoneSpace($cloud_pk, $model_pk, $project_pk, $zone_pk, $zone_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->createZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteAccessToken()`

```php
deleteAccessToken($cloud_pk, $model_pk, $project_pk, $token)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string

try {
    $apiInstance->deleteAccessToken($cloud_pk, $model_pk, $project_pk, $token);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteBuilding()`

```php
deleteBuilding($cloud_pk, $model_pk, $project_pk, $uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteBuilding($cloud_pk, $model_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteBuilding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteBuildingPlan()`

```php
deleteBuildingPlan($building_uuid, $cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteBuildingPlan($building_uuid, $cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteBuildingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteElement()`

```php
deleteElement($cloud_pk, $model_pk, $project_pk, $uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteElement($cloud_pk, $model_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteLayer()`

```php
deleteLayer($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteLayer($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteModel()`

```php
deleteModel($cloud_pk, $id, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->deleteModel($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteModel: ', $e->getMessage(), PHP_EOL;
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

## `deleteModelProperty()`

```php
deleteModelProperty($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteModelProperty($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteModelProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteModelPropertyDefinition()`

```php
deleteModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteModelPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteModelUnit()`

```php
deleteModelUnit($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteModelUnit($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteModelUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteModelWithoutDoc()`

```php
deleteModelWithoutDoc($cloud_pk, $id, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->deleteModelWithoutDoc($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteModelWithoutDoc: ', $e->getMessage(), PHP_EOL;
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

## `deletePropertySet()`

```php
deletePropertySet($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deletePropertySet($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deletePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteSpace()`

```php
deleteSpace($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteSpace($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteStorey()`

```php
deleteStorey($cloud_pk, $model_pk, $project_pk, $uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteStorey($cloud_pk, $model_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteStorey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteStoreyPlan()`

```php
deleteStoreyPlan($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string

try {
    $apiInstance->deleteStoreyPlan($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteStoreyPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteSystem()`

```php
deleteSystem($cloud_pk, $model_pk, $project_pk, $uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->deleteSystem($cloud_pk, $model_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteZone()`

```php
deleteZone($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteZone($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `deleteZoneSpace()`

```php
deleteZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $apiInstance->deleteZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->deleteZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `exportIfc()`

```php
exportIfc($cloud_pk, $id, $project_pk, $ifc_export_request): \OpenAPI\Client\Model\IfcExport
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $result = $apiInstance->exportIfc($cloud_pk, $id, $project_pk, $ifc_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->exportIfc: ', $e->getMessage(), PHP_EOL;
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

## `fullUpdateElement()`

```php
fullUpdateElement($cloud_pk, $model_pk, $project_pk, $uuid, $element_request): \OpenAPI\Client\Model\Element
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$element_request = new \OpenAPI\Client\Model\ElementRequest(); // \OpenAPI\Client\Model\ElementRequest

try {
    $result = $apiInstance->fullUpdateElement($cloud_pk, $model_pk, $project_pk, $uuid, $element_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->fullUpdateElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getAccessToken()`

```php
getAccessToken($cloud_pk, $model_pk, $project_pk, $token): \OpenAPI\Client\Model\IfcAccessToken
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string

try {
    $result = $apiInstance->getAccessToken($cloud_pk, $model_pk, $project_pk, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getAccessTokens()`

```php
getAccessTokens($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\IfcAccessToken[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getAccessTokens($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getAccessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getBuilding()`

```php
getBuilding($cloud_pk, $model_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Building
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getBuilding($cloud_pk, $model_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getBuilding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getBuildingPlanPositioning()`

```php
getBuildingPlanPositioning($building_uuid, $cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\PositioningPlan
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getBuildingPlanPositioning($building_uuid, $cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getBuildingPlanPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getBuildings()`

```php
getBuildings($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Building[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getBuildings($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getBuildings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getClassificationsOfElement()`

```php
getClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getClassificationsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getClassificationsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getDocumentsOfElement()`

```php
getDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk): \OpenAPI\Client\Model\Document[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getDocumentsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElement()`

```php
getElement($cloud_pk, $model_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Element
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getElement($cloud_pk, $model_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementLinkedDocuments()`

```php
getElementLinkedDocuments($cloud_pk, $model_pk, $project_pk, $classification, $classification__notation, $type): \OpenAPI\Client\Model\DocumentWithElementList[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->getElementLinkedDocuments($cloud_pk, $model_pk, $project_pk, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementLinkedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySet()`

```php
getElementPropertySet($cloud_pk, $element_uuid, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$model_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementPropertySet($cloud_pk, $element_uuid, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **model_pk** | **int**|  | |
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

## `getElementPropertySetProperties()`

```php
getElementPropertySetProperties($cloud_pk, $element_uuid, $model_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetProperties($cloud_pk, $element_uuid, $model_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySetProperty()`

```php
getElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk): \OpenAPI\Client\Model\Property
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySetPropertyDefinition()`

```php
getElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySetPropertyDefinitionUnit()`

```php
getElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySetPropertyDefinitionUnits()`

```php
getElementPropertySetPropertyDefinitionUnits($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk): \OpenAPI\Client\Model\Unit[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitionUnits($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetPropertyDefinitionUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySetPropertyDefinitions()`

```php
getElementPropertySetPropertyDefinitions($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertyset_pk): \OpenAPI\Client\Model\PropertyDefinition[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $result = $apiInstance->getElementPropertySetPropertyDefinitions($cloud_pk, $element_uuid, $model_pk, $project_pk, $property_pk, $propertyset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySetPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementPropertySets()`

```php
getElementPropertySets($cloud_pk, $element_uuid, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementPropertySets($cloud_pk, $element_uuid, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementPropertySets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**|  | |
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

## `getElements()`

```php
getElements($cloud_pk, $model_pk, $project_pk, $classification, $classification__notation, $type): \OpenAPI\Client\Model\Element[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$classification = 'classification_example'; // string
$classification__notation = 'classification__notation_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->getElements($cloud_pk, $model_pk, $project_pk, $classification, $classification__notation, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getElementsFromClassification()`

```php
getElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Element[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getLayer()`

```php
getLayer($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Layer
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getLayer($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getLayers()`

```php
getLayers($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Layer[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getLayers($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getLayers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getMaterial()`

```php
getMaterial($cloud_pk, $element_uuid, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Material
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this material.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getMaterial($cloud_pk, $element_uuid, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this material. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getMaterials()`

```php
getMaterials($cloud_pk, $element_uuid, $model_pk, $project_pk): \OpenAPI\Client\Model\Material[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getMaterials($cloud_pk, $element_uuid, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModel()`

```php
getModel($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Model
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $result = $apiInstance->getModel($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModel: ', $e->getMessage(), PHP_EOL;
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

## `getModelClassifications()`

```php
getModelClassifications($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Classification[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_pk = 56; // int
$project_pk = 56; // int

try {
    $result = $apiInstance->getModelClassifications($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_pk** | **int**|  | |
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

## `getModelMaterial()`

```php
getModelMaterial($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Material
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this material.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelMaterial($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this material. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelMaterials()`

```php
getModelMaterials($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Material[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelMaterials($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelProperties()`

```php
getModelProperties($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Property[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelProperties($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelProperty()`

```php
getModelProperty($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Property
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelProperty($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelPropertyDefinition()`

```php
getModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelPropertyDefinitions()`

```php
getModelPropertyDefinitions($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertyDefinition[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelPropertyDefinitions($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelPropertyDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelUnit()`

```php
getModelUnit($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Unit
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelUnit($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModelUnits()`

```php
getModelUnits($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Unit[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getModelUnits($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModelUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getModels()`

```php
getModels($cloud_pk, $project_pk, $source, $status, $type): \OpenAPI\Client\Model\Model[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $result = $apiInstance->getModels($cloud_pk, $project_pk, $source, $status, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getModels: ', $e->getMessage(), PHP_EOL;
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

## `getProcessorHandler()`

```php
getProcessorHandler($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this processor handler.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProcessorHandler($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getProcessorHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this processor handler. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getProcessorHandlers()`

```php
getProcessorHandlers($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\ProcessorHandler[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getProcessorHandlers($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getProcessorHandlers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getPropertySet()`

```php
getPropertySet($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertySet
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getPropertySet($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getPropertySets()`

```php
getPropertySets($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\PropertySet[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getPropertySets($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getPropertySets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getRawElements()`

```php
getRawElements($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\RawElements
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getRawElements($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getRawElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSimpleElement()`

```php
getSimpleElement($cloud_pk, $model_pk, $project_pk, $uuid): \OpenAPI\Client\Model\SimpleElement
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getSimpleElement($cloud_pk, $model_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSimpleElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSimpleElements()`

```php
getSimpleElements($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\SimpleElement
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSimpleElements($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSimpleElements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSpace()`

```php
getSpace($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Space
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSpace($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSpaces()`

```php
getSpaces($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Space[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSpaces($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getStorey()`

```php
getStorey($cloud_pk, $model_pk, $project_pk, $uuid): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getStorey($cloud_pk, $model_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getStorey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getStoreyPlanPositioning()`

```php
getStoreyPlanPositioning($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid): \OpenAPI\Client\Model\PositioningPlan
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string

try {
    $result = $apiInstance->getStoreyPlanPositioning($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getStoreyPlanPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getStoreys()`

```php
getStoreys($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\Storey[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getStoreys($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getStoreys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSystem()`

```php
getSystem($cloud_pk, $model_pk, $project_pk, $uuid): \OpenAPI\Client\Model\System
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getSystem($cloud_pk, $model_pk, $project_pk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getSystems()`

```php
getSystems($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\System[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getSystems($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getTileset()`

```php
getTileset($cloud_pk, $id, $project_pk, $tile_format)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $apiInstance->getTileset($cloud_pk, $id, $project_pk, $tile_format);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getTileset: ', $e->getMessage(), PHP_EOL;
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

## `getZone()`

```php
getZone($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\Zone
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getZone($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getZoneSpace()`

```php
getZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $result = $apiInstance->getZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getZoneSpaces()`

```php
getZoneSpaces($cloud_pk, $model_pk, $project_pk, $zone_pk): \OpenAPI\Client\Model\ZoneSpace[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.

try {
    $result = $apiInstance->getZoneSpaces($cloud_pk, $model_pk, $project_pk, $zone_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getZoneSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getZones()`

```php
getZones($cloud_pk, $model_pk, $project_pk, $color): \OpenAPI\Client\Model\Zone[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$color = 'color_example'; // string

try {
    $result = $apiInstance->getZones($cloud_pk, $model_pk, $project_pk, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->getZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `linkDocumentsOfElement()`

```php
linkDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Document[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->linkDocumentsOfElement($cloud_pk, $element_uuid, $model_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->linkDocumentsOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `listClassificationElementRelations()`

```php
listClassificationElementRelations($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\ElementClassificationRelation[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->listClassificationElementRelations($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->listClassificationElementRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `mergeIfcs()`

```php
mergeIfcs($cloud_pk, $project_pk, $ifc_merge_request)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$project_pk = 56; // int
$ifc_merge_request = new \OpenAPI\Client\Model\IfcMergeRequest(); // \OpenAPI\Client\Model\IfcMergeRequest

try {
    $apiInstance->mergeIfcs($cloud_pk, $project_pk, $ifc_merge_request);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->mergeIfcs: ', $e->getMessage(), PHP_EOL;
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

## `optimizeIfc()`

```php
optimizeIfc($cloud_pk, $id, $project_pk, $ifc_optimize_request)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $apiInstance->optimizeIfc($cloud_pk, $id, $project_pk, $ifc_optimize_request);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->optimizeIfc: ', $e->getMessage(), PHP_EOL;
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

## `removeAllElementPropertySet()`

```php
removeAllElementPropertySet($cloud_pk, $element_uuid, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$model_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeAllElementPropertySet($cloud_pk, $element_uuid, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeAllElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **model_pk** | **int**|  | |
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

## `removeClassificationOfElement()`

```php
removeClassificationOfElement($cloud_pk, $element_uuid, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this classification.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeClassificationOfElement($cloud_pk, $element_uuid, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeClassificationOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this classification. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `removeDocumentOfElement()`

```php
removeDocumentOfElement($cloud_pk, $element_uuid, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this document.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeDocumentOfElement($cloud_pk, $element_uuid, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeDocumentOfElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this document. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `removeElementPropertySet()`

```php
removeElementPropertySet($cloud_pk, $element_uuid, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property set.
$model_pk = 56; // int
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->removeElementPropertySet($cloud_pk, $element_uuid, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeElementPropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **model_pk** | **int**|  | |
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

## `removeElementPropertySetProperty()`

```php
removeElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `removeElementPropertySetPropertyDefinition()`

```php
removeElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertyset_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property definition.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetPropertyDefinition($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeElementPropertySetPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `removeElementPropertySetPropertyDefinitionUnit()`

```php
removeElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this unit.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$property_pk = 56; // int | A unique integer value identifying this property.
$propertydefinition_pk = 56; // int | A unique integer value identifying this property definition.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.

try {
    $apiInstance->removeElementPropertySetPropertyDefinitionUnit($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $property_pk, $propertydefinition_pk, $propertyset_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeElementPropertySetPropertyDefinitionUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `removeElementsFromClassification()`

```php
removeElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk, $uuid)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$model_classification_pk = 56; // int | A unique integer value identifying this classification.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string

try {
    $apiInstance->removeElementsFromClassification($cloud_pk, $model_classification_pk, $model_pk, $project_pk, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->removeElementsFromClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**|  | |
| **model_classification_pk** | **int**| A unique integer value identifying this classification. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `reprocessModel()`

```php
reprocessModel($cloud_pk, $id, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int
$id = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int

try {
    $apiInstance->reprocessModel($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->reprocessModel: ', $e->getMessage(), PHP_EOL;
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

## `updateAccessToken()`

```php
updateAccessToken($cloud_pk, $model_pk, $project_pk, $token, $patched_ifc_access_token_request): \OpenAPI\Client\Model\IfcAccessToken
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$token = 'token_example'; // string
$patched_ifc_access_token_request = new \OpenAPI\Client\Model\PatchedIfcAccessTokenRequest(); // \OpenAPI\Client\Model\PatchedIfcAccessTokenRequest

try {
    $result = $apiInstance->updateAccessToken($cloud_pk, $model_pk, $project_pk, $token, $patched_ifc_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateBuilding()`

```php
updateBuilding($cloud_pk, $model_pk, $project_pk, $uuid, $patched_storey_building_request): \OpenAPI\Client\Model\Building
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_storey_building_request = new \OpenAPI\Client\Model\PatchedStoreyBuildingRequest(); // \OpenAPI\Client\Model\PatchedStoreyBuildingRequest

try {
    $result = $apiInstance->updateBuilding($cloud_pk, $model_pk, $project_pk, $uuid, $patched_storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateBuilding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateBuildingPlanPositioning()`

```php
updateBuildingPlanPositioning($building_uuid, $cloud_pk, $id, $model_pk, $project_pk, $patched_positioning_plan_request): \OpenAPI\Client\Model\PositioningPlan
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_positioning_plan_request = new \OpenAPI\Client\Model\PatchedPositioningPlanRequest(); // \OpenAPI\Client\Model\PatchedPositioningPlanRequest

try {
    $result = $apiInstance->updateBuildingPlanPositioning($building_uuid, $cloud_pk, $id, $model_pk, $project_pk, $patched_positioning_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateBuildingPlanPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateElement()`

```php
updateElement($cloud_pk, $model_pk, $project_pk, $uuid, $patched_element_request): \OpenAPI\Client\Model\Element
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_element_request = new \OpenAPI\Client\Model\PatchedElementRequest(); // \OpenAPI\Client\Model\PatchedElementRequest

try {
    $result = $apiInstance->updateElement($cloud_pk, $model_pk, $project_pk, $uuid, $patched_element_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateElement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateElementPropertySetProperty()`

```php
updateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk, $patched_property_request): \OpenAPI\Client\Model\Property
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$element_uuid = 'element_uuid_example'; // string
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$propertyset_pk = 56; // int | A unique integer value identifying this property set.
$patched_property_request = new \OpenAPI\Client\Model\PatchedPropertyRequest(); // \OpenAPI\Client\Model\PatchedPropertyRequest

try {
    $result = $apiInstance->updateElementPropertySetProperty($cloud_pk, $element_uuid, $id, $model_pk, $project_pk, $propertyset_pk, $patched_property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateElementPropertySetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **element_uuid** | **string**|  | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateLayer()`

```php
updateLayer($cloud_pk, $id, $model_pk, $project_pk, $patched_layer_request): \OpenAPI\Client\Model\Layer
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this layer.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_layer_request = new \OpenAPI\Client\Model\PatchedLayerRequest(); // \OpenAPI\Client\Model\PatchedLayerRequest

try {
    $result = $apiInstance->updateLayer($cloud_pk, $id, $model_pk, $project_pk, $patched_layer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this layer. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateModel()`

```php
updateModel($cloud_pk, $id, $project_pk, $patched_model_request): \OpenAPI\Client\Model\Model
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $result = $apiInstance->updateModel($cloud_pk, $id, $project_pk, $patched_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateModel: ', $e->getMessage(), PHP_EOL;
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

## `updateModelFiles()`

```php
updateModelFiles($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $preview_file, $xkt_file): \OpenAPI\Client\Model\ModelFiles
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
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
    $result = $apiInstance->updateModelFiles($cloud_pk, $id, $project_pk, $structure_file, $systems_file, $map_file, $gltf_file, $gltf_with_openings_file, $bvh_tree_file, $preview_file, $xkt_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateModelFiles: ', $e->getMessage(), PHP_EOL;
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

## `updateModelProperty()`

```php
updateModelProperty($cloud_pk, $id, $model_pk, $project_pk, $patched_property_request): \OpenAPI\Client\Model\Property
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_request = new \OpenAPI\Client\Model\PatchedPropertyRequest(); // \OpenAPI\Client\Model\PatchedPropertyRequest

try {
    $result = $apiInstance->updateModelProperty($cloud_pk, $id, $model_pk, $project_pk, $patched_property_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateModelProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateModelPropertyDefinition()`

```php
updateModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk, $patched_property_definition_request): \OpenAPI\Client\Model\PropertyDefinition
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property definition.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_definition_request = new \OpenAPI\Client\Model\PatchedPropertyDefinitionRequest(); // \OpenAPI\Client\Model\PatchedPropertyDefinitionRequest

try {
    $result = $apiInstance->updateModelPropertyDefinition($cloud_pk, $id, $model_pk, $project_pk, $patched_property_definition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateModelPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property definition. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateModelUnit()`

```php
updateModelUnit($cloud_pk, $id, $model_pk, $project_pk, $patched_unit_request): \OpenAPI\Client\Model\Unit
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this unit.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_unit_request = new \OpenAPI\Client\Model\PatchedUnitRequest(); // \OpenAPI\Client\Model\PatchedUnitRequest

try {
    $result = $apiInstance->updateModelUnit($cloud_pk, $id, $model_pk, $project_pk, $patched_unit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateModelUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this unit. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateOrderBuildingPlan()`

```php
updateOrderBuildingPlan($building_uuid, $cloud_pk, $model_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$building_uuid = 'building_uuid_example'; // string
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->updateOrderBuildingPlan($building_uuid, $cloud_pk, $model_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateOrderBuildingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **building_uuid** | **string**|  | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateOrderStoreyPlan()`

```php
updateOrderStoreyPlan($cloud_pk, $model_pk, $project_pk, $storey_uuid, $request_body): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$request_body = array(56); // int[]

try {
    $result = $apiInstance->updateOrderStoreyPlan($cloud_pk, $model_pk, $project_pk, $storey_uuid, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateOrderStoreyPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateOrderStoreys()`

```php
updateOrderStoreys($cloud_pk, $model_pk, $project_pk, $request_body): \OpenAPI\Client\Model\Storey[]
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->updateOrderStoreys($cloud_pk, $model_pk, $project_pk, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateOrderStoreys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateProcessorHandler()`

```php
updateProcessorHandler($cloud_pk, $id, $model_pk, $project_pk, $patched_processor_handler_request): \OpenAPI\Client\Model\ProcessorHandler
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this processor handler.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_processor_handler_request = new \OpenAPI\Client\Model\PatchedProcessorHandlerRequest(); // \OpenAPI\Client\Model\PatchedProcessorHandlerRequest

try {
    $result = $apiInstance->updateProcessorHandler($cloud_pk, $id, $model_pk, $project_pk, $patched_processor_handler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateProcessorHandler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this processor handler. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updatePropertySet()`

```php
updatePropertySet($cloud_pk, $id, $model_pk, $project_pk, $patched_property_set_request): \OpenAPI\Client\Model\PropertySet
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this property set.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_property_set_request = new \OpenAPI\Client\Model\PatchedPropertySetRequest(); // \OpenAPI\Client\Model\PatchedPropertySetRequest

try {
    $result = $apiInstance->updatePropertySet($cloud_pk, $id, $model_pk, $project_pk, $patched_property_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updatePropertySet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this property set. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateSpace()`

```php
updateSpace($cloud_pk, $id, $model_pk, $project_pk, $patched_space_request): \OpenAPI\Client\Model\Space
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_space_request = new \OpenAPI\Client\Model\PatchedSpaceRequest(); // \OpenAPI\Client\Model\PatchedSpaceRequest

try {
    $result = $apiInstance->updateSpace($cloud_pk, $id, $model_pk, $project_pk, $patched_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateStorey()`

```php
updateStorey($cloud_pk, $model_pk, $project_pk, $uuid, $patched_storey_building_request): \OpenAPI\Client\Model\Storey
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_storey_building_request = new \OpenAPI\Client\Model\PatchedStoreyBuildingRequest(); // \OpenAPI\Client\Model\PatchedStoreyBuildingRequest

try {
    $result = $apiInstance->updateStorey($cloud_pk, $model_pk, $project_pk, $uuid, $patched_storey_building_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateStorey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateStoreyPlanPositioning()`

```php
updateStoreyPlanPositioning($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid, $patched_positioning_plan_request): \OpenAPI\Client\Model\PositioningPlan
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this element.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$storey_uuid = 'storey_uuid_example'; // string
$patched_positioning_plan_request = new \OpenAPI\Client\Model\PatchedPositioningPlanRequest(); // \OpenAPI\Client\Model\PatchedPositioningPlanRequest

try {
    $result = $apiInstance->updateStoreyPlanPositioning($cloud_pk, $id, $model_pk, $project_pk, $storey_uuid, $patched_positioning_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateStoreyPlanPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this element. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateSystem()`

```php
updateSystem($cloud_pk, $model_pk, $project_pk, $uuid, $patched_system_request): \OpenAPI\Client\Model\System
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$uuid = 'uuid_example'; // string
$patched_system_request = new \OpenAPI\Client\Model\PatchedSystemRequest(); // \OpenAPI\Client\Model\PatchedSystemRequest

try {
    $result = $apiInstance->updateSystem($cloud_pk, $model_pk, $project_pk, $uuid, $patched_system_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateZone()`

```php
updateZone($cloud_pk, $id, $model_pk, $project_pk, $patched_zone_request): \OpenAPI\Client\Model\Zone
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this zone.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_zone_request = new \OpenAPI\Client\Model\PatchedZoneRequest(); // \OpenAPI\Client\Model\PatchedZoneRequest

try {
    $result = $apiInstance->updateZone($cloud_pk, $id, $model_pk, $project_pk, $patched_zone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this zone. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateZoneSpace()`

```php
updateZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk, $patched_zone_space_request): \OpenAPI\Client\Model\ZoneSpace
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


$apiInstance = new OpenAPI\Client\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this space.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$zone_pk = 56; // int | A unique integer value identifying this zone.
$patched_zone_space_request = new \OpenAPI\Client\Model\PatchedZoneSpaceRequest(); // \OpenAPI\Client\Model\PatchedZoneSpaceRequest

try {
    $result = $apiInstance->updateZoneSpace($cloud_pk, $id, $model_pk, $project_pk, $zone_pk, $patched_zone_space_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->updateZoneSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this space. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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
