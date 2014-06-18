<?php

/* minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig */
class __TwigTemplate_6ef15cf3a5e015c829a6652b970c7d4489199e0653ec9fbeefbf1bfd26865b1a extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"container\">
        <div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Cuadro estadístico de los resultados de la prueba de conocimiento por carrera</div>
            <div class=\"panel-body text-center\" >
                <div class=\"divParam\">
                    <p>Parámetros necesarios para generar el reporte</p>
                    <table class=\"table-param\" width=\"20%\">                    
                                                
                        <tr>                             
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectcarr"), 'widget');
        echo "
                        </tr>
                        <br />                                        
                        
                        <tr>
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar"), 'widget');
        echo "
                        </tr>
                            
                    </table>                      
                </div>                             
            </div>
        </div>
    </div>
   ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  52 => 19,  44 => 14,  31 => 4,  28 => 3,);
    }
}
