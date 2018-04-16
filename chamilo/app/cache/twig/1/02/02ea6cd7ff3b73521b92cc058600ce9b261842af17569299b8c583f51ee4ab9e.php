<?php

/* default//user_portal/classic_courses_with_category.tpl */
class __TwigTemplate_9831f384d7260672ce61a7f48f71b18085a892ba24ce22bb846fdad9b7a54813 extends Twig_Template
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
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 2
            echo "    <div class=\"classic-courses\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "            ";
                if ($this->getAttribute($context["category"], "courses", array())) {
                    // line 5
                    echo "                <div class=\"panel panel-default\">
                <div id=\"category-";
                    // line 6
                    echo $this->getAttribute($context["category"], "id_category", array());
                    echo "\" class=\"panel-heading\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["category"], "title_category", array());
                    echo "
                </div>
                <div class=\"panel-body\">
                    ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 11
                        echo "                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                ";
                        // line 13
                        if ((($this->getAttribute($context["item"], "visibility", array()) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", array()))) {
                            // line 14
                            echo "                                    <span class=\"thumbnail\">
                                        ";
                            // line 15
                            if (($this->getAttribute($context["item"], "thumbnails", array()) != "")) {
                                // line 16
                                echo "                                            <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "\"
                                                 alt=\"";
                                // line 17
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "\"/>
                                        ";
                            } else {
                                // line 19
                                echo "                                            ";
                                echo Template::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", array()));
                                echo "
                                        ";
                            }
                            // line 21
                            echo "                                    </span>
                                ";
                        } else {
                            // line 23
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["item"], "link", array());
                            echo "\" class=\"thumbnail\">
                                        ";
                            // line 24
                            if (($this->getAttribute($context["item"], "thumbnails", array()) != "")) {
                                // line 25
                                echo "                                            <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "\"
                                                 alt=\"";
                                // line 26
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "\"/>
                                        ";
                            } else {
                                // line 28
                                echo "                                            ";
                                echo Template::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", array()));
                                echo "
                                        ";
                            }
                            // line 30
                            echo "                                    </a>
                                ";
                        }
                        // line 32
                        echo "                            </div>
                            <div class=\"col-md-10\">
                                ";
                        // line 34
                        if (($this->getAttribute($context["item"], "edit_actions", array()) != "")) {
                            // line 35
                            echo "                                    <div class=\"pull-right\">
                                        ";
                            // line 36
                            if (($this->getAttribute($context["item"], "document", array()) == "")) {
                                // line 37
                                echo "                                            <a class=\"btn btn-default btn-sm\" href=\"";
                                echo $this->getAttribute($context["item"], "edit_actions", array());
                                echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            </a>
                                        ";
                            } else {
                                // line 41
                                echo "                                            <div class=\"btn-group\" role=\"group\">
                                                <a class=\"btn btn-default btn-sm\" href=\"";
                                // line 42
                                echo $this->getAttribute($context["item"], "edit_actions", array());
                                echo "\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
                                // line 45
                                echo $this->getAttribute($context["item"], "document", array());
                                echo "
                                            </div>
                                        ";
                            }
                            // line 48
                            echo "                                    </div>
                                ";
                        }
                        // line 50
                        echo "                                <h4 class=\"course-items-title\">
                                    ";
                        // line 51
                        if ((($this->getAttribute($context["item"], "visibility", array()) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", array()))) {
                            // line 52
                            echo "                                        ";
                            echo $this->getAttribute($context["item"], "title", array());
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", array());
                            echo "
                                    ";
                        } else {
                            // line 54
                            echo "                                        <a href=\"";
                            echo $this->getAttribute($context["item"], "link", array());
                            echo "\">
                                            ";
                            // line 55
                            echo $this->getAttribute($context["item"], "title", array());
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", array());
                            echo "
                                        </a>
                                        ";
                            // line 57
                            echo $this->getAttribute($context["item"], "notifications", array());
                            echo "
                                    ";
                        }
                        // line 59
                        echo "                                </h4>
                                <div class=\"course-items-session\">
                                    <div class=\"list-teachers\">
                                        ";
                        // line 62
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", array())) > 0)) {
                            // line 63
                            echo "                                            <img src=\"";
                            echo Template::get_icon_path("teacher.png", 16);
                            echo "\" width=\"16\" height=\"16\">&nbsp;
                                            ";
                            // line 64
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                                // line 65
                                echo "                                                ";
                                $context["counter"] = (($context["counter"] ?? null) + 1);
                                // line 66
                                echo "                                                ";
                                if ((($context["counter"] ?? null) > 1)) {
                                    echo " | ";
                                }
                                // line 67
                                echo "                                                <a href=\"";
                                echo $this->getAttribute($context["teacher"], "url", array());
                                echo "\" class=\"ajax\"
                                                   data-title=\"";
                                // line 68
                                echo $this->getAttribute($context["teacher"], "firstname", array());
                                echo " ";
                                echo $this->getAttribute($context["teacher"], "lastname", array());
                                echo "\">
                                                    ";
                                // line 69
                                echo $this->getAttribute($context["teacher"], "firstname", array());
                                echo " ";
                                echo $this->getAttribute($context["teacher"], "lastname", array());
                                echo "
                                                </a>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 72
                            echo "                                        ";
                        }
                        // line 73
                        echo "                                    </div>
                                    ";
                        // line 74
                        if ($this->getAttribute($context["item"], "student_info", array())) {
                            // line 75
                            echo "                                        ";
                            if (( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array())))) {
                                // line 76
                                echo "                                        <div class=\"course-student-info\">
                                            <div class=\"student-info\">
                                                ";
                                // line 78
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()))) {
                                    // line 79
                                    echo "                                                ";
                                    echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()));
                                    echo "
                                                ";
                                }
                                // line 81
                                echo "
                                                ";
                                // line 82
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()))) {
                                    // line 83
                                    echo "                                                ";
                                    echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()));
                                    echo "
                                                ";
                                }
                                // line 85
                                echo "
                                                ";
                                // line 86
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()))) {
                                    // line 87
                                    echo "                                                ";
                                    echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()));
                                    echo "
                                                ";
                                }
                                // line 89
                                echo "                                            </div>
                                        </div>
                                        ";
                            }
                            // line 92
                            echo "                                    ";
                        }
                        // line 93
                        echo "                                </div>
                            </div>
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                </div>
            </div>
            ";
                }
                // line 100
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "    </div>
";
        }
        // line 103
        echo "
";
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_with_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 103,  297 => 101,  291 => 100,  286 => 97,  277 => 93,  274 => 92,  269 => 89,  263 => 87,  261 => 86,  258 => 85,  252 => 83,  250 => 82,  247 => 81,  241 => 79,  239 => 78,  235 => 76,  232 => 75,  230 => 74,  227 => 73,  224 => 72,  213 => 69,  207 => 68,  202 => 67,  197 => 66,  194 => 65,  190 => 64,  185 => 63,  183 => 62,  178 => 59,  173 => 57,  166 => 55,  161 => 54,  153 => 52,  151 => 51,  148 => 50,  144 => 48,  138 => 45,  132 => 42,  129 => 41,  121 => 37,  119 => 36,  116 => 35,  114 => 34,  110 => 32,  106 => 30,  100 => 28,  95 => 26,  88 => 25,  86 => 24,  81 => 23,  77 => 21,  71 => 19,  66 => 17,  59 => 16,  57 => 15,  54 => 14,  52 => 13,  48 => 11,  44 => 10,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default//user_portal/classic_courses_with_category.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/user_portal/classic_courses_with_category.tpl");
    }
}
