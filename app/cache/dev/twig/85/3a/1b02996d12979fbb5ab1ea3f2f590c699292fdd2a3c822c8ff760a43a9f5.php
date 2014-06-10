<?php

/* minsalSIGminsalSIGBundle:Estrategico:montoTotal.html.twig */
class __TwigTemplate_853a1b02996d12979fbb5ab1ea3f2f590c699292fdd2a3c822c8ff760a43a9f5 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Cuadro comparativo del monto total de plazas remuneradas por carrera</div>
            <div class=\"panel-body text-center\" >                 
                    <div class=\"divParam\">
                        <p>Parámetros necesarios para generar el reporte</p>
                        <table class=\"tablaCent\">
                            <tr class=\"text-center\">
                                <td width=\"25%\">
                                    <select>
                                        <option selected>Seleccione un período</option>
                                        <option value=\"1\">Período 1</option>
                                        <option value=\"2\">Período 2</option>
                                    </select>
                                </td>
                                 <td width=\"25%\">
                                    <select>
                                        <option selected>Seleccione una universidad</option>                                        
                                    </select>
                                </td>
                                <td width=\"25%\">
                                    Carrera <br />                                
                                    <input type=\"radio\" name=\"carrera\" id=\"carrera\" value=\"M\" class=\"left\"/>Medicina
                                    <input type=\"radio\" name=\"carrera\" id=\"carrera\" value=\"O\" class=\"left\"/>Odontología
                                </td>
                                <td width=\"28%\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default\">Generar Reporte</button>
                                    </div>
                                </td>
                            </tr>
                        </table>                      
                    </div>                                
            </div>
            <br />
            <br />
        </div>
    </div>     
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Estrategico:montoTotal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
