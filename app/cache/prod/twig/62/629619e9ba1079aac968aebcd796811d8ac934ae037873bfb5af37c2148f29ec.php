<?php

/* :app/rooms:view.html.twig */
class __TwigTemplate_65ae1500ce7e439d9de9eff4e77a8bab63211886136bf4cdca59fa671e7b2b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", ":app/rooms:view.html.twig", 1);
        $this->blocks = array(
            'tilte' => array($this, 'block_tilte'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "title", array()), "html", null, true);
    }

    // line 6
    public function block_pageContent($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 22
        echo "




    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "city", array()), "html", null, true);
        echo " - <span class=\"label label-danger\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "roomPrice", array()), "html", null, true);
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 62
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
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "description", array()), "html", null, true);
        echo "</p>
                    <div class=\"spacing\"></div>
                    <h4>CARACTERISTICAS</h4>
                    <p><ul>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["room"] ?? null), "feature", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["featurelist"]) {
            // line 78
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["featurelist"], "feature", array()), "feature", array()), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featurelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </ul></p>
                </div>
                <div class=\"col-lg-4 col-lg-offset-1 sidebar\">
                    ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "POST", "name" => "reserva", "attr" => array("id" => "formReserva")));
        echo "
                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles de la reserva</h4>
                        <div class=\"hline\"></div>
                        <div clss=\"form-group\">
                            ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "checkin", array()), 'widget');
        echo "
                            ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "checkout", array()), 'widget');
        echo "
                            <a href=\"#\" name=\"daterange\" id=\"daterange\" class=\"btn btn-block btn-theme\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span> Fechas de la reserva</a>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-lg-6\">
                                <label for=\"num_personas\">Personas</label>
                                <div class=\"input-group\">
                                    ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pax", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i></span>
                                </div>     
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"tarifa_servicio\">Noches</label>
                                <div class=\"input-group\">
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nights", array()), 'widget');
        echo "                                      
                                    <span class=\"input-group-addon\"><i class=\"fa fa-moon-o\" aria-hidden=\"true\"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">                            
                            <div  class=\" col-lg-offset-6 col-lg-6\">
                                <label for=\"tarifa_servicio\">Precio/Noche</label>
                                <div class=\"input-group\">
                                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceNight", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">€</span>
                                </div>    
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\" col-lg-offset-6 col-lg-6\">
                                <label for=\"tarifa_servicio\">Tarifa de servicio</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"tarifa_servicio\" value=\"-\" readonly>
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div  class=\"col-lg-offset-6 col-lg-6\">
                                <label for=\"precio_total\">Total</label>
                                <div class=\"input-group\">
                                    ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceTotal", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                        </div>                        
                        ";
        // line 136
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 137
            echo "                            <button type=\"submit\" class=\"btn btn-block btn-large btn-success\">Reservar</button>
                        ";
        } else {
            // line 139
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-block btn-large btn-warning\">Inicia sesión para reservar</a>
                        ";
        }
        // line 141
        echo "                    </div>
                    ";
        // line 142
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Tipo:</b> ";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "roomType", array()), "html", null, true);
        echo "</p>
                        <p><b>Categoria:</b> ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "category", array()), "html", null, true);
        echo "</p>
                        <p><b>Precio:</b> ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "roomPrice", array()), "html", null, true);
        echo "</p>
                        <p><b>WC independientes:</b> ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "wcIndependents", array()), "html", null, true);
        echo "</p>
                        <p><b>WC compartidos:</b> ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "wcShared", array()), "html", null, true);
        echo "</p>
                        <p><b>Capacidad:</b> ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "capacity", array()), "html", null, true);
        echo "</p>
                        <p><b>Habitaciones:</b> ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "bedrooms", array()), "html", null, true);
        echo "</p>
                        <p><b>Camas:</b> ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "beds", array()), "html", null, true);
        echo "</p>                
                    </div>

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Ubicación de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Dirección:</b> ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "number", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "other", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "city", array()), "html", null, true);
        echo ".</p>
                        <p><b>Código postal:</b> ";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "zip", array()), "html", null, true);
        echo "</p>                
                        <p><b>Longitud:</b> ";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "longitude", array()), "html", null, true);
        echo "</p>
                        <p><b>Latitud:</b> ";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "latitude", array()), "html", null, true);
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
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? null), "location", array()), "city", array()), "html", null, true);
        echo "...</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room_city"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
            // line 187
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "name", array()), "html", null, true);
            echo "</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "title", array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "city", array()), "html", null, true);
            echo "</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"";
            // line 197
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
            // line 203
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\"><i class=\"fa fa-frown-o\"></i> No se han encontrado datos</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">¡Agrega tu habitación!</h4>
                                    <a href=\"";
            // line 210
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
        // line 216
        echo "
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

