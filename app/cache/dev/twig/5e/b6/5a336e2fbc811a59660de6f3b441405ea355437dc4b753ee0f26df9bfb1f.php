<?php

/* minsalSIGminsalSIGBundle:Administracion:consultarUsuario.html.twig */
class __TwigTemplate_5eb65a336e2fbc811a59660de6f3b441405ea355437dc4b753ee0f26df9bfb1f extends Twig_Template
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
\t\t\t\t\t\t<td class=\"table-header\"> Nombres  </td>
\t\t\t\t\t\t<td class=\"table-header\"> Apellidos </td>
                                                <td class=\"table-header\"> Tipo de usuario </td>
                                                <td class=\"table-header\"> Nombre de Usuario </td>
                                                <td class=\"table-header\"> Acciones </d>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["fos_user_user"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
                                                    \t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idEmpleado"), "PrimerNombre"), "html", null, true);
            echo " </td>
                                                        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idEmpleado"), "PrimerApellido"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idRol"), "nombreRol"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "username"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> 
                                                            
                                                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_ModificarUsuario", array("id" => $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "id"))), "html", null, true);
            echo "\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\" /> </a>
                                                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_EliminarUsuario", array("id" => $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('¿Seguro que desea continuar con la eliminación?')\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" /> </a>
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fos_user_user'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('routing')->getPath("minsal_si_gminsal_sig_InsertarUsuario");
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NuevoUsuario"), 'widget');
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
        return "minsalSIGminsalSIGBundle:Administracion:consultarUsuario.html.twig";
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
