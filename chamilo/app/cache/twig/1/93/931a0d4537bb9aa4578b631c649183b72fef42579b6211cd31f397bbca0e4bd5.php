<?php

/* default/learnpath/report.tpl */
class __TwigTemplate_2ddcf89ff686ec4f2ec21fdac1ee24ea95b3a60521582af8dfdf5dae5db2b671 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-hover table-striped table-bordered\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo get_lang("FirstName");
        echo "</th>
                <th>";
        // line 6
        echo get_lang("LastName");
        echo "</th>
                ";
        // line 7
        if (($context["show_email"] ?? null)) {
            // line 8
            echo "                    <th>";
            echo get_lang("Email");
            echo "</th>
                ";
        }
        // line 10
        echo "                <th class=\"text-center\">";
        echo get_lang("ScormTime");
        echo "</th>
                <th class=\"text-right\">";
        // line 11
        echo get_lang("Progress");
        echo "</th>
                <th class=\"text-right\">";
        // line 12
        echo get_lang("ScormScore");
        echo "</th>
                <th class=\"text-center\">";
        // line 13
        echo get_lang("LastConnection");
        echo "</th>
                ";
        // line 14
        if ( !($context["export"] ?? null)) {
            // line 15
            echo "                <th>";
            echo get_lang("Actions");
            echo "</th>
                ";
        }
        // line 17
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                <tr id=\"row-";
            echo $this->getAttribute($context["user"], "id", array());
            echo "\">
                    <td>";
            // line 22
            echo $this->getAttribute($context["user"], "first_name", array());
            echo "</td>
                    <td>";
            // line 23
            echo $this->getAttribute($context["user"], "last_name", array());
            echo "</td>
                    ";
            // line 24
            if (($context["show_email"] ?? null)) {
                // line 25
                echo "                        <td>";
                echo $this->getAttribute($context["user"], "email", array());
                echo "</td>
                    ";
            }
            // line 27
            echo "                    <td class=\"text-center\">";
            echo $this->getAttribute($context["user"], "lp_time", array());
            echo "</td>
                    <td class=\"text-right\">";
            // line 28
            echo $this->getAttribute($context["user"], "lp_progress", array());
            echo "</td>
                    <td class=\"text-right\">";
            // line 29
            echo $this->getAttribute($context["user"], "lp_score", array());
            echo "</td>
                    <td class=\"text-center\">";
            // line 30
            echo $this->getAttribute($context["user"], "lp_last_connection", array());
            echo "</td>
                    ";
            // line 31
            if ( !($context["export"] ?? null)) {
                // line 32
                echo "                    <td>
                        <button class=\"btn btn-primary btn-sm\" data-id=\"";
                // line 33
                echo $this->getAttribute($context["user"], "id", array());
                echo "\">";
                echo get_lang("Details");
                echo "</button>
                    </td>
                    ";
            }
            // line 36
            echo "                </tr>
                <tr class=\"hide\"></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
</div>

<script>
\$(document).on('ready', function () {
    \$('tr td button').on('click', function (e) {
        e.preventDefault();
        var self = \$(this);
        var userId = self.data('id') || 0;
        var trHead = self.parents('tr');
        var trDetail = trHead.next();
        if (self.is('.active')) {
            self.removeClass('active');
            trDetail.html('').addClass('hide');
        } else {
            self.addClass('active');
            var newTD = \$('<td>', {
                colspan: 7
            });
            newTD.load('";
        // line 59
        echo ((((((($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "mySpace/lp_tracking.php?action=stats&extend_all=0&id_session=") . ($context["session_id"] ?? null)) . "&course=") . ($context["course_code"] ?? null)) . "&lp_id=") . ($context["lp_id"] ?? null)) . "&student_id=' + userId + '&origin=tracking_course&allow_extend=0");
        echo " .table-responsive', function () {
                newTD.appendTo(trDetail);
            });
            trDetail.removeClass('hide');
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/learnpath/report.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  134 => 39,  126 => 36,  118 => 33,  115 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  96 => 27,  90 => 25,  88 => 24,  84 => 23,  80 => 22,  75 => 21,  71 => 20,  66 => 17,  60 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  41 => 10,  35 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/learnpath/report.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/learnpath/report.tpl");
    }
}
