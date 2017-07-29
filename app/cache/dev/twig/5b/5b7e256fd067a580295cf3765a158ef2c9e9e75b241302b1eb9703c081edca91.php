<?php

/* FOSUserBundle:Registration:confirmed_content.html.twig */
class __TwigTemplate_e81997ac82aba212e52213125ae939656d698130ef609310510cc151ae6f0c07 extends Twig_Template
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
        $__internal_f75d42317247d8426cb9953bb0110902e7d6eacf7ead1ce4f1e1009632442ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75d42317247d8426cb9953bb0110902e7d6eacf7ead1ce4f1e1009632442ab0->enter($__internal_f75d42317247d8426cb9953bb0110902e7d6eacf7ead1ce4f1e1009632442ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed_content.html.twig"));

        // line 1
        echo "<h1>You are in!</h1>";
        
        $__internal_f75d42317247d8426cb9953bb0110902e7d6eacf7ead1ce4f1e1009632442ab0->leave($__internal_f75d42317247d8426cb9953bb0110902e7d6eacf7ead1ce4f1e1009632442ab0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed_content.html.twig";
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
        return new Twig_Source("<h1>You are in!</h1>", "FOSUserBundle:Registration:confirmed_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Registration/confirmed_content.html.twig");
    }
}
