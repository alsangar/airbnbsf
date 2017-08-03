<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig */
class __TwigTemplate_ce36f925953272247ef380e8c3edee6a14580fd10fce73349449a14d9107b89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo ($context["id"] ?? null);
        echo "();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo ($context["id"] ?? null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo ($context["id"] ?? null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo ($context["id"] ?? null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo ($context["id"] ?? null);
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo ($context["id"] ?? null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo ($context["id"] ?? null);
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_list_link_";
        echo ($context["id"] ?? null);
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo ($context["id"] ?? null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo ($context["id"] ?? null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo ($context["id"] ?? null);
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo ($context["id"] ?? null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo ($context["id"] ?? null);
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["associationadmin"] ?? null), "label", array()), array(), $this->getAttribute(($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo ($context["id"] ?? null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo ($context["id"] ?? null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 160
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["associationadmin"] ?? null), "label", array()), array(), $this->getAttribute(($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 178
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 190
        echo ($context["id"] ?? null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 203
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 210
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 212
        echo ($context["id"] ?? null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 226
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 236
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 244
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 249
        echo ($context["id"] ?? null);
        echo ".modal('hide');

                    ";
        // line 251
        if (($this->getAttribute(($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 252
            echo "                        ";
            // line 256
            echo "                        jQuery('#";
            echo ($context["id"] ?? null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 257
            echo ($context["id"] ?? null);
            echo "').change();

                    ";
        } else {
            // line 260
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 262
            echo ($context["id"] ?? null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 263
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", array("elementId" =>             // line 264
($context["id"] ?? null), "subclass" => $this->getAttribute($this->getAttribute(            // line 265
($context["sonata_admin"] ?? null), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 266
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 267
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "uniqid", array()), "code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 268
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "code", array())));
            // line 269
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 274
            echo ($context["id"] ?? null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 275
            echo ($context["id"] ?? null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 282
            echo ($context["id"] ?? null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 287
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 292
        echo ($context["id"] ?? null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 294
        echo ($context["id"] ?? null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 297
        echo ($context["id"] ?? null);
        echo ").submit(field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 304
        echo ($context["id"] ?? null);
        echo "         = false;
    var field_dialog_content_";
        // line 305
        echo ($context["id"] ?? null);
        echo " = false;
    var field_dialog_title_";
        // line 306
        echo ($context["id"] ?? null);
        echo "   = false;

    function initialize_popup_";
        // line 308
        echo ($context["id"] ?? null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 310
        echo ($context["id"] ?? null);
        echo ") {
            field_dialog_";
        // line 311
        echo ($context["id"] ?? null);
        echo "         = jQuery(\"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_content_";
        // line 312
        echo ($context["id"] ?? null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_title_";
        // line 313
        echo ($context["id"] ?? null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 316
        echo ($context["id"] ?? null);
        echo ");

            Admin.log('[";
        // line 318
        echo ($context["id"] ?? null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 325
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 327
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 332
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 336
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 343
        echo ($context["id"] ?? null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 344
        echo ($context["id"] ?? null);
        echo ");
    }

    ";
        // line 347
        if (($this->getAttribute(($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 348
            echo "        ";
            // line 351
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 353
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 357
            echo ($context["id"] ?? null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 361
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 368
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 373
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 380
            echo ($context["id"] ?? null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 383
            echo ($context["id"] ?? null);
            echo " option').get(0)) {
                jQuery('#";
            // line 384
            echo ($context["id"] ?? null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 387
            echo ($context["id"] ?? null);
            echo "').val('');
            jQuery('#";
            // line 388
            echo ($context["id"] ?? null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 395
            echo "
        // update the label
        jQuery('#";
            // line 397
            echo ($context["id"] ?? null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 399
            echo ($context["id"] ?? null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 401
            echo ($context["id"] ?? null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 404
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute(            // line 406
($context["associationadmin"] ?? null), "uniqid", array()), "code" => $this->getAttribute(            // line 407
($context["associationadmin"] ?? null), "code", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 408
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 409
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 412
            echo ($context["id"] ?? null);
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 418
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 418,  723 => 412,  718 => 409,  716 => 408,  715 => 407,  714 => 406,  713 => 404,  703 => 401,  698 => 399,  693 => 397,  689 => 395,  682 => 388,  678 => 387,  672 => 384,  668 => 383,  662 => 380,  652 => 373,  644 => 368,  634 => 361,  627 => 357,  620 => 353,  616 => 351,  614 => 348,  612 => 347,  606 => 344,  602 => 343,  592 => 336,  585 => 332,  577 => 327,  573 => 325,  566 => 318,  561 => 316,  553 => 313,  547 => 312,  541 => 311,  537 => 310,  532 => 308,  527 => 306,  523 => 305,  519 => 304,  507 => 297,  501 => 294,  496 => 292,  489 => 287,  481 => 282,  471 => 275,  467 => 274,  460 => 269,  458 => 268,  457 => 267,  456 => 266,  455 => 265,  454 => 264,  453 => 263,  449 => 262,  445 => 260,  439 => 257,  434 => 256,  432 => 252,  430 => 251,  425 => 249,  417 => 244,  406 => 236,  393 => 226,  376 => 212,  371 => 210,  361 => 203,  345 => 190,  336 => 184,  331 => 182,  323 => 179,  317 => 178,  310 => 174,  303 => 172,  299 => 171,  291 => 168,  280 => 160,  275 => 158,  265 => 151,  261 => 150,  252 => 144,  247 => 142,  241 => 139,  236 => 137,  229 => 135,  224 => 133,  218 => 130,  207 => 122,  200 => 118,  192 => 113,  187 => 111,  177 => 104,  172 => 102,  168 => 101,  163 => 99,  151 => 90,  143 => 85,  137 => 84,  130 => 80,  126 => 79,  119 => 75,  114 => 73,  110 => 72,  105 => 70,  95 => 63,  90 => 61,  86 => 60,  81 => 58,  71 => 51,  64 => 47,  59 => 45,  45 => 34,  41 => 33,  38 => 32,  31 => 22,  29 => 21,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_many_association_script.html.twig");
    }
}
