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
        $__internal_403b2a271a762f1c5662851c668b632da2385b388b367bbadf47358dc74342f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403b2a271a762f1c5662851c668b632da2385b388b367bbadf47358dc74342f2->enter($__internal_403b2a271a762f1c5662851c668b632da2385b388b367bbadf47358dc74342f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403b2a271a762f1c5662851c668b632da2385b388b367bbadf47358dc74342f2->leave($__internal_403b2a271a762f1c5662851c668b632da2385b388b367bbadf47358dc74342f2_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_1d109b08531eb8d14ad8ead35a8e7425edee3341633084d3b8040a846f96775e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d109b08531eb8d14ad8ead35a8e7425edee3341633084d3b8040a846f96775e->enter($__internal_1d109b08531eb8d14ad8ead35a8e7425edee3341633084d3b8040a846f96775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        </div>
        <div class=\"row\">
            <div class=\"container-fluid\">
                <div class=\"col-lg-5 col-lg-offset-1 main\">
                    <div class=\"spacing\"></div>
                    <h4>DESCRIPCION</h4>
                    <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "description", array()), "html", null, true);
        echo "</p>
                    <div class=\"spacing\"></div>
                    <h4>CARACTERISTICAS</h4>
                    <p><ul>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "feature", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["featurelist"]) {
            // line 55
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["featurelist"], "feature", array()), "feature", array()), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featurelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </ul></p>
                </div>
                <div class=\"col-lg-4 col-lg-offset-1 sidebar\">
                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Tipo:</b> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomType", array()), "html", null, true);
        echo "</p>
                        <p><b>Categoria:</b> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "category", array()), "html", null, true);
        echo "</p>
                        <p><b>Precio:</b> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomPrice", array()), "html", null, true);
        echo "</p>
                        <p><b>WC independientes:</b> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcIndependents", array()), "html", null, true);
        echo "</p>
                        <p><b>WC compartidos:</b> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcShared", array()), "html", null, true);
        echo "</p>
                        <p><b>Capacidad:</b> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "capacity", array()), "html", null, true);
        echo "</p>
                        <p><b>Habitaciones:</b> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "bedrooms", array()), "html", null, true);
        echo "</p>
                        <p><b>Camas:</b> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "beds", array()), "html", null, true);
        echo "</p>                
                    </div>

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Ubicación de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Dirección:</b> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "number", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "other", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo ".</p>
                        <p><b>Código postal:</b> ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "zip", array()), "html", null, true);
        echo "</p>                
                        <p><b>Longitud:</b> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "longitude", array()), "html", null, true);
        echo "</p>
                        <p><b>Latitud:</b> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "latitude", array()), "html", null, true);
        echo "</p>

                    </div>

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles del propietario</h4>
                        <div class=\"hline\"></div>
                        <p><b>Nombre:</b> Pepito Grillo</p>
                    </div>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div>
    <!-- *****************************************************************************************************************
        SECCION DE RELACIONADOS
        ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <h3>Tambien en ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo "...</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room_city"] ?? $this->getContext($context, "room_city")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
            // line 104
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "name", array()), "html", null, true);
            echo "</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "title", array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "city", array()), "html", null, true);
            echo "</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"";
            // line 114
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
            // line 120
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\"><i class=\"fa fa-frown-o\"></i> No se han encontrado datos</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">!Agrega tu habitación!</h4>
                                    <a href=\"";
            // line 127
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
        // line 133
        echo "
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

";
        
        $__internal_1d109b08531eb8d14ad8ead35a8e7425edee3341633084d3b8040a846f96775e->leave($__internal_1d109b08531eb8d14ad8ead35a8e7425edee3341633084d3b8040a846f96775e_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_521c6dce21b801effcf9f7e4d73471524c8091fdc1bae1c3192b605a1c75d09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521c6dce21b801effcf9f7e4d73471524c8091fdc1bae1c3192b605a1c75d09b->enter($__internal_521c6dce21b801effcf9f7e4d73471524c8091fdc1bae1c3192b605a1c75d09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
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
        
        $__internal_521c6dce21b801effcf9f7e4d73471524c8091fdc1bae1c3192b605a1c75d09b->leave($__internal_521c6dce21b801effcf9f7e4d73471524c8091fdc1bae1c3192b605a1c75d09b_prof);

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
        return array (  334 => 148,  330 => 147,  326 => 146,  322 => 145,  318 => 144,  314 => 143,  310 => 142,  306 => 140,  300 => 139,  288 => 133,  276 => 127,  268 => 122,  264 => 120,  253 => 114,  249 => 113,  245 => 112,  241 => 111,  237 => 110,  233 => 109,  227 => 106,  223 => 104,  218 => 103,  211 => 99,  190 => 81,  186 => 80,  182 => 79,  172 => 78,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  142 => 66,  138 => 65,  134 => 64,  125 => 57,  116 => 55,  112 => 54,  105 => 50,  91 => 39,  85 => 36,  79 => 33,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
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
        </div>
        <div class=\"row\">
            <div class=\"container-fluid\">
                <div class=\"col-lg-5 col-lg-offset-1 main\">
                    <div class=\"spacing\"></div>
                    <h4>DESCRIPCION</h4>
                    <p>{{room.description}}</p>
                    <div class=\"spacing\"></div>
                    <h4>CARACTERISTICAS</h4>
                    <p><ul>
                        {% for featurelist in room.feature %}
                            <li>{{ featurelist.feature.feature }}</li>
                            {% endfor %}
                    </ul></p>
                </div>
                <div class=\"col-lg-4 col-lg-offset-1 sidebar\">
                    <div class=\"\">
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

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Ubicación de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Dirección:</b> {{room.location.address}}, {{room.location.number}}, {{room.location.other}}.{{room.location.city}}.</p>
                        <p><b>Código postal:</b> {{room.location.zip}}</p>                
                        <p><b>Longitud:</b> {{room.location.longitude}}</p>
                        <p><b>Latitud:</b> {{room.location.latitude}}</p>

                    </div>

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles del propietario</h4>
                        <div class=\"hline\"></div>
                        <p><b>Nombre:</b> Pepito Grillo</p>
                    </div>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div>
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
