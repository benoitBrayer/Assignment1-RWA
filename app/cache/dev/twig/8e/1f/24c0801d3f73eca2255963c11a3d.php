<?php

/* ITBUltimateFrisbeeBundle:Contact:contact.html.twig */
class __TwigTemplate_8e1f24c0801d3f73eca2255963c11a3d extends Twig_Template
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
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">General informations</a></li>
      <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Location</a></li>
    </ul>
    <table class=\"table\">
    \t<tbody>
    \t\t<tr>
\t          <td>Company description</td>
\t          <td>
\t          \t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("doc/document.docx"), "html", null, true);
        echo "\">Download</a> |
\t          \t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\">View</a>
\t          </td>
\t        </tr>
\t\t\t<tr>
\t          <td>Address</td>
\t          <td>Ultimate frisbee shop
\t              <br />Institute of Technology Blanchardstown, 
\t              <br />Blanchardstown Road North, 
\t          \t  <br />Dublin 15
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>Email address</td>
\t          <td><a href=\"mailto:info@itb.ie\">Email Us: info@itb.ie</a></td>
\t        </tr>
\t        <tr>
\t          <td>Phone number</td>
\t          <td>+353 (1) 8851000</td>
\t        </tr>
\t        <tr>
\t          <td>Fax</td>
\t          <td>+353 (1) 8851001</td>
\t        </tr>
\t      </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  47 => 14,  75 => 32,  105 => 58,  21 => 3,  60 => 20,  54 => 14,  275 => 111,  255 => 93,  252 => 92,  249 => 91,  239 => 23,  235 => 22,  230 => 21,  227 => 20,  221 => 18,  216 => 17,  204 => 13,  198 => 11,  186 => 7,  180 => 6,  173 => 112,  171 => 111,  167 => 109,  165 => 91,  144 => 78,  138 => 74,  126 => 68,  122 => 67,  97 => 36,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 24,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 58,  101 => 55,  80 => 24,  63 => 21,  36 => 6,  156 => 84,  148 => 79,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 33,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 15,  203 => 84,  199 => 83,  194 => 80,  192 => 9,  189 => 8,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 69,  125 => 49,  119 => 45,  116 => 63,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 52,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 31,  72 => 19,  64 => 17,  53 => 13,  50 => 10,  48 => 10,  41 => 11,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 62,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 12,  46 => 11,  43 => 10,  40 => 8,  37 => 7,  34 => 8,  31 => 4,  28 => 3,);
    }
}