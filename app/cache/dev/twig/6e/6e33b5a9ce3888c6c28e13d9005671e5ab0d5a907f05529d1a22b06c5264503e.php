<?php

/* app\rooms\view.html.twig */
class __TwigTemplate_9ed60ff38cb14ac2dbc2211d916b6a84357e339a0464f12673426ae88136e43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app\\rooms\\view.html.twig", 1);
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
        $__internal_6eaa942f94c2612613fc7f90af685ce5061cf77420cbb358fe9be8e853ea81de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaa942f94c2612613fc7f90af685ce5061cf77420cbb358fe9be8e853ea81de->enter($__internal_6eaa942f94c2612613fc7f90af685ce5061cf77420cbb358fe9be8e853ea81de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eaa942f94c2612613fc7f90af685ce5061cf77420cbb358fe9be8e853ea81de->leave($__internal_6eaa942f94c2612613fc7f90af685ce5061cf77420cbb358fe9be8e853ea81de_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_e64281d41b999327f6d99234b566bb7801a074c0787c905a11b43adb8966dfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64281d41b999327f6d99234b566bb7801a074c0787c905a11b43adb8966dfb3->enter($__internal_e64281d41b999327f6d99234b566bb7801a074c0787c905a11b43adb8966dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "title", array()), "html", null, true);
        
        $__internal_e64281d41b999327f6d99234b566bb7801a074c0787c905a11b43adb8966dfb3->leave($__internal_e64281d41b999327f6d99234b566bb7801a074c0787c905a11b43adb8966dfb3_prof);

    }

    // line 6
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_f043cc7fb5fa47e84019c8dade613ff3327b94a141383e08bb6003ab1d68c54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f043cc7fb5fa47e84019c8dade613ff3327b94a141383e08bb6003ab1d68c54f->enter($__internal_f043cc7fb5fa47e84019c8dade613ff3327b94a141383e08bb6003ab1d68c54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "description", array()), "html", null, true);
        echo "</p>
                    <div class=\"spacing\"></div>
                    <h4>CARACTERISTICAS</h4>
                    <p><ul>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "feature", array()));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "name" => "reserva", "attr" => array("id" => "formReserva")));
        echo "
                        <div class=\"\">
                            <div class=\"spacing\"></div>
                            <h4>Detalles de la reserva</h4>
                            <div class=\"hline\"></div>
                            <div clss=\"form-group\">
                                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "checkin", array()), 'widget');
        echo "
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "checkout", array()), 'widget');
        echo "
                                <a href=\"#\" name=\"daterange\" id=\"daterange\" class=\"btn btn-block btn-theme\">Fechas de la reserva</a>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"num_personas\">Número de personas</label>
                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pax", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label for=\"precio_unitario\">Precio unitario</label>
                                <div class=\"input-group\">
                                    ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "priceNight", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                                <div class=\"input-group\">
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nights", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"tarifa_servicio\">Tarifa de servicio</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"tarifa_servicio\" value=\"-\" readonly>
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"preico_total\">Total</label>
                                <div class=\"input-group\">
                                    ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "priceTotal", array()), 'widget');
        echo "
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            ";
        // line 122
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 123
            echo "                            <button type=\"submit\" class=\"btn btn-block btn-large btn-success\">Reservar</button>
                            ";
        } else {
            // line 125
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-block btn-large btn-warning\">Inicia sesión para reservar</a>
                            ";
        }
        // line 127
        echo "                        </div>
                        ";
        // line 128
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Detalles de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Tipo:</b> ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomType", array()), "html", null, true);
        echo "</p>
                        <p><b>Categoria:</b> ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "category", array()), "html", null, true);
        echo "</p>
                        <p><b>Precio:</b> ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomPrice", array()), "html", null, true);
        echo "</p>
                        <p><b>WC independientes:</b> ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcIndependents", array()), "html", null, true);
        echo "</p>
                        <p><b>WC compartidos:</b> ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcShared", array()), "html", null, true);
        echo "</p>
                        <p><b>Capacidad:</b> ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "capacity", array()), "html", null, true);
        echo "</p>
                        <p><b>Habitaciones:</b> ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "bedrooms", array()), "html", null, true);
        echo "</p>
                        <p><b>Camas:</b> ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "beds", array()), "html", null, true);
        echo "</p>                
                    </div>

                    <div class=\"\">
                        <div class=\"spacing\"></div>
                        <h4>Ubicación de la propiedad</h4>
                        <div class=\"hline\"></div>
                        <p><b>Dirección:</b> ";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "number", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "other", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo ".</p>
                        <p><b>Código postal:</b> ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "zip", array()), "html", null, true);
        echo "</p>                
                        <p><b>Longitud:</b> ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "longitude", array()), "html", null, true);
        echo "</p>
                        <p><b>Latitud:</b> ";
        // line 150
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
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo "...</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room_city"] ?? $this->getContext($context, "room_city")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
            // line 173
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "name", array()), "html", null, true);
            echo "</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "title", array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["rc"], "city", array()), "html", null, true);
            echo "</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"";
            // line 183
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
            // line 189
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\"><i class=\"fa fa-frown-o\"></i> No se han encontrado datos</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">!Agrega tu habitación!</h4>
                                    <a href=\"";
            // line 196
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
        // line 202
        echo "
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

