<?php

/* minsalSIGminsalSIGBundle:Tactico:aprobados.html.twig */
class __TwigTemplate_d317fb50d4db9c37b8a17e8eb3ca06a23a9b01eeaf2079e6feaae4a714b2ec8c extends Twig_Template
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
            <div class=\"panel-heading\">Reporte del número de estudiantes aprobados para realizar el servicio social, por carrera y universidad</div>
            <div class=\"panel-body text-center\" >                 
                    <div class=\"divParam\">
                        <p>Parámetros necesarios para generar el reporte</p>
                        <table class=\"tablaCent\">
                            <tr class=\"text-left\" height=\"25%\">
                                <td width=\"25%\">
                                    <select>
                                        <option selected>Seleccione un período</option>
                                        <option value=\"1\">Período 1</option>
                                        <option value=\"2\">Período 2</option>
                                    </select>
                                </td>
                                <td width=\"25%\">
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectcarr"), 'widget');
        echo "
                                </td>
                            </tr>
                            <tr class=\"text-left\" height=\"25%\">                               
                                 <td width=\"25%\">    
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectuniv"), 'widget');
        echo "                                         
                                 </td>                           
                                
                                <td width=\"28%\">
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar"), 'widget');
        echo "                                   
                                   
                                </td>
                            </tr>
                        </table>                      
                    </div>
                <br />
                <br />            
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
        return "minsalSIGminsalSIGBundle:Tactico:aprobados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 42,  66 => 30,  59 => 26,  51 => 21,  31 => 4,  28 => 3,);
    }
}
