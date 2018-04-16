<?php

/* default/mail/header.tpl */
class __TwigTemplate_1505e6a63cbb70d6066c57eff4c1aad11e560e9d2458d316ffd813c22111f028 extends Twig_Template
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
        echo "<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\">
    <tr>
        <td width=\"245\" ";
        // line 3
        echo ($context["mail_header_style"] ?? null);
        echo ">
            ";
        // line 4
        echo ($context["logo"] ?? null);
        echo "
        </td>
        <td width=\"100%\">            &nbsp;
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/mail/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/header.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/mail/header.tpl");
    }
}
