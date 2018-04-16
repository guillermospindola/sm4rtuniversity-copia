<?php

/* default/skill/issued.tpl */
class __TwigTemplate_2d65179308913fd7e874d96e685beb5839639c1f14c2670109f5e97788dd195c extends Twig_Template
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
        echo "<div class=\"row issued\">
    <div class=\"col-md-5\">
        <div class=\"thumbnail\">
            <figure class=\"text-center\">
                <img class=\"img-responsive center-block\" src=\"";
        // line 5
        echo $this->getAttribute(($context["issue_info"] ?? null), "skill_badge_image", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["issue_info"] ?? null), "skill_name", array());
        echo "\">
                <figcaption>
                    <p class=\"lead\">";
        // line 7
        echo $this->getAttribute(($context["issue_info"] ?? null), "skill_name", array());
        echo "</p>
                    ";
        // line 8
        if ($this->getAttribute(($context["issue_info"] ?? null), "skill_short_code", array())) {
            // line 9
            echo "                        <p>";
            echo $this->getAttribute(($context["issue_info"] ?? null), "skill_short_code", array());
            echo "</p>
                    ";
        }
        // line 11
        echo "                </figcaption>
            </figure>
            <div class=\"caption\">
                ";
        // line 14
        if ($this->getAttribute(($context["issue_info"] ?? null), "skill_description", array())) {
            // line 15
            echo "                    <p>";
            echo $this->getAttribute(($context["issue_info"] ?? null), "skill_description", array());
            echo "</p>
                ";
        }
        // line 17
        echo "                ";
        if ($this->getAttribute(($context["issue_info"] ?? null), "skill_criteria", array())) {
            // line 18
            echo "                    <h4>";
            echo get_lang("CriteriaToEarnTheBadge");
            echo "</h4>
                    <p>";
            // line 19
            echo $this->getAttribute(($context["issue_info"] ?? null), "skill_criteria", array());
            echo "</p>
                ";
        }
        // line 21
        echo "            </div>
        </div>
        ";
        // line 23
        if (($context["allow_download_export"] ?? null)) {
            // line 24
            echo "            ";
            if (($context["badge_error"] ?? null)) {
                // line 25
                echo "                <hr>
                <div class=\"alert alert-danger\"> ";
                // line 26
                echo get_lang("BakedBadgeProblem");
                echo "</div>
            ";
            } else {
                // line 28
                echo "                <p class=\"text-center\">
                    <a href=\"";
                // line 29
                echo ($context["personal_badge"] ?? null);
                echo "\" class=\"btn btn-primary\" target=\"_new\" download=\"badge\">
                        <em class=\"fa fa-download fa-fw\"></em> ";
                // line 30
                echo get_lang("DownloadBadge");
                echo "
                    </a>
                </p>
            ";
            }
            // line 34
            echo "            <hr>
            <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-success\" id=\"badge-export-button\">
                    <em class=\"fa fa-external-link-square fa-fw\"></em> ";
            // line 37
            echo get_lang("ExportBadge");
            echo "
                </a>
            </p>
            <div class='col-md-12 text-center'>
                <h5><b> ";
            // line 41
            echo get_lang("ShareWithYourFriends");
            echo " </b></h5>
                <a href=\"http://www.facebook.com/sharer.php?u=";
            // line 42
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "badge/";
            echo $this->getAttribute(($context["issue_info"] ?? null), "id", array());
            echo "\" target=\"_new\">
                    <em class='fa fa-facebook-square fa-3x text-info' aria-hidden='true'></em>
                </a>
                <a href=\"https://twitter.com/home?status=";
            // line 45
            echo sprintf(get_lang("IHaveObtainedSkillXOnY"), $this->getAttribute(($context["skill_info"] ?? null), "name", array()), $this->getAttribute(($context["_s"] ?? null), "site_name", array()));
            echo " - ";
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "badge/";
            echo $this->getAttribute(($context["issue_info"] ?? null), "id", array());
            echo "\" target=\"_new\">
                    <em class='fa fa-twitter-square fa-3x text-light' aria-hidden='true'></em>
                </a>
            </div>
        ";
        }
        // line 50
        echo "    </div>
    <div class=\"col-md-7\">
        <h3>";
        // line 52
        echo get_lang("RecipientDetails");
        echo "</h3>
        <p class=\"lead\">";
        // line 53
        echo $this->getAttribute(($context["issue_info"] ?? null), "user_complete_name", array());
        echo "</p>
        <h4>";
        // line 54
        echo get_lang("SkillAcquiredAt");
        echo "</h4>
        <ul class=\"fa-ul\">
            <li>
                ";
        // line 57
        if ($this->getAttribute(($context["issue_info"] ?? null), "source_name", array())) {
            // line 58
            echo "                    <em class=\"fa-li fa fa-clock-o fa-fw\"></em>
                    ";
            // line 59
            echo sprintf(get_lang("TimeXThroughCourseY"), $this->getAttribute(($context["issue_info"] ?? null), "datetime", array()), $this->getAttribute(($context["issue_info"] ?? null), "source_name", array()));
            echo "
                ";
        } else {
            // line 61
            echo "                    <em class=\"fa-li fa fa-clock-o fa-fw\"></em>
                    ";
            // line 62
            echo $this->getAttribute(($context["issue_info"] ?? null), "datetime", array());
            echo "
                ";
        }
        // line 64
        echo "                ";
        if ($this->getAttribute(($context["issue_info"] ?? null), "argumentation", array())) {
            // line 65
            echo "                    ";
            if ($this->getAttribute(($context["issue_info"] ?? null), "argumentation", array())) {
                // line 66
                echo "                        <b>
                            <p style=\"font-style: italic;\">
                                ";
                // line 68
                echo sprintf(get_lang("UserXIndicated"), $this->getAttribute(($context["issue_info"] ?? null), "argumentation_author_name", array()));
                echo "
                            </p>
                        </b>
                    ";
            }
            // line 72
            echo "                    <p>";
            echo $this->getAttribute(($context["issue_info"] ?? null), "argumentation", array());
            echo "</p>
                ";
        }
        // line 74
        echo "            </li>
        </ul>

        ";
        // line 77
        if (($context["show_level"] ?? null)) {
            // line 78
            echo "        <h4>";
            echo get_lang("AcquiredLevel");
            echo "</h4>
        <ul class=\"fa-ul\">
            <li>
                <em class=\"fa-li fa fa-check-circle-o fa-fw\"></em> ";
            // line 81
            echo $this->getAttribute(($context["issue_info"] ?? null), "acquired_level", array());
            echo "
            </li>
        </ul>
        ";
        }
        // line 85
        echo "
        ";
        // line 86
        if (($context["allow_comment"] ?? null)) {
            // line 87
            echo "            ";
            if (($context["show_level"] ?? null)) {
                // line 88
                echo "                <hr>
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <em class=\"fa fa-check-circle-o fa-fw\" aria-hidden=\"true\"></em>
                        ";
                // line 92
                echo get_lang("ChangeAcquiredLevel");
                echo "
                    </div>
                    <div class=\"panel-body\">
                        ";
                // line 95
                echo ($context["acquired_level_form"] ?? null);
                echo "
                    </div>
                </div>
            ";
            }
            // line 99
            echo "            <hr>
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <em class=\"fa fa-comment-o fa-fw\" aria-hidden=\"true\"></em>
                    ";
            // line 103
            echo sprintf(get_lang("XComments"), twig_length_filter($this->env, $this->getAttribute(($context["issue_info"] ?? null), "comments", array())));
            echo "
                    /
                    <em class=\"fa fa-thumbs-o-up fa-fw\" aria-hidden=\"true\"></em>
                    ";
            // line 106
            echo sprintf(get_lang("AverageRatingX"), $this->getAttribute(($context["issue_info"] ?? null), "feedback_average", array()));
            echo "
                </div>
                <div class=\"panel-body\">
                    ";
            // line 109
            echo ($context["comment_form"] ?? null);
            echo "
                    ";
            // line 110
            if ($this->getAttribute(($context["issue_info"] ?? null), "comments", array())) {
                // line 111
                echo "                        <hr>
                        ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["issue_info"] ?? null), "comments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 113
                    echo "                            <article class=\"media\">
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading\">";
                    // line 115
                    echo $this->getAttribute($context["comment"], "giver_complete_name", array());
                    echo "</h4>
                                    <p><small>";
                    // line 116
                    echo $this->getAttribute($context["comment"], "datetime", array());
                    echo "</small></p>
                                    <p>";
                    // line 117
                    echo $this->getAttribute($context["comment"], "text", array());
                    echo "</p>
                                </div>
                                <div class=\"media-right text-right\">
                                    <div style=\"width: 80px;\">
                                        ";
                    // line 121
                    if ($this->getAttribute($context["comment"], "value", array())) {
                        // line 122
                        echo "                                            <em class=\"fa fa-certificate fa-fw\" aria-label=\"";
                        echo "AverageRating";
                        echo "\"></em>
                                            <span class=\"sr-only\">";
                        // line 123
                        echo "AverageRating";
                        echo "</span> ";
                        echo $this->getAttribute($context["comment"], "value", array());
                        echo "
                                        ";
                    }
                    // line 125
                    echo "                                    </div>
                                </div>
                            </article>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                    ";
            }
            // line 130
            echo "                </div>
            </div>
        ";
        } else {
            // line 133
            echo "            <hr>
            <p class=\"lead\">
                <em class=\"fa fa-comment-o fa-fw\" aria-hidden=\"true\"></em>
                ";
            // line 136
            echo sprintf(get_lang("XComments"), twig_length_filter($this->env, $this->getAttribute(($context["issue_info"] ?? null), "comments", array())));
            echo "
                /
                <em class=\"fa fa-thumbs-o-up fa-fw\" aria-hidden=\"true\"></em>
                ";
            // line 139
            echo sprintf(get_lang("AverageRatingX"), $this->getAttribute(($context["issue_info"] ?? null), "feedback_average", array()));
            echo "
            </p>
        ";
        }
        // line 142
        echo "    </div>
