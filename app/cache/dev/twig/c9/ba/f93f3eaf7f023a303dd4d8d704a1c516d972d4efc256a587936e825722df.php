<?php

/* minsalSIGminsalSIGBundle:Administracion:modificarEmpleado.html.twig */
class __TwigTemplate_c9baf93f3eaf7f023a303dd4d8d704a1c516d972d4efc256a587936e825722df extends Twig_Template
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
\t\t\t<label for=\"rol\" class=\"col-lg-3 control-label\">Cargo del empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCargo"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>        
                
\t\t<div class=\"form-group\">
\t\t\t<label for=\"primerNombre\" class=\"col-lg-3 control-label\">Nombres del empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primerNombre"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
                <div class=\"form-group\">
\t\t\t<label for=\"primerApellido\" class=\"col-lg-3 control-label\">Apellidos del empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primerApellido"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
                <div class=\"form-group\">
\t\t\t<label for=\"emailInstitucional\" class=\"col-lg-3 control-label\">Email del empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailInstitucional"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"col-lg-offset-1 col-lg-2\">
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar"), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-lg-2\">
\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Limpiar"), 'widget');
        echo "
\t\t</div>
\t\t
\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
<div class=\"container top\">
\t<a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_consultarEmpleado");
        echo "\">
\t\t<button type=\"button\" id=\"Regresar\" name=\"Regresar\" class=\"btn btn-lm btn-default\">Regresar a consultar Empleados</button>
\t</a>
</div>
";
    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        // line 63
        echo "\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/password_checker.js"), "html", null, true);
        echo "\"> </script>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:modificarEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 63,  152 => 62,  143 => 57,  136 => 53,  132 => 52,  126 => 49,  120 => 46,  112 => 41,  103 => 35,  94 => 29,  84 => 22,  76 => 17,  71 => 16,  64 => 14,  58 => 12,  53 => 10,  48 => 9,  46 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
