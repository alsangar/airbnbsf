<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c64f06e96a7493df720b6973f975874b1a95f25e7a4f9399609f059f42eb20f0 extends Twig_Template
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
        $__internal_56afb6466aa87f3a34f0f4201d9981a8067809f43491a4a0cbe81b794a17b3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56afb6466aa87f3a34f0f4201d9981a8067809f43491a4a0cbe81b794a17b3a8->enter($__internal_56afb6466aa87f3a34f0f4201d9981a8067809f43491a4a0cbe81b794a17b3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("id" => "form-register", "role" => "form", "class" => "form-signin")));
        echo "

";
        // line 13
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 14
            echo "    <div class=\"alert alert-error\" role=\"alert\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                echo "            ";
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    echo "                
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
";
        }
        // line 23
        echo "<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Usuario</label>
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Nombre</label>
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Apellido</label>
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Teléfono</label>
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"InputEmail\" >Dirección de correo electrónico</label>
    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"inputPassword\">Contraseña</label>
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"inputPassword2\" >Repetir contraseña</label>
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
";
        // line 58
        echo "<button class=\"btn btn-lg btn-theme btn-block\" type=\"submit\">Crear cuenta</button>

";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_56afb6466aa87f3a34f0f4201d9981a8067809f43491a4a0cbe81b794a17b3a8->leave($__internal_56afb6466aa87f3a34f0f4201d9981a8067809f43491a4a0cbe81b794a17b3a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  147 => 58,  142 => 49,  135 => 45,  128 => 41,  121 => 37,  114 => 33,  107 => 29,  100 => 25,  96 => 23,  92 => 21,  86 => 20,  78 => 18,  71 => 17,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  55 => 11,  52 => 10,  39 => 6,  34 => 5,  29 => 4,  25 => 3,  22 => 2,);
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

{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}

{{form_start(form, {'method': 'POST', 'attr':{'id': 'form-register','role': 'form','class': 'form-signin'}})}}

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
    <label for=\"fos_user_registration_form[username]\">Usuario</label>
    {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Nombre</label>
    {{ form_widget(form.firstName, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Apellido</label>
    {{ form_widget(form.lastName, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Teléfono</label>
    {{ form_widget(form.phone, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"InputEmail\" >Dirección de correo electrónico</label>
    {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"inputPassword\">Contraseña</label>
    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
</div>
<div class=\"form-group\">
    <label for=\"inputPassword2\" >Repetir contraseña</label>
    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
</div>
{#<div class=\"form-group\">
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"remember-me\"> Newsletter
        </label>
    </div>
</div>#}
<button class=\"btn btn-lg btn-theme btn-block\" type=\"submit\">Crear cuenta</button>

{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
