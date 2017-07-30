<?php

/* app\rooms\list.html.twig */
class __TwigTemplate_9706fd67ac0f6b15c4a043aa62cc113eec5a35c1d82965cea19a7e5f34923bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app\\rooms\\list.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a263e236a84b41722376837c56a406d70345c34030c7a4c85406d335fd67379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a263e236a84b41722376837c56a406d70345c34030c7a4c85406d335fd67379->enter($__internal_7a263e236a84b41722376837c56a406d70345c34030c7a4c85406d335fd67379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a263e236a84b41722376837c56a406d70345c34030c7a4c85406d335fd67379->leave($__internal_7a263e236a84b41722376837c56a406d70345c34030c7a4c85406d335fd67379_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_07292f0e3a8e9504ecd0c2be51a7ab0a8e2b860044a5c87fee4009dc09251cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07292f0e3a8e9504ecd0c2be51a7ab0a8e2b860044a5c87fee4009dc09251cfb->enter($__internal_07292f0e3a8e9504ecd0c2be51a7ab0a8e2b860044a5c87fee4009dc09251cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Listando habitaciones en ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "viewData", array()), "city", array()), "name", array()), "html", null, true);
        echo "</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
         CONTENT
    ***************************************************************************************************************** -->     


    <div class=\"container-fluid\">
        <div class=\"row\">            
            <div class=\"col-sm-6 col-md-4 sidebar\">
                <div class=\"portfoliowrap\">
                    <div class=\"portfolio-centered\">
                        <div class=\"recentitems portfolio\">
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 27
            echo "                                <div class=\"portfolio-item graphic-design\">
                                    <div class=\"he-wrap tpl6\">
                                        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                        <div class=\"he-view\">
                                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                                <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</h3>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                                <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "description", array()), "html", null, true);
            echo "</p>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "city", array()), "html", null, true);
            echo "</h4>
                                                <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_view", array("name" => $this->getAttribute($context["room"], "name", array()))), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                                            </div><!-- he bg -->
                                        </div><!-- he view -->\t\t
                                    </div><!-- he wrap -->
                                </div><!-- end col-12 -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </div><!-- portfolio -->
                    </div><!-- portfolio container -->
                </div>
            </div><!-- /sidebar -->

            <div class=\"col-sm-6 col-md-8 main\">
                <div id=\"contactwrap\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_07292f0e3a8e9504ecd0c2be51a7ab0a8e2b860044a5c87fee4009dc09251cfb->leave($__internal_07292f0e3a8e9504ecd0c2be51a7ab0a8e2b860044a5c87fee4009dc09251cfb_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc2a9b8c2c813e027d54cf6ac2cd20de4e2c115c3a677f0731fd0e22ede5b4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2a9b8c2c813e027d54cf6ac2cd20de4e2c115c3a677f0731fd0e22ede5b4f0->enter($__internal_fc2a9b8c2c813e027d54cf6ac2cd20de4e2c115c3a677f0731fd0e22ede5b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
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

                return columnNumber;
            }

            function setColumns() {

                itemWidth = 300;

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
        
        $__internal_fc2a9b8c2c813e027d54cf6ac2cd20de4e2c115c3a677f0731fd0e22ede5b4f0->leave($__internal_fc2a9b8c2c813e027d54cf6ac2cd20de4e2c115c3a677f0731fd0e22ede5b4f0_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 64,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  138 => 57,  132 => 56,  114 => 43,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  76 => 29,  72 => 27,  68 => 26,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/layout.html.twig\" %}

{% block pageContent%}
    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Listando habitaciones en {{form.viewData.city.name}}</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
         CONTENT
    ***************************************************************************************************************** -->     


    <div class=\"container-fluid\">
        <div class=\"row\">            
            <div class=\"col-sm-6 col-md-4 sidebar\">
                <div class=\"portfoliowrap\">
                    <div class=\"portfolio-centered\">
                        <div class=\"recentitems portfolio\">
                            {% for room in rooms %}
                                <div class=\"portfolio-item graphic-design\">
                                    <div class=\"he-wrap tpl6\">
                                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" alt=\"\">
                                        <div class=\"he-view\">
                                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                                <h3 class=\"a1\" data-animate=\"fadeInDown\">{{ room.name}}</h3>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">{{ room.roomPrice  }} €</span></h4>
                                                <p class=\"a1\" data-animate=\"fadeInDown\">{{ room.description  }}</p>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\">{{ room.city }}</h4>
                                                <a data-rel=\"prettyPhoto\" <link href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                                <a href=\"{{ path('rooms_view', {'name':room.name}) }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                                            </div><!-- he bg -->
                                        </div><!-- he view -->\t\t
                                    </div><!-- he wrap -->
                                </div><!-- end col-12 -->
                            {% endfor %}
                        </div><!-- portfolio -->
                    </div><!-- portfolio container -->
                </div>
            </div><!-- /sidebar -->

            <div class=\"col-sm-6 col-md-8 main\">
                <div id=\"contactwrap\"></div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
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

                return columnNumber;
            }

            function setColumns() {

                itemWidth = 300;

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


{% endblock %}", "app\\rooms\\list.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\list.html.twig");
    }
}
