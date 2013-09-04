<?php
/**
 * File for class MagentoStructCatalogAttributeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogAttributeEntity originally named catalogAttributeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogAttributeEntity extends MagentoWsdlClass
{
	/**
	 * The attribute_id
	 * @var MagentoStructInt
	 */
	public $attribute_id;
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The required
	 * @var MagentoStructString
	 */
	public $required;
	/**
	 * The scope
	 * @var MagentoStructString
	 */
	public $scope;
	/**
	 * Constructor method for catalogAttributeEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_attribute_id
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_required
	 * @param MagentoStructString $_scope
	 * @return MagentoStructCatalogAttributeEntity
	 */
	public function __construct($_attribute_id = NULL,$_code = NULL,$_type = NULL,$_required = NULL,$_scope = NULL)
	{
		parent::__construct(array('attribute_id'=>$_attribute_id,'code'=>$_code,'type'=>$_type,'required'=>$_required,'scope'=>$_scope));
	}
	/**
	 * Get attribute_id value
	 * @return MagentoStructInt|null
	 */
	public function getAttribute_id()
	{
		return $this->attribute_id;
	}
	/**
	 * Set attribute_id value
	 * @param MagentoStructInt $_attribute_id the attribute_id
	 * @return MagentoStructInt
	 */
	public function setAttribute_id($_attribute_id)
	{
		return ($this->attribute_id = $_attribute_id);
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
	 * Get required value
	 * @return MagentoStructString|null
	 */
	public function getRequired()
	{
		return $this->required;
	}
	/**
	 * Set required value
	 * @param MagentoStructString $_required the required
	 * @return MagentoStructString
	 */
	public function setRequired($_required)
	{
		return ($this->required = $_required);
	}
	/**
	 * Get scope value
	 * @return MagentoStructString|null
	 */
	public function getScope()
	{
		return $this->scope;
	}
	/**
	 * Set scope value
	 * @param MagentoStructString $_scope the scope
	 * @return MagentoStructString
	 */
	public function setScope($_scope)
	{
		return ($this->scope = $_scope);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogAttributeEntity
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