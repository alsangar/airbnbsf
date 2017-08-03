<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_1e8d8b4bce8d625a70e7b45ba97c853250a3859b088c4a0c48cc5143f125f4f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 25,  50 => 24,  42 => 20,  39 => 19,  36 => 18,  32 => 15,  29 => 14,  20 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/action.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
