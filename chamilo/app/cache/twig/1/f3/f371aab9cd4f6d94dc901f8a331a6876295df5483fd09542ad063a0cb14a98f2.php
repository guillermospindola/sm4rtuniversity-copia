<?php

/* default/layout/hot_courses.tpl */
class __TwigTemplate_c5598dfd6f02c56ba4cc4787cb2b35cc1d9867065e0d2bafa67e1bf08a3dc28b extends Twig_Template
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
        if (( !(null === ($context["hot_courses"] ?? null)) &&  !twig_test_empty(($context["hot_courses"] ?? null)))) {
            // line 2
            echo "
<script>
\$(document).ready( function() {
    \$('.star-rating li a').on('click', function(event) {
        var id = \$(this).parents('ul').attr('id');
        \$('#vote_label2_' + id).html(\"";
            // line 7
            echo get_lang("Loading");
            echo "\");
        \$.ajax({
            url: \$(this).attr('data-link'),
            success: function(data) {
                \$(\"#rating_wrapper_\"+id).html(data);
                if (data == 'added') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 13
            echo get_lang("Saved");
            echo "\");
                }
                if (data == 'updated') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 16
            echo get_lang("Saved");
            echo "\");
                }
            }
        });
    });
});
</script>
<section class=\"hot-courses\">
    <div class=\"page-header\">
        <h4 class=\"hot-course-title\">
            ";
            // line 26
            echo get_lang("HottestCourses");
            echo "
            ";
            // line 27
            if ($this->getAttribute(($context["_u"] ?? null), "is_admin", array())) {
                // line 28
                echo "            <span class=\"pull-right\">
                <a title=\"";
                // line 29
                echo get_lang("Hide");
                echo "\" alt=\"";
                echo get_lang("Hide");
                echo "\" href=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                echo "admin/settings.php?search_field=show_hot_courses&submit_button=&_qf__search_settings=&category=search_setting\">
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                </a>
            </span>
            ";
            }
            // line 34
            echo "        </h4>
    </div>
    <div id=\"list-hot-courses\" class=\"grid-courses\">
        <div class=\"row\">
            ";
            // line 38
            $this->loadTemplate((($context["template"] ?? null) . "/layout/hot_course_item.tpl"), "default/layout/hot_courses.tpl", 38)->display($context);
            // line 39
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/hot_courses.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  83 => 38,  77 => 34,  65 => 29,  62 => 28,  60 => 27,  56 => 26,  43 => 16,  37 => 13,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/hot_courses.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/hot_courses.tpl");
    }
}
