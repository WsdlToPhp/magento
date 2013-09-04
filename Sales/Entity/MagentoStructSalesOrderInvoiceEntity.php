<?php
/**
 * File for class MagentoStructSalesOrderInvoiceEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderInvoiceEntity originally named salesOrderInvoiceEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderInvoiceEntity extends MagentoWsdlClass
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
	 * The subtotal
	 * @var MagentoStructString
	 */
	public $subtotal;
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
	 * The discount_amount
	 * @var MagentoStructString
	 */
	public $discount_amount;
	/**
	 * The base_discount_amount
	 * @var MagentoStructString
	 */
	public $base_discount_amount;
	/**
	 * The shipping_amount
	 * @var MagentoStructString
	 */
	public $shipping_amount;
	/**
	 * The base_shipping_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_amount;
	/**
	 * The tax_amount
	 * @var MagentoStructString
	 */
	public $tax_amount;
	/**
	 * The base_tax_amount
	 * @var MagentoStructString
	 */
	public $base_tax_amount;
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
	 * The order_id
	 * @var MagentoStructString
	 */
	public $order_id;
	/**
	 * The order_increment_id
	 * @var MagentoStructString
	 */
	public $order_increment_id;
	/**
	 * The order_created_at
	 * @var MagentoStructString
	 */
	public $order_created_at;
	/**
	 * The state
	 * @var MagentoStructString
	 */
	public $state;
	/**
	 * The grand_total
	 * @var MagentoStructString
	 */
	public $grand_total;
	/**
	 * The invoice_id
	 * @var MagentoStructString
	 */
	public $invoice_id;
	/**
	 * The items
	 * @var salesOrderInvoiceItemEntityArray
	 */
	public $items;
	/**
	 * The comments
	 * @var salesOrderInvoiceCommentEntityArray
	 */
	public $comments;
	/**
	 * Constructor method for salesOrderInvoiceEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_global_currency_code
	 * @param MagentoStructString $_base_currency_code
	 * @param MagentoStructString $_store_currency_code
	 * @param MagentoStructString $_order_currency_code
	 * @param MagentoStructString $_store_to_base_rate
	 * @param MagentoStructString $_store_to_order_rate
	 * @param MagentoStructString $_base_to_global_rate
	 * @param MagentoStructString $_base_to_order_rate
	 * @param MagentoStructString $_subtotal
	 * @param MagentoStructString $_base_subtotal
	 * @param MagentoStructString $_base_grand_total
	 * @param MagentoStructString $_discount_amount
	 * @param MagentoStructString $_base_discount_amount
	 * @param MagentoStructString $_shipping_amount
	 * @param MagentoStructString $_base_shipping_amount
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_billing_address_id
	 * @param MagentoStructString $_billing_firstname
	 * @param MagentoStructString $_billing_lastname
	 * @param MagentoStructString $_order_id
	 * @param MagentoStructString $_order_increment_id
	 * @param MagentoStructString $_order_created_at
	 * @param MagentoStructString $_state
	 * @param MagentoStructString $_grand_total
	 * @param MagentoStructString $_invoice_id
	 * @param salesOrderInvoiceItemEntityArray $_items
	 * @param salesOrderInvoiceCommentEntityArray $_comments
	 * @return MagentoStructSalesOrderInvoiceEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_store_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_global_currency_code = NULL,$_base_currency_code = NULL,$_store_currency_code = NULL,$_order_currency_code = NULL,$_store_to_base_rate = NULL,$_store_to_order_rate = NULL,$_base_to_global_rate = NULL,$_base_to_order_rate = NULL,$_subtotal = NULL,$_base_subtotal = NULL,$_base_grand_total = NULL,$_discount_amount = NULL,$_base_discount_amount = NULL,$_shipping_amount = NULL,$_base_shipping_amount = NULL,$_tax_amount = NULL,$_base_tax_amount = NULL,$_billing_address_id = NULL,$_billing_firstname = NULL,$_billing_lastname = NULL,$_order_id = NULL,$_order_increment_id = NULL,$_order_created_at = NULL,$_state = NULL,$_grand_total = NULL,$_invoice_id = NULL,$_items = NULL,$_comments = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'store_id'=>$_store_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'global_currency_code'=>$_global_currency_code,'base_currency_code'=>$_base_currency_code,'store_currency_code'=>$_store_currency_code,'order_currency_code'=>$_order_currency_code,'store_to_base_rate'=>$_store_to_base_rate,'store_to_order_rate'=>$_store_to_order_rate,'base_to_global_rate'=>$_base_to_global_rate,'base_to_order_rate'=>$_base_to_order_rate,'subtotal'=>$_subtotal,'base_subtotal'=>$_base_subtotal,'base_grand_total'=>$_base_grand_total,'discount_amount'=>$_discount_amount,'base_discount_amount'=>$_base_discount_amount,'shipping_amount'=>$_shipping_amount,'base_shipping_amount'=>$_base_shipping_amount,'tax_amount'=>$_tax_amount,'base_tax_amount'=>$_base_tax_amount,'billing_address_id'=>$_billing_address_id,'billing_firstname'=>$_billing_firstname,'billing_lastname'=>$_billing_lastname,'order_id'=>$_order_id,'order_increment_id'=>$_order_increment_id,'order_created_at'=>$_order_created_at,'state'=>$_state,'grand_total'=>$_grand_total,'invoice_id'=>$_invoice_id,'items'=>$_items,'comments'=>$_comments));
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
	 * Get order_increment_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_increment_id()
	{
		return $this->order_increment_id;
	}
	/**
	 * Set order_increment_id value
	 * @param MagentoStructString $_order_increment_id the order_increment_id
	 * @return MagentoStructString
	 */
	public function setOrder_increment_id($_order_increment_id)
	{
		return ($this->order_increment_id = $_order_increment_id);
	}
	/**
	 * Get order_created_at value
	 * @return MagentoStructString|null
	 */
	public function getOrder_created_at()
	{
		return $this->order_created_at;
	}
	/**
	 * Set order_created_at value
	 * @param MagentoStructString $_order_created_at the order_created_at
	 * @return MagentoStructString
	 */
	public function setOrder_created_at($_order_created_at)
	{
		return ($this->order_created_at = $_order_created_at);
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
	 * Get invoice_id value
	 * @return MagentoStructString|null
	 */
	public function getInvoice_id()
	{
		return $this->invoice_id;
	}
	/**
	 * Set invoice_id value
	 * @param MagentoStructString $_invoice_id the invoice_id
	 * @return MagentoStructString
	 */
	public function setInvoice_id($_invoice_id)
	{
		return ($this->invoice_id = $_invoice_id);
	}
	/**
	 * Get items value
	 * @return salesOrderInvoiceItemEntityArray|null
	 */
	public function getItems()
	{
		return $this->items;
	}
	/**
	 * Set items value
	 * @param salesOrderInvoiceItemEntityArray $_items the items
	 * @return salesOrderInvoiceItemEntityArray
	 */
	public function setItems($_items)
	{
		return ($this->items = $_items);
	}
	/**
	 * Get comments value
	 * @return salesOrderInvoiceCommentEntityArray|null
	 */
	public function getComments()
	{
		return $this->comments;
	}
	/**
	 * Set comments value
	 * @param salesOrderInvoiceCommentEntityArray $_comments the comments
	 * @return salesOrderInvoiceCommentEntityArray
	 */
	public function setComments($_comments)
	{
		return ($this->comments = $_comments);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderInvoiceEntity
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