<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c8495c90e59c8615cfb452a0a8621c2b9c5834699799df29638a1ac571278635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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

    // line 5
    public function block_pageContent($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Recuperación.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <div class=\"hline\"></div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "            <p>
                ";
        // line 17
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? null)), "FOSUserBundle"), "html", null, true));
        echo "
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  55 => 16,  52 => 15,  45 => 20,  43 => 15,  32 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
