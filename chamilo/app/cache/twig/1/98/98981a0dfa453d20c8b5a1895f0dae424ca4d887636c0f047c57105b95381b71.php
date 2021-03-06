<?php

/* default/javascript/editor/ckeditor/config_js.tpl */
class __TwigTemplate_ef81e0674fd378f9e229356ca007f9730e06d3c02c8d0abfda791338bf43ed00 extends Twig_Template
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
        echo "/* Ckeditor global configuration file */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.
    //config.removeButtons = 'Underline,Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';

    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';

    config.templates_files  = [
        '";
        // line 19
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "inc/lib/elfinder/templates.php");
        echo "'
    ];
    //Style for default CKEditor Chamilo LMS
    config.stylesSet = [
        {
            name : 'Title 1',
            element : 'h1',
            attributes : { 'class': 'ck ck-title' }
        },
        {
            name : 'Title 2',
            element : 'h2',
            attributes : { 'class': 'ck ck-title2' }
        },
        {
            name : 'Alert Success',
            element : 'p',
            attributes : { 'class': 'alert alert-success' }
        },
        {
            name : 'Alert Info',
            element : 'p',
            attributes : { 'class': 'alert alert-info' }
        },
        {
            name : 'Alert Warning',
            element : 'p',
            attributes : { 'class': 'alert alert-warning' }
        },
        {
            name : 'Alert Danger',
            element : 'p',
            attributes : { 'class': 'alert alert-danger' }
        },
        {
            name : 'Section Article' ,
            element : 'h3' ,
            attributes : { 'class': 'ck ck-article' }
        }, {
            name : 'Paragraph box' ,
            element : 'p' ,
            attributes: { 'class': 'ck-paragraph-box' }
        }, {
            name : 'Superscript' ,
            element : 'sup'
        },
        {
            name : 'Subscript' ,
            element : 'sub'
        },
        {
            name : 'Strikethrough' ,
            element : 'del'
        },
        {
            name : 'Underlined' ,
            element : 'ins'
        },
        {
            name : 'Stand Out' ,
            element : 'span',
            attributes: { 'class':'ck-stand-out'}
        },
        {
            name : 'Separate Style 1' ,
            element : 'hr',
            attributes: { 'class':'ck-style1'}
        },
        {
            name : 'Separate Style 2' ,
            element : 'hr',
            attributes: { 'class':'ck-style2'}
        },
        {
            name : 'Separate Style 3' ,
            element : 'hr',
            attributes: { 'class':'ck-style3'}
        }
    ];


    ";
        // line 100
        if (($context["moreButtonsInMaximizedMode"] ?? null)) {
            // line 101
            echo "        config.toolbar = 'minToolbar';
        config.smallToolbar = 'minToolbar';
        config.maximizedToolbar = 'maxToolbar';
    ";
        }
        // line 105
        echo "
    // File manager (elFinder)
    config.filebrowserBrowseUrl = '";
        // line 107
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", array()) . "elfinder/filemanager.php?");
        echo ($context["course_condition"] ?? null);
        echo "';
    config.videobrowserBrowseUrl = '";
        // line 108
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", array()) . "elfinder/filemanager.php?");
        echo ($context["course_condition"] ?? null);
        echo "';

    // Allows to use \"class\" attribute inside divs and spans.
    config.allowedContent = true;
    config.contentsCss = '";
        // line 112
        echo ($context["cssEditor"] ?? null);
        echo "';
    config.customConfig = '";
        // line 113
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "inc/lib/javascript/ckeditor/config_js.php");
        echo "';
};

// Sets default target to \"_blank\" in link plugin
CKEDITOR.on('dialogDefinition', function (ev) {
    if (ev.data.name == 'link'){
        ev.data.definition.getContents('target').get('linkTargetType')['default']='_blank';
    }
});";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/config_js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 113,  148 => 112,  140 => 108,  135 => 107,  131 => 105,  125 => 101,  123 => 100,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/javascript/editor/ckeditor/config_js.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/javascript/editor/ckeditor/config_js.tpl");
    }
}
