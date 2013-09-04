<?php
/**
 * File for class MagentoStructShoppingCartShippingMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartShippingMethodEntity originally named shoppingCartShippingMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartShippingMethodEntity extends MagentoWsdlClass
{
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The carrier
	 * @var MagentoStructString
	 */
	public $carrier;
	/**
	 * The carrier_title
	 * @var MagentoStructString
	 */
	public $carrier_title;
	/**
	 * The method
	 * @var MagentoStructString
	 */
	public $method;
	/**
	 * The method_title
	 * @var MagentoStructString
	 */
	public $method_title;
	/**
	 * The method_description
	 * @var MagentoStructString
	 */
	public $method_description;
	/**
	 * The price
	 * @var MagentoStructDouble
	 */
	public $price;
	/**
	 * Constructor method for shoppingCartShippingMethodEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_carrier
	 * @param MagentoStructString $_carrier_title
	 * @param MagentoStructString $_method
	 * @param MagentoStructString $_method_title
	 * @param MagentoStructString $_method_description
	 * @param MagentoStructDouble $_price
	 * @return MagentoStructShoppingCartShippingMethodEntity
	 */
	public function __construct($_code = NULL,$_carrier = NULL,$_carrier_title = NULL,$_method = NULL,$_method_title = NULL,$_method_description = NULL,$_price = NULL)
	{
		parent::__construct(array('code'=>$_code,'carrier'=>$_carrier,'carrier_title'=>$_carrier_title,'method'=>$_method,'method_title'=>$_method_title,'method_description'=>$_method_description,'price'=>$_price));
	}
	/**
	 * Get code value
	 * @return MagentoStructString|null
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set code value
	 * @param MagentoStructString $_code the code
	 * @return MagentoStructString
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get carrier value
	 * @return MagentoStructString|null
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}
	/**
	 * Set carrier value
	 * @param MagentoStructString $_carrier the carrier
	 * @return MagentoStructString
	 */
	public function setCarrier($_carrier)
	{
		return ($this->carrier = $_carrier);
	}
	/**
	 * Get carrier_title value
	 * @return MagentoStructString|null
	 */
	public function getCarrier_title()
	{
		return $this->carrier_title;
	}
	/**
	 * Set carrier_title value
	 * @param MagentoStructString $_carrier_title the carrier_title
	 * @return MagentoStructString
	 */
	public function setCarrier_title($_carrier_title)
	{
		return ($this->carrier_title = $_carrier_title);
	}
	/**
	 * Get method value
	 * @return MagentoStructString|null
	 */
	public function getMethod()
	{
		return $this->method;
	}
	/**
	 * Set method value
	 * @param MagentoStructString $_method the method
	 * @return MagentoStructString
	 */
	public function setMethod($_method)
	{
		return ($this->method = $_method);
	}
	/**
	 * Get method_title value
	 * @return MagentoStructString|null
	 */
	public function getMethod_title()
	{
		return $this->method_title;
	}
	/**
	 * Set method_title value
	 * @param MagentoStructString $_method_title the method_title
	 * @return MagentoStructString
	 */
	public function setMethod_title($_method_title)
	{
		return ($this->method_title = $_method_title);
	}
	/**
	 * Get method_description value
	 * @return MagentoStructString|null
	 */
	public function getMethod_description()
	{
		return $this->method_description;
	}
	/**
	 * Set method_description value
	 * @param MagentoStructString $_method_description the method_description
	 * @return MagentoStructString
	 */
	public function setMethod_description($_method_description)
	{
		return ($this->method_description = $_method_description);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartShippingMethodEntity
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