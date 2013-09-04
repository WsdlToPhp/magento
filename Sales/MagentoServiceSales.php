<?php
/**
 * File for class MagentoServiceSales
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoServiceSales originally named Sales
 * @package Magento
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoServiceSales extends MagentoWsdlClass
{
	/**
	 * Method to call the operation originally named salesOrderList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @return salesOrderListEntityArray
	 */
	public function salesOrderList(MagentoStructString $_sessionId,MagentoStructFilters $_filters)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderList($_sessionId,$_filters));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @return MagentoStructSalesOrderEntity
	 */
	public function salesOrderInfo(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInfo($_sessionId,$_orderIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderAddComment
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_notify
	 * @return MagentoStructBoolean
	 */
	public function salesOrderAddComment(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId,MagentoStructString $_status,MagentoStructString $_comment,MagentoStructString $_notify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderAddComment($_sessionId,$_orderIncrementId,$_status,$_comment,$_notify));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderHold
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderHold(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderHold($_sessionId,$_orderIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderUnhold
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderUnhold(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderUnhold($_sessionId,$_orderIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCancel
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderCancel(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCancel($_sessionId,$_orderIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @return salesOrderShipmentEntityArray
	 */
	public function salesOrderShipmentList(MagentoStructString $_sessionId,MagentoStructFilters $_filters)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentList($_sessionId,$_filters));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_shipmentIncrementId
	 * @return MagentoStructSalesOrderShipmentEntity
	 */
	public function salesOrderShipmentInfo(MagentoStructString $_sessionId,MagentoStructString $_shipmentIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentInfo($_sessionId,$_shipmentIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @param orderItemIdQtyArray $_itemsQty
	 * @param MagentoStructString $_comment
	 * @param MagentoStructInt $_email
	 * @param MagentoStructInt $_includeComment
	 * @return MagentoStructString
	 */
	public function salesOrderShipmentCreate(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId,$_itemsQty,MagentoStructString $_comment,MagentoStructInt $_email,MagentoStructInt $_includeComment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentCreate($_sessionId,$_orderIncrementId,$_itemsQty,$_comment,$_email,$_includeComment));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentAddComment
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_shipmentIncrementId
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_includeInEmail
	 * @return MagentoStructBoolean
	 */
	public function salesOrderShipmentAddComment(MagentoStructString $_sessionId,MagentoStructString $_shipmentIncrementId,MagentoStructString $_comment,MagentoStructString $_email,MagentoStructString $_includeInEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentAddComment($_sessionId,$_shipmentIncrementId,$_comment,$_email,$_includeInEmail));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentAddTrack
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_shipmentIncrementId
	 * @param MagentoStructString $_carrier
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_trackNumber
	 * @return MagentoStructInt
	 */
	public function salesOrderShipmentAddTrack(MagentoStructString $_sessionId,MagentoStructString $_shipmentIncrementId,MagentoStructString $_carrier,MagentoStructString $_title,MagentoStructString $_trackNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentAddTrack($_sessionId,$_shipmentIncrementId,$_carrier,$_title,$_trackNumber));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentSendInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_shipmentIncrementId
	 * @param MagentoStructString $_comment
	 * @return MagentoStructBoolean
	 */
	public function salesOrderShipmentSendInfo(MagentoStructString $_sessionId,MagentoStructString $_shipmentIncrementId,MagentoStructString $_comment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentSendInfo($_sessionId,$_shipmentIncrementId,$_comment));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentRemoveTrack
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_shipmentIncrementId
	 * @param MagentoStructString $_trackId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderShipmentRemoveTrack(MagentoStructString $_sessionId,MagentoStructString $_shipmentIncrementId,MagentoStructString $_trackId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentRemoveTrack($_sessionId,$_shipmentIncrementId,$_trackId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderShipmentGetCarriers
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_orderIncrementId
	 * @return associativeArray
	 */
	public function salesOrderShipmentGetCarriers(MagentoStructString $_sessionId,MagentoStructString $_orderIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderShipmentGetCarriers($_sessionId,$_orderIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @return salesOrderInvoiceEntityArray
	 */
	public function salesOrderInvoiceList(MagentoStructString $_sessionId,MagentoStructFilters $_filters)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceList($_sessionId,$_filters));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @return MagentoStructSalesOrderInvoiceEntity
	 */
	public function salesOrderInvoiceInfo(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceInfo($_sessionId,$_invoiceIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @param orderItemIdQtyArray $_itemsQty
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_includeComment
	 * @return MagentoStructString
	 */
	public function salesOrderInvoiceCreate(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId,$_itemsQty,MagentoStructString $_comment,MagentoStructString $_email,MagentoStructString $_includeComment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceCreate($_sessionId,$_invoiceIncrementId,$_itemsQty,$_comment,$_email,$_includeComment));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceAddComment
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @param MagentoStructString $_comment
	 * @param MagentoStructString $_email
	 * @param MagentoStructString $_includeComment
	 * @return MagentoStructBoolean
	 */
	public function salesOrderInvoiceAddComment(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId,MagentoStructString $_comment,MagentoStructString $_email,MagentoStructString $_includeComment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceAddComment($_sessionId,$_invoiceIncrementId,$_comment,$_email,$_includeComment));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceCapture
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderInvoiceCapture(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceCapture($_sessionId,$_invoiceIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceVoid
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderInvoiceVoid(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceVoid($_sessionId,$_invoiceIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderInvoiceCancel
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_invoiceIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderInvoiceCancel(MagentoStructString $_sessionId,MagentoStructString $_invoiceIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderInvoiceCancel($_sessionId,$_invoiceIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCreditmemoList
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructFilters $_filters
	 * @return salesOrderCreditmemoEntityArray
	 */
	public function salesOrderCreditmemoList(MagentoStructString $_sessionId,MagentoStructFilters $_filters)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCreditmemoList($_sessionId,$_filters));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCreditmemoInfo
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_creditmemoIncrementId
	 * @return MagentoStructSalesOrderCreditmemoEntity
	 */
	public function salesOrderCreditmemoInfo(MagentoStructString $_sessionId,MagentoStructString $_creditmemoIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCreditmemoInfo($_sessionId,$_creditmemoIncrementId));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCreditmemoCreate
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_creditmemoIncrementId
	 * @param MagentoStructSalesOrderCreditmemoData $_creditmemoData
	 * @param MagentoStructString $_comment
	 * @param MagentoStructInt $_notifyCustomer
	 * @param MagentoStructInt $_includeComment
	 * @param MagentoStructString $_refundToStoreCreditAmount
	 * @return MagentoStructString
	 */
	public function salesOrderCreditmemoCreate(MagentoStructString $_sessionId,MagentoStructString $_creditmemoIncrementId,MagentoStructSalesOrderCreditmemoData $_creditmemoData,MagentoStructString $_comment,MagentoStructInt $_notifyCustomer,MagentoStructInt $_includeComment,MagentoStructString $_refundToStoreCreditAmount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCreditmemoCreate($_sessionId,$_creditmemoIncrementId,$_creditmemoData,$_comment,$_notifyCustomer,$_includeComment,$_refundToStoreCreditAmount));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCreditmemoAddComment
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_creditmemoIncrementId
	 * @param MagentoStructString $_comment
	 * @param MagentoStructInt $_notifyCustomer
	 * @param MagentoStructInt $_includeComment
	 * @return MagentoStructBoolean
	 */
	public function salesOrderCreditmemoAddComment(MagentoStructString $_sessionId,MagentoStructString $_creditmemoIncrementId,MagentoStructString $_comment,MagentoStructInt $_notifyCustomer,MagentoStructInt $_includeComment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCreditmemoAddComment($_sessionId,$_creditmemoIncrementId,$_comment,$_notifyCustomer,$_includeComment));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named salesOrderCreditmemoCancel
	 * @uses MagentoWsdlClass::getSoapClient()
	 * @uses MagentoWsdlClass::setResult()
	 * @uses MagentoWsdlClass::getResult()
	 * @uses MagentoWsdlClass::saveLastError()
	 * @param MagentoStructString $_sessionId
	 * @param MagentoStructString $_creditmemoIncrementId
	 * @return MagentoStructBoolean
	 */
	public function salesOrderCreditmemoCancel(MagentoStructString $_sessionId,MagentoStructString $_creditmemoIncrementId)
	{
		try
		{
			$this->setResult(self::getSoapClient()->salesOrderCreditmemoCancel($_sessionId,$_creditmemoIncrementId));
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
	 * @return associativeArray|MagentoStructBoolean|MagentoStructInt|MagentoStructSalesOrderCreditmemoEntity|MagentoStructSalesOrderEntity|MagentoStructSalesOrderInvoiceEntity|MagentoStructSalesOrderShipmentEntity|MagentoStructString|salesOrderCreditmemoEntityArray|salesOrderInvoiceEntityArray|salesOrderListEntityArray|salesOrderShipmentEntityArray
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