<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f5573b62e0f5d1ab4564a2aa8a709b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form novalidate action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">
     <p clas=\"alert alert-danger span 6\">
     ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
     ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
     </p>
     <div class=\"control-group\">
     \t<label class=\"control-label\" for=\"inputUsername\">Username</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("id" => "inputUsername", "placeholder" => "Username", "class" => "span4")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"control-group\">
\t    <label class=\"control-label\" for=\"inputEmail\">Email</label>
\t    <div class=\"controls\">
\t    \t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("id" => "inputEmail", "placeholder" => "Email address", "class" => "span4")));
        echo "
    \t</div>
\t</div>
    <div class=\"control-group\">
    \t<label class=\"control-label\" for=\"inputPassword\">Password</label>
\t    <div class=\"controls\">
\t    \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'widget', array("attr" => array("id" => "inputPassword", "placeholder" => "Password", "class" => "span4")));
        echo "
    \t</div>
\t</div>
    <div class=\"control-group\">
    \t<label class=\"control-label\" for=\"inputPasswordConfirmation\">Password confirmation</label>
\t    <div class=\"controls\">
\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'widget', array("attr" => array("id" => "inputPasswordConfirmation", "placeholder" => "Password confirmation", "class" => "span4")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"control-group\">
\t\t<div class=\"controls\">
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Submit registration\"/>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 11,  105 => 10,  21 => 1,  60 => 16,  47 => 11,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 28,  36 => 13,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 35,  110 => 42,  85 => 5,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 6,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 35,  73 => 3,  69 => 30,  56 => 15,  32 => 11,  26 => 3,  22 => 3,  25 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 26,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 8,  94 => 7,  81 => 18,  78 => 36,  72 => 16,  64 => 27,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 7,  33 => 10,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 21,  52 => 13,  49 => 13,  46 => 15,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 5,  28 => 7,);
    }
}
