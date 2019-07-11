# cloudmersive_imagerecognition_api_client
Image Recognition and Processing APIs let you use Machine Learning to recognize and process images, and also perform useful image modification operations.

[Cloudmersive Image Recognition and Computer Vision API](https://www.cloudmersive.com/image-recognition-and-processing-api) provides advanced computer vision and image recognition capabilities.

- API version: v1
- Package version: 1.4.8


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_imagerecognition_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_imagerecognition_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_imagerecognition_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArtisticApi* | [**artisticPainting**](docs/Api/ArtisticApi.md#artisticpainting) | **POST** /image/artistic/painting/{style} | Transform an image into an artistic painting automatically
*EditApi* | [**editAutoOrient**](docs/Api/EditApi.md#editautoorient) | **POST** /image/edit/auto-orient/remove-exif | Normalizes image rotation and removes EXIF rotation data
*EditApi* | [**editCompositeBasic**](docs/Api/EditApi.md#editcompositebasic) | **POST** /image/edit/composite/{location} | Composite two images together
*EditApi* | [**editContrastAdaptive**](docs/Api/EditApi.md#editcontrastadaptive) | **POST** /image/edit/contrast/{gamma}/adaptive | Adaptively adjust the contrast of the image to be more appealing and easy to see
*EditApi* | [**editDrawPolygon**](docs/Api/EditApi.md#editdrawpolygon) | **POST** /image/edit/draw/polygon | Draw polygon onto an image
*EditApi* | [**editDrawRectangle**](docs/Api/EditApi.md#editdrawrectangle) | **POST** /image/edit/draw/rectangle | Draw rectangle onto an image
*EditApi* | [**editDrawText**](docs/Api/EditApi.md#editdrawtext) | **POST** /image/edit/draw/text | Draw text onto an image
*EditApi* | [**editRotate**](docs/Api/EditApi.md#editrotate) | **POST** /image/edit/rotate/{degrees}/angle | Rotate an image any number of degrees
*FaceApi* | [**faceCompare**](docs/Api/FaceApi.md#facecompare) | **POST** /image/face/compare-and-match | Compare and match faces
*FaceApi* | [**faceCropFirst**](docs/Api/FaceApi.md#facecropfirst) | **POST** /image/face/crop/first | Crop image to face (square)
*FaceApi* | [**faceCropFirstRound**](docs/Api/FaceApi.md#facecropfirstround) | **POST** /image/face/crop/first/round | Crop image to face (round)
*FaceApi* | [**faceDetectAge**](docs/Api/FaceApi.md#facedetectage) | **POST** /image/face/detect-age | Detect the age of people in an image
*FaceApi* | [**faceLocate**](docs/Api/FaceApi.md#facelocate) | **POST** /image/face/locate | Find faces in an image
*FaceApi* | [**faceLocateWithLandmarks**](docs/Api/FaceApi.md#facelocatewithlandmarks) | **POST** /image/face/locate-with-landmarks | Find faces and face landmarks (eyes, eye brows, nose, mouth) in an image
*NsfwApi* | [**nsfwClassify**](docs/Api/NsfwApi.md#nsfwclassify) | **POST** /image/nsfw/classify | Not safe for work (NSFW) racy content classification
*RecognizeApi* | [**recognizeDescribe**](docs/Api/RecognizeApi.md#recognizedescribe) | **POST** /image/recognize/describe | Describe an image in natural language
*RecognizeApi* | [**recognizeDetectAndUnskewDocument**](docs/Api/RecognizeApi.md#recognizedetectandunskewdocument) | **POST** /image/recognize/detect-document/unskew | Detect and unskew a photo of a document
*RecognizeApi* | [**recognizeDetectObjects**](docs/Api/RecognizeApi.md#recognizedetectobjects) | **POST** /image/recognize/detect-objects | Detect objects, including types and locations, in an image
*RecognizeApi* | [**recognizeDetectPeople**](docs/Api/RecognizeApi.md#recognizedetectpeople) | **POST** /image/recognize/detect-people | Detect people, including locations, in an image
*RecognizeApi* | [**recognizeDetectTextFine**](docs/Api/RecognizeApi.md#recognizedetecttextfine) | **POST** /image/recognize/detect-text/fine | Detect fine text in a photo of a document
*RecognizeApi* | [**recognizeDetectTextLarge**](docs/Api/RecognizeApi.md#recognizedetecttextlarge) | **POST** /image/recognize/detect-text/large | Detect large text in a photo
*RecognizeApi* | [**recognizeDetectVehicleLicensePlates**](docs/Api/RecognizeApi.md#recognizedetectvehiclelicenseplates) | **POST** /image/recognize/detect-vehicle-license-plates | Detect vehicle license plates in an image
*ResizeApi* | [**resizePost**](docs/Api/ResizeApi.md#resizepost) | **POST** /image/resize/preserveAspectRatio/{maxWidth}/{maxHeight} | Resize an image with parameters


## Documentation For Models

 - [AgeDetectionResult](docs/Model/AgeDetectionResult.md)
 - [DetectedLicensePlate](docs/Model/DetectedLicensePlate.md)
 - [DetectedObject](docs/Model/DetectedObject.md)
 - [DrawPolygonInstance](docs/Model/DrawPolygonInstance.md)
 - [DrawPolygonRequest](docs/Model/DrawPolygonRequest.md)
 - [DrawRectangleInstance](docs/Model/DrawRectangleInstance.md)
 - [DrawRectangleRequest](docs/Model/DrawRectangleRequest.md)
 - [DrawTextInstance](docs/Model/DrawTextInstance.md)
 - [DrawTextRequest](docs/Model/DrawTextRequest.md)
 - [Face](docs/Model/Face.md)
 - [FaceCompareResponse](docs/Model/FaceCompareResponse.md)
 - [FaceLocateResponse](docs/Model/FaceLocateResponse.md)
 - [FaceLocateWithLandmarksResponse](docs/Model/FaceLocateWithLandmarksResponse.md)
 - [FaceMatch](docs/Model/FaceMatch.md)
 - [FacePoint](docs/Model/FacePoint.md)
 - [FaceWithLandmarks](docs/Model/FaceWithLandmarks.md)
 - [FineTextDetectionResult](docs/Model/FineTextDetectionResult.md)
 - [FineTextItem](docs/Model/FineTextItem.md)
 - [ImageDescriptionResponse](docs/Model/ImageDescriptionResponse.md)
 - [NsfwResult](docs/Model/NsfwResult.md)
 - [ObjectDetectionResult](docs/Model/ObjectDetectionResult.md)
 - [PersonWithAge](docs/Model/PersonWithAge.md)
 - [PolygonPoint](docs/Model/PolygonPoint.md)
 - [RecognitionOutcome](docs/Model/RecognitionOutcome.md)
 - [TextDetectionResult](docs/Model/TextDetectionResult.md)
 - [TextItem](docs/Model/TextItem.md)
 - [VehicleLicensePlateDetectionResult](docs/Model/VehicleLicensePlateDetectionResult.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




