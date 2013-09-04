<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkFileEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkFileEntity originally named catalogProductDownloadableLinkFileEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkFileEntity extends MagentoWsdlClass
{
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The base64_content
	 * @var MagentoStructString
	 */
	public $base64_content;
	/**
	 * Constructor method for catalogProductDownloadableLinkFileEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_base64_content
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity
	 */
	public function __construct($_name = NULL,$_base64_content = NULL)
	{
		parent::__construct(array('name'=>$_name,'base64_content'=>$_base64_content));
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
	 * Get base64_content value
	 * @return MagentoStructString|null
	 */
	public function getBase64_content()
	{
		return $this->base64_content;
	}
	/**
	 * Set base64_content value
	 * @param MagentoStructString $_base64_content the base64_content
	 * @return MagentoStructString
	 */
	public function setBase64_content($_base64_content)
	{
		return ($this->base64_content = $_base64_content);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity
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