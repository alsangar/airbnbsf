<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_b428911938c042d9078831964b7ca68222335a6ef175b460ff8755993bcc62ea extends Twig_Template
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
        $__internal_cba50142eea04cb01ef04e1152e392b233c24986353cdb6e5814c039fa5d14c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba50142eea04cb01ef04e1152e392b233c24986353cdb6e5814c039fa5d14c1->enter($__internal_cba50142eea04cb01ef04e1152e392b233c24986353cdb6e5814c039fa5d14c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

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
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Actualizar usuario</button>
            </div>
        </div>

        ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "        
    </div><! --/row -->
</div><! --/container -->


";
        
        $__internal_cba50142eea04cb01ef04e1152e392b233c24986353cdb6e5814c039fa5d14c1->leave($__internal_cba50142eea04cb01ef04e1152e392b233c24986353cdb6e5814c039fa5d14c1_prof);

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
        return array (  100 => 51,  93 => 47,  85 => 42,  76 => 36,  67 => 30,  58 => 24,  49 => 18,  40 => 12,  33 => 8,  30 => 7,  28 => 6,  22 => 2,);
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
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.firstName) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.lastName) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.phone) }}
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
