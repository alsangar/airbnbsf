<?php

/* app\rooms\list.html.twig */
class __TwigTemplate_be66d08adb01309dd57332b04c22d1386a6eb804876296100a014c82be90301e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "app\\rooms\\list.html.twig", 1);
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
        $__internal_f6bf8892fab8f9aac132da14e7c27f8835531f4571d4cf022705956659a01d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bf8892fab8f9aac132da14e7c27f8835531f4571d4cf022705956659a01d0f->enter($__internal_f6bf8892fab8f9aac132da14e7c27f8835531f4571d4cf022705956659a01d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bf8892fab8f9aac132da14e7c27f8835531f4571d4cf022705956659a01d0f->leave($__internal_f6bf8892fab8f9aac132da14e7c27f8835531f4571d4cf022705956659a01d0f_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_8cbc1ab13be83a271e434e2977355ee63bf2c9e7f0e686e2bd4597687433f74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbc1ab13be83a271e434e2977355ee63bf2c9e7f0e686e2bd4597687433f74e->enter($__internal_8cbc1ab13be83a271e434e2977355ee63bf2c9e7f0e686e2bd4597687433f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["rooms"] ?? $this->getContext($context, "rooms")));
        echo "

    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Listado.</h3>
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 29
            echo "                                <div class=\"portfolio-item graphic-design\">
                                    <div class=\"he-wrap tpl6\">
                                        <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/app/assets/img/portfolio/portfolio_09.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                        <div class=\"he-view\">
                                            <div class=\"bg a0\" data-animate=\"fadeIn\">
                                                <h3 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</h3>
                                                <p class=\"a1\" data-animate=\"fadeInDown\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "title", array()), "html", null, true);
            echo "</p>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "city", array()), "html", null, true);
            echo "</h4>
                                                <a data-rel=\"prettyPhoto\" <link href=\"";
            // line 37
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
        // line 44
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
        
        $__internal_8cbc1ab13be83a271e434e2977355ee63bf2c9e7f0e686e2bd4597687433f74e->leave($__internal_8cbc1ab13be83a271e434e2977355ee63bf2c9e7f0e686e2bd4597687433f74e_prof);

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
        return array (  107 => 44,  94 => 37,  90 => 36,  86 => 35,  82 => 34,  76 => 31,  72 => 29,  68 => 28,  40 => 4,  34 => 3,  11 => 1,);
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
    {{ dump(rooms) }}

    <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Listado.</h3>
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
                                                <p class=\"a1\" data-animate=\"fadeInDown\">{{ room.title }}</p>
                                                <h4 class=\"a1\" data-animate=\"fadeInDown\">{{ room.city }}</h4>
                                                <a data-rel=\"prettyPhoto\" <link href=\"{{ asset('themes/app/assets/img/portfolio/portfolio_09.jpg') }}\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>
                                                <a href=\"single-project.html\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-link\"></i></a>
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

{% endblock %}", "app\\rooms\\list.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\app\\rooms\\list.html.twig");
    }
}
