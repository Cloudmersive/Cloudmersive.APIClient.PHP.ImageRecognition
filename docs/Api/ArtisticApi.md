# Swagger\Client\ArtisticApi

All URIs are relative to *http://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**artisticPainting**](ArtisticApi.md#artisticPainting) | **POST** /image/artistic/painting/{style} | Transform an image into an artistic painting automatically


# **artisticPainting**
> string artisticPainting($style, $image_file)

Transform an image into an artistic painting automatically

Uses machine learning to automatically transform an image into an artistic painting.  Due to depth of AI processing, depending on image size this operation can take up to 20 seconds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ArtisticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$style = "style_example"; // string | The style of the painting to apply.  To start, try \"udnie\" a painting style.  Possible values are: \"udnie\", \"wave\", \"la_muse\", \"rain_princess\".
$image_file = "/path/to/file.txt"; // \SplFileObject | Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported.

try {
    $result = $apiInstance->artisticPainting($style, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtisticApi->artisticPainting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **style** | **string**| The style of the painting to apply.  To start, try \&quot;udnie\&quot; a painting style.  Possible values are: \&quot;udnie\&quot;, \&quot;wave\&quot;, \&quot;la_muse\&quot;, \&quot;rain_princess\&quot;. |
 **image_file** | **\SplFileObject**| Image file to perform the operation on.  Common file formats such as PNG, JPEG are supported. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

