<?php
/**
 * ManifestErrors
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
 * ManifestErrors Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManifestErrors implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManifestErrors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'generic_carrier_error' => 'string',
        'carrier_account_invalid_credentials' => 'string',
        'carrier_account_access_denied' => 'string',
        'manifest_invalid_transactions' => 'string',
        'manifest_no_transactions' => 'string',
        'address_from_missing_zip' => 'string',
        'address_from_invalid_zip1' => 'string',
        'address_from_invalid_zip2' => 'string',
        'address_from_missing_city' => 'string',
        'address_from_invalid_city' => 'string',
        'address_from_missing_state' => 'string',
        'address_from_invalid_state' => 'string',
        'address_from_missing_name' => 'string',
        'shipment_date_missing' => 'string',
        'shipment_date_invalid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'generic_carrier_error' => null,
        'carrier_account_invalid_credentials' => null,
        'carrier_account_access_denied' => null,
        'manifest_invalid_transactions' => null,
        'manifest_no_transactions' => null,
        'address_from_missing_zip' => null,
        'address_from_invalid_zip1' => null,
        'address_from_invalid_zip2' => null,
        'address_from_missing_city' => null,
        'address_from_invalid_city' => null,
        'address_from_missing_state' => null,
        'address_from_invalid_state' => null,
        'address_from_missing_name' => null,
        'shipment_date_missing' => null,
        'shipment_date_invalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'generic_carrier_error' => false,
        'carrier_account_invalid_credentials' => false,
        'carrier_account_access_denied' => false,
        'manifest_invalid_transactions' => false,
        'manifest_no_transactions' => false,
        'address_from_missing_zip' => false,
        'address_from_invalid_zip1' => false,
        'address_from_invalid_zip2' => false,
        'address_from_missing_city' => false,
        'address_from_invalid_city' => false,
        'address_from_missing_state' => false,
        'address_from_invalid_state' => false,
        'address_from_missing_name' => false,
        'shipment_date_missing' => false,
        'shipment_date_invalid' => false
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
        'generic_carrier_error' => 'generic_carrier_error',
        'carrier_account_invalid_credentials' => 'carrier_account_invalid_credentials',
        'carrier_account_access_denied' => 'carrier_account_access_denied',
        'manifest_invalid_transactions' => 'manifest_invalid_transactions',
        'manifest_no_transactions' => 'manifest_no_transactions',
        'address_from_missing_zip' => 'address_from_missing_zip',
        'address_from_invalid_zip1' => 'address_from_invalid_zip1',
        'address_from_invalid_zip2' => 'address_from_invalid_zip2',
        'address_from_missing_city' => 'address_from_missing_city',
        'address_from_invalid_city' => 'address_from_invalid_city',
        'address_from_missing_state' => 'address_from_missing_state',
        'address_from_invalid_state' => 'address_from_invalid_state',
        'address_from_missing_name' => 'address_from_missing_name',
        'shipment_date_missing' => 'shipment_date_missing',
        'shipment_date_invalid' => 'shipment_date_invalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generic_carrier_error' => 'setGenericCarrierError',
        'carrier_account_invalid_credentials' => 'setCarrierAccountInvalidCredentials',
        'carrier_account_access_denied' => 'setCarrierAccountAccessDenied',
        'manifest_invalid_transactions' => 'setManifestInvalidTransactions',
        'manifest_no_transactions' => 'setManifestNoTransactions',
        'address_from_missing_zip' => 'setAddressFromMissingZip',
        'address_from_invalid_zip1' => 'setAddressFromInvalidZip1',
        'address_from_invalid_zip2' => 'setAddressFromInvalidZip2',
        'address_from_missing_city' => 'setAddressFromMissingCity',
        'address_from_invalid_city' => 'setAddressFromInvalidCity',
        'address_from_missing_state' => 'setAddressFromMissingState',
        'address_from_invalid_state' => 'setAddressFromInvalidState',
        'address_from_missing_name' => 'setAddressFromMissingName',
        'shipment_date_missing' => 'setShipmentDateMissing',
        'shipment_date_invalid' => 'setShipmentDateInvalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generic_carrier_error' => 'getGenericCarrierError',
        'carrier_account_invalid_credentials' => 'getCarrierAccountInvalidCredentials',
        'carrier_account_access_denied' => 'getCarrierAccountAccessDenied',
        'manifest_invalid_transactions' => 'getManifestInvalidTransactions',
        'manifest_no_transactions' => 'getManifestNoTransactions',
        'address_from_missing_zip' => 'getAddressFromMissingZip',
        'address_from_invalid_zip1' => 'getAddressFromInvalidZip1',
        'address_from_invalid_zip2' => 'getAddressFromInvalidZip2',
        'address_from_missing_city' => 'getAddressFromMissingCity',
        'address_from_invalid_city' => 'getAddressFromInvalidCity',
        'address_from_missing_state' => 'getAddressFromMissingState',
        'address_from_invalid_state' => 'getAddressFromInvalidState',
        'address_from_missing_name' => 'getAddressFromMissingName',
        'shipment_date_missing' => 'getShipmentDateMissing',
        'shipment_date_invalid' => 'getShipmentDateInvalid'
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
        $this->setIfExists('generic_carrier_error', $data ?? [], null);
        $this->setIfExists('carrier_account_invalid_credentials', $data ?? [], null);
        $this->setIfExists('carrier_account_access_denied', $data ?? [], null);
        $this->setIfExists('manifest_invalid_transactions', $data ?? [], null);
        $this->setIfExists('manifest_no_transactions', $data ?? [], null);
        $this->setIfExists('address_from_missing_zip', $data ?? [], null);
        $this->setIfExists('address_from_invalid_zip1', $data ?? [], null);
        $this->setIfExists('address_from_invalid_zip2', $data ?? [], null);
        $this->setIfExists('address_from_missing_city', $data ?? [], null);
        $this->setIfExists('address_from_invalid_city', $data ?? [], null);
        $this->setIfExists('address_from_missing_state', $data ?? [], null);
        $this->setIfExists('address_from_invalid_state', $data ?? [], null);
        $this->setIfExists('address_from_missing_name', $data ?? [], null);
        $this->setIfExists('shipment_date_missing', $data ?? [], null);
        $this->setIfExists('shipment_date_invalid', $data ?? [], null);
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
     * Gets generic_carrier_error
     *
     * @return string|null
     */
    public function getGenericCarrierError()
    {
        return $this->container['generic_carrier_error'];
    }

    /**
     * Sets generic_carrier_error
     *
     * @param string|null $generic_carrier_error There is an error from the carrier that requires investigation. Please contact support with the object ID of this response.
     *
     * @return self
     */
    public function setGenericCarrierError($generic_carrier_error)
    {
        if (is_null($generic_carrier_error)) {
            throw new \InvalidArgumentException('non-nullable generic_carrier_error cannot be null');
        }
        $this->container['generic_carrier_error'] = $generic_carrier_error;

        return $this;
    }

    /**
     * Gets carrier_account_invalid_credentials
     *
     * @return string|null
     */
    public function getCarrierAccountInvalidCredentials()
    {
        return $this->container['carrier_account_invalid_credentials'];
    }

    /**
     * Sets carrier_account_invalid_credentials
     *
     * @param string|null $carrier_account_invalid_credentials The carrier account contains invalid credentials. Please update your carrier account with valid credentials.
     *
     * @return self
     */
    public function setCarrierAccountInvalidCredentials($carrier_account_invalid_credentials)
    {
        if (is_null($carrier_account_invalid_credentials)) {
            throw new \InvalidArgumentException('non-nullable carrier_account_invalid_credentials cannot be null');
        }
        $this->container['carrier_account_invalid_credentials'] = $carrier_account_invalid_credentials;

        return $this;
    }

    /**
     * Gets carrier_account_access_denied
     *
     * @return string|null
     */
    public function getCarrierAccountAccessDenied()
    {
        return $this->container['carrier_account_access_denied'];
    }

    /**
     * Sets carrier_account_access_denied
     *
     * @param string|null $carrier_account_access_denied There is an issue with your carrier account. Please contact support with the information of your account manager at the carrier and the object ID of this response.
     *
     * @return self
     */
    public function setCarrierAccountAccessDenied($carrier_account_access_denied)
    {
        if (is_null($carrier_account_access_denied)) {
            throw new \InvalidArgumentException('non-nullable carrier_account_access_denied cannot be null');
        }
        $this->container['carrier_account_access_denied'] = $carrier_account_access_denied;

        return $this;
    }

    /**
     * Gets manifest_invalid_transactions
     *
     * @return string|null
     */
    public function getManifestInvalidTransactions()
    {
        return $this->container['manifest_invalid_transactions'];
    }

    /**
     * Sets manifest_invalid_transactions
     *
     * @param string|null $manifest_invalid_transactions For this carrier, all shipments must be manifested on the same day that they are created regardless of shipment date.
     *
     * @return self
     */
    public function setManifestInvalidTransactions($manifest_invalid_transactions)
    {
        if (is_null($manifest_invalid_transactions)) {
            throw new \InvalidArgumentException('non-nullable manifest_invalid_transactions cannot be null');
        }
        $this->container['manifest_invalid_transactions'] = $manifest_invalid_transactions;

        return $this;
    }

    /**
     * Gets manifest_no_transactions
     *
     * @return string|null
     */
    public function getManifestNoTransactions()
    {
        return $this->container['manifest_no_transactions'];
    }

    /**
     * Sets manifest_no_transactions
     *
     * @param string|null $manifest_no_transactions There are no shipments in the manifest. Please check that the shipment date of the shipments matches the shipment date of the manifest.
     *
     * @return self
     */
    public function setManifestNoTransactions($manifest_no_transactions)
    {
        if (is_null($manifest_no_transactions)) {
            throw new \InvalidArgumentException('non-nullable manifest_no_transactions cannot be null');
        }
        $this->container['manifest_no_transactions'] = $manifest_no_transactions;

        return $this;
    }

    /**
     * Gets address_from_missing_zip
     *
     * @return string|null
     */
    public function getAddressFromMissingZip()
    {
        return $this->container['address_from_missing_zip'];
    }

    /**
     * Sets address_from_missing_zip
     *
     * @param string|null $address_from_missing_zip The sender address is missing the zip. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromMissingZip($address_from_missing_zip)
    {
        if (is_null($address_from_missing_zip)) {
            throw new \InvalidArgumentException('non-nullable address_from_missing_zip cannot be null');
        }
        $this->container['address_from_missing_zip'] = $address_from_missing_zip;

        return $this;
    }

    /**
     * Gets address_from_invalid_zip1
     *
     * @return string|null
     */
    public function getAddressFromInvalidZip1()
    {
        return $this->container['address_from_invalid_zip1'];
    }

    /**
     * Sets address_from_invalid_zip1
     *
     * @param string|null $address_from_invalid_zip1 The sender address contains an invalid zip. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromInvalidZip1($address_from_invalid_zip1)
    {
        if (is_null($address_from_invalid_zip1)) {
            throw new \InvalidArgumentException('non-nullable address_from_invalid_zip1 cannot be null');
        }
        $this->container['address_from_invalid_zip1'] = $address_from_invalid_zip1;

        return $this;
    }

    /**
     * Gets address_from_invalid_zip2
     *
     * @return string|null
     */
    public function getAddressFromInvalidZip2()
    {
        return $this->container['address_from_invalid_zip2'];
    }

    /**
     * Sets address_from_invalid_zip2
     *
     * @param string|null $address_from_invalid_zip2 The sender address contains an invalid zip. Please update the sender address and try again. You can also try removing the last 4 digits of the zip.
     *
     * @return self
     */
    public function setAddressFromInvalidZip2($address_from_invalid_zip2)
    {
        if (is_null($address_from_invalid_zip2)) {
            throw new \InvalidArgumentException('non-nullable address_from_invalid_zip2 cannot be null');
        }
        $this->container['address_from_invalid_zip2'] = $address_from_invalid_zip2;

        return $this;
    }

    /**
     * Gets address_from_missing_city
     *
     * @return string|null
     */
    public function getAddressFromMissingCity()
    {
        return $this->container['address_from_missing_city'];
    }

    /**
     * Sets address_from_missing_city
     *
     * @param string|null $address_from_missing_city The sender address is missing the city. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromMissingCity($address_from_missing_city)
    {
        if (is_null($address_from_missing_city)) {
            throw new \InvalidArgumentException('non-nullable address_from_missing_city cannot be null');
        }
        $this->container['address_from_missing_city'] = $address_from_missing_city;

        return $this;
    }

    /**
     * Gets address_from_invalid_city
     *
     * @return string|null
     */
    public function getAddressFromInvalidCity()
    {
        return $this->container['address_from_invalid_city'];
    }

    /**
     * Sets address_from_invalid_city
     *
     * @param string|null $address_from_invalid_city The sender address contains an invalid city. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromInvalidCity($address_from_invalid_city)
    {
        if (is_null($address_from_invalid_city)) {
            throw new \InvalidArgumentException('non-nullable address_from_invalid_city cannot be null');
        }
        $this->container['address_from_invalid_city'] = $address_from_invalid_city;

        return $this;
    }

    /**
     * Gets address_from_missing_state
     *
     * @return string|null
     */
    public function getAddressFromMissingState()
    {
        return $this->container['address_from_missing_state'];
    }

    /**
     * Sets address_from_missing_state
     *
     * @param string|null $address_from_missing_state The sender address is missing the state. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromMissingState($address_from_missing_state)
    {
        if (is_null($address_from_missing_state)) {
            throw new \InvalidArgumentException('non-nullable address_from_missing_state cannot be null');
        }
        $this->container['address_from_missing_state'] = $address_from_missing_state;

        return $this;
    }

    /**
     * Gets address_from_invalid_state
     *
     * @return string|null
     */
    public function getAddressFromInvalidState()
    {
        return $this->container['address_from_invalid_state'];
    }

    /**
     * Sets address_from_invalid_state
     *
     * @param string|null $address_from_invalid_state The sender address contains an invalid state. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromInvalidState($address_from_invalid_state)
    {
        if (is_null($address_from_invalid_state)) {
            throw new \InvalidArgumentException('non-nullable address_from_invalid_state cannot be null');
        }
        $this->container['address_from_invalid_state'] = $address_from_invalid_state;

        return $this;
    }

    /**
     * Gets address_from_missing_name
     *
     * @return string|null
     */
    public function getAddressFromMissingName()
    {
        return $this->container['address_from_missing_name'];
    }

    /**
     * Sets address_from_missing_name
     *
     * @param string|null $address_from_missing_name The sender address is missing the name. Please update the sender address and try again.
     *
     * @return self
     */
    public function setAddressFromMissingName($address_from_missing_name)
    {
        if (is_null($address_from_missing_name)) {
            throw new \InvalidArgumentException('non-nullable address_from_missing_name cannot be null');
        }
        $this->container['address_from_missing_name'] = $address_from_missing_name;

        return $this;
    }

    /**
     * Gets shipment_date_missing
     *
     * @return string|null
     */
    public function getShipmentDateMissing()
    {
        return $this->container['shipment_date_missing'];
    }

    /**
     * Sets shipment_date_missing
     *
     * @param string|null $shipment_date_missing The shipment date is missing. Please update the shipment date and try again.
     *
     * @return self
     */
    public function setShipmentDateMissing($shipment_date_missing)
    {
        if (is_null($shipment_date_missing)) {
            throw new \InvalidArgumentException('non-nullable shipment_date_missing cannot be null');
        }
        $this->container['shipment_date_missing'] = $shipment_date_missing;

        return $this;
    }

    /**
     * Gets shipment_date_invalid
     *
     * @return string|null
     */
    public function getShipmentDateInvalid()
    {
        return $this->container['shipment_date_invalid'];
    }

    /**
     * Sets shipment_date_invalid
     *
     * @param string|null $shipment_date_invalid The shipment date is invalid. Please update the shipment date and try again.
     *
     * @return self
     */
    public function setShipmentDateInvalid($shipment_date_invalid)
    {
        if (is_null($shipment_date_invalid)) {
            throw new \InvalidArgumentException('non-nullable shipment_date_invalid cannot be null');
        }
        $this->container['shipment_date_invalid'] = $shipment_date_invalid;

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


