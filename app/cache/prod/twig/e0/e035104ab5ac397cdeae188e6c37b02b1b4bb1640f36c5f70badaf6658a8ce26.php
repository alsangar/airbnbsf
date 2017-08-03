<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_41f2d955435734e268c79830c8f8aef62938257b8d87d34289bc968ea1390dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? null), $this->getAttribute(($context["_entity_config"] ?? null), "primary_key_field_name", array())));
        // line 4
        $context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] = $this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? null), "name", array()), array(),         // line 4
($context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] ?? null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? null), "label", array()), array(),         // line 4
($context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] ?? null)), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? null));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? null), "name", array())) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array()), "title", array()), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),             // line 4
($context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] ?? null));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), ($context["entity"] ?? null), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_6528fb4c50fa7c4c8dfaa25014735b8e4bf8124929c0f5277159eb592e235940"] ?? null));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? null), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? null), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? null), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? null), "item_id" =>         // line 49
($context["_entity_id"] ?? null)), false);
        // line 50
        echo "
            ";
    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? null), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 63
($context["_entity_config"] ?? null)), false);
        // line 64
        echo "
    ";
    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 69,  184 => 68,  179 => 64,  177 => 63,  176 => 62,  175 => 61,  174 => 60,  173 => 59,  171 => 57,  168 => 56,  163 => 50,  161 => 49,  160 => 48,  159 => 47,  158 => 46,  157 => 45,  156 => 44,  153 => 43,  150 => 42,  147 => 41,  144 => 40,  140 => 56,  134 => 52,  132 => 40,  127 => 37,  119 => 34,  115 => 32,  113 => 4,  111 => 32,  109 => 31,  103 => 28,  97 => 24,  95 => 4,  94 => 24,  86 => 22,  82 => 21,  79 => 20,  76 => 19,  69 => 15,  68 => 4,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  52 => 10,  46 => 9,  42 => 7,  40 => 5,  39 => 4,  38 => 5,  37 => 4,  36 => 5,  34 => 4,  32 => 3,  30 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:show.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/show.html.twig");
    }
}
