<?php

/* themes/soothers/templates/block/block--soothers-footer.html.twig */
class __TwigTemplate_82e03a493b1041da173d8d59d70a95424f77aa8eeb72c7cb0f33a6685df5eb17 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"page-width\">
        <div class=\"left\">
            <p><img src=\"/";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/nestle.png\"></p>
            <p>提升生活品质，贡献于更健康的未来。</p>
        </div>
        <div class=\"right\">
            <div class=\"nav page-width\">
                <ul>
                    <li><a href=\"/\"></li>
                    <li><a href=\"/about\">关于舒丝尔</a></li>
                    <li><a href=\"/product\">品牌与产品</a></li>
                    <!-- <li><a href=\"/contact\">联系我们</a></li> -->
                    <li><a href=\"http://www.nestle.com/\">雀巢集团</a></li>
                    <li><a href=\"http://www.nestle.com.au/\">雀巢澳洲</a></li>
                    <li><a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\">粤ICP备17119071号-1</a></li>
                    <li>© 2017 舒丝尔©版权所有</li>
                </ul>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/soothers/templates/block/block--soothers-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"page-width\">
        <div class=\"left\">
            <p><img src=\"/{{ directory }}/images/nestle.png\"></p>
            <p>提升生活品质，贡献于更健康的未来。</p>
        </div>
        <div class=\"right\">
            <div class=\"nav page-width\">
                <ul>
                    <li><a href=\"/\"></li>
                    <li><a href=\"/about\">关于舒丝尔</a></li>
                    <li><a href=\"/product\">品牌与产品</a></li>
                    <!-- <li><a href=\"/contact\">联系我们</a></li> -->
                    <li><a href=\"http://www.nestle.com/\">雀巢集团</a></li>
                    <li><a href=\"http://www.nestle.com.au/\">雀巢澳洲</a></li>
                    <li><a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\">粤ICP备17119071号-1</a></li>
                    <li>© 2017 舒丝尔©版权所有</li>
                </ul>
            </div>
        </div>
    </div>
</div>

", "themes/soothers/templates/block/block--soothers-footer.html.twig", "/Users/ison/PHP/CMS/drupal/site/themes/soothers/templates/block/block--soothers-footer.html.twig");
    }
}
