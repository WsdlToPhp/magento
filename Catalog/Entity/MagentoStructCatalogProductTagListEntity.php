<?php
/**
 * File for class MagentoStructCatalogProductTagListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTagListEntity originally named catalogProductTagListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTagListEntity extends MagentoWsdlClass
{
	/**
	 * The tag_id
	 * @var MagentoStructString
	 */
	public $tag_id;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * Constructor method for catalogProductTagListEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_tag_id
	 * @param MagentoStructString $_name
	 * @return MagentoStructCatalogProductTagListEntity
	 */
	public function __construct($_tag_id = NULL,$_name = NULL)
	{
		parent::__construct(array('tag_id'=>$_tag_id,'name'=>$_name));
	}
	/**
	 * Get tag_id value
	 * @return MagentoStructString|null
	 */
	public function getTag_id()
	{
		return $this->tag_id;
	}
	/**
	 * Set tag_id value
	 * @param MagentoStructString $_tag_id the tag_id
	 * @return MagentoStructString
	 */
	public function setTag_id($_tag_id)
	{
		return ($this->tag_id = $_tag_id);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTagListEntity
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