<?php

/* default/javascript/editor/elfinder_standalone.tpl */
class __TwigTemplate_cc1cf60e5fe640b422f78bd192f7afb58a1186559226e6387e07d6dd8ab67be6 extends Twig_Template
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
        $context["finderFolder"] = ($this->getAttribute(($context["_p"] ?? null), "web", array()) . "vendor/studio-42/elfinder/");
        // line 2
        echo "<!-- elFinder CSS (REQUIRED) -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 3
        echo ($context["finderFolder"] ?? null);
        echo "css/elfinder.full.css\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 4
        echo ($context["finderFolder"] ?? null);
        echo "css/theme.css\">

<!-- elFinder JS (REQUIRED) -->
<script type=\"text/javascript\" src=\"";
        // line 7
        echo ($context["finderFolder"] ?? null);
        echo "js/elfinder.full.js\"></script>

<!-- elFinder translation (OPTIONAL) -->
<script type=\"text/javascript\" src=\"";
        // line 10
        echo ($context["finderFolder"] ?? null);
        echo "js/i18n/elfinder.ru.js\"></script>

<script type=\"text/javascript\" charset=\"utf-8\">
    // Helper function to get parameters from the query string.
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
        var match = window.location.search.match(reParam);
        return (match && match.length > 1) ? match[1] : '';
    }

    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var elf = \$('#elfinder').elfinder({
            url : '";
        // line 23
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", array()) . "elfinder/connectorAction.php?");
        echo ($context["course_condition"] ?? null);
        echo "',  // connector URL (REQUIRED)
            getFileCallback : function(file) {
                window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                window.close();
            },
            resizable: false
        }).elfinder('instance');
    });
</script>
<div id=\"elfinder\"></div>



";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/elfinder_standalone.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  40 => 10,  34 => 7,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/javascript/editor/elfinder_standalone.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\javascript\\editor\\elfinder_standalone.tpl");
    }
}
