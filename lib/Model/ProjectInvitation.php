<?php
/**
 * ProjectInvitation
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
 * ProjectInvitation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectInvitation implements
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
    protected static $openAPIModelName = "ProjectInvitation";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "id" => "int",
        "email" => "string",
        "redirect_uri" => "string",
        "role" => "int",
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
        "email" => "email",
        "redirect_uri" => "uri",
        "role" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "id" => false,
        "email" => false,
        "redirect_uri" => false,
        "role" => false,
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
        "email" => "email",
        "redirect_uri" => "redirect_uri",
        "role" => "role",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "id" => "setId",
        "email" => "setEmail",
        "redirect_uri" => "setRedirectUri",
        "role" => "setRole",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "id" => "getId",
        "email" => "getEmail",
        "redirect_uri" => "getRedirectUri",
        "role" => "getRole",
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

    public const ROLE_100 = 100;
    public const ROLE_50 = 50;
    public const ROLE_25 = 25;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [self::ROLE_100, self::ROLE_50, self::ROLE_25];
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
        $this->setIfExists("email", $data ?? [], null);
        $this->setIfExists("redirect_uri", $data ?? [], null);
        $this->setIfExists("role", $data ?? [], null);
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
        if ($this->container["email"] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (mb_strlen($this->container["email"]) > 256) {
            $invalidProperties[] =
                "invalid value for 'email', the character length must be smaller than or equal to 256.";
        }

        if ($this->container["redirect_uri"] === null) {
            $invalidProperties[] = "'redirect_uri' can't be null";
        }
        if (mb_strlen($this->container["redirect_uri"]) > 512) {
            $invalidProperties[] =
                "invalid value for 'redirect_uri', the character length must be smaller than or equal to 512.";
        }

        if ($this->container["role"] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (
            !is_null($this->container["role"]) &&
            !in_array($this->container["role"], $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container["role"],
                implode("', '", $allowedValues)
            );
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container["email"];
    }

    /**
     * Sets email
     *
     * @param string $email email of the user to invite
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (mb_strlen($email) > 256) {
            throw new \InvalidArgumentException(
                'invalid length for $email when calling ProjectInvitation., must be smaller than or equal to 256.'
            );
        }

        if (is_null($email)) {
            throw new \InvalidArgumentException(
                "non-nullable email cannot be null"
            );
        }

        $this->container["email"] = $email;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container["redirect_uri"];
    }

    /**
     * Sets redirect_uri
     *
     * @param string $redirect_uri User will be redirected to this uri when they accept the invitation
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        if (mb_strlen($redirect_uri) > 512) {
            throw new \InvalidArgumentException(
                'invalid length for $redirect_uri when calling ProjectInvitation., must be smaller than or equal to 512.'
            );
        }

        if (is_null($redirect_uri)) {
            throw new \InvalidArgumentException(
                "non-nullable redirect_uri cannot be null"
            );
        }

        $this->container["redirect_uri"] = $redirect_uri;

        return $this;
    }

    /**
     * Gets role
     *
     * @return int
     */
    public function getRole()
    {
        return $this->container["role"];
    }

    /**
     * Sets role
     *
     * @param int $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($role)) {
            throw new \InvalidArgumentException(
                "non-nullable role cannot be null"
            );
        }

        $this->container["role"] = $role;

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
