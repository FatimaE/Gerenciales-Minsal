<?php

/* minsalSIGminsalSIGBundle:Index:error.html.twig */
class __TwigTemplate_d10c92e355ae8528d2fe5d0cf96f18e63f324d436da2363991f9d78c4b527caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
\t
    <body class=\"body-login\">
\t
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
\t
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SIG_SS";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sigav.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t\t<!-- <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/> -->
\t\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t\t\t<div class=\"container text-center\">
\t\t\t\t<p class=\"lead\"> 
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t<strong> ERROR! </strong> El nombre de usuario o la contraseña son incorrectos. <br /> Favor Verificar
\t\t\t\t\t</div>
\t\t\t\t\t<br />
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_homepage");
        echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\"> Regresar </button>
\t\t\t\t\t</a>
\t\t\t\t </p>
\t\t\t</div>
\t\t";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "\t\t\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t<script language=\"JavaScript\" src =\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Index:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  108 => 33,  105 => 32,  95 => 25,  83 => 17,  77 => 11,  73 => 10,  69 => 9,  64 => 8,  61 => 7,  55 => 6,  49 => 36,  47 => 32,  44 => 31,  42 => 17,  36 => 13,  34 => 7,  30 => 6,  23 => 1,);
    }
}
