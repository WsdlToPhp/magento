<?php
/**
 * File for class MagentoStructCatalogInventoryStockItemUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogInventoryStockItemUpdateEntity originally named catalogInventoryStockItemUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogInventoryStockItemUpdateEntity extends MagentoWsdlClass
{
	/**
	 * The qty
	 * @var MagentoStructString
	 */
	public $qty;
	/**
	 * The is_in_stock
	 * @var MagentoStructInt
	 */
	public $is_in_stock;
	/**
	 * The manage_stock
	 * @var MagentoStructInt
	 */
	public $manage_stock;
	/**
	 * The use_config_manage_stock
	 * @var MagentoStructInt
	 */
	public $use_config_manage_stock;
	/**
	 * The min_qty
	 * @var MagentoStructInt
	 */
	public $min_qty;
	/**
	 * The use_config_min_qty
	 * @var MagentoStructInt
	 */
	public $use_config_min_qty;
	/**
	 * The min_sale_qty
	 * @var MagentoStructInt
	 */
	public $min_sale_qty;
	/**
	 * The use_config_min_sale_qty
	 * @var MagentoStructInt
	 */
	public $use_config_min_sale_qty;
	/**
	 * The max_sale_qty
	 * @var MagentoStructInt
	 */
	public $max_sale_qty;
	/**
	 * The use_config_max_sale_qty
	 * @var MagentoStructInt
	 */
	public $use_config_max_sale_qty;
	/**
	 * The is_qty_decimal
	 * @var MagentoStructInt
	 */
	public $is_qty_decimal;
	/**
	 * The backorders
	 * @var MagentoStructInt
	 */
	public $backorders;
	/**
	 * The use_config_backorders
	 * @var MagentoStructInt
	 */
	public $use_config_backorders;
	/**
	 * The notify_stock_qty
	 * @var MagentoStructInt
	 */
	public $notify_stock_qty;
	/**
	 * The use_config_notify_stock_qty
	 * @var MagentoStructInt
	 */
	public $use_config_notify_stock_qty;
	/**
	 * Constructor method for catalogInventoryStockItemUpdateEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_qty
	 * @param MagentoStructInt $_is_in_stock
	 * @param MagentoStructInt $_manage_stock
	 * @param MagentoStructInt $_use_config_manage_stock
	 * @param MagentoStructInt $_min_qty
	 * @param MagentoStructInt $_use_config_min_qty
	 * @param MagentoStructInt $_min_sale_qty
	 * @param MagentoStructInt $_use_config_min_sale_qty
	 * @param MagentoStructInt $_max_sale_qty
	 * @param MagentoStructInt $_use_config_max_sale_qty
	 * @param MagentoStructInt $_is_qty_decimal
	 * @param MagentoStructInt $_backorders
	 * @param MagentoStructInt $_use_config_backorders
	 * @param MagentoStructInt $_notify_stock_qty
	 * @param MagentoStructInt $_use_config_notify_stock_qty
	 * @return MagentoStructCatalogInventoryStockItemUpdateEntity
	 */
	public function __construct($_qty = NULL,$_is_in_stock = NULL,$_manage_stock = NULL,$_use_config_manage_stock = NULL,$_min_qty = NULL,$_use_config_min_qty = NULL,$_min_sale_qty = NULL,$_use_config_min_sale_qty = NULL,$_max_sale_qty = NULL,$_use_config_max_sale_qty = NULL,$_is_qty_decimal = NULL,$_backorders = NULL,$_use_config_backorders = NULL,$_notify_stock_qty = NULL,$_use_config_notify_stock_qty = NULL)
	{
		parent::__construct(array('qty'=>$_qty,'is_in_stock'=>$_is_in_stock,'manage_stock'=>$_manage_stock,'use_config_manage_stock'=>$_use_config_manage_stock,'min_qty'=>$_min_qty,'use_config_min_qty'=>$_use_config_min_qty,'min_sale_qty'=>$_min_sale_qty,'use_config_min_sale_qty'=>$_use_config_min_sale_qty,'max_sale_qty'=>$_max_sale_qty,'use_config_max_sale_qty'=>$_use_config_max_sale_qty,'is_qty_decimal'=>$_is_qty_decimal,'backorders'=>$_backorders,'use_config_backorders'=>$_use_config_backorders,'notify_stock_qty'=>$_notify_stock_qty,'use_config_notify_stock_qty'=>$_use_config_notify_stock_qty));
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
	 * Get is_in_stock value
	 * @return MagentoStructInt|null
	 */
	public function getIs_in_stock()
	{
		return $this->is_in_stock;
	}
	/**
	 * Set is_in_stock value
	 * @param MagentoStructInt $_is_in_stock the is_in_stock
	 * @return MagentoStructInt
	 */
	public function setIs_in_stock($_is_in_stock)
	{
		return ($this->is_in_stock = $_is_in_stock);
	}
	/**
	 * Get manage_stock value
	 * @return MagentoStructInt|null
	 */
	public function getManage_stock()
	{
		return $this->manage_stock;
	}
	/**
	 * Set manage_stock value
	 * @param MagentoStructInt $_manage_stock the manage_stock
	 * @return MagentoStructInt
	 */
	public function setManage_stock($_manage_stock)
	{
		return ($this->manage_stock = $_manage_stock);
	}
	/**
	 * Get use_config_manage_stock value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_manage_stock()
	{
		return $this->use_config_manage_stock;
	}
	/**
	 * Set use_config_manage_stock value
	 * @param MagentoStructInt $_use_config_manage_stock the use_config_manage_stock
	 * @return MagentoStructInt
	 */
	public function setUse_config_manage_stock($_use_config_manage_stock)
	{
		return ($this->use_config_manage_stock = $_use_config_manage_stock);
	}
	/**
	 * Get min_qty value
	 * @return MagentoStructInt|null
	 */
	public function getMin_qty()
	{
		return $this->min_qty;
	}
	/**
	 * Set min_qty value
	 * @param MagentoStructInt $_min_qty the min_qty
	 * @return MagentoStructInt
	 */
	public function setMin_qty($_min_qty)
	{
		return ($this->min_qty = $_min_qty);
	}
	/**
	 * Get use_config_min_qty value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_min_qty()
	{
		return $this->use_config_min_qty;
	}
	/**
	 * Set use_config_min_qty value
	 * @param MagentoStructInt $_use_config_min_qty the use_config_min_qty
	 * @return MagentoStructInt
	 */
	public function setUse_config_min_qty($_use_config_min_qty)
	{
		return ($this->use_config_min_qty = $_use_config_min_qty);
	}
	/**
	 * Get min_sale_qty value
	 * @return MagentoStructInt|null
	 */
	public function getMin_sale_qty()
	{
		return $this->min_sale_qty;
	}
	/**
	 * Set min_sale_qty value
	 * @param MagentoStructInt $_min_sale_qty the min_sale_qty
	 * @return MagentoStructInt
	 */
	public function setMin_sale_qty($_min_sale_qty)
	{
		return ($this->min_sale_qty = $_min_sale_qty);
	}
	/**
	 * Get use_config_min_sale_qty value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_min_sale_qty()
	{
		return $this->use_config_min_sale_qty;
	}
	/**
	 * Set use_config_min_sale_qty value
	 * @param MagentoStructInt $_use_config_min_sale_qty the use_config_min_sale_qty
	 * @return MagentoStructInt
	 */
	public function setUse_config_min_sale_qty($_use_config_min_sale_qty)
	{
		return ($this->use_config_min_sale_qty = $_use_config_min_sale_qty);
	}
	/**
	 * Get max_sale_qty value
	 * @return MagentoStructInt|null
	 */
	public function getMax_sale_qty()
	{
		return $this->max_sale_qty;
	}
	/**
	 * Set max_sale_qty value
	 * @param MagentoStructInt $_max_sale_qty the max_sale_qty
	 * @return MagentoStructInt
	 */
	public function setMax_sale_qty($_max_sale_qty)
	{
		return ($this->max_sale_qty = $_max_sale_qty);
	}
	/**
	 * Get use_config_max_sale_qty value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_max_sale_qty()
	{
		return $this->use_config_max_sale_qty;
	}
	/**
	 * Set use_config_max_sale_qty value
	 * @param MagentoStructInt $_use_config_max_sale_qty the use_config_max_sale_qty
	 * @return MagentoStructInt
	 */
	public function setUse_config_max_sale_qty($_use_config_max_sale_qty)
	{
		return ($this->use_config_max_sale_qty = $_use_config_max_sale_qty);
	}
	/**
	 * Get is_qty_decimal value
	 * @return MagentoStructInt|null
	 */
	public function getIs_qty_decimal()
	{
		return $this->is_qty_decimal;
	}
	/**
	 * Set is_qty_decimal value
	 * @param MagentoStructInt $_is_qty_decimal the is_qty_decimal
	 * @return MagentoStructInt
	 */
	public function setIs_qty_decimal($_is_qty_decimal)
	{
		return ($this->is_qty_decimal = $_is_qty_decimal);
	}
	/**
	 * Get backorders value
	 * @return MagentoStructInt|null
	 */
	public function getBackorders()
	{
		return $this->backorders;
	}
	/**
	 * Set backorders value
	 * @param MagentoStructInt $_backorders the backorders
	 * @return MagentoStructInt
	 */
	public function setBackorders($_backorders)
	{
		return ($this->backorders = $_backorders);
	}
	/**
	 * Get use_config_backorders value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_backorders()
	{
		return $this->use_config_backorders;
	}
	/**
	 * Set use_config_backorders value
	 * @param MagentoStructInt $_use_config_backorders the use_config_backorders
	 * @return MagentoStructInt
	 */
	public function setUse_config_backorders($_use_config_backorders)
	{
		return ($this->use_config_backorders = $_use_config_backorders);
	}
	/**
	 * Get notify_stock_qty value
	 * @return MagentoStructInt|null
	 */
	public function getNotify_stock_qty()
	{
		return $this->notify_stock_qty;
	}
	/**
	 * Set notify_stock_qty value
	 * @param MagentoStructInt $_notify_stock_qty the notify_stock_qty
	 * @return MagentoStructInt
	 */
	public function setNotify_stock_qty($_notify_stock_qty)
	{
		return ($this->notify_stock_qty = $_notify_stock_qty);
	}
	/**
	 * Get use_config_notify_stock_qty value
	 * @return MagentoStructInt|null
	 */
	public function getUse_config_notify_stock_qty()
	{
		return $this->use_config_notify_stock_qty;
	}
	/**
	 * Set use_config_notify_stock_qty value
	 * @param MagentoStructInt $_use_config_notify_stock_qty the use_config_notify_stock_qty
	 * @return MagentoStructInt
	 */
	public function setUse_config_notify_stock_qty($_use_config_notify_stock_qty)
	{
		return ($this->use_config_notify_stock_qty = $_use_config_notify_stock_qty);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogInventoryStockItemUpdateEntity
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