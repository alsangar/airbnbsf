<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_890f93aed6b0f57127db4d4d152ec200713cf579c6ea40970f246c0e1dd14eb4 extends Twig_Template
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
        $__internal_a41d66680f404ca47ed181402edfc108cfc63f20f0631a21b6915a388c46c73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41d66680f404ca47ed181402edfc108cfc63f20f0631a21b6915a388c46c73d->enter($__internal_a41d66680f404ca47ed181402edfc108cfc63f20f0631a21b6915a388c46c73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41d66680f404ca47ed181402edfc108cfc63f20f0631a21b6915a388c46c73d->leave($__internal_a41d66680f404ca47ed181402edfc108cfc63f20f0631a21b6915a388c46c73d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14a612a84030927dcbd21c5cc45531f10463a858b4f7873a8014753f707390ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a612a84030927dcbd21c5cc45531f10463a858b4f7873a8014753f707390ad->enter($__internal_14a612a84030927dcbd21c5cc45531f10463a858b4f7873a8014753f707390ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        ";
        // line 5
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()))) {
            // line 6
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("login.error", array(), "messages");
            echo "!</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), array(), "messages"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\" required=\"required\" />
        </div>
        <div class=\"form-group\">
            <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <input type=\"submit\" class=\"btn btn-theme btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> 
        <div class=\"form-group\">
            <p> <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">¡Regístrate!</a></p>
            <p><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">¿Has olvidado tu contraseña?</a></p>
        </div>
    </form>

";
        
        $__internal_14a612a84030927dcbd21c5cc45531f10463a858b4f7873a8014753f707390ad->leave($__internal_14a612a84030927dcbd21c5cc45531f10463a858b4f7873a8014753f707390ad_prof);

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
        return array (  97 => 26,  93 => 25,  88 => 23,  83 => 21,  75 => 16,  69 => 13,  65 => 12,  60 => 10,  56 => 8,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
        {% if error is defined and error %}
            <div class=\"alert alert-danger\" role=\"alert\">{#{{ error|trans ({}, 'FOSUserBundle') }}#} {% trans %}login.error{% endtrans %}!</strong> {{ error.messageKey|trans ({}, 'messages') }}</div>
        {% endif %}
        
        
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
        <input type=\"submit\" class=\"btn btn-theme btn-block\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" /> 
        <div class=\"form-group\">
            <p> <a href=\"{{ path('fos_user_registration_register') }}\">¡Regístrate!</a></p>
            <p><a href=\"{{ path('fos_user_resetting_request') }}\">¿Has olvidado tu contraseña?</a></p>
        </div>
    </form>

{% endblock fos_user_content %}

", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}