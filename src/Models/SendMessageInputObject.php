<?php
/**
 * SendMessageInputObject
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
 * Swagger Codegen version: 2.4.8
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
 * SendMessageInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendMessageInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SendMessageInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'templateId' => 'int',
        'sendingTime' => 'int',
        'sendingDateTime' => 'string',
        'sendingTimezone' => 'string',
        'contacts' => 'string',
        'lists' => 'string',
        'phones' => 'string',
        'cutExtra' => 'bool',
        'partsCount' => 'int',
        'referenceId' => 'int',
        'from' => 'string',
        'rrule' => 'string',
        'createChat' => 'bool',
        'tts' => 'bool',
        'local' => 'bool',
        'localCountry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'templateId' => null,
        'sendingTime' => null,
        'sendingDateTime' => null,
        'sendingTimezone' => null,
        'contacts' => null,
        'lists' => null,
        'phones' => null,
        'cutExtra' => null,
        'partsCount' => null,
        'referenceId' => null,
        'from' => null,
        'rrule' => null,
        'createChat' => null,
        'tts' => null,
        'local' => null,
        'localCountry' => null
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
        'text' => 'text',
        'templateId' => 'templateId',
        'sendingTime' => 'sendingTime',
        'sendingDateTime' => 'sendingDateTime',
        'sendingTimezone' => 'sendingTimezone',
        'contacts' => 'contacts',
        'lists' => 'lists',
        'phones' => 'phones',
        'cutExtra' => 'cutExtra',
        'partsCount' => 'partsCount',
        'referenceId' => 'referenceId',
        'from' => 'from',
        'rrule' => 'rrule',
        'createChat' => 'createChat',
        'tts' => 'tts',
        'local' => 'local',
        'localCountry' => 'localCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'templateId' => 'setTemplateId',
        'sendingTime' => 'setSendingTime',
        'sendingDateTime' => 'setSendingDateTime',
        'sendingTimezone' => 'setSendingTimezone',
        'contacts' => 'setContacts',
        'lists' => 'setLists',
        'phones' => 'setPhones',
        'cutExtra' => 'setCutExtra',
        'partsCount' => 'setPartsCount',
        'referenceId' => 'setReferenceId',
        'from' => 'setFrom',
        'rrule' => 'setRrule',
        'createChat' => 'setCreateChat',
        'tts' => 'setTts',
        'local' => 'setLocal',
        'localCountry' => 'setLocalCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'templateId' => 'getTemplateId',
        'sendingTime' => 'getSendingTime',
        'sendingDateTime' => 'getSendingDateTime',
        'sendingTimezone' => 'getSendingTimezone',
        'contacts' => 'getContacts',
        'lists' => 'getLists',
        'phones' => 'getPhones',
        'cutExtra' => 'getCutExtra',
        'partsCount' => 'getPartsCount',
        'referenceId' => 'getReferenceId',
        'from' => 'getFrom',
        'rrule' => 'getRrule',
        'createChat' => 'getCreateChat',
        'tts' => 'getTts',
        'local' => 'getLocal',
        'localCountry' => 'getLocalCountry'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['sendingTime'] = isset($data['sendingTime']) ? $data['sendingTime'] : null;
        $this->container['sendingDateTime'] = isset($data['sendingDateTime']) ? $data['sendingDateTime'] : null;
        $this->container['sendingTimezone'] = isset($data['sendingTimezone']) ? $data['sendingTimezone'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['lists'] = isset($data['lists']) ? $data['lists'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['cutExtra'] = isset($data['cutExtra']) ? $data['cutExtra'] : false;
        $this->container['partsCount'] = isset($data['partsCount']) ? $data['partsCount'] : null;
        $this->container['referenceId'] = isset($data['referenceId']) ? $data['referenceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['rrule'] = isset($data['rrule']) ? $data['rrule'] : null;
        $this->container['createChat'] = isset($data['createChat']) ? $data['createChat'] : false;
        $this->container['tts'] = isset($data['tts']) ? $data['tts'] : false;
        $this->container['local'] = isset($data['local']) ? $data['local'] : false;
        $this->container['localCountry'] = isset($data['localCountry']) ? $data['localCountry'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['phones'] === null) {
            $invalidProperties[] = "'phones' can't be null";
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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Message text. Required if **template_id** is not set.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int $templateId Template used instead of message text. Required if **text** is not set.
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets sendingTime
     *
     * @return int
     */
    public function getSendingTime()
    {
        return $this->container['sendingTime'];
    }

    /**
     * Sets sendingTime
     *
     * @param int $sendingTime DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time in unix timestamp format. Default is now.
     *
     * @return $this
     */
    public function setSendingTime($sendingTime)
    {
        $this->container['sendingTime'] = $sendingTime;

        return $this;
    }

    /**
     * Gets sendingDateTime
     *
     * @return string
     */
    public function getSendingDateTime()
    {
        return $this->container['sendingDateTime'];
    }

    /**
     * Sets sendingDateTime
     *
     * @param string $sendingDateTime Sending time in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to **sendingTimezone**.
     *
     * @return $this
     */
    public function setSendingDateTime($sendingDateTime)
    {
        $this->container['sendingDateTime'] = $sendingDateTime;

        return $this;
    }

    /**
     * Gets sendingTimezone
     *
     * @return string
     */
    public function getSendingTimezone()
    {
        return $this->container['sendingTimezone'];
    }

    /**
     * Sets sendingTimezone
     *
     * @param string $sendingTimezone ID or ISO-name of timezone used for sending when sendingDateTime parameter is set. E.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent at May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is account timezone.
     *
     * @return $this
     */
    public function setSendingTimezone($sendingTimezone)
    {
        $this->container['sendingTimezone'] = $sendingTimezone;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param string $contacts Comma separated array of contact resources id message will be sent to.
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets lists
     *
     * @return string
     */
    public function getLists()
    {
        return $this->container['lists'];
    }

    /**
     * Sets lists
     *
     * @param string $lists Comma separated array of list resources id message will be sent to.
     *
     * @return $this
     */
    public function setLists($lists)
    {
        $this->container['lists'] = $lists;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string $phones Comma separated array of E.164 phone numbers message will be sent to.
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets cutExtra
     *
     * @return bool
     */
    public function getCutExtra()
    {
        return $this->container['cutExtra'];
    }

    /**
     * Sets cutExtra
     *
     * @param bool $cutExtra Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead.
     *
     * @return $this
     */
    public function setCutExtra($cutExtra)
    {
        $this->container['cutExtra'] = $cutExtra;

        return $this;
    }

    /**
     * Gets partsCount
     *
     * @return int
     */
    public function getPartsCount()
    {
        return $this->container['partsCount'];
    }

    /**
     * Sets partsCount
     *
     * @param int $partsCount Maximum message parts count (TextMagic allows sending 1 to 6 message parts).
     *
     * @return $this
     */
    public function setPartsCount($partsCount)
    {
        $this->container['partsCount'] = $partsCount;

        return $this;
    }

    /**
     * Gets referenceId
     *
     * @return int
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param int $referenceId Custom message reference id which can be used in your application infrastructure.
     *
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->container['referenceId'] = $referenceId;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from One of allowed Sender ID (phone number or alphanumeric sender ID). If specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](http://docs.textmagictesting.com/#tag/Sender-IDs).
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets rrule
     *
     * @return string
     */
    public function getRrule()
    {
        return $this->container['rrule'];
    }

    /**
     * Sets rrule
     *
     * @param string $rrule iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details.
     *
     * @return $this
     */
    public function setRrule($rrule)
    {
        $this->container['rrule'] = $rrule;

        return $this;
    }

    /**
     * Gets createChat
     *
     * @return bool
     */
    public function getCreateChat()
    {
        return $this->container['createChat'];
    }

    /**
     * Sets createChat
     *
     * @param bool $createChat Should sending method try to create new Chat(if not exist) with specified recipients.
     *
     * @return $this
     */
    public function setCreateChat($createChat)
    {
        $this->container['createChat'] = $createChat;

        return $this;
    }

    /**
     * Gets tts
     *
     * @return bool
     */
    public function getTts()
    {
        return $this->container['tts'];
    }

    /**
     * Sets tts
     *
     * @param bool $tts Send Text to Speech message.
     *
     * @return $this
     */
    public function setTts($tts)
    {
        $this->container['tts'] = $tts;

        return $this;
    }

    /**
     * Gets local
     *
     * @return bool
     */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
     * Sets local
     *
     * @param bool $local Treat phone numbers passed in \\'phones\\' field as local.
     *
     * @return $this
     */
    public function setLocal($local)
    {
        $this->container['local'] = $local;

        return $this;
    }

    /**
     * Gets localCountry
     *
     * @return string
     */
    public function getLocalCountry()
    {
        return $this->container['localCountry'];
    }

    /**
     * Sets localCountry
     *
     * @param string $localCountry 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is account country.
     *
     * @return $this
     */
    public function setLocalCountry($localCountry)
    {
        $this->container['localCountry'] = $localCountry;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


