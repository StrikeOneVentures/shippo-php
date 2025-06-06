<?php
/**
 * UPSCreateNewOwnAccountParameters
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
 * UPSCreateNewOwnAccountParameters Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UPSCreateNewOwnAccountParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UPSCreateNewOwnAccountParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_address_city' => 'string',
        'billing_address_country_iso2' => 'string',
        'billing_address_state' => 'string',
        'billing_address_street1' => 'string',
        'billing_address_street2' => 'string',
        'billing_address_zip' => 'string',
        'company' => 'string',
        'email' => 'string',
        'full_name' => 'string',
        'phone' => 'string',
        'pickup_address_city' => 'string',
        'pickup_address_country_iso2' => 'string',
        'pickup_address_same_as_billing_address' => 'bool',
        'pickup_address_state' => 'string',
        'pickup_address_street1' => 'string',
        'pickup_address_street2' => 'string',
        'pickup_address_zip' => 'string',
        'ups_agreements' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billing_address_city' => null,
        'billing_address_country_iso2' => null,
        'billing_address_state' => null,
        'billing_address_street1' => null,
        'billing_address_street2' => null,
        'billing_address_zip' => null,
        'company' => null,
        'email' => null,
        'full_name' => null,
        'phone' => null,
        'pickup_address_city' => null,
        'pickup_address_country_iso2' => null,
        'pickup_address_same_as_billing_address' => null,
        'pickup_address_state' => null,
        'pickup_address_street1' => null,
        'pickup_address_street2' => null,
        'pickup_address_zip' => null,
        'ups_agreements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billing_address_city' => false,
        'billing_address_country_iso2' => false,
        'billing_address_state' => false,
        'billing_address_street1' => false,
        'billing_address_street2' => false,
        'billing_address_zip' => false,
        'company' => false,
        'email' => false,
        'full_name' => false,
        'phone' => false,
        'pickup_address_city' => false,
        'pickup_address_country_iso2' => false,
        'pickup_address_same_as_billing_address' => false,
        'pickup_address_state' => false,
        'pickup_address_street1' => false,
        'pickup_address_street2' => false,
        'pickup_address_zip' => false,
        'ups_agreements' => false
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
        'billing_address_city' => 'billing_address_city',
        'billing_address_country_iso2' => 'billing_address_country_iso2',
        'billing_address_state' => 'billing_address_state',
        'billing_address_street1' => 'billing_address_street1',
        'billing_address_street2' => 'billing_address_street2',
        'billing_address_zip' => 'billing_address_zip',
        'company' => 'company',
        'email' => 'email',
        'full_name' => 'full_name',
        'phone' => 'phone',
        'pickup_address_city' => 'pickup_address_city',
        'pickup_address_country_iso2' => 'pickup_address_country_iso2',
        'pickup_address_same_as_billing_address' => 'pickup_address_same_as_billing_address',
        'pickup_address_state' => 'pickup_address_state',
        'pickup_address_street1' => 'pickup_address_street1',
        'pickup_address_street2' => 'pickup_address_street2',
        'pickup_address_zip' => 'pickup_address_zip',
        'ups_agreements' => 'ups_agreements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address_city' => 'setBillingAddressCity',
        'billing_address_country_iso2' => 'setBillingAddressCountryIso2',
        'billing_address_state' => 'setBillingAddressState',
        'billing_address_street1' => 'setBillingAddressStreet1',
        'billing_address_street2' => 'setBillingAddressStreet2',
        'billing_address_zip' => 'setBillingAddressZip',
        'company' => 'setCompany',
        'email' => 'setEmail',
        'full_name' => 'setFullName',
        'phone' => 'setPhone',
        'pickup_address_city' => 'setPickupAddressCity',
        'pickup_address_country_iso2' => 'setPickupAddressCountryIso2',
        'pickup_address_same_as_billing_address' => 'setPickupAddressSameAsBillingAddress',
        'pickup_address_state' => 'setPickupAddressState',
        'pickup_address_street1' => 'setPickupAddressStreet1',
        'pickup_address_street2' => 'setPickupAddressStreet2',
        'pickup_address_zip' => 'setPickupAddressZip',
        'ups_agreements' => 'setUpsAgreements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address_city' => 'getBillingAddressCity',
        'billing_address_country_iso2' => 'getBillingAddressCountryIso2',
        'billing_address_state' => 'getBillingAddressState',
        'billing_address_street1' => 'getBillingAddressStreet1',
        'billing_address_street2' => 'getBillingAddressStreet2',
        'billing_address_zip' => 'getBillingAddressZip',
        'company' => 'getCompany',
        'email' => 'getEmail',
        'full_name' => 'getFullName',
        'phone' => 'getPhone',
        'pickup_address_city' => 'getPickupAddressCity',
        'pickup_address_country_iso2' => 'getPickupAddressCountryIso2',
        'pickup_address_same_as_billing_address' => 'getPickupAddressSameAsBillingAddress',
        'pickup_address_state' => 'getPickupAddressState',
        'pickup_address_street1' => 'getPickupAddressStreet1',
        'pickup_address_street2' => 'getPickupAddressStreet2',
        'pickup_address_zip' => 'getPickupAddressZip',
        'ups_agreements' => 'getUpsAgreements'
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
        $this->setIfExists('billing_address_city', $data ?? [], null);
        $this->setIfExists('billing_address_country_iso2', $data ?? [], null);
        $this->setIfExists('billing_address_state', $data ?? [], null);
        $this->setIfExists('billing_address_street1', $data ?? [], null);
        $this->setIfExists('billing_address_street2', $data ?? [], null);
        $this->setIfExists('billing_address_zip', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('pickup_address_city', $data ?? [], null);
        $this->setIfExists('pickup_address_country_iso2', $data ?? [], null);
        $this->setIfExists('pickup_address_same_as_billing_address', $data ?? [], null);
        $this->setIfExists('pickup_address_state', $data ?? [], null);
        $this->setIfExists('pickup_address_street1', $data ?? [], null);
        $this->setIfExists('pickup_address_street2', $data ?? [], null);
        $this->setIfExists('pickup_address_zip', $data ?? [], null);
        $this->setIfExists('ups_agreements', $data ?? [], null);
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

        if ($this->container['billing_address_city'] === null) {
            $invalidProperties[] = "'billing_address_city' can't be null";
        }
        if ($this->container['billing_address_country_iso2'] === null) {
            $invalidProperties[] = "'billing_address_country_iso2' can't be null";
        }
        if ((mb_strlen($this->container['billing_address_country_iso2']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_address_country_iso2', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['billing_address_country_iso2']) < 2)) {
            $invalidProperties[] = "invalid value for 'billing_address_country_iso2', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['billing_address_state'] === null) {
            $invalidProperties[] = "'billing_address_state' can't be null";
        }
        if ((mb_strlen($this->container['billing_address_state']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_address_state', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['billing_address_state']) < 2)) {
            $invalidProperties[] = "invalid value for 'billing_address_state', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['billing_address_street1'] === null) {
            $invalidProperties[] = "'billing_address_street1' can't be null";
        }
        if ($this->container['billing_address_zip'] === null) {
            $invalidProperties[] = "'billing_address_zip' can't be null";
        }
        if ((mb_strlen($this->container['billing_address_zip']) > 5)) {
            $invalidProperties[] = "invalid value for 'billing_address_zip', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['billing_address_zip']) < 5)) {
            $invalidProperties[] = "invalid value for 'billing_address_zip', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['full_name'] === null) {
            $invalidProperties[] = "'full_name' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if (!is_null($this->container['pickup_address_country_iso2']) && (mb_strlen($this->container['pickup_address_country_iso2']) > 2)) {
            $invalidProperties[] = "invalid value for 'pickup_address_country_iso2', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['pickup_address_country_iso2']) && (mb_strlen($this->container['pickup_address_country_iso2']) < 2)) {
            $invalidProperties[] = "invalid value for 'pickup_address_country_iso2', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['pickup_address_same_as_billing_address'] === null) {
            $invalidProperties[] = "'pickup_address_same_as_billing_address' can't be null";
        }
        if (!is_null($this->container['pickup_address_state']) && (mb_strlen($this->container['pickup_address_state']) > 2)) {
            $invalidProperties[] = "invalid value for 'pickup_address_state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['pickup_address_state']) && (mb_strlen($this->container['pickup_address_state']) < 2)) {
            $invalidProperties[] = "invalid value for 'pickup_address_state', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['pickup_address_zip']) && (mb_strlen($this->container['pickup_address_zip']) > 5)) {
            $invalidProperties[] = "invalid value for 'pickup_address_zip', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['pickup_address_zip']) && (mb_strlen($this->container['pickup_address_zip']) < 5)) {
            $invalidProperties[] = "invalid value for 'pickup_address_zip', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['ups_agreements'] === null) {
            $invalidProperties[] = "'ups_agreements' can't be null";
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
     * Gets billing_address_city
     *
     * @return string
     */
    public function getBillingAddressCity()
    {
        return $this->container['billing_address_city'];
    }

    /**
     * Sets billing_address_city
     *
     * @param string $billing_address_city billing_address_city
     *
     * @return self
     */
    public function setBillingAddressCity($billing_address_city)
    {
        if (is_null($billing_address_city)) {
            throw new \InvalidArgumentException('non-nullable billing_address_city cannot be null');
        }
        $this->container['billing_address_city'] = $billing_address_city;

        return $this;
    }

    /**
     * Gets billing_address_country_iso2
     *
     * @return string
     */
    public function getBillingAddressCountryIso2()
    {
        return $this->container['billing_address_country_iso2'];
    }

    /**
     * Sets billing_address_country_iso2
     *
     * @param string $billing_address_country_iso2 billing_address_country_iso2
     *
     * @return self
     */
    public function setBillingAddressCountryIso2($billing_address_country_iso2)
    {
        if (is_null($billing_address_country_iso2)) {
            throw new \InvalidArgumentException('non-nullable billing_address_country_iso2 cannot be null');
        }
        if ((mb_strlen($billing_address_country_iso2) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_country_iso2 when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($billing_address_country_iso2) < 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_country_iso2 when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 2.');
        }

        $this->container['billing_address_country_iso2'] = $billing_address_country_iso2;

        return $this;
    }

    /**
     * Gets billing_address_state
     *
     * @return string
     */
    public function getBillingAddressState()
    {
        return $this->container['billing_address_state'];
    }

    /**
     * Sets billing_address_state
     *
     * @param string $billing_address_state billing_address_state
     *
     * @return self
     */
    public function setBillingAddressState($billing_address_state)
    {
        if (is_null($billing_address_state)) {
            throw new \InvalidArgumentException('non-nullable billing_address_state cannot be null');
        }
        if ((mb_strlen($billing_address_state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_state when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($billing_address_state) < 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_state when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 2.');
        }

        $this->container['billing_address_state'] = $billing_address_state;

        return $this;
    }

    /**
     * Gets billing_address_street1
     *
     * @return string
     */
    public function getBillingAddressStreet1()
    {
        return $this->container['billing_address_street1'];
    }

    /**
     * Sets billing_address_street1
     *
     * @param string $billing_address_street1 billing_address_street1
     *
     * @return self
     */
    public function setBillingAddressStreet1($billing_address_street1)
    {
        if (is_null($billing_address_street1)) {
            throw new \InvalidArgumentException('non-nullable billing_address_street1 cannot be null');
        }
        $this->container['billing_address_street1'] = $billing_address_street1;

        return $this;
    }

    /**
     * Gets billing_address_street2
     *
     * @return string|null
     */
    public function getBillingAddressStreet2()
    {
        return $this->container['billing_address_street2'];
    }

    /**
     * Sets billing_address_street2
     *
     * @param string|null $billing_address_street2 Empty string acceptable for billing_address_street2
     *
     * @return self
     */
    public function setBillingAddressStreet2($billing_address_street2)
    {
        if (is_null($billing_address_street2)) {
            throw new \InvalidArgumentException('non-nullable billing_address_street2 cannot be null');
        }
        $this->container['billing_address_street2'] = $billing_address_street2;

        return $this;
    }

    /**
     * Gets billing_address_zip
     *
     * @return string
     */
    public function getBillingAddressZip()
    {
        return $this->container['billing_address_zip'];
    }

    /**
     * Sets billing_address_zip
     *
     * @param string $billing_address_zip billing_address_zip
     *
     * @return self
     */
    public function setBillingAddressZip($billing_address_zip)
    {
        if (is_null($billing_address_zip)) {
            throw new \InvalidArgumentException('non-nullable billing_address_zip cannot be null');
        }
        if ((mb_strlen($billing_address_zip) > 5)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_zip when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($billing_address_zip) < 5)) {
            throw new \InvalidArgumentException('invalid length for $billing_address_zip when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 5.');
        }

        $this->container['billing_address_zip'] = $billing_address_zip;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company name. Full name is acceptable in this field if the user has no company name
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets pickup_address_city
     *
     * @return string|null
     */
    public function getPickupAddressCity()
    {
        return $this->container['pickup_address_city'];
    }

    /**
     * Sets pickup_address_city
     *
     * @param string|null $pickup_address_city User's pickup address city. Only required if pickup_address_same_as_billing_address is false
     *
     * @return self
     */
    public function setPickupAddressCity($pickup_address_city)
    {
        if (is_null($pickup_address_city)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_city cannot be null');
        }
        $this->container['pickup_address_city'] = $pickup_address_city;

        return $this;
    }

    /**
     * Gets pickup_address_country_iso2
     *
     * @return string|null
     */
    public function getPickupAddressCountryIso2()
    {
        return $this->container['pickup_address_country_iso2'];
    }

    /**
     * Sets pickup_address_country_iso2
     *
     * @param string|null $pickup_address_country_iso2 User's pickup street 1. Only required if pickup_address_same_as_billing_address is false
     *
     * @return self
     */
    public function setPickupAddressCountryIso2($pickup_address_country_iso2)
    {
        if (is_null($pickup_address_country_iso2)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_country_iso2 cannot be null');
        }
        if ((mb_strlen($pickup_address_country_iso2) > 2)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_country_iso2 when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($pickup_address_country_iso2) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_country_iso2 when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 2.');
        }

        $this->container['pickup_address_country_iso2'] = $pickup_address_country_iso2;

        return $this;
    }

    /**
     * Gets pickup_address_same_as_billing_address
     *
     * @return bool
     */
    public function getPickupAddressSameAsBillingAddress()
    {
        return $this->container['pickup_address_same_as_billing_address'];
    }

    /**
     * Sets pickup_address_same_as_billing_address
     *
     * @param bool $pickup_address_same_as_billing_address pickup_address_same_as_billing_address
     *
     * @return self
     */
    public function setPickupAddressSameAsBillingAddress($pickup_address_same_as_billing_address)
    {
        if (is_null($pickup_address_same_as_billing_address)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_same_as_billing_address cannot be null');
        }
        $this->container['pickup_address_same_as_billing_address'] = $pickup_address_same_as_billing_address;

        return $this;
    }

    /**
     * Gets pickup_address_state
     *
     * @return string|null
     */
    public function getPickupAddressState()
    {
        return $this->container['pickup_address_state'];
    }

    /**
     * Sets pickup_address_state
     *
     * @param string|null $pickup_address_state User's pickup address state. Only required if pickup_address_same_as_billing_address is false
     *
     * @return self
     */
    public function setPickupAddressState($pickup_address_state)
    {
        if (is_null($pickup_address_state)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_state cannot be null');
        }
        if ((mb_strlen($pickup_address_state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_state when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($pickup_address_state) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_state when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 2.');
        }

        $this->container['pickup_address_state'] = $pickup_address_state;

        return $this;
    }

    /**
     * Gets pickup_address_street1
     *
     * @return string|null
     */
    public function getPickupAddressStreet1()
    {
        return $this->container['pickup_address_street1'];
    }

    /**
     * Sets pickup_address_street1
     *
     * @param string|null $pickup_address_street1 User's pickup address street 1. Only required if pickup_address_same_as_billing_address is false
     *
     * @return self
     */
    public function setPickupAddressStreet1($pickup_address_street1)
    {
        if (is_null($pickup_address_street1)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_street1 cannot be null');
        }
        $this->container['pickup_address_street1'] = $pickup_address_street1;

        return $this;
    }

    /**
     * Gets pickup_address_street2
     *
     * @return string|null
     */
    public function getPickupAddressStreet2()
    {
        return $this->container['pickup_address_street2'];
    }

    /**
     * Sets pickup_address_street2
     *
     * @param string|null $pickup_address_street2 User's pickup street 2. Only used if pickup_address_same_as_billing_address is false, empty string acceptable
     *
     * @return self
     */
    public function setPickupAddressStreet2($pickup_address_street2)
    {
        if (is_null($pickup_address_street2)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_street2 cannot be null');
        }
        $this->container['pickup_address_street2'] = $pickup_address_street2;

        return $this;
    }

    /**
     * Gets pickup_address_zip
     *
     * @return string|null
     */
    public function getPickupAddressZip()
    {
        return $this->container['pickup_address_zip'];
    }

    /**
     * Sets pickup_address_zip
     *
     * @param string|null $pickup_address_zip User's pickup address zip code. Only required if pickup_address_same_as_billing_address is false
     *
     * @return self
     */
    public function setPickupAddressZip($pickup_address_zip)
    {
        if (is_null($pickup_address_zip)) {
            throw new \InvalidArgumentException('non-nullable pickup_address_zip cannot be null');
        }
        if ((mb_strlen($pickup_address_zip) > 5)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_zip when calling UPSCreateNewOwnAccountParameters., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($pickup_address_zip) < 5)) {
            throw new \InvalidArgumentException('invalid length for $pickup_address_zip when calling UPSCreateNewOwnAccountParameters., must be bigger than or equal to 5.');
        }

        $this->container['pickup_address_zip'] = $pickup_address_zip;

        return $this;
    }

    /**
     * Gets ups_agreements
     *
     * @return bool
     */
    public function getUpsAgreements()
    {
        return $this->container['ups_agreements'];
    }

    /**
     * Sets ups_agreements
     *
     * @param bool $ups_agreements Whether the user agrees to the UPS terms and conditions or not. Error 400 will be returned if passed in as false
     *
     * @return self
     */
    public function setUpsAgreements($ups_agreements)
    {
        if (is_null($ups_agreements)) {
            throw new \InvalidArgumentException('non-nullable ups_agreements cannot be null');
        }
        $this->container['ups_agreements'] = $ups_agreements;

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


