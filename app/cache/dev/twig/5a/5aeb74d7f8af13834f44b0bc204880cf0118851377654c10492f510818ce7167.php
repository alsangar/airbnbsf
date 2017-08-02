<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_3cb860791b2f207a9f9e783db9b88df69ff179b03491c011dbe395f02d04ea8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84ca96d061146380b2c59fdf7175319b62b1778577e86b19f9f4a5ef7ab0e5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ca96d061146380b2c59fdf7175319b62b1778577e86b19f9f4a5ef7ab0e5eb->enter($__internal_84ca96d061146380b2c59fdf7175319b62b1778577e86b19f9f4a5ef7ab0e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_84ca96d061146380b2c59fdf7175319b62b1778577e86b19f9f4a5ef7ab0e5eb->leave($__internal_84ca96d061146380b2c59fdf7175319b62b1778577e86b19f9f4a5ef7ab0e5eb_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f0e7a726bd0c32a2e6dd6b2d9120e7e7dbe8ae34828fc066f9b14f088ae822d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e7a726bd0c32a2e6dd6b2d9120e7e7dbe8ae34828fc066f9b14f088ae822d5->enter($__internal_f0e7a726bd0c32a2e6dd6b2d9120e7e7dbe8ae34828fc066f9b14f088ae822d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f0e7a726bd0c32a2e6dd6b2d9120e7e7dbe8ae34828fc066f9b14f088ae822d5->leave($__internal_f0e7a726bd0c32a2e6dd6b2d9120e7e7dbe8ae34828fc066f9b14f088ae822d5_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_72cad4ad0788b376eadd2ac2768a9285d5486719106b7b5b190ae5387863cce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cad4ad0788b376eadd2ac2768a9285d5486719106b7b5b190ae5387863cce4->enter($__internal_72cad4ad0788b376eadd2ac2768a9285d5486719106b7b5b190ae5387863cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_72cad4ad0788b376eadd2ac2768a9285d5486719106b7b5b190ae5387863cce4->leave($__internal_72cad4ad0788b376eadd2ac2768a9285d5486719106b7b5b190ae5387863cce4_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_f492e020fba5530787483f8ccd5e3a3239e0178e3c590242e5ad92dc8f4a88a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f492e020fba5530787483f8ccd5e3a3239e0178e3c590242e5ad92dc8f4a88a3->enter($__internal_f492e020fba5530787483f8ccd5e3a3239e0178e3c590242e5ad92dc8f4a88a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f492e020fba5530787483f8ccd5e3a3239e0178e3c590242e5ad92dc8f4a88a3->leave($__internal_f492e020fba5530787483f8ccd5e3a3239e0178e3c590242e5ad92dc8f4a88a3_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_eaab8ca7a699bb4798c43d633f7e8e1e74652826c196e3cca559f97d181004e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaab8ca7a699bb4798c43d633f7e8e1e74652826c196e3cca559f97d181004e1->enter($__internal_eaab8ca7a699bb4798c43d633f7e8e1e74652826c196e3cca559f97d181004e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_eaab8ca7a699bb4798c43d633f7e8e1e74652826c196e3cca559f97d181004e1->leave($__internal_eaab8ca7a699bb4798c43d633f7e8e1e74652826c196e3cca559f97d181004e1_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_0cc48d1bb5aeff775ac5651ce53ae9755ec4b1fd3a9950dd2854c8cbdf0e26da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc48d1bb5aeff775ac5651ce53ae9755ec4b1fd3a9950dd2854c8cbdf0e26da->enter($__internal_0cc48d1bb5aeff775ac5651ce53ae9755ec4b1fd3a9950dd2854c8cbdf0e26da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_0cc48d1bb5aeff775ac5651ce53ae9755ec4b1fd3a9950dd2854c8cbdf0e26da->leave($__internal_0cc48d1bb5aeff775ac5651ce53ae9755ec4b1fd3a9950dd2854c8cbdf0e26da_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bfe1cc032ac01332edf9b37d71ad5ed5c371612f4f2a55253514fbc9255d3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfe1cc032ac01332edf9b37d71ad5ed5c371612f4f2a55253514fbc9255d3f0->enter($__internal_1bfe1cc032ac01332edf9b37d71ad5ed5c371612f4f2a55253514fbc9255d3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_1bfe1cc032ac01332edf9b37d71ad5ed5c371612f4f2a55253514fbc9255d3f0->leave($__internal_1bfe1cc032ac01332edf9b37d71ad5ed5c371612f4f2a55253514fbc9255d3f0_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_de979749d2d40b32a4ab5ff18cc83502b84a418d5d32f11773a3af0f8c511310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de979749d2d40b32a4ab5ff18cc83502b84a418d5d32f11773a3af0f8c511310->enter($__internal_de979749d2d40b32a4ab5ff18cc83502b84a418d5d32f11773a3af0f8c511310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_de979749d2d40b32a4ab5ff18cc83502b84a418d5d32f11773a3af0f8c511310->leave($__internal_de979749d2d40b32a4ab5ff18cc83502b84a418d5d32f11773a3af0f8c511310_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_dba7f260c6aac03a90dda3d2cf88d92d1a29cb11fd2b67e8f0123068e97aedc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba7f260c6aac03a90dda3d2cf88d92d1a29cb11fd2b67e8f0123068e97aedc5->enter($__internal_dba7f260c6aac03a90dda3d2cf88d92d1a29cb11fd2b67e8f0123068e97aedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_dba7f260c6aac03a90dda3d2cf88d92d1a29cb11fd2b67e8f0123068e97aedc5->leave($__internal_dba7f260c6aac03a90dda3d2cf88d92d1a29cb11fd2b67e8f0123068e97aedc5_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_095734df268fcb04534ff0989795f7ec53fc4a93579f04c07de019f272301824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095734df268fcb04534ff0989795f7ec53fc4a93579f04c07de019f272301824->enter($__internal_095734df268fcb04534ff0989795f7ec53fc4a93579f04c07de019f272301824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_095734df268fcb04534ff0989795f7ec53fc4a93579f04c07de019f272301824->leave($__internal_095734df268fcb04534ff0989795f7ec53fc4a93579f04c07de019f272301824_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_fb3da1194ff8face019226aecdd74794173a59bf0d6dbf97bf8516438ca2bbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3da1194ff8face019226aecdd74794173a59bf0d6dbf97bf8516438ca2bbcb->enter($__internal_fb3da1194ff8face019226aecdd74794173a59bf0d6dbf97bf8516438ca2bbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_fb3da1194ff8face019226aecdd74794173a59bf0d6dbf97bf8516438ca2bbcb->leave($__internal_fb3da1194ff8face019226aecdd74794173a59bf0d6dbf97bf8516438ca2bbcb_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_087677402e6a76f41cd1610a1f31a35aaefd5ede69b8649a2eac6bd81073044a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087677402e6a76f41cd1610a1f31a35aaefd5ede69b8649a2eac6bd81073044a->enter($__internal_087677402e6a76f41cd1610a1f31a35aaefd5ede69b8649a2eac6bd81073044a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_087677402e6a76f41cd1610a1f31a35aaefd5ede69b8649a2eac6bd81073044a->leave($__internal_087677402e6a76f41cd1610a1f31a35aaefd5ede69b8649a2eac6bd81073044a_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_23db2aaed1c638c8ce884b44fbdfb165104ca7e585c7ee318c37338a24f5ac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23db2aaed1c638c8ce884b44fbdfb165104ca7e585c7ee318c37338a24f5ac57->enter($__internal_23db2aaed1c638c8ce884b44fbdfb165104ca7e585c7ee318c37338a24f5ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_23db2aaed1c638c8ce884b44fbdfb165104ca7e585c7ee318c37338a24f5ac57->leave($__internal_23db2aaed1c638c8ce884b44fbdfb165104ca7e585c7ee318c37338a24f5ac57_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_ffb78d448a79347f4d841e9aa9d282d30457c2f0fba5125fdb7013d24086876b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb78d448a79347f4d841e9aa9d282d30457c2f0fba5125fdb7013d24086876b->enter($__internal_ffb78d448a79347f4d841e9aa9d282d30457c2f0fba5125fdb7013d24086876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_ffb78d448a79347f4d841e9aa9d282d30457c2f0fba5125fdb7013d24086876b->leave($__internal_ffb78d448a79347f4d841e9aa9d282d30457c2f0fba5125fdb7013d24086876b_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_cf801afcbabf089b03e06599b3e84d276b3dfca207b13dd96646c3cffe7a86d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf801afcbabf089b03e06599b3e84d276b3dfca207b13dd96646c3cffe7a86d8->enter($__internal_cf801afcbabf089b03e06599b3e84d276b3dfca207b13dd96646c3cffe7a86d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_cf801afcbabf089b03e06599b3e84d276b3dfca207b13dd96646c3cffe7a86d8->leave($__internal_cf801afcbabf089b03e06599b3e84d276b3dfca207b13dd96646c3cffe7a86d8_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_860e8defabc978cb0de93232661a66a4944920027b9ff2faae02b633917ca807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860e8defabc978cb0de93232661a66a4944920027b9ff2faae02b633917ca807->enter($__internal_860e8defabc978cb0de93232661a66a4944920027b9ff2faae02b633917ca807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_860e8defabc978cb0de93232661a66a4944920027b9ff2faae02b633917ca807->leave($__internal_860e8defabc978cb0de93232661a66a4944920027b9ff2faae02b633917ca807_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_5e9ce95c06f49740a19634d2eb1c1e3e4fbc3c8be61f60aea9f91a984fbb76bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9ce95c06f49740a19634d2eb1c1e3e4fbc3c8be61f60aea9f91a984fbb76bf->enter($__internal_5e9ce95c06f49740a19634d2eb1c1e3e4fbc3c8be61f60aea9f91a984fbb76bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_5e9ce95c06f49740a19634d2eb1c1e3e4fbc3c8be61f60aea9f91a984fbb76bf->leave($__internal_5e9ce95c06f49740a19634d2eb1c1e3e4fbc3c8be61f60aea9f91a984fbb76bf_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_693877b619a3d8f477c2cff949222d56b86da44cc4587b34e3111f28c5ed6452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693877b619a3d8f477c2cff949222d56b86da44cc4587b34e3111f28c5ed6452->enter($__internal_693877b619a3d8f477c2cff949222d56b86da44cc4587b34e3111f28c5ed6452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_693877b619a3d8f477c2cff949222d56b86da44cc4587b34e3111f28c5ed6452->leave($__internal_693877b619a3d8f477c2cff949222d56b86da44cc4587b34e3111f28c5ed6452_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7c6531cc847f6fe8302b8384227fa579cfe75b4b5c79a384c4ff63e2ffdd0327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6531cc847f6fe8302b8384227fa579cfe75b4b5c79a384c4ff63e2ffdd0327->enter($__internal_7c6531cc847f6fe8302b8384227fa579cfe75b4b5c79a384c4ff63e2ffdd0327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_7c6531cc847f6fe8302b8384227fa579cfe75b4b5c79a384c4ff63e2ffdd0327->leave($__internal_7c6531cc847f6fe8302b8384227fa579cfe75b4b5c79a384c4ff63e2ffdd0327_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_975d185ad9c9b24371eb3df2f5e8ef8267c39df4d3c8d1ed6c99e80c8428efd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975d185ad9c9b24371eb3df2f5e8ef8267c39df4d3c8d1ed6c99e80c8428efd2->enter($__internal_975d185ad9c9b24371eb3df2f5e8ef8267c39df4d3c8d1ed6c99e80c8428efd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_975d185ad9c9b24371eb3df2f5e8ef8267c39df4d3c8d1ed6c99e80c8428efd2->leave($__internal_975d185ad9c9b24371eb3df2f5e8ef8267c39df4d3c8d1ed6c99e80c8428efd2_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_78260c24da1b37f267c5fa24d06f7fedc8923d809a0cc610578ec2af94b016ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78260c24da1b37f267c5fa24d06f7fedc8923d809a0cc610578ec2af94b016ba->enter($__internal_78260c24da1b37f267c5fa24d06f7fedc8923d809a0cc610578ec2af94b016ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_78260c24da1b37f267c5fa24d06f7fedc8923d809a0cc610578ec2af94b016ba->leave($__internal_78260c24da1b37f267c5fa24d06f7fedc8923d809a0cc610578ec2af94b016ba_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_4449fdde746ef2710768e1054c2658330fe8e8d2c423db461e711c067d970027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4449fdde746ef2710768e1054c2658330fe8e8d2c423db461e711c067d970027->enter($__internal_4449fdde746ef2710768e1054c2658330fe8e8d2c423db461e711c067d970027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_4449fdde746ef2710768e1054c2658330fe8e8d2c423db461e711c067d970027->leave($__internal_4449fdde746ef2710768e1054c2658330fe8e8d2c423db461e711c067d970027_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_b9f4b1e5bb0b1f725c760c2327509b23d694ce9236ebd6d857e2967cb30ffe3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f4b1e5bb0b1f725c760c2327509b23d694ce9236ebd6d857e2967cb30ffe3a->enter($__internal_b9f4b1e5bb0b1f725c760c2327509b23d694ce9236ebd6d857e2967cb30ffe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b9f4b1e5bb0b1f725c760c2327509b23d694ce9236ebd6d857e2967cb30ffe3a->leave($__internal_b9f4b1e5bb0b1f725c760c2327509b23d694ce9236ebd6d857e2967cb30ffe3a_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_be8cc6e0d305cc32968f4e09eb6c16530e8259c5f7329646d0796013c79ce715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8cc6e0d305cc32968f4e09eb6c16530e8259c5f7329646d0796013c79ce715->enter($__internal_be8cc6e0d305cc32968f4e09eb6c16530e8259c5f7329646d0796013c79ce715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_be8cc6e0d305cc32968f4e09eb6c16530e8259c5f7329646d0796013c79ce715->leave($__internal_be8cc6e0d305cc32968f4e09eb6c16530e8259c5f7329646d0796013c79ce715_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 160,  637 => 153,  630 => 149,  623 => 145,  619 => 143,  616 => 142,  610 => 141,  590 => 139,  584 => 138,  574 => 134,  568 => 133,  560 => 154,  558 => 153,  553 => 150,  550 => 141,  548 => 138,  544 => 136,  541 => 133,  535 => 132,  527 => 125,  525 => 122,  523 => 121,  517 => 120,  509 => 127,  507 => 120,  504 => 119,  498 => 118,  486 => 102,  483 => 101,  477 => 100,  470 => 108,  465 => 105,  463 => 100,  454 => 94,  449 => 91,  444 => 89,  441 => 88,  439 => 87,  435 => 86,  432 => 85,  430 => 84,  424 => 82,  418 => 81,  409 => 109,  407 => 81,  403 => 79,  400 => 78,  394 => 77,  384 => 71,  375 => 70,  369 => 69,  360 => 112,  358 => 77,  353 => 74,  351 => 69,  344 => 65,  340 => 63,  334 => 62,  326 => 156,  324 => 132,  319 => 129,  317 => 118,  312 => 115,  310 => 62,  307 => 61,  301 => 60,  280 => 58,  272 => 165,  263 => 163,  259 => 162,  256 => 161,  254 => 160,  250 => 158,  248 => 60,  238 => 58,  232 => 57,  214 => 30,  208 => 29,  199 => 43,  196 => 42,  193 => 29,  187 => 28,  175 => 25,  172 => 24,  166 => 23,  156 => 15,  150 => 13,  144 => 12,  132 => 10,  124 => 167,  122 => 57,  115 => 53,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\layout.html.twig");
    }
}
