<?php

/* app/default/index.html.twig */
class __TwigTemplate_7579cc71f4910a5dabfb80b3639a150d6df2104a154d2d4b2c1a6e8c1225f231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app/default/index.html.twig", 1);
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
        $__internal_de75f424f58683eb2e92ab48808a43eea88d1895cdbde820ae69ad93bc3f87d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de75f424f58683eb2e92ab48808a43eea88d1895cdbde820ae69ad93bc3f87d1->enter($__internal_de75f424f58683eb2e92ab48808a43eea88d1895cdbde820ae69ad93bc3f87d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de75f424f58683eb2e92ab48808a43eea88d1895cdbde820ae69ad93bc3f87d1->leave($__internal_de75f424f58683eb2e92ab48808a43eea88d1895cdbde820ae69ad93bc3f87d1_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_640c76377c972aa04b47e55225996f2df59a2dd63ee967e413c4e0954100461b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640c76377c972aa04b47e55225996f2df59a2dd63ee967e413c4e0954100461b->enter($__internal_640c76377c972aa04b47e55225996f2df59a2dd63ee967e413c4e0954100461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    <!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id=\"headerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <h3>Reserva alojamientos únicos</h3>
                    <h1>Clonando Airbnb</h1>
                    <h4>Descubre cada destino como un habitante más.</h4>
                    <p>

                        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_list"), "name" => "reserva", "attr" => array("id" => "searchForm", "role" => "form", "class" => "form-horizontal")));
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label');
        echo "</label>
                        <div class=\"col-sm-8\">
                            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget');
        echo "
                        </div>
                        <button type=\"submit\" class=\"col-sm-1 btn btn-default\" aria-label=\"Search\">
                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                        </button>
                    </div>
                    ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </p>\t\t\t\t
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 himg\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/browser.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /headerwrap -->

    <!-- *****************************************************************************************************************
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <h3>DESTACADOS</h3>

        <div class=\"portfolio-centered\">
            <div class=\"recentitems portfolio\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 48
            echo "                    <div class=\"portfolio-item graphic-design\">
                        <div class=\"he-wrap tpl6\">
                            <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"he-view\">
                                <div class=\"bg a0\" data-animate=\"fadeIn\">
                                    <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</h3>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\"><span class=\"label label-danger\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "roomPrice", array()), "html", null, true);
            echo " €</span></h4>
                                    <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "title", array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "city", array()), "html", null, true);
            echo "</h4>
                                    <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                    <a href=\"";
            // line 58
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
        // line 64
        echo "            </div><!-- portfolio -->
        </div><!-- portfolio container -->
    </div><!--/Portfoliowrap -->


    <!-- *****************************************************************************************************************
     SERVICE LOGOS
     ***************************************************************************************************************** -->
    <div id=\"service\">
        <div class=\"container\">
            <div class=\"row centered\">
                <div class=\"col-md-4\">
                    <i class=\"fa fa-heart-o\"></i>
                    <h4>Handsomely Crafted</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>
                <div class=\"col-md-4\">
                    <i class=\"fa fa-flask\"></i>
                    <h4>Retina Ready</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>
                <div class=\"col-md-4\">
                    <i class=\"fa fa-trophy\"></i>
                    <h4>Quality Theme</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>\t\t \t\t\t\t
            </div>
        </div><! --/container -->
    </div><! --/service -->


    <!-- *****************************************************************************************************************
     MIDDLE CONTENT
     ***************************************************************************************************************** -->

    <div class=\"container mtb\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-1\">
                <h4>More About Our Agency.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <p><br/><a href=\"about.html\" class=\"btn btn-theme\">More Info</a></p>
            </div>

            <div class=\"col-lg-3\">
                <h4>Frequently Asked</h4>
                <div class=\"hline\"></div>
                <p><a href=\"#\">How cool is this theme?</a></p>
                <p><a href=\"#\">Need a nice good-looking site?</a></p>
                <p><a href=\"#\">Is this theme retina ready?</a></p>
                <p><a href=\"#\">Which version of Font Awesome uses?</a></p>
                <p><a href=\"#\">Free support is integrated?</a></p>
            </div>

            <div class=\"col-lg-3\">
                <h4>Latest Posts</h4>
                <div class=\"hline\"></div>
                <p><a href=\"single-post.html\">Our new site is live now.</a></p>
                <p><a href=\"single-post.html\">Retina ready is not an option.</a></p>
                <p><a href=\"single-post.html\">Bootstrap 3 framework is the best.</a></p>
                <p><a href=\"single-post.html\">You need this theme, buy it now.</a></p>
                <p><a href=\"single-post.html\">This theme is what you need.</a></p>
            </div>

        </div><! --/row -->
    </div><! --/container -->

    <!-- *****************************************************************************************************************
     TESTIMONIALS
     ***************************************************************************************************************** -->
    <div id=\"twrap\">
        <div class=\"container centered\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <i class=\"fa fa-comment-o\"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <h4><br/>Marcel Newman</h4>
                    <p>WEB DESIGNER - BLACKTIE.CO</p>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div><! --/twrap -->

    <!-- *****************************************************************************************************************
     OUR CLIENTS
     ***************************************************************************************************************** -->
    <div id=\"cwrap\">
        <div class=\"container\">
            <div class=\"row centered\">
                <h3>OUR CLIENTS</h3>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client01.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client02.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client03.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client04.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /cwrap -->


";
        
        $__internal_640c76377c972aa04b47e55225996f2df59a2dd63ee967e413c4e0954100461b->leave($__internal_640c76377c972aa04b47e55225996f2df59a2dd63ee967e413c4e0954100461b_prof);

    }

    // line 174
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ceb41268c179ec68f93d4be74613a2dfdf57d459512dbda776ff75f136cd7618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb41268c179ec68f93d4be74613a2dfdf57d459512dbda776ff75f136cd7618->enter($__internal_ceb41268c179ec68f93d4be74613a2dfdf57d459512dbda776ff75f136cd7618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 175
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/retina-1.1.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverdir.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.hoverex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
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
        
        $__internal_ceb41268c179ec68f93d4be74613a2dfdf57d459512dbda776ff75f136cd7618->leave($__internal_ceb41268c179ec68f93d4be74613a2dfdf57d459512dbda776ff75f136cd7618_prof);

    }

    public function getTemplateName()
    {
        return "app/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 182,  310 => 181,  306 => 180,  302 => 179,  298 => 178,  294 => 177,  290 => 176,  287 => 175,  281 => 174,  266 => 166,  260 => 163,  254 => 160,  248 => 157,  153 => 64,  141 => 58,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  115 => 50,  111 => 48,  107 => 47,  90 => 33,  83 => 29,  74 => 23,  70 => 22,  65 => 20,  59 => 17,  55 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id=\"headerwrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <h3>Reserva alojamientos únicos</h3>
                    <h1>Clonando Airbnb</h1>
                    <h4>Descubre cada destino como un habitante más.</h4>
                    <p>

                        {{ form_start(form, {'method': 'POST', 'action': path('rooms_list'), 'name': 'reserva', 'attr': {'id': 'searchForm', 'role':'form', 'class' :'form-horizontal'} }) }}
                        {{ form_errors(form) }}

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ form_label(form.city) }}</label>
                        <div class=\"col-sm-8\">
                            {{ form_errors(form.city) }}
                            {{ form_widget(form.city) }}
                        </div>
                        <button type=\"submit\" class=\"col-sm-1 btn btn-default\" aria-label=\"Search\">
                            <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                        </button>
                    </div>
                    {{ form_end(form) }}
                    </p>\t\t\t\t
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 himg\">
                    <img src=\"{{ asset('themes/app/assets/img/browser.png') }}\" class=\"img-responsive\">
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /headerwrap -->

    <!-- *****************************************************************************************************************
     PORTFOLIO SECTION
     ***************************************************************************************************************** -->
    <div id=\"portfoliowrap\">
        <h3>DESTACADOS</h3>

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
                                    <p class=\"a1\" data-animate=\"fadeInDown\">{{ room.title }}</p>
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
    </div><!--/Portfoliowrap -->


    <!-- *****************************************************************************************************************
     SERVICE LOGOS
     ***************************************************************************************************************** -->
    <div id=\"service\">
        <div class=\"container\">
            <div class=\"row centered\">
                <div class=\"col-md-4\">
                    <i class=\"fa fa-heart-o\"></i>
                    <h4>Handsomely Crafted</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>
                <div class=\"col-md-4\">
                    <i class=\"fa fa-flask\"></i>
                    <h4>Retina Ready</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>
                <div class=\"col-md-4\">
                    <i class=\"fa fa-trophy\"></i>
                    <h4>Quality Theme</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p><br/><a href=\"#\" class=\"btn btn-theme\">More Info</a></p>
                </div>\t\t \t\t\t\t
            </div>
        </div><! --/container -->
    </div><! --/service -->


    <!-- *****************************************************************************************************************
     MIDDLE CONTENT
     ***************************************************************************************************************** -->

    <div class=\"container mtb\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-1\">
                <h4>More About Our Agency.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <p><br/><a href=\"about.html\" class=\"btn btn-theme\">More Info</a></p>
            </div>

            <div class=\"col-lg-3\">
                <h4>Frequently Asked</h4>
                <div class=\"hline\"></div>
                <p><a href=\"#\">How cool is this theme?</a></p>
                <p><a href=\"#\">Need a nice good-looking site?</a></p>
                <p><a href=\"#\">Is this theme retina ready?</a></p>
                <p><a href=\"#\">Which version of Font Awesome uses?</a></p>
                <p><a href=\"#\">Free support is integrated?</a></p>
            </div>

            <div class=\"col-lg-3\">
                <h4>Latest Posts</h4>
                <div class=\"hline\"></div>
                <p><a href=\"single-post.html\">Our new site is live now.</a></p>
                <p><a href=\"single-post.html\">Retina ready is not an option.</a></p>
                <p><a href=\"single-post.html\">Bootstrap 3 framework is the best.</a></p>
                <p><a href=\"single-post.html\">You need this theme, buy it now.</a></p>
                <p><a href=\"single-post.html\">This theme is what you need.</a></p>
            </div>

        </div><! --/row -->
    </div><! --/container -->

    <!-- *****************************************************************************************************************
     TESTIMONIALS
     ***************************************************************************************************************** -->
    <div id=\"twrap\">
        <div class=\"container centered\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <i class=\"fa fa-comment-o\"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <h4><br/>Marcel Newman</h4>
                    <p>WEB DESIGNER - BLACKTIE.CO</p>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div><! --/twrap -->

    <!-- *****************************************************************************************************************
     OUR CLIENTS
     ***************************************************************************************************************** -->
    <div id=\"cwrap\">
        <div class=\"container\">
            <div class=\"row centered\">
                <h3>OUR CLIENTS</h3>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ asset('themes/app/assets/img/clients/client01.png') }}\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ asset('themes/app/assets/img/clients/client02.png') }}\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ asset('themes/app/assets/img/clients/client03.png') }}\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"{{ asset('themes/app/assets/img/clients/client04.png') }}\" class=\"img-responsive\">
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /cwrap -->


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

{% endblock %}", "app/default/index.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\default\\index.html.twig");
    }
}
