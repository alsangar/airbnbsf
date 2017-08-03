<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3f3aed8cb17a254977837309f9ba8d634360962e0602730e49b70b0f97e405bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Perfil.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 12)->display($context);
        // line 13
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  54 => 12,  51 => 11,  44 => 14,  42 => 11,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
