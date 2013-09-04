<?php
/**
 * File for class MagentoStructShoppingCartPaymentMethodResponseEntityArray
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartPaymentMethodResponseEntityArray originally named shoppingCartPaymentMethodResponseEntityArray
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartPaymentMethodResponseEntityArray extends MagentoWsdlClass
{
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The cc_types
	 * @var associativeArray
	 */
	public $cc_types;
	/**
	 * Constructor method for shoppingCartPaymentMethodResponseEntityArray
	 * @see parent::__construct()
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_title
	 * @param associativeArray $_cc_types
	 * @return MagentoStructShoppingCartPaymentMethodResponseEntityArray
	 */
	public function __construct($_code = NULL,$_title = NULL,$_cc_types = NULL)
	{
		parent::__construct(array('code'=>$_code,'title'=>$_title,'cc_types'=>$_cc_types));
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
	 * Get title value
	 * @return MagentoStructString|null
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set title value
	 * @param MagentoStructString $_title the title
	 * @return MagentoStructString
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get cc_types value
	 * @return associativeArray|null
	 */
	public function getCc_types()
	{
		return $this->cc_types;
	}
	/**
	 * Set cc_types value
	 * @param associativeArray $_cc_types the cc_types
	 * @return associativeArray
	 */
	public function setCc_types($_cc_types)
	{
		return ($this->cc_types = $_cc_types);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartPaymentMethodResponseEntityArray
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