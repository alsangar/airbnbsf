<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_862566fce7613ad7d4c906e6766758c7f5c13233be7e74fff0798ad40633bf7e extends Twig_Template
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
        $__internal_469e8c80615746ed4d2f02b92f4e34ac1c9c74a11b48ddb5f456977d4f1ae6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469e8c80615746ed4d2f02b92f4e34ac1c9c74a11b48ddb5f456977d4f1ae6ca->enter($__internal_469e8c80615746ed4d2f02b92f4e34ac1c9c74a11b48ddb5f456977d4f1ae6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"container mtb\">
    <div class=\"row centered\">
        <div class=\"fos_user_user_show\">
            <h3 class=\"mb\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</h3>    
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-md-offset-4 \">
                
                <div class=\"he-wrap tpl6\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "scheme", array()) . "://") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "httpHost", array())) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "basePath", array())) . "/") . $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "imageFile")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                    <div class=\"he-view\">
                        <div class=\"bg a0\" data-animate=\"fadeIn\">                            
                            <a href=\"#\" class=\"dmbutton-profile a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-edit fa-2x\"></i></a>
                        </div><!-- he bg -->
                    </div><!-- he view -->\t\t
                </div><!-- he wrap -->

                <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>                
                <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.firstName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.lastName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
                <p><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-block btn-theme\" >Editar</button></a>
            </div><! --/col-lg-4 -->
        </div>
    </div><! --/row -->
</div><! --/container -->


";
        
        $__internal_469e8c80615746ed4d2f02b92f4e34ac1c9c74a11b48ddb5f456977d4f1ae6ca->leave($__internal_469e8c80615746ed4d2f02b92f4e34ac1c9c74a11b48ddb5f456977d4f1ae6ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 22,  66 => 21,  60 => 20,  54 => 19,  48 => 18,  35 => 10,  28 => 6,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container mtb\">
    <div class=\"row centered\">
        <div class=\"fos_user_user_show\">
            <h3 class=\"mb\">{{ user.username }}</h3>    
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-md-offset-4 \">
                
                <div class=\"he-wrap tpl6\">
                    <img src=\"{{ app.request.scheme ~'://'~ app.request.httpHost ~ app.request.basePath ~'/' ~ vich_uploader_asset(user, 'imageFile') }}\" alt=\"{{ user.username }}\" class=\"img-responsive img-rounded\">
                    <div class=\"he-view\">
                        <div class=\"bg a0\" data-animate=\"fadeIn\">                            
                            <a href=\"#\" class=\"dmbutton-profile a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-edit fa-2x\"></i></a>
                        </div><!-- he bg -->
                    </div><!-- he view -->\t\t
                </div><!-- he wrap -->

                <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>                
                <p>{{ 'profile.show.firstName'|trans }}: {{ user.firstName }}</p>
                <p>{{ 'profile.show.lastName'|trans }}: {{ user.lastName }}</p>
                <p>{{ 'profile.show.phone'|trans }}: {{ user.phone }}</p>
                <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                <p><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-block btn-theme\" >Editar</button></a>
            </div><! --/col-lg-4 -->
        </div>
    </div><! --/row -->
</div><! --/container -->


", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
