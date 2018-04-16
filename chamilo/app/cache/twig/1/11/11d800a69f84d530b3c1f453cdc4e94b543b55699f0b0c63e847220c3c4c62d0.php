<?php

/* default/javascript/editor/ckeditor/templates.tpl */
class __TwigTemplate_da82181e76ea0e336d882ab5c7324b07dc2112f4e90d138baaf05ebe94017779 extends Twig_Template
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
        echo "CKEDITOR.addTemplates(\"default\",
{
    imagesPath: ' ',
    templates:
        ";
        // line 5
        echo ($context["templates"] ?? null);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/templates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/javascript/editor/ckeditor/templates.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/javascript/editor/ckeditor/templates.tpl");
    }
}
