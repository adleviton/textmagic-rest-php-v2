<?php
/**
 * SendPhoneVerificationCodeTFAInputObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TextMagic API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TextMagic\Models;

use \ArrayAccess;
use \TextMagic\ObjectSerializer;

/**
 * SendPhoneVerificationCodeTFAInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendPhoneVerificationCodeTFAInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SendPhoneVerificationCodeTFAInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone' => 'string',
        'workflowId' => 'string',
        'brand' => 'string',
        'codeLength' => 'int',
        'language' => 'string',
        'senderId' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'phone' => null,
        'workflowId' => null,
        'brand' => null,
        'codeLength' => null,
        'language' => null,
        'senderId' => null,
        'country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'phone' => 'phone',
        'workflowId' => 'workflowId',
        'brand' => 'brand',
        'codeLength' => 'codeLength',
        'language' => 'language',
        'senderId' => 'senderId',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone' => 'setPhone',
        'workflowId' => 'setWorkflowId',
        'brand' => 'setBrand',
        'codeLength' => 'setCodeLength',
        'language' => 'setLanguage',
        'senderId' => 'setSenderId',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone' => 'getPhone',
        'workflowId' => 'getWorkflowId',
        'brand' => 'getBrand',
        'codeLength' => 'getCodeLength',
        'language' => 'getLanguage',
        'senderId' => 'getSenderId',
        'country' => 'getCountry'
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
        return self::$swaggerModelName;
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['codeLength'] = isset($data['codeLength']) ? $data['codeLength'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['senderId'] = isset($data['senderId']) ? $data['senderId'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
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
     * @param string $phone Use the phone number in international E.164 format. If you need to pass a phone number in the local format, please use it with the **country** parameter to specify the origin country of the phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets workflowId
     *
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
     * Sets workflowId
     *
     * @param string $workflowId **Workflows**  The Verify API allows you to select the best workflow for your use case. This might depend on the type of verification taking place, your users' preference, or their geographical location. You can specify which workflow to use for each Verify API request by setting the workflowId field to an integer value 1-7. The details of each of these preset workflows are detailed below.  <br />  **Workflow 1 (Default Workflow): SMS -> TTS -> TTS**  Send PIN code by text message, follow up with two subsequent voice calls if the request wasn't already verified.  Send SMS to user with PIN code<br /> Wait for 60 seconds<br /> Call user and give TTS PIN code<br /> Wait for 60 seconds<br /> Call user and give TTS PIN code  Request expires after 300 seconds  <br />  **Workflow 2: SMS -> SMS -> TTS**   Send PIN code by text message, follow up with a second text message and finally a voice call if the request has not been verified.  Send SMS to user with PIN code<br /> Wait for 60 seconds<br /> Send SMS to user with PIN code<br /> Wait for 60 seconds<br /> Call user and give TTS PIN code  Request expires after 300 seconds  <br />  **Workflow 3: TTS -> TTS**  Call the user and speak a PIN code, follow up with a second call if the request wasn't already verified.  Call user and give TTS PIN code<br /> Wait for 60 seconds<br /> Call user and give TTS PIN code  Request expires after 300 seconds  <br />  **Workflow 4: SMS -> SMS**   Send PIN code by text message, follow up with a second text message if the code hasn't been verified.  Send SMS to user with PIN code<br /> Wait for 60 seconds<br /> Send SMS to user with PIN code<br /> Wait for 60 seconds  Request expires after 300 seconds  <br />  **Workflow 5: SMS -> TTS**   Send PIN code by text message, follow up with a voice call if the code hasn't been verified.  Send SMS to user with PIN code<br /> Wait for 60 seconds<br /> Call user and give TTS PIN code<br /> Wait for 60 seconds  Request expires after 300 seconds  <br />  **Workflow 6: SMS**   Send PIN code by text message once only.  Send SMS to user with PIN code  Request expires after 300 seconds  <br />  **Workflow 7: TTS**  Call the user and speak a PIN code once only.  Call user and give TTS PIN code  Request expires after 300 seconds
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand An alphanumeric string with up to 18 characters you can use to personalize the verification text message body, to help users identify your company or application name. For example: “Your TextMagic PIN is …”
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets codeLength
     *
     * @return int
     */
    public function getCodeLength()
    {
        return $this->container['codeLength'];
    }

    /**
     * Sets codeLength
     *
     * @param int $codeLength The length of the verification code. The value can be 4 or 6 characters.
     *
     * @return $this
     */
    public function setCodeLength($codeLength)
    {
        $this->container['codeLength'] = $codeLength;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language By default, the SMS or text-to-speech (TTS) voice message is generated in the locale that matches the number. For example, the text message or TTS message for a 33\\* number is sent in French. Use this parameter to explicitly control the language, accent, and gender used for the verification request. Choosing one of the following: `de-de`, `en-au`, `en-gb`, `en-us`, `en-in`, `es-es`, `es-mx`, `es-us`, `fr-ca`, `fr-fr`, `is-is`, `it-it`, `ja-jp`, `ko-kr`, `nl-nl`, `pl-pl`, `pt-pt`, `pt-br`, `ro-ro`, `ru-ru`, `sv-se`, `tr-tr`, `zh-cn` or `zh-tw`.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets senderId
     *
     * @return string
     */
    public function getSenderId()
    {
        return $this->container['senderId'];
    }

    /**
     * Sets senderId
     *
     * @param string $senderId One of the available [sender settings](https://my.textmagic.com/online/reply-options/) on your TextMagic account. If the specified sender setting type is not allowed for some destinations, a fallback default sender will be used to ensure message delivery. More info about known restrictions can be found [here](https://support.textmagic.com/article/how-to-understand-sender-setting-restrictions/).
     *
     * @return $this
     */
    public function setSenderId($senderId)
    {
        $this->container['senderId'] = $senderId;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The 2-letter ISO country code for the local phone number.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


