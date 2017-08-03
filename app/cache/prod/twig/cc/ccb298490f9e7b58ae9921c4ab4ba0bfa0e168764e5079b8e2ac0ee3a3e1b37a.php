<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_fe5b728788bdf076ce41285bad9fb2e017c75c51e556d6b8aeb2cd54dee79a08 extends Twig_Template
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
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataBlock/Block/block_base.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
