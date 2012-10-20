<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c1f7bf23962cef5052e0606d9f55cae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  177 => 85,  174 => 84,  159 => 79,  144 => 72,  135 => 69,  122 => 59,  97 => 43,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 86,  133 => 47,  126 => 45,  67 => 20,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 77,  205 => 76,  200 => 92,  191 => 68,  188 => 67,  167 => 82,  146 => 73,  186 => 87,  172 => 58,  165 => 64,  162 => 80,  132 => 54,  18 => 1,  54 => 13,  260 => 236,  258 => 235,  255 => 234,  238 => 93,  236 => 97,  51 => 22,  111 => 40,  138 => 49,  95 => 23,  84 => 29,  75 => 24,  108 => 50,  105 => 49,  21 => 3,  60 => 16,  47 => 13,  38 => 8,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 63,  175 => 59,  158 => 57,  107 => 42,  101 => 25,  80 => 19,  63 => 23,  36 => 5,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 34,  65 => 14,  59 => 12,  45 => 9,  103 => 41,  91 => 41,  74 => 17,  70 => 22,  66 => 20,  89 => 40,  82 => 33,  42 => 8,  223 => 88,  214 => 90,  210 => 78,  203 => 93,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 78,  152 => 75,  145 => 58,  130 => 48,  125 => 52,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 35,  76 => 26,  73 => 23,  69 => 21,  56 => 14,  32 => 5,  26 => 3,  22 => 3,  25 => 3,  23 => 29,  17 => 1,  92 => 33,  86 => 39,  77 => 18,  57 => 13,  29 => 4,  24 => 3,  19 => 2,  68 => 15,  61 => 21,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 28,  104 => 35,  99 => 33,  94 => 7,  81 => 28,  78 => 32,  72 => 32,  64 => 28,  53 => 9,  50 => 14,  48 => 10,  41 => 7,  39 => 8,  35 => 6,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 71,  169 => 83,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 53,  141 => 43,  136 => 55,  134 => 50,  131 => 31,  128 => 39,  120 => 51,  117 => 43,  114 => 41,  109 => 38,  106 => 41,  100 => 47,  96 => 34,  93 => 36,  90 => 21,  87 => 29,  83 => 38,  79 => 23,  71 => 16,  62 => 11,  58 => 25,  55 => 16,  52 => 13,  49 => 12,  46 => 20,  43 => 19,  40 => 18,  37 => 17,  34 => 16,  31 => 4,  28 => 3,);
    }
}
