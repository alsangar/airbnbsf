<?php

/* app\rooms\view.html.twig */
class __TwigTemplate_bdbf57d2a5336252622335a8b094587ce2cf2a658c1e475ca6922f809bc21565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app\\rooms\\view.html.twig", 1);
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
        $__internal_b3e84dd978a3ccc911836a4a1abdae96c71dcc80abdb94c274bd916c661960c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e84dd978a3ccc911836a4a1abdae96c71dcc80abdb94c274bd916c661960c7->enter($__internal_b3e84dd978a3ccc911836a4a1abdae96c71dcc80abdb94c274bd916c661960c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3e84dd978a3ccc911836a4a1abdae96c71dcc80abdb94c274bd916c661960c7->leave($__internal_b3e84dd978a3ccc911836a4a1abdae96c71dcc80abdb94c274bd916c661960c7_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_8c05ed4f9e552cce7ab6699798a6ecbae275c9aef4f0c3cadb935597144d21c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c05ed4f9e552cce7ab6699798a6ecbae275c9aef4f0c3cadb935597144d21c0->enter($__internal_8c05ed4f9e552cce7ab6699798a6ecbae275c9aef4f0c3cadb935597144d21c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo " - <span class=\"label label-danger\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomPrice", array()), "html", null, true);
        echo " €</span></h3></h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class=\"container mt\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1 centered\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div><! --/Carousel -->
            </div>

            <div class=\"col-lg-5 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>DESCRIPCION</h4>
                <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "description", array()), "html", null, true);
        echo "</p>
                <h4>Our Proposal</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h4>Our Proposal</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <h4>Our Proposal</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Detalles de la propiedad</h4>
                <div class=\"hline\"></div>
                <p><b>Tipo:</b> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomType", array()), "html", null, true);
        echo "</p>
                <p><b>Categoria:</b> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "category", array()), "html", null, true);
        echo "</p>
                <p><b>Precio:</b> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomPrice", array()), "html", null, true);
        echo "</p>
                <p><b>WC independientes:</b> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcIndependents", array()), "html", null, true);
        echo "</p>
                <p><b>WC compartidos:</b> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcShared", array()), "html", null, true);
        echo "</p>
                <p><b>Capacidad:</b> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "capacity", array()), "html", null, true);
        echo "</p>
                <p><b>Habitaciones:</b> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "bedrooms", array()), "html", null, true);
        echo "</p>
                <p><b>Camas:</b> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "beds", array()), "html", null, true);
        echo "</p>                
            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Ubicación de la propiedad</h4>
                <div class=\"hline\"></div>
                <p><b>Dirección:</b> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "number", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "other", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo ".</p>
                <p><b>Código postal:</b> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "zip", array()), "html", null, true);
        echo "</p>                
                <p><b>Longitud:</b> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "longitude", array()), "html", null, true);
        echo "</p>
                <p><b>Latitud:</b> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "latitude", array()), "html", null, true);
        echo "</p>

            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Detalles del propietario</h4>
                <div class=\"hline\"></div>
                <p><b>Nombre:</b> Pepito Grillo</p>
            </div>

        </div><! --/row -->
    </div><! --/container -->

    <!-- *****************************************************************************************************************
        SECCION DE RELACIONADOS
        ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <h3>Tambien en ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo "...</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room_city"] ?? $this->getContext($context, "room_city")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
            // line 101
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "name", array()), "html", null, true);
            echo "</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "title", array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "city", array()), "html", null, true);
            echo "</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_view", array("name" => $this->getAttribute($context["rc"], "name", array()))), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                                </div><!-- he bg -->
                            </div><!-- he view -->\t\t
                        </div><!-- he wrap -->
                    </div><!-- end col-12 -->
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\"><i class=\"fa fa-frown-o\"></i> No se han encontrado datos</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">!Agrega tu habitación!</h4>
                                    <a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-plus-circle\"></i></a>
                                </div><!-- he bg -->
                            </div><!-- he view -->\t\t
                        </div><!-- he wrap -->
                    </div><!-- end col-12 -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

