<?php
/**
 * OfferPriceQuantity
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ld\php\sdkEbayInventory\Model;

use \ArrayAccess;
use \ld\php\sdkEbayInventory\ObjectSerializer;

/**
 * OfferPriceQuantity Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;offers&lt;/strong&gt; container in a &lt;strong&gt;Bulk Update Price and Quantity&lt;/strong&gt; call to update the current price and/or quantity of one or more offers associated with a specific inventory item.
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OfferPriceQuantity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferPriceQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availableQuantity' => 'int',
        'offerId' => 'string',
        'price' => '\ld\php\sdkEbayInventory\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availableQuantity' => 'int32',
        'offerId' => null,
        'price' => null
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
        'availableQuantity' => 'availableQuantity',
        'offerId' => 'offerId',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availableQuantity' => 'setAvailableQuantity',
        'offerId' => 'setOfferId',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availableQuantity' => 'getAvailableQuantity',
        'offerId' => 'getOfferId',
        'price' => 'getPrice'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['availableQuantity'] = $data['availableQuantity'] ?? null;
        $this->container['offerId'] = $data['offerId'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
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
     * Gets availableQuantity
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['availableQuantity'];
    }

    /**
     * Sets availableQuantity
     *
     * @param int|null $availableQuantity This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding <strong>offerId</strong> value). Either the <strong>availableQuantity</strong> field or the <strong>price</strong> container is required, but not necessarily both.
     *
     * @return self
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->container['availableQuantity'] = $availableQuantity;

        return $this;
    }

    /**
     * Gets offerId
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId This field is the unique identifier of the offer. If an <strong>offers</strong> container is used to update one or more offers associated to a specific inventory item, the <strong>offerId</strong> value is required in order to identify the offer to update with a modified price and/or quantity.<br/><br/>The seller can run a <strong>getOffers</strong> call (passing in the correct SKU value as a query parameter) to retrieve <strong>offerId</strong> values for offers associated with the SKU.
     *
     * @return self
     */
    public function setOfferId($offerId)
    {
        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \ld\php\sdkEbayInventory\Model\Amount|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \ld\php\sdkEbayInventory\Model\Amount|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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

