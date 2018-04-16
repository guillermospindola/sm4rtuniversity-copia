<?php

/* default/layout/footer.js.tpl */
class __TwigTemplate_6e1ec88b72e8eade846c18134ebe7f1e4363e32ed63657e2de2e844011f7cd6a extends Twig_Template
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
    /* Makes row highlighting possible */
    \$(document).ready( function() {
         \$(\"[data-toggle=popover]\").each(function(i, obj) {

            \$(this).popover({
              html: true,
              content: function() {
                var id = \$(this).attr('id')
                return \$('#popover-content-' + id).html();
              }
            });
            
            
            

            });
        
        // Date time settings.
        moment.locale('";
        // line 20
        echo ($context["locale"] ?? null);
        echo "');
        \$.datepicker.setDefaults(\$.datepicker.regional[\"";
        // line 21
        echo ($context["locale"] ?? null);
        echo "\"]);
        \$.datepicker.regional[\"local\"] = \$.datepicker.regional[\"";
        // line 22
        echo ($context["locale"] ?? null);
        echo "\"];

        // Fix old calls of \"inc/lib/mediaplayer/player.swf\" and convert to <audio> tag, then rendered by media element js
        // see BT#13405
        \$('embed').each( function () {
            var flashVars = \$(this).attr('flashvars');
            if (flashVars && flashVars.indexOf(\"file\") == -1) {
                var audioId = Math.floor( Math.random()*99999 );
                flashVars = flashVars.replace('&autostart=false', '');
                flashVars = flashVars.replace('&autostart=true', '');
                var audioDiv = '<audio id=\"'+audioId+'\" controls=\"controls\" style=\"width:400px;\" width:\"400px;\" src=\"'+flashVars+'\" ><source src=\"'+flashVars+'\" type=\"audio/mp3\"  ></source></audio>';
                \$(this).hide();
                \$(this).after(audioDiv);
            }
        });

        // Chosen select
        \$(\".chzn-select\").chosen({
            disable_search_threshold: 10,
            no_results_text: '";
        // line 41
        echo twig_escape_filter($this->env, get_lang("SearchNoResultsFound"), "js");
        echo "',
            placeholder_text_multiple: '";
        // line 42
        echo twig_escape_filter($this->env, get_lang("SelectSomeOptions"), "js");
        echo "',
            placeholder_text_single: '";
        // line 43
        echo twig_escape_filter($this->env, get_lang("SelectAnOption"), "js");
        echo "',
            width: \"100%\"
        });

        // Bootstrap tabs.
        \$('.tab-wrapper a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');

            //\$('#tabs a:first').tab('show') // Select first tab
        });

        // Fixes bug when loading links inside a tab.
        \$('.tab-wrapper .tab-pane a').unbind();

        /**
         * Advanced options
         * Usage
         * <a id=\"link\" href=\"url\">Advanced</a>
         * <div id=\"link_options\">
         *     hidden content :)
         * </div>
         * */
        \$(\".advanced_options\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('id') + '_options';
            var button = \$(this);
            \$(\"#\" + id).toggle();
        });

        /**
         * <a class=\"advanced_options_open\" href=\"http://\" rel=\"div_id\">Open</a>
         * <a class=\"advanced_options_close\" href=\"http://\" rel=\"div_id\">Close</a>
         * <div id=\"div_id\">Div content</div>
         * */
        \$(\".advanced_options_open\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).show();
        });

        \$(\".advanced_options_close\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).hide();
        });

        // Adv multi-select search input.
        \$('.select_class_filter').each( function () {
            var inputId = \$(this).attr('id');
            inputId = inputId.replace('-filter', '');
            \$(\"#\" + inputId).filterByText(\$(\"#\" + inputId + \"-filter\"));
        });

        \$(\".jp-jplayer audio\").addClass('skip');

        // Mediaelement
        if ( ";
        // line 100
        echo ($context["show_media_element"] ?? null);
        echo " == 1) {
            jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer(/* Options */);
        }

        // Table highlight.
        \$(\"form .data_table input:checkbox\").click(function () {
            if (\$(this).is(\":checked\")) {
                \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
            } else {
                \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
            }
        });

        /* For non HTML5 browsers */
        if (\$(\"#formLogin\".length > 1)) {
            \$(\"input[name=login]\").focus();
        }

        // Tool tip (in exercises)
        var tip_options = {
            placement: 'right'
        };
        \$('.boot-tooltip').tooltip(tip_options);
        var more = '";
        // line 123
        echo twig_escape_filter($this->env, get_lang("SeeMore"), "js");
        echo "';
        var close = '";
        // line 124
        echo twig_escape_filter($this->env, get_lang("Close"), "js");
        echo "';
        \$('.list-teachers').readmore({
            speed: 75,
            moreLink: '<a href=\"#\">' + more + '</a>',
            lessLink: '<a href=\"#\">' + close + '</a>',
            collapsedHeight: 35,
            blockCSS: 'display: block; width: 100%;'
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/layout/footer.js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 124,  164 => 123,  138 => 100,  78 => 43,  74 => 42,  70 => 41,  48 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/footer.js.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/footer.js.tpl");
    }
}
