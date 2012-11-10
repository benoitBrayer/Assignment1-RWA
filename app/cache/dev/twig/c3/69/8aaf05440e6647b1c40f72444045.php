<?php

/* ITBUltimateFrisbeeBundle:Contact:mapContact.html.twig */
class __TwigTemplate_c3698aaf05440e6647b1c40f72444045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=en\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgoogleMap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">General informations</a></li>
      <li class=\"active\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Location</a></li>
    </ul>
\t<h2>Itinerary generator</h2>
\t<div id=\"travelMode\">
\t\t\t<p style=\"display:block; float:left;\">By car</p>
\t\t\t<input style=\"display:block; float:left;\" type=\"radio\" name=\"optionsTravelMode\" value=\"car\" checked>
\t\t\t<p style=\"display:block; float:left;\">By foot</p>
\t\t\t<input style=\"display:block; float:left;\" type=\"radio\" name=\"optionsTravelMode\" value=\"walk\">
\t</div>
\t<div id=\"control_panel\" style=\"display:block;width:30px;text-align:left;padding-top:20px; margin-bottom:30px\">
\t\t<form class=\"form-horizontal\">
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"start\">Your address</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"text\" id=\"start\" class=\"span8\" placeholder=\"Address\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"control-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-success\" value=\"Generate road\" onclick=\"calcRoute();\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
    </div>
    
    <img id=\"imageForLink\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
\t
\t<div id=\"directions_panel\" style=\"display:block; float:left; width:28%; margin-right: 8px; overflow-y:auto; height:500px; padding-right:5px;\">
\t    <p class=\"alert alert-info\">No directions informations availiable yet. Please generate the road using the from above this text.</p>
    </div>
    
\t<div id=\"map_canvas\" style=\"display:block;margin-top:10px;float:rigth;width:650px;height:500px;margin-bottom:20px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Contact:mapContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  95 => 30,  67 => 16,  51 => 13,  47 => 12,  105 => 58,  21 => 3,  60 => 19,  54 => 11,  298 => 121,  278 => 103,  275 => 102,  272 => 101,  262 => 23,  258 => 22,  253 => 21,  250 => 20,  244 => 18,  239 => 17,  233 => 15,  227 => 13,  221 => 11,  215 => 9,  212 => 8,  190 => 119,  188 => 101,  179 => 94,  171 => 89,  167 => 88,  139 => 73,  124 => 65,  88 => 50,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 24,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 7,  202 => 66,  196 => 122,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 21,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 62,  110 => 60,  85 => 28,  65 => 19,  59 => 14,  45 => 10,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 12,  89 => 27,  82 => 48,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 6,  199 => 83,  194 => 121,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 77,  130 => 68,  125 => 49,  119 => 46,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 84,  153 => 79,  150 => 49,  147 => 51,  143 => 46,  137 => 72,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 57,  99 => 55,  94 => 52,  81 => 38,  78 => 31,  72 => 19,  64 => 15,  53 => 13,  50 => 10,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 78,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 64,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 12,  55 => 14,  52 => 10,  49 => 12,  46 => 9,  43 => 10,  40 => 6,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
