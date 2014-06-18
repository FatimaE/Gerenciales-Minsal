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
        // line 23
        $context["count"] = 0;
        // line 24
        echo "                          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universidad"]) ? $context["universidad"] : $this->getContext($context, "universidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["univs"]) {
            // line 25
            echo "                            <tr>
                                <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "nombre"), "html", null, true);
            echo "</th>                        
                                
                                ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                if (($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "id_institucion_formadora") == $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "id"))) {
                    echo "                                       
                                    ";
                    // line 29
                    if (($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "cuenta") != 0)) {
                        echo " <!-- Si el valor es distinto de 0, se escribe -->
                                        <th> ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "cuenta"), "html", null, true);
                        echo " </th>
                                    ";
                    } else {
                        // line 32
                        echo "                                        <th> </th> 
                                    ";
                    }
                    // line 33
                    echo "  
                                ";
                    // line 34
                    $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                    // line 35
                    echo "                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                
                                
                            </tr>                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['univs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
                        ";
        // line 40
        $context["resta"] = (18 - (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")));
        // line 41
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["resta"]) ? $context["resta"] : $this->getContext($context, "resta")), 18));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "                                <tr> </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  
                                           
                    </tbody>     
                </table> 
                  
                    
                    <a href=\"";
        // line 49
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
        return array (  138 => 49,  130 => 43,  123 => 42,  118 => 41,  116 => 40,  113 => 39,  97 => 35,  95 => 34,  92 => 33,  88 => 32,  83 => 30,  79 => 29,  72 => 28,  67 => 26,  64 => 25,  59 => 24,  57 => 23,  50 => 19,  36 => 8,  31 => 5,  28 => 3,);
    }
}
