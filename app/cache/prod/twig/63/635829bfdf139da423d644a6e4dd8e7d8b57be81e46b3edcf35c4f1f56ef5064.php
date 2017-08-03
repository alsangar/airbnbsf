<?php

/* EasyAdminBundle:css:easyadmin.css.twig */
class __TwigTemplate_41404190fd137d6282aa396941bfdaf6668aa9a74ff9ccdfcd4bb42c50fb84db extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute(($context["color_schemes"] ?? null), ($context["color_scheme"] ?? null), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo $this->getAttribute(($context["colors"] ?? null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 113
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 117
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 161
        echo ".toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 185
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    border-color: ";
        // line 186
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 187
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 196
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: ";
        // line 197
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 198
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 206
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 222
        echo "span.badge {
    background-color: ";
        // line 223
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 228
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 245
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 246
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 247
($context["color_scheme"] ?? null))) {
            // line 248
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 250
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 253
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 267
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 269
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 284
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 286
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 294
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 296
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

";
        // line 300
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 306
        echo ($context["brand_color"] ?? null);
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 334
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 339
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 341
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 342
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 344
        echo "    color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 349
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 350
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 352
($context["color_scheme"] ?? null))) {
            // line 353
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 355
        echo "}

.has-error .error-block {
    color: ";
        // line 358
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 374
        echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 384
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 385
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 386
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 387
($context["color_scheme"] ?? null))) {
            // line 388
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 389
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 391
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 393
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 394
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 397
        echo "    z-index: 9999;
}

";
        // line 402
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 408
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 413
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 414
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 415
($context["color_scheme"] ?? null))) {
            // line 416
            echo "    border-top-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 418
        echo "}
.field-group .field-divider hr {
";
        // line 420
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 421
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 422
($context["color_scheme"] ?? null))) {
            // line 423
            echo "    border-top-color: #EEE;
";
        }
        // line 425
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 431
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 432
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    color: ";
            // line 433
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 434
($context["color_scheme"] ?? null))) {
            // line 435
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 436
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 438
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 442
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 443
            echo "    color: #555;
";
        } elseif (("light" ==         // line 444
($context["color_scheme"] ?? null))) {
            // line 445
            echo "    color: #777;
";
        }
        // line 447
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 454
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 455
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 456
($context["color_scheme"] ?? null))) {
            // line 457
            echo "    border: 1px solid #EEE;
";
        }
        // line 459
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 462
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 463
            echo "    color: #555;
";
        } elseif (("light" ==         // line 464
($context["color_scheme"] ?? null))) {
            // line 465
            echo "    color: #777;
";
        }
        // line 467
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 470
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 471
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 473
($context["color_scheme"] ?? null))) {
            // line 474
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 476
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 478
        echo "    padding: 11px 10px 9px;
}
";
        // line 480
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 481
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 485
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 495
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 499
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 502
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 510
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 517
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 521
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 524
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 527
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 533
        echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 546
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 547
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 548
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 561
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 571
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 572
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 573
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 595
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 603
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 604
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 610
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 618
        echo "
";
        // line 621
        echo ".content-wrapper {
    background: ";
        // line 622
        echo $this->getAttribute(($context["colors"] ?? null), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 630
        echo ".main-header {
    background: ";
        // line 631
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 635
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 637
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 662
        echo ($context["brand_color"] ?? null);
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 681
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 738
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 754
        echo ".main-sidebar,
.wrapper {
";
        // line 756
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 757
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 758
($context["color_scheme"] ?? null))) {
            // line 759
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 761
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 767
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 768
            echo "    color: #777;
";
        } elseif (("light" ==         // line 769
($context["color_scheme"] ?? null))) {
            // line 770
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        }
        // line 772
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 777
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 778
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 779
($context["color_scheme"] ?? null))) {
            // line 780
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 782
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 799
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 800
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 802
($context["color_scheme"] ?? null))) {
            // line 803
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 805
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 811
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 812
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 813
($context["color_scheme"] ?? null))) {
            // line 814
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 816
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 825
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 826
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 829
($context["color_scheme"] ?? null))) {
            // line 830
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 833
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 842
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 847
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 853
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 870
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 871
            echo "    background: #333;
";
        } elseif (("light" ==         // line 872
($context["color_scheme"] ?? null))) {
            // line 873
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 875
        echo "}

";
        // line 878
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 879
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 880
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 881
($context["color_scheme"] ?? null))) {
            // line 882
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 884
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 894
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 899
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 900
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 901
($context["color_scheme"] ?? null))) {
            // line 902
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 904
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        }
        // line 906
        echo "    margin: 10px 0 5px;
}

";
        // line 912
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 948
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 961
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
";
        // line 962
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 963
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 964
($context["color_scheme"] ?? null))) {
            // line 965
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 967
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 971
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1012
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1025
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1032
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1033
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1034
($context["color_scheme"] ?? null))) {
            // line 1035
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 1037
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1039
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    border-color: ";
        // line 1040
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1042
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1045
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1046
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1058
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1066
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1068
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-size: 16px;
    position: absolute;
}

";
        // line 1076
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1098
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1120
        echo "body.show .form-control {
