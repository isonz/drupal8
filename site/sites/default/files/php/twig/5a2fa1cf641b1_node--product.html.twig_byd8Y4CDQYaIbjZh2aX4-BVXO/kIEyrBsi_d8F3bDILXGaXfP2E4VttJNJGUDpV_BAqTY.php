<?php

/* themes/soothers/templates/node/node--product.html.twig */
class __TwigTemplate_71c63f1f8c2e153a2ccc3b94ba5d6671003b7021901af84b7ca0625e45d84f03 extends Twig_Template
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
        <li><a href=\"/product/\">品牌与产品</a></li>
        <li>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</li>
    </ul>

    <div class=\"product-content\">
        <h2>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</h2>
        <p class=\"line\"></p>
        <br><br>

        <div class=\"content-body\">
            ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/node/node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  56 => 9,  49 => 5,  43 => 1,);
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
        <li><a href=\"/product/\">品牌与产品</a></li>
        <li>{{ label }}</li>
    </ul>

    <div class=\"product-content\">
        <h2>{{ label }}</h2>
        <p class=\"line\"></p>
        <br><br>

        <div class=\"content-body\">
            {{ content.field_image }}
            {{ content.body }}
        </div>
    </div>
</div>", "themes/soothers/templates/node/node--product.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/node/node--product.html.twig");
    }
}
