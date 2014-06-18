<?php

/* minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig */
class __TwigTemplate_c0cfa2a39e9da8784c133be6206ee4f31fca9b7228be7aa9665849ef70f7ffd5 extends Twig_Template
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
        $this->env->loadTemplate("BraincraftedBootstrapBundle::flash.html.twig")->display(array_merge($context, array("close" => true)));
        // line 6
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
               
                <div class=\"form-group\">
\t\t\t<label for=\"rol\" class=\"col-lg-3 control-label\">Nombre del cargo</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreCargo"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>        
                
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-lg-3 control-label\">Descripcion del cargo</label>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div class=\"col-lg-offset-1 col-lg-2\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar"), 'widget');
        echo "
\t\t</div>
                          
\t\t<div class=\"col-lg-2\">
\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Limpiar"), 'widget');
        echo "
\t\t</div>
\t\t
\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
<div class=\"container top\">
\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_consultarCargo");
        echo "\">
\t\t<button type=\"button\" id=\"Regresar\" name=\"Regresar\" class=\"btn btn-lm btn-default\">Regresar a consultar cargos</button>
\t</a>
</div>
";
    }

    // line 41
    public function block_js($context, array $blocks = array())
    {
        // line 42
        echo "\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/password_checker.js"), "html", null, true);
        echo "\"> </script>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  102 => 41,  93 => 36,  86 => 32,  82 => 31,  76 => 28,  69 => 24,  61 => 19,  51 => 12,  43 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
