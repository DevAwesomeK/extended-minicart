<?php
/**
 * Copyright © Demo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Vendor\ExtendedMinicart\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

	/**
	* Minicart customer group display config path
	*/
	const XML_PATH_MINICART_DISPLAY_CONFIG = 'checkout/sidebar/minicart_display_customer_group';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getMinicartDisplayConfig()
	{
	    return $this->scopeConfig->getValue(
            self::XML_PATH_MINICART_DISPLAY_CONFIG,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}
}

