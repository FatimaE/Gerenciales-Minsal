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
        // line 41
        echo "\t\t
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
\t
</html>
";
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
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
                <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sigav.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
                <!-- <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/> -->
                <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/escudonacional.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        echo " 
            <div class=\"centerDiv\">
                <div class=\"container\">    
                    <div class=\"panel panel-fondo\">
                      <div class=\"panel-body\">     
                        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-login")));
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"centerDiv\">
                                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/contact.png"), "html", null, true);
        echo "\">
                                <h2 class=\"form-login-heading text-center\"><Strong>Bienvenido</Strong></h2>
                        </div>                                        
                     <p>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "</p>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t\t</br>

                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresar"), 'widget');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                     </div>
                    </div> 
                </div>                
            </div>           
        ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "                <script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
                <script language=\"JavaScript\" src =\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
        ";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Index:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  140 => 43,  137 => 42,  126 => 34,  122 => 33,  118 => 32,  112 => 29,  108 => 28,  102 => 25,  97 => 23,  93 => 22,  84 => 17,  78 => 11,  74 => 10,  70 => 9,  65 => 8,  62 => 7,  56 => 6,  49 => 46,  47 => 42,  44 => 41,  42 => 17,  36 => 13,  34 => 7,  30 => 6,  23 => 1,);
    }
}
