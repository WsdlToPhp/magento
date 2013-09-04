<?php
/**
 * File for class MagentoStructDirectoryCountryEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructDirectoryCountryEntity originally named directoryCountryEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructDirectoryCountryEntity extends MagentoWsdlClass
{
	/**
	 * The country_id
	 * @var MagentoStructString
	 */
	public $country_id;
	/**
	 * The iso2_code
	 * @var MagentoStructString
	 */
	public $iso2_code;
	/**
	 * The iso3_code
	 * @var MagentoStructString
	 */
	public $iso3_code;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * Constructor method for directoryCountryEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_country_id
	 * @param MagentoStructString $_iso2_code
	 * @param MagentoStructString $_iso3_code
	 * @param MagentoStructString $_name
	 * @return MagentoStructDirectoryCountryEntity
	 */
	public function __construct($_country_id = NULL,$_iso2_code = NULL,$_iso3_code = NULL,$_name = NULL)
	{
		parent::__construct(array('country_id'=>$_country_id,'iso2_code'=>$_iso2_code,'iso3_code'=>$_iso3_code,'name'=>$_name));
	}
	/**
	 * Get country_id value
	 * @return MagentoStructString|null
	 */
	public function getCountry_id()
	{
		return $this->country_id;
	}
	/**
	 * Set country_id value
	 * @param MagentoStructString $_country_id the country_id
	 * @return MagentoStructString
	 */
	public function setCountry_id($_country_id)
	{
		return ($this->country_id = $_country_id);
	}
	/**
	 * Get iso2_code value
	 * @return MagentoStructString|null
	 */
	public function getIso2_code()
	{
		return $this->iso2_code;
	}
	/**
	 * Set iso2_code value
	 * @param MagentoStructString $_iso2_code the iso2_code
	 * @return MagentoStructString
	 */
	public function setIso2_code($_iso2_code)
	{
		return ($this->iso2_code = $_iso2_code);
	}
	/**
	 * Get iso3_code value
	 * @return MagentoStructString|null
	 */
	public function getIso3_code()
	{
		return $this->iso3_code;
	}
	/**
	 * Set iso3_code value
	 * @param MagentoStructString $_iso3_code the iso3_code
	 * @return MagentoStructString
	 */
	public function setIso3_code($_iso3_code)
	{
		return ($this->iso3_code = $_iso3_code);
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
	 * @return MagentoStructDirectoryCountryEntity
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