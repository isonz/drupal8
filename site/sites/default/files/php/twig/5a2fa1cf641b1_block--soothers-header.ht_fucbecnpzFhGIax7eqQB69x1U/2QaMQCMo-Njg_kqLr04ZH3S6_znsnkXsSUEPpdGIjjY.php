<?php

/* themes/soothers/templates/block/block--soothers-header.html.twig */
class __TwigTemplate_8770b3789ed5ea07e383708c2dc6c160cfcda160c7e9542efbba1a1a7c6caa03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"header\" class=\"clearfix page-width\">

    <div id=\"top_header\" class=\"clearfix\">
        <a href=\"/\"><img src=\"/";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logo.png\"></a>
    </div>

    <div id=\"mo_top_menu\" class=\"navbar-header navbar-default\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">导航条</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>

    <div id=\"top_menu\" class=\"page-width clearfix navbar-default navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"/\"><img src=\"/";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/home.png\"></a></li>
            <li><a href=\"/about\">关于舒丝尔</a></li>
            <li><a href=\"/product\">品牌与产品</a></li>
        </ul>
    </div>

    <p></p>

    <div class=\"header-extent\">
        <p>
            <a href=\"http://www.nestle.com/\">雀巢集团</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href=\"http://www.nestle.com.au/\">雀巢澳洲</a>
        </p>
        <p>
            <a href=\"http://weibo.com/soothers\" target=\"_blank\"><img src=\"/";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/weibo.png\"></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=\"##\" class=\"weixinqrcode\"><img src=\"/";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/weixin.png\"></a>
            &nbsp;
        </p>
        <img src=\"/";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/weixin_qrcode.jpg\" id=\"weixinQRcode\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/block/block--soothers-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  88 => 35,  83 => 33,  65 => 18,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\" class=\"clearfix page-width\">

    <div id=\"top_header\" class=\"clearfix\">
        <a href=\"/\"><img src=\"/{{ directory }}/images/logo.png\"></a>
    </div>

    <div id=\"mo_top_menu\" class=\"navbar-header navbar-default\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">导航条</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>

    <div id=\"top_menu\" class=\"page-width clearfix navbar-default navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"/\"><img src=\"/{{ directory }}/images/home.png\"></a></li>
            <li><a href=\"/about\">关于舒丝尔</a></li>
            <li><a href=\"/product\">品牌与产品</a></li>
        </ul>
    </div>

    <p></p>

    <div class=\"header-extent\">
        <p>
            <a href=\"http://www.nestle.com/\">雀巢集团</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href=\"http://www.nestle.com.au/\">雀巢澳洲</a>
        </p>
        <p>
            <a href=\"http://weibo.com/soothers\" target=\"_blank\"><img src=\"/{{ directory }}/images/weibo.png\"></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=\"##\" class=\"weixinqrcode\"><img src=\"/{{ directory }}/images/weixin.png\"></a>
            &nbsp;
        </p>
        <img src=\"/{{ directory }}/images/weixin_qrcode.jpg\" id=\"weixinQRcode\">
    </div>
</div>", "themes/soothers/templates/block/block--soothers-header.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/block/block--soothers-header.html.twig");
    }
}
