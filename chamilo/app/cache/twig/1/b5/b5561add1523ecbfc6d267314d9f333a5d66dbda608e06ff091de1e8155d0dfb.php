<?php

/* default/mail/mail.tpl */
class __TwigTemplate_5d8a1dce92f6d02a038d2a93469e6cc7d9368ddaef43ed0ec7a90623f1b4a14b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo $this->getAttribute(($context["_s"] ?? null), "institution", array());
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <script type=\"application/ld+json\">
        {
          \"@context\":       \"http://schema.org\",
          \"@type\":          \"EmailMessage\",
          \"description\":    \"Chamilo Mail Notification\",
          \"potentialAction\": {
            \"@type\": \"ViewAction\",
            \"target\": \"";
        // line 14
        echo ($context["link"] ?? null);
        echo "\"
          }
        }
    </script>
</head>
<body style=\"margin: 0; padding: 0; \">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
        <tr>
            <td>
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"border-collapse: collapse;\">
                    <tr>
                        <td>
                            ";
        // line 26
        $this->loadTemplate((($context["template"] ?? null) . "/mail/header.tpl"), "default/mail/mail.tpl", 26)->display($context);
        // line 27
        echo "                        </td>
                    </tr>
                    <tr>
                        <td cellpadding=\"0\" cellspacing=\"0\" style=\"padding: 40px 10px\">
                            <span ";
        // line 31
        echo ($context["mail_content_style"] ?? null);
        echo ">
                            ";
        // line 32
        echo ($context["content"] ?? null);
        echo "
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ";
        // line 38
        $this->loadTemplate((($context["template"] ?? null) . "/mail/footer.tpl"), "default/mail/mail.tpl", 38)->display($context);
        // line 39
        echo "                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/mail/mail.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  73 => 38,  64 => 32,  60 => 31,  54 => 27,  52 => 26,  37 => 14,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/mail/mail.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\mail\\mail.tpl");
    }
}
