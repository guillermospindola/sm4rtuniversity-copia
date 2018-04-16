<?php

/* default/export/table_pdf.tpl */
class __TwigTemplate_52ae7a9bd4c5bce59ac75b08c6ab4498824c44794c1d7d0f3113a75926bcba80 extends Twig_Template
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
        if (($context["pdf_title"] ?? null)) {
            // line 2
            echo "<h2 align=\"center\"> ";
            echo ($context["pdf_title"] ?? null);
            echo " </h2>
";
        }
        // line 4
        echo "
";
        // line 5
        if (($context["pdf_description"] ?? null)) {
            // line 6
            echo "    ";
            echo ($context["pdf_description"] ?? null);
            echo "
    <br /><br />
";
        }
        // line 9
        echo "
<table align=\"center\" width=\"100%\" class=\"full-width border-thin\">
    ";
        // line 11
        if (($context["pdf_student_info"] ?? null)) {
            // line 12
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px; \">
            <strong>";
            // line 14
            echo get_lang("Student");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 17
            echo $this->getAttribute(($context["pdf_student_info"] ?? null), "complete_name", array());
            echo "
        </td>
    </tr>
    ";
        }
        // line 21
        echo "    ";
        if (($context["pdf_teachers"] ?? null)) {
            // line 22
            echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
            // line 24
            echo get_lang("Teacher");
            echo ":</strong>
            </td>
            <td>
                ";
            // line 27
            echo ($context["pdf_teachers"] ?? null);
            echo "
            </td>
        </tr>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (($context["pdf_session_info"] ?? null)) {
            // line 33
            echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
            // line 35
            echo get_lang("Session");
            echo ":</strong> ";
            echo $this->getAttribute(($context["pdf_session_info"] ?? null), "name", array());
            echo "
            </td>

            ";
            // line 38
            if ($this->getAttribute(($context["pdf_session_info"] ?? null), "description", array())) {
                // line 39
                echo "            <td>
                <strong>";
                // line 40
                echo get_lang("Description");
                echo ":</strong> ";
                echo $this->getAttribute(($context["pdf_session_info"] ?? null), "description", array());
                echo "
            </td>
            ";
            }
            // line 43
            echo "        </tr>

        ";
            // line 45
            if (((($this->getAttribute(($context["pdf_session_info"] ?? null), "access_start_date", array()) != "") &&  !twig_test_empty($this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", array()))) && ($this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", array()) != "0000-00-00"))) {
                // line 46
                echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
                // line 48
                echo get_lang("PeriodToDisplay");
                echo ":</strong>
            </td>
            <td>
                ";
                // line 51
                echo sprintf(get_lang("FromDateXToDateY"), $this->getAttribute(($context["pdf_session_info"] ?? null), "access_start_date", array()), $this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", array()));
                echo "
            </td>
        </tr>
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (($context["pdf_course_info"] ?? null)) {
            // line 58
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
            <strong>";
            // line 60
            echo get_lang("Course");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 63
            echo $this->getAttribute(($context["pdf_course_info"] ?? null), "title", array());
            echo " (";
            echo $this->getAttribute(($context["pdf_course_info"] ?? null), "code", array());
            echo ")
        </td>
    </tr>
        ";
            // line 66
            if (($context["pdf_course_category"] ?? null)) {
                // line 67
                echo "            <tr>
                <td> <strong>";
                // line 68
                echo get_lang("Category");
                echo ":</strong></td>
                <td> ";
                // line 69
                echo ($context["pdf_course_category"] ?? null);
                echo " </td>
            </tr>
        ";
            }
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if (($context["pdf_date"] ?? null)) {
            // line 75
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
            <strong>";
            // line 77
            echo get_lang("Date");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 80
            echo ($context["pdf_date"] ?? null);
            echo "
        </td>
    </tr>
    ";
        }
        // line 84
        echo "</table>
<br />

";
        // line 87
        if ((($context["show_grade_generated_date"] ?? null) == true)) {
            // line 88
            echo "<h5 align=\"right\">
    ";
            // line 89
            echo sprintf(get_lang("GradeGeneratedOnX"), twig_date_format_filter($this->env, "now", "d/m/Y"));
            echo "
</h5>
";
        }
        // line 92
        echo "
";
        // line 93
        echo ($context["pdf_content"] ?? null);
        echo "

";
        // line 95
        if ( !twig_test_empty(($context["add_signatures"] ?? null))) {
            // line 96
            echo "    <br />
    <br />

    <table class=\"full-width\">
        <tr>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["add_signatures"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["signature"]) {
                // line 102
                echo "                <td class=\"text-center\">
                    _____________________________
                    <br />
                    ";
                // line 105
                echo get_lang($context["signature"]);
                echo "
                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </tr>
    </table>
";
        }
        // line 111
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/export/table_pdf.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 111,  252 => 108,  243 => 105,  238 => 102,  234 => 101,  227 => 96,  225 => 95,  220 => 93,  217 => 92,  211 => 89,  208 => 88,  206 => 87,  201 => 84,  194 => 80,  188 => 77,  184 => 75,  182 => 74,  179 => 73,  176 => 72,  170 => 69,  166 => 68,  163 => 67,  161 => 66,  153 => 63,  147 => 60,  143 => 58,  141 => 57,  138 => 56,  135 => 55,  128 => 51,  122 => 48,  118 => 46,  116 => 45,  112 => 43,  104 => 40,  101 => 39,  99 => 38,  91 => 35,  87 => 33,  85 => 32,  82 => 31,  75 => 27,  69 => 24,  65 => 22,  62 => 21,  55 => 17,  49 => 14,  45 => 12,  43 => 11,  39 => 9,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/export/table_pdf.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/export/table_pdf.tpl");
    }
}