";
    }

    // line 222
    public function block_javascripts($context, array $blocks = array())
    {
        // line 223
        echo "
    ";
        // line 224
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>

    <script>
        var fechaIni, fechaFin;

        \$(document).ready(function () {

            \$('#daterange').on('click', function (event) {
                event.preventDefault();
            });

            //Lo ideal sería controlar el evento para el cambio de fechas del
            //calendario desde aqui pero no consigo que JQuery aplique el handler
            //a #daterange por lo que disparo el evento 'change' sobre #backendbundle_bookings_pax
            //cuando se cambia la fecha en #daterange
            \$('#backendbundle_bookings_pax').on('change', function () {
                //var data = \$('#formReserva').serialize();
                //Javascript no soporta la inclusión de variables Twig por lo que se busca un workaround
                var aux = \"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calculate_room_price", array("id" => "PLACEHOLDER"));
        echo "\";
                var url = aux.replace('PLACEHOLDER', ";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? null), "id", array()), "html", null, true);
        echo ");
                \$.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        'checkin': fechaIni,
                        'checkout': fechaFin,
                        'pax': \$('#backendbundle_bookings_pax').val()
                    },
                    dataType: 'json',
                    enconde: true
                }).done(function (data) {
                    \$('#backendbundle_bookings_pax').val(data.pax);
                    \$('#backendbundle_bookings_nights').val(data.nights);
                    \$('#backendbundle_bookings_priceNight').val(data.nightPrice.price);
                    \$('#backendbundle_bookings_priceTotal').val(data.total);
                });
            });

            var today = moment(moment(), \"DD-MM-YY\");
            \$('#daterange').daterangepicker({
                \"locale\": {
                    \"format\": \"DD/MM/YYYY\",
                    \"separator\": \" - \",
                    \"applyLabel\": \"Aplicar\",
                    \"cancelLabel\": \"Cancelar\",
                    \"fromLabel\": \"Desde\",
                    \"toLabel\": \"Hasta\",
                    \"customRangeLabel\": \"Personalizado\",
                    \"weekLabel\": \"Sem\",
                    \"daysOfWeek\": [
                        \"L\",
                        \"M\",
                        \"X\",
                        \"J\",
                        \"V\",
                        \"S\",
                        \"D\"
                    ],
                    \"monthNames\": [
                        \"Enero\",
                        \"Febrero\",
                        \"Marzo\",
                        \"Abril\",
                        \"Mayo\",
                        \"Junio\",
                        \"Julio\",
                        \"Agosto\",
                        \"Septiembre\",
                        \"Octubre\",
                        \"Noviembre\",
                        \"Deciembre\"
                    ],
                    \"firstDay\": 0,
                    \"minDate\": today
                },
                \"opens\": \"center\",
                \"drops\": \"down\"
            }, function (start, end, label) {
                fechaIni = start.format('DD-MM-YYYY');
                fechaFin = end.format('DD-MM-YYYY');
                \$('#daterange').html(\"<span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Del \" + start.format('DD-MM-YYYY') + \" al \" + end.format('DD-MM-YYYY'));
                \$('#backendbundle_bookings_pax').trigger('change');
            });
        });
    </script>

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
    }

    public function getTemplateName()
    {
        return ":app/rooms:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 245,  425 => 244,  402 => 224,  399 => 223,  396 => 222,  387 => 216,  375 => 210,  367 => 205,  363 => 203,  352 => 197,  348 => 196,  344 => 195,  340 => 194,  336 => 193,  332 => 192,  326 => 189,  322 => 187,  317 => 186,  310 => 182,  289 => 164,  285 => 163,  281 => 162,  271 => 161,  261 => 154,  257 => 153,  253 => 152,  249 => 151,  245 => 150,  241 => 149,  237 => 148,  233 => 147,  225 => 142,  222 => 141,  216 => 139,  212 => 137,  210 => 136,  202 => 131,  181 => 113,  169 => 104,  159 => 97,  149 => 90,  145 => 89,  136 => 83,  131 => 80,  122 => 78,  118 => 77,  111 => 73,  97 => 62,  91 => 59,  85 => 56,  55 => 33,  42 => 22,  39 => 7,  36 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":app/rooms:view.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources\\views/app/rooms/view.html.twig");
    }
}
