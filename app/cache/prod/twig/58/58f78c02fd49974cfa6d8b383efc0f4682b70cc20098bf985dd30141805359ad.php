<?php

/* @SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_f8279349932ed17ab008c4390b826134c886d2f386a787fd02666cb3e79f3c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? null))) {
            echo " readonly=\"readonly\"";
        }
        // line 15
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 17
        echo "    />

    <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 20
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? null))) {
            echo " readonly=\"readonly\"";
        }
        // line 21
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 23
        echo "    >";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            if ((($context["idx"] . "") != "_labels")) {
                // line 25
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["value"] ?? null), "_labels", array(), "array"), $context["idx"], array(), "array"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</select>

    <div id=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 30
        if (($context["multiple"] ?? null)) {
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 32
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
                    echo "[]\"";
                    if (($context["disabled"] ?? null)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 35
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["disabled"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["value"] ?? null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 37
        echo "</div>

    <script>
        (function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 43
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 44
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 50
        $context["allowClearPlaceholder"] = ((( !($context["multiple"] ?? null) &&  !($context["required"] ?? null))) ? (" ") : (""));
        // line 51
        echo "placeholder: '";
        echo twig_escape_filter($this->env, ((($context["placeholder"] ?? null)) ? (($context["placeholder"] ?? null)) : (($context["allowClearPlaceholder"] ?? null))), "html", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 52
        echo ((($context["required"] ?? null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 53
        echo ((($context["disabled"] ?? null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 54
        echo ((((array_key_exists("read_only", $context) && ($context["read_only"] ?? null)) || ($this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "readonly", array())))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 55
        echo twig_escape_filter($this->env, ($context["minimum_input_length"] ?? null), "html", null, true);
        echo ",
                multiple: ";
        // line 56
        echo ((($context["multiple"] ?? null)) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 62
        echo ((($context["dropdown_auto_width"] ?? null)) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 63
        echo twig_escape_filter($this->env, (($context["container_css_class"] ?? null) . " form-control"), "html", null, true);
        echo "',
                dropdownCssClass: '";
        // line 64
        echo twig_escape_filter($this->env, ($context["dropdown_css_class"] ?? null), "html", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 66
        echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (($context["url"] ?? null)) : (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["route"] ?? null), "name", array()), (($this->getAttribute(($context["route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route"] ?? null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 68
        echo twig_escape_filter($this->env, ($context["quiet_millis"] ?? null), "html", null, true);
        echo ",
                    cache: ";
        // line 69
        echo ((($context["cache"] ?? null)) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 78
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 118
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 126
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 133
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 179
        if (($context["multiple"] ?? null)) {
            // line 180
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 187
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 190
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 192
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 200
        if (($context["multiple"] ?? null)) {
            // line 201
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 208
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 211
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 213
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 219
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 220
            echo "data =";
            if (($context["multiple"] ?? null)) {
                echo "[";
            }
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 222
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 223
                    echo "{id: '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["val"], "js"), "html", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["value"] ?? null), "_labels", array(), "array"), $context["idx"], array(), "array"), "js"), "html", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            if (($context["multiple"] ?? null)) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 228
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        // line 79
        echo "                        return {
                                //search term
                                '";
        // line 81
        echo twig_escape_filter($this->env, ($context["req_param_name_search"] ?? null), "html", null, true);
        echo "': term,

                                // page size
                                '";
        // line 84
        echo twig_escape_filter($this->env, ($context["req_param_name_items_per_page"] ?? null), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ",

                                // page number
                                '";
        // line 87
        echo twig_escape_filter($this->env, ($context["req_param_name_page_number"] ?? null), "html", null, true);
        echo "': page,

                                // admin
                                ";
        // line 90
        if ( !(null === $this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()))) {
            // line 91
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "uniqid", array()), "html", null, true);
            echo "',
                                    'admin_code': '";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "code", array()), "html", null, true);
            echo "',
                                ";
        } elseif (        // line 93
($context["admin_code"] ?? null)) {
            // line 94
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, ($context["admin_code"] ?? null), "html", null, true);
            echo "',
                                ";
        }
        // line 96
        echo "
                                 // subclass
                                ";
        // line 98
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 99
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "html", null, true);
            echo "',
                                ";
        }
        // line 101
        echo "
                                ";
        // line 102
        if ((($context["context"] ?? null) == "filter")) {
            // line 103
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["full_name"] ?? null), array("filter[" => "", "][value]" => "", "__" => ".")), "html", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 106
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "'
                                ";
        }
        // line 108
        echo "
                                // other parameters
                                ";
        // line 110
        if ( !twig_test_empty(($context["req_params"] ?? null))) {
            echo ",";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["req_params"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 112
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "'";
                // line 113
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 116
        echo "                        };
                        ";
    }

    // line 126
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<div class=\"";
        echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? null), "html", null, true);
        echo "\">'+item.label+'<\\/div>'";
    }

    // line 133
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 133,  533 => 126,  528 => 116,  511 => 113,  505 => 112,  488 => 111,  485 => 110,  481 => 108,  475 => 106,  468 => 103,  466 => 102,  463 => 101,  457 => 99,  455 => 98,  451 => 96,  445 => 94,  443 => 93,  439 => 92,  434 => 91,  432 => 90,  426 => 87,  418 => 84,  412 => 81,  408 => 79,  405 => 78,  386 => 228,  379 => 225,  365 => 223,  361 => 222,  350 => 221,  345 => 220,  343 => 219,  337 => 213,  332 => 211,  325 => 208,  316 => 201,  314 => 200,  304 => 192,  299 => 190,  294 => 187,  285 => 180,  283 => 179,  234 => 133,  224 => 126,  214 => 118,  212 => 78,  200 => 69,  196 => 68,  191 => 66,  186 => 64,  182 => 63,  178 => 62,  169 => 56,  165 => 55,  161 => 54,  157 => 53,  153 => 52,  148 => 51,  146 => 50,  136 => 44,  130 => 43,  122 => 37,  110 => 35,  94 => 32,  89 => 31,  87 => 30,  83 => 29,  79 => 27,  68 => 25,  63 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  46 => 19,  42 => 17,  38 => 16,  34 => 15,  30 => 14,  27 => 13,  24 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Form\\Type\\sonata_type_model_autocomplete.html.twig");
    }
}
