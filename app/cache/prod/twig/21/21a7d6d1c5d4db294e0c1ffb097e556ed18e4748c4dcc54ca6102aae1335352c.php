<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_5027c211534c201f9ababdfc13a2c679b029d910a36eb278d94ea98dda534558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? null), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? null), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? null), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? null), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? null), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 58
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        // line 63
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 70
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if (($context["prepend"] ?? null)) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 88
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 115
                echo "</div>";
            }
        }
    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        // line 121
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 130
                echo "</div>";
            }
        }
    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 136
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 186
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        // line 208
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        // line 214
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                // line 237
                echo "        ";
            }
            // line 238
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 239
            echo ($context["widget"] ?? null);
            // line 240
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = ($context["_field_label"] ?? null)) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 254
        if ((twig_in_filter(($context["_field_type"] ?? null), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo ($context["js_add_item"] ?? null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 310
        echo "</div>";
    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 334
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 337
        echo "</div>";
    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 344
        echo "</div>";
    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? null));
        // line 350
        echo "    ";
        if ((($context["error_count"] ?? null) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? null), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if ((($context["error_count"] ?? null) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? null)), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 367
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty(($context["value"] ?? null)) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? null));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? null), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
($context["easyadmin"] ?? null), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
($context["easyadmin"] ?? null), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? null), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
($context["easyadmin"] ?? null), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
($context["_entity_actions"] ?? null), "request_parameters" =>         // line 510
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 511
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 512
($context["_trans_parameters"] ?? null), "item_id" =>         // line 513
($context["_entity_id"] ?? null)), false);
        // line 514
        echo "
                    ";
    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        // line 524
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
($context["attr"] ?? null), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
($context["autocomplete_entity_name"] ?? null)))))));
        // line 532
        echo "