</div>
";
        // line 144
        if (($context["allow_download_export"] ?? null)) {
            // line 145
            echo "    <script>
        \$(document).on('ready', function () {
            \$('#badge-export-button').on('click', function (e) {
                e.preventDefault();
                OpenBadges.issue(";
            // line 149
            echo twig_jsonencode_filter($this->getAttribute(($context["issue_info"] ?? null), "badge_assertion", array()));
            echo ");
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/skill/issued.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 149,  348 => 145,  346 => 144,  342 => 142,  336 => 139,  330 => 136,  325 => 133,  320 => 130,  317 => 129,  308 => 125,  301 => 123,  296 => 122,  294 => 121,  287 => 117,  283 => 116,  279 => 115,  275 => 113,  271 => 112,  268 => 111,  266 => 110,  262 => 109,  256 => 106,  250 => 103,  244 => 99,  237 => 95,  231 => 92,  225 => 88,  222 => 87,  220 => 86,  217 => 85,  210 => 81,  203 => 78,  201 => 77,  196 => 74,  190 => 72,  183 => 68,  179 => 66,  176 => 65,  173 => 64,  168 => 62,  165 => 61,  160 => 59,  157 => 58,  155 => 57,  149 => 54,  145 => 53,  141 => 52,  137 => 50,  125 => 45,  117 => 42,  113 => 41,  106 => 37,  101 => 34,  94 => 30,  90 => 29,  87 => 28,  82 => 26,  79 => 25,  76 => 24,  74 => 23,  70 => 21,  65 => 19,  60 => 18,  57 => 17,  51 => 15,  49 => 14,  44 => 11,  38 => 9,  36 => 8,  32 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/issued.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\skill\\issued.tpl");
    }
}
