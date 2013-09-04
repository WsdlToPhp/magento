<?php
/**
 * File for class MagentoStructCatalogProductDownloadableLinkEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductDownloadableLinkEntity originally named catalogProductDownloadableLinkEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductDownloadableLinkEntity extends MagentoWsdlClass
{
	/**
	 * The link_id
	 * @var MagentoStructString
	 */
	public $link_id;
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
	 * The number_of_downloads
	 * @var MagentoStructInt
	 */
	public $number_of_downloads;
	/**
	 * The is_unlimited
	 * @var MagentoStructInt
	 */
	public $is_unlimited;
	/**
	 * The is_shareable
	 * @var MagentoStructInt
	 */
	public $is_shareable;
	/**
	 * The link_url
	 * @var MagentoStructString
	 */
	public $link_url;
	/**
	 * The link_type
	 * @var MagentoStructString
	 */
	public $link_type;
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
	 * @var MagentoStructInt
	 */
	public $sort_order;
	/**
	 * The file_save
	 * @var catalogProductDownloadableLinkFileInfoEntityArray
	 */
	public $file_save;
	/**
	 * The sample_file_save
	 * @var catalogProductDownloadableLinkFileInfoEntityArray
	 */
	public $sample_file_save;
	/**
	 * Constructor method for catalogProductDownloadableLinkEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_link_id
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_price
	 * @param MagentoStructInt $_number_of_downloads
	 * @param MagentoStructInt $_is_unlimited
	 * @param MagentoStructInt $_is_shareable
	 * @param MagentoStructString $_link_url
	 * @param MagentoStructString $_link_type
	 * @param MagentoStructString $_sample_file
	 * @param MagentoStructString $_sample_url
	 * @param MagentoStructString $_sample_type
	 * @param MagentoStructInt $_sort_order
	 * @param catalogProductDownloadableLinkFileInfoEntityArray $_file_save
	 * @param catalogProductDownloadableLinkFileInfoEntityArray $_sample_file_save
	 * @return MagentoStructCatalogProductDownloadableLinkEntity
	 */
	public function __construct($_link_id = NULL,$_title = NULL,$_price = NULL,$_number_of_downloads = NULL,$_is_unlimited = NULL,$_is_shareable = NULL,$_link_url = NULL,$_link_type = NULL,$_sample_file = NULL,$_sample_url = NULL,$_sample_type = NULL,$_sort_order = NULL,$_file_save = NULL,$_sample_file_save = NULL)
	{
		parent::__construct(array('link_id'=>$_link_id,'title'=>$_title,'price'=>$_price,'number_of_downloads'=>$_number_of_downloads,'is_unlimited'=>$_is_unlimited,'is_shareable'=>$_is_shareable,'link_url'=>$_link_url,'link_type'=>$_link_type,'sample_file'=>$_sample_file,'sample_url'=>$_sample_url,'sample_type'=>$_sample_type,'sort_order'=>$_sort_order,'file_save'=>$_file_save,'sample_file_save'=>$_sample_file_save));
	}
	/**
	 * Get link_id value
	 * @return MagentoStructString|null
	 */
	public function getLink_id()
	{
		return $this->link_id;
	}
	/**
	 * Set link_id value
	 * @param MagentoStructString $_link_id the link_id
	 * @return MagentoStructString
	 */
	public function setLink_id($_link_id)
	{
		return ($this->link_id = $_link_id);
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
	 * Get link_type value
	 * @return MagentoStructString|null
	 */
	public function getLink_type()
	{
		return $this->link_type;
	}
	/**
	 * Set link_type value
	 * @param MagentoStructString $_link_type the link_type
	 * @return MagentoStructString
	 */
	public function setLink_type($_link_type)
	{
		return ($this->link_type = $_link_type);
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
	 * Get file_save value
	 * @return catalogProductDownloadableLinkFileInfoEntityArray|null
	 */
	public function getFile_save()
	{
		return $this->file_save;
	}
	/**
	 * Set file_save value
	 * @param catalogProductDownloadableLinkFileInfoEntityArray $_file_save the file_save
	 * @return catalogProductDownloadableLinkFileInfoEntityArray
	 */
	public function setFile_save($_file_save)
	{
		return ($this->file_save = $_file_save);
	}
	/**
	 * Get sample_file_save value
	 * @return catalogProductDownloadableLinkFileInfoEntityArray|null
	 */
	public function getSample_file_save()
	{
		return $this->sample_file_save;
	}
	/**
	 * Set sample_file_save value
	 * @param catalogProductDownloadableLinkFileInfoEntityArray $_sample_file_save the sample_file_save
	 * @return catalogProductDownloadableLinkFileInfoEntityArray
	 */
	public function setSample_file_save($_sample_file_save)
	{
		return ($this->sample_file_save = $_sample_file_save);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductDownloadableLinkEntity
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