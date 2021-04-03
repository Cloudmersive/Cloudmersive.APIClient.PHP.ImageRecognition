# Swagger\Client\RecognizeApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recognizeDescribe**](RecognizeApi.md#recognizeDescribe) | **POST** /image/recognize/describe | Describe an image in natural language
[**recognizeDetectAndUnskewDocument**](RecognizeApi.md#recognizeDetectAndUnskewDocument) | **POST** /image/recognize/detect-document/unskew | Detect and unskew a photo of a document
[**recognizeDetectObjects**](RecognizeApi.md#recognizeDetectObjects) | **POST** /image/recognize/detect-objects | Detect objects including types and locations in an image
[**recognizeDetectPeople**](RecognizeApi.md#recognizeDetectPeople) | **POST** /image/recognize/detect-people | Detect people including locations in an image
[**recognizeDetectTextFine**](RecognizeApi.md#recognizeDetectTextFine) | **POST** /image/recognize/detect-text/fine | Detect fine text in a photo of a document
[**recognizeDetectTextLarge**](RecognizeApi.md#recognizeDetectTextLarge) | **POST** /image/recognize/detect-text/large | Detect large text in a photo
[**recognizeDetectVehicleLicensePlates**](RecognizeApi.md#recognizeDetectVehicleLicensePlates) | **POST** /image/recognize/detect-vehicle-license-plates | Detect vehicle license plates in an image
[**recognizeFindSymbol**](RecognizeApi.md#recognizeFindSymbol) | **POST** /image/recognize/find/symbol | Find the location of a symbol in an image
[**recognizeSimilarityCompare**](RecognizeApi.md#recognizeSimilarityCompare) | **POST** /image/recognize/similarity/compare | Compare two images for similarity
[**recognizeSimilarityHash**](RecognizeApi.md#recognizeSimilarityHash) | **POST** /image/recognize/similarity/hash | Generate a perceptual image hash
[**recognizeSimilarityHashDistance**](RecognizeApi.md#recognizeSimilarityHashDistance) | **POST** /image/recognize/similarity/hash/distance | Calculates the similarity between two perceptual image hashes


# **recognizeDescribe**
> \Swagger\Client\Model\ImageDescriptionResponse recognizeDescribe($image_file)

Describe an image in natural language

Generate an English language text description of the image as a sentence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDescribe($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDescribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\ImageDescriptionResponse**](../Model/ImageDescriptionResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectAndUnskewDocument**
> string recognizeDetectAndUnskewDocument($image_file, $post_processing_effect)

Detect and unskew a photo of a document

Detect and unskew a photo of a document (e.g. taken on a cell phone) into a perfectly square image.  Great for document scanning applications; once unskewed, this image is perfect for converting to PDF using the Convert API or optical character recognition using the OCR API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.
$post_processing_effect = "post_processing_effect_example"; // string | Optional, post-processing effects to apply to the email, default is None.  Possible values are None and BlackAndWhite (force the image into a black and white view to aid in OCR operations).

try {
    $result = $apiInstance->recognizeDetectAndUnskewDocument($image_file, $post_processing_effect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectAndUnskewDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |
 **post_processing_effect** | **string**| Optional, post-processing effects to apply to the email, default is None.  Possible values are None and BlackAndWhite (force the image into a black and white view to aid in OCR operations). | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectObjects**
> \Swagger\Client\Model\ObjectDetectionResult recognizeDetectObjects($image_file)

Detect objects including types and locations in an image

Identify the position, size and description of objects in an image, along with a recognition confidence level.  Detects both human people and objects in an image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDetectObjects($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\ObjectDetectionResult**](../Model/ObjectDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectPeople**
> \Swagger\Client\Model\ObjectDetectionResult recognizeDetectPeople($image_file)

Detect people including locations in an image

Identify the position, and size of human people in an image, along with a recognition confidence level.  People in the image do NOT need to be facing the camera; they can be facing away, edge-on, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDetectPeople($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectPeople: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\ObjectDetectionResult**](../Model/ObjectDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectTextFine**
> \Swagger\Client\Model\FineTextDetectionResult recognizeDetectTextFine($image_file)

Detect fine text in a photo of a document

Identify the position, and size of small/fine text within a photograph of a document.  Identify the location of small text in a photo - such as words and other forms of high density text.  Can be used on a scan of a document or a photograph (e.g. smartphone camera) of a document, page or receipt.  For OCR purposes - please see our Deep Learning OCR APIs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDetectTextFine($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectTextFine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\FineTextDetectionResult**](../Model/FineTextDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectTextLarge**
> \Swagger\Client\Model\TextDetectionResult recognizeDetectTextLarge($image_file)

Detect large text in a photo

Identify the position, and size of large text within a photograph.  Identify the location of large text in a photo - such as signs, titles, etc. and other forms of large, low-density text.  Not suitable for high-density text (e.g. scans of documents, receipts, etc.) for OCR purposes - for OCR, please see our Deep Learning OCR APIs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDetectTextLarge($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectTextLarge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\TextDetectionResult**](../Model/TextDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeDetectVehicleLicensePlates**
> \Swagger\Client\Model\VehicleLicensePlateDetectionResult recognizeDetectVehicleLicensePlates($image_file)

Detect vehicle license plates in an image

Identify the position, and size, and content of vehicle license plates in an image.  License plates should be within 15-20 degrees on-axis to the camera.  Supported image formats are JPG, PNG and BMP.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->recognizeDetectVehicleLicensePlates($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeDetectVehicleLicensePlates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\VehicleLicensePlateDetectionResult**](../Model/VehicleLicensePlateDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeFindSymbol**
> \Swagger\Client\Model\FindSymbolResult recognizeFindSymbol($input_image, $target_image)

Find the location of a symbol in an image

Determine if an image contains a symbol, and if so, the location of that symbol in the image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_image = "/path/to/file.txt"; // \SplFileObject | Image file to search through for the target image.
$target_image = "/path/to/file.txt"; // \SplFileObject | Image to find in the input image.

try {
    $result = $apiInstance->recognizeFindSymbol($input_image, $target_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeFindSymbol: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_image** | **\SplFileObject**| Image file to search through for the target image. |
 **target_image** | **\SplFileObject**| Image to find in the input image. |

### Return type

[**\Swagger\Client\Model\FindSymbolResult**](../Model/FindSymbolResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeSimilarityCompare**
> string recognizeSimilarityCompare($base_image, $comparison_image, $recognition_mode)

Compare two images for similarity

Generates an image similarity score using Deep Learning between 0.0 and 1.0, values closer to 1.0 indicate greater similarity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_image = "/path/to/file.txt"; // \SplFileObject | Image file to compare against.  Common file formats such as PNG, JPEG are supported.
$comparison_image = "/path/to/file.txt"; // \SplFileObject | Image to compare to the base image.
$recognition_mode = "recognition_mode_example"; // string | Optional, specify the recognition mode; possible values are Normal, Basic and Advanced.  Default is Normal.

try {
    $result = $apiInstance->recognizeSimilarityCompare($base_image, $comparison_image, $recognition_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeSimilarityCompare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_image** | **\SplFileObject**| Image file to compare against.  Common file formats such as PNG, JPEG are supported. |
 **comparison_image** | **\SplFileObject**| Image to compare to the base image. |
 **recognition_mode** | **string**| Optional, specify the recognition mode; possible values are Normal, Basic and Advanced.  Default is Normal. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeSimilarityHash**
> \Swagger\Client\Model\ImageSimilarityHashResponse recognizeSimilarityHash($image_file, $recognition_mode)

Generate a perceptual image hash

Generates a hash value for the image; hash values that are closer together in terms of Hamming Distance are more similar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.
$recognition_mode = "recognition_mode_example"; // string | Optional, specify the recognition mode; possible values are Normal, Basic and Advanced.  Default is Normal.

try {
    $result = $apiInstance->recognizeSimilarityHash($image_file, $recognition_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeSimilarityHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |
 **recognition_mode** | **string**| Optional, specify the recognition mode; possible values are Normal, Basic and Advanced.  Default is Normal. | [optional]

### Return type

[**\Swagger\Client\Model\ImageSimilarityHashResponse**](../Model/ImageSimilarityHashResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recognizeSimilarityHashDistance**
> \Swagger\Client\Model\ImageSimilarityHashDistanceResponse recognizeSimilarityHashDistance($request)

Calculates the similarity between two perceptual image hashes

Calculates the similarity between two perceptual image hashes by computing the Hamming Distance between them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecognizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ImageSimilarityHashDistanceRequest(); // \Swagger\Client\Model\ImageSimilarityHashDistanceRequest | 

try {
    $result = $apiInstance->recognizeSimilarityHashDistance($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecognizeApi->recognizeSimilarityHashDistance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ImageSimilarityHashDistanceRequest**](../Model/ImageSimilarityHashDistanceRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ImageSimilarityHashDistanceResponse**](../Model/ImageSimilarityHashDistanceResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

