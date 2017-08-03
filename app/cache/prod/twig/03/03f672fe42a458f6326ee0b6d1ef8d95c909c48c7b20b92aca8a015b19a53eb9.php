<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_ab7ee251a85a57f8a320b72ffa5f845f9eaf50a066aeab6dab15db5206cc73b3 extends Twig_Template
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
        // line 2
        echo "
<div class=\"container mtb\">
    <div class=\"row centered\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "method" => "POST", "name" => "editProfile", "attr" => array("class" => "fos_user_profile_edit form-horizontal", "id" => "formEditProfile")));
        // line 6
        echo "
        ";
        // line 7
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array())) {
            // line 8
            echo "            <div class=\"alert alert-error\" role=\"alert\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 10
                echo "                    ";
                // line 11
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    echo "                
                        ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </div>
        ";
        }
        // line 17
        echo "        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[username]\" class=\"col-sm-offset-2 col-sm-2  control-label\">Usuario</label>
            <div class=\"col-sm-4\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
        echo " 
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[firstName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-4\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[lastName]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Apellido</label>
            <div class=\"col-sm-4\">
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[phone]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Teléfono</label>
            <div class=\"col-sm-4\">
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[email]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-4\">
                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"fos_user_profile_form[current_password]\" class=\"col-sm-offset-2 col-sm-2 control-label\">Contraseña actual</label>
            <div class=\"col-sm-4\">
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "current_password", array()), 'widget');
        echo "
            </div>
        </div>    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-4 col-sm-4\">
                <button type=\"submit\" class=\"btn btn-block btn-theme\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Actualizar usuario</button>
            </div>
        </div>

        ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "        
    </div><! --/row -->
</div><! --/container -->


";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  123 => 55,  115 => 50,  106 => 44,  97 => 38,  88 => 32,  79 => 26,  70 => 20,  65 => 17,  61 => 15,  55 => 14,  47 => 12,  40 => 11,  38 => 10,  34 => 9,  31 => 8,  29 => 7,  26 => 6,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Profile/edit_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
