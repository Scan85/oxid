[{if $oxPayment and $oxPayment->isPaymorrowActiveAndMapped()}]
[{oxmultilang ident="BANK_DETAILS"}]
[{/if}]
[{if $oxUserPayment->getPaymorrowIBAN() && $oxUserPayment->getPaymorrowBIC()}]
[{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_BANK"}] [{$oxUserPayment->getPaymorrowBankName()}]
[{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_IBAN"}] [{$oxUserPayment->getPaymorrowIBAN()}]
[{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_BIC"}] [{$oxUserPayment->getPaymorrowBIC()}]
[{else}]
[{oxcontent ident="oxpspmuserorderemailinvoiceplain"}]
[{/if}]
[{if $oxPayment->getPaymorrowPaymentType() == 'pm_invoice'}]
[{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_REFERENCE_LINE"}] [{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_ORDER_ID"}] [{$order->oxorder__oxordernr->value}], [{oxmultilang ident="PAYMORROW_EMAIL_ORDER_CUST_HTML_CUSTOMER_NR"}] [{$user->getCustomerPaymorrowCustomerNumber()}]
[{elseif $oxPayment->getPaymorrowPaymentType() == 'pm_sdd'}]
[{oxcontent ident="oxpspmuserorderemailsddplain"}]
[{/if}]
[{$smarty.block.parent}]