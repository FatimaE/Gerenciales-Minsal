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
                <p>Cuadro estadístico de los resultados de la prueba de conocimiento por carrera</p>
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
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universidad"]) ? $context["universidad"] : $this->getContext($context, "universidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["univs"]) {
            // line 24
            echo "                            <tr>
                                <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["univs"]) ? $context["univs"] : $this->getContext($context, "univs")), "nombre"), "html", null, true);
            echo "</th>
                                <!--Hay que hacer un for (para cada col dentro de fla), para cada registro en carrera_institucion
                                y comparar si el id_inst_carrera recuperado es igual al de la tabla se imprime el valor obtenido, 
                                caso contrario se imprime 0-->
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
        // line 37
        echo "                    </tbody>           
                </table> 
                    <a href=\"";
        // line 39
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
        return array (  84 => 39,  80 => 37,  62 => 25,  59 => 24,  55 => 23,  35 => 6,  31 => 4,  28 => 3,);
    }
}
