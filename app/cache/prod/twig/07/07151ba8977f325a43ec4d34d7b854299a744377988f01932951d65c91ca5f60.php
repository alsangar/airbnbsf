<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9935199934c1a2b38eac3b8287ddcdc77c00b6ea9ed682819e86558e86a32ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Recuperar.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "
        <div class=\"hline\"></div>

    </div> <!-- /container -->

";
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 15)->display($context);
        // line 16
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  55 => 14,  46 => 17,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
