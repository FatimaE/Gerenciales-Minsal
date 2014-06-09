<?php

/* minsalSIGminsalSIGBundle:Index:index.html.twig */
class __TwigTemplate_03285cfe037b2c0c12fefa74746d8c631034582376d73882d2de635fe9e23918 extends Twig_Template
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
        // line 44
        echo "\t\t
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
\t
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SIGSS";
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
\t\t\t<div class=\"container\">
                        <div class=\"centerDiv\">                                                                                         
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/encabezado.png"), "html", null, true);
        echo "\">
                        </div> 

                            <div class=\"panel panel-fondo\">
                              <div class=\"panel-body\">         
                            
                            
\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-login")));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t<div class=\"centerDiv\">
\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/contact.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<h2 class=\"form-login-heading text-center\"><Strong>Bienvenido</Strong></h2>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "</p>
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t\t\t
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresar"), 'widget');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                              
                             </div>
                            </div> 
\t\t\t</div>
\t\t";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t<script language=\"JavaScript\" src =\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Index:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  145 => 46,  142 => 45,  132 => 38,  128 => 37,  124 => 36,  119 => 34,  115 => 33,  109 => 30,  104 => 28,  100 => 27,  90 => 20,  83 => 17,  77 => 11,  73 => 10,  69 => 9,  64 => 8,  61 => 7,  55 => 6,  49 => 49,  47 => 45,  44 => 44,  42 => 17,  36 => 13,  34 => 7,  30 => 6,  23 => 1,);
    }
}
