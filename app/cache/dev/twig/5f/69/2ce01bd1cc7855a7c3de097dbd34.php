<?php

/* ITBUltimateFrisbeeBundle:Home:mapContact.html.twig */
class __TwigTemplate_5f692ce01bd1cc7855a7c3de097dbd34 extends Twig_Template
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
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgoogleMap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Mail references</a></li>
      <li class=\"active\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Map</a></li>
    </ul>
\t<h2>Itinerary generator</h2>
\t<div id=\"control_panel\" style=\"display:block;width:30px;text-align:left;padding-top:20px; margin-bottom:30px\">
\t\t<form class=\"form-horizontal\">
\t\t    <div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"inputAddress\">Your address</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"text\" id=\"start\" placeholder=\"Address\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"control-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-success\" value=\"Generate road\" onclick=\"calcRoute();\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
    </div>
\t
\t<div id=\"directions_panel\" style=\"display:block; float:left; width:30%; margin-right: 8px;\">
\t    <p class=\"alert alert-info\">Lorem ipsum dolor sit amet, eu mel sonet graecis tibique, in pri tale minimum propriae, quo illum augue virtute et. Probatus neglegentur ad pri, cum in rebum persius necessitatibus, veniam explicari per id. Explicari repudiare percipitur has ut, facete nominavi voluptua eos no. Vis scaevola consulatu appellantur ea. Ius amet principes ex, vel novum adipiscing ei.</p>
    </div>
    
\t<div id=\"map_canvas\" style=\"display:block;float:rigth;width:650px;height:500px;margin-bottom:20px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Home:mapContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  75 => 28,  54 => 16,  205 => 76,  198 => 34,  195 => 33,  188 => 31,  185 => 30,  179 => 28,  164 => 23,  146 => 17,  122 => 9,  67 => 51,  21 => 3,  60 => 16,  47 => 10,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 21,  107 => 41,  101 => 76,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 6,  85 => 28,  65 => 19,  59 => 48,  45 => 11,  103 => 77,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 60,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 25,  157 => 61,  152 => 19,  145 => 53,  130 => 48,  125 => 10,  119 => 8,  116 => 7,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 53,  69 => 19,  56 => 14,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 16,  137 => 14,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 17,  53 => 13,  50 => 15,  48 => 8,  41 => 8,  39 => 10,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 27,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 18,  141 => 54,  136 => 47,  134 => 50,  131 => 12,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 17,  55 => 47,  52 => 13,  49 => 13,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}