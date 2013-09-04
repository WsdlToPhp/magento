<?php
/**
 * Test with Magento
 * @package Magento
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MagentoAutoload.php';
/**
 * Magento Informations
 */
define('MAGENTO_WSDL_URL','http://YOUR_MAGENTO_WEBSITE_URL/api/v2_soap?wsdl=1');
define('MAGENTO_USER_LOGIN','');
define('MAGENTO_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[MagentoWsdlClass::WSDL_URL] = MAGENTO_WSDL_URL;
$wsdl[MagentoWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[MagentoWsdlClass::WSDL_TRACE] = true;
if(MAGENTO_USER_LOGIN !== '')
	$wsdl[MagentoWsdlClass::WSDL_LOGIN] = MAGENTO_USER_LOGIN;
if(MAGENTO_USER_PASSWORD !== '')
	$wsdl[MagentoWsdlClass::WSDL_PASSWD] = MAGENTO_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*******************************
 * Example for MagentoServiceEnd
 */
$magentoServiceEnd = new MagentoServiceEnd($wsdl);
// sample call for MagentoServiceEnd::endSession()
if($magentoServiceEnd->endSession(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceEnd->getResult());
else
	print_r($magentoServiceEnd->getLastError());

/*********************************
 * Example for MagentoServiceLogin
 */
$magentoServiceLogin = new MagentoServiceLogin($wsdl);
// sample call for MagentoServiceLogin::login()
if($magentoServiceLogin->login(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceLogin->getResult());
else
	print_r($magentoServiceLogin->getLastError());

/*********************************
 * Example for MagentoServiceStart
 */
$magentoServiceStart = new MagentoServiceStart($wsdl);
// sample call for MagentoServiceStart::startSession()
if($magentoServiceStart->startSession())
	print_r($magentoServiceStart->getResult());
else
	print_r($magentoServiceStart->getLastError());

/*************************************
 * Example for MagentoServiceResources
 */
$magentoServiceResources = new MagentoServiceResources($wsdl);
// sample call for MagentoServiceResources::resources()
if($magentoServiceResources->resources(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceResources->getResult());
else
	print_r($magentoServiceResources->getLastError());

/**********************************
 * Example for MagentoServiceGlobal
 */
$magentoServiceGlobal = new MagentoServiceGlobal($wsdl);
// sample call for MagentoServiceGlobal::globalFaults()
if($magentoServiceGlobal->globalFaults(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceGlobal->getResult());
else
	print_r($magentoServiceGlobal->getLastError());

/************************************
 * Example for MagentoServiceResource
 */
$magentoServiceResource = new MagentoServiceResource($wsdl);
// sample call for MagentoServiceResource::resourceFaults()
if($magentoServiceResource->resourceFaults(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceResource->getResult());
else
	print_r($magentoServiceResource->getLastError());

/*********************************
 * Example for MagentoServiceStore
 */
$magentoServiceStore = new MagentoServiceStore($wsdl);
// sample call for MagentoServiceStore::storeList()
if($magentoServiceStore->storeList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceStore->getResult());
else
	print_r($magentoServiceStore->getLastError());
// sample call for MagentoServiceStore::storeInfo()
if($magentoServiceStore->storeInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceStore->getResult());
else
	print_r($magentoServiceStore->getLastError());

/***********************************
 * Example for MagentoServiceMagento
 */
$magentoServiceMagento = new MagentoServiceMagento($wsdl);
// sample call for MagentoServiceMagento::magentoInfo()
if($magentoServiceMagento->magentoInfo(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceMagento->getResult());
else
	print_r($magentoServiceMagento->getLastError());

/*************************************
 * Example for MagentoServiceDirectory
 */
$magentoServiceDirectory = new MagentoServiceDirectory($wsdl);
// sample call for MagentoServiceDirectory::directoryCountryList()
if($magentoServiceDirectory->directoryCountryList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceDirectory->getResult());
else
	print_r($magentoServiceDirectory->getLastError());
// sample call for MagentoServiceDirectory::directoryRegionList()
if($magentoServiceDirectory->directoryRegionList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceDirectory->getResult());
else
	print_r($magentoServiceDirectory->getLastError());

/************************************
 * Example for MagentoServiceCustomer
 */
$magentoServiceCustomer = new MagentoServiceCustomer($wsdl);
// sample call for MagentoServiceCustomer::customerCustomerList()
if($magentoServiceCustomer->customerCustomerList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerCustomerCreate()
if($magentoServiceCustomer->customerCustomerCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructCustomerCustomerEntityToCreate(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerCustomerInfo()
if($magentoServiceCustomer->customerCustomerInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_attributes))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerCustomerUpdate()
if($magentoServiceCustomer->customerCustomerUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructCustomerCustomerEntityToCreate(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerCustomerDelete()
if($magentoServiceCustomer->customerCustomerDelete(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerGroupList()
if($magentoServiceCustomer->customerGroupList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerAddressList()
if($magentoServiceCustomer->customerAddressList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerAddressCreate()
if($magentoServiceCustomer->customerAddressCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructCustomerAddressEntityCreate(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerAddressInfo()
if($magentoServiceCustomer->customerAddressInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerAddressUpdate()
if($magentoServiceCustomer->customerAddressUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructCustomerAddressEntityCreate(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());
// sample call for MagentoServiceCustomer::customerAddressDelete()
if($magentoServiceCustomer->customerAddressDelete(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCustomer->getResult());
else
	print_r($magentoServiceCustomer->getLastError());

/***********************************
 * Example for MagentoServiceCatalog
 */
$magentoServiceCatalog = new MagentoServiceCatalog($wsdl);
// sample call for MagentoServiceCatalog::catalogCategoryCurrentStore()
if($magentoServiceCatalog->catalogCategoryCurrentStore(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryTree()
if($magentoServiceCatalog->catalogCategoryTree(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryLevel()
if($magentoServiceCatalog->catalogCategoryLevel(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryInfo()
if($magentoServiceCatalog->catalogCategoryInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_attributes))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryCreate()
if($magentoServiceCatalog->catalogCategoryCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructCatalogCategoryEntityCreate(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryUpdate()
if($magentoServiceCatalog->catalogCategoryUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructCatalogCategoryEntityCreate(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryMove()
if($magentoServiceCatalog->catalogCategoryMove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryDelete()
if($magentoServiceCatalog->catalogCategoryDelete(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryAssignedProducts()
if($magentoServiceCatalog->catalogCategoryAssignedProducts(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryAssignProduct()
if($magentoServiceCatalog->catalogCategoryAssignProduct(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryUpdateProduct()
if($magentoServiceCatalog->catalogCategoryUpdateProduct(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryRemoveProduct()
if($magentoServiceCatalog->catalogCategoryRemoveProduct(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCurrentStore()
if($magentoServiceCatalog->catalogProductCurrentStore(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductListOfAdditionalAttributes()
if($magentoServiceCatalog->catalogProductListOfAdditionalAttributes(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductList()
if($magentoServiceCatalog->catalogProductList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductInfo()
if($magentoServiceCatalog->catalogProductInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductRequestAttributes(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCreate()
if($magentoServiceCatalog->catalogProductCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductCreateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductUpdate()
if($magentoServiceCatalog->catalogProductUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductCreateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductSetSpecialPrice()
if($magentoServiceCatalog->catalogProductSetSpecialPrice(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductGetSpecialPrice()
if($magentoServiceCatalog->catalogProductGetSpecialPrice(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductDelete()
if($magentoServiceCatalog->catalogProductDelete(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeCurrentStore()
if($magentoServiceCatalog->catalogProductAttributeCurrentStore(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetCreate()
if($magentoServiceCatalog->catalogProductAttributeSetCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeList()
if($magentoServiceCatalog->catalogProductAttributeList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeOptions()
if($magentoServiceCatalog->catalogProductAttributeOptions(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetRemove()
if($magentoServiceCatalog->catalogProductAttributeSetRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetList()
if($magentoServiceCatalog->catalogProductAttributeSetList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetAttributeAdd()
if($magentoServiceCatalog->catalogProductAttributeSetAttributeAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetAttributeRemove()
if($magentoServiceCatalog->catalogProductAttributeSetAttributeRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetGroupAdd()
if($magentoServiceCatalog->catalogProductAttributeSetGroupAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetGroupRename()
if($magentoServiceCatalog->catalogProductAttributeSetGroupRename(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeSetGroupRemove()
if($magentoServiceCatalog->catalogProductAttributeSetGroupRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeTypes()
if($magentoServiceCatalog->catalogProductAttributeTypes(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeCreate()
if($magentoServiceCatalog->catalogProductAttributeCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductAttributeEntityToCreate(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryAttributeCurrentStore()
if($magentoServiceCatalog->catalogCategoryAttributeCurrentStore(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaCurrentStore()
if($magentoServiceCatalog->catalogProductAttributeMediaCurrentStore(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeRemove()
if($magentoServiceCatalog->catalogProductAttributeRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeInfo()
if($magentoServiceCatalog->catalogProductAttributeInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeUpdate()
if($magentoServiceCatalog->catalogProductAttributeUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductAttributeEntityToUpdate(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeAddOption()
if($magentoServiceCatalog->catalogProductAttributeAddOption(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductAttributeOptionEntityToAdd(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeRemoveOption()
if($magentoServiceCatalog->catalogProductAttributeRemoveOption(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTypeList()
if($magentoServiceCatalog->catalogProductTypeList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeTierPriceInfo()
if($magentoServiceCatalog->catalogProductAttributeTierPriceInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeTierPriceUpdate()
if($magentoServiceCatalog->catalogProductAttributeTierPriceUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_tier_price,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryAttributeList()
if($magentoServiceCatalog->catalogCategoryAttributeList(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogCategoryAttributeOptions()
if($magentoServiceCatalog->catalogCategoryAttributeOptions(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaList()
if($magentoServiceCatalog->catalogProductAttributeMediaList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaInfo()
if($magentoServiceCatalog->catalogProductAttributeMediaInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaTypes()
if($magentoServiceCatalog->catalogProductAttributeMediaTypes(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaCreate()
if($magentoServiceCatalog->catalogProductAttributeMediaCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductAttributeMediaCreateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaUpdate()
if($magentoServiceCatalog->catalogProductAttributeMediaUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductAttributeMediaCreateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductAttributeMediaRemove()
if($magentoServiceCatalog->catalogProductAttributeMediaRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkList()
if($magentoServiceCatalog->catalogProductLinkList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkAssign()
if($magentoServiceCatalog->catalogProductLinkAssign(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductLinkEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkUpdate()
if($magentoServiceCatalog->catalogProductLinkUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductLinkEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkRemove()
if($magentoServiceCatalog->catalogProductLinkRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkTypes()
if($magentoServiceCatalog->catalogProductLinkTypes(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductLinkAttributes()
if($magentoServiceCatalog->catalogProductLinkAttributes(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionAdd()
if($magentoServiceCatalog->catalogProductCustomOptionAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductCustomOptionToAdd(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionUpdate()
if($magentoServiceCatalog->catalogProductCustomOptionUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductCustomOptionToUpdate(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionInfo()
if($magentoServiceCatalog->catalogProductCustomOptionInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionTypes()
if($magentoServiceCatalog->catalogProductCustomOptionTypes(new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionValueInfo()
if($magentoServiceCatalog->catalogProductCustomOptionValueInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionValueList()
if($magentoServiceCatalog->catalogProductCustomOptionValueList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionValueAdd()
if($magentoServiceCatalog->catalogProductCustomOptionValueAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_data,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionValueUpdate()
if($magentoServiceCatalog->catalogProductCustomOptionValueUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductCustomOptionValueUpdateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionValueRemove()
if($magentoServiceCatalog->catalogProductCustomOptionValueRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionList()
if($magentoServiceCatalog->catalogProductCustomOptionList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductCustomOptionRemove()
if($magentoServiceCatalog->catalogProductCustomOptionRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogInventoryStockItemList()
if($magentoServiceCatalog->catalogInventoryStockItemList(new MagentoStructString(/*** update parameters list ***/),$_products))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogInventoryStockItemUpdate()
if($magentoServiceCatalog->catalogInventoryStockItemUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogInventoryStockItemUpdateEntity(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTagList()
if($magentoServiceCatalog->catalogProductTagList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTagInfo()
if($magentoServiceCatalog->catalogProductTagInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTagAdd()
if($magentoServiceCatalog->catalogProductTagAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductTagAddEntity(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTagUpdate()
if($magentoServiceCatalog->catalogProductTagUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductTagUpdateEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductTagRemove()
if($magentoServiceCatalog->catalogProductTagRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductDownloadableLinkAdd()
if($magentoServiceCatalog->catalogProductDownloadableLinkAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructCatalogProductDownloadableLinkAddEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductDownloadableLinkList()
if($magentoServiceCatalog->catalogProductDownloadableLinkList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());
// sample call for MagentoServiceCatalog::catalogProductDownloadableLinkRemove()
if($magentoServiceCatalog->catalogProductDownloadableLinkRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceCatalog->getResult());
else
	print_r($magentoServiceCatalog->getLastError());

/*********************************
 * Example for MagentoServiceSales
 */
$magentoServiceSales = new MagentoServiceSales($wsdl);
// sample call for MagentoServiceSales::salesOrderList()
if($magentoServiceSales->salesOrderList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInfo()
if($magentoServiceSales->salesOrderInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderAddComment()
if($magentoServiceSales->salesOrderAddComment(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderHold()
if($magentoServiceSales->salesOrderHold(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderUnhold()
if($magentoServiceSales->salesOrderUnhold(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCancel()
if($magentoServiceSales->salesOrderCancel(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentList()
if($magentoServiceSales->salesOrderShipmentList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentInfo()
if($magentoServiceSales->salesOrderShipmentInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentCreate()
if($magentoServiceSales->salesOrderShipmentCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_itemsQty,new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentAddComment()
if($magentoServiceSales->salesOrderShipmentAddComment(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentAddTrack()
if($magentoServiceSales->salesOrderShipmentAddTrack(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentSendInfo()
if($magentoServiceSales->salesOrderShipmentSendInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentRemoveTrack()
if($magentoServiceSales->salesOrderShipmentRemoveTrack(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderShipmentGetCarriers()
if($magentoServiceSales->salesOrderShipmentGetCarriers(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceList()
if($magentoServiceSales->salesOrderInvoiceList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceInfo()
if($magentoServiceSales->salesOrderInvoiceInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceCreate()
if($magentoServiceSales->salesOrderInvoiceCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_itemsQty,new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceAddComment()
if($magentoServiceSales->salesOrderInvoiceAddComment(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceCapture()
if($magentoServiceSales->salesOrderInvoiceCapture(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceVoid()
if($magentoServiceSales->salesOrderInvoiceVoid(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderInvoiceCancel()
if($magentoServiceSales->salesOrderInvoiceCancel(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCreditmemoList()
if($magentoServiceSales->salesOrderCreditmemoList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructFilters(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCreditmemoInfo()
if($magentoServiceSales->salesOrderCreditmemoInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCreditmemoCreate()
if($magentoServiceSales->salesOrderCreditmemoCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructSalesOrderCreditmemoData(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCreditmemoAddComment()
if($magentoServiceSales->salesOrderCreditmemoAddComment(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());
// sample call for MagentoServiceSales::salesOrderCreditmemoCancel()
if($magentoServiceSales->salesOrderCreditmemoCancel(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceSales->getResult());
else
	print_r($magentoServiceSales->getLastError());

/************************************
 * Example for MagentoServiceShopping
 */
$magentoServiceShopping = new MagentoServiceShopping($wsdl);
// sample call for MagentoServiceShopping::shoppingCartCreate()
if($magentoServiceShopping->shoppingCartCreate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartInfo()
if($magentoServiceShopping->shoppingCartInfo(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartTotals()
if($magentoServiceShopping->shoppingCartTotals(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartOrder()
if($magentoServiceShopping->shoppingCartOrder(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_licenses))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartLicense()
if($magentoServiceShopping->shoppingCartLicense(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartProductAdd()
if($magentoServiceShopping->shoppingCartProductAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_products,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartProductUpdate()
if($magentoServiceShopping->shoppingCartProductUpdate(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_products,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartProductRemove()
if($magentoServiceShopping->shoppingCartProductRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_products,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartProductList()
if($magentoServiceShopping->shoppingCartProductList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartProductMoveToCustomerQuote()
if($magentoServiceShopping->shoppingCartProductMoveToCustomerQuote(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_products,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartCustomerSet()
if($magentoServiceShopping->shoppingCartCustomerSet(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructShoppingCartCustomerEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartCustomerAddresses()
if($magentoServiceShopping->shoppingCartCustomerAddresses(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),$_customer,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartShippingMethod()
if($magentoServiceShopping->shoppingCartShippingMethod(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartShippingList()
if($magentoServiceShopping->shoppingCartShippingList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartPaymentMethod()
if($magentoServiceShopping->shoppingCartPaymentMethod(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructShoppingCartPaymentMethodEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartPaymentList()
if($magentoServiceShopping->shoppingCartPaymentList(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartCouponAdd()
if($magentoServiceShopping->shoppingCartCouponAdd(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());
// sample call for MagentoServiceShopping::shoppingCartCouponRemove()
if($magentoServiceShopping->shoppingCartCouponRemove(new MagentoStructString(/*** update parameters list ***/),new MagentoStructInt(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceShopping->getResult());
else
	print_r($magentoServiceShopping->getLastError());

/********************************
 * Example for MagentoServiceGift
 */
$magentoServiceGift = new MagentoServiceGift($wsdl);
// sample call for MagentoServiceGift::giftMessageSetForQuote()
if($magentoServiceGift->giftMessageSetForQuote(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructGiftMessageEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceGift->getResult());
else
	print_r($magentoServiceGift->getLastError());
// sample call for MagentoServiceGift::giftMessageSetForQuoteItem()
if($magentoServiceGift->giftMessageSetForQuoteItem(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),new MagentoStructGiftMessageEntity(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceGift->getResult());
else
	print_r($magentoServiceGift->getLastError());
// sample call for MagentoServiceGift::giftMessageSetForQuoteProduct()
if($magentoServiceGift->giftMessageSetForQuoteProduct(new MagentoStructString(/*** update parameters list ***/),new MagentoStructString(/*** update parameters list ***/),$_productsAndMessages,new MagentoStructString(/*** update parameters list ***/)))
	print_r($magentoServiceGift->getResult());
else
	print_r($magentoServiceGift->getLastError());
?>