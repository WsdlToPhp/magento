<?php
/**
 * File for class MagentoStructShoppingCartCustomerAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartCustomerAddressEntity originally named shoppingCartCustomerAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartCustomerAddressEntity extends MagentoWsdlClass
{
	/**
	 * The mode
	 * @var MagentoStructString
	 */
	public $mode;
	/**
	 * The address_id
	 * @var MagentoStructString
	 */
	public $address_id;
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
	 * The company
	 * @var MagentoStructString
	 */
	public $company;
	/**
	 * The street
	 * @var MagentoStructString
	 */
	public $street;
	/**
	 * The city
	 * @var MagentoStructString
	 */
	public $city;
	/**
	 * The region
	 * @var MagentoStructString
	 */
	public $region;
	/**
	 * The region_id
	 * @var MagentoStructString
	 */
	public $region_id;
	/**
	 * The postcode
	 * @var MagentoStructString
	 */
	public $postcode;
	/**
	 * The country_id
	 * @var MagentoStructString
	 */
	public $country_id;
	/**
	 * The telephone
	 * @var MagentoStructString
	 */
	public $telephone;
	/**
	 * The fax
	 * @var MagentoStructString
	 */
	public $fax;
	/**
	 * The is_default_billing
	 * @var MagentoStructInt
	 */
	public $is_default_billing;
	/**
	 * The is_default_shipping
	 * @var MagentoStructInt
	 */
	public $is_default_shipping;
	/**
	 * Constructor method for shoppingCartCustomerAddressEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_mode
	 * @param MagentoStructString $_address_id
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_company
	 * @param MagentoStructString $_street
	 * @param MagentoStructString $_city
	 * @param MagentoStructString $_region
	 * @param MagentoStructString $_region_id
	 * @param MagentoStructString $_postcode
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructString $_fax
	 * @param MagentoStructInt $_is_default_billing
	 * @param MagentoStructInt $_is_default_shipping
	 * @return MagentoStructShoppingCartCustomerAddressEntity
	 */
	public function __construct($_mode = NULL,$_address_id = NULL,$_firstname = NULL,$_lastname = NULL,$_company = NULL,$_street = NULL,$_city = NULL,$_region = NULL,$_region_id = NULL,$_postcode = NULL,$_country_id = NULL,$_telephone = NULL,$_fax = NULL,$_is_default_billing = NULL,$_is_default_shipping = NULL)
	{
		parent::__construct(array('mode'=>$_mode,'address_id'=>$_address_id,'firstname'=>$_firstname,'lastname'=>$_lastname,'company'=>$_company,'street'=>$_street,'city'=>$_city,'region'=>$_region,'region_id'=>$_region_id,'postcode'=>$_postcode,'country_id'=>$_country_id,'telephone'=>$_telephone,'fax'=>$_fax,'is_default_billing'=>$_is_default_billing,'is_default_shipping'=>$_is_default_shipping));
	}
	/**
	 * Get mode value
	 * @return MagentoStructString|null
	 */
	public function getMode()
	{
		return $this->mode;
	}
	/**
	 * Set mode value
	 * @param MagentoStructString $_mode the mode
	 * @return MagentoStructString
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Get address_id value
	 * @return MagentoStructString|null
	 */
	public function getAddress_id()
	{
		return $this->address_id;
	}
	/**
	 * Set address_id value
	 * @param MagentoStructString $_address_id the address_id
	 * @return MagentoStructString
	 */
	public function setAddress_id($_address_id)
	{
		return ($this->address_id = $_address_id);
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
	 * @return MagentoStructString|null
	 */
	public function getRegion_id()
	{
		return $this->region_id;
	}
	/**
	 * Set region_id value
	 * @param MagentoStructString $_region_id the region_id
	 * @return MagentoStructString
	 */
	public function setRegion_id($_region_id)
	{
		return ($this->region_id = $_region_id);
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
	 * Get is_default_billing value
	 * @return MagentoStructInt|null
	 */
	public function getIs_default_billing()
	{
		return $this->is_default_billing;
	}
	/**
	 * Set is_default_billing value
	 * @param MagentoStructInt $_is_default_billing the is_default_billing
	 * @return MagentoStructInt
	 */
	public function setIs_default_billing($_is_default_billing)
	{
		return ($this->is_default_billing = $_is_default_billing);
	}
	/**
	 * Get is_default_shipping value
	 * @return MagentoStructInt|null
	 */
	public function getIs_default_shipping()
	{
		return $this->is_default_shipping;
	}
	/**
	 * Set is_default_shipping value
	 * @param MagentoStructInt $_is_default_shipping the is_default_shipping
	 * @return MagentoStructInt
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
	 * @return MagentoStructShoppingCartCustomerAddressEntity
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