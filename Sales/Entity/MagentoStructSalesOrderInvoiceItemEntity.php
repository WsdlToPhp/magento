<?php
/**
 * File for class MagentoStructSalesOrderInvoiceItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderInvoiceItemEntity originally named salesOrderInvoiceItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderInvoiceItemEntity extends MagentoWsdlClass
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
	 * The weee_tax_applied
	 * @var MagentoStructString
	 */
	public $weee_tax_applied;
	/**
	 * The qty
	 * @var MagentoStructString
	 */
	public $qty;
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
	 * The tax_amount
	 * @var MagentoStructString
	 */
	public $tax_amount;
	/**
	 * The row_total
	 * @var MagentoStructString
	 */
	public $row_total;
	/**
	 * The base_price
	 * @var MagentoStructString
	 */
	public $base_price;
	/**
	 * The base_tax_amount
	 * @var MagentoStructString
	 */
	public $base_tax_amount;
	/**
	 * The base_row_total
	 * @var MagentoStructString
	 */
	public $base_row_total;
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
	 * The order_item_id
	 * @var MagentoStructString
	 */
	public $order_item_id;
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The item_id
	 * @var MagentoStructString
	 */
	public $item_id;
	/**
	 * Constructor method for salesOrderInvoiceItemEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_weee_tax_applied
	 * @param MagentoStructString $_qty
	 * @param MagentoStructString $_cost
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_row_total
	 * @param MagentoStructString $_base_price
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_base_row_total
	 * @param MagentoStructString $_base_weee_tax_applied_amount
	 * @param MagentoStructString $_base_weee_tax_applied_row_amount
	 * @param MagentoStructString $_weee_tax_applied_amount
	 * @param MagentoStructString $_weee_tax_applied_row_amount
	 * @param MagentoStructString $_weee_tax_disposition
	 * @param MagentoStructString $_weee_tax_row_disposition
	 * @param MagentoStructString $_base_weee_tax_disposition
	 * @param MagentoStructString $_base_weee_tax_row_disposition
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_order_item_id
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_item_id
	 * @return MagentoStructSalesOrderInvoiceItemEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_weee_tax_applied = NULL,$_qty = NULL,$_cost = NULL,$_price = NULL,$_tax_amount = NULL,$_row_total = NULL,$_base_price = NULL,$_base_tax_amount = NULL,$_base_row_total = NULL,$_base_weee_tax_applied_amount = NULL,$_base_weee_tax_applied_row_amount = NULL,$_weee_tax_applied_amount = NULL,$_weee_tax_applied_row_amount = NULL,$_weee_tax_disposition = NULL,$_weee_tax_row_disposition = NULL,$_base_weee_tax_disposition = NULL,$_base_weee_tax_row_disposition = NULL,$_sku = NULL,$_name = NULL,$_order_item_id = NULL,$_product_id = NULL,$_item_id = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'weee_tax_applied'=>$_weee_tax_applied,'qty'=>$_qty,'cost'=>$_cost,'price'=>$_price,'tax_amount'=>$_tax_amount,'row_total'=>$_row_total,'base_price'=>$_base_price,'base_tax_amount'=>$_base_tax_amount,'base_row_total'=>$_base_row_total,'base_weee_tax_applied_amount'=>$_base_weee_tax_applied_amount,'base_weee_tax_applied_row_amount'=>$_base_weee_tax_applied_row_amount,'weee_tax_applied_amount'=>$_weee_tax_applied_amount,'weee_tax_applied_row_amount'=>$_weee_tax_applied_row_amount,'weee_tax_disposition'=>$_weee_tax_disposition,'weee_tax_row_disposition'=>$_weee_tax_row_disposition,'base_weee_tax_disposition'=>$_base_weee_tax_disposition,'base_weee_tax_row_disposition'=>$_base_weee_tax_row_disposition,'sku'=>$_sku,'name'=>$_name,'order_item_id'=>$_order_item_id,'product_id'=>$_product_id,'item_id'=>$_item_id));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderInvoiceItemEntity
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