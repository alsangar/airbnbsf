<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_905e1fd8b7579b4cec890416b2ba6629030fecccb011225aca8a7627de7354e9 extends Twig_Template
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
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "POST", "attr" => array("id" => "form-register", "role" => "form", "class" => "form-signin")));
        echo "

";
        // line 13
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array())) {
            // line 14
            echo "    <div class=\"alert alert-error\" role=\"alert\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                echo "            ";
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    echo "                
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
";
        }
        // line 23
        echo "
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[username]\">Usuario</label>
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[firstName]\">Nombre</label>
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[lastName]\">Apellido</label>
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[phone]\">Teléfono</label>
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[email]\" >Dirección de correo electrónico</label>
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"fos_user_registration_form[plainPassword.first]\">Contraseña</label>
    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
    <label for=\"plainPassword.second\" >Repetir contraseña</label>
    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<button class=\"btn btn-lg btn-theme btn-block\" type=\"submit\">Crear cuenta</button>

";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  140 => 50,  133 => 46,  126 => 42,  119 => 38,  112 => 34,  105 => 30,  98 => 26,  93 => 23,  89 => 21,  83 => 20,  75 => 18,  68 => 17,  66 => 16,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  49 => 10,  36 => 6,  31 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
