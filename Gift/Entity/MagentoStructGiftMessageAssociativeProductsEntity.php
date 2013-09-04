<?php
/**
 * File for class MagentoStructGiftMessageAssociativeProductsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructGiftMessageAssociativeProductsEntity originally named giftMessageAssociativeProductsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructGiftMessageAssociativeProductsEntity extends MagentoWsdlClass
{
	/**
	 * The product
	 * @var MagentoStructShoppingCartProductEntity
	 */
	public $product;
	/**
	 * The message
	 * @var MagentoStructGiftMessageEntity
	 */
	public $message;
	/**
	 * Constructor method for giftMessageAssociativeProductsEntity
	 * @see parent::__construct()
	 * @param MagentoStructShoppingCartProductEntity $_product
	 * @param MagentoStructGiftMessageEntity $_message
	 * @return MagentoStructGiftMessageAssociativeProductsEntity
	 */
	public function __construct($_product = NULL,$_message = NULL)
	{
		parent::__construct(array('product'=>$_product,'message'=>$_message));
	}
	/**
	 * Get product value
	 * @return MagentoStructShoppingCartProductEntity|null
	 */
	public function getProduct()
	{
		return $this->product;
	}
	/**
	 * Set product value
	 * @param MagentoStructShoppingCartProductEntity $_product the product
	 * @return MagentoStructShoppingCartProductEntity
	 */
	public function setProduct($_product)
	{
		return ($this->product = $_product);
	}
	/**
	 * Get message value
	 * @return MagentoStructGiftMessageEntity|null
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set message value
	 * @param MagentoStructGiftMessageEntity $_message the message
	 * @return MagentoStructGiftMessageEntity
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructGiftMessageAssociativeProductsEntity
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