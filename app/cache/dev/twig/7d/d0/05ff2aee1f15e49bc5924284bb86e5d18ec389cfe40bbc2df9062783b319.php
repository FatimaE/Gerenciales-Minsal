<?php

/* minsalSIGminsalSIGBundle:Tactico:RepMejorCum.html.twig */
class __TwigTemplate_7dd005ff2aee1f15e49bc5924284bb86e5d18ec389cfe40bbc2df9062783b319 extends Twig_Template
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
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universidad"]) ? $context["universidad"] : $this->getContext($context, "universidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["univs"]) {
            // line 26
            echo "                            <tr>
                                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "nombre"), "html", null, true);
            echo "</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>    
                                <th>1</th>    
                            </tr>                           
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['univs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </tbody>
                    
                          
                   
                               
              
                </table> 
                    <a href=\"";
        // line 53
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
        return "minsalSIGminsalSIGBundle:Tactico:RepMejorCum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 53,  101 => 46,  76 => 27,  73 => 26,  69 => 25,  63 => 21,  54 => 20,  50 => 19,  36 => 8,  31 => 5,  28 => 3,);
    }
}
