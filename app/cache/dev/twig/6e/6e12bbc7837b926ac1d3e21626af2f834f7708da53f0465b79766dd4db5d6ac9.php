<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_b1640d8754ef151e6ab0fe22d2465f540c823b8013030b6ac2e68373f1c0a752 extends Twig_Template
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
        $__internal_cd8827040fb66a5ba29df54d7ed0336d86aedf9ecc46c5cc56ed7e71f7ed5fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8827040fb66a5ba29df54d7ed0336d86aedf9ecc46c5cc56ed7e71f7ed5fb7->enter($__internal_cd8827040fb66a5ba29df54d7ed0336d86aedf9ecc46c5cc56ed7e71f7ed5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request form-signin\">
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
    </div>
    <input type=\"submit\" class=\"btn btn-theme btn-block\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />    
</form>
";
        
        $__internal_cd8827040fb66a5ba29df54d7ed0336d86aedf9ecc46c5cc56ed7e71f7ed5fb7->leave($__internal_cd8827040fb66a5ba29df54d7ed0336d86aedf9ecc46c5cc56ed7e71f7ed5fb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 5,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request form-signin\">
    <div class=\"form-group\">
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
    </div>
    <input type=\"submit\" class=\"btn btn-theme btn-block\" value=\"{{ 'resetting.request.submit'|trans }}\" />    
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
