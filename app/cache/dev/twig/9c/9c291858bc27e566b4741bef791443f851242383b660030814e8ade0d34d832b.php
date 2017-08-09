<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_69399dbab7b9060daa31aa14d552a24832a52b05d1bb25f2689a1906c1b007fd extends Twig_Template
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
        $__internal_5ed43331af73163d6497f5b7d4878a9b89f15dffa673b28357f147ab8c5ae976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed43331af73163d6497f5b7d4878a9b89f15dffa673b28357f147ab8c5ae976->enter($__internal_5ed43331af73163d6497f5b7d4878a9b89f15dffa673b28357f147ab8c5ae976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed43331af73163d6497f5b7d4878a9b89f15dffa673b28357f147ab8c5ae976->leave($__internal_5ed43331af73163d6497f5b7d4878a9b89f15dffa673b28357f147ab8c5ae976_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18bd0ad6c370f3325063a2c40bf981463ce44b1c7cd37ad5deea2f6415dbee01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bd0ad6c370f3325063a2c40bf981463ce44b1c7cd37ad5deea2f6415dbee01->enter($__internal_18bd0ad6c370f3325063a2c40bf981463ce44b1c7cd37ad5deea2f6415dbee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => ($context["icon_fill_color"] ?? $this->getContext($context, "icon_fill_color")), "height" => ($context["icon_height"] ?? $this->getContext($context, "icon_height"))));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
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
        
        $__internal_18bd0ad6c370f3325063a2c40bf981463ce44b1c7cd37ad5deea2f6415dbee01->leave($__internal_18bd0ad6c370f3325063a2c40bf981463ce44b1c7cd37ad5deea2f6415dbee01_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ba0f9c02206dba34afdfb0f4f83f0e2613e0e4ba4ed568b929b9102a2b5cb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba0f9c02206dba34afdfb0f4f83f0e2613e0e4ba4ed568b929b9102a2b5cb31->enter($__internal_2ba0f9c02206dba34afdfb0f4f83f0e2613e0e4ba4ed568b929b9102a2b5cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_2ba0f9c02206dba34afdfb0f4f83f0e2613e0e4ba4ed568b929b9102a2b5cb31->leave($__internal_2ba0f9c02206dba34afdfb0f4f83f0e2613e0e4ba4ed568b929b9102a2b5cb31_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce5b6e864f4ea67a8f6eed2dfaf415e3e781eac1ffc3b4073773862681980a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5b6e864f4ea67a8f6eed2dfaf415e3e781eac1ffc3b4073773862681980a42->enter($__internal_ce5b6e864f4ea67a8f6eed2dfaf415e3e781eac1ffc3b4073773862681980a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin <small>(";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 39
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())) {
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
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 63
($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array())) {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
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
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "currentEntityConfig", array())), "method");
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
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 90
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 91
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 96
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 101
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 102
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 103
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 104
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 105
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 110
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 115
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()))), "method");
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
        
        $__internal_ce5b6e864f4ea67a8f6eed2dfaf415e3e781eac1ffc3b4073773862681980a42->leave($__internal_ce5b6e864f4ea67a8f6eed2dfaf415e3e781eac1ffc3b4073773862681980a42_prof);

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
        return array (  269 => 116,  267 => 115,  266 => 114,  261 => 111,  259 => 110,  258 => 109,  253 => 106,  251 => 105,  250 => 104,  249 => 103,  248 => 102,  247 => 101,  246 => 100,  241 => 97,  239 => 96,  238 => 95,  233 => 92,  231 => 91,  230 => 90,  229 => 89,  215 => 78,  208 => 73,  204 => 71,  200 => 69,  191 => 65,  188 => 64,  186 => 63,  180 => 60,  177 => 59,  175 => 58,  168 => 54,  160 => 49,  156 => 47,  154 => 46,  151 => 45,  145 => 42,  141 => 40,  139 => 39,  134 => 37,  131 => 36,  128 => 35,  122 => 34,  111 => 29,  106 => 28,  100 => 27,  91 => 24,  88 => 23,  82 => 20,  75 => 16,  71 => 14,  69 => 13,  66 => 12,  61 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set icon %}
        {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
        {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
    {% endset %}

    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">{{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
    </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    <span class=\"label status-{{ not collector.requestParameters ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if profiler_markup_version == 1 %}

        <h3>Request Parameters</h3>
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

    {% else %}

        {% if collector.requestParameters %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                <span class=\"label\">Entity Name</span>
            </div>

            {% if collector.requestParameters.id %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.id }}</span>
                    <span class=\"label\">ID</span>
                </div>
            {% elseif collector.requestParameters.sort_field %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            {% endif %}
        </div>
        {% endif %}

    {% endif %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                {{ collector.dump(collector.currentEntityConfig)|raw }}
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                {{ collector.dump({
                    'site_name': collector.backendConfig['site_name'],
                    'formats': collector.backendConfig['formats']
                })|raw }}

                <h4>Design Configuration</h4>
                {{ collector.dump({
                    'design': collector.backendConfig['design']
                })|raw }}

                <h4>Actions Configuration</h4>
                {{ collector.dump({
                    'disabled_actions': collector.backendConfig['disabled_actions'],
                    'list': collector.backendConfig['list'],
                    'edit': collector.backendConfig['edit'],
                    'new': collector.backendConfig['new'],
                    'show': collector.backendConfig['show'],
                })|raw }}

                <h4>Entities Configuration</h4>
                {{ collector.dump({
                    'entities': collector.backendConfig['entities']
                })|raw }}

                <h4>Full Backend Configuration</h4>
                {{ collector.dump({
                    'easy_admin': collector.backendConfig
                })|raw }}
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\data_collector\\easyadmin.html.twig");
    }
}
