<?php

declare(strict_types=1);

namespace Eren\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function getHelloWorld()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $categoryHelper = $objectManager->get('\Magento\Catalog\Helper\Category');
        $categories = $categoryHelper->getStoreCategories();

        return $categories;
    }
}
