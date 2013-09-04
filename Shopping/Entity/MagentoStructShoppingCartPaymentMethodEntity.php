<?php
/**
 * File for class MagentoStructShoppingCartPaymentMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartPaymentMethodEntity originally named shoppingCartPaymentMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartPaymentMethodEntity extends MagentoWsdlClass
{
	/**
	 * The po_number
	 * @var MagentoStructString
	 */
	public $po_number;
	/**
	 * The method
	 * @var MagentoStructString
	 */
	public $method;
	/**
	 * The cc_cid
	 * @var MagentoStructString
	 */
	public $cc_cid;
	/**
	 * The cc_owner
	 * @var MagentoStructString
	 */
	public $cc_owner;
	/**
	 * The cc_number
	 * @var MagentoStructString
	 */
	public $cc_number;
	/**
	 * The cc_type
	 * @var MagentoStructString
	 */
	public $cc_type;
	/**
	 * The cc_exp_year
	 * @var MagentoStructString
	 */
	public $cc_exp_year;
	/**
	 * The cc_exp_month
	 * @var MagentoStructString
	 */
	public $cc_exp_month;
	/**
	 * Constructor method for shoppingCartPaymentMethodEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_po_number
	 * @param MagentoStructString $_method
	 * @param MagentoStructString $_cc_cid
	 * @param MagentoStructString $_cc_owner
	 * @param MagentoStructString $_cc_number
	 * @param MagentoStructString $_cc_type
	 * @param MagentoStructString $_cc_exp_year
	 * @param MagentoStructString $_cc_exp_month
	 * @return MagentoStructShoppingCartPaymentMethodEntity
	 */
	public function __construct($_po_number = NULL,$_method = NULL,$_cc_cid = NULL,$_cc_owner = NULL,$_cc_number = NULL,$_cc_type = NULL,$_cc_exp_year = NULL,$_cc_exp_month = NULL)
	{
		parent::__construct(array('po_number'=>$_po_number,'method'=>$_method,'cc_cid'=>$_cc_cid,'cc_owner'=>$_cc_owner,'cc_number'=>$_cc_number,'cc_type'=>$_cc_type,'cc_exp_year'=>$_cc_exp_year,'cc_exp_month'=>$_cc_exp_month));
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
	 * Get cc_cid value
	 * @return MagentoStructString|null
	 */
	public function getCc_cid()
	{
		return $this->cc_cid;
	}
	/**
	 * Set cc_cid value
	 * @param MagentoStructString $_cc_cid the cc_cid
	 * @return MagentoStructString
	 */
	public function setCc_cid($_cc_cid)
	{
		return ($this->cc_cid = $_cc_cid);
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
	 * Get cc_number value
	 * @return MagentoStructString|null
	 */
	public function getCc_number()
	{
		return $this->cc_number;
	}
	/**
	 * Set cc_number value
	 * @param MagentoStructString $_cc_number the cc_number
	 * @return MagentoStructString
	 */
	public function setCc_number($_cc_number)
	{
		return ($this->cc_number = $_cc_number);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartPaymentMethodEntity
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