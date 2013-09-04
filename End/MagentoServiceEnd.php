<?php
/**
 * File for class MagentoServiceEnd
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceEnd originally named End
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceEnd extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named endSession
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @uses MagentoStructString::get_()
	 * @uses MagentoStructString::getId()
	 * @uses MagentoStructString::getHref()
	 * @param MagentoStructString $_magentoStructString
	 * @return MagentoStructBoolean
	 */
	public function endSession(MagentoStructString $_magentoStructString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->endSession($_magentoStructString->get_(),$_magentoStructString->getId(),$_magentoStructString->getHref()));
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
	 * @return MagentoStructBoolean
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