<?php

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_38220fa61ba5aba895dfa5cfc2013d7bcfdfea65d8b378f75a999fe022741153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["template"] ?? null) . "/layout/page.tpl"), "default/layout/layout_1_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 5
            echo "        <div class=\"row\">
            <div id=\"plugin_main_top\" class=\"col-md-12\">
                ";
            // line 7
            echo ($context["plugin_main_top"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 11
        echo "    ";
        if (($context["plugin_content_top"] ?? null)) {
            // line 12
            echo "        <div class=\"row\">
            <div id=\"plugin_content_top\" class=\"col-md-12\">
                ";
            // line 14
            echo ($context["plugin_content_top"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 18
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            ";
        // line 21
        $this->loadTemplate((($context["template"] ?? null) . "/layout/page_body.tpl"), "default/layout/layout_1_col.tpl", 21)->display($context);
        // line 22
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        </div>
    </div>

    ";
        // line 32
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 33
            echo "        <div class=\"row\">
            <div id=\"plugin_content_bottom\" class=\"col-md-12\">
                ";
            // line 35
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 41
            echo "        <div class=\"row\">
            <div id=\"plugin_main_bottom\" class=\"col-md-12\">
                ";
            // line 43
            echo ($context["plugin_main_bottom"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 24
            echo "                    <section id=\"main_content\">
                        ";
            // line 25
            echo ($context["content"] ?? null);
            echo "
                    </section>
                ";
        }
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  96 => 43,  92 => 41,  90 => 40,  87 => 39,  80 => 35,  76 => 33,  74 => 32,  69 => 29,  66 => 22,  64 => 21,  59 => 18,  52 => 14,  48 => 12,  45 => 11,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_1_col.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/layout_1_col.tpl");
    }
}
