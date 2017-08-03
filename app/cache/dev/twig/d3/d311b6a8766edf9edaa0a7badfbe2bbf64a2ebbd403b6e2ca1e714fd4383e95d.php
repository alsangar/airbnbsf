<?php

/* app/layout.html.twig */
class __TwigTemplate_efb7581def3191df95559eba11cd8ba35cb4c00817151c5eb1fb46e4a5a8d3e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "app/layout.html.twig", 1);
        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsHead' => array($this, 'block_jsHead'),
            'bodyParam' => array($this, 'block_bodyParam'),
            'body' => array($this, 'block_body'),
            'pageContent' => array($this, 'block_pageContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cfae939cc38300a445fe06a9a7173c5a90c33689b75b325b505c678c26489e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfae939cc38300a445fe06a9a7173c5a90c33689b75b325b505c678c26489e0->enter($__internal_4cfae939cc38300a445fe06a9a7173c5a90c33689b75b325b505c678c26489e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cfae939cc38300a445fe06a9a7173c5a90c33689b75b325b505c678c26489e0->leave($__internal_4cfae939cc38300a445fe06a9a7173c5a90c33689b75b325b505c678c26489e0_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_1383a80050c60b6e10895171b73664fed46a183ecedd2a5177c55e2292cd2079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1383a80050c60b6e10895171b73664fed46a183ecedd2a5177c55e2292cd2079->enter($__internal_1383a80050c60b6e10895171b73664fed46a183ecedd2a5177c55e2292cd2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        
        $__internal_1383a80050c60b6e10895171b73664fed46a183ecedd2a5177c55e2292cd2079->leave($__internal_1383a80050c60b6e10895171b73664fed46a183ecedd2a5177c55e2292cd2079_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_67fa1135d4cbcf6d03cab540e457e047d7cd518c83d53daa1dac2d4acf483121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fa1135d4cbcf6d03cab540e457e047d7cd518c83d53daa1dac2d4acf483121->enter($__internal_67fa1135d4cbcf6d03cab540e457e047d7cd518c83d53daa1dac2d4acf483121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Mi primer template Twig
";
        
        $__internal_67fa1135d4cbcf6d03cab540e457e047d7cd518c83d53daa1dac2d4acf483121->leave($__internal_67fa1135d4cbcf6d03cab540e457e047d7cd518c83d53daa1dac2d4acf483121_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e42ef2ea8f38fb28fd307d89830ee470822fac8db912cb2ddbcf30200ab8ab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42ef2ea8f38fb28fd307d89830ee470822fac8db912cb2ddbcf30200ab8ab83->enter($__internal_e42ef2ea8f38fb28fd307d89830ee470822fac8db912cb2ddbcf30200ab8ab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />

";
        
        $__internal_e42ef2ea8f38fb28fd307d89830ee470822fac8db912cb2ddbcf30200ab8ab83->leave($__internal_e42ef2ea8f38fb28fd307d89830ee470822fac8db912cb2ddbcf30200ab8ab83_prof);

    }

    // line 25
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_a7ab881f775394cdc455a36ae2ee1ac3385858b3441c8a9c1c9f9d25b5b7b06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ab881f775394cdc455a36ae2ee1ac3385858b3441c8a9c1c9f9d25b5b7b06a->enter($__internal_a7ab881f775394cdc455a36ae2ee1ac3385858b3441c8a9c1c9f9d25b5b7b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        // line 26
        echo "    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a7ab881f775394cdc455a36ae2ee1ac3385858b3441c8a9c1c9f9d25b5b7b06a->leave($__internal_a7ab881f775394cdc455a36ae2ee1ac3385858b3441c8a9c1c9f9d25b5b7b06a_prof);

    }

    // line 39
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_03038cb082bd89eaa25d2f4300350e067ea65bcad709d0172080f533d36ce6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03038cb082bd89eaa25d2f4300350e067ea65bcad709d0172080f533d36ce6b9->enter($__internal_03038cb082bd89eaa25d2f4300350e067ea65bcad709d0172080f533d36ce6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        echo "onload=\"\" class=\"\" ";
        
        $__internal_03038cb082bd89eaa25d2f4300350e067ea65bcad709d0172080f533d36ce6b9->leave($__internal_03038cb082bd89eaa25d2f4300350e067ea65bcad709d0172080f533d36ce6b9_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_723ef9817ceeba8a54ce8193f0f9829c8003fd8cced2083d706ef7f1162eb6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ef9817ceeba8a54ce8193f0f9829c8003fd8cced2083d706ef7f1162eb6bb->enter($__internal_723ef9817ceeba8a54ce8193f0f9829c8003fd8cced2083d706ef7f1162eb6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Eerbianbí</a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Inicio</a></li>
                    <li><a href=\"about.html\">ABOUT</a></li>
                    <li><a href=\"contact.html\">CONTACT</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">PAGES <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blog.html\">BLOG</a></li>
                            <li><a href=\"single-post.html\">SINGLE POST</a></li>
                            <li><a href=\"portfolio.html\">PORTFOLIO</a></li>
                            <li><a href=\"single-project.html\">SINGLE PROJECT</a></li>
                        </ul>
                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                        ";
        // line 69
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
            echo "                        <li>
                            <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">
                                <strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
                            </a>
                        </li>
                        ";
            // line 75
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 76
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_panel");
                echo "\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Backoffice
</a></li>
                        ";
            }
            // line 79
            echo "                        <li>
                            <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                Salir
                            </a>
                        </li>
                    ";
        } else {
            // line 85
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Acceder</a></li>
                        <li><a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><strong>Registrarse</strong></a></li>
                        ";
        }
        // line 88
        echo "
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
";
        // line 93
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 94
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 95
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 96
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "        ";
        }
        // line 102
        echo "    <!-- *****************************************************************************************************************
     PAGE CONTENT
     ***************************************************************************************************************** -->
    <div id=\"page-content\">";
        // line 105
        $this->displayBlock('pageContent', $context, $blocks);
        echo "</div><!-- /page-content -->
    <!-- *****************************************************************************************************************
     FOOTER
     ***************************************************************************************************************** -->
    <div id=\"footerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>About</h4>
                    <div class=\"hline-w\"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Social Links</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Our Bunker</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Some Ave, 987,<br/>
                        23890, New York,<br/>
                        United States.<br/>
                    </p>
                </div>

            </div><! --/row -->
        </div><! --/container -->
    </div><! --/footerwrap -->
";
        
        $__internal_723ef9817ceeba8a54ce8193f0f9829c8003fd8cced2083d706ef7f1162eb6bb->leave($__internal_723ef9817ceeba8a54ce8193f0f9829c8003fd8cced2083d706ef7f1162eb6bb_prof);

    }

    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_66145c13fd8f36fb0d2760d300cbee529852e78af00479f79df0d51bc12c5ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66145c13fd8f36fb0d2760d300cbee529852e78af00479f79df0d51bc12c5ba9->enter($__internal_66145c13fd8f36fb0d2760d300cbee529852e78af00479f79df0d51bc12c5ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_66145c13fd8f36fb0d2760d300cbee529852e78af00479f79df0d51bc12c5ba9->leave($__internal_66145c13fd8f36fb0d2760d300cbee529852e78af00479f79df0d51bc12c5ba9_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21dab3ba7530be0436bc5f6a8f8ee4a12f1242c5b9d2186917757c04b860c80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dab3ba7530be0436bc5f6a8f8ee4a12f1242c5b9d2186917757c04b860c80a->enter($__internal_21dab3ba7530be0436bc5f6a8f8ee4a12f1242c5b9d2186917757c04b860c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/custom.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_21dab3ba7530be0436bc5f6a8f8ee4a12f1242c5b9d2186917757c04b860c80a->leave($__internal_21dab3ba7530be0436bc5f6a8f8ee4a12f1242c5b9d2186917757c04b860c80a_prof);

    }

    public function getTemplateName()
    {
        return "app/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 154,  359 => 153,  355 => 152,  351 => 151,  347 => 150,  343 => 149,  339 => 148,  333 => 144,  327 => 143,  273 => 105,  268 => 102,  265 => 101,  259 => 100,  250 => 97,  245 => 96,  240 => 95,  235 => 94,  233 => 93,  226 => 88,  221 => 86,  216 => 85,  208 => 80,  205 => 79,  198 => 76,  196 => 75,  190 => 72,  186 => 71,  183 => 70,  181 => 69,  165 => 56,  158 => 52,  146 => 42,  140 => 41,  128 => 39,  119 => 35,  108 => 26,  102 => 25,  91 => 20,  87 => 19,  81 => 16,  78 => 15,  72 => 14,  64 => 11,  58 => 10,  47 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block metas %}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
{% endblock %}

{% block title %}
    Mi primer template Twig
{% endblock %}

{% block stylesheets %}
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('themes/app/assets/css/bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('themes/app/assets/css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('themes/app/assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\" />

{% endblock %}

{% block jsHead %}
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script src=\"{{ asset('themes/app/assets/js/modernizr.js') }}\"></script>
{% endblock %}


{% block bodyParam %}onload=\"\" class=\"\" {% endblock %}

{% block body %}
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('homepage')}}\">Eerbianbí</a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"{{ path('homepage')}}\">Inicio</a></li>
                    <li><a href=\"about.html\">ABOUT</a></li>
                    <li><a href=\"contact.html\">CONTACT</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">PAGES <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blog.html\">BLOG</a></li>
                            <li><a href=\"single-post.html\">SINGLE POST</a></li>
                            <li><a href=\"portfolio.html\">PORTFOLIO</a></li>
                            <li><a href=\"single-project.html\">SINGLE PROJECT</a></li>
                        </ul>
                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <li>
                            <a href=\"{{ path('fos_user_profile_show') }}\">
                                <strong>{{ app.user.username }}</strong>
                            </a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"{{ path(\"admin_panel\") }}\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> Backoffice
</a></li>
                        {% endif %}
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                Salir
                            </a>
                        </li>
                    {% else %}
                        <li><a href=\"{{ path('fos_user_security_login') }}\">Acceder</a></li>
                        <li><a href=\"{{ path('fos_user_registration_register') }}\"><strong>Registrarse</strong></a></li>
                        {% endif %}

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
{% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    <div class=\"{{ type }}\">
                        {{ message|trans({}, 'FOSUserBundle') }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
    <!-- *****************************************************************************************************************
     PAGE CONTENT
     ***************************************************************************************************************** -->
    <div id=\"page-content\">{% block pageContent%}{% endblock %}</div><!-- /page-content -->
    <!-- *****************************************************************************************************************
     FOOTER
     ***************************************************************************************************************** -->
    <div id=\"footerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>About</h4>
                    <div class=\"hline-w\"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Social Links</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-tumblr\"></i></a>
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <h4>Our Bunker</h4>
                    <div class=\"hline-w\"></div>
                    <p>
                        Some Ave, 987,<br/>
                        23890, New York,<br/>
                        United States.<br/>
                    </p>
                </div>

            </div><! --/row -->
        </div><! --/container -->
    </div><! --/footerwrap -->
{% endblock %}

{% block javascripts %}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"{{ asset('themes/app/assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/retina-1.1.0.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/jquery.hoverdir.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/jquery.hoverex.min.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/jquery.prettyPhoto.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/jquery.isotope.min.js') }}\"></script>
    <script src=\"{{ asset('themes/app/assets/js/custom.js') }}\"></script>


{% endblock %}
", "app/layout.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\layout.html.twig");
    }
}
