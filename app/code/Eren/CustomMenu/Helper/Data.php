<?php

declare(strict_types=1);

namespace Eren\CustomMenu\Helper;

use Magento\Framework\View\Element\Context;

final class Data
{
    private Context $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function getCustomBlockHtml()
    {
        return $content = $this->context->getLayout()
            ->createBlock('Eren\HelloWorld\Block\Index')
            ->setTemplate('Eren_HelloWorld::index.phtml')
            ->toHtml();
    }
}
