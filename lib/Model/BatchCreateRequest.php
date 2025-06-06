<?php
/**
 * BatchCreateRequest
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
 * BatchCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BatchCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_carrier_account' => 'string',
        'default_servicelevel_token' => 'string',
        'label_filetype' => '\OpenAPI\Client\Model\LabelFileTypeEnum',
        'metadata' => 'string',
        'batch_shipments' => '\OpenAPI\Client\Model\BatchShipmentCreateRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_carrier_account' => null,
        'default_servicelevel_token' => null,
        'label_filetype' => null,
        'metadata' => null,
        'batch_shipments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_carrier_account' => false,
        'default_servicelevel_token' => false,
        'label_filetype' => false,
        'metadata' => false,
        'batch_shipments' => false
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
        'default_carrier_account' => 'default_carrier_account',
        'default_servicelevel_token' => 'default_servicelevel_token',
        'label_filetype' => 'label_filetype',
        'metadata' => 'metadata',
        'batch_shipments' => 'batch_shipments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_carrier_account' => 'setDefaultCarrierAccount',
        'default_servicelevel_token' => 'setDefaultServicelevelToken',
        'label_filetype' => 'setLabelFiletype',
        'metadata' => 'setMetadata',
        'batch_shipments' => 'setBatchShipments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_carrier_account' => 'getDefaultCarrierAccount',
        'default_servicelevel_token' => 'getDefaultServicelevelToken',
        'label_filetype' => 'getLabelFiletype',
        'metadata' => 'getMetadata',
        'batch_shipments' => 'getBatchShipments'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('default_carrier_account', $data ?? [], null);
        $this->setIfExists('default_servicelevel_token', $data ?? [], null);
        $this->setIfExists('label_filetype', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('batch_shipments', $data ?? [], null);
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

        if ($this->container['default_carrier_account'] === null) {
            $invalidProperties[] = "'default_carrier_account' can't be null";
        }
        if ($this->container['default_servicelevel_token'] === null) {
            $invalidProperties[] = "'default_servicelevel_token' can't be null";
        }
        if (!is_null($this->container['metadata']) && (mb_strlen($this->container['metadata']) > 100)) {
            $invalidProperties[] = "invalid value for 'metadata', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['batch_shipments'] === null) {
            $invalidProperties[] = "'batch_shipments' can't be null";
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
     * Gets default_carrier_account
     *
     * @return string
     */
    public function getDefaultCarrierAccount()
    {
        return $this->container['default_carrier_account'];
    }

    /**
     * Sets default_carrier_account
     *
     * @param string $default_carrier_account ID of the Carrier Account object to use as the default for all shipments in this Batch.  The carrier account can be changed on a per-shipment basis by changing the carrier_account in the  corresponding BatchShipment object.
     *
     * @return self
     */
    public function setDefaultCarrierAccount($default_carrier_account)
    {
        if (is_null($default_carrier_account)) {
            throw new \InvalidArgumentException('non-nullable default_carrier_account cannot be null');
        }
        $this->container['default_carrier_account'] = $default_carrier_account;

        return $this;
    }

    /**
     * Gets default_servicelevel_token
     *
     * @return string
     */
    public function getDefaultServicelevelToken()
    {
        return $this->container['default_servicelevel_token'];
    }

    /**
     * Sets default_servicelevel_token
     *
     * @param string $default_servicelevel_token Token of the service level to use as the default for all shipments in this Batch.  The servicelevel can be changed on a per-shipment basis by changing the servicelevel_token in the  corresponding BatchShipment object. <a href=\"#tag/Service-Levels\">Servicelevel tokens can be found here.</a>
     *
     * @return self
     */
    public function setDefaultServicelevelToken($default_servicelevel_token)
    {
        if (is_null($default_servicelevel_token)) {
            throw new \InvalidArgumentException('non-nullable default_servicelevel_token cannot be null');
        }
        $this->container['default_servicelevel_token'] = $default_servicelevel_token;

        return $this;
    }

    /**
     * Gets label_filetype
     *
     * @return \OpenAPI\Client\Model\LabelFileTypeEnum|null
     */
    public function getLabelFiletype()
    {
        return $this->container['label_filetype'];
    }

    /**
     * Sets label_filetype
     *
     * @param \OpenAPI\Client\Model\LabelFileTypeEnum|null $label_filetype label_filetype
     *
     * @return self
     */
    public function setLabelFiletype($label_filetype)
    {
        if (is_null($label_filetype)) {
            throw new \InvalidArgumentException('non-nullable label_filetype cannot be null');
        }
        $this->container['label_filetype'] = $label_filetype;

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
     * @param string|null $metadata A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        if ((mb_strlen($metadata) > 100)) {
            throw new \InvalidArgumentException('invalid length for $metadata when calling BatchCreateRequest., must be smaller than or equal to 100.');
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets batch_shipments
     *
     * @return \OpenAPI\Client\Model\BatchShipmentCreateRequest[]
     */
    public function getBatchShipments()
    {
        return $this->container['batch_shipments'];
    }

    /**
     * Sets batch_shipments
     *
     * @param \OpenAPI\Client\Model\BatchShipmentCreateRequest[] $batch_shipments Array of BatchShipment objects. The response keeps the same order as in the request array.
     *
     * @return self
     */
    public function setBatchShipments($batch_shipments)
    {
        if (is_null($batch_shipments)) {
            throw new \InvalidArgumentException('non-nullable batch_shipments cannot be null');
        }
        $this->container['batch_shipments'] = $batch_shipments;

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


