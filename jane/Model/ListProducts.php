<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListProducts
{
    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $unitsLeft;

    /**
     * @var string
     */
    protected $ownerName;

    /**
     * @var string
     */
    protected $ownerId;

    /**
     * @var string
     */
    protected $thankyouUrl;

    /**
     * @var string
     */
    protected $affiliateCommission;

    /**
     * @var string
     */
    protected $affiliateCommissionFix;

    /**
     * @var string
     */
    protected $affiliateCommissionCur;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameIntern;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $modifiedAt;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $salespageUrl;

    /**
     * @var string
     */
    protected $upsellSalespageUrl;

    /**
     * @var string
     */
    protected $buyerType;

    /**
     * @var string
     */
    protected $imageId;

    /**
     * @var string
     */
    protected $upsellThankyouPageUrl;

    /**
     * @var string
     */
    protected $addOrderDataToUpsellSalesPageUrl;

    /**
     * @var string
     */
    protected $productTypeId;

    /**
     * @var string
     */
    protected $stopSalesAt;

    /**
     * @var string
     */
    protected $encryptOrderDataOfThankyouPageUrl;

    /**
     * @var string
     */
    protected $encryptOrderDataOfUpsellThankyouPageUrl;

    /**
     * @var string
     */
    protected $upsellFreeflowThankyouUrl;

    /**
     * @var string
     */
    protected $optinText;

    /**
     * @var string
     */
    protected $maxQuantity;

    /**
     * @var string
     */
    protected $descriptionThankyouPage;

    /**
     * @var string
     */
    protected $orderformId;

    /**
     * @var string
     */
    protected $payMethods;

    /**
     * @var string
     */
    protected $notifyPaymentEmails;

    /**
     * @var string
     */
    protected $notifyRefundEmails;

    /**
     * @var string
     */
    protected $notifyChargebackEmails;

    /**
     * @var string
     */
    protected $notifyMissedPaymentEmails;

    /**
     * @var string
     */
    protected $notifyRebillingStartStopEmails;

    /**
     * @var string
     */
    protected $notifyRebillingPaymentEmails;

    /**
     * @var string
     */
    protected $notifyAddonsFor;

    /**
     * @var string
     */
    protected $approvalStatus;

    /**
     * @var string
     */
    protected $approvalStatusMsg;

    /**
     * @var string
     */
    protected $productGroupName;

    /**
     * @var bool
     */
    protected $productGroupId;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isQuantityEditableBeforePurchase;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isQuantityEditableAfterPurchase;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isAddressInputMandatory;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isPhoneNoInputShown;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isTitleInputShown;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isNameShownOnBankStatement;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isAffiliationAutoAccepted;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isActive;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isAddonThankyouUrlEnabled;

    /**
     * Y or N
     *
     * @var string
     */
    protected $hasAddrSalutation;

    /**
     * Y or N
     *
     * @var string
     */
    protected $addOrderDataToThankyouPageUrl;

    /**
     * Y or N
     *
     * @var string
     */
    protected $redirectToCustomUpsellThankyouPage;

    /**
     * Y or N
     *
     * @var string
     */
    protected $addOrderDataToUpsellThankyouPageUrl;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isVatShown;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isFreeUpsellEnabled;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isFreeUpsellStarted;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isFreeUpsellStopped;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isUpsellDoublePurchasePrevented;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isOptinCheckboxShown;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isPhoneNoMandatory;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isSearchEngineAllowed;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isDeleted;

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUnitsLeft(): string
    {
        return $this->unitsLeft;
    }

    public function setUnitsLeft(string $unitsLeft): self
    {
        $this->unitsLeft = $unitsLeft;

        return $this;
    }

    public function getOwnerName(): string
    {
        return $this->ownerName;
    }

    public function setOwnerName(string $ownerName): self
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    public function setOwnerId(string $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    public function getThankyouUrl(): string
    {
        return $this->thankyouUrl;
    }

    public function setThankyouUrl(string $thankyouUrl): self
    {
        $this->thankyouUrl = $thankyouUrl;

        return $this;
    }

    public function getAffiliateCommission(): string
    {
        return $this->affiliateCommission;
    }

    public function setAffiliateCommission(string $affiliateCommission): self
    {
        $this->affiliateCommission = $affiliateCommission;

        return $this;
    }

    public function getAffiliateCommissionFix(): string
    {
        return $this->affiliateCommissionFix;
    }

    public function setAffiliateCommissionFix(string $affiliateCommissionFix): self
    {
        $this->affiliateCommissionFix = $affiliateCommissionFix;

        return $this;
    }

    public function getAffiliateCommissionCur(): string
    {
        return $this->affiliateCommissionCur;
    }

    public function setAffiliateCommissionCur(string $affiliateCommissionCur): self
    {
        $this->affiliateCommissionCur = $affiliateCommissionCur;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNameIntern(): string
    {
        return $this->nameIntern;
    }

    public function setNameIntern(string $nameIntern): self
    {
        $this->nameIntern = $nameIntern;

        return $this;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getModifiedAt(): string
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(string $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSalespageUrl(): string
    {
        return $this->salespageUrl;
    }

    public function setSalespageUrl(string $salespageUrl): self
    {
        $this->salespageUrl = $salespageUrl;

        return $this;
    }

    public function getUpsellSalespageUrl(): string
    {
        return $this->upsellSalespageUrl;
    }

    public function setUpsellSalespageUrl(string $upsellSalespageUrl): self
    {
        $this->upsellSalespageUrl = $upsellSalespageUrl;

        return $this;
    }

    public function getBuyerType(): string
    {
        return $this->buyerType;
    }

    public function setBuyerType(string $buyerType): self
    {
        $this->buyerType = $buyerType;

        return $this;
    }

    public function getImageId(): string
    {
        return $this->imageId;
    }

    public function setImageId(string $imageId): self
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getUpsellThankyouPageUrl(): string
    {
        return $this->upsellThankyouPageUrl;
    }

    public function setUpsellThankyouPageUrl(string $upsellThankyouPageUrl): self
    {
        $this->upsellThankyouPageUrl = $upsellThankyouPageUrl;

        return $this;
    }

    public function getAddOrderDataToUpsellSalesPageUrl(): string
    {
        return $this->addOrderDataToUpsellSalesPageUrl;
    }

    public function setAddOrderDataToUpsellSalesPageUrl(string $addOrderDataToUpsellSalesPageUrl): self
    {
        $this->addOrderDataToUpsellSalesPageUrl = $addOrderDataToUpsellSalesPageUrl;

        return $this;
    }

    public function getProductTypeId(): string
    {
        return $this->productTypeId;
    }

    public function setProductTypeId(string $productTypeId): self
    {
        $this->productTypeId = $productTypeId;

        return $this;
    }

    public function getStopSalesAt(): string
    {
        return $this->stopSalesAt;
    }

    public function setStopSalesAt(string $stopSalesAt): self
    {
        $this->stopSalesAt = $stopSalesAt;

        return $this;
    }

    public function getEncryptOrderDataOfThankyouPageUrl(): string
    {
        return $this->encryptOrderDataOfThankyouPageUrl;
    }

    public function setEncryptOrderDataOfThankyouPageUrl(string $encryptOrderDataOfThankyouPageUrl): self
    {
        $this->encryptOrderDataOfThankyouPageUrl = $encryptOrderDataOfThankyouPageUrl;

        return $this;
    }

    public function getEncryptOrderDataOfUpsellThankyouPageUrl(): string
    {
        return $this->encryptOrderDataOfUpsellThankyouPageUrl;
    }

    public function setEncryptOrderDataOfUpsellThankyouPageUrl(string $encryptOrderDataOfUpsellThankyouPageUrl): self
    {
        $this->encryptOrderDataOfUpsellThankyouPageUrl = $encryptOrderDataOfUpsellThankyouPageUrl;

        return $this;
    }

    public function getUpsellFreeflowThankyouUrl(): string
    {
        return $this->upsellFreeflowThankyouUrl;
    }

    public function setUpsellFreeflowThankyouUrl(string $upsellFreeflowThankyouUrl): self
    {
        $this->upsellFreeflowThankyouUrl = $upsellFreeflowThankyouUrl;

        return $this;
    }

    public function getOptinText(): string
    {
        return $this->optinText;
    }

    public function setOptinText(string $optinText): self
    {
        $this->optinText = $optinText;

        return $this;
    }

    public function getMaxQuantity(): string
    {
        return $this->maxQuantity;
    }

    public function setMaxQuantity(string $maxQuantity): self
    {
        $this->maxQuantity = $maxQuantity;

        return $this;
    }

    public function getDescriptionThankyouPage(): string
    {
        return $this->descriptionThankyouPage;
    }

    public function setDescriptionThankyouPage(string $descriptionThankyouPage): self
    {
        $this->descriptionThankyouPage = $descriptionThankyouPage;

        return $this;
    }

    public function getOrderformId(): string
    {
        return $this->orderformId;
    }

    public function setOrderformId(string $orderformId): self
    {
        $this->orderformId = $orderformId;

        return $this;
    }

    public function getPayMethods(): string
    {
        return $this->payMethods;
    }

    public function setPayMethods(string $payMethods): self
    {
        $this->payMethods = $payMethods;

        return $this;
    }

    public function getNotifyPaymentEmails(): string
    {
        return $this->notifyPaymentEmails;
    }

    public function setNotifyPaymentEmails(string $notifyPaymentEmails): self
    {
        $this->notifyPaymentEmails = $notifyPaymentEmails;

        return $this;
    }

    public function getNotifyRefundEmails(): string
    {
        return $this->notifyRefundEmails;
    }

    public function setNotifyRefundEmails(string $notifyRefundEmails): self
    {
        $this->notifyRefundEmails = $notifyRefundEmails;

        return $this;
    }

    public function getNotifyChargebackEmails(): string
    {
        return $this->notifyChargebackEmails;
    }

    public function setNotifyChargebackEmails(string $notifyChargebackEmails): self
    {
        $this->notifyChargebackEmails = $notifyChargebackEmails;

        return $this;
    }

    public function getNotifyMissedPaymentEmails(): string
    {
        return $this->notifyMissedPaymentEmails;
    }

    public function setNotifyMissedPaymentEmails(string $notifyMissedPaymentEmails): self
    {
        $this->notifyMissedPaymentEmails = $notifyMissedPaymentEmails;

        return $this;
    }

    public function getNotifyRebillingStartStopEmails(): string
    {
        return $this->notifyRebillingStartStopEmails;
    }

    public function setNotifyRebillingStartStopEmails(string $notifyRebillingStartStopEmails): self
    {
        $this->notifyRebillingStartStopEmails = $notifyRebillingStartStopEmails;

        return $this;
    }

    public function getNotifyRebillingPaymentEmails(): string
    {
        return $this->notifyRebillingPaymentEmails;
    }

    public function setNotifyRebillingPaymentEmails(string $notifyRebillingPaymentEmails): self
    {
        $this->notifyRebillingPaymentEmails = $notifyRebillingPaymentEmails;

        return $this;
    }

    public function getNotifyAddonsFor(): string
    {
        return $this->notifyAddonsFor;
    }

    public function setNotifyAddonsFor(string $notifyAddonsFor): self
    {
        $this->notifyAddonsFor = $notifyAddonsFor;

        return $this;
    }

    public function getApprovalStatus(): string
    {
        return $this->approvalStatus;
    }

    public function setApprovalStatus(string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;

        return $this;
    }

    public function getApprovalStatusMsg(): string
    {
        return $this->approvalStatusMsg;
    }

    public function setApprovalStatusMsg(string $approvalStatusMsg): self
    {
        $this->approvalStatusMsg = $approvalStatusMsg;

        return $this;
    }

    public function getProductGroupName(): string
    {
        return $this->productGroupName;
    }

    public function setProductGroupName(string $productGroupName): self
    {
        $this->productGroupName = $productGroupName;

        return $this;
    }

    public function getProductGroupId(): bool
    {
        return $this->productGroupId;
    }

    public function setProductGroupId(bool $productGroupId): self
    {
        $this->productGroupId = $productGroupId;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsQuantityEditableBeforePurchase(): string
    {
        return $this->isQuantityEditableBeforePurchase;
    }

    /**
     * Y or N
     */
    public function setIsQuantityEditableBeforePurchase(string $isQuantityEditableBeforePurchase): self
    {
        $this->isQuantityEditableBeforePurchase = $isQuantityEditableBeforePurchase;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsQuantityEditableAfterPurchase(): string
    {
        return $this->isQuantityEditableAfterPurchase;
    }

    /**
     * Y or N
     */
    public function setIsQuantityEditableAfterPurchase(string $isQuantityEditableAfterPurchase): self
    {
        $this->isQuantityEditableAfterPurchase = $isQuantityEditableAfterPurchase;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsAddressInputMandatory(): string
    {
        return $this->isAddressInputMandatory;
    }

    /**
     * Y or N
     */
    public function setIsAddressInputMandatory(string $isAddressInputMandatory): self
    {
        $this->isAddressInputMandatory = $isAddressInputMandatory;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsPhoneNoInputShown(): string
    {
        return $this->isPhoneNoInputShown;
    }

    /**
     * Y or N
     */
    public function setIsPhoneNoInputShown(string $isPhoneNoInputShown): self
    {
        $this->isPhoneNoInputShown = $isPhoneNoInputShown;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsTitleInputShown(): string
    {
        return $this->isTitleInputShown;
    }

    /**
     * Y or N
     */
    public function setIsTitleInputShown(string $isTitleInputShown): self
    {
        $this->isTitleInputShown = $isTitleInputShown;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsNameShownOnBankStatement(): string
    {
        return $this->isNameShownOnBankStatement;
    }

    /**
     * Y or N
     */
    public function setIsNameShownOnBankStatement(string $isNameShownOnBankStatement): self
    {
        $this->isNameShownOnBankStatement = $isNameShownOnBankStatement;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsAffiliationAutoAccepted(): string
    {
        return $this->isAffiliationAutoAccepted;
    }

    /**
     * Y or N
     */
    public function setIsAffiliationAutoAccepted(string $isAffiliationAutoAccepted): self
    {
        $this->isAffiliationAutoAccepted = $isAffiliationAutoAccepted;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsActive(): string
    {
        return $this->isActive;
    }

    /**
     * Y or N
     */
    public function setIsActive(string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsAddonThankyouUrlEnabled(): string
    {
        return $this->isAddonThankyouUrlEnabled;
    }

    /**
     * Y or N
     */
    public function setIsAddonThankyouUrlEnabled(string $isAddonThankyouUrlEnabled): self
    {
        $this->isAddonThankyouUrlEnabled = $isAddonThankyouUrlEnabled;

        return $this;
    }

    /**
     * Y or N
     */
    public function getHasAddrSalutation(): string
    {
        return $this->hasAddrSalutation;
    }

    /**
     * Y or N
     */
    public function setHasAddrSalutation(string $hasAddrSalutation): self
    {
        $this->hasAddrSalutation = $hasAddrSalutation;

        return $this;
    }

    /**
     * Y or N
     */
    public function getAddOrderDataToThankyouPageUrl(): string
    {
        return $this->addOrderDataToThankyouPageUrl;
    }

    /**
     * Y or N
     */
    public function setAddOrderDataToThankyouPageUrl(string $addOrderDataToThankyouPageUrl): self
    {
        $this->addOrderDataToThankyouPageUrl = $addOrderDataToThankyouPageUrl;

        return $this;
    }

    /**
     * Y or N
     */
    public function getRedirectToCustomUpsellThankyouPage(): string
    {
        return $this->redirectToCustomUpsellThankyouPage;
    }

    /**
     * Y or N
     */
    public function setRedirectToCustomUpsellThankyouPage(string $redirectToCustomUpsellThankyouPage): self
    {
        $this->redirectToCustomUpsellThankyouPage = $redirectToCustomUpsellThankyouPage;

        return $this;
    }

    /**
     * Y or N
     */
    public function getAddOrderDataToUpsellThankyouPageUrl(): string
    {
        return $this->addOrderDataToUpsellThankyouPageUrl;
    }

    /**
     * Y or N
     */
    public function setAddOrderDataToUpsellThankyouPageUrl(string $addOrderDataToUpsellThankyouPageUrl): self
    {
        $this->addOrderDataToUpsellThankyouPageUrl = $addOrderDataToUpsellThankyouPageUrl;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsVatShown(): string
    {
        return $this->isVatShown;
    }

    /**
     * Y or N
     */
    public function setIsVatShown(string $isVatShown): self
    {
        $this->isVatShown = $isVatShown;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsFreeUpsellEnabled(): string
    {
        return $this->isFreeUpsellEnabled;
    }

    /**
     * Y or N
     */
    public function setIsFreeUpsellEnabled(string $isFreeUpsellEnabled): self
    {
        $this->isFreeUpsellEnabled = $isFreeUpsellEnabled;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsFreeUpsellStarted(): string
    {
        return $this->isFreeUpsellStarted;
    }

    /**
     * Y or N
     */
    public function setIsFreeUpsellStarted(string $isFreeUpsellStarted): self
    {
        $this->isFreeUpsellStarted = $isFreeUpsellStarted;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsFreeUpsellStopped(): string
    {
        return $this->isFreeUpsellStopped;
    }

    /**
     * Y or N
     */
    public function setIsFreeUpsellStopped(string $isFreeUpsellStopped): self
    {
        $this->isFreeUpsellStopped = $isFreeUpsellStopped;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsUpsellDoublePurchasePrevented(): string
    {
        return $this->isUpsellDoublePurchasePrevented;
    }

    /**
     * Y or N
     */
    public function setIsUpsellDoublePurchasePrevented(string $isUpsellDoublePurchasePrevented): self
    {
        $this->isUpsellDoublePurchasePrevented = $isUpsellDoublePurchasePrevented;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsOptinCheckboxShown(): string
    {
        return $this->isOptinCheckboxShown;
    }

    /**
     * Y or N
     */
    public function setIsOptinCheckboxShown(string $isOptinCheckboxShown): self
    {
        $this->isOptinCheckboxShown = $isOptinCheckboxShown;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsPhoneNoMandatory(): string
    {
        return $this->isPhoneNoMandatory;
    }

    /**
     * Y or N
     */
    public function setIsPhoneNoMandatory(string $isPhoneNoMandatory): self
    {
        $this->isPhoneNoMandatory = $isPhoneNoMandatory;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsSearchEngineAllowed(): string
    {
        return $this->isSearchEngineAllowed;
    }

    /**
     * Y or N
     */
    public function setIsSearchEngineAllowed(string $isSearchEngineAllowed): self
    {
        $this->isSearchEngineAllowed = $isSearchEngineAllowed;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsDeleted(): string
    {
        return $this->isDeleted;
    }

    /**
     * Y or N
     */
    public function setIsDeleted(string $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }
}
