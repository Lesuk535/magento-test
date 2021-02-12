<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/code/Rokanthemes/CustomMenu/view/frontend/templates/custom_catalog.twig */
class __TwigTemplate_1c73fbe7e851dc88c3871251d0a4638a6530455b798ea8bae89a6cef519e7caf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<li class=\"ui-menu-item level0 staticwidth menu-item-has-children parent\">
    <div class=\"open-children-toggle\">
    </div>
    ";
        // line 4
        $context["test"] = 1;
        // line 5
        echo "    <a class=\"level-top\">
        ";
        // line 6
        if ((0 === twig_compare((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 6, $this->source); })()), true))) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getTwigTest')->getCallable(), ["TwigTest"]), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            ";
            echo "false :(";
            echo "
        ";
        }
        // line 11
        echo "    </a>
    <div class=\"level0 submenu\" style=\"width: 1000px; left: auto; right: 0px; border-radius: 6px 0px 6px 6px;\">
        <div class=\"menu-top-block\">
            <div class=\"block-top-for-women\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3\"><img src=\"http://blueskytechmage.com/eren/pub/media/wysiwyg/wmenu1.jpg\" width=\"255\" height=\"135\"></div>
                    <div class=\"col-md-3 col-sm-3\"><img src=\"http://blueskytechmage.com/eren/pub/media/wysiwyg/wmenu2.jpg\" width=\"255\" height=\"135\"></div>
                    <div class=\"col-md-3 col-sm-3\"><img src=\"http://blueskytechmage.com/eren/pub/media/wysiwyg/wmenu3.jpg\" width=\"255\" height=\"135\"></div>
                    <div class=\"col-md-3 col-sm-3\"><img src=\"http://blueskytechmage.com/eren/pub/media/wysiwyg/wmenu4.jpg\" width=\"255\" height=\"135\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <ul class=\"subchildmenu col-sm-12 mega-columns columns5\">
                <li class=\"ui-menu-item level1 parent \">
                    <div class=\"open-children-toggle\"></div>
                    <a href=\"http://blueskytechmage.com/eren/en7/products/shirt.html\">
                        <span>Shirt</span>
                    </a>
                    <ul class=\"subchildmenu \">
                        <li class=\"ui-menu-item level2 \">
                            <a href=\"http://blueskytechmage.com/eren/en7/products/shirt/accessories.html\">
                                <span>Accessories</span>
                            </a>
                        </li>
                        <li class=\"ui-menu-item level2 \"><a href=\"http://blueskytechmage.com/eren/en7/products/shirt/apparel.html\">
                                <span>Apparel</span>
                            </a>
                        </li>
                        <li class=\"ui-menu-item level2 \"><a href=\"http://blueskytechmage.com/eren/en7/products/shirt/bedside-tables.html\">
                                <span>Bedside Tables</span>
                            </a>
                        </li>
                        <li class=\"ui-menu-item level2 \">
                            <a href=\"http://blueskytechmage.com/eren/en7/products/shirt/access.html\">
                                <span>Access</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "app/code/Rokanthemes/CustomMenu/view/frontend/templates/custom_catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 9,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app/code/Rokanthemes/CustomMenu/view/frontend/templates/custom_catalog.twig", "/app/app/code/Rokanthemes/CustomMenu/view/frontend/templates/custom_catalog.twig");
    }
}
