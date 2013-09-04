<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionAdditionalFieldsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionAdditionalFieldsEntity originally named catalogProductCustomOptionAdditionalFieldsEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionAdditionalFieldsEntity extends MagentoWsdlClass
{
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The price
	 * @var MagentoStructString
	 */
	public $price;
	/**
	 * The price_type
	 * @var MagentoStructString
	 */
	public $price_type;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The max_characters
	 * @var MagentoStructString
	 */
	public $max_characters;
	/**
	 * The sort_order
	 * @var MagentoStructString
	 */
	public $sort_order;
	/**
	 * The file_extension
	 * @var MagentoStructString
	 */
	public $file_extension;
	/**
	 * The image_size_x
	 * @var MagentoStructString
	 */
	public $image_size_x;
	/**
	 * The image_size_y
	 * @var MagentoStructString
	 */
	public $image_size_y;
	/**
	 * The value_id
	 * @var MagentoStructString
	 */
	public $value_id;
	/**
	 * Constructor method for catalogProductCustomOptionAdditionalFieldsEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_price_type
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_max_characters
	 * @param MagentoStructString $_sort_order
	 * @param MagentoStructString $_file_extension
	 * @param MagentoStructString $_image_size_x
	 * @param MagentoStructString $_image_size_y
	 * @param MagentoStructString $_value_id
	 * @return MagentoStructCatalogProductCustomOptionAdditionalFieldsEntity
	 */
	public function __construct($_title = NULL,$_price = NULL,$_price_type = NULL,$_sku = NULL,$_max_characters = NULL,$_sort_order = NULL,$_file_extension = NULL,$_image_size_x = NULL,$_image_size_y = NULL,$_value_id = NULL)
	{
		parent::__construct(array('title'=>$_title,'price'=>$_price,'price_type'=>$_price_type,'sku'=>$_sku,'max_characters'=>$_max_characters,'sort_order'=>$_sort_order,'file_extension'=>$_file_extension,'image_size_x'=>$_image_size_x,'image_size_y'=>$_image_size_y,'value_id'=>$_value_id));
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
	 * Get price value
	 * @return MagentoStructString|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param MagentoStructString $_price the price
	 * @return MagentoStructString
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price_type value
	 * @return MagentoStructString|null
	 */
	public function getPrice_type()
	{
		return $this->price_type;
	}
	/**
	 * Set price_type value
	 * @param MagentoStructString $_price_type the price_type
	 * @return MagentoStructString
	 */
	public function setPrice_type($_price_type)
	{
		return ($this->price_type = $_price_type);
	}
	/**
	 * Get sku value
	 * @return MagentoStructString|null
	 */
	public function getSku()
	{
		return $this->sku;
	}
	/**
	 * Set sku value
	 * @param MagentoStructString $_sku the sku
	 * @return MagentoStructString
	 */
	public function setSku($_sku)
	{
		return ($this->sku = $_sku);
	}
	/**
	 * Get max_characters value
	 * @return MagentoStructString|null
	 */
	public function getMax_characters()
	{
		return $this->max_characters;
	}
	/**
	 * Set max_characters value
	 * @param MagentoStructString $_max_characters the max_characters
	 * @return MagentoStructString
	 */
	public function setMax_characters($_max_characters)
	{
		return ($this->max_characters = $_max_characters);
	}
	/**
	 * Get sort_order value
	 * @return MagentoStructString|null
	 */
	public function getSort_order()
	{
		return $this->sort_order;
	}
	/**
	 * Set sort_order value
	 * @param MagentoStructString $_sort_order the sort_order
	 * @return MagentoStructString
	 */
	public function setSort_order($_sort_order)
	{
		return ($this->sort_order = $_sort_order);
	}
	/**
	 * Get file_extension value
	 * @return MagentoStructString|null
	 */
	public function getFile_extension()
	{
		return $this->file_extension;
	}
	/**
	 * Set file_extension value
	 * @param MagentoStructString $_file_extension the file_extension
	 * @return MagentoStructString
	 */
	public function setFile_extension($_file_extension)
	{
		return ($this->file_extension = $_file_extension);
	}
	/**
	 * Get image_size_x value
	 * @return MagentoStructString|null
	 */
	public function getImage_size_x()
	{
		return $this->image_size_x;
	}
	/**
	 * Set image_size_x value
	 * @param MagentoStructString $_image_size_x the image_size_x
	 * @return MagentoStructString
	 */
	public function setImage_size_x($_image_size_x)
	{
		return ($this->image_size_x = $_image_size_x);
	}
	/**
	 * Get image_size_y value
	 * @return MagentoStructString|null
	 */
	public function getImage_size_y()
	{
		return $this->image_size_y;
	}
	/**
	 * Set image_size_y value
	 * @param MagentoStructString $_image_size_y the image_size_y
	 * @return MagentoStructString
	 */
	public function setImage_size_y($_image_size_y)
	{
		return ($this->image_size_y = $_image_size_y);
	}
	/**
	 * Get value_id value
	 * @return MagentoStructString|null
	 */
	public function getValue_id()
	{
		return $this->value_id;
	}
	/**
	 * Set value_id value
	 * @param MagentoStructString $_value_id the value_id
	 * @return MagentoStructString
	 */
	public function setValue_id($_value_id)
	{
		return ($this->value_id = $_value_id);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionAdditionalFieldsEntity
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