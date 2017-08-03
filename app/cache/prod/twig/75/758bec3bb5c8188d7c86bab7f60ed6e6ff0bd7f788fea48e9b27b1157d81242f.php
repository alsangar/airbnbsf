<?php

/* @SonataAdmin/Button/show_button.html.twig */
class __TwigTemplate_bbeeb16f8a3742cf15feace5f5988b8d2b8e922d1a6ba91fb9bb1a9ae2011550 extends Twig_Template
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
        // line 11
        if ((($this->getAttribute(($context["admin"] ?? null), "canAccessObject", array(0 => "show", 1 => ($context["object"] ?? null)), "method") && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "show", array())) > 0)) && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "show", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  24 => 13,  21 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Button/show_button.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\show_button.html.twig");
    }
}
