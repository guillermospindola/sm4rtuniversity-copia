<?php

/* default/gradebook/custom_certificate.tpl */
class __TwigTemplate_0db7c61ed8a16009cd92c3183849700c01ddafd1342e76184b489b87c43bfe84 extends Twig_Template
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
\t<meta charset=\"utf-8\">
\t<title>";
        // line 5
        echo get_lang("Certificate");
        echo "</title>
</head>
<body>
<table border=\"0\" bgcolor=\"#92c647\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"80%\">
    <tr>
        <td bgcolor=\"#92c647\"><img src=\"";
        // line 10
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/header_top.png\" style=\"display: block;\"></td>
    </tr>
    <tr>
        <td>
            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"> 
                <tr>
                    <td bgcolor=\"#92c647\" width=58 height=91>
                        <img src=\"";
        // line 17
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-b.png\" style=\"display:block;\">
                    </td>
                    <td bgcolor=\"#92c647\" width=700 height=91 style=\"font-family:CourierSans-Light; font-weight: bold; line-height: 47px; color:#FFF; padding-bottom: 10px; font-size: 45px;\">
                        ";
        // line 20
        echo get_lang("CertificateHeader");
        echo "
                    </td>
                    <td bgcolor=\"#92c647\" width=58 height=91>
                        <img src=\"";
        // line 23
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-header.png\" style=\"display:block;\">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table bgcolor=\"#FFFFFF\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" height=900>
                <tr>
                    <td bgcolor=\"#92c647\" height=755><img src=\"";
        // line 33
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-a.png\" style=\"display:block;\"></td>
                    <td height=755 style=\"font-family:CourierSans-Light; line-height: 22px; color:#40ad49; padding: 40px; font-size: 18px;\" valign=\"top\">
                        <h3 style=\"color: #672290; font-size: 24px;\">
                            ";
        // line 36
        echo ($context["complete_name"] ?? null);
        echo "
                        </h3>
                        <p style=\"font-size: 16px;\">
                            ";
        // line 39
        echo sprintf(get_lang("UserHasParticipateDansDePlatformeXTheContratDateXCertificateDateXTimeX"), $this->getAttribute(($context["_s"] ?? null), "site_name", array()), ($context["certificate_generated_date_no_time"] ?? null), ($context["terms_validation_date_no_time"] ?? null), ($context["time_in_platform_in_hours"] ?? null));
        echo "
                        </p>
                        <br />
                        <p style=\"font-size: 16px;\">";
        // line 42
        echo sprintf(get_lang("ThisTrainingHasXHours"), ($context["time_in_platform_in_hours"] ?? null));
        echo "</p><br />
                        <p style=\"font-size: 16px;\">";
        // line 43
        echo get_lang("TheContentsAreValidated");
        echo ":</p>
                            ";
        // line 44
        if (($context["sessions"] ?? null)) {
            // line 45
            echo "                                <ul style=\"color: #672290; font-size: 16px;\">
                                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 47
                echo "                                        <li>  ";
                echo $this->getAttribute($context["session"], "session_name", array());
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                </ul>
                            ";
        }
        // line 50
        echo "<br />
                        <h4 style=\"color: #672290; font-size: 16px;\">";
        // line 51
        echo ($context["complete_name"] ?? null);
        echo "</h4>
                        <p style=\"color:#40ad49; font-size: 16px;\">";
        // line 52
        echo get_lang("SkillsValidated");
        echo ":</p>
                            ";
        // line 53
        if (($context["skills"] ?? null)) {
            // line 54
            echo "                                <ul style=\"color: #672290; font-size: 16px;\">
                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 56
                echo "                                    <li>";
                echo $this->getAttribute($context["skill"], "name", array());
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </ul>
                            ";
        }
        // line 60
        echo "                            <br />
                        <p style=\"color:#40ad49; font-size: 16px;\">Berlin/Paris, ";
        // line 61
        echo get_lang("The");
        echo " <span style=\"font-weight: bold; color: #672290;\">";
        echo ($context["certificate_generated_date_no_time"] ?? null);
        echo "</span><br />
                            ";
        // line 62
        echo get_lang("ThePlatformTeam");
        echo "</p>
                        <br />
                    </td>
                    <td height=755 bgcolor=\"#92c647\">
                        <img src=\"";
        // line 66
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-b.png\" style=\"display:block;\">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" height=91>
                <tr>
                    <td bgcolor=\"#92c647\" width=58 height=91><img src=\"";
        // line 76
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-b.png\"  style=\"display:block;\"></td>
                    <td bgcolor=\"#92c647\" width=500 height=91 style=\"font-family:CourierSans-Light; line-height: 18px; color:#FFF;\">
                        ";
        // line 78
        echo get_lang("CertificateFooter");
        echo "
                    </td>
                    <td bgcolor=\"#92c647\" width=245 height=91><img src=\"";
        // line 80
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", array());
        echo "images/lado-footer.png\" style=\"display:block;\"></td>
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
        return "default/gradebook/custom_certificate.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 80,  183 => 78,  178 => 76,  165 => 66,  158 => 62,  152 => 61,  149 => 60,  145 => 58,  136 => 56,  132 => 55,  129 => 54,  127 => 53,  123 => 52,  119 => 51,  116 => 50,  112 => 49,  103 => 47,  99 => 46,  96 => 45,  94 => 44,  90 => 43,  86 => 42,  80 => 39,  74 => 36,  68 => 33,  55 => 23,  49 => 20,  43 => 17,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/gradebook/custom_certificate.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\gradebook\\custom_certificate.tpl");
    }
}
