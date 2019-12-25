# Swagger\Client\NsfwApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**nsfwClassify**](NsfwApi.md#nsfwClassify) | **POST** /image/nsfw/classify | Not safe for work NSFW racy content classification


# **nsfwClassify**
> \Swagger\Client\Model\NsfwResult nsfwClassify($image_file)

Not safe for work NSFW racy content classification

Classify an image into Not Safe For Work (NSFW)/Porn/Racy content and Safe Content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\NsfwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->nsfwClassify($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsfwApi->nsfwClassify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\NsfwResult**](../Model/NsfwResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

