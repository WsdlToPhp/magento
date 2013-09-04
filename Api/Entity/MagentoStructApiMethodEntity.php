<?php
/**
 * File for class MagentoStructApiMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructApiMethodEntity originally named apiMethodEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructApiMethodEntity extends MagentoWsdlClass
{
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The path
	 * @var MagentoStructString
	 */
	public $path;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The aliases
	 * @var ArrayOfString
	 */
	public $aliases;
	/**
	 * Constructor method for apiMethodEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_path
	 * @param MagentoStructString $_name
	 * @param ArrayOfString $_aliases
	 * @return MagentoStructApiMethodEntity
	 */
	public function __construct($_title = NULL,$_path = NULL,$_name = NULL,$_aliases = NULL)
	{
		parent::__construct(array('title'=>$_title,'path'=>$_path,'name'=>$_name,'aliases'=>$_aliases));
	}
	/**
	 * Get title value
	 * @return MagentoStructString|null
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set title value
	 * @param MagentoStructString $_title the title
	 * @return MagentoStructString
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get path value
	 * @return MagentoStructString|null
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set path value
	 * @param MagentoStructString $_path the path
	 * @return MagentoStructString
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
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
	 * Get aliases value
	 * @return ArrayOfString|null
	 */
	public function getAliases()
	{
		return $this->aliases;
	}
	/**
	 * Set aliases value
	 * @param ArrayOfString $_aliases the aliases
	 * @return ArrayOfString
	 */
	public function setAliases($_aliases)
	{
		return ($this->aliases = $_aliases);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructApiMethodEntity
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