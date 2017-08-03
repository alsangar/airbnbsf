<?php

/* :app/rooms:list.html.twig */
class __TwigTemplate_6c5d4033f66c762f071e30793b5ee0a07c95ead7c223c1a1ace0c068994d31a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", ":app/rooms:list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Listando habitaciones en ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "viewData", array()), "city", array()), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? null));
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
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

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
    }

    public function getTemplateName()
    {
        return ":app/rooms:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  120 => 56,  105 => 43,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  67 => 29,  63 => 27,  59 => 26,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":app/rooms:list.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app/Resources\\views/app/rooms/list.html.twig");
    }
}
