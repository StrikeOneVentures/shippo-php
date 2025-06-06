<?php
/**
 * OrderShopAppEnum
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderShopAppEnum Class Doc Comment
 *
 * @category Class
 * @description Platform the order was created on and, if applicable, imported from.  Orders created via the Shippo API or dashboard will have the value \&quot;Shippo\&quot;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderShopAppEnum
{
    /**
     * Possible values of this enum
     */
    public const AMAZON = 'Amazon';

    public const BIGCOMMERCE = 'Bigcommerce';

    public const CSV_IMPORT = 'CSV_Import';

    public const E_BAY = 'eBay';

    public const E_PAGES = 'ePages';

    public const ETSY = 'Etsy';

    public const GODADDY = 'Godaddy';

    public const MAGENTO = 'Magento';

    public const SHIPPO = 'Shippo';

    public const SHOPIFY = 'Shopify';

    public const SPREECOMMERCE = 'Spreecommerce';

    public const STRIPE_RELAY = 'StripeRelay';

    public const WALMART = 'Walmart';

    public const WEEBLY = 'Weebly';

    public const WOO_COMMERCE = 'WooCommerce';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
            self::BIGCOMMERCE,
            self::CSV_IMPORT,
            self::E_BAY,
            self::E_PAGES,
            self::ETSY,
            self::GODADDY,
            self::MAGENTO,
            self::SHIPPO,
            self::SHOPIFY,
            self::SPREECOMMERCE,
            self::STRIPE_RELAY,
            self::WALMART,
            self::WEEBLY,
            self::WOO_COMMERCE
        ];
    }
}


