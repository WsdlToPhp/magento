<?php
/**
 * File for class MagentoStructShoppingCartTotalsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartTotalsEntity originally named shoppingCartTotalsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartTotalsEntity extends MagentoWsdlClass
{
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The amount
	 * @var MagentoStructDouble
	 */
	public $amount;
	/**
	 * Constructor method for shoppingCartTotalsEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructDouble $_amount
	 * @return MagentoStructShoppingCartTotalsEntity
	 */
	public function __construct($_title = NULL,$_amount = NULL)
	{
		parent::__construct(array('title'=>$_title,'amount'=>$_amount));
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
	 * Get amount value
	 * @return MagentoStructDouble|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set amount value
	 * @param MagentoStructDouble $_amount the amount
	 * @return MagentoStructDouble
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartTotalsEntity
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