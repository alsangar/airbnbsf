<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_42f5bd9cff615a0004723c5085c1d4cacc7efe287901cf523d535ddf567803b6 extends Twig_Template
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
        $__internal_21b26b5c9f3cec9bd84fa4f8b39caa27f4fff92104bf8bcfb5468994a51be80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b26b5c9f3cec9bd84fa4f8b39caa27f4fff92104bf8bcfb5468994a51be80f->enter($__internal_21b26b5c9f3cec9bd84fa4f8b39caa27f4fff92104bf8bcfb5468994a51be80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_21b26b5c9f3cec9bd84fa4f8b39caa27f4fff92104bf8bcfb5468994a51be80f->leave($__internal_21b26b5c9f3cec9bd84fa4f8b39caa27f4fff92104bf8bcfb5468994a51be80f_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BackendBundle:Default:index.html.twig", "/var/www/html/airbnbsf/src/BackendBundle/Resources/views/Default/index.html.twig");
    }
}
