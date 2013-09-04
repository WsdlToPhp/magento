<?php
/**
 * File for class MagentoServiceGift
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceGift originally named Gift
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceGift extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named giftMessageSetForQuote
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_quoteId
	 * @param MagentoStructGiftMessageEntity $_giftMessage
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructGiftMessageResponse
	 */
	public function giftMessageSetForQuote(MagentoStructString $_sessionId,MagentoStructString $_quoteId,MagentoStructGiftMessageEntity $_giftMessage,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->giftMessageSetForQuote($_sessionId,$_quoteId,$_giftMessage,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named giftMessageSetForQuoteItem
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_quoteItemId
	 * @param MagentoStructGiftMessageEntity $_giftMessage
	 * @param MagentoStructString $_storeId
	 * @return MagentoStructGiftMessageResponse
	 */
	public function giftMessageSetForQuoteItem(MagentoStructString $_sessionId,MagentoStructString $_quoteItemId,MagentoStructGiftMessageEntity $_giftMessage,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->giftMessageSetForQuoteItem($_sessionId,$_quoteItemId,$_giftMessage,$_storeId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named giftMessageSetForQuoteProduct
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_quoteId
	 * @param giftMessageAssociativeProductsEntityArray $_productsAndMessages
	 * @param MagentoStructString $_storeId
	 * @return giftMessageResponseArray
	 */
	public function giftMessageSetForQuoteProduct(MagentoStructString $_sessionId,MagentoStructString $_quoteId,$_productsAndMessages,MagentoStructString $_storeId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->giftMessageSetForQuoteProduct($_sessionId,$_quoteId,$_productsAndMessages,$_storeId));
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
	 * @return giftMessageResponseArray|MagentoStructGiftMessageResponse
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