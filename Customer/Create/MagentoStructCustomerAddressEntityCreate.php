<?php
/**
 * File for class MagentoStructCustomerAddressEntityCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCustomerAddressEntityCreate originally named customerAddressEntityCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCustomerAddressEntityCreate extends MagentoWsdlClass
{
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
	 * The region_id
	 * @var MagentoStructInt
	 */
	public $region_id;
	/**
	 * The region
	 * @var MagentoStructString
	 */
	public $region;
	/**
	 * The street
	 * @var ArrayOfString
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
	 * Constructor method for customerAddressEntityCreate
	 * @see parent::__construct()
	 * @param MagentoStructString $_city
	 * @param MagentoStructString $_company
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_fax
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_middlename
	 * @param MagentoStructString $_postcode
	 * @param MagentoStructString $_prefix
	 * @param MagentoStructInt $_region_id
	 * @param MagentoStructString $_region
	 * @param ArrayOfString $_street
	 * @param MagentoStructString $_suffix
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructBoolean $_is_default_billing
	 * @param MagentoStructBoolean $_is_default_shipping
	 * @return MagentoStructCustomerAddressEntityCreate
	 */
	public function __construct($_city = NULL,$_company = NULL,$_country_id = NULL,$_fax = NULL,$_firstname = NULL,$_lastname = NULL,$_middlename = NULL,$_postcode = NULL,$_prefix = NULL,$_region_id = NULL,$_region = NULL,$_street = NULL,$_suffix = NULL,$_telephone = NULL,$_is_default_billing = NULL,$_is_default_shipping = NULL)
	{
		parent::__construct(array('city'=>$_city,'company'=>$_company,'country_id'=>$_country_id,'fax'=>$_fax,'firstname'=>$_firstname,'lastname'=>$_lastname,'middlename'=>$_middlename,'postcode'=>$_postcode,'prefix'=>$_prefix,'region_id'=>$_region_id,'region'=>$_region,'street'=>$_street,'suffix'=>$_suffix,'telephone'=>$_telephone,'is_default_billing'=>$_is_default_billing,'is_default_shipping'=>$_is_default_shipping));
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
	 * Get street value
	 * @return ArrayOfString|null
	 */
	public function getStreet()
	{
		return $this->street;
	}
	/**
	 * Set street value
	 * @param ArrayOfString $_street the street
	 * @return ArrayOfString
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
	 * @return MagentoStructCustomerAddressEntityCreate
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