<?php

/* ITBUltimateFrisbeeBundle:Shop:admin.html.twig */
class __TwigTemplate_d4a57bd104f0d668c447ee7ff6051551 extends Twig_Template
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
        echo "\t<h1>Add product</h1>
\t<br />
\t\t<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_admin"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
\t\t\t<fieldset>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"inputName\">Name</label>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"inputDescription\">Description</label>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"inputImage\">Image link</label>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"inputPrice\">Price</label>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "price"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "price"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save product</button>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Shop:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 12,  21 => 3,  60 => 19,  54 => 14,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 60,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 46,  63 => 21,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 47,  42 => 8,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 45,  116 => 62,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 26,  69 => 25,  56 => 16,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 27,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 31,  72 => 26,  64 => 20,  53 => 15,  50 => 15,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 33,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 15,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
