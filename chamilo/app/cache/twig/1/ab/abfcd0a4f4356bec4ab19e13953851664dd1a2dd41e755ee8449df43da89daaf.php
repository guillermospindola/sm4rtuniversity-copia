<?php

/* default/learnpath/list.tpl */
class __TwigTemplate_d4f35bd7d9cbe541a2d27d9f1f5db0504bfa3c79321b3844ac462747135cc5f7 extends Twig_Template
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
    function confirmation(name) {
        if (confirm(\"";
        // line 3
        echo get_lang("AreYouSureToDeleteJS");
        echo " \\\"\" + name + \"\\\" ?\")) {
            return true;
        } else {
            return false;
        }
    }
</script>

";
        // line 11
        echo ($context["introduction_section"] ?? null);
        echo "

";
        // line 13
        $context["configuration"] = api_get_configuration_value("lp_category_accordion");
        // line 14
        echo "<div class=\"lp-accordion panel-group\" id=\"lp-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lp_data"]) {
            // line 16
            echo "    ";
            $context["show_category"] = true;
            // line 17
            echo "
    ";
            // line 18
            if ((($context["filtered_category"] ?? null) && (($context["filtered_category"] ?? null) != $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array())))) {
                // line 19
                echo "        ";
                $context["show_category"] = false;
                // line 20
                echo "    ";
            }
            // line 21
            echo "
    ";
            // line 22
            if (($context["show_category"] ?? null)) {
                // line 23
                echo "        ";
                if ((($context["configuration"] ?? null) == 0)) {
                    // line 24
                    echo "        <!--- old view -->
        ";
                    // line 25
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()))) {
                        // line 26
                        echo "            ";
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 27
                            echo "                <h3 class=\"page-header\">
                    ";
                            // line 28
                            echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getName", array(), "method");
                            echo "

                    ";
                            // line 30
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method") > 0)) {
                                // line 31
                                echo "                        ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", array())) {
                                    // line 32
                                    echo "                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                    echo "\" title=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                <img src=\"";
                                    // line 33
                                    echo Template::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                            </a>

                            ";
                                    // line 36
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", array())) {
                                        // line 37
                                        echo "                            <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                <img src=\"";
                                        // line 38
                                        echo Template::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                            </a>
                            ";
                                    }
                                    // line 41
                                    echo "
                            ";
                                    // line 42
                                    if (($this->getAttribute($context["loop"], "index0", array()) == 1)) {
                                        // line 43
                                        echo "                                <a href=\"#\">
                                    <img src=\"";
                                        // line 44
                                        echo Template::get_icon_path("up_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                </a>
                            ";
                                    } else {
                                        // line 47
                                        echo "                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                    <img src=\"";
                                        // line 48
                                        echo Template::get_icon_path("up.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                </a>
                            ";
                                    }
                                    // line 51
                                    echo "
                            ";
                                    // line 52
                                    if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", array()))) {
                                        // line 53
                                        echo "                                <a href=\"#\">
                                    <img src=\"";
                                        // line 54
                                        echo Template::get_icon_path("down_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                </a>
                            ";
                                    } else {
                                        // line 57
                                        echo "                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                    <img src=\"";
                                        // line 58
                                        echo Template::get_icon_path("down.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                </a>
                            ";
                                    }
                                    // line 61
                                    echo "                        ";
                                }
                                // line 62
                                echo "
                        ";
                                // line 63
                                if (($this->getAttribute($context["lp_data"], "category_visibility", array()) == 0)) {
                                    // line 64
                                    echo "                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 1)));
                                    echo "\"
                               title=\"";
                                    // line 65
                                    echo get_lang("Show");
                                    echo "\">
                                <img src=\"";
                                    // line 66
                                    echo Template::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                            </a>
                        ";
                                } else {
                                    // line 69
                                    echo "                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 0)));
                                    echo "\"
                               title=\"";
                                    // line 70
                                    echo get_lang("Hide");
                                    echo "\">
                                <img src=\"";
                                    // line 71
                                    echo Template::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                            </a>
                        ";
                                }
                                // line 74
                                echo "
                        ";
                                // line 75
                                if (($this->getAttribute($context["lp_data"], "category_is_published", array()) == 0)) {
                                    // line 76
                                    echo "                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 1)));
                                    echo "\"
                               title=\"";
                                    // line 77
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                <img src=\"";
                                    // line 78
                                    echo Template::get_icon_path("lp_publish_na.png");
                                    echo "\" alt=\"";
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                            </a>
                        ";
                                } else {
                                    // line 81
                                    echo "                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 0)));
                                    echo "\"
                               title=\"";
                                    // line 82
                                    echo get_lang("LearnpathDoNotPublish");
                                    echo "\">
                                <img src=\"";
                                    // line 83
                                    echo Template::get_icon_path("lp_publish.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                            </a>
                        ";
                                }
                                // line 86
                                echo "                        ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", array())) {
                                    // line 87
                                    echo "                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                    echo "\" title=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                <img src=\"";
                                    // line 88
                                    echo Template::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                            </a>
                        ";
                                }
                                // line 91
                                echo "                    ";
                            }
                            // line 92
                            echo "                </h3>
            ";
                        } elseif ( !twig_test_empty($this->getAttribute(                        // line 93
$context["lp_data"], "lp_list", array()))) {
                            // line 94
                            echo "                <h3 class=\"page-header\">";
                            echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getName", array(), "method");
                            echo "</h3>
            ";
                        }
                        // line 96
                        echo "        ";
                    }
                    // line 97
                    echo "
        ";
                    // line 98
                    if ($this->getAttribute($context["lp_data"], "lp_list", array())) {
                        // line 99
                        echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped\">
                    <thead>
                        <tr>
                            <th>";
                        // line 103
                        echo get_lang("Title");
                        echo "</th>
                            ";
                        // line 104
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 105
                            echo "                                <th>";
                            echo get_lang("PublicationDate");
                            echo "</th>
                                <th>";
                            // line 106
                            echo get_lang("ExpirationDate");
                            echo "</th>
                                <th>";
                            // line 107
                            echo get_lang("Progress");
                            echo "</th>
                                <th>";
                            // line 108
                            echo get_lang("AuthoringOptions");
                            echo "</th>
                            ";
                        } else {
                            // line 110
                            echo "                                ";
                            if ( !($context["is_invitee"] ?? null)) {
                                // line 111
                                echo "                                    <th>";
                                echo get_lang("Progress");
                                echo "</th>
                                ";
                            }
                            // line 113
                            echo "
                                <th>";
                            // line 114
                            echo get_lang("Actions");
                            echo "</th>
                            ";
                        }
                        // line 116
                        echo "                        </tr>
                    </thead>
                    <tbody>
                    ";
                        // line 119
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 120
                            echo "                        <tr>
                            <td>
                                ";
                            // line 122
                            echo $this->getAttribute($context["row"], "learnpath_icon", array());
                            echo "
                                <a href=\"";
                            // line 123
                            echo $this->getAttribute($context["row"], "url_start", array());
                            echo "\">
                                    ";
                            // line 124
                            echo $this->getAttribute($context["row"], "title", array());
                            echo "
                                    ";
                            // line 125
                            echo $this->getAttribute($context["row"], "session_image", array());
                            echo "
                                    ";
                            // line 126
                            echo $this->getAttribute($context["row"], "extra", array());
                            echo "
                                </a>
                            </td>
                            ";
                            // line 129
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 130
                                echo "                                <td>
                                    ";
                                // line 131
                                if ($this->getAttribute($context["row"], "start_time", array())) {
                                    // line 132
                                    echo "                                        <span class=\"small\">";
                                    echo $this->getAttribute($context["row"], "start_time", array());
                                    echo "</span>
                                    ";
                                }
                                // line 134
                                echo "                                </td>
                                <td>
                                    <span class=\"small\">";
                                // line 136
                                echo $this->getAttribute($context["row"], "end_time", array());
                                echo "</span>
                                </td>
                                <td>
                                    ";
                                // line 139
                                echo $this->getAttribute($context["row"], "dsp_progress", array());
                                echo "
                                </td>
                            ";
                            } else {
                                // line 142
                                echo "                                ";
                                if ( !($context["is_invitee"] ?? null)) {
                                    // line 143
                                    echo "                                    <td>
                                        ";
                                    // line 144
                                    echo $this->getAttribute($context["row"], "dsp_progress", array());
                                    echo "
                                    </td>
                                ";
                                }
                                // line 147
                                echo "                            ";
                            }
                            // line 148
                            echo "                            <td>
                                ";
                            // line 149
                            echo $this->getAttribute($context["row"], "action_build", array());
                            echo "
                                ";
                            // line 150
                            echo $this->getAttribute($context["row"], "action_edit", array());
                            echo "
                                ";
                            // line 151
                            echo $this->getAttribute($context["row"], "action_visible", array());
                            echo "
                                ";
                            // line 152
                            echo $this->getAttribute($context["row"], "action_tracking", array());
                            echo "
                                ";
                            // line 153
                            echo $this->getAttribute($context["row"], "action_publish", array());
                            echo "
                                ";
                            // line 154
                            echo $this->getAttribute($context["row"], "action_subscribe_users", array());
                            echo "
                                ";
                            // line 155
                            echo $this->getAttribute($context["row"], "action_serious_game", array());
                            echo "
                                ";
                            // line 156
                            echo $this->getAttribute($context["row"], "action_reinit", array());
                            echo "
                                ";
                            // line 157
                            echo $this->getAttribute($context["row"], "action_default_view", array());
                            echo "
                                ";
                            // line 158
                            echo $this->getAttribute($context["row"], "action_debug", array());
                            echo "
                                ";
                            // line 159
                            echo $this->getAttribute($context["row"], "action_export", array());
                            echo "
                                ";
                            // line 160
                            echo $this->getAttribute($context["row"], "action_copy", array());
                            echo "
                                ";
                            // line 161
                            echo $this->getAttribute($context["row"], "action_auto_launch", array());
                            echo "
                                ";
                            // line 162
                            echo $this->getAttribute($context["row"], "action_pdf", array());
                            echo "
                                ";
                            // line 163
                            echo $this->getAttribute($context["row"], "action_delete", array());
                            echo "
                                ";
                            // line 164
                            echo $this->getAttribute($context["row"], "action_order", array());
                            echo "
                            </td>
                        </tr>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 168
                        echo "                    </tbody>
                </table>
            </div>
        ";
                    }
                    // line 172
                    echo "        <!--- end old view -->
        ";
                } else {
                    // line 174
                    echo "        <!-- new view block accordeon -->
        ";
                    // line 175
                    if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()) == 0)) {
                        // line 176
                        echo "            ";
                        if ($this->getAttribute($context["lp_data"], "lp_list", array())) {
                            // line 177
                            echo "                  <div class=\"table-responsive\">
                      <table class=\"table table-hover table-striped\">
                          <thead>
                              <tr>
                                  <th>";
                            // line 181
                            echo get_lang("Title");
                            echo "</th>
                                  ";
                            // line 182
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 183
                                echo "                                      <th>";
                                echo get_lang("PublicationDate");
                                echo "</th>
                                      <th>";
                                // line 184
                                echo get_lang("ExpirationDate");
                                echo "</th>
                                      <th>";
                                // line 185
                                echo get_lang("Progress");
                                echo "</th>
                                      <th>";
                                // line 186
                                echo get_lang("AuthoringOptions");
                                echo "</th>
                                  ";
                            } else {
                                // line 188
                                echo "                                      ";
                                if ( !($context["is_invitee"] ?? null)) {
                                    // line 189
                                    echo "                                          <th>";
                                    echo get_lang("Progress");
                                    echo "</th>
                                      ";
                                }
                                // line 191
                                echo "
                                      <th>";
                                // line 192
                                echo get_lang("Actions");
                                echo "</th>
                                  ";
                            }
                            // line 194
                            echo "                              </tr>
                          </thead>
                          <tbody>
                          ";
                            // line 197
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                // line 198
                                echo "                              <tr>
                                  <td>
                                      ";
                                // line 200
                                echo $this->getAttribute($context["row"], "learnpath_icon", array());
                                echo "
                                      <a href=\"";
                                // line 201
                                echo $this->getAttribute($context["row"], "url_start", array());
                                echo "\">
                                          ";
                                // line 202
                                echo $this->getAttribute($context["row"], "title", array());
                                echo "
                                          ";
                                // line 203
                                echo $this->getAttribute($context["row"], "session_image", array());
                                echo "
                                          ";
                                // line 204
                                echo $this->getAttribute($context["row"], "extra", array());
                                echo "
                                      </a>
                                  </td>
                                  ";
                                // line 207
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 208
                                    echo "                                      <td>
                                          ";
                                    // line 209
                                    if ($this->getAttribute($context["row"], "start_time", array())) {
                                        // line 210
                                        echo "                                              <span class=\"small\">";
                                        echo $this->getAttribute($context["row"], "start_time", array());
                                        echo "</span>
                                          ";
                                    }
                                    // line 212
                                    echo "                                      </td>
                                      <td>
                                          <span class=\"small\">";
                                    // line 214
                                    echo $this->getAttribute($context["row"], "end_time", array());
                                    echo "</span>
                                      </td>
                                      <td>
                                          ";
                                    // line 217
                                    echo $this->getAttribute($context["row"], "dsp_progress", array());
                                    echo "
                                      </td>
                                  ";
                                } else {
                                    // line 220
                                    echo "                                      ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 221
                                        echo "                                          <td>
                                              ";
                                        // line 222
                                        echo $this->getAttribute($context["row"], "dsp_progress", array());
                                        echo "
                                          </td>
                                      ";
                                    }
                                    // line 225
                                    echo "                                  ";
                                }
                                // line 226
                                echo "
                                  <td>
                                      ";
                                // line 228
                                echo $this->getAttribute($context["row"], "action_build", array());
                                echo "
                                      ";
                                // line 229
                                echo $this->getAttribute($context["row"], "action_edit", array());
                                echo "
                                      ";
                                // line 230
                                echo $this->getAttribute($context["row"], "action_visible", array());
                                echo "
                                      ";
                                // line 231
                                echo $this->getAttribute($context["row"], "action_tracking", array());
                                echo "
                                      ";
                                // line 232
                                echo $this->getAttribute($context["row"], "action_publish", array());
                                echo "
                                      ";
                                // line 233
                                echo $this->getAttribute($context["row"], "action_subscribe_users", array());
                                echo "
                                      ";
                                // line 234
                                echo $this->getAttribute($context["row"], "action_serious_game", array());
                                echo "
                                      ";
                                // line 235
                                echo $this->getAttribute($context["row"], "action_reinit", array());
                                echo "
                                      ";
                                // line 236
                                echo $this->getAttribute($context["row"], "action_default_view", array());
                                echo "
                                      ";
                                // line 237
                                echo $this->getAttribute($context["row"], "action_debug", array());
                                echo "
                                      ";
                                // line 238
                                echo $this->getAttribute($context["row"], "action_export", array());
                                echo "
                                      ";
                                // line 239
                                echo $this->getAttribute($context["row"], "action_copy", array());
                                echo "
                                      ";
                                // line 240
                                echo $this->getAttribute($context["row"], "action_auto_launch", array());
                                echo "
                                      ";
                                // line 241
                                echo $this->getAttribute($context["row"], "action_pdf", array());
                                echo "
                                      ";
                                // line 242
                                echo $this->getAttribute($context["row"], "action_delete", array());
                                echo "
                                      ";
                                // line 243
                                echo $this->getAttribute($context["row"], "action_order", array());
                                echo "
                                  </td>
                              </tr>
                          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 247
                            echo "                          </tbody>
                      </table>
                  </div>
              ";
                        }
                        // line 251
                        echo "        ";
                    }
                    // line 252
                    echo "        ";
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()))) {
                        // line 253
                        echo "            <div class=\"panel panel-default\">
              <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
                        // line 254
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method");
                        echo "\">
                  <h4 class=\"panel-title\">
                      <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#lp-accordion\" href=\"#collapse-";
                        // line 256
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method");
                        echo "\" aria-expanded=\"true\" aria-controls=\"collapse-";
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method");
                        echo "\">
                          ";
                        // line 257
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getName", array(), "method");
                        echo "
                      </a>
                  </h4>
              ";
                        // line 260
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 261
                            echo "                  <div class=\"tools-actions pull-right\">
                      ";
                            // line 262
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method") > 0)) {
                                // line 263
                                echo "                          ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", array())) {
                                    // line 264
                                    echo "                              <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                    echo "\" title=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                  <img src=\"";
                                    // line 265
                                    echo Template::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                              </a>

                              ";
                                    // line 268
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", array())) {
                                        // line 269
                                        echo "                              <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                  <img src=\"";
                                        // line 270
                                        echo Template::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                              </a>
                              ";
                                    }
                                    // line 273
                                    echo "
                              ";
                                    // line 274
                                    if (($this->getAttribute($context["loop"], "index0", array()) == 1)) {
                                        // line 275
                                        echo "                                  <a href=\"#\">
                                      <img src=\"";
                                        // line 276
                                        echo Template::get_icon_path("up_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                  </a>
                              ";
                                    } else {
                                        // line 279
                                        echo "                                  <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                      <img src=\"";
                                        // line 280
                                        echo Template::get_icon_path("up.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                  </a>
                              ";
                                    }
                                    // line 283
                                    echo "
                              ";
                                    // line 284
                                    if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", array()))) {
                                        // line 285
                                        echo "                                  <a href=\"#\">
                                      <img src=\"";
                                        // line 286
                                        echo Template::get_icon_path("down_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                  </a>
                              ";
                                    } else {
                                        // line 289
                                        echo "                                  <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                        echo "\" title=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                      <img src=\"";
                                        // line 290
                                        echo Template::get_icon_path("down.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                  </a>
                              ";
                                    }
                                    // line 293
                                    echo "                          ";
                                }
                                // line 294
                                echo "
                          ";
                                // line 295
                                if (($this->getAttribute($context["lp_data"], "category_visibility", array()) == 0)) {
                                    // line 296
                                    echo "                              <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 1)));
                                    echo "\"
                                 title=\"";
                                    // line 297
                                    echo get_lang("Show");
                                    echo "\">
                                  <img src=\"";
                                    // line 298
                                    echo Template::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                              </a>
                          ";
                                } else {
                                    // line 301
                                    echo "                              <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 0)));
                                    echo "\"
                                 title=\"";
                                    // line 302
                                    echo get_lang("Hide");
                                    echo "\">
                                  <img src=\"";
                                    // line 303
                                    echo Template::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                              </a>
                          ";
                                }
                                // line 306
                                echo "
                          ";
                                // line 307
                                if (($this->getAttribute($context["lp_data"], "category_is_published", array()) == 0)) {
                                    // line 308
                                    echo "                              <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 1)));
                                    echo "\"
                                 title=\"";
                                    // line 309
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                  <img src=\"";
                                    // line 310
                                    echo Template::get_icon_path("lp_publish_na.png");
                                    echo "\" alt=\"";
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                              </a>
                          ";
                                } else {
                                    // line 313
                                    echo "                              <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", array()) . "&") . twig_urlencode_filter(array("action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "id", array()), "new_status" => 0)));
                                    echo "\"
                                 title=\"";
                                    // line 314
                                    echo get_lang("LearnpathDoNotPublish");
                                    echo "\">
                                  <img src=\"";
                                    // line 315
                                    echo Template::get_icon_path("lp_publish.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                              </a>
                          ";
                                }
                                // line 318
                                echo "
                          ";
                                // line 319
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", array())) {
                                    // line 320
                                    echo "                              <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method"));
                                    echo "\" title=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                  <img src=\"";
                                    // line 321
                                    echo Template::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                              </a>
                          ";
                                }
                                // line 324
                                echo "                      ";
                            }
                            // line 325
                            echo "                      </div>
                  ";
                        }
                        // line 327
                        echo "              </div>
              <div id=\"collapse-";
                        // line 328
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method");
                        echo "\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"heading-";
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", array()), "getId", array(), "method");
                        echo "\">
                <div class=\"panel-body\">
                    ";
                        // line 330
                        if ($this->getAttribute($context["lp_data"], "lp_list", array())) {
                            // line 331
                            echo "                  <div class=\"table-responsive\">
                      <table class=\"table table-hover table-striped\">
                          <thead>
                              <tr>
                                  <th>";
                            // line 335
                            echo get_lang("Title");
                            echo "</th>
                                  ";
                            // line 336
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 337
                                echo "                                      <th>";
                                echo get_lang("PublicationDate");
                                echo "</th>
                                      <th>";
                                // line 338
                                echo get_lang("ExpirationDate");
                                echo "</th>
                                      <th>";
                                // line 339
                                echo get_lang("Progress");
                                echo "</th>
                                      <th>";
                                // line 340
                                echo get_lang("AuthoringOptions");
                                echo "</th>
                                  ";
                            } else {
                                // line 342
                                echo "                                      ";
                                if ( !($context["is_invitee"] ?? null)) {
                                    // line 343
                                    echo "                                          <th>";
                                    echo get_lang("Progress");
                                    echo "</th>
                                      ";
                                }
                                // line 345
                                echo "
                                      <th>";
                                // line 346
                                echo get_lang("Actions");
                                echo "</th>
                                  ";
                            }
                            // line 348
                            echo "                              </tr>
                          </thead>
                          <tbody>
                              ";
                            // line 351
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                // line 352
                                echo "                                  <tr>
                                      <td>
                                          ";
                                // line 354
                                echo $this->getAttribute($context["row"], "learnpath_icon", array());
                                echo "
                                          <a href=\"";
                                // line 355
                                echo $this->getAttribute($context["row"], "url_start", array());
                                echo "\">
                                              ";
                                // line 356
                                echo $this->getAttribute($context["row"], "title", array());
                                echo "
                                              ";
                                // line 357
                                echo $this->getAttribute($context["row"], "session_image", array());
                                echo "
                                              ";
                                // line 358
                                echo $this->getAttribute($context["row"], "extra", array());
                                echo "
                                          </a>
                                      </td>
                                      ";
                                // line 361
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 362
                                    echo "                                          <td>
                                              ";
                                    // line 363
                                    if ($this->getAttribute($context["row"], "start_time", array())) {
                                        // line 364
                                        echo "                                                  <span class=\"small\">";
                                        echo $this->getAttribute($context["row"], "start_time", array());
                                        echo "</span>
                                              ";
                                    }
                                    // line 366
                                    echo "                                          </td>
                                          <td>
                                              <span class=\"small\">";
                                    // line 368
                                    echo $this->getAttribute($context["row"], "end_time", array());
                                    echo "</span>
                                          </td>
                                          <td>
                                              ";
                                    // line 371
                                    echo $this->getAttribute($context["row"], "dsp_progress", array());
                                    echo "
                                          </td>
                                      ";
                                } else {
                                    // line 374
                                    echo "                                          ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 375
                                        echo "                                              <td>
                                                  ";
                                        // line 376
                                        echo $this->getAttribute($context["row"], "dsp_progress", array());
                                        echo "
                                              </td>
                                          ";
                                    }
                                    // line 379
                                    echo "                                      ";
                                }
                                // line 380
                                echo "
                                      <td>
                                          ";
                                // line 382
                                echo $this->getAttribute($context["row"], "action_build", array());
                                echo "
                                          ";
                                // line 383
                                echo $this->getAttribute($context["row"], "action_edit", array());
                                echo "
                                          ";
                                // line 384
                                echo $this->getAttribute($context["row"], "action_visible", array());
                                echo "
                                          ";
                                // line 385
                                echo $this->getAttribute($context["row"], "action_tracking", array());
                                echo "
                                          ";
                                // line 386
                                echo $this->getAttribute($context["row"], "action_publish", array());
                                echo "
                                          ";
                                // line 387
                                echo $this->getAttribute($context["row"], "action_subscribe_users", array());
                                echo "
                                          ";
                                // line 388
                                echo $this->getAttribute($context["row"], "action_serious_game", array());
                                echo "
                                          ";
                                // line 389
                                echo $this->getAttribute($context["row"], "action_reinit", array());
                                echo "
                                          ";
                                // line 390
                                echo $this->getAttribute($context["row"], "action_default_view", array());
                                echo "
                                          ";
                                // line 391
                                echo $this->getAttribute($context["row"], "action_debug", array());
                                echo "
                                          ";
                                // line 392
                                echo $this->getAttribute($context["row"], "action_export", array());
                                echo "
                                          ";
                                // line 393
                                echo $this->getAttribute($context["row"], "action_copy", array());
                                echo "
                                          ";
                                // line 394
                                echo $this->getAttribute($context["row"], "action_auto_launch", array());
                                echo "
                                          ";
                                // line 395
                                echo $this->getAttribute($context["row"], "action_pdf", array());
                                echo "
                                          ";
                                // line 396
                                echo $this->getAttribute($context["row"], "action_delete", array());
                                echo "
                                          ";
                                // line 397
                                echo $this->getAttribute($context["row"], "action_order", array());
                                echo "
                                      </td>
                                  </tr>
                              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 401
                            echo "                          </tbody>
                      </table>
                  </div>
              ";
                        }
                        // line 405
                        echo "                </div>
              </div>
            </div>

        ";
                    }
                    // line 410
                    echo "        <!-- end view block accordeon -->
        ";
                }
                // line 412
                echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "</div>
