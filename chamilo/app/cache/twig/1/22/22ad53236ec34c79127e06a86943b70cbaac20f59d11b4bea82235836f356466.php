<?php

/* default/layout/course_navigation.tpl */
class __TwigTemplate_34f18e6b9c4e183ed804b0bfb1dd17033bb8760d8c1457c4e830ab736520bc3a extends Twig_Template
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
        // line 2
        if ((($context["show_header"] ?? null) == true)) {
            // line 3
            echo "    ";
            if ( !(null === ($context["show_course_navigation_menu"] ?? null))) {
                // line 4
                echo "        <div class=\"nav-tools\">
            ";
                // line 5
                echo ($context["show_course_navigation_menu"] ?? null);
                echo "
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/course_navigation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/course_navigation.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/course_navigation.tpl");
    }
}
