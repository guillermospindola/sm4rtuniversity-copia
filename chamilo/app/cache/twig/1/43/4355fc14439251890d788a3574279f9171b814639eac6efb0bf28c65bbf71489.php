<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_6380c591c14af5b5469c7d9e10985439b7516df1a722f6a09447cfd13964d70d extends Twig_Template
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
        // line 1
        if ((($context["actions"] ?? null) != "")) {
            // line 2
            echo "    ";
            echo ($context["actions"] ?? null);
            echo "
";
        }
        // line 4
        echo ($context["flash_messages"] ?? null);
        echo "
";
        // line 5
        if ((($context["header"] ?? null) != "")) {
            // line 6
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 8
            echo ($context["header"] ?? null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 12
        if ((($context["category"] ?? null) != "")) {
            // line 13
            echo "<div class=\"section-category\">
    <div class=\"page-header\">
        <h3>";
            // line 15
            echo $this->getAttribute(($context["category"] ?? null), "name", array());
            echo "</h3>
    </div>
    <div class=\"description\">
        ";
            // line 18
            echo $this->getAttribute(($context["category"] ?? null), "description", array());
            echo "
    </div>
</div>
";
        }
        // line 22
        echo "
";
        // line 23
        if ((($context["message"] ?? null) != "")) {
            // line 24
            echo "    <section id=\"messages\">
        ";
            // line 25
            echo ($context["message"] ?? null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  68 => 24,  66 => 23,  63 => 22,  56 => 18,  50 => 15,  46 => 13,  44 => 12,  37 => 8,  33 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_body.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/page_body.tpl");
    }
}
