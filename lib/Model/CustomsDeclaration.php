<?php
/**
 * CustomsDeclaration
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
 * CustomsDeclaration Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomsDeclaration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomsDeclaration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aes_itn' => 'string',
        'b13a_filing_option' => 'string',
        'b13a_number' => 'string',
        'certificate' => 'string',
        'certify' => 'bool',
        'certify_signer' => 'string',
        'commercial_invoice' => 'bool',
        'contents_explanation' => 'string',
        'disclaimer' => 'string',
        'duties_payor' => '\OpenAPI\Client\Model\CustomsDeclarationBaseDutiesPayor',
        'exporter_identification' => '\OpenAPI\Client\Model\CustomsExporterIdentification',
        'exporter_reference' => 'string',
        'importer_reference' => 'string',
        'is_vat_collected' => 'bool',
        'invoice' => 'string',
        'license' => 'string',
        'metadata' => 'string',
        'notes' => 'string',
        'address_importer' => 'string',
        'contents_type' => 'string',
        'eel_pfc' => 'string',
        'incoterm' => 'string',
        'invoiced_charges' => '\OpenAPI\Client\Model\CustomsInvoicedCharges',
        'items' => 'string[]',
        'non_delivery_option' => 'string',
        'object_created' => '\DateTime',
        'object_id' => 'string',
        'object_owner' => 'string',
        'object_state' => '\OpenAPI\Client\Model\ObjectStateEnum',
        'object_updated' => '\DateTime',
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
        'aes_itn' => null,
        'b13a_filing_option' => null,
        'b13a_number' => null,
        'certificate' => null,
        'certify' => null,
        'certify_signer' => null,
        'commercial_invoice' => null,
        'contents_explanation' => null,
        'disclaimer' => null,
        'duties_payor' => null,
        'exporter_identification' => null,
        'exporter_reference' => null,
        'importer_reference' => null,
        'is_vat_collected' => null,
        'invoice' => null,
        'license' => null,
        'metadata' => null,
        'notes' => null,
        'address_importer' => null,
        'contents_type' => null,
        'eel_pfc' => null,
        'incoterm' => null,
        'invoiced_charges' => null,
        'items' => null,
        'non_delivery_option' => null,
        'object_created' => 'date-time',
        'object_id' => null,
        'object_owner' => null,
        'object_state' => null,
        'object_updated' => 'date-time',
        'test' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aes_itn' => false,
        'b13a_filing_option' => false,
        'b13a_number' => false,
        'certificate' => false,
        'certify' => false,
        'certify_signer' => false,
        'commercial_invoice' => false,
        'contents_explanation' => false,
        'disclaimer' => false,
        'duties_payor' => false,
        'exporter_identification' => false,
        'exporter_reference' => false,
        'importer_reference' => false,
        'is_vat_collected' => false,
        'invoice' => false,
        'license' => false,
        'metadata' => false,
        'notes' => false,
        'address_importer' => false,
        'contents_type' => false,
        'eel_pfc' => false,
        'incoterm' => false,
        'invoiced_charges' => false,
        'items' => false,
        'non_delivery_option' => false,
        'object_created' => false,
        'object_id' => false,
        'object_owner' => false,
        'object_state' => false,
        'object_updated' => false,
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
        'aes_itn' => 'aes_itn',
        'b13a_filing_option' => 'b13a_filing_option',
        'b13a_number' => 'b13a_number',
        'certificate' => 'certificate',
        'certify' => 'certify',
        'certify_signer' => 'certify_signer',
        'commercial_invoice' => 'commercial_invoice',
        'contents_explanation' => 'contents_explanation',
        'disclaimer' => 'disclaimer',
        'duties_payor' => 'duties_payor',
        'exporter_identification' => 'exporter_identification',
        'exporter_reference' => 'exporter_reference',
        'importer_reference' => 'importer_reference',
        'is_vat_collected' => 'is_vat_collected',
        'invoice' => 'invoice',
        'license' => 'license',
        'metadata' => 'metadata',
        'notes' => 'notes',
        'address_importer' => 'address_importer',
        'contents_type' => 'contents_type',
        'eel_pfc' => 'eel_pfc',
        'incoterm' => 'incoterm',
        'invoiced_charges' => 'invoiced_charges',
        'items' => 'items',
        'non_delivery_option' => 'non_delivery_option',
        'object_created' => 'object_created',
        'object_id' => 'object_id',
        'object_owner' => 'object_owner',
        'object_state' => 'object_state',
        'object_updated' => 'object_updated',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aes_itn' => 'setAesItn',
        'b13a_filing_option' => 'setB13aFilingOption',
        'b13a_number' => 'setB13aNumber',
        'certificate' => 'setCertificate',
        'certify' => 'setCertify',
        'certify_signer' => 'setCertifySigner',
        'commercial_invoice' => 'setCommercialInvoice',
        'contents_explanation' => 'setContentsExplanation',
        'disclaimer' => 'setDisclaimer',
        'duties_payor' => 'setDutiesPayor',
        'exporter_identification' => 'setExporterIdentification',
        'exporter_reference' => 'setExporterReference',
        'importer_reference' => 'setImporterReference',
        'is_vat_collected' => 'setIsVatCollected',
        'invoice' => 'setInvoice',
        'license' => 'setLicense',
        'metadata' => 'setMetadata',
        'notes' => 'setNotes',
        'address_importer' => 'setAddressImporter',
        'contents_type' => 'setContentsType',
        'eel_pfc' => 'setEelPfc',
        'incoterm' => 'setIncoterm',
        'invoiced_charges' => 'setInvoicedCharges',
        'items' => 'setItems',
        'non_delivery_option' => 'setNonDeliveryOption',
        'object_created' => 'setObjectCreated',
        'object_id' => 'setObjectId',
        'object_owner' => 'setObjectOwner',
        'object_state' => 'setObjectState',
        'object_updated' => 'setObjectUpdated',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aes_itn' => 'getAesItn',
        'b13a_filing_option' => 'getB13aFilingOption',
        'b13a_number' => 'getB13aNumber',
        'certificate' => 'getCertificate',
        'certify' => 'getCertify',
        'certify_signer' => 'getCertifySigner',
        'commercial_invoice' => 'getCommercialInvoice',
        'contents_explanation' => 'getContentsExplanation',
        'disclaimer' => 'getDisclaimer',
        'duties_payor' => 'getDutiesPayor',
        'exporter_identification' => 'getExporterIdentification',
        'exporter_reference' => 'getExporterReference',
        'importer_reference' => 'getImporterReference',
        'is_vat_collected' => 'getIsVatCollected',
        'invoice' => 'getInvoice',
        'license' => 'getLicense',
        'metadata' => 'getMetadata',
        'notes' => 'getNotes',
        'address_importer' => 'getAddressImporter',
        'contents_type' => 'getContentsType',
        'eel_pfc' => 'getEelPfc',
        'incoterm' => 'getIncoterm',
        'invoiced_charges' => 'getInvoicedCharges',
        'items' => 'getItems',
        'non_delivery_option' => 'getNonDeliveryOption',
        'object_created' => 'getObjectCreated',
        'object_id' => 'getObjectId',
        'object_owner' => 'getObjectOwner',
        'object_state' => 'getObjectState',
        'object_updated' => 'getObjectUpdated',
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
        $this->setIfExists('aes_itn', $data ?? [], null);
        $this->setIfExists('b13a_filing_option', $data ?? [], null);
        $this->setIfExists('b13a_number', $data ?? [], null);
        $this->setIfExists('certificate', $data ?? [], null);
        $this->setIfExists('certify', $data ?? [], null);
        $this->setIfExists('certify_signer', $data ?? [], null);
        $this->setIfExists('commercial_invoice', $data ?? [], null);
        $this->setIfExists('contents_explanation', $data ?? [], null);
        $this->setIfExists('disclaimer', $data ?? [], null);
        $this->setIfExists('duties_payor', $data ?? [], null);
        $this->setIfExists('exporter_identification', $data ?? [], null);
        $this->setIfExists('exporter_reference', $data ?? [], null);
        $this->setIfExists('importer_reference', $data ?? [], null);
        $this->setIfExists('is_vat_collected', $data ?? [], null);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('address_importer', $data ?? [], null);
        $this->setIfExists('contents_type', $data ?? [], null);
        $this->setIfExists('eel_pfc', $data ?? [], null);
        $this->setIfExists('incoterm', $data ?? [], null);
        $this->setIfExists('invoiced_charges', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('non_delivery_option', $data ?? [], null);
        $this->setIfExists('object_created', $data ?? [], null);
        $this->setIfExists('object_id', $data ?? [], null);
        $this->setIfExists('object_owner', $data ?? [], null);
        $this->setIfExists('object_state', $data ?? [], null);
        $this->setIfExists('object_updated', $data ?? [], null);
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

        if ($this->container['certify'] === null) {
            $invalidProperties[] = "'certify' can't be null";
        }
        if ($this->container['certify_signer'] === null) {
            $invalidProperties[] = "'certify_signer' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets aes_itn
     *
     * @return string|null
     */
    public function getAesItn()
    {
        return $this->container['aes_itn'];
    }

    /**
     * Sets aes_itn
     *
     * @param string|null $aes_itn **required if eel_pfc is `AES_ITN`**<br> AES / ITN reference of the shipment.
     *
     * @return self
     */
    public function setAesItn($aes_itn)
    {
        if (is_null($aes_itn)) {
            throw new \InvalidArgumentException('non-nullable aes_itn cannot be null');
        }
        $this->container['aes_itn'] = $aes_itn;

        return $this;
    }

    /**
     * Gets b13a_filing_option
     *
     * @return string|null
     */
    public function getB13aFilingOption()
    {
        return $this->container['b13a_filing_option'];
    }

    /**
     * Sets b13a_filing_option
     *
     * @param string|null $b13a_filing_option B13A Option details are obtained by filing a B13A Canada Export Declaration via the Canadian Export Reporting System (CERS).  <a href=\"https://www.cbsa-asfc.gc.ca/services/export/guide-eng.html\" target=\"_blank\" rel=\"noopener noreferrer\"> More information on reporting commercial exports from Canada. </a> Allowed values available <a href=\"#tag/Customs-Declaration-B13A-Filing-Option\">here</a>
     *
     * @return self
     */
    public function setB13aFilingOption($b13a_filing_option)
    {
        if (is_null($b13a_filing_option)) {
            throw new \InvalidArgumentException('non-nullable b13a_filing_option cannot be null');
        }
        $this->container['b13a_filing_option'] = $b13a_filing_option;

        return $this;
    }

    /**
     * Gets b13a_number
     *
     * @return string|null
     */
    public function getB13aNumber()
    {
        return $this->container['b13a_number'];
    }

    /**
     * Sets b13a_number
     *
     * @param string|null $b13a_number **must be provided if and only if b13a_filing_option is provided**<br> Represents:<br> the Proof of Report (POR) Number when b13a_filing_option is `FILED_ELECTRONICALLY`;<br>  the Summary ID Number when b13a_filing_option is `SUMMARY_REPORTING`;<br>  or the Exemption Number when b13a_filing_option is `NOT_REQUIRED`.
     *
     * @return self
     */
    public function setB13aNumber($b13a_number)
    {
        if (is_null($b13a_number)) {
            throw new \InvalidArgumentException('non-nullable b13a_number cannot be null');
        }
        $this->container['b13a_number'] = $b13a_number;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate Certificate reference of the shipment.
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        if (is_null($certificate)) {
            throw new \InvalidArgumentException('non-nullable certificate cannot be null');
        }
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets certify
     *
     * @return bool
     */
    public function getCertify()
    {
        return $this->container['certify'];
    }

    /**
     * Sets certify
     *
     * @param bool $certify Expresses that the certify_signer has provided all information of this customs declaration truthfully.
     *
     * @return self
     */
    public function setCertify($certify)
    {
        if (is_null($certify)) {
            throw new \InvalidArgumentException('non-nullable certify cannot be null');
        }
        $this->container['certify'] = $certify;

        return $this;
    }

    /**
     * Gets certify_signer
     *
     * @return string
     */
    public function getCertifySigner()
    {
        return $this->container['certify_signer'];
    }

    /**
     * Sets certify_signer
     *
     * @param string $certify_signer Name of the person who created the customs declaration and is responsible for the validity of all  information provided.
     *
     * @return self
     */
    public function setCertifySigner($certify_signer)
    {
        if (is_null($certify_signer)) {
            throw new \InvalidArgumentException('non-nullable certify_signer cannot be null');
        }
        $this->container['certify_signer'] = $certify_signer;

        return $this;
    }

    /**
     * Gets commercial_invoice
     *
     * @return bool|null
     */
    public function getCommercialInvoice()
    {
        return $this->container['commercial_invoice'];
    }

    /**
     * Sets commercial_invoice
     *
     * @param bool|null $commercial_invoice commercial_invoice
     *
     * @return self
     */
    public function setCommercialInvoice($commercial_invoice)
    {
        if (is_null($commercial_invoice)) {
            throw new \InvalidArgumentException('non-nullable commercial_invoice cannot be null');
        }
        $this->container['commercial_invoice'] = $commercial_invoice;

        return $this;
    }

    /**
     * Gets contents_explanation
     *
     * @return string|null
     */
    public function getContentsExplanation()
    {
        return $this->container['contents_explanation'];
    }

    /**
     * Sets contents_explanation
     *
     * @param string|null $contents_explanation **required if contents_type is `OTHER`**<br> Explanation of the type of goods of the shipment.
     *
     * @return self
     */
    public function setContentsExplanation($contents_explanation)
    {
        if (is_null($contents_explanation)) {
            throw new \InvalidArgumentException('non-nullable contents_explanation cannot be null');
        }
        $this->container['contents_explanation'] = $contents_explanation;

        return $this;
    }

    /**
     * Gets disclaimer
     *
     * @return string|null
     */
    public function getDisclaimer()
    {
        return $this->container['disclaimer'];
    }

    /**
     * Sets disclaimer
     *
     * @param string|null $disclaimer Disclaimer for the shipment and customs information that have been provided.
     *
     * @return self
     */
    public function setDisclaimer($disclaimer)
    {
        if (is_null($disclaimer)) {
            throw new \InvalidArgumentException('non-nullable disclaimer cannot be null');
        }
        $this->container['disclaimer'] = $disclaimer;

        return $this;
    }

    /**
     * Gets duties_payor
     *
     * @return \OpenAPI\Client\Model\CustomsDeclarationBaseDutiesPayor|null
     */
    public function getDutiesPayor()
    {
        return $this->container['duties_payor'];
    }

    /**
     * Sets duties_payor
     *
     * @param \OpenAPI\Client\Model\CustomsDeclarationBaseDutiesPayor|null $duties_payor duties_payor
     *
     * @return self
     */
    public function setDutiesPayor($duties_payor)
    {
        if (is_null($duties_payor)) {
            throw new \InvalidArgumentException('non-nullable duties_payor cannot be null');
        }
        $this->container['duties_payor'] = $duties_payor;

        return $this;
    }

    /**
     * Gets exporter_identification
     *
     * @return \OpenAPI\Client\Model\CustomsExporterIdentification|null
     */
    public function getExporterIdentification()
    {
        return $this->container['exporter_identification'];
    }

    /**
     * Sets exporter_identification
     *
     * @param \OpenAPI\Client\Model\CustomsExporterIdentification|null $exporter_identification exporter_identification
     *
     * @return self
     */
    public function setExporterIdentification($exporter_identification)
    {
        if (is_null($exporter_identification)) {
            throw new \InvalidArgumentException('non-nullable exporter_identification cannot be null');
        }
        $this->container['exporter_identification'] = $exporter_identification;

        return $this;
    }

    /**
     * Gets exporter_reference
     *
     * @return string|null
     */
    public function getExporterReference()
    {
        return $this->container['exporter_reference'];
    }

    /**
     * Sets exporter_reference
     *
     * @param string|null $exporter_reference Exporter reference of an export shipment.
     *
     * @return self
     */
    public function setExporterReference($exporter_reference)
    {
        if (is_null($exporter_reference)) {
            throw new \InvalidArgumentException('non-nullable exporter_reference cannot be null');
        }
        $this->container['exporter_reference'] = $exporter_reference;

        return $this;
    }

    /**
     * Gets importer_reference
     *
     * @return string|null
     */
    public function getImporterReference()
    {
        return $this->container['importer_reference'];
    }

    /**
     * Sets importer_reference
     *
     * @param string|null $importer_reference Importer reference of an import shipment.
     *
     * @return self
     */
    public function setImporterReference($importer_reference)
    {
        if (is_null($importer_reference)) {
            throw new \InvalidArgumentException('non-nullable importer_reference cannot be null');
        }
        $this->container['importer_reference'] = $importer_reference;

        return $this;
    }

    /**
     * Gets is_vat_collected
     *
     * @return bool|null
     */
    public function getIsVatCollected()
    {
        return $this->container['is_vat_collected'];
    }

    /**
     * Sets is_vat_collected
     *
     * @param bool|null $is_vat_collected Indicates whether the shipment's destination VAT has been collected. May be required for some destinations.
     *
     * @return self
     */
    public function setIsVatCollected($is_vat_collected)
    {
        if (is_null($is_vat_collected)) {
            throw new \InvalidArgumentException('non-nullable is_vat_collected cannot be null');
        }
        $this->container['is_vat_collected'] = $is_vat_collected;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string|null $invoice Invoice reference of the shipment.
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (is_null($invoice)) {
            throw new \InvalidArgumentException('non-nullable invoice cannot be null');
        }
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string|null $license License reference of the shipment.
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

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
     * @param string|null $metadata A string of up to 100 characters that can be filled with any additional information you  want to attach to the object.
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
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Additional notes to be included in the customs declaration.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets address_importer
     *
     * @return string|null
     */
    public function getAddressImporter()
    {
        return $this->container['address_importer'];
    }

    /**
     * Sets address_importer
     *
     * @param string|null $address_importer Object ID of the Importer address.
     *
     * @return self
     */
    public function setAddressImporter($address_importer)
    {
        if (is_null($address_importer)) {
            throw new \InvalidArgumentException('non-nullable address_importer cannot be null');
        }
        $this->container['address_importer'] = $address_importer;

        return $this;
    }

    /**
     * Gets contents_type
     *
     * @return string|null
     */
    public function getContentsType()
    {
        return $this->container['contents_type'];
    }

    /**
     * Sets contents_type
     *
     * @param string|null $contents_type Type of goods of the shipment.   Allowed values available <a href=\"#tag/Customs-Declaration-Contents-Type\">here</a>
     *
     * @return self
     */
    public function setContentsType($contents_type)
    {
        if (is_null($contents_type)) {
            throw new \InvalidArgumentException('non-nullable contents_type cannot be null');
        }
        $this->container['contents_type'] = $contents_type;

        return $this;
    }

    /**
     * Gets eel_pfc
     *
     * @return string|null
     */
    public function getEelPfc()
    {
        return $this->container['eel_pfc'];
    }

    /**
     * Sets eel_pfc
     *
     * @param string|null $eel_pfc EEL / PFC type of the shipment. For most shipments from the US to CA, `NOEEI_30_36` is applicable; for most  other shipments from the US, `NOEEI_30_37_a` is applicable. Allowed values available <a href=\"#tag/Customs-Declaration-EELPFC\">here</a>
     *
     * @return self
     */
    public function setEelPfc($eel_pfc)
    {
        if (is_null($eel_pfc)) {
            throw new \InvalidArgumentException('non-nullable eel_pfc cannot be null');
        }
        $this->container['eel_pfc'] = $eel_pfc;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string|null $incoterm The incoterm reference of the shipment. FCA is available for DHL Express and FedEx only.  eDAP is available for DPD UK only. DAP is available for DHL Express and DPD UK. If expecting DAP for other carriers, please use DDU. Allowed values available <a href=\"#tag/Customs-Declaration-Incoterm\">here</a>
     *
     * @return self
     */
    public function setIncoterm($incoterm)
    {
        if (is_null($incoterm)) {
            throw new \InvalidArgumentException('non-nullable incoterm cannot be null');
        }
        $this->container['incoterm'] = $incoterm;

        return $this;
    }

    /**
     * Gets invoiced_charges
     *
     * @return \OpenAPI\Client\Model\CustomsInvoicedCharges|null
     */
    public function getInvoicedCharges()
    {
        return $this->container['invoiced_charges'];
    }

    /**
     * Sets invoiced_charges
     *
     * @param \OpenAPI\Client\Model\CustomsInvoicedCharges|null $invoiced_charges invoiced_charges
     *
     * @return self
     */
    public function setInvoicedCharges($invoiced_charges)
    {
        if (is_null($invoiced_charges)) {
            throw new \InvalidArgumentException('non-nullable invoiced_charges cannot be null');
        }
        $this->container['invoiced_charges'] = $invoiced_charges;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[] $items Distinct Parcel content items as Customs Items object_ids.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets non_delivery_option
     *
     * @return string|null
     */
    public function getNonDeliveryOption()
    {
        return $this->container['non_delivery_option'];
    }

    /**
     * Sets non_delivery_option
     *
     * @param string|null $non_delivery_option Indicates how the carrier should proceed in case the shipment can't be delivered. Allowed values available <a href=\"#tag/Customs-Declaration-Non-Delivery-Option\">here</a>
     *
     * @return self
     */
    public function setNonDeliveryOption($non_delivery_option)
    {
        if (is_null($non_delivery_option)) {
            throw new \InvalidArgumentException('non-nullable non_delivery_option cannot be null');
        }
        $this->container['non_delivery_option'] = $non_delivery_option;

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
     * @param \DateTime|null $object_created Date and time of object creation.
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
     * @param string|null $object_id Unique identifier of the given object.
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
     * @param string|null $object_owner Username of the user who created the object.
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
     * @return \OpenAPI\Client\Model\ObjectStateEnum|null
     */
    public function getObjectState()
    {
        return $this->container['object_state'];
    }

    /**
     * Sets object_state
     *
     * @param \OpenAPI\Client\Model\ObjectStateEnum|null $object_state object_state
     *
     * @return self
     */
    public function setObjectState($object_state)
    {
        if (is_null($object_state)) {
            throw new \InvalidArgumentException('non-nullable object_state cannot be null');
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
     * @param \DateTime|null $object_updated Date and time of last object update.
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


