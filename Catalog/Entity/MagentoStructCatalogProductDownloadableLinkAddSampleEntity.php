<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkAddSampleEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkAddSampleEntity originally named catalogProductDownloadableLinkAddSampleEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkAddSampleEntity extends MagentoWsdlClass
{
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The file
	 * @var MagentoStructCatalogProductDownloadableLinkFileEntity
	 */
	public $file;
	/**
	 * The url
	 * @var MagentoStructString
	 */
	public $url;
	/**
	 * Constructor method for catalogProductDownloadableLinkAddSampleEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_type
	 * @param MagentoStructCatalogProductDownloadableLinkFileEntity $_file
	 * @param MagentoStructString $_url
	 * @return MagentoStructCatalogProductDownloadableLinkAddSampleEntity
	 */
	public function __construct($_type = NULL,$_file = NULL,$_url = NULL)
	{
		parent::__construct(array('type'=>$_type,'file'=>$_file,'url'=>$_url));
	}
	/**
	 * Get type value
	 * @return MagentoStructString|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param MagentoStructString $_type the type
	 * @return MagentoStructString
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get file value
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity|null
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set file value
	 * @param MagentoStructCatalogProductDownloadableLinkFileEntity $_file the file
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity
	 */
	public function setFile($_file)
	{
		return ($this->file = $_file);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkAddSampleEntity
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