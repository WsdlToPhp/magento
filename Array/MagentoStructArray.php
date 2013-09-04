<?php
/**
 * File for class MagentoStructArray
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructArray originally named Array
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructArray extends MagentoWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The arrayType
	 * @var MagentoStructString
	 */
	public $arrayType;
	/**
	 * The offset
	 * @var arrayCoordinate
	 */
	public $offset;
	/**
	 * The id
	 * @var MagentoStructID
	 */
	public $id;
	/**
	 * The href
	 * @var MagentoStructAnyURI
	 */
	public $href;
	/**
	 * Constructor method for Array
	 * @see parent::__construct()
	 * @param DOMDocument $_any
	 * @param MagentoStructString $_arrayType
	 * @param arrayCoordinate $_offset
	 * @param MagentoStructID $_id
	 * @param MagentoStructAnyURI $_href
	 * @return MagentoStructArray
	 */
	public function __construct($_any = NULL,$_arrayType = NULL,$_offset = NULL,$_id = NULL,$_href = NULL)
	{
		parent::__construct(array('any'=>$_any,'arrayType'=>$_arrayType,'offset'=>$_offset,'id'=>$_id,'href'=>$_href));
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses MagentoStructArray::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get arrayType value
	 * @return MagentoStructString|null
	 */
	public function getArrayType()
	{
		return $this->arrayType;
	}
	/**
	 * Set arrayType value
	 * @param MagentoStructString $_arrayType the arrayType
	 * @return MagentoStructString
	 */
	public function setArrayType($_arrayType)
	{
		return ($this->arrayType = $_arrayType);
	}
	/**
	 * Get offset value
	 * @return arrayCoordinate|null
	 */
	public function getOffset()
	{
		return $this->offset;
	}
	/**
	 * Set offset value
	 * @param arrayCoordinate $_offset the offset
	 * @return arrayCoordinate
	 */
	public function setOffset($_offset)
	{
		return ($this->offset = $_offset);
	}
	/**
	 * Get id value
	 * @return MagentoStructID|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param MagentoStructID $_id the id
	 * @return MagentoStructID
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get href value
	 * @return MagentoStructAnyURI|null
	 */
	public function getHref()
	{
		return $this->href;
	}
	/**
	 * Set href value
	 * @param MagentoStructAnyURI $_href the href
	 * @return MagentoStructAnyURI
	 */
	public function setHref($_href)
	{
		return ($this->href = $_href);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructArray
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