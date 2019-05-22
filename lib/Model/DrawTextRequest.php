<?php
/**
 * DrawTextRequest
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
 * Swagger Codegen version: 2.3.1
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
 * DrawTextRequest Class Doc Comment
 *
 * @category Class
 * @description Request to draw one or more pieces of text onto an image
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DrawTextRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DrawTextRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_image_bytes' => 'string',
        'base_image_url' => 'string',
        'text_to_draw' => '\Swagger\Client\Model\DrawTextInstance[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_image_bytes' => 'byte',
        'base_image_url' => null,
        'text_to_draw' => null
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
        'base_image_bytes' => 'BaseImageBytes',
        'base_image_url' => 'BaseImageUrl',
        'text_to_draw' => 'TextToDraw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_image_bytes' => 'setBaseImageBytes',
        'base_image_url' => 'setBaseImageUrl',
        'text_to_draw' => 'setTextToDraw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_image_bytes' => 'getBaseImageBytes',
        'base_image_url' => 'getBaseImageUrl',
        'text_to_draw' => 'getTextToDraw'
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
        $this->container['base_image_bytes'] = isset($data['base_image_bytes']) ? $data['base_image_bytes'] : null;
        $this->container['base_image_url'] = isset($data['base_image_url']) ? $data['base_image_url'] : null;
        $this->container['text_to_draw'] = isset($data['text_to_draw']) ? $data['text_to_draw'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['base_image_bytes']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['base_image_bytes'])) {
            $invalidProperties[] = "invalid value for 'base_image_bytes', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['base_image_bytes'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets base_image_bytes
     *
     * @return string
     */
    public function getBaseImageBytes()
    {
        return $this->container['base_image_bytes'];
    }

    /**
     * Sets base_image_bytes
     *
     * @param string $base_image_bytes Image to draw text on, in bytes.  You can also use the BaseImageUrl instead to supply image input as a URL
     *
     * @return $this
     */
    public function setBaseImageBytes($base_image_bytes)
    {

        if (!is_null($base_image_bytes) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $base_image_bytes))) {
            throw new \InvalidArgumentException("invalid value for $base_image_bytes when calling DrawTextRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['base_image_bytes'] = $base_image_bytes;

        return $this;
    }

    /**
     * Gets base_image_url
     *
     * @return string
     */
    public function getBaseImageUrl()
    {
        return $this->container['base_image_url'];
    }

    /**
     * Sets base_image_url
     *
     * @param string $base_image_url Image to draw text on, as an HTTP or HTTPS fully-qualified URL
     *
     * @return $this
     */
    public function setBaseImageUrl($base_image_url)
    {
        $this->container['base_image_url'] = $base_image_url;

        return $this;
    }

    /**
     * Gets text_to_draw
     *
     * @return \Swagger\Client\Model\DrawTextInstance[]
     */
    public function getTextToDraw()
    {
        return $this->container['text_to_draw'];
    }

    /**
     * Sets text_to_draw
     *
     * @param \Swagger\Client\Model\DrawTextInstance[] $text_to_draw One or more pieces of text to draw onto the image
     *
     * @return $this
     */
    public function setTextToDraw($text_to_draw)
    {
        $this->container['text_to_draw'] = $text_to_draw;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


