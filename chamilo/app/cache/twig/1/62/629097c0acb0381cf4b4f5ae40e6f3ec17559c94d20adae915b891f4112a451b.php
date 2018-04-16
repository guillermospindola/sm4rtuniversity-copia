<?php

/* default/mail/footer.tpl */
class __TwigTemplate_e31b72e53295d056df2640e3d33863305ec119606f3dcb7cd38853e94128189e extends Twig_Template
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
        <td style=\"background-color: #2C3E50; border-bottom: 1px solid #2C3E50; box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);\">
            &nbsp;
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/mail/footer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/footer.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/mail/footer.tpl");
    }
}
