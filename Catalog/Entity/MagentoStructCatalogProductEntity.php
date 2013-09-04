<?php
/**
 * File for class MagentoStructCatalogProductEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductEntity originally named catalogProductEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductEntity extends MagentoWsdlClass
{
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The set
	 * @var MagentoStructString
	 */
	public $set;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The category_ids
	 * @var ArrayOfString
	 */
	public $category_ids;
	/**
	 * The website_ids
	 * @var ArrayOfString
	 */
	public $website_ids;
	/**
	 * Constructor method for catalogProductEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_set
	 * @param MagentoStructString $_type
	 * @param ArrayOfString $_category_ids
	 * @param ArrayOfString $_website_ids
	 * @return MagentoStructCatalogProductEntity
	 */
	public function __construct($_product_id = NULL,$_sku = NULL,$_name = NULL,$_set = NULL,$_type = NULL,$_category_ids = NULL,$_website_ids = NULL)
	{
		parent::__construct(array('product_id'=>$_product_id,'sku'=>$_sku,'name'=>$_name,'set'=>$_set,'type'=>$_type,'category_ids'=>$_category_ids,'website_ids'=>$_website_ids));
	}
	/**
	 * Get product_id value
	 * @return MagentoStructString|null
	 */
	public function getProduct_id()
	{
		return $this->product_id;
	}
	/**
	 * Set product_id value
	 * @param MagentoStructString $_product_id the product_id
	 * @return MagentoStructString
	 */
	public function setProduct_id($_product_id)
	{
		return ($this->product_id = $_product_id);
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
	 * Get set value
	 * @return MagentoStructString|null
	 */
	public function getSet()
	{
		return $this->set;
	}
	/**
	 * Set set value
	 * @param MagentoStructString $_set the set
	 * @return MagentoStructString
	 */
	public function setSet($_set)
	{
		return ($this->set = $_set);
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
	 * Get category_ids value
	 * @return ArrayOfString|null
	 */
	public function getCategory_ids()
	{
		return $this->category_ids;
	}
	/**
	 * Set category_ids value
	 * @param ArrayOfString $_category_ids the category_ids
	 * @return ArrayOfString
	 */
	public function setCategory_ids($_category_ids)
	{
		return ($this->category_ids = $_category_ids);
	}
	/**
	 * Get website_ids value
	 * @return ArrayOfString|null
	 */
	public function getWebsite_ids()
	{
		return $this->website_ids;
	}
	/**
	 * Set website_ids value
	 * @param ArrayOfString $_website_ids the website_ids
	 * @return ArrayOfString
	 */
	public function setWebsite_ids($_website_ids)
	{
		return ($this->website_ids = $_website_ids);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductEntity
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