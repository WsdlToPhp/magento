<?php
/**
 * File for class MagentoStructCatalogProductAttributeMediaCreateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeMediaCreateEntity originally named catalogProductAttributeMediaCreateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeMediaCreateEntity extends MagentoWsdlClass
{
	/**
	 * The file
	 * @var MagentoStructCatalogProductImageFileEntity
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
	 * The types
	 * @var ArrayOfString
	 */
	public $types;
	/**
	 * The exclude
	 * @var MagentoStructString
	 */
	public $exclude;
	/**
	 * The remove
	 * @var MagentoStructString
	 */
	public $remove;
	/**
	 * Constructor method for catalogProductAttributeMediaCreateEntity
	 * @see parent::__construct()
	 * @param MagentoStructCatalogProductImageFileEntity $_file
	 * @param MagentoStructString $_label
	 * @param MagentoStructString $_position
	 * @param ArrayOfString $_types
	 * @param MagentoStructString $_exclude
	 * @param MagentoStructString $_remove
	 * @return MagentoStructCatalogProductAttributeMediaCreateEntity
	 */
	public function __construct($_file = NULL,$_label = NULL,$_position = NULL,$_types = NULL,$_exclude = NULL,$_remove = NULL)
	{
		parent::__construct(array('file'=>$_file,'label'=>$_label,'position'=>$_position,'types'=>$_types,'exclude'=>$_exclude,'remove'=>$_remove));
	}
	/**
	 * Get file value
	 * @return MagentoStructCatalogProductImageFileEntity|null
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set file value
	 * @param MagentoStructCatalogProductImageFileEntity $_file the file
	 * @return MagentoStructCatalogProductImageFileEntity
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
	 * Get remove value
	 * @return MagentoStructString|null
	 */
	public function getRemove()
	{
		return $this->remove;
	}
	/**
	 * Set remove value
	 * @param MagentoStructString $_remove the remove
	 * @return MagentoStructString
	 */
	public function setRemove($_remove)
	{
		return ($this->remove = $_remove);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAttributeMediaCreateEntity
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