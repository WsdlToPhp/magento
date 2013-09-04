<?php
/**
 * File for class MagentoServiceShopping
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceShopping originally named Shopping
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceShopping extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named shoppingCartCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructInt
	 */
	public function shoppingCartCreate(MagentoStructString $_sessionId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartCreate($_sessionId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructShoppingCartInfoEntity
	 */
	public function shoppingCartInfo(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartInfo($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartTotals
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return shoppingCartTotalsEntityArray
	 */
	public function shoppingCartTotals(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartTotals($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartOrder
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @param ArrayOfString $_licenses
	 * @return MagentoStructString
	 */
	public function shoppingCartOrder(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId,$_licenses)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartOrder($_sessionId,$_quoteId,$_storeId,$_licenses));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartLicense
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return shoppingCartLicenseEntityArray
	 */
	public function shoppingCartLicense(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartLicense($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartProductAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param shoppingCartProductEntityArray $_products
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartProductAdd(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,$_products,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartProductAdd($_sessionId,$_quoteId,$_products,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartProductUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param shoppingCartProductEntityArray $_products
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartProductUpdate(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,$_products,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartProductUpdate($_sessionId,$_quoteId,$_products,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartProductRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param shoppingCartProductEntityArray $_products
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartProductRemove(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,$_products,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartProductRemove($_sessionId,$_quoteId,$_products,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartProductList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return shoppingCartProductResponseEntityArray
	 */
	public function shoppingCartProductList(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartProductList($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartProductMoveToCustomerQuote
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param shoppingCartProductEntityArray $_products
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartProductMoveToCustomerQuote(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,$_products,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartProductMoveToCustomerQuote($_sessionId,$_quoteId,$_products,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartCustomerSet
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructShoppingCartCustomerEntity $_customer
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartCustomerSet(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructShoppingCartCustomerEntity $_customer,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartCustomerSet($_sessionId,$_quoteId,$_customer,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartCustomerAddresses
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param shoppingCartCustomerAddressEntityArray $_customer
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartCustomerAddresses(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,$_customer,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartCustomerAddresses($_sessionId,$_quoteId,$_customer,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartShippingMethod
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_method
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartShippingMethod(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_method,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartShippingMethod($_sessionId,$_quoteId,$_method,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartShippingList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return shoppingCartShippingMethodEntityArray
	 */
	public function shoppingCartShippingList(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartShippingList($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartPaymentMethod
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructShoppingCartPaymentMethodEntity $_method
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartPaymentMethod(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructShoppingCartPaymentMethodEntity $_method,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartPaymentMethod($_sessionId,$_quoteId,$_method,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartPaymentList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructShoppingCartPaymentMethodResponseEntityArray
	 */
	public function shoppingCartPaymentList(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartPaymentList($_sessionId,$_quoteId,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartCouponAdd
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_couponCode
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartCouponAdd(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_couponCode,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartCouponAdd($_sessionId,$_quoteId,$_couponCode,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shoppingCartCouponRemove
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_quoteId
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructBoolean
	 */
	public function shoppingCartCouponRemove(MagentoStructString $_sessionId,MagentoStructInt $_quoteId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->shoppingCartCouponRemove($_sessionId,$_quoteId,$_storeId));
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
	 * @return MagentoStructBoolean|MagentoStructInt|MagentoStructShoppingCartInfoEntity|MagentoStructShoppingCartPaymentMethodResponseEntityArray|MagentoStructString|shoppingCartLicenseEntityArray|shoppingCartProductResponseEntityArray|shoppingCartShippingMethodEntityArray|shoppingCartTotalsEntityArray
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