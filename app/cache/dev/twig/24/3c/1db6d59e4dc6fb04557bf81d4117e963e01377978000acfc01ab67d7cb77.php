<?php

/* minsalSIGminsalSIGBundle:Tactico:cum.html.twig */
class __TwigTemplate_243c1db6d59e4dc6fb04557bf81d4117e963e01377978000acfc01ab67d7cb77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>\t\t\t
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"container\">
        <div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Reporte de mejor CUM por carrera y universidad</div>
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
        return "minsalSIGminsalSIGBundle:Tactico:cum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
