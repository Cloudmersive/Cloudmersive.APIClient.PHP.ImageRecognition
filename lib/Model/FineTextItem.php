<?php
/**
 * FineTextItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * imageapi
 *
 * Image Recognition and Processing APIs let you use Machine Learning to recognize and process images, and also perform useful image modification operations.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FineTextItem Class Doc Comment
 *
 * @category Class
 * @description Individual instance of text occuring in an image; one piece of text
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FineTextItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FineTextItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'top_left_x' => 'int',
        'top_left_y' => 'int',
        'top_right_x' => 'int',
        'top_right_y' => 'int',
        'bottom_left_x' => 'int',
        'bottom_left_y' => 'int',
        'bottom_right_x' => 'int',
        'bottom_right_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'angle' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'top_left_x' => 'int32',
        'top_left_y' => 'int32',
        'top_right_x' => 'int32',
        'top_right_y' => 'int32',
        'bottom_left_x' => 'int32',
        'bottom_left_y' => 'int32',
        'bottom_right_x' => 'int32',
        'bottom_right_y' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'angle' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'top_left_x' => 'TopLeftX',
        'top_left_y' => 'TopLeftY',
        'top_right_x' => 'TopRightX',
        'top_right_y' => 'TopRightY',
        'bottom_left_x' => 'BottomLeftX',
        'bottom_left_y' => 'BottomLeftY',
        'bottom_right_x' => 'BottomRightX',
        'bottom_right_y' => 'BottomRightY',
        'width' => 'Width',
        'height' => 'Height',
        'angle' => 'Angle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'top_left_x' => 'setTopLeftX',
        'top_left_y' => 'setTopLeftY',
        'top_right_x' => 'setTopRightX',
        'top_right_y' => 'setTopRightY',
        'bottom_left_x' => 'setBottomLeftX',
        'bottom_left_y' => 'setBottomLeftY',
        'bottom_right_x' => 'setBottomRightX',
        'bottom_right_y' => 'setBottomRightY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'angle' => 'setAngle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'top_left_x' => 'getTopLeftX',
        'top_left_y' => 'getTopLeftY',
        'top_right_x' => 'getTopRightX',
        'top_right_y' => 'getTopRightY',
        'bottom_left_x' => 'getBottomLeftX',
        'bottom_left_y' => 'getBottomLeftY',
        'bottom_right_x' => 'getBottomRightX',
        'bottom_right_y' => 'getBottomRightY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'angle' => 'getAngle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['top_left_x'] = isset($data['top_left_x']) ? $data['top_left_x'] : null;
        $this->container['top_left_y'] = isset($data['top_left_y']) ? $data['top_left_y'] : null;
        $this->container['top_right_x'] = isset($data['top_right_x']) ? $data['top_right_x'] : null;
        $this->container['top_right_y'] = isset($data['top_right_y']) ? $data['top_right_y'] : null;
        $this->container['bottom_left_x'] = isset($data['bottom_left_x']) ? $data['bottom_left_x'] : null;
        $this->container['bottom_left_y'] = isset($data['bottom_left_y']) ? $data['bottom_left_y'] : null;
        $this->container['bottom_right_x'] = isset($data['bottom_right_x']) ? $data['bottom_right_x'] : null;
        $this->container['bottom_right_y'] = isset($data['bottom_right_y']) ? $data['bottom_right_y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets top_left_x
     *
     * @return int
     */
    public function getTopLeftX()
    {
        return $this->container['top_left_x'];
    }

    /**
     * Sets top_left_x
     *
     * @param int $top_left_x X coordinate of the top/left text location; 0 represents the left edge of the input image
     *
     * @return $this
     */
    public function setTopLeftX($top_left_x)
    {
        $this->container['top_left_x'] = $top_left_x;

        return $this;
    }

    /**
     * Gets top_left_y
     *
     * @return int
     */
    public function getTopLeftY()
    {
        return $this->container['top_left_y'];
    }

    /**
     * Sets top_left_y
     *
     * @param int $top_left_y Y coordinate of the top/left text location; 0 represents the top edge of the input image
     *
     * @return $this
     */
    public function setTopLeftY($top_left_y)
    {
        $this->container['top_left_y'] = $top_left_y;

        return $this;
    }

    /**
     * Gets top_right_x
     *
     * @return int
     */
    public function getTopRightX()
    {
        return $this->container['top_right_x'];
    }

    /**
     * Sets top_right_x
     *
     * @param int $top_right_x X coordinate of the top/right text location; 0 represents the left edge of the input image
     *
     * @return $this
     */
    public function setTopRightX($top_right_x)
    {
        $this->container['top_right_x'] = $top_right_x;

        return $this;
    }

    /**
     * Gets top_right_y
     *
     * @return int
     */
    public function getTopRightY()
    {
        return $this->container['top_right_y'];
    }

    /**
     * Sets top_right_y
     *
     * @param int $top_right_y Y coordinate of the top/right text location; 0 represents the top edge of the input image
     *
     * @return $this
     */
    public function setTopRightY($top_right_y)
    {
        $this->container['top_right_y'] = $top_right_y;

        return $this;
    }

    /**
     * Gets bottom_left_x
     *
     * @return int
     */
    public function getBottomLeftX()
    {
        return $this->container['bottom_left_x'];
    }

    /**
     * Sets bottom_left_x
     *
     * @param int $bottom_left_x X coordinate of the bottom/left text location; 0 represents the left edge of the input image
     *
     * @return $this
     */
    public function setBottomLeftX($bottom_left_x)
    {
        $this->container['bottom_left_x'] = $bottom_left_x;

        return $this;
    }

    /**
     * Gets bottom_left_y
     *
     * @return int
     */
    public function getBottomLeftY()
    {
        return $this->container['bottom_left_y'];
    }

    /**
     * Sets bottom_left_y
     *
     * @param int $bottom_left_y Y coordinate of the bottom/left text location; 0 represents the top edge of the input image
     *
     * @return $this
     */
    public function setBottomLeftY($bottom_left_y)
    {
        $this->container['bottom_left_y'] = $bottom_left_y;

        return $this;
    }

    /**
     * Gets bottom_right_x
     *
     * @return int
     */
    public function getBottomRightX()
    {
        return $this->container['bottom_right_x'];
    }

    /**
     * Sets bottom_right_x
     *
     * @param int $bottom_right_x X coordinate of the bottom/right text location; 0 represents the left edge of the input image
     *
     * @return $this
     */
    public function setBottomRightX($bottom_right_x)
    {
        $this->container['bottom_right_x'] = $bottom_right_x;

        return $this;
    }

    /**
     * Gets bottom_right_y
     *
     * @return int
     */
    public function getBottomRightY()
    {
        return $this->container['bottom_right_y'];
    }

    /**
     * Sets bottom_right_y
     *
     * @param int $bottom_right_y Y coordinate of the bottom/right text location; 0 represents the top edge of the input image
     *
     * @return $this
     */
    public function setBottomRightY($bottom_right_y)
    {
        $this->container['bottom_right_y'] = $bottom_right_y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width in pixels of the text
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height in pixels of the text
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets angle
     *
     * @return double
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /**
     * Sets angle
     *
     * @param double $angle Rotation Angle in radians of the text
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


