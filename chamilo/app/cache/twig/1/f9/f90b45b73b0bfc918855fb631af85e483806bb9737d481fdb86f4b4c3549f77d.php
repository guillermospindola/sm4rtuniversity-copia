<?php

/* default/social/skills_block.tpl */
class __TwigTemplate_94006eff2e63935ac72d941a562d0f69f43e58c60015fe7375b5427f3a02871b extends Twig_Template
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
jQuery(document).ready(function(){
    jQuery('.scrollbar-inner').scrollbar();
});
</script>
<div class=\"panel-group\" id=\"skill-block\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
            <h4 class=\"panel-title\">
                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#skill-block\" href=\"#skillList\" aria-expanded=\"true\" aria-controls=\"skillList\">
                    ";
        // line 11
        echo get_lang("Skills");
        echo "
                </a>
                <div class=\"btn-group pull-right\">
                    <a class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 18
        if (($context["show_skills_report_link"] ?? null)) {
            // line 19
            echo "                            <li>
                                <a href=\"";
            // line 20
            echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/my_skills_report.php");
            echo "\"> ";
            echo get_lang("SkillsReport");
            echo "</a>
                            </li>
                        ";
        }
        // line 23
        echo "                        <li>
                            <a href=\"";
        // line 24
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/skills_wheel.php");
        echo "\"> ";
        echo get_lang("SkillsWheel");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 27
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/skills_ranking.php");
        echo "\"> ";
        echo sprintf(get_lang("YourSkillRankingX"), ($context["ranking"] ?? null));
        echo "</a>
                        </li>
                    </ul>
                </div>
            </h4>
        </div>
        <div id=\"skillList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
            <div class=\"panel-body\">
                ";
        // line 35
        if (($context["skills"] ?? null)) {
            // line 36
            echo "                    ";
            echo ($context["skills"] ?? null);
            echo "
                ";
        } else {
            // line 38
            echo "                    <p>";
            echo get_lang("WithoutAchievedSkills");
            echo "</p>
                    <p>
                        <a href=\"";
            // line 40
            echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/skills_wheel.php");
            echo "\">";
            echo get_lang("SkillsWheel");
            echo "</a>
                    </p>
                ";
        }
        // line 43
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/skills_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 43,  92 => 40,  86 => 38,  80 => 36,  78 => 35,  65 => 27,  57 => 24,  54 => 23,  46 => 20,  43 => 19,  41 => 18,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/social/skills_block.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/social/skills_block.tpl");
    }
}
