<?php
/**
 * LiveRateCreateRequestParcel
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shippo external API.
 *
 * Use this API to integrate with the Shippo service
 *
 * The version of the OpenAPI document: 2018-02-08
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * LiveRateCreateRequestParcel Class Doc Comment
 *
 * @category Class
 * @description Object ID for an existing User Parcel Template OR a fully formed Parcel object.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LiveRateCreateRequestParcel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LiveRateCreateRequest_parcel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extra' => '\OpenAPI\Client\Model\ParcelExtra',
        'metadata' => 'string',
        'mass_unit' => '\OpenAPI\Client\Model\WeightUnitEnum',
        'weight' => 'string',
        'distance_unit' => '\OpenAPI\Client\Model\DistanceUnitEnum',
        'height' => 'string',
        'length' => 'string',
        'width' => 'string',
        'object_created' => '\DateTime',
        'object_id' => 'string',
        'object_owner' => 'string',
        'object_state' => 'string',
        'object_updated' => '\DateTime',
        'template' => '\OpenAPI\Client\Model\ParcelTemplateEnumSet',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extra' => null,
        'metadata' => null,
        'mass_unit' => null,
        'weight' => null,
        'distance_unit' => null,
        'height' => null,
        'length' => null,
        'width' => null,
        'object_created' => 'date-time',
        'object_id' => null,
        'object_owner' => null,
        'object_state' => null,
        'object_updated' => 'date-time',
        'template' => null,
        'test' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'extra' => false,
        'metadata' => false,
        'mass_unit' => false,
        'weight' => false,
        'distance_unit' => false,
        'height' => false,
        'length' => false,
        'width' => false,
        'object_created' => false,
        'object_id' => false,
        'object_owner' => false,
        'object_state' => false,
        'object_updated' => false,
        'template' => false,
        'test' => false
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
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
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
        'extra' => 'extra',
        'metadata' => 'metadata',
        'mass_unit' => 'mass_unit',
        'weight' => 'weight',
        'distance_unit' => 'distance_unit',
        'height' => 'height',
        'length' => 'length',
        'width' => 'width',
        'object_created' => 'object_created',
        'object_id' => 'object_id',
        'object_owner' => 'object_owner',
        'object_state' => 'object_state',
        'object_updated' => 'object_updated',
        'template' => 'template',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extra' => 'setExtra',
        'metadata' => 'setMetadata',
        'mass_unit' => 'setMassUnit',
        'weight' => 'setWeight',
        'distance_unit' => 'setDistanceUnit',
        'height' => 'setHeight',
        'length' => 'setLength',
        'width' => 'setWidth',
        'object_created' => 'setObjectCreated',
        'object_id' => 'setObjectId',
        'object_owner' => 'setObjectOwner',
        'object_state' => 'setObjectState',
        'object_updated' => 'setObjectUpdated',
        'template' => 'setTemplate',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extra' => 'getExtra',
        'metadata' => 'getMetadata',
        'mass_unit' => 'getMassUnit',
        'weight' => 'getWeight',
        'distance_unit' => 'getDistanceUnit',
        'height' => 'getHeight',
        'length' => 'getLength',
        'width' => 'getWidth',
        'object_created' => 'getObjectCreated',
        'object_id' => 'getObjectId',
        'object_owner' => 'getObjectOwner',
        'object_state' => 'getObjectState',
        'object_updated' => 'getObjectUpdated',
        'template' => 'getTemplate',
        'test' => 'getTest'
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

    public const OBJECT_STATE_VALID = 'VALID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectStateAllowableValues()
    {
        return [
            self::OBJECT_STATE_VALID,
        ];
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('extra', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('mass_unit', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('distance_unit', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('object_created', $data ?? [], null);
        $this->setIfExists('object_id', $data ?? [], null);
        $this->setIfExists('object_owner', $data ?? [], null);
        $this->setIfExists('object_state', $data ?? [], null);
        $this->setIfExists('object_updated', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mass_unit'] === null) {
            $invalidProperties[] = "'mass_unit' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['distance_unit'] === null) {
            $invalidProperties[] = "'distance_unit' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        $allowedValues = $this->getObjectStateAllowableValues();
        if (!is_null($this->container['object_state']) && !in_array($this->container['object_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object_state', must be one of '%s'",
                $this->container['object_state'],
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
     * Gets extra
     *
     * @return \OpenAPI\Client\Model\ParcelExtra|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param \OpenAPI\Client\Model\ParcelExtra|null $extra extra
     *
     * @return self
     */
    public function setExtra($extra)
    {
        if (is_null($extra)) {
            throw new \InvalidArgumentException('non-nullable extra cannot be null');
        }
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets mass_unit
     *
     * @return \OpenAPI\Client\Model\WeightUnitEnum
     */
    public function getMassUnit()
    {
        return $this->container['mass_unit'];
    }

    /**
     * Sets mass_unit
     *
     * @param \OpenAPI\Client\Model\WeightUnitEnum $mass_unit mass_unit
     *
     * @return self
     */
    public function setMassUnit($mass_unit)
    {
        if (is_null($mass_unit)) {
            throw new \InvalidArgumentException('non-nullable mass_unit cannot be null');
        }
        $this->container['mass_unit'] = $mass_unit;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight Weight of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets distance_unit
     *
     * @return \OpenAPI\Client\Model\DistanceUnitEnum
     */
    public function getDistanceUnit()
    {
        return $this->container['distance_unit'];
    }

    /**
     * Sets distance_unit
     *
     * @param \OpenAPI\Client\Model\DistanceUnitEnum $distance_unit The measure unit used for length, width and height.
     *
     * @return self
     */
    public function setDistanceUnit($distance_unit)
    {
        if (is_null($distance_unit)) {
            throw new \InvalidArgumentException('non-nullable distance_unit cannot be null');
        }
        $this->container['distance_unit'] = $distance_unit;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string $height Height of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param string $length Length of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width Width of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets object_created
     *
     * @return \DateTime|null
     */
    public function getObjectCreated()
    {
        return $this->container['object_created'];
    }

    /**
     * Sets object_created
     *
     * @param \DateTime|null $object_created Date and time of Parcel creation.
     *
     * @return self
     */
    public function setObjectCreated($object_created)
    {
        if (is_null($object_created)) {
            throw new \InvalidArgumentException('non-nullable object_created cannot be null');
        }
        $this->container['object_created'] = $object_created;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string|null $object_id Unique identifier of the given Parcel object. This ID is required to create a Shipment object.
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        if (is_null($object_id)) {
            throw new \InvalidArgumentException('non-nullable object_id cannot be null');
        }
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_owner
     *
     * @return string|null
     */
    public function getObjectOwner()
    {
        return $this->container['object_owner'];
    }

    /**
     * Sets object_owner
     *
     * @param string|null $object_owner Username of the user who created the Parcel object.
     *
     * @return self
     */
    public function setObjectOwner($object_owner)
    {
        if (is_null($object_owner)) {
            throw new \InvalidArgumentException('non-nullable object_owner cannot be null');
        }
        $this->container['object_owner'] = $object_owner;

        return $this;
    }

    /**
     * Gets object_state
     *
     * @return string|null
     */
    public function getObjectState()
    {
        return $this->container['object_state'];
    }

    /**
     * Sets object_state
     *
     * @param string|null $object_state A Parcel will only be valid when all required values have been sent and validated successfully.
     *
     * @return self
     */
    public function setObjectState($object_state)
    {
        if (is_null($object_state)) {
            throw new \InvalidArgumentException('non-nullable object_state cannot be null');
        }
        $allowedValues = $this->getObjectStateAllowableValues();
        if (!in_array($object_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object_state', must be one of '%s'",
                    $object_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object_state'] = $object_state;

        return $this;
    }

    /**
     * Gets object_updated
     *
     * @return \DateTime|null
     */
    public function getObjectUpdated()
    {
        return $this->container['object_updated'];
    }

    /**
     * Sets object_updated
     *
     * @param \DateTime|null $object_updated Date and time of last Parcel update. Since you cannot update Parcels after they were created, this time stamp reflects the time when the Parcel was changed by Shippo's systems for the last time, e.g., during sorting the dimensions given.
     *
     * @return self
     */
    public function setObjectUpdated($object_updated)
    {
        if (is_null($object_updated)) {
            throw new \InvalidArgumentException('non-nullable object_updated cannot be null');
        }
        $this->container['object_updated'] = $object_updated;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \OpenAPI\Client\Model\ParcelTemplateEnumSet|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \OpenAPI\Client\Model\ParcelTemplateEnumSet|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test Indicates whether the object has been created in test mode.
     *
     * @return self
     */
    public function setTest($test)
    {
        if (is_null($test)) {
            throw new \InvalidArgumentException('non-nullable test cannot be null');
        }
        $this->container['test'] = $test;

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


