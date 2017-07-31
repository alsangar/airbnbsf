<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7c38add1297fadfc8c822efd05d712a945f27dded32e8ccf066584c1ce5408b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d8d7b520cc580db3a4cda3dccf33be619811e24bd584b89b083708936d3c809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8d7b520cc580db3a4cda3dccf33be619811e24bd584b89b083708936d3c809->enter($__internal_9d8d7b520cc580db3a4cda3dccf33be619811e24bd584b89b083708936d3c809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d8d7b520cc580db3a4cda3dccf33be619811e24bd584b89b083708936d3c809->leave($__internal_9d8d7b520cc580db3a4cda3dccf33be619811e24bd584b89b083708936d3c809_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b2e443f9de615804feb4b97a2833b1bd00e7e17de1b7913a7e12eda800a9de5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e443f9de615804feb4b97a2833b1bd00e7e17de1b7913a7e12eda800a9de5a->enter($__internal_b2e443f9de615804feb4b97a2833b1bd00e7e17de1b7913a7e12eda800a9de5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b2e443f9de615804feb4b97a2833b1bd00e7e17de1b7913a7e12eda800a9de5a->leave($__internal_b2e443f9de615804feb4b97a2833b1bd00e7e17de1b7913a7e12eda800a9de5a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f3f15f5832e6b73ae0ebddc74af88bf54d54ca76ac5e0966f7d2d3932e4a8e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f15f5832e6b73ae0ebddc74af88bf54d54ca76ac5e0966f7d2d3932e4a8e41->enter($__internal_f3f15f5832e6b73ae0ebddc74af88bf54d54ca76ac5e0966f7d2d3932e4a8e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3f15f5832e6b73ae0ebddc74af88bf54d54ca76ac5e0966f7d2d3932e4a8e41->leave($__internal_f3f15f5832e6b73ae0ebddc74af88bf54d54ca76ac5e0966f7d2d3932e4a8e41_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_716105df65eab1cb8cf7e919b249739f7ca4ad5e434c3514869ee6068fab2281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716105df65eab1cb8cf7e919b249739f7ca4ad5e434c3514869ee6068fab2281->enter($__internal_716105df65eab1cb8cf7e919b249739f7ca4ad5e434c3514869ee6068fab2281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_716105df65eab1cb8cf7e919b249739f7ca4ad5e434c3514869ee6068fab2281->leave($__internal_716105df65eab1cb8cf7e919b249739f7ca4ad5e434c3514869ee6068fab2281_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
