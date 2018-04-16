<?php

/* default/layout/hot_course_item.tpl */
class __TwigTemplate_c146afd1141364046008530098e7dc9a2774e3d17d93ba6823b24c3d5da5e4fc extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["hot_courses"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 3
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                    ";
                // line 6
                if ($this->getAttribute($context["item"], "is_registered", array())) {
                    // line 7
                    echo "                        <a title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "course_public_url", array());
                    echo "\">
                            <img src=\"";
                    // line 8
                    echo $this->getAttribute($context["item"], "course_image_large", array());
                    echo "\" class=\"img-responsive\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                        </a>
                    ";
                } else {
                    // line 11
                    echo "                        <img src=\"";
                    echo $this->getAttribute($context["item"], "course_image_large", array());
                    echo "\" class=\"img-responsive\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                    ";
                }
                // line 13
                echo "                    ";
                if (($this->getAttribute($context["item"], "categoryName", array()) != "")) {
                    // line 14
                    echo "                        <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "categoryName", array());
                    echo "</span>
                        <div class=\"cribbon\"></div>
                    ";
                }
                // line 17
                echo "                    <div class=\"user-actions\">";
                echo $this->getAttribute($context["item"], "description_button", array());
                echo "</div>
                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        ";
                // line 21
                if (($this->getAttribute($context["item"], "is_registered", array()) || $this->getAttribute(($context["_u"] ?? null), "is_admin", array()))) {
                    // line 22
                    echo "                            <h4 class=\"title\">
                                <a alt=\"";
                    // line 23
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "course_public_url", array());
                    echo "\">
                                    ";
                    // line 24
                    echo $this->getAttribute($context["item"], "title_cut", array());
                    echo "
                                </a>
                            </h4>
                        ";
                } else {
                    // line 28
                    echo "                            <h4 class=\"title\" title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                                ";
                    // line 29
                    echo $this->getAttribute($context["item"], "title_cut", array());
                    echo "
                            </h4>
                        ";
                }
                // line 32
                echo "                    </div>
                    <div class=\"ranking\">
                        ";
                // line 34
                echo $this->getAttribute($context["item"], "rating_html", array());
                echo "
                    </div>
                    <div class=\"block-author\">
                        ";
                // line 37
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", array())) > 6)) {
                    // line 38
                    echo "                            <a id=\"plist-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" data-trigger=\"focus\" tabindex=\"0\" role=\"button\" class=\"btn btn-default panel_popover\" data-toggle=\"popover\" title=\"";
                    echo get_lang("CourseTeachers");
                    echo "\" data-html=\"true\">
                                <em class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></em>
                            </a>
                            <div id=\"popover-content-plist-";
                    // line 41
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"hide\">
                                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 43
                        echo "                                    <div class=\"popover-teacher\">
                                        <a href=\"";
                        // line 44
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\"
                                           data-title=\"";
                        // line 45
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                            <img src=\"";
                        // line 46
                        echo $this->getAttribute($context["teacher"], "avatar", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["teacher"], "fullname", array());
                        echo "\"/>
                                        </a>
                                        <div class=\"teachers-details\">
                                            <h5>
                                                <a href=\"";
                        // line 50
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\"
                                                   data-title=\"";
                        // line 51
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                                    ";
                        // line 52
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                            </div>
                        ";
                } else {
                    // line 60
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 61
                        echo "                                ";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", array())) <= 2)) {
                            // line 62
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", array());
                            echo "\" class=\"ajax\"
                                       data-title=\"";
                            // line 63
                            echo $this->getAttribute($context["teacher"], "firstname", array());
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", array());
                            echo "\">
                                        <img src=\"";
                            // line 64
                            echo $this->getAttribute($context["teacher"], "avatar", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["teacher"], "fullname", array());
                            echo "\"/>
                                    </a>
                                    <div class=\"teachers-details\">
                                        <h5>
                                            <a href=\"";
                            // line 68
                            echo $this->getAttribute($context["teacher"], "url", array());
                            echo "\" class=\"ajax\"
                                               data-title=\"";
                            // line 69
                            echo $this->getAttribute($context["teacher"], "firstname", array());
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", array());
                            echo "\">
                                                ";
                            // line 70
                            echo $this->getAttribute($context["teacher"], "firstname", array());
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", array());
                            echo "
                                            </a>
                                        </h5>
                                        <p>";
                            // line 73
                            echo get_lang("Teacher");
                            echo "</p>
                                    </div>
                                ";
                        } elseif ((twig_length_filter($this->env, $this->getAttribute(                        // line 75
$context["item"], "teachers", array())) <= 6)) {
                            // line 76
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", array());
                            echo "\" class=\"ajax\"
                                       data-title=\"";
                            // line 77
                            echo $this->getAttribute($context["teacher"], "firstname", array());
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", array());
                            echo "\">
                                        <img src=\"";
                            // line 78
                            echo $this->getAttribute($context["teacher"], "avatar", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["teacher"], "fullname", array());
                            echo "\"/>
                                    </a>
                                ";
                        }
                        // line 81
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "                        ";
                }
                // line 83
                echo "                    </div>
                    <div class=\"toolbar row\">
                        <div class=\"col-sm-4\">
                            ";
                // line 86
                if ($this->getAttribute($context["item"], "price", array())) {
                    // line 87
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "price", array());
                    echo "
                            ";
                }
                // line 89
                echo "                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"btn-group\" role=\"group\">
                                ";
                // line 92
                echo $this->getAttribute($context["item"], "register_button", array());
                echo "
                                ";
                // line 93
                echo $this->getAttribute($context["item"], "unsubscribe_button", array());
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/layout/hot_course_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 93,  296 => 92,  291 => 89,  285 => 87,  283 => 86,  278 => 83,  275 => 82,  269 => 81,  261 => 78,  255 => 77,  250 => 76,  248 => 75,  243 => 73,  235 => 70,  229 => 69,  225 => 68,  216 => 64,  210 => 63,  205 => 62,  202 => 61,  197 => 60,  193 => 58,  179 => 52,  173 => 51,  169 => 50,  160 => 46,  154 => 45,  150 => 44,  147 => 43,  143 => 42,  139 => 41,  130 => 38,  128 => 37,  122 => 34,  118 => 32,  112 => 29,  107 => 28,  100 => 24,  92 => 23,  89 => 22,  87 => 21,  79 => 17,  72 => 14,  69 => 13,  61 => 11,  53 => 8,  46 => 7,  44 => 6,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/hot_course_item.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\layout\\hot_course_item.tpl");
    }
}
