<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/asset_types.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A dynamic jobs asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.DynamicJobsAsset</code>
 */
class DynamicJobsAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Job ID which can be any sequence of letters and digits, and must
     * be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job_id = '';
    /**
     * Location ID which can be any sequence of letters and digits. The ID
     * sequence (job ID + location ID) must be unique.
     *
     * Generated from protobuf field <code>string location_id = 2;</code>
     */
    protected $location_id = '';
    /**
     * Required. Job title, for example, Software engineer. Required.
     *
     * Generated from protobuf field <code>string job_title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job_title = '';
    /**
     * Job subtitle, for example, Level II.
     *
     * Generated from protobuf field <code>string job_subtitle = 4;</code>
     */
    protected $job_subtitle = '';
    /**
     * Description, for example, Apply your technical skills.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 6;</code>
     */
    protected $image_url = '';
    /**
     * Job category, for example, Technical.
     *
     * Generated from protobuf field <code>string job_category = 7;</code>
     */
    protected $job_category = '';
    /**
     * Contextual keywords, for example, Software engineering job.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 8;</code>
     */
    private $contextual_keywords;
    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
     *
     * Generated from protobuf field <code>string address = 9;</code>
     */
    protected $address = '';
    /**
     * Salary, for example, $100,000.
     *
     * Generated from protobuf field <code>string salary = 10;</code>
     */
    protected $salary = '';
    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 11;</code>
     */
    protected $android_app_link = '';
    /**
     * Similar job IDs, for example, 1275.
     *
     * Generated from protobuf field <code>repeated string similar_job_ids = 12;</code>
     */
    private $similar_job_ids;
    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     */
    protected $ios_app_link = '';
    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     */
    protected $ios_app_store_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_id
     *           Required. Job ID which can be any sequence of letters and digits, and must
     *           be unique and match the values of remarketing tag. Required.
     *     @type string $location_id
     *           Location ID which can be any sequence of letters and digits. The ID
     *           sequence (job ID + location ID) must be unique.
     *     @type string $job_title
     *           Required. Job title, for example, Software engineer. Required.
     *     @type string $job_subtitle
     *           Job subtitle, for example, Level II.
     *     @type string $description
     *           Description, for example, Apply your technical skills.
     *     @type string $image_url
     *           Image URL, for example, http://www.example.com/image.png. The image will
     *           not be uploaded as image asset.
     *     @type string $job_category
     *           Job category, for example, Technical.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $contextual_keywords
     *           Contextual keywords, for example, Software engineering job.
     *     @type string $address
     *           Address which can be specified in one of the following formats.
     *           (1) City, state, code, country, for example, Mountain View, CA, USA.
     *           (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     *           (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
     *     @type string $salary
     *           Salary, for example, $100,000.
     *     @type string $android_app_link
     *           Android deep link, for example,
     *           android-app://com.example.android/http/example.com/gizmos?1234.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $similar_job_ids
     *           Similar job IDs, for example, 1275.
     *     @type string $ios_app_link
     *           iOS deep link, for example, exampleApp://content/page.
     *     @type int|string $ios_app_store_id
     *           iOS app store ID. This is used to check if the user has the app installed
     *           on their device before deep linking. If this field is set, then the
     *           ios_app_link field must also be present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Job ID which can be any sequence of letters and digits, and must
     * be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Required. Job ID which can be any sequence of letters and digits, and must
     * be unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Location ID which can be any sequence of letters and digits. The ID
     * sequence (job ID + location ID) must be unique.
     *
     * Generated from protobuf field <code>string location_id = 2;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Location ID which can be any sequence of letters and digits. The ID
     * sequence (job ID + location ID) must be unique.
     *
     * Generated from protobuf field <code>string location_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

    /**
     * Required. Job title, for example, Software engineer. Required.
     *
     * Generated from protobuf field <code>string job_title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Required. Job title, for example, Software engineer. Required.
     *
     * Generated from protobuf field <code>string job_title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title = $var;

        return $this;
    }

    /**
     * Job subtitle, for example, Level II.
     *
     * Generated from protobuf field <code>string job_subtitle = 4;</code>
     * @return string
     */
    public function getJobSubtitle()
    {
        return $this->job_subtitle;
    }

    /**
     * Job subtitle, for example, Level II.
     *
     * Generated from protobuf field <code>string job_subtitle = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobSubtitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_subtitle = $var;

        return $this;
    }

    /**
     * Description, for example, Apply your technical skills.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description, for example, Apply your technical skills.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 6;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Job category, for example, Technical.
     *
     * Generated from protobuf field <code>string job_category = 7;</code>
     * @return string
     */
    public function getJobCategory()
    {
        return $this->job_category;
    }

    /**
     * Job category, for example, Technical.
     *
     * Generated from protobuf field <code>string job_category = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setJobCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_category = $var;

        return $this;
    }

    /**
     * Contextual keywords, for example, Software engineering job.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextualKeywords()
    {
        return $this->contextual_keywords;
    }

    /**
     * Contextual keywords, for example, Software engineering job.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContextualKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contextual_keywords = $arr;

        return $this;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
     *
     * Generated from protobuf field <code>string address = 9;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
     *
     * Generated from protobuf field <code>string address = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Salary, for example, $100,000.
     *
     * Generated from protobuf field <code>string salary = 10;</code>
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Salary, for example, $100,000.
     *
     * Generated from protobuf field <code>string salary = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSalary($var)
    {
        GPBUtil::checkString($var, True);
        $this->salary = $var;

        return $this;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 11;</code>
     * @return string
     */
    public function getAndroidAppLink()
    {
        return $this->android_app_link;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAndroidAppLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_app_link = $var;

        return $this;
    }

    /**
     * Similar job IDs, for example, 1275.
     *
     * Generated from protobuf field <code>repeated string similar_job_ids = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimilarJobIds()
    {
        return $this->similar_job_ids;
    }

    /**
     * Similar job IDs, for example, 1275.
     *
     * Generated from protobuf field <code>repeated string similar_job_ids = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSimilarJobIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->similar_job_ids = $arr;

        return $this;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     * @return string
     */
    public function getIosAppLink()
    {
        return $this->ios_app_link;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setIosAppLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->ios_app_link = $var;

        return $this;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     * @return int|string
     */
    public function getIosAppStoreId()
    {
        return $this->ios_app_store_id;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIosAppStoreId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ios_app_store_id = $var;

        return $this;
    }

}

