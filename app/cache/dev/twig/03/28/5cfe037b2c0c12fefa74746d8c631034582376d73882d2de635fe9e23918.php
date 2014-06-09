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
        // line 33
        echo "\t\t
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
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
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-login")));
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t<div class=\"centerDiv\">
\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/contact.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<h2 class=\"form-login-heading text-center\">Bienvenido al SIGSS</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t\t\t
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresar"), 'widget');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "\t\t\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t<script language=\"JavaScript\" src =\"";
        // line 36
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
        return array (  136 => 36,  131 => 35,  128 => 34,  121 => 30,  117 => 29,  113 => 28,  108 => 26,  104 => 25,  98 => 22,  93 => 20,  89 => 19,  83 => 17,  77 => 11,  73 => 10,  69 => 9,  64 => 8,  61 => 7,  55 => 6,  49 => 38,  47 => 34,  44 => 33,  42 => 17,  36 => 13,  34 => 7,  30 => 6,  23 => 1,);
    }
}
