<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_01805a0000d18be87ad12f4fe390e8a09042720d5c2bc2ed5ca53b63decc0b49 extends Twig_Template
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
        $__internal_b8e818aa6781e74b4c378d7bc4d9ba3d1d8afde4ca654679861eec8a62e23ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e818aa6781e74b4c378d7bc4d9ba3d1d8afde4ca654679861eec8a62e23ae4->enter($__internal_b8e818aa6781e74b4c378d7bc4d9ba3d1d8afde4ca654679861eec8a62e23ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e818aa6781e74b4c378d7bc4d9ba3d1d8afde4ca654679861eec8a62e23ae4->leave($__internal_b8e818aa6781e74b4c378d7bc4d9ba3d1d8afde4ca654679861eec8a62e23ae4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35ede8f112e06dc4cef28acacfbd53d04fc359061aff8e40efcbdb5fb1f3fe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ede8f112e06dc4cef28acacfbd53d04fc359061aff8e40efcbdb5fb1f3fe20->enter($__internal_35ede8f112e06dc4cef28acacfbd53d04fc359061aff8e40efcbdb5fb1f3fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        <input type=\"submit\" class=\"btn btn-theme\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> &nbsp; <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">¡Regístrate!</a>
    </form>
";
        
        $__internal_35ede8f112e06dc4cef28acacfbd53d04fc359061aff8e40efcbdb5fb1f3fe20->leave($__internal_35ede8f112e06dc4cef28acacfbd53d04fc359061aff8e40efcbdb5fb1f3fe20_prof);

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
        return array (  83 => 22,  78 => 20,  70 => 15,  64 => 12,  60 => 11,  55 => 9,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        <input type=\"submit\" class=\"btn btn-theme\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" /> &nbsp; <a href=\"{{ path('fos_user_registration_register') }}\">¡Regístrate!</a>
    </form>
{% endblock fos_user_content %}

", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
