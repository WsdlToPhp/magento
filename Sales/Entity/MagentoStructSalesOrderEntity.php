<?php
/**
 * File for class MagentoStructSalesOrderEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderEntity originally named salesOrderEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderEntity extends MagentoWsdlClass
{
	/**
	 * The increment_id
	 * @var MagentoStructString
	 */
	public $increment_id;
	/**
	 * The parent_id
	 * @var MagentoStructString
	 */
	public $parent_id;
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
	 * The is_active
	 * @var MagentoStructString
	 */
	public $is_active;
	/**
	 * The customer_id
	 * @var MagentoStructString
	 */
	public $customer_id;
	/**
	 * The tax_amount
	 * @var MagentoStructString
	 */
	public $tax_amount;
	/**
	 * The shipping_amount
	 * @var MagentoStructString
	 */
	public $shipping_amount;
	/**
	 * The discount_amount
	 * @var MagentoStructString
	 */
	public $discount_amount;
	/**
	 * The subtotal
	 * @var MagentoStructString
	 */
	public $subtotal;
	/**
	 * The grand_total
	 * @var MagentoStructString
	 */
	public $grand_total;
	/**
	 * The total_paid
	 * @var MagentoStructString
	 */
	public $total_paid;
	/**
	 * The total_refunded
	 * @var MagentoStructString
	 */
	public $total_refunded;
	/**
	 * The total_qty_ordered
	 * @var MagentoStructString
	 */
	public $total_qty_ordered;
	/**
	 * The total_canceled
	 * @var MagentoStructString
	 */
	public $total_canceled;
	/**
	 * The total_invoiced
	 * @var MagentoStructString
	 */
	public $total_invoiced;
	/**
	 * The total_online_refunded
	 * @var MagentoStructString
	 */
	public $total_online_refunded;
	/**
	 * The total_offline_refunded
	 * @var MagentoStructString
	 */
	public $total_offline_refunded;
	/**
	 * The base_tax_amount
	 * @var MagentoStructString
	 */
	public $base_tax_amount;
	/**
	 * The base_shipping_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_amount;
	/**
	 * The base_discount_amount
	 * @var MagentoStructString
	 */
	public $base_discount_amount;
	/**
	 * The base_subtotal
	 * @var MagentoStructString
	 */
	public $base_subtotal;
	/**
	 * The base_grand_total
	 * @var MagentoStructString
	 */
	public $base_grand_total;
	/**
	 * The base_total_paid
	 * @var MagentoStructString
	 */
	public $base_total_paid;
	/**
	 * The base_total_refunded
	 * @var MagentoStructString
	 */
	public $base_total_refunded;
	/**
	 * The base_total_qty_ordered
	 * @var MagentoStructString
	 */
	public $base_total_qty_ordered;
	/**
	 * The base_total_canceled
	 * @var MagentoStructString
	 */
	public $base_total_canceled;
	/**
	 * The base_total_invoiced
	 * @var MagentoStructString
	 */
	public $base_total_invoiced;
	/**
	 * The base_total_online_refunded
	 * @var MagentoStructString
	 */
	public $base_total_online_refunded;
	/**
	 * The base_total_offline_refunded
	 * @var MagentoStructString
	 */
	public $base_total_offline_refunded;
	/**
	 * The billing_address_id
	 * @var MagentoStructString
	 */
	public $billing_address_id;
	/**
	 * The billing_firstname
	 * @var MagentoStructString
	 */
	public $billing_firstname;
	/**
	 * The billing_lastname
	 * @var MagentoStructString
	 */
	public $billing_lastname;
	/**
	 * The shipping_address_id
	 * @var MagentoStructString
	 */
	public $shipping_address_id;
	/**
	 * The shipping_firstname
	 * @var MagentoStructString
	 */
	public $shipping_firstname;
	/**
	 * The shipping_lastname
	 * @var MagentoStructString
	 */
	public $shipping_lastname;
	/**
	 * The billing_name
	 * @var MagentoStructString
	 */
	public $billing_name;
	/**
	 * The shipping_name
	 * @var MagentoStructString
	 */
	public $shipping_name;
	/**
	 * The store_to_base_rate
	 * @var MagentoStructString
	 */
	public $store_to_base_rate;
	/**
	 * The store_to_order_rate
	 * @var MagentoStructString
	 */
	public $store_to_order_rate;
	/**
	 * The base_to_global_rate
	 * @var MagentoStructString
	 */
	public $base_to_global_rate;
	/**
	 * The base_to_order_rate
	 * @var MagentoStructString
	 */
	public $base_to_order_rate;
	/**
	 * The weight
	 * @var MagentoStructString
	 */
	public $weight;
	/**
	 * The store_name
	 * @var MagentoStructString
	 */
	public $store_name;
	/**
	 * The remote_ip
	 * @var MagentoStructString
	 */
	public $remote_ip;
	/**
	 * The status
	 * @var MagentoStructString
	 */
	public $status;
	/**
	 * The state
	 * @var MagentoStructString
	 */
	public $state;
	/**
	 * The applied_rule_ids
	 * @var MagentoStructString
	 */
	public $applied_rule_ids;
	/**
	 * The global_currency_code
	 * @var MagentoStructString
	 */
	public $global_currency_code;
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
	 * The order_currency_code
	 * @var MagentoStructString
	 */
	public $order_currency_code;
	/**
	 * The shipping_method
	 * @var MagentoStructString
	 */
	public $shipping_method;
	/**
	 * The shipping_description
	 * @var MagentoStructString
	 */
	public $shipping_description;
	/**
	 * The customer_email
	 * @var MagentoStructString
	 */
	public $customer_email;
	/**
	 * The customer_firstname
	 * @var MagentoStructString
	 */
	public $customer_firstname;
	/**
	 * The customer_lastname
	 * @var MagentoStructString
	 */
	public $customer_lastname;
	/**
	 * The quote_id
	 * @var MagentoStructString
	 */
	public $quote_id;
	/**
	 * The is_virtual
	 * @var MagentoStructString
	 */
	public $is_virtual;
	/**
	 * The customer_group_id
	 * @var MagentoStructString
	 */
	public $customer_group_id;
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
	 * The email_sent
	 * @var MagentoStructString
	 */
	public $email_sent;
	/**
	 * The order_id
	 * @var MagentoStructString
	 */
	public $order_id;
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
	 * The shipping_address
	 * @var MagentoStructSalesOrderAddressEntity
	 */
	public $shipping_address;
	/**
	 * The billing_address
	 * @var MagentoStructSalesOrderAddressEntity
	 */
	public $billing_address;
	/**
	 * The items
	 * @var salesOrderItemEntityArray
	 */
	public $items;
	/**
	 * The payment
	 * @var MagentoStructSalesOrderPaymentEntity
	 */
	public $payment;
	/**
	 * The status_history
	 * @var salesOrderStatusHistoryEntityArray
	 */
	public $status_history;
	/**
	 * Constructor method for salesOrderEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_customer_id
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_shipping_amount
	 * @param MagentoStructString $_discount_amount
	 * @param MagentoStructString $_subtotal
	 * @param MagentoStructString $_grand_total
	 * @param MagentoStructString $_total_paid
	 * @param MagentoStructString $_total_refunded
	 * @param MagentoStructString $_total_qty_ordered
	 * @param MagentoStructString $_total_canceled
	 * @param MagentoStructString $_total_invoiced
	 * @param MagentoStructString $_total_online_refunded
	 * @param MagentoStructString $_total_offline_refunded
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_base_shipping_amount
	 * @param MagentoStructString $_base_discount_amount
	 * @param MagentoStructString $_base_subtotal
	 * @param MagentoStructString $_base_grand_total
	 * @param MagentoStructString $_base_total_paid
	 * @param MagentoStructString $_base_total_refunded
	 * @param MagentoStructString $_base_total_qty_ordered
	 * @param MagentoStructString $_base_total_canceled
	 * @param MagentoStructString $_base_total_invoiced
	 * @param MagentoStructString $_base_total_online_refunded
	 * @param MagentoStructString $_base_total_offline_refunded
	 * @param MagentoStructString $_billing_address_id
	 * @param MagentoStructString $_billing_firstname
	 * @param MagentoStructString $_billing_lastname
	 * @param MagentoStructString $_shipping_address_id
	 * @param MagentoStructString $_shipping_firstname
	 * @param MagentoStructString $_shipping_lastname
	 * @param MagentoStructString $_billing_name
	 * @param MagentoStructString $_shipping_name
	 * @param MagentoStructString $_store_to_base_rate
	 * @param MagentoStructString $_store_to_order_rate
	 * @param MagentoStructString $_base_to_global_rate
	 * @param MagentoStructString $_base_to_order_rate
	 * @param MagentoStructString $_weight
	 * @param MagentoStructString $_store_name
	 * @param MagentoStructString $_remote_ip
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_state
	 * @param MagentoStructString $_applied_rule_ids
	 * @param MagentoStructString $_global_currency_code
	 * @param MagentoStructString $_base_currency_code
	 * @param MagentoStructString $_store_currency_code
	 * @param MagentoStructString $_order_currency_code
	 * @param MagentoStructString $_shipping_method
	 * @param MagentoStructString $_shipping_description
	 * @param MagentoStructString $_customer_email
	 * @param MagentoStructString $_customer_firstname
	 * @param MagentoStructString $_customer_lastname
	 * @param MagentoStructString $_quote_id
	 * @param MagentoStructString $_is_virtual
	 * @param MagentoStructString $_customer_group_id
	 * @param MagentoStructString $_customer_note_notify
	 * @param MagentoStructString $_customer_is_guest
	 * @param MagentoStructString $_email_sent
	 * @param MagentoStructString $_order_id
	 * @param MagentoStructString $_gift_message_id
	 * @param MagentoStructString $_gift_message
	 * @param MagentoStructSalesOrderAddressEntity $_shipping_address
	 * @param MagentoStructSalesOrderAddressEntity $_billing_address
	 * @param salesOrderItemEntityArray $_items
	 * @param MagentoStructSalesOrderPaymentEntity $_payment
	 * @param salesOrderStatusHistoryEntityArray $_status_history
	 * @return MagentoStructSalesOrderEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_store_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_customer_id = NULL,$_tax_amount = NULL,$_shipping_amount = NULL,$_discount_amount = NULL,$_subtotal = NULL,$_grand_total = NULL,$_total_paid = NULL,$_total_refunded = NULL,$_total_qty_ordered = NULL,$_total_canceled = NULL,$_total_invoiced = NULL,$_total_online_refunded = NULL,$_total_offline_refunded = NULL,$_base_tax_amount = NULL,$_base_shipping_amount = NULL,$_base_discount_amount = NULL,$_base_subtotal = NULL,$_base_grand_total = NULL,$_base_total_paid = NULL,$_base_total_refunded = NULL,$_base_total_qty_ordered = NULL,$_base_total_canceled = NULL,$_base_total_invoiced = NULL,$_base_total_online_refunded = NULL,$_base_total_offline_refunded = NULL,$_billing_address_id = NULL,$_billing_firstname = NULL,$_billing_lastname = NULL,$_shipping_address_id = NULL,$_shipping_firstname = NULL,$_shipping_lastname = NULL,$_billing_name = NULL,$_shipping_name = NULL,$_store_to_base_rate = NULL,$_store_to_order_rate = NULL,$_base_to_global_rate = NULL,$_base_to_order_rate = NULL,$_weight = NULL,$_store_name = NULL,$_remote_ip = NULL,$_status = NULL,$_state = NULL,$_applied_rule_ids = NULL,$_global_currency_code = NULL,$_base_currency_code = NULL,$_store_currency_code = NULL,$_order_currency_code = NULL,$_shipping_method = NULL,$_shipping_description = NULL,$_customer_email = NULL,$_customer_firstname = NULL,$_customer_lastname = NULL,$_quote_id = NULL,$_is_virtual = NULL,$_customer_group_id = NULL,$_customer_note_notify = NULL,$_customer_is_guest = NULL,$_email_sent = NULL,$_order_id = NULL,$_gift_message_id = NULL,$_gift_message = NULL,$_shipping_address = NULL,$_billing_address = NULL,$_items = NULL,$_payment = NULL,$_status_history = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'store_id'=>$_store_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'customer_id'=>$_customer_id,'tax_amount'=>$_tax_amount,'shipping_amount'=>$_shipping_amount,'discount_amount'=>$_discount_amount,'subtotal'=>$_subtotal,'grand_total'=>$_grand_total,'total_paid'=>$_total_paid,'total_refunded'=>$_total_refunded,'total_qty_ordered'=>$_total_qty_ordered,'total_canceled'=>$_total_canceled,'total_invoiced'=>$_total_invoiced,'total_online_refunded'=>$_total_online_refunded,'total_offline_refunded'=>$_total_offline_refunded,'base_tax_amount'=>$_base_tax_amount,'base_shipping_amount'=>$_base_shipping_amount,'base_discount_amount'=>$_base_discount_amount,'base_subtotal'=>$_base_subtotal,'base_grand_total'=>$_base_grand_total,'base_total_paid'=>$_base_total_paid,'base_total_refunded'=>$_base_total_refunded,'base_total_qty_ordered'=>$_base_total_qty_ordered,'base_total_canceled'=>$_base_total_canceled,'base_total_invoiced'=>$_base_total_invoiced,'base_total_online_refunded'=>$_base_total_online_refunded,'base_total_offline_refunded'=>$_base_total_offline_refunded,'billing_address_id'=>$_billing_address_id,'billing_firstname'=>$_billing_firstname,'billing_lastname'=>$_billing_lastname,'shipping_address_id'=>$_shipping_address_id,'shipping_firstname'=>$_shipping_firstname,'shipping_lastname'=>$_shipping_lastname,'billing_name'=>$_billing_name,'shipping_name'=>$_shipping_name,'store_to_base_rate'=>$_store_to_base_rate,'store_to_order_rate'=>$_store_to_order_rate,'base_to_global_rate'=>$_base_to_global_rate,'base_to_order_rate'=>$_base_to_order_rate,'weight'=>$_weight,'store_name'=>$_store_name,'remote_ip'=>$_remote_ip,'status'=>$_status,'state'=>$_state,'applied_rule_ids'=>$_applied_rule_ids,'global_currency_code'=>$_global_currency_code,'base_currency_code'=>$_base_currency_code,'store_currency_code'=>$_store_currency_code,'order_currency_code'=>$_order_currency_code,'shipping_method'=>$_shipping_method,'shipping_description'=>$_shipping_description,'customer_email'=>$_customer_email,'customer_firstname'=>$_customer_firstname,'customer_lastname'=>$_customer_lastname,'quote_id'=>$_quote_id,'is_virtual'=>$_is_virtual,'customer_group_id'=>$_customer_group_id,'customer_note_notify'=>$_customer_note_notify,'customer_is_guest'=>$_customer_is_guest,'email_sent'=>$_email_sent,'order_id'=>$_order_id,'gift_message_id'=>$_gift_message_id,'gift_message'=>$_gift_message,'shipping_address'=>$_shipping_address,'billing_address'=>$_billing_address,'items'=>$_items,'payment'=>$_payment,'status_history'=>$_status_history));
	}
	/**
	 * Get increment_id value
	 * @return MagentoStructString|null
	 */
	public function getIncrement_id()
	{
		return $this->increment_id;
	}
	/**
	 * Set increment_id value
	 * @param MagentoStructString $_increment_id the increment_id
	 * @return MagentoStructString
	 */
	public function setIncrement_id($_increment_id)
	{
		return ($this->increment_id = $_increment_id);
	}
	/**
	 * Get parent_id value
	 * @return MagentoStructString|null
	 */
	public function getParent_id()
	{
		return $this->parent_id;
	}
	/**
	 * Set parent_id value
	 * @param MagentoStructString $_parent_id the parent_id
	 * @return MagentoStructString
	 */
	public function setParent_id($_parent_id)
	{
		return ($this->parent_id = $_parent_id);
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
	 * Get is_active value
	 * @return MagentoStructString|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructString $_is_active the is_active
	 * @return MagentoStructString
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
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
	 * Get tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getTax_amount()
	{
		return $this->tax_amount;
	}
	/**
	 * Set tax_amount value
	 * @param MagentoStructString $_tax_amount the tax_amount
	 * @return MagentoStructString
	 */
	public function setTax_amount($_tax_amount)
	{
		return ($this->tax_amount = $_tax_amount);
	}
	/**
	 * Get shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_amount()
	{
		return $this->shipping_amount;
	}
	/**
	 * Set shipping_amount value
	 * @param MagentoStructString $_shipping_amount the shipping_amount
	 * @return MagentoStructString
	 */
	public function setShipping_amount($_shipping_amount)
	{
		return ($this->shipping_amount = $_shipping_amount);
	}
	/**
	 * Get discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_amount()
	{
		return $this->discount_amount;
	}
	/**
	 * Set discount_amount value
	 * @param MagentoStructString $_discount_amount the discount_amount
	 * @return MagentoStructString
	 */
	public function setDiscount_amount($_discount_amount)
	{
		return ($this->discount_amount = $_discount_amount);
	}
	/**
	 * Get subtotal value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal()
	{
		return $this->subtotal;
	}
	/**
	 * Set subtotal value
	 * @param MagentoStructString $_subtotal the subtotal
	 * @return MagentoStructString
	 */
	public function setSubtotal($_subtotal)
	{
		return ($this->subtotal = $_subtotal);
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
	 * Get total_paid value
	 * @return MagentoStructString|null
	 */
	public function getTotal_paid()
	{
		return $this->total_paid;
	}
	/**
	 * Set total_paid value
	 * @param MagentoStructString $_total_paid the total_paid
	 * @return MagentoStructString
	 */
	public function setTotal_paid($_total_paid)
	{
		return ($this->total_paid = $_total_paid);
	}
	/**
	 * Get total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_refunded()
	{
		return $this->total_refunded;
	}
	/**
	 * Set total_refunded value
	 * @param MagentoStructString $_total_refunded the total_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_refunded($_total_refunded)
	{
		return ($this->total_refunded = $_total_refunded);
	}
	/**
	 * Get total_qty_ordered value
	 * @return MagentoStructString|null
	 */
	public function getTotal_qty_ordered()
	{
		return $this->total_qty_ordered;
	}
	/**
	 * Set total_qty_ordered value
	 * @param MagentoStructString $_total_qty_ordered the total_qty_ordered
	 * @return MagentoStructString
	 */
	public function setTotal_qty_ordered($_total_qty_ordered)
	{
		return ($this->total_qty_ordered = $_total_qty_ordered);
	}
	/**
	 * Get total_canceled value
	 * @return MagentoStructString|null
	 */
	public function getTotal_canceled()
	{
		return $this->total_canceled;
	}
	/**
	 * Set total_canceled value
	 * @param MagentoStructString $_total_canceled the total_canceled
	 * @return MagentoStructString
	 */
	public function setTotal_canceled($_total_canceled)
	{
		return ($this->total_canceled = $_total_canceled);
	}
	/**
	 * Get total_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getTotal_invoiced()
	{
		return $this->total_invoiced;
	}
	/**
	 * Set total_invoiced value
	 * @param MagentoStructString $_total_invoiced the total_invoiced
	 * @return MagentoStructString
	 */
	public function setTotal_invoiced($_total_invoiced)
	{
		return ($this->total_invoiced = $_total_invoiced);
	}
	/**
	 * Get total_online_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_online_refunded()
	{
		return $this->total_online_refunded;
	}
	/**
	 * Set total_online_refunded value
	 * @param MagentoStructString $_total_online_refunded the total_online_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_online_refunded($_total_online_refunded)
	{
		return ($this->total_online_refunded = $_total_online_refunded);
	}
	/**
	 * Get total_offline_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_offline_refunded()
	{
		return $this->total_offline_refunded;
	}
	/**
	 * Set total_offline_refunded value
	 * @param MagentoStructString $_total_offline_refunded the total_offline_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_offline_refunded($_total_offline_refunded)
	{
		return ($this->total_offline_refunded = $_total_offline_refunded);
	}
	/**
	 * Get base_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_amount()
	{
		return $this->base_tax_amount;
	}
	/**
	 * Set base_tax_amount value
	 * @param MagentoStructString $_base_tax_amount the base_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_tax_amount($_base_tax_amount)
	{
		return ($this->base_tax_amount = $_base_tax_amount);
	}
	/**
	 * Get base_shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_amount()
	{
		return $this->base_shipping_amount;
	}
	/**
	 * Set base_shipping_amount value
	 * @param MagentoStructString $_base_shipping_amount the base_shipping_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_amount($_base_shipping_amount)
	{
		return ($this->base_shipping_amount = $_base_shipping_amount);
	}
	/**
	 * Get base_discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_amount()
	{
		return $this->base_discount_amount;
	}
	/**
	 * Set base_discount_amount value
	 * @param MagentoStructString $_base_discount_amount the base_discount_amount
	 * @return MagentoStructString
	 */
	public function setBase_discount_amount($_base_discount_amount)
	{
		return ($this->base_discount_amount = $_base_discount_amount);
	}
	/**
	 * Get base_subtotal value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal()
	{
		return $this->base_subtotal;
	}
	/**
	 * Set base_subtotal value
	 * @param MagentoStructString $_base_subtotal the base_subtotal
	 * @return MagentoStructString
	 */
	public function setBase_subtotal($_base_subtotal)
	{
		return ($this->base_subtotal = $_base_subtotal);
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
	 * Get base_total_paid value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_paid()
	{
		return $this->base_total_paid;
	}
	/**
	 * Set base_total_paid value
	 * @param MagentoStructString $_base_total_paid the base_total_paid
	 * @return MagentoStructString
	 */
	public function setBase_total_paid($_base_total_paid)
	{
		return ($this->base_total_paid = $_base_total_paid);
	}
	/**
	 * Get base_total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_refunded()
	{
		return $this->base_total_refunded;
	}
	/**
	 * Set base_total_refunded value
	 * @param MagentoStructString $_base_total_refunded the base_total_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_refunded($_base_total_refunded)
	{
		return ($this->base_total_refunded = $_base_total_refunded);
	}
	/**
	 * Get base_total_qty_ordered value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_qty_ordered()
	{
		return $this->base_total_qty_ordered;
	}
	/**
	 * Set base_total_qty_ordered value
	 * @param MagentoStructString $_base_total_qty_ordered the base_total_qty_ordered
	 * @return MagentoStructString
	 */
	public function setBase_total_qty_ordered($_base_total_qty_ordered)
	{
		return ($this->base_total_qty_ordered = $_base_total_qty_ordered);
	}
	/**
	 * Get base_total_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_canceled()
	{
		return $this->base_total_canceled;
	}
	/**
	 * Set base_total_canceled value
	 * @param MagentoStructString $_base_total_canceled the base_total_canceled
	 * @return MagentoStructString
	 */
	public function setBase_total_canceled($_base_total_canceled)
	{
		return ($this->base_total_canceled = $_base_total_canceled);
	}
	/**
	 * Get base_total_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_invoiced()
	{
		return $this->base_total_invoiced;
	}
	/**
	 * Set base_total_invoiced value
	 * @param MagentoStructString $_base_total_invoiced the base_total_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_total_invoiced($_base_total_invoiced)
	{
		return ($this->base_total_invoiced = $_base_total_invoiced);
	}
	/**
	 * Get base_total_online_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_online_refunded()
	{
		return $this->base_total_online_refunded;
	}
	/**
	 * Set base_total_online_refunded value
	 * @param MagentoStructString $_base_total_online_refunded the base_total_online_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_online_refunded($_base_total_online_refunded)
	{
		return ($this->base_total_online_refunded = $_base_total_online_refunded);
	}
	/**
	 * Get base_total_offline_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_offline_refunded()
	{
		return $this->base_total_offline_refunded;
	}
	/**
	 * Set base_total_offline_refunded value
	 * @param MagentoStructString $_base_total_offline_refunded the base_total_offline_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_offline_refunded($_base_total_offline_refunded)
	{
		return ($this->base_total_offline_refunded = $_base_total_offline_refunded);
	}
	/**
	 * Get billing_address_id value
	 * @return MagentoStructString|null
	 */
	public function getBilling_address_id()
	{
		return $this->billing_address_id;
	}
	/**
	 * Set billing_address_id value
	 * @param MagentoStructString $_billing_address_id the billing_address_id
	 * @return MagentoStructString
	 */
	public function setBilling_address_id($_billing_address_id)
	{
		return ($this->billing_address_id = $_billing_address_id);
	}
	/**
	 * Get billing_firstname value
	 * @return MagentoStructString|null
	 */
	public function getBilling_firstname()
	{
		return $this->billing_firstname;
	}
	/**
	 * Set billing_firstname value
	 * @param MagentoStructString $_billing_firstname the billing_firstname
	 * @return MagentoStructString
	 */
	public function setBilling_firstname($_billing_firstname)
	{
		return ($this->billing_firstname = $_billing_firstname);
	}
	/**
	 * Get billing_lastname value
	 * @return MagentoStructString|null
	 */
	public function getBilling_lastname()
	{
		return $this->billing_lastname;
	}
	/**
	 * Set billing_lastname value
	 * @param MagentoStructString $_billing_lastname the billing_lastname
	 * @return MagentoStructString
	 */
	public function setBilling_lastname($_billing_lastname)
	{
		return ($this->billing_lastname = $_billing_lastname);
	}
	/**
	 * Get shipping_address_id value
	 * @return MagentoStructString|null
	 */
	public function getShipping_address_id()
	{
		return $this->shipping_address_id;
	}
	/**
	 * Set shipping_address_id value
	 * @param MagentoStructString $_shipping_address_id the shipping_address_id
	 * @return MagentoStructString
	 */
	public function setShipping_address_id($_shipping_address_id)
	{
		return ($this->shipping_address_id = $_shipping_address_id);
	}
	/**
	 * Get shipping_firstname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_firstname()
	{
		return $this->shipping_firstname;
	}
	/**
	 * Set shipping_firstname value
	 * @param MagentoStructString $_shipping_firstname the shipping_firstname
	 * @return MagentoStructString
	 */
	public function setShipping_firstname($_shipping_firstname)
	{
		return ($this->shipping_firstname = $_shipping_firstname);
	}
	/**
	 * Get shipping_lastname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_lastname()
	{
		return $this->shipping_lastname;
	}
	/**
	 * Set shipping_lastname value
	 * @param MagentoStructString $_shipping_lastname the shipping_lastname
	 * @return MagentoStructString
	 */
	public function setShipping_lastname($_shipping_lastname)
	{
		return ($this->shipping_lastname = $_shipping_lastname);
	}
	/**
	 * Get billing_name value
	 * @return MagentoStructString|null
	 */
	public function getBilling_name()
	{
		return $this->billing_name;
	}
	/**
	 * Set billing_name value
	 * @param MagentoStructString $_billing_name the billing_name
	 * @return MagentoStructString
	 */
	public function setBilling_name($_billing_name)
	{
		return ($this->billing_name = $_billing_name);
	}
	/**
	 * Get shipping_name value
	 * @return MagentoStructString|null
	 */
	public function getShipping_name()
	{
		return $this->shipping_name;
	}
	/**
	 * Set shipping_name value
	 * @param MagentoStructString $_shipping_name the shipping_name
	 * @return MagentoStructString
	 */
	public function setShipping_name($_shipping_name)
	{
		return ($this->shipping_name = $_shipping_name);
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
	 * Get store_to_order_rate value
	 * @return MagentoStructString|null
	 */
	public function getStore_to_order_rate()
	{
		return $this->store_to_order_rate;
	}
	/**
	 * Set store_to_order_rate value
	 * @param MagentoStructString $_store_to_order_rate the store_to_order_rate
	 * @return MagentoStructString
	 */
	public function setStore_to_order_rate($_store_to_order_rate)
	{
		return ($this->store_to_order_rate = $_store_to_order_rate);
	}
	/**
	 * Get base_to_global_rate value
	 * @return MagentoStructString|null
	 */
	public function getBase_to_global_rate()
	{
		return $this->base_to_global_rate;
	}
	/**
	 * Set base_to_global_rate value
	 * @param MagentoStructString $_base_to_global_rate the base_to_global_rate
	 * @return MagentoStructString
	 */
	public function setBase_to_global_rate($_base_to_global_rate)
	{
		return ($this->base_to_global_rate = $_base_to_global_rate);
	}
	/**
	 * Get base_to_order_rate value
	 * @return MagentoStructString|null
	 */
	public function getBase_to_order_rate()
	{
		return $this->base_to_order_rate;
	}
	/**
	 * Set base_to_order_rate value
	 * @param MagentoStructString $_base_to_order_rate the base_to_order_rate
	 * @return MagentoStructString
	 */
	public function setBase_to_order_rate($_base_to_order_rate)
	{
		return ($this->base_to_order_rate = $_base_to_order_rate);
	}
	/**
	 * Get weight value
	 * @return MagentoStructString|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param MagentoStructString $_weight the weight
	 * @return MagentoStructString
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Get store_name value
	 * @return MagentoStructString|null
	 */
	public function getStore_name()
	{
		return $this->store_name;
	}
	/**
	 * Set store_name value
	 * @param MagentoStructString $_store_name the store_name
	 * @return MagentoStructString
	 */
	public function setStore_name($_store_name)
	{
		return ($this->store_name = $_store_name);
	}
	/**
	 * Get remote_ip value
	 * @return MagentoStructString|null
	 */
	public function getRemote_ip()
	{
		return $this->remote_ip;
	}
	/**
	 * Set remote_ip value
	 * @param MagentoStructString $_remote_ip the remote_ip
	 * @return MagentoStructString
	 */
	public function setRemote_ip($_remote_ip)
	{
		return ($this->remote_ip = $_remote_ip);
	}
	/**
	 * Get status value
	 * @return MagentoStructString|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param MagentoStructString $_status the status
	 * @return MagentoStructString
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get state value
	 * @return MagentoStructString|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param MagentoStructString $_state the state
	 * @return MagentoStructString
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
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
	 * Get order_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getOrder_currency_code()
	{
		return $this->order_currency_code;
	}
	/**
	 * Set order_currency_code value
	 * @param MagentoStructString $_order_currency_code the order_currency_code
	 * @return MagentoStructString
	 */
	public function setOrder_currency_code($_order_currency_code)
	{
		return ($this->order_currency_code = $_order_currency_code);
	}
	/**
	 * Get shipping_method value
	 * @return MagentoStructString|null
	 */
	public function getShipping_method()
	{
		return $this->shipping_method;
	}
	/**
	 * Set shipping_method value
	 * @param MagentoStructString $_shipping_method the shipping_method
	 * @return MagentoStructString
	 */
	public function setShipping_method($_shipping_method)
	{
		return ($this->shipping_method = $_shipping_method);
	}
	/**
	 * Get shipping_description value
	 * @return MagentoStructString|null
	 */
	public function getShipping_description()
	{
		return $this->shipping_description;
	}
	/**
	 * Set shipping_description value
	 * @param MagentoStructString $_shipping_description the shipping_description
	 * @return MagentoStructString
	 */
	public function setShipping_description($_shipping_description)
	{
		return ($this->shipping_description = $_shipping_description);
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
	 * Get quote_id value
	 * @return MagentoStructString|null
	 */
	public function getQuote_id()
	{
		return $this->quote_id;
	}
	/**
	 * Set quote_id value
	 * @param MagentoStructString $_quote_id the quote_id
	 * @return MagentoStructString
	 */
	public function setQuote_id($_quote_id)
	{
		return ($this->quote_id = $_quote_id);
	}
	/**
	 * Get is_virtual value
	 * @return MagentoStructString|null
	 */
	public function getIs_virtual()
	{
		return $this->is_virtual;
	}
	/**
	 * Set is_virtual value
	 * @param MagentoStructString $_is_virtual the is_virtual
	 * @return MagentoStructString
	 */
	public function setIs_virtual($_is_virtual)
	{
		return ($this->is_virtual = $_is_virtual);
	}
	/**
	 * Get customer_group_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_group_id()
	{
		return $this->customer_group_id;
	}
	/**
	 * Set customer_group_id value
	 * @param MagentoStructString $_customer_group_id the customer_group_id
	 * @return MagentoStructString
	 */
	public function setCustomer_group_id($_customer_group_id)
	{
		return ($this->customer_group_id = $_customer_group_id);
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
	 * Get email_sent value
	 * @return MagentoStructString|null
	 */
	public function getEmail_sent()
	{
		return $this->email_sent;
	}
	/**
	 * Set email_sent value
	 * @param MagentoStructString $_email_sent the email_sent
	 * @return MagentoStructString
	 */
	public function setEmail_sent($_email_sent)
	{
		return ($this->email_sent = $_email_sent);
	}
	/**
	 * Get order_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_id()
	{
		return $this->order_id;
	}
	/**
	 * Set order_id value
	 * @param MagentoStructString $_order_id the order_id
	 * @return MagentoStructString
	 */
	public function setOrder_id($_order_id)
	{
		return ($this->order_id = $_order_id);
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
	 * Get shipping_address value
	 * @return MagentoStructSalesOrderAddressEntity|null
	 */
	public function getShipping_address()
	{
		return $this->shipping_address;
	}
	/**
	 * Set shipping_address value
	 * @param MagentoStructSalesOrderAddressEntity $_shipping_address the shipping_address
	 * @return MagentoStructSalesOrderAddressEntity
	 */
	public function setShipping_address($_shipping_address)
	{
		return ($this->shipping_address = $_shipping_address);
	}
	/**
	 * Get billing_address value
	 * @return MagentoStructSalesOrderAddressEntity|null
	 */
	public function getBilling_address()
	{
		return $this->billing_address;
	}
	/**
	 * Set billing_address value
	 * @param MagentoStructSalesOrderAddressEntity $_billing_address the billing_address
	 * @return MagentoStructSalesOrderAddressEntity
	 */
	public function setBilling_address($_billing_address)
	{
		return ($this->billing_address = $_billing_address);
	}
	/**
	 * Get items value
	 * @return salesOrderItemEntityArray|null
	 */
	public function getItems()
	{
		return $this->items;
	}
	/**
	 * Set items value
	 * @param salesOrderItemEntityArray $_items the items
	 * @return salesOrderItemEntityArray
	 */
	public function setItems($_items)
	{
		return ($this->items = $_items);
	}
	/**
	 * Get payment value
	 * @return MagentoStructSalesOrderPaymentEntity|null
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set payment value
	 * @param MagentoStructSalesOrderPaymentEntity $_payment the payment
	 * @return MagentoStructSalesOrderPaymentEntity
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get status_history value
	 * @return salesOrderStatusHistoryEntityArray|null
	 */
	public function getStatus_history()
	{
		return $this->status_history;
	}
	/**
	 * Set status_history value
	 * @param salesOrderStatusHistoryEntityArray $_status_history the status_history
	 * @return salesOrderStatusHistoryEntityArray
	 */
	public function setStatus_history($_status_history)
	{
		return ($this->status_history = $_status_history);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderEntity
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