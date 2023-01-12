# OpenAPIClient-php

BIMData API is a tool to interact with your models stored on BIMData’s servers.
    Through the API, you can manage your projects, the clouds, upload your IFC files and manage them through endpoints.

For more information, please visit [https://bimdata.io/](https://bimdata.io/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BcfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_pk = 56; // int | A unique integer value identifying this project.
$topics_guid = 'topics_guid_example'; // string
$comment_request = new \OpenAPI\Client\Model\CommentRequest(); // \OpenAPI\Client\Model\CommentRequest

try {
    $result = $apiInstance->createComment($projects_pk, $topics_guid, $comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BcfApi->createComment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BcfApi* | [**createComment**](docs/Api/BcfApi.md#createcomment) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Create a comment
*BcfApi* | [**createExtensionLabel**](docs/Api/BcfApi.md#createextensionlabel) | **POST** /bcf/2.1/projects/{projects_pk}/extension/label | Create a Label
*BcfApi* | [**createExtensionPriority**](docs/Api/BcfApi.md#createextensionpriority) | **POST** /bcf/2.1/projects/{projects_pk}/extension/priority | Create a Priority
*BcfApi* | [**createExtensionStage**](docs/Api/BcfApi.md#createextensionstage) | **POST** /bcf/2.1/projects/{projects_pk}/extension/stage | Create a Stage
*BcfApi* | [**createExtensionStatus**](docs/Api/BcfApi.md#createextensionstatus) | **POST** /bcf/2.1/projects/{projects_pk}/extension/status | Create a TopicStatus
*BcfApi* | [**createExtensionType**](docs/Api/BcfApi.md#createextensiontype) | **POST** /bcf/2.1/projects/{projects_pk}/extension/type | Create a TopicType
*BcfApi* | [**createFullTopic**](docs/Api/BcfApi.md#createfulltopic) | **POST** /bcf/2.1/projects/{projects_pk}/full-topic | Create a Topic with viewpoints and comments
*BcfApi* | [**createTopic**](docs/Api/BcfApi.md#createtopic) | **POST** /bcf/2.1/projects/{projects_pk}/topics | Create a topic
*BcfApi* | [**createViewpoint**](docs/Api/BcfApi.md#createviewpoint) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Create a Viewpoint
*BcfApi* | [**deleteComment**](docs/Api/BcfApi.md#deletecomment) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Delete a comment
*BcfApi* | [**deleteExtensionLabel**](docs/Api/BcfApi.md#deleteextensionlabel) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/label/{id} | Delete a Label
*BcfApi* | [**deleteExtensionPriority**](docs/Api/BcfApi.md#deleteextensionpriority) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/priority/{id} | Delete a Priority
*BcfApi* | [**deleteExtensionStage**](docs/Api/BcfApi.md#deleteextensionstage) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/stage/{id} | Delete a Stage
*BcfApi* | [**deleteExtensionStatus**](docs/Api/BcfApi.md#deleteextensionstatus) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/status/{id} | Delete a TopicStatus
*BcfApi* | [**deleteExtensionType**](docs/Api/BcfApi.md#deleteextensiontype) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/type/{id} | Delete a TopicType
*BcfApi* | [**deleteTopic**](docs/Api/BcfApi.md#deletetopic) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Delete a topic
*BcfApi* | [**deleteViewpoint**](docs/Api/BcfApi.md#deleteviewpoint) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Delete a Viewpoint
*BcfApi* | [**downloadBcfExport**](docs/Api/BcfApi.md#downloadbcfexport) | **GET** /bcf/2.1/projects/{id}/export | Export project&#39;s topics in bcf-xml format
*BcfApi* | [**fullUpdateBcfProject**](docs/Api/BcfApi.md#fullupdatebcfproject) | **PUT** /bcf/2.1/projects/{id} | Update all fields of a BCF project
*BcfApi* | [**fullUpdateComment**](docs/Api/BcfApi.md#fullupdatecomment) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update all fields of a comment
*BcfApi* | [**fullUpdateFullTopic**](docs/Api/BcfApi.md#fullupdatefulltopic) | **PUT** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update all fields of a topic
*BcfApi* | [**fullUpdateTopic**](docs/Api/BcfApi.md#fullupdatetopic) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update all fields of a topic
*BcfApi* | [**fullUpdateViewpoint**](docs/Api/BcfApi.md#fullupdateviewpoint) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update all fields of a Viewpoint
*BcfApi* | [**getBcfProject**](docs/Api/BcfApi.md#getbcfproject) | **GET** /bcf/2.1/projects/{id} | Retrieve a BCF project
*BcfApi* | [**getBcfProjects**](docs/Api/BcfApi.md#getbcfprojects) | **GET** /bcf/2.1/projects | Retrieve all BCF projects
*BcfApi* | [**getColorings**](docs/Api/BcfApi.md#getcolorings) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/coloring | Retrieve all colorings of a viewpoint
*BcfApi* | [**getComment**](docs/Api/BcfApi.md#getcomment) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Retrieve a comment
*BcfApi* | [**getComments**](docs/Api/BcfApi.md#getcomments) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Retrieve all comments
*BcfApi* | [**getDetailedExtensions**](docs/Api/BcfApi.md#getdetailedextensions) | **GET** /bcf/2.1/projects/{id}/detailed-extensions | Retrieve project detailed extensions
*BcfApi* | [**getExtensions**](docs/Api/BcfApi.md#getextensions) | **GET** /bcf/2.1/projects/{id}/extensions | Retrieve project extensions
*BcfApi* | [**getFullTopic**](docs/Api/BcfApi.md#getfulltopic) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Retrieve a full topic
*BcfApi* | [**getFullTopics**](docs/Api/BcfApi.md#getfulltopics) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic | Retrieve all full topics
*BcfApi* | [**getSelections**](docs/Api/BcfApi.md#getselections) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/selection | Retrieve all selections of a viewpoint
*BcfApi* | [**getSnapshot**](docs/Api/BcfApi.md#getsnapshot) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/snapshot | Retrieve the viewpoint&#39; snapshot
*BcfApi* | [**getTopic**](docs/Api/BcfApi.md#gettopic) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Retrieve a topic
*BcfApi* | [**getTopicViewpoints**](docs/Api/BcfApi.md#gettopicviewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/topic-viewpoints | Retrieve all viewpoints attached to the topic
*BcfApi* | [**getTopics**](docs/Api/BcfApi.md#gettopics) | **GET** /bcf/2.1/projects/{projects_pk}/topics | Retrieve all topics
*BcfApi* | [**getUser**](docs/Api/BcfApi.md#getuser) | **GET** /bcf/2.1/current-user | Get current user info
*BcfApi* | [**getViewpoint**](docs/Api/BcfApi.md#getviewpoint) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Retrieve a Viewpoint
*BcfApi* | [**getViewpoints**](docs/Api/BcfApi.md#getviewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Retrieve all Viewpoints of a topic
*BcfApi* | [**getVisibilities**](docs/Api/BcfApi.md#getvisibilities) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/visibility | Retrieve all visibilities of a viewpoint
*BcfApi* | [**importBcf**](docs/Api/BcfApi.md#importbcf) | **POST** /bcf/2.1/projects/{id}/import | Import bcf-xml format into this project
*BcfApi* | [**updateBcfProject**](docs/Api/BcfApi.md#updatebcfproject) | **PATCH** /bcf/2.1/projects/{id} | Update some fields of a BCF project
*BcfApi* | [**updateComment**](docs/Api/BcfApi.md#updatecomment) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update some fields of a comment
*BcfApi* | [**updateExtensionLabel**](docs/Api/BcfApi.md#updateextensionlabel) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/label/{id} | Update a Label
*BcfApi* | [**updateExtensionPriority**](docs/Api/BcfApi.md#updateextensionpriority) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/priority/{id} | Update a Priority
*BcfApi* | [**updateExtensionStage**](docs/Api/BcfApi.md#updateextensionstage) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/stage/{id} | Update a Stage
*BcfApi* | [**updateExtensionStatus**](docs/Api/BcfApi.md#updateextensionstatus) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/status/{id} | Update a TopicStatus
*BcfApi* | [**updateExtensionType**](docs/Api/BcfApi.md#updateextensiontype) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/type/{id} | Update a TopicType
*BcfApi* | [**updateFullTopic**](docs/Api/BcfApi.md#updatefulltopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update some fields of a topic
*BcfApi* | [**updateTopic**](docs/Api/BcfApi.md#updatetopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update some fields of a topic
*BcfApi* | [**updateViewpoint**](docs/Api/BcfApi.md#updateviewpoint) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update some fields of a Viewpoint
*CheckerApi* | [**createChecker**](docs/Api/CheckerApi.md#createchecker) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Create a checker to a model
*CheckerApi* | [**createCheckerResult**](docs/Api/CheckerApi.md#createcheckerresult) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Create a CheckerResult
*CheckerApi* | [**createCheckplan**](docs/Api/CheckerApi.md#createcheckplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Create a Checkplan
*CheckerApi* | [**createRule**](docs/Api/CheckerApi.md#createrule) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Create a Rule
*CheckerApi* | [**createRuleComponent**](docs/Api/CheckerApi.md#createrulecomponent) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Create a RuleComponent
*CheckerApi* | [**createRuleset**](docs/Api/CheckerApi.md#createruleset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Create a Ruleset
*CheckerApi* | [**deleteChecker**](docs/Api/CheckerApi.md#deletechecker) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Delete a checker of a model
*CheckerApi* | [**deleteCheckerResult**](docs/Api/CheckerApi.md#deletecheckerresult) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult
*CheckerApi* | [**deleteCheckplan**](docs/Api/CheckerApi.md#deletecheckplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Delete a Checkplan
*CheckerApi* | [**deleteRule**](docs/Api/CheckerApi.md#deleterule) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Delete a Rule
*CheckerApi* | [**deleteRuleComponent**](docs/Api/CheckerApi.md#deleterulecomponent) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Delete a RuleComponent
*CheckerApi* | [**deleteRuleset**](docs/Api/CheckerApi.md#deleteruleset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Delete a Ruleset
*CheckerApi* | [**getChecker**](docs/Api/CheckerApi.md#getchecker) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Retrieve a checker of a model
*CheckerApi* | [**getCheckerResult**](docs/Api/CheckerApi.md#getcheckerresult) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult
*CheckerApi* | [**getCheckerResults**](docs/Api/CheckerApi.md#getcheckerresults) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults
*CheckerApi* | [**getCheckers**](docs/Api/CheckerApi.md#getcheckers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Retrieve all checkers of a model
*CheckerApi* | [**getCheckplan**](docs/Api/CheckerApi.md#getcheckplan) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Retrieve one Checkplan
*CheckerApi* | [**getCheckplans**](docs/Api/CheckerApi.md#getcheckplans) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Retrieve all Checkplans
*CheckerApi* | [**getRule**](docs/Api/CheckerApi.md#getrule) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Retrieve one Rule
*CheckerApi* | [**getRuleComponent**](docs/Api/CheckerApi.md#getrulecomponent) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Retrieve one RuleComponent
*CheckerApi* | [**getRuleComponents**](docs/Api/CheckerApi.md#getrulecomponents) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Retrieve all RuleComponents
*CheckerApi* | [**getRules**](docs/Api/CheckerApi.md#getrules) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Retrieve all Rules
*CheckerApi* | [**getRuleset**](docs/Api/CheckerApi.md#getruleset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Retrieve one Ruleset
*CheckerApi* | [**getRulesets**](docs/Api/CheckerApi.md#getrulesets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Retrieve all Rulesets
*CheckerApi* | [**launchNewCheck**](docs/Api/CheckerApi.md#launchnewcheck) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id}/launch-check | Launch a new check on the model
*CheckerApi* | [**updateChecker**](docs/Api/CheckerApi.md#updatechecker) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Update some fields of a checker of a model
*CheckerApi* | [**updateCheckerResult**](docs/Api/CheckerApi.md#updatecheckerresult) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult
*CheckerApi* | [**updateCheckplan**](docs/Api/CheckerApi.md#updatecheckplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Update some fields of a Checkplan
*CheckerApi* | [**updateRule**](docs/Api/CheckerApi.md#updaterule) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Update some fields of a Rule
*CheckerApi* | [**updateRuleComponent**](docs/Api/CheckerApi.md#updaterulecomponent) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Update some fields of a RuleComponent
*CheckerApi* | [**updateRuleset**](docs/Api/CheckerApi.md#updateruleset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Update some fields of a Ruleset
*CollaborationApi* | [**acceptUserInvitation**](docs/Api/CollaborationApi.md#acceptuserinvitation) | **POST** /user/invitations/{id}/accept | Accept an invitation
*CollaborationApi* | [**acceptValidation**](docs/Api/CollaborationApi.md#acceptvalidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/accept | Accept a validation
*CollaborationApi* | [**addDocumentTag**](docs/Api/CollaborationApi.md#adddocumenttag) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/tag | Add a tag to a document
*CollaborationApi* | [**addGroupMember**](docs/Api/CollaborationApi.md#addgroupmember) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member | Add a user to a group
*CollaborationApi* | [**cancelCloudUserInvitation**](docs/Api/CollaborationApi.md#cancelclouduserinvitation) | **DELETE** /cloud/{cloud_pk}/invitation/{id} | Cancel a pending invitation
*CollaborationApi* | [**cancelProjectUserInvitation**](docs/Api/CollaborationApi.md#cancelprojectuserinvitation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/invitation/{id} | Cancel a pending invitation
*CollaborationApi* | [**checkAccess**](docs/Api/CollaborationApi.md#checkaccess) | **GET** /cloud/{id}/check-access | Check app access from cloud
*CollaborationApi* | [**closeVisa**](docs/Api/CollaborationApi.md#closevisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/close | Close a visa of a document
*CollaborationApi* | [**createClassification**](docs/Api/CollaborationApi.md#createclassification) | **POST** /cloud/{cloud_pk}/project/{project_pk}/classification | Create a classification
*CollaborationApi* | [**createCloud**](docs/Api/CollaborationApi.md#createcloud) | **POST** /cloud | Create a cloud
*CollaborationApi* | [**createDMSTree**](docs/Api/CollaborationApi.md#createdmstree) | **POST** /cloud/{cloud_pk}/project/{id}/dms-tree | Create a complete DMS tree
*CollaborationApi* | [**createDemo**](docs/Api/CollaborationApi.md#createdemo) | **POST** /cloud/{id}/create-demo | Create a Demo project in a cloud
*CollaborationApi* | [**createDocument**](docs/Api/CollaborationApi.md#createdocument) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document | Create a document
*CollaborationApi* | [**createFolder**](docs/Api/CollaborationApi.md#createfolder) | **POST** /cloud/{cloud_pk}/project/{project_pk}/folder | Create a folder
*CollaborationApi* | [**createManageGroup**](docs/Api/CollaborationApi.md#createmanagegroup) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group | Create a group
*CollaborationApi* | [**createProject**](docs/Api/CollaborationApi.md#createproject) | **POST** /cloud/{cloud_pk}/project | Create a project
*CollaborationApi* | [**createProjectAccessToken**](docs/Api/CollaborationApi.md#createprojectaccesstoken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/access-token | Create a token for this project
*CollaborationApi* | [**createTag**](docs/Api/CollaborationApi.md#createtag) | **POST** /cloud/{cloud_pk}/project/{project_pk}/tag | Create a tag
*CollaborationApi* | [**createValidation**](docs/Api/CollaborationApi.md#createvalidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation | Add a validation to a visa
*CollaborationApi* | [**createVisa**](docs/Api/CollaborationApi.md#createvisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa | Create a visa
*CollaborationApi* | [**createVisaComment**](docs/Api/CollaborationApi.md#createvisacomment) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment | Add a comment
*CollaborationApi* | [**deleteAllDocumentHistory**](docs/Api/CollaborationApi.md#deletealldocumenthistory) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/delete | Delete all document history
*CollaborationApi* | [**deleteClassification**](docs/Api/CollaborationApi.md#deleteclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Delete a classification
*CollaborationApi* | [**deleteCloud**](docs/Api/CollaborationApi.md#deletecloud) | **DELETE** /cloud/{id} | Delete a cloud
*CollaborationApi* | [**deleteCloudUser**](docs/Api/CollaborationApi.md#deleteclouduser) | **DELETE** /cloud/{cloud_pk}/user/{id} | Remove a user from a cloud
*CollaborationApi* | [**deleteDocument**](docs/Api/CollaborationApi.md#deletedocument) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Delete the document
*CollaborationApi* | [**deleteDocumentTag**](docs/Api/CollaborationApi.md#deletedocumenttag) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/tag/{id} | Delete a tag from a document
*CollaborationApi* | [**deleteFolder**](docs/Api/CollaborationApi.md#deletefolder) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Delete a folder
*CollaborationApi* | [**deleteGroupMember**](docs/Api/CollaborationApi.md#deletegroupmember) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member/{id} | Delete a user from a group
*CollaborationApi* | [**deleteManageGroup**](docs/Api/CollaborationApi.md#deletemanagegroup) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Delete a group
*CollaborationApi* | [**deleteProject**](docs/Api/CollaborationApi.md#deleteproject) | **DELETE** /cloud/{cloud_pk}/project/{id} | Delete a project
*CollaborationApi* | [**deleteProjectAccessToken**](docs/Api/CollaborationApi.md#deleteprojectaccesstoken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Delete a token
*CollaborationApi* | [**deleteProjectUser**](docs/Api/CollaborationApi.md#deleteprojectuser) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Remove a user from a project
*CollaborationApi* | [**deleteTag**](docs/Api/CollaborationApi.md#deletetag) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Delete the tag
*CollaborationApi* | [**deleteValidation**](docs/Api/CollaborationApi.md#deletevalidation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Remove a validation
*CollaborationApi* | [**deleteVisa**](docs/Api/CollaborationApi.md#deletevisa) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Remove a visa
*CollaborationApi* | [**deleteVisaComment**](docs/Api/CollaborationApi.md#deletevisacomment) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Remove a comment
*CollaborationApi* | [**denyUserInvitation**](docs/Api/CollaborationApi.md#denyuserinvitation) | **POST** /user/invitations/{id}/deny | Deny an invitation
*CollaborationApi* | [**denyValidation**](docs/Api/CollaborationApi.md#denyvalidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/deny | Deny a validation
*CollaborationApi* | [**getClassification**](docs/Api/CollaborationApi.md#getclassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Retrieve a classification
*CollaborationApi* | [**getClassifications**](docs/Api/CollaborationApi.md#getclassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification | Retrieve all classifications
*CollaborationApi* | [**getCloud**](docs/Api/CollaborationApi.md#getcloud) | **GET** /cloud/{id} | Retrieve one cloud
*CollaborationApi* | [**getCloudInvitations**](docs/Api/CollaborationApi.md#getcloudinvitations) | **GET** /cloud/{cloud_pk}/invitation | Retrieve all pending invitations in the cloud
*CollaborationApi* | [**getCloudSize**](docs/Api/CollaborationApi.md#getcloudsize) | **GET** /cloud/{id}/size | Get size of the cloud
*CollaborationApi* | [**getCloudUser**](docs/Api/CollaborationApi.md#getclouduser) | **GET** /cloud/{cloud_pk}/user/{id} | Retrieve a user in a cloud
*CollaborationApi* | [**getCloudUsers**](docs/Api/CollaborationApi.md#getcloudusers) | **GET** /cloud/{cloud_pk}/user | Retrieve all users in a cloud, or a list with a filter by email
*CollaborationApi* | [**getClouds**](docs/Api/CollaborationApi.md#getclouds) | **GET** /cloud | Retrieve all clouds
*CollaborationApi* | [**getDocument**](docs/Api/CollaborationApi.md#getdocument) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Retrieve a document
*CollaborationApi* | [**getDocumentHistories**](docs/Api/CollaborationApi.md#getdocumenthistories) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history | Retrieve all document histories
*CollaborationApi* | [**getDocuments**](docs/Api/CollaborationApi.md#getdocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document | Retrieve all documents
*CollaborationApi* | [**getFolder**](docs/Api/CollaborationApi.md#getfolder) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Retrieve a folder
*CollaborationApi* | [**getFolderProjectUsers**](docs/Api/CollaborationApi.md#getfolderprojectusers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/user | Retrieve all users in a project with the permission on the folder
*CollaborationApi* | [**getFolders**](docs/Api/CollaborationApi.md#getfolders) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder | Retrieve all folders
*CollaborationApi* | [**getGroup**](docs/Api/CollaborationApi.md#getgroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group/{id} | Retrieve a group
*CollaborationApi* | [**getGroups**](docs/Api/CollaborationApi.md#getgroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group | Retrieve all groups
*CollaborationApi* | [**getManageGroup**](docs/Api/CollaborationApi.md#getmanagegroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Retrieve a group
*CollaborationApi* | [**getManageGroups**](docs/Api/CollaborationApi.md#getmanagegroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group | Retrieve all groups
*CollaborationApi* | [**getProject**](docs/Api/CollaborationApi.md#getproject) | **GET** /cloud/{cloud_pk}/project/{id} | Retrieve a project
*CollaborationApi* | [**getProjectAccessToken**](docs/Api/CollaborationApi.md#getprojectaccesstoken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Retrieve one token created for this project
*CollaborationApi* | [**getProjectAccessTokens**](docs/Api/CollaborationApi.md#getprojectaccesstokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token | Retrieve all tokens created for this project
*CollaborationApi* | [**getProjectCreatorVisas**](docs/Api/CollaborationApi.md#getprojectcreatorvisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/visa/creator | List visas created by user
*CollaborationApi* | [**getProjectDMSTree**](docs/Api/CollaborationApi.md#getprojectdmstree) | **GET** /cloud/{cloud_pk}/project/{id}/dms-tree | Retrieve the complete DMS tree
*CollaborationApi* | [**getProjectFolderTreeSerializers**](docs/Api/CollaborationApi.md#getprojectfoldertreeserializers) | **GET** /cloud/{cloud_pk}/project/folder-trees | Retrieve folder tree for all projects
*CollaborationApi* | [**getProjectInvitations**](docs/Api/CollaborationApi.md#getprojectinvitations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/invitation | Retrieve all pending invitations in the project
*CollaborationApi* | [**getProjectSize**](docs/Api/CollaborationApi.md#getprojectsize) | **GET** /cloud/{cloud_pk}/project/{id}/size | Get size of all model files in the project
*CollaborationApi* | [**getProjectSubTree**](docs/Api/CollaborationApi.md#getprojectsubtree) | **GET** /cloud/{cloud_pk}/project/subtree | Retrieve the complete projects tree of the cloud
*CollaborationApi* | [**getProjectTree**](docs/Api/CollaborationApi.md#getprojecttree) | **GET** /cloud/{cloud_pk}/project/{id}/tree | Retrieve the complete DMS tree
*CollaborationApi* | [**getProjectUsers**](docs/Api/CollaborationApi.md#getprojectusers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user | Retrieve all users in a project, or a list with a filter by email
*CollaborationApi* | [**getProjectValidatorVisas**](docs/Api/CollaborationApi.md#getprojectvalidatorvisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/visa/validator | List visas where user is a validator
*CollaborationApi* | [**getProjects**](docs/Api/CollaborationApi.md#getprojects) | **GET** /cloud/{cloud_pk}/project | Retrieve all projects
*CollaborationApi* | [**getSelfProjects**](docs/Api/CollaborationApi.md#getselfprojects) | **GET** /user/projects | List current user&#39;s projects
*CollaborationApi* | [**getSelfUser**](docs/Api/CollaborationApi.md#getselfuser) | **GET** /user | Get info about the current user
*CollaborationApi* | [**getTag**](docs/Api/CollaborationApi.md#gettag) | **GET** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Retrieve a tag
*CollaborationApi* | [**getTags**](docs/Api/CollaborationApi.md#gettags) | **GET** /cloud/{cloud_pk}/project/{project_pk}/tag | Retrieve all tags
*CollaborationApi* | [**getUserInvitation**](docs/Api/CollaborationApi.md#getuserinvitation) | **GET** /user/invitations/{id} | Retrieve an invitation
*CollaborationApi* | [**getUserInvitations**](docs/Api/CollaborationApi.md#getuserinvitations) | **GET** /user/invitations | List user&#39;s invitations
*CollaborationApi* | [**getValidation**](docs/Api/CollaborationApi.md#getvalidation) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Retrieve a validation to a visa
*CollaborationApi* | [**getValidations**](docs/Api/CollaborationApi.md#getvalidations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation | List all validations to a visa
*CollaborationApi* | [**getVisa**](docs/Api/CollaborationApi.md#getvisa) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Retrieve a visa of a document
*CollaborationApi* | [**getVisaComment**](docs/Api/CollaborationApi.md#getvisacomment) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Retrieve a comment
*CollaborationApi* | [**getVisaComments**](docs/Api/CollaborationApi.md#getvisacomments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment | List all comment of a visa
*CollaborationApi* | [**getVisas**](docs/Api/CollaborationApi.md#getvisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa | List all visas of a document
*CollaborationApi* | [**inviteCloudUser**](docs/Api/CollaborationApi.md#inviteclouduser) | **POST** /cloud/{cloud_pk}/invitation | Invite a cloud administrator
*CollaborationApi* | [**inviteProjectUser**](docs/Api/CollaborationApi.md#inviteprojectuser) | **POST** /cloud/{cloud_pk}/project/{project_pk}/invitation | Invite a project member
*CollaborationApi* | [**leaveProject**](docs/Api/CollaborationApi.md#leaveproject) | **POST** /cloud/{cloud_pk}/project/{id}/leave | Leave the project
*CollaborationApi* | [**leaveVersionDocumentHistory**](docs/Api/CollaborationApi.md#leaveversiondocumenthistory) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/{id}/leave | Leave the history version
*CollaborationApi* | [**makeHeadVersionDocumentHistory**](docs/Api/CollaborationApi.md#makeheadversiondocumenthistory) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/{id}/head-version | Make the head of the version
*CollaborationApi* | [**pauseVisa**](docs/Api/CollaborationApi.md#pausevisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/pause | Pause a visa of a document
*CollaborationApi* | [**resetValidation**](docs/Api/CollaborationApi.md#resetvalidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/reset | Reset a validation
*CollaborationApi* | [**resumeVisa**](docs/Api/CollaborationApi.md#resumevisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/resume | Resume a visa of a document
*CollaborationApi* | [**updateClassification**](docs/Api/CollaborationApi.md#updateclassification) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update some fields of a classification
*CollaborationApi* | [**updateCloud**](docs/Api/CollaborationApi.md#updatecloud) | **PATCH** /cloud/{id} | Update some fields of a cloud
*CollaborationApi* | [**updateCloudUser**](docs/Api/CollaborationApi.md#updateclouduser) | **PATCH** /cloud/{cloud_pk}/user/{id} | Change the user role in the cloud
*CollaborationApi* | [**updateDocument**](docs/Api/CollaborationApi.md#updatedocument) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update some fields of the document
*CollaborationApi* | [**updateFolder**](docs/Api/CollaborationApi.md#updatefolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update some fields of a folder
*CollaborationApi* | [**updateGroupFolder**](docs/Api/CollaborationApi.md#updategroupfolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
*CollaborationApi* | [**updateManageGroup**](docs/Api/CollaborationApi.md#updatemanagegroup) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update some fields of a group
*CollaborationApi* | [**updateProject**](docs/Api/CollaborationApi.md#updateproject) | **PATCH** /cloud/{cloud_pk}/project/{id} | Update some fields of a project
*CollaborationApi* | [**updateProjectAccessToken**](docs/Api/CollaborationApi.md#updateprojectaccesstoken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update some fields of a token
*CollaborationApi* | [**updateProjectUser**](docs/Api/CollaborationApi.md#updateprojectuser) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Change the user role in the cloud
*CollaborationApi* | [**updateTag**](docs/Api/CollaborationApi.md#updatetag) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Update some fields of the tag
*CollaborationApi* | [**updateValidation**](docs/Api/CollaborationApi.md#updatevalidation) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Update the validator of validation
*CollaborationApi* | [**updateVisa**](docs/Api/CollaborationApi.md#updatevisa) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Update some fields of a visa
*CollaborationApi* | [**updateVisaComment**](docs/Api/CollaborationApi.md#updatevisacomment) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Update some fields of a comment
*IfcApi* | [**addIfcErrorsDeprecated**](docs/Api/IfcApi.md#addifcerrorsdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/errors | Add errors to model
*IfcApi* | [**bulkDeleteIfcClassificationsDeprecated**](docs/Api/IfcApi.md#bulkdeleteifcclassificationsdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
*IfcApi* | [**bulkDeleteIfcPropertiesDeprecated**](docs/Api/IfcApi.md#bulkdeleteifcpropertiesdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_destroy | Delete many Property of a model
*IfcApi* | [**bulkDeleteIfcPropertyDefinitionsDeprecated**](docs/Api/IfcApi.md#bulkdeleteifcpropertydefinitionsdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
*IfcApi* | [**bulkDeleteIfcUnitsDeprecated**](docs/Api/IfcApi.md#bulkdeleteifcunitsdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/bulk_destroy | Delete many Units of a model
*IfcApi* | [**bulkDeletePropertySetDeprecated**](docs/Api/IfcApi.md#bulkdeletepropertysetdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
*IfcApi* | [**bulkFullUpdateElementsDeprecated**](docs/Api/IfcApi.md#bulkfullupdateelementsdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
*IfcApi* | [**bulkFullUpdateIfcPropertyDeprecated**](docs/Api/IfcApi.md#bulkfullupdateifcpropertydeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update some fields of many properties of a model
*IfcApi* | [**bulkRemoveClassificationsOfElementDeprecated**](docs/Api/IfcApi.md#bulkremoveclassificationsofelementdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
*IfcApi* | [**bulkRemoveDocumentsOfElementDeprecated**](docs/Api/IfcApi.md#bulkremovedocumentsofelementdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element
*IfcApi* | [**bulkRemoveElementsFromClassificationDeprecated**](docs/Api/IfcApi.md#bulkremoveelementsfromclassificationdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
*IfcApi* | [**bulkUpdateElementsDeprecated**](docs/Api/IfcApi.md#bulkupdateelementsdeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (all field must be defined)
*IfcApi* | [**bulkUpdateIfcPropertyDeprecated**](docs/Api/IfcApi.md#bulkupdateifcpropertydeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update all fields of many properties of a model
*IfcApi* | [**createAccessTokenDeprecated**](docs/Api/IfcApi.md#createaccesstokendeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Create a token for this model
*IfcApi* | [**createBuildingDeprecated**](docs/Api/IfcApi.md#createbuildingdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Create a building of a model
*IfcApi* | [**createBuildingPlanDeprecated**](docs/Api/IfcApi.md#createbuildingplandeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building
*IfcApi* | [**createCheckerDeprecated**](docs/Api/IfcApi.md#createcheckerdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Create a checker to a model
*IfcApi* | [**createCheckerResultDeprecated**](docs/Api/IfcApi.md#createcheckerresultdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Create a CheckerResult
*IfcApi* | [**createClassificationElementRelationsDeprecated**](docs/Api/IfcApi.md#createclassificationelementrelationsdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | Create association between existing classification and existing element
*IfcApi* | [**createClassificationsOfElementDeprecated**](docs/Api/IfcApi.md#createclassificationsofelementdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
*IfcApi* | [**createElementDeprecated**](docs/Api/IfcApi.md#createelementdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Create an element in the model
*IfcApi* | [**createElementPropertySetDeprecated**](docs/Api/IfcApi.md#createelementpropertysetdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
*IfcApi* | [**createElementPropertySetPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#createelementpropertysetpropertydefinitiondeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
*IfcApi* | [**createElementPropertySetPropertyDefinitionUnitDeprecated**](docs/Api/IfcApi.md#createelementpropertysetpropertydefinitionunitdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
*IfcApi* | [**createElementPropertySetPropertyDeprecated**](docs/Api/IfcApi.md#createelementpropertysetpropertydeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
*IfcApi* | [**createIfcDeprecated**](docs/Api/IfcApi.md#createifcdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-model | Make a PDF or Image file a Model
*IfcApi* | [**createIfcPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#createifcpropertydefinitiondeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Create a PropertyDefinition on the model
*IfcApi* | [**createIfcUnitDeprecated**](docs/Api/IfcApi.md#createifcunitdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Create a Unit on a model
*IfcApi* | [**createLayerDeprecated**](docs/Api/IfcApi.md#createlayerdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Create a layer in the model
*IfcApi* | [**createMetaBuildingDeprecated**](docs/Api/IfcApi.md#createmetabuildingdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-metabuilding | Create an empty 3D Model
*IfcApi* | [**createPropertySetDeprecated**](docs/Api/IfcApi.md#createpropertysetdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Create one or many PropertySet
*IfcApi* | [**createPropertySetElementRelationsDeprecated**](docs/Api/IfcApi.md#createpropertysetelementrelationsdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset-element | Create association between PropertySet and element
*IfcApi* | [**createRawElementsDeprecated**](docs/Api/IfcApi.md#createrawelementsdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Create elements in an optimized format
*IfcApi* | [**createSpaceDeprecated**](docs/Api/IfcApi.md#createspacedeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Create a space in the model
*IfcApi* | [**createStoreyDeprecated**](docs/Api/IfcApi.md#createstoreydeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Create a storey of a model
*IfcApi* | [**createStoreyPlanDeprecated**](docs/Api/IfcApi.md#createstoreyplandeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey
*IfcApi* | [**createSystemDeprecated**](docs/Api/IfcApi.md#createsystemdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Create a system in the model
*IfcApi* | [**createTilesetDeprecated**](docs/Api/IfcApi.md#createtilesetdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Create the tileset of the model and upload all files
*IfcApi* | [**createZoneDeprecated**](docs/Api/IfcApi.md#createzonedeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Create a zone in the model
*IfcApi* | [**createZoneSpaceDeprecated**](docs/Api/IfcApi.md#createzonespacedeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Create a space in a zone
*IfcApi* | [**deleteAccessTokenDeprecated**](docs/Api/IfcApi.md#deleteaccesstokendeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Delete a token
*IfcApi* | [**deleteBuildingDeprecated**](docs/Api/IfcApi.md#deletebuildingdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Delete a building of a model
*IfcApi* | [**deleteBuildingPlanDeprecated**](docs/Api/IfcApi.md#deletebuildingplandeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building
*IfcApi* | [**deleteCheckerDeprecated**](docs/Api/IfcApi.md#deletecheckerdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Delete a checker of a model
*IfcApi* | [**deleteCheckerResultDeprecated**](docs/Api/IfcApi.md#deletecheckerresultdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult
*IfcApi* | [**deleteElementDeprecated**](docs/Api/IfcApi.md#deleteelementdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Delete an element of a model
*IfcApi* | [**deleteIfcDeprecated**](docs/Api/IfcApi.md#deleteifcdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Delete a model
*IfcApi* | [**deleteIfcPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#deleteifcpropertydefinitiondeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
*IfcApi* | [**deleteIfcPropertyDeprecated**](docs/Api/IfcApi.md#deleteifcpropertydeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Delete a Property of a model
*IfcApi* | [**deleteIfcUnitDeprecated**](docs/Api/IfcApi.md#deleteifcunitdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Delete a Unit of a model
*IfcApi* | [**deleteIfcWithoutDocDeprecated**](docs/Api/IfcApi.md#deleteifcwithoutdocdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/delete-model | Delete the Model without deleting the related document
*IfcApi* | [**deleteLayerDeprecated**](docs/Api/IfcApi.md#deletelayerdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Delete a layer of a model
*IfcApi* | [**deletePropertySetDeprecated**](docs/Api/IfcApi.md#deletepropertysetdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Delete a PropertySet of a model
*IfcApi* | [**deleteSpaceDeprecated**](docs/Api/IfcApi.md#deletespacedeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Delete a space
*IfcApi* | [**deleteStoreyDeprecated**](docs/Api/IfcApi.md#deletestoreydeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Delete a storey of a model
*IfcApi* | [**deleteStoreyPlanDeprecated**](docs/Api/IfcApi.md#deletestoreyplandeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey
*IfcApi* | [**deleteSystemDeprecated**](docs/Api/IfcApi.md#deletesystemdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Delete a system of a model
*IfcApi* | [**deleteZoneDeprecated**](docs/Api/IfcApi.md#deletezonedeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Delete a zone of a model
*IfcApi* | [**deleteZoneSpaceDeprecated**](docs/Api/IfcApi.md#deletezonespacedeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
*IfcApi* | [**exportIfcDeprecated**](docs/Api/IfcApi.md#exportifcdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/export | Export IFC
*IfcApi* | [**fullUpdateElementDeprecated**](docs/Api/IfcApi.md#fullupdateelementdeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update all fields of an element
*IfcApi* | [**getAccessTokenDeprecated**](docs/Api/IfcApi.md#getaccesstokendeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Retrieve one token created for this model
*IfcApi* | [**getAccessTokensDeprecated**](docs/Api/IfcApi.md#getaccesstokensdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Retrieve all tokens created for this model
*IfcApi* | [**getBuildingDeprecated**](docs/Api/IfcApi.md#getbuildingdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Retrieve a building of a model
*IfcApi* | [**getBuildingPlanPositioningDeprecated**](docs/Api/IfcApi.md#getbuildingplanpositioningdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building
*IfcApi* | [**getBuildingsDeprecated**](docs/Api/IfcApi.md#getbuildingsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Retrieve all buildings of a model
*IfcApi* | [**getCheckerDeprecated**](docs/Api/IfcApi.md#getcheckerdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Retrieve a checker of a model
*IfcApi* | [**getCheckerResultDeprecated**](docs/Api/IfcApi.md#getcheckerresultdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult
*IfcApi* | [**getCheckerResultsDeprecated**](docs/Api/IfcApi.md#getcheckerresultsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults
*IfcApi* | [**getCheckersDeprecated**](docs/Api/IfcApi.md#getcheckersdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Retrieve all checkers of a model
*IfcApi* | [**getClassificationsOfElementDeprecated**](docs/Api/IfcApi.md#getclassificationsofelementdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
*IfcApi* | [**getDocumentsOfElementDeprecated**](docs/Api/IfcApi.md#getdocumentsofelementdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Retrieve all documents of an element
*IfcApi* | [**getElementDeprecated**](docs/Api/IfcApi.md#getelementdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Retrieve an element of a model
*IfcApi* | [**getElementLinkedDocumentsDeprecated**](docs/Api/IfcApi.md#getelementlinkeddocumentsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/documents | Retrieve all documents linked to any element
*IfcApi* | [**getElementPropertySetDeprecated**](docs/Api/IfcApi.md#getelementpropertysetdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
*IfcApi* | [**getElementPropertySetPropertiesDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertiesdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
*IfcApi* | [**getElementPropertySetPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitiondeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
*IfcApi* | [**getElementPropertySetPropertyDefinitionUnitDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitionunitdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
*IfcApi* | [**getElementPropertySetPropertyDefinitionUnitsDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitionunitsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
*IfcApi* | [**getElementPropertySetPropertyDefinitionsDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertydefinitionsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
*IfcApi* | [**getElementPropertySetPropertyDeprecated**](docs/Api/IfcApi.md#getelementpropertysetpropertydeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
*IfcApi* | [**getElementPropertySetsDeprecated**](docs/Api/IfcApi.md#getelementpropertysetsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
*IfcApi* | [**getElementsDeprecated**](docs/Api/IfcApi.md#getelementsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Retrieve all elements of a model
*IfcApi* | [**getElementsFromClassificationDeprecated**](docs/Api/IfcApi.md#getelementsfromclassificationdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification
*IfcApi* | [**getIfcClassificationsDeprecated**](docs/Api/IfcApi.md#getifcclassificationsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification | Retrieve all classifications in a model
*IfcApi* | [**getIfcDeprecated**](docs/Api/IfcApi.md#getifcdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Retrieve one model
*IfcApi* | [**getIfcMaterialDeprecated**](docs/Api/IfcApi.md#getifcmaterialdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material/{id} | Retrieve a material of a model
*IfcApi* | [**getIfcMaterialsDeprecated**](docs/Api/IfcApi.md#getifcmaterialsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material | Retrieve all materials of a model
*IfcApi* | [**getIfcPropertiesDeprecated**](docs/Api/IfcApi.md#getifcpropertiesdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property | Retrieve all Properties of a model
*IfcApi* | [**getIfcPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#getifcpropertydefinitiondeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
*IfcApi* | [**getIfcPropertyDefinitionsDeprecated**](docs/Api/IfcApi.md#getifcpropertydefinitionsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
*IfcApi* | [**getIfcPropertyDeprecated**](docs/Api/IfcApi.md#getifcpropertydeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Retrieve a Property of a model
*IfcApi* | [**getIfcUnitDeprecated**](docs/Api/IfcApi.md#getifcunitdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Retrieve a Unit of a model
*IfcApi* | [**getIfcUnitsDeprecated**](docs/Api/IfcApi.md#getifcunitsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Retrieve all Units of a model
*IfcApi* | [**getIfcsDeprecated**](docs/Api/IfcApi.md#getifcsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc | Retrieve all models
*IfcApi* | [**getLayerDeprecated**](docs/Api/IfcApi.md#getlayerdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Retrieve a layer of a model
*IfcApi* | [**getLayersDeprecated**](docs/Api/IfcApi.md#getlayersdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Retrieve all layers of a model
*IfcApi* | [**getMaterialDeprecated**](docs/Api/IfcApi.md#getmaterialdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
*IfcApi* | [**getMaterialsDeprecated**](docs/Api/IfcApi.md#getmaterialsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material | Retrieve all materials of a model
*IfcApi* | [**getProcessorHandlerDeprecated**](docs/Api/IfcApi.md#getprocessorhandlerdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Retrieve a processor handler
*IfcApi* | [**getProcessorHandlersDeprecated**](docs/Api/IfcApi.md#getprocessorhandlersdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler | Get all processor handlers
*IfcApi* | [**getPropertySetDeprecated**](docs/Api/IfcApi.md#getpropertysetdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Retrieve a PropertySet of a model
*IfcApi* | [**getPropertySetsDeprecated**](docs/Api/IfcApi.md#getpropertysetsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Retrieve all PropertySets of a model
*IfcApi* | [**getRawElementsDeprecated**](docs/Api/IfcApi.md#getrawelementsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Retrieve all elements in a optimized format
*IfcApi* | [**getSimpleElementDeprecated**](docs/Api/IfcApi.md#getsimpleelementdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
*IfcApi* | [**getSimpleElementsDeprecated**](docs/Api/IfcApi.md#getsimpleelementsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/simple | Retrieve all elements of a model with a simple value representation
*IfcApi* | [**getSpaceDeprecated**](docs/Api/IfcApi.md#getspacedeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Retrieve one space of the model
*IfcApi* | [**getSpacesDeprecated**](docs/Api/IfcApi.md#getspacesdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Retrieve all spaces of the model
*IfcApi* | [**getStoreyDeprecated**](docs/Api/IfcApi.md#getstoreydeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Retrieve a storey of a model
*IfcApi* | [**getStoreyPlanPositioningDeprecated**](docs/Api/IfcApi.md#getstoreyplanpositioningdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey
*IfcApi* | [**getStoreysDeprecated**](docs/Api/IfcApi.md#getstoreysdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Retrieve all storeys of a model
*IfcApi* | [**getSystemDeprecated**](docs/Api/IfcApi.md#getsystemdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Retrieve a system of a model
*IfcApi* | [**getSystemsDeprecated**](docs/Api/IfcApi.md#getsystemsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Retrieve all systems of a model
*IfcApi* | [**getTilesetDeprecated**](docs/Api/IfcApi.md#gettilesetdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Retrieve the tileset of the model
*IfcApi* | [**getZoneDeprecated**](docs/Api/IfcApi.md#getzonedeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Retrieve one zone of a model
*IfcApi* | [**getZoneSpaceDeprecated**](docs/Api/IfcApi.md#getzonespacedeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
*IfcApi* | [**getZoneSpacesDeprecated**](docs/Api/IfcApi.md#getzonespacesdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
*IfcApi* | [**getZonesDeprecated**](docs/Api/IfcApi.md#getzonesdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Retrieve zones of a model
*IfcApi* | [**launchNewCheckDeprecated**](docs/Api/IfcApi.md#launchnewcheckdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id}/launch-check | Launch a new check on the model
*IfcApi* | [**linkDocumentsOfElementDeprecated**](docs/Api/IfcApi.md#linkdocumentsofelementdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Link one or many documents to an element
*IfcApi* | [**listClassificationElementRelationsDeprecated**](docs/Api/IfcApi.md#listclassificationelementrelationsdeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | List all associations between classifications and elements
*IfcApi* | [**mergeIfcsDeprecated**](docs/Api/IfcApi.md#mergeifcsdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/merge | Merge IFC files
*IfcApi* | [**optimizeIfcDeprecated**](docs/Api/IfcApi.md#optimizeifcdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/optimize | Optimize the IFC
*IfcApi* | [**removeAllElementPropertySetDeprecated**](docs/Api/IfcApi.md#removeallelementpropertysetdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
*IfcApi* | [**removeClassificationOfElementDeprecated**](docs/Api/IfcApi.md#removeclassificationofelementdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
*IfcApi* | [**removeDocumentOfElementDeprecated**](docs/Api/IfcApi.md#removedocumentofelementdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element
*IfcApi* | [**removeElementPropertySetDeprecated**](docs/Api/IfcApi.md#removeelementpropertysetdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
*IfcApi* | [**removeElementPropertySetPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#removeelementpropertysetpropertydefinitiondeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property
*IfcApi* | [**removeElementPropertySetPropertyDefinitionUnitDeprecated**](docs/Api/IfcApi.md#removeelementpropertysetpropertydefinitionunitdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
*IfcApi* | [**removeElementPropertySetPropertyDeprecated**](docs/Api/IfcApi.md#removeelementpropertysetpropertydeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
*IfcApi* | [**removeElementsFromClassificationDeprecated**](docs/Api/IfcApi.md#removeelementsfromclassificationdeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements
*IfcApi* | [**reprocessIfcDeprecated**](docs/Api/IfcApi.md#reprocessifcdeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/reprocess | Reprocess Model file
*IfcApi* | [**updateAccessTokenDeprecated**](docs/Api/IfcApi.md#updateaccesstokendeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update some fields of a token
*IfcApi* | [**updateBuildingDeprecated**](docs/Api/IfcApi.md#updatebuildingdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Update some fields of a building
*IfcApi* | [**updateBuildingPlanPositioningDeprecated**](docs/Api/IfcApi.md#updatebuildingplanpositioningdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building
*IfcApi* | [**updateCheckerDeprecated**](docs/Api/IfcApi.md#updatecheckerdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Update some fields of a checker of a model
*IfcApi* | [**updateCheckerResultDeprecated**](docs/Api/IfcApi.md#updatecheckerresultdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult
*IfcApi* | [**updateElementDeprecated**](docs/Api/IfcApi.md#updateelementdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update some fields of an element
*IfcApi* | [**updateElementPropertySetPropertyDeprecated**](docs/Api/IfcApi.md#updateelementpropertysetpropertydeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
*IfcApi* | [**updateIfcDeprecated**](docs/Api/IfcApi.md#updateifcdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update some fields of a model
*IfcApi* | [**updateIfcFilesDeprecated**](docs/Api/IfcApi.md#updateifcfilesdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/files | Update models file (gltf, svg, structure, etc)
*IfcApi* | [**updateIfcPropertyDefinitionDeprecated**](docs/Api/IfcApi.md#updateifcpropertydefinitiondeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
*IfcApi* | [**updateIfcPropertyDeprecated**](docs/Api/IfcApi.md#updateifcpropertydeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
*IfcApi* | [**updateIfcUnitDeprecated**](docs/Api/IfcApi.md#updateifcunitdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update some fields of a Unit of a model
*IfcApi* | [**updateLayerDeprecated**](docs/Api/IfcApi.md#updatelayerdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update some fields of a layer
*IfcApi* | [**updateOrderBuildingPlanDeprecated**](docs/Api/IfcApi.md#updateorderbuildingplandeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building
*IfcApi* | [**updateOrderStoreyPlanDeprecated**](docs/Api/IfcApi.md#updateorderstoreyplandeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey
*IfcApi* | [**updateOrderStoreysDeprecated**](docs/Api/IfcApi.md#updateorderstoreysdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/order | Update order of all storey of a model
*IfcApi* | [**updateProcessorHandlerDeprecated**](docs/Api/IfcApi.md#updateprocessorhandlerdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
*IfcApi* | [**updatePropertySetDeprecated**](docs/Api/IfcApi.md#updatepropertysetdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update some fields of a PropertySet
*IfcApi* | [**updateSpaceDeprecated**](docs/Api/IfcApi.md#updatespacedeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update some fields of a space
*IfcApi* | [**updateStoreyDeprecated**](docs/Api/IfcApi.md#updatestoreydeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Update some fields of a storey
*IfcApi* | [**updateStoreyPlanPositioningDeprecated**](docs/Api/IfcApi.md#updatestoreyplanpositioningdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey
*IfcApi* | [**updateSystemDeprecated**](docs/Api/IfcApi.md#updatesystemdeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update some fields of a system
*IfcApi* | [**updateZoneDeprecated**](docs/Api/IfcApi.md#updatezonedeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update some fields of a zone
*IfcApi* | [**updateZoneSpaceDeprecated**](docs/Api/IfcApi.md#updatezonespacedeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space
*ModelApi* | [**addModelErrors**](docs/Api/ModelApi.md#addmodelerrors) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/errors | Add errors to model
*ModelApi* | [**bulkDeleteModelClassifications**](docs/Api/ModelApi.md#bulkdeletemodelclassifications) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
*ModelApi* | [**bulkDeleteModelProperties**](docs/Api/ModelApi.md#bulkdeletemodelproperties) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_destroy | Delete many Property of a model
*ModelApi* | [**bulkDeleteModelPropertyDefinitions**](docs/Api/ModelApi.md#bulkdeletemodelpropertydefinitions) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
*ModelApi* | [**bulkDeleteModelUnits**](docs/Api/ModelApi.md#bulkdeletemodelunits) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/bulk_destroy | Delete many Units of a model
*ModelApi* | [**bulkDeletePropertySet**](docs/Api/ModelApi.md#bulkdeletepropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
*ModelApi* | [**bulkFullUpdateElements**](docs/Api/ModelApi.md#bulkfullupdateelements) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
*ModelApi* | [**bulkFullUpdateModelProperty**](docs/Api/ModelApi.md#bulkfullupdatemodelproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update some fields of many properties of a model
*ModelApi* | [**bulkRemoveClassificationsOfElement**](docs/Api/ModelApi.md#bulkremoveclassificationsofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
*ModelApi* | [**bulkRemoveDocumentsOfElement**](docs/Api/ModelApi.md#bulkremovedocumentsofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element
*ModelApi* | [**bulkRemoveElementsFromClassification**](docs/Api/ModelApi.md#bulkremoveelementsfromclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
*ModelApi* | [**bulkUpdateElements**](docs/Api/ModelApi.md#bulkupdateelements) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (all field must be defined)
*ModelApi* | [**bulkUpdateModelProperty**](docs/Api/ModelApi.md#bulkupdatemodelproperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update all fields of many properties of a model
*ModelApi* | [**createAccessToken**](docs/Api/ModelApi.md#createaccesstoken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Create a token for this model
*ModelApi* | [**createBuilding**](docs/Api/ModelApi.md#createbuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Create a building of a model
*ModelApi* | [**createBuildingPlan**](docs/Api/ModelApi.md#createbuildingplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building
*ModelApi* | [**createClassificationElementRelations**](docs/Api/ModelApi.md#createclassificationelementrelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | Create association between existing classification and existing element
*ModelApi* | [**createClassificationsOfElement**](docs/Api/ModelApi.md#createclassificationsofelement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
*ModelApi* | [**createElement**](docs/Api/ModelApi.md#createelement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Create an element in the model
*ModelApi* | [**createElementPropertySet**](docs/Api/ModelApi.md#createelementpropertyset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
*ModelApi* | [**createElementPropertySetProperty**](docs/Api/ModelApi.md#createelementpropertysetproperty) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
*ModelApi* | [**createElementPropertySetPropertyDefinition**](docs/Api/ModelApi.md#createelementpropertysetpropertydefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
*ModelApi* | [**createElementPropertySetPropertyDefinitionUnit**](docs/Api/ModelApi.md#createelementpropertysetpropertydefinitionunit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
*ModelApi* | [**createLayer**](docs/Api/ModelApi.md#createlayer) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Create a layer in the model
*ModelApi* | [**createMetaBuilding**](docs/Api/ModelApi.md#createmetabuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-metabuilding | Create an empty 3D Model
*ModelApi* | [**createModel**](docs/Api/ModelApi.md#createmodel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-model | Make a PDF or Image file a Model
*ModelApi* | [**createModelPropertyDefinition**](docs/Api/ModelApi.md#createmodelpropertydefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Create a PropertyDefinition on the model
*ModelApi* | [**createModelUnit**](docs/Api/ModelApi.md#createmodelunit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Create a Unit on a model
*ModelApi* | [**createPropertySet**](docs/Api/ModelApi.md#createpropertyset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Create one or many PropertySet
*ModelApi* | [**createPropertySetElementRelations**](docs/Api/ModelApi.md#createpropertysetelementrelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset-element | Create association between PropertySet and element
*ModelApi* | [**createRawElements**](docs/Api/ModelApi.md#createrawelements) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Create elements in an optimized format
*ModelApi* | [**createSpace**](docs/Api/ModelApi.md#createspace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Create a space in the model
*ModelApi* | [**createStorey**](docs/Api/ModelApi.md#createstorey) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Create a storey of a model
*ModelApi* | [**createStoreyPlan**](docs/Api/ModelApi.md#createstoreyplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey
*ModelApi* | [**createSystem**](docs/Api/ModelApi.md#createsystem) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Create a system in the model
*ModelApi* | [**createTileset**](docs/Api/ModelApi.md#createtileset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Create the tileset of the model and upload all files
*ModelApi* | [**createZone**](docs/Api/ModelApi.md#createzone) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Create a zone in the model
*ModelApi* | [**createZoneSpace**](docs/Api/ModelApi.md#createzonespace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Create a space in a zone
*ModelApi* | [**deleteAccessToken**](docs/Api/ModelApi.md#deleteaccesstoken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Delete a token
*ModelApi* | [**deleteBuilding**](docs/Api/ModelApi.md#deletebuilding) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Delete a building of a model
*ModelApi* | [**deleteBuildingPlan**](docs/Api/ModelApi.md#deletebuildingplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building
*ModelApi* | [**deleteElement**](docs/Api/ModelApi.md#deleteelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Delete an element of a model
*ModelApi* | [**deleteLayer**](docs/Api/ModelApi.md#deletelayer) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Delete a layer of a model
*ModelApi* | [**deleteModel**](docs/Api/ModelApi.md#deletemodel) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Delete a model
*ModelApi* | [**deleteModelProperty**](docs/Api/ModelApi.md#deletemodelproperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Delete a Property of a model
*ModelApi* | [**deleteModelPropertyDefinition**](docs/Api/ModelApi.md#deletemodelpropertydefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
*ModelApi* | [**deleteModelUnit**](docs/Api/ModelApi.md#deletemodelunit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Delete a Unit of a model
*ModelApi* | [**deleteModelWithoutDoc**](docs/Api/ModelApi.md#deletemodelwithoutdoc) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/delete-model | Delete the Model without deleting the related document
*ModelApi* | [**deletePropertySet**](docs/Api/ModelApi.md#deletepropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Delete a PropertySet of a model
*ModelApi* | [**deleteSpace**](docs/Api/ModelApi.md#deletespace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Delete a space
*ModelApi* | [**deleteStorey**](docs/Api/ModelApi.md#deletestorey) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Delete a storey of a model
*ModelApi* | [**deleteStoreyPlan**](docs/Api/ModelApi.md#deletestoreyplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey
*ModelApi* | [**deleteSystem**](docs/Api/ModelApi.md#deletesystem) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Delete a system of a model
*ModelApi* | [**deleteZone**](docs/Api/ModelApi.md#deletezone) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Delete a zone of a model
*ModelApi* | [**deleteZoneSpace**](docs/Api/ModelApi.md#deletezonespace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
*ModelApi* | [**exportIfc**](docs/Api/ModelApi.md#exportifc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/export | Export IFC
*ModelApi* | [**fullUpdateElement**](docs/Api/ModelApi.md#fullupdateelement) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update all fields of an element
*ModelApi* | [**getAccessToken**](docs/Api/ModelApi.md#getaccesstoken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Retrieve one token created for this model
*ModelApi* | [**getAccessTokens**](docs/Api/ModelApi.md#getaccesstokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Retrieve all tokens created for this model
*ModelApi* | [**getBuilding**](docs/Api/ModelApi.md#getbuilding) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Retrieve a building of a model
*ModelApi* | [**getBuildingPlanPositioning**](docs/Api/ModelApi.md#getbuildingplanpositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building
*ModelApi* | [**getBuildings**](docs/Api/ModelApi.md#getbuildings) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Retrieve all buildings of a model
*ModelApi* | [**getClassificationsOfElement**](docs/Api/ModelApi.md#getclassificationsofelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
*ModelApi* | [**getDocumentsOfElement**](docs/Api/ModelApi.md#getdocumentsofelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Retrieve all documents of an element
*ModelApi* | [**getElement**](docs/Api/ModelApi.md#getelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Retrieve an element of a model
*ModelApi* | [**getElementLinkedDocuments**](docs/Api/ModelApi.md#getelementlinkeddocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/documents | Retrieve all documents linked to any element
*ModelApi* | [**getElementPropertySet**](docs/Api/ModelApi.md#getelementpropertyset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
*ModelApi* | [**getElementPropertySetProperties**](docs/Api/ModelApi.md#getelementpropertysetproperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
*ModelApi* | [**getElementPropertySetProperty**](docs/Api/ModelApi.md#getelementpropertysetproperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
*ModelApi* | [**getElementPropertySetPropertyDefinition**](docs/Api/ModelApi.md#getelementpropertysetpropertydefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
*ModelApi* | [**getElementPropertySetPropertyDefinitionUnit**](docs/Api/ModelApi.md#getelementpropertysetpropertydefinitionunit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
*ModelApi* | [**getElementPropertySetPropertyDefinitionUnits**](docs/Api/ModelApi.md#getelementpropertysetpropertydefinitionunits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
*ModelApi* | [**getElementPropertySetPropertyDefinitions**](docs/Api/ModelApi.md#getelementpropertysetpropertydefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
*ModelApi* | [**getElementPropertySets**](docs/Api/ModelApi.md#getelementpropertysets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
*ModelApi* | [**getElements**](docs/Api/ModelApi.md#getelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Retrieve all elements of a model
*ModelApi* | [**getElementsFromClassification**](docs/Api/ModelApi.md#getelementsfromclassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification
*ModelApi* | [**getLayer**](docs/Api/ModelApi.md#getlayer) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Retrieve a layer of a model
*ModelApi* | [**getLayers**](docs/Api/ModelApi.md#getlayers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Retrieve all layers of a model
*ModelApi* | [**getMaterial**](docs/Api/ModelApi.md#getmaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
*ModelApi* | [**getMaterials**](docs/Api/ModelApi.md#getmaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material | Retrieve all materials of a model
*ModelApi* | [**getModel**](docs/Api/ModelApi.md#getmodel) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Retrieve one model
*ModelApi* | [**getModelClassifications**](docs/Api/ModelApi.md#getmodelclassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification | Retrieve all classifications in a model
*ModelApi* | [**getModelMaterial**](docs/Api/ModelApi.md#getmodelmaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material/{id} | Retrieve a material of a model
*ModelApi* | [**getModelMaterials**](docs/Api/ModelApi.md#getmodelmaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material | Retrieve all materials of a model
*ModelApi* | [**getModelProperties**](docs/Api/ModelApi.md#getmodelproperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property | Retrieve all Properties of a model
*ModelApi* | [**getModelProperty**](docs/Api/ModelApi.md#getmodelproperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Retrieve a Property of a model
*ModelApi* | [**getModelPropertyDefinition**](docs/Api/ModelApi.md#getmodelpropertydefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
*ModelApi* | [**getModelPropertyDefinitions**](docs/Api/ModelApi.md#getmodelpropertydefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
*ModelApi* | [**getModelUnit**](docs/Api/ModelApi.md#getmodelunit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Retrieve a Unit of a model
*ModelApi* | [**getModelUnits**](docs/Api/ModelApi.md#getmodelunits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Retrieve all Units of a model
*ModelApi* | [**getModels**](docs/Api/ModelApi.md#getmodels) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model | Retrieve all models
*ModelApi* | [**getProcessorHandler**](docs/Api/ModelApi.md#getprocessorhandler) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Retrieve a processor handler
*ModelApi* | [**getProcessorHandlers**](docs/Api/ModelApi.md#getprocessorhandlers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler | Get all processor handlers
*ModelApi* | [**getPropertySet**](docs/Api/ModelApi.md#getpropertyset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Retrieve a PropertySet of a model
*ModelApi* | [**getPropertySets**](docs/Api/ModelApi.md#getpropertysets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Retrieve all PropertySets of a model
*ModelApi* | [**getRawElements**](docs/Api/ModelApi.md#getrawelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Retrieve all elements in a optimized format
*ModelApi* | [**getSimpleElement**](docs/Api/ModelApi.md#getsimpleelement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
*ModelApi* | [**getSimpleElements**](docs/Api/ModelApi.md#getsimpleelements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/simple | Retrieve all elements of a model with a simple value representation
*ModelApi* | [**getSpace**](docs/Api/ModelApi.md#getspace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Retrieve one space of the model
*ModelApi* | [**getSpaces**](docs/Api/ModelApi.md#getspaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Retrieve all spaces of the model
*ModelApi* | [**getStorey**](docs/Api/ModelApi.md#getstorey) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Retrieve a storey of a model
*ModelApi* | [**getStoreyPlanPositioning**](docs/Api/ModelApi.md#getstoreyplanpositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey
*ModelApi* | [**getStoreys**](docs/Api/ModelApi.md#getstoreys) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Retrieve all storeys of a model
*ModelApi* | [**getSystem**](docs/Api/ModelApi.md#getsystem) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Retrieve a system of a model
*ModelApi* | [**getSystems**](docs/Api/ModelApi.md#getsystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Retrieve all systems of a model
*ModelApi* | [**getTileset**](docs/Api/ModelApi.md#gettileset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Retrieve the tileset of the model
*ModelApi* | [**getZone**](docs/Api/ModelApi.md#getzone) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Retrieve one zone of a model
*ModelApi* | [**getZoneSpace**](docs/Api/ModelApi.md#getzonespace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
*ModelApi* | [**getZoneSpaces**](docs/Api/ModelApi.md#getzonespaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
*ModelApi* | [**getZones**](docs/Api/ModelApi.md#getzones) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Retrieve zones of a model
*ModelApi* | [**linkDocumentsOfElement**](docs/Api/ModelApi.md#linkdocumentsofelement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Link one or many documents to an element
*ModelApi* | [**listClassificationElementRelations**](docs/Api/ModelApi.md#listclassificationelementrelations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | List all associations between classifications and elements
*ModelApi* | [**mergeIfcs**](docs/Api/ModelApi.md#mergeifcs) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/merge | Merge IFC files
*ModelApi* | [**optimizeIfc**](docs/Api/ModelApi.md#optimizeifc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/optimize | Optimize the IFC
*ModelApi* | [**removeAllElementPropertySet**](docs/Api/ModelApi.md#removeallelementpropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
*ModelApi* | [**removeClassificationOfElement**](docs/Api/ModelApi.md#removeclassificationofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
*ModelApi* | [**removeDocumentOfElement**](docs/Api/ModelApi.md#removedocumentofelement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element
*ModelApi* | [**removeElementPropertySet**](docs/Api/ModelApi.md#removeelementpropertyset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
*ModelApi* | [**removeElementPropertySetProperty**](docs/Api/ModelApi.md#removeelementpropertysetproperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
*ModelApi* | [**removeElementPropertySetPropertyDefinition**](docs/Api/ModelApi.md#removeelementpropertysetpropertydefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property
*ModelApi* | [**removeElementPropertySetPropertyDefinitionUnit**](docs/Api/ModelApi.md#removeelementpropertysetpropertydefinitionunit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
*ModelApi* | [**removeElementsFromClassification**](docs/Api/ModelApi.md#removeelementsfromclassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements
*ModelApi* | [**reprocessModel**](docs/Api/ModelApi.md#reprocessmodel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/reprocess | Reprocess Model file
*ModelApi* | [**updateAccessToken**](docs/Api/ModelApi.md#updateaccesstoken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Update some fields of a token
*ModelApi* | [**updateBuilding**](docs/Api/ModelApi.md#updatebuilding) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Update some fields of a building
*ModelApi* | [**updateBuildingPlanPositioning**](docs/Api/ModelApi.md#updatebuildingplanpositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building
*ModelApi* | [**updateElement**](docs/Api/ModelApi.md#updateelement) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update some fields of an element
*ModelApi* | [**updateElementPropertySetProperty**](docs/Api/ModelApi.md#updateelementpropertysetproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
*ModelApi* | [**updateLayer**](docs/Api/ModelApi.md#updatelayer) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Update some fields of a layer
*ModelApi* | [**updateModel**](docs/Api/ModelApi.md#updatemodel) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Update some fields of a model
*ModelApi* | [**updateModelFiles**](docs/Api/ModelApi.md#updatemodelfiles) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/files | Update models file (gltf, svg, structure, etc)
*ModelApi* | [**updateModelProperty**](docs/Api/ModelApi.md#updatemodelproperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Update some fields of a Property
*ModelApi* | [**updateModelPropertyDefinition**](docs/Api/ModelApi.md#updatemodelpropertydefinition) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
*ModelApi* | [**updateModelUnit**](docs/Api/ModelApi.md#updatemodelunit) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Update some fields of a Unit of a model
*ModelApi* | [**updateOrderBuildingPlan**](docs/Api/ModelApi.md#updateorderbuildingplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building
*ModelApi* | [**updateOrderStoreyPlan**](docs/Api/ModelApi.md#updateorderstoreyplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey
*ModelApi* | [**updateOrderStoreys**](docs/Api/ModelApi.md#updateorderstoreys) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/order | Update order of all storey of a model
*ModelApi* | [**updateProcessorHandler**](docs/Api/ModelApi.md#updateprocessorhandler) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Update the status of a processor handler
*ModelApi* | [**updatePropertySet**](docs/Api/ModelApi.md#updatepropertyset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Update some fields of a PropertySet
*ModelApi* | [**updateSpace**](docs/Api/ModelApi.md#updatespace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Update some fields of a space
*ModelApi* | [**updateStorey**](docs/Api/ModelApi.md#updatestorey) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Update some fields of a storey
*ModelApi* | [**updateStoreyPlanPositioning**](docs/Api/ModelApi.md#updatestoreyplanpositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey
*ModelApi* | [**updateSystem**](docs/Api/ModelApi.md#updatesystem) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Update some fields of a system
*ModelApi* | [**updateZone**](docs/Api/ModelApi.md#updatezone) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Update some fields of a zone
*ModelApi* | [**updateZoneSpace**](docs/Api/ModelApi.md#updatezonespace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space
*SsoApi* | [**acceptInvitation**](docs/Api/SsoApi.md#acceptinvitation) | **POST** /identity-provider/invitation/{id}/accept | Accept an invitation
*SsoApi* | [**deleteUser**](docs/Api/SsoApi.md#deleteuser) | **DELETE** /identity-provider/user | Delete user from BIMData
*SsoApi* | [**denyInvitation**](docs/Api/SsoApi.md#denyinvitation) | **POST** /identity-provider/invitation/{id}/deny | Deny an invitation
*SsoApi* | [**getInvitation**](docs/Api/SsoApi.md#getinvitation) | **GET** /identity-provider/invitation/{id} | Retrieve an invitation
*SsoApi* | [**getInvitations**](docs/Api/SsoApi.md#getinvitations) | **GET** /identity-provider/invitation | Retrieve all invitations
*WebhookApi* | [**createWebHook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /cloud/{cloud_pk}/webhook | Create a new Webhook
*WebhookApi* | [**deleteWebHook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /cloud/{cloud_pk}/webhook/{id} | Delete a webhook
*WebhookApi* | [**getWebHook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /cloud/{cloud_pk}/webhook/{id} | Retrieve one configured webhook
*WebhookApi* | [**getWebHooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /cloud/{cloud_pk}/webhook | Retrieve all configured webhooks
*WebhookApi* | [**pingWebHook**](docs/Api/WebhookApi.md#pingwebhook) | **POST** /cloud/{cloud_pk}/webhook/{id}/ping | Test a webhook
*WebhookApi* | [**updateWebHook**](docs/Api/WebhookApi.md#updatewebhook) | **PATCH** /cloud/{cloud_pk}/webhook/{id} | Update some field of a webhook

## Models

- [BcfProject](docs/Model/BcfProject.md)
- [BcfProjectRequest](docs/Model/BcfProjectRequest.md)
- [Building](docs/Model/Building.md)
- [BuildingModelPlanRequest](docs/Model/BuildingModelPlanRequest.md)
- [CheckPlan](docs/Model/CheckPlan.md)
- [CheckPlanRequest](docs/Model/CheckPlanRequest.md)
- [CheckerResult](docs/Model/CheckerResult.md)
- [CheckerResultRequest](docs/Model/CheckerResultRequest.md)
- [Classification](docs/Model/Classification.md)
- [ClassificationRequest](docs/Model/ClassificationRequest.md)
- [ClippingPlane](docs/Model/ClippingPlane.md)
- [ClippingPlaneRequest](docs/Model/ClippingPlaneRequest.md)
- [Cloud](docs/Model/Cloud.md)
- [CloudInvitation](docs/Model/CloudInvitation.md)
- [CloudInvitationRequest](docs/Model/CloudInvitationRequest.md)
- [CloudRequest](docs/Model/CloudRequest.md)
- [CloudRole](docs/Model/CloudRole.md)
- [Coloring](docs/Model/Coloring.md)
- [ColoringRequest](docs/Model/ColoringRequest.md)
- [Comment](docs/Model/Comment.md)
- [CommentRequest](docs/Model/CommentRequest.md)
- [Component](docs/Model/Component.md)
- [ComponentRequest](docs/Model/ComponentRequest.md)
- [ComponentsParent](docs/Model/ComponentsParent.md)
- [ComponentsParentRequest](docs/Model/ComponentsParentRequest.md)
- [ComponentsParentRequestVisibility](docs/Model/ComponentsParentRequestVisibility.md)
- [ComponentsParentVisibility](docs/Model/ComponentsParentVisibility.md)
- [CreateBuildingByNameRequest](docs/Model/CreateBuildingByNameRequest.md)
- [CreateModelRequest](docs/Model/CreateModelRequest.md)
- [DetailedExtensions](docs/Model/DetailedExtensions.md)
- [Direction](docs/Model/Direction.md)
- [DirectionRequest](docs/Model/DirectionRequest.md)
- [Document](docs/Model/Document.md)
- [DocumentWithElementList](docs/Model/DocumentWithElementList.md)
- [Element](docs/Model/Element.md)
- [ElementClassificationRelation](docs/Model/ElementClassificationRelation.md)
- [ElementClassificationRelationRequest](docs/Model/ElementClassificationRelationRequest.md)
- [ElementPropertySetRelationRequest](docs/Model/ElementPropertySetRelationRequest.md)
- [ElementRequest](docs/Model/ElementRequest.md)
- [Extensions](docs/Model/Extensions.md)
- [Feature](docs/Model/Feature.md)
- [FeatureRequest](docs/Model/FeatureRequest.md)
- [Folder](docs/Model/Folder.md)
- [FolderGroupPermission](docs/Model/FolderGroupPermission.md)
- [FolderGroupPermissionRequest](docs/Model/FolderGroupPermissionRequest.md)
- [FolderTree](docs/Model/FolderTree.md)
- [FolderUserProject](docs/Model/FolderUserProject.md)
- [FolderWithoutChildren](docs/Model/FolderWithoutChildren.md)
- [FolderWithoutChildrenRequest](docs/Model/FolderWithoutChildrenRequest.md)
- [FullTopic](docs/Model/FullTopic.md)
- [FullTopicRequest](docs/Model/FullTopicRequest.md)
- [Group](docs/Model/Group.md)
- [GroupFolder](docs/Model/GroupFolder.md)
- [GroupRequest](docs/Model/GroupRequest.md)
- [IfcAccessToken](docs/Model/IfcAccessToken.md)
- [IfcAccessTokenRequest](docs/Model/IfcAccessTokenRequest.md)
- [IfcChecker](docs/Model/IfcChecker.md)
- [IfcCheckerRequest](docs/Model/IfcCheckerRequest.md)
- [IfcExport](docs/Model/IfcExport.md)
- [IfcExportRequest](docs/Model/IfcExportRequest.md)
- [IfcMergeRequest](docs/Model/IfcMergeRequest.md)
- [IfcOptimizeRequest](docs/Model/IfcOptimizeRequest.md)
- [Invitation](docs/Model/Invitation.md)
- [Label](docs/Model/Label.md)
- [LabelRequest](docs/Model/LabelRequest.md)
- [Layer](docs/Model/Layer.md)
- [LayerElement](docs/Model/LayerElement.md)
- [LayerElementRequest](docs/Model/LayerElementRequest.md)
- [LayerRequest](docs/Model/LayerRequest.md)
- [Line](docs/Model/Line.md)
- [LineRequest](docs/Model/LineRequest.md)
- [MarketplaceApp](docs/Model/MarketplaceApp.md)
- [MarketplaceAppImage](docs/Model/MarketplaceAppImage.md)
- [MarketplaceAppImageRequest](docs/Model/MarketplaceAppImageRequest.md)
- [MarketplaceAppRequest](docs/Model/MarketplaceAppRequest.md)
- [Material](docs/Model/Material.md)
- [MaterialListComponent](docs/Model/MaterialListComponent.md)
- [MaterialListComponentRequest](docs/Model/MaterialListComponentRequest.md)
- [MaterialOption](docs/Model/MaterialOption.md)
- [MaterialRequest](docs/Model/MaterialRequest.md)
- [Model](docs/Model/Model.md)
- [ModelErrors](docs/Model/ModelErrors.md)
- [ModelErrorsRequest](docs/Model/ModelErrorsRequest.md)
- [ModelFiles](docs/Model/ModelFiles.md)
- [ModelRequest](docs/Model/ModelRequest.md)
- [ModelWithPositioningPlan](docs/Model/ModelWithPositioningPlan.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationRequest](docs/Model/OrganizationRequest.md)
- [OrthogonalCamera](docs/Model/OrthogonalCamera.md)
- [OrthogonalCameraRequest](docs/Model/OrthogonalCameraRequest.md)
- [PatchedBcfProjectRequest](docs/Model/PatchedBcfProjectRequest.md)
- [PatchedCheckPlanRequest](docs/Model/PatchedCheckPlanRequest.md)
- [PatchedCheckerResultRequest](docs/Model/PatchedCheckerResultRequest.md)
- [PatchedClassificationRequest](docs/Model/PatchedClassificationRequest.md)
- [PatchedCloudRequest](docs/Model/PatchedCloudRequest.md)
- [PatchedCommentRequest](docs/Model/PatchedCommentRequest.md)
- [PatchedDocumentRequest](docs/Model/PatchedDocumentRequest.md)
- [PatchedElementRequest](docs/Model/PatchedElementRequest.md)
- [PatchedFolderWithoutChildrenRequest](docs/Model/PatchedFolderWithoutChildrenRequest.md)
- [PatchedFullTopicRequest](docs/Model/PatchedFullTopicRequest.md)
- [PatchedGroupFolderRequest](docs/Model/PatchedGroupFolderRequest.md)
- [PatchedGroupRequest](docs/Model/PatchedGroupRequest.md)
- [PatchedIfcAccessTokenRequest](docs/Model/PatchedIfcAccessTokenRequest.md)
- [PatchedIfcCheckerRequest](docs/Model/PatchedIfcCheckerRequest.md)
- [PatchedLabelRequest](docs/Model/PatchedLabelRequest.md)
- [PatchedLayerRequest](docs/Model/PatchedLayerRequest.md)
- [PatchedModelRequest](docs/Model/PatchedModelRequest.md)
- [PatchedPositioningPlanRequest](docs/Model/PatchedPositioningPlanRequest.md)
- [PatchedPriorityRequest](docs/Model/PatchedPriorityRequest.md)
- [PatchedProcessorHandlerRequest](docs/Model/PatchedProcessorHandlerRequest.md)
- [PatchedProjectAccessTokenRequest](docs/Model/PatchedProjectAccessTokenRequest.md)
- [PatchedProjectRequest](docs/Model/PatchedProjectRequest.md)
- [PatchedPropertyDefinitionRequest](docs/Model/PatchedPropertyDefinitionRequest.md)
- [PatchedPropertyDefinitionRequestUnit](docs/Model/PatchedPropertyDefinitionRequestUnit.md)
- [PatchedPropertyRequest](docs/Model/PatchedPropertyRequest.md)
- [PatchedPropertySetRequest](docs/Model/PatchedPropertySetRequest.md)
- [PatchedRuleComponentRequest](docs/Model/PatchedRuleComponentRequest.md)
- [PatchedRuleRequest](docs/Model/PatchedRuleRequest.md)
- [PatchedRulesetRequest](docs/Model/PatchedRulesetRequest.md)
- [PatchedSpaceRequest](docs/Model/PatchedSpaceRequest.md)
- [PatchedStageRequest](docs/Model/PatchedStageRequest.md)
- [PatchedStoreyBuildingRequest](docs/Model/PatchedStoreyBuildingRequest.md)
- [PatchedSystemRequest](docs/Model/PatchedSystemRequest.md)
- [PatchedTagRequest](docs/Model/PatchedTagRequest.md)
- [PatchedTopicRequest](docs/Model/PatchedTopicRequest.md)
- [PatchedTopicStatusRequest](docs/Model/PatchedTopicStatusRequest.md)
- [PatchedTopicTypeRequest](docs/Model/PatchedTopicTypeRequest.md)
- [PatchedUnitRequest](docs/Model/PatchedUnitRequest.md)
- [PatchedUserCloudUpdateRequest](docs/Model/PatchedUserCloudUpdateRequest.md)
- [PatchedUserProjectUpdateRequest](docs/Model/PatchedUserProjectUpdateRequest.md)
- [PatchedViewpointRequest](docs/Model/PatchedViewpointRequest.md)
- [PatchedViewpointRequestComponents](docs/Model/PatchedViewpointRequestComponents.md)
- [PatchedViewpointRequestOrthogonalCamera](docs/Model/PatchedViewpointRequestOrthogonalCamera.md)
- [PatchedViewpointRequestPerspectiveCamera](docs/Model/PatchedViewpointRequestPerspectiveCamera.md)
- [PatchedViewpointRequestSnapshot](docs/Model/PatchedViewpointRequestSnapshot.md)
- [PatchedVisaCommentRequest](docs/Model/PatchedVisaCommentRequest.md)
- [PatchedVisaRequest](docs/Model/PatchedVisaRequest.md)
- [PatchedVisaValidationRequest](docs/Model/PatchedVisaValidationRequest.md)
- [PatchedWebHookRequest](docs/Model/PatchedWebHookRequest.md)
- [PatchedZoneRequest](docs/Model/PatchedZoneRequest.md)
- [PatchedZoneSpaceRequest](docs/Model/PatchedZoneSpaceRequest.md)
- [PerspectiveCamera](docs/Model/PerspectiveCamera.md)
- [PerspectiveCameraRequest](docs/Model/PerspectiveCameraRequest.md)
- [Pin](docs/Model/Pin.md)
- [PinRequest](docs/Model/PinRequest.md)
- [Point](docs/Model/Point.md)
- [PointRequest](docs/Model/PointRequest.md)
- [PositioningPlan](docs/Model/PositioningPlan.md)
- [Priority](docs/Model/Priority.md)
- [PriorityRequest](docs/Model/PriorityRequest.md)
- [ProcessorHandler](docs/Model/ProcessorHandler.md)
- [Project](docs/Model/Project.md)
- [ProjectAccessToken](docs/Model/ProjectAccessToken.md)
- [ProjectAccessTokenRequest](docs/Model/ProjectAccessTokenRequest.md)
- [ProjectFolderTree](docs/Model/ProjectFolderTree.md)
- [ProjectInvitation](docs/Model/ProjectInvitation.md)
- [ProjectInvitationRequest](docs/Model/ProjectInvitationRequest.md)
- [ProjectRequest](docs/Model/ProjectRequest.md)
- [ProjectRole](docs/Model/ProjectRole.md)
- [ProjectSize](docs/Model/ProjectSize.md)
- [ProjectWithChildren](docs/Model/ProjectWithChildren.md)
- [Property](docs/Model/Property.md)
- [PropertyDefinition](docs/Model/PropertyDefinition.md)
- [PropertyDefinitionRequest](docs/Model/PropertyDefinitionRequest.md)
- [PropertyDefinitionUnit](docs/Model/PropertyDefinitionUnit.md)
- [PropertyRequest](docs/Model/PropertyRequest.md)
- [PropertySet](docs/Model/PropertySet.md)
- [PropertySetRequest](docs/Model/PropertySetRequest.md)
- [PublicOrganization](docs/Model/PublicOrganization.md)
- [PublicOrganizationRequest](docs/Model/PublicOrganizationRequest.md)
- [RawClassification](docs/Model/RawClassification.md)
- [RawClassificationRequest](docs/Model/RawClassificationRequest.md)
- [RawDefinition](docs/Model/RawDefinition.md)
- [RawDefinitionRequest](docs/Model/RawDefinitionRequest.md)
- [RawElement](docs/Model/RawElement.md)
- [RawElementRequest](docs/Model/RawElementRequest.md)
- [RawElements](docs/Model/RawElements.md)
- [RawElementsMaterials](docs/Model/RawElementsMaterials.md)
- [RawElementsRequest](docs/Model/RawElementsRequest.md)
- [RawElementsRequestMaterials](docs/Model/RawElementsRequestMaterials.md)
- [RawLayer](docs/Model/RawLayer.md)
- [RawLayerRequest](docs/Model/RawLayerRequest.md)
- [RawMaterial](docs/Model/RawMaterial.md)
- [RawMaterialList](docs/Model/RawMaterialList.md)
- [RawMaterialListComponents](docs/Model/RawMaterialListComponents.md)
- [RawMaterialListComponentsRequest](docs/Model/RawMaterialListComponentsRequest.md)
- [RawMaterialListRequest](docs/Model/RawMaterialListRequest.md)
- [RawMaterialOptions](docs/Model/RawMaterialOptions.md)
- [RawMaterialOptionsRequest](docs/Model/RawMaterialOptionsRequest.md)
- [RawMaterialRequest](docs/Model/RawMaterialRequest.md)
- [RawProperty](docs/Model/RawProperty.md)
- [RawPropertyRequest](docs/Model/RawPropertyRequest.md)
- [RawPropertySet](docs/Model/RawPropertySet.md)
- [RawPropertySetRequest](docs/Model/RawPropertySetRequest.md)
- [RawSystem](docs/Model/RawSystem.md)
- [RawSystemRequest](docs/Model/RawSystemRequest.md)
- [RawUnit](docs/Model/RawUnit.md)
- [RawUnitRequest](docs/Model/RawUnitRequest.md)
- [RecursiveFolderChildren](docs/Model/RecursiveFolderChildren.md)
- [RecursiveFolderChildrenCreatedBy](docs/Model/RecursiveFolderChildrenCreatedBy.md)
- [Rule](docs/Model/Rule.md)
- [RuleComponent](docs/Model/RuleComponent.md)
- [RuleComponentRequest](docs/Model/RuleComponentRequest.md)
- [RuleRequest](docs/Model/RuleRequest.md)
- [Ruleset](docs/Model/Ruleset.md)
- [RulesetRequest](docs/Model/RulesetRequest.md)
- [SelfBcfUser](docs/Model/SelfBcfUser.md)
- [SelfUser](docs/Model/SelfUser.md)
- [SimpleElement](docs/Model/SimpleElement.md)
- [Size](docs/Model/Size.md)
- [Snapshot](docs/Model/Snapshot.md)
- [SnapshotRequest](docs/Model/SnapshotRequest.md)
- [Space](docs/Model/Space.md)
- [SpaceRequest](docs/Model/SpaceRequest.md)
- [Stage](docs/Model/Stage.md)
- [StageRequest](docs/Model/StageRequest.md)
- [Storey](docs/Model/Storey.md)
- [StoreyBuildingRequest](docs/Model/StoreyBuildingRequest.md)
- [StoreyModelPlanRequest](docs/Model/StoreyModelPlanRequest.md)
- [System](docs/Model/System.md)
- [SystemRequest](docs/Model/SystemRequest.md)
- [Tag](docs/Model/Tag.md)
- [TagIdRequest](docs/Model/TagIdRequest.md)
- [TagRequest](docs/Model/TagRequest.md)
- [Topic](docs/Model/Topic.md)
- [TopicRequest](docs/Model/TopicRequest.md)
- [TopicStatus](docs/Model/TopicStatus.md)
- [TopicStatusRequest](docs/Model/TopicStatusRequest.md)
- [TopicType](docs/Model/TopicType.md)
- [TopicTypeRequest](docs/Model/TopicTypeRequest.md)
- [Unit](docs/Model/Unit.md)
- [UnitRequest](docs/Model/UnitRequest.md)
- [User](docs/Model/User.md)
- [UserInvitation](docs/Model/UserInvitation.md)
- [UserProject](docs/Model/UserProject.md)
- [UserProjectIdRequest](docs/Model/UserProjectIdRequest.md)
- [ViewSetupHints](docs/Model/ViewSetupHints.md)
- [ViewSetupHintsRequest](docs/Model/ViewSetupHintsRequest.md)
- [Viewpoint](docs/Model/Viewpoint.md)
- [ViewpointComponents](docs/Model/ViewpointComponents.md)
- [ViewpointOrthogonalCamera](docs/Model/ViewpointOrthogonalCamera.md)
- [ViewpointPerspectiveCamera](docs/Model/ViewpointPerspectiveCamera.md)
- [ViewpointRequest](docs/Model/ViewpointRequest.md)
- [ViewpointSnapshot](docs/Model/ViewpointSnapshot.md)
- [Visa](docs/Model/Visa.md)
- [VisaComment](docs/Model/VisaComment.md)
- [VisaCommentRequest](docs/Model/VisaCommentRequest.md)
- [VisaRequest](docs/Model/VisaRequest.md)
- [VisaValidation](docs/Model/VisaValidation.md)
- [VisaValidationRequest](docs/Model/VisaValidationRequest.md)
- [Visibility](docs/Model/Visibility.md)
- [VisibilityRequest](docs/Model/VisibilityRequest.md)
- [WebHook](docs/Model/WebHook.md)
- [WebHookRequest](docs/Model/WebHookRequest.md)
- [WriteFolderRequest](docs/Model/WriteFolderRequest.md)
- [Zone](docs/Model/Zone.md)
- [ZoneRequest](docs/Model/ZoneRequest.md)
- [ZoneSpace](docs/Model/ZoneSpace.md)
- [ZoneSpaceRequest](docs/Model/ZoneSpaceRequest.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### BIMData_Connect

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://iam.bimdata.io/auth/realms/bimdata/protocol/openid-connect/auth`
- **Scopes**: N/A


### BIMData_Connect

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A


### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@bimdata.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1 (v1)`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
