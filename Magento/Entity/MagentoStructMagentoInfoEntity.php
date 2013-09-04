<?php
/**
 * File for class MagentoStructMagentoInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructMagentoInfoEntity originally named magentoInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructMagentoInfoEntity extends MagentoWsdlClass
{
	/**
	 * The magento_version
	 * @var MagentoStructString
	 */
	public $magento_version;
	/**
	 * The magento_edition
	 * @var MagentoStructString
	 */
	public $magento_edition;
	/**
	 * Constructor method for magentoInfoEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_magento_version
	 * @param MagentoStructString $_magento_edition
	 * @return MagentoStructMagentoInfoEntity
	 */
	public function __construct($_magento_version = NULL,$_magento_edition = NULL)
	{
		parent::__construct(array('magento_version'=>$_magento_version,'magento_edition'=>$_magento_edition));
	}
	/**
	 * Get magento_version value
	 * @return MagentoStructString|null
	 */
	public function getMagento_version()
	{
		return $this->magento_version;
	}
	/**
	 * Set magento_version value
	 * @param MagentoStructString $_magento_version the magento_version
	 * @return MagentoStructString
	 */
	public function setMagento_version($_magento_version)
	{
		return ($this->magento_version = $_magento_version);
	}
	/**
	 * Get magento_edition value
	 * @return MagentoStructString|null
	 */
	public function getMagento_edition()
	{
		return $this->magento_edition;
	}
	/**
	 * Set magento_edition value
	 * @param MagentoStructString $_magento_edition the magento_edition
	 * @return MagentoStructString
	 */
	public function setMagento_edition($_magento_edition)
	{
		return ($this->magento_edition = $_magento_edition);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructMagentoInfoEntity
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