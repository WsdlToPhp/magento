<?php
/**
 * File for class MagentoStructSalesOrderCreditmemoItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderCreditmemoItemEntity originally named salesOrderCreditmemoItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderCreditmemoItemEntity extends MagentoWsdlClass
{
	/**
	 * The item_id
	 * @var MagentoStructString
	 */
	public $item_id;
	/**
	 * The parent_id
	 * @var MagentoStructString
	 */
	public $parent_id;
	/**
	 * The weee_tax_applied_row_amount
	 * @var MagentoStructString
	 */
	public $weee_tax_applied_row_amount;
	/**
	 * The base_price
	 * @var MagentoStructString
	 */
	public $base_price;
	/**
	 * The base_weee_tax_row_disposition
	 * @var MagentoStructString
	 */
	public $base_weee_tax_row_disposition;
	/**
	 * The tax_amount
	 * @var MagentoStructString
	 */
	public $tax_amount;
	/**
	 * The base_weee_tax_applied_amount
	 * @var MagentoStructString
	 */
	public $base_weee_tax_applied_amount;
	/**
	 * The weee_tax_row_disposition
	 * @var MagentoStructString
	 */
	public $weee_tax_row_disposition;
	/**
	 * The base_row_total
	 * @var MagentoStructString
	 */
	public $base_row_total;
	/**
	 * The discount_amount
	 * @var MagentoStructString
	 */
	public $discount_amount;
	/**
	 * The row_total
	 * @var MagentoStructString
	 */
	public $row_total;
	/**
	 * The weee_tax_applied_amount
	 * @var MagentoStructString
	 */
	public $weee_tax_applied_amount;
	/**
	 * The base_discount_amount
	 * @var MagentoStructString
	 */
	public $base_discount_amount;
	/**
	 * The base_weee_tax_disposition
	 * @var MagentoStructString
	 */
	public $base_weee_tax_disposition;
	/**
	 * The price_incl_tax
	 * @var MagentoStructString
	 */
	public $price_incl_tax;
	/**
	 * The base_tax_amount
	 * @var MagentoStructString
	 */
	public $base_tax_amount;
	/**
	 * The weee_tax_disposition
	 * @var MagentoStructString
	 */
	public $weee_tax_disposition;
	/**
	 * The base_price_incl_tax
	 * @var MagentoStructString
	 */
	public $base_price_incl_tax;
	/**
	 * The qty
	 * @var MagentoStructString
	 */
	public $qty;
	/**
	 * The base_cost
	 * @var MagentoStructString
	 */
	public $base_cost;
	/**
	 * The base_weee_tax_applied_row_amount
	 * @var MagentoStructString
	 */
	public $base_weee_tax_applied_row_amount;
	/**
	 * The price
	 * @var MagentoStructString
	 */
	public $price;
	/**
	 * The base_row_total_incl_tax
	 * @var MagentoStructString
	 */
	public $base_row_total_incl_tax;
	/**
	 * The row_total_incl_tax
	 * @var MagentoStructString
	 */
	public $row_total_incl_tax;
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The order_item_id
	 * @var MagentoStructString
	 */
	public $order_item_id;
	/**
	 * The additional_data
	 * @var MagentoStructString
	 */
	public $additional_data;
	/**
	 * The description
	 * @var MagentoStructString
	 */
	public $description;
	/**
	 * The weee_tax_applied
	 * @var MagentoStructString
	 */
	public $weee_tax_applied;
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
	 * The hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $hidden_tax_amount;
	/**
	 * The base_hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $base_hidden_tax_amount;
	/**
	 * Constructor method for salesOrderCreditmemoItemEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_item_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_weee_tax_applied_row_amount
	 * @param MagentoStructString $_base_price
	 * @param MagentoStructString $_base_weee_tax_row_disposition
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_base_weee_tax_applied_amount
	 * @param MagentoStructString $_weee_tax_row_disposition
	 * @param MagentoStructString $_base_row_total
	 * @param MagentoStructString $_discount_amount
	 * @param MagentoStructString $_row_total
	 * @param MagentoStructString $_weee_tax_applied_amount
	 * @param MagentoStructString $_base_discount_amount
	 * @param MagentoStructString $_base_weee_tax_disposition
	 * @param MagentoStructString $_price_incl_tax
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_weee_tax_disposition
	 * @param MagentoStructString $_base_price_incl_tax
	 * @param MagentoStructString $_qty
	 * @param MagentoStructString $_base_cost
	 * @param MagentoStructString $_base_weee_tax_applied_row_amount
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_base_row_total_incl_tax
	 * @param MagentoStructString $_row_total_incl_tax
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_order_item_id
	 * @param MagentoStructString $_additional_data
	 * @param MagentoStructString $_description
	 * @param MagentoStructString $_weee_tax_applied
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_hidden_tax_amount
	 * @param MagentoStructString $_base_hidden_tax_amount
	 * @return MagentoStructSalesOrderCreditmemoItemEntity
	 */
	public function __construct($_item_id = NULL,$_parent_id = NULL,$_weee_tax_applied_row_amount = NULL,$_base_price = NULL,$_base_weee_tax_row_disposition = NULL,$_tax_amount = NULL,$_base_weee_tax_applied_amount = NULL,$_weee_tax_row_disposition = NULL,$_base_row_total = NULL,$_discount_amount = NULL,$_row_total = NULL,$_weee_tax_applied_amount = NULL,$_base_discount_amount = NULL,$_base_weee_tax_disposition = NULL,$_price_incl_tax = NULL,$_base_tax_amount = NULL,$_weee_tax_disposition = NULL,$_base_price_incl_tax = NULL,$_qty = NULL,$_base_cost = NULL,$_base_weee_tax_applied_row_amount = NULL,$_price = NULL,$_base_row_total_incl_tax = NULL,$_row_total_incl_tax = NULL,$_product_id = NULL,$_order_item_id = NULL,$_additional_data = NULL,$_description = NULL,$_weee_tax_applied = NULL,$_sku = NULL,$_name = NULL,$_hidden_tax_amount = NULL,$_base_hidden_tax_amount = NULL)
	{
		parent::__construct(array('item_id'=>$_item_id,'parent_id'=>$_parent_id,'weee_tax_applied_row_amount'=>$_weee_tax_applied_row_amount,'base_price'=>$_base_price,'base_weee_tax_row_disposition'=>$_base_weee_tax_row_disposition,'tax_amount'=>$_tax_amount,'base_weee_tax_applied_amount'=>$_base_weee_tax_applied_amount,'weee_tax_row_disposition'=>$_weee_tax_row_disposition,'base_row_total'=>$_base_row_total,'discount_amount'=>$_discount_amount,'row_total'=>$_row_total,'weee_tax_applied_amount'=>$_weee_tax_applied_amount,'base_discount_amount'=>$_base_discount_amount,'base_weee_tax_disposition'=>$_base_weee_tax_disposition,'price_incl_tax'=>$_price_incl_tax,'base_tax_amount'=>$_base_tax_amount,'weee_tax_disposition'=>$_weee_tax_disposition,'base_price_incl_tax'=>$_base_price_incl_tax,'qty'=>$_qty,'base_cost'=>$_base_cost,'base_weee_tax_applied_row_amount'=>$_base_weee_tax_applied_row_amount,'price'=>$_price,'base_row_total_incl_tax'=>$_base_row_total_incl_tax,'row_total_incl_tax'=>$_row_total_incl_tax,'product_id'=>$_product_id,'order_item_id'=>$_order_item_id,'additional_data'=>$_additional_data,'description'=>$_description,'weee_tax_applied'=>$_weee_tax_applied,'sku'=>$_sku,'name'=>$_name,'hidden_tax_amount'=>$_hidden_tax_amount,'base_hidden_tax_amount'=>$_base_hidden_tax_amount));
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
	 * Get price_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getPrice_incl_tax()
	{
		return $this->price_incl_tax;
	}
	/**
	 * Set price_incl_tax value
	 * @param MagentoStructString $_price_incl_tax the price_incl_tax
	 * @return MagentoStructString
	 */
	public function setPrice_incl_tax($_price_incl_tax)
	{
		return ($this->price_incl_tax = $_price_incl_tax);
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
	 * Get base_price_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getBase_price_incl_tax()
	{
		return $this->base_price_incl_tax;
	}
	/**
	 * Set base_price_incl_tax value
	 * @param MagentoStructString $_base_price_incl_tax the base_price_incl_tax
	 * @return MagentoStructString
	 */
	public function setBase_price_incl_tax($_base_price_incl_tax)
	{
		return ($this->base_price_incl_tax = $_base_price_incl_tax);
	}
	/**
	 * Get qty value
	 * @return MagentoStructString|null
	 */
	public function getQty()
	{
		return $this->qty;
	}
	/**
	 * Set qty value
	 * @param MagentoStructString $_qty the qty
	 * @return MagentoStructString
	 */
	public function setQty($_qty)
	{
		return ($this->qty = $_qty);
	}
	/**
	 * Get base_cost value
	 * @return MagentoStructString|null
	 */
	public function getBase_cost()
	{
		return $this->base_cost;
	}
	/**
	 * Set base_cost value
	 * @param MagentoStructString $_base_cost the base_cost
	 * @return MagentoStructString
	 */
	public function setBase_cost($_base_cost)
	{
		return ($this->base_cost = $_base_cost);
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
	 * Get base_row_total_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getBase_row_total_incl_tax()
	{
		return $this->base_row_total_incl_tax;
	}
	/**
	 * Set base_row_total_incl_tax value
	 * @param MagentoStructString $_base_row_total_incl_tax the base_row_total_incl_tax
	 * @return MagentoStructString
	 */
	public function setBase_row_total_incl_tax($_base_row_total_incl_tax)
	{
		return ($this->base_row_total_incl_tax = $_base_row_total_incl_tax);
	}
	/**
	 * Get row_total_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getRow_total_incl_tax()
	{
		return $this->row_total_incl_tax;
	}
	/**
	 * Set row_total_incl_tax value
	 * @param MagentoStructString $_row_total_incl_tax the row_total_incl_tax
	 * @return MagentoStructString
	 */
	public function setRow_total_incl_tax($_row_total_incl_tax)
	{
		return ($this->row_total_incl_tax = $_row_total_incl_tax);
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
	 * Get order_item_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_item_id()
	{
		return $this->order_item_id;
	}
	/**
	 * Set order_item_id value
	 * @param MagentoStructString $_order_item_id the order_item_id
	 * @return MagentoStructString
	 */
	public function setOrder_item_id($_order_item_id)
	{
		return ($this->order_item_id = $_order_item_id);
	}
	/**
	 * Get additional_data value
	 * @return MagentoStructString|null
	 */
	public function getAdditional_data()
	{
		return $this->additional_data;
	}
	/**
	 * Set additional_data value
	 * @param MagentoStructString $_additional_data the additional_data
	 * @return MagentoStructString
	 */
	public function setAdditional_data($_additional_data)
	{
		return ($this->additional_data = $_additional_data);
	}
	/**
	 * Get description value
	 * @return MagentoStructString|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param MagentoStructString $_description the description
	 * @return MagentoStructString
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
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
	 * Get hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getHidden_tax_amount()
	{
		return $this->hidden_tax_amount;
	}
	/**
	 * Set hidden_tax_amount value
	 * @param MagentoStructString $_hidden_tax_amount the hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setHidden_tax_amount($_hidden_tax_amount)
	{
		return ($this->hidden_tax_amount = $_hidden_tax_amount);
	}
	/**
	 * Get base_hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_hidden_tax_amount()
	{
		return $this->base_hidden_tax_amount;
	}
	/**
	 * Set base_hidden_tax_amount value
	 * @param MagentoStructString $_base_hidden_tax_amount the base_hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_hidden_tax_amount($_base_hidden_tax_amount)
	{
		return ($this->base_hidden_tax_amount = $_base_hidden_tax_amount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderCreditmemoItemEntity
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