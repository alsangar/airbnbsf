<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_cf125bf3abb55be99522e2923b8a21e93c2ba31b97c4824a3c87d62a013d4bd9 extends Twig_Template
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
        $__internal_7339c1fb3b4a7698e40a6ae3afb1715a9ded7570bdef560111190cdb10d747c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7339c1fb3b4a7698e40a6ae3afb1715a9ded7570bdef560111190cdb10d747c8->enter($__internal_7339c1fb3b4a7698e40a6ae3afb1715a9ded7570bdef560111190cdb10d747c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "


<div class=\"container mtb\">
    <div class=\"row centered\">        
        ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "method" => "POST", "name" => "editProfile", "attr" => array("class" => "fos_user_profile_edit form-horizontal", "id" => "formEditProfile")));
        // line 8
        echo "
        ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "vars", array()), "valid", array())) {
            echo "            
            <div class=\"alert alert-error\" role=\"alert\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 12
                echo "                    ";
                // line 13
                echo "                    <ul>
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    echo "                
                            <li>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                    echo "</li>                            
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                    </ul>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  
            </div>
        ";
        }
        // line 21
        echo "        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[username]\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[firstName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-4\">
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[lastName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Apellido</label>
            <div class=\"col-sm-4\">
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[phone]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Teléfono</label>
            <div class=\"col-sm-4\">
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[email]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[current_password]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form_imageFile_file\" class=\"col-sm-offset-2 col-sm-2 control-label\">Imagen del perfil</label>
            <div class=\"col-sm-4\">
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "imageFile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Actualizar usuario</button>
            </div>
        </div>

        ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "        
    </div><! --/row -->
</div><! --/container -->


";
        
        $__internal_7339c1fb3b4a7698e40a6ae3afb1715a9ded7570bdef560111190cdb10d747c8->leave($__internal_7339c1fb3b4a7698e40a6ae3afb1715a9ded7570bdef560111190cdb10d747c8_prof);

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
        return array (  148 => 69,  141 => 65,  133 => 60,  124 => 54,  115 => 48,  106 => 42,  97 => 36,  88 => 30,  79 => 24,  74 => 21,  69 => 18,  62 => 17,  54 => 15,  48 => 14,  45 => 13,  43 => 12,  39 => 11,  34 => 9,  31 => 8,  29 => 7,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}



<div class=\"container mtb\">
    <div class=\"row centered\">        
        {{ form_start(form, { 'action': path('fos_user_profile_edit'),'method':'POST', 'name':'editProfile', 'attr': { 'class': 'fos_user_profile_edit form-horizontal' , 'id':'formEditProfile'} }) 
        }}
        {% if not form.vars.valid %}            
            <div class=\"alert alert-error\" role=\"alert\">
                {% for child in form.children %}
                    {# Display the errors of the form item #}
                    <ul>
                        {%for error in child.vars.errors%}                
                            <li>{{error.message}}</li>                            
                            {%endfor%}
                    </ul>
                {%endfor%}  
            </div>
        {% endif %}
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[username]\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.username,{ 'attr': {'class': 'form-control'} }) }} 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[firstName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.firstName,{ 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[lastName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Apellido</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.lastName,{ 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[phone]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Teléfono</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.phone,{ 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[email]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.email,{ 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[current_password]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.current_password,{ 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>    
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form_imageFile_file\" class=\"col-sm-offset-2 col-sm-2 control-label\">Imagen del perfil</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.imageFile,{ 'attr': {'class': 'form-control'} }) }}
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
