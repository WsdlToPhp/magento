<?php
/**
 * File for class MagentoServiceCustomer
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceCustomer originally named Customer
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceCustomer extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named customerCustomerList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @return customerCustomerEntityArray
	 */
	public function customerCustomerList(MagentoStructString $_sessionId,MagentoStructFilters $_filters)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerCustomerList($_sessionId,$_filters));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerCustomerCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructCustomerCustomerEntityToCreate $_customerData
	 * @return MagentoStructInt
	 */
	public function customerCustomerCreate(MagentoStructString $_sessionId,MagentoStructCustomerCustomerEntityToCreate $_customerData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerCustomerCreate($_sessionId,$_customerData));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerCustomerInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_customerId
	 * @param ArrayOfString $_attributes
	 * @return MagentoStructCustomerCustomerEntity
	 */
	public function customerCustomerInfo(MagentoStructString $_sessionId,MagentoStructInt $_customerId,$_attributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerCustomerInfo($_sessionId,$_customerId,$_attributes));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerCustomerUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_customerId
	 * @param MagentoStructCustomerCustomerEntityToCreate $_customerData
	 * @return MagentoStructBoolean
	 */
	public function customerCustomerUpdate(MagentoStructString $_sessionId,MagentoStructInt $_customerId,MagentoStructCustomerCustomerEntityToCreate $_customerData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerCustomerUpdate($_sessionId,$_customerId,$_customerData));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerCustomerDelete
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_customerId
	 * @return MagentoStructBoolean
	 */
	public function customerCustomerDelete(MagentoStructString $_sessionId,MagentoStructInt $_customerId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerCustomerDelete($_sessionId,$_customerId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerGroupList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return customerGroupEntityArray
	 */
	public function customerGroupList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerGroupList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerAddressList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_customerId
	 * @return customerAddressEntityArray
	 */
	public function customerAddressList(MagentoStructString $_sessionId,MagentoStructInt $_customerId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerAddressList($_sessionId,$_customerId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerAddressCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_customerId
	 * @param MagentoStructCustomerAddressEntityCreate $_addressData
	 * @return MagentoStructInt
	 */
	public function customerAddressCreate(MagentoStructString $_sessionId,MagentoStructInt $_customerId,MagentoStructCustomerAddressEntityCreate $_addressData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerAddressCreate($_sessionId,$_customerId,$_addressData));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerAddressInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_addressId
	 * @return MagentoStructCustomerAddressEntityItem
	 */
	public function customerAddressInfo(MagentoStructString $_sessionId,MagentoStructInt $_addressId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerAddressInfo($_sessionId,$_addressId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerAddressUpdate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_addressId
	 * @param MagentoStructCustomerAddressEntityCreate $_addressData
	 * @return MagentoStructBoolean
	 */
	public function customerAddressUpdate(MagentoStructString $_sessionId,MagentoStructInt $_addressId,MagentoStructCustomerAddressEntityCreate $_addressData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerAddressUpdate($_sessionId,$_addressId,$_addressData));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named customerAddressDelete
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructInt $_addressId
	 * @return MagentoStructBoolean
	 */
	public function customerAddressDelete(MagentoStructString $_sessionId,MagentoStructInt $_addressId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->customerAddressDelete($_sessionId,$_addressId));
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
	 * @return customerAddressEntityArray|customerCustomerEntityArray|customerGroupEntityArray|MagentoStructBoolean|MagentoStructCustomerAddressEntityItem|MagentoStructCustomerCustomerEntity|MagentoStructInt
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