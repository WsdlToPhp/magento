<?php
/**
 * File for class MagentoStructDirectoryRegionEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructDirectoryRegionEntity originally named directoryRegionEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructDirectoryRegionEntity extends MagentoWsdlClass
{
	/**
	 * The region_id
	 * @var MagentoStructString
	 */
	public $region_id;
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * Constructor method for directoryRegionEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_region_id
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_name
	 * @return MagentoStructDirectoryRegionEntity
	 */
	public function __construct($_region_id = NULL,$_code = NULL,$_name = NULL)
	{
		parent::__construct(array('region_id'=>$_region_id,'code'=>$_code,'name'=>$_name));
	}
	/**
	 * Get region_id value
	 * @return MagentoStructString|null
	 */
	public function getRegion_id()
	{
		return $this->region_id;
	}
	/**
	 * Set region_id value
	 * @param MagentoStructString $_region_id the region_id
	 * @return MagentoStructString
	 */
	public function setRegion_id($_region_id)
	{
		return ($this->region_id = $_region_id);
	}
	/**
	 * Get code value
	 * @return MagentoStructString|null
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set code value
	 * @param MagentoStructString $_code the code
	 * @return MagentoStructString
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
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
	 * @return MagentoStructDirectoryRegionEntity
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