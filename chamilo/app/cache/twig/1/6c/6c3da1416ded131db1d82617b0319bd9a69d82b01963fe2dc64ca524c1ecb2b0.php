<?php

/* default/layout/page_header.tpl */
class __TwigTemplate_aa4d394a6b4a249385f717fe7a32fb1896a256e7cbdba7454ec65dfd3cd640d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 2
        echo ($context["help_content"] ?? null);
        echo "
    ";
        // line 3
        echo ($context["bug_notification"] ?? null);
        echo "
</div>
";
        // line 5
        $this->displayBlock('topbar', $context, $blocks);
        // line 8
        echo "<div class=\"extra-header\">";
        echo ($context["header_extra_content"] ?? null);
        echo "</div>
<header id=\"header-section\" class=\"header-movil\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    ";
        // line 14
        echo ($context["logo"] ?? null);
        echo "
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 20
        if ( !(null === ($context["plugin_header_left"] ?? null))) {
            // line 21
            echo "                            <div id=\"plugin_header_left\">
                                ";
            // line 22
            echo ($context["plugin_header_left"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 25
        echo "                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 27
        if ( !(null === ($context["plugin_header_center"] ?? null))) {
            // line 28
            echo "                            <div id=\"plugin_header_center\">
                                ";
            // line 29
            echo ($context["plugin_header_center"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 32
        echo "                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 34
        if ( !(null === ($context["plugin_header_right"] ?? null))) {
            // line 35
            echo "                            <div id=\"plugin_header_right\">
                                ";
            // line 36
            echo ($context["plugin_header_right"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 39
        echo "                        <script>
                            \$(document).on('ready', function () {
                                \$(\"#notifications\").load(\"";
        // line 41
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "inc/ajax/online.ajax.php?a=get_users_online\");
                            });
                        </script>
                        <div class=\"section-notifications\">
                            <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                            </ul>
                        </div>
                        ";
        // line 48
        echo ($context["accessibility"] ?? null);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
";
        // line 55
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        $this->loadTemplate((($context["template"] ?? null) . "/layout/course_navigation.tpl"), "default/layout/page_header.tpl", 58)->display($context);
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate((($context["template"] ?? null) . "/layout/topbar.tpl"), "default/layout/page_header.tpl", 6)->display($context);
    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->loadTemplate((($context["template"] ?? null) . "/layout/menu.tpl"), "default/layout/page_header.tpl", 56)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  133 => 55,  128 => 6,  125 => 5,  121 => 58,  119 => 55,  109 => 48,  99 => 41,  95 => 39,  89 => 36,  86 => 35,  84 => 34,  80 => 32,  74 => 29,  71 => 28,  69 => 27,  65 => 25,  59 => 22,  56 => 21,  54 => 20,  45 => 14,  35 => 8,  33 => 5,  28 => 3,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_header.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\page_header.tpl");
    }
}
