<?php

/* app/layout.html.twig */
class __TwigTemplate_ac09acf4aa2948b09928319c0993e7b4167d6a1bbf8dbefa7d6f36db3258870a extends Twig_Template
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
        $__internal_bdbba72e198d4f3992f8d994ece6ef4a068e12c8cf0f06a5b82b1afa8d736a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbba72e198d4f3992f8d994ece6ef4a068e12c8cf0f06a5b82b1afa8d736a36->enter($__internal_bdbba72e198d4f3992f8d994ece6ef4a068e12c8cf0f06a5b82b1afa8d736a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdbba72e198d4f3992f8d994ece6ef4a068e12c8cf0f06a5b82b1afa8d736a36->leave($__internal_bdbba72e198d4f3992f8d994ece6ef4a068e12c8cf0f06a5b82b1afa8d736a36_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_1685e2dbfa2cf513e6d5cac3bdee55dc4de1c806bd8d506420ea542ec9dc6c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1685e2dbfa2cf513e6d5cac3bdee55dc4de1c806bd8d506420ea542ec9dc6c1a->enter($__internal_1685e2dbfa2cf513e6d5cac3bdee55dc4de1c806bd8d506420ea542ec9dc6c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        
        $__internal_1685e2dbfa2cf513e6d5cac3bdee55dc4de1c806bd8d506420ea542ec9dc6c1a->leave($__internal_1685e2dbfa2cf513e6d5cac3bdee55dc4de1c806bd8d506420ea542ec9dc6c1a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5162f9985dd6b177a50e084ffe21fec4e1e8eb49a698dc50276eef678dedd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5162f9985dd6b177a50e084ffe21fec4e1e8eb49a698dc50276eef678dedd95->enter($__internal_d5162f9985dd6b177a50e084ffe21fec4e1e8eb49a698dc50276eef678dedd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Mi primer template Twig
";
        
        $__internal_d5162f9985dd6b177a50e084ffe21fec4e1e8eb49a698dc50276eef678dedd95->leave($__internal_d5162f9985dd6b177a50e084ffe21fec4e1e8eb49a698dc50276eef678dedd95_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a3db33df16189c6900a4feaab039340f93dbdbb2a127366b3fbb237260d04f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3db33df16189c6900a4feaab039340f93dbdbb2a127366b3fbb237260d04f8->enter($__internal_0a3db33df16189c6900a4feaab039340f93dbdbb2a127366b3fbb237260d04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0a3db33df16189c6900a4feaab039340f93dbdbb2a127366b3fbb237260d04f8->leave($__internal_0a3db33df16189c6900a4feaab039340f93dbdbb2a127366b3fbb237260d04f8_prof);

    }

    // line 25
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_c8210a3bba080dc7d969d0e241504f19f4236dafa55b7392f835f34a72683c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8210a3bba080dc7d969d0e241504f19f4236dafa55b7392f835f34a72683c66->enter($__internal_c8210a3bba080dc7d969d0e241504f19f4236dafa55b7392f835f34a72683c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

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
        
        $__internal_c8210a3bba080dc7d969d0e241504f19f4236dafa55b7392f835f34a72683c66->leave($__internal_c8210a3bba080dc7d969d0e241504f19f4236dafa55b7392f835f34a72683c66_prof);

    }

    // line 39
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_8cf6ba377bcb56f32844258fbfd01297921f81c91aed3dd3d2a839032aa2c826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf6ba377bcb56f32844258fbfd01297921f81c91aed3dd3d2a839032aa2c826->enter($__internal_8cf6ba377bcb56f32844258fbfd01297921f81c91aed3dd3d2a839032aa2c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        echo "onload=\"\" class=\"\" ";
        
        $__internal_8cf6ba377bcb56f32844258fbfd01297921f81c91aed3dd3d2a839032aa2c826->leave($__internal_8cf6ba377bcb56f32844258fbfd01297921f81c91aed3dd3d2a839032aa2c826_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_31f76b3dcf3bb15be4c818d4e76a7d2a8154259ca5f8f91b0f8c5eeaf56d43db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f76b3dcf3bb15be4c818d4e76a7d2a8154259ca5f8f91b0f8c5eeaf56d43db->enter($__internal_31f76b3dcf3bb15be4c818d4e76a7d2a8154259ca5f8f91b0f8c5eeaf56d43db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">
                                <strong>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
                            </a>
                        </li>
                        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                Salir
                            </a>
                        </li>
                    ";
        } else {
            // line 79
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Acceder</a></li>
                        <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><strong>Registrarse</strong></a></li>
                        ";
        }
        // line 82
        echo "
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <!-- *****************************************************************************************************************
     PAGE CONTENT
     ***************************************************************************************************************** -->
    <div id=\"page-content\">";
        // line 91
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
        
        $__internal_31f76b3dcf3bb15be4c818d4e76a7d2a8154259ca5f8f91b0f8c5eeaf56d43db->leave($__internal_31f76b3dcf3bb15be4c818d4e76a7d2a8154259ca5f8f91b0f8c5eeaf56d43db_prof);

    }

    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_3962bcc992b20f88840221558ddcc527c38f9e0d36c038e030fb4388c7c6433b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3962bcc992b20f88840221558ddcc527c38f9e0d36c038e030fb4388c7c6433b->enter($__internal_3962bcc992b20f88840221558ddcc527c38f9e0d36c038e030fb4388c7c6433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_3962bcc992b20f88840221558ddcc527c38f9e0d36c038e030fb4388c7c6433b->leave($__internal_3962bcc992b20f88840221558ddcc527c38f9e0d36c038e030fb4388c7c6433b_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8aa6d86397b696ca9dc15fc100af379eb97a2d4a98da8b80e540a5ba80a3ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8aa6d86397b696ca9dc15fc100af379eb97a2d4a98da8b80e540a5ba80a3ce6->enter($__internal_c8aa6d86397b696ca9dc15fc100af379eb97a2d4a98da8b80e540a5ba80a3ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    
";
        
        $__internal_c8aa6d86397b696ca9dc15fc100af379eb97a2d4a98da8b80e540a5ba80a3ce6->leave($__internal_c8aa6d86397b696ca9dc15fc100af379eb97a2d4a98da8b80e540a5ba80a3ce6_prof);

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
        return array (  313 => 140,  309 => 139,  305 => 138,  301 => 137,  297 => 136,  293 => 135,  289 => 134,  283 => 130,  277 => 129,  223 => 91,  212 => 82,  207 => 80,  202 => 79,  194 => 74,  188 => 71,  183 => 70,  181 => 69,  165 => 56,  158 => 52,  146 => 42,  140 => 41,  128 => 39,  119 => 35,  108 => 26,  102 => 25,  91 => 20,  87 => 19,  81 => 16,  78 => 15,  72 => 14,  64 => 11,  58 => 10,  47 => 4,  41 => 3,  11 => 1,);
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
                        <li><a href=\"{{ path('fos_user_profile_show') }}\">
                                <strong>{{ app.user.username }}</strong>
                            </a>
                        </li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\">
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
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    
{% endblock %}
", "app/layout.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\layout.html.twig");
    }
}
