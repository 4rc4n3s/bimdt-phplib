<?php
/**
 * PatchedCommentRequest
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
 * PatchedCommentRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedCommentRequest implements
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
    protected static $openAPIModelName = "PatchedCommentRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "guid" => "string",
        "date" => "\DateTime",
        "author" => "string",
        "comment" => "string",
        "viewpoint_guid" => "string",
        "reply_to_comment_guid" => "string",
        "modified_author" => "string",
        "viewpoint_temp_id" => "int",
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        "guid" => "uuid",
        "date" => "date-time",
        "author" => null,
        "comment" => null,
        "viewpoint_guid" => null,
        "reply_to_comment_guid" => null,
        "modified_author" => null,
        "viewpoint_temp_id" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "guid" => false,
        "date" => false,
        "author" => true,
        "comment" => false,
        "viewpoint_guid" => true,
        "reply_to_comment_guid" => true,
        "modified_author" => true,
        "viewpoint_temp_id" => false,
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
        "guid" => "guid",
        "date" => "date",
        "author" => "author",
        "comment" => "comment",
        "viewpoint_guid" => "viewpoint_guid",
        "reply_to_comment_guid" => "reply_to_comment_guid",
        "modified_author" => "modified_author",
        "viewpoint_temp_id" => "viewpoint_temp_id",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "guid" => "setGuid",
        "date" => "setDate",
        "author" => "setAuthor",
        "comment" => "setComment",
        "viewpoint_guid" => "setViewpointGuid",
        "reply_to_comment_guid" => "setReplyToCommentGuid",
        "modified_author" => "setModifiedAuthor",
        "viewpoint_temp_id" => "setViewpointTempId",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "guid" => "getGuid",
        "date" => "getDate",
        "author" => "getAuthor",
        "comment" => "getComment",
        "viewpoint_guid" => "getViewpointGuid",
        "reply_to_comment_guid" => "getReplyToCommentGuid",
        "modified_author" => "getModifiedAuthor",
        "viewpoint_temp_id" => "getViewpointTempId",
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
        $this->setIfExists("guid", $data ?? [], null);
        $this->setIfExists("date", $data ?? [], null);
        $this->setIfExists("author", $data ?? [], null);
        $this->setIfExists("comment", $data ?? [], null);
        $this->setIfExists("viewpoint_guid", $data ?? [], null);
        $this->setIfExists("reply_to_comment_guid", $data ?? [], null);
        $this->setIfExists("modified_author", $data ?? [], null);
        $this->setIfExists("viewpoint_temp_id", $data ?? [], null);
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
            !is_null($this->container["author"]) &&
            mb_strlen($this->container["author"]) > 254
        ) {
            $invalidProperties[] =
                "invalid value for 'author', the character length must be smaller than or equal to 254.";
        }

        if (
            !is_null($this->container["modified_author"]) &&
            mb_strlen($this->container["modified_author"]) > 254
        ) {
            $invalidProperties[] =
                "invalid value for 'modified_author', the character length must be smaller than or equal to 254.";
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
     * Gets guid
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->container["guid"];
    }

    /**
     * Sets guid
     *
     * @param string|null $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        if (is_null($guid)) {
            throw new \InvalidArgumentException(
                "non-nullable guid cannot be null"
            );
        }

        $this->container["guid"] = $guid;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container["date"];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException(
                "non-nullable date cannot be null"
            );
        }

        $this->container["date"] = $date;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container["author"];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (!is_null($author) && mb_strlen($author) > 254) {
            throw new \InvalidArgumentException(
                'invalid length for $author when calling PatchedCommentRequest., must be smaller than or equal to 254.'
            );
        }

        if (is_null($author)) {
            array_push($this->openAPINullablesSetToNull, "author");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("author", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["author"] = $author;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container["comment"];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException(
                "non-nullable comment cannot be null"
            );
        }

        $this->container["comment"] = $comment;

        return $this;
    }

    /**
     * Gets viewpoint_guid
     *
     * @return string|null
     */
    public function getViewpointGuid()
    {
        return $this->container["viewpoint_guid"];
    }

    /**
     * Sets viewpoint_guid
     *
     * @param string|null $viewpoint_guid viewpoint_guid
     *
     * @return self
     */
    public function setViewpointGuid($viewpoint_guid)
    {
        if (is_null($viewpoint_guid)) {
            array_push($this->openAPINullablesSetToNull, "viewpoint_guid");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("viewpoint_guid", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["viewpoint_guid"] = $viewpoint_guid;

        return $this;
    }

    /**
     * Gets reply_to_comment_guid
     *
     * @return string|null
     */
    public function getReplyToCommentGuid()
    {
        return $this->container["reply_to_comment_guid"];
    }

    /**
     * Sets reply_to_comment_guid
     *
     * @param string|null $reply_to_comment_guid reply_to_comment_guid
     *
     * @return self
     */
    public function setReplyToCommentGuid($reply_to_comment_guid)
    {
        if (is_null($reply_to_comment_guid)) {
            array_push(
                $this->openAPINullablesSetToNull,
                "reply_to_comment_guid"
            );
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("reply_to_comment_guid", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["reply_to_comment_guid"] = $reply_to_comment_guid;

        return $this;
    }

    /**
     * Gets modified_author
     *
     * @return string|null
     */
    public function getModifiedAuthor()
    {
        return $this->container["modified_author"];
    }

    /**
     * Sets modified_author
     *
     * @param string|null $modified_author modified_author
     *
     * @return self
     */
    public function setModifiedAuthor($modified_author)
    {
        if (!is_null($modified_author) && mb_strlen($modified_author) > 254) {
            throw new \InvalidArgumentException(
                'invalid length for $modified_author when calling PatchedCommentRequest., must be smaller than or equal to 254.'
            );
        }

        if (is_null($modified_author)) {
            array_push($this->openAPINullablesSetToNull, "modified_author");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("modified_author", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["modified_author"] = $modified_author;

        return $this;
    }

    /**
     * Gets viewpoint_temp_id
     *
     * @return int|null
     */
    public function getViewpointTempId()
    {
        return $this->container["viewpoint_temp_id"];
    }

    /**
     * Sets viewpoint_temp_id
     *
     * @param int|null $viewpoint_temp_id Only used when using POST on the full-topic route to bind viewpoint with comment
     *
     * @return self
     */
    public function setViewpointTempId($viewpoint_temp_id)
    {
        if (is_null($viewpoint_temp_id)) {
            throw new \InvalidArgumentException(
                "non-nullable viewpoint_temp_id cannot be null"
            );
        }

        $this->container["viewpoint_temp_id"] = $viewpoint_temp_id;

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
