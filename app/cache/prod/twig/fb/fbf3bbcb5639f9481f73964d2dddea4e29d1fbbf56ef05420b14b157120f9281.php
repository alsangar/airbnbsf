<?php

/* app\rooms\edit.html.twig */
class __TwigTemplate_04b2b27c5cbea202cf89eb8b5a7d78023e255e663459a081dda600eac3509da8 extends Twig_Template
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
        echo "Edit
<br> ";
        // line 2
        echo twig_escape_filter($this->env, ($context["room"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "app\\rooms\\edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "app\\rooms\\edit.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\edit.html.twig");
    }
}
