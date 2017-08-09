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
        $__internal_268d887aafb0eaebb8175f86ae0a320decbe36b68650d5ca979d815be625d808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268d887aafb0eaebb8175f86ae0a320decbe36b68650d5ca979d815be625d808->enter($__internal_268d887aafb0eaebb8175f86ae0a320decbe36b68650d5ca979d815be625d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268d887aafb0eaebb8175f86ae0a320decbe36b68650d5ca979d815be625d808->leave($__internal_268d887aafb0eaebb8175f86ae0a320decbe36b68650d5ca979d815be625d808_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_b2f6edf0a444da943e6d277661350db076fda27ae335b528e361897d310085e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f6edf0a444da943e6d277661350db076fda27ae335b528e361897d310085e1->enter($__internal_b2f6edf0a444da943e6d277661350db076fda27ae335b528e361897d310085e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        
        $__internal_b2f6edf0a444da943e6d277661350db076fda27ae335b528e361897d310085e1->leave($__internal_b2f6edf0a444da943e6d277661350db076fda27ae335b528e361897d310085e1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1c0f7d7f57ab14aba640dc3702b0861c0d07b8551d008a3d781e7e60a83aca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c0f7d7f57ab14aba640dc3702b0861c0d07b8551d008a3d781e7e60a83aca9->enter($__internal_e1c0f7d7f57ab14aba640dc3702b0861c0d07b8551d008a3d781e7e60a83aca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Mi primer template Twig
";
        
        $__internal_e1c0f7d7f57ab14aba640dc3702b0861c0d07b8551d008a3d781e7e60a83aca9->leave($__internal_e1c0f7d7f57ab14aba640dc3702b0861c0d07b8551d008a3d781e7e60a83aca9_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e191d888f8bd1ef3739a9d9dbc50f0a9431e1253cd16b8716c2ebeea6364b694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e191d888f8bd1ef3739a9d9dbc50f0a9431e1253cd16b8716c2ebeea6364b694->enter($__internal_e191d888f8bd1ef3739a9d9dbc50f0a9431e1253cd16b8716c2ebeea6364b694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e191d888f8bd1ef3739a9d9dbc50f0a9431e1253cd16b8716c2ebeea6364b694->leave($__internal_e191d888f8bd1ef3739a9d9dbc50f0a9431e1253cd16b8716c2ebeea6364b694_prof);

    }

    // line 25
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_ef3caa6268606c06d45b8e1950de87a312a87b067abacd830eb3abe326d870df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3caa6268606c06d45b8e1950de87a312a87b067abacd830eb3abe326d870df->enter($__internal_ef3caa6268606c06d45b8e1950de87a312a87b067abacd830eb3abe326d870df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

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
        
        $__internal_ef3caa6268606c06d45b8e1950de87a312a87b067abacd830eb3abe326d870df->leave($__internal_ef3caa6268606c06d45b8e1950de87a312a87b067abacd830eb3abe326d870df_prof);

    }

    // line 39
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_b9487b6c6e083015645069ca1755b3ef01c2140171552ead5cd50c0ab0ea46f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9487b6c6e083015645069ca1755b3ef01c2140171552ead5cd50c0ab0ea46f6->enter($__internal_b9487b6c6e083015645069ca1755b3ef01c2140171552ead5cd50c0ab0ea46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        echo "onload=\"\" class=\"\" ";
        
        $__internal_b9487b6c6e083015645069ca1755b3ef01c2140171552ead5cd50c0ab0ea46f6->leave($__internal_b9487b6c6e083015645069ca1755b3ef01c2140171552ead5cd50c0ab0ea46f6_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0c82e544db90a7041b0d598f95f82571eb3f05c6309f03601b7d5ee0848e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0c82e544db90a7041b0d598f95f82571eb3f05c6309f03601b7d5ee0848e20->enter($__internal_6e0c82e544db90a7041b0d598f95f82571eb3f05c6309f03601b7d5ee0848e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e0c82e544db90a7041b0d598f95f82571eb3f05c6309f03601b7d5ee0848e20->leave($__internal_6e0c82e544db90a7041b0d598f95f82571eb3f05c6309f03601b7d5ee0848e20_prof);

    }

    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_550f973b501a308ab79ce7834186eecd765734975ea576f9440bf3592baa803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550f973b501a308ab79ce7834186eecd765734975ea576f9440bf3592baa803a->enter($__internal_550f973b501a308ab79ce7834186eecd765734975ea576f9440bf3592baa803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_550f973b501a308ab79ce7834186eecd765734975ea576f9440bf3592baa803a->leave($__internal_550f973b501a308ab79ce7834186eecd765734975ea576f9440bf3592baa803a_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb1acf50af9bf7b0cb4f03bbc6a12a6ef553568dbcafcee21a38c691e6be6f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1acf50af9bf7b0cb4f03bbc6a12a6ef553568dbcafcee21a38c691e6be6f90->enter($__internal_eb1acf50af9bf7b0cb4f03bbc6a12a6ef553568dbcafcee21a38c691e6be6f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_eb1acf50af9bf7b0cb4f03bbc6a12a6ef553568dbcafcee21a38c691e6be6f90->leave($__internal_eb1acf50af9bf7b0cb4f03bbc6a12a6ef553568dbcafcee21a38c691e6be6f90_prof);

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
