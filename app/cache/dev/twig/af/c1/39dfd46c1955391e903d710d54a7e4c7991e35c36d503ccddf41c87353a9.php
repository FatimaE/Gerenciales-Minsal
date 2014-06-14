<?php

/* minsalSIGminsalSIGBundle:Tactico:RepMejorCum3.html.twig */
class __TwigTemplate_afc139dfd46c1955391e903d710d54a7e4c7991e35c36d503ccddf41c87353a9 extends Twig_Template
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
        // line 5
        echo "<div class=\"panel panel-info\">  
           
            <div class=\"panel-body text-center\" >    
                <img src=\"";
        // line 8
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
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomCarr"]) ? $context["nomCarr"] : $this->getContext($context, "nomCarr")), "nombre"), "html", null, true);
        echo "</th>    
                                              
                    </tr>                    
                    </thead>
                    <tbody class=\"table-param\">                      
                          ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universidad"]) ? $context["universidad"] : $this->getContext($context, "universidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["univs"]) {
            // line 25
            echo "                            <tr>
                                <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "nombre"), "html", null, true);
            echo "</th>                                
                                <th>1</th>    
                            </tr>                           
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['univs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                                                      
                    
                    </tbody>
                    
                          
                   
                               
              
                </table> 
                    <a href=\"";
        // line 39
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
        return "minsalSIGminsalSIGBundle:Tactico:RepMejorCum3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  75 => 30,  65 => 26,  62 => 25,  58 => 24,  50 => 19,  36 => 8,  31 => 5,  28 => 3,);
    }
}
