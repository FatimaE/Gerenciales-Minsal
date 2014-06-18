<?php

/* minsalSIGminsalSIGBundle:Tactico:RepMejorCum2.html.twig */
class __TwigTemplate_9908b6255cf383ffd26bc10557ab63b6f54479fef4229969c3543ea060eb5de4 extends Twig_Template
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
                        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrera"]) ? $context["carrera"] : $this->getContext($context, "carrera")));
        foreach ($context['_seq'] as $context["_key"] => $context["cars"]) {
            // line 20
            echo "                          <th>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cars"]) ? $context["cars"] : $this->getContext($context, "cars")), "nombre"), "html", null, true);
            echo "</th>    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cars'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                      
                    </tr>                    
                    </thead>
                    <tbody class=\"table-param\">                      
                            <tr>
                                <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomUniv"]) ? $context["nomUniv"] : $this->getContext($context, "nomUniv")), "nombre"), "html", null, true);
        echo "</th>
                                
                                ";
        // line 28
        $context["count"] = 0;
        echo " <!--Contador para que se vean las columnas -->
                                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            echo "                                    
                                    ";
            // line 30
            if (($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "cuenta") != 0)) {
                echo " <!-- Si el valor es distinto de 0, se escribe -->
                                        <th> ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "cuenta"), "html", null, true);
                echo " </th>
                                    ";
            } else {
                // line 33
                echo "                                        <th> </th> 
                                    ";
            }
            // line 35
            echo "                                    ";
            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
            // line 36
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                           
                                
                                ";
        // line 38
        $context["resta"] = (16 - (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")));
        // line 39
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["resta"]) ? $context["resta"] : $this->getContext($context, "resta"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "                                    <th> </th>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
                            </tr>                           
                    
                    </tbody>                    
              
                </table> 
                    <a href=\"";
        // line 47
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
        return "minsalSIGminsalSIGBundle:Tactico:RepMejorCum2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  124 => 41,  117 => 40,  112 => 39,  110 => 38,  101 => 36,  98 => 35,  94 => 33,  89 => 31,  85 => 30,  79 => 29,  75 => 28,  70 => 26,  63 => 21,  54 => 20,  50 => 19,  36 => 8,  31 => 5,  28 => 3,);
    }
}
