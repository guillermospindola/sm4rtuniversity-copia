<?php

/* default/admin/skill_profile.tpl */
class __TwigTemplate_f8d2b6cd558704769d200c5811948c76b4d2038bca14309c64b9a3519264e273 extends Twig_Template
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

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "
    <h4>";
            // line 5
            echo $this->getAttribute($context["item"], "name", array());
            echo "

        ";
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            // line 10
            echo "
        <a href=\"";
            // line 11
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_profile.php?action=edit&id=";
            echo $this->getAttribute($context["item"], "id", array());
            echo "\">
            <img src=\"";
            // line 12
            echo Template::get_icon_path("edit.png", 22);
            echo "\"> </a>

        <a href=\"";
            // line 14
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "admin/skill_profile.php?action=delete&id=";
            echo $this->getAttribute($context["item"], "id", array());
            echo "\">
            <img src=\"";
            // line 15
            echo Template::get_icon_path("delete.png", 22);
            echo "\">
        </a>
    </h4>

    <ul>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "levels", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 21
                echo "            <li>
                ";
                // line 22
                echo $context["level"];
                echo "

                ";
                // line 24
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 25
                    echo "                    <img src=\"";
                    echo Template::get_icon_path("up_na.png", 22);
                    echo "\">
                ";
                } else {
                    // line 27
                    echo "                    <a href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                    echo "admin/skill_profile.php?action=move_up&level_id=";
                    echo $this->getAttribute($context["level"], "id", array());
                    echo "&id=";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "\">
                        <img src=\"";
                    // line 28
                    echo Template::get_icon_path("up.png", 22);
                    echo "\">
                    </a>
                ";
                }
                // line 31
                echo "
                ";
                // line 32
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 33
                    echo "                    <img src=\"";
                    echo Template::get_icon_path("down_na.png", 22);
                    echo "\">
                ";
                } else {
                    // line 35
                    echo "                    <a href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                    echo "admin/skill_profile.php?action=move_down&level_id=";
                    echo $this->getAttribute($context["level"], "id", array());
                    echo "&id=";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "\">
                        <img src=\"";
                    // line 36
                    echo Template::get_icon_path("down.png", 22);
                    echo "\">
                    </a>
                ";
                }
                // line 39
                echo "            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/admin/skill_profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  142 => 39,  136 => 36,  127 => 35,  121 => 33,  119 => 32,  116 => 31,  110 => 28,  101 => 27,  95 => 25,  93 => 24,  88 => 22,  85 => 21,  68 => 20,  60 => 15,  54 => 14,  49 => 12,  43 => 11,  40 => 10,  38 => 9,  36 => 8,  31 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/skill_profile.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/admin/skill_profile.tpl");
    }
}
