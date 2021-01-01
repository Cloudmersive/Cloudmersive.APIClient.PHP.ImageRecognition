# Swagger\Client\TextGenerationApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**textGenerationCreateHandwritingPng**](TextGenerationApi.md#textGenerationCreateHandwritingPng) | **POST** /image/text/create/handwriting/png | Create an image of handwriting in PNG format


# **textGenerationCreateHandwritingPng**
> object textGenerationCreateHandwritingPng($request)

Create an image of handwriting in PNG format

Uses Deep Learning to generate realistic handwriting and returns the result as a PNG image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\TextGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CreateHandwritingRequest(); // \Swagger\Client\Model\CreateHandwritingRequest | Draw text parameters

try {
    $result = $apiInstance->textGenerationCreateHandwritingPng($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextGenerationApi->textGenerationCreateHandwritingPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateHandwritingRequest**](../Model/CreateHandwritingRequest.md)| Draw text parameters |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

