<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_ee50f0da781c4bdd0d3c4d18d1075d870852a34acabcec10d4c6e4196f5d9e4c extends Twig_Template
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
        $__internal_6b216a112e4f5296f57dfd0f04cf807f534fa9993fa80da51c931213880efccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b216a112e4f5296f57dfd0f04cf807f534fa9993fa80da51c931213880efccb->enter($__internal_6b216a112e4f5296f57dfd0f04cf807f534fa9993fa80da51c931213880efccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
<div class=\"container mtb\">
    <div class=\"row centered\">
        
        ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "method" => "POST", "name" => "editProfile", "attr" => array("class" => "fos_user_profile_edit form-horizontal", "id" => "formEditProfile")));
        // line 7
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo " 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Actualizar usuario</button>
            </div>
        </div>

        ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "        
    </div><! --/row -->
</div><! --/container -->


";
        
        $__internal_6b216a112e4f5296f57dfd0f04cf807f534fa9993fa80da51c931213880efccb->leave($__internal_6b216a112e4f5296f57dfd0f04cf807f534fa9993fa80da51c931213880efccb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 33,  66 => 29,  58 => 24,  49 => 18,  40 => 12,  33 => 8,  30 => 7,  28 => 6,  22 => 2,);
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
        
        {{ form_start(form, { 'action': path('fos_user_profile_edit'),'method':'POST', 'name':'editProfile', 'attr': { 'class': 'fos_user_profile_edit form-horizontal' , 'id':'formEditProfile'} }) 
        }}
        {{ form_errors(form) }}
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.username) }} 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.email) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.current_password) }}
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"{{ 'profile.edit.submit'|trans }}\">Actualizar usuario</button>
            </div>
        </div>

        {{ form_end(form) }}        
    </div><! --/row -->
</div><! --/container -->


", "@FOSUser/Profile/edit_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
