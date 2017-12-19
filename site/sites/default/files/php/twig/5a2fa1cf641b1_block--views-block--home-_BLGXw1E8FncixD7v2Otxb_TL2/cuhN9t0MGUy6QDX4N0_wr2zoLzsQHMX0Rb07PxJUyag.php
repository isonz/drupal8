<?php

/* themes/soothers/templates/block/block--views-block--home-product-block-1.html.twig */
class __TwigTemplate_ed04228fde6e330dd5aeb750edeb5cdedc0e0c41e50aad776445fbcfe2d00c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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
    <div class=\"center-logo\">

        <br><br>
        <div class=\"home-activity-content clearfix\">

            ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "
        </div>
    </div>
</div>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/block/block--views-block--home-product-block-1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  61 => 7,  54 => 10,  52 => 7,  44 => 1,);
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
    <div class=\"center-logo\">

        <br><br>
        <div class=\"home-activity-content clearfix\">

            {% block content %}
                {{ content }}
            {% endblock %}

        </div>
    </div>
</div>", "themes/soothers/templates/block/block--views-block--home-product-block-1.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/block/block--views-block--home-product-block-1.html.twig");
    }
}
