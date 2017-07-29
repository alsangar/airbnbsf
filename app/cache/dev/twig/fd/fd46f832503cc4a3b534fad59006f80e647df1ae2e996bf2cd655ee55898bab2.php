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
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e532f47e3a9ab589cb6e8132eaac77c759966cf047231d7a175e85fb1b7134d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e532f47e3a9ab589cb6e8132eaac77c759966cf047231d7a175e85fb1b7134d8->enter($__internal_e532f47e3a9ab589cb6e8132eaac77c759966cf047231d7a175e85fb1b7134d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e532f47e3a9ab589cb6e8132eaac77c759966cf047231d7a175e85fb1b7134d8->leave($__internal_e532f47e3a9ab589cb6e8132eaac77c759966cf047231d7a175e85fb1b7134d8_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_e23d1f1abb958a33866576175439809beed2eb582a9eae42651737c8ff99e095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23d1f1abb958a33866576175439809beed2eb582a9eae42651737c8ff99e095->enter($__internal_e23d1f1abb958a33866576175439809beed2eb582a9eae42651737c8ff99e095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "
    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>";
        // line 11
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
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/single02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 40
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
        // line 49
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
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomType", array()), "html", null, true);
        echo "</p>
                <p><b>Categoria:</b> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "category", array()), "html", null, true);
        echo "</p>
                <p><b>Precio:</b> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "roomPrice", array()), "html", null, true);
        echo "</p>
                <p><b>WC independientes:</b> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcIndependents", array()), "html", null, true);
        echo "</p>
                <p><b>WC compartidos:</b> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "wcShared", array()), "html", null, true);
        echo "</p>
                <p><b>Capacidad:</b> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "capacity", array()), "html", null, true);
        echo "</p>
                <p><b>Habitaciones:</b> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "bedrooms", array()), "html", null, true);
        echo "</p>
                <p><b>Camas:</b> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "beds", array()), "html", null, true);
        echo "</p>                
            </div>

            <div class=\"col-lg-4 col-lg-offset-1\">
                <div class=\"spacing\"></div>
                <h4>Ubicación de la propiedad</h4>
                <div class=\"hline\"></div>
                <p><b>Dirección:</b> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "number", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "other", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "city", array()), "html", null, true);
        echo ".</p>
                <p><b>Código postal:</b> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "zip", array()), "html", null, true);
        echo "</p>                
                <p><b>Longitud:</b> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["room"] ?? $this->getContext($context, "room")), "location", array()), "longitude", array()), "html", null, true);
        echo "</p>
                <p><b>Latitud:</b> ";
        // line 79
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
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <div class=\"portfolio-centered\">
            <h3>Related Works.</h3>
            <div class=\"recentitems portfolio\">
                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
        echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item web-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Web Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_02.jpg"), "html", null, true);
        echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_03.jpg"), "html", null, true);
        echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_04.jpg"), "html", null, true);
        echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_05.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_04.jpg"), "html", null, true);
        echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->


            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

";
        
        $__internal_e23d1f1abb958a33866576175439809beed2eb582a9eae42651737c8ff99e095->leave($__internal_e23d1f1abb958a33866576175439809beed2eb582a9eae42651737c8ff99e095_prof);

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
        return array (  284 => 158,  277 => 154,  265 => 145,  258 => 141,  246 => 132,  239 => 128,  227 => 119,  220 => 115,  208 => 106,  201 => 102,  175 => 79,  171 => 78,  167 => 77,  157 => 76,  147 => 69,  143 => 68,  139 => 67,  135 => 66,  131 => 65,  127 => 64,  123 => 63,  119 => 62,  103 => 49,  91 => 40,  85 => 37,  79 => 34,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <div class=\"portfolio-centered\">
            <h3>Related Works.</h3>
            <div class=\"recentitems portfolio\">
                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg')}}\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item web-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_02.jpg')}}\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Web Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_02.jpg')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_03.jpg')}}\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_03.jpg')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_04.jpg')}}\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_04.jpg')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->

                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"{{ asset('themes/app/assets/img/portfolio/portfolio_05.jpg')}}\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">A Graphic Design Item</h3>
                                <a data-rel=\"prettyPhoto\" href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_04.jpg')}}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->


            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->

{% endblock%}", "app\\rooms\\view.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\view.html.twig");
    }
}
