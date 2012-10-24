<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0ed3e3bd6e2f968231cb642399dd6425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  75 => 28,  54 => 16,  205 => 76,  198 => 34,  195 => 33,  188 => 31,  185 => 30,  179 => 28,  164 => 23,  146 => 17,  122 => 9,  67 => 51,  21 => 3,  60 => 16,  47 => 42,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 21,  107 => 41,  101 => 76,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 6,  85 => 28,  65 => 19,  59 => 48,  45 => 11,  103 => 77,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 60,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 25,  157 => 61,  152 => 19,  145 => 53,  130 => 48,  125 => 10,  119 => 8,  116 => 7,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 53,  69 => 19,  56 => 15,  32 => 7,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 11,  19 => 2,  68 => 20,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 16,  137 => 14,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 8,  41 => 8,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 27,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 18,  141 => 54,  136 => 47,  134 => 50,  131 => 12,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 17,  55 => 47,  52 => 13,  49 => 13,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 3,  28 => 1,);
    }
}