<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_5f9e9750cc805c293eb5e45da299e9b214dae369662e4744edf167f741cb238f extends Twig_Template
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
        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/label_inaccessible.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
