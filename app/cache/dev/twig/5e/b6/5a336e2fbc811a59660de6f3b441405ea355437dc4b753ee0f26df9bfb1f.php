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
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " fade in\">
\t\t\t\t<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
\t\t\t\t";
            // line 10
            if ($this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : null), "title", array(), "any", true, true)) {
                // line 11
                echo "\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "title"), "html", null, true);
                echo "</strong>
\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "message"), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t<h3 class=\"text-center text-primary\"> Usuarios </h3>
\t\t<br />
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-hover table-condensed\">
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<tr class=\"success\">
\t\t\t\t\t\t<td class=\"table-header\"> Nombres  </td>
\t\t\t\t\t\t<td class=\"table-header\"> Apellidos </td>
                                                <td class=\"table-header\"> Tipo de usuario </td>
                                                <td class=\"table-header\"> Nombre de Usuario </td>
\t\t\t\t\t\t<td class=\"table-header\"> Activo </d>
                                                <td class=\"table-header\"> Acciones </d>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["fos_user_user"]) {
            // line 33
            echo "\t\t\t\t\t\t<tr>
                                                    \t<td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idEmpleado"), "PrimerNombre"), "html", null, true);
            echo " </td>
                                                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idEmpleado"), "PrimerApellido"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "idRol"), "nombreRol"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "username"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "enabled"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td> 
                                                            
                                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("minsal_si_gminsal_sig_ModificarUsuario", array("id" => $this->getAttribute((isset($context["fos_user_user"]) ? $context["fos_user_user"] : $this->getContext($context, "fos_user_user")), "id"))), "html", null, true);
            echo "\"> <img border='0' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\" /> </a>
                                                            <a href=\"";
            // line 42
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
        // line 47
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div class=\"container top\">
\t";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
\t";
        // line 56
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
        return array (  153 => 56,  148 => 54,  144 => 53,  136 => 47,  123 => 42,  117 => 41,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  92 => 33,  88 => 32,  72 => 18,  65 => 16,  59 => 14,  54 => 12,  49 => 11,  47 => 10,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
