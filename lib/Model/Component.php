<?php
/**
 * Component
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
 * Component Class Doc Comment
 *
 * @category Class
 * @description Adds nested create feature
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Component implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = "Component";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "ifc_guid" => "string",
        "originating_system" => "string",
        "authoring_tool_id" => "string",
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        "ifc_guid" => null,
        "originating_system" => null,
        "authoring_tool_id" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "ifc_guid" => true,
        "originating_system" => true,
        "authoring_tool_id" => true,
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
        "ifc_guid" => "ifc_guid",
        "originating_system" => "originating_system",
        "authoring_tool_id" => "authoring_tool_id",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "ifc_guid" => "setIfcGuid",
        "originating_system" => "setOriginatingSystem",
        "authoring_tool_id" => "setAuthoringToolId",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "ifc_guid" => "getIfcGuid",
        "originating_system" => "getOriginatingSystem",
        "authoring_tool_id" => "getAuthoringToolId",
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
        $this->setIfExists("ifc_guid", $data ?? [], null);
        $this->setIfExists("originating_system", $data ?? [], null);
        $this->setIfExists("authoring_tool_id", $data ?? [], null);
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

        if (
            !is_null($this->container["ifc_guid"]) &&
            mb_strlen($this->container["ifc_guid"]) > 255
        ) {
            $invalidProperties[] =
                "invalid value for 'ifc_guid', the character length must be smaller than or equal to 255.";
        }

        if (
            !is_null($this->container["originating_system"]) &&
            mb_strlen($this->container["originating_system"]) > 255
        ) {
            $invalidProperties[] =
                "invalid value for 'originating_system', the character length must be smaller than or equal to 255.";
        }

        if (
            !is_null($this->container["authoring_tool_id"]) &&
            mb_strlen($this->container["authoring_tool_id"]) > 255
        ) {
            $invalidProperties[] =
                "invalid value for 'authoring_tool_id', the character length must be smaller than or equal to 255.";
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
     * Gets ifc_guid
     *
     * @return string|null
     */
    public function getIfcGuid()
    {
        return $this->container["ifc_guid"];
    }

    /**
     * Sets ifc_guid
     *
     * @param string|null $ifc_guid ifc_guid
     *
     * @return self
     */
    public function setIfcGuid($ifc_guid)
    {
        if (!is_null($ifc_guid) && mb_strlen($ifc_guid) > 255) {
            throw new \InvalidArgumentException(
                'invalid length for $ifc_guid when calling Component., must be smaller than or equal to 255.'
            );
        }

        if (is_null($ifc_guid)) {
            array_push($this->openAPINullablesSetToNull, "ifc_guid");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("ifc_guid", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["ifc_guid"] = $ifc_guid;

        return $this;
    }

    /**
     * Gets originating_system
     *
     * @return string|null
     */
    public function getOriginatingSystem()
    {
        return $this->container["originating_system"];
    }

    /**
     * Sets originating_system
     *
     * @param string|null $originating_system originating_system
     *
     * @return self
     */
    public function setOriginatingSystem($originating_system)
    {
        if (
            !is_null($originating_system) &&
            mb_strlen($originating_system) > 255
        ) {
            throw new \InvalidArgumentException(
                'invalid length for $originating_system when calling Component., must be smaller than or equal to 255.'
            );
        }

        if (is_null($originating_system)) {
            array_push($this->openAPINullablesSetToNull, "originating_system");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("originating_system", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["originating_system"] = $originating_system;

        return $this;
    }

    /**
     * Gets authoring_tool_id
     *
     * @return string|null
     */
    public function getAuthoringToolId()
    {
        return $this->container["authoring_tool_id"];
    }

    /**
     * Sets authoring_tool_id
     *
     * @param string|null $authoring_tool_id authoring_tool_id
     *
     * @return self
     */
    public function setAuthoringToolId($authoring_tool_id)
    {
        if (
            !is_null($authoring_tool_id) &&
            mb_strlen($authoring_tool_id) > 255
        ) {
            throw new \InvalidArgumentException(
                'invalid length for $authoring_tool_id when calling Component., must be smaller than or equal to 255.'
            );
        }

        if (is_null($authoring_tool_id)) {
            array_push($this->openAPINullablesSetToNull, "authoring_tool_id");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("authoring_tool_id", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["authoring_tool_id"] = $authoring_tool_id;

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
