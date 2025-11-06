# Swagger\Client\FaceApi

All URIs are relative to *http://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faceCompare**](FaceApi.md#faceCompare) | **POST** /image/face/compare-and-match | Compare and match faces
[**faceCropFirst**](FaceApi.md#faceCropFirst) | **POST** /image/face/crop/first | Crop image to face with square crop
[**faceCropFirstRound**](FaceApi.md#faceCropFirstRound) | **POST** /image/face/crop/first/round | Crop image to face with round crop
[**faceDetectAge**](FaceApi.md#faceDetectAge) | **POST** /image/face/detect-age | Detect the age of people in an image
[**faceDetectGender**](FaceApi.md#faceDetectGender) | **POST** /image/face/detect-gender | Detect the gender of people in an image
[**faceLocate**](FaceApi.md#faceLocate) | **POST** /image/face/locate | Detect and find faces in an image
[**faceLocateWithLandmarks**](FaceApi.md#faceLocateWithLandmarks) | **POST** /image/face/locate-with-landmarks | Detect and find faces and landmarks eyes and nose and mouth in image


# **faceCompare**
> \Swagger\Client\Model\FaceCompareResponse faceCompare($input_image, $match_face)

Compare and match faces

Find the faces in an input image, and compare against a reference image to determine if there is a match against the face in the reference image.  The reference image (second parameter) should contain exactly one face.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_image = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on; this image can contain one or more faces which will be matched against face provided in the second image.  Common file formats such as PNG, JPEG are supported.
$match_face = "/path/to/file.txt"; // \SplFileObject | Image of a single face to compare and match against.

try {
    $result = $apiInstance->faceCompare($input_image, $match_face);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceCompare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_image** | **\SplFileObject**| Image file to perform the operation on; this image can contain one or more faces which will be matched against face provided in the second image.  Common file formats such as PNG, JPEG are supported. |
 **match_face** | **\SplFileObject**| Image of a single face to compare and match against. |

### Return type

[**\Swagger\Client\Model\FaceCompareResponse**](../Model/FaceCompareResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceCropFirst**
> string faceCropFirst($image_file)

Crop image to face with square crop

Crop an image to the face (rectangular crop).  If there is more than one face present, choose the first one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceCropFirst($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceCropFirst: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceCropFirstRound**
> string faceCropFirstRound($image_file)

Crop image to face with round crop

Crop an image to the face (circular/round crop).  If there is more than one face present, choose the first one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceCropFirstRound($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceCropFirstRound: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceDetectAge**
> \Swagger\Client\Model\AgeDetectionResult faceDetectAge($image_file)

Detect the age of people in an image

Identify the age, position, and size of human faces in an image, along with a recognition confidence level.  People in the image do NOT need to be facing the camera; they can be facing away, edge-on, etc.  Input image should be a PNG or JPG.  Consumes 20 API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceDetectAge($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceDetectAge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\AgeDetectionResult**](../Model/AgeDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceDetectGender**
> \Swagger\Client\Model\AgeDetectionResult faceDetectGender($image_file)

Detect the gender of people in an image

Identify the gender, position, and size of human faces in an image, along with a recognition confidence level.  People in the image should be facing the camera.  Input image should be a PNG or JPG.  Consumes 20 API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceDetectGender($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceDetectGender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\AgeDetectionResult**](../Model/AgeDetectionResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceLocate**
> \Swagger\Client\Model\FaceLocateResponse faceLocate($image_file)

Detect and find faces in an image

Locate the positions of all faces in an image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceLocate($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceLocate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\FaceLocateResponse**](../Model/FaceLocateResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faceLocateWithLandmarks**
> \Swagger\Client\Model\FaceLocateWithLandmarksResponse faceLocateWithLandmarks($image_file)

Detect and find faces and landmarks eyes and nose and mouth in image

Locate the positions of all faces in an image, along with the eyes, eye brows, nose and mouth components of each

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\FaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->faceLocateWithLandmarks($image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaceApi->faceLocateWithLandmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

[**\Swagger\Client\Model\FaceLocateWithLandmarksResponse**](../Model/FaceLocateWithLandmarksResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

