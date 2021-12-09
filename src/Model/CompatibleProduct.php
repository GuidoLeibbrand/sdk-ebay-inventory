<?php
/**
 * CompatibleProduct
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
 * CompatibleProduct Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify/indicate the motor vehicles that are compatible with the corresponding inventory item.
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompatibleProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompatibleProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'compatibilityProperties' => '\ld\php\sdkEbayInventory\Model\NameValueList[]',
        'notes' => 'string',
        'productFamilyProperties' => '\ld\php\sdkEbayInventory\Model\ProductFamilyProperties',
        'productIdentifier' => '\ld\php\sdkEbayInventory\Model\ProductIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'compatibilityProperties' => null,
        'notes' => null,
        'productFamilyProperties' => null,
        'productIdentifier' => null
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
        'compatibilityProperties' => 'compatibilityProperties',
        'notes' => 'notes',
        'productFamilyProperties' => 'productFamilyProperties',
        'productIdentifier' => 'productIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compatibilityProperties' => 'setCompatibilityProperties',
        'notes' => 'setNotes',
        'productFamilyProperties' => 'setProductFamilyProperties',
        'productIdentifier' => 'setProductIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compatibilityProperties' => 'getCompatibilityProperties',
        'notes' => 'getNotes',
        'productFamilyProperties' => 'getProductFamilyProperties',
        'productIdentifier' => 'getProductIdentifier'
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
        $this->container['compatibilityProperties'] = $data['compatibilityProperties'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['productFamilyProperties'] = $data['productFamilyProperties'] ?? null;
        $this->container['productIdentifier'] = $data['productIdentifier'] ?? null;
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
     * Gets compatibilityProperties
     *
     * @return \ld\php\sdkEbayInventory\Model\NameValueList[]|null
     */
    public function getCompatibilityProperties()
    {
        return $this->container['compatibilityProperties'];
    }

    /**
     * Sets compatibilityProperties
     *
     * @param \ld\php\sdkEbayInventory\Model\NameValueList[]|null $compatibilityProperties This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the <strong>name</strong> field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or 'engine') will be identified, and the <strong>value</strong> field will be used to identify the value of each aspect. The <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties\">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues\">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names. Below is an example of identifying one motor vehicle using the <strong>compatibilityProperties</strong> container:<br><br><code>&quot;compatibilityProperties&quot; : &#91;<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;engine&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L Turbocharged&quot;<br>&nbsp;&nbsp;&#125;<br>&#93;</code><br><br>Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br/><br/><span class=\"tablenote\"> <strong>Note:</strong> The <strong>productFamilyProperties</strong> container is in the process of being deprecated and will no longer be supported in February of 2021, so if you are a new user of <strong>createOrReplaceProductCompatibility</strong>, you should use the <strong>compatibilityProperties</strong> container instead, and if you are already integrated and using the <strong>productFamilyProperties</strong> container, you should make plans to migrate to <strong>compatibilityProperties</strong>. The <strong>productFamilyProperties</strong> and <strong>compatibilityProperties</strong> containers may not be used together or the call will fail.</span>
     *
     * @return self
     */
    public function setCompatibilityProperties($compatibilityProperties)
    {
        $this->container['compatibilityProperties'] = $compatibilityProperties;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes This field is optionally used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information. This field will only be returned if specified by the seller.<br/><br/><strong>Max Length</strong>: 500<br/>
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets productFamilyProperties
     *
     * @return \ld\php\sdkEbayInventory\Model\ProductFamilyProperties|null
     */
    public function getProductFamilyProperties()
    {
        return $this->container['productFamilyProperties'];
    }

    /**
     * Sets productFamilyProperties
     *
     * @param \ld\php\sdkEbayInventory\Model\ProductFamilyProperties|null $productFamilyProperties productFamilyProperties
     *
     * @return self
     */
    public function setProductFamilyProperties($productFamilyProperties)
    {
        $this->container['productFamilyProperties'] = $productFamilyProperties;

        return $this;
    }

    /**
     * Gets productIdentifier
     *
     * @return \ld\php\sdkEbayInventory\Model\ProductIdentifier|null
     */
    public function getProductIdentifier()
    {
        return $this->container['productIdentifier'];
    }

    /**
     * Sets productIdentifier
     *
     * @param \ld\php\sdkEbayInventory\Model\ProductIdentifier|null $productIdentifier productIdentifier
     *
     * @return self
     */
    public function setProductIdentifier($productIdentifier)
    {
        $this->container['productIdentifier'] = $productIdentifier;

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

