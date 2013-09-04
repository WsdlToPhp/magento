<?php
/**
 * File for class MagentoStructShoppingCartAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartAddressEntity originally named shoppingCartAddressEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartAddressEntity extends MagentoWsdlClass
{
	/**
	 * The address_id
	 * @var MagentoStructString
	 */
	public $address_id;
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
	 * The customer_id
	 * @var MagentoStructString
	 */
	public $customer_id;
	/**
	 * The save_in_address_book
	 * @var MagentoStructInt
	 */
	public $save_in_address_book;
	/**
	 * The customer_address_id
	 * @var MagentoStructString
	 */
	public $customer_address_id;
	/**
	 * The address_type
	 * @var MagentoStructString
	 */
	public $address_type;
	/**
	 * The email
	 * @var MagentoStructString
	 */
	public $email;
	/**
	 * The prefix
	 * @var MagentoStructString
	 */
	public $prefix;
	/**
	 * The firstname
	 * @var MagentoStructString
	 */
	public $firstname;
	/**
	 * The middlename
	 * @var MagentoStructString
	 */
	public $middlename;
	/**
	 * The lastname
	 * @var MagentoStructString
	 */
	public $lastname;
	/**
	 * The suffix
	 * @var MagentoStructString
	 */
	public $suffix;
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
	 * The same_as_billing
	 * @var MagentoStructInt
	 */
	public $same_as_billing;
	/**
	 * The free_shipping
	 * @var MagentoStructInt
	 */
	public $free_shipping;
	/**
	 * The shipping_method
	 * @var MagentoStructString
	 */
	public $shipping_method;
	/**
	 * The shipping_description
	 * @var MagentoStructString
	 */
	public $shipping_description;
	/**
	 * The weight
	 * @var MagentoStructDouble
	 */
	public $weight;
	/**
	 * Constructor method for shoppingCartAddressEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_address_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_customer_id
	 * @param MagentoStructInt $_save_in_address_book
	 * @param MagentoStructString $_customer_address_id
	 * @param MagentoStructString $_address_type
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_prefix
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_middlename
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_suffix
	 * @param MagentoStructString $_company
	 * @param MagentoStructString $_street
	 * @param MagentoStructString $_city
	 * @param MagentoStructString $_region
	 * @param MagentoStructString $_region_id
	 * @param MagentoStructString $_postcode
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructString $_fax
	 * @param MagentoStructInt $_same_as_billing
	 * @param MagentoStructInt $_free_shipping
	 * @param MagentoStructString $_shipping_method
	 * @param MagentoStructString $_shipping_description
	 * @param MagentoStructDouble $_weight
	 * @return MagentoStructShoppingCartAddressEntity
	 */
	public function __construct($_address_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_customer_id = NULL,$_save_in_address_book = NULL,$_customer_address_id = NULL,$_address_type = NULL,$_email = NULL,$_prefix = NULL,$_firstname = NULL,$_middlename = NULL,$_lastname = NULL,$_suffix = NULL,$_company = NULL,$_street = NULL,$_city = NULL,$_region = NULL,$_region_id = NULL,$_postcode = NULL,$_country_id = NULL,$_telephone = NULL,$_fax = NULL,$_same_as_billing = NULL,$_free_shipping = NULL,$_shipping_method = NULL,$_shipping_description = NULL,$_weight = NULL)
	{
		parent::__construct(array('address_id'=>$_address_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'customer_id'=>$_customer_id,'save_in_address_book'=>$_save_in_address_book,'customer_address_id'=>$_customer_address_id,'address_type'=>$_address_type,'email'=>$_email,'prefix'=>$_prefix,'firstname'=>$_firstname,'middlename'=>$_middlename,'lastname'=>$_lastname,'suffix'=>$_suffix,'company'=>$_company,'street'=>$_street,'city'=>$_city,'region'=>$_region,'region_id'=>$_region_id,'postcode'=>$_postcode,'country_id'=>$_country_id,'telephone'=>$_telephone,'fax'=>$_fax,'same_as_billing'=>$_same_as_billing,'free_shipping'=>$_free_shipping,'shipping_method'=>$_shipping_method,'shipping_description'=>$_shipping_description,'weight'=>$_weight));
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
	 * Get customer_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_id()
	{
		return $this->customer_id;
	}
	/**
	 * Set customer_id value
	 * @param MagentoStructString $_customer_id the customer_id
	 * @return MagentoStructString
	 */
	public function setCustomer_id($_customer_id)
	{
		return ($this->customer_id = $_customer_id);
	}
	/**
	 * Get save_in_address_book value
	 * @return MagentoStructInt|null
	 */
	public function getSave_in_address_book()
	{
		return $this->save_in_address_book;
	}
	/**
	 * Set save_in_address_book value
	 * @param MagentoStructInt $_save_in_address_book the save_in_address_book
	 * @return MagentoStructInt
	 */
	public function setSave_in_address_book($_save_in_address_book)
	{
		return ($this->save_in_address_book = $_save_in_address_book);
	}
	/**
	 * Get customer_address_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_address_id()
	{
		return $this->customer_address_id;
	}
	/**
	 * Set customer_address_id value
	 * @param MagentoStructString $_customer_address_id the customer_address_id
	 * @return MagentoStructString
	 */
	public function setCustomer_address_id($_customer_address_id)
	{
		return ($this->customer_address_id = $_customer_address_id);
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
	 * Get email value
	 * @return MagentoStructString|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param MagentoStructString $_email the email
	 * @return MagentoStructString
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
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
	 * Get same_as_billing value
	 * @return MagentoStructInt|null
	 */
	public function getSame_as_billing()
	{
		return $this->same_as_billing;
	}
	/**
	 * Set same_as_billing value
	 * @param MagentoStructInt $_same_as_billing the same_as_billing
	 * @return MagentoStructInt
	 */
	public function setSame_as_billing($_same_as_billing)
	{
		return ($this->same_as_billing = $_same_as_billing);
	}
	/**
	 * Get free_shipping value
	 * @return MagentoStructInt|null
	 */
	public function getFree_shipping()
	{
		return $this->free_shipping;
	}
	/**
	 * Set free_shipping value
	 * @param MagentoStructInt $_free_shipping the free_shipping
	 * @return MagentoStructInt
	 */
	public function setFree_shipping($_free_shipping)
	{
		return ($this->free_shipping = $_free_shipping);
	}
	/**
	 * Get shipping_method value
	 * @return MagentoStructString|null
	 */
	public function getShipping_method()
	{
		return $this->shipping_method;
	}
	/**
	 * Set shipping_method value
	 * @param MagentoStructString $_shipping_method the shipping_method
	 * @return MagentoStructString
	 */
	public function setShipping_method($_shipping_method)
	{
		return ($this->shipping_method = $_shipping_method);
	}
	/**
	 * Get shipping_description value
	 * @return MagentoStructString|null
	 */
	public function getShipping_description()
	{
		return $this->shipping_description;
	}
	/**
	 * Set shipping_description value
	 * @param MagentoStructString $_shipping_description the shipping_description
	 * @return MagentoStructString
	 */
	public function setShipping_description($_shipping_description)
	{
		return ($this->shipping_description = $_shipping_description);
	}
	/**
	 * Get weight value
	 * @return MagentoStructDouble|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param MagentoStructDouble $_weight the weight
	 * @return MagentoStructDouble
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartAddressEntity
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