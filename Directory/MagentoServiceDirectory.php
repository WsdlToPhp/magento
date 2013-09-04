<?php
/**
 * File for class MagentoServiceDirectory
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceDirectory originally named Directory
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceDirectory extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named directoryCountryList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return directoryCountryEntityArray
	 */
	public function directoryCountryList(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->directoryCountryList($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named directoryRegionList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_country
	 * @return directoryRegionEntityArray
	 */
	public function directoryRegionList(MagentoStructString $_sessionId,MagentoStructString $_country)
	{
		try
		{
			$this->setResult(self::getSoapClient()->directoryRegionList($_sessionId,$_country));
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
	 * @return directoryCountryEntityArray|directoryRegionEntityArray
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