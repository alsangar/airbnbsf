<?php

/* base.html.twig */
class __TwigTemplate_3b2020a9b51b6f7ffdb8987bd827484c0abfcf05c008ac66bbed88f32727f15c extends Twig_Template
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
        $__internal_9f3059ce5fa05961e0c89ab40b1b40b1566a0dc49c6481448b9ce058bb2ade36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3059ce5fa05961e0c89ab40b1b40b1566a0dc49c6481448b9ce058bb2ade36->enter($__internal_9f3059ce5fa05961e0c89ab40b1b40b1566a0dc49c6481448b9ce058bb2ade36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9f3059ce5fa05961e0c89ab40b1b40b1566a0dc49c6481448b9ce058bb2ade36->leave($__internal_9f3059ce5fa05961e0c89ab40b1b40b1566a0dc49c6481448b9ce058bb2ade36_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_b9b080301b03eae0d30d034d1566e19bbef05ee31df3d870785254cc6b424a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b080301b03eae0d30d034d1566e19bbef05ee31df3d870785254cc6b424a75->enter($__internal_b9b080301b03eae0d30d034d1566e19bbef05ee31df3d870785254cc6b424a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_b9b080301b03eae0d30d034d1566e19bbef05ee31df3d870785254cc6b424a75->leave($__internal_b9b080301b03eae0d30d034d1566e19bbef05ee31df3d870785254cc6b424a75_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ea04f36f3cc6331e4c5a3e5d2065024c3fd86bbc55dc121bd4e619fe3d38863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea04f36f3cc6331e4c5a3e5d2065024c3fd86bbc55dc121bd4e619fe3d38863->enter($__internal_2ea04f36f3cc6331e4c5a3e5d2065024c3fd86bbc55dc121bd4e619fe3d38863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_2ea04f36f3cc6331e4c5a3e5d2065024c3fd86bbc55dc121bd4e619fe3d38863->leave($__internal_2ea04f36f3cc6331e4c5a3e5d2065024c3fd86bbc55dc121bd4e619fe3d38863_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5ccba58e42c5ec067f525bff1e169b777bffe22da59e76c2f769aa59eb3af40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ccba58e42c5ec067f525bff1e169b777bffe22da59e76c2f769aa59eb3af40->enter($__internal_c5ccba58e42c5ec067f525bff1e169b777bffe22da59e76c2f769aa59eb3af40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c5ccba58e42c5ec067f525bff1e169b777bffe22da59e76c2f769aa59eb3af40->leave($__internal_c5ccba58e42c5ec067f525bff1e169b777bffe22da59e76c2f769aa59eb3af40_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_80b0478abdd9d984d7251d8bb092b2e541737b154f3de97052ba13da692cebf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b0478abdd9d984d7251d8bb092b2e541737b154f3de97052ba13da692cebf2->enter($__internal_80b0478abdd9d984d7251d8bb092b2e541737b154f3de97052ba13da692cebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_80b0478abdd9d984d7251d8bb092b2e541737b154f3de97052ba13da692cebf2->leave($__internal_80b0478abdd9d984d7251d8bb092b2e541737b154f3de97052ba13da692cebf2_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_17bfe70f31d01530a7c90b946cd4ff0c5bb79bd046334c37f371497cb52a50db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bfe70f31d01530a7c90b946cd4ff0c5bb79bd046334c37f371497cb52a50db->enter($__internal_17bfe70f31d01530a7c90b946cd4ff0c5bb79bd046334c37f371497cb52a50db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_17bfe70f31d01530a7c90b946cd4ff0c5bb79bd046334c37f371497cb52a50db->leave($__internal_17bfe70f31d01530a7c90b946cd4ff0c5bb79bd046334c37f371497cb52a50db_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b540dfe0c782060d56d4bf7c80e8c10529f316b650eabca46276ed8c0bd3d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b540dfe0c782060d56d4bf7c80e8c10529f316b650eabca46276ed8c0bd3d7f->enter($__internal_5b540dfe0c782060d56d4bf7c80e8c10529f316b650eabca46276ed8c0bd3d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b540dfe0c782060d56d4bf7c80e8c10529f316b650eabca46276ed8c0bd3d7f->leave($__internal_5b540dfe0c782060d56d4bf7c80e8c10529f316b650eabca46276ed8c0bd3d7f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56d449ab8cf4d6c1f420b767a9b3d6c0e2f6aedbf8ae5228cf027216e712cfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d449ab8cf4d6c1f420b767a9b3d6c0e2f6aedbf8ae5228cf027216e712cfc3->enter($__internal_56d449ab8cf4d6c1f420b767a9b3d6c0e2f6aedbf8ae5228cf027216e712cfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56d449ab8cf4d6c1f420b767a9b3d6c0e2f6aedbf8ae5228cf027216e712cfc3->leave($__internal_56d449ab8cf4d6c1f420b767a9b3d6c0e2f6aedbf8ae5228cf027216e712cfc3_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
