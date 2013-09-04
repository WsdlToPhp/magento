<?php
/**
 * File for class MagentoStructCatalogProductCreateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCreateEntity originally named catalogProductCreateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCreateEntity extends MagentoWsdlClass
{
	/**
	 * The categories
	 * @var ArrayOfString
	 */
	public $categories;
	/**
	 * The websites
	 * @var ArrayOfString
	 */
	public $websites;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The description
	 * @var MagentoStructString
	 */
	public $description;
	/**
	 * The short_description
	 * @var MagentoStructString
	 */
	public $short_description;
	/**
	 * The weight
	 * @var MagentoStructString
	 */
	public $weight;
	/**
	 * The status
	 * @var MagentoStructString
	 */
	public $status;
	/**
	 * The url_key
	 * @var MagentoStructString
	 */
	public $url_key;
	/**
	 * The url_path
	 * @var MagentoStructString
	 */
	public $url_path;
	/**
	 * The visibility
	 * @var MagentoStructString
	 */
	public $visibility;
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
	 * The has_options
	 * @var MagentoStructString
	 */
	public $has_options;
	/**
	 * The gift_message_available
	 * @var MagentoStructString
	 */
	public $gift_message_available;
	/**
	 * The price
	 * @var MagentoStructString
	 */
	public $price;
	/**
	 * The special_price
	 * @var MagentoStructString
	 */
	public $special_price;
	/**
	 * The special_from_date
	 * @var MagentoStructString
	 */
	public $special_from_date;
	/**
	 * The special_to_date
	 * @var MagentoStructString
	 */
	public $special_to_date;
	/**
	 * The tax_class_id
	 * @var MagentoStructString
	 */
	public $tax_class_id;
	/**
	 * The tier_price
	 * @var catalogProductTierPriceEntityArray
	 */
	public $tier_price;
	/**
	 * The meta_title
	 * @var MagentoStructString
	 */
	public $meta_title;
	/**
	 * The meta_keyword
	 * @var MagentoStructString
	 */
	public $meta_keyword;
	/**
	 * The meta_description
	 * @var MagentoStructString
	 */
	public $meta_description;
	/**
	 * The custom_design
	 * @var MagentoStructString
	 */
	public $custom_design;
	/**
	 * The custom_layout_update
	 * @var MagentoStructString
	 */
	public $custom_layout_update;
	/**
	 * The options_container
	 * @var MagentoStructString
	 */
	public $options_container;
	/**
	 * The additional_attributes
	 * @var MagentoStructCatalogProductAdditionalAttributesEntity
	 */
	public $additional_attributes;
	/**
	 * The stock_data
	 * @var MagentoStructCatalogInventoryStockItemUpdateEntity
	 */
	public $stock_data;
	/**
	 * Constructor method for catalogProductCreateEntity
	 * @see parent::__construct()
	 * @param ArrayOfString $_categories
	 * @param ArrayOfString $_websites
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_description
	 * @param MagentoStructString $_short_description
	 * @param MagentoStructString $_weight
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_url_key
	 * @param MagentoStructString $_url_path
	 * @param MagentoStructString $_visibility
	 * @param ArrayOfString $_category_ids
	 * @param ArrayOfString $_website_ids
	 * @param MagentoStructString $_has_options
	 * @param MagentoStructString $_gift_message_available
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_special_price
	 * @param MagentoStructString $_special_from_date
	 * @param MagentoStructString $_special_to_date
	 * @param MagentoStructString $_tax_class_id
	 * @param catalogProductTierPriceEntityArray $_tier_price
	 * @param MagentoStructString $_meta_title
	 * @param MagentoStructString $_meta_keyword
	 * @param MagentoStructString $_meta_description
	 * @param MagentoStructString $_custom_design
	 * @param MagentoStructString $_custom_layout_update
	 * @param MagentoStructString $_options_container
	 * @param MagentoStructCatalogProductAdditionalAttributesEntity $_additional_attributes
	 * @param MagentoStructCatalogInventoryStockItemUpdateEntity $_stock_data
	 * @return MagentoStructCatalogProductCreateEntity
	 */
	public function __construct($_categories = NULL,$_websites = NULL,$_name = NULL,$_description = NULL,$_short_description = NULL,$_weight = NULL,$_status = NULL,$_url_key = NULL,$_url_path = NULL,$_visibility = NULL,$_category_ids = NULL,$_website_ids = NULL,$_has_options = NULL,$_gift_message_available = NULL,$_price = NULL,$_special_price = NULL,$_special_from_date = NULL,$_special_to_date = NULL,$_tax_class_id = NULL,$_tier_price = NULL,$_meta_title = NULL,$_meta_keyword = NULL,$_meta_description = NULL,$_custom_design = NULL,$_custom_layout_update = NULL,$_options_container = NULL,$_additional_attributes = NULL,$_stock_data = NULL)
	{
		parent::__construct(array('categories'=>$_categories,'websites'=>$_websites,'name'=>$_name,'description'=>$_description,'short_description'=>$_short_description,'weight'=>$_weight,'status'=>$_status,'url_key'=>$_url_key,'url_path'=>$_url_path,'visibility'=>$_visibility,'category_ids'=>$_category_ids,'website_ids'=>$_website_ids,'has_options'=>$_has_options,'gift_message_available'=>$_gift_message_available,'price'=>$_price,'special_price'=>$_special_price,'special_from_date'=>$_special_from_date,'special_to_date'=>$_special_to_date,'tax_class_id'=>$_tax_class_id,'tier_price'=>$_tier_price,'meta_title'=>$_meta_title,'meta_keyword'=>$_meta_keyword,'meta_description'=>$_meta_description,'custom_design'=>$_custom_design,'custom_layout_update'=>$_custom_layout_update,'options_container'=>$_options_container,'additional_attributes'=>$_additional_attributes,'stock_data'=>$_stock_data));
	}
	/**
	 * Get categories value
	 * @return ArrayOfString|null
	 */
	public function getCategories()
	{
		return $this->categories;
	}
	/**
	 * Set categories value
	 * @param ArrayOfString $_categories the categories
	 * @return ArrayOfString
	 */
	public function setCategories($_categories)
	{
		return ($this->categories = $_categories);
	}
	/**
	 * Get websites value
	 * @return ArrayOfString|null
	 */
	public function getWebsites()
	{
		return $this->websites;
	}
	/**
	 * Set websites value
	 * @param ArrayOfString $_websites the websites
	 * @return ArrayOfString
	 */
	public function setWebsites($_websites)
	{
		return ($this->websites = $_websites);
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
	 * Get description value
	 * @return MagentoStructString|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param MagentoStructString $_description the description
	 * @return MagentoStructString
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get short_description value
	 * @return MagentoStructString|null
	 */
	public function getShort_description()
	{
		return $this->short_description;
	}
	/**
	 * Set short_description value
	 * @param MagentoStructString $_short_description the short_description
	 * @return MagentoStructString
	 */
	public function setShort_description($_short_description)
	{
		return ($this->short_description = $_short_description);
	}
	/**
	 * Get weight value
	 * @return MagentoStructString|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param MagentoStructString $_weight the weight
	 * @return MagentoStructString
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Get status value
	 * @return MagentoStructString|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param MagentoStructString $_status the status
	 * @return MagentoStructString
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get url_key value
	 * @return MagentoStructString|null
	 */
	public function getUrl_key()
	{
		return $this->url_key;
	}
	/**
	 * Set url_key value
	 * @param MagentoStructString $_url_key the url_key
	 * @return MagentoStructString
	 */
	public function setUrl_key($_url_key)
	{
		return ($this->url_key = $_url_key);
	}
	/**
	 * Get url_path value
	 * @return MagentoStructString|null
	 */
	public function getUrl_path()
	{
		return $this->url_path;
	}
	/**
	 * Set url_path value
	 * @param MagentoStructString $_url_path the url_path
	 * @return MagentoStructString
	 */
	public function setUrl_path($_url_path)
	{
		return ($this->url_path = $_url_path);
	}
	/**
	 * Get visibility value
	 * @return MagentoStructString|null
	 */
	public function getVisibility()
	{
		return $this->visibility;
	}
	/**
	 * Set visibility value
	 * @param MagentoStructString $_visibility the visibility
	 * @return MagentoStructString
	 */
	public function setVisibility($_visibility)
	{
		return ($this->visibility = $_visibility);
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
	 * Get has_options value
	 * @return MagentoStructString|null
	 */
	public function getHas_options()
	{
		return $this->has_options;
	}
	/**
	 * Set has_options value
	 * @param MagentoStructString $_has_options the has_options
	 * @return MagentoStructString
	 */
	public function setHas_options($_has_options)
	{
		return ($this->has_options = $_has_options);
	}
	/**
	 * Get gift_message_available value
	 * @return MagentoStructString|null
	 */
	public function getGift_message_available()
	{
		return $this->gift_message_available;
	}
	/**
	 * Set gift_message_available value
	 * @param MagentoStructString $_gift_message_available the gift_message_available
	 * @return MagentoStructString
	 */
	public function setGift_message_available($_gift_message_available)
	{
		return ($this->gift_message_available = $_gift_message_available);
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
	 * Get special_price value
	 * @return MagentoStructString|null
	 */
	public function getSpecial_price()
	{
		return $this->special_price;
	}
	/**
	 * Set special_price value
	 * @param MagentoStructString $_special_price the special_price
	 * @return MagentoStructString
	 */
	public function setSpecial_price($_special_price)
	{
		return ($this->special_price = $_special_price);
	}
	/**
	 * Get special_from_date value
	 * @return MagentoStructString|null
	 */
	public function getSpecial_from_date()
	{
		return $this->special_from_date;
	}
	/**
	 * Set special_from_date value
	 * @param MagentoStructString $_special_from_date the special_from_date
	 * @return MagentoStructString
	 */
	public function setSpecial_from_date($_special_from_date)
	{
		return ($this->special_from_date = $_special_from_date);
	}
	/**
	 * Get special_to_date value
	 * @return MagentoStructString|null
	 */
	public function getSpecial_to_date()
	{
		return $this->special_to_date;
	}
	/**
	 * Set special_to_date value
	 * @param MagentoStructString $_special_to_date the special_to_date
	 * @return MagentoStructString
	 */
	public function setSpecial_to_date($_special_to_date)
	{
		return ($this->special_to_date = $_special_to_date);
	}
	/**
	 * Get tax_class_id value
	 * @return MagentoStructString|null
	 */
	public function getTax_class_id()
	{
		return $this->tax_class_id;
	}
	/**
	 * Set tax_class_id value
	 * @param MagentoStructString $_tax_class_id the tax_class_id
	 * @return MagentoStructString
	 */
	public function setTax_class_id($_tax_class_id)
	{
		return ($this->tax_class_id = $_tax_class_id);
	}
	/**
	 * Get tier_price value
	 * @return catalogProductTierPriceEntityArray|null
	 */
	public function getTier_price()
	{
		return $this->tier_price;
	}
	/**
	 * Set tier_price value
	 * @param catalogProductTierPriceEntityArray $_tier_price the tier_price
	 * @return catalogProductTierPriceEntityArray
	 */
	public function setTier_price($_tier_price)
	{
		return ($this->tier_price = $_tier_price);
	}
	/**
	 * Get meta_title value
	 * @return MagentoStructString|null
	 */
	public function getMeta_title()
	{
		return $this->meta_title;
	}
	/**
	 * Set meta_title value
	 * @param MagentoStructString $_meta_title the meta_title
	 * @return MagentoStructString
	 */
	public function setMeta_title($_meta_title)
	{
		return ($this->meta_title = $_meta_title);
	}
	/**
	 * Get meta_keyword value
	 * @return MagentoStructString|null
	 */
	public function getMeta_keyword()
	{
		return $this->meta_keyword;
	}
	/**
	 * Set meta_keyword value
	 * @param MagentoStructString $_meta_keyword the meta_keyword
	 * @return MagentoStructString
	 */
	public function setMeta_keyword($_meta_keyword)
	{
		return ($this->meta_keyword = $_meta_keyword);
	}
	/**
	 * Get meta_description value
	 * @return MagentoStructString|null
	 */
	public function getMeta_description()
	{
		return $this->meta_description;
	}
	/**
	 * Set meta_description value
	 * @param MagentoStructString $_meta_description the meta_description
	 * @return MagentoStructString
	 */
	public function setMeta_description($_meta_description)
	{
		return ($this->meta_description = $_meta_description);
	}
	/**
	 * Get custom_design value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design()
	{
		return $this->custom_design;
	}
	/**
	 * Set custom_design value
	 * @param MagentoStructString $_custom_design the custom_design
	 * @return MagentoStructString
	 */
	public function setCustom_design($_custom_design)
	{
		return ($this->custom_design = $_custom_design);
	}
	/**
	 * Get custom_layout_update value
	 * @return MagentoStructString|null
	 */
	public function getCustom_layout_update()
	{
		return $this->custom_layout_update;
	}
	/**
	 * Set custom_layout_update value
	 * @param MagentoStructString $_custom_layout_update the custom_layout_update
	 * @return MagentoStructString
	 */
	public function setCustom_layout_update($_custom_layout_update)
	{
		return ($this->custom_layout_update = $_custom_layout_update);
	}
	/**
	 * Get options_container value
	 * @return MagentoStructString|null
	 */
	public function getOptions_container()
	{
		return $this->options_container;
	}
	/**
	 * Set options_container value
	 * @param MagentoStructString $_options_container the options_container
	 * @return MagentoStructString
	 */
	public function setOptions_container($_options_container)
	{
		return ($this->options_container = $_options_container);
	}
	/**
	 * Get additional_attributes value
	 * @return MagentoStructCatalogProductAdditionalAttributesEntity|null
	 */
	public function getAdditional_attributes()
	{
		return $this->additional_attributes;
	}
	/**
	 * Set additional_attributes value
	 * @param MagentoStructCatalogProductAdditionalAttributesEntity $_additional_attributes the additional_attributes
	 * @return MagentoStructCatalogProductAdditionalAttributesEntity
	 */
	public function setAdditional_attributes($_additional_attributes)
	{
		return ($this->additional_attributes = $_additional_attributes);
	}
	/**
	 * Get stock_data value
	 * @return MagentoStructCatalogInventoryStockItemUpdateEntity|null
	 */
	public function getStock_data()
	{
		return $this->stock_data;
	}
	/**
	 * Set stock_data value
	 * @param MagentoStructCatalogInventoryStockItemUpdateEntity $_stock_data the stock_data
	 * @return MagentoStructCatalogInventoryStockItemUpdateEntity
	 */
	public function setStock_data($_stock_data)
	{
		return ($this->stock_data = $_stock_data);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCreateEntity
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