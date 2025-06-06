<?php
/**
 * DistanceUnitEnum
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
 * DistanceUnitEnum Class Doc Comment
 *
 * @category Class
 * @description The measure unit used for length, width and height.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DistanceUnitEnum
{
    /**
     * Possible values of this enum
     */
    public const CM = 'cm';

    public const IN = 'in';

    public const FT = 'ft';

    public const M = 'm';

    public const MM = 'mm';

    public const YD = 'yd';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CM,
            self::IN,
            self::FT,
            self::M,
            self::MM,
            self::YD
        ];
    }
}


