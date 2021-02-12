<?php

declare(strict_types=1);

namespace Eren\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Index implements HttpGetActionInterface
{
    private PageFactory $resultPageFactory;

    private Context $context;

    public function __construct(PageFactory $resultPageFactory, Context $context)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->context = $context;
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
