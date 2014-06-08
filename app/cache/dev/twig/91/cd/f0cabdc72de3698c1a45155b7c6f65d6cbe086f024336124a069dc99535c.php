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
        return array (  38 => 13,  35 => 4,  26 => 5,  87 => 20,  80 => 19,  46 => 7,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  24 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  62 => 23,  51 => 15,  39 => 6,  32 => 12,  19 => 1,  57 => 16,  54 => 21,  43 => 8,  40 => 7,  33 => 10,  138 => 57,  133 => 55,  130 => 36,  123 => 47,  119 => 31,  115 => 43,  108 => 26,  104 => 25,  98 => 22,  93 => 20,  89 => 20,  83 => 17,  77 => 11,  73 => 10,  69 => 25,  64 => 12,  61 => 7,  55 => 13,  49 => 19,  47 => 36,  44 => 10,  42 => 14,  36 => 7,  34 => 7,  30 => 3,  23 => 1,);
    }
}
