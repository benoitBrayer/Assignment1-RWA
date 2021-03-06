<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_9c3caeeed287c2195cc7f9111085c9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  95 => 45,  51 => 12,  84 => 39,  54 => 16,  217 => 89,  211 => 24,  207 => 23,  198 => 21,  195 => 20,  172 => 13,  166 => 11,  154 => 7,  139 => 89,  111 => 43,  105 => 64,  97 => 61,  75 => 27,  21 => 1,  60 => 16,  47 => 13,  38 => 6,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 6,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 28,  65 => 19,  59 => 22,  45 => 9,  103 => 41,  91 => 20,  74 => 22,  70 => 14,  66 => 21,  89 => 56,  82 => 19,  42 => 8,  223 => 96,  214 => 90,  210 => 88,  203 => 22,  199 => 83,  194 => 80,  192 => 62,  189 => 18,  187 => 77,  184 => 17,  178 => 15,  170 => 67,  157 => 8,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 23,  69 => 22,  56 => 17,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 29,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 22,  29 => 3,  24 => 9,  19 => 2,  68 => 22,  61 => 19,  44 => 8,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 62,  94 => 21,  81 => 51,  78 => 28,  72 => 24,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 7,  39 => 10,  35 => 5,  33 => 5,  30 => 3,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 9,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 50,  131 => 31,  128 => 30,  120 => 73,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 40,  90 => 43,  87 => 31,  83 => 29,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 12,  52 => 13,  49 => 13,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
