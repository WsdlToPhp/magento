<?php
/**
 * File for class MagentoStructCatalogCategoryEntityCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogCategoryEntityCreate originally named catalogCategoryEntityCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogCategoryEntityCreate extends MagentoWsdlClass
{
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * The position
	 * @var MagentoStructInt
	 */
	public $position;
	/**
	 * The available_sort_by
	 * @var ArrayOfString
	 */
	public $available_sort_by;
	/**
	 * The custom_design
	 * @var MagentoStructString
	 */
	public $custom_design;
	/**
	 * The custom_design_apply
	 * @var MagentoStructInt
	 */
	public $custom_design_apply;
	/**
	 * The custom_design_from
	 * @var MagentoStructString
	 */
	public $custom_design_from;
	/**
	 * The custom_design_to
	 * @var MagentoStructString
	 */
	public $custom_design_to;
	/**
	 * The custom_layout_update
	 * @var MagentoStructString
	 */
	public $custom_layout_update;
	/**
	 * The default_sort_by
	 * @var MagentoStructString
	 */
	public $default_sort_by;
	/**
	 * The description
	 * @var MagentoStructString
	 */
	public $description;
	/**
	 * The display_mode
	 * @var MagentoStructString
	 */
	public $display_mode;
	/**
	 * The is_anchor
	 * @var MagentoStructInt
	 */
	public $is_anchor;
	/**
	 * The landing_page
	 * @var MagentoStructInt
	 */
	public $landing_page;
	/**
	 * The meta_description
	 * @var MagentoStructString
	 */
	public $meta_description;
	/**
	 * The meta_keywords
	 * @var MagentoStructString
	 */
	public $meta_keywords;
	/**
	 * The meta_title
	 * @var MagentoStructString
	 */
	public $meta_title;
	/**
	 * The page_layout
	 * @var MagentoStructString
	 */
	public $page_layout;
	/**
	 * The url_key
	 * @var MagentoStructString
	 */
	public $url_key;
	/**
	 * The include_in_menu
	 * @var MagentoStructInt
	 */
	public $include_in_menu;
	/**
	 * Constructor method for catalogCategoryEntityCreate
	 * @see parent::__construct()
	 * @param MagentoStructString $_name
	 * @param MagentoStructInt $_is_active
	 * @param MagentoStructInt $_position
	 * @param ArrayOfString $_available_sort_by
	 * @param MagentoStructString $_custom_design
	 * @param MagentoStructInt $_custom_design_apply
	 * @param MagentoStructString $_custom_design_from
	 * @param MagentoStructString $_custom_design_to
	 * @param MagentoStructString $_custom_layout_update
	 * @param MagentoStructString $_default_sort_by
	 * @param MagentoStructString $_description
	 * @param MagentoStructString $_display_mode
	 * @param MagentoStructInt $_is_anchor
	 * @param MagentoStructInt $_landing_page
	 * @param MagentoStructString $_meta_description
	 * @param MagentoStructString $_meta_keywords
	 * @param MagentoStructString $_meta_title
	 * @param MagentoStructString $_page_layout
	 * @param MagentoStructString $_url_key
	 * @param MagentoStructInt $_include_in_menu
	 * @return MagentoStructCatalogCategoryEntityCreate
	 */
	public function __construct($_name = NULL,$_is_active = NULL,$_position = NULL,$_available_sort_by = NULL,$_custom_design = NULL,$_custom_design_apply = NULL,$_custom_design_from = NULL,$_custom_design_to = NULL,$_custom_layout_update = NULL,$_default_sort_by = NULL,$_description = NULL,$_display_mode = NULL,$_is_anchor = NULL,$_landing_page = NULL,$_meta_description = NULL,$_meta_keywords = NULL,$_meta_title = NULL,$_page_layout = NULL,$_url_key = NULL,$_include_in_menu = NULL)
	{
		parent::__construct(array('name'=>$_name,'is_active'=>$_is_active,'position'=>$_position,'available_sort_by'=>$_available_sort_by,'custom_design'=>$_custom_design,'custom_design_apply'=>$_custom_design_apply,'custom_design_from'=>$_custom_design_from,'custom_design_to'=>$_custom_design_to,'custom_layout_update'=>$_custom_layout_update,'default_sort_by'=>$_default_sort_by,'description'=>$_description,'display_mode'=>$_display_mode,'is_anchor'=>$_is_anchor,'landing_page'=>$_landing_page,'meta_description'=>$_meta_description,'meta_keywords'=>$_meta_keywords,'meta_title'=>$_meta_title,'page_layout'=>$_page_layout,'url_key'=>$_url_key,'include_in_menu'=>$_include_in_menu));
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
	 * Get is_active value
	 * @return MagentoStructInt|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructInt $_is_active the is_active
	 * @return MagentoStructInt
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Get position value
	 * @return MagentoStructInt|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructInt $_position the position
	 * @return MagentoStructInt
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get available_sort_by value
	 * @return ArrayOfString|null
	 */
	public function getAvailable_sort_by()
	{
		return $this->available_sort_by;
	}
	/**
	 * Set available_sort_by value
	 * @param ArrayOfString $_available_sort_by the available_sort_by
	 * @return ArrayOfString
	 */
	public function setAvailable_sort_by($_available_sort_by)
	{
		return ($this->available_sort_by = $_available_sort_by);
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
	 * Get custom_design_apply value
	 * @return MagentoStructInt|null
	 */
	public function getCustom_design_apply()
	{
		return $this->custom_design_apply;
	}
	/**
	 * Set custom_design_apply value
	 * @param MagentoStructInt $_custom_design_apply the custom_design_apply
	 * @return MagentoStructInt
	 */
	public function setCustom_design_apply($_custom_design_apply)
	{
		return ($this->custom_design_apply = $_custom_design_apply);
	}
	/**
	 * Get custom_design_from value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design_from()
	{
		return $this->custom_design_from;
	}
	/**
	 * Set custom_design_from value
	 * @param MagentoStructString $_custom_design_from the custom_design_from
	 * @return MagentoStructString
	 */
	public function setCustom_design_from($_custom_design_from)
	{
		return ($this->custom_design_from = $_custom_design_from);
	}
	/**
	 * Get custom_design_to value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design_to()
	{
		return $this->custom_design_to;
	}
	/**
	 * Set custom_design_to value
	 * @param MagentoStructString $_custom_design_to the custom_design_to
	 * @return MagentoStructString
	 */
	public function setCustom_design_to($_custom_design_to)
	{
		return ($this->custom_design_to = $_custom_design_to);
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
	 * Get default_sort_by value
	 * @return MagentoStructString|null
	 */
	public function getDefault_sort_by()
	{
		return $this->default_sort_by;
	}
	/**
	 * Set default_sort_by value
	 * @param MagentoStructString $_default_sort_by the default_sort_by
	 * @return MagentoStructString
	 */
	public function setDefault_sort_by($_default_sort_by)
	{
		return ($this->default_sort_by = $_default_sort_by);
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
	 * Get display_mode value
	 * @return MagentoStructString|null
	 */
	public function getDisplay_mode()
	{
		return $this->display_mode;
	}
	/**
	 * Set display_mode value
	 * @param MagentoStructString $_display_mode the display_mode
	 * @return MagentoStructString
	 */
	public function setDisplay_mode($_display_mode)
	{
		return ($this->display_mode = $_display_mode);
	}
	/**
	 * Get is_anchor value
	 * @return MagentoStructInt|null
	 */
	public function getIs_anchor()
	{
		return $this->is_anchor;
	}
	/**
	 * Set is_anchor value
	 * @param MagentoStructInt $_is_anchor the is_anchor
	 * @return MagentoStructInt
	 */
	public function setIs_anchor($_is_anchor)
	{
		return ($this->is_anchor = $_is_anchor);
	}
	/**
	 * Get landing_page value
	 * @return MagentoStructInt|null
	 */
	public function getLanding_page()
	{
		return $this->landing_page;
	}
	/**
	 * Set landing_page value
	 * @param MagentoStructInt $_landing_page the landing_page
	 * @return MagentoStructInt
	 */
	public function setLanding_page($_landing_page)
	{
		return ($this->landing_page = $_landing_page);
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
	 * Get meta_keywords value
	 * @return MagentoStructString|null
	 */
	public function getMeta_keywords()
	{
		return $this->meta_keywords;
	}
	/**
	 * Set meta_keywords value
	 * @param MagentoStructString $_meta_keywords the meta_keywords
	 * @return MagentoStructString
	 */
	public function setMeta_keywords($_meta_keywords)
	{
		return ($this->meta_keywords = $_meta_keywords);
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
	 * Get page_layout value
	 * @return MagentoStructString|null
	 */
	public function getPage_layout()
	{
		return $this->page_layout;
	}
	/**
	 * Set page_layout value
	 * @param MagentoStructString $_page_layout the page_layout
	 * @return MagentoStructString
	 */
	public function setPage_layout($_page_layout)
	{
		return ($this->page_layout = $_page_layout);
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
	 * Get include_in_menu value
	 * @return MagentoStructInt|null
	 */
	public function getInclude_in_menu()
	{
		return $this->include_in_menu;
	}
	/**
	 * Set include_in_menu value
	 * @param MagentoStructInt $_include_in_menu the include_in_menu
	 * @return MagentoStructInt
	 */
	public function setInclude_in_menu($_include_in_menu)
	{
		return ($this->include_in_menu = $_include_in_menu);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogCategoryEntityCreate
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