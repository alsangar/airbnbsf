<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_fd9094e5661c1c91003279037c762bb3074eac425c908e04ed80e4e0d6aa7fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e85f0ff1121807a28e673b95468fd11b2a939ec64d74828b6b7b63c167c5aec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85f0ff1121807a28e673b95468fd11b2a939ec64d74828b6b7b63c167c5aec3->enter($__internal_e85f0ff1121807a28e673b95468fd11b2a939ec64d74828b6b7b63c167c5aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"] ?? $this->getContext($context, "__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"] ?? $this->getContext($context, "__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e85f0ff1121807a28e673b95468fd11b2a939ec64d74828b6b7b63c167c5aec3->leave($__internal_e85f0ff1121807a28e673b95468fd11b2a939ec64d74828b6b7b63c167c5aec3_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_71f1252d6a1365f942d81007fb059c676dadbf4efae7c5a6a5a38210ad3bb786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f1252d6a1365f942d81007fb059c676dadbf4efae7c5a6a5a38210ad3bb786->enter($__internal_71f1252d6a1365f942d81007fb059c676dadbf4efae7c5a6a5a38210ad3bb786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_71f1252d6a1365f942d81007fb059c676dadbf4efae7c5a6a5a38210ad3bb786->leave($__internal_71f1252d6a1365f942d81007fb059c676dadbf4efae7c5a6a5a38210ad3bb786_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3ce7d9bfd7cb60bce38e1340e3e606ec0d2e97227de5a4c86444e93987b29ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce7d9bfd7cb60bce38e1340e3e606ec0d2e97227de5a4c86444e93987b29ff7->enter($__internal_3ce7d9bfd7cb60bce38e1340e3e606ec0d2e97227de5a4c86444e93987b29ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3ce7d9bfd7cb60bce38e1340e3e606ec0d2e97227de5a4c86444e93987b29ff7->leave($__internal_3ce7d9bfd7cb60bce38e1340e3e606ec0d2e97227de5a4c86444e93987b29ff7_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3855213e08c09699f3bb0e473d109e31a447dae8505a3d22901277ecc6e6d919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3855213e08c09699f3bb0e473d109e31a447dae8505a3d22901277ecc6e6d919->enter($__internal_3855213e08c09699f3bb0e473d109e31a447dae8505a3d22901277ecc6e6d919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c"] ?? $this->getContext($context, "__internal_5ba9243699816f0611c50488c6b15d63eed4394b871665abfe4ace3e741d2b1c")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3855213e08c09699f3bb0e473d109e31a447dae8505a3d22901277ecc6e6d919->leave($__internal_3855213e08c09699f3bb0e473d109e31a447dae8505a3d22901277ecc6e6d919_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_d0731879d9ebe926565e8e2c9cd188ea43eaedaa9c64d737f87b6ee9f4750502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0731879d9ebe926565e8e2c9cd188ea43eaedaa9c64d737f87b6ee9f4750502->enter($__internal_d0731879d9ebe926565e8e2c9cd188ea43eaedaa9c64d737f87b6ee9f4750502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_d0731879d9ebe926565e8e2c9cd188ea43eaedaa9c64d737f87b6ee9f4750502->leave($__internal_d0731879d9ebe926565e8e2c9cd188ea43eaedaa9c64d737f87b6ee9f4750502_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_f86844854b891cd2b2e6d46a0adbc599b4b4bc6b8ae564906c1dc3a4abfd2f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86844854b891cd2b2e6d46a0adbc599b4b4bc6b8ae564906c1dc3a4abfd2f3a->enter($__internal_f86844854b891cd2b2e6d46a0adbc599b4b4bc6b8ae564906c1dc3a4abfd2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_f86844854b891cd2b2e6d46a0adbc599b4b4bc6b8ae564906c1dc3a4abfd2f3a->leave($__internal_f86844854b891cd2b2e6d46a0adbc599b4b4bc6b8ae564906c1dc3a4abfd2f3a_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ecd76a8cc51f37268114bb18ec60dcb9fd57fd6271767b5c3ab0c080a407cb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd76a8cc51f37268114bb18ec60dcb9fd57fd6271767b5c3ab0c080a407cb21->enter($__internal_ecd76a8cc51f37268114bb18ec60dcb9fd57fd6271767b5c3ab0c080a407cb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_ecd76a8cc51f37268114bb18ec60dcb9fd57fd6271767b5c3ab0c080a407cb21->leave($__internal_ecd76a8cc51f37268114bb18ec60dcb9fd57fd6271767b5c3ab0c080a407cb21_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
