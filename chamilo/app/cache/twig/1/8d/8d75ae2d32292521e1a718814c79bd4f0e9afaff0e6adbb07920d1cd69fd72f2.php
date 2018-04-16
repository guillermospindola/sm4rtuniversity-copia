<?php

/* default/skill/list.tpl */
class __TwigTemplate_89c4be0b03843b8b1bb8e3cf27af6e4074dff4b501f31e343a97ecc69bd2a100 extends Twig_Template
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
        if (($context["tags"] ?? null)) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"col-md-3\" >
            <select id=\"tag-filter\" class=\"chzn-select form-control\">
                <option value=\"0\">";
            // line 5
            echo get_lang("PleaseSelectAChoice");
            echo "</option>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 7
                echo "                    <option value=\"";
                echo $this->getAttribute($context["tag"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </select>
        </div>
        <div class=\"col-md-3\">
            <a id=\"filter-button\" class=\"btn btn-default\">";
            // line 12
            echo get_lang("FilterByTags");
            echo "</a>
        </div>
    </div>
    <br />
";
        }
        // line 17
        echo "<div class=\"table table-responsive\">
    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th>";
        // line 21
        echo get_lang("Badges");
        echo "</th>
                <th>";
        // line 22
        echo get_lang("Name");
        echo "</th>
                <th class=\"text-center\">";
        // line 23
        echo get_lang("ShortCode");
        echo "</th>
                <th class=\"text-center\">";
        // line 24
        echo get_lang("Description");
        echo "</th>
                <th class=\"text-center\">";
        // line 25
        echo get_lang("Options");
        echo "</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>";
        // line 30
        echo get_lang("Badges");
        echo "</th>
                <th>";
        // line 31
        echo get_lang("Name");
        echo "</th>
                <th class=\"text-center\">";
        // line 32
        echo get_lang("ShortCode");
        echo "</th>
                <th class=\"text-center\">";
        // line 33
        echo get_lang("Description");
        echo "</th>
                <th class=\"text-center\">";
        // line 34
        echo get_lang("Options");
        echo "</th>
            </tr>
        </tfoot>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 39
            echo "            <tr>
                <td width=\"50\">
                    ";
            // line 41
            echo $this->getAttribute($context["skill"], "img_small", array());
            echo "
                </td>
                <td width=\"200\">";
            // line 43
            echo $this->getAttribute($context["skill"], "name", array());
            echo "</td>
                <td class=\"text-center\">";
            // line 44
            echo $this->getAttribute($context["skill"], "short_code", array());
            echo "</td>
                <td width=\"500\">";
            // line 45
            echo $this->getAttribute($context["skill"], "description", array());
            echo "</td>
                <td class=\"text-right\">
                    <a href=\"";
            // line 47
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_edit.php?id=";
            echo $this->getAttribute($context["skill"], "id", array());
            echo "\" class=\"btn btn-default btn-sm\" title=\"";
            echo get_lang("Edit");
            echo "\">
                        <em class=\"fa fa-pencil fa-fw\"></em>
                    </a>
                    <a href=\"";
            // line 50
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_create.php?parent=";
            echo $this->getAttribute($context["skill"], "id", array());
            echo "\" class=\"btn btn-primary btn-sm\" title=\"";
            echo get_lang("CreateChildSkill");
            echo "\">
                        <em class=\"fa fa-plus fa-fw\"></em>
                    </a>
                    <a href=\"";
            // line 53
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_badge_create.php?id=";
            echo $this->getAttribute($context["skill"], "id", array());
            echo "\" class=\"btn btn-primary btn-sm\" title=\"";
            echo get_lang("CreateBadge");
            echo "\">
                        <em class=\"fa fa-shield fa-fw\"></em>
                    </a>
                    ";
            // line 56
            if (($this->getAttribute($context["skill"], "status", array()) == 0)) {
                // line 57
                echo "                        <a href=\"";
                echo (($this->getAttribute(($context["_p"] ?? null), "web_self", array()) . "?") . twig_urlencode_filter(array("action" => "enable", "id" => $this->getAttribute($context["skill"], "id", array()))));
                echo "\" class=\"btn btn-success btn-sm\" title=\"";
                echo "Enable";
                echo "\">
                            <em class=\"fa fa-check-circle-o fa-fw\"></em>
                        </a>
                    ";
            } else {
                // line 61
                echo "                        <a href=\"";
                echo (($this->getAttribute(($context["_p"] ?? null), "web_self", array()) . "?") . twig_urlencode_filter(array("action" => "disable", "id" => $this->getAttribute($context["skill"], "id", array()))));
                echo "\" class=\"btn btn-danger btn-sm\" title=\"";
                echo "Disable";
                echo "\">
                            <em class=\"fa fa-ban fa-fw\"></em>
                        </a>
                    ";
            }
            // line 65
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
</div>

<script>
    \$(document).ready(function() {
        \$(\"#tag-filter\").val(\"";
        // line 74
        echo ($context["current_tag_id"] ?? null);
        echo "\");
        \$(\"#filter-button\").click(function() {
            var tagId = \$( \"#tag-filter option:selected\" ).val();
            \$(location).attr('href', '";
        // line 77
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "admin/skill_list.php?tag_id='+tagId);
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/skill/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 77,  205 => 74,  197 => 68,  189 => 65,  179 => 61,  169 => 57,  167 => 56,  157 => 53,  147 => 50,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  119 => 41,  115 => 39,  111 => 38,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  58 => 17,  50 => 12,  45 => 9,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/list.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/skill/list.tpl");
    }
}
