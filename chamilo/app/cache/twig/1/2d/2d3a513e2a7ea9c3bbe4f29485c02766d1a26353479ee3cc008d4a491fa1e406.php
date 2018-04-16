<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_85826e8a00294fc41ea04e476c66ff6c19d3d61e3f5b69982ffd0044c69a0a98 extends Twig_Template
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
        echo "    ";
        if ((($context["show_footer"] ?? null) == true)) {
            // line 2
            echo "            </div>
        </section>
        ";
            // line 4
            $this->loadTemplate((($context["template"] ?? null) . "/layout/page_footer.tpl"), "default/layout/show_footer.tpl", 4)->display($context);
            // line 5
            echo "    ";
        }
        // line 6
        echo "    </div>
    ";
        // line 7
        $this->loadTemplate((($context["template"] ?? null) . "/layout/footer.js.tpl"), "default/layout/show_footer.tpl", 7)->display($context);
        // line 8
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_footer.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\show_footer.tpl");
    }
}
