<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_72157b3b8a1aff279b7d668026394b2750e30324fde149060c957319c800dba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && ($context["sonata_help"] ?? null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? null) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        // line 53
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
($context["money_pattern"] ?? null))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !(($context["label"] ?? null) === false) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !(($context["label"] ?? null) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["label_class"] ?? null))));
            // line 114
            echo "
        ";
            // line 115
            if ( !($context["compound"] ?? null)) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 124
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 125
($context["name"] ?? null), "%id%" =>                     // line 126
($context["id"] ?? null)));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
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
            echo ">
            ";
            // line 134
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 135
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ( !$this->getAttribute(            // line 136
($context["sonata_admin"] ?? null), "admin", array())) {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 146
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 147
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 150
    public function block_radio_label($context, array $blocks = array())
    {
        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 154
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        if ($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
            // line 156
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array());
            // line 157
            echo "    ";
        }
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 160
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 167
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                // line 168
                echo "        ";
            }
            // line 169
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
            // line 170
            echo ($context["widget"] ?? null);
            // line 171
            if ( !(($context["label"] ?? null) === false)) {
                // line 172
                echo "<span class=\"control-label__text\">";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                // line 174
                echo "</span>";
            }
            // line 176
            echo "</label>
    ";
        }
    }

    // line 180
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 181
        ob_start();
        // line 182
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 183
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "        <li>
            ";
            // line 186
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 187
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 193
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 194
        ob_start();
        // line 195
        echo "    ";
        if (((($context["required"] ?? null) && array_key_exists("placeholder", $context)) && (null === ($context["placeholder"] ?? null)))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        } elseif ((((((($context["required"] ?? null) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 198
            echo "        ";
            $context["required"] = false;
            // line 199
            echo "    ";
        }
        // line 200
        echo "
    ";
        // line 201
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 202
        echo "    ";
        if (((array_key_exists("sortable", $context) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 203
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 205
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 206
            if ((array_key_exists("empty_value", $context) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 207
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 208
                if ( !$this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 213
                echo "                </option>
            ";
            } elseif ((            // line 214
array_key_exists("placeholder", $context) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 215
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 216
                if ( !$this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 221
                echo "                </option>
            ";
            }
            // line 223
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 224
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 225
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 226
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 227
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 229
                echo "            ";
            }
            // line 230
            echo "            ";
            $context["options"] = ($context["choices"] ?? null);
            // line 231
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 237
    public function block_date_widget($context, array $blocks = array())
    {
        // line 238
        ob_start();
        // line 239
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 240
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 242
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 243
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 244
                echo "        ";
            }
            // line 245
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 246
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 247
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (((("<div class=\"" .             // line 248
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 249
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 250
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 251
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 257
    public function block_time_widget($context, array $blocks = array())
    {
        // line 258
        ob_start();
        // line 259
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 260
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 262
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 263
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 264
                echo "        ";
            }
            // line 265
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 266
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 267
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 270
            if (($context["with_minutes"] ?? null)) {
                // line 271
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 272
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 275
            echo "            ";
            if (($context["with_seconds"] ?? null)) {
                // line 276
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 277
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 280
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 285
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 286
        ob_start();
        // line 287
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 288
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 290
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 291
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            echo "
            ";
            // line 293
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            echo "

            ";
            // line 295
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 296
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 297
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 300
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 302
            echo "
            ";
            // line 303
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 304
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 305
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 308
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 310
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 315
    public function block_form_row($context, array $blocks = array())
    {
        // line 316
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter(($context["show_label"] ?? null), true)) : (true));
        // line 317
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 318
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 319
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? null))) : (($context["label"] ?? null)));
            // line 320
            echo "        ";
        }
        // line 321
        echo "
        ";
        // line 322
        $context["div_class"] = "sonata-ba-field";
        // line 323
        echo "
        ";
        // line 324
        if ((($context["label"] ?? null) === false)) {
            // line 325
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
            // line 326
            echo "        ";
        }
        // line 327
        echo "
        ";
        // line 328
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 329
            echo "            ";
            // line 330
            echo "            ";
            if (((($context["label"] ?? null) === false) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 331
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                    // line 333
                    echo "                ";
                } else {
                    // line 334
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                    // line 335
                    echo "                ";
                }
                // line 336
                echo "            ";
            } else {
                // line 337
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
                // line 338
                echo "            ";
            }
            // line 339
            echo "        ";
        }
        // line 340
        echo "
        ";
        // line 341
        if (($context["show_label"] ?? null)) {
            // line 342
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 344
        echo "
        ";
        // line 345
        if ((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 346
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . $this->getAttribute(($context["sonata_admin"] ?? null), "edit", array())) . "-") . $this->getAttribute(($context["sonata_admin"] ?? null), "inline", array()));
            // line 347
            echo "        ";
        }
        // line 348
        echo "
        ";
        // line 349
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 350
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
            // line 351
            echo "        ";
        }
        // line 352
        echo "
        <div class=\"";
        // line 353
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 355
        echo "
            ";
        // line 356
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 357
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 358
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 361
        echo "
            ";
        // line 362
        if (((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null)) && (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 363
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? null), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 365
        echo "        </div>
    </div>
";
    }

    // line 369
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 370
        $context["show_label"] = false;
        // line 371
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 374
    public function block_radio_row($context, array $blocks = array())
    {
        // line 375
        $context["show_label"] = false;
        // line 376
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 379
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 380
        ob_start();
        // line 381
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 382
        if (($context["allow_delete"] ?? null)) {
            // line 383
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 391
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'row', array("label" => false));
        echo "
        ";
        // line 392
        if (($context["allow_delete"] ?? null)) {
            // line 393
            echo "                </div>
            </div>
        ";
        }
        // line 396
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 400
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 401
        ob_start();
        // line 402
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 403
            echo "        ";
            $context["child"] = ($context["prototype"] ?? null);
            // line 404
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 405
            echo "        ";
            $context["allow_delete"] = true;
            // line 406
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", array()), "name", array()), "class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 407
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
            // line 408
            echo "    ";
        }
        // line 409
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 412
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 415
        if (($context["allow_add"] ?? null)) {
            // line 416
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 418
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 422
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 423
        echo "    ";
        ob_start();
        // line 424
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 425
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

            ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 428
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "
            ";
        // line 431
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 436
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 437
        echo "    ";
        ob_start();
        // line 438
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'label');
        echo "

            ";
        // line 442
        $context["div_class"] = "";
        // line 443
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 444
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 445
            echo "            ";
        }
        // line 446
        echo "
            <div class=\"";
        // line 447
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 448
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 449
        echo "            </div>

            ";
        // line 451
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 452
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 453
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 456
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 460
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 461
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "SonataAdminBundle:Form:form_admin_fields.html.twig", 461)->display($context);
    }

    // line 464
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 465
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 466
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, (twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))));
        // line 467
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 469
        echo twig_jsonencode_filter(($context["all_fields"] ?? null));
        echo ";
            var map = ";
        // line 470
        echo twig_jsonencode_filter(($context["map"] ?? null));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 472
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 481
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
    }

    // line 504
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        // line 505
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 509
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1310 => 509,  1298 => 505,  1295 => 504,  1269 => 481,  1256 => 472,  1251 => 470,  1247 => 469,  1243 => 467,  1241 => 466,  1236 => 465,  1233 => 464,  1228 => 461,  1225 => 460,  1219 => 456,  1213 => 453,  1210 => 452,  1208 => 451,  1204 => 449,  1201 => 448,  1189 => 447,  1186 => 446,  1183 => 445,  1180 => 444,  1177 => 443,  1175 => 442,  1170 => 440,  1158 => 438,  1155 => 437,  1152 => 436,  1144 => 431,  1141 => 430,  1124 => 428,  1107 => 427,  1102 => 425,  1097 => 424,  1094 => 423,  1091 => 422,  1085 => 418,  1081 => 416,  1079 => 415,  1074 => 414,  1057 => 412,  1040 => 411,  1036 => 410,  1031 => 409,  1028 => 408,  1025 => 407,  1022 => 406,  1019 => 405,  1016 => 404,  1013 => 403,  1010 => 402,  1008 => 401,  1005 => 400,  999 => 396,  994 => 393,  992 => 392,  987 => 391,  977 => 383,  975 => 382,  972 => 381,  970 => 380,  967 => 379,  962 => 376,  960 => 375,  957 => 374,  952 => 371,  950 => 370,  947 => 369,  941 => 365,  935 => 363,  933 => 362,  930 => 361,  924 => 358,  921 => 357,  919 => 356,  916 => 355,  913 => 354,  909 => 353,  906 => 352,  903 => 351,  900 => 350,  898 => 349,  895 => 348,  892 => 347,  889 => 346,  887 => 345,  884 => 344,  878 => 342,  876 => 341,  873 => 340,  870 => 339,  867 => 338,  864 => 337,  861 => 336,  858 => 335,  855 => 334,  852 => 333,  849 => 332,  846 => 331,  843 => 330,  841 => 329,  839 => 328,  836 => 327,  833 => 326,  830 => 325,  828 => 324,  825 => 323,  823 => 322,  820 => 321,  817 => 320,  814 => 319,  812 => 318,  803 => 317,  800 => 316,  797 => 315,  790 => 310,  784 => 308,  778 => 305,  775 => 304,  773 => 303,  770 => 302,  764 => 300,  758 => 297,  755 => 296,  753 => 295,  748 => 293,  744 => 292,  739 => 291,  736 => 290,  730 => 288,  727 => 287,  725 => 286,  722 => 285,  715 => 280,  709 => 277,  704 => 276,  701 => 275,  695 => 272,  690 => 271,  688 => 270,  683 => 268,  679 => 267,  674 => 266,  671 => 265,  668 => 264,  665 => 263,  662 => 262,  656 => 260,  653 => 259,  651 => 258,  648 => 257,  640 => 251,  638 => 250,  637 => 249,  636 => 248,  635 => 247,  630 => 246,  627 => 245,  624 => 244,  621 => 243,  618 => 242,  612 => 240,  609 => 239,  607 => 238,  604 => 237,  594 => 231,  591 => 230,  588 => 229,  582 => 227,  580 => 226,  575 => 225,  572 => 224,  569 => 223,  565 => 221,  562 => 219,  559 => 217,  557 => 216,  550 => 215,  548 => 214,  545 => 213,  542 => 211,  539 => 209,  537 => 208,  530 => 207,  528 => 206,  520 => 205,  514 => 203,  511 => 202,  509 => 201,  506 => 200,  503 => 199,  500 => 198,  497 => 197,  494 => 196,  491 => 195,  489 => 194,  486 => 193,  480 => 189,  473 => 187,  470 => 186,  467 => 185,  463 => 184,  458 => 183,  455 => 182,  453 => 181,  450 => 180,  444 => 176,  441 => 174,  439 => 173,  437 => 172,  435 => 171,  433 => 170,  418 => 169,  415 => 168,  412 => 167,  409 => 166,  406 => 165,  403 => 164,  400 => 163,  397 => 162,  394 => 161,  391 => 160,  388 => 159,  386 => 158,  383 => 157,  380 => 156,  377 => 155,  374 => 154,  370 => 151,  367 => 150,  363 => 147,  360 => 146,  353 => 141,  347 => 139,  344 => 137,  342 => 136,  340 => 135,  338 => 134,  323 => 133,  320 => 132,  316 => 129,  313 => 126,  312 => 125,  311 => 124,  309 => 123,  307 => 122,  304 => 121,  301 => 120,  298 => 119,  295 => 118,  292 => 117,  289 => 116,  287 => 115,  284 => 114,  281 => 113,  279 => 112,  276 => 111,  274 => 110,  271 => 109,  268 => 108,  265 => 107,  262 => 106,  260 => 105,  257 => 104,  252 => 99,  250 => 98,  248 => 97,  245 => 95,  243 => 94,  241 => 93,  238 => 92,  233 => 88,  231 => 87,  229 => 86,  226 => 84,  224 => 83,  222 => 82,  219 => 81,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  193 => 68,  189 => 66,  187 => 65,  184 => 64,  181 => 63,  179 => 62,  173 => 60,  171 => 59,  169 => 58,  166 => 57,  163 => 56,  160 => 54,  158 => 53,  155 => 52,  148 => 49,  145 => 48,  142 => 47,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  116 => 36,  112 => 35,  109 => 34,  100 => 29,  98 => 28,  96 => 27,  93 => 26,  88 => 23,  84 => 22,  81 => 21,  72 => 19,  68 => 18,  65 => 17,  60 => 16,  58 => 15,  55 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form:form_admin_fields.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
