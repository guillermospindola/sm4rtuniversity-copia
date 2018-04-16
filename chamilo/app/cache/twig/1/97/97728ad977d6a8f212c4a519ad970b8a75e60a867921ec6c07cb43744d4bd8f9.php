<?php

/* default/gradebook/my_certificates.tpl */
class __TwigTemplate_150f468797d8289b192680a4cb64d3252db87923f6b65bc42798bd694593f065 extends Twig_Template
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
        if ( !twig_test_empty(($context["course_list"] ?? null))) {
            // line 2
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Courses");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 7
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 8
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 9
            echo get_lang("Date");
            echo "</th>
                    <th class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["course_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "                    <tr>
                        <td>";
                // line 16
                echo $this->getAttribute($context["row"], "course", array());
                echo "</td>
                        <td class=\"text-right\">";
                // line 17
                echo $this->getAttribute($context["row"], "score", array());
                echo "</td>
                        <td class=\"text-center\">";
                // line 18
                echo $this->getAttribute($context["row"], "date", array());
                echo "</td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 20
                echo $this->getAttribute($context["row"], "link", array());
                echo "\" target=\"_blank\" class=\"btn btn-default\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 21
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </tbody>
        </table>
    </div>
";
        }
        // line 30
        echo "
";
        // line 31
        if ( !twig_test_empty(($context["session_list"] ?? null))) {
            // line 32
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Sessions");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 37
            echo get_lang("Session");
            echo "</th>
                    <th>";
            // line 38
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 39
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 40
            echo get_lang("Date");
            echo "</th>
                    <th class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 46
                echo "                    <tr>
                        <td>";
                // line 47
                echo $this->getAttribute($context["row"], "session", array());
                echo "</td>
                        <td>";
                // line 48
                echo $this->getAttribute($context["row"], "course", array());
                echo "</td>
                        <td class=\"text-right\">";
                // line 49
                echo $this->getAttribute($context["row"], "score", array());
                echo "</td>
                        <td class=\"text-center\">";
                // line 50
                echo $this->getAttribute($context["row"], "date", array());
                echo "</td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 52
                echo $this->getAttribute($context["row"], "link", array());
                echo "\" target=\"_blank\" class=\"btn btn-default\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 53
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tbody>
        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/gradebook/my_certificates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  149 => 53,  145 => 52,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  125 => 46,  121 => 45,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  92 => 32,  90 => 31,  87 => 30,  81 => 26,  70 => 21,  66 => 20,  61 => 18,  57 => 17,  53 => 16,  50 => 15,  46 => 14,  38 => 9,  34 => 8,  30 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/gradebook/my_certificates.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/gradebook/my_certificates.tpl");
    }
}
