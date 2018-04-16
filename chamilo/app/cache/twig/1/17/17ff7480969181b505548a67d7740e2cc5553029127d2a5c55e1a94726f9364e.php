<?php

/* default/admin/skill.tpl */
class __TwigTemplate_efb7787f620697fd4afd1df69f661b1073924b5970e0b1ff66b428c4d4509092 extends Twig_Template
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
        echo "
<h3>";
        // line 2
        echo get_lang("Skills");
        echo "</h3>
<ul>
    <li>
        <a href=\"";
        // line 5
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "admin/skill_profile.php";
        echo "\">
            ";
        // line 6
        echo get_lang("AddProfile");
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 10
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "admin/skill_level.php";
        echo "\">
            ";
        // line 11
        echo get_lang("AddLevel");
        echo "
        </a>
    </li>
</ul>

";
        // line 16
        echo ($context["form"] ?? null);
        echo "

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "    <h4>
        ";
            // line 20
            echo $this->getAttribute($context["item"], "name", array());
            echo "
        ";
            // line 21
            if ($this->getAttribute($context["item"], "shortCode", array())) {
                // line 22
                echo "            (";
                echo $this->getAttribute($context["item"], "shortCode", array());
                echo ")
        ";
            }
            // line 24
            echo "        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill.php?action=edit&id=";
            echo $this->getAttribute($context["item"], "id", array());
            echo "\">
            <img src=\"";
            // line 25
            echo Template::get_icon_path("edit.png", 22);
            echo "\">
        </a>
    </h4>
    ";
            // line 28
            echo $this->getAttribute($context["item"], "profile", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/admin/skill.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  84 => 25,  77 => 24,  71 => 22,  69 => 21,  65 => 20,  62 => 19,  58 => 18,  53 => 16,  45 => 11,  40 => 10,  33 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/skill.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/admin/skill.tpl");
    }
}
