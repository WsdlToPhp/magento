<?php
/**
 * File for class MagentoStructSalesOrderPaymentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderPaymentEntity originally named salesOrderPaymentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderPaymentEntity extends MagentoWsdlClass
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
	 * The amount_ordered
	 * @var MagentoStructString
	 */
	public $amount_ordered;
	/**
	 * The shipping_amount
	 * @var MagentoStructString
	 */
	public $shipping_amount;
	/**
	 * The base_amount_ordered
	 * @var MagentoStructString
	 */
	public $base_amount_ordered;
	/**
	 * The base_shipping_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_amount;
	/**
	 * The method
	 * @var MagentoStructString
	 */
	public $method;
	/**
	 * The po_number
	 * @var MagentoStructString
	 */
	public $po_number;
	/**
	 * The cc_type
	 * @var MagentoStructString
	 */
	public $cc_type;
	/**
	 * The cc_number_enc
	 * @var MagentoStructString
	 */
	public $cc_number_enc;
	/**
	 * The cc_last4
	 * @var MagentoStructString
	 */
	public $cc_last4;
	/**
	 * The cc_owner
	 * @var MagentoStructString
	 */
	public $cc_owner;
	/**
	 * The cc_exp_month
	 * @var MagentoStructString
	 */
	public $cc_exp_month;
	/**
	 * The cc_exp_year
	 * @var MagentoStructString
	 */
	public $cc_exp_year;
	/**
	 * The cc_ss_start_month
	 * @var MagentoStructString
	 */
	public $cc_ss_start_month;
	/**
	 * The cc_ss_start_year
	 * @var MagentoStructString
	 */
	public $cc_ss_start_year;
	/**
	 * The payment_id
	 * @var MagentoStructString
	 */
	public $payment_id;
	/**
	 * Constructor method for salesOrderPaymentEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_amount_ordered
	 * @param MagentoStructString $_shipping_amount
	 * @param MagentoStructString $_base_amount_ordered
	 * @param MagentoStructString $_base_shipping_amount
	 * @param MagentoStructString $_method
	 * @param MagentoStructString $_po_number
	 * @param MagentoStructString $_cc_type
	 * @param MagentoStructString $_cc_number_enc
	 * @param MagentoStructString $_cc_last4
	 * @param MagentoStructString $_cc_owner
	 * @param MagentoStructString $_cc_exp_month
	 * @param MagentoStructString $_cc_exp_year
	 * @param MagentoStructString $_cc_ss_start_month
	 * @param MagentoStructString $_cc_ss_start_year
	 * @param MagentoStructString $_payment_id
	 * @return MagentoStructSalesOrderPaymentEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_amount_ordered = NULL,$_shipping_amount = NULL,$_base_amount_ordered = NULL,$_base_shipping_amount = NULL,$_method = NULL,$_po_number = NULL,$_cc_type = NULL,$_cc_number_enc = NULL,$_cc_last4 = NULL,$_cc_owner = NULL,$_cc_exp_month = NULL,$_cc_exp_year = NULL,$_cc_ss_start_month = NULL,$_cc_ss_start_year = NULL,$_payment_id = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'amount_ordered'=>$_amount_ordered,'shipping_amount'=>$_shipping_amount,'base_amount_ordered'=>$_base_amount_ordered,'base_shipping_amount'=>$_base_shipping_amount,'method'=>$_method,'po_number'=>$_po_number,'cc_type'=>$_cc_type,'cc_number_enc'=>$_cc_number_enc,'cc_last4'=>$_cc_last4,'cc_owner'=>$_cc_owner,'cc_exp_month'=>$_cc_exp_month,'cc_exp_year'=>$_cc_exp_year,'cc_ss_start_month'=>$_cc_ss_start_month,'cc_ss_start_year'=>$_cc_ss_start_year,'payment_id'=>$_payment_id));
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
	 * Get amount_ordered value
	 * @return MagentoStructString|null
	 */
	public function getAmount_ordered()
	{
		return $this->amount_ordered;
	}
	/**
	 * Set amount_ordered value
	 * @param MagentoStructString $_amount_ordered the amount_ordered
	 * @return MagentoStructString
	 */
	public function setAmount_ordered($_amount_ordered)
	{
		return ($this->amount_ordered = $_amount_ordered);
	}
	/**
	 * Get shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_amount()
	{
		return $this->shipping_amount;
	}
	/**
	 * Set shipping_amount value
	 * @param MagentoStructString $_shipping_amount the shipping_amount
	 * @return MagentoStructString
	 */
	public function setShipping_amount($_shipping_amount)
	{
		return ($this->shipping_amount = $_shipping_amount);
	}
	/**
	 * Get base_amount_ordered value
	 * @return MagentoStructString|null
	 */
	public function getBase_amount_ordered()
	{
		return $this->base_amount_ordered;
	}
	/**
	 * Set base_amount_ordered value
	 * @param MagentoStructString $_base_amount_ordered the base_amount_ordered
	 * @return MagentoStructString
	 */
	public function setBase_amount_ordered($_base_amount_ordered)
	{
		return ($this->base_amount_ordered = $_base_amount_ordered);
	}
	/**
	 * Get base_shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_amount()
	{
		return $this->base_shipping_amount;
	}
	/**
	 * Set base_shipping_amount value
	 * @param MagentoStructString $_base_shipping_amount the base_shipping_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_amount($_base_shipping_amount)
	{
		return ($this->base_shipping_amount = $_base_shipping_amount);
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
	 * Get po_number value
	 * @return MagentoStructString|null
	 */
	public function getPo_number()
	{
		return $this->po_number;
	}
	/**
	 * Set po_number value
	 * @param MagentoStructString $_po_number the po_number
	 * @return MagentoStructString
	 */
	public function setPo_number($_po_number)
	{
		return ($this->po_number = $_po_number);
	}
	/**
	 * Get cc_type value
	 * @return MagentoStructString|null
	 */
	public function getCc_type()
	{
		return $this->cc_type;
	}
	/**
	 * Set cc_type value
	 * @param MagentoStructString $_cc_type the cc_type
	 * @return MagentoStructString
	 */
	public function setCc_type($_cc_type)
	{
		return ($this->cc_type = $_cc_type);
	}
	/**
	 * Get cc_number_enc value
	 * @return MagentoStructString|null
	 */
	public function getCc_number_enc()
	{
		return $this->cc_number_enc;
	}
	/**
	 * Set cc_number_enc value
	 * @param MagentoStructString $_cc_number_enc the cc_number_enc
	 * @return MagentoStructString
	 */
	public function setCc_number_enc($_cc_number_enc)
	{
		return ($this->cc_number_enc = $_cc_number_enc);
	}
	/**
	 * Get cc_last4 value
	 * @return MagentoStructString|null
	 */
	public function getCc_last4()
	{
		return $this->cc_last4;
	}
	/**
	 * Set cc_last4 value
	 * @param MagentoStructString $_cc_last4 the cc_last4
	 * @return MagentoStructString
	 */
	public function setCc_last4($_cc_last4)
	{
		return ($this->cc_last4 = $_cc_last4);
	}
	/**
	 * Get cc_owner value
	 * @return MagentoStructString|null
	 */
	public function getCc_owner()
	{
		return $this->cc_owner;
	}
	/**
	 * Set cc_owner value
	 * @param MagentoStructString $_cc_owner the cc_owner
	 * @return MagentoStructString
	 */
	public function setCc_owner($_cc_owner)
	{
		return ($this->cc_owner = $_cc_owner);
	}
	/**
	 * Get cc_exp_month value
	 * @return MagentoStructString|null
	 */
	public function getCc_exp_month()
	{
		return $this->cc_exp_month;
	}
	/**
	 * Set cc_exp_month value
	 * @param MagentoStructString $_cc_exp_month the cc_exp_month
	 * @return MagentoStructString
	 */
	public function setCc_exp_month($_cc_exp_month)
	{
		return ($this->cc_exp_month = $_cc_exp_month);
	}
	/**
	 * Get cc_exp_year value
	 * @return MagentoStructString|null
	 */
	public function getCc_exp_year()
	{
		return $this->cc_exp_year;
	}
	/**
	 * Set cc_exp_year value
	 * @param MagentoStructString $_cc_exp_year the cc_exp_year
	 * @return MagentoStructString
	 */
	public function setCc_exp_year($_cc_exp_year)
	{
		return ($this->cc_exp_year = $_cc_exp_year);
	}
	/**
	 * Get cc_ss_start_month value
	 * @return MagentoStructString|null
	 */
	public function getCc_ss_start_month()
	{
		return $this->cc_ss_start_month;
	}
	/**
	 * Set cc_ss_start_month value
	 * @param MagentoStructString $_cc_ss_start_month the cc_ss_start_month
	 * @return MagentoStructString
	 */
	public function setCc_ss_start_month($_cc_ss_start_month)
	{
		return ($this->cc_ss_start_month = $_cc_ss_start_month);
	}
	/**
	 * Get cc_ss_start_year value
	 * @return MagentoStructString|null
	 */
	public function getCc_ss_start_year()
	{
		return $this->cc_ss_start_year;
	}
	/**
	 * Set cc_ss_start_year value
	 * @param MagentoStructString $_cc_ss_start_year the cc_ss_start_year
	 * @return MagentoStructString
	 */
	public function setCc_ss_start_year($_cc_ss_start_year)
	{
		return ($this->cc_ss_start_year = $_cc_ss_start_year);
	}
	/**
	 * Get payment_id value
	 * @return MagentoStructString|null
	 */
	public function getPayment_id()
	{
		return $this->payment_id;
	}
	/**
	 * Set payment_id value
	 * @param MagentoStructString $_payment_id the payment_id
	 * @return MagentoStructString
	 */
	public function setPayment_id($_payment_id)
	{
		return ($this->payment_id = $_payment_id);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderPaymentEntity
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