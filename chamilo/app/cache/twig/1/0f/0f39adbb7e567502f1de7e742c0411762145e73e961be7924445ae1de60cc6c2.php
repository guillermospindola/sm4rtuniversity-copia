<?php

/* default/export/pdf_header.tpl */
class __TwigTemplate_784c6c99e4d62bb7735fbdbb4242077f1bb7a5af833255c545d4163bbccc8530 extends Twig_Template
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
        echo "<table border=\"0\" width=\"100%\" class=\"pdf-header\">
    <tr>
        <td width=\"30%\">
            ";
        // line 4
        echo ($context["organization"] ?? null);
        echo "
        </td>
        <td width=\"80%\" style=\"text-align: right; font-size: 12px; color: #666666;\">
            <strong>";
        // line 7
        echo ($context["teacher_name"] ?? null);
        echo "</strong>
        </td>
    </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/export/pdf_header.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/export/pdf_header.tpl");
    }
}
