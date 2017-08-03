<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_bea7601e354d044f7b5f122b342b4dd592448910b990a5d25438f643716c12a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["show_empty_boxes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "container", array()), "getParameter", array(0 => "sonata.admin.configuration.global_search.empty_boxes"), "method");
        // line 16
        echo "    ";
        $context["visibility_class"] = "";
        // line 17
        echo "    ";
        if ((($context["pager"] ?? null) &&  !twig_length_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "getResults", array(), "method")))) {
            // line 18
            echo "        ";
            $context["visibility_class"] = ("sonata-search-result-" . ($context["show_empty_boxes"] ?? null));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 21
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"box box-solid box-primary";
        // line 22
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 23
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 24
        $context["icon"] = (($this->getAttribute(($context["settings"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "icon", array()), "")) : (""));
        // line 25
        echo "                ";
        echo ($context["icon"] ?? null);
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["admin"] ?? null), "label", array()), array(), $this->getAttribute(($context["admin"] ?? null), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if ((($context["pager"] ?? null) && ($this->getAttribute(($context["pager"] ?? null), "getNbResults", array(), "method") > 0))) {
            // line 32
            echo "                        <span class=\"badge bg-light-blue\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 33
($context["admin"] ?? null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "create"), "method"))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if (($this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "list"), "method"))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>
            </div>
            ";
        // line 45
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "getResults", array(), "method")))) {
            // line 46
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pager"] ?? null), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                            ";
                $context["link"] = $this->getAttribute(($context["admin"] ?? null), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 50
                echo "                            ";
                if (($context["link"] ?? null)) {
                    // line 51
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 53
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 59
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  152 => 61,  148 => 59,  143 => 56,  137 => 55,  131 => 53,  123 => 51,  120 => 50,  117 => 49,  113 => 48,  109 => 46,  107 => 45,  103 => 43,  95 => 39,  92 => 38,  84 => 34,  82 => 33,  77 => 32,  75 => 31,  68 => 27,  62 => 25,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Block:block_search_result.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle/Resources/views/Block/block_search_result.html.twig");
    }
}
