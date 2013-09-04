<?php
/**
 * File for class MagentoStructShoppingCartInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartInfoEntity originally named shoppingCartInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartInfoEntity extends MagentoWsdlClass
{
	/**
	 * The store_id
	 * @var MagentoStructString
	 */
	public $store_id;
	/**
	 * The created_at
	 * @var MagentoStructString
	 */
	public $created_at;
	/**
	 * The updated_at
	 * @var MagentoStructString
	 */
	public $updated_at;
	/**
	 * The converted_at
	 * @var MagentoStructString
	 */
	public $converted_at;
	/**
	 * The quote_id
	 * @var MagentoStructInt
	 */
	public $quote_id;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * The is_virtual
	 * @var MagentoStructInt
	 */
	public $is_virtual;
	/**
	 * The is_multi_shipping
	 * @var MagentoStructInt
	 */
	public $is_multi_shipping;
	/**
	 * The items_count
	 * @var MagentoStructDouble
	 */
	public $items_count;
	/**
	 * The items_qty
	 * @var MagentoStructDouble
	 */
	public $items_qty;
	/**
	 * The orig_order_id
	 * @var MagentoStructString
	 */
	public $orig_order_id;
	/**
	 * The store_to_base_rate
	 * @var MagentoStructString
	 */
	public $store_to_base_rate;
	/**
	 * The store_to_quote_rate
	 * @var MagentoStructString
	 */
	public $store_to_quote_rate;
	/**
	 * The base_currency_code
	 * @var MagentoStructString
	 */
	public $base_currency_code;
	/**
	 * The store_currency_code
	 * @var MagentoStructString
	 */
	public $store_currency_code;
	/**
	 * The quote_currency_code
	 * @var MagentoStructString
	 */
	public $quote_currency_code;
	/**
	 * The grand_total
	 * @var MagentoStructString
	 */
	public $grand_total;
	/**
	 * The base_grand_total
	 * @var MagentoStructString
	 */
	public $base_grand_total;
	/**
	 * The checkout_method
	 * @var MagentoStructString
	 */
	public $checkout_method;
	/**
	 * The customer_id
	 * @var MagentoStructString
	 */
	public $customer_id;
	/**
	 * The customer_tax_class_id
	 * @var MagentoStructString
	 */
	public $customer_tax_class_id;
	/**
	 * The customer_group_id
	 * @var MagentoStructInt
	 */
	public $customer_group_id;
	/**
	 * The customer_email
	 * @var MagentoStructString
	 */
	public $customer_email;
	/**
	 * The customer_prefix
	 * @var MagentoStructString
	 */
	public $customer_prefix;
	/**
	 * The customer_firstname
	 * @var MagentoStructString
	 */
	public $customer_firstname;
	/**
	 * The customer_middlename
	 * @var MagentoStructString
	 */
	public $customer_middlename;
	/**
	 * The customer_lastname
	 * @var MagentoStructString
	 */
	public $customer_lastname;
	/**
	 * The customer_suffix
	 * @var MagentoStructString
	 */
	public $customer_suffix;
	/**
	 * The customer_note
	 * @var MagentoStructString
	 */
	public $customer_note;
	/**
	 * The customer_note_notify
	 * @var MagentoStructString
	 */
	public $customer_note_notify;
	/**
	 * The customer_is_guest
	 * @var MagentoStructString
	 */
	public $customer_is_guest;
	/**
	 * The applied_rule_ids
	 * @var MagentoStructString
	 */
	public $applied_rule_ids;
	/**
	 * The reserved_order_id
	 * @var MagentoStructString
	 */
	public $reserved_order_id;
	/**
	 * The password_hash
	 * @var MagentoStructString
	 */
	public $password_hash;
	/**
	 * The coupon_code
	 * @var MagentoStructString
	 */
	public $coupon_code;
	/**
	 * The global_currency_code
	 * @var MagentoStructString
	 */
	public $global_currency_code;
	/**
	 * The base_to_global_rate
	 * @var MagentoStructDouble
	 */
	public $base_to_global_rate;
	/**
	 * The base_to_quote_rate
	 * @var MagentoStructDouble
	 */
	public $base_to_quote_rate;
	/**
	 * The customer_taxvat
	 * @var MagentoStructString
	 */
	public $customer_taxvat;
	/**
	 * The customer_gender
	 * @var MagentoStructString
	 */
	public $customer_gender;
	/**
	 * The subtotal
	 * @var MagentoStructDouble
	 */
	public $subtotal;
	/**
	 * The base_subtotal
	 * @var MagentoStructDouble
	 */
	public $base_subtotal;
	/**
	 * The subtotal_with_discount
	 * @var MagentoStructDouble
	 */
	public $subtotal_with_discount;
	/**
	 * The base_subtotal_with_discount
	 * @var MagentoStructDouble
	 */
	public $base_subtotal_with_discount;
	/**
	 * The ext_shipping_info
	 * @var MagentoStructString
	 */
	public $ext_shipping_info;
	/**
	 * The gift_message_id
	 * @var MagentoStructString
	 */
	public $gift_message_id;
	/**
	 * The gift_message
	 * @var MagentoStructString
	 */
	public $gift_message;
	/**
	 * The customer_balance_amount_used
	 * @var MagentoStructDouble
	 */
	public $customer_balance_amount_used;
	/**
	 * The base_customer_balance_amount_used
	 * @var MagentoStructDouble
	 */
	public $base_customer_balance_amount_used;
	/**
	 * The use_customer_balance
	 * @var MagentoStructString
	 */
	public $use_customer_balance;
	/**
	 * The gift_cards_amount
	 * @var MagentoStructString
	 */
	public $gift_cards_amount;
	/**
	 * The base_gift_cards_amount
	 * @var MagentoStructString
	 */
	public $base_gift_cards_amount;
	/**
	 * The gift_cards_amount_used
	 * @var MagentoStructString
	 */
	public $gift_cards_amount_used;
	/**
	 * The use_reward_points
	 * @var MagentoStructString
	 */
	public $use_reward_points;
	/**
	 * The reward_points_balance
	 * @var MagentoStructString
	 */
	public $reward_points_balance;
	/**
	 * The base_reward_currency_amount
	 * @var MagentoStructString
	 */
	public $base_reward_currency_amount;
	/**
	 * The reward_currency_amount
	 * @var MagentoStructString
	 */
	public $reward_currency_amount;
	/**
	 * The shipping_address
	 * @var MagentoStructShoppingCartAddressEntity
	 */
	public $shipping_address;
	/**
	 * The billing_address
	 * @var MagentoStructShoppingCartAddressEntity
	 */
	public $billing_address;
	/**
	 * The items
	 * @var shoppingCartItemEntityArray
	 */
	public $items;
	/**
	 * The payment
	 * @var MagentoStructShoppingCartPaymentEntity
	 */
	public $payment;
	/**
	 * Constructor method for shoppingCartInfoEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_converted_at
	 * @param MagentoStructInt $_quote_id
	 * @param MagentoStructInt $_is_active
	 * @param MagentoStructInt $_is_virtual
	 * @param MagentoStructInt $_is_multi_shipping
	 * @param MagentoStructDouble $_items_count
	 * @param MagentoStructDouble $_items_qty
	 * @param MagentoStructString $_orig_order_id
	 * @param MagentoStructString $_store_to_base_rate
	 * @param MagentoStructString $_store_to_quote_rate
	 * @param MagentoStructString $_base_currency_code
	 * @param MagentoStructString $_store_currency_code
	 * @param MagentoStructString $_quote_currency_code
	 * @param MagentoStructString $_grand_total
	 * @param MagentoStructString $_base_grand_total
	 * @param MagentoStructString $_checkout_method
	 * @param MagentoStructString $_customer_id
	 * @param MagentoStructString $_customer_tax_class_id
	 * @param MagentoStructInt $_customer_group_id
	 * @param MagentoStructString $_customer_email
	 * @param MagentoStructString $_customer_prefix
	 * @param MagentoStructString $_customer_firstname
	 * @param MagentoStructString $_customer_middlename
	 * @param MagentoStructString $_customer_lastname
	 * @param MagentoStructString $_customer_suffix
	 * @param MagentoStructString $_customer_note
	 * @param MagentoStructString $_customer_note_notify
	 * @param MagentoStructString $_customer_is_guest
	 * @param MagentoStructString $_applied_rule_ids
	 * @param MagentoStructString $_reserved_order_id
	 * @param MagentoStructString $_password_hash
	 * @param MagentoStructString $_coupon_code
	 * @param MagentoStructString $_global_currency_code
	 * @param MagentoStructDouble $_base_to_global_rate
	 * @param MagentoStructDouble $_base_to_quote_rate
	 * @param MagentoStructString $_customer_taxvat
	 * @param MagentoStructString $_customer_gender
	 * @param MagentoStructDouble $_subtotal
	 * @param MagentoStructDouble $_base_subtotal
	 * @param MagentoStructDouble $_subtotal_with_discount
	 * @param MagentoStructDouble $_base_subtotal_with_discount
	 * @param MagentoStructString $_ext_shipping_info
	 * @param MagentoStructString $_gift_message_id
	 * @param MagentoStructString $_gift_message
	 * @param MagentoStructDouble $_customer_balance_amount_used
	 * @param MagentoStructDouble $_base_customer_balance_amount_used
	 * @param MagentoStructString $_use_customer_balance
	 * @param MagentoStructString $_gift_cards_amount
	 * @param MagentoStructString $_base_gift_cards_amount
	 * @param MagentoStructString $_gift_cards_amount_used
	 * @param MagentoStructString $_use_reward_points
	 * @param MagentoStructString $_reward_points_balance
	 * @param MagentoStructString $_base_reward_currency_amount
	 * @param MagentoStructString $_reward_currency_amount
	 * @param MagentoStructShoppingCartAddressEntity $_shipping_address
	 * @param MagentoStructShoppingCartAddressEntity $_billing_address
	 * @param shoppingCartItemEntityArray $_items
	 * @param MagentoStructShoppingCartPaymentEntity $_payment
	 * @return MagentoStructShoppingCartInfoEntity
	 */
	public function __construct($_store_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_converted_at = NULL,$_quote_id = NULL,$_is_active = NULL,$_is_virtual = NULL,$_is_multi_shipping = NULL,$_items_count = NULL,$_items_qty = NULL,$_orig_order_id = NULL,$_store_to_base_rate = NULL,$_store_to_quote_rate = NULL,$_base_currency_code = NULL,$_store_currency_code = NULL,$_quote_currency_code = NULL,$_grand_total = NULL,$_base_grand_total = NULL,$_checkout_method = NULL,$_customer_id = NULL,$_customer_tax_class_id = NULL,$_customer_group_id = NULL,$_customer_email = NULL,$_customer_prefix = NULL,$_customer_firstname = NULL,$_customer_middlename = NULL,$_customer_lastname = NULL,$_customer_suffix = NULL,$_customer_note = NULL,$_customer_note_notify = NULL,$_customer_is_guest = NULL,$_applied_rule_ids = NULL,$_reserved_order_id = NULL,$_password_hash = NULL,$_coupon_code = NULL,$_global_currency_code = NULL,$_base_to_global_rate = NULL,$_base_to_quote_rate = NULL,$_customer_taxvat = NULL,$_customer_gender = NULL,$_subtotal = NULL,$_base_subtotal = NULL,$_subtotal_with_discount = NULL,$_base_subtotal_with_discount = NULL,$_ext_shipping_info = NULL,$_gift_message_id = NULL,$_gift_message = NULL,$_customer_balance_amount_used = NULL,$_base_customer_balance_amount_used = NULL,$_use_customer_balance = NULL,$_gift_cards_amount = NULL,$_base_gift_cards_amount = NULL,$_gift_cards_amount_used = NULL,$_use_reward_points = NULL,$_reward_points_balance = NULL,$_base_reward_currency_amount = NULL,$_reward_currency_amount = NULL,$_shipping_address = NULL,$_billing_address = NULL,$_items = NULL,$_payment = NULL)
	{
		parent::__construct(array('store_id'=>$_store_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'converted_at'=>$_converted_at,'quote_id'=>$_quote_id,'is_active'=>$_is_active,'is_virtual'=>$_is_virtual,'is_multi_shipping'=>$_is_multi_shipping,'items_count'=>$_items_count,'items_qty'=>$_items_qty,'orig_order_id'=>$_orig_order_id,'store_to_base_rate'=>$_store_to_base_rate,'store_to_quote_rate'=>$_store_to_quote_rate,'base_currency_code'=>$_base_currency_code,'store_currency_code'=>$_store_currency_code,'quote_currency_code'=>$_quote_currency_code,'grand_total'=>$_grand_total,'base_grand_total'=>$_base_grand_total,'checkout_method'=>$_checkout_method,'customer_id'=>$_customer_id,'customer_tax_class_id'=>$_customer_tax_class_id,'customer_group_id'=>$_customer_group_id,'customer_email'=>$_customer_email,'customer_prefix'=>$_customer_prefix,'customer_firstname'=>$_customer_firstname,'customer_middlename'=>$_customer_middlename,'customer_lastname'=>$_customer_lastname,'customer_suffix'=>$_customer_suffix,'customer_note'=>$_customer_note,'customer_note_notify'=>$_customer_note_notify,'customer_is_guest'=>$_customer_is_guest,'applied_rule_ids'=>$_applied_rule_ids,'reserved_order_id'=>$_reserved_order_id,'password_hash'=>$_password_hash,'coupon_code'=>$_coupon_code,'global_currency_code'=>$_global_currency_code,'base_to_global_rate'=>$_base_to_global_rate,'base_to_quote_rate'=>$_base_to_quote_rate,'customer_taxvat'=>$_customer_taxvat,'customer_gender'=>$_customer_gender,'subtotal'=>$_subtotal,'base_subtotal'=>$_base_subtotal,'subtotal_with_discount'=>$_subtotal_with_discount,'base_subtotal_with_discount'=>$_base_subtotal_with_discount,'ext_shipping_info'=>$_ext_shipping_info,'gift_message_id'=>$_gift_message_id,'gift_message'=>$_gift_message,'customer_balance_amount_used'=>$_customer_balance_amount_used,'base_customer_balance_amount_used'=>$_base_customer_balance_amount_used,'use_customer_balance'=>$_use_customer_balance,'gift_cards_amount'=>$_gift_cards_amount,'base_gift_cards_amount'=>$_base_gift_cards_amount,'gift_cards_amount_used'=>$_gift_cards_amount_used,'use_reward_points'=>$_use_reward_points,'reward_points_balance'=>$_reward_points_balance,'base_reward_currency_amount'=>$_base_reward_currency_amount,'reward_currency_amount'=>$_reward_currency_amount,'shipping_address'=>$_shipping_address,'billing_address'=>$_billing_address,'items'=>$_items,'payment'=>$_payment));
	}
	/**
	 * Get store_id value
	 * @return MagentoStructString|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructString $_store_id the store_id
	 * @return MagentoStructString
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
	}
	/**
	 * Get created_at value
	 * @return MagentoStructString|null
	 */
	public function getCreated_at()
	{
		return $this->created_at;
	}
	/**
	 * Set created_at value
	 * @param MagentoStructString $_created_at the created_at
	 * @return MagentoStructString
	 */
	public function setCreated_at($_created_at)
	{
		return ($this->created_at = $_created_at);
	}
	/**
	 * Get updated_at value
	 * @return MagentoStructString|null
	 */
	public function getUpdated_at()
	{
		return $this->updated_at;
	}
	/**
	 * Set updated_at value
	 * @param MagentoStructString $_updated_at the updated_at
	 * @return MagentoStructString
	 */
	public function setUpdated_at($_updated_at)
	{
		return ($this->updated_at = $_updated_at);
	}
	/**
	 * Get converted_at value
	 * @return MagentoStructString|null
	 */
	public function getConverted_at()
	{
		return $this->converted_at;
	}
	/**
	 * Set converted_at value
	 * @param MagentoStructString $_converted_at the converted_at
	 * @return MagentoStructString
	 */
	public function setConverted_at($_converted_at)
	{
		return ($this->converted_at = $_converted_at);
	}
	/**
	 * Get quote_id value
	 * @return MagentoStructInt|null
	 */
	public function getQuote_id()
	{
		return $this->quote_id;
	}
	/**
	 * Set quote_id value
	 * @param MagentoStructInt $_quote_id the quote_id
	 * @return MagentoStructInt
	 */
	public function setQuote_id($_quote_id)
	{
		return ($this->quote_id = $_quote_id);
	}
	/**
	 * Get is_active value
	 * @return MagentoStructInt|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructInt $_is_active the is_active
	 * @return MagentoStructInt
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Get is_virtual value
	 * @return MagentoStructInt|null
	 */
	public function getIs_virtual()
	{
		return $this->is_virtual;
	}
	/**
	 * Set is_virtual value
	 * @param MagentoStructInt $_is_virtual the is_virtual
	 * @return MagentoStructInt
	 */
	public function setIs_virtual($_is_virtual)
	{
		return ($this->is_virtual = $_is_virtual);
	}
	/**
	 * Get is_multi_shipping value
	 * @return MagentoStructInt|null
	 */
	public function getIs_multi_shipping()
	{
		return $this->is_multi_shipping;
	}
	/**
	 * Set is_multi_shipping value
	 * @param MagentoStructInt $_is_multi_shipping the is_multi_shipping
	 * @return MagentoStructInt
	 */
	public function setIs_multi_shipping($_is_multi_shipping)
	{
		return ($this->is_multi_shipping = $_is_multi_shipping);
	}
	/**
	 * Get items_count value
	 * @return MagentoStructDouble|null
	 */
	public function getItems_count()
	{
		return $this->items_count;
	}
	/**
	 * Set items_count value
	 * @param MagentoStructDouble $_items_count the items_count
	 * @return MagentoStructDouble
	 */
	public function setItems_count($_items_count)
	{
		return ($this->items_count = $_items_count);
	}
	/**
	 * Get items_qty value
	 * @return MagentoStructDouble|null
	 */
	public function getItems_qty()
	{
		return $this->items_qty;
	}
	/**
	 * Set items_qty value
	 * @param MagentoStructDouble $_items_qty the items_qty
	 * @return MagentoStructDouble
	 */
	public function setItems_qty($_items_qty)
	{
		return ($this->items_qty = $_items_qty);
	}
	/**
	 * Get orig_order_id value
	 * @return MagentoStructString|null
	 */
	public function getOrig_order_id()
	{
		return $this->orig_order_id;
	}
	/**
	 * Set orig_order_id value
	 * @param MagentoStructString $_orig_order_id the orig_order_id
	 * @return MagentoStructString
	 */
	public function setOrig_order_id($_orig_order_id)
	{
		return ($this->orig_order_id = $_orig_order_id);
	}
	/**
	 * Get store_to_base_rate value
	 * @return MagentoStructString|null
	 */
	public function getStore_to_base_rate()
	{
		return $this->store_to_base_rate;
	}
	/**
	 * Set store_to_base_rate value
	 * @param MagentoStructString $_store_to_base_rate the store_to_base_rate
	 * @return MagentoStructString
	 */
	public function setStore_to_base_rate($_store_to_base_rate)
	{
		return ($this->store_to_base_rate = $_store_to_base_rate);
	}
	/**
	 * Get store_to_quote_rate value
	 * @return MagentoStructString|null
	 */
	public function getStore_to_quote_rate()
	{
		return $this->store_to_quote_rate;
	}
	/**
	 * Set store_to_quote_rate value
	 * @param MagentoStructString $_store_to_quote_rate the store_to_quote_rate
	 * @return MagentoStructString
	 */
	public function setStore_to_quote_rate($_store_to_quote_rate)
	{
		return ($this->store_to_quote_rate = $_store_to_quote_rate);
	}
	/**
	 * Get base_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getBase_currency_code()
	{
		return $this->base_currency_code;
	}
	/**
	 * Set base_currency_code value
	 * @param MagentoStructString $_base_currency_code the base_currency_code
	 * @return MagentoStructString
	 */
	public function setBase_currency_code($_base_currency_code)
	{
		return ($this->base_currency_code = $_base_currency_code);
	}
	/**
	 * Get store_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getStore_currency_code()
	{
		return $this->store_currency_code;
	}
	/**
	 * Set store_currency_code value
	 * @param MagentoStructString $_store_currency_code the store_currency_code
	 * @return MagentoStructString
	 */
	public function setStore_currency_code($_store_currency_code)
	{
		return ($this->store_currency_code = $_store_currency_code);
	}
	/**
	 * Get quote_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getQuote_currency_code()
	{
		return $this->quote_currency_code;
	}
	/**
	 * Set quote_currency_code value
	 * @param MagentoStructString $_quote_currency_code the quote_currency_code
	 * @return MagentoStructString
	 */
	public function setQuote_currency_code($_quote_currency_code)
	{
		return ($this->quote_currency_code = $_quote_currency_code);
	}
	/**
	 * Get grand_total value
	 * @return MagentoStructString|null
	 */
	public function getGrand_total()
	{
		return $this->grand_total;
	}
	/**
	 * Set grand_total value
	 * @param MagentoStructString $_grand_total the grand_total
	 * @return MagentoStructString
	 */
	public function setGrand_total($_grand_total)
	{
		return ($this->grand_total = $_grand_total);
	}
	/**
	 * Get base_grand_total value
	 * @return MagentoStructString|null
	 */
	public function getBase_grand_total()
	{
		return $this->base_grand_total;
	}
	/**
	 * Set base_grand_total value
	 * @param MagentoStructString $_base_grand_total the base_grand_total
	 * @return MagentoStructString
	 */
	public function setBase_grand_total($_base_grand_total)
	{
		return ($this->base_grand_total = $_base_grand_total);
	}
	/**
	 * Get checkout_method value
	 * @return MagentoStructString|null
	 */
	public function getCheckout_method()
	{
		return $this->checkout_method;
	}
	/**
	 * Set checkout_method value
	 * @param MagentoStructString $_checkout_method the checkout_method
	 * @return MagentoStructString
	 */
	public function setCheckout_method($_checkout_method)
	{
		return ($this->checkout_method = $_checkout_method);
	}
	/**
	 * Get customer_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_id()
	{
		return $this->customer_id;
	}
	/**
	 * Set customer_id value
	 * @param MagentoStructString $_customer_id the customer_id
	 * @return MagentoStructString
	 */
	public function setCustomer_id($_customer_id)
	{
		return ($this->customer_id = $_customer_id);
	}
	/**
	 * Get customer_tax_class_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_tax_class_id()
	{
		return $this->customer_tax_class_id;
	}
	/**
	 * Set customer_tax_class_id value
	 * @param MagentoStructString $_customer_tax_class_id the customer_tax_class_id
	 * @return MagentoStructString
	 */
	public function setCustomer_tax_class_id($_customer_tax_class_id)
	{
		return ($this->customer_tax_class_id = $_customer_tax_class_id);
	}
	/**
	 * Get customer_group_id value
	 * @return MagentoStructInt|null
	 */
	public function getCustomer_group_id()
	{
		return $this->customer_group_id;
	}
	/**
	 * Set customer_group_id value
	 * @param MagentoStructInt $_customer_group_id the customer_group_id
	 * @return MagentoStructInt
	 */
	public function setCustomer_group_id($_customer_group_id)
	{
		return ($this->customer_group_id = $_customer_group_id);
	}
	/**
	 * Get customer_email value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_email()
	{
		return $this->customer_email;
	}
	/**
	 * Set customer_email value
	 * @param MagentoStructString $_customer_email the customer_email
	 * @return MagentoStructString
	 */
	public function setCustomer_email($_customer_email)
	{
		return ($this->customer_email = $_customer_email);
	}
	/**
	 * Get customer_prefix value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_prefix()
	{
		return $this->customer_prefix;
	}
	/**
	 * Set customer_prefix value
	 * @param MagentoStructString $_customer_prefix the customer_prefix
	 * @return MagentoStructString
	 */
	public function setCustomer_prefix($_customer_prefix)
	{
		return ($this->customer_prefix = $_customer_prefix);
	}
	/**
	 * Get customer_firstname value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_firstname()
	{
		return $this->customer_firstname;
	}
	/**
	 * Set customer_firstname value
	 * @param MagentoStructString $_customer_firstname the customer_firstname
	 * @return MagentoStructString
	 */
	public function setCustomer_firstname($_customer_firstname)
	{
		return ($this->customer_firstname = $_customer_firstname);
	}
	/**
	 * Get customer_middlename value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_middlename()
	{
		return $this->customer_middlename;
	}
	/**
	 * Set customer_middlename value
	 * @param MagentoStructString $_customer_middlename the customer_middlename
	 * @return MagentoStructString
	 */
	public function setCustomer_middlename($_customer_middlename)
	{
		return ($this->customer_middlename = $_customer_middlename);
	}
	/**
	 * Get customer_lastname value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_lastname()
	{
		return $this->customer_lastname;
	}
	/**
	 * Set customer_lastname value
	 * @param MagentoStructString $_customer_lastname the customer_lastname
	 * @return MagentoStructString
	 */
	public function setCustomer_lastname($_customer_lastname)
	{
		return ($this->customer_lastname = $_customer_lastname);
	}
	/**
	 * Get customer_suffix value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_suffix()
	{
		return $this->customer_suffix;
	}
	/**
	 * Set customer_suffix value
	 * @param MagentoStructString $_customer_suffix the customer_suffix
	 * @return MagentoStructString
	 */
	public function setCustomer_suffix($_customer_suffix)
	{
		return ($this->customer_suffix = $_customer_suffix);
	}
	/**
	 * Get customer_note value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_note()
	{
		return $this->customer_note;
	}
	/**
	 * Set customer_note value
	 * @param MagentoStructString $_customer_note the customer_note
	 * @return MagentoStructString
	 */
	public function setCustomer_note($_customer_note)
	{
		return ($this->customer_note = $_customer_note);
	}
	/**
	 * Get customer_note_notify value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_note_notify()
	{
		return $this->customer_note_notify;
	}
	/**
	 * Set customer_note_notify value
	 * @param MagentoStructString $_customer_note_notify the customer_note_notify
	 * @return MagentoStructString
	 */
	public function setCustomer_note_notify($_customer_note_notify)
	{
		return ($this->customer_note_notify = $_customer_note_notify);
	}
	/**
	 * Get customer_is_guest value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_is_guest()
	{
		return $this->customer_is_guest;
	}
	/**
	 * Set customer_is_guest value
	 * @param MagentoStructString $_customer_is_guest the customer_is_guest
	 * @return MagentoStructString
	 */
	public function setCustomer_is_guest($_customer_is_guest)
	{
		return ($this->customer_is_guest = $_customer_is_guest);
	}
	/**
	 * Get applied_rule_ids value
	 * @return MagentoStructString|null
	 */
	public function getApplied_rule_ids()
	{
		return $this->applied_rule_ids;
	}
	/**
	 * Set applied_rule_ids value
	 * @param MagentoStructString $_applied_rule_ids the applied_rule_ids
	 * @return MagentoStructString
	 */
	public function setApplied_rule_ids($_applied_rule_ids)
	{
		return ($this->applied_rule_ids = $_applied_rule_ids);
	}
	/**
	 * Get reserved_order_id value
	 * @return MagentoStructString|null
	 */
	public function getReserved_order_id()
	{
		return $this->reserved_order_id;
	}
	/**
	 * Set reserved_order_id value
	 * @param MagentoStructString $_reserved_order_id the reserved_order_id
	 * @return MagentoStructString
	 */
	public function setReserved_order_id($_reserved_order_id)
	{
		return ($this->reserved_order_id = $_reserved_order_id);
	}
	/**
	 * Get password_hash value
	 * @return MagentoStructString|null
	 */
	public function getPassword_hash()
	{
		return $this->password_hash;
	}
	/**
	 * Set password_hash value
	 * @param MagentoStructString $_password_hash the password_hash
	 * @return MagentoStructString
	 */
	public function setPassword_hash($_password_hash)
	{
		return ($this->password_hash = $_password_hash);
	}
	/**
	 * Get coupon_code value
	 * @return MagentoStructString|null
	 */
	public function getCoupon_code()
	{
		return $this->coupon_code;
	}
	/**
	 * Set coupon_code value
	 * @param MagentoStructString $_coupon_code the coupon_code
	 * @return MagentoStructString
	 */
	public function setCoupon_code($_coupon_code)
	{
		return ($this->coupon_code = $_coupon_code);
	}
	/**
	 * Get global_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getGlobal_currency_code()
	{
		return $this->global_currency_code;
	}
	/**
	 * Set global_currency_code value
	 * @param MagentoStructString $_global_currency_code the global_currency_code
	 * @return MagentoStructString
	 */
	public function setGlobal_currency_code($_global_currency_code)
	{
		return ($this->global_currency_code = $_global_currency_code);
	}
	/**
	 * Get base_to_global_rate value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_to_global_rate()
	{
		return $this->base_to_global_rate;
	}
	/**
	 * Set base_to_global_rate value
	 * @param MagentoStructDouble $_base_to_global_rate the base_to_global_rate
	 * @return MagentoStructDouble
	 */
	public function setBase_to_global_rate($_base_to_global_rate)
	{
		return ($this->base_to_global_rate = $_base_to_global_rate);
	}
	/**
	 * Get base_to_quote_rate value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_to_quote_rate()
	{
		return $this->base_to_quote_rate;
	}
	/**
	 * Set base_to_quote_rate value
	 * @param MagentoStructDouble $_base_to_quote_rate the base_to_quote_rate
	 * @return MagentoStructDouble
	 */
	public function setBase_to_quote_rate($_base_to_quote_rate)
	{
		return ($this->base_to_quote_rate = $_base_to_quote_rate);
	}
	/**
	 * Get customer_taxvat value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_taxvat()
	{
		return $this->customer_taxvat;
	}
	/**
	 * Set customer_taxvat value
	 * @param MagentoStructString $_customer_taxvat the customer_taxvat
	 * @return MagentoStructString
	 */
	public function setCustomer_taxvat($_customer_taxvat)
	{
		return ($this->customer_taxvat = $_customer_taxvat);
	}
	/**
	 * Get customer_gender value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_gender()
	{
		return $this->customer_gender;
	}
	/**
	 * Set customer_gender value
	 * @param MagentoStructString $_customer_gender the customer_gender
	 * @return MagentoStructString
	 */
	public function setCustomer_gender($_customer_gender)
	{
		return ($this->customer_gender = $_customer_gender);
	}
	/**
	 * Get subtotal value
	 * @return MagentoStructDouble|null
	 */
	public function getSubtotal()
	{
		return $this->subtotal;
	}
	/**
	 * Set subtotal value
	 * @param MagentoStructDouble $_subtotal the subtotal
	 * @return MagentoStructDouble
	 */
	public function setSubtotal($_subtotal)
	{
		return ($this->subtotal = $_subtotal);
	}
	/**
	 * Get base_subtotal value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_subtotal()
	{
		return $this->base_subtotal;
	}
	/**
	 * Set base_subtotal value
	 * @param MagentoStructDouble $_base_subtotal the base_subtotal
	 * @return MagentoStructDouble
	 */
	public function setBase_subtotal($_base_subtotal)
	{
		return ($this->base_subtotal = $_base_subtotal);
	}
	/**
	 * Get subtotal_with_discount value
	 * @return MagentoStructDouble|null
	 */
	public function getSubtotal_with_discount()
	{
		return $this->subtotal_with_discount;
	}
	/**
	 * Set subtotal_with_discount value
	 * @param MagentoStructDouble $_subtotal_with_discount the subtotal_with_discount
	 * @return MagentoStructDouble
	 */
	public function setSubtotal_with_discount($_subtotal_with_discount)
	{
		return ($this->subtotal_with_discount = $_subtotal_with_discount);
	}
	/**
	 * Get base_subtotal_with_discount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_subtotal_with_discount()
	{
		return $this->base_subtotal_with_discount;
	}
	/**
	 * Set base_subtotal_with_discount value
	 * @param MagentoStructDouble $_base_subtotal_with_discount the base_subtotal_with_discount
	 * @return MagentoStructDouble
	 */
	public function setBase_subtotal_with_discount($_base_subtotal_with_discount)
	{
		return ($this->base_subtotal_with_discount = $_base_subtotal_with_discount);
	}
	/**
	 * Get ext_shipping_info value
	 * @return MagentoStructString|null
	 */
	public function getExt_shipping_info()
	{
		return $this->ext_shipping_info;
	}
	/**
	 * Set ext_shipping_info value
	 * @param MagentoStructString $_ext_shipping_info the ext_shipping_info
	 * @return MagentoStructString
	 */
	public function setExt_shipping_info($_ext_shipping_info)
	{
		return ($this->ext_shipping_info = $_ext_shipping_info);
	}
	/**
	 * Get gift_message_id value
	 * @return MagentoStructString|null
	 */
	public function getGift_message_id()
	{
		return $this->gift_message_id;
	}
	/**
	 * Set gift_message_id value
	 * @param MagentoStructString $_gift_message_id the gift_message_id
	 * @return MagentoStructString
	 */
	public function setGift_message_id($_gift_message_id)
	{
		return ($this->gift_message_id = $_gift_message_id);
	}
	/**
	 * Get gift_message value
	 * @return MagentoStructString|null
	 */
	public function getGift_message()
	{
		return $this->gift_message;
	}
	/**
	 * Set gift_message value
	 * @param MagentoStructString $_gift_message the gift_message
	 * @return MagentoStructString
	 */
	public function setGift_message($_gift_message)
	{
		return ($this->gift_message = $_gift_message);
	}
	/**
	 * Get customer_balance_amount_used value
	 * @return MagentoStructDouble|null
	 */
	public function getCustomer_balance_amount_used()
	{
		return $this->customer_balance_amount_used;
	}
	/**
	 * Set customer_balance_amount_used value
	 * @param MagentoStructDouble $_customer_balance_amount_used the customer_balance_amount_used
	 * @return MagentoStructDouble
	 */
	public function setCustomer_balance_amount_used($_customer_balance_amount_used)
	{
		return ($this->customer_balance_amount_used = $_customer_balance_amount_used);
	}
	/**
	 * Get base_customer_balance_amount_used value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_customer_balance_amount_used()
	{
		return $this->base_customer_balance_amount_used;
	}
	/**
	 * Set base_customer_balance_amount_used value
	 * @param MagentoStructDouble $_base_customer_balance_amount_used the base_customer_balance_amount_used
	 * @return MagentoStructDouble
	 */
	public function setBase_customer_balance_amount_used($_base_customer_balance_amount_used)
	{
		return ($this->base_customer_balance_amount_used = $_base_customer_balance_amount_used);
	}
	/**
	 * Get use_customer_balance value
	 * @return MagentoStructString|null
	 */
	public function getUse_customer_balance()
	{
		return $this->use_customer_balance;
	}
	/**
	 * Set use_customer_balance value
	 * @param MagentoStructString $_use_customer_balance the use_customer_balance
	 * @return MagentoStructString
	 */
	public function setUse_customer_balance($_use_customer_balance)
	{
		return ($this->use_customer_balance = $_use_customer_balance);
	}
	/**
	 * Get gift_cards_amount value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards_amount()
	{
		return $this->gift_cards_amount;
	}
	/**
	 * Set gift_cards_amount value
	 * @param MagentoStructString $_gift_cards_amount the gift_cards_amount
	 * @return MagentoStructString
	 */
	public function setGift_cards_amount($_gift_cards_amount)
	{
		return ($this->gift_cards_amount = $_gift_cards_amount);
	}
	/**
	 * Get base_gift_cards_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_gift_cards_amount()
	{
		return $this->base_gift_cards_amount;
	}
	/**
	 * Set base_gift_cards_amount value
	 * @param MagentoStructString $_base_gift_cards_amount the base_gift_cards_amount
	 * @return MagentoStructString
	 */
	public function setBase_gift_cards_amount($_base_gift_cards_amount)
	{
		return ($this->base_gift_cards_amount = $_base_gift_cards_amount);
	}
	/**
	 * Get gift_cards_amount_used value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards_amount_used()
	{
		return $this->gift_cards_amount_used;
	}
	/**
	 * Set gift_cards_amount_used value
	 * @param MagentoStructString $_gift_cards_amount_used the gift_cards_amount_used
	 * @return MagentoStructString
	 */
	public function setGift_cards_amount_used($_gift_cards_amount_used)
	{
		return ($this->gift_cards_amount_used = $_gift_cards_amount_used);
	}
	/**
	 * Get use_reward_points value
	 * @return MagentoStructString|null
	 */
	public function getUse_reward_points()
	{
		return $this->use_reward_points;
	}
	/**
	 * Set use_reward_points value
	 * @param MagentoStructString $_use_reward_points the use_reward_points
	 * @return MagentoStructString
	 */
	public function setUse_reward_points($_use_reward_points)
	{
		return ($this->use_reward_points = $_use_reward_points);
	}
	/**
	 * Get reward_points_balance value
	 * @return MagentoStructString|null
	 */
	public function getReward_points_balance()
	{
		return $this->reward_points_balance;
	}
	/**
	 * Set reward_points_balance value
	 * @param MagentoStructString $_reward_points_balance the reward_points_balance
	 * @return MagentoStructString
	 */
	public function setReward_points_balance($_reward_points_balance)
	{
		return ($this->reward_points_balance = $_reward_points_balance);
	}
	/**
	 * Get base_reward_currency_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_reward_currency_amount()
	{
		return $this->base_reward_currency_amount;
	}
	/**
	 * Set base_reward_currency_amount value
	 * @param MagentoStructString $_base_reward_currency_amount the base_reward_currency_amount
	 * @return MagentoStructString
	 */
	public function setBase_reward_currency_amount($_base_reward_currency_amount)
	{
		return ($this->base_reward_currency_amount = $_base_reward_currency_amount);
	}
	/**
	 * Get reward_currency_amount value
	 * @return MagentoStructString|null
	 */
	public function getReward_currency_amount()
	{
		return $this->reward_currency_amount;
	}
	/**
	 * Set reward_currency_amount value
	 * @param MagentoStructString $_reward_currency_amount the reward_currency_amount
	 * @return MagentoStructString
	 */
	public function setReward_currency_amount($_reward_currency_amount)
	{
		return ($this->reward_currency_amount = $_reward_currency_amount);
	}
	/**
	 * Get shipping_address value
	 * @return MagentoStructShoppingCartAddressEntity|null
	 */
	public function getShipping_address()
	{
		return $this->shipping_address;
	}
	/**
	 * Set shipping_address value
	 * @param MagentoStructShoppingCartAddressEntity $_shipping_address the shipping_address
	 * @return MagentoStructShoppingCartAddressEntity
	 */
	public function setShipping_address($_shipping_address)
	{
		return ($this->shipping_address = $_shipping_address);
	}
	/**
	 * Get billing_address value
	 * @return MagentoStructShoppingCartAddressEntity|null
	 */
	public function getBilling_address()
	{
		return $this->billing_address;
	}
	/**
	 * Set billing_address value
	 * @param MagentoStructShoppingCartAddressEntity $_billing_address the billing_address
	 * @return MagentoStructShoppingCartAddressEntity
	 */
	public function setBilling_address($_billing_address)
	{
		return ($this->billing_address = $_billing_address);
	}
	/**
	 * Get items value
	 * @return shoppingCartItemEntityArray|null
	 */
	public function getItems()
	{
		return $this->items;
	}
	/**
	 * Set items value
	 * @param shoppingCartItemEntityArray $_items the items
	 * @return shoppingCartItemEntityArray
	 */
	public function setItems($_items)
	{
		return ($this->items = $_items);
	}
	/**
	 * Get payment value
	 * @return MagentoStructShoppingCartPaymentEntity|null
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set payment value
	 * @param MagentoStructShoppingCartPaymentEntity $_payment the payment
	 * @return MagentoStructShoppingCartPaymentEntity
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartInfoEntity
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>