<?php

/* @SonataAdmin/Button/list_button.html.twig */
class __TwigTemplate_43d445ac692fbd381602beb692083fc9cf45f33b2bd48cead7a909d32a9a9946 extends Twig_Template
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
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 16,  27 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Button/list_button.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\list_button.html.twig");
    }
}
