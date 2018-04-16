<?php

/* default/layout/page_footer.tpl */
class __TwigTemplate_fbb16cdab7ffc43736e3abb889b06a5a32066418c03022fe337a97e358b716bd extends Twig_Template
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
        echo "<footer id=\"footer-section\" class=\"sticky-footer bgfooter\">
    <div class=\"container\">
        <div class=\"pre-footer\">
            ";
        // line 4
        if ( !(null === ($context["plugin_pre_footer"] ?? null))) {
            // line 5
            echo "            <div id=\"plugin_pre_footer\">
                ";
            // line 6
            echo ($context["plugin_pre_footer"] ?? null);
            echo "
            </div>
            ";
        }
        // line 9
        echo "        </div>
        <div class=\"sub-footer\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
        // line 13
        if ( !(null === ($context["session_teachers"] ?? null))) {
            // line 14
            echo "                    <div class=\"session-teachers\">
                        ";
            // line 15
            echo ($context["session_teachers"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 18
        echo "                    ";
        if ( !(null === ($context["teachers"] ?? null))) {
            // line 19
            echo "                    <div class=\"teachers\">
                        ";
            // line 20
            echo ($context["teachers"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 23
        echo "                    ";
        if ( !(null === ($context["plugin_footer_left"] ?? null))) {
            // line 24
            echo "                    <div id=\"plugin_footer_left\">
                        ";
            // line 25
            echo ($context["plugin_footer_left"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 28
        echo "                </div>
                <div class=\"col-md-4\">
                    ";
        // line 30
        if ( !(null === ($context["plugin_footer_center"] ?? null))) {
            // line 31
            echo "                    <div id=\"plugin_footer_center\">
                        ";
            // line 32
            echo ($context["plugin_footer_center"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 35
        echo "                </div>
                <div class=\"col-md-4 text-right\">
                    ";
        // line 37
        if ( !(null === ($context["administrator_name"] ?? null))) {
            // line 38
            echo "                    <div class=\"administrator-name\">
                        ";
            // line 39
            echo ($context["administrator_name"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 42
        echo "
                    ";
        // line 43
        if ( !twig_test_empty($this->getAttribute(($context["_s"] ?? null), "software_name", array()))) {
            // line 44
            echo "                        <div class=\"software-name\">
                            <a href=\"";
            // line 45
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "\" target=\"_blank\">
                                ";
            // line 46
            echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", array()));
            echo "
                            </a>&copy; ";
            // line 47
            echo twig_date_format_filter($this->env, "now", "Y");
            echo "
                        </div>
                    ";
        }
        // line 50
        echo "
                    ";
        // line 51
        if ( !(null === ($context["plugin_footer_right"] ?? null))) {
            // line 52
            echo "                    <div id=\"plugin_footer_right\">
                        ";
            // line 53
            echo ($context["plugin_footer_right"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 56
        echo "                </div>
            </div>
        </div>
        <div class=\"extra-footer\">
            ";
        // line 60
        echo ($context["footer_extra_content"] ?? null);
        echo "
        </div>
    </div>
</footer>

<div class=\"modal fade\" id=\"expand-image-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expand-image-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 69
        echo get_lang("Close");
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"expand-image-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        // line 78
        echo "<div class=\"modal fade\" id=\"global-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"global-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 82
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"global-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 93
        echo ($context["execution_stats"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/layout/page_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 93,  177 => 82,  171 => 78,  160 => 69,  148 => 60,  142 => 56,  136 => 53,  133 => 52,  131 => 51,  128 => 50,  122 => 47,  118 => 46,  114 => 45,  111 => 44,  109 => 43,  106 => 42,  100 => 39,  97 => 38,  95 => 37,  91 => 35,  85 => 32,  82 => 31,  80 => 30,  76 => 28,  70 => 25,  67 => 24,  64 => 23,  58 => 20,  55 => 19,  52 => 18,  46 => 15,  43 => 14,  41 => 13,  35 => 9,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_footer.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\page_footer.tpl");
    }
}
