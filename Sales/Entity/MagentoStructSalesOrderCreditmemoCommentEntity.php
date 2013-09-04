<?php
/**
 * File for class MagentoStructSalesOrderCreditmemoCommentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderCreditmemoCommentEntity originally named salesOrderCreditmemoCommentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderCreditmemoCommentEntity extends MagentoWsdlClass
{
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
	 * The is_visible_on_front
	 * @var MagentoStructString
	 */
	public $is_visible_on_front;
	/**
	 * Constructor method for salesOrderCreditmemoCommentEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_is_customer_notified
	 * @param MagentoStructString $_comment_id
	 * @param MagentoStructString $_is_visible_on_front
	 * @return MagentoStructSalesOrderCreditmemoCommentEntity
	 */
	public function __construct($_parent_id = NULL,$_created_at = NULL,$_comment = NULL,$_is_customer_notified = NULL,$_comment_id = NULL,$_is_visible_on_front = NULL)
	{
		parent::__construct(array('parent_id'=>$_parent_id,'created_at'=>$_created_at,'comment'=>$_comment,'is_customer_notified'=>$_is_customer_notified,'comment_id'=>$_comment_id,'is_visible_on_front'=>$_is_visible_on_front));
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
	 * Get is_visible_on_front value
	 * @return MagentoStructString|null
	 */
	public function getIs_visible_on_front()
	{
		return $this->is_visible_on_front;
	}
	/**
	 * Set is_visible_on_front value
	 * @param MagentoStructString $_is_visible_on_front the is_visible_on_front
	 * @return MagentoStructString
	 */
	public function setIs_visible_on_front($_is_visible_on_front)
	{
		return ($this->is_visible_on_front = $_is_visible_on_front);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderCreditmemoCommentEntity
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