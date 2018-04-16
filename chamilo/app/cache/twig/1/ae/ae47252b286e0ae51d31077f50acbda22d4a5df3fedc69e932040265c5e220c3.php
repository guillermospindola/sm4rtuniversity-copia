<?php

/* default/export/pdf_footer.tpl */
class __TwigTemplate_9f5d967ce784b3b5743d33e1a1ddd5e2f419ece09d2831a07e45cb8e53f674f0 extends Twig_Template
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
        echo "<table border=\"0\" class=\"full-width border-top page-footer\">
    <tr>
        <td class=\"text-left\">
            <strong>";
        // line 4
        echo $this->getAttribute(($context["_s"] ?? null), "institution", array());
        echo "</strong>
        </td>
        <td class=\"text-right\">
            <strong>{PAGENO} / {nb}</strong>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/export/pdf_footer.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/export/pdf_footer.tpl");
    }
}
