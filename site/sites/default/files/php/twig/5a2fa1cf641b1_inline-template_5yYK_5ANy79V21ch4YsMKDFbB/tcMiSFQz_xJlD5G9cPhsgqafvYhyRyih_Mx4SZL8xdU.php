<?php

/* {# inline_template_start #}<div class="box clearfix">
    <div class="img">
        {{ field_image }}
    </div>
    <div class="small-prev">
        <h4>
            {{ title }}
            <a href="{{ field_vip_link }} " class="vip" target="_blank"><img src="/themes/soothers/images/vip-buy.png" /></a>
        </h4>
        <p class="line"></p>
        <div class="description">{{ field_product_description }}</div>
        <span><a href="{{ path }}">阅读更多</a></span>
    </div>
</div> */
class __TwigTemplate_64687efa0be52f36ca1715162594aadd0a6bd39d2ebfff7893cf618f9f933958 extends Twig_Template
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
        echo "<div class=\"box clearfix\">
    <div class=\"img\">
        ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
    </div>
    <div class=\"small-prev\">
        <h4>
            ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_vip_link"]) ? $context["field_vip_link"] : null), "html", null, true));
        echo " \" class=\"vip\" target=\"_blank\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
        </h4>
        <p class=\"line\"></p>
        <div class=\"description\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_product_description"]) ? $context["field_product_description"] : null), "html", null, true));
        echo "</div>
        <span><a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\">阅读更多</a></span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"box clearfix\">
    <div class=\"img\">
        {{ field_image }}
    </div>
    <div class=\"small-prev\">
        <h4>
            {{ title }}
            <a href=\"{{ field_vip_link }} \" class=\"vip\" target=\"_blank\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
        </h4>
        <p class=\"line\"></p>
        <div class=\"description\">{{ field_product_description }}</div>
        <span><a href=\"{{ path }}\">阅读更多</a></span>
    </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  77 => 11,  71 => 8,  67 => 7,  60 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"box clearfix\">
    <div class=\"img\">
        {{ field_image }}
    </div>
    <div class=\"small-prev\">
        <h4>
            {{ title }}
            <a href=\"{{ field_vip_link }} \" class=\"vip\" target=\"_blank\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
        </h4>
        <p class=\"line\"></p>
        <div class=\"description\">{{ field_product_description }}</div>
        <span><a href=\"{{ path }}\">阅读更多</a></span>
    </div>
</div>", "{# inline_template_start #}<div class=\"box clearfix\">
    <div class=\"img\">
        {{ field_image }}
    </div>
    <div class=\"small-prev\">
        <h4>
            {{ title }}
            <a href=\"{{ field_vip_link }} \" class=\"vip\" target=\"_blank\"><img src=\"/themes/soothers/images/vip-buy.png\" /></a>
        </h4>
        <p class=\"line\"></p>
        <div class=\"description\">{{ field_product_description }}</div>
        <span><a href=\"{{ path }}\">阅读更多</a></span>
    </div>
</div>", "");
    }
}
