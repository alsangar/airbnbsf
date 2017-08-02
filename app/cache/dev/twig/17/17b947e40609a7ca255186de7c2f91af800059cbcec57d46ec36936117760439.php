<?php

/* base.html.twig */
class __TwigTemplate_a8206f6b9a5d28e8f20beec08f426dea7f4a76abac7852a828119262d1e32c72 extends Twig_Template
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
        $__internal_8f43d65fdc32bab504978fe48bcb6fd0f3aafa64da82360a0440b4537df8c051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f43d65fdc32bab504978fe48bcb6fd0f3aafa64da82360a0440b4537df8c051->enter($__internal_8f43d65fdc32bab504978fe48bcb6fd0f3aafa64da82360a0440b4537df8c051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8f43d65fdc32bab504978fe48bcb6fd0f3aafa64da82360a0440b4537df8c051->leave($__internal_8f43d65fdc32bab504978fe48bcb6fd0f3aafa64da82360a0440b4537df8c051_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_7e976c98c121f52ec62b9c6f7437830009c5de8dc1ded8b169edefaa48f92406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e976c98c121f52ec62b9c6f7437830009c5de8dc1ded8b169edefaa48f92406->enter($__internal_7e976c98c121f52ec62b9c6f7437830009c5de8dc1ded8b169edefaa48f92406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_7e976c98c121f52ec62b9c6f7437830009c5de8dc1ded8b169edefaa48f92406->leave($__internal_7e976c98c121f52ec62b9c6f7437830009c5de8dc1ded8b169edefaa48f92406_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fa2c9b246bb5c713fd3d0e2414f6d77de9b4631bbd9d69407b70d38cb42f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fa2c9b246bb5c713fd3d0e2414f6d77de9b4631bbd9d69407b70d38cb42f5e->enter($__internal_48fa2c9b246bb5c713fd3d0e2414f6d77de9b4631bbd9d69407b70d38cb42f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_48fa2c9b246bb5c713fd3d0e2414f6d77de9b4631bbd9d69407b70d38cb42f5e->leave($__internal_48fa2c9b246bb5c713fd3d0e2414f6d77de9b4631bbd9d69407b70d38cb42f5e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4c3c67bc117813d87248f9ec21e3bc2861e01afea799a28d685e70062f98ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c3c67bc117813d87248f9ec21e3bc2861e01afea799a28d685e70062f98ece->enter($__internal_d4c3c67bc117813d87248f9ec21e3bc2861e01afea799a28d685e70062f98ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4c3c67bc117813d87248f9ec21e3bc2861e01afea799a28d685e70062f98ece->leave($__internal_d4c3c67bc117813d87248f9ec21e3bc2861e01afea799a28d685e70062f98ece_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_c32e4641f97a6ca0170001208bbdc77ec1ca2dd96bad705f460168fb3be28444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32e4641f97a6ca0170001208bbdc77ec1ca2dd96bad705f460168fb3be28444->enter($__internal_c32e4641f97a6ca0170001208bbdc77ec1ca2dd96bad705f460168fb3be28444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_c32e4641f97a6ca0170001208bbdc77ec1ca2dd96bad705f460168fb3be28444->leave($__internal_c32e4641f97a6ca0170001208bbdc77ec1ca2dd96bad705f460168fb3be28444_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_1e9f7db9e730a1cf025103e1602c82a3ebf077946af424f8b949f5836979ffcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9f7db9e730a1cf025103e1602c82a3ebf077946af424f8b949f5836979ffcc->enter($__internal_1e9f7db9e730a1cf025103e1602c82a3ebf077946af424f8b949f5836979ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_1e9f7db9e730a1cf025103e1602c82a3ebf077946af424f8b949f5836979ffcc->leave($__internal_1e9f7db9e730a1cf025103e1602c82a3ebf077946af424f8b949f5836979ffcc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9120f9c5bacd120e9a0c6593b496c7718eb2ea39b0f8bd79a013eb04243a4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9120f9c5bacd120e9a0c6593b496c7718eb2ea39b0f8bd79a013eb04243a4f3->enter($__internal_b9120f9c5bacd120e9a0c6593b496c7718eb2ea39b0f8bd79a013eb04243a4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9120f9c5bacd120e9a0c6593b496c7718eb2ea39b0f8bd79a013eb04243a4f3->leave($__internal_b9120f9c5bacd120e9a0c6593b496c7718eb2ea39b0f8bd79a013eb04243a4f3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5c1d3385c0d0e7a51d090214e031d5f751ba83c8c0f4ccf1ed402e162ffb1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c1d3385c0d0e7a51d090214e031d5f751ba83c8c0f4ccf1ed402e162ffb1b6->enter($__internal_b5c1d3385c0d0e7a51d090214e031d5f751ba83c8c0f4ccf1ed402e162ffb1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5c1d3385c0d0e7a51d090214e031d5f751ba83c8c0f4ccf1ed402e162ffb1b6->leave($__internal_b5c1d3385c0d0e7a51d090214e031d5f751ba83c8c0f4ccf1ed402e162ffb1b6_prof);

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
