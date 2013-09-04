<?php
/**
 * File for class MagentoStructAssociativeMultiEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructAssociativeMultiEntity originally named associativeMultiEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructAssociativeMultiEntity extends MagentoWsdlClass
{
	/**
	 * The key
	 * @var MagentoStructString
	 */
	public $key;
	/**
	 * The value
	 * @var ArrayOfString
	 */
	public $value;
	/**
	 * Constructor method for associativeMultiEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_key
	 * @param ArrayOfString $_value
	 * @return MagentoStructAssociativeMultiEntity
	 */
	public function __construct($_key = NULL,$_value = NULL)
	{
		parent::__construct(array('key'=>$_key,'value'=>$_value));
	}
	/**
	 * Get key value
	 * @return MagentoStructString|null
	 */
	public function getKey()
	{
		return $this->key;
	}
	/**
	 * Set key value
	 * @param MagentoStructString $_key the key
	 * @return MagentoStructString
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get value value
	 * @return ArrayOfString|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param ArrayOfString $_value the value
	 * @return ArrayOfString
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructAssociativeMultiEntity
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