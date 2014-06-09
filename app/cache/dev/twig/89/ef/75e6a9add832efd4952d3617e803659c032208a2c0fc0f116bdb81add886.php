<?php

/* ::base.html.twig */
class __TwigTemplate_89ef75e6a9add832efd4952d3617e803659c032208a2c0fc0f116bdb81add886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "\t\t<br />
        
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        echo "            
                            
        <br />
        <br />
        ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SIGSS";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>\t\t\t
                <!-- <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/> -->

        ";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "            <div class=\"centerTable\">
                <div class=\"table-responsive\">
                        <table class=\"table-borderless\" width=\"0%\">
                                <tbody>
                                        <tr class=\"text-center\">
                                                <td rowspan=2 width=\"20%\">\t\t\t\t\t\t\t\t\t
                                                </td>
                                                <td width=\"60%\">
                                                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/encabezado.png"), "html", null, true);
        echo "\">
                                                </td>
                                                <td rowspan=2 width=\"25%\">
                                                        <p class=\"text-center\"> 
                                                                ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nombre_usuario"), "method"), "html", null, true);
        echo "
                                                                <br />
                                                                ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nombre_rol"), "method"), "html", null, true);
        echo "
                                                        </p>
                                                </td>
                                        </tr>\t\t\t\t\t\t\t
                                </tbody>
                        </table>
                </div>
            </div>\t
            <br />  
            <div class=\"container\">\t   
                <ol class=\"breadcrumb text-center\">   
\t             ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "id_rol"), "method") == 1)) {
            // line 40
            echo "\t\t\t    <li><a href=\"#\">Usuarios</a></li> 
\t\t\t    <li><a href=\"#\">Crear Usuario</a></li>
\t\t\t    <li><a href=\"#\">Modificar Usuario</a></li>
                            <li><a href=\"#\">Eliminar Usuario</a></li>                            
\t\t     ";
        }
        // line 45
        echo "\t\t     ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "id_rol"), "method") == 2)) {
            echo " 
\t\t\t    <li><a href=\"#\">Perfil</a></li>
\t\t\t    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_cum");
            echo "\">Mejor CUM de Estudiantes</a></li>
\t\t\t    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_pruebaCon");
            echo "\">Prueba de Conocimiento</a></li>
\t\t\t    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_plazas");
            echo "\">Remunerados y Ad-Honorem</a></li>
\t\t\t    <li><a href=\"#\">Estudiantes Aprobados</a></li>
                            <li><a href=\"#\">Distribución Estudiantes</a></li>
\t\t\t    <li><a href=\"#\">Informe final</a></li>\t\t\t    
\t\t     ";
        }
        // line 53
        echo "    
\t\t     ";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "id_rol"), "method") == 3)) {
            echo " 
\t\t\t     <li><a href=\"#\">Perfil</a></li>
\t\t\t     <li><a href=\"#\">Prueba de Conocimiento</a></li>
\t\t\t     <li><a href=\"#\">Consolidado de Plazas</a></li>
\t\t\t     <li><a href=\"#\">Estudiantes Aptos para SS</a></li>
\t\t\t     <li><a href=\"#\">Rango de Notas</a></li>
\t\t\t     <li><a href=\"#\">Monto Total de Plazas</a></li>\t\t\t\t     
\t\t    ";
        }
        // line 62
        echo "\t\t</ol>          
            </div>                                 
        ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        echo " \t\t\t
            <div class=\"container\">
                <ol class=\"breadcrumb text-center\"> 
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_cerrar");
        echo "\">Cerrar Sesión</a></li>  
                    <li><a href=\"#\">Ayuda</a></li> 
                </ol>                      
            </div>\t\t\t
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 74,  179 => 71,  173 => 67,  167 => 62,  156 => 54,  153 => 53,  145 => 49,  141 => 48,  137 => 47,  131 => 45,  124 => 40,  122 => 39,  108 => 28,  103 => 26,  96 => 22,  86 => 14,  83 => 13,  76 => 8,  71 => 7,  68 => 6,  62 => 5,  55 => 78,  53 => 71,  46 => 67,  42 => 65,  40 => 13,  36 => 11,  34 => 6,  30 => 5,  24 => 1,);
    }
}
