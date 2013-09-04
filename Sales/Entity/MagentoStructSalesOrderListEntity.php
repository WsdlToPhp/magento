<?php
/**
 * File for class MagentoStructSalesOrderListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderListEntity originally named salesOrderListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderListEntity extends MagentoWsdlClass
{
	/**
	 * The increment_id
	 * @var MagentoStructString
	 */
	public $increment_id;
	/**
	 * The store_id
	 * @var MagentoStructString
	 */
	public $store_id;
	/**
	 * The created_at
	 * @var MagentoStructString
	 */
	public $created_at;
	/**
	 * The updated_at
	 * @var MagentoStructString
	 */
	public $updated_at;
	/**
	 * The customer_id
	 * @var MagentoStructString
	 */
	public $customer_id;
	/**
	 * The tax_amount
	 * @var MagentoStructString
	 */
	public $tax_amount;
	/**
	 * The shipping_amount
	 * @var MagentoStructString
	 */
	public $shipping_amount;
	/**
	 * The discount_amount
	 * @var MagentoStructString
	 */
	public $discount_amount;
	/**
	 * The subtotal
	 * @var MagentoStructString
	 */
	public $subtotal;
	/**
	 * The grand_total
	 * @var MagentoStructString
	 */
	public $grand_total;
	/**
	 * The total_paid
	 * @var MagentoStructString
	 */
	public $total_paid;
	/**
	 * The total_refunded
	 * @var MagentoStructString
	 */
	public $total_refunded;
	/**
	 * The total_qty_ordered
	 * @var MagentoStructString
	 */
	public $total_qty_ordered;
	/**
	 * The total_canceled
	 * @var MagentoStructString
	 */
	public $total_canceled;
	/**
	 * The total_invoiced
	 * @var MagentoStructString
	 */
	public $total_invoiced;
	/**
	 * The total_online_refunded
	 * @var MagentoStructString
	 */
	public $total_online_refunded;
	/**
	 * The total_offline_refunded
	 * @var MagentoStructString
	 */
	public $total_offline_refunded;
	/**
	 * The base_tax_amount
	 * @var MagentoStructString
	 */
	public $base_tax_amount;
	/**
	 * The base_shipping_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_amount;
	/**
	 * The base_discount_amount
	 * @var MagentoStructString
	 */
	public $base_discount_amount;
	/**
	 * The base_subtotal
	 * @var MagentoStructString
	 */
	public $base_subtotal;
	/**
	 * The base_grand_total
	 * @var MagentoStructString
	 */
	public $base_grand_total;
	/**
	 * The base_total_paid
	 * @var MagentoStructString
	 */
	public $base_total_paid;
	/**
	 * The base_total_refunded
	 * @var MagentoStructString
	 */
	public $base_total_refunded;
	/**
	 * The base_total_qty_ordered
	 * @var MagentoStructString
	 */
	public $base_total_qty_ordered;
	/**
	 * The base_total_canceled
	 * @var MagentoStructString
	 */
	public $base_total_canceled;
	/**
	 * The base_total_invoiced
	 * @var MagentoStructString
	 */
	public $base_total_invoiced;
	/**
	 * The base_total_online_refunded
	 * @var MagentoStructString
	 */
	public $base_total_online_refunded;
	/**
	 * The base_total_offline_refunded
	 * @var MagentoStructString
	 */
	public $base_total_offline_refunded;
	/**
	 * The billing_address_id
	 * @var MagentoStructString
	 */
	public $billing_address_id;
	/**
	 * The billing_firstname
	 * @var MagentoStructString
	 */
	public $billing_firstname;
	/**
	 * The billing_lastname
	 * @var MagentoStructString
	 */
	public $billing_lastname;
	/**
	 * The shipping_address_id
	 * @var MagentoStructString
	 */
	public $shipping_address_id;
	/**
	 * The shipping_firstname
	 * @var MagentoStructString
	 */
	public $shipping_firstname;
	/**
	 * The shipping_lastname
	 * @var MagentoStructString
	 */
	public $shipping_lastname;
	/**
	 * The billing_name
	 * @var MagentoStructString
	 */
	public $billing_name;
	/**
	 * The shipping_name
	 * @var MagentoStructString
	 */
	public $shipping_name;
	/**
	 * The store_to_base_rate
	 * @var MagentoStructString
	 */
	public $store_to_base_rate;
	/**
	 * The store_to_order_rate
	 * @var MagentoStructString
	 */
	public $store_to_order_rate;
	/**
	 * The base_to_global_rate
	 * @var MagentoStructString
	 */
	public $base_to_global_rate;
	/**
	 * The base_to_order_rate
	 * @var MagentoStructString
	 */
	public $base_to_order_rate;
	/**
	 * The weight
	 * @var MagentoStructString
	 */
	public $weight;
	/**
	 * The store_name
	 * @var MagentoStructString
	 */
	public $store_name;
	/**
	 * The remote_ip
	 * @var MagentoStructString
	 */
	public $remote_ip;
	/**
	 * The status
	 * @var MagentoStructString
	 */
	public $status;
	/**
	 * The state
	 * @var MagentoStructString
	 */
	public $state;
	/**
	 * The applied_rule_ids
	 * @var MagentoStructString
	 */
	public $applied_rule_ids;
	/**
	 * The global_currency_code
	 * @var MagentoStructString
	 */
	public $global_currency_code;
	/**
	 * The base_currency_code
	 * @var MagentoStructString
	 */
	public $base_currency_code;
	/**
	 * The store_currency_code
	 * @var MagentoStructString
	 */
	public $store_currency_code;
	/**
	 * The order_currency_code
	 * @var MagentoStructString
	 */
	public $order_currency_code;
	/**
	 * The shipping_method
	 * @var MagentoStructString
	 */
	public $shipping_method;
	/**
	 * The shipping_description
	 * @var MagentoStructString
	 */
	public $shipping_description;
	/**
	 * The customer_email
	 * @var MagentoStructString
	 */
	public $customer_email;
	/**
	 * The customer_firstname
	 * @var MagentoStructString
	 */
	public $customer_firstname;
	/**
	 * The customer_lastname
	 * @var MagentoStructString
	 */
	public $customer_lastname;
	/**
	 * The quote_id
	 * @var MagentoStructString
	 */
	public $quote_id;
	/**
	 * The is_virtual
	 * @var MagentoStructString
	 */
	public $is_virtual;
	/**
	 * The customer_group_id
	 * @var MagentoStructString
	 */
	public $customer_group_id;
	/**
	 * The customer_note_notify
	 * @var MagentoStructString
	 */
	public $customer_note_notify;
	/**
	 * The customer_is_guest
	 * @var MagentoStructString
	 */
	public $customer_is_guest;
	/**
	 * The email_sent
	 * @var MagentoStructString
	 */
	public $email_sent;
	/**
	 * The order_id
	 * @var MagentoStructString
	 */
	public $order_id;
	/**
	 * The gift_message_id
	 * @var MagentoStructString
	 */
	public $gift_message_id;
	/**
	 * The coupon_code
	 * @var MagentoStructString
	 */
	public $coupon_code;
	/**
	 * The protect_code
	 * @var MagentoStructString
	 */
	public $protect_code;
	/**
	 * The base_discount_canceled
	 * @var MagentoStructString
	 */
	public $base_discount_canceled;
	/**
	 * The base_discount_invoiced
	 * @var MagentoStructString
	 */
	public $base_discount_invoiced;
	/**
	 * The base_discount_refunded
	 * @var MagentoStructString
	 */
	public $base_discount_refunded;
	/**
	 * The base_shipping_canceled
	 * @var MagentoStructString
	 */
	public $base_shipping_canceled;
	/**
	 * The base_shipping_invoiced
	 * @var MagentoStructString
	 */
	public $base_shipping_invoiced;
	/**
	 * The base_shipping_refunded
	 * @var MagentoStructString
	 */
	public $base_shipping_refunded;
	/**
	 * The base_shipping_tax_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_tax_amount;
	/**
	 * The base_shipping_tax_refunded
	 * @var MagentoStructString
	 */
	public $base_shipping_tax_refunded;
	/**
	 * The base_subtotal_canceled
	 * @var MagentoStructString
	 */
	public $base_subtotal_canceled;
	/**
	 * The base_subtotal_invoiced
	 * @var MagentoStructString
	 */
	public $base_subtotal_invoiced;
	/**
	 * The base_subtotal_refunded
	 * @var MagentoStructString
	 */
	public $base_subtotal_refunded;
	/**
	 * The base_tax_canceled
	 * @var MagentoStructString
	 */
	public $base_tax_canceled;
	/**
	 * The base_tax_invoiced
	 * @var MagentoStructString
	 */
	public $base_tax_invoiced;
	/**
	 * The base_tax_refunded
	 * @var MagentoStructString
	 */
	public $base_tax_refunded;
	/**
	 * The base_total_invoiced_cost
	 * @var MagentoStructString
	 */
	public $base_total_invoiced_cost;
	/**
	 * The discount_canceled
	 * @var MagentoStructString
	 */
	public $discount_canceled;
	/**
	 * The discount_invoiced
	 * @var MagentoStructString
	 */
	public $discount_invoiced;
	/**
	 * The discount_refunded
	 * @var MagentoStructString
	 */
	public $discount_refunded;
	/**
	 * The shipping_canceled
	 * @var MagentoStructString
	 */
	public $shipping_canceled;
	/**
	 * The shipping_invoiced
	 * @var MagentoStructString
	 */
	public $shipping_invoiced;
	/**
	 * The shipping_refunded
	 * @var MagentoStructString
	 */
	public $shipping_refunded;
	/**
	 * The shipping_tax_amount
	 * @var MagentoStructString
	 */
	public $shipping_tax_amount;
	/**
	 * The shipping_tax_refunded
	 * @var MagentoStructString
	 */
	public $shipping_tax_refunded;
	/**
	 * The subtotal_canceled
	 * @var MagentoStructString
	 */
	public $subtotal_canceled;
	/**
	 * The subtotal_invoiced
	 * @var MagentoStructString
	 */
	public $subtotal_invoiced;
	/**
	 * The subtotal_refunded
	 * @var MagentoStructString
	 */
	public $subtotal_refunded;
	/**
	 * The tax_canceled
	 * @var MagentoStructString
	 */
	public $tax_canceled;
	/**
	 * The tax_invoiced
	 * @var MagentoStructString
	 */
	public $tax_invoiced;
	/**
	 * The tax_refunded
	 * @var MagentoStructString
	 */
	public $tax_refunded;
	/**
	 * The can_ship_partially
	 * @var MagentoStructString
	 */
	public $can_ship_partially;
	/**
	 * The can_ship_partially_item
	 * @var MagentoStructString
	 */
	public $can_ship_partially_item;
	/**
	 * The edit_increment
	 * @var MagentoStructString
	 */
	public $edit_increment;
	/**
	 * The forced_do_shipment_with_invoice
	 * @var MagentoStructString
	 */
	public $forced_do_shipment_with_invoice;
	/**
	 * The payment_authorization_expiration
	 * @var MagentoStructString
	 */
	public $payment_authorization_expiration;
	/**
	 * The paypal_ipn_customer_notified
	 * @var MagentoStructString
	 */
	public $paypal_ipn_customer_notified;
	/**
	 * The quote_address_id
	 * @var MagentoStructString
	 */
	public $quote_address_id;
	/**
	 * The adjustment_negative
	 * @var MagentoStructString
	 */
	public $adjustment_negative;
	/**
	 * The adjustment_positive
	 * @var MagentoStructString
	 */
	public $adjustment_positive;
	/**
	 * The base_adjustment_negative
	 * @var MagentoStructString
	 */
	public $base_adjustment_negative;
	/**
	 * The base_adjustment_positive
	 * @var MagentoStructString
	 */
	public $base_adjustment_positive;
	/**
	 * The base_shipping_discount_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_discount_amount;
	/**
	 * The base_subtotal_incl_tax
	 * @var MagentoStructString
	 */
	public $base_subtotal_incl_tax;
	/**
	 * The base_total_due
	 * @var MagentoStructString
	 */
	public $base_total_due;
	/**
	 * The payment_authorization_amount
	 * @var MagentoStructString
	 */
	public $payment_authorization_amount;
	/**
	 * The shipping_discount_amount
	 * @var MagentoStructString
	 */
	public $shipping_discount_amount;
	/**
	 * The subtotal_incl_tax
	 * @var MagentoStructString
	 */
	public $subtotal_incl_tax;
	/**
	 * The total_due
	 * @var MagentoStructString
	 */
	public $total_due;
	/**
	 * The customer_dob
	 * @var MagentoStructString
	 */
	public $customer_dob;
	/**
	 * The customer_middlename
	 * @var MagentoStructString
	 */
	public $customer_middlename;
	/**
	 * The customer_prefix
	 * @var MagentoStructString
	 */
	public $customer_prefix;
	/**
	 * The customer_suffix
	 * @var MagentoStructString
	 */
	public $customer_suffix;
	/**
	 * The customer_taxvat
	 * @var MagentoStructString
	 */
	public $customer_taxvat;
	/**
	 * The discount_description
	 * @var MagentoStructString
	 */
	public $discount_description;
	/**
	 * The ext_customer_id
	 * @var MagentoStructString
	 */
	public $ext_customer_id;
	/**
	 * The ext_order_id
	 * @var MagentoStructString
	 */
	public $ext_order_id;
	/**
	 * The hold_before_state
	 * @var MagentoStructString
	 */
	public $hold_before_state;
	/**
	 * The hold_before_status
	 * @var MagentoStructString
	 */
	public $hold_before_status;
	/**
	 * The original_increment_id
	 * @var MagentoStructString
	 */
	public $original_increment_id;
	/**
	 * The relation_child_id
	 * @var MagentoStructString
	 */
	public $relation_child_id;
	/**
	 * The relation_child_real_id
	 * @var MagentoStructString
	 */
	public $relation_child_real_id;
	/**
	 * The relation_parent_id
	 * @var MagentoStructString
	 */
	public $relation_parent_id;
	/**
	 * The relation_parent_real_id
	 * @var MagentoStructString
	 */
	public $relation_parent_real_id;
	/**
	 * The x_forwarded_for
	 * @var MagentoStructString
	 */
	public $x_forwarded_for;
	/**
	 * The customer_note
	 * @var MagentoStructString
	 */
	public $customer_note;
	/**
	 * The total_item_count
	 * @var MagentoStructString
	 */
	public $total_item_count;
	/**
	 * The customer_gender
	 * @var MagentoStructString
	 */
	public $customer_gender;
	/**
	 * The hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $hidden_tax_amount;
	/**
	 * The base_hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $base_hidden_tax_amount;
	/**
	 * The shipping_hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $shipping_hidden_tax_amount;
	/**
	 * The base_shipping_hidden_tax_amount
	 * @var MagentoStructString
	 */
	public $base_shipping_hidden_tax_amount;
	/**
	 * The hidden_tax_invoiced
	 * @var MagentoStructString
	 */
	public $hidden_tax_invoiced;
	/**
	 * The base_hidden_tax_invoiced
	 * @var MagentoStructString
	 */
	public $base_hidden_tax_invoiced;
	/**
	 * The hidden_tax_refunded
	 * @var MagentoStructString
	 */
	public $hidden_tax_refunded;
	/**
	 * The base_hidden_tax_refunded
	 * @var MagentoStructString
	 */
	public $base_hidden_tax_refunded;
	/**
	 * The shipping_incl_tax
	 * @var MagentoStructString
	 */
	public $shipping_incl_tax;
	/**
	 * The base_shipping_incl_tax
	 * @var MagentoStructString
	 */
	public $base_shipping_incl_tax;
	/**
	 * The base_customer_balance_amount
	 * @var MagentoStructString
	 */
	public $base_customer_balance_amount;
	/**
	 * The customer_balance_amount
	 * @var MagentoStructString
	 */
	public $customer_balance_amount;
	/**
	 * The base_customer_balance_invoiced
	 * @var MagentoStructString
	 */
	public $base_customer_balance_invoiced;
	/**
	 * The customer_balance_invoiced
	 * @var MagentoStructString
	 */
	public $customer_balance_invoiced;
	/**
	 * The base_customer_balance_refunded
	 * @var MagentoStructString
	 */
	public $base_customer_balance_refunded;
	/**
	 * The customer_balance_refunded
	 * @var MagentoStructString
	 */
	public $customer_balance_refunded;
	/**
	 * The base_customer_balance_total_refunded
	 * @var MagentoStructString
	 */
	public $base_customer_balance_total_refunded;
	/**
	 * The customer_balance_total_refunded
	 * @var MagentoStructString
	 */
	public $customer_balance_total_refunded;
	/**
	 * The gift_cards
	 * @var MagentoStructString
	 */
	public $gift_cards;
	/**
	 * The base_gift_cards_amount
	 * @var MagentoStructString
	 */
	public $base_gift_cards_amount;
	/**
	 * The gift_cards_amount
	 * @var MagentoStructString
	 */
	public $gift_cards_amount;
	/**
	 * The base_gift_cards_invoiced
	 * @var MagentoStructString
	 */
	public $base_gift_cards_invoiced;
	/**
	 * The gift_cards_invoiced
	 * @var MagentoStructString
	 */
	public $gift_cards_invoiced;
	/**
	 * The base_gift_cards_refunded
	 * @var MagentoStructString
	 */
	public $base_gift_cards_refunded;
	/**
	 * The gift_cards_refunded
	 * @var MagentoStructString
	 */
	public $gift_cards_refunded;
	/**
	 * The reward_points_balance
	 * @var MagentoStructString
	 */
	public $reward_points_balance;
	/**
	 * The base_reward_currency_amount
	 * @var MagentoStructString
	 */
	public $base_reward_currency_amount;
	/**
	 * The reward_currency_amount
	 * @var MagentoStructString
	 */
	public $reward_currency_amount;
	/**
	 * The base_reward_currency_amount_invoiced
	 * @var MagentoStructString
	 */
	public $base_reward_currency_amount_invoiced;
	/**
	 * The reward_currency_amount_invoiced
	 * @var MagentoStructString
	 */
	public $reward_currency_amount_invoiced;
	/**
	 * The base_reward_currency_amount_refunded
	 * @var MagentoStructString
	 */
	public $base_reward_currency_amount_refunded;
	/**
	 * The reward_currency_amount_refunded
	 * @var MagentoStructString
	 */
	public $reward_currency_amount_refunded;
	/**
	 * The reward_points_balance_refunded
	 * @var MagentoStructString
	 */
	public $reward_points_balance_refunded;
	/**
	 * The reward_points_balance_to_refund
	 * @var MagentoStructString
	 */
	public $reward_points_balance_to_refund;
	/**
	 * The reward_salesrule_points
	 * @var MagentoStructString
	 */
	public $reward_salesrule_points;
	/**
	 * The firstname
	 * @var MagentoStructString
	 */
	public $firstname;
	/**
	 * The lastname
	 * @var MagentoStructString
	 */
	public $lastname;
	/**
	 * The telephone
	 * @var MagentoStructString
	 */
	public $telephone;
	/**
	 * The postcode
	 * @var MagentoStructString
	 */
	public $postcode;
	/**
	 * Constructor method for salesOrderListEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_customer_id
	 * @param MagentoStructString $_tax_amount
	 * @param MagentoStructString $_shipping_amount
	 * @param MagentoStructString $_discount_amount
	 * @param MagentoStructString $_subtotal
	 * @param MagentoStructString $_grand_total
	 * @param MagentoStructString $_total_paid
	 * @param MagentoStructString $_total_refunded
	 * @param MagentoStructString $_total_qty_ordered
	 * @param MagentoStructString $_total_canceled
	 * @param MagentoStructString $_total_invoiced
	 * @param MagentoStructString $_total_online_refunded
	 * @param MagentoStructString $_total_offline_refunded
	 * @param MagentoStructString $_base_tax_amount
	 * @param MagentoStructString $_base_shipping_amount
	 * @param MagentoStructString $_base_discount_amount
	 * @param MagentoStructString $_base_subtotal
	 * @param MagentoStructString $_base_grand_total
	 * @param MagentoStructString $_base_total_paid
	 * @param MagentoStructString $_base_total_refunded
	 * @param MagentoStructString $_base_total_qty_ordered
	 * @param MagentoStructString $_base_total_canceled
	 * @param MagentoStructString $_base_total_invoiced
	 * @param MagentoStructString $_base_total_online_refunded
	 * @param MagentoStructString $_base_total_offline_refunded
	 * @param MagentoStructString $_billing_address_id
	 * @param MagentoStructString $_billing_firstname
	 * @param MagentoStructString $_billing_lastname
	 * @param MagentoStructString $_shipping_address_id
	 * @param MagentoStructString $_shipping_firstname
	 * @param MagentoStructString $_shipping_lastname
	 * @param MagentoStructString $_billing_name
	 * @param MagentoStructString $_shipping_name
	 * @param MagentoStructString $_store_to_base_rate
	 * @param MagentoStructString $_store_to_order_rate
	 * @param MagentoStructString $_base_to_global_rate
	 * @param MagentoStructString $_base_to_order_rate
	 * @param MagentoStructString $_weight
	 * @param MagentoStructString $_store_name
	 * @param MagentoStructString $_remote_ip
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_state
	 * @param MagentoStructString $_applied_rule_ids
	 * @param MagentoStructString $_global_currency_code
	 * @param MagentoStructString $_base_currency_code
	 * @param MagentoStructString $_store_currency_code
	 * @param MagentoStructString $_order_currency_code
	 * @param MagentoStructString $_shipping_method
	 * @param MagentoStructString $_shipping_description
	 * @param MagentoStructString $_customer_email
	 * @param MagentoStructString $_customer_firstname
	 * @param MagentoStructString $_customer_lastname
	 * @param MagentoStructString $_quote_id
	 * @param MagentoStructString $_is_virtual
	 * @param MagentoStructString $_customer_group_id
	 * @param MagentoStructString $_customer_note_notify
	 * @param MagentoStructString $_customer_is_guest
	 * @param MagentoStructString $_email_sent
	 * @param MagentoStructString $_order_id
	 * @param MagentoStructString $_gift_message_id
	 * @param MagentoStructString $_coupon_code
	 * @param MagentoStructString $_protect_code
	 * @param MagentoStructString $_base_discount_canceled
	 * @param MagentoStructString $_base_discount_invoiced
	 * @param MagentoStructString $_base_discount_refunded
	 * @param MagentoStructString $_base_shipping_canceled
	 * @param MagentoStructString $_base_shipping_invoiced
	 * @param MagentoStructString $_base_shipping_refunded
	 * @param MagentoStructString $_base_shipping_tax_amount
	 * @param MagentoStructString $_base_shipping_tax_refunded
	 * @param MagentoStructString $_base_subtotal_canceled
	 * @param MagentoStructString $_base_subtotal_invoiced
	 * @param MagentoStructString $_base_subtotal_refunded
	 * @param MagentoStructString $_base_tax_canceled
	 * @param MagentoStructString $_base_tax_invoiced
	 * @param MagentoStructString $_base_tax_refunded
	 * @param MagentoStructString $_base_total_invoiced_cost
	 * @param MagentoStructString $_discount_canceled
	 * @param MagentoStructString $_discount_invoiced
	 * @param MagentoStructString $_discount_refunded
	 * @param MagentoStructString $_shipping_canceled
	 * @param MagentoStructString $_shipping_invoiced
	 * @param MagentoStructString $_shipping_refunded
	 * @param MagentoStructString $_shipping_tax_amount
	 * @param MagentoStructString $_shipping_tax_refunded
	 * @param MagentoStructString $_subtotal_canceled
	 * @param MagentoStructString $_subtotal_invoiced
	 * @param MagentoStructString $_subtotal_refunded
	 * @param MagentoStructString $_tax_canceled
	 * @param MagentoStructString $_tax_invoiced
	 * @param MagentoStructString $_tax_refunded
	 * @param MagentoStructString $_can_ship_partially
	 * @param MagentoStructString $_can_ship_partially_item
	 * @param MagentoStructString $_edit_increment
	 * @param MagentoStructString $_forced_do_shipment_with_invoice
	 * @param MagentoStructString $_payment_authorization_expiration
	 * @param MagentoStructString $_paypal_ipn_customer_notified
	 * @param MagentoStructString $_quote_address_id
	 * @param MagentoStructString $_adjustment_negative
	 * @param MagentoStructString $_adjustment_positive
	 * @param MagentoStructString $_base_adjustment_negative
	 * @param MagentoStructString $_base_adjustment_positive
	 * @param MagentoStructString $_base_shipping_discount_amount
	 * @param MagentoStructString $_base_subtotal_incl_tax
	 * @param MagentoStructString $_base_total_due
	 * @param MagentoStructString $_payment_authorization_amount
	 * @param MagentoStructString $_shipping_discount_amount
	 * @param MagentoStructString $_subtotal_incl_tax
	 * @param MagentoStructString $_total_due
	 * @param MagentoStructString $_customer_dob
	 * @param MagentoStructString $_customer_middlename
	 * @param MagentoStructString $_customer_prefix
	 * @param MagentoStructString $_customer_suffix
	 * @param MagentoStructString $_customer_taxvat
	 * @param MagentoStructString $_discount_description
	 * @param MagentoStructString $_ext_customer_id
	 * @param MagentoStructString $_ext_order_id
	 * @param MagentoStructString $_hold_before_state
	 * @param MagentoStructString $_hold_before_status
	 * @param MagentoStructString $_original_increment_id
	 * @param MagentoStructString $_relation_child_id
	 * @param MagentoStructString $_relation_child_real_id
	 * @param MagentoStructString $_relation_parent_id
	 * @param MagentoStructString $_relation_parent_real_id
	 * @param MagentoStructString $_x_forwarded_for
	 * @param MagentoStructString $_customer_note
	 * @param MagentoStructString $_total_item_count
	 * @param MagentoStructString $_customer_gender
	 * @param MagentoStructString $_hidden_tax_amount
	 * @param MagentoStructString $_base_hidden_tax_amount
	 * @param MagentoStructString $_shipping_hidden_tax_amount
	 * @param MagentoStructString $_base_shipping_hidden_tax_amount
	 * @param MagentoStructString $_hidden_tax_invoiced
	 * @param MagentoStructString $_base_hidden_tax_invoiced
	 * @param MagentoStructString $_hidden_tax_refunded
	 * @param MagentoStructString $_base_hidden_tax_refunded
	 * @param MagentoStructString $_shipping_incl_tax
	 * @param MagentoStructString $_base_shipping_incl_tax
	 * @param MagentoStructString $_base_customer_balance_amount
	 * @param MagentoStructString $_customer_balance_amount
	 * @param MagentoStructString $_base_customer_balance_invoiced
	 * @param MagentoStructString $_customer_balance_invoiced
	 * @param MagentoStructString $_base_customer_balance_refunded
	 * @param MagentoStructString $_customer_balance_refunded
	 * @param MagentoStructString $_base_customer_balance_total_refunded
	 * @param MagentoStructString $_customer_balance_total_refunded
	 * @param MagentoStructString $_gift_cards
	 * @param MagentoStructString $_base_gift_cards_amount
	 * @param MagentoStructString $_gift_cards_amount
	 * @param MagentoStructString $_base_gift_cards_invoiced
	 * @param MagentoStructString $_gift_cards_invoiced
	 * @param MagentoStructString $_base_gift_cards_refunded
	 * @param MagentoStructString $_gift_cards_refunded
	 * @param MagentoStructString $_reward_points_balance
	 * @param MagentoStructString $_base_reward_currency_amount
	 * @param MagentoStructString $_reward_currency_amount
	 * @param MagentoStructString $_base_reward_currency_amount_invoiced
	 * @param MagentoStructString $_reward_currency_amount_invoiced
	 * @param MagentoStructString $_base_reward_currency_amount_refunded
	 * @param MagentoStructString $_reward_currency_amount_refunded
	 * @param MagentoStructString $_reward_points_balance_refunded
	 * @param MagentoStructString $_reward_points_balance_to_refund
	 * @param MagentoStructString $_reward_salesrule_points
	 * @param MagentoStructString $_firstname
	 * @param MagentoStructString $_lastname
	 * @param MagentoStructString $_telephone
	 * @param MagentoStructString $_postcode
	 * @return MagentoStructSalesOrderListEntity
	 */
	public function __construct($_increment_id = NULL,$_store_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_customer_id = NULL,$_tax_amount = NULL,$_shipping_amount = NULL,$_discount_amount = NULL,$_subtotal = NULL,$_grand_total = NULL,$_total_paid = NULL,$_total_refunded = NULL,$_total_qty_ordered = NULL,$_total_canceled = NULL,$_total_invoiced = NULL,$_total_online_refunded = NULL,$_total_offline_refunded = NULL,$_base_tax_amount = NULL,$_base_shipping_amount = NULL,$_base_discount_amount = NULL,$_base_subtotal = NULL,$_base_grand_total = NULL,$_base_total_paid = NULL,$_base_total_refunded = NULL,$_base_total_qty_ordered = NULL,$_base_total_canceled = NULL,$_base_total_invoiced = NULL,$_base_total_online_refunded = NULL,$_base_total_offline_refunded = NULL,$_billing_address_id = NULL,$_billing_firstname = NULL,$_billing_lastname = NULL,$_shipping_address_id = NULL,$_shipping_firstname = NULL,$_shipping_lastname = NULL,$_billing_name = NULL,$_shipping_name = NULL,$_store_to_base_rate = NULL,$_store_to_order_rate = NULL,$_base_to_global_rate = NULL,$_base_to_order_rate = NULL,$_weight = NULL,$_store_name = NULL,$_remote_ip = NULL,$_status = NULL,$_state = NULL,$_applied_rule_ids = NULL,$_global_currency_code = NULL,$_base_currency_code = NULL,$_store_currency_code = NULL,$_order_currency_code = NULL,$_shipping_method = NULL,$_shipping_description = NULL,$_customer_email = NULL,$_customer_firstname = NULL,$_customer_lastname = NULL,$_quote_id = NULL,$_is_virtual = NULL,$_customer_group_id = NULL,$_customer_note_notify = NULL,$_customer_is_guest = NULL,$_email_sent = NULL,$_order_id = NULL,$_gift_message_id = NULL,$_coupon_code = NULL,$_protect_code = NULL,$_base_discount_canceled = NULL,$_base_discount_invoiced = NULL,$_base_discount_refunded = NULL,$_base_shipping_canceled = NULL,$_base_shipping_invoiced = NULL,$_base_shipping_refunded = NULL,$_base_shipping_tax_amount = NULL,$_base_shipping_tax_refunded = NULL,$_base_subtotal_canceled = NULL,$_base_subtotal_invoiced = NULL,$_base_subtotal_refunded = NULL,$_base_tax_canceled = NULL,$_base_tax_invoiced = NULL,$_base_tax_refunded = NULL,$_base_total_invoiced_cost = NULL,$_discount_canceled = NULL,$_discount_invoiced = NULL,$_discount_refunded = NULL,$_shipping_canceled = NULL,$_shipping_invoiced = NULL,$_shipping_refunded = NULL,$_shipping_tax_amount = NULL,$_shipping_tax_refunded = NULL,$_subtotal_canceled = NULL,$_subtotal_invoiced = NULL,$_subtotal_refunded = NULL,$_tax_canceled = NULL,$_tax_invoiced = NULL,$_tax_refunded = NULL,$_can_ship_partially = NULL,$_can_ship_partially_item = NULL,$_edit_increment = NULL,$_forced_do_shipment_with_invoice = NULL,$_payment_authorization_expiration = NULL,$_paypal_ipn_customer_notified = NULL,$_quote_address_id = NULL,$_adjustment_negative = NULL,$_adjustment_positive = NULL,$_base_adjustment_negative = NULL,$_base_adjustment_positive = NULL,$_base_shipping_discount_amount = NULL,$_base_subtotal_incl_tax = NULL,$_base_total_due = NULL,$_payment_authorization_amount = NULL,$_shipping_discount_amount = NULL,$_subtotal_incl_tax = NULL,$_total_due = NULL,$_customer_dob = NULL,$_customer_middlename = NULL,$_customer_prefix = NULL,$_customer_suffix = NULL,$_customer_taxvat = NULL,$_discount_description = NULL,$_ext_customer_id = NULL,$_ext_order_id = NULL,$_hold_before_state = NULL,$_hold_before_status = NULL,$_original_increment_id = NULL,$_relation_child_id = NULL,$_relation_child_real_id = NULL,$_relation_parent_id = NULL,$_relation_parent_real_id = NULL,$_x_forwarded_for = NULL,$_customer_note = NULL,$_total_item_count = NULL,$_customer_gender = NULL,$_hidden_tax_amount = NULL,$_base_hidden_tax_amount = NULL,$_shipping_hidden_tax_amount = NULL,$_base_shipping_hidden_tax_amount = NULL,$_hidden_tax_invoiced = NULL,$_base_hidden_tax_invoiced = NULL,$_hidden_tax_refunded = NULL,$_base_hidden_tax_refunded = NULL,$_shipping_incl_tax = NULL,$_base_shipping_incl_tax = NULL,$_base_customer_balance_amount = NULL,$_customer_balance_amount = NULL,$_base_customer_balance_invoiced = NULL,$_customer_balance_invoiced = NULL,$_base_customer_balance_refunded = NULL,$_customer_balance_refunded = NULL,$_base_customer_balance_total_refunded = NULL,$_customer_balance_total_refunded = NULL,$_gift_cards = NULL,$_base_gift_cards_amount = NULL,$_gift_cards_amount = NULL,$_base_gift_cards_invoiced = NULL,$_gift_cards_invoiced = NULL,$_base_gift_cards_refunded = NULL,$_gift_cards_refunded = NULL,$_reward_points_balance = NULL,$_base_reward_currency_amount = NULL,$_reward_currency_amount = NULL,$_base_reward_currency_amount_invoiced = NULL,$_reward_currency_amount_invoiced = NULL,$_base_reward_currency_amount_refunded = NULL,$_reward_currency_amount_refunded = NULL,$_reward_points_balance_refunded = NULL,$_reward_points_balance_to_refund = NULL,$_reward_salesrule_points = NULL,$_firstname = NULL,$_lastname = NULL,$_telephone = NULL,$_postcode = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'store_id'=>$_store_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'customer_id'=>$_customer_id,'tax_amount'=>$_tax_amount,'shipping_amount'=>$_shipping_amount,'discount_amount'=>$_discount_amount,'subtotal'=>$_subtotal,'grand_total'=>$_grand_total,'total_paid'=>$_total_paid,'total_refunded'=>$_total_refunded,'total_qty_ordered'=>$_total_qty_ordered,'total_canceled'=>$_total_canceled,'total_invoiced'=>$_total_invoiced,'total_online_refunded'=>$_total_online_refunded,'total_offline_refunded'=>$_total_offline_refunded,'base_tax_amount'=>$_base_tax_amount,'base_shipping_amount'=>$_base_shipping_amount,'base_discount_amount'=>$_base_discount_amount,'base_subtotal'=>$_base_subtotal,'base_grand_total'=>$_base_grand_total,'base_total_paid'=>$_base_total_paid,'base_total_refunded'=>$_base_total_refunded,'base_total_qty_ordered'=>$_base_total_qty_ordered,'base_total_canceled'=>$_base_total_canceled,'base_total_invoiced'=>$_base_total_invoiced,'base_total_online_refunded'=>$_base_total_online_refunded,'base_total_offline_refunded'=>$_base_total_offline_refunded,'billing_address_id'=>$_billing_address_id,'billing_firstname'=>$_billing_firstname,'billing_lastname'=>$_billing_lastname,'shipping_address_id'=>$_shipping_address_id,'shipping_firstname'=>$_shipping_firstname,'shipping_lastname'=>$_shipping_lastname,'billing_name'=>$_billing_name,'shipping_name'=>$_shipping_name,'store_to_base_rate'=>$_store_to_base_rate,'store_to_order_rate'=>$_store_to_order_rate,'base_to_global_rate'=>$_base_to_global_rate,'base_to_order_rate'=>$_base_to_order_rate,'weight'=>$_weight,'store_name'=>$_store_name,'remote_ip'=>$_remote_ip,'status'=>$_status,'state'=>$_state,'applied_rule_ids'=>$_applied_rule_ids,'global_currency_code'=>$_global_currency_code,'base_currency_code'=>$_base_currency_code,'store_currency_code'=>$_store_currency_code,'order_currency_code'=>$_order_currency_code,'shipping_method'=>$_shipping_method,'shipping_description'=>$_shipping_description,'customer_email'=>$_customer_email,'customer_firstname'=>$_customer_firstname,'customer_lastname'=>$_customer_lastname,'quote_id'=>$_quote_id,'is_virtual'=>$_is_virtual,'customer_group_id'=>$_customer_group_id,'customer_note_notify'=>$_customer_note_notify,'customer_is_guest'=>$_customer_is_guest,'email_sent'=>$_email_sent,'order_id'=>$_order_id,'gift_message_id'=>$_gift_message_id,'coupon_code'=>$_coupon_code,'protect_code'=>$_protect_code,'base_discount_canceled'=>$_base_discount_canceled,'base_discount_invoiced'=>$_base_discount_invoiced,'base_discount_refunded'=>$_base_discount_refunded,'base_shipping_canceled'=>$_base_shipping_canceled,'base_shipping_invoiced'=>$_base_shipping_invoiced,'base_shipping_refunded'=>$_base_shipping_refunded,'base_shipping_tax_amount'=>$_base_shipping_tax_amount,'base_shipping_tax_refunded'=>$_base_shipping_tax_refunded,'base_subtotal_canceled'=>$_base_subtotal_canceled,'base_subtotal_invoiced'=>$_base_subtotal_invoiced,'base_subtotal_refunded'=>$_base_subtotal_refunded,'base_tax_canceled'=>$_base_tax_canceled,'base_tax_invoiced'=>$_base_tax_invoiced,'base_tax_refunded'=>$_base_tax_refunded,'base_total_invoiced_cost'=>$_base_total_invoiced_cost,'discount_canceled'=>$_discount_canceled,'discount_invoiced'=>$_discount_invoiced,'discount_refunded'=>$_discount_refunded,'shipping_canceled'=>$_shipping_canceled,'shipping_invoiced'=>$_shipping_invoiced,'shipping_refunded'=>$_shipping_refunded,'shipping_tax_amount'=>$_shipping_tax_amount,'shipping_tax_refunded'=>$_shipping_tax_refunded,'subtotal_canceled'=>$_subtotal_canceled,'subtotal_invoiced'=>$_subtotal_invoiced,'subtotal_refunded'=>$_subtotal_refunded,'tax_canceled'=>$_tax_canceled,'tax_invoiced'=>$_tax_invoiced,'tax_refunded'=>$_tax_refunded,'can_ship_partially'=>$_can_ship_partially,'can_ship_partially_item'=>$_can_ship_partially_item,'edit_increment'=>$_edit_increment,'forced_do_shipment_with_invoice'=>$_forced_do_shipment_with_invoice,'payment_authorization_expiration'=>$_payment_authorization_expiration,'paypal_ipn_customer_notified'=>$_paypal_ipn_customer_notified,'quote_address_id'=>$_quote_address_id,'adjustment_negative'=>$_adjustment_negative,'adjustment_positive'=>$_adjustment_positive,'base_adjustment_negative'=>$_base_adjustment_negative,'base_adjustment_positive'=>$_base_adjustment_positive,'base_shipping_discount_amount'=>$_base_shipping_discount_amount,'base_subtotal_incl_tax'=>$_base_subtotal_incl_tax,'base_total_due'=>$_base_total_due,'payment_authorization_amount'=>$_payment_authorization_amount,'shipping_discount_amount'=>$_shipping_discount_amount,'subtotal_incl_tax'=>$_subtotal_incl_tax,'total_due'=>$_total_due,'customer_dob'=>$_customer_dob,'customer_middlename'=>$_customer_middlename,'customer_prefix'=>$_customer_prefix,'customer_suffix'=>$_customer_suffix,'customer_taxvat'=>$_customer_taxvat,'discount_description'=>$_discount_description,'ext_customer_id'=>$_ext_customer_id,'ext_order_id'=>$_ext_order_id,'hold_before_state'=>$_hold_before_state,'hold_before_status'=>$_hold_before_status,'original_increment_id'=>$_original_increment_id,'relation_child_id'=>$_relation_child_id,'relation_child_real_id'=>$_relation_child_real_id,'relation_parent_id'=>$_relation_parent_id,'relation_parent_real_id'=>$_relation_parent_real_id,'x_forwarded_for'=>$_x_forwarded_for,'customer_note'=>$_customer_note,'total_item_count'=>$_total_item_count,'customer_gender'=>$_customer_gender,'hidden_tax_amount'=>$_hidden_tax_amount,'base_hidden_tax_amount'=>$_base_hidden_tax_amount,'shipping_hidden_tax_amount'=>$_shipping_hidden_tax_amount,'base_shipping_hidden_tax_amount'=>$_base_shipping_hidden_tax_amount,'hidden_tax_invoiced'=>$_hidden_tax_invoiced,'base_hidden_tax_invoiced'=>$_base_hidden_tax_invoiced,'hidden_tax_refunded'=>$_hidden_tax_refunded,'base_hidden_tax_refunded'=>$_base_hidden_tax_refunded,'shipping_incl_tax'=>$_shipping_incl_tax,'base_shipping_incl_tax'=>$_base_shipping_incl_tax,'base_customer_balance_amount'=>$_base_customer_balance_amount,'customer_balance_amount'=>$_customer_balance_amount,'base_customer_balance_invoiced'=>$_base_customer_balance_invoiced,'customer_balance_invoiced'=>$_customer_balance_invoiced,'base_customer_balance_refunded'=>$_base_customer_balance_refunded,'customer_balance_refunded'=>$_customer_balance_refunded,'base_customer_balance_total_refunded'=>$_base_customer_balance_total_refunded,'customer_balance_total_refunded'=>$_customer_balance_total_refunded,'gift_cards'=>$_gift_cards,'base_gift_cards_amount'=>$_base_gift_cards_amount,'gift_cards_amount'=>$_gift_cards_amount,'base_gift_cards_invoiced'=>$_base_gift_cards_invoiced,'gift_cards_invoiced'=>$_gift_cards_invoiced,'base_gift_cards_refunded'=>$_base_gift_cards_refunded,'gift_cards_refunded'=>$_gift_cards_refunded,'reward_points_balance'=>$_reward_points_balance,'base_reward_currency_amount'=>$_base_reward_currency_amount,'reward_currency_amount'=>$_reward_currency_amount,'base_reward_currency_amount_invoiced'=>$_base_reward_currency_amount_invoiced,'reward_currency_amount_invoiced'=>$_reward_currency_amount_invoiced,'base_reward_currency_amount_refunded'=>$_base_reward_currency_amount_refunded,'reward_currency_amount_refunded'=>$_reward_currency_amount_refunded,'reward_points_balance_refunded'=>$_reward_points_balance_refunded,'reward_points_balance_to_refund'=>$_reward_points_balance_to_refund,'reward_salesrule_points'=>$_reward_salesrule_points,'firstname'=>$_firstname,'lastname'=>$_lastname,'telephone'=>$_telephone,'postcode'=>$_postcode));
	}
	/**
	 * Get increment_id value
	 * @return MagentoStructString|null
	 */
	public function getIncrement_id()
	{
		return $this->increment_id;
	}
	/**
	 * Set increment_id value
	 * @param MagentoStructString $_increment_id the increment_id
	 * @return MagentoStructString
	 */
	public function setIncrement_id($_increment_id)
	{
		return ($this->increment_id = $_increment_id);
	}
	/**
	 * Get store_id value
	 * @return MagentoStructString|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructString $_store_id the store_id
	 * @return MagentoStructString
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
	}
	/**
	 * Get created_at value
	 * @return MagentoStructString|null
	 */
	public function getCreated_at()
	{
		return $this->created_at;
	}
	/**
	 * Set created_at value
	 * @param MagentoStructString $_created_at the created_at
	 * @return MagentoStructString
	 */
	public function setCreated_at($_created_at)
	{
		return ($this->created_at = $_created_at);
	}
	/**
	 * Get updated_at value
	 * @return MagentoStructString|null
	 */
	public function getUpdated_at()
	{
		return $this->updated_at;
	}
	/**
	 * Set updated_at value
	 * @param MagentoStructString $_updated_at the updated_at
	 * @return MagentoStructString
	 */
	public function setUpdated_at($_updated_at)
	{
		return ($this->updated_at = $_updated_at);
	}
	/**
	 * Get customer_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_id()
	{
		return $this->customer_id;
	}
	/**
	 * Set customer_id value
	 * @param MagentoStructString $_customer_id the customer_id
	 * @return MagentoStructString
	 */
	public function setCustomer_id($_customer_id)
	{
		return ($this->customer_id = $_customer_id);
	}
	/**
	 * Get tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getTax_amount()
	{
		return $this->tax_amount;
	}
	/**
	 * Set tax_amount value
	 * @param MagentoStructString $_tax_amount the tax_amount
	 * @return MagentoStructString
	 */
	public function setTax_amount($_tax_amount)
	{
		return ($this->tax_amount = $_tax_amount);
	}
	/**
	 * Get shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_amount()
	{
		return $this->shipping_amount;
	}
	/**
	 * Set shipping_amount value
	 * @param MagentoStructString $_shipping_amount the shipping_amount
	 * @return MagentoStructString
	 */
	public function setShipping_amount($_shipping_amount)
	{
		return ($this->shipping_amount = $_shipping_amount);
	}
	/**
	 * Get discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_amount()
	{
		return $this->discount_amount;
	}
	/**
	 * Set discount_amount value
	 * @param MagentoStructString $_discount_amount the discount_amount
	 * @return MagentoStructString
	 */
	public function setDiscount_amount($_discount_amount)
	{
		return ($this->discount_amount = $_discount_amount);
	}
	/**
	 * Get subtotal value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal()
	{
		return $this->subtotal;
	}
	/**
	 * Set subtotal value
	 * @param MagentoStructString $_subtotal the subtotal
	 * @return MagentoStructString
	 */
	public function setSubtotal($_subtotal)
	{
		return ($this->subtotal = $_subtotal);
	}
	/**
	 * Get grand_total value
	 * @return MagentoStructString|null
	 */
	public function getGrand_total()
	{
		return $this->grand_total;
	}
	/**
	 * Set grand_total value
	 * @param MagentoStructString $_grand_total the grand_total
	 * @return MagentoStructString
	 */
	public function setGrand_total($_grand_total)
	{
		return ($this->grand_total = $_grand_total);
	}
	/**
	 * Get total_paid value
	 * @return MagentoStructString|null
	 */
	public function getTotal_paid()
	{
		return $this->total_paid;
	}
	/**
	 * Set total_paid value
	 * @param MagentoStructString $_total_paid the total_paid
	 * @return MagentoStructString
	 */
	public function setTotal_paid($_total_paid)
	{
		return ($this->total_paid = $_total_paid);
	}
	/**
	 * Get total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_refunded()
	{
		return $this->total_refunded;
	}
	/**
	 * Set total_refunded value
	 * @param MagentoStructString $_total_refunded the total_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_refunded($_total_refunded)
	{
		return ($this->total_refunded = $_total_refunded);
	}
	/**
	 * Get total_qty_ordered value
	 * @return MagentoStructString|null
	 */
	public function getTotal_qty_ordered()
	{
		return $this->total_qty_ordered;
	}
	/**
	 * Set total_qty_ordered value
	 * @param MagentoStructString $_total_qty_ordered the total_qty_ordered
	 * @return MagentoStructString
	 */
	public function setTotal_qty_ordered($_total_qty_ordered)
	{
		return ($this->total_qty_ordered = $_total_qty_ordered);
	}
	/**
	 * Get total_canceled value
	 * @return MagentoStructString|null
	 */
	public function getTotal_canceled()
	{
		return $this->total_canceled;
	}
	/**
	 * Set total_canceled value
	 * @param MagentoStructString $_total_canceled the total_canceled
	 * @return MagentoStructString
	 */
	public function setTotal_canceled($_total_canceled)
	{
		return ($this->total_canceled = $_total_canceled);
	}
	/**
	 * Get total_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getTotal_invoiced()
	{
		return $this->total_invoiced;
	}
	/**
	 * Set total_invoiced value
	 * @param MagentoStructString $_total_invoiced the total_invoiced
	 * @return MagentoStructString
	 */
	public function setTotal_invoiced($_total_invoiced)
	{
		return ($this->total_invoiced = $_total_invoiced);
	}
	/**
	 * Get total_online_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_online_refunded()
	{
		return $this->total_online_refunded;
	}
	/**
	 * Set total_online_refunded value
	 * @param MagentoStructString $_total_online_refunded the total_online_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_online_refunded($_total_online_refunded)
	{
		return ($this->total_online_refunded = $_total_online_refunded);
	}
	/**
	 * Get total_offline_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTotal_offline_refunded()
	{
		return $this->total_offline_refunded;
	}
	/**
	 * Set total_offline_refunded value
	 * @param MagentoStructString $_total_offline_refunded the total_offline_refunded
	 * @return MagentoStructString
	 */
	public function setTotal_offline_refunded($_total_offline_refunded)
	{
		return ($this->total_offline_refunded = $_total_offline_refunded);
	}
	/**
	 * Get base_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_amount()
	{
		return $this->base_tax_amount;
	}
	/**
	 * Set base_tax_amount value
	 * @param MagentoStructString $_base_tax_amount the base_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_tax_amount($_base_tax_amount)
	{
		return ($this->base_tax_amount = $_base_tax_amount);
	}
	/**
	 * Get base_shipping_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_amount()
	{
		return $this->base_shipping_amount;
	}
	/**
	 * Set base_shipping_amount value
	 * @param MagentoStructString $_base_shipping_amount the base_shipping_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_amount($_base_shipping_amount)
	{
		return ($this->base_shipping_amount = $_base_shipping_amount);
	}
	/**
	 * Get base_discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_amount()
	{
		return $this->base_discount_amount;
	}
	/**
	 * Set base_discount_amount value
	 * @param MagentoStructString $_base_discount_amount the base_discount_amount
	 * @return MagentoStructString
	 */
	public function setBase_discount_amount($_base_discount_amount)
	{
		return ($this->base_discount_amount = $_base_discount_amount);
	}
	/**
	 * Get base_subtotal value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal()
	{
		return $this->base_subtotal;
	}
	/**
	 * Set base_subtotal value
	 * @param MagentoStructString $_base_subtotal the base_subtotal
	 * @return MagentoStructString
	 */
	public function setBase_subtotal($_base_subtotal)
	{
		return ($this->base_subtotal = $_base_subtotal);
	}
	/**
	 * Get base_grand_total value
	 * @return MagentoStructString|null
	 */
	public function getBase_grand_total()
	{
		return $this->base_grand_total;
	}
	/**
	 * Set base_grand_total value
	 * @param MagentoStructString $_base_grand_total the base_grand_total
	 * @return MagentoStructString
	 */
	public function setBase_grand_total($_base_grand_total)
	{
		return ($this->base_grand_total = $_base_grand_total);
	}
	/**
	 * Get base_total_paid value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_paid()
	{
		return $this->base_total_paid;
	}
	/**
	 * Set base_total_paid value
	 * @param MagentoStructString $_base_total_paid the base_total_paid
	 * @return MagentoStructString
	 */
	public function setBase_total_paid($_base_total_paid)
	{
		return ($this->base_total_paid = $_base_total_paid);
	}
	/**
	 * Get base_total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_refunded()
	{
		return $this->base_total_refunded;
	}
	/**
	 * Set base_total_refunded value
	 * @param MagentoStructString $_base_total_refunded the base_total_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_refunded($_base_total_refunded)
	{
		return ($this->base_total_refunded = $_base_total_refunded);
	}
	/**
	 * Get base_total_qty_ordered value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_qty_ordered()
	{
		return $this->base_total_qty_ordered;
	}
	/**
	 * Set base_total_qty_ordered value
	 * @param MagentoStructString $_base_total_qty_ordered the base_total_qty_ordered
	 * @return MagentoStructString
	 */
	public function setBase_total_qty_ordered($_base_total_qty_ordered)
	{
		return ($this->base_total_qty_ordered = $_base_total_qty_ordered);
	}
	/**
	 * Get base_total_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_canceled()
	{
		return $this->base_total_canceled;
	}
	/**
	 * Set base_total_canceled value
	 * @param MagentoStructString $_base_total_canceled the base_total_canceled
	 * @return MagentoStructString
	 */
	public function setBase_total_canceled($_base_total_canceled)
	{
		return ($this->base_total_canceled = $_base_total_canceled);
	}
	/**
	 * Get base_total_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_invoiced()
	{
		return $this->base_total_invoiced;
	}
	/**
	 * Set base_total_invoiced value
	 * @param MagentoStructString $_base_total_invoiced the base_total_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_total_invoiced($_base_total_invoiced)
	{
		return ($this->base_total_invoiced = $_base_total_invoiced);
	}
	/**
	 * Get base_total_online_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_online_refunded()
	{
		return $this->base_total_online_refunded;
	}
	/**
	 * Set base_total_online_refunded value
	 * @param MagentoStructString $_base_total_online_refunded the base_total_online_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_online_refunded($_base_total_online_refunded)
	{
		return ($this->base_total_online_refunded = $_base_total_online_refunded);
	}
	/**
	 * Get base_total_offline_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_offline_refunded()
	{
		return $this->base_total_offline_refunded;
	}
	/**
	 * Set base_total_offline_refunded value
	 * @param MagentoStructString $_base_total_offline_refunded the base_total_offline_refunded
	 * @return MagentoStructString
	 */
	public function setBase_total_offline_refunded($_base_total_offline_refunded)
	{
		return ($this->base_total_offline_refunded = $_base_total_offline_refunded);
	}
	/**
	 * Get billing_address_id value
	 * @return MagentoStructString|null
	 */
	public function getBilling_address_id()
	{
		return $this->billing_address_id;
	}
	/**
	 * Set billing_address_id value
	 * @param MagentoStructString $_billing_address_id the billing_address_id
	 * @return MagentoStructString
	 */
	public function setBilling_address_id($_billing_address_id)
	{
		return ($this->billing_address_id = $_billing_address_id);
	}
	/**
	 * Get billing_firstname value
	 * @return MagentoStructString|null
	 */
	public function getBilling_firstname()
	{
		return $this->billing_firstname;
	}
	/**
	 * Set billing_firstname value
	 * @param MagentoStructString $_billing_firstname the billing_firstname
	 * @return MagentoStructString
	 */
	public function setBilling_firstname($_billing_firstname)
	{
		return ($this->billing_firstname = $_billing_firstname);
	}
	/**
	 * Get billing_lastname value
	 * @return MagentoStructString|null
	 */
	public function getBilling_lastname()
	{
		return $this->billing_lastname;
	}
	/**
	 * Set billing_lastname value
	 * @param MagentoStructString $_billing_lastname the billing_lastname
	 * @return MagentoStructString
	 */
	public function setBilling_lastname($_billing_lastname)
	{
		return ($this->billing_lastname = $_billing_lastname);
	}
	/**
	 * Get shipping_address_id value
	 * @return MagentoStructString|null
	 */
	public function getShipping_address_id()
	{
		return $this->shipping_address_id;
	}
	/**
	 * Set shipping_address_id value
	 * @param MagentoStructString $_shipping_address_id the shipping_address_id
	 * @return MagentoStructString
	 */
	public function setShipping_address_id($_shipping_address_id)
	{
		return ($this->shipping_address_id = $_shipping_address_id);
	}
	/**
	 * Get shipping_firstname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_firstname()
	{
		return $this->shipping_firstname;
	}
	/**
	 * Set shipping_firstname value
	 * @param MagentoStructString $_shipping_firstname the shipping_firstname
	 * @return MagentoStructString
	 */
	public function setShipping_firstname($_shipping_firstname)
	{
		return ($this->shipping_firstname = $_shipping_firstname);
	}
	/**
	 * Get shipping_lastname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_lastname()
	{
		return $this->shipping_lastname;
	}
	/**
	 * Set shipping_lastname value
	 * @param MagentoStructString $_shipping_lastname the shipping_lastname
	 * @return MagentoStructString
	 */
	public function setShipping_lastname($_shipping_lastname)
	{
		return ($this->shipping_lastname = $_shipping_lastname);
	}
	/**
	 * Get billing_name value
	 * @return MagentoStructString|null
	 */
	public function getBilling_name()
	{
		return $this->billing_name;
	}
	/**
	 * Set billing_name value
	 * @param MagentoStructString $_billing_name the billing_name
	 * @return MagentoStructString
	 */
	public function setBilling_name($_billing_name)
	{
		return ($this->billing_name = $_billing_name);
	}
	/**
	 * Get shipping_name value
	 * @return MagentoStructString|null
	 */
	public function getShipping_name()
	{
		return $this->shipping_name;
	}
	/**
	 * Set shipping_name value
	 * @param MagentoStructString $_shipping_name the shipping_name
	 * @return MagentoStructString
	 */
	public function setShipping_name($_shipping_name)
	{
		return ($this->shipping_name = $_shipping_name);
	}
	/**
	 * Get store_to_base_rate value
	 * @return MagentoStructString|null
	 */
	public function getStore_to_base_rate()
	{
		return $this->store_to_base_rate;
	}
	/**
	 * Set store_to_base_rate value
	 * @param MagentoStructString $_store_to_base_rate the store_to_base_rate
	 * @return MagentoStructString
	 */
	public function setStore_to_base_rate($_store_to_base_rate)
	{
		return ($this->store_to_base_rate = $_store_to_base_rate);
	}
	/**
	 * Get store_to_order_rate value
	 * @return MagentoStructString|null
	 */
	public function getStore_to_order_rate()
	{
		return $this->store_to_order_rate;
	}
	/**
	 * Set store_to_order_rate value
	 * @param MagentoStructString $_store_to_order_rate the store_to_order_rate
	 * @return MagentoStructString
	 */
	public function setStore_to_order_rate($_store_to_order_rate)
	{
		return ($this->store_to_order_rate = $_store_to_order_rate);
	}
	/**
	 * Get base_to_global_rate value
	 * @return MagentoStructString|null
	 */
	public function getBase_to_global_rate()
	{
		return $this->base_to_global_rate;
	}
	/**
	 * Set base_to_global_rate value
	 * @param MagentoStructString $_base_to_global_rate the base_to_global_rate
	 * @return MagentoStructString
	 */
	public function setBase_to_global_rate($_base_to_global_rate)
	{
		return ($this->base_to_global_rate = $_base_to_global_rate);
	}
	/**
	 * Get base_to_order_rate value
	 * @return MagentoStructString|null
	 */
	public function getBase_to_order_rate()
	{
		return $this->base_to_order_rate;
	}
	/**
	 * Set base_to_order_rate value
	 * @param MagentoStructString $_base_to_order_rate the base_to_order_rate
	 * @return MagentoStructString
	 */
	public function setBase_to_order_rate($_base_to_order_rate)
	{
		return ($this->base_to_order_rate = $_base_to_order_rate);
	}
	/**
	 * Get weight value
	 * @return MagentoStructString|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param MagentoStructString $_weight the weight
	 * @return MagentoStructString
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Get store_name value
	 * @return MagentoStructString|null
	 */
	public function getStore_name()
	{
		return $this->store_name;
	}
	/**
	 * Set store_name value
	 * @param MagentoStructString $_store_name the store_name
	 * @return MagentoStructString
	 */
	public function setStore_name($_store_name)
	{
		return ($this->store_name = $_store_name);
	}
	/**
	 * Get remote_ip value
	 * @return MagentoStructString|null
	 */
	public function getRemote_ip()
	{
		return $this->remote_ip;
	}
	/**
	 * Set remote_ip value
	 * @param MagentoStructString $_remote_ip the remote_ip
	 * @return MagentoStructString
	 */
	public function setRemote_ip($_remote_ip)
	{
		return ($this->remote_ip = $_remote_ip);
	}
	/**
	 * Get status value
	 * @return MagentoStructString|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param MagentoStructString $_status the status
	 * @return MagentoStructString
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get state value
	 * @return MagentoStructString|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param MagentoStructString $_state the state
	 * @return MagentoStructString
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get applied_rule_ids value
	 * @return MagentoStructString|null
	 */
	public function getApplied_rule_ids()
	{
		return $this->applied_rule_ids;
	}
	/**
	 * Set applied_rule_ids value
	 * @param MagentoStructString $_applied_rule_ids the applied_rule_ids
	 * @return MagentoStructString
	 */
	public function setApplied_rule_ids($_applied_rule_ids)
	{
		return ($this->applied_rule_ids = $_applied_rule_ids);
	}
	/**
	 * Get global_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getGlobal_currency_code()
	{
		return $this->global_currency_code;
	}
	/**
	 * Set global_currency_code value
	 * @param MagentoStructString $_global_currency_code the global_currency_code
	 * @return MagentoStructString
	 */
	public function setGlobal_currency_code($_global_currency_code)
	{
		return ($this->global_currency_code = $_global_currency_code);
	}
	/**
	 * Get base_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getBase_currency_code()
	{
		return $this->base_currency_code;
	}
	/**
	 * Set base_currency_code value
	 * @param MagentoStructString $_base_currency_code the base_currency_code
	 * @return MagentoStructString
	 */
	public function setBase_currency_code($_base_currency_code)
	{
		return ($this->base_currency_code = $_base_currency_code);
	}
	/**
	 * Get store_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getStore_currency_code()
	{
		return $this->store_currency_code;
	}
	/**
	 * Set store_currency_code value
	 * @param MagentoStructString $_store_currency_code the store_currency_code
	 * @return MagentoStructString
	 */
	public function setStore_currency_code($_store_currency_code)
	{
		return ($this->store_currency_code = $_store_currency_code);
	}
	/**
	 * Get order_currency_code value
	 * @return MagentoStructString|null
	 */
	public function getOrder_currency_code()
	{
		return $this->order_currency_code;
	}
	/**
	 * Set order_currency_code value
	 * @param MagentoStructString $_order_currency_code the order_currency_code
	 * @return MagentoStructString
	 */
	public function setOrder_currency_code($_order_currency_code)
	{
		return ($this->order_currency_code = $_order_currency_code);
	}
	/**
	 * Get shipping_method value
	 * @return MagentoStructString|null
	 */
	public function getShipping_method()
	{
		return $this->shipping_method;
	}
	/**
	 * Set shipping_method value
	 * @param MagentoStructString $_shipping_method the shipping_method
	 * @return MagentoStructString
	 */
	public function setShipping_method($_shipping_method)
	{
		return ($this->shipping_method = $_shipping_method);
	}
	/**
	 * Get shipping_description value
	 * @return MagentoStructString|null
	 */
	public function getShipping_description()
	{
		return $this->shipping_description;
	}
	/**
	 * Set shipping_description value
	 * @param MagentoStructString $_shipping_description the shipping_description
	 * @return MagentoStructString
	 */
	public function setShipping_description($_shipping_description)
	{
		return ($this->shipping_description = $_shipping_description);
	}
	/**
	 * Get customer_email value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_email()
	{
		return $this->customer_email;
	}
	/**
	 * Set customer_email value
	 * @param MagentoStructString $_customer_email the customer_email
	 * @return MagentoStructString
	 */
	public function setCustomer_email($_customer_email)
	{
		return ($this->customer_email = $_customer_email);
	}
	/**
	 * Get customer_firstname value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_firstname()
	{
		return $this->customer_firstname;
	}
	/**
	 * Set customer_firstname value
	 * @param MagentoStructString $_customer_firstname the customer_firstname
	 * @return MagentoStructString
	 */
	public function setCustomer_firstname($_customer_firstname)
	{
		return ($this->customer_firstname = $_customer_firstname);
	}
	/**
	 * Get customer_lastname value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_lastname()
	{
		return $this->customer_lastname;
	}
	/**
	 * Set customer_lastname value
	 * @param MagentoStructString $_customer_lastname the customer_lastname
	 * @return MagentoStructString
	 */
	public function setCustomer_lastname($_customer_lastname)
	{
		return ($this->customer_lastname = $_customer_lastname);
	}
	/**
	 * Get quote_id value
	 * @return MagentoStructString|null
	 */
	public function getQuote_id()
	{
		return $this->quote_id;
	}
	/**
	 * Set quote_id value
	 * @param MagentoStructString $_quote_id the quote_id
	 * @return MagentoStructString
	 */
	public function setQuote_id($_quote_id)
	{
		return ($this->quote_id = $_quote_id);
	}
	/**
	 * Get is_virtual value
	 * @return MagentoStructString|null
	 */
	public function getIs_virtual()
	{
		return $this->is_virtual;
	}
	/**
	 * Set is_virtual value
	 * @param MagentoStructString $_is_virtual the is_virtual
	 * @return MagentoStructString
	 */
	public function setIs_virtual($_is_virtual)
	{
		return ($this->is_virtual = $_is_virtual);
	}
	/**
	 * Get customer_group_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_group_id()
	{
		return $this->customer_group_id;
	}
	/**
	 * Set customer_group_id value
	 * @param MagentoStructString $_customer_group_id the customer_group_id
	 * @return MagentoStructString
	 */
	public function setCustomer_group_id($_customer_group_id)
	{
		return ($this->customer_group_id = $_customer_group_id);
	}
	/**
	 * Get customer_note_notify value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_note_notify()
	{
		return $this->customer_note_notify;
	}
	/**
	 * Set customer_note_notify value
	 * @param MagentoStructString $_customer_note_notify the customer_note_notify
	 * @return MagentoStructString
	 */
	public function setCustomer_note_notify($_customer_note_notify)
	{
		return ($this->customer_note_notify = $_customer_note_notify);
	}
	/**
	 * Get customer_is_guest value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_is_guest()
	{
		return $this->customer_is_guest;
	}
	/**
	 * Set customer_is_guest value
	 * @param MagentoStructString $_customer_is_guest the customer_is_guest
	 * @return MagentoStructString
	 */
	public function setCustomer_is_guest($_customer_is_guest)
	{
		return ($this->customer_is_guest = $_customer_is_guest);
	}
	/**
	 * Get email_sent value
	 * @return MagentoStructString|null
	 */
	public function getEmail_sent()
	{
		return $this->email_sent;
	}
	/**
	 * Set email_sent value
	 * @param MagentoStructString $_email_sent the email_sent
	 * @return MagentoStructString
	 */
	public function setEmail_sent($_email_sent)
	{
		return ($this->email_sent = $_email_sent);
	}
	/**
	 * Get order_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_id()
	{
		return $this->order_id;
	}
	/**
	 * Set order_id value
	 * @param MagentoStructString $_order_id the order_id
	 * @return MagentoStructString
	 */
	public function setOrder_id($_order_id)
	{
		return ($this->order_id = $_order_id);
	}
	/**
	 * Get gift_message_id value
	 * @return MagentoStructString|null
	 */
	public function getGift_message_id()
	{
		return $this->gift_message_id;
	}
	/**
	 * Set gift_message_id value
	 * @param MagentoStructString $_gift_message_id the gift_message_id
	 * @return MagentoStructString
	 */
	public function setGift_message_id($_gift_message_id)
	{
		return ($this->gift_message_id = $_gift_message_id);
	}
	/**
	 * Get coupon_code value
	 * @return MagentoStructString|null
	 */
	public function getCoupon_code()
	{
		return $this->coupon_code;
	}
	/**
	 * Set coupon_code value
	 * @param MagentoStructString $_coupon_code the coupon_code
	 * @return MagentoStructString
	 */
	public function setCoupon_code($_coupon_code)
	{
		return ($this->coupon_code = $_coupon_code);
	}
	/**
	 * Get protect_code value
	 * @return MagentoStructString|null
	 */
	public function getProtect_code()
	{
		return $this->protect_code;
	}
	/**
	 * Set protect_code value
	 * @param MagentoStructString $_protect_code the protect_code
	 * @return MagentoStructString
	 */
	public function setProtect_code($_protect_code)
	{
		return ($this->protect_code = $_protect_code);
	}
	/**
	 * Get base_discount_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_canceled()
	{
		return $this->base_discount_canceled;
	}
	/**
	 * Set base_discount_canceled value
	 * @param MagentoStructString $_base_discount_canceled the base_discount_canceled
	 * @return MagentoStructString
	 */
	public function setBase_discount_canceled($_base_discount_canceled)
	{
		return ($this->base_discount_canceled = $_base_discount_canceled);
	}
	/**
	 * Get base_discount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_invoiced()
	{
		return $this->base_discount_invoiced;
	}
	/**
	 * Set base_discount_invoiced value
	 * @param MagentoStructString $_base_discount_invoiced the base_discount_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_discount_invoiced($_base_discount_invoiced)
	{
		return ($this->base_discount_invoiced = $_base_discount_invoiced);
	}
	/**
	 * Get base_discount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_discount_refunded()
	{
		return $this->base_discount_refunded;
	}
	/**
	 * Set base_discount_refunded value
	 * @param MagentoStructString $_base_discount_refunded the base_discount_refunded
	 * @return MagentoStructString
	 */
	public function setBase_discount_refunded($_base_discount_refunded)
	{
		return ($this->base_discount_refunded = $_base_discount_refunded);
	}
	/**
	 * Get base_shipping_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_canceled()
	{
		return $this->base_shipping_canceled;
	}
	/**
	 * Set base_shipping_canceled value
	 * @param MagentoStructString $_base_shipping_canceled the base_shipping_canceled
	 * @return MagentoStructString
	 */
	public function setBase_shipping_canceled($_base_shipping_canceled)
	{
		return ($this->base_shipping_canceled = $_base_shipping_canceled);
	}
	/**
	 * Get base_shipping_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_invoiced()
	{
		return $this->base_shipping_invoiced;
	}
	/**
	 * Set base_shipping_invoiced value
	 * @param MagentoStructString $_base_shipping_invoiced the base_shipping_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_shipping_invoiced($_base_shipping_invoiced)
	{
		return ($this->base_shipping_invoiced = $_base_shipping_invoiced);
	}
	/**
	 * Get base_shipping_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_refunded()
	{
		return $this->base_shipping_refunded;
	}
	/**
	 * Set base_shipping_refunded value
	 * @param MagentoStructString $_base_shipping_refunded the base_shipping_refunded
	 * @return MagentoStructString
	 */
	public function setBase_shipping_refunded($_base_shipping_refunded)
	{
		return ($this->base_shipping_refunded = $_base_shipping_refunded);
	}
	/**
	 * Get base_shipping_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_tax_amount()
	{
		return $this->base_shipping_tax_amount;
	}
	/**
	 * Set base_shipping_tax_amount value
	 * @param MagentoStructString $_base_shipping_tax_amount the base_shipping_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_tax_amount($_base_shipping_tax_amount)
	{
		return ($this->base_shipping_tax_amount = $_base_shipping_tax_amount);
	}
	/**
	 * Get base_shipping_tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_tax_refunded()
	{
		return $this->base_shipping_tax_refunded;
	}
	/**
	 * Set base_shipping_tax_refunded value
	 * @param MagentoStructString $_base_shipping_tax_refunded the base_shipping_tax_refunded
	 * @return MagentoStructString
	 */
	public function setBase_shipping_tax_refunded($_base_shipping_tax_refunded)
	{
		return ($this->base_shipping_tax_refunded = $_base_shipping_tax_refunded);
	}
	/**
	 * Get base_subtotal_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal_canceled()
	{
		return $this->base_subtotal_canceled;
	}
	/**
	 * Set base_subtotal_canceled value
	 * @param MagentoStructString $_base_subtotal_canceled the base_subtotal_canceled
	 * @return MagentoStructString
	 */
	public function setBase_subtotal_canceled($_base_subtotal_canceled)
	{
		return ($this->base_subtotal_canceled = $_base_subtotal_canceled);
	}
	/**
	 * Get base_subtotal_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal_invoiced()
	{
		return $this->base_subtotal_invoiced;
	}
	/**
	 * Set base_subtotal_invoiced value
	 * @param MagentoStructString $_base_subtotal_invoiced the base_subtotal_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_subtotal_invoiced($_base_subtotal_invoiced)
	{
		return ($this->base_subtotal_invoiced = $_base_subtotal_invoiced);
	}
	/**
	 * Get base_subtotal_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal_refunded()
	{
		return $this->base_subtotal_refunded;
	}
	/**
	 * Set base_subtotal_refunded value
	 * @param MagentoStructString $_base_subtotal_refunded the base_subtotal_refunded
	 * @return MagentoStructString
	 */
	public function setBase_subtotal_refunded($_base_subtotal_refunded)
	{
		return ($this->base_subtotal_refunded = $_base_subtotal_refunded);
	}
	/**
	 * Get base_tax_canceled value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_canceled()
	{
		return $this->base_tax_canceled;
	}
	/**
	 * Set base_tax_canceled value
	 * @param MagentoStructString $_base_tax_canceled the base_tax_canceled
	 * @return MagentoStructString
	 */
	public function setBase_tax_canceled($_base_tax_canceled)
	{
		return ($this->base_tax_canceled = $_base_tax_canceled);
	}
	/**
	 * Get base_tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_invoiced()
	{
		return $this->base_tax_invoiced;
	}
	/**
	 * Set base_tax_invoiced value
	 * @param MagentoStructString $_base_tax_invoiced the base_tax_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_tax_invoiced($_base_tax_invoiced)
	{
		return ($this->base_tax_invoiced = $_base_tax_invoiced);
	}
	/**
	 * Get base_tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_tax_refunded()
	{
		return $this->base_tax_refunded;
	}
	/**
	 * Set base_tax_refunded value
	 * @param MagentoStructString $_base_tax_refunded the base_tax_refunded
	 * @return MagentoStructString
	 */
	public function setBase_tax_refunded($_base_tax_refunded)
	{
		return ($this->base_tax_refunded = $_base_tax_refunded);
	}
	/**
	 * Get base_total_invoiced_cost value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_invoiced_cost()
	{
		return $this->base_total_invoiced_cost;
	}
	/**
	 * Set base_total_invoiced_cost value
	 * @param MagentoStructString $_base_total_invoiced_cost the base_total_invoiced_cost
	 * @return MagentoStructString
	 */
	public function setBase_total_invoiced_cost($_base_total_invoiced_cost)
	{
		return ($this->base_total_invoiced_cost = $_base_total_invoiced_cost);
	}
	/**
	 * Get discount_canceled value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_canceled()
	{
		return $this->discount_canceled;
	}
	/**
	 * Set discount_canceled value
	 * @param MagentoStructString $_discount_canceled the discount_canceled
	 * @return MagentoStructString
	 */
	public function setDiscount_canceled($_discount_canceled)
	{
		return ($this->discount_canceled = $_discount_canceled);
	}
	/**
	 * Get discount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_invoiced()
	{
		return $this->discount_invoiced;
	}
	/**
	 * Set discount_invoiced value
	 * @param MagentoStructString $_discount_invoiced the discount_invoiced
	 * @return MagentoStructString
	 */
	public function setDiscount_invoiced($_discount_invoiced)
	{
		return ($this->discount_invoiced = $_discount_invoiced);
	}
	/**
	 * Get discount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_refunded()
	{
		return $this->discount_refunded;
	}
	/**
	 * Set discount_refunded value
	 * @param MagentoStructString $_discount_refunded the discount_refunded
	 * @return MagentoStructString
	 */
	public function setDiscount_refunded($_discount_refunded)
	{
		return ($this->discount_refunded = $_discount_refunded);
	}
	/**
	 * Get shipping_canceled value
	 * @return MagentoStructString|null
	 */
	public function getShipping_canceled()
	{
		return $this->shipping_canceled;
	}
	/**
	 * Set shipping_canceled value
	 * @param MagentoStructString $_shipping_canceled the shipping_canceled
	 * @return MagentoStructString
	 */
	public function setShipping_canceled($_shipping_canceled)
	{
		return ($this->shipping_canceled = $_shipping_canceled);
	}
	/**
	 * Get shipping_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getShipping_invoiced()
	{
		return $this->shipping_invoiced;
	}
	/**
	 * Set shipping_invoiced value
	 * @param MagentoStructString $_shipping_invoiced the shipping_invoiced
	 * @return MagentoStructString
	 */
	public function setShipping_invoiced($_shipping_invoiced)
	{
		return ($this->shipping_invoiced = $_shipping_invoiced);
	}
	/**
	 * Get shipping_refunded value
	 * @return MagentoStructString|null
	 */
	public function getShipping_refunded()
	{
		return $this->shipping_refunded;
	}
	/**
	 * Set shipping_refunded value
	 * @param MagentoStructString $_shipping_refunded the shipping_refunded
	 * @return MagentoStructString
	 */
	public function setShipping_refunded($_shipping_refunded)
	{
		return ($this->shipping_refunded = $_shipping_refunded);
	}
	/**
	 * Get shipping_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_tax_amount()
	{
		return $this->shipping_tax_amount;
	}
	/**
	 * Set shipping_tax_amount value
	 * @param MagentoStructString $_shipping_tax_amount the shipping_tax_amount
	 * @return MagentoStructString
	 */
	public function setShipping_tax_amount($_shipping_tax_amount)
	{
		return ($this->shipping_tax_amount = $_shipping_tax_amount);
	}
	/**
	 * Get shipping_tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getShipping_tax_refunded()
	{
		return $this->shipping_tax_refunded;
	}
	/**
	 * Set shipping_tax_refunded value
	 * @param MagentoStructString $_shipping_tax_refunded the shipping_tax_refunded
	 * @return MagentoStructString
	 */
	public function setShipping_tax_refunded($_shipping_tax_refunded)
	{
		return ($this->shipping_tax_refunded = $_shipping_tax_refunded);
	}
	/**
	 * Get subtotal_canceled value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal_canceled()
	{
		return $this->subtotal_canceled;
	}
	/**
	 * Set subtotal_canceled value
	 * @param MagentoStructString $_subtotal_canceled the subtotal_canceled
	 * @return MagentoStructString
	 */
	public function setSubtotal_canceled($_subtotal_canceled)
	{
		return ($this->subtotal_canceled = $_subtotal_canceled);
	}
	/**
	 * Get subtotal_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal_invoiced()
	{
		return $this->subtotal_invoiced;
	}
	/**
	 * Set subtotal_invoiced value
	 * @param MagentoStructString $_subtotal_invoiced the subtotal_invoiced
	 * @return MagentoStructString
	 */
	public function setSubtotal_invoiced($_subtotal_invoiced)
	{
		return ($this->subtotal_invoiced = $_subtotal_invoiced);
	}
	/**
	 * Get subtotal_refunded value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal_refunded()
	{
		return $this->subtotal_refunded;
	}
	/**
	 * Set subtotal_refunded value
	 * @param MagentoStructString $_subtotal_refunded the subtotal_refunded
	 * @return MagentoStructString
	 */
	public function setSubtotal_refunded($_subtotal_refunded)
	{
		return ($this->subtotal_refunded = $_subtotal_refunded);
	}
	/**
	 * Get tax_canceled value
	 * @return MagentoStructString|null
	 */
	public function getTax_canceled()
	{
		return $this->tax_canceled;
	}
	/**
	 * Set tax_canceled value
	 * @param MagentoStructString $_tax_canceled the tax_canceled
	 * @return MagentoStructString
	 */
	public function setTax_canceled($_tax_canceled)
	{
		return ($this->tax_canceled = $_tax_canceled);
	}
	/**
	 * Get tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getTax_invoiced()
	{
		return $this->tax_invoiced;
	}
	/**
	 * Set tax_invoiced value
	 * @param MagentoStructString $_tax_invoiced the tax_invoiced
	 * @return MagentoStructString
	 */
	public function setTax_invoiced($_tax_invoiced)
	{
		return ($this->tax_invoiced = $_tax_invoiced);
	}
	/**
	 * Get tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getTax_refunded()
	{
		return $this->tax_refunded;
	}
	/**
	 * Set tax_refunded value
	 * @param MagentoStructString $_tax_refunded the tax_refunded
	 * @return MagentoStructString
	 */
	public function setTax_refunded($_tax_refunded)
	{
		return ($this->tax_refunded = $_tax_refunded);
	}
	/**
	 * Get can_ship_partially value
	 * @return MagentoStructString|null
	 */
	public function getCan_ship_partially()
	{
		return $this->can_ship_partially;
	}
	/**
	 * Set can_ship_partially value
	 * @param MagentoStructString $_can_ship_partially the can_ship_partially
	 * @return MagentoStructString
	 */
	public function setCan_ship_partially($_can_ship_partially)
	{
		return ($this->can_ship_partially = $_can_ship_partially);
	}
	/**
	 * Get can_ship_partially_item value
	 * @return MagentoStructString|null
	 */
	public function getCan_ship_partially_item()
	{
		return $this->can_ship_partially_item;
	}
	/**
	 * Set can_ship_partially_item value
	 * @param MagentoStructString $_can_ship_partially_item the can_ship_partially_item
	 * @return MagentoStructString
	 */
	public function setCan_ship_partially_item($_can_ship_partially_item)
	{
		return ($this->can_ship_partially_item = $_can_ship_partially_item);
	}
	/**
	 * Get edit_increment value
	 * @return MagentoStructString|null
	 */
	public function getEdit_increment()
	{
		return $this->edit_increment;
	}
	/**
	 * Set edit_increment value
	 * @param MagentoStructString $_edit_increment the edit_increment
	 * @return MagentoStructString
	 */
	public function setEdit_increment($_edit_increment)
	{
		return ($this->edit_increment = $_edit_increment);
	}
	/**
	 * Get forced_do_shipment_with_invoice value
	 * @return MagentoStructString|null
	 */
	public function getForced_do_shipment_with_invoice()
	{
		return $this->forced_do_shipment_with_invoice;
	}
	/**
	 * Set forced_do_shipment_with_invoice value
	 * @param MagentoStructString $_forced_do_shipment_with_invoice the forced_do_shipment_with_invoice
	 * @return MagentoStructString
	 */
	public function setForced_do_shipment_with_invoice($_forced_do_shipment_with_invoice)
	{
		return ($this->forced_do_shipment_with_invoice = $_forced_do_shipment_with_invoice);
	}
	/**
	 * Get payment_authorization_expiration value
	 * @return MagentoStructString|null
	 */
	public function getPayment_authorization_expiration()
	{
		return $this->payment_authorization_expiration;
	}
	/**
	 * Set payment_authorization_expiration value
	 * @param MagentoStructString $_payment_authorization_expiration the payment_authorization_expiration
	 * @return MagentoStructString
	 */
	public function setPayment_authorization_expiration($_payment_authorization_expiration)
	{
		return ($this->payment_authorization_expiration = $_payment_authorization_expiration);
	}
	/**
	 * Get paypal_ipn_customer_notified value
	 * @return MagentoStructString|null
	 */
	public function getPaypal_ipn_customer_notified()
	{
		return $this->paypal_ipn_customer_notified;
	}
	/**
	 * Set paypal_ipn_customer_notified value
	 * @param MagentoStructString $_paypal_ipn_customer_notified the paypal_ipn_customer_notified
	 * @return MagentoStructString
	 */
	public function setPaypal_ipn_customer_notified($_paypal_ipn_customer_notified)
	{
		return ($this->paypal_ipn_customer_notified = $_paypal_ipn_customer_notified);
	}
	/**
	 * Get quote_address_id value
	 * @return MagentoStructString|null
	 */
	public function getQuote_address_id()
	{
		return $this->quote_address_id;
	}
	/**
	 * Set quote_address_id value
	 * @param MagentoStructString $_quote_address_id the quote_address_id
	 * @return MagentoStructString
	 */
	public function setQuote_address_id($_quote_address_id)
	{
		return ($this->quote_address_id = $_quote_address_id);
	}
	/**
	 * Get adjustment_negative value
	 * @return MagentoStructString|null
	 */
	public function getAdjustment_negative()
	{
		return $this->adjustment_negative;
	}
	/**
	 * Set adjustment_negative value
	 * @param MagentoStructString $_adjustment_negative the adjustment_negative
	 * @return MagentoStructString
	 */
	public function setAdjustment_negative($_adjustment_negative)
	{
		return ($this->adjustment_negative = $_adjustment_negative);
	}
	/**
	 * Get adjustment_positive value
	 * @return MagentoStructString|null
	 */
	public function getAdjustment_positive()
	{
		return $this->adjustment_positive;
	}
	/**
	 * Set adjustment_positive value
	 * @param MagentoStructString $_adjustment_positive the adjustment_positive
	 * @return MagentoStructString
	 */
	public function setAdjustment_positive($_adjustment_positive)
	{
		return ($this->adjustment_positive = $_adjustment_positive);
	}
	/**
	 * Get base_adjustment_negative value
	 * @return MagentoStructString|null
	 */
	public function getBase_adjustment_negative()
	{
		return $this->base_adjustment_negative;
	}
	/**
	 * Set base_adjustment_negative value
	 * @param MagentoStructString $_base_adjustment_negative the base_adjustment_negative
	 * @return MagentoStructString
	 */
	public function setBase_adjustment_negative($_base_adjustment_negative)
	{
		return ($this->base_adjustment_negative = $_base_adjustment_negative);
	}
	/**
	 * Get base_adjustment_positive value
	 * @return MagentoStructString|null
	 */
	public function getBase_adjustment_positive()
	{
		return $this->base_adjustment_positive;
	}
	/**
	 * Set base_adjustment_positive value
	 * @param MagentoStructString $_base_adjustment_positive the base_adjustment_positive
	 * @return MagentoStructString
	 */
	public function setBase_adjustment_positive($_base_adjustment_positive)
	{
		return ($this->base_adjustment_positive = $_base_adjustment_positive);
	}
	/**
	 * Get base_shipping_discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_discount_amount()
	{
		return $this->base_shipping_discount_amount;
	}
	/**
	 * Set base_shipping_discount_amount value
	 * @param MagentoStructString $_base_shipping_discount_amount the base_shipping_discount_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_discount_amount($_base_shipping_discount_amount)
	{
		return ($this->base_shipping_discount_amount = $_base_shipping_discount_amount);
	}
	/**
	 * Get base_subtotal_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getBase_subtotal_incl_tax()
	{
		return $this->base_subtotal_incl_tax;
	}
	/**
	 * Set base_subtotal_incl_tax value
	 * @param MagentoStructString $_base_subtotal_incl_tax the base_subtotal_incl_tax
	 * @return MagentoStructString
	 */
	public function setBase_subtotal_incl_tax($_base_subtotal_incl_tax)
	{
		return ($this->base_subtotal_incl_tax = $_base_subtotal_incl_tax);
	}
	/**
	 * Get base_total_due value
	 * @return MagentoStructString|null
	 */
	public function getBase_total_due()
	{
		return $this->base_total_due;
	}
	/**
	 * Set base_total_due value
	 * @param MagentoStructString $_base_total_due the base_total_due
	 * @return MagentoStructString
	 */
	public function setBase_total_due($_base_total_due)
	{
		return ($this->base_total_due = $_base_total_due);
	}
	/**
	 * Get payment_authorization_amount value
	 * @return MagentoStructString|null
	 */
	public function getPayment_authorization_amount()
	{
		return $this->payment_authorization_amount;
	}
	/**
	 * Set payment_authorization_amount value
	 * @param MagentoStructString $_payment_authorization_amount the payment_authorization_amount
	 * @return MagentoStructString
	 */
	public function setPayment_authorization_amount($_payment_authorization_amount)
	{
		return ($this->payment_authorization_amount = $_payment_authorization_amount);
	}
	/**
	 * Get shipping_discount_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_discount_amount()
	{
		return $this->shipping_discount_amount;
	}
	/**
	 * Set shipping_discount_amount value
	 * @param MagentoStructString $_shipping_discount_amount the shipping_discount_amount
	 * @return MagentoStructString
	 */
	public function setShipping_discount_amount($_shipping_discount_amount)
	{
		return ($this->shipping_discount_amount = $_shipping_discount_amount);
	}
	/**
	 * Get subtotal_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getSubtotal_incl_tax()
	{
		return $this->subtotal_incl_tax;
	}
	/**
	 * Set subtotal_incl_tax value
	 * @param MagentoStructString $_subtotal_incl_tax the subtotal_incl_tax
	 * @return MagentoStructString
	 */
	public function setSubtotal_incl_tax($_subtotal_incl_tax)
	{
		return ($this->subtotal_incl_tax = $_subtotal_incl_tax);
	}
	/**
	 * Get total_due value
	 * @return MagentoStructString|null
	 */
	public function getTotal_due()
	{
		return $this->total_due;
	}
	/**
	 * Set total_due value
	 * @param MagentoStructString $_total_due the total_due
	 * @return MagentoStructString
	 */
	public function setTotal_due($_total_due)
	{
		return ($this->total_due = $_total_due);
	}
	/**
	 * Get customer_dob value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_dob()
	{
		return $this->customer_dob;
	}
	/**
	 * Set customer_dob value
	 * @param MagentoStructString $_customer_dob the customer_dob
	 * @return MagentoStructString
	 */
	public function setCustomer_dob($_customer_dob)
	{
		return ($this->customer_dob = $_customer_dob);
	}
	/**
	 * Get customer_middlename value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_middlename()
	{
		return $this->customer_middlename;
	}
	/**
	 * Set customer_middlename value
	 * @param MagentoStructString $_customer_middlename the customer_middlename
	 * @return MagentoStructString
	 */
	public function setCustomer_middlename($_customer_middlename)
	{
		return ($this->customer_middlename = $_customer_middlename);
	}
	/**
	 * Get customer_prefix value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_prefix()
	{
		return $this->customer_prefix;
	}
	/**
	 * Set customer_prefix value
	 * @param MagentoStructString $_customer_prefix the customer_prefix
	 * @return MagentoStructString
	 */
	public function setCustomer_prefix($_customer_prefix)
	{
		return ($this->customer_prefix = $_customer_prefix);
	}
	/**
	 * Get customer_suffix value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_suffix()
	{
		return $this->customer_suffix;
	}
	/**
	 * Set customer_suffix value
	 * @param MagentoStructString $_customer_suffix the customer_suffix
	 * @return MagentoStructString
	 */
	public function setCustomer_suffix($_customer_suffix)
	{
		return ($this->customer_suffix = $_customer_suffix);
	}
	/**
	 * Get customer_taxvat value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_taxvat()
	{
		return $this->customer_taxvat;
	}
	/**
	 * Set customer_taxvat value
	 * @param MagentoStructString $_customer_taxvat the customer_taxvat
	 * @return MagentoStructString
	 */
	public function setCustomer_taxvat($_customer_taxvat)
	{
		return ($this->customer_taxvat = $_customer_taxvat);
	}
	/**
	 * Get discount_description value
	 * @return MagentoStructString|null
	 */
	public function getDiscount_description()
	{
		return $this->discount_description;
	}
	/**
	 * Set discount_description value
	 * @param MagentoStructString $_discount_description the discount_description
	 * @return MagentoStructString
	 */
	public function setDiscount_description($_discount_description)
	{
		return ($this->discount_description = $_discount_description);
	}
	/**
	 * Get ext_customer_id value
	 * @return MagentoStructString|null
	 */
	public function getExt_customer_id()
	{
		return $this->ext_customer_id;
	}
	/**
	 * Set ext_customer_id value
	 * @param MagentoStructString $_ext_customer_id the ext_customer_id
	 * @return MagentoStructString
	 */
	public function setExt_customer_id($_ext_customer_id)
	{
		return ($this->ext_customer_id = $_ext_customer_id);
	}
	/**
	 * Get ext_order_id value
	 * @return MagentoStructString|null
	 */
	public function getExt_order_id()
	{
		return $this->ext_order_id;
	}
	/**
	 * Set ext_order_id value
	 * @param MagentoStructString $_ext_order_id the ext_order_id
	 * @return MagentoStructString
	 */
	public function setExt_order_id($_ext_order_id)
	{
		return ($this->ext_order_id = $_ext_order_id);
	}
	/**
	 * Get hold_before_state value
	 * @return MagentoStructString|null
	 */
	public function getHold_before_state()
	{
		return $this->hold_before_state;
	}
	/**
	 * Set hold_before_state value
	 * @param MagentoStructString $_hold_before_state the hold_before_state
	 * @return MagentoStructString
	 */
	public function setHold_before_state($_hold_before_state)
	{
		return ($this->hold_before_state = $_hold_before_state);
	}
	/**
	 * Get hold_before_status value
	 * @return MagentoStructString|null
	 */
	public function getHold_before_status()
	{
		return $this->hold_before_status;
	}
	/**
	 * Set hold_before_status value
	 * @param MagentoStructString $_hold_before_status the hold_before_status
	 * @return MagentoStructString
	 */
	public function setHold_before_status($_hold_before_status)
	{
		return ($this->hold_before_status = $_hold_before_status);
	}
	/**
	 * Get original_increment_id value
	 * @return MagentoStructString|null
	 */
	public function getOriginal_increment_id()
	{
		return $this->original_increment_id;
	}
	/**
	 * Set original_increment_id value
	 * @param MagentoStructString $_original_increment_id the original_increment_id
	 * @return MagentoStructString
	 */
	public function setOriginal_increment_id($_original_increment_id)
	{
		return ($this->original_increment_id = $_original_increment_id);
	}
	/**
	 * Get relation_child_id value
	 * @return MagentoStructString|null
	 */
	public function getRelation_child_id()
	{
		return $this->relation_child_id;
	}
	/**
	 * Set relation_child_id value
	 * @param MagentoStructString $_relation_child_id the relation_child_id
	 * @return MagentoStructString
	 */
	public function setRelation_child_id($_relation_child_id)
	{
		return ($this->relation_child_id = $_relation_child_id);
	}
	/**
	 * Get relation_child_real_id value
	 * @return MagentoStructString|null
	 */
	public function getRelation_child_real_id()
	{
		return $this->relation_child_real_id;
	}
	/**
	 * Set relation_child_real_id value
	 * @param MagentoStructString $_relation_child_real_id the relation_child_real_id
	 * @return MagentoStructString
	 */
	public function setRelation_child_real_id($_relation_child_real_id)
	{
		return ($this->relation_child_real_id = $_relation_child_real_id);
	}
	/**
	 * Get relation_parent_id value
	 * @return MagentoStructString|null
	 */
	public function getRelation_parent_id()
	{
		return $this->relation_parent_id;
	}
	/**
	 * Set relation_parent_id value
	 * @param MagentoStructString $_relation_parent_id the relation_parent_id
	 * @return MagentoStructString
	 */
	public function setRelation_parent_id($_relation_parent_id)
	{
		return ($this->relation_parent_id = $_relation_parent_id);
	}
	/**
	 * Get relation_parent_real_id value
	 * @return MagentoStructString|null
	 */
	public function getRelation_parent_real_id()
	{
		return $this->relation_parent_real_id;
	}
	/**
	 * Set relation_parent_real_id value
	 * @param MagentoStructString $_relation_parent_real_id the relation_parent_real_id
	 * @return MagentoStructString
	 */
	public function setRelation_parent_real_id($_relation_parent_real_id)
	{
		return ($this->relation_parent_real_id = $_relation_parent_real_id);
	}
	/**
	 * Get x_forwarded_for value
	 * @return MagentoStructString|null
	 */
	public function getX_forwarded_for()
	{
		return $this->x_forwarded_for;
	}
	/**
	 * Set x_forwarded_for value
	 * @param MagentoStructString $_x_forwarded_for the x_forwarded_for
	 * @return MagentoStructString
	 */
	public function setX_forwarded_for($_x_forwarded_for)
	{
		return ($this->x_forwarded_for = $_x_forwarded_for);
	}
	/**
	 * Get customer_note value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_note()
	{
		return $this->customer_note;
	}
	/**
	 * Set customer_note value
	 * @param MagentoStructString $_customer_note the customer_note
	 * @return MagentoStructString
	 */
	public function setCustomer_note($_customer_note)
	{
		return ($this->customer_note = $_customer_note);
	}
	/**
	 * Get total_item_count value
	 * @return MagentoStructString|null
	 */
	public function getTotal_item_count()
	{
		return $this->total_item_count;
	}
	/**
	 * Set total_item_count value
	 * @param MagentoStructString $_total_item_count the total_item_count
	 * @return MagentoStructString
	 */
	public function setTotal_item_count($_total_item_count)
	{
		return ($this->total_item_count = $_total_item_count);
	}
	/**
	 * Get customer_gender value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_gender()
	{
		return $this->customer_gender;
	}
	/**
	 * Set customer_gender value
	 * @param MagentoStructString $_customer_gender the customer_gender
	 * @return MagentoStructString
	 */
	public function setCustomer_gender($_customer_gender)
	{
		return ($this->customer_gender = $_customer_gender);
	}
	/**
	 * Get hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getHidden_tax_amount()
	{
		return $this->hidden_tax_amount;
	}
	/**
	 * Set hidden_tax_amount value
	 * @param MagentoStructString $_hidden_tax_amount the hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setHidden_tax_amount($_hidden_tax_amount)
	{
		return ($this->hidden_tax_amount = $_hidden_tax_amount);
	}
	/**
	 * Get base_hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_hidden_tax_amount()
	{
		return $this->base_hidden_tax_amount;
	}
	/**
	 * Set base_hidden_tax_amount value
	 * @param MagentoStructString $_base_hidden_tax_amount the base_hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_hidden_tax_amount($_base_hidden_tax_amount)
	{
		return ($this->base_hidden_tax_amount = $_base_hidden_tax_amount);
	}
	/**
	 * Get shipping_hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getShipping_hidden_tax_amount()
	{
		return $this->shipping_hidden_tax_amount;
	}
	/**
	 * Set shipping_hidden_tax_amount value
	 * @param MagentoStructString $_shipping_hidden_tax_amount the shipping_hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setShipping_hidden_tax_amount($_shipping_hidden_tax_amount)
	{
		return ($this->shipping_hidden_tax_amount = $_shipping_hidden_tax_amount);
	}
	/**
	 * Get base_shipping_hidden_tax_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_hidden_tax_amount()
	{
		return $this->base_shipping_hidden_tax_amount;
	}
	/**
	 * Set base_shipping_hidden_tax_amount value
	 * @param MagentoStructString $_base_shipping_hidden_tax_amount the base_shipping_hidden_tax_amount
	 * @return MagentoStructString
	 */
	public function setBase_shipping_hidden_tax_amount($_base_shipping_hidden_tax_amount)
	{
		return ($this->base_shipping_hidden_tax_amount = $_base_shipping_hidden_tax_amount);
	}
	/**
	 * Get hidden_tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getHidden_tax_invoiced()
	{
		return $this->hidden_tax_invoiced;
	}
	/**
	 * Set hidden_tax_invoiced value
	 * @param MagentoStructString $_hidden_tax_invoiced the hidden_tax_invoiced
	 * @return MagentoStructString
	 */
	public function setHidden_tax_invoiced($_hidden_tax_invoiced)
	{
		return ($this->hidden_tax_invoiced = $_hidden_tax_invoiced);
	}
	/**
	 * Get base_hidden_tax_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_hidden_tax_invoiced()
	{
		return $this->base_hidden_tax_invoiced;
	}
	/**
	 * Set base_hidden_tax_invoiced value
	 * @param MagentoStructString $_base_hidden_tax_invoiced the base_hidden_tax_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_hidden_tax_invoiced($_base_hidden_tax_invoiced)
	{
		return ($this->base_hidden_tax_invoiced = $_base_hidden_tax_invoiced);
	}
	/**
	 * Get hidden_tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getHidden_tax_refunded()
	{
		return $this->hidden_tax_refunded;
	}
	/**
	 * Set hidden_tax_refunded value
	 * @param MagentoStructString $_hidden_tax_refunded the hidden_tax_refunded
	 * @return MagentoStructString
	 */
	public function setHidden_tax_refunded($_hidden_tax_refunded)
	{
		return ($this->hidden_tax_refunded = $_hidden_tax_refunded);
	}
	/**
	 * Get base_hidden_tax_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_hidden_tax_refunded()
	{
		return $this->base_hidden_tax_refunded;
	}
	/**
	 * Set base_hidden_tax_refunded value
	 * @param MagentoStructString $_base_hidden_tax_refunded the base_hidden_tax_refunded
	 * @return MagentoStructString
	 */
	public function setBase_hidden_tax_refunded($_base_hidden_tax_refunded)
	{
		return ($this->base_hidden_tax_refunded = $_base_hidden_tax_refunded);
	}
	/**
	 * Get shipping_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getShipping_incl_tax()
	{
		return $this->shipping_incl_tax;
	}
	/**
	 * Set shipping_incl_tax value
	 * @param MagentoStructString $_shipping_incl_tax the shipping_incl_tax
	 * @return MagentoStructString
	 */
	public function setShipping_incl_tax($_shipping_incl_tax)
	{
		return ($this->shipping_incl_tax = $_shipping_incl_tax);
	}
	/**
	 * Get base_shipping_incl_tax value
	 * @return MagentoStructString|null
	 */
	public function getBase_shipping_incl_tax()
	{
		return $this->base_shipping_incl_tax;
	}
	/**
	 * Set base_shipping_incl_tax value
	 * @param MagentoStructString $_base_shipping_incl_tax the base_shipping_incl_tax
	 * @return MagentoStructString
	 */
	public function setBase_shipping_incl_tax($_base_shipping_incl_tax)
	{
		return ($this->base_shipping_incl_tax = $_base_shipping_incl_tax);
	}
	/**
	 * Get base_customer_balance_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_customer_balance_amount()
	{
		return $this->base_customer_balance_amount;
	}
	/**
	 * Set base_customer_balance_amount value
	 * @param MagentoStructString $_base_customer_balance_amount the base_customer_balance_amount
	 * @return MagentoStructString
	 */
	public function setBase_customer_balance_amount($_base_customer_balance_amount)
	{
		return ($this->base_customer_balance_amount = $_base_customer_balance_amount);
	}
	/**
	 * Get customer_balance_amount value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_balance_amount()
	{
		return $this->customer_balance_amount;
	}
	/**
	 * Set customer_balance_amount value
	 * @param MagentoStructString $_customer_balance_amount the customer_balance_amount
	 * @return MagentoStructString
	 */
	public function setCustomer_balance_amount($_customer_balance_amount)
	{
		return ($this->customer_balance_amount = $_customer_balance_amount);
	}
	/**
	 * Get base_customer_balance_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_customer_balance_invoiced()
	{
		return $this->base_customer_balance_invoiced;
	}
	/**
	 * Set base_customer_balance_invoiced value
	 * @param MagentoStructString $_base_customer_balance_invoiced the base_customer_balance_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_customer_balance_invoiced($_base_customer_balance_invoiced)
	{
		return ($this->base_customer_balance_invoiced = $_base_customer_balance_invoiced);
	}
	/**
	 * Get customer_balance_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_balance_invoiced()
	{
		return $this->customer_balance_invoiced;
	}
	/**
	 * Set customer_balance_invoiced value
	 * @param MagentoStructString $_customer_balance_invoiced the customer_balance_invoiced
	 * @return MagentoStructString
	 */
	public function setCustomer_balance_invoiced($_customer_balance_invoiced)
	{
		return ($this->customer_balance_invoiced = $_customer_balance_invoiced);
	}
	/**
	 * Get base_customer_balance_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_customer_balance_refunded()
	{
		return $this->base_customer_balance_refunded;
	}
	/**
	 * Set base_customer_balance_refunded value
	 * @param MagentoStructString $_base_customer_balance_refunded the base_customer_balance_refunded
	 * @return MagentoStructString
	 */
	public function setBase_customer_balance_refunded($_base_customer_balance_refunded)
	{
		return ($this->base_customer_balance_refunded = $_base_customer_balance_refunded);
	}
	/**
	 * Get customer_balance_refunded value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_balance_refunded()
	{
		return $this->customer_balance_refunded;
	}
	/**
	 * Set customer_balance_refunded value
	 * @param MagentoStructString $_customer_balance_refunded the customer_balance_refunded
	 * @return MagentoStructString
	 */
	public function setCustomer_balance_refunded($_customer_balance_refunded)
	{
		return ($this->customer_balance_refunded = $_customer_balance_refunded);
	}
	/**
	 * Get base_customer_balance_total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_customer_balance_total_refunded()
	{
		return $this->base_customer_balance_total_refunded;
	}
	/**
	 * Set base_customer_balance_total_refunded value
	 * @param MagentoStructString $_base_customer_balance_total_refunded the base_customer_balance_total_refunded
	 * @return MagentoStructString
	 */
	public function setBase_customer_balance_total_refunded($_base_customer_balance_total_refunded)
	{
		return ($this->base_customer_balance_total_refunded = $_base_customer_balance_total_refunded);
	}
	/**
	 * Get customer_balance_total_refunded value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_balance_total_refunded()
	{
		return $this->customer_balance_total_refunded;
	}
	/**
	 * Set customer_balance_total_refunded value
	 * @param MagentoStructString $_customer_balance_total_refunded the customer_balance_total_refunded
	 * @return MagentoStructString
	 */
	public function setCustomer_balance_total_refunded($_customer_balance_total_refunded)
	{
		return ($this->customer_balance_total_refunded = $_customer_balance_total_refunded);
	}
	/**
	 * Get gift_cards value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards()
	{
		return $this->gift_cards;
	}
	/**
	 * Set gift_cards value
	 * @param MagentoStructString $_gift_cards the gift_cards
	 * @return MagentoStructString
	 */
	public function setGift_cards($_gift_cards)
	{
		return ($this->gift_cards = $_gift_cards);
	}
	/**
	 * Get base_gift_cards_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_gift_cards_amount()
	{
		return $this->base_gift_cards_amount;
	}
	/**
	 * Set base_gift_cards_amount value
	 * @param MagentoStructString $_base_gift_cards_amount the base_gift_cards_amount
	 * @return MagentoStructString
	 */
	public function setBase_gift_cards_amount($_base_gift_cards_amount)
	{
		return ($this->base_gift_cards_amount = $_base_gift_cards_amount);
	}
	/**
	 * Get gift_cards_amount value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards_amount()
	{
		return $this->gift_cards_amount;
	}
	/**
	 * Set gift_cards_amount value
	 * @param MagentoStructString $_gift_cards_amount the gift_cards_amount
	 * @return MagentoStructString
	 */
	public function setGift_cards_amount($_gift_cards_amount)
	{
		return ($this->gift_cards_amount = $_gift_cards_amount);
	}
	/**
	 * Get base_gift_cards_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_gift_cards_invoiced()
	{
		return $this->base_gift_cards_invoiced;
	}
	/**
	 * Set base_gift_cards_invoiced value
	 * @param MagentoStructString $_base_gift_cards_invoiced the base_gift_cards_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_gift_cards_invoiced($_base_gift_cards_invoiced)
	{
		return ($this->base_gift_cards_invoiced = $_base_gift_cards_invoiced);
	}
	/**
	 * Get gift_cards_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards_invoiced()
	{
		return $this->gift_cards_invoiced;
	}
	/**
	 * Set gift_cards_invoiced value
	 * @param MagentoStructString $_gift_cards_invoiced the gift_cards_invoiced
	 * @return MagentoStructString
	 */
	public function setGift_cards_invoiced($_gift_cards_invoiced)
	{
		return ($this->gift_cards_invoiced = $_gift_cards_invoiced);
	}
	/**
	 * Get base_gift_cards_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_gift_cards_refunded()
	{
		return $this->base_gift_cards_refunded;
	}
	/**
	 * Set base_gift_cards_refunded value
	 * @param MagentoStructString $_base_gift_cards_refunded the base_gift_cards_refunded
	 * @return MagentoStructString
	 */
	public function setBase_gift_cards_refunded($_base_gift_cards_refunded)
	{
		return ($this->base_gift_cards_refunded = $_base_gift_cards_refunded);
	}
	/**
	 * Get gift_cards_refunded value
	 * @return MagentoStructString|null
	 */
	public function getGift_cards_refunded()
	{
		return $this->gift_cards_refunded;
	}
	/**
	 * Set gift_cards_refunded value
	 * @param MagentoStructString $_gift_cards_refunded the gift_cards_refunded
	 * @return MagentoStructString
	 */
	public function setGift_cards_refunded($_gift_cards_refunded)
	{
		return ($this->gift_cards_refunded = $_gift_cards_refunded);
	}
	/**
	 * Get reward_points_balance value
	 * @return MagentoStructString|null
	 */
	public function getReward_points_balance()
	{
		return $this->reward_points_balance;
	}
	/**
	 * Set reward_points_balance value
	 * @param MagentoStructString $_reward_points_balance the reward_points_balance
	 * @return MagentoStructString
	 */
	public function setReward_points_balance($_reward_points_balance)
	{
		return ($this->reward_points_balance = $_reward_points_balance);
	}
	/**
	 * Get base_reward_currency_amount value
	 * @return MagentoStructString|null
	 */
	public function getBase_reward_currency_amount()
	{
		return $this->base_reward_currency_amount;
	}
	/**
	 * Set base_reward_currency_amount value
	 * @param MagentoStructString $_base_reward_currency_amount the base_reward_currency_amount
	 * @return MagentoStructString
	 */
	public function setBase_reward_currency_amount($_base_reward_currency_amount)
	{
		return ($this->base_reward_currency_amount = $_base_reward_currency_amount);
	}
	/**
	 * Get reward_currency_amount value
	 * @return MagentoStructString|null
	 */
	public function getReward_currency_amount()
	{
		return $this->reward_currency_amount;
	}
	/**
	 * Set reward_currency_amount value
	 * @param MagentoStructString $_reward_currency_amount the reward_currency_amount
	 * @return MagentoStructString
	 */
	public function setReward_currency_amount($_reward_currency_amount)
	{
		return ($this->reward_currency_amount = $_reward_currency_amount);
	}
	/**
	 * Get base_reward_currency_amount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getBase_reward_currency_amount_invoiced()
	{
		return $this->base_reward_currency_amount_invoiced;
	}
	/**
	 * Set base_reward_currency_amount_invoiced value
	 * @param MagentoStructString $_base_reward_currency_amount_invoiced the base_reward_currency_amount_invoiced
	 * @return MagentoStructString
	 */
	public function setBase_reward_currency_amount_invoiced($_base_reward_currency_amount_invoiced)
	{
		return ($this->base_reward_currency_amount_invoiced = $_base_reward_currency_amount_invoiced);
	}
	/**
	 * Get reward_currency_amount_invoiced value
	 * @return MagentoStructString|null
	 */
	public function getReward_currency_amount_invoiced()
	{
		return $this->reward_currency_amount_invoiced;
	}
	/**
	 * Set reward_currency_amount_invoiced value
	 * @param MagentoStructString $_reward_currency_amount_invoiced the reward_currency_amount_invoiced
	 * @return MagentoStructString
	 */
	public function setReward_currency_amount_invoiced($_reward_currency_amount_invoiced)
	{
		return ($this->reward_currency_amount_invoiced = $_reward_currency_amount_invoiced);
	}
	/**
	 * Get base_reward_currency_amount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getBase_reward_currency_amount_refunded()
	{
		return $this->base_reward_currency_amount_refunded;
	}
	/**
	 * Set base_reward_currency_amount_refunded value
	 * @param MagentoStructString $_base_reward_currency_amount_refunded the base_reward_currency_amount_refunded
	 * @return MagentoStructString
	 */
	public function setBase_reward_currency_amount_refunded($_base_reward_currency_amount_refunded)
	{
		return ($this->base_reward_currency_amount_refunded = $_base_reward_currency_amount_refunded);
	}
	/**
	 * Get reward_currency_amount_refunded value
	 * @return MagentoStructString|null
	 */
	public function getReward_currency_amount_refunded()
	{
		return $this->reward_currency_amount_refunded;
	}
	/**
	 * Set reward_currency_amount_refunded value
	 * @param MagentoStructString $_reward_currency_amount_refunded the reward_currency_amount_refunded
	 * @return MagentoStructString
	 */
	public function setReward_currency_amount_refunded($_reward_currency_amount_refunded)
	{
		return ($this->reward_currency_amount_refunded = $_reward_currency_amount_refunded);
	}
	/**
	 * Get reward_points_balance_refunded value
	 * @return MagentoStructString|null
	 */
	public function getReward_points_balance_refunded()
	{
		return $this->reward_points_balance_refunded;
	}
	/**
	 * Set reward_points_balance_refunded value
	 * @param MagentoStructString $_reward_points_balance_refunded the reward_points_balance_refunded
	 * @return MagentoStructString
	 */
	public function setReward_points_balance_refunded($_reward_points_balance_refunded)
	{
		return ($this->reward_points_balance_refunded = $_reward_points_balance_refunded);
	}
	/**
	 * Get reward_points_balance_to_refund value
	 * @return MagentoStructString|null
	 */
	public function getReward_points_balance_to_refund()
	{
		return $this->reward_points_balance_to_refund;
	}
	/**
	 * Set reward_points_balance_to_refund value
	 * @param MagentoStructString $_reward_points_balance_to_refund the reward_points_balance_to_refund
	 * @return MagentoStructString
	 */
	public function setReward_points_balance_to_refund($_reward_points_balance_to_refund)
	{
		return ($this->reward_points_balance_to_refund = $_reward_points_balance_to_refund);
	}
	/**
	 * Get reward_salesrule_points value
	 * @return MagentoStructString|null
	 */
	public function getReward_salesrule_points()
	{
		return $this->reward_salesrule_points;
	}
	/**
	 * Set reward_salesrule_points value
	 * @param MagentoStructString $_reward_salesrule_points the reward_salesrule_points
	 * @return MagentoStructString
	 */
	public function setReward_salesrule_points($_reward_salesrule_points)
	{
		return ($this->reward_salesrule_points = $_reward_salesrule_points);
	}
	/**
	 * Get firstname value
	 * @return MagentoStructString|null
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set firstname value
	 * @param MagentoStructString $_firstname the firstname
	 * @return MagentoStructString
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get lastname value
	 * @return MagentoStructString|null
	 */
	public function getLastname()
	{
		return $this->lastname;
	}
	/**
	 * Set lastname value
	 * @param MagentoStructString $_lastname the lastname
	 * @return MagentoStructString
	 */
	public function setLastname($_lastname)
	{
		return ($this->lastname = $_lastname);
	}
	/**
	 * Get telephone value
	 * @return MagentoStructString|null
	 */
	public function getTelephone()
	{
		return $this->telephone;
	}
	/**
	 * Set telephone value
	 * @param MagentoStructString $_telephone the telephone
	 * @return MagentoStructString
	 */
	public function setTelephone($_telephone)
	{
		return ($this->telephone = $_telephone);
	}
	/**
	 * Get postcode value
	 * @return MagentoStructString|null
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}
	/**
	 * Set postcode value
	 * @param MagentoStructString $_postcode the postcode
	 * @return MagentoStructString
	 */
	public function setPostcode($_postcode)
	{
		return ($this->postcode = $_postcode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderListEntity
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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