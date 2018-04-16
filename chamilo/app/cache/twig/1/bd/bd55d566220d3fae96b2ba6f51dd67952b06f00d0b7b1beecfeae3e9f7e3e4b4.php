<?php

/* default/social/user_block.tpl */
class __TwigTemplate_fbe41d5c15afa065d56a36a81fb8ed3937664427c6e974d372bbe0f11e73467c extends Twig_Template
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
        echo "<div class=\"sidebar-avatar\">
    <div class=\"panel-group\" id=\"sn-avatar\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"heading-sn\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#sn-avatar\" href=\"#sn-avatar-one\" aria-expanded=\"true\" aria-controls=\"sn-avatar-one\">
                    ";
        // line 7
        echo get_lang("Profile");
        echo "
                    </a>
                </h4>
            </div>
            <div id=\"sn-avatar-one\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading-sn\">
                <div class=\"panel-body\">
                    ";
        // line 13
        echo ($context["social_avatar_block"] ?? null);
        echo "
                    <ul class=\"list-user-data\">
                        <li class=\"item\">
                            ";
        // line 16
        echo $this->getAttribute(($context["user"] ?? null), "complete_name", array());
        echo "
                        </li>
                        ";
        // line 18
        if (($this->getAttribute(($context["_u"] ?? null), "is_admin", array()) == 1)) {
            // line 19
            echo "                            <li class=\"item\">
                                <a href=\"";
            // line 20
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "main/admin/user_edit.php?user_id=";
            echo $this->getAttribute(($context["user"] ?? null), "id", array());
            echo "\">
                                    <img src=\"";
            // line 21
            echo Template::get_icon_path("edit.png");
            echo "\" alt=\"";
            echo get_lang("Edit");
            echo "\">
                                </a>
                            </li>
                        ";
        }
        // line 25
        echo "                        ";
        if (($context["show_full_profile"] ?? null)) {
            // line 26
            echo "                            <li class=\"item\">
                                <a href=\"";
            // line 27
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "main/messages/new_message.php\">
                                <img src=\"";
            // line 28
            echo Template::get_icon_path("instant_message.png");
            echo "\" alt=\"";
            echo get_lang("Email");
            echo "\">
                                ";
            // line 29
            echo $this->getAttribute(($context["user"] ?? null), "email", array());
            echo "
                                </a>
                            </li>
                            <li class=\"item\">
                                <a href=\"";
            // line 33
            echo ($context["vcard_user_link"] ?? null);
            echo "\">
                                <img src=\"";
            // line 34
            echo Template::get_icon_path("vcard.png", 16);
            echo "\" alt=\"";
            echo get_lang("BusinessCard");
            echo "\" width=\"16\" height=\"16\">
                                ";
            // line 35
            echo get_lang("BusinessCard");
            echo "
                                </a>
                            </li>

                            ";
            // line 39
            $context["skype_account"] = "";
            // line 40
            echo "                            ";
            $context["linkedin_url"] = "";
            // line 41
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 42
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", array()), "getField", array(), "method"), "getVariable", array(), "method") == "skype")) {
                    // line 43
                    echo "                                    ";
                    $context["skype_account"] = $this->getAttribute($this->getAttribute($context["extra"], "value", array()), "getValue", array(), "method");
                    // line 44
                    echo "                                ";
                }
                // line 45
                echo "
                                ";
                // line 46
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", array()), "getField", array(), "method"), "getVariable", array(), "method") == "linkedin_url")) {
                    // line 47
                    echo "                                    ";
                    $context["linkedin_url"] = $this->getAttribute($this->getAttribute($context["extra"], "value", array()), "getValue", array(), "method");
                    // line 48
                    echo "                                ";
                }
                // line 49
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
                            ";
            // line 51
            if (((api_get_setting("allow_show_skype_account") == "true") &&  !twig_test_empty(($context["skype_account"] ?? null)))) {
                // line 52
                echo "                                <li class=\"item\">
                                    <a href=\"skype:";
                // line 53
                echo ($context["skype_account"] ?? null);
                echo "?chat\">
                                        <span class=\"fa fa-skype fa-fw\" aria-hidden=\"true\"></span> ";
                // line 54
                echo get_lang("Skype");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 58
            echo "
                            ";
            // line 59
            if (((api_get_setting("allow_show_linkedin_url") == "true") &&  !twig_test_empty(($context["linkedin_url"] ?? null)))) {
                // line 60
                echo "                                <li class=\"item\">
                                    <a href=\"";
                // line 61
                echo ($context["linkedin_url"] ?? null);
                echo "\" target=\"_blank\">
                                        <span class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></span> ";
                // line 62
                echo get_lang("LinkedIn");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 66
            echo "                        ";
        }
        // line 67
        echo "                        ";
        if ((($context["chat_enabled"] ?? null) == 1)) {
            // line 68
            echo "                            ";
            if (($this->getAttribute(($context["user"] ?? null), "user_is_online_in_chat", array()) != 0)) {
                // line 69
                echo "                                ";
                if ((($context["user_relation"] ?? null) == ($context["user_relation_type_friend"] ?? null))) {
                    // line 70
                    echo "                                    <li class=\"item\">
                                        <a onclick=\"javascript:chatWith('";
                    // line 71
                    echo $this->getAttribute(($context["user"] ?? null), "id", array());
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "complete_name", array());
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "user_is_online", array());
                    echo "','";
                    echo $this->getAttribute(($context["user"] ?? null), "avatar_small", array());
                    echo "')\" href=\"javascript:void(0);\">
                                            <img src=\"";
                    // line 72
                    echo Template::get_icon_path("online.png");
                    echo "\" alt=\"";
                    echo get_lang("Online");
                    echo "\">
                                            ";
                    // line 73
                    echo get_lang("Chat");
                    echo " (";
                    echo get_lang("Online");
                    echo ")
                                        </a>
                                    </li>
                                ";
                    // line 77
                    echo "                                    ";
                    // line 78
                    echo "                                    ";
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "                            ";
            }
            // line 81
            echo "                        ";
        }
        // line 82
        echo "
                    ";
        // line 83
        if ( !twig_test_empty(($context["profile_edition_link"] ?? null))) {
            // line 84
            echo "                    <li class=\"item\">
                        <a class=\"btn btn-link btn-sm btn-block\" href=\"";
            // line 85
            echo ($context["profile_edition_link"] ?? null);
            echo "\">
                        <em class=\"fa fa-edit\"></em>";
            // line 86
            echo get_lang("EditProfile");
            echo "
                        </a>
                    </li>
                    ";
        }
        // line 90
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "default/social/user_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 90,  245 => 86,  241 => 85,  238 => 84,  236 => 83,  233 => 82,  230 => 81,  227 => 80,  224 => 79,  222 => 78,  220 => 77,  212 => 73,  206 => 72,  196 => 71,  193 => 70,  190 => 69,  187 => 68,  184 => 67,  181 => 66,  174 => 62,  170 => 61,  167 => 60,  165 => 59,  162 => 58,  155 => 54,  151 => 53,  148 => 52,  146 => 51,  143 => 50,  137 => 49,  134 => 48,  131 => 47,  129 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  112 => 41,  109 => 40,  107 => 39,  100 => 35,  94 => 34,  90 => 33,  83 => 29,  77 => 28,  73 => 27,  70 => 26,  67 => 25,  58 => 21,  52 => 20,  49 => 19,  47 => 18,  42 => 16,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/social/user_block.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\social\\user_block.tpl");
    }
}
