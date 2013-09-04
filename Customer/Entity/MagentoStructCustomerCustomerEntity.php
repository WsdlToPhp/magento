<?php
/**
 * File for class MagentoStructCustomerCustomerEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCustomerCustomerEntity originally named customerCustomerEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCustomerCustomerEntity extends MagentoWsdlClass
{
	/**
	 * The customer_id
	 * @var MagentoStructInt
	 */
	public $customer_id;
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
	 * The store_id
	 * @var MagentoStructInt
	 */
	public $store_id;
	/**
	 * The website_id
	 * @var MagentoStructInt
	 */
	public $website_id;
	/**
	 * The created_in
	 * @var MagentoStructString
	 */
	public $created_in;
	/**
	 * The email
	 * @var MagentoStructString
	 */
	public $email;
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
	 * The group_id
	 * @var MagentoStructInt
	 */
	public $group_id;
	/**
	 * The prefix
	 * @var MagentoStructString
	 */
	public $prefix;
	/**
	 * The suffix
	 * @var MagentoStructString
	 */
	public $suffix;
	/**
	 * The dob
	 * @var MagentoStructString
	 */
	public $dob;
	/**
	 * The taxvat
	 * @var MagentoStructString
	 */
	public $taxvat;
	/**
	 * The confirmation
	 * @var MagentoStructBoolean
	 */
	public $confirmation;
	/**
	 * The password_hash
	 * @var MagentoStructString
	 */
	public $password_hash;
	/**
	 * Constructor method for customerCustomerEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_customer_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructInt $_store_id
	 * @param MagentoStructInt $_website_id
	 * @param MagentoStructString $_created_in
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_middlename
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructInt $_group_id
	 * @param MagentoStructString $_prefix
	 * @param MagentoStructString $_suffix
	 * @param MagentoStructString $_dob
	 * @param MagentoStructString $_taxvat
	 * @param MagentoStructBoolean $_confirmation
	 * @param MagentoStructString $_password_hash
	 * @return MagentoStructCustomerCustomerEntity
	 */
	public function __construct($_customer_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_increment_id = NULL,$_store_id = NULL,$_website_id = NULL,$_created_in = NULL,$_email = NULL,$_firstname = NULL,$_middlename = NULL,$_lastname = NULL,$_group_id = NULL,$_prefix = NULL,$_suffix = NULL,$_dob = NULL,$_taxvat = NULL,$_confirmation = NULL,$_password_hash = NULL)
	{
		parent::__construct(array('customer_id'=>$_customer_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'increment_id'=>$_increment_id,'store_id'=>$_store_id,'website_id'=>$_website_id,'created_in'=>$_created_in,'email'=>$_email,'firstname'=>$_firstname,'middlename'=>$_middlename,'lastname'=>$_lastname,'group_id'=>$_group_id,'prefix'=>$_prefix,'suffix'=>$_suffix,'dob'=>$_dob,'taxvat'=>$_taxvat,'confirmation'=>$_confirmation,'password_hash'=>$_password_hash));
	}
	/**
	 * Get customer_id value
	 * @return MagentoStructInt|null
	 */
	public function getCustomer_id()
	{
		return $this->customer_id;
	}
	/**
	 * Set customer_id value
	 * @param MagentoStructInt $_customer_id the customer_id
	 * @return MagentoStructInt
	 */
	public function setCustomer_id($_customer_id)
	{
		return ($this->customer_id = $_customer_id);
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
	 * Get store_id value
	 * @return MagentoStructInt|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructInt $_store_id the store_id
	 * @return MagentoStructInt
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
	}
	/**
	 * Get website_id value
	 * @return MagentoStructInt|null
	 */
	public function getWebsite_id()
	{
		return $this->website_id;
	}
	/**
	 * Set website_id value
	 * @param MagentoStructInt $_website_id the website_id
	 * @return MagentoStructInt
	 */
	public function setWebsite_id($_website_id)
	{
		return ($this->website_id = $_website_id);
	}
	/**
	 * Get created_in value
	 * @return MagentoStructString|null
	 */
	public function getCreated_in()
	{
		return $this->created_in;
	}
	/**
	 * Set created_in value
	 * @param MagentoStructString $_created_in the created_in
	 * @return MagentoStructString
	 */
	public function setCreated_in($_created_in)
	{
		return ($this->created_in = $_created_in);
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
	 * Get group_id value
	 * @return MagentoStructInt|null
	 */
	public function getGroup_id()
	{
		return $this->group_id;
	}
	/**
	 * Set group_id value
	 * @param MagentoStructInt $_group_id the group_id
	 * @return MagentoStructInt
	 */
	public function setGroup_id($_group_id)
	{
		return ($this->group_id = $_group_id);
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
	 * Get dob value
	 * @return MagentoStructString|null
	 */
	public function getDob()
	{
		return $this->dob;
	}
	/**
	 * Set dob value
	 * @param MagentoStructString $_dob the dob
	 * @return MagentoStructString
	 */
	public function setDob($_dob)
	{
		return ($this->dob = $_dob);
	}
	/**
	 * Get taxvat value
	 * @return MagentoStructString|null
	 */
	public function getTaxvat()
	{
		return $this->taxvat;
	}
	/**
	 * Set taxvat value
	 * @param MagentoStructString $_taxvat the taxvat
	 * @return MagentoStructString
	 */
	public function setTaxvat($_taxvat)
	{
		return ($this->taxvat = $_taxvat);
	}
	/**
	 * Get confirmation value
	 * @return MagentoStructBoolean|null
	 */
	public function getConfirmation()
	{
		return $this->confirmation;
	}
	/**
	 * Set confirmation value
	 * @param MagentoStructBoolean $_confirmation the confirmation
	 * @return MagentoStructBoolean
	 */
	public function setConfirmation($_confirmation)
	{
		return ($this->confirmation = $_confirmation);
	}
	/**
	 * Get password_hash value
	 * @return MagentoStructString|null
	 */
	public function getPassword_hash()
	{
		return $this->password_hash;
	}
	/**
	 * Set password_hash value
	 * @param MagentoStructString $_password_hash the password_hash
	 * @return MagentoStructString
	 */
	public function setPassword_hash($_password_hash)
	{
		return ($this->password_hash = $_password_hash);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCustomerCustomerEntity
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