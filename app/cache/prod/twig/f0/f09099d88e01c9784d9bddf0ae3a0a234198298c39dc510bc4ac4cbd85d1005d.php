<?php

/* @SonataClassification/CategoryAdmin/tree.html.twig */
class __TwigTemplate_6c6cffcc624c66a2d3da43a932869c9de091f694b72004517d13829b132c2775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataClassification/CategoryAdmin/tree.html.twig", 16);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "@SonataClassification/CategoryAdmin/tree.html.twig", 48)->display(array("mode" => "tree", "action" =>         // line 50
($context["action"] ?? null), "admin" =>         // line 51
($context["admin"] ?? null)));
    }

    // line 55
    public function block_list_table($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => "tree_catalog_title", 1 => array(), 2 => $this->getAttribute(($context["admin"] ?? null), "translationdomain", array())), "method"), "html", null, true);
        echo "
                    ";
        // line 61
        if (( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "hide_context"), "method") &&  !twig_test_empty(($context["current_context"] ?? null)))) {
            // line 62
            echo "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <strong class=\"text-info\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current_context"] ?? null), "name", array()), "html", null, true);
            echo "</strong> <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["root_categories"] ?? null));
            foreach ($context['_seq'] as $context["context_id"] => $context["categories"]) {
                // line 68
                echo "                                    <li>
                                        <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "tree", 1 => array("context" => $context["context_id"])), "method"), "html", null, true);
                echo "\">
                                            ";
                // line 70
                if ((($context["current_context"] ?? null) && ($context["context_id"] == $this->getAttribute(($context["current_context"] ?? null), "id", array())))) {
                    // line 71
                    echo "                                                <span class=\"pull-right\">
                                                    <i class=\"fa fa-check\"></i>
                                                </span>
                                            ";
                }
                // line 75
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_join_filter($context["categories"], ", "), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['context_id'], $context['categories'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 82
        echo "                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 85
        if (twig_test_empty(($context["current_categories"] ?? null))) {
            // line 86
            echo "                    ";
            echo $context["tree"]->getnavigate_child(array(), ($context["admin"] ?? null), true, 0);
            echo "
                ";
        } else {
            // line 88
            echo "                    ";
            echo $context["tree"]->getnavigate_child(($context["current_categories"] ?? null), ($context["admin"] ?? null), true, 0);
            echo "
                ";
        }
        // line 90
        echo "            </div>
        </div>
    </div>
";
    }

    // line 19
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            $context["tree"] = $this;
            // line 21
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree sonata-tree--toggleable js-treeview\"";
            }
            echo ">
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 23
                echo "            <li class=\"sonata-ba-list-field\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                echo "\" >
                <div class=\"sonata-tree__item\"";
                // line 24
                if ((($context["depth"] ?? null) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 25
                if (($this->getAttribute($context["element"], "parent", array()) || ($context["root"] ?? null))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 26
                echo "                    ";
                if (($this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 27
                    echo "                        <a class=\"sonata-tree__item__edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } elseif (($this->getAttribute(                // line 28
($context["admin"] ?? null), "hasRoute", array(0 => "show"), "method") && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "show"), "method"))) {
                    // line 29
                    echo "                        <a class=\"sonata-tree__item__edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "show", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 31
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 33
                echo "                    <i class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", array()), "html", null, true);
                echo "</i>
                    ";
                // line 35
                echo "                    ";
                if ($this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-success pull-right\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => "active", 1 => array(), 2 => $this->getAttribute(($context["admin"] ?? null), "translationDomain", array())), "method"), "html", null, true);
                    echo "</span>";
                }
                // line 36
                echo "                    ";
                if ( !$this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-danger pull-right\"><i class=\"fa fa-times\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "trans", array(0 => "disabled", 1 => array(), 2 => $this->getAttribute(($context["admin"] ?? null), "translationDomain", array())), "method"), "html", null, true);
                    echo "</span>";
                }
                // line 37
                echo "                </div>

                ";
                // line 39
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 40
                    echo "                    ";
                    echo $context["tree"]->getnavigate_child($this->getAttribute($context["element"], "children", array()), ($context["admin"] ?? null), false, (($context["depth"] ?? null) + 1));
                    echo "
                ";
                }
                // line 42
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataClassification/CategoryAdmin/tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 44,  229 => 42,  223 => 40,  221 => 39,  217 => 37,  210 => 36,  203 => 35,  198 => 33,  192 => 31,  184 => 29,  182 => 28,  175 => 27,  172 => 26,  168 => 25,  162 => 24,  157 => 23,  153 => 22,  146 => 21,  143 => 20,  128 => 19,  121 => 90,  115 => 88,  109 => 86,  107 => 85,  102 => 82,  97 => 79,  86 => 75,  80 => 71,  78 => 70,  74 => 69,  71 => 68,  67 => 67,  61 => 64,  57 => 62,  55 => 61,  51 => 60,  45 => 56,  42 => 55,  38 => 51,  37 => 50,  35 => 48,  32 => 47,  28 => 16,  26 => 18,  11 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataClassification/CategoryAdmin/tree.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\classification-bundle\\Resources\\views\\CategoryAdmin\\tree.html.twig");
    }
}
