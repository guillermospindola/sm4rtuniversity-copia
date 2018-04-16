<?php

/* default/admin/settings_index.tpl */
class __TwigTemplate_48b8e8215bca43e6e2be0b8c9879488f7dee74a3daded5bd1add4f7d9c56ca21 extends Twig_Template
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
    \$(document).ready(function () {
        \$.ajax({
            url: '";
        // line 4
        echo ($context["web_admin_ajax_url"] ?? null);
        echo "?a=version',
            success: function (version) {
                \$(\".admin-block-version\").html(version);
            }
        });

        ";
        // line 10
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", array())) {
            // line 11
            echo "            (function (CKEDITOR) {
                CKEDITOR.replace('extra_content');
    
                var extraContentEditor = CKEDITOR.instances.extra_content;
    
                \$('button.admin-edit-block').on('click', function (e) {
                    e.preventDefault();
    
                    var \$self = \$(this);
    
                    var extraContent = \$.ajax('";
            // line 21
            echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", array());
            echo "admin.ajax.php', {
                        type: 'post',
                        data: {
                            a: 'get_extra_content',
                            block: \$self.data('id')
                        }
                    });
    
                    \$.when(extraContent).done(function (content) {
                        extraContentEditor.setData(content);
                        \$('#extra-block').val(\$self.data('id'));
                        \$('#modal-extra-title').text(\$self.data('label'));
    
                        \$('#modal-extra').modal('show');
                    });
                });
            })(window.CKEDITOR);
        ";
        }
        // line 39
        echo "    });
</script>

<section id=\"settings\">
    ";
        // line 43
        $context["columns"] = 2;
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 45
            echo "        ";
            if ($this->getAttribute($context["block_item"], "items", array())) {
                // line 46
                echo "            <div id=\"tabs-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"settings-block col-md-6\">
                <div class=\"panel panel-default ";
                // line 47
                echo $this->getAttribute($context["block_item"], "class", array());
                echo "\">
                    <div class=\"panel-heading\">
                        ";
                // line 49
                echo $this->getAttribute($context["block_item"], "icon", array());
                echo " ";
                echo $this->getAttribute($context["block_item"], "label", array());
                echo "
                        ";
                // line 50
                if (($this->getAttribute($context["block_item"], "editable", array()) && $this->getAttribute(($context["_u"] ?? null), "is_admin", array()))) {
                    // line 51
                    echo "                            <button type=\"button\" class=\"btn btn-link btn-sm admin-edit-block pull-right\"
                                    data-label=\"";
                    // line 52
                    echo $this->getAttribute($context["block_item"], "label", array());
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["block_item"], "class", array());
                    echo "\">
                                <img src=\"";
                    // line 53
                    echo Template::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                     title=\"";
                    // line 54
                    echo get_lang("Edit");
                    echo "\"/>
                            </button>
                        ";
                }
                // line 57
                echo "                    </div>
                    <div class=\"panel-body\">
                        <div style=\"display: block;\">
                            ";
                // line 60
                echo $this->getAttribute($context["block_item"], "search_form", array());
                echo "
                        </div>
                        ";
                // line 62
                if ( !(null === $this->getAttribute($context["block_item"], "items", array()))) {
                    // line 63
                    echo "                            <div class=\"block-items-admin\">
                                <ul class=\"list-items-admin\">
                                    ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block_item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                        // line 66
                        echo "                                        <li>
                                            <a href=\"";
                        // line 67
                        echo $this->getAttribute($context["url"], "url", array());
                        echo "\">
                                                ";
                        // line 68
                        echo $this->getAttribute($context["url"], "label", array());
                        echo "
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 75
                echo "
                        ";
                // line 76
                if ( !(null === $this->getAttribute($context["block_item"], "extra", array()))) {
                    // line 77
                    echo "                            <div>
                                ";
                    // line 78
                    echo $this->getAttribute($context["block_item"], "extra", array());
                    echo "
                            </div>
                        ";
                }
                // line 81
                echo "
                        ";
                // line 82
                if ($this->getAttribute($context["block_item"], "extraContent", array())) {
                    // line 83
                    echo "                            <div>";
                    echo $this->getAttribute($context["block_item"], "extraContent", array());
                    echo "</div>
                        ";
                }
                // line 85
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 89
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "</section>

";
        // line 92
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", array())) {
            // line 93
            echo "    <div class=\"modal fade\" id=\"modal-extra\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 97
            echo get_lang("Close");
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"modal-extra-title\">";
            // line 100
            echo get_lang("Blocks");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 103
            echo ($context["extraDataForm"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 103,  241 => 100,  235 => 97,  229 => 93,  227 => 92,  223 => 90,  209 => 89,  203 => 85,  197 => 83,  195 => 82,  192 => 81,  186 => 78,  183 => 77,  181 => 76,  178 => 75,  173 => 72,  163 => 68,  159 => 67,  156 => 66,  152 => 65,  148 => 63,  146 => 62,  141 => 60,  136 => 57,  130 => 54,  124 => 53,  118 => 52,  115 => 51,  113 => 50,  107 => 49,  102 => 47,  97 => 46,  94 => 45,  76 => 44,  74 => 43,  68 => 39,  47 => 21,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/settings_index.tpl", "C:\\xampp\\htdocs\\sm4rtuniversity-copia\\chamilo\\main\\template\\default\\admin\\settings_index.tpl");
    }
}
