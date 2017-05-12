<?php

/* app\rooms\edit.html.twig */
class __TwigTemplate_2b317ee3fe8d175153253745fe247a2bfd3f16fcd4996bdddcba7760029701c1 extends Twig_Template
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
        $__internal_1d55e12dec4ee611fd70463a028c8fc22e3e8550432089aafd22c02355c1d639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d55e12dec4ee611fd70463a028c8fc22e3e8550432089aafd22c02355c1d639->enter($__internal_1d55e12dec4ee611fd70463a028c8fc22e3e8550432089aafd22c02355c1d639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\edit.html.twig"));

        // line 1
        echo "Edit";
        
        $__internal_1d55e12dec4ee611fd70463a028c8fc22e3e8550432089aafd22c02355c1d639->leave($__internal_1d55e12dec4ee611fd70463a028c8fc22e3e8550432089aafd22c02355c1d639_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\edit.html.twig";
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
        return new Twig_Source("Edit", "app\\rooms\\edit.html.twig", "/var/www/html/airbnbsf/app/Resources/views/app/rooms/edit.html.twig");
    }
}
