<?php
/**
 * RawElementsRequest
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
 * RawElementsRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RawElementsRequest implements
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
    protected static $openAPIModelName = "RawElementsRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        "units" => "\OpenAPI\Client\Model\RawUnitRequest[]",
        "definitions" => "\OpenAPI\Client\Model\RawDefinitionRequest[]",
        "property_sets" => "\OpenAPI\Client\Model\RawPropertySetRequest[]",
        "classifications" => "\OpenAPI\Client\Model\RawClassificationRequest[]",
        "layers" => "\OpenAPI\Client\Model\RawLayerRequest[]",
        "systems" => "\OpenAPI\Client\Model\RawSystemRequest[]",
        "materials" => "\OpenAPI\Client\Model\RawElementsRequestMaterials",
        "elements" => "\OpenAPI\Client\Model\RawElementRequest[]",
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        "units" => null,
        "definitions" => null,
        "property_sets" => null,
        "classifications" => null,
        "layers" => null,
        "systems" => null,
        "materials" => null,
        "elements" => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        "units" => true,
        "definitions" => true,
        "property_sets" => true,
        "classifications" => true,
        "layers" => true,
        "systems" => true,
        "materials" => true,
        "elements" => false,
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
        "units" => "units",
        "definitions" => "definitions",
        "property_sets" => "property_sets",
        "classifications" => "classifications",
        "layers" => "layers",
        "systems" => "systems",
        "materials" => "materials",
        "elements" => "elements",
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        "units" => "setUnits",
        "definitions" => "setDefinitions",
        "property_sets" => "setPropertySets",
        "classifications" => "setClassifications",
        "layers" => "setLayers",
        "systems" => "setSystems",
        "materials" => "setMaterials",
        "elements" => "setElements",
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        "units" => "getUnits",
        "definitions" => "getDefinitions",
        "property_sets" => "getPropertySets",
        "classifications" => "getClassifications",
        "layers" => "getLayers",
        "systems" => "getSystems",
        "materials" => "getMaterials",
        "elements" => "getElements",
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
        $this->setIfExists("units", $data ?? [], null);
        $this->setIfExists("definitions", $data ?? [], null);
        $this->setIfExists("property_sets", $data ?? [], null);
        $this->setIfExists("classifications", $data ?? [], null);
        $this->setIfExists("layers", $data ?? [], null);
        $this->setIfExists("systems", $data ?? [], null);
        $this->setIfExists("materials", $data ?? [], null);
        $this->setIfExists("elements", $data ?? [], null);
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

        if ($this->container["elements"] === null) {
            $invalidProperties[] = "'elements' can't be null";
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
     * Gets units
     *
     * @return \OpenAPI\Client\Model\RawUnitRequest[]|null
     */
    public function getUnits()
    {
        return $this->container["units"];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\RawUnitRequest[]|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            array_push($this->openAPINullablesSetToNull, "units");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("units", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["units"] = $units;

        return $this;
    }

    /**
     * Gets definitions
     *
     * @return \OpenAPI\Client\Model\RawDefinitionRequest[]|null
     */
    public function getDefinitions()
    {
        return $this->container["definitions"];
    }

    /**
     * Sets definitions
     *
     * @param \OpenAPI\Client\Model\RawDefinitionRequest[]|null $definitions definitions
     *
     * @return self
     */
    public function setDefinitions($definitions)
    {
        if (is_null($definitions)) {
            array_push($this->openAPINullablesSetToNull, "definitions");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("definitions", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["definitions"] = $definitions;

        return $this;
    }

    /**
     * Gets property_sets
     *
     * @return \OpenAPI\Client\Model\RawPropertySetRequest[]|null
     */
    public function getPropertySets()
    {
        return $this->container["property_sets"];
    }

    /**
     * Sets property_sets
     *
     * @param \OpenAPI\Client\Model\RawPropertySetRequest[]|null $property_sets property_sets
     *
     * @return self
     */
    public function setPropertySets($property_sets)
    {
        if (is_null($property_sets)) {
            array_push($this->openAPINullablesSetToNull, "property_sets");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("property_sets", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["property_sets"] = $property_sets;

        return $this;
    }

    /**
     * Gets classifications
     *
     * @return \OpenAPI\Client\Model\RawClassificationRequest[]|null
     */
    public function getClassifications()
    {
        return $this->container["classifications"];
    }

    /**
     * Sets classifications
     *
     * @param \OpenAPI\Client\Model\RawClassificationRequest[]|null $classifications classifications
     *
     * @return self
     */
    public function setClassifications($classifications)
    {
        if (is_null($classifications)) {
            array_push($this->openAPINullablesSetToNull, "classifications");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("classifications", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["classifications"] = $classifications;

        return $this;
    }

    /**
     * Gets layers
     *
     * @return \OpenAPI\Client\Model\RawLayerRequest[]|null
     */
    public function getLayers()
    {
        return $this->container["layers"];
    }

    /**
     * Sets layers
     *
     * @param \OpenAPI\Client\Model\RawLayerRequest[]|null $layers layers
     *
     * @return self
     */
    public function setLayers($layers)
    {
        if (is_null($layers)) {
            array_push($this->openAPINullablesSetToNull, "layers");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("layers", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["layers"] = $layers;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return \OpenAPI\Client\Model\RawSystemRequest[]|null
     */
    public function getSystems()
    {
        return $this->container["systems"];
    }

    /**
     * Sets systems
     *
     * @param \OpenAPI\Client\Model\RawSystemRequest[]|null $systems systems
     *
     * @return self
     */
    public function setSystems($systems)
    {
        if (is_null($systems)) {
            array_push($this->openAPINullablesSetToNull, "systems");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("systems", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["systems"] = $systems;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \OpenAPI\Client\Model\RawElementsRequestMaterials|null
     */
    public function getMaterials()
    {
        return $this->container["materials"];
    }

    /**
     * Sets materials
     *
     * @param \OpenAPI\Client\Model\RawElementsRequestMaterials|null $materials materials
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            array_push($this->openAPINullablesSetToNull, "materials");
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search("materials", $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container["materials"] = $materials;

        return $this;
    }

    /**
     * Gets elements
     *
     * @return \OpenAPI\Client\Model\RawElementRequest[]
     */
    public function getElements()
    {
        return $this->container["elements"];
    }

    /**
     * Sets elements
     *
     * @param \OpenAPI\Client\Model\RawElementRequest[] $elements elements
     *
     * @return self
     */
    public function setElements($elements)
    {
        if (is_null($elements)) {
            throw new \InvalidArgumentException(
                "non-nullable elements cannot be null"
            );
        }

        $this->container["elements"] = $elements;

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
