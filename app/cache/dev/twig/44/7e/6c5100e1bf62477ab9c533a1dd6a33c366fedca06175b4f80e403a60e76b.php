<?php

/* minsalSIGminsalSIGBundle:Tactico:prueba1.html.twig */
class __TwigTemplate_447e6c5100e1bf62477ab9c533a1dd6a33c366fedca06175b4f80e403a60e76b extends Twig_Template
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
            <div class=\"panel-heading\">Reporte del número de estudiantes aprobados para realizar el servicio social, por carrera y universidad</div>
            <div class=\"panel-body text-center\" >                   
               
                <p>El id que se obtuvo fue  </p>  <br /> 
                ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["varCarInstId"]) ? $context["varCarInstId"] : $this->getContext($context, "varCarInstId")), "html", null, true);
        echo "<br />
              
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_aprobados");
        echo "\"> Regresar </a>          
                <br />
                <br />            
            </div>
                  
        </div>
    </div>     
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:prueba1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  39 => 10,  31 => 4,  28 => 3,);
    }
}
