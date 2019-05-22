<?php
/**
 * FaceMatch
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
 * FaceMatch Class Doc Comment
 *
 * @category Class
 * @description Location of one face in an image, along with match results
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FaceMatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FaceMatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'left_x' => 'int',
        'top_y' => 'int',
        'right_x' => 'int',
        'bottom_y' => 'int',
        'high_confidence_match' => 'bool',
        'match_score' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'left_x' => 'int32',
        'top_y' => 'int32',
        'right_x' => 'int32',
        'bottom_y' => 'int32',
        'high_confidence_match' => null,
        'match_score' => 'double'
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
        'left_x' => 'LeftX',
        'top_y' => 'TopY',
        'right_x' => 'RightX',
        'bottom_y' => 'BottomY',
        'high_confidence_match' => 'HighConfidenceMatch',
        'match_score' => 'MatchScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'left_x' => 'setLeftX',
        'top_y' => 'setTopY',
        'right_x' => 'setRightX',
        'bottom_y' => 'setBottomY',
        'high_confidence_match' => 'setHighConfidenceMatch',
        'match_score' => 'setMatchScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'left_x' => 'getLeftX',
        'top_y' => 'getTopY',
        'right_x' => 'getRightX',
        'bottom_y' => 'getBottomY',
        'high_confidence_match' => 'getHighConfidenceMatch',
        'match_score' => 'getMatchScore'
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
        $this->container['left_x'] = isset($data['left_x']) ? $data['left_x'] : null;
        $this->container['top_y'] = isset($data['top_y']) ? $data['top_y'] : null;
        $this->container['right_x'] = isset($data['right_x']) ? $data['right_x'] : null;
        $this->container['bottom_y'] = isset($data['bottom_y']) ? $data['bottom_y'] : null;
        $this->container['high_confidence_match'] = isset($data['high_confidence_match']) ? $data['high_confidence_match'] : null;
        $this->container['match_score'] = isset($data['match_score']) ? $data['match_score'] : null;
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

        return true;
    }


    /**
     * Gets left_x
     *
     * @return int
     */
    public function getLeftX()
    {
        return $this->container['left_x'];
    }

    /**
     * Sets left_x
     *
     * @param int $left_x X coordinate of the left side of the face
     *
     * @return $this
     */
    public function setLeftX($left_x)
    {
        $this->container['left_x'] = $left_x;

        return $this;
    }

    /**
     * Gets top_y
     *
     * @return int
     */
    public function getTopY()
    {
        return $this->container['top_y'];
    }

    /**
     * Sets top_y
     *
     * @param int $top_y Y coordinate of the top side of the face
     *
     * @return $this
     */
    public function setTopY($top_y)
    {
        $this->container['top_y'] = $top_y;

        return $this;
    }

    /**
     * Gets right_x
     *
     * @return int
     */
    public function getRightX()
    {
        return $this->container['right_x'];
    }

    /**
     * Sets right_x
     *
     * @param int $right_x X coordinate of the right side of the face
     *
     * @return $this
     */
    public function setRightX($right_x)
    {
        $this->container['right_x'] = $right_x;

        return $this;
    }

    /**
     * Gets bottom_y
     *
     * @return int
     */
    public function getBottomY()
    {
        return $this->container['bottom_y'];
    }

    /**
     * Sets bottom_y
     *
     * @param int $bottom_y Y coordinate of the bottom side of the face
     *
     * @return $this
     */
    public function setBottomY($bottom_y)
    {
        $this->container['bottom_y'] = $bottom_y;

        return $this;
    }

    /**
     * Gets high_confidence_match
     *
     * @return bool
     */
    public function getHighConfidenceMatch()
    {
        return $this->container['high_confidence_match'];
    }

    /**
     * Sets high_confidence_match
     *
     * @param bool $high_confidence_match True if there is a high confidence match, false otherwise
     *
     * @return $this
     */
    public function setHighConfidenceMatch($high_confidence_match)
    {
        $this->container['high_confidence_match'] = $high_confidence_match;

        return $this;
    }

    /**
     * Gets match_score
     *
     * @return double
     */
    public function getMatchScore()
    {
        return $this->container['match_score'];
    }

    /**
     * Sets match_score
     *
     * @param double $match_score Match score from 0.0 to 1.0 with higher scores indicating a greater match; scores above 0.7 indicate a match
     *
     * @return $this
     */
    public function setMatchScore($match_score)
    {
        $this->container['match_score'] = $match_score;

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

