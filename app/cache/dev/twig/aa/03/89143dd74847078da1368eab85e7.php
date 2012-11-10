<?php

/* ITBUltimateFrisbeeBundle:Home:index.html.twig */
class __TwigTemplate_aa0389143dd74847078da1368eab85e7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFhomePage.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFimageRotator.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFhomePage.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFimageRotator.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"imageRotatorPlaceholder\">
\t\t<ul>
\t\t\t<!-- TODO: add routing path('') -->
\t\t\t<li><a href=\"#\"><img name=\"ultimatePresentationImage\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image1.jpg"), "html", null, true);
        echo "\" alt=\"image accordion ultimate\"/></a></li>
\t\t\t<li><a href=\"#\"><img name=\"productsImage\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.jpg"), "html", null, true);
        echo "\" alt=\"image accordion products\"/></a></li>
\t\t\t<li><a href=\"#\"><img name=\"forumImage\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.jpg"), "html", null, true);
        echo "\" alt=\"image accordion forum\"/></a></li>
\t\t</ul>
\t\t<div id=\"imRotator\">
\t\t\t\t<h4>Our products</h4>
\t\t\t\t<div id=\"photoShow\">
\t\t\t        <div class=\"current\">
\t\t\t            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/imageRotator1.jpg"), "html", null, true);
        echo "\" width=\"150\" height=\"150\" alt=\"Photo image rotator\" class=\"gallery\" />
\t\t\t        </div>
\t\t\t        <div>
\t\t\t            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/imageRotator2.jpg"), "html", null, true);
        echo "\" width=\"150\" height=\"150\" alt=\"Photo image rotator\" class=\"gallery\" />
\t\t\t        </div>
\t\t\t    </div>
\t\t</div>
\t</div>
\t
\t
\t<div id=\"tabs\" style=\"clear:left; display:block;\">
\t    <ul>
\t        <li><a href=\"#tabs-1\">Informations</a></li>
\t        <li><a href=\"#tabs-2\">Contact</a></li>
\t    </ul>
\t    <div id=\"tabs-1\">
\t        <p>This website provide you some basic informations on ultimate frisbee like the the game rules and history you could discover on <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_sport"), "html", null, true);
        echo "\" >the page devote to this sport</a>. You can also search for a tournament in <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament"), "html", null, true);
        echo "\">the tournaments section</a>.</p>
\t    </div>
\t    <div id=\"tabs-2\">
\t        <p>All the way to contact us are listed into our <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">contact page</a>.</p>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  95 => 30,  67 => 16,  51 => 13,  47 => 12,  105 => 58,  21 => 3,  60 => 19,  54 => 11,  298 => 121,  278 => 103,  275 => 102,  272 => 101,  262 => 23,  258 => 22,  253 => 21,  250 => 20,  244 => 18,  239 => 17,  233 => 15,  227 => 13,  221 => 11,  215 => 9,  212 => 8,  190 => 119,  188 => 101,  179 => 94,  171 => 89,  167 => 88,  139 => 73,  124 => 65,  88 => 50,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 24,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 7,  202 => 66,  196 => 122,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 21,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 62,  110 => 60,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 12,  89 => 27,  82 => 48,  42 => 8,  223 => 96,  214 => 90,  210 => 88,  203 => 6,  199 => 83,  194 => 121,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 77,  130 => 68,  125 => 49,  119 => 46,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 84,  153 => 79,  150 => 49,  147 => 51,  143 => 46,  137 => 72,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 57,  99 => 55,  94 => 52,  81 => 21,  78 => 31,  72 => 19,  64 => 15,  53 => 15,  50 => 10,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 78,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 64,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 12,  55 => 14,  52 => 10,  49 => 10,  46 => 9,  43 => 10,  40 => 6,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
