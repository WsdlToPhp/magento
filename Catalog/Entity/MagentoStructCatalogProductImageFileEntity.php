<?php
/**
 * File for class MagentoStructCatalogProductImageFileEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductImageFileEntity originally named catalogProductImageFileEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductImageFileEntity extends MagentoWsdlClass
{
	/**
	 * The content
	 * @var MagentoStructString
	 */
	public $content;
	/**
	 * The mime
	 * @var MagentoStructString
	 */
	public $mime;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * Constructor method for catalogProductImageFileEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_content
	 * @param MagentoStructString $_mime
	 * @param MagentoStructString $_name
	 * @return MagentoStructCatalogProductImageFileEntity
	 */
	public function __construct($_content = NULL,$_mime = NULL,$_name = NULL)
	{
		parent::__construct(array('content'=>$_content,'mime'=>$_mime,'name'=>$_name));
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
	 * Get mime value
	 * @return MagentoStructString|null
	 */
	public function getMime()
	{
		return $this->mime;
	}
	/**
	 * Set mime value
	 * @param MagentoStructString $_mime the mime
	 * @return MagentoStructString
	 */
	public function setMime($_mime)
	{
		return ($this->mime = $_mime);
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
	 * @return MagentoStructCatalogProductImageFileEntity
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