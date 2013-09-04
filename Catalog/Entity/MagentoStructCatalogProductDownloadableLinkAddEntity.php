<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkAddEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkAddEntity originally named catalogProductDownloadableLinkAddEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkAddEntity extends MagentoWsdlClass
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
	 * The is_unlimited
	 * @var MagentoStructInt
	 */
	public $is_unlimited;
	/**
	 * The number_of_downloads
	 * @var MagentoStructInt
	 */
	public $number_of_downloads;
	/**
	 * The is_shareable
	 * @var MagentoStructInt
	 */
	public $is_shareable;
	/**
	 * The sample
	 * @var MagentoStructCatalogProductDownloadableLinkAddSampleEntity
	 */
	public $sample;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The file
	 * @var MagentoStructCatalogProductDownloadableLinkFileEntity
	 */
	public $file;
	/**
	 * The link_url
	 * @var MagentoStructString
	 */
	public $link_url;
	/**
	 * The sample_url
	 * @var MagentoStructString
	 */
	public $sample_url;
	/**
	 * The sort_order
	 * @var MagentoStructInt
	 */
	public $sort_order;
	/**
	 * Constructor method for catalogProductDownloadableLinkAddEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_price
	 * @param MagentoStructInt $_is_unlimited
	 * @param MagentoStructInt $_number_of_downloads
	 * @param MagentoStructInt $_is_shareable
	 * @param MagentoStructCatalogProductDownloadableLinkAddSampleEntity $_sample
	 * @param MagentoStructString $_type
	 * @param MagentoStructCatalogProductDownloadableLinkFileEntity $_file
	 * @param MagentoStructString $_link_url
	 * @param MagentoStructString $_sample_url
	 * @param MagentoStructInt $_sort_order
	 * @return MagentoStructCatalogProductDownloadableLinkAddEntity
	 */
	public function __construct($_title = NULL,$_price = NULL,$_is_unlimited = NULL,$_number_of_downloads = NULL,$_is_shareable = NULL,$_sample = NULL,$_type = NULL,$_file = NULL,$_link_url = NULL,$_sample_url = NULL,$_sort_order = NULL)
	{
		parent::__construct(array('title'=>$_title,'price'=>$_price,'is_unlimited'=>$_is_unlimited,'number_of_downloads'=>$_number_of_downloads,'is_shareable'=>$_is_shareable,'sample'=>$_sample,'type'=>$_type,'file'=>$_file,'link_url'=>$_link_url,'sample_url'=>$_sample_url,'sort_order'=>$_sort_order));
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
	 * Get is_unlimited value
	 * @return MagentoStructInt|null
	 */
	public function getIs_unlimited()
	{
		return $this->is_unlimited;
	}
	/**
	 * Set is_unlimited value
	 * @param MagentoStructInt $_is_unlimited the is_unlimited
	 * @return MagentoStructInt
	 */
	public function setIs_unlimited($_is_unlimited)
	{
		return ($this->is_unlimited = $_is_unlimited);
	}
	/**
	 * Get number_of_downloads value
	 * @return MagentoStructInt|null
	 */
	public function getNumber_of_downloads()
	{
		return $this->number_of_downloads;
	}
	/**
	 * Set number_of_downloads value
	 * @param MagentoStructInt $_number_of_downloads the number_of_downloads
	 * @return MagentoStructInt
	 */
	public function setNumber_of_downloads($_number_of_downloads)
	{
		return ($this->number_of_downloads = $_number_of_downloads);
	}
	/**
	 * Get is_shareable value
	 * @return MagentoStructInt|null
	 */
	public function getIs_shareable()
	{
		return $this->is_shareable;
	}
	/**
	 * Set is_shareable value
	 * @param MagentoStructInt $_is_shareable the is_shareable
	 * @return MagentoStructInt
	 */
	public function setIs_shareable($_is_shareable)
	{
		return ($this->is_shareable = $_is_shareable);
	}
	/**
	 * Get sample value
	 * @return MagentoStructCatalogProductDownloadableLinkAddSampleEntity|null
	 */
	public function getSample()
	{
		return $this->sample;
	}
	/**
	 * Set sample value
	 * @param MagentoStructCatalogProductDownloadableLinkAddSampleEntity $_sample the sample
	 * @return MagentoStructCatalogProductDownloadableLinkAddSampleEntity
	 */
	public function setSample($_sample)
	{
		return ($this->sample = $_sample);
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
	 * Get file value
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity|null
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set file value
	 * @param MagentoStructCatalogProductDownloadableLinkFileEntity $_file the file
	 * @return MagentoStructCatalogProductDownloadableLinkFileEntity
	 */
	public function setFile($_file)
	{
		return ($this->file = $_file);
	}
	/**
	 * Get link_url value
	 * @return MagentoStructString|null
	 */
	public function getLink_url()
	{
		return $this->link_url;
	}
	/**
	 * Set link_url value
	 * @param MagentoStructString $_link_url the link_url
	 * @return MagentoStructString
	 */
	public function setLink_url($_link_url)
	{
		return ($this->link_url = $_link_url);
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
	 * Get sort_order value
	 * @return MagentoStructInt|null
	 */
	public function getSort_order()
	{
		return $this->sort_order;
	}
	/**
	 * Set sort_order value
	 * @param MagentoStructInt $_sort_order the sort_order
	 * @return MagentoStructInt
	 */
	public function setSort_order($_sort_order)
	{
		return ($this->sort_order = $_sort_order);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkAddEntity
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