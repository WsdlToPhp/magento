<?php
/**
 * File for class MagentoStructCustomerAddressEntityItem
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCustomerAddressEntityItem originally named customerAddressEntityItem
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCustomerAddressEntityItem extends MagentoWsdlClass
{
	/**
	 * The customer_address_id
	 * @var MagentoStructInt
	 */
	public $customer_address_id;
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
	 * The increment_id
	 * @var MagentoStructString
	 */
	public $increment_id;
	/**
	 * The city
	 * @var MagentoStructString
	 */
	public $city;
	/**
	 * The company
	 * @var MagentoStructString
	 */
	public $company;
	/**
	 * The country_id
	 * @var MagentoStructString
	 */
	public $country_id;
	/**
	 * The fax
	 * @var MagentoStructString
	 */
	public $fax;
	/**
	 * The firstname
	 * @var MagentoStructString
	 */
	public $firstname;
	/**
	 * The lastname
	 * @var MagentoStructString
	 */
	public $lastname;
	/**
	 * The middlename
	 * @var MagentoStructString
	 */
	public $middlename;
	/**
	 * The postcode
	 * @var MagentoStructString
	 */
	public $postcode;
	/**
	 * The prefix
	 * @var MagentoStructString
	 */
	public $prefix;
	/**
	 * The region
	 * @var MagentoStructString
	 */
	public $region;
	/**
	 * The region_id
	 * @var MagentoStructInt
	 */
	public $region_id;
	/**
	 * The street
	 * @var MagentoStructString
	 */
	public $street;
	/**
	 * The suffix
	 * @var MagentoStructString
	 */
	public $suffix;
	/**
	 * The telephone
	 * @var MagentoStructString
	 */
	public $telephone;
	/**
	 * The is_default_billing
	 * @var MagentoStructBoolean
	 */
	public $is_default_billing;
	/**
	 * The is_default_shipping
	 * @var MagentoStructBoolean
	 */
	public $is_default_shipping;
	/**
	 * Constructor method for customerAddressEntityItem
	 * @see parent::__construct()
	 * @param MagentoStructInt $_customer_address_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_city
	 * @param MagentoStructString $_company
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_fax
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_middlename
	 * @param MagentoStructString $_postcode
	 * @param MagentoStructString $_prefix
	 * @param MagentoStructString $_region
	 * @param MagentoStructInt $_region_id
	 * @param MagentoStructString $_street
	 * @param MagentoStructString $_suffix
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructBoolean $_is_default_billing
	 * @param MagentoStructBoolean $_is_default_shipping
	 * @return MagentoStructCustomerAddressEntityItem
	 */
	public function __construct($_customer_address_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_increment_id = NULL,$_city = NULL,$_company = NULL,$_country_id = NULL,$_fax = NULL,$_firstname = NULL,$_lastname = NULL,$_middlename = NULL,$_postcode = NULL,$_prefix = NULL,$_region = NULL,$_region_id = NULL,$_street = NULL,$_suffix = NULL,$_telephone = NULL,$_is_default_billing = NULL,$_is_default_shipping = NULL)
	{
		parent::__construct(array('customer_address_id'=>$_customer_address_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'increment_id'=>$_increment_id,'city'=>$_city,'company'=>$_company,'country_id'=>$_country_id,'fax'=>$_fax,'firstname'=>$_firstname,'lastname'=>$_lastname,'middlename'=>$_middlename,'postcode'=>$_postcode,'prefix'=>$_prefix,'region'=>$_region,'region_id'=>$_region_id,'street'=>$_street,'suffix'=>$_suffix,'telephone'=>$_telephone,'is_default_billing'=>$_is_default_billing,'is_default_shipping'=>$_is_default_shipping));
	}
	/**
	 * Get customer_address_id value
	 * @return MagentoStructInt|null
	 */
	public function getCustomer_address_id()
	{
		return $this->customer_address_id;
	}
	/**
	 * Set customer_address_id value
	 * @param MagentoStructInt $_customer_address_id the customer_address_id
	 * @return MagentoStructInt
	 */
	public function setCustomer_address_id($_customer_address_id)
	{
		return ($this->customer_address_id = $_customer_address_id);
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
	 * Get city value
	 * @return MagentoStructString|null
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set city value
	 * @param MagentoStructString $_city the city
	 * @return MagentoStructString
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get company value
	 * @return MagentoStructString|null
	 */
	public function getCompany()
	{
		return $this->company;
	}
	/**
	 * Set company value
	 * @param MagentoStructString $_company the company
	 * @return MagentoStructString
	 */
	public function setCompany($_company)
	{
		return ($this->company = $_company);
	}
	/**
	 * Get country_id value
	 * @return MagentoStructString|null
	 */
	public function getCountry_id()
	{
		return $this->country_id;
	}
	/**
	 * Set country_id value
	 * @param MagentoStructString $_country_id the country_id
	 * @return MagentoStructString
	 */
	public function setCountry_id($_country_id)
	{
		return ($this->country_id = $_country_id);
	}
	/**
	 * Get fax value
	 * @return MagentoStructString|null
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set fax value
	 * @param MagentoStructString $_fax the fax
	 * @return MagentoStructString
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get firstname value
	 * @return MagentoStructString|null
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set firstname value
	 * @param MagentoStructString $_firstname the firstname
	 * @return MagentoStructString
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get lastname value
	 * @return MagentoStructString|null
	 */
	public function getLastname()
	{
		return $this->lastname;
	}
	/**
	 * Set lastname value
	 * @param MagentoStructString $_lastname the lastname
	 * @return MagentoStructString
	 */
	public function setLastname($_lastname)
	{
		return ($this->lastname = $_lastname);
	}
	/**
	 * Get middlename value
	 * @return MagentoStructString|null
	 */
	public function getMiddlename()
	{
		return $this->middlename;
	}
	/**
	 * Set middlename value
	 * @param MagentoStructString $_middlename the middlename
	 * @return MagentoStructString
	 */
	public function setMiddlename($_middlename)
	{
		return ($this->middlename = $_middlename);
	}
	/**
	 * Get postcode value
	 * @return MagentoStructString|null
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}
	/**
	 * Set postcode value
	 * @param MagentoStructString $_postcode the postcode
	 * @return MagentoStructString
	 */
	public function setPostcode($_postcode)
	{
		return ($this->postcode = $_postcode);
	}
	/**
	 * Get prefix value
	 * @return MagentoStructString|null
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set prefix value
	 * @param MagentoStructString $_prefix the prefix
	 * @return MagentoStructString
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get region value
	 * @return MagentoStructString|null
	 */
	public function getRegion()
	{
		return $this->region;
	}
	/**
	 * Set region value
	 * @param MagentoStructString $_region the region
	 * @return MagentoStructString
	 */
	public function setRegion($_region)
	{
		return ($this->region = $_region);
	}
	/**
	 * Get region_id value
	 * @return MagentoStructInt|null
	 */
	public function getRegion_id()
	{
		return $this->region_id;
	}
	/**
	 * Set region_id value
	 * @param MagentoStructInt $_region_id the region_id
	 * @return MagentoStructInt
	 */
	public function setRegion_id($_region_id)
	{
		return ($this->region_id = $_region_id);
	}
	/**
	 * Get street value
	 * @return MagentoStructString|null
	 */
	public function getStreet()
	{
		return $this->street;
	}
	/**
	 * Set street value
	 * @param MagentoStructString $_street the street
	 * @return MagentoStructString
	 */
	public function setStreet($_street)
	{
		return ($this->street = $_street);
	}
	/**
	 * Get suffix value
	 * @return MagentoStructString|null
	 */
	public function getSuffix()
	{
		return $this->suffix;
	}
	/**
	 * Set suffix value
	 * @param MagentoStructString $_suffix the suffix
	 * @return MagentoStructString
	 */
	public function setSuffix($_suffix)
	{
		return ($this->suffix = $_suffix);
	}
	/**
	 * Get telephone value
	 * @return MagentoStructString|null
	 */
	public function getTelephone()
	{
		return $this->telephone;
	}
	/**
	 * Set telephone value
	 * @param MagentoStructString $_telephone the telephone
	 * @return MagentoStructString
	 */
	public function setTelephone($_telephone)
	{
		return ($this->telephone = $_telephone);
	}
	/**
	 * Get is_default_billing value
	 * @return MagentoStructBoolean|null
	 */
	public function getIs_default_billing()
	{
		return $this->is_default_billing;
	}
	/**
	 * Set is_default_billing value
	 * @param MagentoStructBoolean $_is_default_billing the is_default_billing
	 * @return MagentoStructBoolean
	 */
	public function setIs_default_billing($_is_default_billing)
	{
		return ($this->is_default_billing = $_is_default_billing);
	}
	/**
	 * Get is_default_shipping value
	 * @return MagentoStructBoolean|null
	 */
	public function getIs_default_shipping()
	{
		return $this->is_default_shipping;
	}
	/**
	 * Set is_default_shipping value
	 * @param MagentoStructBoolean $_is_default_shipping the is_default_shipping
	 * @return MagentoStructBoolean
	 */
	public function setIs_default_shipping($_is_default_shipping)
	{
		return ($this->is_default_shipping = $_is_default_shipping);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCustomerAddressEntityItem
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