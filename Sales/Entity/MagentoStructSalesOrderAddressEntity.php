<?php
/**
 * File for class MagentoStructSalesOrderAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderAddressEntity originally named salesOrderAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderAddressEntity extends MagentoWsdlClass
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
	 * The address_type
	 * @var MagentoStructString
	 */
	public $address_type;
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
	 * The region_id
	 * @var MagentoStructString
	 */
	public $region_id;
	/**
	 * The address_id
	 * @var MagentoStructString
	 */
	public $address_id;
	/**
	 * Constructor method for salesOrderAddressEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_address_type
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_company
	 * @param MagentoStructString $_street
	 * @param MagentoStructString $_city
	 * @param MagentoStructString $_region
	 * @param MagentoStructString $_postcode
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructString $_fax
	 * @param MagentoStructString $_region_id
	 * @param MagentoStructString $_address_id
	 * @return MagentoStructSalesOrderAddressEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_address_type = NULL,$_firstname = NULL,$_lastname = NULL,$_company = NULL,$_street = NULL,$_city = NULL,$_region = NULL,$_postcode = NULL,$_country_id = NULL,$_telephone = NULL,$_fax = NULL,$_region_id = NULL,$_address_id = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'address_type'=>$_address_type,'firstname'=>$_firstname,'lastname'=>$_lastname,'company'=>$_company,'street'=>$_street,'city'=>$_city,'region'=>$_region,'postcode'=>$_postcode,'country_id'=>$_country_id,'telephone'=>$_telephone,'fax'=>$_fax,'region_id'=>$_region_id,'address_id'=>$_address_id));
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
	 * Get address_type value
	 * @return MagentoStructString|null
	 */
	public function getAddress_type()
	{
		return $this->address_type;
	}
	/**
	 * Set address_type value
	 * @param MagentoStructString $_address_type the address_type
	 * @return MagentoStructString
	 */
	public function setAddress_type($_address_type)
	{
		return ($this->address_type = $_address_type);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderAddressEntity
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