<?php

/* default/user_portal/classic_session.tpl */
class __TwigTemplate_1d6b002e8d916f2696158eb057824ae629aead1a479aa247cb20b2614d125f7f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        ";
            // line 3
            if ( !$this->getAttribute($context["row"], "show_simple_session_info", array())) {
                // line 4
                echo "            ";
                $context["collapsable"] = "";
                // line 5
                echo "            <div class=\"panel-heading\">
                ";
                // line 6
                if (($this->getAttribute($context["row"], "course_list_session_style", array()) == 1)) {
                    // line 7
                    echo "                    ";
                    // line 8
                    echo "                    ";
                    if ((($context["remove_session_url"] ?? null) == true)) {
                        // line 9
                        echo "                        <a style=\"cursor:default\">
                    ";
                    } else {
                        // line 11
                        echo "                        <a href=\"";
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                        echo "\">
                    ";
                    }
                    // line 13
                    echo "
                    <img id=\"session_img_";
                    // line 14
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                         alt=\"";
                    // line 15
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                    </a>
                ";
                } elseif (($this->getAttribute(                // line 18
$context["row"], "course_list_session_style", array()) == 2)) {
                    // line 19
                    echo "                    ";
                    // line 20
                    echo "                    <img id=\"session_img_";
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                         alt=\"";
                    // line 21
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                    ";
                    // line 22
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                ";
                } elseif (($this->getAttribute(                // line 23
$context["row"], "course_list_session_style", array()) == 3)) {
                    // line 24
                    echo "                    ";
                    // line 25
                    echo "                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\"
                       aria-expanded=\"false\">
                        <img id=\"session_img_";
                    // line 27
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                             alt=\"";
                    // line 28
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                        ";
                    // line 29
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                    </a>
                    ";
                    // line 31
                    $context["collapsable"] = "collapse";
                    // line 32
                    echo "                ";
                }
                // line 33
                echo "                ";
                if ($this->getAttribute($context["row"], "show_actions", array())) {
                    // line 34
                    echo "                    <div class=\"pull-right\">
                        <a href=\"";
                    // line 35
                    echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", array()));
                    echo "\">
                            <img src=\"";
                    // line 36
                    echo Template::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                 title=\"";
                    // line 37
                    echo get_lang("Edit");
                    echo "\">
                        </a>
                    </div>
                ";
                }
                // line 41
                echo "            </div>
            <div class=\"session panel-body ";
                // line 42
                echo ($context["collapsable"] ?? null);
                echo "\" id=\"collapse_";
                echo $this->getAttribute($context["row"], "id", array());
                echo "\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 45
                if ($this->getAttribute($context["row"], "show_description", array())) {
                    // line 46
                    echo "                            ";
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                        ";
                }
                // line 48
                echo "                        <ul class=\"info-session list-inline\">
                            ";
                // line 49
                if ($this->getAttribute($context["row"], "coach_name", array())) {
                    // line 50
                    echo "                                <li>
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    ";
                    // line 52
                    echo $this->getAttribute($context["row"], "coach_name", array());
                    echo "
                                </li>
                            ";
                }
                // line 55
                echo "                            <li>
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                ";
                // line 57
                echo (($this->getAttribute($context["row"], "date", array())) ? ($this->getAttribute($context["row"], "date", array())) : ($this->getAttribute($context["row"], "duration", array())));
                echo "
                            </li>
                        </ul>
                        <div class=\"sessions-items\">
                        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 62
                    echo "                            <div class=\"courses\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        <a href=\"";
                    // line 65
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" class=\"thumbnail\">
                                            <img class=\"img-responsive\"
                                                 src=\"";
                    // line 67
                    echo (($this->getAttribute($context["item"], "thumbnails", array())) ? ($this->getAttribute($context["item"], "thumbnails", array())) : ($this->getAttribute($context["item"], "icon", array())));
                    echo "\">
                                        </a>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <h4>";
                    // line 71
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h4>
                                        <div class=\"list-teachers\">
                                            ";
                    // line 73
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "coaches", array())) > 0)) {
                        // line 74
                        echo "                                                <img src=\"";
                        echo Template::get_icon_path("teacher.png", 16);
                        echo "\" width=\"16\" height=\"16\">
                                                ";
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "coaches", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 76
                            echo "                                                    ";
                            echo ((($this->getAttribute($context["loop"], "index", array()) > 1)) ? (" | ") : (""));
                            echo "
                                                    <a href=\"";
                            // line 77
                            echo (($this->getAttribute(($context["_p"] ?? null), "web_ajax", array()) . "user_manager.ajax.php?") . twig_urlencode_filter(array("a" => "get_user_popup", "user_id" => $this->getAttribute($context["coach"], "user_id", array()), "session_id" => $this->getAttribute($context["row"], "id", array()), "course_id" => $this->getAttribute($context["item"], "real_id", array()))));
                            echo "\"
                                                       data-title=\"";
                            // line 78
                            echo $this->getAttribute($context["coach"], "full_name", array());
                            echo "\" class=\"ajax\">
                                                        ";
                            // line 79
                            echo $this->getAttribute($context["coach"], "firstname", array());
                            echo ", ";
                            echo $this->getAttribute($context["coach"], "lastname", array());
                            echo "
                                                    </a>
                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                                            ";
                    }
                    // line 83
                    echo "                                        </div>
                                    </div>

                                    ";
                    // line 86
                    if ($this->getAttribute($context["item"], "student_info", array())) {
                        // line 87
                        echo "                                        ";
                        if (( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array())))) {
                            // line 88
                            echo "                                            <div class=\"course-student-info\">
                                                <div class=\"student-info\">
                                                    ";
                            // line 90
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()))) {
                                // line 91
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()));
                                echo "
                                                    ";
                            }
                            // line 93
                            echo "
                                                    ";
                            // line 94
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()))) {
                                // line 95
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()));
                                echo "
                                                    ";
                            }
                            // line 97
                            echo "
                                                    ";
                            // line 98
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()))) {
                                // line 99
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()));
                                echo "
                                                    ";
                            }
                            // line 101
                            echo "                                                </div>
                                            </div>
                                        ";
                        }
                        // line 104
                        echo "                                    ";
                    }
                    // line 105
                    echo "                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 113
                echo "            <div class=\"panel-heading\">
                <a href=\"";
                // line 114
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                    <img id=\"session_img_";
                // line 115
                echo $this->getAttribute($context["row"], "id", array());
                echo "\" src=\"";
                echo Template::get_icon_path("window_list.png", 32);
                echo "\" alt=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\"
                         title=\"";
                // line 116
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                    ";
                // line 117
                echo $this->getAttribute($context["row"], "title", array());
                echo "
                </a>
            </div>
            <!-- view simple info -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a class=\"thumbnail\" href=\"";
                // line 124
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                            <img class=\"img-responsive\"
                                 src=\"";
                // line 126
                echo (($this->getAttribute($context["row"], "image", array())) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", array()) . $this->getAttribute($context["row"], "image", array()))) : (Template::get_icon_path("session_default.png")));
                echo "\"
                                 alt=\"";
                // line 127
                echo $this->getAttribute($context["row"], "title", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                        </a>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"info-session\">
                            <p>";
                // line 132
                echo $this->getAttribute($context["row"], "subtitle", array());
                echo "</p>
                            ";
                // line 133
                if ($this->getAttribute($context["row"], "show_description", array())) {
                    // line 134
                    echo "                                <div class=\"description\">
                                    ";
                    // line 135
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                                </div>
                            ";
                }
                // line 138
                echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- end view simple info -->
        ";
            }
            // line 144
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/user_portal/classic_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 144,  407 => 138,  401 => 135,  398 => 134,  396 => 133,  392 => 132,  382 => 127,  378 => 126,  373 => 124,  363 => 117,  359 => 116,  351 => 115,  347 => 114,  344 => 113,  337 => 108,  329 => 105,  326 => 104,  321 => 101,  315 => 99,  313 => 98,  310 => 97,  304 => 95,  302 => 94,  299 => 93,  293 => 91,  291 => 90,  287 => 88,  284 => 87,  282 => 86,  277 => 83,  274 => 82,  255 => 79,  251 => 78,  247 => 77,  242 => 76,  225 => 75,  220 => 74,  218 => 73,  213 => 71,  206 => 67,  201 => 65,  196 => 62,  192 => 61,  185 => 57,  181 => 55,  175 => 52,  171 => 50,  169 => 49,  166 => 48,  160 => 46,  158 => 45,  150 => 42,  147 => 41,  140 => 37,  134 => 36,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  119 => 31,  114 => 29,  108 => 28,  102 => 27,  96 => 25,  94 => 24,  92 => 23,  88 => 22,  82 => 21,  75 => 20,  73 => 19,  71 => 18,  66 => 16,  60 => 15,  54 => 14,  51 => 13,  45 => 11,  41 => 9,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/user_portal/classic_session.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\user_portal\\classic_session.tpl");
    }
}
