<?php
namespace Rokanthemes\CustomMenu\Block;

use Magento\Catalog\Helper\Category;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Model\Indexer\Category\Flat\State;
use Magento\Cms\Model\BlockFactory;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Framework\View\Element\Context;
use Magento\Framework\View\Element\Template;
use Rokanthemes\CustomMenu\Helper\Data;
use Magento\Framework\Filesystem;

class Topmenu extends Template
{
    protected $_categoryHelper;
    protected $_categoryFlatConfig;
    protected $_topMenu;
    protected $_categoryFactory;
    protected $_helper;
    protected $_filterProvider;
    protected $_blockFactory;
    protected $_custommenuConfig;
    protected $_storeManager;
    private Context $viewContext;

    public function __construct(
        Template\Context $context,
        Category $categoryHelper,
        Data $helper,
        State $categoryFlatState,
        CategoryFactory $categoryFactory,
        \Magento\Theme\Block\Html\Topmenu $topMenu,
        FilterProvider $filterProvider,
        BlockFactory $blockFactory,
        Context $viewContext
    ) {
        $this->_categoryHelper = $categoryHelper;
        $this->_categoryFlatConfig = $categoryFlatState;
        $this->_categoryFactory = $categoryFactory;
        $this->_topMenu = $topMenu;
        $this->_helper = $helper;
        $this->_filterProvider = $filterProvider;
        $this->_blockFactory = $blockFactory;
        $this->_storeManager = $context->getStoreManager();
        $this->viewContext = $viewContext;
        $this->_custommenuConfig = $this->_helper->getConfig('custommenu');

        parent::__construct($context);
    }

    public function getCustomMenuConfig()
    {
        return $this->_custommenuConfig;
    }

    public function getCategoryHelper()
    {
        return $this->_categoryHelper;
    }

    public function getCategoryModel($id)
    {
        $_category = $this->_categoryFactory->create();
        $_category->load($id);

        return $_category;
    }

    public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
    {
        return $this->_categoryHelper->getStoreCategories($sorted , $asCollection, $toLoad);
    }

    public function getChildCategories($category)
    {
        if ($this->_categoryFlatConfig->isFlatEnabled() && $category->getUseFlatResource()) {
            $subcategories = (array)$category->getChildrenNodes();
        } else {
            $subcategories = $category->getChildren();
        }

        return $subcategories;
    }

    public function getActiveChildCategories($category)
    {
        $children = [];
        if ($this->_categoryFlatConfig->isFlatEnabled() && $category->getUseFlatResource()) {
            $subcategories = (array)$category->getChildrenNodes();
        } else {
            $subcategories = $category->getChildrenCategories();
        }

        foreach($subcategories as $category) {
            if (!$category->getIsActive()) {
                continue;
            }
            $children[] = $category;
        }

        return $children;
    }

    public function getCategoryUrl($category)
    {
        return $this->_categoryHelper->getCategoryUrl($category);
    }

    public function getTemplatePath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '../view/frontend/templates/';
    }
}
