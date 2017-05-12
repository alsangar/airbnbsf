<?php

/* app\rooms\list.html.twig */
class __TwigTemplate_b062941c7e2496cc7b3506c313847213e363867a57b746af34764b78bec58c05 extends Twig_Template
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
        $__internal_530eab2b566082770a481bd1c5322da0cc7e420462e553712955f665f46899aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530eab2b566082770a481bd1c5322da0cc7e420462e553712955f665f46899aa->enter($__internal_530eab2b566082770a481bd1c5322da0cc7e420462e553712955f665f46899aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\list.html.twig"));

        // line 1
        echo "Lista

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 4
            echo "
    ";
            // line 5
            echo twig_escape_filter($this->env, $context["room"], "html", null, true);
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_530eab2b566082770a481bd1c5322da0cc7e420462e553712955f665f46899aa->leave($__internal_530eab2b566082770a481bd1c5322da0cc7e420462e553712955f665f46899aa_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Lista

{% for room in rooms %}

    {{room}}

    {% endfor %}", "app\\rooms\\list.html.twig", "/var/www/html/airbnbsf/app/Resources/views/app/rooms/list.html.twig");
    }
}
