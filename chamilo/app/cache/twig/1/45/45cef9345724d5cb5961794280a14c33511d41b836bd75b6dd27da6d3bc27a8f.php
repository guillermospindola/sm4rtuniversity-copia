<?php

/* default/admin/teacher_time_report.tpl */
class __TwigTemplate_836c3a4344956ec8fcc110aebe64b84a08dc9012440be63603ca6f0e2d944ba9 extends Twig_Template
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
        echo "<script>
\$(document).on('ready', function () {
    \$('#course').on('change', function () {
        \$('#session').prop('selectedIndex', 0);
        \$('#teacher').prop('selectedIndex', 0);
    });

    \$('#session').on('change', function () {
        \$('#course').prop('selectedIndex', 0);
        \$('#teacher').prop('selectedIndex', 0);
    });

    \$('#teacher').on('change', function () {
        \$('#course').prop('selectedIndex', 0);
        \$('#session').prop('selectedIndex', 0);
    });

    \$('#daterange').on('apply.daterangepicker', function (ev, picker) {
        \$('[name=\"from\"]').val(picker.startDate.format('YYYY-MM-DD'));
        \$('[name=\"until\"]').val(picker.endDate.format('YYYY-MM-DD'));
    }).on('cancel.daterangepicker', function (ev, picker) {
        \$('#daterange, [name=\"from\"], [name=\"until\"]').val('');
    });
});
</script>

";
        // line 27
        echo ($context["form"] ?? null);
        echo "
<h3 class=\"page-header\">";
        // line 28
        echo ($context["report_title"] ?? null);
        echo " <small>";
        echo ($context["report_sub_title"] ?? null);
        echo "</small></h3>

<table class=\"table\">
    <thead>
        <tr>
            ";
        // line 33
        if (($context["with_filter"] ?? null)) {
            // line 34
            echo "                <th>";
            echo get_lang("Session");
            echo "</th>
                <th>";
            // line 35
            echo get_lang("Course");
            echo "</th>
            ";
        }
        // line 37
        echo "            <th>";
        echo get_lang("Coach");
        echo "</th>
            <th class=\"text-center\">";
        // line 38
        echo get_lang("TotalTime");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "            <tr>
                ";
            // line 44
            if (($context["with_filter"] ?? null)) {
                // line 45
                echo "                    <td>";
                echo (($this->getAttribute($context["row"], "session", array())) ? ($this->getAttribute($this->getAttribute($context["row"], "session", array()), "name", array())) : ("&nbsp"));
                echo "</td>
                    <td>";
                // line 46
                echo $this->getAttribute($this->getAttribute($context["row"], "course", array()), "name", array());
                echo "</td>
                ";
            }
            // line 48
            echo "                <td>";
            echo $this->getAttribute($this->getAttribute($context["row"], "coach", array()), "complete_name", array());
            echo " (";
            echo $this->getAttribute($this->getAttribute($context["row"], "coach", array()), "username", array());
            echo ")</td>
                <td class=\"text-center\">";
            // line 49
            echo $this->getAttribute($context["row"], "total_time", array());
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/admin/teacher_time_report.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  111 => 49,  104 => 48,  99 => 46,  94 => 45,  92 => 44,  89 => 43,  85 => 42,  78 => 38,  73 => 37,  68 => 35,  63 => 34,  61 => 33,  51 => 28,  47 => 27,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/teacher_time_report.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/admin/teacher_time_report.tpl");
    }
}
