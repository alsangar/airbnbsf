<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_f8e444416e3d799a86cfe71e314e6c995b61473f10da70044bd40058e8d1dabb extends Twig_Template
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
        if ((($this->getAttribute(($context["admin"] ?? null), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? null), "canAccessObject", array(0 => "acl", 1 => ($context["object"] ?? null)), "method")) && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
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
        return new Twig_Source("", "SonataAdminBundle:Button:acl_button.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