";
        // line 1121
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1122
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1123
($context["color_scheme"] ?? null))) {
            // line 1124
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 1126
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1140
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1145
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1146
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1147
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1152
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 1153
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1169
        echo "
";
        // line 1173
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1197
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1244
        echo "    body.list table {
        background: ";
        // line 1245
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1246
        echo $this->getAttribute(($context["colors"] ?? null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1252
        echo $this->getAttribute(($context["colors"] ?? null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1256
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1261
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1267
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1272
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1273
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1274
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        }
        // line 1276
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1279
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1280
            echo "        color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1281
($context["color_scheme"] ?? null))) {
            // line 1282
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1284
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1292
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1295
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1298
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1299
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1300
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1301
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1303
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1305
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1314
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1322
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1323
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1326
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1366
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:css:easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1859 => 1366,  1818 => 1326,  1812 => 1323,  1808 => 1322,  1797 => 1314,  1785 => 1305,  1781 => 1303,  1776 => 1301,  1771 => 1300,  1769 => 1299,  1766 => 1298,  1761 => 1295,  1755 => 1292,  1745 => 1284,  1739 => 1282,  1737 => 1281,  1732 => 1280,  1730 => 1279,  1725 => 1276,  1720 => 1274,  1715 => 1273,  1713 => 1272,  1705 => 1267,  1696 => 1261,  1688 => 1256,  1681 => 1252,  1672 => 1246,  1668 => 1245,  1665 => 1244,  1617 => 1197,  1592 => 1173,  1589 => 1169,  1573 => 1153,  1569 => 1152,  1561 => 1147,  1557 => 1146,  1553 => 1145,  1546 => 1140,  1533 => 1126,  1527 => 1124,  1525 => 1123,  1520 => 1122,  1518 => 1121,  1515 => 1120,  1494 => 1098,  1473 => 1076,  1465 => 1068,  1461 => 1066,  1454 => 1058,  1442 => 1046,  1438 => 1045,  1432 => 1042,  1427 => 1040,  1423 => 1039,  1419 => 1037,  1413 => 1035,  1411 => 1034,  1406 => 1033,  1404 => 1032,  1395 => 1025,  1382 => 1012,  1340 => 971,  1334 => 967,  1328 => 965,  1326 => 964,  1321 => 963,  1319 => 962,  1315 => 961,  1300 => 948,  1264 => 912,  1259 => 906,  1254 => 904,  1250 => 902,  1248 => 901,  1243 => 900,  1241 => 899,  1234 => 894,  1225 => 884,  1221 => 882,  1219 => 881,  1216 => 880,  1214 => 879,  1211 => 878,  1207 => 875,  1201 => 873,  1199 => 872,  1196 => 871,  1194 => 870,  1175 => 853,  1168 => 847,  1162 => 842,  1152 => 833,  1147 => 830,  1145 => 829,  1138 => 826,  1136 => 825,  1125 => 816,  1119 => 814,  1117 => 813,  1114 => 812,  1112 => 811,  1104 => 805,  1098 => 803,  1096 => 802,  1092 => 800,  1090 => 799,  1071 => 782,  1065 => 780,  1063 => 779,  1060 => 778,  1058 => 777,  1051 => 772,  1045 => 770,  1043 => 769,  1040 => 768,  1038 => 767,  1030 => 761,  1024 => 759,  1022 => 758,  1019 => 757,  1017 => 756,  1013 => 754,  997 => 738,  939 => 681,  917 => 662,  890 => 637,  886 => 635,  879 => 631,  876 => 630,  867 => 622,  864 => 621,  861 => 618,  854 => 610,  847 => 604,  843 => 603,  833 => 595,  810 => 573,  806 => 572,  803 => 571,  793 => 561,  778 => 548,  774 => 547,  771 => 546,  757 => 533,  748 => 527,  742 => 524,  736 => 521,  729 => 517,  719 => 510,  708 => 502,  702 => 499,  696 => 495,  687 => 485,  681 => 481,  679 => 480,  675 => 478,  670 => 476,  664 => 474,  662 => 473,  658 => 471,  656 => 470,  651 => 467,  647 => 465,  645 => 464,  642 => 463,  640 => 462,  635 => 459,  631 => 457,  629 => 456,  626 => 455,  624 => 454,  615 => 447,  611 => 445,  609 => 444,  606 => 443,  604 => 442,  598 => 438,  593 => 436,  590 => 435,  588 => 434,  584 => 433,  579 => 432,  577 => 431,  569 => 425,  565 => 423,  563 => 422,  560 => 421,  558 => 420,  554 => 418,  548 => 416,  546 => 415,  543 => 414,  541 => 413,  534 => 408,  528 => 402,  523 => 397,  518 => 394,  516 => 393,  512 => 391,  507 => 389,  502 => 388,  500 => 387,  496 => 386,  491 => 385,  489 => 384,  476 => 374,  457 => 358,  452 => 355,  446 => 353,  444 => 352,  438 => 350,  436 => 349,  427 => 344,  423 => 342,  421 => 341,  416 => 339,  409 => 334,  380 => 306,  372 => 300,  366 => 296,  361 => 294,  350 => 286,  345 => 284,  327 => 269,  322 => 267,  305 => 253,  300 => 250,  294 => 248,  292 => 247,  287 => 246,  285 => 245,  266 => 228,  260 => 223,  257 => 222,  240 => 206,  229 => 198,  225 => 197,  221 => 196,  209 => 187,  205 => 186,  201 => 185,  175 => 161,  168 => 154,  161 => 149,  151 => 143,  144 => 139,  133 => 130,  127 => 127,  124 => 126,  115 => 117,  111 => 116,  105 => 113,  101 => 112,  95 => 108,  77 => 90,  67 => 81,  60 => 77,  45 => 66,  39 => 60,  32 => 52,  29 => 45,  27 => 44,  24 => 43,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:css:easyadmin.css.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/css/easyadmin.css.twig");
    }
}
