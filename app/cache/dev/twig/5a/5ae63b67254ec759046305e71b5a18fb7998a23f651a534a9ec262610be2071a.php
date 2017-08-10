<?php

/* app/layout.html.twig */
class __TwigTemplate_9dbc8550f9d682b58d14b295707a06dcecf91b63a363383c53f59ba5a45af228 extends Twig_Template
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
        $__internal_3f6fb61db7e67bc187fd3395f0235818c37155b89c9a9b22c951d86bfe1d0ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6fb61db7e67bc187fd3395f0235818c37155b89c9a9b22c951d86bfe1d0ec1->enter($__internal_3f6fb61db7e67bc187fd3395f0235818c37155b89c9a9b22c951d86bfe1d0ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6fb61db7e67bc187fd3395f0235818c37155b89c9a9b22c951d86bfe1d0ec1->leave($__internal_3f6fb61db7e67bc187fd3395f0235818c37155b89c9a9b22c951d86bfe1d0ec1_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_e74f3d30b9de453acf79fbb45d535e108e735fa0e1a9aafca9244502c5579274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74f3d30b9de453acf79fbb45d535e108e735fa0e1a9aafca9244502c5579274->enter($__internal_e74f3d30b9de453acf79fbb45d535e108e735fa0e1a9aafca9244502c5579274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        
        $__internal_e74f3d30b9de453acf79fbb45d535e108e735fa0e1a9aafca9244502c5579274->leave($__internal_e74f3d30b9de453acf79fbb45d535e108e735fa0e1a9aafca9244502c5579274_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_98cbad80b39bdd0d19e3d9ec074df6e4ec677c35adcdfdd1ce7176d5d0225bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cbad80b39bdd0d19e3d9ec074df6e4ec677c35adcdfdd1ce7176d5d0225bfb->enter($__internal_98cbad80b39bdd0d19e3d9ec074df6e4ec677c35adcdfdd1ce7176d5d0225bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Mi primer template Twig
";
        
        $__internal_98cbad80b39bdd0d19e3d9ec074df6e4ec677c35adcdfdd1ce7176d5d0225bfb->leave($__internal_98cbad80b39bdd0d19e3d9ec074df6e4ec677c35adcdfdd1ce7176d5d0225bfb_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_000fd5a578b93b970dcdd2d3385a015125e5a37bfe7fe2fdcbfc49e0a09c0030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000fd5a578b93b970dcdd2d3385a015125e5a37bfe7fe2fdcbfc49e0a09c0030->enter($__internal_000fd5a578b93b970dcdd2d3385a015125e5a37bfe7fe2fdcbfc49e0a09c0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_000fd5a578b93b970dcdd2d3385a015125e5a37bfe7fe2fdcbfc49e0a09c0030->leave($__internal_000fd5a578b93b970dcdd2d3385a015125e5a37bfe7fe2fdcbfc49e0a09c0030_prof);

    }

    // line 25
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_d06f05fee4bfd03588b289446d420cd122de617dfa736716559ff283a48eb409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06f05fee4bfd03588b289446d420cd122de617dfa736716559ff283a48eb409->enter($__internal_d06f05fee4bfd03588b289446d420cd122de617dfa736716559ff283a48eb409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

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
        
        $__internal_d06f05fee4bfd03588b289446d420cd122de617dfa736716559ff283a48eb409->leave($__internal_d06f05fee4bfd03588b289446d420cd122de617dfa736716559ff283a48eb409_prof);

    }

    // line 39
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_c5f9d274dbcbbcdb6ff7592a001673033e22e1492e94cff221b8285791a64f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f9d274dbcbbcdb6ff7592a001673033e22e1492e94cff221b8285791a64f71->enter($__internal_c5f9d274dbcbbcdb6ff7592a001673033e22e1492e94cff221b8285791a64f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        echo "onload=\"\" class=\"\" ";
        
        $__internal_c5f9d274dbcbbcdb6ff7592a001673033e22e1492e94cff221b8285791a64f71->leave($__internal_c5f9d274dbcbbcdb6ff7592a001673033e22e1492e94cff221b8285791a64f71_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_679980b739c1b0e1426fcc5925b476fab0889e72e222655fa8228c0b8eea8258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679980b739c1b0e1426fcc5925b476fab0889e72e222655fa8228c0b8eea8258->enter($__internal_679980b739c1b0e1426fcc5925b476fab0889e72e222655fa8228c0b8eea8258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 94
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
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
        
        $__internal_679980b739c1b0e1426fcc5925b476fab0889e72e222655fa8228c0b8eea8258->leave($__internal_679980b739c1b0e1426fcc5925b476fab0889e72e222655fa8228c0b8eea8258_prof);

    }

    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_b9b4871741c0bbbd9ddcde30ad877d4701e180b91fe15a2fe2e5c79f78117613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b4871741c0bbbd9ddcde30ad877d4701e180b91fe15a2fe2e5c79f78117613->enter($__internal_b9b4871741c0bbbd9ddcde30ad877d4701e180b91fe15a2fe2e5c79f78117613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_b9b4871741c0bbbd9ddcde30ad877d4701e180b91fe15a2fe2e5c79f78117613->leave($__internal_b9b4871741c0bbbd9ddcde30ad877d4701e180b91fe15a2fe2e5c79f78117613_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f4a7a7e664e4dfa48d740dfeb17a7a38636d5d792487dc291010efccebf866d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4a7a7e664e4dfa48d740dfeb17a7a38636d5d792487dc291010efccebf866d->enter($__internal_4f4a7a7e664e4dfa48d740dfeb17a7a38636d5d792487dc291010efccebf866d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4f4a7a7e664e4dfa48d740dfeb17a7a38636d5d792487dc291010efccebf866d->leave($__internal_4f4a7a7e664e4dfa48d740dfeb17a7a38636d5d792487dc291010efccebf866d_prof);

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
