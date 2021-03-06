<?php

/* ITBUltimateFrisbeeBundle:Gallery:gallery.html.twig */
class __TwigTemplate_ef4151944eb89fc9fe242ffa40d59392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/jquery.fancybox.css?v=2.1.2"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/lib/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/jquery.fancybox.js?v=2.1.3"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgallery.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<h1>Gallery</h1>
\t<p class=\"alert alert-info\"> Click on a picture to display the full size</p>
\t<p style=\"margin-left:80px;\">
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/1.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/1Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/2.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/2Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/3.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/3Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/4.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/4Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/5.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/5Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Gallery:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 18,  95 => 30,  67 => 16,  51 => 15,  47 => 14,  21 => 3,  60 => 19,  54 => 11,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 31,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 30,  101 => 34,  80 => 21,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 14,  89 => 24,  82 => 47,  42 => 9,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 46,  116 => 33,  112 => 43,  102 => 28,  98 => 27,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 38,  78 => 31,  72 => 17,  64 => 15,  53 => 13,  50 => 10,  48 => 10,  41 => 11,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 34,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 25,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 13,  58 => 12,  55 => 14,  52 => 10,  49 => 10,  46 => 9,  43 => 10,  40 => 6,  37 => 7,  34 => 8,  31 => 4,  28 => 3,);
    }
}
