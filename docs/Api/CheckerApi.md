# OpenAPI\Client\CheckerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChecker()**](CheckerApi.md#createChecker) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Create a checker to a model |
| [**createCheckerResult()**](CheckerApi.md#createCheckerResult) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Create a CheckerResult |
| [**createCheckplan()**](CheckerApi.md#createCheckplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Create a Checkplan |
| [**createRule()**](CheckerApi.md#createRule) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Create a Rule |
| [**createRuleComponent()**](CheckerApi.md#createRuleComponent) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Create a RuleComponent |
| [**createRuleset()**](CheckerApi.md#createRuleset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Create a Ruleset |
| [**deleteChecker()**](CheckerApi.md#deleteChecker) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Delete a checker of a model |
| [**deleteCheckerResult()**](CheckerApi.md#deleteCheckerResult) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult |
| [**deleteCheckplan()**](CheckerApi.md#deleteCheckplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Delete a Checkplan |
| [**deleteRule()**](CheckerApi.md#deleteRule) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Delete a Rule |
| [**deleteRuleComponent()**](CheckerApi.md#deleteRuleComponent) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Delete a RuleComponent |
| [**deleteRuleset()**](CheckerApi.md#deleteRuleset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Delete a Ruleset |
| [**getChecker()**](CheckerApi.md#getChecker) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Retrieve a checker of a model |
| [**getCheckerResult()**](CheckerApi.md#getCheckerResult) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult |
| [**getCheckerResults()**](CheckerApi.md#getCheckerResults) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults |
| [**getCheckers()**](CheckerApi.md#getCheckers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Retrieve all checkers of a model |
| [**getCheckplan()**](CheckerApi.md#getCheckplan) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Retrieve one Checkplan |
| [**getCheckplans()**](CheckerApi.md#getCheckplans) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Retrieve all Checkplans |
| [**getRule()**](CheckerApi.md#getRule) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Retrieve one Rule |
| [**getRuleComponent()**](CheckerApi.md#getRuleComponent) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Retrieve one RuleComponent |
| [**getRuleComponents()**](CheckerApi.md#getRuleComponents) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Retrieve all RuleComponents |
| [**getRules()**](CheckerApi.md#getRules) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Retrieve all Rules |
| [**getRuleset()**](CheckerApi.md#getRuleset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Retrieve one Ruleset |
| [**getRulesets()**](CheckerApi.md#getRulesets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Retrieve all Rulesets |
| [**launchNewCheck()**](CheckerApi.md#launchNewCheck) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id}/launch-check | Launch a new check on the model |
| [**updateChecker()**](CheckerApi.md#updateChecker) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Update some fields of a checker of a model |
| [**updateCheckerResult()**](CheckerApi.md#updateCheckerResult) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult |
| [**updateCheckplan()**](CheckerApi.md#updateCheckplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Update some fields of a Checkplan |
| [**updateRule()**](CheckerApi.md#updateRule) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Update some fields of a Rule |
| [**updateRuleComponent()**](CheckerApi.md#updateRuleComponent) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Update some fields of a RuleComponent |
| [**updateRuleset()**](CheckerApi.md#updateRuleset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Update some fields of a Ruleset |


## `createChecker()`

```php
createChecker($cloud_pk, $model_pk, $project_pk, $ifc_checker_request): \OpenAPI\Client\Model\IfcChecker
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_checker_request = new \OpenAPI\Client\Model\IfcCheckerRequest(); // \OpenAPI\Client\Model\IfcCheckerRequest

try {
    $result = $apiInstance->createChecker($cloud_pk, $model_pk, $project_pk, $ifc_checker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createChecker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createCheckerResult()`

```php
createCheckerResult($checker_pk, $cloud_pk, $model_pk, $project_pk, $checker_result_request): \OpenAPI\Client\Model\CheckerResult
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$checker_result_request = new \OpenAPI\Client\Model\CheckerResultRequest(); // \OpenAPI\Client\Model\CheckerResultRequest

try {
    $result = $apiInstance->createCheckerResult($checker_pk, $cloud_pk, $model_pk, $project_pk, $checker_result_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createCheckerResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `createCheckplan()`

```php
createCheckplan($cloud_pk, $project_pk, $check_plan_request): \OpenAPI\Client\Model\CheckPlan
```

Create a Checkplan

TCreate a Checkplan  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$check_plan_request = new \OpenAPI\Client\Model\CheckPlanRequest(); // \OpenAPI\Client\Model\CheckPlanRequest

try {
    $result = $apiInstance->createCheckplan($cloud_pk, $project_pk, $check_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createCheckplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **check_plan_request** | [**\OpenAPI\Client\Model\CheckPlanRequest**](../Model/CheckPlanRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRule()`

```php
createRule($check_plan_pk, $cloud_pk, $project_pk, $ruleset_pk, $rule_request): \OpenAPI\Client\Model\Rule
```

Create a Rule

TCreate a Rule  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.
$rule_request = new \OpenAPI\Client\Model\RuleRequest(); // \OpenAPI\Client\Model\RuleRequest

try {
    $result = $apiInstance->createRule($check_plan_pk, $cloud_pk, $project_pk, $ruleset_pk, $rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |
| **rule_request** | [**\OpenAPI\Client\Model\RuleRequest**](../Model/RuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRuleComponent()`

```php
createRuleComponent($check_plan_pk, $cloud_pk, $project_pk, $rule_pk, $ruleset_pk, $rule_component_request): \OpenAPI\Client\Model\RuleComponent
```

Create a RuleComponent

TCreate a RuleComponent  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$rule_pk = 56; // int | A unique integer value identifying this rule.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.
$rule_component_request = new \OpenAPI\Client\Model\RuleComponentRequest(); // \OpenAPI\Client\Model\RuleComponentRequest

try {
    $result = $apiInstance->createRuleComponent($check_plan_pk, $cloud_pk, $project_pk, $rule_pk, $ruleset_pk, $rule_component_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createRuleComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **rule_pk** | **int**| A unique integer value identifying this rule. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |
| **rule_component_request** | [**\OpenAPI\Client\Model\RuleComponentRequest**](../Model/RuleComponentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRuleset()`

```php
createRuleset($check_plan_pk, $cloud_pk, $project_pk, $ruleset_request): \OpenAPI\Client\Model\Ruleset
```

Create a Ruleset

TCreate a Ruleset  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_request = new \OpenAPI\Client\Model\RulesetRequest(); // \OpenAPI\Client\Model\RulesetRequest

try {
    $result = $apiInstance->createRuleset($check_plan_pk, $cloud_pk, $project_pk, $ruleset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->createRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_request** | [**\OpenAPI\Client\Model\RulesetRequest**](../Model/RulesetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChecker()`

```php
deleteChecker($cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteChecker($cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteChecker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
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

## `deleteCheckerResult()`

```php
deleteCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk)
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteCheckerResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
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

## `deleteCheckplan()`

```php
deleteCheckplan($cloud_pk, $id, $project_pk)
```

Delete a Checkplan

Delete a Checkplan  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this check plan.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteCheckplan($cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteCheckplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this check plan. | |
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

## `deleteRule()`

```php
deleteRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk)
```

Delete a Rule

Delete a Rule  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $apiInstance->deleteRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

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

## `deleteRuleComponent()`

```php
deleteRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk)
```

Delete a RuleComponent

Delete a RuleComponent  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule component.
$project_pk = 56; // int | A unique integer value identifying this project.
$rule_pk = 56; // int | A unique integer value identifying this rule.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $apiInstance->deleteRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteRuleComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule component. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **rule_pk** | **int**| A unique integer value identifying this rule. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

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

## `deleteRuleset()`

```php
deleteRuleset($check_plan_pk, $cloud_pk, $id, $project_pk)
```

Delete a Ruleset

Delete a Ruleset  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ruleset.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $apiInstance->deleteRuleset($check_plan_pk, $cloud_pk, $id, $project_pk);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->deleteRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ruleset. | |
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

## `getChecker()`

```php
getChecker($cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\IfcChecker
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getChecker($cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getChecker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getCheckerResult()`

```php
getCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk): \OpenAPI\Client\Model\CheckerResult
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getCheckerResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getCheckerResults()`

```php
getCheckerResults($checker_pk, $cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\CheckerResult[]
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckerResults($checker_pk, $cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getCheckerResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getCheckers()`

```php
getCheckers($cloud_pk, $model_pk, $project_pk): \OpenAPI\Client\Model\IfcChecker[]
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckers($cloud_pk, $model_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getCheckers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `getCheckplan()`

```php
getCheckplan($cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\CheckPlan
```

Retrieve one Checkplan

Retrieve one Checkplan  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this check plan.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckplan($cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getCheckplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this check plan. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckplans()`

```php
getCheckplans($cloud_pk, $project_pk): \OpenAPI\Client\Model\CheckPlan[]
```

Retrieve all Checkplans

Retrieve all Checkplans  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getCheckplans($cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getCheckplans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\CheckPlan[]**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRule()`

```php
getRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk): \OpenAPI\Client\Model\Rule
```

Retrieve one Rule

Retrieve one Rule  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $result = $apiInstance->getRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

### Return type

[**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleComponent()`

```php
getRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk): \OpenAPI\Client\Model\RuleComponent
```

Retrieve one RuleComponent

Retrieve one RuleComponent  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule component.
$project_pk = 56; // int | A unique integer value identifying this project.
$rule_pk = 56; // int | A unique integer value identifying this rule.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $result = $apiInstance->getRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRuleComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule component. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **rule_pk** | **int**| A unique integer value identifying this rule. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

### Return type

[**\OpenAPI\Client\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleComponents()`

```php
getRuleComponents($check_plan_pk, $cloud_pk, $project_pk, $rule_pk, $ruleset_pk): \OpenAPI\Client\Model\RuleComponent[]
```

Retrieve all RuleComponents

Retrieve all RuleComponents  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$rule_pk = 56; // int | A unique integer value identifying this rule.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $result = $apiInstance->getRuleComponents($check_plan_pk, $cloud_pk, $project_pk, $rule_pk, $ruleset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRuleComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **rule_pk** | **int**| A unique integer value identifying this rule. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

### Return type

[**\OpenAPI\Client\Model\RuleComponent[]**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRules()`

```php
getRules($check_plan_pk, $cloud_pk, $project_pk, $ruleset_pk): \OpenAPI\Client\Model\Rule[]
```

Retrieve all Rules

Retrieve all Rules  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.

try {
    $result = $apiInstance->getRules($check_plan_pk, $cloud_pk, $project_pk, $ruleset_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |

### Return type

[**\OpenAPI\Client\Model\Rule[]**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleset()`

```php
getRuleset($check_plan_pk, $cloud_pk, $id, $project_pk): \OpenAPI\Client\Model\Ruleset
```

Retrieve one Ruleset

Retrieve one Ruleset  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ruleset.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getRuleset($check_plan_pk, $cloud_pk, $id, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ruleset. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRulesets()`

```php
getRulesets($check_plan_pk, $cloud_pk, $project_pk): \OpenAPI\Client\Model\Ruleset[]
```

Retrieve all Rulesets

Retrieve all Rulesets  Required scopes: check:read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$project_pk = 56; // int | A unique integer value identifying this project.

try {
    $result = $apiInstance->getRulesets($check_plan_pk, $cloud_pk, $project_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->getRulesets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |

### Return type

[**\OpenAPI\Client\Model\Ruleset[]**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `launchNewCheck()`

```php
launchNewCheck($cloud_pk, $id, $model_pk, $project_pk, $ifc_checker_request)
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$ifc_checker_request = new \OpenAPI\Client\Model\IfcCheckerRequest(); // \OpenAPI\Client\Model\IfcCheckerRequest

try {
    $apiInstance->launchNewCheck($cloud_pk, $id, $model_pk, $project_pk, $ifc_checker_request);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->launchNewCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateChecker()`

```php
updateChecker($cloud_pk, $id, $model_pk, $project_pk, $patched_ifc_checker_request): \OpenAPI\Client\Model\IfcChecker
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ifc checker.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_ifc_checker_request = new \OpenAPI\Client\Model\PatchedIfcCheckerRequest(); // \OpenAPI\Client\Model\PatchedIfcCheckerRequest

try {
    $result = $apiInstance->updateChecker($cloud_pk, $id, $model_pk, $project_pk, $patched_ifc_checker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateChecker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ifc checker. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateCheckerResult()`

```php
updateCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk, $patched_checker_result_request): \OpenAPI\Client\Model\CheckerResult
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


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checker_pk = 56; // int | A unique integer value identifying this ifc checker.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this checker result.
$model_pk = 56; // int | A unique integer value identifying this model.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_checker_result_request = new \OpenAPI\Client\Model\PatchedCheckerResultRequest(); // \OpenAPI\Client\Model\PatchedCheckerResultRequest

try {
    $result = $apiInstance->updateCheckerResult($checker_pk, $cloud_pk, $id, $model_pk, $project_pk, $patched_checker_result_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateCheckerResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checker_pk** | **int**| A unique integer value identifying this ifc checker. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this checker result. | |
| **model_pk** | **int**| A unique integer value identifying this model. | |
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

## `updateCheckplan()`

```php
updateCheckplan($cloud_pk, $id, $project_pk, $patched_check_plan_request): \OpenAPI\Client\Model\CheckPlan
```

Update some fields of a Checkplan

Update some fields of a Checkplan  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this check plan.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_check_plan_request = new \OpenAPI\Client\Model\PatchedCheckPlanRequest(); // \OpenAPI\Client\Model\PatchedCheckPlanRequest

try {
    $result = $apiInstance->updateCheckplan($cloud_pk, $id, $project_pk, $patched_check_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateCheckplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this check plan. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_check_plan_request** | [**\OpenAPI\Client\Model\PatchedCheckPlanRequest**](../Model/PatchedCheckPlanRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRule()`

```php
updateRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk, $patched_rule_request): \OpenAPI\Client\Model\Rule
```

Update some fields of a Rule

Update some fields of a Rule  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule.
$project_pk = 56; // int | A unique integer value identifying this project.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.
$patched_rule_request = new \OpenAPI\Client\Model\PatchedRuleRequest(); // \OpenAPI\Client\Model\PatchedRuleRequest

try {
    $result = $apiInstance->updateRule($check_plan_pk, $cloud_pk, $id, $project_pk, $ruleset_pk, $patched_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |
| **patched_rule_request** | [**\OpenAPI\Client\Model\PatchedRuleRequest**](../Model/PatchedRuleRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRuleComponent()`

```php
updateRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk, $patched_rule_component_request): \OpenAPI\Client\Model\RuleComponent
```

Update some fields of a RuleComponent

Update some fields of a RuleComponent  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this rule component.
$project_pk = 56; // int | A unique integer value identifying this project.
$rule_pk = 56; // int | A unique integer value identifying this rule.
$ruleset_pk = 56; // int | A unique integer value identifying this ruleset.
$patched_rule_component_request = new \OpenAPI\Client\Model\PatchedRuleComponentRequest(); // \OpenAPI\Client\Model\PatchedRuleComponentRequest

try {
    $result = $apiInstance->updateRuleComponent($check_plan_pk, $cloud_pk, $id, $project_pk, $rule_pk, $ruleset_pk, $patched_rule_component_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateRuleComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this rule component. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **rule_pk** | **int**| A unique integer value identifying this rule. | |
| **ruleset_pk** | **int**| A unique integer value identifying this ruleset. | |
| **patched_rule_component_request** | [**\OpenAPI\Client\Model\PatchedRuleComponentRequest**](../Model/PatchedRuleComponentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRuleset()`

```php
updateRuleset($check_plan_pk, $cloud_pk, $id, $project_pk, $patched_ruleset_request): \OpenAPI\Client\Model\Ruleset
```

Update some fields of a Ruleset

Update some fields of a Ruleset  Required scopes: check:write

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: BIMData_Connect
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_plan_pk = 56; // int | A unique integer value identifying this check plan.
$cloud_pk = 56; // int | A unique integer value identifying this cloud.
$id = 56; // int | A unique integer value identifying this ruleset.
$project_pk = 56; // int | A unique integer value identifying this project.
$patched_ruleset_request = new \OpenAPI\Client\Model\PatchedRulesetRequest(); // \OpenAPI\Client\Model\PatchedRulesetRequest

try {
    $result = $apiInstance->updateRuleset($check_plan_pk, $cloud_pk, $id, $project_pk, $patched_ruleset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckerApi->updateRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_plan_pk** | **int**| A unique integer value identifying this check plan. | |
| **cloud_pk** | **int**| A unique integer value identifying this cloud. | |
| **id** | **int**| A unique integer value identifying this ruleset. | |
| **project_pk** | **int**| A unique integer value identifying this project. | |
| **patched_ruleset_request** | [**\OpenAPI\Client\Model\PatchedRulesetRequest**](../Model/PatchedRulesetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
