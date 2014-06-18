<?php

/* minsalSIGminsalSIGBundle:Administracion:insertarUsuario.html.twig */
class __TwigTemplate_f9f52d868aa4737f86d3b7965b843addca9c737363e7a4fe143b156f509a15f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        $this->env->loadTemplate("BraincraftedBootstrapBundle::flash.html.twig")->display(array_merge($context, array("close" => true)));
        // line 6
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors', array("global_errors" => true));
        echo "
                
                 <div class=\"form-group\">
\t\t\t<label for=\"empleado\" class=\"col-lg-3 control-label\">Empleado</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empleado"), 'widget');
        echo "
\t\t\t</div>
\t\t</div> 
               
                <div class=\"form-group\">
\t\t\t<label for=\"rol\" class=\"col-lg-3 control-label\">Rol del Usuario</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>        
                
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-lg-3 control-label\">Nombre de Usuario</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
                <div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-lg-3 control-label\">Claves:         </label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t\t</div>
                </div>
                    <div id=\"pass-info\">
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
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Limpiar"), 'widget');
        echo "
\t\t</div>
\t\t
\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
\t</div>
</div>
<div class=\"container top\">
\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_consultarUsuario");
        echo "\">
\t\t<button type=\"button\" id=\"Regresar\" name=\"Regresar\" class=\"btn btn-lm btn-default\">Regresar a Consultar Usuarios</button>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:insertarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  106 => 47,  102 => 46,  96 => 43,  89 => 39,  79 => 32,  70 => 26,  60 => 19,  50 => 12,  42 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
