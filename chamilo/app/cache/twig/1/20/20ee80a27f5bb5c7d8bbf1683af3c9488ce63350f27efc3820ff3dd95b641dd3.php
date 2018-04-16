<?php

/* default/learnpath/view.tpl */
class __TwigTemplate_abfe004b2ab2358150b4e7eb30d7ad61f09fc954641d4c8cda5c9e36e3e15e7b extends Twig_Template
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
        echo "<div id=\"learning_path_main\" class=\"";
        echo ((($context["is_allowed_to_edit"] ?? null)) ? ("lp-view-include-breadcrumb") : (""));
        echo " ";
        echo (((($context["lp_mode"] ?? null) == "embedframe")) ? ("lp-view-collapsed") : (""));
        echo "\">
    ";
        // line 2
        if ((($context["show_left_column"] ?? null) == 1)) {
            // line 3
            echo "    <div id=\"learning_path_left_zone\" class=\"sidebar-scorm\">
        <div class=\"lp-view-zone-container\">
            <div id=\"scorm-info\">
                <div id=\"panel-scorm\" class=\"panel-body\">
                    <div class=\"image-avatar\">
                        ";
            // line 8
            if ((($context["lp_author"] ?? null) == "")) {
                // line 9
                echo "                           <div class=\"text-center\">
                                ";
                // line 10
                echo ($context["lp_preview_image"] ?? null);
                echo "
                            </div>
                        ";
            } else {
                // line 13
                echo "                            <div class=\"media\">
                                <div class=\"media-left\">
                                    ";
                // line 15
                echo ($context["lp_preview_image"] ?? null);
                echo "
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"description-autor\"> ";
                // line 18
                echo ($context["lp_author"] ?? null);
                echo " </div>
                                </div>
                            </div>
                        ";
            }
            // line 22
            echo "                    </div>

                    ";
            // line 24
            if (($context["show_audio_player"] ?? null)) {
                // line 25
                echo "                        <div id=\"lp_media_file\" class=\"audio-scorm\">
                            ";
                // line 26
                echo ($context["media_player"] ?? null);
                echo "
                        </div>
                    ";
            }
            // line 29
            echo "                    ";
            if ((($context["gamification_mode"] ?? null) == 1)) {
                // line 30
                echo "                        <!--- gamification -->
                        <div id=\"scorm-gamification\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
                // line 34
                if ((($context["gamification_stars"] ?? null) > 0)) {
                    // line 35
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["gamification_stars"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 36
                        echo "                                            <em class=\"fa fa-star level\"></em>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "                                    ";
                }
                // line 39
                echo "
                                    ";
                // line 40
                if ((($context["gamification_stars"] ?? null) < 4)) {
                    // line 41
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (4 - ($context["gamification_stars"] ?? null))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 42
                        echo "                                            <em class=\"fa fa-star\"></em>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                                    ";
                }
                // line 45
                echo "                                </div>
                                <div class=\"col-xs-6 text-right\">
                                    ";
                // line 47
                echo sprintf(get_lang("XPoints"), ($context["gamification_points"] ?? null));
                echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 navegation-bar\">
                                    <div id=\"progress_bar\">
                                        ";
                // line 53
                echo ($context["progress_bar"] ?? null);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--- end gamification -->
                    ";
            } else {
                // line 60
                echo "                        <div id=\"progress_bar\">
                            ";
                // line 61
                echo ($context["progress_bar"] ?? null);
                echo "
                        </div>
                    ";
            }
            // line 64
            echo "                    ";
            echo ($context["teacher_toc_buttons"] ?? null);
            echo "
                </div>
            </div>
        ";
            // line 68
            echo "        <div id=\"toc_id\" class=\"scorm-body\" name=\"toc_name\">
                ";
            // line 69
            $this->loadTemplate((($context["template"] ?? null) . "/learnpath/scorm_list.tpl"), "default/learnpath/view.tpl", 69)->display($context);
            // line 70
            echo "            </div>
        ";
            // line 72
            echo "        </div>
    </div>
    ";
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    <div id=\"lp_navigation_elem\" class=\"navegation-bar\">
        ";
        // line 78
        if ((($context["show_left_column"] ?? null) == 1)) {
            // line 79
            echo "        <a href=\"#\" title = \"";
            echo get_lang("Expand");
            echo "\" id=\"lp-view-expand-toggle\" class=\"icon-toolbar expand\" role=\"button\">
            ";
            // line 80
            if ((($context["lp_mode"] ?? null) == "embedframe")) {
                // line 81
                echo "                <span class=\"fa fa-compress\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">";
                // line 82
                echo get_lang("Expand");
                echo "</span>
            ";
            } else {
                // line 84
                echo "                <span class=\"fa fa-expand\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">";
                // line 85
                echo get_lang("Expand");
                echo "</span>
            ";
            }
            // line 87
            echo "        </a>
        ";
        }
        // line 89
        echo "
        <a id=\"home-course\" title = \"";
        // line 90
        echo get_lang("Home");
        echo "\" href=\"";
        echo ($context["button_home_url"] ?? null);
        echo "\" class=\"icon-toolbar\" target=\"_self\" onclick=\"javascript: window.parent.API.save_asset();\">
            <em class=\"fa fa-home\"></em> <span class=\"hidden-xs hidden-sm\"></span>
        </a>
        ";
        // line 93
        echo ($context["navigation_bar"] ?? null);
        echo "
    </div>

    ";
        // line 97
        echo "    <div id=\"learning_path_right_zone\" class=\"";
        echo (((($context["show_left_column"] ?? null) == 1)) ? ("content-scorm") : ("no-right-col"));
        echo "\">
        <div class=\"lp-view-zone-container\">
            <div class=\"lp-view-tabs\">
                <div id=\"navTabsbar\" class=\"nav-tabs-bar\">
                    <ul id=\"navTabs\" class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                            <a href=\"#lp-view-content\" title=\"";
        // line 103
        echo get_lang("Lesson");
        echo "\" aria-controls=\"lp-view-content\" role=\"tab\" data-toggle=\"tab\">
                                <span class=\"fa fa-book fa-2x fa-fw\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
        // line 105
        echo get_lang("Lesson");
        echo "</span>
                            </a>
                        </li>
                        <li role=\"presentation\">
                            <a href=\"#lp-view-forum\" title=\"";
        // line 109
        echo get_lang("Forum");
        echo "\" aria-controls=\"lp-view-forum\" role=\"tab\" data-toggle=\"tab\">
                                <span class=\"fa fa-commenting-o fa-2x fa-fw\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
        // line 111
        echo get_lang("Forum");
        echo "</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"lp-view-content\">
                        <div id=\"wrapper-iframe\">
                        ";
        // line 119
        if ((($context["lp_mode"] ?? null) == "fullscreen")) {
            // line 120
            echo "                            <iframe id=\"content_id_blank\" name=\"content_name_blank\" src=\"blank.php\" style=\"width:100%; height:100%\" border=\"0\" frameborder=\"0\" allowfullscreen=\"true\" webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
                        ";
        } else {
            // line 122
            echo "                            <iframe id=\"content_id\" name=\"content_name\" src=\"";
            echo ($context["iframe_src"] ?? null);
            echo "\" style=\"width:100%; height:100%\" border=\"0\" frameborder=\"0\" allowfullscreen=\"true\" webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
                        ";
        }
        // line 124
        echo "                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"lp-view-forum\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 133
        echo "</div>

<script>
(function () {
    var LPViewUtils = {
        setHeightLPToc: function () {
            var scormInfoHeight = \$('#scorm-info').outerHeight(true);

            \$('#learning_path_toc').css({
                top: scormInfoHeight
            });
        }
    };

    \$(document).on('ready', function () {
        if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
            document.getElementById('wrapper-iframe')
                .setAttribute(
                    'style',
                    'width:100%; overflow:auto; position:auto; -webkit-overflow-scrolling:touch !important;'
                );
        }

        ";
        // line 156
        if ((($context["lp_mode"] ?? null) == "embedframe")) {
            // line 157
            echo "            //\$('#learning_path_main').addClass('lp-view-collapsed');
            \$('#lp-view-expand-button, #lp-view-expand-toggle').on('click', function (e) {
            e.preventDefault();

            \$('#learning_path_main').toggleClass('lp-view-collapsed');
            \$('#lp-view-expand-toggle span.fa').toggleClass('fa-compress');
            \$('#lp-view-expand-toggle span.fa').toggleClass('fa-expand');
            var className = \$('#lp-view-expand-toggle span.fa').attr('class');
            if (className == 'fa fa-expand') {
                \$(this).attr('title', '";
            // line 166
            echo get_lang("Expand");
            echo "');
            } else {
                \$(this).attr('title', '";
            // line 168
            echo get_lang("Collapse");
            echo "');
            }

            if(\$('#navTabsbar').is(':hidden')){
                \$('#navTabsbar').show();
            } else {
                \$('#navTabsbar').hide();
            }

        });
        ";
        } else {
            // line 179
            echo "        \$('#lp-view-expand-button, #lp-view-expand-toggle').on('click', function (e) {
            e.preventDefault();

            \$('#learning_path_main').toggleClass('lp-view-collapsed');

            \$('#lp-view-expand-toggle span.fa').toggleClass('fa-expand');
            \$('#lp-view-expand-toggle span.fa').toggleClass('fa-compress');

            var className = \$('#lp-view-expand-toggle span.fa').attr('class');
            if (className == 'fa fa-expand') {
                \$(this).attr('title', '";
            // line 189
            echo get_lang("Expand");
            echo "');
            } else {
                \$(this).attr('title', '";
            // line 191
            echo get_lang("Collapse");
            echo "');
            }

            if(\$('#navTabsbar').is(':hidden')){
                \$('#navTabsbar').show();
            } else {
                \$('#navTabsbar').hide();
            }
        });
        ";
        }
        // line 201
        echo "
        \$('.lp-view-tabs').on('click', '.disabled', function (e) {
            e.preventDefault();
        });

        \$('a#ui-option').on('click', function (e) {
            e.preventDefault();

            var icon = \$(this).children('.fa');

            if (icon.is('.fa-chevron-up')) {
                icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');

                return;
            }

            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        });

        LPViewUtils.setHeightLPToc();

        \$('.scorm_item_normal a, #scorm-previous, #scorm-next').on('click', function () {
            \$('.lp-view-tabs').animate({opacity: 0}, 500);
        });

        \$('#learning_path_right_zone #lp-view-content iframe').on('load', function () {
            \$('.lp-view-tabs a[href=\"#lp-view-content\"]').tab('show');

            \$('.lp-view-tabs').animate({opacity: 1}, 500);
        });

        loadForumThread(";
        // line 232
        echo ($context["lp_id"] ?? null);
        echo ", ";
        echo ($context["lp_current_item_id"] ?? null);
        echo ");
        checkCurrentItemPosition(";
        // line 233
        echo ($context["lp_current_item_id"] ?? null);
        echo ");

        ";
        // line 235
        if (twig_in_filter(($context["glossary_extra_tools"] ?? null), ($context["glossary_tool_available_list"] ?? null))) {
            // line 236
            echo "            // Loads the glossary library.
            (function () {
                ";
            // line 238
            if ((($context["show_glossary_in_documents"] ?? null) == "ismanual")) {
                // line 239
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"top.content_name\",
                        {
                            load: [
                                { type:\"script\", id:\"_fr1\", src:\"";
                // line 246
                echo ($context["jquery_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 247
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 248
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr2\", src:\"";
                // line 249
                echo $this->getAttribute(($context["_p"] ?? null), "web_lib", array());
                echo "javascript/jquery.highlight.js\"},
                                ";
                // line 250
                echo ($context["fix_link"] ?? null);
                echo "
                            ]
                        }
                    );
                ";
            } elseif ((            // line 254
($context["show_glossary_in_documents"] ?? null) == "isautomatic")) {
                // line 255
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"top.content_name\",
                        {
                            load: [
                                { type:\"script\", id:\"_fr1\", src:\"";
                // line 262
                echo ($context["jquery_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 263
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 264
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr2\", src:\"";
                // line 265
                echo $this->getAttribute(($context["_p"] ?? null), "web_lib", array());
                echo "javascript/jquery.highlight.js\"},
                                ";
                // line 266
                echo ($context["fix_link"] ?? null);
                echo "
                            ]
                        }
                    );
                ";
            } elseif ((            // line 270
($context["fix_link"] ?? null) != "")) {
                // line 271
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"top.content_name\",
                        {
                            load: [
                                { type:\"script\", id:\"_fr1\", src:\"";
                // line 278
                echo ($context["jquery_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 279
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 280
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                                ";
                // line 281
                echo ($context["fix_link"] ?? null);
                echo "
                            ]
                        }
                    );
                ";
            }
            // line 286
            echo "            })();
        ";
        }
        // line 288
        echo "
        ";
        // line 289
        if ((($context["disable_js_in_lp_view"] ?? null) == 0)) {
            // line 290
            echo "        \$('iframe#content_id').on('load', function () {
            if ('link' !== olms.lms_item_type) {
                \$.frameReady(function () {
                }, 'top.content_name', {
                    load: [
                        {type: 'script', id: '_fr1', src: '";
            // line 295
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "web/assets/jquery/dist/jquery.min.js'},
                        {type: 'script', id: '_fr7', src: '";
            // line 296
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "web/assets/MathJax/MathJax.js?config=AM_HTMLorMML'},
                        {type: 'script', id: '_fr4', src: '";
            // line 297
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "web/assets/jquery-ui/jquery-ui.min.js'},
                        {type: 'stylesheet', id: '_fr5', src: '";
            // line 298
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "web/assets/jquery-ui/themes/smoothness/jquery-ui.min.css'},
                        {type: 'stylesheet', id: '_fr6', src: '";
            // line 299
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "web/assets/jquery-ui/themes/smoothness/theme.css'},
                        {type: 'script', id: '_fr2', src: '";
            // line 300
            echo $this->getAttribute(($context["_p"] ?? null), "web_lib", array());
            echo "javascript/jquery.highlight.js'},
                        {type: 'script', id: '_fr3', src: '";
            // line 301
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "glossary/glossary.js.php?";
            echo $this->getAttribute(($context["_p"] ?? null), "web_cid_req", array());
            echo "'}
                    ]
                });
            }
        });
        ";
        }
        // line 307
        echo "    });

    \$(window).on('resize', function () {
        LPViewUtils.setHeightLPToc();
    });
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "default/learnpath/view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 307,  564 => 301,  560 => 300,  556 => 299,  552 => 298,  548 => 297,  544 => 296,  540 => 295,  533 => 290,  531 => 289,  528 => 288,  524 => 286,  516 => 281,  512 => 280,  508 => 279,  504 => 278,  495 => 271,  493 => 270,  486 => 266,  482 => 265,  478 => 264,  474 => 263,  470 => 262,  461 => 255,  459 => 254,  452 => 250,  448 => 249,  444 => 248,  440 => 247,  436 => 246,  427 => 239,  425 => 238,  421 => 236,  419 => 235,  414 => 233,  408 => 232,  375 => 201,  362 => 191,  357 => 189,  345 => 179,  331 => 168,  326 => 166,  315 => 157,  313 => 156,  288 => 133,  278 => 124,  272 => 122,  268 => 120,  266 => 119,  255 => 111,  250 => 109,  243 => 105,  238 => 103,  228 => 97,  222 => 93,  214 => 90,  211 => 89,  207 => 87,  202 => 85,  199 => 84,  194 => 82,  191 => 81,  189 => 80,  184 => 79,  182 => 78,  178 => 76,  175 => 75,  171 => 72,  168 => 70,  166 => 69,  163 => 68,  156 => 64,  150 => 61,  147 => 60,  137 => 53,  128 => 47,  124 => 45,  121 => 44,  114 => 42,  109 => 41,  107 => 40,  104 => 39,  101 => 38,  94 => 36,  89 => 35,  87 => 34,  81 => 30,  78 => 29,  72 => 26,  69 => 25,  67 => 24,  63 => 22,  56 => 18,  50 => 15,  46 => 13,  40 => 10,  37 => 9,  35 => 8,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/learnpath/view.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/learnpath/view.tpl");
    }
}
