<?php

/* default/skill/profile_item.tpl */
class __TwigTemplate_f84ac7496e56cb96769a88de336d89361feee0a6f1d18fa703a3f40427b04036 extends Twig_Template
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
        if (($context["profiles"] ?? null)) {
            // line 2
            echo "    <h4>";
            echo get_lang("SkillProfiles");
            echo "</h4>
    <table class=\"table table-responsive table-condensed\">
        <tbody>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 6
                echo "                <tr>
                    <td>";
                // line 7
                echo $this->getAttribute($context["profile"], "name", array());
                echo "</td>
                    <td class=\"text-right\">
                        <div class=\"btn-group btn-group-sm\">
                            <button class=\"btn btn-default btn-sm skill-wheel-load-profile\" aria-label=\"";
                // line 10
                echo get_lang("Search");
                echo "\" title=\"";
                echo get_lang("Search");
                echo "\" data-id=\"";
                echo $this->getAttribute($context["profile"], "id", array());
                echo "\">
                                <span class=\"fa fa-search\" aria-hidden=\"true\"></span>
                            </button>
                            <button class=\"btn btn-default btn-sm skill-wheel-delete-profile\" aria-label=\"";
                // line 13
                echo get_lang("Delete");
                echo "\" title=\"";
                echo get_lang("Delete");
                echo "\" data-id=\"";
                echo $this->getAttribute($context["profile"], "id", array());
                echo "\">
                                <span class=\"fa fa-trash\" aria-hidden=\"true\"></span>
                            </button>
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "default/skill/profile_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  51 => 13,  41 => 10,  35 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/profile_item.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\skill\\profile_item.tpl");
    }
}
