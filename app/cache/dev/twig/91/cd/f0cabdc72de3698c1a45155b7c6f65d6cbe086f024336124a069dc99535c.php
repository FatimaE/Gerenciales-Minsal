<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_91cdf0cabdc72de3698c1a45155b7c6f65d6cbe086f024336124a069dc99535c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 4,  26 => 5,  87 => 20,  80 => 19,  44 => 10,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  39 => 6,  32 => 12,  19 => 1,  57 => 16,  54 => 21,  43 => 8,  33 => 10,  173 => 74,  167 => 67,  161 => 62,  150 => 54,  147 => 53,  137 => 47,  131 => 45,  124 => 40,  122 => 39,  108 => 28,  103 => 26,  96 => 22,  86 => 28,  83 => 13,  76 => 8,  71 => 7,  68 => 14,  62 => 23,  55 => 13,  53 => 71,  46 => 7,  42 => 14,  40 => 7,  36 => 7,  34 => 6,  30 => 3,  24 => 4,);
    }
}
