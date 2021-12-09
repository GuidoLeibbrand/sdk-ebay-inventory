<?php
/**
 * ListingPolicies
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
 * ListingPolicies Class Doc Comment
 *
 * @category Class
 * @description This type is used to identify the payment, return, and fulfillment business policies that will be, or are associated with the listing. Every published offer must have a payment, return, and fulfillment business policy associated with it. This type is also used to override the shipping costs of one or more shipping service options that are associated with the fulfillment policy, to enable eBay Plus eligibility for a listing, or to enable the Best Offer feature on the listing.
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListingPolicies implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingPolicies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bestOfferTerms' => '\ld\php\sdkEbayInventory\Model\BestOffer',
        'eBayPlusIfEligible' => 'bool',
        'fulfillmentPolicyId' => 'string',
        'paymentPolicyId' => 'string',
        'returnPolicyId' => 'string',
        'shippingCostOverrides' => '\ld\php\sdkEbayInventory\Model\ShippingCostOverride[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bestOfferTerms' => null,
        'eBayPlusIfEligible' => null,
        'fulfillmentPolicyId' => null,
        'paymentPolicyId' => null,
        'returnPolicyId' => null,
        'shippingCostOverrides' => null
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
        'bestOfferTerms' => 'bestOfferTerms',
        'eBayPlusIfEligible' => 'eBayPlusIfEligible',
        'fulfillmentPolicyId' => 'fulfillmentPolicyId',
        'paymentPolicyId' => 'paymentPolicyId',
        'returnPolicyId' => 'returnPolicyId',
        'shippingCostOverrides' => 'shippingCostOverrides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bestOfferTerms' => 'setBestOfferTerms',
        'eBayPlusIfEligible' => 'setEBayPlusIfEligible',
        'fulfillmentPolicyId' => 'setFulfillmentPolicyId',
        'paymentPolicyId' => 'setPaymentPolicyId',
        'returnPolicyId' => 'setReturnPolicyId',
        'shippingCostOverrides' => 'setShippingCostOverrides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bestOfferTerms' => 'getBestOfferTerms',
        'eBayPlusIfEligible' => 'getEBayPlusIfEligible',
        'fulfillmentPolicyId' => 'getFulfillmentPolicyId',
        'paymentPolicyId' => 'getPaymentPolicyId',
        'returnPolicyId' => 'getReturnPolicyId',
        'shippingCostOverrides' => 'getShippingCostOverrides'
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
        $this->container['bestOfferTerms'] = $data['bestOfferTerms'] ?? null;
        $this->container['eBayPlusIfEligible'] = $data['eBayPlusIfEligible'] ?? null;
        $this->container['fulfillmentPolicyId'] = $data['fulfillmentPolicyId'] ?? null;
        $this->container['paymentPolicyId'] = $data['paymentPolicyId'] ?? null;
        $this->container['returnPolicyId'] = $data['returnPolicyId'] ?? null;
        $this->container['shippingCostOverrides'] = $data['shippingCostOverrides'] ?? null;
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
     * Gets bestOfferTerms
     *
     * @return \ld\php\sdkEbayInventory\Model\BestOffer|null
     */
    public function getBestOfferTerms()
    {
        return $this->container['bestOfferTerms'];
    }

    /**
     * Sets bestOfferTerms
     *
     * @param \ld\php\sdkEbayInventory\Model\BestOffer|null $bestOfferTerms bestOfferTerms
     *
     * @return self
     */
    public function setBestOfferTerms($bestOfferTerms)
    {
        $this->container['bestOfferTerms'] = $bestOfferTerms;

        return $this;
    }

    /**
     * Gets eBayPlusIfEligible
     *
     * @return bool|null
     */
    public function getEBayPlusIfEligible()
    {
        return $this->container['eBayPlusIfEligible'];
    }

    /**
     * Sets eBayPlusIfEligible
     *
     * @param bool|null $eBayPlusIfEligible This field is included in an offer and set to <code>true</code> if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers must have an eBay Plus subscription to be eligible to receive the benefits of this program, which are free, next-day delivery, as well as free returns.<br><br>Currently, this program is only available on the Germany and Australian sites.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setEBayPlusIfEligible($eBayPlusIfEligible)
    {
        $this->container['eBayPlusIfEligible'] = $eBayPlusIfEligible;

        return $this;
    }

    /**
     * Gets fulfillmentPolicyId
     *
     * @return string|null
     */
    public function getFulfillmentPolicyId()
    {
        return $this->container['fulfillmentPolicyId'];
    }

    /**
     * Sets fulfillmentPolicyId
     *
     * @param string|null $fulfillmentPolicyId This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the fulfillment business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings. The seller may also want to review the shipping service costs in the fulfillment policy, and that seller might decide to override the shipping costs for one or more shipping service options by using the <strong>shippingCostOverrides</strong> container.<br/><br/>Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getFulfillmentPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a fulfillment policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setFulfillmentPolicyId($fulfillmentPolicyId)
    {
        $this->container['fulfillmentPolicyId'] = $fulfillmentPolicyId;

        return $this;
    }

    /**
     * Gets paymentPolicyId
     *
     * @return string|null
     */
    public function getPaymentPolicyId()
    {
        return $this->container['paymentPolicyId'];
    }

    /**
     * Sets paymentPolicyId
     *
     * @param string|null $paymentPolicyId This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the payment business policy to make sure that it is compatible with the marketplace and listing category before assigning it to the offer.<br /><br />Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all payment policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getPaymentPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a payment policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setPaymentPolicyId($paymentPolicyId)
    {
        $this->container['paymentPolicyId'] = $paymentPolicyId;

        return $this;
    }

    /**
     * Gets returnPolicyId
     *
     * @return string|null
     */
    public function getReturnPolicyId()
    {
        return $this->container['returnPolicyId'];
    }

    /**
     * Sets returnPolicyId
     *
     * @param string|null $returnPolicyId This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the return business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings.<br/><br/>Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getReturnPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a return policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setReturnPolicyId($returnPolicyId)
    {
        $this->container['returnPolicyId'] = $returnPolicyId;

        return $this;
    }

    /**
     * Gets shippingCostOverrides
     *
     * @return \ld\php\sdkEbayInventory\Model\ShippingCostOverride[]|null
     */
    public function getShippingCostOverrides()
    {
        return $this->container['shippingCostOverrides'];
    }

    /**
     * Sets shippingCostOverrides
     *
     * @param \ld\php\sdkEbayInventory\Model\ShippingCostOverride[]|null $shippingCostOverrides This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs of a specific domestic or international shipping service option, the seller must know the priority/order of that shipping service in the fulfillment listing policy. The name of a shipping service option can be found in the <strong>shippingOptions.shippingServices.shippingServiceCode</strong> field of the fulfillment policy, and the priority/order of that shipping service option is found in the <strong>shippingOptions.shippingServices.sortOrderId</strong> field. Both of these values can be retrieved by searching for that fulfillment policy with the <strong>getFulfillmentPolicies</strong> or <strong>getFulfillmentPolicyByName</strong> calls of the <strong>Account API</strong>. The <strong>shippingCostOverrides.priority</strong> value should match the <strong>shippingOptions.shippingServices.sortOrderId</strong> in order to override the shipping costs for that shipping service option. The seller must also ensure that the <strong>shippingServiceType</strong> value is set to <code>DOMESTIC</code> to override a domestic shipping service option, or to <code>INTERNATIONAL</code> to override an international shipping service option.<br/><br/>A separate <strong>ShippingCostOverrides</strong> node is needed for each shipping service option whose costs are being overridden. All defined fields of the <strong>shippingCostOverrides</strong> container should be included, even if the shipping costs and surcharge values are not changing.<br/><br/>The <strong>shippingCostOverrides</strong> container is returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if one or more shipping cost overrides are being applied to the fulfillment policy.
     *
     * @return self
     */
    public function setShippingCostOverrides($shippingCostOverrides)
    {
        $this->container['shippingCostOverrides'] = $shippingCostOverrides;

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


