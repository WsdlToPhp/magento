<?php
/**
 * File for class MagentoStructGiftMessageEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructGiftMessageEntity originally named giftMessageEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructGiftMessageEntity extends MagentoWsdlClass
{
	/**
	 * The from
	 * @var MagentoStructString
	 */
	public $from;
	/**
	 * The to
	 * @var MagentoStructString
	 */
	public $to;
	/**
	 * The message
	 * @var MagentoStructString
	 */
	public $message;
	/**
	 * Constructor method for giftMessageEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_from
	 * @param MagentoStructString $_to
	 * @param MagentoStructString $_message
	 * @return MagentoStructGiftMessageEntity
	 */
	public function __construct($_from = NULL,$_to = NULL,$_message = NULL)
	{
		parent::__construct(array('from'=>$_from,'to'=>$_to,'message'=>$_message));
	}
	/**
	 * Get from value
	 * @return MagentoStructString|null
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set from value
	 * @param MagentoStructString $_from the from
	 * @return MagentoStructString
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get to value
	 * @return MagentoStructString|null
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set to value
	 * @param MagentoStructString $_to the to
	 * @return MagentoStructString
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
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
	 * @return MagentoStructGiftMessageEntity
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