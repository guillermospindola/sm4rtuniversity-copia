<?php

/* default/skill/skill_wheel.tpl */
class __TwigTemplate_9035a95d0c09a678003d5bb65c2d119a8eab839147615a5fbd4a188b8ca99d27 extends Twig_Template
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
        $this->loadTemplate((($context["template"] ?? null) . "/skill/skill_wheel.js.tpl"), "default/skill/skill_wheel.tpl", 1)->display($context);
        // line 2
        echo "<script>
    /* Skill search input in the left menu */
    function check_skills_sidebar() {
        //Selecting only selected skills
        \$(\"#skill_id option\").each(function () {
            var skill_id = \$(this).val();
            if (skill_id != \"\") {
                \$.ajax({
                    url: \"";
        // line 10
        echo ($context["url"] ?? null);
        echo "&a=skill_exists\",
                    data: \"skill_id=\" + skill_id,
                    async: false,
                    success: function (return_value) {
                        if (return_value == 0) {
                            alert(\"";
        // line 15
        echo get_lang("SkillDoesNotExist");
        echo "\");

                            //Deleting select option tag
                            //\$(\"#skill_id option[value=\"+skill_id+\"]\").remove();
                            \$(\"#skill_id\").empty();

                            //Deleting holder
                            \$(\"#skill_search .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == skill_id) {
                                    \$(this).remove();
                                }
                            });
                        } else {
                            \$(\"#skill_id option[value=\" + skill_id + \"]\").remove();

                            //Deleting holder
                            \$(\"#skill_search .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == skill_id) {
                                    \$(this).remove();
                                }
                            });

                            if (\$('#skill_to_select_id_' + skill_id).length == 0) {
                                skill_info = get_skill_info(skill_id);
                                li = fill_skill_search_li(skill_id, skill_info.name);
                                \$(\"#skill_holder\").append(li);
                            }
                        }
                    }
                });
            }
        });
    }

    function fill_skill_search_li(skill_id, skill_name, checked) {
        var checked_condition = '',
            activeCondition = '',
            iconClassCondition = 'fa fa-square-o fa-fw';

        if (checked) {
            checked_condition = 'checked=checked';
            activeCondition = 'active';
            iconClassCondition = 'fa fa-check-square-o fa-fw';
        }

        return '\\
            <tr>\\n\\
                <td>' + skill_name + '</td>\\n\\
                <td class=\"text-right\">\\n\\
                    <div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\">\\n\\
                        <label class=\"btn btn-default ' + activeCondition + '\" aria-label=\"";
        // line 65
        echo get_lang("Select");
        echo "\" title=\"";
        echo get_lang("SelectToSearch");
        echo "\">\\n\\
                            <input id=\"skill_to_select_id_' + skill_id + '\" data-id=\"' + skill_id + '\" name=\"' + skill_name + '\" class=\"skill_to_select\" type=\"checkbox\" autocomplete=\"off\" ' + checked_condition + '>\\n\\
                            <span class=\"' + iconClassCondition + '\" aria-hidden=\"true\"></span>\\n\\
                        </label>\\n\\
                        <button class=\"btn btn-default load_wheel\" aria-label=\"";
        // line 69
        echo get_lang("Search");
        echo "\" title=\"";
        echo get_lang("PlaceOnTheWheel");
        echo "\" data-id=\"' + skill_id + '\">\\n\\
                            <span class=\"fa fa-crosshairs fa-fw\" aria-hidden=\"true\"></span>\\n\\
                        </button>\\n\\
                    </div>\\n\\
                </td>\\n\\
            </tr>';
    }

    function check_skills_edit_form() {
        //selecting only selected parents
        \$(\"#parent_id option:selected\").each(function () {
            var skill_id = \$(this).val();
            if (skill_id != \"\") {
                \$.ajax({
                    async: false,
                    url: \"";
        // line 84
        echo ($context["url"] ?? null);
        echo "&a=skill_exists\",
                    data: \"skill_id=\" + skill_id,
                    success: function (return_value) {
                        if (return_value == 0) {
                            alert(\"";
        // line 88
        echo get_lang("SkillDoesNotExist");
        echo "\");

                            //Deleting select option tag
                            \$(\"#parent_id\").find('option').remove();
                            //Deleting holder
                            \$(\"#skill_row .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == skill_id) {
                                    \$(this).remove();
                                }
                            });
                        } else {
                            \$(\"#parent_id\").empty();
                            \$(\"#skill_edit_holder\").find('li').remove();

                            //Deleting holder
                            \$(\"#skill_row .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == skill_id) {
                                    \$(this).remove();
                                }
                            });

                            skill = get_skill_info(skill_id);

                            \$(\"#skill_edit_holder\").append('<li class=\"bit-box\" id=\"skill_option_' + skill_id + '\"> ' + skill.name + '</li>');
                            \$(\"#parent_id\").append('<option class=\"selected\" selected=\"selected\" value=\"' + skill_id + '\"></option>');
                        }
                    }
                });
            }
        });
    }

    function check_gradebook() {
        //selecting only selected users
        \$(\"#gradebook_id option:selected\").each(function () {
            var gradebook_id = \$(this).val();

            if (gradebook_id != \"\") {
                \$.ajax({
                    url: \"";
        // line 127
        echo ($context["url"] ?? null);
        echo "&a=gradebook_exists\",
                    data: \"gradebook_id=\" + gradebook_id,
                    success: function (return_value) {
                        if (return_value == 0) {
                            alert(\"";
        // line 131
        echo get_lang("GradebookDoesNotExist");
        echo "\");
                            //Deleting select option tag
                            \$(\"#gradebook_id option[value=\" + gradebook_id + \"]\").remove();
                            //Deleting holder
                            \$(\"#gradebook_row .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == gradebook_id) {
                                    \$(this).remove();
                                }
                            });
                        } else {
                            //Deleting holder
                            \$(\"#gradebook_row .holder li\").each(function () {
                                if (\$(this).attr(\"rel\") == gradebook_id) {
                                    \$(this).remove();
                                }
                            });

                            if (\$('#gradebook_item_' + gradebook_id).length == 0) {
                                gradebook = get_gradebook_info(gradebook_id);
                                if (gradebook) {
                                    \$(\"#gradebook_holder\").append('<li id=\"gradebook_item_' + gradebook_id + '\" class=\"bit-box\"> ' + gradebook.name +
                                        ' <a rel=\"' + gradebook_id + '\" class=\"closebutton\" href=\"#\"></a></li>');
                                }
                            }
                        }
                    }
                });
            }
        });
    }

    function delete_gradebook_from_skill(skill_id, gradebook_id) {
        \$.ajax({
            url: url + '&a=delete_gradebook_from_skill&skill_id=' + skill_id + '&gradebook_id=' + gradebook_id,
            async: false,
            success: function (result) {
                //if (result == 1) {
                \$('#gradebook_item_' + gradebook_id).remove();
                \$(\"#gradebook_id option\").each(function () {
                    if (\$(this).attr(\"value\") == gradebook_id) {
                        \$(this).remove();
                    }
                });
                //}
            }
        });
    }

    function return_skill_list_from_profile_search() {
        var skill_list = {};

        if (\$(\"#profile_search li\").length != 0) {
            \$(\"#profile_search li\").each(function (index) {
                id = \$(this).attr(\"id\").split('_')[3];
                if (id) {
                    skill_list[index] = id;
                }
            });
        }
        return skill_list;
    }

    function submit_profile_search_form() {
        \$(\"#skill_wheel\").remove();

        var skill_list = return_skill_list_from_profile_search();

        if (skill_list.length != 0) {
            skill_list = {'skill_id': skill_list};
            skill_params = \$.param(skill_list);

            \$.ajax({
                url: url + '&a=profile_matches&' + skill_params,
                async: false,
                success: function (html) {
                    //users = jQuery.parseJSON(users);
                    \$('#wheel_container').html(html);

                }
            });
        }
        //return skill;
    }

    function add_skill_in_profile_list(skill_id, skill_name) {
        if (\$('#profile_match_item_' + skill_id).length == 0) {
            \$('#profile_search').append('<li class=\"bit-box\" id=\"profile_match_item_' + skill_id + '\">' + skill_name +
                ' <a rel=\"' + skill_id + '\" class=\"closebutton\" href=\"#\"></a> </li>');
        } else {
            \$('#profile_match_item_' + skill_id).remove();
        }
        toogle_save_profile_form();
    }

    function toogle_save_profile_form() {
        //Hiding showing the save this search
        if (\$('#profile_search li').length == 0) {
            \$('#profile-options-container').hide();
        } else {
            \$('#profile-options-container').show();
        }
    }

    \$(document).ready(function () {
        /* Skill search */

        //Tool tip (in exercises)

        var tip_options = {
            placement: 'right'
        }
        \$('.tooltip_skill').tooltip(tip_options);

        /* Skill item list onclick  */
        \$(\"#skill_holder\").on(\"change\", \"input.skill_to_select\", function () {
            var self = \$(this);

            skill_id = self.data('id') || 0;
            skill_name = self.attr('name');
            add_skill_in_profile_list(skill_id, skill_name);

            if (this.checked) {
                self.next('.fa').replaceWith('<span class=\"fa fa-check-square-o fa-fw\" aria-hidden=\"true\"></span>');
            } else {
                self.next('.fa').replaceWith('<span class=\"fa fa-square-o fa-fw\" aria-hidden=\"true\"></span>');
            }
        });

        /* URL link when searching skills */
        \$(\"#skill_holder\").on(\"click\", \"button.load_wheel\", function (e) {
            e.preventDefault();

            skill_id = \$(this).data('id') || 0;
            skill_to_load_from_get = 0;

            load_nodes(skill_id, main_depth);
        });

        /* URL link when searching skills */
        \$(\"a.load_root\").on(\"click\", function (e) {
            e.preventDefault();

            skill_id = \$(this).attr('rel');
            skill_to_load_from_get = 0;
            load_nodes(skill_id, main_depth);
        });

        /* Profile matcher */

        /* Submit button */
        \$(\"#search_profile_form\").submit(function () {
            submit_profile_search_form();
            return false;
        });

        \$(\"form#save_profile_form_button\").on('submit', function (e) {
            e.preventDefault();

            var profileId = parseInt(\$('input[name=\"profile_id\"]').val());

            var getProfileInfo = \$.getJSON(
                    '";
        // line 292
        echo ($context["url"] ?? null);
        echo "',
                    {
                        a: 'get_profile',
                        profile_id: profileId
                    }
            );

            \$.when(getProfileInfo).done(function (profileInfo) {
                \$(\"#name_profile\").val(profileInfo.name);
                \$(\"#description_profile\").val(profileInfo.description);

                \$('#frm-save-profile').modal('show');
            });
        });

        /* Close button in profile matcher items */
        \$(\"#profile_search\").on(\"click\", \"a.closebutton\", function () {
            skill_id = \$(this).attr('rel');
            \$('input[id=skill_to_select_id_' + skill_id + ']').attr('checked', false);
            \$('#profile_match_item_' + skill_id).remove();
            submit_profile_search_form();
            toogle_save_profile_form();
        });

        // Fill saved profiles list
        update_my_saved_profiles();

        /* Click in profile */
        \$(\"#saved_profiles\").on(\"click\", \"button.skill-wheel-load-profile\", function (e) {
            e.preventDefault();

            profile_id = \$(this).data('id') || 0;

            \$('input[name=\"profile_id\"]').val(profile_id);

            \$.ajax({
                url: '";
        // line 328
        echo ($context["url"] ?? null);
        echo "&a=get_skills_by_profile&profile_id=' + profile_id,
                success: function (json) {
                    \$('#profile_search').empty();
                    \$('#skill_holder').empty();

                    skill_list = \$.parseJSON(json);

                    \$.each(skill_list, function (index, skill_id) {
                        skill_info = get_skill_info(skill_id);
                        li = fill_skill_search_li(skill_id, skill_info.name, 1);
                        \$(\"#skill_holder\").append(li);

                        add_skill_in_profile_list(skill_id, skill_info.name);
                    });

                    submit_profile_search_form();
                }
            });
        });

        \$(\"#saved_profiles\").on('click', 'button.skill-wheel-delete-profile', function (e) {
            e.preventDefault();

            var self = \$(this),
                profileId = self.data('id') || 0;

            \$.getJSON('";
        // line 354
        echo ($context["url"] ?? null);
        echo "&a=delete_profile', {
                profile: profileId
            }, function (response) {
                if (response.status) {
                    update_my_saved_profiles();
                }
            });
        });

        /* Wheel skill popup form */

        /* Close button in gradebook select */
        \$(\"#gradebook_holder\").on(\"click\", \"a.closebutton\", function () {
            gradebook_id = \$(this).attr('rel');
            skill_id = \$('input[name=\"id\"]').attr('value');
            delete_gradebook_from_skill(skill_id, gradebook_id);
        });

        \$(\"#skill_id\").select2({
            ajax: {
                url: '";
        // line 374
        echo ($context["url"] ?? null);
        echo "&a=find_skills',
                processResults: function (data) {
                    return {
                        results: data.items
                    };
                }
            },
            cache: false,
            placeholder: '";
        // line 382
        echo get_lang("EnterTheSkillNameToSearch");
        echo "'
        }).on('change', function () {
            check_skills_sidebar();
        });

        load_nodes(0, main_depth);

        function update_my_saved_profiles() {
            \$.ajax({
                url: '";
        // line 391
        echo ($context["url"] ?? null);
        echo "&a=get_saved_profiles',
                success: function (data) {
                    \$(\"#saved_profiles\").html(data);
                }
            });
        }

        /* change background color */
        \$('#skill-change-background-options li a').on('click', function (e) {
            e.preventDefault();

            var newBackgroundColor = \$(this).data('color') || '#FFF';

            \$(\"#page-back\").css(\"background\", newBackgroundColor);
        });

        /* Generated random colour */
        /*
         function colour(d) {

         if (d.children) {
         // There is a maximum of two children!
         var colours = d.children.map(colour),
         a = d3.hsl(colours[0]),
         b = d3.hsl(colours[1]);
         // L*a*b* might be better here...
         return d3.hsl((a.h + b.h) / 2, a.s * 1.2, a.levels_to_show / 1.2);
         }
         return d.colour || \"#fff\";
         }*/

        \$('#form-button-edit').on('click', function (e) {
            e.preventDefault();

            if (SkillWheel.currentSkill === null) {
                return;
            }

            window.location.href = \"";
        // line 429
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "admin/skill_edit.php?id=\" + SkillWheel.currentSkill.id;
        });

        \$('#form-button-create-child').on('click', function (e) {
            e.preventDefault();

            if (SkillWheel.currentSkill === null) {
                return;
            }

            window.location.href = \"";
        // line 439
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "admin/skill_create.php?parent=\" + SkillWheel.currentSkill.id;
        });

        \$('#form-button-add-to-profile').on('click', function (e) {
            e.preventDefault();

            if (SkillWheel.currentSkill === null) {
                return;
            }

            add_skill_in_profile_list(SkillWheel.currentSkill.id, SkillWheel.currentSkill.name);
        });

        \$('#frm-save-profile').on('hidden.bs.modal', function () {
            \$(\"#name_profile\").val('');
            \$(\"#description_profile\").val('');
            \$('input[name=\"profile_id\"]').val(0);
        });

        \$('#form-button-save-profile').on('click', function (e) {
            e.preventDefault();

            var saveProfile = \$.ajax(
                '";
        // line 462
        echo ($context["url"] ?? null);
        echo "',
                {
                    data: {
                        a: 'save_profile',
                        name: \$(\"#name_profile\").val(),
                        description: \$(\"#description_profile\").val(),
                        skill_id: return_skill_list_from_profile_search(),
                        profile: \$('input[name=\"profile_id\"]').val()
                    }
                }
            );

            \$.when(saveProfile).done(function (response) {
                if (parseInt(response) === 1) {
                    update_my_saved_profiles();

                    alert(\"";
        // line 478
        echo get_lang("Saved");
        echo "\");
                } else {
                    alert(\"";
        // line 480
        echo get_lang("Error");
        echo "\");
                }

                \$('#frm-save-profile').modal('hide');
            });
        });
        \$(\".facebook-auto\").css(\"width\",\"100%\");
        \$(\".facebook-auto ul\").css(\"width\",\"100%\");
        \$(\"ul.holder\").css(\"width\",\"100%\");
    });
</script>
<div id=\"page-back\" class=\"page-skill\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 skill-options\">
                <div class=\"skill-home\">
                    <a class=\"btn btn-large btn-block btn-primary\" href=\"";
        // line 496
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "user_portal.php\">
                        <em class=\"fa fa-home\"></em> ";
        // line 497
        echo get_lang("ReturnToCourseList");
        echo "
                    </a>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div id=\"saved_profiles\"></div>
                        <h4 class=\"page-header\">";
        // line 503
        echo get_lang("WhatSkillsAreYouLookingFor");
        echo "</h4>
                        <div class=\"search-skill\">
                            <form id=\"skill_search\" class=\"form-search\">
                                <select id=\"skill_id\" name=\"skill_id\" style=\"width: 100%;\" multiple></select>
                                <table id=\"skill_holder\" class=\"table table-condensed\"></table>
                            </form>
                        </div>
                        <div class=\"search-profile-skill\">
                            <ul id=\"profile_search\" class=\"holder holder_simple hide\"></ul>
                            <form id=\"search_profile_form\" class=\"form-search\">
                                <button class=\"btn btn-default btn-block\" type=\"submit\">
                                    <em class=\"fa fa-search\"></em> ";
        // line 514
        echo get_lang("SearchProfileMatches");
        echo "
                                </button>
                            </form>
                            <h4 class=\"page-header\">";
        // line 517
        echo get_lang("IsThisWhatYouWereLookingFor");
        echo "</h4>
                            <form id=\"save_profile_form_button\" class=\"form-search\">
                                <button class=\"btn btn-default btn-block\" type=\"submit\">
                                    <em class=\"fa fa-floppy-o\"></em> ";
        // line 520
        echo get_lang("SaveThisSearch");
        echo "
                                </button>
                            </form>
                        </div>
                        <hr>
                        <p>
                            <a class=\"btn btn-block btn-default load_root\" rel=\"0\" href=\"#\">
                                <em class=\"fa fa-eye\"></em> ";
        // line 527
        echo get_lang("ViewSkillsWheel");
        echo "
                            </a>
                        </p>
                    </div>
                </div>
                <div class=\"panel-group\" id=\"wheel-second-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"wheel-legend-heading\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#wheel-second-accordion\" href=\"#wheel-legend-collapse\" aria-expanded=\"true\" aria-controls=\"wheel-legend-collapse\">
                                    ";
        // line 537
        echo get_lang("Legend");
        echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"wheel-legend-collapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"wheel-legend-heading\">
                            <div class=\"panel-body\">
                                <ul class=\"fa-ul\">
                                    <li>
                                        <em class=\"fa fa-li fa-square skill-legend-basic\"></em> ";
        // line 545
        echo get_lang("BasicSkills");
        echo "
                                    </li>
                                    <li>
                                        <em class=\"fa fa-li fa-square skill-legend-add\"></em> ";
        // line 548
        echo get_lang("SkillsYouCanLearn");
        echo "
                                    </li>
                                    <li>
                                        <em class=\"fa fa-li fa-square skill-legend-search\"></em> ";
        // line 551
        echo get_lang("SkillsSearchedFor");
        echo "
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"wheel-display-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#wheel-second-accordion\" href=\"#wheel-display-collapse\" aria-expanded=\"false\" aria-controls=\"wheel-display-collapse\">
                                    ";
        // line 561
        echo get_lang("DisplayOptions");
        echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"wheel-display-collapse\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"wheel-display-heading\">
                            <div class=\"panel-body\">
                                <p>";
        // line 567
        echo get_lang("ChooseABackgroundColor");
        echo "</p>
                                <ul class=\"list-unstyled\" id=\"skill-change-background-options\">
                                    <li><a href=\"#\" data-color=\"#FFFFFF\">";
        // line 569
        echo get_lang("White");
        echo "</a></li>
                                    <li><a href=\"#\" data-color=\"#000000\">";
        // line 570
        echo get_lang("Black");
        echo "</a></li>
                                    <li><a href=\"#\" data-color=\"#A9E2F3\">";
        // line 571
        echo "LightBlue";
        echo "</a></li>
                                    <li><a href=\"#\" data-color=\"#848484\">";
        // line 572
        echo get_lang("Gray");
        echo "</a></li>
                                    <li><a href=\"#\" data-color=\"#F7F8E0\">";
        // line 573
        echo get_lang("Corn");
        echo "</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"wheel_container\" class=\"col-md-9\">
                <div id=\"skill_wheel\">
                    <img src=\"\">
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"frm-skill\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"form-skill-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 593
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"form-skill-title\">";
        // line 596
        echo get_lang("Skill");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 599
        echo ($context["dialogForm"] ?? null);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button id=\"form-button-edit\" class=\"btn btn-primary\">
                    <em class=\"fa fa-edit\"></em> ";
        // line 603
        echo get_lang("Edit");
        echo "
                </button>
                <button id=\"form-button-create-child\" class=\"btn btn-primary\">
                    <em class=\"fa fa-plus\"></em> ";
        // line 606
        echo get_lang("CreateChildSkill");
        echo "
                </button>
                <button id=\"form-button-add-to-profile\" class=\"btn btn-primary\">
                    <em class=\"fa fa-check\"></em> ";
        // line 609
        echo get_lang("AddSkillToProfileSearch");
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">
                    <em class=\"fa fa-close\"></em> ";
        // line 612
        echo get_lang("Close");
        echo "
                </button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"frm-save-profile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"form-save-profile-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 623
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"form-save-profile-title\">";
        // line 626
        echo get_lang("SkillProfile");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 629
        echo ($context["save_profile_form"] ?? null);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button id=\"form-button-save-profile\" class=\"btn btn-primary\">
                    <em class=\"fa fa-save\"></em> ";
        // line 633
        echo get_lang("Save");
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">
                    <em class=\"fa fa-close\"></em> ";
        // line 636
        echo get_lang("Close");
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/skill/skill_wheel.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  805 => 636,  799 => 633,  792 => 629,  786 => 626,  780 => 623,  766 => 612,  760 => 609,  754 => 606,  748 => 603,  741 => 599,  735 => 596,  729 => 593,  706 => 573,  702 => 572,  698 => 571,  694 => 570,  690 => 569,  685 => 567,  676 => 561,  663 => 551,  657 => 548,  651 => 545,  640 => 537,  627 => 527,  617 => 520,  611 => 517,  605 => 514,  591 => 503,  582 => 497,  578 => 496,  559 => 480,  554 => 478,  535 => 462,  509 => 439,  496 => 429,  455 => 391,  443 => 382,  432 => 374,  409 => 354,  380 => 328,  341 => 292,  177 => 131,  170 => 127,  128 => 88,  121 => 84,  101 => 69,  92 => 65,  39 => 15,  31 => 10,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/skill/skill_wheel.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/skill/skill_wheel.tpl");
    }
}
