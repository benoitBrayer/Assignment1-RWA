<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f534fcc01f1ffd94942bd01311b90b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  84 => 34,  75 => 28,  54 => 16,  277 => 110,  257 => 92,  254 => 91,  251 => 90,  245 => 24,  241 => 23,  237 => 22,  232 => 21,  229 => 20,  212 => 15,  206 => 13,  200 => 11,  191 => 8,  188 => 7,  173 => 110,  167 => 90,  146 => 77,  97 => 54,  88 => 51,  60 => 16,  47 => 11,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 17,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 111,  158 => 83,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 74,  127 => 45,  123 => 44,  115 => 63,  110 => 61,  85 => 28,  65 => 19,  59 => 16,  45 => 11,  103 => 57,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 18,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 9,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 67,  119 => 45,  116 => 44,  112 => 62,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 19,  56 => 15,  32 => 11,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 46,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 73,  129 => 68,  121 => 66,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 39,  53 => 34,  50 => 15,  48 => 8,  41 => 8,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 6,  176 => 71,  169 => 108,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 49,  79 => 25,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 13,  49 => 13,  46 => 11,  43 => 10,  40 => 8,  37 => 7,  34 => 5,  31 => 3,  28 => 1,);
    }
}
