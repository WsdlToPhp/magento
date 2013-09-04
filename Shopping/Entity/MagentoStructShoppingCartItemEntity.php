<?php
/**
 * File for class MagentoStructShoppingCartItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartItemEntity originally named shoppingCartItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartItemEntity extends MagentoWsdlClass
{
	/**
	 * The item_id
	 * @var MagentoStructString
	 */
	public $item_id;
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
	 * The store_id
	 * @var MagentoStructString
	 */
	public $store_id;
	/**
	 * The parent_item_id
	 * @var MagentoStructString
	 */
	public $parent_item_id;
	/**
	 * The is_virtual
	 * @var MagentoStructInt
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
	 * The description
	 * @var MagentoStructString
	 */
	public $description;
	/**
	 * The applied_rule_ids
	 * @var MagentoStructString
	 */
	public $applied_rule_ids;
	/**
	 * The additional_data
	 * @var MagentoStructString
	 */
	public $additional_data;
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
	 * The weight
	 * @var MagentoStructDouble
	 */
	public $weight;
	/**
	 * The qty
	 * @var MagentoStructDouble
	 */
	public $qty;
	/**
	 * The price
	 * @var MagentoStructDouble
	 */
	public $price;
	/**
	 * The base_price
	 * @var MagentoStructDouble
	 */
	public $base_price;
	/**
	 * The custom_price
	 * @var MagentoStructDouble
	 */
	public $custom_price;
	/**
	 * The discount_percent
	 * @var MagentoStructDouble
	 */
	public $discount_percent;
	/**
	 * The discount_amount
	 * @var MagentoStructDouble
	 */
	public $discount_amount;
	/**
	 * The base_discount_amount
	 * @var MagentoStructDouble
	 */
	public $base_discount_amount;
	/**
	 * The tax_percent
	 * @var MagentoStructDouble
	 */
	public $tax_percent;
	/**
	 * The tax_amount
	 * @var MagentoStructDouble
	 */
	public $tax_amount;
	/**
	 * The base_tax_amount
	 * @var MagentoStructDouble
	 */
	public $base_tax_amount;
	/**
	 * The row_total
	 * @var MagentoStructDouble
	 */
	public $row_total;
	/**
	 * The base_row_total
	 * @var MagentoStructDouble
	 */
	public $base_row_total;
	/**
	 * The row_total_with_discount
	 * @var MagentoStructDouble
	 */
	public $row_total_with_discount;
	/**
	 * The row_weight
	 * @var MagentoStructDouble
	 */
	public $row_weight;
	/**
	 * The product_type
	 * @var MagentoStructString
	 */
	public $product_type;
	/**
	 * The base_tax_before_discount
	 * @var MagentoStructDouble
	 */
	public $base_tax_before_discount;
	/**
	 * The tax_before_discount
	 * @var MagentoStructDouble
	 */
	public $tax_before_discount;
	/**
	 * The original_custom_price
	 * @var MagentoStructDouble
	 */
	public $original_custom_price;
	/**
	 * The base_cost
	 * @var MagentoStructDouble
	 */
	public $base_cost;
	/**
	 * The price_incl_tax
	 * @var MagentoStructDouble
	 */
	public $price_incl_tax;
	/**
	 * The base_price_incl_tax
	 * @var MagentoStructDouble
	 */
	public $base_price_incl_tax;
	/**
	 * The row_total_incl_tax
	 * @var MagentoStructDouble
	 */
	public $row_total_incl_tax;
	/**
	 * The base_row_total_incl_tax
	 * @var MagentoStructDouble
	 */
	public $base_row_total_incl_tax;
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
	 * The weee_tax_applied
	 * @var MagentoStructDouble
	 */
	public $weee_tax_applied;
	/**
	 * The weee_tax_applied_amount
	 * @var MagentoStructDouble
	 */
	public $weee_tax_applied_amount;
	/**
	 * The weee_tax_applied_row_amount
	 * @var MagentoStructDouble
	 */
	public $weee_tax_applied_row_amount;
	/**
	 * The base_weee_tax_applied_amount
	 * @var MagentoStructDouble
	 */
	public $base_weee_tax_applied_amount;
	/**
	 * The base_weee_tax_applied_row_amount
	 * @var MagentoStructDouble
	 */
	public $base_weee_tax_applied_row_amount;
	/**
	 * The weee_tax_disposition
	 * @var MagentoStructDouble
	 */
	public $weee_tax_disposition;
	/**
	 * The weee_tax_row_disposition
	 * @var MagentoStructDouble
	 */
	public $weee_tax_row_disposition;
	/**
	 * The base_weee_tax_disposition
	 * @var MagentoStructDouble
	 */
	public $base_weee_tax_disposition;
	/**
	 * The base_weee_tax_row_disposition
	 * @var MagentoStructDouble
	 */
	public $base_weee_tax_row_disposition;
	/**
	 * The tax_class_id
	 * @var MagentoStructString
	 */
	public $tax_class_id;
	/**
	 * Constructor method for shoppingCartItemEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_item_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_parent_item_id
	 * @param MagentoStructInt $_is_virtual
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_description
	 * @param MagentoStructString $_applied_rule_ids
	 * @param MagentoStructString $_additional_data
	 * @param MagentoStructString $_free_shipping
	 * @param MagentoStructString $_is_qty_decimal
	 * @param MagentoStructString $_no_discount
	 * @param MagentoStructDouble $_weight
	 * @param MagentoStructDouble $_qty
	 * @param MagentoStructDouble $_price
	 * @param MagentoStructDouble $_base_price
	 * @param MagentoStructDouble $_custom_price
	 * @param MagentoStructDouble $_discount_percent
	 * @param MagentoStructDouble $_discount_amount
	 * @param MagentoStructDouble $_base_discount_amount
	 * @param MagentoStructDouble $_tax_percent
	 * @param MagentoStructDouble $_tax_amount
	 * @param MagentoStructDouble $_base_tax_amount
	 * @param MagentoStructDouble $_row_total
	 * @param MagentoStructDouble $_base_row_total
	 * @param MagentoStructDouble $_row_total_with_discount
	 * @param MagentoStructDouble $_row_weight
	 * @param MagentoStructString $_product_type
	 * @param MagentoStructDouble $_base_tax_before_discount
	 * @param MagentoStructDouble $_tax_before_discount
	 * @param MagentoStructDouble $_original_custom_price
	 * @param MagentoStructDouble $_base_cost
	 * @param MagentoStructDouble $_price_incl_tax
	 * @param MagentoStructDouble $_base_price_incl_tax
	 * @param MagentoStructDouble $_row_total_incl_tax
	 * @param MagentoStructDouble $_base_row_total_incl_tax
	 * @param MagentoStructString $_gift_message_id
	 * @param MagentoStructString $_gift_message
	 * @param MagentoStructString $_gift_message_available
	 * @param MagentoStructDouble $_weee_tax_applied
	 * @param MagentoStructDouble $_weee_tax_applied_amount
	 * @param MagentoStructDouble $_weee_tax_applied_row_amount
	 * @param MagentoStructDouble $_base_weee_tax_applied_amount
	 * @param MagentoStructDouble $_base_weee_tax_applied_row_amount
	 * @param MagentoStructDouble $_weee_tax_disposition
	 * @param MagentoStructDouble $_weee_tax_row_disposition
	 * @param MagentoStructDouble $_base_weee_tax_disposition
	 * @param MagentoStructDouble $_base_weee_tax_row_disposition
	 * @param MagentoStructString $_tax_class_id
	 * @return MagentoStructShoppingCartItemEntity
	 */
	public function __construct($_item_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_product_id = NULL,$_store_id = NULL,$_parent_item_id = NULL,$_is_virtual = NULL,$_sku = NULL,$_name = NULL,$_description = NULL,$_applied_rule_ids = NULL,$_additional_data = NULL,$_free_shipping = NULL,$_is_qty_decimal = NULL,$_no_discount = NULL,$_weight = NULL,$_qty = NULL,$_price = NULL,$_base_price = NULL,$_custom_price = NULL,$_discount_percent = NULL,$_discount_amount = NULL,$_base_discount_amount = NULL,$_tax_percent = NULL,$_tax_amount = NULL,$_base_tax_amount = NULL,$_row_total = NULL,$_base_row_total = NULL,$_row_total_with_discount = NULL,$_row_weight = NULL,$_product_type = NULL,$_base_tax_before_discount = NULL,$_tax_before_discount = NULL,$_original_custom_price = NULL,$_base_cost = NULL,$_price_incl_tax = NULL,$_base_price_incl_tax = NULL,$_row_total_incl_tax = NULL,$_base_row_total_incl_tax = NULL,$_gift_message_id = NULL,$_gift_message = NULL,$_gift_message_available = NULL,$_weee_tax_applied = NULL,$_weee_tax_applied_amount = NULL,$_weee_tax_applied_row_amount = NULL,$_base_weee_tax_applied_amount = NULL,$_base_weee_tax_applied_row_amount = NULL,$_weee_tax_disposition = NULL,$_weee_tax_row_disposition = NULL,$_base_weee_tax_disposition = NULL,$_base_weee_tax_row_disposition = NULL,$_tax_class_id = NULL)
	{
		parent::__construct(array('item_id'=>$_item_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'product_id'=>$_product_id,'store_id'=>$_store_id,'parent_item_id'=>$_parent_item_id,'is_virtual'=>$_is_virtual,'sku'=>$_sku,'name'=>$_name,'description'=>$_description,'applied_rule_ids'=>$_applied_rule_ids,'additional_data'=>$_additional_data,'free_shipping'=>$_free_shipping,'is_qty_decimal'=>$_is_qty_decimal,'no_discount'=>$_no_discount,'weight'=>$_weight,'qty'=>$_qty,'price'=>$_price,'base_price'=>$_base_price,'custom_price'=>$_custom_price,'discount_percent'=>$_discount_percent,'discount_amount'=>$_discount_amount,'base_discount_amount'=>$_base_discount_amount,'tax_percent'=>$_tax_percent,'tax_amount'=>$_tax_amount,'base_tax_amount'=>$_base_tax_amount,'row_total'=>$_row_total,'base_row_total'=>$_base_row_total,'row_total_with_discount'=>$_row_total_with_discount,'row_weight'=>$_row_weight,'product_type'=>$_product_type,'base_tax_before_discount'=>$_base_tax_before_discount,'tax_before_discount'=>$_tax_before_discount,'original_custom_price'=>$_original_custom_price,'base_cost'=>$_base_cost,'price_incl_tax'=>$_price_incl_tax,'base_price_incl_tax'=>$_base_price_incl_tax,'row_total_incl_tax'=>$_row_total_incl_tax,'base_row_total_incl_tax'=>$_base_row_total_incl_tax,'gift_message_id'=>$_gift_message_id,'gift_message'=>$_gift_message,'gift_message_available'=>$_gift_message_available,'weee_tax_applied'=>$_weee_tax_applied,'weee_tax_applied_amount'=>$_weee_tax_applied_amount,'weee_tax_applied_row_amount'=>$_weee_tax_applied_row_amount,'base_weee_tax_applied_amount'=>$_base_weee_tax_applied_amount,'base_weee_tax_applied_row_amount'=>$_base_weee_tax_applied_row_amount,'weee_tax_disposition'=>$_weee_tax_disposition,'weee_tax_row_disposition'=>$_weee_tax_row_disposition,'base_weee_tax_disposition'=>$_base_weee_tax_disposition,'base_weee_tax_row_disposition'=>$_base_weee_tax_row_disposition,'tax_class_id'=>$_tax_class_id));
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
	 * Get parent_item_id value
	 * @return MagentoStructString|null
	 */
	public function getParent_item_id()
	{
		return $this->parent_item_id;
	}
	/**
	 * Set parent_item_id value
	 * @param MagentoStructString $_parent_item_id the parent_item_id
	 * @return MagentoStructString
	 */
	public function setParent_item_id($_parent_item_id)
	{
		return ($this->parent_item_id = $_parent_item_id);
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
	 * Get weight value
	 * @return MagentoStructDouble|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param MagentoStructDouble $_weight the weight
	 * @return MagentoStructDouble
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Get qty value
	 * @return MagentoStructDouble|null
	 */
	public function getQty()
	{
		return $this->qty;
	}
	/**
	 * Set qty value
	 * @param MagentoStructDouble $_qty the qty
	 * @return MagentoStructDouble
	 */
	public function setQty($_qty)
	{
		return ($this->qty = $_qty);
	}
	/**
	 * Get price value
	 * @return MagentoStructDouble|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param MagentoStructDouble $_price the price
	 * @return MagentoStructDouble
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get base_price value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_price()
	{
		return $this->base_price;
	}
	/**
	 * Set base_price value
	 * @param MagentoStructDouble $_base_price the base_price
	 * @return MagentoStructDouble
	 */
	public function setBase_price($_base_price)
	{
		return ($this->base_price = $_base_price);
	}
	/**
	 * Get custom_price value
	 * @return MagentoStructDouble|null
	 */
	public function getCustom_price()
	{
		return $this->custom_price;
	}
	/**
	 * Set custom_price value
	 * @param MagentoStructDouble $_custom_price the custom_price
	 * @return MagentoStructDouble
	 */
	public function setCustom_price($_custom_price)
	{
		return ($this->custom_price = $_custom_price);
	}
	/**
	 * Get discount_percent value
	 * @return MagentoStructDouble|null
	 */
	public function getDiscount_percent()
	{
		return $this->discount_percent;
	}
	/**
	 * Set discount_percent value
	 * @param MagentoStructDouble $_discount_percent the discount_percent
	 * @return MagentoStructDouble
	 */
	public function setDiscount_percent($_discount_percent)
	{
		return ($this->discount_percent = $_discount_percent);
	}
	/**
	 * Get discount_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getDiscount_amount()
	{
		return $this->discount_amount;
	}
	/**
	 * Set discount_amount value
	 * @param MagentoStructDouble $_discount_amount the discount_amount
	 * @return MagentoStructDouble
	 */
	public function setDiscount_amount($_discount_amount)
	{
		return ($this->discount_amount = $_discount_amount);
	}
	/**
	 * Get base_discount_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_discount_amount()
	{
		return $this->base_discount_amount;
	}
	/**
	 * Set base_discount_amount value
	 * @param MagentoStructDouble $_base_discount_amount the base_discount_amount
	 * @return MagentoStructDouble
	 */
	public function setBase_discount_amount($_base_discount_amount)
	{
		return ($this->base_discount_amount = $_base_discount_amount);
	}
	/**
	 * Get tax_percent value
	 * @return MagentoStructDouble|null
	 */
	public function getTax_percent()
	{
		return $this->tax_percent;
	}
	/**
	 * Set tax_percent value
	 * @param MagentoStructDouble $_tax_percent the tax_percent
	 * @return MagentoStructDouble
	 */
	public function setTax_percent($_tax_percent)
	{
		return ($this->tax_percent = $_tax_percent);
	}
	/**
	 * Get tax_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getTax_amount()
	{
		return $this->tax_amount;
	}
	/**
	 * Set tax_amount value
	 * @param MagentoStructDouble $_tax_amount the tax_amount
	 * @return MagentoStructDouble
	 */
	public function setTax_amount($_tax_amount)
	{
		return ($this->tax_amount = $_tax_amount);
	}
	/**
	 * Get base_tax_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_tax_amount()
	{
		return $this->base_tax_amount;
	}
	/**
	 * Set base_tax_amount value
	 * @param MagentoStructDouble $_base_tax_amount the base_tax_amount
	 * @return MagentoStructDouble
	 */
	public function setBase_tax_amount($_base_tax_amount)
	{
		return ($this->base_tax_amount = $_base_tax_amount);
	}
	/**
	 * Get row_total value
	 * @return MagentoStructDouble|null
	 */
	public function getRow_total()
	{
		return $this->row_total;
	}
	/**
	 * Set row_total value
	 * @param MagentoStructDouble $_row_total the row_total
	 * @return MagentoStructDouble
	 */
	public function setRow_total($_row_total)
	{
		return ($this->row_total = $_row_total);
	}
	/**
	 * Get base_row_total value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_row_total()
	{
		return $this->base_row_total;
	}
	/**
	 * Set base_row_total value
	 * @param MagentoStructDouble $_base_row_total the base_row_total
	 * @return MagentoStructDouble
	 */
	public function setBase_row_total($_base_row_total)
	{
		return ($this->base_row_total = $_base_row_total);
	}
	/**
	 * Get row_total_with_discount value
	 * @return MagentoStructDouble|null
	 */
	public function getRow_total_with_discount()
	{
		return $this->row_total_with_discount;
	}
	/**
	 * Set row_total_with_discount value
	 * @param MagentoStructDouble $_row_total_with_discount the row_total_with_discount
	 * @return MagentoStructDouble
	 */
	public function setRow_total_with_discount($_row_total_with_discount)
	{
		return ($this->row_total_with_discount = $_row_total_with_discount);
	}
	/**
	 * Get row_weight value
	 * @return MagentoStructDouble|null
	 */
	public function getRow_weight()
	{
		return $this->row_weight;
	}
	/**
	 * Set row_weight value
	 * @param MagentoStructDouble $_row_weight the row_weight
	 * @return MagentoStructDouble
	 */
	public function setRow_weight($_row_weight)
	{
		return ($this->row_weight = $_row_weight);
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
	 * Get base_tax_before_discount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_tax_before_discount()
	{
		return $this->base_tax_before_discount;
	}
	/**
	 * Set base_tax_before_discount value
	 * @param MagentoStructDouble $_base_tax_before_discount the base_tax_before_discount
	 * @return MagentoStructDouble
	 */
	public function setBase_tax_before_discount($_base_tax_before_discount)
	{
		return ($this->base_tax_before_discount = $_base_tax_before_discount);
	}
	/**
	 * Get tax_before_discount value
	 * @return MagentoStructDouble|null
	 */
	public function getTax_before_discount()
	{
		return $this->tax_before_discount;
	}
	/**
	 * Set tax_before_discount value
	 * @param MagentoStructDouble $_tax_before_discount the tax_before_discount
	 * @return MagentoStructDouble
	 */
	public function setTax_before_discount($_tax_before_discount)
	{
		return ($this->tax_before_discount = $_tax_before_discount);
	}
	/**
	 * Get original_custom_price value
	 * @return MagentoStructDouble|null
	 */
	public function getOriginal_custom_price()
	{
		return $this->original_custom_price;
	}
	/**
	 * Set original_custom_price value
	 * @param MagentoStructDouble $_original_custom_price the original_custom_price
	 * @return MagentoStructDouble
	 */
	public function setOriginal_custom_price($_original_custom_price)
	{
		return ($this->original_custom_price = $_original_custom_price);
	}
	/**
	 * Get base_cost value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_cost()
	{
		return $this->base_cost;
	}
	/**
	 * Set base_cost value
	 * @param MagentoStructDouble $_base_cost the base_cost
	 * @return MagentoStructDouble
	 */
	public function setBase_cost($_base_cost)
	{
		return ($this->base_cost = $_base_cost);
	}
	/**
	 * Get price_incl_tax value
	 * @return MagentoStructDouble|null
	 */
	public function getPrice_incl_tax()
	{
		return $this->price_incl_tax;
	}
	/**
	 * Set price_incl_tax value
	 * @param MagentoStructDouble $_price_incl_tax the price_incl_tax
	 * @return MagentoStructDouble
	 */
	public function setPrice_incl_tax($_price_incl_tax)
	{
		return ($this->price_incl_tax = $_price_incl_tax);
	}
	/**
	 * Get base_price_incl_tax value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_price_incl_tax()
	{
		return $this->base_price_incl_tax;
	}
	/**
	 * Set base_price_incl_tax value
	 * @param MagentoStructDouble $_base_price_incl_tax the base_price_incl_tax
	 * @return MagentoStructDouble
	 */
	public function setBase_price_incl_tax($_base_price_incl_tax)
	{
		return ($this->base_price_incl_tax = $_base_price_incl_tax);
	}
	/**
	 * Get row_total_incl_tax value
	 * @return MagentoStructDouble|null
	 */
	public function getRow_total_incl_tax()
	{
		return $this->row_total_incl_tax;
	}
	/**
	 * Set row_total_incl_tax value
	 * @param MagentoStructDouble $_row_total_incl_tax the row_total_incl_tax
	 * @return MagentoStructDouble
	 */
	public function setRow_total_incl_tax($_row_total_incl_tax)
	{
		return ($this->row_total_incl_tax = $_row_total_incl_tax);
	}
	/**
	 * Get base_row_total_incl_tax value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_row_total_incl_tax()
	{
		return $this->base_row_total_incl_tax;
	}
	/**
	 * Set base_row_total_incl_tax value
	 * @param MagentoStructDouble $_base_row_total_incl_tax the base_row_total_incl_tax
	 * @return MagentoStructDouble
	 */
	public function setBase_row_total_incl_tax($_base_row_total_incl_tax)
	{
		return ($this->base_row_total_incl_tax = $_base_row_total_incl_tax);
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
	 * Get weee_tax_applied value
	 * @return MagentoStructDouble|null
	 */
	public function getWeee_tax_applied()
	{
		return $this->weee_tax_applied;
	}
	/**
	 * Set weee_tax_applied value
	 * @param MagentoStructDouble $_weee_tax_applied the weee_tax_applied
	 * @return MagentoStructDouble
	 */
	public function setWeee_tax_applied($_weee_tax_applied)
	{
		return ($this->weee_tax_applied = $_weee_tax_applied);
	}
	/**
	 * Get weee_tax_applied_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getWeee_tax_applied_amount()
	{
		return $this->weee_tax_applied_amount;
	}
	/**
	 * Set weee_tax_applied_amount value
	 * @param MagentoStructDouble $_weee_tax_applied_amount the weee_tax_applied_amount
	 * @return MagentoStructDouble
	 */
	public function setWeee_tax_applied_amount($_weee_tax_applied_amount)
	{
		return ($this->weee_tax_applied_amount = $_weee_tax_applied_amount);
	}
	/**
	 * Get weee_tax_applied_row_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getWeee_tax_applied_row_amount()
	{
		return $this->weee_tax_applied_row_amount;
	}
	/**
	 * Set weee_tax_applied_row_amount value
	 * @param MagentoStructDouble $_weee_tax_applied_row_amount the weee_tax_applied_row_amount
	 * @return MagentoStructDouble
	 */
	public function setWeee_tax_applied_row_amount($_weee_tax_applied_row_amount)
	{
		return ($this->weee_tax_applied_row_amount = $_weee_tax_applied_row_amount);
	}
	/**
	 * Get base_weee_tax_applied_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_weee_tax_applied_amount()
	{
		return $this->base_weee_tax_applied_amount;
	}
	/**
	 * Set base_weee_tax_applied_amount value
	 * @param MagentoStructDouble $_base_weee_tax_applied_amount the base_weee_tax_applied_amount
	 * @return MagentoStructDouble
	 */
	public function setBase_weee_tax_applied_amount($_base_weee_tax_applied_amount)
	{
		return ($this->base_weee_tax_applied_amount = $_base_weee_tax_applied_amount);
	}
	/**
	 * Get base_weee_tax_applied_row_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_weee_tax_applied_row_amount()
	{
		return $this->base_weee_tax_applied_row_amount;
	}
	/**
	 * Set base_weee_tax_applied_row_amount value
	 * @param MagentoStructDouble $_base_weee_tax_applied_row_amount the base_weee_tax_applied_row_amount
	 * @return MagentoStructDouble
	 */
	public function setBase_weee_tax_applied_row_amount($_base_weee_tax_applied_row_amount)
	{
		return ($this->base_weee_tax_applied_row_amount = $_base_weee_tax_applied_row_amount);
	}
	/**
	 * Get weee_tax_disposition value
	 * @return MagentoStructDouble|null
	 */
	public function getWeee_tax_disposition()
	{
		return $this->weee_tax_disposition;
	}
	/**
	 * Set weee_tax_disposition value
	 * @param MagentoStructDouble $_weee_tax_disposition the weee_tax_disposition
	 * @return MagentoStructDouble
	 */
	public function setWeee_tax_disposition($_weee_tax_disposition)
	{
		return ($this->weee_tax_disposition = $_weee_tax_disposition);
	}
	/**
	 * Get weee_tax_row_disposition value
	 * @return MagentoStructDouble|null
	 */
	public function getWeee_tax_row_disposition()
	{
		return $this->weee_tax_row_disposition;
	}
	/**
	 * Set weee_tax_row_disposition value
	 * @param MagentoStructDouble $_weee_tax_row_disposition the weee_tax_row_disposition
	 * @return MagentoStructDouble
	 */
	public function setWeee_tax_row_disposition($_weee_tax_row_disposition)
	{
		return ($this->weee_tax_row_disposition = $_weee_tax_row_disposition);
	}
	/**
	 * Get base_weee_tax_disposition value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_weee_tax_disposition()
	{
		return $this->base_weee_tax_disposition;
	}
	/**
	 * Set base_weee_tax_disposition value
	 * @param MagentoStructDouble $_base_weee_tax_disposition the base_weee_tax_disposition
	 * @return MagentoStructDouble
	 */
	public function setBase_weee_tax_disposition($_base_weee_tax_disposition)
	{
		return ($this->base_weee_tax_disposition = $_base_weee_tax_disposition);
	}
	/**
	 * Get base_weee_tax_row_disposition value
	 * @return MagentoStructDouble|null
	 */
	public function getBase_weee_tax_row_disposition()
	{
		return $this->base_weee_tax_row_disposition;
	}
	/**
	 * Set base_weee_tax_row_disposition value
	 * @param MagentoStructDouble $_base_weee_tax_row_disposition the base_weee_tax_row_disposition
	 * @return MagentoStructDouble
	 */
	public function setBase_weee_tax_row_disposition($_base_weee_tax_row_disposition)
	{
		return ($this->base_weee_tax_row_disposition = $_base_weee_tax_row_disposition);
	}
	/**
	 * Get tax_class_id value
	 * @return MagentoStructString|null
	 */
	public function getTax_class_id()
	{
		return $this->tax_class_id;
	}
	/**
	 * Set tax_class_id value
	 * @param MagentoStructString $_tax_class_id the tax_class_id
	 * @return MagentoStructString
	 */
	public function setTax_class_id($_tax_class_id)
	{
		return ($this->tax_class_id = $_tax_class_id);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartItemEntity
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