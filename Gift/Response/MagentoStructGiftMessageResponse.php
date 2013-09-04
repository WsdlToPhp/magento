<?php
/**
 * File for class MagentoStructGiftMessageResponse
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructGiftMessageResponse originally named giftMessageResponse
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructGiftMessageResponse extends MagentoWsdlClass
{
	/**
	 * The entityId
	 * @var MagentoStructString
	 */
	public $entityId;
	/**
	 * The result
	 * @var MagentoStructBoolean
	 */
	public $result;
	/**
	 * The error
	 * @var MagentoStructString
	 */
	public $error;
	/**
	 * Constructor method for giftMessageResponse
	 * @see parent::__construct()
	 * @param MagentoStructString $_entityId
	 * @param MagentoStructBoolean $_result
	 * @param MagentoStructString $_error
	 * @return MagentoStructGiftMessageResponse
	 */
	public function __construct($_entityId = NULL,$_result = NULL,$_error = NULL)
	{
		parent::__construct(array('entityId'=>$_entityId,'result'=>$_result,'error'=>$_error));
	}
	/**
	 * Get entityId value
	 * @return MagentoStructString|null
	 */
	public function getEntityId()
	{
		return $this->entityId;
	}
	/**
	 * Set entityId value
	 * @param MagentoStructString $_entityId the entityId
	 * @return MagentoStructString
	 */
	public function setEntityId($_entityId)
	{
		return ($this->entityId = $_entityId);
	}
	/**
	 * Get result value
	 * @return MagentoStructBoolean|null
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set result value
	 * @param MagentoStructBoolean $_result the result
	 * @return MagentoStructBoolean
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get error value
	 * @return MagentoStructString|null
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Set error value
	 * @param MagentoStructString $_error the error
	 * @return MagentoStructString
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructGiftMessageResponse
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