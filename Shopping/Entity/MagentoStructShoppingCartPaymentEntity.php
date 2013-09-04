<?php
/**
 * File for class MagentoStructShoppingCartPaymentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartPaymentEntity originally named shoppingCartPaymentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartPaymentEntity extends MagentoWsdlClass
{
	/**
	 * The payment_id
	 * @var MagentoStructString
	 */
	public $payment_id;
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
	 * The method
	 * @var MagentoStructString
	 */
	public $method;
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
	 * The cc_cid_enc
	 * @var MagentoStructString
	 */
	public $cc_cid_enc;
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
	 * The cc_ss_owner
	 * @var MagentoStructString
	 */
	public $cc_ss_owner;
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
	 * The cc_ss_issue
	 * @var MagentoStructString
	 */
	public $cc_ss_issue;
	/**
	 * The po_number
	 * @var MagentoStructString
	 */
	public $po_number;
	/**
	 * The additional_data
	 * @var MagentoStructString
	 */
	public $additional_data;
	/**
	 * The additional_information
	 * @var MagentoStructString
	 */
	public $additional_information;
	/**
	 * Constructor method for shoppingCartPaymentEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_payment_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_method
	 * @param MagentoStructString $_cc_type
	 * @param MagentoStructString $_cc_number_enc
	 * @param MagentoStructString $_cc_last4
	 * @param MagentoStructString $_cc_cid_enc
	 * @param MagentoStructString $_cc_owner
	 * @param MagentoStructString $_cc_exp_month
	 * @param MagentoStructString $_cc_exp_year
	 * @param MagentoStructString $_cc_ss_owner
	 * @param MagentoStructString $_cc_ss_start_month
	 * @param MagentoStructString $_cc_ss_start_year
	 * @param MagentoStructString $_cc_ss_issue
	 * @param MagentoStructString $_po_number
	 * @param MagentoStructString $_additional_data
	 * @param MagentoStructString $_additional_information
	 * @return MagentoStructShoppingCartPaymentEntity
	 */
	public function __construct($_payment_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_method = NULL,$_cc_type = NULL,$_cc_number_enc = NULL,$_cc_last4 = NULL,$_cc_cid_enc = NULL,$_cc_owner = NULL,$_cc_exp_month = NULL,$_cc_exp_year = NULL,$_cc_ss_owner = NULL,$_cc_ss_start_month = NULL,$_cc_ss_start_year = NULL,$_cc_ss_issue = NULL,$_po_number = NULL,$_additional_data = NULL,$_additional_information = NULL)
	{
		parent::__construct(array('payment_id'=>$_payment_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'method'=>$_method,'cc_type'=>$_cc_type,'cc_number_enc'=>$_cc_number_enc,'cc_last4'=>$_cc_last4,'cc_cid_enc'=>$_cc_cid_enc,'cc_owner'=>$_cc_owner,'cc_exp_month'=>$_cc_exp_month,'cc_exp_year'=>$_cc_exp_year,'cc_ss_owner'=>$_cc_ss_owner,'cc_ss_start_month'=>$_cc_ss_start_month,'cc_ss_start_year'=>$_cc_ss_start_year,'cc_ss_issue'=>$_cc_ss_issue,'po_number'=>$_po_number,'additional_data'=>$_additional_data,'additional_information'=>$_additional_information));
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
	 * Get cc_cid_enc value
	 * @return MagentoStructString|null
	 */
	public function getCc_cid_enc()
	{
		return $this->cc_cid_enc;
	}
	/**
	 * Set cc_cid_enc value
	 * @param MagentoStructString $_cc_cid_enc the cc_cid_enc
	 * @return MagentoStructString
	 */
	public function setCc_cid_enc($_cc_cid_enc)
	{
		return ($this->cc_cid_enc = $_cc_cid_enc);
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
	 * Get cc_ss_owner value
	 * @return MagentoStructString|null
	 */
	public function getCc_ss_owner()
	{
		return $this->cc_ss_owner;
	}
	/**
	 * Set cc_ss_owner value
	 * @param MagentoStructString $_cc_ss_owner the cc_ss_owner
	 * @return MagentoStructString
	 */
	public function setCc_ss_owner($_cc_ss_owner)
	{
		return ($this->cc_ss_owner = $_cc_ss_owner);
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
	 * Get cc_ss_issue value
	 * @return MagentoStructString|null
	 */
	public function getCc_ss_issue()
	{
		return $this->cc_ss_issue;
	}
	/**
	 * Set cc_ss_issue value
	 * @param MagentoStructString $_cc_ss_issue the cc_ss_issue
	 * @return MagentoStructString
	 */
	public function setCc_ss_issue($_cc_ss_issue)
	{
		return ($this->cc_ss_issue = $_cc_ss_issue);
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
	 * Get additional_data value
	 * @return MagentoStructString|null
	 */
	public function getAdditional_data()
	{
		return $this->additional_data;
	}
	/**
	 * Set additional_data value
	 * @param MagentoStructString $_additional_data the additional_data
	 * @return MagentoStructString
	 */
	public function setAdditional_data($_additional_data)
	{
		return ($this->additional_data = $_additional_data);
	}
	/**
	 * Get additional_information value
	 * @return MagentoStructString|null
	 */
	public function getAdditional_information()
	{
		return $this->additional_information;
	}
	/**
	 * Set additional_information value
	 * @param MagentoStructString $_additional_information the additional_information
	 * @return MagentoStructString
	 */
	public function setAdditional_information($_additional_information)
	{
		return ($this->additional_information = $_additional_information);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartPaymentEntity
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