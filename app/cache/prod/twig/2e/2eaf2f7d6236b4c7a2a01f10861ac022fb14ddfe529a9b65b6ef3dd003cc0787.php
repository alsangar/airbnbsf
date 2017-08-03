<?php

/* @SonataMedia/Extra/pixlr_exit.html.twig */
class __TwigTemplate_e54064958d514abbec56fef808aa69c1d77a543c69b3ab495ef25b820d7d1c89 extends Twig_Template
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
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@SonataMedia/Extra/pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataMedia/Extra/pixlr_exit.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Extra\\pixlr_exit.html.twig");
    }
}
