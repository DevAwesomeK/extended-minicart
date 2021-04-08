<?php
/**
 * Copyright © Demo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Vendor\ExtendedMinicart\Rewrite\Magento\Checkout\Block\Cart;

use Magento\Customer\Model\Context as CustomerContext;

class Sidebar extends \Magento\Checkout\Block\Cart\Sidebar
{
	/**
     * Customer session
     *
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

	/**
     * @var \Vendor\ExtendedMinicart\Helper\Data
     */
    protected $customHelper;

    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $customCustomerSession;

	/**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param \Magento\Catalog\Helper\Image $imageHelper
     * @param \Magento\Customer\CustomerData\JsLayoutDataProviderPoolInterface $jsLayoutDataProvider
     * @param array $data
     * @param \Magento\Framework\Serialize\Serializer\Json|null $serializer
     * @throws \RuntimeException
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Catalog\Helper\Image $imageHelper,
        \Magento\Customer\CustomerData\JsLayoutDataProviderPoolInterface $jsLayoutDataProvider,
        array $data = [],
        \Magento\Framework\Serialize\Serializer\Json $serializer = null,
        \Magento\Framework\App\Http\Context $httpContext,
        \Vendor\ExtendedMinicart\Helper\Data $customHelper
    ) {
		$this->httpContext = $httpContext;
    	$this->customHelper = $customHelper;
        $this->customCustomerSession = $customerSession;
        parent::__construct(
            $context,
            $customerSession,
            $checkoutSession,
            $imageHelper,
            $jsLayoutDataProvider,
            $data,
            $serializer
        );
    }

    public function isMinicartCustomerGroupDisplay()
    {
    	$enabledCustomerGroups = $this->customHelper->getMinicartDisplayConfig();
    	$enabledCustomerGroups = explode(',', $enabledCustomerGroups);
    	
    	if(in_array(32000, $enabledCustomerGroups)){
    		return true;
    	}
    	
    	if($this->httpContext->getValue(CustomerContext::CONTEXT_AUTH)){
    		$customerGroupId = $this->customCustomerSession->getCustomer()->getGroupId();
    	}else{
    		$customerGroupId = 0;
    	}
    	
		if(in_array($customerGroupId, $enabledCustomerGroups)){
			return true;
		}
    	return false;
    }
}

