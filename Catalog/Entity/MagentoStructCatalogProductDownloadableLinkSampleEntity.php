<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkSampleEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkSampleEntity originally named catalogProductDownloadableLinkSampleEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkSampleEntity extends MagentoWsdlClass
{
	/**
	 * The sample_id
	 * @var MagentoStructString
	 */
	public $sample_id;
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The sample_file
	 * @var MagentoStructString
	 */
	public $sample_file;
	/**
	 * The sample_url
	 * @var MagentoStructString
	 */
	public $sample_url;
	/**
	 * The sample_type
	 * @var MagentoStructString
	 */
	public $sample_type;
	/**
	 * The sort_order
	 * @var MagentoStructString
	 */
	public $sort_order;
	/**
	 * The default_title
	 * @var MagentoStructString
	 */
	public $default_title;
	/**
	 * The store_title
	 * @var MagentoStructString
	 */
	public $store_title;
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * Constructor method for catalogProductDownloadableLinkSampleEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_sample_id
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_sample_file
	 * @param MagentoStructString $_sample_url
	 * @param MagentoStructString $_sample_type
	 * @param MagentoStructString $_sort_order
	 * @param MagentoStructString $_default_title
	 * @param MagentoStructString $_store_title
	 * @param MagentoStructString $_title
	 * @return MagentoStructCatalogProductDownloadableLinkSampleEntity
	 */
	public function __construct($_sample_id = NULL,$_product_id = NULL,$_sample_file = NULL,$_sample_url = NULL,$_sample_type = NULL,$_sort_order = NULL,$_default_title = NULL,$_store_title = NULL,$_title = NULL)
	{
		parent::__construct(array('sample_id'=>$_sample_id,'product_id'=>$_product_id,'sample_file'=>$_sample_file,'sample_url'=>$_sample_url,'sample_type'=>$_sample_type,'sort_order'=>$_sort_order,'default_title'=>$_default_title,'store_title'=>$_store_title,'title'=>$_title));
	}
	/**
	 * Get sample_id value
	 * @return MagentoStructString|null
	 */
	public function getSample_id()
	{
		return $this->sample_id;
	}
	/**
	 * Set sample_id value
	 * @param MagentoStructString $_sample_id the sample_id
	 * @return MagentoStructString
	 */
	public function setSample_id($_sample_id)
	{
		return ($this->sample_id = $_sample_id);
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
	 * Get sample_file value
	 * @return MagentoStructString|null
	 */
	public function getSample_file()
	{
		return $this->sample_file;
	}
	/**
	 * Set sample_file value
	 * @param MagentoStructString $_sample_file the sample_file
	 * @return MagentoStructString
	 */
	public function setSample_file($_sample_file)
	{
		return ($this->sample_file = $_sample_file);
	}
	/**
	 * Get sample_url value
	 * @return MagentoStructString|null
	 */
	public function getSample_url()
	{
		return $this->sample_url;
	}
	/**
	 * Set sample_url value
	 * @param MagentoStructString $_sample_url the sample_url
	 * @return MagentoStructString
	 */
	public function setSample_url($_sample_url)
	{
		return ($this->sample_url = $_sample_url);
	}
	/**
	 * Get sample_type value
	 * @return MagentoStructString|null
	 */
	public function getSample_type()
	{
		return $this->sample_type;
	}
	/**
	 * Set sample_type value
	 * @param MagentoStructString $_sample_type the sample_type
	 * @return MagentoStructString
	 */
	public function setSample_type($_sample_type)
	{
		return ($this->sample_type = $_sample_type);
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
	 * Get default_title value
	 * @return MagentoStructString|null
	 */
	public function getDefault_title()
	{
		return $this->default_title;
	}
	/**
	 * Set default_title value
	 * @param MagentoStructString $_default_title the default_title
	 * @return MagentoStructString
	 */
	public function setDefault_title($_default_title)
	{
		return ($this->default_title = $_default_title);
	}
	/**
	 * Get store_title value
	 * @return MagentoStructString|null
	 */
	public function getStore_title()
	{
		return $this->store_title;
	}
	/**
	 * Set store_title value
	 * @param MagentoStructString $_store_title the store_title
	 * @return MagentoStructString
	 */
	public function setStore_title($_store_title)
	{
		return ($this->store_title = $_store_title);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkSampleEntity
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