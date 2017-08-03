<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8388e64c7ccc18a570075cf9b91ec42395c087e4f564931f41e050b2f5a5a35a extends Twig_Template
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
<div class=\"container mtb\">
    <div class=\"row centered\">
        <div class=\"fos_user_user_show\">
            <h3 class=\"mb\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</p>                
                <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.firstName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.lastName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastName", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
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
        return array (  73 => 23,  67 => 22,  61 => 21,  55 => 20,  49 => 19,  43 => 18,  32 => 10,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
