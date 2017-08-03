<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_75b42077ec7c1e0b2d15bdf081dd4f4fad2522939b44a3c88ee8584a5bfa722c extends Twig_Template
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
        $__internal_ade14fbd6eb1cbf7843b06b1e18d6cf09082d8a267f06c6597ddff552d9e3d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade14fbd6eb1cbf7843b06b1e18d6cf09082d8a267f06c6597ddff552d9e3d40->enter($__internal_ade14fbd6eb1cbf7843b06b1e18d6cf09082d8a267f06c6597ddff552d9e3d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade14fbd6eb1cbf7843b06b1e18d6cf09082d8a267f06c6597ddff552d9e3d40->leave($__internal_ade14fbd6eb1cbf7843b06b1e18d6cf09082d8a267f06c6597ddff552d9e3d40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82825f5e583ba606a56d75327ccb213763816c058c1ce2765d228adc46bbfa53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82825f5e583ba606a56d75327ccb213763816c058c1ce2765d228adc46bbfa53->enter($__internal_82825f5e583ba606a56d75327ccb213763816c058c1ce2765d228adc46bbfa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        ";
        // line 5
        if ((array_key_exists("error", $context) && ($context["error"] ?? $this->getContext($context, "error")))) {
            // line 6
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("login.error", array(), "messages");
            echo "!</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), array(), "messages"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_82825f5e583ba606a56d75327ccb213763816c058c1ce2765d228adc46bbfa53->leave($__internal_82825f5e583ba606a56d75327ccb213763816c058c1ce2765d228adc46bbfa53_prof);

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
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
        {% if error is defined and error %}
            <div class=\"alert alert-danger\" role=\"alert\">{#{{ error|trans({}, 'FOSUserBundle') }}#} {% trans %}login.error{% endtrans %}!</strong> {{ error.messageKey|trans({}, 'messages') }}</div>
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
