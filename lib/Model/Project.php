<?php
/**
 * Project
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
 * Project Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Project implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = "Project";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "id" => "int",
        "logo" => "string",
        "name" => "string",
        "cloud" => "Cloud",
        "status" => "string",
        "created_at" => "\DateTime",
        "updated_at" => "\DateTime",
        "parent_id" => "int",
        "root_folder_id" => "int",
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        "id" => null,
        "logo" => "uri",
        "name" => null,
        "cloud" => null,
        "status" => null,
        "created_at" => "date-time",
        "updated_at" => "date-time",
        "parent_id" => null,
        "root_folder_id" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "id" => false,
        "logo" => true,
        "name" => false,
        "cloud" => false,
        "status" => false,
        "created_at" => false,
        "updated_at" => false,
        "parent_id" => true,
        "root_folder_id" => true,
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
        "id" => "id",
        "logo" => "logo",
        "name" => "name",
        "cloud" => "cloud",
        "status" => "status",
        "created_at" => "created_at",
        "updated_at" => "updated_at",
        "parent_id" => "parent_id",
        "root_folder_id" => "root_folder_id",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "id" => "setId",
        "logo" => "setLogo",
        "name" => "setName",
        "cloud" => "setCloud",
        "status" => "setStatus",
        "created_at" => "setCreatedAt",
        "updated_at" => "setUpdatedAt",
        "parent_id" => "setParentId",
        "root_folder_id" => "setRootFolderId",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "id" => "getId",
        "logo" => "getLogo",
        "name" => "getName",
        "cloud" => "getCloud",
        "status" => "getStatus",
        "created_at" => "getCreatedAt",
        "updated_at" => "getUpdatedAt",
        "parent_id" => "getParentId",
        "root_folder_id" => "getRootFolderId",
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

    public const STATUS_A = "A";
    public const STATUS_D = "D";

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [self::STATUS_A, self::STATUS_D];
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
        $this->setIfExists("id", $data ?? [], null);
        $this->setIfExists("logo", $data ?? [], null);
        $this->setIfExists("name", $data ?? [], null);
        $this->setIfExists("cloud", $data ?? [], null);
        $this->setIfExists("status", $data ?? [], null);
        $this->setIfExists("created_at", $data ?? [], null);
        $this->setIfExists("updated_at", $data ?? [], null);
        $this->setIfExists("parent_id", $data ?? [], null);
        $this->setIfExists("root_folder_id", $data ?? [], null);
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

        if ($this->container["id"] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container["name"] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (mb_strlen($this->container["name"]) > 256) {
            $invalidProperties[] =
                "invalid value for 'name', the character length must be smaller than or equal to 256.";
        }

        if ($this->container["cloud"] === null) {
            $invalidProperties[] = "'cloud' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (
            !is_null($this->container["status"]) &&
            !in_array($this->container["status"], $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container["status"],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container["created_at"] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container["updated_at"] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container["root_folder_id"] === null) {
            $invalidProperties[] = "'root_folder_id' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container["id"];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException(
                "non-nullable id cannot be null"
            );
        }

        $this->container["id"] = $id;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container["logo"];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, "logo");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("logo", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["logo"] = $logo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container["name"];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the project
     *
     * @return self
     */
    public function setName($name)
    {
        if (mb_strlen($name) > 256) {
            throw new \InvalidArgumentException(
                'invalid length for $name when calling Project., must be smaller than or equal to 256.'
            );
        }

        if (is_null($name)) {
            throw new \InvalidArgumentException(
                "non-nullable name cannot be null"
            );
        }

        $this->container["name"] = $name;

        return $this;
    }

    /**
     * Gets cloud
     *
     * @return Cloud
     */
    public function getCloud()
    {
        return $this->container["cloud"];
    }

    /**
     * Sets cloud
     *
     * @param Cloud $cloud cloud
     *
     * @return self
     */
    public function setCloud($cloud)
    {
        if (is_null($cloud)) {
            throw new \InvalidArgumentException(
                "non-nullable cloud cannot be null"
            );
        }

        $this->container["cloud"] = $cloud;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container["status"];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException(
                "non-nullable status cannot be null"
            );
        }

        $this->container["status"] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container["created_at"];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation date
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException(
                "non-nullable created_at cannot be null"
            );
        }

        $this->container["created_at"] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container["updated_at"];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date of the last update
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException(
                "non-nullable updated_at cannot be null"
            );
        }

        $this->container["updated_at"] = $updated_at;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container["parent_id"];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            array_push($this->openAPINullablesSetToNull, "parent_id");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("parent_id", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["parent_id"] = $parent_id;

        return $this;
    }

    /**
     * Gets root_folder_id
     *
     * @return int
     */
    public function getRootFolderId()
    {
        return $this->container["root_folder_id"];
    }

    /**
     * Sets root_folder_id
     *
     * @param int $root_folder_id root_folder_id
     *
     * @return self
     */
    public function setRootFolderId($root_folder_id)
    {
        if (is_null($root_folder_id)) {
            array_push($this->openAPINullablesSetToNull, "root_folder_id");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("root_folder_id", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["root_folder_id"] = $root_folder_id;

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
