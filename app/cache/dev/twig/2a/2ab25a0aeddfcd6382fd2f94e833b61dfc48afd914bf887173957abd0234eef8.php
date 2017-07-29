<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3e8cb5c28605094b4a5d88b517bcbb22f9e048edebbf33d035f653c5a3e907cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9567bef59a0b9010f45cec13c3aed56f46567106a9c6a2441c5648a82aa11552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9567bef59a0b9010f45cec13c3aed56f46567106a9c6a2441c5648a82aa11552->enter($__internal_9567bef59a0b9010f45cec13c3aed56f46567106a9c6a2441c5648a82aa11552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9567bef59a0b9010f45cec13c3aed56f46567106a9c6a2441c5648a82aa11552->leave($__internal_9567bef59a0b9010f45cec13c3aed56f46567106a9c6a2441c5648a82aa11552_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_5d8132e5b42bf5adae99a547f727786449c9b104a0a9599f1046529267cbb269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8132e5b42bf5adae99a547f727786449c9b104a0a9599f1046529267cbb269->enter($__internal_5d8132e5b42bf5adae99a547f727786449c9b104a0a9599f1046529267cbb269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h3 class=\"\">Please register</h3>
        <div class=\"hline\"></div>
        ";
        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"hline\"></div>
        <p>By clicking the \"Create an account\" button you agree with our <a href=\"#\">terms and conditions</a>.</p>

    </div> <!-- /container -->

";
        
        $__internal_5d8132e5b42bf5adae99a547f727786449c9b104a0a9599f1046529267cbb269->leave($__internal_5d8132e5b42bf5adae99a547f727786449c9b104a0a9599f1046529267cbb269_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/layout.html.twig\"%}
{% block pageContent%}
    <div class=\"container mtb\">
        <h3 class=\"\">Please register</h3>
        <div class=\"hline\"></div>
        {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
        <div class=\"hline\"></div>
        <p>By clicking the \"Create an account\" button you agree with our <a href=\"#\">terms and conditions</a>.</p>

    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
