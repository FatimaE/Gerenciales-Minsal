<?php

/* minsalSIGminsalSIGBundle:Tactico:cum.html.twig */
class __TwigTemplate_243c1db6d59e4dc6fb04557bf81d4117e963e01377978000acfc01ab67d7cb77 extends Twig_Template
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
            <div class=\"panel-heading\">Reporte de mejor CUM por carrera y universidad</div>
            <div class=\"panel-body text-center\" >
                <div class=\"divParam\">
                    <p>Parámetros necesarios para generar el reporte</p>                    
                    <table class=\"table-param\">
                        <tr>
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_conTodos1");
        echo "\">
                                <button type=\"button\" id=\"todos\" name=\"todos\" class=\"btn btn-lm btn-default\">Consultar Todos</button>
                            </a>
                        </tr>                        
                        <tr>                            
                            <select>
                                <option selected>Seleccione un período</option>
                                <option value=\"1\">Período 1</option>
                                <option value=\"2\">Período 2</option>
                            </select>
                        </tr>
                        
                        <tr>                             
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectcarr"), 'widget');
        echo "
                        </tr>
                        
                        <tr>
                             ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectuniv"), 'widget');
        echo "                              
                        </tr>
                        
                        <tr>
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar"), 'widget');
        echo "
                        </tr>
                            
                    </table>                      
                </div>                           
            </div>
        </div>
    </div>    
    ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:cum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  73 => 34,  66 => 30,  59 => 26,  43 => 13,  31 => 4,  28 => 3,);
    }
}
