<?php
/**
 * File for class MagentoStructShoppingCartLicenseEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartLicenseEntity originally named shoppingCartLicenseEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartLicenseEntity extends MagentoWsdlClass
{
	/**
	 * The agreement_id
	 * @var MagentoStructString
	 */
	public $agreement_id;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The content
	 * @var MagentoStructString
	 */
	public $content;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * The is_html
	 * @var MagentoStructInt
	 */
	public $is_html;
	/**
	 * Constructor method for shoppingCartLicenseEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_agreement_id
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_content
	 * @param MagentoStructInt $_is_active
	 * @param MagentoStructInt $_is_html
	 * @return MagentoStructShoppingCartLicenseEntity
	 */
	public function __construct($_agreement_id = NULL,$_name = NULL,$_content = NULL,$_is_active = NULL,$_is_html = NULL)
	{
		parent::__construct(array('agreement_id'=>$_agreement_id,'name'=>$_name,'content'=>$_content,'is_active'=>$_is_active,'is_html'=>$_is_html));
	}
	/**
	 * Get agreement_id value
	 * @return MagentoStructString|null
	 */
	public function getAgreement_id()
	{
		return $this->agreement_id;
	}
	/**
	 * Set agreement_id value
	 * @param MagentoStructString $_agreement_id the agreement_id
	 * @return MagentoStructString
	 */
	public function setAgreement_id($_agreement_id)
	{
		return ($this->agreement_id = $_agreement_id);
	}
	/**
	 * Get name value
	 * @return MagentoStructString|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param MagentoStructString $_name the name
	 * @return MagentoStructString
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get content value
	 * @return MagentoStructString|null
	 */
	public function getContent()
	{
		return $this->content;
	}
	/**
	 * Set content value
	 * @param MagentoStructString $_content the content
	 * @return MagentoStructString
	 */
	public function setContent($_content)
	{
		return ($this->content = $_content);
	}
	/**
	 * Get is_active value
	 * @return MagentoStructInt|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructInt $_is_active the is_active
	 * @return MagentoStructInt
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Get is_html value
	 * @return MagentoStructInt|null
	 */
	public function getIs_html()
	{
		return $this->is_html;
	}
	/**
	 * Set is_html value
	 * @param MagentoStructInt $_is_html the is_html
	 * @return MagentoStructInt
	 */
	public function setIs_html($_is_html)
	{
		return ($this->is_html = $_is_html);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartLicenseEntity
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