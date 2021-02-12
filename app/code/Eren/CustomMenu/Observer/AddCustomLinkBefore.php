<?php

declare(strict_types=1);

namespace Eren\CustomMenu\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddCustomLinkBefore implements ObserverInterface
{
    private $context;

    private $menuHtml;

    public function __construct(\Magento\Framework\View\Element\Context $context)
    {
        $this->context = $context;
    }

    public function execute(Observer $observer)
    {
        $menuHtml = $observer->getData('menu_html');
        $content = $this->context->getLayout()
            ->createBlock('Eren\HelloWorld\Block\Index')
            ->setTemplate('Eren_HelloWorld::index.phtml')
            ->toHtml();

        $menuHtml .= $content;
        $this->menuHtml = $menuHtml;
        return $this;
    }

    public function getMenuHtml()
    {
        return $this->getMenuHtml();
    }
}
