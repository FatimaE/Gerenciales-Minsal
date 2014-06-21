<?php

/* minsalSIGminsalSIGBundle:Tactico:perfil.html.twig */
class __TwigTemplate_4c190079edcf78f7a65dd9f9bf8c55edf6988e5e7dd6f3044aa2692469a46db4 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
        <div class=\"panel panel-info\">  
            <div class=\"panel-heading\">Perfil del usuario táctico</div>
            <div class=\"panel-body text-center\" >
                <div class=\"divPerfil\">
                 ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            echo "    
                     <legend class=\"legends\">Datos personales</legend>
                        <br />
                     <table class=\"table-borderless\" >                       
                        <tr class=\"table-borderless\">
                            <th width=\"50%\" class=\"indicadores\">Nombre de usuario:  </th>
                            ";
            // line 15
            $context["nom"] = $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "primer_nombre");
            // line 16
            echo "                            ";
            $context["ape"] = $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "primer_apellido");
            // line 17
            echo "                            <th width=\"60%\" class=\"datos\">";
            echo twig_escape_filter($this->env, (((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) . " ") . (isset($context["ape"]) ? $context["ape"] : $this->getContext($context, "ape"))), "html", null, true);
            echo "</th>
                        </tr>
                        <tr class=\"table-borderless\">
                            <th width=\"50%\" class=\"indicadores\">Cargo:  </th>                            
                            <th width=\"60%\" class=\"datos\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "descripcion"), "html", null, true);
            echo "</th>
                        </tr>
                        <tr class=\"table-borderless\">
                            <th width=\"50%\" class=\"indicadores\">Rol de usuario:  </th>                            
                            <th width=\"60%\" class=\"datos\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "descripcion_rol"), "html", null, true);
            echo "</th>
                        </tr>
                        <tr class=\"table-borderless\">
                            <th width=\"50%\" class=\"indicadores\">Correo institucional:  </th>                            
                            <th width=\"60%\" class=\"datos\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "email_institucional"), "html", null, true);
            echo "</th>
                        </tr>
                       <br />
                     </table>
                        <br />
                        <legend class=\"legends\">Datos de Sesión</legend>
                        <br />
                        <table class=\"table-borderless\">                            
                            <tr class=\"table-borderless\">
                                <th width=\"70%\" class=\"indicadores\">Nombre de Usuario:  </th>                            
                                <th width=\"60%\" class=\"datos\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "username"), "html", null, true);
            echo "</th>
                            </tr>
                            <tr class=\"table-borderless\">
                                <th width=\"50%\" class=\"indicadores\">Contraseña:  </th>                            
                                <th width=\"60%\" class=\"datos\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dat"]) ? $context["dat"] : $this->getContext($context, "dat")), "password"), "html", null, true);
            echo "</th>
                            </tr>
                        </table>
                            <br />                                                  
                        
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                         
                </div>                           
            </div>
        </div>
    </div>        
";
    }

    public function getTemplateName()
    {
        return "minsalSIGminsalSIGBundle:Tactico:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  96 => 43,  89 => 39,  76 => 29,  69 => 25,  62 => 21,  54 => 17,  51 => 16,  49 => 15,  38 => 9,  31 => 4,  28 => 3,);
    }
}
