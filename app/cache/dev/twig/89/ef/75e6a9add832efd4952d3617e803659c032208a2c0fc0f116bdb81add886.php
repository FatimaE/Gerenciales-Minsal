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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "\t\t<br />
        
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        echo "            
                            
        <br />
        <br />
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "   
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
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
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>                
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sigav.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
            <!-- <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/> -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/escudonacional.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"centerTable\">
                <div class=\"table-responsive\">
                        <table class=\"table-borderless\" width=\"0%\">
                                <tbody>
                                        <tr class=\"text-center\">
                                                <td rowspan=2 width=\"20%\">\t\t\t\t\t\t\t\t\t
                                                </td>
                                                <td width=\"60%\">
                                                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/encabezado.png"), "html", null, true);
        echo "\">
                                                </td>
                                                <td rowspan=2 width=\"25%\">
                                                        <p class=\"text-center\"> 
                                                                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nombre_usuario"), "method"), "html", null, true);
        echo "
                                                                <br />
                                                                ";
        // line 29
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
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "id_rol"), "method") == 1)) {
            // line 41
            echo "\t\t\t    <li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_consultarUsuario");
            echo "\">Usuarios</a></li> 
\t\t\t    <li><a href=\"#\">Crear Usuario</a></li>
\t\t\t    <li><a href=\"#\">Modificar Usuario</a></li>
                            <li><a href=\"#\">Eliminar Usuario</a></li>                            
\t\t     ";
        }
        // line 46
        echo "\t\t     ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "id_rol"), "method") == 2)) {
            echo " 
\t\t\t    <li><a href=\"#\">Perfil</a></li>
\t\t\t    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_cum");
            echo "\">Mejor CUM de Estudiantes</a></li>
\t\t\t    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_pruebaCon");
            echo "\">Prueba de Conocimiento</a></li>
\t\t\t    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_plazas");
            echo "\">Remunerados y Ad-Honorem</a></li>
\t\t\t    <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_aprobados");
            echo "\">Estudiantes Aprobados</a></li>
                            <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_distribucion");
            echo "\">Distribución Estudiantes</a></li>
\t\t\t    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_informefinal");
            echo "\">Informe final</a></li>\t\t\t\t\t    
\t\t     ";
        }
        // line 54
        echo "    
\t\t     ";
        // line 55
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
        // line 63
        echo "\t\t</ol>          
            </div>                                 
        ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        echo " \t\t\t
            <div class=\"container\">
                <ol class=\"breadcrumb text-center\"> 
                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_cerrar");
        echo "\">Cerrar Sesión</a></li>  
                    <li><a href=\"#\">Ayuda</a></li> 
                </ol>                      
            </div>\t\t\t
        ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "            <script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"> </script> 
            <script language=\"JavaScript\" src =\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 82,  222 => 81,  219 => 80,  210 => 75,  203 => 72,  197 => 68,  191 => 63,  180 => 55,  177 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  146 => 46,  137 => 41,  135 => 40,  121 => 29,  116 => 27,  109 => 23,  99 => 15,  96 => 14,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  74 => 6,  68 => 5,  62 => 84,  60 => 80,  57 => 79,  55 => 72,  48 => 68,  44 => 66,  42 => 14,  37 => 11,  35 => 6,  31 => 5,  25 => 1,);
    }
}
