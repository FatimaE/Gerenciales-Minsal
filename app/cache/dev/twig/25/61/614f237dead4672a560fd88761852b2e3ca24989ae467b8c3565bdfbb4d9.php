<?php

/* minsalSIGminsalSIGBundle:Administracion:consultarEmpleado.html.twig */
class __TwigTemplate_2561614f237dead4672a560fd88761852b2e3ca24989ae467b8c3565bdfbb4d9 extends Twig_Template
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
\t\t<h3 class=\"text-center text-primary\"> Usuarios </h3>
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
\t\t\t\t\t\t<td class=\"table-header\"> Cargo  </td>
                                                <td class=\"table-header\"> Nombres </td>
\t\t\t\t\t\t<td class=\"table-header\"> Apellidos </td>
                                                <td class=\"table-header\"> Email </td>
                                                <td class=\"table-header\"> Acciones </d>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) ? $context["empleados"] : $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["Empleado"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
                                                    \t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "idCargo"), "nombreCargo"), "html", null, true);
            echo " </td>
                                                        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "PrimerNombre"), "html", null, true);
            echo " </td>
                                                        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "PrimerApellido"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "emailInstitucional"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> 
                                                            
                                                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_ModificarEmpleado", array("idEmpleado" => $this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "idEmpleado"))), "html", null, true);
            echo "\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\" /> </a>
                                                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_EliminarEmpleado", array("idEmpleado" => $this->getAttribute((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")), "idEmpleado"))), "html", null, true);
            echo "\" onclick=\"return confirm('¿Seguro que desea continuar con la eliminación?')\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" /> </a>
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div class=\"container top\">
\t";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_InsertarEmpleado");
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NuevoEmpleado"), 'widget');
        echo "</a>
\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Administracion:consultarEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  114 => 43,  110 => 42,  106 => 41,  98 => 35,  85 => 30,  79 => 29,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  54 => 21,  41 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
