<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_500b08fa271abd0b2fa7376ac61b767a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  138 => 61,  95 => 45,  51 => 12,  84 => 39,  75 => 27,  54 => 16,  146 => 17,  122 => 9,  67 => 37,  21 => 1,  60 => 16,  47 => 13,  38 => 6,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 62,  80 => 37,  63 => 23,  36 => 5,  156 => 20,  148 => 55,  142 => 50,  140 => 15,  127 => 45,  123 => 44,  115 => 44,  110 => 6,  85 => 28,  65 => 19,  59 => 22,  45 => 9,  103 => 41,  91 => 20,  74 => 22,  70 => 14,  66 => 21,  89 => 20,  82 => 46,  42 => 8,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 39,  69 => 19,  56 => 17,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 29,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 22,  29 => 3,  24 => 9,  19 => 2,  68 => 22,  61 => 19,  44 => 8,  20 => 1,  161 => 63,  153 => 19,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 24,  64 => 17,  53 => 13,  50 => 14,  48 => 11,  41 => 11,  39 => 10,  35 => 5,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 62,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 13,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 40,  90 => 43,  87 => 31,  83 => 29,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 13,  49 => 13,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
