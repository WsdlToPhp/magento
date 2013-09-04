<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkInfoEntity originally named catalogProductDownloadableLinkInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkInfoEntity extends MagentoWsdlClass
{
	/**
	 * The links
	 * @var catalogProductDownloadableLinkEntityArray
	 */
	public $links;
	/**
	 * The samples
	 * @var catalogProductDownloadableLinkSampleEntityArray
	 */
	public $samples;
	/**
	 * Constructor method for catalogProductDownloadableLinkInfoEntity
	 * @see parent::__construct()
	 * @param catalogProductDownloadableLinkEntityArray $_links
	 * @param catalogProductDownloadableLinkSampleEntityArray $_samples
	 * @return MagentoStructCatalogProductDownloadableLinkInfoEntity
	 */
	public function __construct($_links = NULL,$_samples = NULL)
	{
		parent::__construct(array('links'=>$_links,'samples'=>$_samples));
	}
	/**
	 * Get links value
	 * @return catalogProductDownloadableLinkEntityArray|null
	 */
	public function getLinks()
	{
		return $this->links;
	}
	/**
	 * Set links value
	 * @param catalogProductDownloadableLinkEntityArray $_links the links
	 * @return catalogProductDownloadableLinkEntityArray
	 */
	public function setLinks($_links)
	{
		return ($this->links = $_links);
	}
	/**
	 * Get samples value
	 * @return catalogProductDownloadableLinkSampleEntityArray|null
	 */
	public function getSamples()
	{
		return $this->samples;
	}
	/**
	 * Set samples value
	 * @param catalogProductDownloadableLinkSampleEntityArray $_samples the samples
	 * @return catalogProductDownloadableLinkSampleEntityArray
	 */
	public function setSamples($_samples)
	{
		return ($this->samples = $_samples);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkInfoEntity
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