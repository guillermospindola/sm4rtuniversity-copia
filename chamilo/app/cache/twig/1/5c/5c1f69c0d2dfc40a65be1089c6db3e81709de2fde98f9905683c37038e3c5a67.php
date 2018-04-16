<?php

/* default/learnpath/scorm_list.tpl */
class __TwigTemplate_54db8e25624314b1885511e4c282a48b7dda20c50d9020bf592369ecd116584a extends Twig_Template
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
        if ( !twig_test_empty(($context["data_list"] ?? null))) {
            // line 2
            echo "<div id=\"learning_path_toc\" class=\"scorm-list\">
    <div class=\"scorm-body\">
        <h1 class=\"scorm-title\">";
            // line 4
            echo ($context["lp_title_scorm"] ?? null);
            echo "</h1>
        <div id=\"inner_lp_toc\" class=\"inner_lp_toc scrollbar-light\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                <div id=\"toc_";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
                    ";
                // line 8
                if (($this->getAttribute($context["item"], "type", array()) == "dir")) {
                    // line 9
                    echo "                        <div class=\"section ";
                    echo $this->getAttribute($context["item"], "css_level", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "\">
                            ";
                    // line 10
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
                        </div>
                    ";
                } else {
                    // line 13
                    echo "                        <div class=\"item ";
                    echo $this->getAttribute($context["item"], "css_level", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "description", array());
                    echo "\">
                            <a name=\"atoc_";
                    // line 14
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "\"></a>
                            <a class=\"items-list\" href=\"#\" onclick=\"switch_item('";
                    // line 15
                    echo $this->getAttribute($context["item"], "current_id", array());
                    echo "','";
                    echo $this->getAttribute($context["item"], "id", array());
                    echo "'); return false;\" >
                                ";
                    // line 16
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
                            </a>
                        </div>
                    ";
                }
                // line 20
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
</div>
";
        }
        // line 26
        echo ($context["accorden_toc"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/learnpath/scorm_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  87 => 22,  80 => 20,  73 => 16,  67 => 15,  63 => 14,  56 => 13,  50 => 10,  43 => 9,  41 => 8,  34 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/learnpath/scorm_list.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/learnpath/scorm_list.tpl");
    }
}
