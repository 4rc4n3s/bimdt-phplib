<?php
/**
 * PatchedViewpointRequestOrthogonalCamera
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BIMData API
 *
 * BIMData API is a tool to interact with your models stored on BIMData’s servers.     Through the API, you can manage your projects, the clouds, upload your IFC files and manage them through endpoints.
 *
 * The version of the OpenAPI document: v1 (v1)
 * Contact: support@bimdata.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use OpenAPI\Client\ObjectSerializer;

/**
 * PatchedViewpointRequestOrthogonalCamera Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedViewpointRequestOrthogonalCamera implements
    ModelInterface,
    ArrayAccess,
    \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = "PatchedViewpointRequest_orthogonal_camera";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "view_to_world_scale" => "float",
        "camera_direction" => "\OpenAPI\Client\Model\DirectionRequest",
        "camera_up_vector" => "\OpenAPI\Client\Model\DirectionRequest",
        "camera_view_point" => "\OpenAPI\Client\Model\PointRequest",
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        "view_to_world_scale" => "double",
        "camera_direction" => null,
        "camera_up_vector" => null,
        "camera_view_point" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "view_to_world_scale" => false,
        "camera_direction" => false,
        "camera_up_vector" => false,
        "camera_view_point" => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(
        array $openAPINullablesSetToNull
    ): void {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        "view_to_world_scale" => "view_to_world_scale",
        "camera_direction" => "camera_direction",
        "camera_up_vector" => "camera_up_vector",
        "camera_view_point" => "camera_view_point",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "view_to_world_scale" => "setViewToWorldScale",
        "camera_direction" => "setCameraDirection",
        "camera_up_vector" => "setCameraUpVector",
        "camera_view_point" => "setCameraViewPoint",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "view_to_world_scale" => "getViewToWorldScale",
        "camera_direction" => "getCameraDirection",
        "camera_up_vector" => "getCameraUpVector",
        "camera_view_point" => "getCameraViewPoint",
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
        return self::$openAPIModelName;
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
        $this->setIfExists("view_to_world_scale", $data ?? [], null);
        $this->setIfExists("camera_direction", $data ?? [], null);
        $this->setIfExists("camera_up_vector", $data ?? [], null);
        $this->setIfExists("camera_view_point", $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string $variableName
     * @param array  $fields
     * @param mixed  $defaultValue
     */
    private function setIfExists(
        string $variableName,
        array $fields,
        $defaultValue
    ): void {
        if (
            self::isNullable($variableName) &&
            array_key_exists($variableName, $fields) &&
            is_null($fields[$variableName])
        ) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] =
            $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container["view_to_world_scale"] === null) {
            $invalidProperties[] = "'view_to_world_scale' can't be null";
        }
        if ($this->container["camera_direction"] === null) {
            $invalidProperties[] = "'camera_direction' can't be null";
        }
        if ($this->container["camera_up_vector"] === null) {
            $invalidProperties[] = "'camera_up_vector' can't be null";
        }
        if ($this->container["camera_view_point"] === null) {
            $invalidProperties[] = "'camera_view_point' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets view_to_world_scale
     *
     * @return float
     */
    public function getViewToWorldScale()
    {
        return $this->container["view_to_world_scale"];
    }

    /**
     * Sets view_to_world_scale
     *
     * @param float $view_to_world_scale view_to_world_scale
     *
     * @return self
     */
    public function setViewToWorldScale($view_to_world_scale)
    {
        if (is_null($view_to_world_scale)) {
            throw new \InvalidArgumentException(
                "non-nullable view_to_world_scale cannot be null"
            );
        }

        $this->container["view_to_world_scale"] = $view_to_world_scale;

        return $this;
    }

    /**
     * Gets camera_direction
     *
     * @return \OpenAPI\Client\Model\DirectionRequest
     */
    public function getCameraDirection()
    {
        return $this->container["camera_direction"];
    }

    /**
     * Sets camera_direction
     *
     * @param \OpenAPI\Client\Model\DirectionRequest $camera_direction camera_direction
     *
     * @return self
     */
    public function setCameraDirection($camera_direction)
    {
        if (is_null($camera_direction)) {
            throw new \InvalidArgumentException(
                "non-nullable camera_direction cannot be null"
            );
        }

        $this->container["camera_direction"] = $camera_direction;

        return $this;
    }

    /**
     * Gets camera_up_vector
     *
     * @return \OpenAPI\Client\Model\DirectionRequest
     */
    public function getCameraUpVector()
    {
        return $this->container["camera_up_vector"];
    }

    /**
     * Sets camera_up_vector
     *
     * @param \OpenAPI\Client\Model\DirectionRequest $camera_up_vector camera_up_vector
     *
     * @return self
     */
    public function setCameraUpVector($camera_up_vector)
    {
        if (is_null($camera_up_vector)) {
            throw new \InvalidArgumentException(
                "non-nullable camera_up_vector cannot be null"
            );
        }

        $this->container["camera_up_vector"] = $camera_up_vector;

        return $this;
    }

    /**
     * Gets camera_view_point
     *
     * @return \OpenAPI\Client\Model\PointRequest
     */
    public function getCameraViewPoint()
    {
        return $this->container["camera_view_point"];
    }

    /**
     * Sets camera_view_point
     *
     * @param \OpenAPI\Client\Model\PointRequest $camera_view_point camera_view_point
     *
     * @return self
     */
    public function setCameraViewPoint($camera_view_point)
    {
        if (is_null($camera_view_point)) {
            throw new \InvalidArgumentException(
                "non-nullable camera_view_point cannot be null"
            );
        }

        $this->container["camera_view_point"] = $camera_view_point;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
