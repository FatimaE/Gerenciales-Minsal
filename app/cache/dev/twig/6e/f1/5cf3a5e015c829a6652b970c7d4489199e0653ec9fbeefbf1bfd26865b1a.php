<?php

/* minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig */
class __TwigTemplate_6ef15cf3a5e015c829a6652b970c7d4489199e0653ec9fbeefbf1bfd26865b1a extends Twig_Template
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
            <div class=\"panel-heading\">Cuadro estadístico de los resultados de la prueba de conocimiento por carrera</div>
            <div class=\"panel-body text-center\" >
                <div class=\"btn-group\">            
                    <table> 
                        <tr>
                            <td>
                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                Período
                                <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                  <li><a href=\"#\">Período 1</a></li>
                                  <li><a href=\"#\">Período 2</a></li>
                                </ul>
                            </td>
                            <td>
                              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                Universidad
                                <span class=\"caret\"></span>
                              </button>
                              <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"></a></li>
                                <li><a href=\"#\"></a></li>
                              </ul>
                            </td>  
                            <td>
                              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                Carrera
                                <span class=\"caret\"></span>
                              </button>
                              <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"></a></li>
                                <li><a href=\"#\"></a></li>
                              </ul>
                            </td>                              
                        </tr>
                    </table>                                   
                </div>                             
            </div>
        </div>
    </div>     
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig";
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
