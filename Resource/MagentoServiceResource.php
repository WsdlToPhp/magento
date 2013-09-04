<?php
/**
 * File for class MagentoServiceResource
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceResource originally named Resource
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceResource extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named resourceFaults
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_resourceName
	 * @param MagentoStructString $_sessionId
	 * @return ArrayOfExistsFaltures
	 */
	public function resourceFaults(MagentoStructString $_resourceName,MagentoStructString $_sessionId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->resourceFaults($_resourceName,$_sessionId));
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
	 * @return ArrayOfExistsFaltures
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