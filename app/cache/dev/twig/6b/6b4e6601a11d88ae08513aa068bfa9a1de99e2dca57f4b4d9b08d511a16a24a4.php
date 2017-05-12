<?php

/* app\rooms\view.html.twig */
class __TwigTemplate_48cfb32de4e6127b99c8389aee8ef50f89666f9b9919da56fb4048629f4992bd extends Twig_Template
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
        $__internal_2d580a804679ef3e81824b70d980921f0a456b0dc84e210a63130ef8eb14c7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d580a804679ef3e81824b70d980921f0a456b0dc84e210a63130ef8eb14c7cd->enter($__internal_2d580a804679ef3e81824b70d980921f0a456b0dc84e210a63130ef8eb14c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\view.html.twig"));

        // line 1
        echo "View
";
        
        $__internal_2d580a804679ef3e81824b70d980921f0a456b0dc84e210a63130ef8eb14c7cd->leave($__internal_2d580a804679ef3e81824b70d980921f0a456b0dc84e210a63130ef8eb14c7cd_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("View
", "app\\rooms\\view.html.twig", "/var/www/html/airbnbsf/app/Resources/views/app/rooms/view.html.twig");
    }
}
