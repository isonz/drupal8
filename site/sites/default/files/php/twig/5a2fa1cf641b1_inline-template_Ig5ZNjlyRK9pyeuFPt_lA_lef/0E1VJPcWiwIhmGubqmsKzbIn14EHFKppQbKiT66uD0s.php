<?php

/* {# inline_template_start #}<div class="box">
    {{ field_image }}
    <h5>{{ title }} </h5>
    <a href="{{ field_vip_link }} " class="vip"><img src="/themes/soothers/images/vip-buy.png" /></a>
</div> */
class __TwigTemplate_1889910031ec7d850bd3c8f265b66041c5b28d54ddc2358cce5cf2874bd96720 extends Twig_Template
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
        echo "<div class=\"box\">
    ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
    <h5>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </h5>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_vip_link"]) ? $context["field_vip_link"] : null), "html", null, true));
        echo " \" class=\"vip\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"box\">
    {{ field_image }}
    <h5>{{ title }} </h5>
    <a href=\"{{ field_vip_link }} \" class=\"vip\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"box\">
    {{ field_image }}
    <h5>{{ title }} </h5>
    <a href=\"{{ field_vip_link }} \" class=\"vip\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
</div>", "{# inline_template_start #}<div class=\"box\">
    {{ field_image }}
    <h5>{{ title }} </h5>
    <a href=\"{{ field_vip_link }} \" class=\"vip\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
</div>", "");
    }
}
