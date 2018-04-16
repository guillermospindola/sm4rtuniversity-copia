<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_c05b9b760c6d928205d96b159f0ac6d0f349e882a9c7d92caa6f4caa87dbfb35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html lang=\"";
        // line 5
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html lang=\"";
        // line 7
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 9
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
    ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body dir=\"";
        // line 15
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo " ";
        echo ($context["login_class"] ?? null);
        echo "\">
<noscript>";
        // line 16
        echo get_lang("NoJavascript");
        echo "</noscript>
";
        // line 17
        if ((($context["show_header"] ?? null) == true)) {
            // line 18
            echo "    <div class=\"wrap\">
        ";
            // line 19
            if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
                // line 20
                echo "            <!-- Display Cookies validation -->
            <div class=\"toolbar-cookie alert-warning\">
                <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                    <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                    <div class=\"cookieUsageValidation\">
                        ";
                // line 25
                echo get_lang("YouAcceptCookies");
                echo "
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                        (";
                // line 27
                echo get_lang("More");
                echo ")
                    </span>
                        <div style=\"display:none; margin:20px 0;\">
                            ";
                // line 30
                echo get_lang("HelpCookieUsageValidation");
                echo "
                        </div>
                        <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                        (";
                // line 33
                echo get_lang("Accept");
                echo ")
                    </span>
                    </div>
                </form>
            </div>
        ";
            }
            // line 39
            echo "        ";
            $this->loadTemplate((($context["template"] ?? null) . "/layout/page_header.tpl"), "default/layout/show_header.tpl", 39)->display($context);
            // line 40
            echo "        ";
            if ( !(null === ($context["show_course_shortcut"] ?? null))) {
                // line 41
                echo "            <div class=\"nav-tools\">
                ";
                // line 42
                echo ($context["show_course_shortcut"] ?? null);
                echo "
            </div>
        ";
            }
            // line 45
            echo "        <section id=\"content-section\">
            <div class=\"container\">
                ";
            // line 47
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 52
            echo "                ";
            echo ($context["flash_messages"] ?? null);
            echo "
";
        }
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->loadTemplate((($context["template"] ?? null) . "/layout/head.tpl"), "default/layout/show_header.tpl", 12)->display($context);
        // line 13
        echo "    ";
    }

    // line 47
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 48
        echo "                    <div id=\"page-breadcrumb\">
                        ";
        // line 49
        echo ($context["breadcrumb"] ?? null);
        echo "
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  144 => 48,  141 => 47,  137 => 13,  134 => 12,  131 => 11,  123 => 52,  121 => 47,  117 => 45,  111 => 42,  108 => 41,  105 => 40,  102 => 39,  93 => 33,  87 => 30,  81 => 27,  76 => 25,  69 => 20,  67 => 19,  64 => 18,  62 => 17,  58 => 16,  50 => 15,  47 => 14,  45 => 11,  40 => 9,  35 => 7,  30 => 5,  25 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_header.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\show_header.tpl");
    }
}