";
    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1430 => 561,  1424 => 559,  1422 => 558,  1419 => 557,  1412 => 554,  1406 => 553,  1403 => 552,  1401 => 551,  1396 => 550,  1393 => 549,  1390 => 548,  1383 => 542,  1380 => 541,  1376 => 537,  1373 => 536,  1370 => 535,  1365 => 532,  1363 => 529,  1362 => 525,  1360 => 524,  1357 => 523,  1352 => 514,  1350 => 513,  1349 => 512,  1348 => 511,  1347 => 510,  1346 => 509,  1345 => 508,  1342 => 507,  1340 => 506,  1337 => 505,  1335 => 504,  1334 => 502,  1331 => 501,  1329 => 500,  1328 => 499,  1327 => 498,  1321 => 495,  1318 => 494,  1316 => 493,  1313 => 492,  1305 => 516,  1303 => 492,  1295 => 486,  1289 => 485,  1279 => 482,  1274 => 481,  1268 => 480,  1259 => 475,  1249 => 472,  1244 => 471,  1239 => 470,  1235 => 468,  1229 => 466,  1227 => 465,  1223 => 463,  1215 => 459,  1209 => 457,  1207 => 456,  1203 => 454,  1201 => 453,  1195 => 451,  1190 => 450,  1184 => 447,  1181 => 446,  1175 => 444,  1173 => 443,  1170 => 442,  1167 => 441,  1164 => 440,  1161 => 439,  1155 => 434,  1149 => 431,  1145 => 430,  1139 => 427,  1135 => 426,  1132 => 425,  1129 => 424,  1127 => 423,  1124 => 422,  1118 => 420,  1116 => 419,  1112 => 418,  1109 => 417,  1107 => 416,  1104 => 415,  1097 => 412,  1094 => 411,  1091 => 410,  1081 => 403,  1076 => 402,  1070 => 399,  1067 => 398,  1065 => 397,  1061 => 395,  1053 => 393,  1050 => 392,  1048 => 391,  1045 => 390,  1043 => 389,  1040 => 388,  1033 => 385,  1030 => 384,  1027 => 383,  1020 => 379,  1017 => 378,  1014 => 377,  1010 => 374,  1007 => 373,  1004 => 372,  1001 => 371,  998 => 370,  992 => 368,  990 => 367,  987 => 366,  981 => 362,  977 => 360,  968 => 358,  964 => 357,  961 => 356,  955 => 354,  953 => 353,  949 => 352,  946 => 351,  943 => 350,  940 => 349,  937 => 348,  933 => 344,  931 => 343,  929 => 342,  921 => 341,  918 => 340,  914 => 337,  912 => 336,  910 => 335,  902 => 334,  899 => 333,  895 => 330,  893 => 329,  890 => 328,  886 => 325,  884 => 324,  881 => 323,  877 => 320,  875 => 319,  872 => 318,  868 => 315,  866 => 314,  863 => 313,  859 => 310,  857 => 309,  851 => 308,  848 => 307,  839 => 301,  834 => 299,  830 => 297,  816 => 288,  810 => 287,  799 => 279,  794 => 276,  791 => 275,  789 => 274,  783 => 272,  780 => 271,  776 => 268,  770 => 266,  768 => 265,  766 => 263,  759 => 258,  753 => 257,  749 => 255,  747 => 254,  745 => 252,  743 => 251,  741 => 250,  732 => 249,  730 => 248,  727 => 247,  721 => 241,  719 => 240,  717 => 239,  702 => 238,  699 => 237,  696 => 236,  693 => 235,  690 => 234,  687 => 233,  684 => 232,  681 => 231,  678 => 230,  675 => 229,  672 => 228,  670 => 227,  667 => 226,  663 => 223,  660 => 222,  656 => 219,  653 => 218,  649 => 215,  647 => 214,  644 => 212,  640 => 209,  638 => 208,  635 => 207,  630 => 201,  628 => 200,  626 => 199,  623 => 197,  621 => 196,  619 => 195,  616 => 194,  611 => 190,  609 => 189,  607 => 188,  604 => 186,  602 => 185,  600 => 184,  597 => 183,  592 => 179,  586 => 176,  585 => 175,  581 => 174,  577 => 173,  574 => 171,  568 => 168,  567 => 167,  563 => 166,  561 => 165,  559 => 164,  556 => 163,  547 => 157,  542 => 155,  538 => 153,  525 => 143,  520 => 140,  517 => 139,  515 => 138,  513 => 137,  511 => 136,  508 => 135,  502 => 130,  499 => 129,  491 => 128,  486 => 126,  484 => 125,  482 => 124,  479 => 122,  477 => 121,  474 => 120,  468 => 115,  466 => 114,  464 => 112,  463 => 111,  462 => 110,  461 => 109,  456 => 107,  454 => 106,  452 => 105,  449 => 103,  447 => 102,  444 => 101,  439 => 97,  437 => 96,  435 => 95,  433 => 94,  431 => 93,  427 => 92,  425 => 91,  422 => 89,  420 => 88,  417 => 87,  412 => 83,  410 => 82,  408 => 81,  405 => 80,  401 => 77,  395 => 75,  393 => 74,  391 => 73,  385 => 71,  382 => 70,  380 => 69,  377 => 68,  374 => 67,  370 => 64,  368 => 63,  365 => 62,  361 => 59,  359 => 58,  356 => 57,  352 => 54,  349 => 52,  347 => 51,  344 => 50,  335 => 44,  330 => 42,  326 => 40,  313 => 30,  308 => 27,  305 => 26,  303 => 25,  301 => 23,  298 => 22,  294 => 17,  291 => 15,  289 => 13,  288 => 12,  287 => 11,  286 => 9,  285 => 8,  284 => 7,  282 => 5,  280 => 4,  277 => 3,  273 => 548,  270 => 546,  268 => 541,  265 => 539,  263 => 535,  260 => 534,  258 => 523,  255 => 521,  253 => 439,  250 => 437,  248 => 415,  245 => 414,  243 => 410,  240 => 409,  238 => 388,  235 => 387,  233 => 383,  230 => 382,  228 => 377,  226 => 366,  224 => 348,  221 => 346,  219 => 340,  216 => 339,  214 => 333,  211 => 332,  209 => 328,  206 => 327,  204 => 323,  201 => 322,  199 => 318,  196 => 317,  194 => 313,  191 => 312,  189 => 307,  186 => 306,  184 => 271,  181 => 270,  179 => 247,  176 => 246,  173 => 244,  171 => 226,  168 => 225,  166 => 222,  163 => 221,  161 => 218,  158 => 217,  156 => 212,  153 => 211,  151 => 207,  148 => 206,  145 => 204,  143 => 194,  140 => 193,  138 => 183,  135 => 182,  133 => 163,  130 => 162,  128 => 135,  125 => 134,  123 => 120,  120 => 119,  118 => 101,  115 => 100,  113 => 87,  110 => 86,  108 => 80,  105 => 79,  103 => 67,  100 => 66,  98 => 62,  95 => 61,  93 => 57,  90 => 56,  88 => 50,  85 => 49,  83 => 22,  80 => 21,  77 => 19,  75 => 3,  72 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
