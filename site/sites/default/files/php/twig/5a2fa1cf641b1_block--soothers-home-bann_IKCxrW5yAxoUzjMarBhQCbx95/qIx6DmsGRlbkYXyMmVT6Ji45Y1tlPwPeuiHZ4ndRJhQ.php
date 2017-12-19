<?php

/* themes/soothers/templates/block/block--soothers-home-banner.html.twig */
class __TwigTemplate_423038a3bf450f030eb73ddd96a5a80d8890c066a0db933444518ea40b12b482 extends Twig_Template
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
        echo "<div class=\"page-width\"><div id=\"banners\"></div></div>

<script>
    var banners = '<a href=\"##\" style=\"background:url(/";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/banners/1.jpg) center no-repeat; background-size: cover;\"></a>';
    banners +='<a href=\"##\" style=\"background:url(/";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/banners/2.jpg) center no-repeat; background-size: cover;\"></a>';
    banners +='<a href=\"##\" style=\"background:url(/";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/banners/3.jpg) center no-repeat; background-size: cover;\"></a>';
</script>

";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/block/block--soothers-home-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-width\"><div id=\"banners\"></div></div>

<script>
    var banners = '<a href=\"##\" style=\"background:url(/{{ directory }}/images/banners/1.jpg) center no-repeat; background-size: cover;\"></a>';
    banners +='<a href=\"##\" style=\"background:url(/{{ directory }}/images/banners/2.jpg) center no-repeat; background-size: cover;\"></a>';
    banners +='<a href=\"##\" style=\"background:url(/{{ directory }}/images/banners/3.jpg) center no-repeat; background-size: cover;\"></a>';
</script>

", "themes/soothers/templates/block/block--soothers-home-banner.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/block/block--soothers-home-banner.html.twig");
    }
}
