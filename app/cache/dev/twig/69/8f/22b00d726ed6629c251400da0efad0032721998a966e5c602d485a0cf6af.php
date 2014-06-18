<?php

/* minsalSIGminsalSIGBundle:Tactico:RepPruebaCon.html.twig */
class __TwigTemplate_698f22b00d726ed6629c251400da0efad0032721998a966e5c602d485a0cf6af extends Twig_Template
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
        echo "<div class=\"panel panel-info\">             
            <div class=\"panel-body text-center\" >    
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Encabezado_reportes.png"), "html", null, true);
        echo "\">
               
                <p>Cuadro estadístico de los resultados de la prueba de conocimiento de la carrera de";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreraNombre"]) ? $context["carreraNombre"] : $this->getContext($context, "carreraNombre")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["car"]) ? $context["car"] : $this->getContext($context, "car")), "nombre"), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                <br />
                <br />
                <table class=\"table table-striped table-hover table-condensed\" border=\"1\">
                    <thead class=\"table-param\">
                    <tr align=\"center\">
                      <th class=\"table-header\" align=\"center\" >Universidad</th>
                      <th class=\"table-header\" align=\"center\">N° de Estudiantes reportados por universidades</th>
                      <th class=\"table-header\" align=\"center\" >Estudiantes examinados</th>
                      <th class=\"table-header\" align=\"center\">Aprobados</th>
                      <th class=\"table-header\" align=\"center\" >Reprobados</th>
                      <th class=\"table-header\" align=\"center\">Nota Mínima</th>
                      <th class=\"table-header\" align=\"center\">Nota Maxima</th>
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
                                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                if (($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "id_institucion_formadora") == $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "id"))) {
                    echo "                                  
                                    <th> ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "numest"), "html", null, true);
                    echo " </th>
                                    <th> ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "estex"), "html", null, true);
                    echo " </th>
                                    <th> ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "aprobados"), "html", null, true);
                    echo " </th>
                                    <th> ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "reprobados"), "html", null, true);
                    echo " </th>
                                    <th> ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "minimo"), "html", null, true);
                    echo " </th>
                                    <th> ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "maximo"), "html", null, true);
                    echo " </th>
                                    
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " 
                            </tr>                           
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['univs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>           
                </table> 
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_pruebaCon");
        echo "\"> Regresar </a>          
                <br />
                <br />            
            </div>
                  
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:RepPruebaCon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  124 => 38,  116 => 35,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  40 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
