<?php

/* default/skill/student_report.tpl */
class __TwigTemplate_b9985ed5e9d7d646e65021c8389d5e14dbdbd901a25c98f0c6dcdb7dcd00741b extends Twig_Template
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
        if (($context["allow_skill_tool"] ?? null)) {
            // line 2
            echo "    <div class=\"btn-group\">
        <a class=\"btn btn-default\" href=\"";
            // line 3
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "social/skills_wheel.php\">
            ";
            // line 4
            echo get_lang("SkillsWheel");
            echo "
        </a>
    </div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["rows"] ?? null)) {
            // line 10
            echo "    <h1 class=\"page-header\">";
            echo get_lang("SkillsAcquired");
            echo "</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>";
            // line 14
            echo get_lang("Badge");
            echo "</th>
                <th>";
            // line 15
            echo get_lang("Skill");
            echo "</th>
                <th>";
            // line 16
            echo get_lang("Date");
            echo "</th>
                <th>";
            // line 17
            echo get_lang("Course");
            echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 22
                echo "            <tr>
                <td>";
                // line 23
                echo $this->getAttribute($context["row"], "skill_badge", array());
                echo "</td>
                <td>";
                // line 24
                echo $this->getAttribute($context["row"], "skill_name", array());
                echo "</td>
                <td>";
                // line 25
                echo $this->getAttribute($context["row"], "achieved_at", array());
                echo "</td>
                ";
                // line 26
                if ($this->getAttribute($context["row"], "course_name", array())) {
                    // line 27
                    echo "                    <td>
                        <img src=\"";
                    // line 28
                    echo $this->getAttribute($context["row"], "course_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["row"], "course_name", array());
                    echo "\" width=\"32\">
                        ";
                    // line 29
                    echo $this->getAttribute($context["row"], "course_name", array());
                    echo "
                    </td>
                ";
                } else {
                    // line 32
                    echo "                    <td> - </td>
                ";
                }
                // line 34
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
    ";
            // line 38
            if (($context["skill_table"] ?? null)) {
                // line 39
                echo "        ";
                echo ($context["skill_table"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/skill/student_report.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  118 => 38,  114 => 36,  107 => 34,  103 => 32,  97 => 29,  91 => 28,  88 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  40 => 10,  38 => 9,  35 => 8,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/student_report.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\skill\\student_report.tpl");
    }
}
