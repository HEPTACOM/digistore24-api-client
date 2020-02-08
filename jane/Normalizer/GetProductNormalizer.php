<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GetProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\GetProduct';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\GetProduct';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\GetProduct();
        if (property_exists($data, 'image_url')) {
            $object->setImageUrl($data->{'image_url'});
        }
        if (property_exists($data, 'user_id')) {
            $object->setUserId($data->{'user_id'});
        }
        if (property_exists($data, 'units_left')) {
            $object->setUnitsLeft($data->{'units_left'});
        }
        if (property_exists($data, 'owner_name')) {
            $object->setOwnerName($data->{'owner_name'});
        }
        if (property_exists($data, 'owner_id')) {
            $object->setOwnerId($data->{'owner_id'});
        }
        if (property_exists($data, 'thankyou_url')) {
            $object->setThankyouUrl($data->{'thankyou_url'});
        }
        if (property_exists($data, 'affiliate_commission')) {
            $object->setAffiliateCommission($data->{'affiliate_commission'});
        }
        if (property_exists($data, 'affiliate_commission_fix')) {
            $object->setAffiliateCommissionFix($data->{'affiliate_commission_fix'});
        }
        if (property_exists($data, 'affiliate_commission_cur')) {
            $object->setAffiliateCommissionCur($data->{'affiliate_commission_cur'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'name_intern')) {
            $object->setNameIntern($data->{'name_intern'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'tag')) {
            $object->setTag($data->{'tag'});
        }
        if (property_exists($data, 'language')) {
            $object->setLanguage($data->{'language'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt($data->{'created_at'});
        }
        if (property_exists($data, 'modified_at')) {
            $object->setModifiedAt($data->{'modified_at'});
        }
        if (property_exists($data, 'product_group_id')) {
            $object->setProductGroupId($data->{'product_group_id'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'salespage_url')) {
            $object->setSalespageUrl($data->{'salespage_url'});
        }
        if (property_exists($data, 'upsell_salespage_url')) {
            $object->setUpsellSalespageUrl($data->{'upsell_salespage_url'});
        }
        if (property_exists($data, 'buyer_type')) {
            $object->setBuyerType($data->{'buyer_type'});
        }
        if (property_exists($data, 'image_id')) {
            $object->setImageId($data->{'image_id'});
        }
        if (property_exists($data, 'upsell_thankyou_page_url')) {
            $object->setUpsellThankyouPageUrl($data->{'upsell_thankyou_page_url'});
        }
        if (property_exists($data, 'add_order_data_to_upsell_sales_page_url')) {
            $object->setAddOrderDataToUpsellSalesPageUrl($data->{'add_order_data_to_upsell_sales_page_url'});
        }
        if (property_exists($data, 'product_type_id')) {
            $object->setProductTypeId($data->{'product_type_id'});
        }
        if (property_exists($data, 'stop_sales_at')) {
            $object->setStopSalesAt($data->{'stop_sales_at'});
        }
        if (property_exists($data, 'encrypt_order_data_of_thankyou_page_url')) {
            $object->setEncryptOrderDataOfThankyouPageUrl($data->{'encrypt_order_data_of_thankyou_page_url'});
        }
        if (property_exists($data, 'encrypt_order_data_of_upsell_thankyou_page_url')) {
            $object->setEncryptOrderDataOfUpsellThankyouPageUrl($data->{'encrypt_order_data_of_upsell_thankyou_page_url'});
        }
        if (property_exists($data, 'upsell_freeflow_thankyou_url')) {
            $object->setUpsellFreeflowThankyouUrl($data->{'upsell_freeflow_thankyou_url'});
        }
        if (property_exists($data, 'optin_text')) {
            $object->setOptinText($data->{'optin_text'});
        }
        if (property_exists($data, 'max_quantity')) {
            $object->setMaxQuantity($data->{'max_quantity'});
        }
        if (property_exists($data, 'description_thankyou_page')) {
            $object->setDescriptionThankyouPage($data->{'description_thankyou_page'});
        }
        if (property_exists($data, 'orderform_id')) {
            $object->setOrderformId($data->{'orderform_id'});
        }
        if (property_exists($data, 'pay_methods')) {
            $object->setPayMethods($data->{'pay_methods'});
        }
        if (property_exists($data, 'notify_payment_emails')) {
            $object->setNotifyPaymentEmails($data->{'notify_payment_emails'});
        }
        if (property_exists($data, 'notify_refund_emails')) {
            $object->setNotifyRefundEmails($data->{'notify_refund_emails'});
        }
        if (property_exists($data, 'notify_chargeback_emails')) {
            $object->setNotifyChargebackEmails($data->{'notify_chargeback_emails'});
        }
        if (property_exists($data, 'notify_missed_payment_emails')) {
            $object->setNotifyMissedPaymentEmails($data->{'notify_missed_payment_emails'});
        }
        if (property_exists($data, 'notify_rebilling_start_stop_emails')) {
            $object->setNotifyRebillingStartStopEmails($data->{'notify_rebilling_start_stop_emails'});
        }
        if (property_exists($data, 'notify_rebilling_payment_emails')) {
            $object->setNotifyRebillingPaymentEmails($data->{'notify_rebilling_payment_emails'});
        }
        if (property_exists($data, 'notify_addons_for')) {
            $object->setNotifyAddonsFor($data->{'notify_addons_for'});
        }
        if (property_exists($data, 'approval_status')) {
            $object->setApprovalStatus($data->{'approval_status'});
        }
        if (property_exists($data, 'approval_status_msg')) {
            $object->setApprovalStatusMsg($data->{'approval_status_msg'});
        }
        if (property_exists($data, 'is_quantity_editable_before_purchase')) {
            $object->setIsQuantityEditableBeforePurchase($data->{'is_quantity_editable_before_purchase'});
        }
        if (property_exists($data, 'is_quantity_editable_after_purchase')) {
            $object->setIsQuantityEditableAfterPurchase($data->{'is_quantity_editable_after_purchase'});
        }
        if (property_exists($data, 'is_address_input_mandatory')) {
            $object->setIsAddressInputMandatory($data->{'is_address_input_mandatory'});
        }
        if (property_exists($data, 'is_phone_no_input_shown')) {
            $object->setIsPhoneNoInputShown($data->{'is_phone_no_input_shown'});
        }
        if (property_exists($data, 'is_title_input_shown')) {
            $object->setIsTitleInputShown($data->{'is_title_input_shown'});
        }
        if (property_exists($data, 'is_name_shown_on_bank_statement')) {
            $object->setIsNameShownOnBankStatement($data->{'is_name_shown_on_bank_statement'});
        }
        if (property_exists($data, 'is_affiliation_auto_accepted')) {
            $object->setIsAffiliationAutoAccepted($data->{'is_affiliation_auto_accepted'});
        }
        if (property_exists($data, 'is_active')) {
            $object->setIsActive($data->{'is_active'});
        }
        if (property_exists($data, 'is_addon_thankyou_url_enabled')) {
            $object->setIsAddonThankyouUrlEnabled($data->{'is_addon_thankyou_url_enabled'});
        }
        if (property_exists($data, 'has_addr_salutation')) {
            $object->setHasAddrSalutation($data->{'has_addr_salutation'});
        }
        if (property_exists($data, 'add_order_data_to_thankyou_page_url')) {
            $object->setAddOrderDataToThankyouPageUrl($data->{'add_order_data_to_thankyou_page_url'});
        }
        if (property_exists($data, 'redirect_to_custom_upsell_thankyou_page')) {
            $object->setRedirectToCustomUpsellThankyouPage($data->{'redirect_to_custom_upsell_thankyou_page'});
        }
        if (property_exists($data, 'add_order_data_to_upsell_thankyou_page_url')) {
            $object->setAddOrderDataToUpsellThankyouPageUrl($data->{'add_order_data_to_upsell_thankyou_page_url'});
        }
        if (property_exists($data, 'is_vat_shown')) {
            $object->setIsVatShown($data->{'is_vat_shown'});
        }
        if (property_exists($data, 'is_free_upsell_enabled')) {
            $object->setIsFreeUpsellEnabled($data->{'is_free_upsell_enabled'});
        }
        if (property_exists($data, 'is_free_upsell_started')) {
            $object->setIsFreeUpsellStarted($data->{'is_free_upsell_started'});
        }
        if (property_exists($data, 'is_free_upsell_stopped')) {
            $object->setIsFreeUpsellStopped($data->{'is_free_upsell_stopped'});
        }
        if (property_exists($data, 'is_upsell_double_purchase_prevented')) {
            $object->setIsUpsellDoublePurchasePrevented($data->{'is_upsell_double_purchase_prevented'});
        }
        if (property_exists($data, 'is_optin_checkbox_shown')) {
            $object->setIsOptinCheckboxShown($data->{'is_optin_checkbox_shown'});
        }
        if (property_exists($data, 'is_phone_no_mandatory')) {
            $object->setIsPhoneNoMandatory($data->{'is_phone_no_mandatory'});
        }
        if (property_exists($data, 'is_search_engine_allowed')) {
            $object->setIsSearchEngineAllowed($data->{'is_search_engine_allowed'});
        }
        if (property_exists($data, 'is_deleted')) {
            $object->setIsDeleted($data->{'is_deleted'});
        }
        if (property_exists($data, 'paymentplans')) {
            $values = [];
            foreach ($data->{'paymentplans'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Heptacom\\DigiStore24\\Model\\GetProductPaymentPlans', 'json', $context);
            }
            $object->setPaymentplans($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getImageUrl() !== null) {
            $data->{'image_url'} = $object->getImageUrl();
        }
        if ($object->getUserId() !== null) {
            $data->{'user_id'} = $object->getUserId();
        }
        if ($object->getUnitsLeft() !== null) {
            $data->{'units_left'} = $object->getUnitsLeft();
        }
        if ($object->getOwnerName() !== null) {
            $data->{'owner_name'} = $object->getOwnerName();
        }
        if ($object->getOwnerId() !== null) {
            $data->{'owner_id'} = $object->getOwnerId();
        }
        if ($object->getThankyouUrl() !== null) {
            $data->{'thankyou_url'} = $object->getThankyouUrl();
        }
        if ($object->getAffiliateCommission() !== null) {
            $data->{'affiliate_commission'} = $object->getAffiliateCommission();
        }
        if ($object->getAffiliateCommissionFix() !== null) {
            $data->{'affiliate_commission_fix'} = $object->getAffiliateCommissionFix();
        }
        if ($object->getAffiliateCommissionCur() !== null) {
            $data->{'affiliate_commission_cur'} = $object->getAffiliateCommissionCur();
        }
        if ($object->getId() !== null) {
            $data->{'id'} = $object->getId();
        }
        if ($object->getName() !== null) {
            $data->{'name'} = $object->getName();
        }
        if ($object->getNameIntern() !== null) {
            $data->{'name_intern'} = $object->getNameIntern();
        }
        if ($object->getNote() !== null) {
            $data->{'note'} = $object->getNote();
        }
        if ($object->getTag() !== null) {
            $data->{'tag'} = $object->getTag();
        }
        if ($object->getLanguage() !== null) {
            $data->{'language'} = $object->getLanguage();
        }
        if ($object->getCreatedAt() !== null) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        if ($object->getModifiedAt() !== null) {
            $data->{'modified_at'} = $object->getModifiedAt();
        }
        if ($object->getProductGroupId() !== null) {
            $data->{'product_group_id'} = $object->getProductGroupId();
        }
        if ($object->getCurrency() !== null) {
            $data->{'currency'} = $object->getCurrency();
        }
        if ($object->getDescription() !== null) {
            $data->{'description'} = $object->getDescription();
        }
        if ($object->getSalespageUrl() !== null) {
            $data->{'salespage_url'} = $object->getSalespageUrl();
        }
        if ($object->getUpsellSalespageUrl() !== null) {
            $data->{'upsell_salespage_url'} = $object->getUpsellSalespageUrl();
        }
        if ($object->getBuyerType() !== null) {
            $data->{'buyer_type'} = $object->getBuyerType();
        }
        if ($object->getImageId() !== null) {
            $data->{'image_id'} = $object->getImageId();
        }
        if ($object->getUpsellThankyouPageUrl() !== null) {
            $data->{'upsell_thankyou_page_url'} = $object->getUpsellThankyouPageUrl();
        }
        if ($object->getAddOrderDataToUpsellSalesPageUrl() !== null) {
            $data->{'add_order_data_to_upsell_sales_page_url'} = $object->getAddOrderDataToUpsellSalesPageUrl();
        }
        if ($object->getProductTypeId() !== null) {
            $data->{'product_type_id'} = $object->getProductTypeId();
        }
        if ($object->getStopSalesAt() !== null) {
            $data->{'stop_sales_at'} = $object->getStopSalesAt();
        }
        if ($object->getEncryptOrderDataOfThankyouPageUrl() !== null) {
            $data->{'encrypt_order_data_of_thankyou_page_url'} = $object->getEncryptOrderDataOfThankyouPageUrl();
        }
        if ($object->getEncryptOrderDataOfUpsellThankyouPageUrl() !== null) {
            $data->{'encrypt_order_data_of_upsell_thankyou_page_url'} = $object->getEncryptOrderDataOfUpsellThankyouPageUrl();
        }
        if ($object->getUpsellFreeflowThankyouUrl() !== null) {
            $data->{'upsell_freeflow_thankyou_url'} = $object->getUpsellFreeflowThankyouUrl();
        }
        if ($object->getOptinText() !== null) {
            $data->{'optin_text'} = $object->getOptinText();
        }
        if ($object->getMaxQuantity() !== null) {
            $data->{'max_quantity'} = $object->getMaxQuantity();
        }
        if ($object->getDescriptionThankyouPage() !== null) {
            $data->{'description_thankyou_page'} = $object->getDescriptionThankyouPage();
        }
        if ($object->getOrderformId() !== null) {
            $data->{'orderform_id'} = $object->getOrderformId();
        }
        if ($object->getPayMethods() !== null) {
            $data->{'pay_methods'} = $object->getPayMethods();
        }
        if ($object->getNotifyPaymentEmails() !== null) {
            $data->{'notify_payment_emails'} = $object->getNotifyPaymentEmails();
        }
        if ($object->getNotifyRefundEmails() !== null) {
            $data->{'notify_refund_emails'} = $object->getNotifyRefundEmails();
        }
        if ($object->getNotifyChargebackEmails() !== null) {
            $data->{'notify_chargeback_emails'} = $object->getNotifyChargebackEmails();
        }
        if ($object->getNotifyMissedPaymentEmails() !== null) {
            $data->{'notify_missed_payment_emails'} = $object->getNotifyMissedPaymentEmails();
        }
        if ($object->getNotifyRebillingStartStopEmails() !== null) {
            $data->{'notify_rebilling_start_stop_emails'} = $object->getNotifyRebillingStartStopEmails();
        }
        if ($object->getNotifyRebillingPaymentEmails() !== null) {
            $data->{'notify_rebilling_payment_emails'} = $object->getNotifyRebillingPaymentEmails();
        }
        if ($object->getNotifyAddonsFor() !== null) {
            $data->{'notify_addons_for'} = $object->getNotifyAddonsFor();
        }
        if ($object->getApprovalStatus() !== null) {
            $data->{'approval_status'} = $object->getApprovalStatus();
        }
        if ($object->getApprovalStatusMsg() !== null) {
            $data->{'approval_status_msg'} = $object->getApprovalStatusMsg();
        }
        if ($object->getIsQuantityEditableBeforePurchase() !== null) {
            $data->{'is_quantity_editable_before_purchase'} = $object->getIsQuantityEditableBeforePurchase();
        }
        if ($object->getIsQuantityEditableAfterPurchase() !== null) {
            $data->{'is_quantity_editable_after_purchase'} = $object->getIsQuantityEditableAfterPurchase();
        }
        if ($object->getIsAddressInputMandatory() !== null) {
            $data->{'is_address_input_mandatory'} = $object->getIsAddressInputMandatory();
        }
        if ($object->getIsPhoneNoInputShown() !== null) {
            $data->{'is_phone_no_input_shown'} = $object->getIsPhoneNoInputShown();
        }
        if ($object->getIsTitleInputShown() !== null) {
            $data->{'is_title_input_shown'} = $object->getIsTitleInputShown();
        }
        if ($object->getIsNameShownOnBankStatement() !== null) {
            $data->{'is_name_shown_on_bank_statement'} = $object->getIsNameShownOnBankStatement();
        }
        if ($object->getIsAffiliationAutoAccepted() !== null) {
            $data->{'is_affiliation_auto_accepted'} = $object->getIsAffiliationAutoAccepted();
        }
        if ($object->getIsActive() !== null) {
            $data->{'is_active'} = $object->getIsActive();
        }
        if ($object->getIsAddonThankyouUrlEnabled() !== null) {
            $data->{'is_addon_thankyou_url_enabled'} = $object->getIsAddonThankyouUrlEnabled();
        }
        if ($object->getHasAddrSalutation() !== null) {
            $data->{'has_addr_salutation'} = $object->getHasAddrSalutation();
        }
        if ($object->getAddOrderDataToThankyouPageUrl() !== null) {
            $data->{'add_order_data_to_thankyou_page_url'} = $object->getAddOrderDataToThankyouPageUrl();
        }
        if ($object->getRedirectToCustomUpsellThankyouPage() !== null) {
            $data->{'redirect_to_custom_upsell_thankyou_page'} = $object->getRedirectToCustomUpsellThankyouPage();
        }
        if ($object->getAddOrderDataToUpsellThankyouPageUrl() !== null) {
            $data->{'add_order_data_to_upsell_thankyou_page_url'} = $object->getAddOrderDataToUpsellThankyouPageUrl();
        }
        if ($object->getIsVatShown() !== null) {
            $data->{'is_vat_shown'} = $object->getIsVatShown();
        }
        if ($object->getIsFreeUpsellEnabled() !== null) {
            $data->{'is_free_upsell_enabled'} = $object->getIsFreeUpsellEnabled();
        }
        if ($object->getIsFreeUpsellStarted() !== null) {
            $data->{'is_free_upsell_started'} = $object->getIsFreeUpsellStarted();
        }
        if ($object->getIsFreeUpsellStopped() !== null) {
            $data->{'is_free_upsell_stopped'} = $object->getIsFreeUpsellStopped();
        }
        if ($object->getIsUpsellDoublePurchasePrevented() !== null) {
            $data->{'is_upsell_double_purchase_prevented'} = $object->getIsUpsellDoublePurchasePrevented();
        }
        if ($object->getIsOptinCheckboxShown() !== null) {
            $data->{'is_optin_checkbox_shown'} = $object->getIsOptinCheckboxShown();
        }
        if ($object->getIsPhoneNoMandatory() !== null) {
            $data->{'is_phone_no_mandatory'} = $object->getIsPhoneNoMandatory();
        }
        if ($object->getIsSearchEngineAllowed() !== null) {
            $data->{'is_search_engine_allowed'} = $object->getIsSearchEngineAllowed();
        }
        if ($object->getIsDeleted() !== null) {
            $data->{'is_deleted'} = $object->getIsDeleted();
        }
        if ($object->getPaymentplans() !== null) {
            $values = [];
            foreach ($object->getPaymentplans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'paymentplans'} = $values;
        }

        return $data;
    }
}