";
        
        $__internal_8c05ed4f9e552cce7ab6699798a6ecbae275c9aef4f0c3cadb935597144d21c0->leave($__internal_8c05ed4f9e552cce7ab6699798a6ecbae275c9aef4f0c3cadb935597144d21c0_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f64f8f4874082777924d486fc1ec6492048384326f377ad987ee8244053dead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f64f8f4874082777924d486fc1ec6492048384326f377ad987ee8244053dead->enter($__internal_0f64f8f4874082777924d486fc1ec6492048384326f377ad987ee8244053dead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
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
        
        $__internal_0f64f8f4874082777924d486fc1ec6492048384326f377ad987ee8244053dead->leave($__internal_0f64f8f4874082777924d486fc1ec6492048384326f377ad987ee8244053dead_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 145,  315 => 144,  311 => 143,  307 => 142,  303 => 141,  299 => 140,  295 => 139,  291 => 137,  285 => 136,  273 => 130,  261 => 124,  253 => 119,  249 => 117,  238 => 111,  234 => 110,  230 => 109,  226 => 108,  222 => 107,  218 => 106,  212 => 103,  208 => 101,  203 => 100,  196 => 96,  175 => 78,  171 => 77,  167 => 76,  157 => 75,  147 => 68,  143 => 67,  139 => 66,  135 => 65,  131 => 64,  127 => 63,  123 => 62,  119 => 61,  103 => 48,  91 => 39,  85 => 36,  79 => 33,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
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

{% block pageContent %}
    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>{{room.title}} - {{room.location.city}} - <span class=\"label label-danger\">{{room.roomPrice}} €</span></h3></h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <!-- *****************************************************************************************************************
     TITLE & CONTENT
     ***************************************************************************************************************** -->

    <div class=\"container mt\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1 centered\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"{{ asset('themes/app/assets/img/portfolio/single01.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"{{ asset('themes/app/assets/img/portfolio/single02.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"{{ asset('themes/app/assets/img/portfolio/single03.jpg')}}\" alt=\"\">
                        </div>
                    </div>
                </div><! --/Carousel -->
            </div>

            <div class=\"col-lg-5 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>DESCRIPCION</h4>
                <p>{{room.description}}</p>
                <h4>Our Proposal</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h4>Our Proposal</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <h4>Our Proposal</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Detalles de la propiedad</h4>
                <div class=\"hline\"></div>
                <p><b>Tipo:</b> {{room.roomType}}</p>
                <p><b>Categoria:</b> {{room.category}}</p>
                <p><b>Precio:</b> {{room.roomPrice}}</p>
                <p><b>WC independientes:</b> {{room.wcIndependents}}</p>
                <p><b>WC compartidos:</b> {{room.wcShared}}</p>
                <p><b>Capacidad:</b> {{room.capacity}}</p>
                <p><b>Habitaciones:</b> {{room.bedrooms}}</p>
                <p><b>Camas:</b> {{room.beds}}</p>                
            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Ubicación de la propiedad</h4>
                <div class=\"hline\"></div>
                <p><b>Dirección:</b> {{room.location.address}}, {{room.location.number}}, {{room.location.other}}.{{room.location.city}}.</p>
                <p><b>Código postal:</b> {{room.location.zip}}</p>                
                <p><b>Longitud:</b> {{room.location.longitude}}</p>
                <p><b>Latitud:</b> {{room.location.latitude}}</p>

            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Detalles del propietario</h4>
                <div class=\"hline\"></div>
                <p><b>Nombre:</b> Pepito Grillo</p>
            </div>

        </div><! --/row -->
    </div><! --/container -->

    <!-- *****************************************************************************************************************
        SECCION DE RELACIONADOS
        ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <h3>Tambien en {{room.location.city}}...</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                {% for rc in room_city %}
                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">{{ rc.name}}</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">{{ rc.roomPrice  }} €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">{{ rc.title }}</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">{{ rc.city }}</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"{{ path('rooms_view', {'name':rc.name}) }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                                </div><!-- he bg -->
                            </div><!-- he view -->\t\t
                        </div><!-- he wrap -->
                    </div><!-- end col-12 -->
                {% else %}
                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\"><i class=\"fa fa-frown-o\"></i> No se han encontrado datos</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">!Agrega tu habitación!</h4>
                                    <a href=\"{{ path('register')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-plus-circle\"></i></a>
                                </div><!-- he bg -->
                            </div><!-- he view -->\t\t
                        </div><!-- he wrap -->
                    </div><!-- end col-12 -->
                {% endfor %}

            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

{% endblock%}
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

{% endblock %}", "app\\rooms\\view.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\view.html.twig");
    }
}
