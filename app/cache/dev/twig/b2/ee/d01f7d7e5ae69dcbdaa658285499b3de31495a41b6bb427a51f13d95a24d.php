<?php

/* minsalSIGminsalSIGBundle:Estrategico:rangoNotas.html.twig */
class __TwigTemplate_b2eed01f7d7e5ae69dcbdaa658285499b3de31495a41b6bb427a51f13d95a24d extends Twig_Template
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
    <div class=\"container\">    ";
        // line 6
        echo "<div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Consolidado del rango de notas de la prueba de conocimiento por universidad y carrera</div>
            <div class=\"panel-body text-center\" >            \t 
                <div class=\"divParam\">
                    <p>Parámetros necesarios para generar el reporte</p>
                    <table class=\"tablaCent\">
                        <tr class=\"text-center\" height=\"25%\">
                            <td width=\"25%\">
                                <select>
                                <option selected>Seleccione un período</option>
                                <option value=\"1\">Período 1</option>
                                <option value=\"2\">Período 2</option>
                                </select>
                            </td>
                            <td width=\"25%\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectcarr"), 'widget');
        echo "
                            </td>                        \t 
                            <td width=\"25%\">    
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectuniv"), 'widget');
        echo "                                    \t 
                            </td>                      \t                            \t 
                            <td width=\"28%\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Generar"), 'widget');
        echo "                              \t 
                            </td>
                        </tr>                   \t
                    </table>            
                </div>
            <br />
            <br />       \t 
            </div>
        </div>
    </div>
                    ";
        // line 38
        echo "    <div class=\"container\">
        <div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Consolidado del rango de notas de la prueba de conocimiento por universidad y carrera</div>
            <table class=\"centerTable\">

                <tr>
                    <td><p>Carrera</p>
                        <p>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["carreraId"]) ? $context["carreraId"] : $this->getContext($context, "carreraId")), "html", null, true);
        echo "<p>
                    </td>  
                    <td><p>Universidad</p>
                        <p>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["univId"]) ? $context["univId"] : $this->getContext($context, "univId")), "html", null, true);
        echo "</p>
                    </td>
                    <td><p>Excelente</p>
                        <p>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["EX"]) ? $context["EX"] : $this->getContext($context, "EX")), "html", null, true);
        echo "<p>
                    </td>  
                    <td><p>Muy Bueno</p>
                        <p>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["MB"]) ? $context["MB"] : $this->getContext($context, "MB")), "html", null, true);
        echo "</p>
                    </td>
                    <td><p>Bueno</p>
                        <p>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["B"]) ? $context["B"] : $this->getContext($context, "B")), "html", null, true);
        echo "<p>
                    </td>  
                    <td><p>Deficiente</p>
                        <p>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["D"]) ? $context["D"] : $this->getContext($context, "D")), "html", null, true);
        echo "</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>


                    <div class=\"container\">
    <div class=\"panel panel-info\">  
            <div class=\"panel-heading\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_rangoNotas");
        echo "\"> Restablecer </a> </div>
            <div class=\"panel-body text-center\" >            \t      \t 
            </div>

    </div>
    </div>\t 
   ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                      
                                        
                                        
\t
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Estrategico:rangoNotas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 76,  129 => 70,  116 => 60,  110 => 57,  104 => 54,  98 => 51,  92 => 48,  86 => 45,  77 => 38,  64 => 27,  58 => 24,  52 => 21,  35 => 6,  31 => 4,  28 => 3,);
    }
}
