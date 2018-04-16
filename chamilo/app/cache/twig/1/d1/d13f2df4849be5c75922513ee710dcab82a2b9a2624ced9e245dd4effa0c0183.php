<?php

/* default/social/myfiles.tpl */
class __TwigTemplate_b85e50cdb01c6720da46555b88efd3aec433045dd51ac4c450a41dda2704c62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["template"] ?? null) . "/layout/layout_1_col.tpl"), "default/social/myfiles.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"social-network-menu\">
            ";
        // line 7
        echo ($context["social_avatar_block"] ?? null);
        echo "
            ";
        // line 8
        echo ($context["social_menu_block"] ?? null);
        echo "
        </div>
    </div>
    <div id=\"wallMessages\" class=\"col-md-9\" style=\"min-height:1px\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"message_ajax_reponse\" class=\"\"></div>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 18
        echo ($context["social_right_content"] ?? null);
        echo "
        </div>
        <div id=\"display_response_id\" class=\"col-md-12\"></div>
        ";
        // line 21
        echo ($context["social_auto_extend_link"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/myfiles.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 18,  39 => 8,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/social/myfiles.tpl", "/var/www/vhosts/labs.sm4rt.mx/httpdocs/chamilo/main/template/default/social/myfiles.tpl");
    }
}
