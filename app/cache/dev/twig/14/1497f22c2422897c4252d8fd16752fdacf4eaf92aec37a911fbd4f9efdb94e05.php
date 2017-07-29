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
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93fe69dcb9ec01c88cfed3be3f35a0e72aef4122d921bfda9afc07c5409817f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fe69dcb9ec01c88cfed3be3f35a0e72aef4122d921bfda9afc07c5409817f3->enter($__internal_93fe69dcb9ec01c88cfed3be3f35a0e72aef4122d921bfda9afc07c5409817f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fe69dcb9ec01c88cfed3be3f35a0e72aef4122d921bfda9afc07c5409817f3->leave($__internal_93fe69dcb9ec01c88cfed3be3f35a0e72aef4122d921bfda9afc07c5409817f3_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_a043bdd539c9594361e4ed6ba19f4bbb857c92bf6ba1f351acaedc7f9fa8710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a043bdd539c9594361e4ed6ba19f4bbb857c92bf6ba1f351acaedc7f9fa8710c->enter($__internal_a043bdd539c9594361e4ed6ba19f4bbb857c92bf6ba1f351acaedc7f9fa8710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">City</label>
                            <div class=\"col-sm-8\">
                                <select class=\"form-control\">
                                    <option>Salamanca</option>
                                    <option>Madrid</option>
                                    <option>Paris</option>
                                    <option>Venecia</option>
                                    <option>New York</option>
                                </select>
                            </div>
                            <button type=\"button\" class=\"col-sm-1 btn btn-default\" aria-label=\"Search\">
                                <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                            </button>
                        </div>                        
                    </form>
                    </p>\t\t\t\t
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 himg\">
                    <img src=\"";
        // line 35
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 50
            echo "                <div class=\"portfolio-item graphic-design\">
                    <div class=\"he-wrap tpl6\">
                        <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"he-view\">
                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rooms"] ?? $this->getContext($context, "rooms")), "name", array()), "html", null, true);
            echo "</h3>
                                <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rooms"] ?? $this->getContext($context, "rooms")), "description", array()), "html", null, true);
            echo "</p>
                                <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rooms"] ?? $this->getContext($context, "rooms")), "city", array()), "html", null, true);
            echo "</p>
                                <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
                            </div><!-- he bg -->
                        </div><!-- he view -->\t\t
                    </div><!-- he wrap -->
                </div><!-- end col-12 -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client01.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client02.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client03.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-3\">
                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/clients/client04.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /cwrap -->


";
        
        $__internal_a043bdd539c9594361e4ed6ba19f4bbb857c92bf6ba1f351acaedc7f9fa8710c->leave($__internal_a043bdd539c9594361e4ed6ba19f4bbb857c92bf6ba1f351acaedc7f9fa8710c_prof);

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
        return array (  242 => 167,  236 => 164,  230 => 161,  224 => 158,  129 => 65,  116 => 58,  112 => 57,  108 => 56,  104 => 55,  98 => 52,  94 => 50,  90 => 49,  73 => 35,  40 => 4,  34 => 3,  11 => 1,);
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
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">City</label>
                            <div class=\"col-sm-8\">
                                <select class=\"form-control\">
                                    <option>Salamanca</option>
                                    <option>Madrid</option>
                                    <option>Paris</option>
                                    <option>Venecia</option>
                                    <option>New York</option>
                                </select>
                            </div>
                            <button type=\"button\" class=\"col-sm-1 btn btn-default\" aria-label=\"Search\">
                                <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                            </button>
                        </div>                        
                    </form>
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
                                <h3 class=\"a1\" data-animate=\"fadeInDown\">{{ rooms.name }}</h3>
                                <p class=\"a1\" data-animate=\"fadeInDown\">{{ rooms.description }}</p>
                                <p class=\"a1\" data-animate=\"fadeInDown\">{{ rooms.city }}</p>
                                <a data-rel=\"prettyPhoto\" <link href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
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


{% endblock %}", "app/default/index.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\default\\index.html.twig");
    }
}
