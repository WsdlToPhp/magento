<?php
/**
 * File for class MagentoStructSalesOrderItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderItemEntity originally named salesOrderItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderItemEntity extends MagentoWsdlClass
{
	/**
	 * The item_id
	 * @var MagentoStructString
	 */
	public $item_id;
	/**
	 * The order_id
	 * @var MagentoStructString
	 */
	public $order_id;
	/**
	 * The quote_item_id
	 * @var MagentoStructString
	 */
	public $quote_item_id;
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
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The product_type
	 * @var MagentoStructString
	 */
	public $product_type;
	/**
	 * The product_options
	 * @var MagentoStructString
	 */
	public $product_options;
	/**
	 * The weight
	 * @var MagentoStructString
	 */
	public $weight;
	/**
	 * The is_virtual
	 * @var MagentoStructString
	 */
	public $is_virtual;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The applied_rule_ids
	 * @var MagentoStructString
	 */
	public $applied_rule_ids;
	/**
	 * The free_shipping
	 * @var MagentoStructString
	 */
	public $free_shipping;
	/**
	 * The is_qty_decimal
	 * @var MagentoStructString
	 */
	public $is_qty_decimal;
	/**
	 * The no_discount
	 * @var MagentoStructString
	 */
	public $no_discount;
	/**
	 * The qty_canceled
	 * @var MagentoStructString
	 */
	public $qty_canceled;
	/**
	 * The qty_invoiced
	 * @var MagentoStructString
	 */
	public $qty_invoiced;
	/**
	 * The qty_ordered
	 * @var MagentoStructString
	 */
	public $qty_ordered;
	/**
	 * The qty_refunded
	 * @var MagentoStructString
	 */
	public $qty_refunded;
	/**
	 * The qty_shipped
	 * @var MagentoStructString
	 */
	public $qty_shipped;
	/**
	 * The cost
	 * @var MagentoStructString
	 */
	public $cost;
	/**
	 * The price
	 * @var MagentoStructString
	 */
	public $price;
	/**
	 * The base_price
	 * @var MagentoStructString
	 */
	public $base_price;
	/**
	 * The original_price
	 * @var MagentoStructString
	 */
	public $original_price;
	/**
	 * The base_original_price
	 * @var MagentoStructString
	 */
	public $base_original_price;
	/**
	 * The tax_percent
	 * @var MagentoStructString
	 */
	public $tax_percent;
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
	 * The tax_invoiced
	 * @var MagentoStructString
	 */
	public $tax_invoiced;
	/**
	 * The base_tax_invoiced
	 * @var MagentoStructString
	 */
	public $base_tax_invoiced;
	/**
	 * The discount_percent
	 * @var MagentoStructString
	 */
	public $discount_percent;
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
	 * The discount_invoiced
	 * @var MagentoStructString
	 */
	public $discount_invoiced;
	/**
	 * The base_discount_invoiced
	 * @var MagentoStructString
	 */
	public $base_discount_invoiced;
	/**
	 * The amount_refunded
	 * @var MagentoStructString
	 */
	public $amount_refunded;
	/**
	 * The base_amount_refunded
	 * @var MagentoStructString
	 */
	public $base_amount_refunded;
	/**
	 * The row_total
	 * @var MagentoStructString
	 */
	public $row_total;
	/**
	 * The base_row_total
	 * @var MagentoStructString
	 */
	public $base_row_total;
	/**
	 * The row_invoiced
	 * @var MagentoStructString
	 */
	public $row_invoiced;
	/**
	 * The base_row_invoiced
	 * @var MagentoStructString
	 */
	public $base_row_invoiced;
	/**
	 * The row_weight
	 * @var MagentoStructString
	 */
	public $row_weight;
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
	 * The gift_message_available
	 * @var MagentoStructString
	 */
	public $gift_message_available;
	/**
	 * The base_tax_before_discount
	 * @var MagentoStructString
	 */
	public $base_tax_before_discount;
	/**
	 * The tax_before_discount
	 * @var MagentoStructString
	 */
	public $tax_before_discount;
	/**
	 * The weee_tax_applied
	 * @var MagentoStructString
	 */
	public $weee_tax_applied;
	/**
	 * The weee_tax_applied_amount
	 * @var MagentoStructString
	 */
	public $weee_tax_applied_amount;
	/**
	 * The weee_tax_applied_row_amount
	 * @var MagentoStructString
	 */
	public $weee_tax_applied_row_amount;
	/**
	 * The base_weee_tax_applied_amount
	 * @var MagentoStructString
	 */
	public $base_weee_tax_applied_amount;
	/**
	 * The base_weee_tax_applied_row_amount
	 * @var MagentoStructString
	 */
	public $base_weee_tax_applied_row_amount;
	/**
	 * The weee_tax_disposition
	 * @var MagentoStructString
	 */
	public $weee_tax_disposition;
	/**
	 * The weee_tax_row_disposition
	 * @var MagentoStructString
	 */
	public $weee_tax_row_disposition;
	/**
	 * The base_weee_tax_disposition
	 * @var MagentoStructString
	 */
	public $base_weee_tax_disposition;
	/**
	 * The base_weee_tax_row_disposition
	 * @var MagentoStructString
	 */
	public $base_weee_tax_row_disposition;
	/**
	 * Constructor method for salesOrderItemEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_item_id
	 * @param MagentoStructString $_order_id
	 * @param MagentoStructString $_quote_item_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_product_type
	 * @param MagentoStructString $_product_options
	 * @param MagentoStructString $_weight
	 * @param MagentoStructString $_is_virtual
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_applied_rule_ids
	 * @param MagentoStructString $_free_shipping
	 * @param MagentoStructString $_is_qty_decimal
	 * @param MagentoStructString $_no_discount
	 * @param MagentoStructString $_qty_canceled
	 * @param MagentoStructString $_qty_invoiced
	 * @param MagentoStructString $_qty_ordered
	 * @param MagentoStructString $_qty_refunded
	 * @param MagentoStructString $_qty_shipped
	 * @param MagentoStructString $_cost
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_base_price
	 * @param MagentoStructString $_original_price
	 * @param MagentoStructString $_base_original_price
	 * @param MagentoStructString $_tax_percent
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_tax_invoiced
	 * @param MagentoStructString $_base_tax_invoiced
	 * @param MagentoStructString $_discount_percent
	 * @param MagentoStructString $_discount_amount
	 * @param MagentoStructString $_base_discount_amount
	 * @param MagentoStructString $_discount_invoiced
	 * @param MagentoStructString $_base_discount_invoiced
	 * @param MagentoStructString $_amount_refunded
	 * @param MagentoStructString $_base_amount_refunded
	 * @param MagentoStructString $_row_total
	 * @param MagentoStructString $_base_row_total
	 * @param MagentoStructString $_row_invoiced
	 * @param MagentoStructString $_base_row_invoiced
	 * @param MagentoStructString $_row_weight
	 * @param MagentoStructString $_gift_message_id
	 * @param MagentoStructString $_gift_message
	 * @param MagentoStructString $_gift_message_available
	 * @param MagentoStructString $_base_tax_before_discount
	 * @param MagentoStructString $_tax_before_discount
	 * @param MagentoStructString $_weee_tax_applied
	 * @param MagentoStructString $_weee_tax_applied_amount
	 * @param MagentoStructString $_weee_tax_applied_row_amount
	 * @param MagentoStructString $_base_weee_tax_applied_amount
	 * @param MagentoStructString $_base_weee_tax_applied_row_amount
	 * @param MagentoStructString $_weee_tax_disposition
	 * @param MagentoStructString $_weee_tax_row_disposition
	 * @param MagentoStructString $_base_weee_tax_disposition
	 * @param MagentoStructString $_base_weee_tax_row_disposition
	 * @return MagentoStructSalesOrderItemEntity
	 */
	public function __construct($_item_id = NULL,$_order_id = NULL,$_quote_item_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_product_id = NULL,$_product_type = NULL,$_product_options = NULL,$_weight = NULL,$_is_virtual = NULL,$_sku = NULL,$_name = NULL,$_applied_rule_ids = NULL,$_free_shipping = NULL,$_is_qty_decimal = NULL,$_no_discount = NULL,$_qty_canceled = NULL,$_qty_invoiced = NULL,$_qty_ordered = NULL,$_qty_refunded = NULL,$_qty_shipped = NULL,$_cost = NULL,$_price = NULL,$_base_price = NULL,$_original_price = NULL,$_base_original_price = NULL,$_tax_percent = NULL,$_tax_amount = NULL,$_base_tax_amount = NULL,$_tax_invoiced = NULL,$_base_tax_invoiced = NULL,$_discount_percent = NULL,$_discount_amount = NULL,$_base_discount_amount = NULL,$_discount_invoiced = NULL,$_base_discount_invoiced = NULL,$_amount_refunded = NULL,$_base_amount_refunded = NULL,$_row_total = NULL,$_base_row_total = NULL,$_row_invoiced = NULL,$_base_row_invoiced = NULL,$_row_weight = NULL,$_gift_message_id = NULL,$_gift_message = NULL,$_gift_message_available = NULL,$_base_tax_before_discount = NULL,$_tax_before_discount = NULL,$_weee_tax_applied = NULL,$_weee_tax_applied_amount = NULL,$_weee_tax_applied_row_amount = NULL,$_base_weee_tax_applied_amount = NULL,$_base_weee_tax_applied_row_amount = NULL,$_weee_tax_disposition = NULL,$_weee_tax_row_disposition = NULL,$_base_weee_tax_disposition = NULL,$_base_weee_tax_row_disposition = NULL)
	{
		parent::__construct(array('item_id'=>$_item_id,'order_id'=>$_order_id,'quote_item_id'=>$_quote_item_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'product_id'=>$_product_id,'product_type'=>$_product_type,'product_options'=>$_product_options,'weight'=>$_weight,'is_virtual'=>$_is_virtual,'sku'=>$_sku,'name'=>$_name,'applied_rule_ids'=>$_applied_rule_ids,'free_shipping'=>$_free_shipping,'is_qty_decimal'=>$_is_qty_decimal,'no_discount'=>$_no_discount,'qty_canceled'=>$_qty_canceled,'qty_invoiced'=>$_qty_invoiced,'qty_ordered'=>$_qty_ordered,'qty_refunded'=>$_qty_refunded,'qty_shipped'=>$_qty_shipped,'cost'=>$_cost,'price'=>$_price,'base_price'=>$_base_price,'original_price'=>$_original_price,'base_original_price'=>$_base_original_price,'tax_percent'=>$_tax_percent,'tax_amount'=>$_tax_amount,'base_tax_amount'=>$_base_tax_amount,'tax_invoiced'=>$_tax_invoiced,'base_tax_invoiced'=>$_base_tax_invoiced,'discount_percent'=>$_discount_percent,'discount_amount'=>$_discount_amount,'base_discount_amount'=>$_base_discount_amount,'discount_invoiced'=>$_discount_invoiced,'base_discount_invoiced'=>$_base_discount_invoiced,'amount_refunded'=>$_amount_refunded,'base_amount_refunded'=>$_base_amount_refunded,'row_total'=>$_row_total,'base_row_total'=>$_base_row_total,'row_invoiced'=>$_row_invoiced,'base_row_invoiced'=>$_base_row_invoiced,'row_weight'=>$_row_weight,'gift_message_id'=>$_gift_message_id,'gift_message'=>$_gift_message,'gift_message_available'=>$_gift_message_available,'base_tax_before_discount'=>$_base_tax_before_discount,'tax_before_discount'=>$_tax_before_discount,'weee_tax_applied'=>$_weee_tax_applied,'weee_tax_applied_amount'=>$_weee_tax_applied_amount,'weee_tax_applied_row_amount'=>$_weee_tax_applied_row_amount,'base_weee_tax_applied_amount'=>$_base_weee_tax_applied_amount,'base_weee_tax_applied_row_amount'=>$_base_weee_tax_applied_row_amount,'weee_tax_disposition'=>$_weee_tax_disposition,'weee_tax_row_disposition'=>$_weee_tax_row_disposition,'base_weee_tax_disposition'=>$_base_weee_tax_disposition,'base_weee_tax_row_disposition'=>$_base_weee_tax_row_disposition));
	}
	/**
	 * Get item_id value
	 * @return MagentoStructString|null
	 */
	public function getItem_id()
	{
		return $this->item_id;
	}
	/**
	 * Set item_id value
	 * @param MagentoStructString $_item_id the item_id
	 * @return MagentoStructString
	 */
	public function setItem_id($_item_id)
	{
		return ($this->item_id = $_item_id);
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
	 * Get quote_item_id value
	 * @return MagentoStructString|null
	 */
	public function getQuote_item_id()
	{
		return $this->quote_item_id;
	}
	/**
	 * Set quote_item_id value
	 * @param MagentoStructString $_quote_item_id the quote_item_id
	 * @return MagentoStructString
	 */
	public function setQuote_item_id($_quote_item_id)
	{
		return ($this->quote_item_id = $_quote_item_id);
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
	 * Get product_id value
	 * @return MagentoStructString|null
	 */
	public function getProduct_id()
	{
		return $this->product_id;
	}
	/**
	 * Set product_id value
	 * @param MagentoStructString $_product_id the product_id
	 * @return MagentoStructString
	 */
	public function setProduct_id($_product_id)
	{
		return ($this->product_id = $_product_id);
	}
	/**
	 * Get product_type value
	 * @return MagentoStructString|null
	 */
	public function getProduct_type()
	{
		return $this->product_type;
	}
	/**
	 * Set product_type value
	 * @param MagentoStructString $_product_type the product_type
	 * @return MagentoStructString
	 */
	public function setProduct_type($_product_type)
	{
		return ($this->product_type = $_product_type);
	}
	/**
	 * Get product_options value
	 * @return MagentoStructString|null
	 */
	public function getProduct_options()
	{
		return $this->product_options;
	}
	/**
	 * Set product_options value
	 * @param MagentoStructString $_product_options the product_options
	 * @return MagentoStructString
	 */
	public function setProduct_options($_product_options)
	{
		return ($this->product_options = $_product_options);
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
	 * Get sku value
	 * @return MagentoStructString|null
	 */
	public function getSku()
	{
		return $this->sku;
	}
	/**
	 * Set sku value
	 * @param MagentoStructString $_sku the sku
	 * @return MagentoStructString
	 */
	public function setSku($_sku)
	{
		return ($this->sku = $_sku);
	}
	/**
	 * Get name value
	 * @return MagentoStructString|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param MagentoStructString $_name the name
	 * @return MagentoStructString
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
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
	 * Get free_shipping value
	 * @return MagentoStructString|null
	 */
	public function getFree_shipping()
	{
		return $this->free_shipping;
	}
	/**
	 * Set free_shipping value
	 * @param MagentoStructString $_free_shipping the free_shipping
	 * @return MagentoStructString
	 */
	public function setFree_shipping($_free_shipping)
	{
		return ($this->free_shipping = $_free_shipping);
	}
	/**
	 * Get is_qty_decimal value
	 * @return MagentoStructString|null
	 */
	public function getIs_qty_decimal()
	{
		return $this->is_qty_decimal;
	}
	/**
	 * Set is_qty_decimal value
	 * @param MagentoStructString $_is_qty_decimal the is_qty_decimal
	 * @return MagentoStructString
	 */
	public function setIs_qty_decimal($_is_qty_decimal)
	{
		return ($this->is_qty_decimal = $_is_qty_decimal);
	}
	/**
	 * Get no_discount value
	 * @return MagentoStructString|null
	 */
	public function getNo_discount()
	{
		return $this->no_discount;
	}
	/**
	 * Set no_discount value
	 * @param MagentoStructString $_no_discount the no_discount
	 * @return MagentoStructString
	 */
	public function setNo_discount($_no_discount)
	{
		return ($this->no_discount = $_no_discount);
	}
	/**
	 * Get qty_canceled value
	 * @return MagentoStructString|null
	 */
	public function getQty_canceled()
	{
		return $this->qty_canceled;
	}
	/**
	 * Set qty_canceled value
	 * @param MagentoStructString $_qty_canceled the qty_canceled
	 * @return MagentoStructString
	 */
	public function setQty_canceled($_qty_canceled)
	{
		return ($this->qty_canceled = $_qty_canceled);
	}
	/**
	 * Get qty_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getQty_invoiced()
	{
		return $this->qty_invoiced;
	}
	/**
	 * Set qty_invoiced value
	 * @param MagentoStructString $_qty_invoiced the qty_invoiced
	 * @return MagentoStructString
	 */
	public function setQty_invoiced($_qty_invoiced)
	{
		return ($this->qty_invoiced = $_qty_invoiced);
	}
	/**
	 * Get qty_ordered value
	 * @return MagentoStructString|null
	 */
	public function getQty_ordered()
	{
		return $this->qty_ordered;
	}
	/**
	 * Set qty_ordered value
	 * @param MagentoStructString $_qty_ordered the qty_ordered
	 * @return MagentoStructString
	 */
	public function setQty_ordered($_qty_ordered)
	{
		return ($this->qty_ordered = $_qty_ordered);
	}
	/**
	 * Get qty_refunded value
	 * @return MagentoStructString|null
	 */
	public function getQty_refunded()
	{
		return $this->qty_refunded;
	}
	/**
	 * Set qty_refunded value
	 * @param MagentoStructString $_qty_refunded the qty_refunded
	 * @return MagentoStructString
	 */
	public function setQty_refunded($_qty_refunded)
	{
		return ($this->qty_refunded = $_qty_refunded);
	}
	/**
	 * Get qty_shipped value
	 * @return MagentoStructString|null
	 */
	public function getQty_shipped()
	{
		return $this->qty_shipped;
	}
	/**
	 * Set qty_shipped value
	 * @param MagentoStructString $_qty_shipped the qty_shipped
	 * @return MagentoStructString
	 */
	public function setQty_shipped($_qty_shipped)
	{
		return ($this->qty_shipped = $_qty_shipped);
	}
	/**
	 * Get cost value
	 * @return MagentoStructString|null
	 */
	public function getCost()
	{
		return $this->cost;
	}
	/**
	 * Set cost value
	 * @param MagentoStructString $_cost the cost
	 * @return MagentoStructString
	 */
	public function setCost($_cost)
	{
		return ($this->cost = $_cost);
	}
	/**
	 * Get price value
	 * @return MagentoStructString|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param MagentoStructString $_price the price
	 * @return MagentoStructString
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get base_price value
	 * @return MagentoStructString|null
	 */
	public function getBase_price()
	{
		return $this->base_price;
	}
	/**
	 * Set base_price value
	 * @param MagentoStructString $_base_price the base_price
	 * @return MagentoStructString
	 */
	public function setBase_price($_base_price)
	{
		return ($this->base_price = $_base_price);
	}
	/**
	 * Get original_price value
	 * @return MagentoStructString|null
	 */
	public function getOriginal_price()
	{
		return $this->original_price;
	}
	/**
	 * Set original_price value
	 * @param MagentoStructString $_original_price the original_price
	 * @return MagentoStructString
	 */
	public function setOriginal_price($_original_price)
	{
		return ($this->original_price = $_original_price);
	}
	/**
	 * Get base_original_price value
	 * @return MagentoStructString|null
	 */
	public function getBase_original_price()
	{
		return $this->base_original_price;
	}
	/**
	 * Set base_original_price value
	 * @param MagentoStructString $_base_original_price the base_original_price
	 * @return MagentoStructString
	 */
	public function setBase_original_price($_base_original_price)
	{
		return ($this->base_original_price = $_base_original_price);
	}
	/**
	 * Get tax_percent value
	 * @return MagentoStructString|null
	 */
	public function getTax_percent()
	{
		return $this->tax_percent;
	}
	/**
	 * Set tax_percent value
	 * @param MagentoStructString $_tax_percent the tax_percent
	 * @return MagentoStructString
	 */
	public function setTax_percent($_tax_percent)
	{
		return ($this->tax_percent = $_tax_percent);
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
	 * Get tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getTax_invoiced()
	{
		return $this->tax_invoiced;
	}
	/**
	 * Set tax_invoiced value
	 * @param MagentoStructString $_tax_invoiced the tax_invoiced
	 * @return MagentoStructString
	 */
	public function setTax_invoiced($_tax_invoiced)
	{
		return ($this->tax_invoiced = $_tax_invoiced);
	}
	/**
	 * Get base_tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_invoiced()
	{
		return $this->base_tax_invoiced;
	}
	/**
	 * Set base_tax_invoiced value
	 * @param MagentoStructString $_base_tax_invoiced the base_tax_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_tax_invoiced($_base_tax_invoiced)
	{
		return ($this->base_tax_invoiced = $_base_tax_invoiced);
	}
	/**
	 * Get discount_percent value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_percent()
	{
		return $this->discount_percent;
	}
	/**
	 * Set discount_percent value
	 * @param MagentoStructString $_discount_percent the discount_percent
	 * @return MagentoStructString
	 */
	public function setDiscount_percent($_discount_percent)
	{
		return ($this->discount_percent = $_discount_percent);
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
	 * Get discount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_invoiced()
	{
		return $this->discount_invoiced;
	}
	/**
	 * Set discount_invoiced value
	 * @param MagentoStructString $_discount_invoiced the discount_invoiced
	 * @return MagentoStructString
	 */
	public function setDiscount_invoiced($_discount_invoiced)
	{
		return ($this->discount_invoiced = $_discount_invoiced);
	}
	/**
	 * Get base_discount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_invoiced()
	{
		return $this->base_discount_invoiced;
	}
	/**
	 * Set base_discount_invoiced value
	 * @param MagentoStructString $_base_discount_invoiced the base_discount_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_discount_invoiced($_base_discount_invoiced)
	{
		return ($this->base_discount_invoiced = $_base_discount_invoiced);
	}
	/**
	 * Get amount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getAmount_refunded()
	{
		return $this->amount_refunded;
	}
	/**
	 * Set amount_refunded value
	 * @param MagentoStructString $_amount_refunded the amount_refunded
	 * @return MagentoStructString
	 */
	public function setAmount_refunded($_amount_refunded)
	{
		return ($this->amount_refunded = $_amount_refunded);
	}
	/**
	 * Get base_amount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_amount_refunded()
	{
		return $this->base_amount_refunded;
	}
	/**
	 * Set base_amount_refunded value
	 * @param MagentoStructString $_base_amount_refunded the base_amount_refunded
	 * @return MagentoStructString
	 */
	public function setBase_amount_refunded($_base_amount_refunded)
	{
		return ($this->base_amount_refunded = $_base_amount_refunded);
	}
	/**
	 * Get row_total value
	 * @return MagentoStructString|null
	 */
	public function getRow_total()
	{
		return $this->row_total;
	}
	/**
	 * Set row_total value
	 * @param MagentoStructString $_row_total the row_total
	 * @return MagentoStructString
	 */
	public function setRow_total($_row_total)
	{
		return ($this->row_total = $_row_total);
	}
	/**
	 * Get base_row_total value
	 * @return MagentoStructString|null
	 */
	public function getBase_row_total()
	{
		return $this->base_row_total;
	}
	/**
	 * Set base_row_total value
	 * @param MagentoStructString $_base_row_total the base_row_total
	 * @return MagentoStructString
	 */
	public function setBase_row_total($_base_row_total)
	{
		return ($this->base_row_total = $_base_row_total);
	}
	/**
	 * Get row_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getRow_invoiced()
	{
		return $this->row_invoiced;
	}
	/**
	 * Set row_invoiced value
	 * @param MagentoStructString $_row_invoiced the row_invoiced
	 * @return MagentoStructString
	 */
	public function setRow_invoiced($_row_invoiced)
	{
		return ($this->row_invoiced = $_row_invoiced);
	}
	/**
	 * Get base_row_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_row_invoiced()
	{
		return $this->base_row_invoiced;
	}
	/**
	 * Set base_row_invoiced value
	 * @param MagentoStructString $_base_row_invoiced the base_row_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_row_invoiced($_base_row_invoiced)
	{
		return ($this->base_row_invoiced = $_base_row_invoiced);
	}
	/**
	 * Get row_weight value
	 * @return MagentoStructString|null
	 */
	public function getRow_weight()
	{
		return $this->row_weight;
	}
	/**
	 * Set row_weight value
	 * @param MagentoStructString $_row_weight the row_weight
	 * @return MagentoStructString
	 */
	public function setRow_weight($_row_weight)
	{
		return ($this->row_weight = $_row_weight);
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
	 * Get gift_message_available value
	 * @return MagentoStructString|null
	 */
	public function getGift_message_available()
	{
		return $this->gift_message_available;
	}
	/**
	 * Set gift_message_available value
	 * @param MagentoStructString $_gift_message_available the gift_message_available
	 * @return MagentoStructString
	 */
	public function setGift_message_available($_gift_message_available)
	{
		return ($this->gift_message_available = $_gift_message_available);
	}
	/**
	 * Get base_tax_before_discount value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_before_discount()
	{
		return $this->base_tax_before_discount;
	}
	/**
	 * Set base_tax_before_discount value
	 * @param MagentoStructString $_base_tax_before_discount the base_tax_before_discount
	 * @return MagentoStructString
	 */
	public function setBase_tax_before_discount($_base_tax_before_discount)
	{
		return ($this->base_tax_before_discount = $_base_tax_before_discount);
	}
	/**
	 * Get tax_before_discount value
	 * @return MagentoStructString|null
	 */
	public function getTax_before_discount()
	{
		return $this->tax_before_discount;
	}
	/**
	 * Set tax_before_discount value
	 * @param MagentoStructString $_tax_before_discount the tax_before_discount
	 * @return MagentoStructString
	 */
	public function setTax_before_discount($_tax_before_discount)
	{
		return ($this->tax_before_discount = $_tax_before_discount);
	}
	/**
	 * Get weee_tax_applied value
	 * @return MagentoStructString|null
	 */
	public function getWeee_tax_applied()
	{
		return $this->weee_tax_applied;
	}
	/**
	 * Set weee_tax_applied value
	 * @param MagentoStructString $_weee_tax_applied the weee_tax_applied
	 * @return MagentoStructString
	 */
	public function setWeee_tax_applied($_weee_tax_applied)
	{
		return ($this->weee_tax_applied = $_weee_tax_applied);
	}
	/**
	 * Get weee_tax_applied_amount value
	 * @return MagentoStructString|null
	 */
	public function getWeee_tax_applied_amount()
	{
		return $this->weee_tax_applied_amount;
	}
	/**
	 * Set weee_tax_applied_amount value
	 * @param MagentoStructString $_weee_tax_applied_amount the weee_tax_applied_amount
	 * @return MagentoStructString
	 */
	public function setWeee_tax_applied_amount($_weee_tax_applied_amount)
	{
		return ($this->weee_tax_applied_amount = $_weee_tax_applied_amount);
	}
	/**
	 * Get weee_tax_applied_row_amount value
	 * @return MagentoStructString|null
	 */
	public function getWeee_tax_applied_row_amount()
	{
		return $this->weee_tax_applied_row_amount;
	}
	/**
	 * Set weee_tax_applied_row_amount value
	 * @param MagentoStructString $_weee_tax_applied_row_amount the weee_tax_applied_row_amount
	 * @return MagentoStructString
	 */
	public function setWeee_tax_applied_row_amount($_weee_tax_applied_row_amount)
	{
		return ($this->weee_tax_applied_row_amount = $_weee_tax_applied_row_amount);
	}
	/**
	 * Get base_weee_tax_applied_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_weee_tax_applied_amount()
	{
		return $this->base_weee_tax_applied_amount;
	}
	/**
	 * Set base_weee_tax_applied_amount value
	 * @param MagentoStructString $_base_weee_tax_applied_amount the base_weee_tax_applied_amount
	 * @return MagentoStructString
	 */
	public function setBase_weee_tax_applied_amount($_base_weee_tax_applied_amount)
	{
		return ($this->base_weee_tax_applied_amount = $_base_weee_tax_applied_amount);
	}
	/**
	 * Get base_weee_tax_applied_row_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_weee_tax_applied_row_amount()
	{
		return $this->base_weee_tax_applied_row_amount;
	}
	/**
	 * Set base_weee_tax_applied_row_amount value
	 * @param MagentoStructString $_base_weee_tax_applied_row_amount the base_weee_tax_applied_row_amount
	 * @return MagentoStructString
	 */
	public function setBase_weee_tax_applied_row_amount($_base_weee_tax_applied_row_amount)
	{
		return ($this->base_weee_tax_applied_row_amount = $_base_weee_tax_applied_row_amount);
	}
	/**
	 * Get weee_tax_disposition value
	 * @return MagentoStructString|null
	 */
	public function getWeee_tax_disposition()
	{
		return $this->weee_tax_disposition;
	}
	/**
	 * Set weee_tax_disposition value
	 * @param MagentoStructString $_weee_tax_disposition the weee_tax_disposition
	 * @return MagentoStructString
	 */
	public function setWeee_tax_disposition($_weee_tax_disposition)
	{
		return ($this->weee_tax_disposition = $_weee_tax_disposition);
	}
	/**
	 * Get weee_tax_row_disposition value
	 * @return MagentoStructString|null
	 */
	public function getWeee_tax_row_disposition()
	{
		return $this->weee_tax_row_disposition;
	}
	/**
	 * Set weee_tax_row_disposition value
	 * @param MagentoStructString $_weee_tax_row_disposition the weee_tax_row_disposition
	 * @return MagentoStructString
	 */
	public function setWeee_tax_row_disposition($_weee_tax_row_disposition)
	{
		return ($this->weee_tax_row_disposition = $_weee_tax_row_disposition);
	}
	/**
	 * Get base_weee_tax_disposition value
	 * @return MagentoStructString|null
	 */
	public function getBase_weee_tax_disposition()
	{
		return $this->base_weee_tax_disposition;
	}
	/**
	 * Set base_weee_tax_disposition value
	 * @param MagentoStructString $_base_weee_tax_disposition the base_weee_tax_disposition
	 * @return MagentoStructString
	 */
	public function setBase_weee_tax_disposition($_base_weee_tax_disposition)
	{
		return ($this->base_weee_tax_disposition = $_base_weee_tax_disposition);
	}
	/**
	 * Get base_weee_tax_row_disposition value
	 * @return MagentoStructString|null
	 */
	public function getBase_weee_tax_row_disposition()
	{
		return $this->base_weee_tax_row_disposition;
	}
	/**
	 * Set base_weee_tax_row_disposition value
	 * @param MagentoStructString $_base_weee_tax_row_disposition the base_weee_tax_row_disposition
	 * @return MagentoStructString
	 */
	public function setBase_weee_tax_row_disposition($_base_weee_tax_row_disposition)
	{
		return ($this->base_weee_tax_row_disposition = $_base_weee_tax_row_disposition);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderItemEntity
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