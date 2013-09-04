<?php
/**
 * File for class MagentoStructCatalogProductAdditionalAttributesEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAdditionalAttributesEntity originally named catalogProductAdditionalAttributesEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAdditionalAttributesEntity extends MagentoWsdlClass
{
	/**
	 * The multi_data
	 * @var associativeMultiArray
	 */
	public $multi_data;
	/**
	 * The single_data
	 * @var associativeArray
	 */
	public $single_data;
	/**
	 * Constructor method for catalogProductAdditionalAttributesEntity
	 * @see parent::__construct()
	 * @param associativeMultiArray $_multi_data
	 * @param associativeArray $_single_data
	 * @return MagentoStructCatalogProductAdditionalAttributesEntity
	 */
	public function __construct($_multi_data = NULL,$_single_data = NULL)
	{
		parent::__construct(array('multi_data'=>$_multi_data,'single_data'=>$_single_data));
	}
	/**
	 * Get multi_data value
	 * @return associativeMultiArray|null
	 */
	public function getMulti_data()
	{
		return $this->multi_data;
	}
	/**
	 * Set multi_data value
	 * @param associativeMultiArray $_multi_data the multi_data
	 * @return associativeMultiArray
	 */
	public function setMulti_data($_multi_data)
	{
		return ($this->multi_data = $_multi_data);
	}
	/**
	 * Get single_data value
	 * @return associativeArray|null
	 */
	public function getSingle_data()
	{
		return $this->single_data;
	}
	/**
	 * Set single_data value
	 * @param associativeArray $_single_data the single_data
	 * @return associativeArray
	 */
	public function setSingle_data($_single_data)
	{
		return ($this->single_data = $_single_data);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAdditionalAttributesEntity
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