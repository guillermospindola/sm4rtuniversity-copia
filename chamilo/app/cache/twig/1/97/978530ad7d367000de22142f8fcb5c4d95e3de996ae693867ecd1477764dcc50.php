<?php

/* default//user_portal/classic_courses_without_category.tpl */
class __TwigTemplate_4c67a091de55bf6a2ae578abc91e5603cdd12563f06d2783e8043a4f23370459 extends Twig_Template
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
        if ( !twig_test_empty(($context["courses"] ?? null))) {
            // line 2
            echo "    <div class=\"classic-courses\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
                // line 8
                if ((($this->getAttribute($context["item"], "visibility", array()) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", array()))) {
                    // line 9
                    echo "                            <span class=\"thumbnail\">
                                ";
                    // line 10
                    if (($this->getAttribute($context["item"], "thumbnails", array()) != "")) {
                        // line 11
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\"
                                         alt=\"";
                        // line 12
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\"/>
                                ";
                    } else {
                        // line 14
                        echo "                                    ";
                        echo Template::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", array()));
                        echo "
                                ";
                    }
                    // line 16
                    echo "                            </span>
                        ";
                } else {
                    // line 18
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" class=\"thumbnail\">
                                ";
                    // line 19
                    if (($this->getAttribute($context["item"], "thumbnails", array()) != "")) {
                        // line 20
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\"
                                         alt=\"";
                        // line 21
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\"/>
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo Template::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", array()));
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            </a>
                        ";
                }
                // line 27
                echo "                    </div>
                    <div class=\"col-md-10\">
                        ";
                // line 29
                if (($this->getAttribute($context["item"], "edit_actions", array()) != "")) {
                    // line 30
                    echo "                            <div class=\"pull-right\">
                                ";
                    // line 31
                    if (($this->getAttribute($context["item"], "document", array()) == "")) {
                        // line 32
                        echo "                                    <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", array());
                        echo "\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                ";
                    } else {
                        // line 36
                        echo "                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 37
                        echo $this->getAttribute($context["item"], "edit_actions", array());
                        echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                        ";
                        // line 40
                        echo $this->getAttribute($context["item"], "document", array());
                        echo "
                                    </div>
                                ";
                    }
                    // line 43
                    echo "                            </div>
                        ";
                }
                // line 45
                echo "                        <h4 class=\"course-items-title\">
                            ";
                // line 46
                if ((($this->getAttribute($context["item"], "visibility", array()) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", array()))) {
                    // line 47
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", array());
                    echo "
                            ";
                } else {
                    // line 49
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\">
                                    ";
                    // line 50
                    echo $this->getAttribute($context["item"], "title", array());
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", array());
                    echo "
                                </a>
                                ";
                    // line 52
                    echo $this->getAttribute($context["item"], "notifications", array());
                    echo "
                                ";
                    // line 53
                    if ($this->getAttribute($context["item"], "is_special_course", array())) {
                        // line 54
                        echo "                                    ";
                        echo Template::get_image("klipper.png", 22, get_lang("CourseAutoRegister"));
                        echo "
                                ";
                    }
                    // line 56
                    echo "                            ";
                }
                // line 57
                echo "                        </h4>
                        <div class=\"course-items-session\">
                            <div class=\"list-teachers\">
                                ";
                // line 60
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", array())) > 0)) {
                    // line 61
                    echo "                                    ";
                    echo Template::get_image("teacher.png", 16, get_lang("Professor"));
                    echo "
                                    ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 63
                        echo "                                        ";
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 64
                        echo "                                        ";
                        if ((($context["counter"] ?? null) > 1)) {
                            echo " | ";
                        }
                        // line 65
                        echo "                                        <a href=\"";
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\"
                                        data-title=\"";
                        // line 66
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                            ";
                        // line 67
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
                    // line 70
                    echo "                                ";
                }
                // line 71
                echo "                            </div>
                            ";
                // line 72
                if ($this->getAttribute($context["item"], "student_info", array())) {
                    // line 73
                    echo "                                ";
                    if (( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array())))) {
                        // line 74
                        echo "                                    <div class=\"course-student-info\">
                                        <div class=\"student-info\">
                                            ";
                        // line 76
                        if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()))) {
                            // line 77
                            echo "                                                ";
                            echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()));
                            echo "
                                            ";
                        }
                        // line 79
                        echo "
                                            ";
                        // line 80
                        if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()))) {
                            // line 81
                            echo "                                                ";
                            echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()));
                            echo "
                                            ";
                        }
                        // line 83
                        echo "
                                            ";
                        // line 84
                        if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()))) {
                            // line 85
                            echo "                                                ";
                            echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()));
                            echo "
                                            ";
                        }
                        // line 87
                        echo "                                        </div>
                                    </div>
                                ";
                    }
                    // line 90
                    echo "                            ";
                }
                // line 91
                echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_without_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 97,  269 => 91,  266 => 90,  261 => 87,  255 => 85,  253 => 84,  250 => 83,  244 => 81,  242 => 80,  239 => 79,  233 => 77,  231 => 76,  227 => 74,  224 => 73,  222 => 72,  219 => 71,  216 => 70,  205 => 67,  199 => 66,  194 => 65,  189 => 64,  186 => 63,  182 => 62,  177 => 61,  175 => 60,  170 => 57,  167 => 56,  161 => 54,  159 => 53,  155 => 52,  148 => 50,  143 => 49,  135 => 47,  133 => 46,  130 => 45,  126 => 43,  120 => 40,  114 => 37,  111 => 36,  103 => 32,  101 => 31,  98 => 30,  96 => 29,  92 => 27,  88 => 25,  82 => 23,  77 => 21,  70 => 20,  68 => 19,  63 => 18,  59 => 16,  53 => 14,  48 => 12,  41 => 11,  39 => 10,  36 => 9,  34 => 8,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default//user_portal/classic_courses_without_category.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/user_portal/classic_courses_without_category.tpl");
    }
}
