<?php
/**
 * File for class MagentoServiceCatalog
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceCatalog originally named Catalog
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceCatalog extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named catalogCategoryCurrentStore
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogCategoryCurrentStore(MagentoStructString $_sessionId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryCurrentStore($_sessionId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryTree
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_parentId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructCatalogCategoryTree
	 */
	public function catalogCategoryTree(MagentoStructString $_sessionId,MagentoStructString $_parentId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryTree($_sessionId,$_parentId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryLevel
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_website
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_parentCategory
	 * @return ArrayOfCatalogCategoryEntitiesNoChildren
	 */
	public function catalogCategoryLevel(MagentoStructString $_sessionId,MagentoStructString $_website,MagentoStructString $_storeView,MagentoStructString $_parentCategory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryLevel($_sessionId,$_website,$_storeView,$_parentCategory));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructString $_storeView
	 * @param ArrayOfString $_attributes
	 * @return MagentoStructCatalogCategoryInfo
	 */
	public function catalogCategoryInfo(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructString $_storeView,$_attributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryInfo($_sessionId,$_categoryId,$_storeView,$_attributes));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_parentId
	 * @param MagentoStructCatalogCategoryEntityCreate $_categoryData
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogCategoryCreate(MagentoStructString $_sessionId,MagentoStructInt $_parentId,MagentoStructCatalogCategoryEntityCreate $_categoryData,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryCreate($_sessionId,$_parentId,$_categoryData,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructCatalogCategoryEntityCreate $_categoryData
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryUpdate(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructCatalogCategoryEntityCreate $_categoryData,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryUpdate($_sessionId,$_categoryId,$_categoryData,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryMove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructInt $_parentId
	 * @param MagentoStructString $_afterId
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryMove(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructInt $_parentId,MagentoStructString $_afterId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryMove($_sessionId,$_categoryId,$_parentId,$_afterId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryDelete
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryDelete(MagentoStructString $_sessionId,MagentoStructInt $_categoryId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryDelete($_sessionId,$_categoryId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryAssignedProducts
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @return catalogAssignedProductArray
	 */
	public function catalogCategoryAssignedProducts(MagentoStructString $_sessionId,MagentoStructInt $_categoryId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryAssignedProducts($_sessionId,$_categoryId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryAssignProduct
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_position
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryAssignProduct(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructString $_product,MagentoStructString $_position,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryAssignProduct($_sessionId,$_categoryId,$_product,$_position,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryUpdateProduct
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_position
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryUpdateProduct(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructString $_product,MagentoStructString $_position,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryUpdateProduct($_sessionId,$_categoryId,$_product,$_position,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryRemoveProduct
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_categoryId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogCategoryRemoveProduct(MagentoStructString $_sessionId,MagentoStructInt $_categoryId,MagentoStructString $_product,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryRemoveProduct($_sessionId,$_categoryId,$_product,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCurrentStore
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogProductCurrentStore(MagentoStructString $_sessionId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCurrentStore($_sessionId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductListOfAdditionalAttributes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productType
	 * @param MagentoStructString $_attributeSetId
	 * @return catalogAttributeEntityArray
	 */
	public function catalogProductListOfAdditionalAttributes(MagentoStructString $_sessionId,MagentoStructString $_productType,MagentoStructString $_attributeSetId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductListOfAdditionalAttributes($_sessionId,$_productType,$_attributeSetId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @param MagentoStructString $_storeView
	 * @return catalogProductEntityArray
	 */
	public function catalogProductList(MagentoStructString $_sessionId,MagentoStructFilters $_filters,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductList($_sessionId,$_filters,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructCatalogProductRequestAttributes $_attributes
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructCatalogProductReturnEntity
	 */
	public function catalogProductInfo(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_storeView,MagentoStructCatalogProductRequestAttributes $_attributes,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductInfo($_sessionId,$_product,$_storeView,$_attributes,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_set
	 * @param MagentoStructString $_sku
	 * @param MagentoStructCatalogProductCreateEntity $_productData
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogProductCreate(MagentoStructString $_sessionId,MagentoStructString $_type,MagentoStructString $_set,MagentoStructString $_sku,MagentoStructCatalogProductCreateEntity $_productData,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCreate($_sessionId,$_type,$_set,$_sku,$_productData,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructCatalogProductCreateEntity $_productData
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductUpdate(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructCatalogProductCreateEntity $_productData,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductUpdate($_sessionId,$_product,$_productData,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductSetSpecialPrice
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_specialPrice
	 * @param MagentoStructString $_fromDate
	 * @param MagentoStructString $_toDate
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructInt
	 */
	public function catalogProductSetSpecialPrice(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_specialPrice,MagentoStructString $_fromDate,MagentoStructString $_toDate,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductSetSpecialPrice($_sessionId,$_product,$_specialPrice,$_fromDate,$_toDate,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductGetSpecialPrice
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructCatalogProductReturnEntity
	 */
	public function catalogProductGetSpecialPrice(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductGetSpecialPrice($_sessionId,$_product,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductDelete
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructInt
	 */
	public function catalogProductDelete(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductDelete($_sessionId,$_product,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeCurrentStore
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeCurrentStore(MagentoStructString $_sessionId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeCurrentStore($_sessionId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeSetName
	 * @param MagentoStructString $_skeletonSetId
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeSetCreate(MagentoStructString $_sessionId,MagentoStructString $_attributeSetName,MagentoStructString $_skeletonSetId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetCreate($_sessionId,$_attributeSetName,$_skeletonSetId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_setId
	 * @return catalogAttributeEntityArray
	 */
	public function catalogProductAttributeList(MagentoStructString $_sessionId,MagentoStructInt $_setId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeList($_sessionId,$_setId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeOptions
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeId
	 * @param MagentoStructString $_storeView
	 * @return catalogAttributeOptionEntityArray
	 */
	public function catalogProductAttributeOptions(MagentoStructString $_sessionId,MagentoStructString $_attributeId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeOptions($_sessionId,$_attributeId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeSetId
	 * @param MagentoStructString $_forceProductsRemove
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeSetRemove(MagentoStructString $_sessionId,MagentoStructString $_attributeSetId,MagentoStructString $_forceProductsRemove)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetRemove($_sessionId,$_attributeSetId,$_forceProductsRemove));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return catalogProductAttributeSetEntityArray
	 */
	public function catalogProductAttributeSetList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetAttributeAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeId
	 * @param MagentoStructString $_attributeSetId
	 * @param MagentoStructString $_attributeGroupId
	 * @param MagentoStructString $_sortOrder
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeSetAttributeAdd(MagentoStructString $_sessionId,MagentoStructString $_attributeId,MagentoStructString $_attributeSetId,MagentoStructString $_attributeGroupId,MagentoStructString $_sortOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetAttributeAdd($_sessionId,$_attributeId,$_attributeSetId,$_attributeGroupId,$_sortOrder));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetAttributeRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeId
	 * @param MagentoStructString $_attributeSetId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeSetAttributeRemove(MagentoStructString $_sessionId,MagentoStructString $_attributeId,MagentoStructString $_attributeSetId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetAttributeRemove($_sessionId,$_attributeId,$_attributeSetId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetGroupAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeSetId
	 * @param MagentoStructString $_groupName
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeSetGroupAdd(MagentoStructString $_sessionId,MagentoStructString $_attributeSetId,MagentoStructString $_groupName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetGroupAdd($_sessionId,$_attributeSetId,$_groupName));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetGroupRename
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_groupId
	 * @param MagentoStructString $_groupName
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeSetGroupRename(MagentoStructString $_sessionId,MagentoStructString $_groupId,MagentoStructString $_groupName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetGroupRename($_sessionId,$_groupId,$_groupName));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeSetGroupRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeGroupId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeSetGroupRemove(MagentoStructString $_sessionId,MagentoStructString $_attributeGroupId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeSetGroupRemove($_sessionId,$_attributeGroupId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeTypes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return catalogAttributeOptionEntityArray
	 */
	public function catalogProductAttributeTypes(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeTypes($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructCatalogProductAttributeEntityToCreate $_data
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeCreate(MagentoStructString $_sessionId,MagentoStructCatalogProductAttributeEntityToCreate $_data)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeCreate($_sessionId,$_data));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryAttributeCurrentStore
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogCategoryAttributeCurrentStore(MagentoStructString $_sessionId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryAttributeCurrentStore($_sessionId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaCurrentStore
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeView
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeMediaCurrentStore(MagentoStructString $_sessionId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaCurrentStore($_sessionId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attribute
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeRemove(MagentoStructString $_sessionId,MagentoStructString $_attribute)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeRemove($_sessionId,$_attribute));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attribute
	 * @return MagentoStructCatalogProductAttributeEntity
	 */
	public function catalogProductAttributeInfo(MagentoStructString $_sessionId,MagentoStructString $_attribute)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeInfo($_sessionId,$_attribute));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attribute
	 * @param MagentoStructCatalogProductAttributeEntityToUpdate $_data
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeUpdate(MagentoStructString $_sessionId,MagentoStructString $_attribute,MagentoStructCatalogProductAttributeEntityToUpdate $_data)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeUpdate($_sessionId,$_attribute,$_data));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeAddOption
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attribute
	 * @param MagentoStructCatalogProductAttributeOptionEntityToAdd $_data
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeAddOption(MagentoStructString $_sessionId,MagentoStructString $_attribute,MagentoStructCatalogProductAttributeOptionEntityToAdd $_data)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeAddOption($_sessionId,$_attribute,$_data));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeRemoveOption
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attribute
	 * @param MagentoStructString $_optionId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeRemoveOption(MagentoStructString $_sessionId,MagentoStructString $_attribute,MagentoStructString $_optionId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeRemoveOption($_sessionId,$_attribute,$_optionId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTypeList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return catalogProductTypeEntityArray
	 */
	public function catalogProductTypeList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTypeList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeTierPriceInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_productIdentifierType
	 * @return catalogProductTierPriceEntityArray
	 */
	public function catalogProductAttributeTierPriceInfo(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeTierPriceInfo($_sessionId,$_product,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeTierPriceUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param catalogProductTierPriceEntityArray $_tier_price
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructInt
	 */
	public function catalogProductAttributeTierPriceUpdate(MagentoStructString $_sessionId,MagentoStructString $_product,$_tier_price,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeTierPriceUpdate($_sessionId,$_product,$_tier_price,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryAttributeList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return catalogAttributeEntityArray
	 */
	public function catalogCategoryAttributeList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryAttributeList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogCategoryAttributeOptions
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_attributeId
	 * @param MagentoStructString $_storeView
	 * @return catalogAttributeOptionEntityArray
	 */
	public function catalogCategoryAttributeOptions(MagentoStructString $_sessionId,MagentoStructString $_attributeId,MagentoStructString $_storeView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogCategoryAttributeOptions($_sessionId,$_attributeId,$_storeView));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return catalogProductImageEntityArray
	 */
	public function catalogProductAttributeMediaList(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaList($_sessionId,$_product,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_file
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructCatalogProductImageEntity
	 */
	public function catalogProductAttributeMediaInfo(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_file,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaInfo($_sessionId,$_product,$_file,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaTypes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_setId
	 * @return catalogProductAttributeMediaTypeEntityArray
	 */
	public function catalogProductAttributeMediaTypes(MagentoStructString $_sessionId,MagentoStructString $_setId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaTypes($_sessionId,$_setId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructCatalogProductAttributeMediaCreateEntity $_data
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructString
	 */
	public function catalogProductAttributeMediaCreate(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructCatalogProductAttributeMediaCreateEntity $_data,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaCreate($_sessionId,$_product,$_data,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_file
	 * @param MagentoStructCatalogProductAttributeMediaCreateEntity $_data
	 * @param MagentoStructString $_storeView
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeMediaUpdate(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_file,MagentoStructCatalogProductAttributeMediaCreateEntity $_data,MagentoStructString $_storeView,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaUpdate($_sessionId,$_product,$_file,$_data,$_storeView,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductAttributeMediaRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_file
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductAttributeMediaRemove(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructString $_file,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductAttributeMediaRemove($_sessionId,$_product,$_file,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_productIdentifierType
	 * @return catalogProductLinkEntityArray
	 */
	public function catalogProductLinkList(MagentoStructString $_sessionId,MagentoStructString $_type,MagentoStructString $_product,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkList($_sessionId,$_type,$_product,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkAssign
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_linkedProduct
	 * @param MagentoStructCatalogProductLinkEntity $_data
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductLinkAssign(MagentoStructString $_sessionId,MagentoStructString $_type,MagentoStructString $_product,MagentoStructString $_linkedProduct,MagentoStructCatalogProductLinkEntity $_data,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkAssign($_sessionId,$_type,$_product,$_linkedProduct,$_data,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_linkedProduct
	 * @param MagentoStructCatalogProductLinkEntity $_data
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductLinkUpdate(MagentoStructString $_sessionId,MagentoStructString $_type,MagentoStructString $_product,MagentoStructString $_linkedProduct,MagentoStructCatalogProductLinkEntity $_data,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkUpdate($_sessionId,$_type,$_product,$_linkedProduct,$_data,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_product
	 * @param MagentoStructString $_linkedProduct
	 * @param MagentoStructString $_productIdentifierType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductLinkRemove(MagentoStructString $_sessionId,MagentoStructString $_type,MagentoStructString $_product,MagentoStructString $_linkedProduct,MagentoStructString $_productIdentifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkRemove($_sessionId,$_type,$_product,$_linkedProduct,$_productIdentifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkTypes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return ArrayOfString
	 */
	public function catalogProductLinkTypes(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkTypes($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductLinkAttributes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_type
	 * @return catalogProductLinkAttributeEntityArray
	 */
	public function catalogProductLinkAttributes(MagentoStructString $_sessionId,MagentoStructString $_type)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductLinkAttributes($_sessionId,$_type));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productId
	 * @param MagentoStructCatalogProductCustomOptionToAdd $_data
	 * @param MagentoStructString $_store
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionAdd(MagentoStructString $_sessionId,MagentoStructString $_productId,MagentoStructCatalogProductCustomOptionToAdd $_data,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionAdd($_sessionId,$_productId,$_data,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_optionId
	 * @param MagentoStructCatalogProductCustomOptionToUpdate $_data
	 * @param MagentoStructString $_store
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionUpdate(MagentoStructString $_sessionId,MagentoStructString $_optionId,MagentoStructCatalogProductCustomOptionToUpdate $_data,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionUpdate($_sessionId,$_optionId,$_data,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_optionId
	 * @param MagentoStructString $_store
	 * @return MagentoStructCatalogProductCustomOptionInfoEntity
	 */
	public function catalogProductCustomOptionInfo(MagentoStructString $_sessionId,MagentoStructString $_optionId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionInfo($_sessionId,$_optionId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionTypes
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return catalogProductCustomOptionTypesArray
	 */
	public function catalogProductCustomOptionTypes(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionTypes($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionValueInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_valueId
	 * @param MagentoStructString $_store
	 * @return MagentoStructCatalogProductCustomOptionValueInfoEntity
	 */
	public function catalogProductCustomOptionValueInfo(MagentoStructString $_sessionId,MagentoStructString $_valueId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionValueInfo($_sessionId,$_valueId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionValueList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_optionId
	 * @param MagentoStructString $_store
	 * @return catalogProductCustomOptionValueListArray
	 */
	public function catalogProductCustomOptionValueList(MagentoStructString $_sessionId,MagentoStructString $_optionId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionValueList($_sessionId,$_optionId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionValueAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_optionId
	 * @param catalogProductCustomOptionValueAddArray $_data
	 * @param MagentoStructString $_store
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionValueAdd(MagentoStructString $_sessionId,MagentoStructString $_optionId,$_data,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionValueAdd($_sessionId,$_optionId,$_data,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionValueUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_valueId
	 * @param MagentoStructCatalogProductCustomOptionValueUpdateEntity $_data
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionValueUpdate(MagentoStructString $_sessionId,MagentoStructString $_valueId,MagentoStructCatalogProductCustomOptionValueUpdateEntity $_data,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionValueUpdate($_sessionId,$_valueId,$_data,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionValueRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_valueId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionValueRemove(MagentoStructString $_sessionId,MagentoStructString $_valueId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionValueRemove($_sessionId,$_valueId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productId
	 * @param MagentoStructString $_store
	 * @return catalogProductCustomOptionListArray
	 */
	public function catalogProductCustomOptionList(MagentoStructString $_sessionId,MagentoStructString $_productId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionList($_sessionId,$_productId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductCustomOptionRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_optionId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductCustomOptionRemove(MagentoStructString $_sessionId,MagentoStructString $_optionId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductCustomOptionRemove($_sessionId,$_optionId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogInventoryStockItemList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param ArrayOfString $_products
	 * @return catalogInventoryStockItemEntityArray
	 */
	public function catalogInventoryStockItemList(MagentoStructString $_sessionId,$_products)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogInventoryStockItemList($_sessionId,$_products));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogInventoryStockItemUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_product
	 * @param MagentoStructCatalogInventoryStockItemUpdateEntity $_data
	 * @return MagentoStructInt
	 */
	public function catalogInventoryStockItemUpdate(MagentoStructString $_sessionId,MagentoStructString $_product,MagentoStructCatalogInventoryStockItemUpdateEntity $_data)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogInventoryStockItemUpdate($_sessionId,$_product,$_data));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTagList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productId
	 * @param MagentoStructString $_store
	 * @return catalogProductTagListEntityArray
	 */
	public function catalogProductTagList(MagentoStructString $_sessionId,MagentoStructString $_productId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTagList($_sessionId,$_productId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTagInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_tagId
	 * @param MagentoStructString $_store
	 * @return MagentoStructCatalogProductTagInfoEntity
	 */
	public function catalogProductTagInfo(MagentoStructString $_sessionId,MagentoStructString $_tagId,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTagInfo($_sessionId,$_tagId,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTagAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructCatalogProductTagAddEntity $_data
	 * @return associativeArray
	 */
	public function catalogProductTagAdd(MagentoStructString $_sessionId,MagentoStructCatalogProductTagAddEntity $_data)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTagAdd($_sessionId,$_data));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTagUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_tagId
	 * @param MagentoStructCatalogProductTagUpdateEntity $_data
	 * @param MagentoStructString $_store
	 * @return MagentoStructBoolean
	 */
	public function catalogProductTagUpdate(MagentoStructString $_sessionId,MagentoStructString $_tagId,MagentoStructCatalogProductTagUpdateEntity $_data,MagentoStructString $_store)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTagUpdate($_sessionId,$_tagId,$_data,$_store));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductTagRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_tagId
	 * @return MagentoStructBoolean
	 */
	public function catalogProductTagRemove(MagentoStructString $_sessionId,MagentoStructString $_tagId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductTagRemove($_sessionId,$_tagId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductDownloadableLinkAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productId
	 * @param MagentoStructCatalogProductDownloadableLinkAddEntity $_resource
	 * @param MagentoStructString $_resourceType
	 * @param MagentoStructString $_store
	 * @param MagentoStructString $_identifierType
	 * @return MagentoStructInt
	 */
	public function catalogProductDownloadableLinkAdd(MagentoStructString $_sessionId,MagentoStructString $_productId,MagentoStructCatalogProductDownloadableLinkAddEntity $_resource,MagentoStructString $_resourceType,MagentoStructString $_store,MagentoStructString $_identifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductDownloadableLinkAdd($_sessionId,$_productId,$_resource,$_resourceType,$_store,$_identifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductDownloadableLinkList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_productId
	 * @param MagentoStructString $_store
	 * @param MagentoStructString $_identifierType
	 * @return MagentoStructCatalogProductDownloadableLinkInfoEntity
	 */
	public function catalogProductDownloadableLinkList(MagentoStructString $_sessionId,MagentoStructString $_productId,MagentoStructString $_store,MagentoStructString $_identifierType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductDownloadableLinkList($_sessionId,$_productId,$_store,$_identifierType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named catalogProductDownloadableLinkRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_linkId
	 * @param MagentoStructString $_resourceType
	 * @return MagentoStructBoolean
	 */
	public function catalogProductDownloadableLinkRemove(MagentoStructString $_sessionId,MagentoStructString $_linkId,MagentoStructString $_resourceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->catalogProductDownloadableLinkRemove($_sessionId,$_linkId,$_resourceType));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see MagentoWsdlClass::getResult()
	 * @return ArrayOfCatalogCategoryEntitiesNoChildren|ArrayOfString|associativeArray|catalogAssignedProductArray|catalogAttributeEntityArray|catalogAttributeOptionEntityArray|catalogInventoryStockItemEntityArray|catalogProductAttributeMediaTypeEntityArray|catalogProductAttributeSetEntityArray|catalogProductCustomOptionListArray|catalogProductCustomOptionTypesArray|catalogProductCustomOptionValueListArray|catalogProductEntityArray|catalogProductImageEntityArray|catalogProductLinkAttributeEntityArray|catalogProductLinkEntityArray|catalogProductTagListEntityArray|catalogProductTierPriceEntityArray|catalogProductTypeEntityArray|MagentoStructBoolean|MagentoStructCatalogCategoryInfo|MagentoStructCatalogCategoryTree|MagentoStructCatalogProductAttributeEntity|MagentoStructCatalogProductCustomOptionInfoEntity|MagentoStructCatalogProductCustomOptionValueInfoEntity|MagentoStructCatalogProductDownloadableLinkInfoEntity|MagentoStructCatalogProductImageEntity|MagentoStructCatalogProductReturnEntity|MagentoStructCatalogProductTagInfoEntity|MagentoStructInt|MagentoStructString
	 */
	public function getResult()
	{
		return parent::getResult();
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