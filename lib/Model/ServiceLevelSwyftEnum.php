<?php
/**
 * ServiceLevelSwyftEnum
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
 * ServiceLevelSwyftEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | same_day | Next Day| | next_day | Next Day|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelSwyftEnum
{
    /**
     * Possible values of this enum
     */
    public const SAME_DAY = 'same_day';

    public const NEXT_DAY = 'next_day';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SAME_DAY,
            self::NEXT_DAY
        ];
    }
}


