<?php

/* minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig */
class __TwigTemplate_291d4319ff8342f91e6963e42eb9a5d18148d1b95cb63bc0b6c5bd8e1d88893d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container top\">
\t<div class=\"jumbotron\">
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 6
            echo "\t\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " fade in\">
\t\t\t\t<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t";
            // line 8
            if ($this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : null), "title", array(), "any", true, true)) {
                // line 9
                echo "\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "title"), "html", null, true);
                echo "</strong>
\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "message"), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"form-group\">
\t\t\t<label for=\"empleado\" class=\"col-lg-3 control-label\">Nombre del empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empleado"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
                <div class=\"form-group\">
\t\t\t<label for=\"rol\" class=\"col-lg-3 control-label\">Rol del Usuario</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>        
                
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-lg-3 control-label\">Nombre de Usuario</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"col-lg-offset-1 col-lg-2\">
\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar"), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-lg-2\">
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Limpiar"), 'widget');
        echo "
\t\t</div>
\t\t
\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
<div class=\"container top\">
\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_consultarUsuario");
        echo "\">
\t\t<button type=\"button\" id=\"Regresar\" name=\"Regresar\" class=\"btn btn-lm btn-default\">Regresar a Consultar Usuarios</button>
\t</a>
</div>
";
    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        // line 56
        echo "\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/password_checker.js"), "html", null, true);
        echo "\"> </script>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  142 => 55,  133 => 50,  126 => 46,  122 => 45,  116 => 42,  110 => 39,  102 => 34,  92 => 27,  83 => 21,  76 => 17,  71 => 16,  64 => 14,  58 => 12,  53 => 10,  48 => 9,  46 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
