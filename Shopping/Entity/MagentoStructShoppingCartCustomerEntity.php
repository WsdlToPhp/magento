<?php
/**
 * File for class MagentoStructShoppingCartCustomerEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartCustomerEntity originally named shoppingCartCustomerEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartCustomerEntity extends MagentoWsdlClass
{
	/**
	 * The mode
	 * @var MagentoStructString
	 */
	public $mode;
	/**
	 * The customer_id
	 * @var MagentoStructInt
	 */
	public $customer_id;
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
	 * The lastname
	 * @var MagentoStructString
	 */
	public $lastname;
	/**
	 * The password
	 * @var MagentoStructString
	 */
	public $password;
	/**
	 * The confirmation
	 * @var MagentoStructString
	 */
	public $confirmation;
	/**
	 * The website_id
	 * @var MagentoStructInt
	 */
	public $website_id;
	/**
	 * The store_id
	 * @var MagentoStructInt
	 */
	public $store_id;
	/**
	 * The group_id
	 * @var MagentoStructInt
	 */
	public $group_id;
	/**
	 * Constructor method for shoppingCartCustomerEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_mode
	 * @param MagentoStructInt $_customer_id
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_password
	 * @param MagentoStructString $_confirmation
	 * @param MagentoStructInt $_website_id
	 * @param MagentoStructInt $_store_id
	 * @param MagentoStructInt $_group_id
	 * @return MagentoStructShoppingCartCustomerEntity
	 */
	public function __construct($_mode = NULL,$_customer_id = NULL,$_email = NULL,$_firstname = NULL,$_lastname = NULL,$_password = NULL,$_confirmation = NULL,$_website_id = NULL,$_store_id = NULL,$_group_id = NULL)
	{
		parent::__construct(array('mode'=>$_mode,'customer_id'=>$_customer_id,'email'=>$_email,'firstname'=>$_firstname,'lastname'=>$_lastname,'password'=>$_password,'confirmation'=>$_confirmation,'website_id'=>$_website_id,'store_id'=>$_store_id,'group_id'=>$_group_id));
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
	 * Get password value
	 * @return MagentoStructString|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param MagentoStructString $_password the password
	 * @return MagentoStructString
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get confirmation value
	 * @return MagentoStructString|null
	 */
	public function getConfirmation()
	{
		return $this->confirmation;
	}
	/**
	 * Set confirmation value
	 * @param MagentoStructString $_confirmation the confirmation
	 * @return MagentoStructString
	 */
	public function setConfirmation($_confirmation)
	{
		return ($this->confirmation = $_confirmation);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartCustomerEntity
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