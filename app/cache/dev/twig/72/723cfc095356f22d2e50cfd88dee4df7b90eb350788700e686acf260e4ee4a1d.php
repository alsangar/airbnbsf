<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e4cd01cec25219d9bfe3584ecdafd8a3e24ae2eb3a34aa0d729561003dc8ece7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4b6a5d22ed578dad176d259693d87f3c6a524e62382c0f435aabddaaa546598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b6a5d22ed578dad176d259693d87f3c6a524e62382c0f435aabddaaa546598->enter($__internal_a4b6a5d22ed578dad176d259693d87f3c6a524e62382c0f435aabddaaa546598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_a4b6a5d22ed578dad176d259693d87f3c6a524e62382c0f435aabddaaa546598->leave($__internal_a4b6a5d22ed578dad176d259693d87f3c6a524e62382c0f435aabddaaa546598_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_114aa17dcd5d008074b9cf67fcd5b6a0c3379f8a3b1037322790a473b041e17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114aa17dcd5d008074b9cf67fcd5b6a0c3379f8a3b1037322790a473b041e17b->enter($__internal_114aa17dcd5d008074b9cf67fcd5b6a0c3379f8a3b1037322790a473b041e17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_114aa17dcd5d008074b9cf67fcd5b6a0c3379f8a3b1037322790a473b041e17b->leave($__internal_114aa17dcd5d008074b9cf67fcd5b6a0c3379f8a3b1037322790a473b041e17b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