";
        // line 415
        if ((($context["is_allowed_to_edit"] ?? null) &&  !($context["lp_is_shown"] ?? null))) {
            // line 416
            echo "    <div id=\"no-data-view\">
        <h2>";
            // line 417
            echo get_lang("LearningPaths");
            echo "</h2>
        <img src=\"";
            // line 418
            echo Template::get_icon_path("scorms.png", 64);
            echo "\" width=\"64\" height=\"64\">
        <div class=\"controls\">
            <a href=\"";
            // line 420
            echo (((($context["web_self"] ?? null) . "?") . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array())) . "&action=add_lp");
            echo "\" class=\"btn btn-default\">
                ";
            // line 421
            echo get_lang("LearnpathAddLearnpath");
            echo "
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/learnpath/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1245 => 421,  1241 => 420,  1236 => 418,  1232 => 417,  1229 => 416,  1227 => 415,  1224 => 414,  1209 => 412,  1205 => 410,  1198 => 405,  1192 => 401,  1182 => 397,  1178 => 396,  1174 => 395,  1170 => 394,  1166 => 393,  1162 => 392,  1158 => 391,  1154 => 390,  1150 => 389,  1146 => 388,  1142 => 387,  1138 => 386,  1134 => 385,  1130 => 384,  1126 => 383,  1122 => 382,  1118 => 380,  1115 => 379,  1109 => 376,  1106 => 375,  1103 => 374,  1097 => 371,  1091 => 368,  1087 => 366,  1081 => 364,  1079 => 363,  1076 => 362,  1074 => 361,  1068 => 358,  1064 => 357,  1060 => 356,  1056 => 355,  1052 => 354,  1048 => 352,  1044 => 351,  1039 => 348,  1034 => 346,  1031 => 345,  1025 => 343,  1022 => 342,  1017 => 340,  1013 => 339,  1009 => 338,  1004 => 337,  1002 => 336,  998 => 335,  992 => 331,  990 => 330,  983 => 328,  980 => 327,  976 => 325,  973 => 324,  965 => 321,  958 => 320,  956 => 319,  953 => 318,  945 => 315,  941 => 314,  936 => 313,  928 => 310,  924 => 309,  919 => 308,  917 => 307,  914 => 306,  906 => 303,  902 => 302,  897 => 301,  889 => 298,  885 => 297,  880 => 296,  878 => 295,  875 => 294,  872 => 293,  864 => 290,  857 => 289,  849 => 286,  846 => 285,  844 => 284,  841 => 283,  833 => 280,  826 => 279,  818 => 276,  815 => 275,  813 => 274,  810 => 273,  802 => 270,  795 => 269,  793 => 268,  785 => 265,  778 => 264,  775 => 263,  773 => 262,  770 => 261,  768 => 260,  762 => 257,  756 => 256,  751 => 254,  748 => 253,  745 => 252,  742 => 251,  736 => 247,  726 => 243,  722 => 242,  718 => 241,  714 => 240,  710 => 239,  706 => 238,  702 => 237,  698 => 236,  694 => 235,  690 => 234,  686 => 233,  682 => 232,  678 => 231,  674 => 230,  670 => 229,  666 => 228,  662 => 226,  659 => 225,  653 => 222,  650 => 221,  647 => 220,  641 => 217,  635 => 214,  631 => 212,  625 => 210,  623 => 209,  620 => 208,  618 => 207,  612 => 204,  608 => 203,  604 => 202,  600 => 201,  596 => 200,  592 => 198,  588 => 197,  583 => 194,  578 => 192,  575 => 191,  569 => 189,  566 => 188,  561 => 186,  557 => 185,  553 => 184,  548 => 183,  546 => 182,  542 => 181,  536 => 177,  533 => 176,  531 => 175,  528 => 174,  524 => 172,  518 => 168,  508 => 164,  504 => 163,  500 => 162,  496 => 161,  492 => 160,  488 => 159,  484 => 158,  480 => 157,  476 => 156,  472 => 155,  468 => 154,  464 => 153,  460 => 152,  456 => 151,  452 => 150,  448 => 149,  445 => 148,  442 => 147,  436 => 144,  433 => 143,  430 => 142,  424 => 139,  418 => 136,  414 => 134,  408 => 132,  406 => 131,  403 => 130,  401 => 129,  395 => 126,  391 => 125,  387 => 124,  383 => 123,  379 => 122,  375 => 120,  371 => 119,  366 => 116,  361 => 114,  358 => 113,  352 => 111,  349 => 110,  344 => 108,  340 => 107,  336 => 106,  331 => 105,  329 => 104,  325 => 103,  319 => 99,  317 => 98,  314 => 97,  311 => 96,  305 => 94,  303 => 93,  300 => 92,  297 => 91,  289 => 88,  282 => 87,  279 => 86,  271 => 83,  267 => 82,  262 => 81,  254 => 78,  250 => 77,  245 => 76,  243 => 75,  240 => 74,  232 => 71,  228 => 70,  223 => 69,  215 => 66,  211 => 65,  206 => 64,  204 => 63,  201 => 62,  198 => 61,  190 => 58,  183 => 57,  175 => 54,  172 => 53,  170 => 52,  167 => 51,  159 => 48,  152 => 47,  144 => 44,  141 => 43,  139 => 42,  136 => 41,  128 => 38,  121 => 37,  119 => 36,  111 => 33,  104 => 32,  101 => 31,  99 => 30,  94 => 28,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  61 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 11,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/learnpath/list.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/learnpath/list.tpl");
    }
}
