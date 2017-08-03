<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_670ba559176a982758eb8b9b2ba5d7d36d4c4ac101e020fc1c0057ad7b4193cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = (((($context["profiler_markup_version"] ?? null) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = (((($context["profiler_markup_version"] ?? null) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => ($context["icon_fill_color"] ?? null), "height" => ($context["icon_height"] ?? null)));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "numEntities", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "numEntities", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        // line 28
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute(($context["collector"] ?? null), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin <small>(";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 39
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute(($context["collector"] ?? null), "requestParameters", array())) {
                // line 47
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 58
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 63
($context["collector"] ?? null), "requestParameters", array()), "sort_field", array())) {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                    echo ")</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            ";
                }
                // line 69
                echo "        </div>
        ";
            }
            // line 71
            echo "
    ";
        }
        // line 73
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                ";
        // line 78
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => $this->getAttribute(($context["collector"] ?? null), "currentEntityConfig", array())), "method");
        echo "
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                ";
        // line 89
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 90
($context["collector"] ?? null), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 91
($context["collector"] ?? null), "backendConfig", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 96
($context["collector"] ?? null), "backendConfig", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 101
($context["collector"] ?? null), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 102
($context["collector"] ?? null), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 103
($context["collector"] ?? null), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 104
($context["collector"] ?? null), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 105
($context["collector"] ?? null), "backendConfig", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 110
($context["collector"] ?? null), "backendConfig", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo $this->getAttribute(($context["collector"] ?? null), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 115
($context["collector"] ?? null), "backendConfig", array()))), "method");
        // line 116
        echo "
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 116,  246 => 115,  245 => 114,  240 => 111,  238 => 110,  237 => 109,  232 => 106,  230 => 105,  229 => 104,  228 => 103,  227 => 102,  226 => 101,  225 => 100,  220 => 97,  218 => 96,  217 => 95,  212 => 92,  210 => 91,  209 => 90,  208 => 89,  194 => 78,  187 => 73,  183 => 71,  179 => 69,  170 => 65,  167 => 64,  165 => 63,  159 => 60,  156 => 59,  154 => 58,  147 => 54,  139 => 49,  135 => 47,  133 => 46,  130 => 45,  124 => 42,  120 => 40,  118 => 39,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  96 => 29,  91 => 28,  88 => 27,  82 => 24,  79 => 23,  73 => 20,  66 => 16,  62 => 14,  60 => 13,  57 => 12,  52 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/data_collector/easyadmin.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\data_collector\\easyadmin.html.twig");
    }
}
