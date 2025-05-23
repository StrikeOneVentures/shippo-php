<?php
/**
 * ServiceGroupTypeEnum
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
 * ServiceGroupTypeEnum Class Doc Comment
 *
 * @category Class
 * @description The type of the service group.&lt;br&gt;  &#x60;LIVE_RATE&#x60; - Shippo will make a rating request and return real-time rates for the shipping group, only falling back to the specified flat rate amount if no rates match a service level in the service group.&lt;br&gt;  &#x60;FLAT_RATE&#x60; - Returns a shipping option with the specified flat rate amount.&lt;br&gt;  &#x60;FREE_SHIPPING&#x60; - Returns a shipping option with a price of $0 only if the total cost of items exceeds the amount defined by &#x60;free_shipping_threshold_min&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceGroupTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const LIVE_RATE = 'LIVE_RATE';

    public const FLAT_RATE = 'FLAT_RATE';

    public const FREE_SHIPPING = 'FREE_SHIPPING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIVE_RATE,
            self::FLAT_RATE,
            self::FREE_SHIPPING
        ];
    }
}


