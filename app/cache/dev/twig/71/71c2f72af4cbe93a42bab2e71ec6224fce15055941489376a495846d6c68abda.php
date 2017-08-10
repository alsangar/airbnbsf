<?php

/* base.html.twig */
class __TwigTemplate_c012e6ebf19a76fbe5a9aeccac0be1112b38f9627d3b808a7802c22d6d721739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsHead' => array($this, 'block_jsHead'),
            'bodyParam' => array($this, 'block_bodyParam'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c95c6b73bf866a2806e44a3da114e04dffcb97955ca3800cc4bd7b4a8a49a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c95c6b73bf866a2806e44a3da114e04dffcb97955ca3800cc4bd7b4a8a49a4f->enter($__internal_5c95c6b73bf866a2806e44a3da114e04dffcb97955ca3800cc4bd7b4a8a49a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('metas', $context, $blocks);
        // line 6
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        $this->displayBlock('jsHead', $context, $blocks);
        // line 9
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body ";
        // line 11
        $this->displayBlock('bodyParam', $context, $blocks);
        echo ">
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
        
        $__internal_5c95c6b73bf866a2806e44a3da114e04dffcb97955ca3800cc4bd7b4a8a49a4f->leave($__internal_5c95c6b73bf866a2806e44a3da114e04dffcb97955ca3800cc4bd7b4a8a49a4f_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_dddde1ad14471d084bb7d3be5c4f912f0615071a14138c65b14ff36bc5b03741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddde1ad14471d084bb7d3be5c4f912f0615071a14138c65b14ff36bc5b03741->enter($__internal_dddde1ad14471d084bb7d3be5c4f912f0615071a14138c65b14ff36bc5b03741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_dddde1ad14471d084bb7d3be5c4f912f0615071a14138c65b14ff36bc5b03741->leave($__internal_dddde1ad14471d084bb7d3be5c4f912f0615071a14138c65b14ff36bc5b03741_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08bac0815cdd63401b3cd8eb09ed0238f54c0520bc10756f19ea6baf21de7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08bac0815cdd63401b3cd8eb09ed0238f54c0520bc10756f19ea6baf21de7ea->enter($__internal_f08bac0815cdd63401b3cd8eb09ed0238f54c0520bc10756f19ea6baf21de7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_f08bac0815cdd63401b3cd8eb09ed0238f54c0520bc10756f19ea6baf21de7ea->leave($__internal_f08bac0815cdd63401b3cd8eb09ed0238f54c0520bc10756f19ea6baf21de7ea_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f097d568abbe1529674cd8b0d91313b8d987c0dddae0f8b68aa55f582366783e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f097d568abbe1529674cd8b0d91313b8d987c0dddae0f8b68aa55f582366783e->enter($__internal_f097d568abbe1529674cd8b0d91313b8d987c0dddae0f8b68aa55f582366783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f097d568abbe1529674cd8b0d91313b8d987c0dddae0f8b68aa55f582366783e->leave($__internal_f097d568abbe1529674cd8b0d91313b8d987c0dddae0f8b68aa55f582366783e_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_f4837bb6738c78212cc341af915cc64c492aab952713d2e7fa5d83d98f772fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4837bb6738c78212cc341af915cc64c492aab952713d2e7fa5d83d98f772fc5->enter($__internal_f4837bb6738c78212cc341af915cc64c492aab952713d2e7fa5d83d98f772fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_f4837bb6738c78212cc341af915cc64c492aab952713d2e7fa5d83d98f772fc5->leave($__internal_f4837bb6738c78212cc341af915cc64c492aab952713d2e7fa5d83d98f772fc5_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_2856caca6979fb16ad893bad39fbc97f9cf045bf7070ab024479f6a465584587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2856caca6979fb16ad893bad39fbc97f9cf045bf7070ab024479f6a465584587->enter($__internal_2856caca6979fb16ad893bad39fbc97f9cf045bf7070ab024479f6a465584587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_2856caca6979fb16ad893bad39fbc97f9cf045bf7070ab024479f6a465584587->leave($__internal_2856caca6979fb16ad893bad39fbc97f9cf045bf7070ab024479f6a465584587_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6269ea037acb4102a46c6bc35b9043ceb91bd3b3c2b924005c86de3dec7d3881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6269ea037acb4102a46c6bc35b9043ceb91bd3b3c2b924005c86de3dec7d3881->enter($__internal_6269ea037acb4102a46c6bc35b9043ceb91bd3b3c2b924005c86de3dec7d3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6269ea037acb4102a46c6bc35b9043ceb91bd3b3c2b924005c86de3dec7d3881->leave($__internal_6269ea037acb4102a46c6bc35b9043ceb91bd3b3c2b924005c86de3dec7d3881_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc85bfe9bc8fc6a6f8ba4f89e86e020d8bd000e0d1c3fa02ad8910e4be2a600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc85bfe9bc8fc6a6f8ba4f89e86e020d8bd000e0d1c3fa02ad8910e4be2a600c->enter($__internal_fc85bfe9bc8fc6a6f8ba4f89e86e020d8bd000e0d1c3fa02ad8910e4be2a600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc85bfe9bc8fc6a6f8ba4f89e86e020d8bd000e0d1c3fa02ad8910e4be2a600c->leave($__internal_fc85bfe9bc8fc6a6f8ba4f89e86e020d8bd000e0d1c3fa02ad8910e4be2a600c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 13,  125 => 12,  114 => 11,  103 => 8,  92 => 7,  80 => 6,  69 => 5,  60 => 14,  58 => 13,  56 => 12,  52 => 11,  46 => 9,  44 => 8,  42 => 7,  37 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    {% block metas %}{% endblock %}
    <title>{% block title %}¡Bienvenido!{% endblock %}</title>
{% block stylesheets %}{% endblock %}
{% block jsHead %}{% endblock %}
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body {% block bodyParam %}{% endblock %}>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\base.html.twig");
    }
}
