<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2018 Amasty (https://www.amasty.com)
 * @package Amasty_Mostviewed
 */

namespace Amasty\Mostviewed\Model\Rule;

class StoresOptionsProvider implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Magento\Store\Model\System\Store
     */
    private $store;

    /**
     * @param \Magento\Store\Model\System\Store $store
     */
    public function __construct(\Magento\Store\Model\System\Store $store)
    {
        $this->store = $store;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return $this->store->getStoreValuesForForm(false, true);
    }
}
