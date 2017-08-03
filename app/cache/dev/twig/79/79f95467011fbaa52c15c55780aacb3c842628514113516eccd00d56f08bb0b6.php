<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b3a11fdfb854d3998dc59baaa9f3de3a54b9a0b80b7c644612f26a105104aa12 extends Twig_Template
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
        $__internal_b77fc576529b226029f4b35200e1db9250156163e7d021e831d6294333463c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77fc576529b226029f4b35200e1db9250156163e7d021e831d6294333463c08->enter($__internal_b77fc576529b226029f4b35200e1db9250156163e7d021e831d6294333463c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"container mtb\">
    <div class=\"row centered\">
        <div class=\"fos_user_user_show\">
            <h3 class=\"mb\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>    
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-md-offset-4 \">
                
                <div class=\"he-wrap tpl6\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/team/team01.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>                
                <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.firstName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.lastName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
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
        
        $__internal_b77fc576529b226029f4b35200e1db9250156163e7d021e831d6294333463c08->leave($__internal_b77fc576529b226029f4b35200e1db9250156163e7d021e831d6294333463c08_prof);

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
        return array (  76 => 23,  70 => 22,  64 => 21,  58 => 20,  52 => 19,  46 => 18,  35 => 10,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
                    <img src=\"{{ asset('themes/app/assets/img/team/team01.jpg') }}\" class=\"img-responsive\">
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
