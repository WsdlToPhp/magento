<?php
/**
 * File for class MagentoStructFilters
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructFilters originally named filters
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructFilters extends MagentoWsdlClass
{
	/**
	 * The filter
	 * @var associativeArray
	 */
	public $filter;
	/**
	 * The complex_filter
	 * @var complexFilterArray
	 */
	public $complex_filter;
	/**
	 * Constructor method for filters
	 * @see parent::__construct()
	 * @param associativeArray $_filter
	 * @param complexFilterArray $_complex_filter
	 * @return MagentoStructFilters
	 */
	public function __construct($_filter = NULL,$_complex_filter = NULL)
	{
		parent::__construct(array('filter'=>$_filter,'complex_filter'=>$_complex_filter));
	}
	/**
	 * Get filter value
	 * @return associativeArray|null
	 */
	public function getFilter()
	{
		return $this->filter;
	}
	/**
	 * Set filter value
	 * @param associativeArray $_filter the filter
	 * @return associativeArray
	 */
	public function setFilter($_filter)
	{
		return ($this->filter = $_filter);
	}
	/**
	 * Get complex_filter value
	 * @return complexFilterArray|null
	 */
	public function getComplex_filter()
	{
		return $this->complex_filter;
	}
	/**
	 * Set complex_filter value
	 * @param complexFilterArray $_complex_filter the complex_filter
	 * @return complexFilterArray
	 */
	public function setComplex_filter($_complex_filter)
	{
		return ($this->complex_filter = $_complex_filter);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructFilters
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