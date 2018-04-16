<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_473d31691522213d2b2bab4722589f6223b03e41616c1364941a8138e5a5da37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'page_body' => array($this, 'block_page_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["template"] ?? null) . "/layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 5
            echo "        <div class=\"row\">
            <div class=\"page-main-top\" class=\"col-md-12\">
                ";
            // line 7
            echo ($context["plugin_main_top"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3\">
            <div class=\"page-content\">
                ";
        // line 14
        if (($context["plugin_content_top"] ?? null)) {
            // line 15
            echo "                    <div class=\"page-content-top\">
                        ";
            // line 16
            echo ($context["plugin_content_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        echo ($context["sniff_notification"] ?? null);
        echo "

                ";
        // line 22
        if (($context["home_page_block"] ?? null)) {
            // line 23
            echo "                    <article id=\"homepage-home\">
                        ";
            // line 24
            echo ($context["home_page_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 27
        echo "
                ";
        // line 28
        $this->displayBlock('page_body', $context, $blocks);
        // line 31
        echo "
                ";
        // line 32
        if (($context["welcome_to_course_block"] ?? null)) {
            // line 33
            echo "                    <article id=\"homepage-course\">
                        ";
            // line 34
            echo ($context["welcome_to_course_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 37
        echo "
                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
                ";
        // line 46
        if (($context["announcements_block"] ?? null)) {
            // line 47
            echo "                    <article id=\"homepage-announcements\">
                        ";
            // line 48
            echo ($context["announcements_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 51
        echo "
                ";
        // line 52
        if (($context["course_category_block"] ?? null)) {
            // line 53
            echo "                    <article id=\"homepage-course-category\">
                        ";
            // line 54
            echo ($context["course_category_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 57
        echo "
                ";
        // line 58
        $this->loadTemplate((($context["template"] ?? null) . "/layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 58)->display($context);
        // line 59
        echo "
                ";
        // line 60
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 61
            echo "                    <div id=\"plugin_content_bottom\">
                        ";
            // line 62
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 65
        echo "            </div>
        </div>
        <div class=\"col-md-3 col-md-pull-9\">
            <div class=\"sidebar\">
                ";
        // line 69
        if (($context["plugin_menu_top"] ?? null)) {
            // line 70
            echo "                    <div class=\"siderbar-menu-top\">
                        ";
            // line 71
            echo ($context["plugin_menu_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        $this->loadTemplate((($context["template"] ?? null) . "/layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 75)->display($context);
        // line 76
        echo "
                ";
        // line 77
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 1)) {
            // line 78
            echo "                    ";
            echo ($context["user_image_block"] ?? null);
            echo "
                ";
        }
        // line 80
        echo "
                ";
        // line 81
        if (($context["profile_block"] ?? null)) {
            // line 82
            echo "                <!-- block profile -->
                <div class=\"panel-group\" id=\"profile\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"profile_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#profile\" href=\"#profileCollapse\" aria-expanded=\"true\" aria-controls=\"profileCollapse\">
                                    ";
            // line 88
            echo get_lang("Profile");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"profileCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["profile_block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 96
                echo "                                    <li class=\"list-group-item ";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
                                        <span class=\"item-icon\">
                                            ";
                // line 98
                echo $this->getAttribute($context["item"], "icon", array());
                echo "
                                        </span>
                                        <a href=\"";
                // line 100
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end block profile -->
                ";
        }
        // line 110
        echo "
                ";
        // line 111
        if (($context["course_block"] ?? null)) {
            // line 112
            echo "                <!-- block course -->
                <div class=\"panel-group\" id=\"course\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"course_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#course\" href=\"#courseCollapse\" aria-expanded=\"true\" aria-controls=\"courseCollapse\">
                                    ";
            // line 118
            echo get_lang("Courses");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"courseCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["course_block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                echo "                                    <li class=\"list-group-item ";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
                                        <span class=\"item-icon\">
                                            ";
                // line 128
                echo $this->getAttribute($context["item"], "icon", array());
                echo "
                                        </span>
                                        <a href=\"";
                // line 130
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end block course -->
                ";
        }
        // line 140
        echo "
                ";
        // line 141
        if (($context["grade_book_sidebar"] ?? null)) {
            // line 142
            echo "                    <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"gradebook_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#skill\" href=\"#skillCollapse\" aria-expanded=\"true\" aria-controls=\"skillCollapse\">
                                    ";
            // line 147
            echo get_lang("Gradebook");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item ";
            // line 154
            echo $this->getAttribute(($context["item"] ?? null), "class", array());
            echo "\">
                                        ";
            // line 155
            echo get_lang("Progress");
            echo " : ";
            echo ($context["grade_book_progress"] ?? null);
            echo " %
                                        <br />
                                        ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grade_book_badge_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 158
                echo "                                            <div class=\"badge_sidebar\">
                                            ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["badge"], "skills", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 160
                    echo "                                                ";
                    if ($this->getAttribute($context["badge"], "finished", array())) {
                        // line 161
                        echo "                                                    <img class=\"badge_sidebar_image \" src =\"";
                        echo $this->getAttribute($context["skill"], "icon_big", array());
                        echo "\" />
                                                ";
                    } else {
                        // line 163
                        echo "                                                    <img class=\"badge_sidebar_image badge_sidebar_image_transparency\" src = \"";
                        echo $this->getAttribute($context["skill"], "icon_big", array());
                        echo "\" />
                                                ";
                    }
                    // line 165
                    echo "                                                <div class=\"badge_sidebar_title\">
                                                ";
                    // line 166
                    echo $this->getAttribute($context["skill"], "name", array());
                    echo "
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                                            </div>
                                            ";
                // line 171
                echo "                                            ";
                // line 172
                echo "                                            ";
                // line 173
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        }
        // line 182
        echo "
                ";
        // line 183
        if (($context["skills_block"] ?? null)) {
            // line 184
            echo "                <!-- block skills -->
                <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"skill_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#skill\" href=\"#skillCollapse\" aria-expanded=\"true\" aria-controls=\"skillCollapse\">
                                    ";
            // line 190
            echo get_lang("Skills");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills_block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 198
                echo "                                    <li class=\"list-group-item ";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
                                        <span class=\"item-icon\">
                                            ";
                // line 200
                echo $this->getAttribute($context["item"], "icon", array());
                echo "
                                        </span>
                                        <a href=\"";
                // line 202
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end block skills -->
                ";
        }
        // line 212
        echo "
                ";
        // line 213
        echo ($context["teacher_block"] ?? null);
        echo "
                ";
        // line 214
        echo ($context["certificates_search_block"] ?? null);
        echo "
                ";
        // line 215
        echo ($context["notice_block"] ?? null);
        echo "
                ";
        // line 216
        echo ($context["help_block"] ?? null);
        echo "

                <!-- block navigation -->
                ";
        // line 219
        if (($context["navigation_course_links"] ?? null)) {
            // line 220
            echo "                <div class=\"panel-group\" id=\"menu\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"menu_block\">
                        <div class=\"panel-heading\" role=\"tab\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#menu\" href=\"#menuCollapse\" aria-expanded=\"true\" aria-controls=\"menuCollapse\">
                                    ";
            // line 225
            echo get_lang("MainNavigation");
            echo "
                                </a>
                            </h4>
                        </div>
                        <div style=\"\" aria-expanded=\"true\" id=\"menuCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-pills nav-stacked\">
                                    ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["navigation_course_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 233
                echo "                                    <li>
                                        <a href=\"";
                // line 234
                echo $this->getAttribute($context["item"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 243
        echo "                <!-- end block navigation -->

                ";
        // line 245
        echo ($context["search_block"] ?? null);
        echo "
                ";
        // line 246
        echo ($context["classes_block"] ?? null);
        echo "

                ";
        // line 248
        if (($context["plugin_menu_bottom"] ?? null)) {
            // line 249
            echo "                    <div class=\"sidebar-menu-bottom\">
                        ";
            // line 250
            echo ($context["plugin_menu_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 253
        echo "            </div>
        </div>
    </div>
    ";
        // line 256
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 257
            echo "        <div class=\"row\">
            <div class=\"page-main-bottom\" class=\"col-md-12\">
                ";
            // line 259
            echo ($context["plugin_main_bottom"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 28
    public function block_page_body($context, array $blocks = array())
    {
        // line 29
        echo "                    ";
        $this->loadTemplate((($context["template"] ?? null) . "/layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 29)->display($context);
        // line 30
        echo "                ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                    ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 40
            echo "                        <section id=\"page\" class=\"";
            echo ($context["course_history_page"] ?? null);
            echo "\">
                            ";
            // line 41
            echo ($context["content"] ?? null);
            echo "
                        </section>
                    ";
        }
        // line 44
        echo "                ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 44,  584 => 41,  579 => 40,  576 => 39,  573 => 38,  569 => 30,  566 => 29,  563 => 28,  554 => 259,  550 => 257,  548 => 256,  543 => 253,  537 => 250,  534 => 249,  532 => 248,  527 => 246,  523 => 245,  519 => 243,  511 => 237,  500 => 234,  497 => 233,  493 => 232,  483 => 225,  476 => 220,  474 => 219,  468 => 216,  464 => 215,  460 => 214,  456 => 213,  453 => 212,  444 => 205,  433 => 202,  428 => 200,  422 => 198,  418 => 197,  408 => 190,  400 => 184,  398 => 183,  395 => 182,  385 => 174,  379 => 173,  377 => 172,  375 => 171,  372 => 169,  363 => 166,  360 => 165,  354 => 163,  348 => 161,  345 => 160,  341 => 159,  338 => 158,  334 => 157,  327 => 155,  323 => 154,  313 => 147,  306 => 142,  304 => 141,  301 => 140,  292 => 133,  281 => 130,  276 => 128,  270 => 126,  266 => 125,  256 => 118,  248 => 112,  246 => 111,  243 => 110,  234 => 103,  223 => 100,  218 => 98,  212 => 96,  208 => 95,  198 => 88,  190 => 82,  188 => 81,  185 => 80,  179 => 78,  177 => 77,  174 => 76,  172 => 75,  169 => 74,  163 => 71,  160 => 70,  158 => 69,  152 => 65,  146 => 62,  143 => 61,  141 => 60,  138 => 59,  136 => 58,  133 => 57,  127 => 54,  124 => 53,  122 => 52,  119 => 51,  113 => 48,  110 => 47,  108 => 46,  105 => 45,  103 => 38,  100 => 37,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  84 => 28,  81 => 27,  75 => 24,  72 => 23,  70 => 22,  65 => 20,  62 => 19,  56 => 16,  53 => 15,  51 => 14,  46 => 11,  39 => 7,  35 => 5,  32 => 4,  29 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_2_col.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/layout/layout_2_col.tpl");
    }
}
