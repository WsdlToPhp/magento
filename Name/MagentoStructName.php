<?php
/**
 * File for class MagentoStructName
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructName originally named Name
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructName extends MagentoWsdlClass
{
	/**
	 * The _
	 * @var MagentoStructName
	 */
	public $_;
	/**
	 * The id
	 * @var MagentoStructID
	 */
	public $id;
	/**
	 * The href
	 * @var MagentoStructAnyURI
	 */
	public $href;
	/**
	 * Constructor method for Name
	 * @see parent::__construct()
	 * @param MagentoStructName $__
	 * @param MagentoStructID $_id
	 * @param MagentoStructAnyURI $_href
	 * @return MagentoStructName
	 */
	public function __construct($__ = NULL,$_id = NULL,$_href = NULL)
	{
		parent::__construct(array('_'=>$__,'id'=>$_id,'href'=>$_href));
	}
	/**
	 * Get _ value
	 * @return MagentoStructName|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param MagentoStructName $__ the _
	 * @return MagentoStructName
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get id value
	 * @return MagentoStructID|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param MagentoStructID $_id the id
	 * @return MagentoStructID
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get href value
	 * @return MagentoStructAnyURI|null
	 */
	public function getHref()
	{
		return $this->href;
	}
	/**
	 * Set href value
	 * @param MagentoStructAnyURI $_href the href
	 * @return MagentoStructAnyURI
	 */
	public function setHref($_href)
	{
		return ($this->href = $_href);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructName
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