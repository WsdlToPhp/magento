<?php
/**
 * File for class MagentoStructExistsFaltureEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructExistsFaltureEntity originally named existsFaltureEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructExistsFaltureEntity extends MagentoWsdlClass
{
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The message
	 * @var MagentoStructString
	 */
	public $message;
	/**
	 * Constructor method for existsFaltureEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_message
	 * @return MagentoStructExistsFaltureEntity
	 */
	public function __construct($_code = NULL,$_message = NULL)
	{
		parent::__construct(array('code'=>$_code,'message'=>$_message));
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
	 * Get message value
	 * @return MagentoStructString|null
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set message value
	 * @param MagentoStructString $_message the message
	 * @return MagentoStructString
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
	 * @return MagentoStructExistsFaltureEntity
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