";
        
        $__internal_f043cc7fb5fa47e84019c8dade613ff3327b94a141383e08bb6003ab1d68c54f->leave($__internal_f043cc7fb5fa47e84019c8dade613ff3327b94a141383e08bb6003ab1d68c54f_prof);

    }

    // line 208
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5b9d0f6938a9320fe2bee2496da365f7cd430e5aeac2aa70e5b1ed6ba7733a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b9d0f6938a9320fe2bee2496da365f7cd430e5aeac2aa70e5b1ed6ba7733a9->enter($__internal_d5b9d0f6938a9320fe2bee2496da365f7cd430e5aeac2aa70e5b1ed6ba7733a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 209
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>

    <script>
        \$(document).ready(function () {
            \$('#daterange').on('click', function (event) {
                event.preventDefault(); // To prevent following the link (optional) ...
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
                \$('#daterange').text(\"Del \" + start.format('DD-MM-YYYY') + \" al \" + end.format('DD-MM-YYYY'));
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
        
        $__internal_d5b9d0f6938a9320fe2bee2496da365f7cd430e5aeac2aa70e5b1ed6ba7733a9->leave($__internal_d5b9d0f6938a9320fe2bee2496da365f7cd430e5aeac2aa70e5b1ed6ba7733a9_prof);

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
        return array (  434 => 217,  430 => 216,  426 => 215,  422 => 214,  418 => 213,  414 => 212,  410 => 211,  406 => 209,  400 => 208,  388 => 202,  376 => 196,  368 => 191,  364 => 189,  353 => 183,  349 => 182,  345 => 181,  341 => 180,  337 => 179,  333 => 178,  327 => 175,  323 => 173,  318 => 172,  311 => 168,  290 => 150,  286 => 149,  282 => 148,  272 => 147,  262 => 140,  258 => 139,  254 => 138,  250 => 137,  246 => 136,  242 => 135,  238 => 134,  234 => 133,  226 => 128,  223 => 127,  217 => 125,  213 => 123,  211 => 122,  204 => 118,  187 => 104,  180 => 100,  172 => 95,  164 => 90,  160 => 89,  151 => 83,  146 => 80,  137 => 78,  133 => 77,  126 => 73,  112 => 62,  106 => 59,  100 => 56,  70 => 33,  57 => 22,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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

{% block tilte %}{{room.title}}{% endblock %}


{% block pageContent %}

{#    {{ dump(room) }}

    <!-- informacion en formato fisno -->


    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Información fisna</h3>
        </div>
        <div class=\"panel-body\">
            {{ dump(room) }}
        </div>
    </div>
#}





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
                    {{ form_start(form, {'method':'POST', 'name':'reserva', 'attr':{'id':'formReserva'} }) }}
                        <div class=\"\">
                            <div class=\"spacing\"></div>
                            <h4>Detalles de la reserva</h4>
                            <div class=\"hline\"></div>
                            <div clss=\"form-group\">
                                {{ form_widget(form.checkin) }}
                                {{ form_widget(form.checkout) }}
                                <a href=\"#\" name=\"daterange\" id=\"daterange\" class=\"btn btn-block btn-theme\">Fechas de la reserva</a>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"num_personas\">Número de personas</label>
                                {{ form_widget(form.pax) }}
                            </div>
                            <div class=\"form-group\">
                                <label for=\"precio_unitario\">Precio unitario</label>
                                <div class=\"input-group\">
                                    {{ form_widget(form.priceNight) }}
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                                <div class=\"input-group\">
                                    {{ form_widget(form.nights) }}
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"tarifa_servicio\">Tarifa de servicio</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"tarifa_servicio\" value=\"-\" readonly>
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"preico_total\">Total</label>
                                <div class=\"input-group\">
                                    {{ form_widget(form.priceTotal) }}
                                    <span class=\"input-group-addon\">€</span>
                                </div>
                            </div>
                            {% if(is_granted('ROLE_USER')) %}
                            <button type=\"submit\" class=\"btn btn-block btn-large btn-success\">Reservar</button>
                            {% else %}
                            <a href=\"{{ path('login') }}\" class=\"btn btn-block btn-large btn-warning\">Inicia sesión para reservar</a>
                            {% endif %}
                        </div>
                        {{ form_end(form) }}
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
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>

    <script>
        \$(document).ready(function () {
            \$('#daterange').on('click', function (event) {
                event.preventDefault(); // To prevent following the link (optional) ...
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
                \$('#daterange').text(\"Del \" + start.format('DD-MM-YYYY') + \" al \" + end.format('DD-MM-YYYY'));
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

{% endblock %}", "app\\rooms\\view.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\view.html.twig");
    }
}
