<?php

/* minsalSIGminsalSIGBundle:Administracion:consultarCargo.html.twig */
class __TwigTemplate_0b1707f4755ff4246249d0122ff0dcc27e64977797dd3336d7bcf69a7c42e8a7 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"target\">
</div>
<div class=\"container top\">
\t<div class=\"jumbotron\">
\t\t<h3 class=\"text-center text-primary\"> Cargos </h3>
\t\t<br />
            \t";
        // line 9
        $this->env->loadTemplate("BraincraftedBootstrapBundle::flash.html.twig")->display(array_merge($context, array("close" => true)));
        // line 10
        echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-hover table-condensed\">
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<tr class=\"success\">
\t\t\t\t\t\t<td class=\"table-header\"> Nombre  </td>
\t\t\t\t\t\t<td class=\"table-header\"> Descripcion </td>
                                                <td class=\"table-header\"> Acciones </d>
                                                        
                                        </tr>
\t\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : $this->getContext($context, "cargos")));
        foreach ($context['_seq'] as $context["_key"] => $context["Cargo"]) {
            // line 21
            echo "\t\t\t\t\t\t<tr>
                                                    \t<td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Cargo"]) ? $context["Cargo"] : $this->getContext($context, "Cargo")), "nombreCargo"), "html", null, true);
            echo " </td>
                                                        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Cargo"]) ? $context["Cargo"] : $this->getContext($context, "Cargo")), "descripcion"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> 
                                                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_modificarCargo", array("idCargo" => $this->getAttribute((isset($context["Cargo"]) ? $context["Cargo"] : $this->getContext($context, "Cargo")), "idCargo"))), "html", null, true);
            echo "\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\" /> </a>
                                                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_eliminarCargo", array("idCargo" => $this->getAttribute((isset($context["Cargo"]) ? $context["Cargo"] : $this->getContext($context, "Cargo")), "idCargo"))), "html", null, true);
            echo "\" onclick=\"return confirm('¿Seguro que desea continuar con la eliminación?')\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" /> </a>
\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cargo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div class=\"container top\">
\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_insertarCargo");
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NuevoCargo"), 'widget');
        echo "</a>
\t";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:consultarCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  104 => 39,  100 => 38,  96 => 37,  88 => 31,  75 => 26,  69 => 25,  64 => 23,  60 => 22,  57 => 21,  53 => 20,  41 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
