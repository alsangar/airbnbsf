<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_17f90cf9e913ab545d6d9717d22a72d95b7cdcdfcccda88ee1b5539cc8fad0a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login_content.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_838d37fe439ab6e070c5bb821f28890de9803756d9180115a19e6a04ef1bf1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838d37fe439ab6e070c5bb821f28890de9803756d9180115a19e6a04ef1bf1a9->enter($__internal_838d37fe439ab6e070c5bb821f28890de9803756d9180115a19e6a04ef1bf1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838d37fe439ab6e070c5bb821f28890de9803756d9180115a19e6a04ef1bf1a9->leave($__internal_838d37fe439ab6e070c5bb821f28890de9803756d9180115a19e6a04ef1bf1a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d93e60e6800ad1c9fd933ec12bdbd3982e503b0ce74d1e9e84ce14dc36c6cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d93e60e6800ad1c9fd933ec12bdbd3982e503b0ce74d1e9e84ce14dc36c6cef->enter($__internal_8d93e60e6800ad1c9fd933ec12bdbd3982e503b0ce74d1e9e84ce14dc36c6cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && ($context["error"] ?? $this->getContext($context, "error")))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" required=\"required\" />
        </div>
        <div class=\"form-group\">
            <label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register now!</a>
";
        
        $__internal_8d93e60e6800ad1c9fd933ec12bdbd3982e503b0ce74d1e9e84ce14dc36c6cef->leave($__internal_8d93e60e6800ad1c9fd933ec12bdbd3982e503b0ce74d1e9e84ce14dc36c6cef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  83 => 22,  78 => 20,  70 => 15,  64 => 12,  60 => 11,  55 => 9,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {% if error is defined and error %}
        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        <div class=\"form-group\">
            <label for=\"username\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" required=\"required\" />
        </div>
        <div class=\"form-group\">
            <label for=\"password\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
        </div>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
    </form>
    <a href=\"{{ path('fos_user_registration_register') }}\">Register now!</a>
{% endblock fos_user_content %}

", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
