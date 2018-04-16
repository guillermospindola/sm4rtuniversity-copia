<?php

/* default/skill/skill_ranking.tpl */
class __TwigTemplate_fa305914271aed418395c948fae0f9f5c58c3dd32482194e95508d030922099d extends Twig_Template
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
        echo "<script>
\$(function() {
    ";
        // line 3
        echo ($context["jqgrid_html"] ?? null);
        echo "
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/skill/skill_ranking.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/skill_ranking.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\skill\\skill_ranking.tpl");
    }
}
