<?php

/* minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig */
class __TwigTemplate_c0cfa2a39e9da8784c133be6206ee4f31fca9b7228be7aa9665849ef70f7ffd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container top\">
\t<div class=\"jumbotron\">
\t\t";
        // line 5
        $this->env->loadTemplate("BraincraftedBootstrapBundle::flash.html.twig")->display(array_merge($context, array("close" => true)));
        // line 6
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal", "label_col" => 3, "widget_col" => 3));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors', array("global_errors" => true));
        echo "
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t<br />
\t\t<div id=\"pass-info\">
\t\t</div>
\t</div>
</div>
";
    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
        // line 16
        echo "\t<script language=\"JavaScript\" src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/password_checker.js"), "html", null, true);
        echo "\"> </script>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  47 => 8,  43 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
