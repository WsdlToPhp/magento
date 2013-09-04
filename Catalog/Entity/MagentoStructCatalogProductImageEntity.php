<?php
/**
 * File for class MagentoStructCatalogProductImageEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductImageEntity originally named catalogProductImageEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductImageEntity extends MagentoWsdlClass
{
	/**
	 * The file
	 * @var MagentoStructString
	 */
	public $file;
	/**
	 * The label
	 * @var MagentoStructString
	 */
	public $label;
	/**
	 * The position
	 * @var MagentoStructString
	 */
	public $position;
	/**
	 * The exclude
	 * @var MagentoStructString
	 */
	public $exclude;
	/**
	 * The url
	 * @var MagentoStructString
	 */
	public $url;
	/**
	 * The types
	 * @var ArrayOfString
	 */
	public $types;
	/**
	 * Constructor method for catalogProductImageEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_file
	 * @param MagentoStructString $_label
	 * @param MagentoStructString $_position
	 * @param MagentoStructString $_exclude
	 * @param MagentoStructString $_url
	 * @param ArrayOfString $_types
	 * @return MagentoStructCatalogProductImageEntity
	 */
	public function __construct($_file = NULL,$_label = NULL,$_position = NULL,$_exclude = NULL,$_url = NULL,$_types = NULL)
	{
		parent::__construct(array('file'=>$_file,'label'=>$_label,'position'=>$_position,'exclude'=>$_exclude,'url'=>$_url,'types'=>$_types));
	}
	/**
	 * Get file value
	 * @return MagentoStructString|null
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set file value
	 * @param MagentoStructString $_file the file
	 * @return MagentoStructString
	 */
	public function setFile($_file)
	{
		return ($this->file = $_file);
	}
	/**
	 * Get label value
	 * @return MagentoStructString|null
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set label value
	 * @param MagentoStructString $_label the label
	 * @return MagentoStructString
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get position value
	 * @return MagentoStructString|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructString $_position the position
	 * @return MagentoStructString
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get exclude value
	 * @return MagentoStructString|null
	 */
	public function getExclude()
	{
		return $this->exclude;
	}
	/**
	 * Set exclude value
	 * @param MagentoStructString $_exclude the exclude
	 * @return MagentoStructString
	 */
	public function setExclude($_exclude)
	{
		return ($this->exclude = $_exclude);
	}
	/**
	 * Get url value
	 * @return MagentoStructString|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param MagentoStructString $_url the url
	 * @return MagentoStructString
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get types value
	 * @return ArrayOfString|null
	 */
	public function getTypes()
	{
		return $this->types;
	}
	/**
	 * Set types value
	 * @param ArrayOfString $_types the types
	 * @return ArrayOfString
	 */
	public function setTypes($_types)
	{
		return ($this->types = $_types);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductImageEntity
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