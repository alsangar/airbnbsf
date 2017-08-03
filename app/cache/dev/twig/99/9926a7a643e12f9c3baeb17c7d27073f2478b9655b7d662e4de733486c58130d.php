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
        $__internal_bde22532a5195639364fe1f2f4f65b325bc01ced462fbe1a817c8530eaccd7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde22532a5195639364fe1f2f4f65b325bc01ced462fbe1a817c8530eaccd7c6->enter($__internal_bde22532a5195639364fe1f2f4f65b325bc01ced462fbe1a817c8530eaccd7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
<div class=\"container mtb\">
    <div class=\"row centered\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "method" => "POST", "name" => "editProfile", "attr" => array("class" => "fos_user_profile_edit form-horizontal", "id" => "formEditProfile")));
        // line 6
        echo "
        ";
        // line 7
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 8
            echo "            <div class=\"alert alert-error\" role=\"alert\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 10
                echo "                    ";
                // line 11
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    echo "                
                        ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </div>
        ";
        }
        // line 17
        echo "        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[username]\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo " 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[firstName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-4\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[lastName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Apellido</label>
            <div class=\"col-sm-4\">
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[phone]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Teléfono</label>
            <div class=\"col-sm-4\">
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[email]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[current_password]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Actualizar usuario</button>
            </div>
        </div>

        ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "        
    </div><! --/row -->
</div><! --/container -->


";
        
        $__internal_bde22532a5195639364fe1f2f4f65b325bc01ced462fbe1a817c8530eaccd7c6->leave($__internal_bde22532a5195639364fe1f2f4f65b325bc01ced462fbe1a817c8530eaccd7c6_prof);

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
        return array (  133 => 59,  126 => 55,  118 => 50,  109 => 44,  100 => 38,  91 => 32,  82 => 26,  73 => 20,  68 => 17,  64 => 15,  58 => 14,  50 => 12,  43 => 11,  41 => 10,  37 => 9,  34 => 8,  32 => 7,  29 => 6,  27 => 5,  22 => 2,);
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
        {% if not form.vars.valid %}
            <div class=\"alert alert-error\" role=\"alert\">
                {% for child in form.children %}
                    {# Display the errors of the form item #}
                    {%for error in child.vars.errors%}                
                        {{error.message}}
                    {%endfor%}
                {%endfor%}
            </div>
        {% endif %}
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[username]\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.username) }} 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[firstName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.firstName) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[lastName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Apellido</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.lastName) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[phone]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Teléfono</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.phone) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[email]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                {{ form_widget(form.email) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[current_password]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
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
