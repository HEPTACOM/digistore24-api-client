<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GetProductPaymentPlansNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\GetProductPaymentPlans';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\GetProductPaymentPlans';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\GetProductPaymentPlans();
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'product_id')) {
            $object->setProductId($data->{'product_id'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt($data->{'created_at'});
        }
        if (property_exists($data, 'modified_at')) {
            $object->setModifiedAt($data->{'modified_at'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'first_amount')) {
            $object->setFirstAmount($data->{'first_amount'});
        }
        if (property_exists($data, 'other_amounts')) {
            $object->setOtherAmounts($data->{'other_amounts'});
        }
        if (property_exists($data, 'number_of_installments')) {
            $object->setNumberOfInstallments($data->{'number_of_installments'});
        }
        if (property_exists($data, 'other_billing_intervals')) {
            $object->setOtherBillingIntervals($data->{'other_billing_intervals'});
        }
        if (property_exists($data, 'first_billing_interval')) {
            $object->setFirstBillingInterval($data->{'first_billing_interval'});
        }
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'cancel_policy')) {
            $object->setCancelPolicy($data->{'cancel_policy'});
        }
        if (property_exists($data, 'is_for_sale')) {
            $object->setIsForSale($data->{'is_for_sale'});
        }
        if (property_exists($data, 'is_for_sale_msg')) {
            $object->setIsForSaleMsg($data->{'is_for_sale_msg'});
        }
        if (property_exists($data, 'is_active')) {
            $object->setIsActive($data->{'is_active'});
        }
        if (property_exists($data, 'is_switching_allowed')) {
            $object->setIsSwitchingAllowed($data->{'is_switching_allowed'});
        }
        if (property_exists($data, 'can_buyer_terminate_installments')) {
            $object->setCanBuyerTerminateInstallments($data->{'can_buyer_terminate_installments'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getDescription() !== null) {
            $data->{'description'} = $object->getDescription();
        }
        if ($object->getId() !== null) {
            $data->{'id'} = $object->getId();
        }
        if ($object->getProductId() !== null) {
            $data->{'product_id'} = $object->getProductId();
        }
        if ($object->getCreatedAt() !== null) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        if ($object->getModifiedAt() !== null) {
            $data->{'modified_at'} = $object->getModifiedAt();
        }
        if ($object->getCurrency() !== null) {
            $data->{'currency'} = $object->getCurrency();
        }
        if ($object->getFirstAmount() !== null) {
            $data->{'first_amount'} = $object->getFirstAmount();
        }
        if ($object->getOtherAmounts() !== null) {
            $data->{'other_amounts'} = $object->getOtherAmounts();
        }
        if ($object->getNumberOfInstallments() !== null) {
            $data->{'number_of_installments'} = $object->getNumberOfInstallments();
        }
        if ($object->getOtherBillingIntervals() !== null) {
            $data->{'other_billing_intervals'} = $object->getOtherBillingIntervals();
        }
        if ($object->getFirstBillingInterval() !== null) {
            $data->{'first_billing_interval'} = $object->getFirstBillingInterval();
        }
        if ($object->getPosition() !== null) {
            $data->{'position'} = $object->getPosition();
        }
        if ($object->getCancelPolicy() !== null) {
            $data->{'cancel_policy'} = $object->getCancelPolicy();
        }
        if ($object->getIsForSale() !== null) {
            $data->{'is_for_sale'} = $object->getIsForSale();
        }
        if ($object->getIsForSaleMsg() !== null) {
            $data->{'is_for_sale_msg'} = $object->getIsForSaleMsg();
        }
        if ($object->getIsActive() !== null) {
            $data->{'is_active'} = $object->getIsActive();
        }
        if ($object->getIsSwitchingAllowed() !== null) {
            $data->{'is_switching_allowed'} = $object->getIsSwitchingAllowed();
        }
        if ($object->getCanBuyerTerminateInstallments() !== null) {
            $data->{'can_buyer_terminate_installments'} = $object->getCanBuyerTerminateInstallments();
        }

        return $data;
    }
}
