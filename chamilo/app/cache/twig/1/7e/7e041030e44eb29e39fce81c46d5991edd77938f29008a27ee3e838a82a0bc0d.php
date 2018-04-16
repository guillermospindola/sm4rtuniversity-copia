<?php

/* default/skill/profile.tpl */
class __TwigTemplate_e921172da8cdc09e88bd5cf248dced918b8311c465422189600be0cc1f921f66 extends Twig_Template
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
        if ( !(null === ($context["search_skill_list"] ?? null))) {
            // line 2
            echo "    <div class=\"skills-skills\">
        <h3>";
            // line 3
            echo get_lang("Skills");
            echo "</h3>
        <ul class=\"holder\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["search_skill_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search_skill_id"]) {
                // line 6
                echo "                <li class=\"bit-box\">
                    ";
                // line 7
                echo $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $context["search_skill_id"], array(), "array"), "name", array());
                echo "
                    <a class=\"closebutton\" href=\"?a=remove_skill&id=";
                // line 8
                echo $context["search_skill_id"];
                echo "\"></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_skill_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
        <a id=\"add_profile\" class=\"btn btn-default\" href=\"#\">
            <em class=\"fa fa-floppy-o\"></em> ";
            // line 13
            echo get_lang("SaveThisSearch");
            echo "
        </a>
    </div>
";
        }
        // line 17
        echo "
";
        // line 18
        if ( !(null === ($context["profiles"] ?? null))) {
            // line 19
            echo "    <div class=\"skills-profiles\">
        <h3>";
            // line 20
            echo get_lang("SkillProfiles");
            echo "</h3>
        <ul class=\"holder\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 23
                echo "                <li class=\"bit-box\">
                    <a href=\"?a=load_profile&id=";
                // line 24
                echo $this->getAttribute($context["profile"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["profile"], "name", array());
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </ul>
    </div>
";
        }
        // line 30
        echo "
";
        // line 31
        if ( !(null === ($context["order_user_list"] ?? null))) {
            // line 32
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_user_list"] ?? null));
            foreach ($context['_seq'] as $context["count"] => $context["user_list"]) {
                // line 33
                echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"page-header\">
                    ";
                // line 36
                if (($context["count"] == ($context["total_search_skills"] ?? null))) {
                    // line 37
                    echo "                        ";
                    echo get_lang("CompleteMatch");
                    echo "
                    ";
                } else {
                    // line 39
                    echo "                        ";
                    if (((($context["total_search_skills"] ?? null) - $context["count"]) == 1)) {
                        // line 40
                        echo "                            ";
                        echo get_lang("MissingOneStepToMatch");
                        echo "
                        ";
                    } else {
                        // line 42
                        echo "                            ";
                        echo sprintf(get_lang("MissingXStepsToMatch"), (($context["total_search_skills"] ?? null) - $context["count"]));
                        echo "
                        ";
                    }
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "                </h4>
            </div>
        </div>

        <div class=\"row\">
            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["user_list"]);
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 51
                    echo "                <div class=\"col-md-3\">
                    <div class=\"items-user\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"avatar-user\">
                                <img class=\"img-circle\" width=\"100\" src=\"";
                    // line 56
                    echo $this->getAttribute($this->getAttribute($context["user"], "user", array()), "avatar", array());
                    echo "\" class=\"center-block\">
                            </div>
                            <p class=\"text-center\"><em class=\"fa fa-user\"></em>
                                <a href=\"";
                    // line 59
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                    echo "social/profile.php?u=";
                    echo $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "user_id", array());
                    echo "\" target=\"_blank\">
                                    ";
                    // line 60
                    echo $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "complete_name_with_username", array());
                    echo "
                                </a>
                            </p>
                            <p class=\"text-center\">
                                <em class=\"fa fa-graduation-cap\"></em> ";
                    // line 64
                    echo get_lang("AchievedSkills");
                    echo " ";
                    echo $this->getAttribute($context["user"], "total_found_skills", array());
                    echo " / ";
                    echo ($context["total_search_skills"] ?? null);
                    echo "
                            </p>
                        </div>
                        <ul class=\"list-group\">
                            ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "skills", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill_data"]) {
                        // line 69
                        echo "                                <li class=\"list-group-item ";
                        echo (($this->getAttribute($context["skill_data"], "found", array())) ? ("") : ("text-muted"));
                        echo "\">
                                    ";
                        // line 70
                        if ($this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "icon", array())) {
                            // line 71
                            echo "                                        <img src=\"";
                            echo ($this->getAttribute(($context["_p"] ?? null), "web_upload", array()) . $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "icon_small", array()));
                            echo "\" width=\"22\" height=\"22\" alt=\"";
                            echo $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "name", array());
                            echo "\">
                                    ";
                        } else {
                            // line 73
                            echo "                                        <img src=\"";
                            echo Template::get_icon_path("badges.png", 22);
                            echo "\" width=\"22\" height=\"22\" alt=\"";
                            echo $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "name", array());
                            echo "\">
                                    ";
                        }
                        // line 75
                        echo "
                                    ";
                        // line 76
                        if ($this->getAttribute($context["skill_data"], "found", array())) {
                            // line 77
                            echo "                                        <b>";
                            echo $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "name", array());
                            echo "</b>
                                    ";
                        } else {
                            // line 79
                            echo "                                        ";
                            echo $this->getAttribute($this->getAttribute(($context["skill_list"] ?? null), $this->getAttribute($context["skill_data"], "skill_id", array()), array(), "array"), "name", array());
                            echo "
                                    ";
                        }
                        // line 81
                        echo "                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                        </ul>
                    </div>
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['count'], $context['user_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 91
            echo "    ";
            if ((null === ($context["search_skill_list"] ?? null))) {
                // line 92
                echo "        <div class=\"warning-message\">";
                echo get_lang("NoResults");
                echo "</div>
    ";
            }
        }
        // line 95
        echo "</div>
<div id=\"dialog-form\" style=\"display:none;\">
    <form id=\"save_profile_form\" class=\"form-horizontal\" name=\"form\">
        <fieldset>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"name\">";
        // line 100
        echo get_lang("Name");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"name\" id=\"name\" size=\"40\" />
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"name\">";
        // line 106
        echo get_lang("Description");
        echo "</label>
                <div class=\"controls\">
                    <textarea name=\"description\" id=\"description\" class=\"span2\"  rows=\"7\"></textarea>
                </div>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/skill/profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 106,  271 => 100,  264 => 95,  257 => 92,  254 => 91,  246 => 88,  236 => 83,  229 => 81,  223 => 79,  217 => 77,  215 => 76,  212 => 75,  204 => 73,  196 => 71,  194 => 70,  189 => 69,  185 => 68,  174 => 64,  167 => 60,  161 => 59,  155 => 56,  148 => 51,  144 => 50,  137 => 45,  134 => 44,  128 => 42,  122 => 40,  119 => 39,  113 => 37,  111 => 36,  106 => 33,  101 => 32,  99 => 31,  96 => 30,  91 => 27,  80 => 24,  77 => 23,  73 => 22,  68 => 20,  65 => 19,  63 => 18,  60 => 17,  53 => 13,  49 => 11,  40 => 8,  36 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/profile.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\skill\\profile.tpl");
    }
}
