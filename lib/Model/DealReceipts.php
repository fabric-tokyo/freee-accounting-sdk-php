<?php
/**
 * DealReceipts
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * DealReceipts Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DealReceipts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'deal_receipts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => 'string',
        'description' => 'string',
        'file_src' => 'string',
        'id' => 'int',
        'issue_date' => 'string',
        'mime_type' => 'string',
        'origin' => 'string',
        'receipt_metadatum' => '\Freee\Accounting\Model\DealReceiptMetadatum',
        'status' => 'string',
        'user' => '\Freee\Accounting\Model\DealUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => null,
        'description' => null,
        'file_src' => null,
        'id' => null,
        'issue_date' => null,
        'mime_type' => null,
        'origin' => null,
        'receipt_metadatum' => null,
        'status' => null,
        'user' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at' => 'created_at',
        'description' => 'description',
        'file_src' => 'file_src',
        'id' => 'id',
        'issue_date' => 'issue_date',
        'mime_type' => 'mime_type',
        'origin' => 'origin',
        'receipt_metadatum' => 'receipt_metadatum',
        'status' => 'status',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'file_src' => 'setFileSrc',
        'id' => 'setId',
        'issue_date' => 'setIssueDate',
        'mime_type' => 'setMimeType',
        'origin' => 'setOrigin',
        'receipt_metadatum' => 'setReceiptMetadatum',
        'status' => 'setStatus',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'file_src' => 'getFileSrc',
        'id' => 'getId',
        'issue_date' => 'getIssueDate',
        'mime_type' => 'getMimeType',
        'origin' => 'getOrigin',
        'receipt_metadatum' => 'getReceiptMetadatum',
        'status' => 'getStatus',
        'user' => 'getUser'
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

    const ORIGIN_UNKNOWN = 'unknown';
    const ORIGIN_WEB = 'web';
    const ORIGIN_MOBILE_CAMERA = 'mobile_camera';
    const ORIGIN_MOBILE_ALBUM = 'mobile_album';
    const ORIGIN_SCANSNAP = 'scansnap';
    const ORIGIN_SCANNABLE = 'scannable';
    const ORIGIN_DROPBOX = 'dropbox';
    const ORIGIN_MAIL = 'mail';
    const ORIGIN_SAFETY_CONTACT_FILE = 'safety_contact_file';
    const ORIGIN_PUBLIC_API = 'public_api';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_DELETED = 'deleted';
    const STATUS_IGNORED = 'ignored';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_UNKNOWN,
            self::ORIGIN_WEB,
            self::ORIGIN_MOBILE_CAMERA,
            self::ORIGIN_MOBILE_ALBUM,
            self::ORIGIN_SCANSNAP,
            self::ORIGIN_SCANNABLE,
            self::ORIGIN_DROPBOX,
            self::ORIGIN_MAIL,
            self::ORIGIN_SAFETY_CONTACT_FILE,
            self::ORIGIN_PUBLIC_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONFIRMED,
            self::STATUS_DELETED,
            self::STATUS_IGNORED,
        ];
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['file_src'] = $data['file_src'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['mime_type'] = $data['mime_type'] ?? null;
        $this->container['origin'] = $data['origin'] ?? null;
        $this->container['receipt_metadatum'] = $data['receipt_metadatum'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['file_src'] === null) {
            $invalidProperties[] = "'file_src' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['mime_type'] === null) {
            $invalidProperties[] = "'mime_type' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'origin', must be one of '%s'",
                $this->container['origin'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at 作成日時（ISO8601形式）
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description メモ
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets file_src
     *
     * @return string
     * @deprecated
     */
    public function getFileSrc()
    {
        return $this->container['file_src'];
    }

    /**
     * Sets file_src
     *
     * @param string $file_src ファイルのダウンロードURL（freeeにログインした状態でのみ閲覧可能です。） <br> <br> file_srcは廃止予定の属性になります。<br> file_srcに替わり、証憑ファイル（ファイルボックスのファイル）のダウンロード APIをご利用ください。<br> 証憑ファイル（ファイルボックスのファイル）のダウンロードAPIを利用することで、以下のようになります。 <ul>   <li>アプリケーション利用者はfreee APIアプリケーションにログインしていれば、証憑ダウンロード毎にfreeeに改めてログインすることなくファイルが参照できるようになります。</li> </ul>
     *
     * @return self
     * @deprecated
     */
    public function setFileSrc($file_src)
    {
        $this->container['file_src'] = $file_src;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 証憑ファイルID（ファイルボックスのファイルID）
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling DealReceipts., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling DealReceipts., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string|null $issue_date 発生日
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type MIMEタイプ
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin アップロード元種別
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'origin', must be one of '%s'",
                    $origin,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets receipt_metadatum
     *
     * @return \Freee\Accounting\Model\DealReceiptMetadatum|null
     */
    public function getReceiptMetadatum()
    {
        return $this->container['receipt_metadatum'];
    }

    /**
     * Sets receipt_metadatum
     *
     * @param \Freee\Accounting\Model\DealReceiptMetadatum|null $receipt_metadatum receipt_metadatum
     *
     * @return self
     */
    public function setReceiptMetadatum($receipt_metadatum)
    {
        $this->container['receipt_metadatum'] = $receipt_metadatum;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status ステータス(confirmed:確認済み、deleted:削除済み、ignored:無視)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Freee\Accounting\Model\DealUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Freee\Accounting\Model\DealUser $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


