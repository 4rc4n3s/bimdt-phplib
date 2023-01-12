<?php
/**
 * PatchedTopicRequest
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
 * PatchedTopicRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedTopicRequest implements
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
    protected static $openAPIModelName = "PatchedTopicRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "guid" => "string",
        "topic_type" => "string",
        "topic_status" => "string",
        "title" => "string",
        "priority" => "string",
        "labels" => "string[]",
        "creation_date" => "\DateTime",
        "creation_author" => "string",
        "modified_author" => "string",
        "assigned_to" => "string",
        "reference_links" => "string[]",
        "stage" => "string",
        "description" => "string",
        "due_date" => "\DateTime",
        "ifcs" => "int[]",
        "models" => "int[]",
        "format" => "string",
        "index" => "int",
        "project" => "int",
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
        "topic_type" => null,
        "topic_status" => null,
        "title" => null,
        "priority" => null,
        "labels" => null,
        "creation_date" => "date-time",
        "creation_author" => null,
        "modified_author" => null,
        "assigned_to" => null,
        "reference_links" => null,
        "stage" => null,
        "description" => null,
        "due_date" => "date-time",
        "ifcs" => null,
        "models" => null,
        "format" => null,
        "index" => null,
        "project" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "guid" => false,
        "topic_type" => true,
        "topic_status" => true,
        "title" => false,
        "priority" => true,
        "labels" => false,
        "creation_date" => false,
        "creation_author" => true,
        "modified_author" => true,
        "assigned_to" => true,
        "reference_links" => true,
        "stage" => true,
        "description" => true,
        "due_date" => true,
        "ifcs" => false,
        "models" => false,
        "format" => false,
        "index" => true,
        "project" => false,
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
        "topic_type" => "topic_type",
        "topic_status" => "topic_status",
        "title" => "title",
        "priority" => "priority",
        "labels" => "labels",
        "creation_date" => "creation_date",
        "creation_author" => "creation_author",
        "modified_author" => "modified_author",
        "assigned_to" => "assigned_to",
        "reference_links" => "reference_links",
        "stage" => "stage",
        "description" => "description",
        "due_date" => "due_date",
        "ifcs" => "ifcs",
        "models" => "models",
        "format" => "format",
        "index" => "index",
        "project" => "project",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "guid" => "setGuid",
        "topic_type" => "setTopicType",
        "topic_status" => "setTopicStatus",
        "title" => "setTitle",
        "priority" => "setPriority",
        "labels" => "setLabels",
        "creation_date" => "setCreationDate",
        "creation_author" => "setCreationAuthor",
        "modified_author" => "setModifiedAuthor",
        "assigned_to" => "setAssignedTo",
        "reference_links" => "setReferenceLinks",
        "stage" => "setStage",
        "description" => "setDescription",
        "due_date" => "setDueDate",
        "ifcs" => "setIfcs",
        "models" => "setModels",
        "format" => "setFormat",
        "index" => "setIndex",
        "project" => "setProject",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "guid" => "getGuid",
        "topic_type" => "getTopicType",
        "topic_status" => "getTopicStatus",
        "title" => "getTitle",
        "priority" => "getPriority",
        "labels" => "getLabels",
        "creation_date" => "getCreationDate",
        "creation_author" => "getCreationAuthor",
        "modified_author" => "getModifiedAuthor",
        "assigned_to" => "getAssignedTo",
        "reference_links" => "getReferenceLinks",
        "stage" => "getStage",
        "description" => "getDescription",
        "due_date" => "getDueDate",
        "ifcs" => "getIfcs",
        "models" => "getModels",
        "format" => "getFormat",
        "index" => "getIndex",
        "project" => "getProject",
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
        $this->setIfExists("topic_type", $data ?? [], null);
        $this->setIfExists("topic_status", $data ?? [], null);
        $this->setIfExists("title", $data ?? [], null);
        $this->setIfExists("priority", $data ?? [], null);
        $this->setIfExists("labels", $data ?? [], null);
        $this->setIfExists("creation_date", $data ?? [], null);
        $this->setIfExists("creation_author", $data ?? [], null);
        $this->setIfExists("modified_author", $data ?? [], null);
        $this->setIfExists("assigned_to", $data ?? [], null);
        $this->setIfExists("reference_links", $data ?? [], null);
        $this->setIfExists("stage", $data ?? [], null);
        $this->setIfExists("description", $data ?? [], null);
        $this->setIfExists("due_date", $data ?? [], null);
        $this->setIfExists("ifcs", $data ?? [], null);
        $this->setIfExists("models", $data ?? [], null);
        $this->setIfExists("format", $data ?? [], null);
        $this->setIfExists("index", $data ?? [], null);
        $this->setIfExists("project", $data ?? [], null);
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
            !is_null($this->container["topic_type"]) &&
            mb_strlen($this->container["topic_type"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'topic_type', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["topic_status"]) &&
            mb_strlen($this->container["topic_status"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'topic_status', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["title"]) &&
            mb_strlen($this->container["title"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["priority"]) &&
            mb_strlen($this->container["priority"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'priority', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["creation_author"]) &&
            mb_strlen($this->container["creation_author"]) > 254
        ) {
            $invalidProperties[] =
                "invalid value for 'creation_author', the character length must be smaller than or equal to 254.";
        }

        if (
            !is_null($this->container["modified_author"]) &&
            mb_strlen($this->container["modified_author"]) > 254
        ) {
            $invalidProperties[] =
                "invalid value for 'modified_author', the character length must be smaller than or equal to 254.";
        }

        if (
            !is_null($this->container["assigned_to"]) &&
            mb_strlen($this->container["assigned_to"]) > 254
        ) {
            $invalidProperties[] =
                "invalid value for 'assigned_to', the character length must be smaller than or equal to 254.";
        }

        if (
            !is_null($this->container["stage"]) &&
            mb_strlen($this->container["stage"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'stage', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["format"]) &&
            mb_strlen($this->container["format"]) > 64
        ) {
            $invalidProperties[] =
                "invalid value for 'format', the character length must be smaller than or equal to 64.";
        }

        if (
            !is_null($this->container["format"]) &&
            mb_strlen($this->container["format"]) < 1
        ) {
            $invalidProperties[] =
                "invalid value for 'format', the character length must be bigger than or equal to 1.";
        }

        if (
            !is_null($this->container["index"]) &&
            $this->container["index"] > 2147483647
        ) {
            $invalidProperties[] =
                "invalid value for 'index', must be smaller than or equal to 2147483647.";
        }

        if (
            !is_null($this->container["index"]) &&
            $this->container["index"] < 0
        ) {
            $invalidProperties[] =
                "invalid value for 'index', must be bigger than or equal to 0.";
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
     * Gets topic_type
     *
     * @return string|null
     */
    public function getTopicType()
    {
        return $this->container["topic_type"];
    }

    /**
     * Sets topic_type
     *
     * @param string|null $topic_type topic_type
     *
     * @return self
     */
    public function setTopicType($topic_type)
    {
        if (!is_null($topic_type) && mb_strlen($topic_type) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $topic_type when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($topic_type)) {
            array_push($this->openAPINullablesSetToNull, "topic_type");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("topic_type", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["topic_type"] = $topic_type;

        return $this;
    }

    /**
     * Gets topic_status
     *
     * @return string|null
     */
    public function getTopicStatus()
    {
        return $this->container["topic_status"];
    }

    /**
     * Sets topic_status
     *
     * @param string|null $topic_status topic_status
     *
     * @return self
     */
    public function setTopicStatus($topic_status)
    {
        if (!is_null($topic_status) && mb_strlen($topic_status) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $topic_status when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($topic_status)) {
            array_push($this->openAPINullablesSetToNull, "topic_status");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("topic_status", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["topic_status"] = $topic_status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container["title"];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (!is_null($title) && mb_strlen($title) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $title when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($title)) {
            throw new \InvalidArgumentException(
                "non-nullable title cannot be null"
            );
        }

        $this->container["title"] = $title;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container["priority"];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (!is_null($priority) && mb_strlen($priority) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $priority when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($priority)) {
            array_push($this->openAPINullablesSetToNull, "priority");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("priority", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["priority"] = $priority;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]|null
     */
    public function getLabels()
    {
        return $this->container["labels"];
    }

    /**
     * Sets labels
     *
     * @param string[]|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException(
                "non-nullable labels cannot be null"
            );
        }

        $this->container["labels"] = $labels;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container["creation_date"];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date creation_date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException(
                "non-nullable creation_date cannot be null"
            );
        }

        $this->container["creation_date"] = $creation_date;

        return $this;
    }

    /**
     * Gets creation_author
     *
     * @return string|null
     */
    public function getCreationAuthor()
    {
        return $this->container["creation_author"];
    }

    /**
     * Sets creation_author
     *
     * @param string|null $creation_author creation_author
     *
     * @return self
     */
    public function setCreationAuthor($creation_author)
    {
        if (!is_null($creation_author) && mb_strlen($creation_author) > 254) {
            throw new \InvalidArgumentException(
                'invalid length for $creation_author when calling PatchedTopicRequest., must be smaller than or equal to 254.'
            );
        }

        if (is_null($creation_author)) {
            array_push($this->openAPINullablesSetToNull, "creation_author");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("creation_author", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["creation_author"] = $creation_author;

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
                'invalid length for $modified_author when calling PatchedTopicRequest., must be smaller than or equal to 254.'
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
     * Gets assigned_to
     *
     * @return string|null
     */
    public function getAssignedTo()
    {
        return $this->container["assigned_to"];
    }

    /**
     * Sets assigned_to
     *
     * @param string|null $assigned_to assigned_to
     *
     * @return self
     */
    public function setAssignedTo($assigned_to)
    {
        if (!is_null($assigned_to) && mb_strlen($assigned_to) > 254) {
            throw new \InvalidArgumentException(
                'invalid length for $assigned_to when calling PatchedTopicRequest., must be smaller than or equal to 254.'
            );
        }

        if (is_null($assigned_to)) {
            array_push($this->openAPINullablesSetToNull, "assigned_to");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("assigned_to", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["assigned_to"] = $assigned_to;

        return $this;
    }

    /**
     * Gets reference_links
     *
     * @return string[]|null
     */
    public function getReferenceLinks()
    {
        return $this->container["reference_links"];
    }

    /**
     * Sets reference_links
     *
     * @param string[]|null $reference_links reference_links
     *
     * @return self
     */
    public function setReferenceLinks($reference_links)
    {
        if (is_null($reference_links)) {
            array_push($this->openAPINullablesSetToNull, "reference_links");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("reference_links", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["reference_links"] = $reference_links;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->container["stage"];
    }

    /**
     * Sets stage
     *
     * @param string|null $stage stage
     *
     * @return self
     */
    public function setStage($stage)
    {
        if (!is_null($stage) && mb_strlen($stage) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $stage when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($stage)) {
            array_push($this->openAPINullablesSetToNull, "stage");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("stage", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["stage"] = $stage;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container["description"];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, "description");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("description", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["description"] = $description;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container["due_date"];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            array_push($this->openAPINullablesSetToNull, "due_date");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("due_date", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["due_date"] = $due_date;

        return $this;
    }

    /**
     * Gets ifcs
     *
     * @return int[]|null
     */
    public function getIfcs()
    {
        return $this->container["ifcs"];
    }

    /**
     * Sets ifcs
     *
     * @param int[]|null $ifcs DEPRECATED: Use 'models' instead
     *
     * @return self
     */
    public function setIfcs($ifcs)
    {
        if (is_null($ifcs)) {
            throw new \InvalidArgumentException(
                "non-nullable ifcs cannot be null"
            );
        }

        $this->container["ifcs"] = $ifcs;

        return $this;
    }

    /**
     * Gets models
     *
     * @return int[]|null
     */
    public function getModels()
    {
        return $this->container["models"];
    }

    /**
     * Sets models
     *
     * @param int[]|null $models models
     *
     * @return self
     */
    public function setModels($models)
    {
        if (is_null($models)) {
            throw new \InvalidArgumentException(
                "non-nullable models cannot be null"
            );
        }

        $this->container["models"] = $models;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container["format"];
    }

    /**
     * Sets format
     *
     * @param string|null $format The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \"standard\".         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \"standard\" format.
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (!is_null($format) && mb_strlen($format) > 64) {
            throw new \InvalidArgumentException(
                'invalid length for $format when calling PatchedTopicRequest., must be smaller than or equal to 64.'
            );
        }
        if (!is_null($format) && mb_strlen($format) < 1) {
            throw new \InvalidArgumentException(
                'invalid length for $format when calling PatchedTopicRequest., must be bigger than or equal to 1.'
            );
        }

        if (is_null($format)) {
            throw new \InvalidArgumentException(
                "non-nullable format cannot be null"
            );
        }

        $this->container["format"] = $format;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container["index"];
    }

    /**
     * Sets index
     *
     * @param int|null $index index
     *
     * @return self
     */
    public function setIndex($index)
    {
        if (!is_null($index) && $index > 2147483647) {
            throw new \InvalidArgumentException(
                'invalid value for $index when calling PatchedTopicRequest., must be smaller than or equal to 2147483647.'
            );
        }
        if (!is_null($index) && $index < 0) {
            throw new \InvalidArgumentException(
                'invalid value for $index when calling PatchedTopicRequest., must be bigger than or equal to 0.'
            );
        }

        if (is_null($index)) {
            array_push($this->openAPINullablesSetToNull, "index");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("index", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["index"] = $index;

        return $this;
    }

    /**
     * Gets project
     *
     * @return int|null
     */
    public function getProject()
    {
        return $this->container["project"];
    }

    /**
     * Sets project
     *
     * @param int|null $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        if (is_null($project)) {
            throw new \InvalidArgumentException(
                "non-nullable project cannot be null"
            );
        }

        $this->container["project"] = $project;

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
