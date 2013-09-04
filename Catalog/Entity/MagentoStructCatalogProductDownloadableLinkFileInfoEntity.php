<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkFileInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkFileInfoEntity originally named catalogProductDownloadableLinkFileInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkFileInfoEntity extends MagentoWsdlClass
{
	/**
	 * The file
	 * @var MagentoStructString
	 */
	public $file;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The size
	 * @var MagentoStructInt
	 */
	public $size;
	/**
	 * The status
	 * @var MagentoStructString
	 */
	public $status;
	/**
	 * Constructor method for catalogProductDownloadableLinkFileInfoEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_file
	 * @param MagentoStructString $_name
	 * @param MagentoStructInt $_size
	 * @param MagentoStructString $_status
	 * @return MagentoStructCatalogProductDownloadableLinkFileInfoEntity
	 */
	public function __construct($_file = NULL,$_name = NULL,$_size = NULL,$_status = NULL)
	{
		parent::__construct(array('file'=>$_file,'name'=>$_name,'size'=>$_size,'status'=>$_status));
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
	 * Get size value
	 * @return MagentoStructInt|null
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set size value
	 * @param MagentoStructInt $_size the size
	 * @return MagentoStructInt
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get status value
	 * @return MagentoStructString|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param MagentoStructString $_status the status
	 * @return MagentoStructString
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkFileInfoEntity
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