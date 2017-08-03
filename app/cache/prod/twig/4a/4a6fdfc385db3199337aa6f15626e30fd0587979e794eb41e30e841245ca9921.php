<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_44f50754e28dfa1689aa5d9b29d800a807f28cd8cef0dc27779fde87974392af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] = $this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? null), "name", array()), array(),         // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? null), "label", array()), array(),         // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null)));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter(($context["_request_parameters"] ?? null), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? null), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? null), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? null), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? null), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("query" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? null)))));
        // line 26
        ob_start();
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? null), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array()), "title", array()), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null))) : (            // line 32
($context["_default_title"] ?? null))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? null), "name", array())), "html", null, true);
    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 37
    public function block_page_title($context, array $blocks = array())
    {
        echo strip_tags(($context["_content_title"] ?? null));
    }

    // line 39
    public function block_content_header($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 42
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 49
        $this->displayBlock('global_actions', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
    </div>
";
    }

    // line 42
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        // line 43
        echo "                <h1 class=\"title\">";
        echo twig_escape_filter($this->env, ($context["_content_title"] ?? null), "html", null, true);
        echo "</h1>
            ";
    }

    // line 49
    public function block_global_actions($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))) {
            // line 51
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
            // line 52
            echo "
                        ";
            // line 53
            $this->displayBlock('search_action', $context, $blocks);
            // line 76
            echo "                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))) {
            // line 79
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
            // line 80
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
    }

    // line 53
    public function block_search_action($context, array $blocks = array())
    {
        // line 54
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 56
        $this->displayBlock('search_form', $context, $blocks);
        // line 73
        echo "                                </form>
                            </div>
                        ";
    }

    // line 56
    public function block_search_form($context, array $blocks = array())
    {
        // line 57
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null)), "html", null, true);
        // line 68
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
    }

    // line 80
    public function block_new_action($context, array $blocks = array())
    {
        // line 81
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("action" => $this->getAttribute(($context["_action"] ?? null), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 83
        if ($this->getAttribute(($context["_action"] ?? null), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 84
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? null), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? null), "label", array()), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null))) : ("")), "html", null, true);
        // line 84
        echo "
                                </a>
                            </div>
                        ";
    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
        // line 97
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 128
        echo "        </thead>

        <tbody>
        ";
        // line 131
        $this->displayBlock('table_body', $context, $blocks);
        // line 168
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 172
        $this->displayBlock('paginator', $context, $blocks);
        // line 175
        echo "
    ";
        // line 176
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 101
    public function block_table_head($context, array $blocks = array())
    {
        // line 102
        echo "            <tr>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 104
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 105
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 106
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null));
            // line 107
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 108
            echo "
                    <th data-property-name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 110
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? null)))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 112
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                ";
                // line 113
                echo ($context["_column_label"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 116
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 118
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ";
        // line 121
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 122
            echo "                    <th>
                        <span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 126
        echo "            </tr>
        ";
    }

    // line 131
    public function block_table_body($context, array $blocks = array())
    {
        // line 132
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                ";
            // line 134
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? null), "primary_key_field_name", array())));
            // line 135
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 137
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 138
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                 // line 2
($context["__internal_5f51e97a3e030c71cddad24960a15784eeb2b97540f583217759163a94c7ab1a"] ?? null));
                // line 139
                echo "
                        <td data-label=\"";
                // line 140
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 141
                echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                    ";
            // line 145
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                // line 146
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                // line 147
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? null), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 148
                $this->displayBlock('item_actions', $context, $blocks);
                // line 157
                echo "                        </td>
                    ";
            }
            // line 159
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 161
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 162
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? null)) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? null)))), "html", null, true);
            echo "\">
                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        ";
    }

    // line 148
    public function block_item_actions($context, array $blocks = array())
    {
        // line 149
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 150
($context["_list_item_actions"] ?? null), "request_parameters" =>         // line 151
($context["_request_parameters"] ?? null), "translation_domain" => $this->getAttribute(        // line 152
($context["_entity_config"] ?? null), "translation_domain", array()), "trans_parameters" =>         // line 153
($context["_trans_parameters"] ?? null), "item_id" =>         // line 154
($context["_item_id"] ?? null)), false);
        // line 155
        echo "
                        ";
    }

    // line 172
    public function block_paginator($context, array $blocks = array())
    {
        // line 173
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array()), "paginator", array()));
        echo "
    ";
    }

    // line 176
    public function block_delete_form($context, array $blocks = array())
    {
        // line 177
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? null), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute(($context["paginator"] ?? null), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 178
($context["app"] ?? null), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 179
($context["app"] ?? null), "request", array()), "requestUri", array())));
        // line 181
        echo "
        ";
        // line 182
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 184
($context["referer"] ?? null)), "delete_form" =>         // line 185
($context["delete_form_template"] ?? null), "_translation_domain" => $this->getAttribute(        // line 186
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 187
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 188
($context["_entity_config"] ?? null)), false);
        // line 189
        echo "
    ";
    }

    // line 193
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 194
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 237
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 238
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 239
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 239,  626 => 238,  624 => 237,  590 => 206,  574 => 194,  571 => 193,  566 => 189,  564 => 188,  563 => 187,  562 => 186,  561 => 185,  560 => 184,  559 => 182,  556 => 181,  554 => 179,  553 => 178,  551 => 177,  548 => 176,  541 => 173,  538 => 172,  533 => 155,  531 => 154,  530 => 153,  529 => 152,  528 => 151,  527 => 150,  525 => 149,  522 => 148,  518 => 167,  508 => 163,  504 => 162,  501 => 161,  487 => 159,  483 => 157,  481 => 148,  476 => 147,  473 => 146,  471 => 145,  468 => 144,  459 => 141,  449 => 140,  446 => 139,  444 => 2,  442 => 138,  439 => 137,  435 => 136,  430 => 135,  427 => 134,  425 => 133,  406 => 132,  403 => 131,  398 => 126,  392 => 123,  389 => 122,  387 => 121,  384 => 120,  377 => 118,  371 => 116,  365 => 113,  361 => 112,  356 => 111,  354 => 110,  342 => 109,  339 => 108,  336 => 107,  334 => 2,  332 => 106,  329 => 105,  326 => 104,  322 => 103,  319 => 102,  316 => 101,  312 => 176,  309 => 175,  307 => 172,  301 => 168,  299 => 131,  294 => 128,  292 => 101,  286 => 97,  283 => 96,  280 => 95,  273 => 84,  271 => 2,  269 => 84,  263 => 83,  255 => 82,  252 => 81,  249 => 80,  241 => 68,  239 => 2,  238 => 68,  233 => 66,  228 => 64,  223 => 62,  219 => 61,  215 => 60,  211 => 59,  207 => 58,  204 => 57,  201 => 56,  195 => 73,  193 => 56,  189 => 55,  184 => 54,  181 => 53,  177 => 89,  174 => 88,  171 => 80,  168 => 79,  166 => 78,  163 => 77,  160 => 76,  158 => 53,  155 => 52,  152 => 51,  149 => 50,  146 => 49,  139 => 43,  136 => 42,  129 => 90,  127 => 49,  121 => 45,  119 => 42,  115 => 40,  112 => 39,  106 => 37,  100 => 24,  94 => 23,  90 => 5,  83 => 32,  82 => 2,  80 => 32,  77 => 31,  71 => 29,  68 => 28,  66 => 27,  64 => 26,  62 => 21,  59 => 18,  57 => 17,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  46 => 2,  45 => 3,  44 => 2,  43 => 3,  41 => 2,  39 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:list.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/list.html.twig");
    }
}
