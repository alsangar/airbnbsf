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
        $__internal_7d1e13ec9062e4535c33b527fd3189d9457a1ca2058fc9c3f5300a37a7d168ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1e13ec9062e4535c33b527fd3189d9457a1ca2058fc9c3f5300a37a7d168ae->enter($__internal_7d1e13ec9062e4535c33b527fd3189d9457a1ca2058fc9c3f5300a37a7d168ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Nombre</label>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"InputEmail\" >Dirección de correo electrónico</label>
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"inputPassword\">Contraseña</label>
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"inputPassword2\" >Repetir contraseña</label>
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
";
        // line 35
        echo "<button class=\"btn btn-lg btn-theme btn-block\" type=\"submit\">Crear cuenta</button>

";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7d1e13ec9062e4535c33b527fd3189d9457a1ca2058fc9c3f5300a37a7d168ae->leave($__internal_7d1e13ec9062e4535c33b527fd3189d9457a1ca2058fc9c3f5300a37a7d168ae_prof);

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
        return array (  91 => 37,  87 => 35,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  55 => 11,  52 => 10,  39 => 6,  34 => 5,  29 => 4,  25 => 3,  22 => 2,);
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
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Nombre</label>
    {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}
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
