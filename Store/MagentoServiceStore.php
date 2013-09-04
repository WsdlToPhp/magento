<?php
/**
 * File for class MagentoServiceStore
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceStore originally named Store
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceStore extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named storeList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return storeEntityArray
	 */
	public function storeList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->storeList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named storeInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructStoreEntity
	 */
	public function storeInfo(MagentoStructString $_sessionId,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->storeInfo($_sessionId,$_storeId));
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
	 * @return MagentoStructStoreEntity|storeEntityArray
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