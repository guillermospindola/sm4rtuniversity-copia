<?php

/* default/course_home/activity.tpl */
class __TwigTemplate_5132b20063a9a719c680eeb81265d36226a654c5ca5988a4c349bdfe882e93f3 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["block"], "title", array())) {
                // line 3
                echo "        <h2 class=\"title-tools\">";
                echo $this->getAttribute($context["block"], "title", array());
                echo "</h2>
    ";
            }
            // line 5
            echo "
    <div class=\"row ";
            // line 6
            echo $this->getAttribute($context["block"], "class", array());
            echo "\">
        ";
            // line 7
            if ((api_get_setting("homepage_view") == "activity")) {
                // line 8
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "                <div class=\"offset2 col-md-4 course-tool\">
                    ";
                    // line 10
                    echo $this->getAttribute($context["item"], "extra", array());
                    echo "
                    ";
                    // line 11
                    echo $this->getAttribute($context["item"], "visibility", array());
                    echo "
                    ";
                    // line 12
                    echo $this->getAttribute($context["item"], "icon", array());
                    echo "
                    ";
                    // line 13
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        ";
            // line 18
            if ((api_get_setting("homepage_view") == "activity_big")) {
                // line 19
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "                <div class=\"col-xs-6 col-md-3 course-tool\">
                    <div class=\"big_icon\">
                        ";
                    // line 22
                    echo $this->getAttribute($this->getAttribute($context["item"], "tool", array()), "image", array());
                    echo "
                    </div>
                    <div class=\"content\">
                        <h4>
                            ";
                    // line 26
                    echo $this->getAttribute($context["item"], "visibility", array());
                    echo "
                            ";
                    // line 27
                    echo $this->getAttribute($context["item"], "extra", array());
                    echo "
                            ";
                    // line 28
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "
                        </h4>
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        ";
            }
            // line 34
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/course_home/activity.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  113 => 33,  102 => 28,  98 => 27,  94 => 26,  87 => 22,  83 => 20,  78 => 19,  76 => 18,  73 => 17,  70 => 16,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  46 => 9,  41 => 8,  39 => 7,  35 => 6,  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/course_home/activity.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\course_home\\activity.tpl");
    }
}
