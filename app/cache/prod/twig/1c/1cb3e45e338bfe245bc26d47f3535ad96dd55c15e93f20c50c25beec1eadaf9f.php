<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_28fb606a7f29368eff5e7708b58dd920a092778a5b89d2b415844991778ab57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Acceso.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">

        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 14
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "FOSUserBundle:Security:login.html.twig", 14)->display($context);
        // line 15
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
