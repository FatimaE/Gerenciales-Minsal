<?php

/* minsalSIGminsalSIGBundle:Tactico:RepMejorCum4.html.twig */
class __TwigTemplate_b9536401ee6b7c23e87de5fc85116a57589394daa76182c0088a9450cb50870c extends Twig_Template
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
        echo "<div class=\"panel panel-info\">  
           
            <div class=\"panel-body text-center\" >    
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Encabezado_reportes.png"), "html", null, true);
        echo "\">
                <p>Reporte de mejor CUM por carrera y universidad</p>
                <br />
                <br />
                <table class=\"table table-striped table-hover table-condensed\" border=\"1\">
                    <thead class=\"table-param\">
                    <tr align=\"center\">
                      <th class=\"table-header\" rowspan=\"2\" align=\"center\" >Universidad</th>
                      <th class=\"table-header\" colspan=\"15\" align=\"center\">Carrera</th>                      
                    </tr>
                    <tr>                        
                        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomCarr"]) ? $context["nomCarr"] : $this->getContext($context, "nomCarr")), "nombre"), "html", null, true);
        echo "</th>                                            
                    </tr>                    
                    </thead>
                    <tbody class=\"table-param\">                      
                            <tr>
                                <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomUniv"]) ? $context["nomUniv"] : $this->getContext($context, "nomUniv")), "nombre"), "html", null, true);
        echo "</th>                                   
                                <th>1</th>    
                            </tr>                           
                    
                    </tbody>
                    
                          
                   
                               
              
                </table> 
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_cum");
        echo "\"> Regresar </a>          
                <br />
                <br />            
            </div>
                  
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:RepMejorCum4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  58 => 22,  50 => 17,  36 => 6,  31 => 3,  28 => 2,);
    }
}
