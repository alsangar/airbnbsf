<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_1555bb6b514b781a83cb0e1200217786ccab34344043f23987d3feb983855311 extends Twig_Template
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
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_object.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_object.html.twig");
    }
}
