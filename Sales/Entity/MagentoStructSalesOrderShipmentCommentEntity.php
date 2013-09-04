<?php
/**
 * File for class MagentoStructSalesOrderShipmentCommentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderShipmentCommentEntity originally named salesOrderShipmentCommentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderShipmentCommentEntity extends MagentoWsdlClass
{
	/**
	 * The increment_id
	 * @var MagentoStructString
	 */
	public $increment_id;
	/**
	 * The parent_id
	 * @var MagentoStructString
	 */
	public $parent_id;
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
	 * The is_active
	 * @var MagentoStructString
	 */
	public $is_active;
	/**
	 * The comment
	 * @var MagentoStructString
	 */
	public $comment;
	/**
	 * The is_customer_notified
	 * @var MagentoStructString
	 */
	public $is_customer_notified;
	/**
	 * The comment_id
	 * @var MagentoStructString
	 */
	public $comment_id;
	/**
	 * Constructor method for salesOrderShipmentCommentEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_is_customer_notified
	 * @param MagentoStructString $_comment_id
	 * @return MagentoStructSalesOrderShipmentCommentEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_comment = NULL,$_is_customer_notified = NULL,$_comment_id = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'comment'=>$_comment,'is_customer_notified'=>$_is_customer_notified,'comment_id'=>$_comment_id));
	}
	/**
	 * Get increment_id value
	 * @return MagentoStructString|null
	 */
	public function getIncrement_id()
	{
		return $this->increment_id;
	}
	/**
	 * Set increment_id value
	 * @param MagentoStructString $_increment_id the increment_id
	 * @return MagentoStructString
	 */
	public function setIncrement_id($_increment_id)
	{
		return ($this->increment_id = $_increment_id);
	}
	/**
	 * Get parent_id value
	 * @return MagentoStructString|null
	 */
	public function getParent_id()
	{
		return $this->parent_id;
	}
	/**
	 * Set parent_id value
	 * @param MagentoStructString $_parent_id the parent_id
	 * @return MagentoStructString
	 */
	public function setParent_id($_parent_id)
	{
		return ($this->parent_id = $_parent_id);
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
	 * Get is_active value
	 * @return MagentoStructString|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructString $_is_active the is_active
	 * @return MagentoStructString
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Get comment value
	 * @return MagentoStructString|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param MagentoStructString $_comment the comment
	 * @return MagentoStructString
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get is_customer_notified value
	 * @return MagentoStructString|null
	 */
	public function getIs_customer_notified()
	{
		return $this->is_customer_notified;
	}
	/**
	 * Set is_customer_notified value
	 * @param MagentoStructString $_is_customer_notified the is_customer_notified
	 * @return MagentoStructString
	 */
	public function setIs_customer_notified($_is_customer_notified)
	{
		return ($this->is_customer_notified = $_is_customer_notified);
	}
	/**
	 * Get comment_id value
	 * @return MagentoStructString|null
	 */
	public function getComment_id()
	{
		return $this->comment_id;
	}
	/**
	 * Set comment_id value
	 * @param MagentoStructString $_comment_id the comment_id
	 * @return MagentoStructString
	 */
	public function setComment_id($_comment_id)
	{
		return ($this->comment_id = $_comment_id);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderShipmentCommentEntity
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