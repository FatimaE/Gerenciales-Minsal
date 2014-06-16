<?php

/* minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig */
class __TwigTemplate_dd7943ba686682a1cd99f18126633b906562a909d7f94a8ae5ecd3e4986e7ace extends Twig_Template
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
\t<div class=\"container\">    ";
        // line 6
        echo "<div class=\"panel panel-info\">  
        \t<div class=\"panel-heading\">Promedio general de prueba de conocimiento por institución formadora</div>
        \t<div class=\"panel-body text-center\" >            \t 
                \t<div class=\"divParam\">
                    \t<p>Parámetros necesarios para generar el reporte</p>
                    \t<table class=\"tablaCent\">
                        \t<tr class=\"text-center\" height=\"25%\">
                            \t<td width=\"25%\">
                                \t<select>
                                    \t<option selected>Seleccione un período</option>
                                    \t<option value=\"1\">Período 1</option>
                                    \t<option value=\"2\">Período 2</option>
                                \t</select>
                            \t</td>
                            \t<td width=\"25%\">
                                \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectcarr"), 'widget');
        echo "
                            \t</td>
                        \t                        \t 
                             \t<td width=\"25%\">    
                                \t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectuniv"), 'widget');
        echo "                                    \t 
                             \t</td>                      \t 
                           \t 
                            \t<td width=\"28%\">
                                \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Generar"), 'widget');
        echo "                              \t 
                              \t 
                            \t</td>
                        \t</tr>                   \t
                        </table>            
                \t</div>
            \t<br />
            \t<br />       \t 
        \t</div>
             \t 
                                        
    \t</div>
                                        </div>
                                        ";
        // line 43
        echo "                        <div class=\"container\">
                        
                            <div class=\"panel panel-info\">  
                            <div class=\"panel-heading\">Promedio general de prueba de conocimiento por institución formadora</div>
                                
                                <table class=\"centerTable\">
                                    
                                    <tr >
                                      
                                      <td ><p>Carrera</p>
                                          <p> ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["varId"]) ? $context["varId"] : $this->getContext($context, "varId")), "html", null, true);
        echo "<p>
                                      </td>  
                                      <td><p>Universidad</p>
                                          <p>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["univId"]) ? $context["univId"] : $this->getContext($context, "univId")), "html", null, true);
        echo "</p>
                                          </td>
                                          <td><p>Nota Promedio</p>
                                          <p> 
                                              
                                              ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_Id"]) ? $context["c_Id"] : $this->getContext($context, "c_Id")));
        foreach ($context['_seq'] as $context["_key"] => $context["carr"]) {
            // line 62
            echo "
                                              ";
            // line 63
            echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["carr"]) ? $context["carr"] : $this->getContext($context, "carr")), "promedio"), 2, "floor"), "html", null, true);
            echo "
                            
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                                  
                                          </p>
                                          </td>
                                          ";
        // line 77
        echo "                                          
                                    </tr>
                                     
                                </table>
                                   
                        </div>

                            </div>
                        
                        
                        <div class=\"container\">
    \t<div class=\"panel panel-info\">  
        \t<div class=\"panel-heading\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_promPrueba");
        echo "\"> Restablecer</a> </div>
        \t<div class=\"panel-body text-center\" >            \t      \t 
        \t</div>
             \t 
    \t</div>
\t</div>\t 
                                        
";
        // line 97
        echo "       ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                      
                                        
                                        
\t
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 97,  143 => 89,  129 => 77,  124 => 66,  115 => 63,  112 => 62,  108 => 61,  100 => 56,  94 => 53,  82 => 43,  66 => 29,  59 => 25,  52 => 21,  35 => 6,  31 => 4,  28 => 3,);
    }
}
