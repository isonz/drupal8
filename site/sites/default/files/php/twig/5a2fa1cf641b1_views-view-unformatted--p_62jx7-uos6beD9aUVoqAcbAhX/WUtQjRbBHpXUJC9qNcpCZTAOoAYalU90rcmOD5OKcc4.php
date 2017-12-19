<?php

/* themes/soothers/templates/views/views-view-unformatted--product--page-1.html.twig */
class __TwigTemplate_df89c7239d51de491f0a04fa04b311b669e13fd8f06ebc227563664ac66f3ab6 extends Twig_Template
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
        echo "<div id=\"page-content\" class=\"page-width clearfix\">
    <ul class=\"breadcrumb\">
        <li><a href=\"/\">Home</a></li>
        <li>品牌与产品</li>
    </ul>
    <div style=\"font-size: 24px; padding-left: 15px; color:#666;\">Soothers</div>
    <div class=\"product-banner\">
        <img src=\"/";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/product_banner.jpg\" />
        <p>
            SOOTHERS润喉糖为您缓解日常喉咙的刺激。其含有成份包括桉树油、薄荷醇和维生素C；<br>
            口味众多，现有美味的黑加仑味，桉树薄荷醇味，蜂蜜柠檬味和软心柠檬味，以供选择。
        </p>
    </div>

    <p class=\"line\"></p>
    <p class=\"line\"></p>

    <div class=\"product-content\">

        <div class=\"list-box\">

            ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/views/views-view-unformatted--product--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  52 => 8,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"page-content\" class=\"page-width clearfix\">
    <ul class=\"breadcrumb\">
        <li><a href=\"/\">Home</a></li>
        <li>品牌与产品</li>
    </ul>
    <div style=\"font-size: 24px; padding-left: 15px; color:#666;\">Soothers</div>
    <div class=\"product-banner\">
        <img src=\"/{{ directory }}/images/product_banner.jpg\" />
        <p>
            SOOTHERS润喉糖为您缓解日常喉咙的刺激。其含有成份包括桉树油、薄荷醇和维生素C；<br>
            口味众多，现有美味的黑加仑味，桉树薄荷醇味，蜂蜜柠檬味和软心柠檬味，以供选择。
        </p>
    </div>

    <p class=\"line\"></p>
    <p class=\"line\"></p>

    <div class=\"product-content\">

        <div class=\"list-box\">

            {{ rows }}

        </div>
    </div>
</div>", "themes/soothers/templates/views/views-view-unformatted--product--page-1.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/views/views-view-unformatted--product--page-1.html.twig");
    }
}
