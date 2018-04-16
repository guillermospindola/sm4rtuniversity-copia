<?php

/* default/social/avatar_block.tpl */
class __TwigTemplate_cb2457d911959dcde529a0bb5767e4aad67e347934e4d815cf9e954104bd388e extends Twig_Template
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
        echo "<div class=\"sm-groups\">
    <div class=\"social-profile text-center\">
        ";
        // line 3
        if (($context["show_group"] ?? null)) {
            // line 4
            echo "            <img src=\"";
            echo $this->getAttribute(($context["user_group_image"] ?? null), "file", array());
            echo "\" class=\"img-responsive\">
            <div class=\"caption\">
                <h4 class=\"group-title\">
                    <a href=\"";
            // line 7
            echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/group_view.php?id=") . ($context["group_id"] ?? null));
            echo "\">";
            echo $this->getAttribute(($context["user_group"] ?? null), "name", array());
            echo "</a>
                </h4>
                <p class=\"group-description\">";
            // line 9
            echo $this->getAttribute(($context["user_group"] ?? null), "description", array());
            echo "</p>
                ";
            // line 10
            if (($context["user_is_group_admin"] ?? null)) {
                // line 11
                echo "                    <div id=\"edit_image\" class=\"buttom-subscribed\">
                        <a class=\"btn btn-default\" href=\"";
                // line 12
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "social/group_edit.php?id=") . ($context["group_id"] ?? null));
                echo "\">
                            ";
                // line 13
                echo get_lang("EditGroup");
                echo "
                        </a>
                    </div>
                    <br />
                ";
            }
            // line 18
            echo "            </div>
        ";
        } elseif (        // line 19
($context["show_user"] ?? null)) {
            // line 20
            echo "            <a href=\"";
            echo $this->getAttribute(($context["user_image"] ?? null), "big", array());
            echo "\" class=\"expand-image\">
                <img class=\"img-responsive img-circle\" src=\"";
            // line 21
            echo $this->getAttribute(($context["user_image"] ?? null), "big", array());
            echo "\" alt=\"";
            echo get_lang("UserPicture");
            echo "\">
            </a>
        ";
        }
        // line 24
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/avatar_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  70 => 21,  65 => 20,  63 => 19,  60 => 18,  52 => 13,  48 => 12,  45 => 11,  43 => 10,  39 => 9,  32 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/social/avatar_block.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/social/avatar_block.tpl");
    }
}
