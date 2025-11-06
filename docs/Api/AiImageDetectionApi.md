# Swagger\Client\AiImageDetectionApi

All URIs are relative to *http://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aiImageDetectionDetectFile**](AiImageDetectionApi.md#aiImageDetectionDetectFile) | **POST** /image/ai-detection/file | Detect if an input image was generated using AI


# **aiImageDetectionDetectFile**
> \Swagger\Client\Model\ImageAiDetectionResult aiImageDetectionDetectFile($image_file)

Detect if an input image was generated using AI

Detects if the input image was generated using AI tools.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AiImageDetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->aiImageDetectionDetectFile($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiImageDetectionApi->aiImageDetectionDetectFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\ImageAiDetectionResult**](../Model/ImageAiDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

