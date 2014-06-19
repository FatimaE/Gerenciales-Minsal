<?php

/* minsalSIGminsalSIGBundle:Tactico:plazas.html.twig */
class __TwigTemplate_6d52eaff2265e64a1752f53b6b5804e34ba06e837e932b18649e07e90be4d443 extends Twig_Template
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
            <div class=\"panel-heading\">Informe de plazas remuneradas y ad-honorem de estudiantes por region, universidad y carrera</div>
            <div class=\"panel-body text-center\" >
                <div class=\"divParam\">
                    <p>Parámetros necesarios para generar el reporte</p>
                    <table class=\"tablaCent\">
                        <tr class=\"text-left\" height=\"25%\">
                            <td width=\"25%\">
                                 <div> 
                                <select>
                                    <option selected>Seleccione un período</option>
                                    <option value=\"1\">Período 1</option>
                                    <option value=\"2\">Período 2</option>
                                </select>
                                </div>  
                            </td>
                            <td>
                                <div class=\"text-center\"> 
                                <select>
                                    <option selected>Seleccione una Region</option>
                                    <option value=\"1\">Region 1</option>
                                    <option value=\"2\">Region 2</option>  
                                    <option value=\"1\">Region 3</option>
                                    <option value=\"2\">Region 4</option> 
                                    <option value=\"2\">Region 5</option> 
                                    
                                </select> 
                                 
                               </div>   
                            </td>
                            <td>
                                <div class=\"text-center\"> Carrera <br>                              
                                <input type=\"radio\" name=\"carrera\" id=\"carrera\" value=\"M\" class=\"left\"/>Medicina
                                <input type=\"radio\" name=\"carrera\" id=\"carrera\" value=\"O\" class=\"left\"/>Odontología  
                                </div> 
                            </td> 
                            
                            
                        </tr>   
                        
                        <tr class=\"text-left\" height=\"25%\">
                            <td width=\"25%\">
                                    
                            </td>   
                        </tr>    
                        
                        </table>  
                       <br>  
                        <tr class=\"text-left\" height=\"25%\">
                            <td width=\"25%\">
                               <div class=\"text-center\">   
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectuniv"), 'widget');
        echo " 
                               </div>   
                               
                               <br> 
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar"), 'widget');
        echo " 
                            </td>    
                            
                        </tr>   
                                      
                </div>                             
            </div>
        </div>
    </div>  
                       
  ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                       
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:plazas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 71,  94 => 61,  87 => 57,  31 => 4,  28 => 3,);
    }
}
