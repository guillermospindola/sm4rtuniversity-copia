<?php

/* default/layout/menu.tpl */
class __TwigTemplate_7460cc03a30fea7eb3759e3c5f504d82b642d0a03776d1d7092dad4cd83c77e8 extends Twig_Template
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
        echo "<nav id=\"menubar\" class=\"navbar navbar-default\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menuone\"
                    aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "\">";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", array());
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"menuone\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                    <li class=\"";
            echo $this->getAttribute($context["item"], "key", array());
            echo " ";
            echo $this->getAttribute($context["item"], "current", array());
            echo "\">
                        <a href=\"";
            // line 18
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" ";
            echo (($this->getAttribute($context["item"], "target", array())) ? ((("target=\"" . $this->getAttribute($context["item"], "target", array())) . "\"")) : (""));
            echo " title=\"";
            echo $this->getAttribute($context["item"], "title", array());
            echo "\">
                            ";
            // line 19
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>
            ";
        // line 24
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 1)) {
            // line 25
            echo "                <script>
                    \$(document).ready(function () {
                        \$.get('";
            // line 27
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "inc/ajax/message.ajax.php?a=get_count_message', function(data) {
                            if (data === '0') {
                                \$(\"#count_message_li\").addClass('hidden');
                            } else {
                                \$(\"#count_message_li\").removeClass('hidden');
                                \$(\"#count_message\").append(data);
                            }
                        });
                    });
                </script>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"count_message_li\" class=\"hidden\">
                        <a href=\"";
            // line 39
            echo ($context["message_url"] ?? null);
            echo "\">
                            <span id=\"count_message\" class=\"badge badge-warning\"></span>
                        </a>
                    </li>

                    ";
            // line 44
            if (($context["language_form"] ?? null)) {
                // line 45
                echo "                    <li class=\"dropdown language\">
                    ";
                // line 46
                echo ($context["language_form"] ?? null);
                echo "
                    </li>
                    ";
            }
            // line 49
            echo "                    ";
            if (($this->getAttribute(($context["_u"] ?? null), "status", array()) != 6)) {
                // line 50
                echo "                        <li class=\"dropdown avatar-user\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\">
                                <img class=\"img-circle\" src=\"";
                // line 53
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_small", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "\"/>
                                <span class=\"username-movil\">";
                // line 54
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "</span>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li class=\"user-header\">
                                    <div class=\"text-center\">
                                        <img class=\"img-circle\" src=\"";
                // line 60
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_medium", array());
                echo "\"
                                             alt=\"";
                // line 61
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "\"/>
                                        <p class=\"name\"><a href=\"";
                // line 62
                echo ($context["profile_url"] ?? null);
                echo "\">";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "</a></p>
                                        <p><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
                // line 63
                echo $this->getAttribute(($context["_u"] ?? null), "email", array());
                echo "</p>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"user-body\">
                                    <a title=\"";
                // line 68
                echo get_lang("Inbox");
                echo "\" href=\"";
                echo ($context["message_url"] ?? null);
                echo "\">
                                        <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                // line 69
                echo get_lang("Inbox");
                echo "
                                    </a>
                                </li>
                                ";
                // line 72
                if (($context["certificate_url"] ?? null)) {
                    // line 73
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 74
                    echo get_lang("MyCertificates");
                    echo "\" href=\"";
                    echo ($context["certificate_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-graduation-cap\"
                                                aria-hidden=\"true\"></em> ";
                    // line 76
                    echo get_lang("MyCertificates");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 80
                echo "
                                <li class=\"user-body\">
                                    <a id=\"logout_button\" title=\"";
                // line 82
                echo get_lang("Logout");
                echo "\" href=\"";
                echo ($context["logout_link"] ?? null);
                echo "\">
                                        <em class=\"fa fa-sign-out\"></em> ";
                // line 83
                echo get_lang("Logout");
                echo "
                                    </a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 89
            echo "                </ul>
            ";
        }
        // line 91
        echo "        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 91,  208 => 89,  199 => 83,  193 => 82,  189 => 80,  182 => 76,  175 => 74,  172 => 73,  170 => 72,  164 => 69,  158 => 68,  150 => 63,  144 => 62,  140 => 61,  136 => 60,  127 => 54,  121 => 53,  116 => 50,  113 => 49,  107 => 46,  104 => 45,  102 => 44,  94 => 39,  79 => 27,  75 => 25,  73 => 24,  70 => 23,  60 => 19,  52 => 18,  45 => 17,  41 => 16,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\menu.tpl");
    }
}
