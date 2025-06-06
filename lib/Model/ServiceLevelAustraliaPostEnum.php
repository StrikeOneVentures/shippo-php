<?php
/**
 * ServiceLevelAustraliaPostEnum
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
 * ServiceLevelAustraliaPostEnum Class Doc Comment
 *
 * @category Class
 * @description |Token | Service name| |:---|:---| | australia_post_express_post | Express Post| | australia_post_parcel_post | Parcel Post| | australia_post_pack_and_track_international | Pack and Track International| | australia_post_international_airmail | International Airmail| | australia_post_express_post_international | Express Post International| | australia_post_express_courier_international | Express Courier International| | australia_post_international_express | International Express| | australia_post_international_standard | International Standard| | australia_post_international_economy | International Economy| | australia_post_parcel_post_return | Parcel Post Return|
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceLevelAustraliaPostEnum
{
    /**
     * Possible values of this enum
     */
    public const AUSTRALIA_POST_EXPRESS_POST = 'australia_post_express_post';

    public const AUSTRALIA_POST_PARCEL_POST = 'australia_post_parcel_post';

    public const AUSTRALIA_POST_PACK_AND_TRACK_INTERNATIONAL = 'australia_post_pack_and_track_international';

    public const AUSTRALIA_POST_INTERNATIONAL_AIRMAIL = 'australia_post_international_airmail';

    public const AUSTRALIA_POST_EXPRESS_POST_INTERNATIONAL = 'australia_post_express_post_international';

    public const AUSTRALIA_POST_EXPRESS_COURIER_INTERNATIONAL = 'australia_post_express_courier_international';

    public const AUSTRALIA_POST_INTERNATIONAL_EXPRESS = 'australia_post_international_express';

    public const AUSTRALIA_POST_INTERNATIONAL_STANDARD = 'australia_post_international_standard';

    public const AUSTRALIA_POST_INTERNATIONAL_ECONOMY = 'australia_post_international_economy';

    public const AUSTRALIA_POST_PARCEL_POST_RETURN = 'australia_post_parcel_post_return';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUSTRALIA_POST_EXPRESS_POST,
            self::AUSTRALIA_POST_PARCEL_POST,
            self::AUSTRALIA_POST_PACK_AND_TRACK_INTERNATIONAL,
            self::AUSTRALIA_POST_INTERNATIONAL_AIRMAIL,
            self::AUSTRALIA_POST_EXPRESS_POST_INTERNATIONAL,
            self::AUSTRALIA_POST_EXPRESS_COURIER_INTERNATIONAL,
            self::AUSTRALIA_POST_INTERNATIONAL_EXPRESS,
            self::AUSTRALIA_POST_INTERNATIONAL_STANDARD,
            self::AUSTRALIA_POST_INTERNATIONAL_ECONOMY,
            self::AUSTRALIA_POST_PARCEL_POST_RETURN
        ];
    }
}


