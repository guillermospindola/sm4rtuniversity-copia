<?php

/* default/admin/skill_level.tpl */
class __TwigTemplate_f45e9c38a6dbaa712f5eabb77d1814f6c26e7edaa18b3a30f998300e54a75553 extends Twig_Template
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
        echo ($context["form"] ?? null);
        echo "

<table class=\"data_table\">
    <tr>
        <th>";
        // line 5
        echo get_lang("Name");
        echo "</th>
        <th>";
        // line 6
        echo get_lang("ShortName");
        echo "</th>

        <th>";
        // line 8
        echo get_lang("Profile");
        echo "</th>
        <th>";
        // line 9
        echo get_lang("Actions");
        echo "</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo $this->getAttribute($context["item"], "name", array());
            echo "</td>
            <td>";
            // line 14
            echo $this->getAttribute($context["item"], "shortName", array());
            echo "</td>
            <td> ";
            // line 15
            echo $this->getAttribute($context["item"], "profile", array());
            echo "</td>
            <td>
                <a href=\"";
            // line 17
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_level.php?action=edit&id=";
            echo $this->getAttribute($context["item"], "id", array());
            echo "\">
                    <img src=\"";
            // line 18
            echo Template::get_icon_path("edit.png", 22);
            echo "\">
                </a>

                <a href=\"";
            // line 21
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_level.php?action=delete&id=";
            echo $this->getAttribute($context["item"], "id", array());
            echo "\">
                    <img src=\"";
            // line 22
            echo Template::get_icon_path("delete.png", 22);
            echo "\">
                </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "default/admin/skill_level.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  82 => 22,  76 => 21,  70 => 18,  64 => 17,  59 => 15,  55 => 14,  51 => 13,  48 => 12,  44 => 11,  39 => 9,  35 => 8,  30 => 6,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/skill_level.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\admin\\skill_level.tpl");
    }
}
