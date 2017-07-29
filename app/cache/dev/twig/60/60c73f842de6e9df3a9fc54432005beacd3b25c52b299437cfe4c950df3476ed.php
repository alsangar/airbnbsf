<?php

/* app/layout.html.twig */
class __TwigTemplate_7f91f20ebb377fa9fd1243d0d5f3360231d3d55bb74a064d2b049a0abfd784a6 extends Twig_Template
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
        $__internal_1b2473e44dc45ca5f3c0edaf93e29267fec95c09eef7a7872fdaa543b1281efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2473e44dc45ca5f3c0edaf93e29267fec95c09eef7a7872fdaa543b1281efe->enter($__internal_1b2473e44dc45ca5f3c0edaf93e29267fec95c09eef7a7872fdaa543b1281efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2473e44dc45ca5f3c0edaf93e29267fec95c09eef7a7872fdaa543b1281efe->leave($__internal_1b2473e44dc45ca5f3c0edaf93e29267fec95c09eef7a7872fdaa543b1281efe_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = array())
    {
        $__internal_e87c0b0917ba4f3dcdf7d1aa78bea804080a83cb7a6e70ba073c6bd8640bb01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87c0b0917ba4f3dcdf7d1aa78bea804080a83cb7a6e70ba073c6bd8640bb01f->enter($__internal_e87c0b0917ba4f3dcdf7d1aa78bea804080a83cb7a6e70ba073c6bd8640bb01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
";
        
        $__internal_e87c0b0917ba4f3dcdf7d1aa78bea804080a83cb7a6e70ba073c6bd8640bb01f->leave($__internal_e87c0b0917ba4f3dcdf7d1aa78bea804080a83cb7a6e70ba073c6bd8640bb01f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0655873da4999b207dda5df77762cbb92c773ceab6d311cd9f81e0f64e33629d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0655873da4999b207dda5df77762cbb92c773ceab6d311cd9f81e0f64e33629d->enter($__internal_0655873da4999b207dda5df77762cbb92c773ceab6d311cd9f81e0f64e33629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Mi primer template Twig
";
        
        $__internal_0655873da4999b207dda5df77762cbb92c773ceab6d311cd9f81e0f64e33629d->leave($__internal_0655873da4999b207dda5df77762cbb92c773ceab6d311cd9f81e0f64e33629d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f2d691aee2852ab40da03856a03d7a7ff2600d84526e5e9263ae20b7cf2b441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2d691aee2852ab40da03856a03d7a7ff2600d84526e5e9263ae20b7cf2b441->enter($__internal_1f2d691aee2852ab40da03856a03d7a7ff2600d84526e5e9263ae20b7cf2b441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

";
        
        $__internal_1f2d691aee2852ab40da03856a03d7a7ff2600d84526e5e9263ae20b7cf2b441->leave($__internal_1f2d691aee2852ab40da03856a03d7a7ff2600d84526e5e9263ae20b7cf2b441_prof);

    }

    // line 24
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_41e5c8ae3816dbd0c2f30e056cd84b345810eee93bf3cbd9638a63d3153561c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e5c8ae3816dbd0c2f30e056cd84b345810eee93bf3cbd9638a63d3153561c0->enter($__internal_41e5c8ae3816dbd0c2f30e056cd84b345810eee93bf3cbd9638a63d3153561c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        // line 25
        echo "    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_41e5c8ae3816dbd0c2f30e056cd84b345810eee93bf3cbd9638a63d3153561c0->leave($__internal_41e5c8ae3816dbd0c2f30e056cd84b345810eee93bf3cbd9638a63d3153561c0_prof);

    }

    // line 38
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_88ec52fbbf288d2ec3b2c7ed5088b54ab1cd0e0071f9b32129f3bb72c26a4edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ec52fbbf288d2ec3b2c7ed5088b54ab1cd0e0071f9b32129f3bb72c26a4edc->enter($__internal_88ec52fbbf288d2ec3b2c7ed5088b54ab1cd0e0071f9b32129f3bb72c26a4edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        echo "onload=\"\" class=\"\" ";
        
        $__internal_88ec52fbbf288d2ec3b2c7ed5088b54ab1cd0e0071f9b32129f3bb72c26a4edc->leave($__internal_88ec52fbbf288d2ec3b2c7ed5088b54ab1cd0e0071f9b32129f3bb72c26a4edc_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_946041a10a057440c282db1eb3ad281e7b6aac992a43c89890db431076e15748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946041a10a057440c282db1eb3ad281e7b6aac992a43c89890db431076e15748->enter($__internal_946041a10a057440c282db1eb3ad281e7b6aac992a43c89890db431076e15748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
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
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">EERBIANBI</a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"index.html\">HOME</a></li>
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
                    <li><button type=\"button\" class=\"btn btn-default navbar-btn\">Sign in</button></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <!-- *****************************************************************************************************************
     PAGE CONTENT
     ***************************************************************************************************************** -->
    <div id=\"page-content\">";
        // line 76
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
        
        $__internal_946041a10a057440c282db1eb3ad281e7b6aac992a43c89890db431076e15748->leave($__internal_946041a10a057440c282db1eb3ad281e7b6aac992a43c89890db431076e15748_prof);

    }

    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_34df697b7f0fafe9539cff78c22598663507bda5536874438ca090dbd6b6db9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34df697b7f0fafe9539cff78c22598663507bda5536874438ca090dbd6b6db9e->enter($__internal_34df697b7f0fafe9539cff78c22598663507bda5536874438ca090dbd6b6db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_34df697b7f0fafe9539cff78c22598663507bda5536874438ca090dbd6b6db9e->leave($__internal_34df697b7f0fafe9539cff78c22598663507bda5536874438ca090dbd6b6db9e_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf0cffb88d6d58ec3903a5928c3319260faee79545d218546de4a6102a494cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0cffb88d6d58ec3903a5928c3319260faee79545d218546de4a6102a494cb6->enter($__internal_bf0cffb88d6d58ec3903a5928c3319260faee79545d218546de4a6102a494cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/custom.js"), "html", null, true);
        echo "\"></script>


    <script>
// Portfolio
        (function (\$) {
            \"use strict\";
            var \$container = \$('.portfolio'),
                    \$items = \$container.find('.portfolio-item'),
                    portfolioLayout = 'fitRows';

            if (\$container.hasClass('portfolio-centered')) {
                portfolioLayout = 'masonry';
            }

            \$container.isotope({
                filter: '*',
                animationEngine: 'best-available',
                layoutMode: portfolioLayout,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
                masonry: {
                }
            }, refreshWaypoints());

            function refreshWaypoints() {
                setTimeout(function () {
                }, 1000);
            }

            \$('nav.portfolio-filter ul a').on('click', function () {
                var selector = \$(this).attr('data-filter');
                \$container.isotope({filter: selector}, refreshWaypoints());
                \$('nav.portfolio-filter ul a').removeClass('active');
                \$(this).addClass('active');
                return false;
            });

            function getColumnNumber() {
                var winWidth = \$(window).width(),
                        columnNumber = 1;

                if (winWidth > 1200) {
                    columnNumber = 4;
                } else if (winWidth > 950) {
                    columnNumber = 2;
                } else if (winWidth > 250) {
                    columnNumber = 1;
                }
                return columnNumber;
            }

            function setColumns() {
                var winWidth = \$(window).width(),
                        columnNumber = getColumnNumber(),
                        itemWidth = Math.floor(winWidth / columnNumber);

                \$container.find('.portfolio-item').each(function () {
                    \$(this).css({
                        width: itemWidth + 'px'
                    });
                });
            }

            function setPortfolio() {
                setColumns();
                \$container.isotope('reLayout');
            }

            \$container.imagesLoaded(function () {
                setPortfolio();
            });

            \$(window).on('resize', function () {
                setPortfolio();
            });
        })(jQuery);
    </script>
";
        
        $__internal_bf0cffb88d6d58ec3903a5928c3319260faee79545d218546de4a6102a494cb6->leave($__internal_bf0cffb88d6d58ec3903a5928c3319260faee79545d218546de4a6102a494cb6_prof);

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
        return array (  275 => 125,  271 => 124,  267 => 123,  263 => 122,  259 => 121,  255 => 120,  251 => 119,  245 => 115,  239 => 114,  185 => 76,  157 => 51,  145 => 41,  139 => 40,  127 => 38,  118 => 34,  107 => 25,  101 => 24,  91 => 20,  87 => 19,  81 => 16,  78 => 15,  72 => 14,  64 => 11,  58 => 10,  47 => 4,  41 => 3,  11 => 1,);
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
                <a class=\"navbar-brand\" href=\"{{ path('homepage')}}\">EERBIANBI</a>
            </div>
            <div class=\"navbar-collapse collapse navbar-right\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"index.html\">HOME</a></li>
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
                    <li><button type=\"button\" class=\"btn btn-default navbar-btn\">Sign in</button></li>
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


    <script>
// Portfolio
        (function (\$) {
            \"use strict\";
            var \$container = \$('.portfolio'),
                    \$items = \$container.find('.portfolio-item'),
                    portfolioLayout = 'fitRows';

            if (\$container.hasClass('portfolio-centered')) {
                portfolioLayout = 'masonry';
            }

            \$container.isotope({
                filter: '*',
                animationEngine: 'best-available',
                layoutMode: portfolioLayout,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
                masonry: {
                }
            }, refreshWaypoints());

            function refreshWaypoints() {
                setTimeout(function () {
                }, 1000);
            }

            \$('nav.portfolio-filter ul a').on('click', function () {
                var selector = \$(this).attr('data-filter');
                \$container.isotope({filter: selector}, refreshWaypoints());
                \$('nav.portfolio-filter ul a').removeClass('active');
                \$(this).addClass('active');
                return false;
            });

            function getColumnNumber() {
                var winWidth = \$(window).width(),
                        columnNumber = 1;

                if (winWidth > 1200) {
                    columnNumber = 4;
                } else if (winWidth > 950) {
                    columnNumber = 2;
                } else if (winWidth > 250) {
                    columnNumber = 1;
                }
                return columnNumber;
            }

            function setColumns() {
                var winWidth = \$(window).width(),
                        columnNumber = getColumnNumber(),
                        itemWidth = Math.floor(winWidth / columnNumber);

                \$container.find('.portfolio-item').each(function () {
                    \$(this).css({
                        width: itemWidth + 'px'
                    });
                });
            }

            function setPortfolio() {
                setColumns();
                \$container.isotope('reLayout');
            }

            \$container.imagesLoaded(function () {
                setPortfolio();
            });

            \$(window).on('resize', function () {
                setPortfolio();
            });
        })(jQuery);
    </script>
{% endblock %}
", "app/layout.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\layout.html.twig");
    }
}
