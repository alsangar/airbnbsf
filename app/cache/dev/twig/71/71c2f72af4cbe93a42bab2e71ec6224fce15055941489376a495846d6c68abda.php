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
        $__internal_863ac7ae4b3bc4f60c8aadd7ebf7d46276cfd35782e942a8c02c68017bba5876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863ac7ae4b3bc4f60c8aadd7ebf7d46276cfd35782e942a8c02c68017bba5876->enter($__internal_863ac7ae4b3bc4f60c8aadd7ebf7d46276cfd35782e942a8c02c68017bba5876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_863ac7ae4b3bc4f60c8aadd7ebf7d46276cfd35782e942a8c02c68017bba5876->leave($__internal_863ac7ae4b3bc4f60c8aadd7ebf7d46276cfd35782e942a8c02c68017bba5876_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_d52e75035dcbfd0c379c79e566d485bae42b1e996ee0507ee8cb8ac25d9bd550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52e75035dcbfd0c379c79e566d485bae42b1e996ee0507ee8cb8ac25d9bd550->enter($__internal_d52e75035dcbfd0c379c79e566d485bae42b1e996ee0507ee8cb8ac25d9bd550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_d52e75035dcbfd0c379c79e566d485bae42b1e996ee0507ee8cb8ac25d9bd550->leave($__internal_d52e75035dcbfd0c379c79e566d485bae42b1e996ee0507ee8cb8ac25d9bd550_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_233383bac3421cc2659b5320406d52b09d8377b73c0a83204ccf7f30462a4b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233383bac3421cc2659b5320406d52b09d8377b73c0a83204ccf7f30462a4b4b->enter($__internal_233383bac3421cc2659b5320406d52b09d8377b73c0a83204ccf7f30462a4b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_233383bac3421cc2659b5320406d52b09d8377b73c0a83204ccf7f30462a4b4b->leave($__internal_233383bac3421cc2659b5320406d52b09d8377b73c0a83204ccf7f30462a4b4b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65a2a823450b087fe27c001255a0d23b2b96c5cfbeb5900495db6d6e49018f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a2a823450b087fe27c001255a0d23b2b96c5cfbeb5900495db6d6e49018f97->enter($__internal_65a2a823450b087fe27c001255a0d23b2b96c5cfbeb5900495db6d6e49018f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65a2a823450b087fe27c001255a0d23b2b96c5cfbeb5900495db6d6e49018f97->leave($__internal_65a2a823450b087fe27c001255a0d23b2b96c5cfbeb5900495db6d6e49018f97_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_1a2c28e2340ac867b848103c658403c163e38a26d703a7df8c3763fa7b97821d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2c28e2340ac867b848103c658403c163e38a26d703a7df8c3763fa7b97821d->enter($__internal_1a2c28e2340ac867b848103c658403c163e38a26d703a7df8c3763fa7b97821d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_1a2c28e2340ac867b848103c658403c163e38a26d703a7df8c3763fa7b97821d->leave($__internal_1a2c28e2340ac867b848103c658403c163e38a26d703a7df8c3763fa7b97821d_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_eec30344aa25d38f49eb0a4446dc247b50f7586ed38b7516a7f124a6064fbcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec30344aa25d38f49eb0a4446dc247b50f7586ed38b7516a7f124a6064fbcb9->enter($__internal_eec30344aa25d38f49eb0a4446dc247b50f7586ed38b7516a7f124a6064fbcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_eec30344aa25d38f49eb0a4446dc247b50f7586ed38b7516a7f124a6064fbcb9->leave($__internal_eec30344aa25d38f49eb0a4446dc247b50f7586ed38b7516a7f124a6064fbcb9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36ab5c32de51ec663813d2cdb4366b6c73dcb05e2870d2a5073efeb3c3d956c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36ab5c32de51ec663813d2cdb4366b6c73dcb05e2870d2a5073efeb3c3d956c->enter($__internal_c36ab5c32de51ec663813d2cdb4366b6c73dcb05e2870d2a5073efeb3c3d956c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c36ab5c32de51ec663813d2cdb4366b6c73dcb05e2870d2a5073efeb3c3d956c->leave($__internal_c36ab5c32de51ec663813d2cdb4366b6c73dcb05e2870d2a5073efeb3c3d956c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_213a840d03407da1c35f82adc0cbdbaf9e02081e973d370b2dddaf38afcaa3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213a840d03407da1c35f82adc0cbdbaf9e02081e973d370b2dddaf38afcaa3d6->enter($__internal_213a840d03407da1c35f82adc0cbdbaf9e02081e973d370b2dddaf38afcaa3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_213a840d03407da1c35f82adc0cbdbaf9e02081e973d370b2dddaf38afcaa3d6->leave($__internal_213a840d03407da1c35f82adc0cbdbaf9e02081e973d370b2dddaf38afcaa3d6_prof);

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
