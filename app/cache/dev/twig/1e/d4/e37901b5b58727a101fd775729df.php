<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_1ed4e37901b5b58727a101fd775729df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if ($this->getContext($context, "is_writable")) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if ($this->getContext($context, "is_writable")) {
            // line 14
            echo "                Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if ($this->getContext($context, "welcome_url")) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  674 => 146,  671 => 145,  663 => 139,  661 => 138,  659 => 136,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  642 => 130,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  521 => 93,  511 => 90,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  367 => 43,  365 => 42,  362 => 41,  351 => 36,  348 => 35,  343 => 33,  332 => 27,  327 => 26,  319 => 23,  288 => 14,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  254 => 329,  246 => 325,  244 => 324,  242 => 323,  239 => 322,  234 => 314,  231 => 313,  221 => 298,  216 => 287,  211 => 271,  208 => 270,  206 => 265,  198 => 259,  195 => 258,  193 => 249,  185 => 238,  164 => 205,  154 => 191,  139 => 171,  168 => 60,  88 => 27,  784 => 192,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 165,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 147,  672 => 446,  668 => 445,  664 => 444,  660 => 137,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 117,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 92,  516 => 394,  514 => 91,  509 => 391,  504 => 389,  248 => 326,  174 => 219,  144 => 177,  135 => 69,  122 => 129,  97 => 68,  354 => 37,  345 => 34,  341 => 159,  338 => 158,  333 => 157,  321 => 24,  314 => 22,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 248,  180 => 222,  133 => 47,  126 => 45,  67 => 18,  386 => 160,  383 => 159,  377 => 47,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 32,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 21,  309 => 20,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 3,  256 => 330,  252 => 328,  250 => 327,  245 => 97,  232 => 89,  229 => 307,  226 => 306,  224 => 299,  219 => 83,  207 => 73,  205 => 76,  200 => 262,  191 => 68,  188 => 239,  146 => 58,  186 => 67,  172 => 213,  165 => 64,  132 => 157,  108 => 50,  18 => 1,  260 => 236,  258 => 331,  255 => 234,  238 => 93,  236 => 320,  111 => 40,  138 => 49,  95 => 23,  51 => 17,  54 => 12,  177 => 221,  171 => 23,  167 => 206,  162 => 199,  159 => 198,  124 => 144,  105 => 49,  84 => 46,  75 => 25,  21 => 3,  60 => 14,  47 => 15,  38 => 11,  299 => 125,  293 => 16,  290 => 15,  287 => 119,  285 => 13,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 296,  213 => 286,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 102,  101 => 25,  80 => 19,  63 => 22,  36 => 5,  156 => 56,  148 => 17,  142 => 172,  140 => 71,  127 => 145,  123 => 44,  115 => 55,  110 => 42,  85 => 26,  65 => 16,  59 => 2,  45 => 9,  103 => 41,  91 => 28,  74 => 31,  70 => 18,  66 => 19,  89 => 56,  82 => 25,  42 => 8,  223 => 88,  214 => 90,  210 => 78,  203 => 264,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 192,  152 => 185,  145 => 58,  130 => 47,  125 => 52,  119 => 128,  116 => 29,  112 => 108,  102 => 87,  98 => 36,  76 => 26,  73 => 23,  69 => 19,  56 => 14,  32 => 5,  26 => 6,  22 => 3,  25 => 5,  23 => 29,  17 => 1,  92 => 57,  86 => 39,  77 => 23,  57 => 13,  29 => 6,  24 => 3,  19 => 1,  68 => 15,  61 => 16,  44 => 10,  20 => 2,  161 => 63,  153 => 18,  150 => 49,  147 => 178,  143 => 57,  137 => 165,  129 => 156,  121 => 35,  118 => 50,  113 => 44,  104 => 101,  99 => 86,  94 => 67,  81 => 28,  78 => 32,  72 => 21,  64 => 12,  53 => 13,  50 => 13,  48 => 16,  41 => 7,  39 => 6,  35 => 7,  33 => 4,  30 => 5,  27 => 3,  182 => 236,  176 => 62,  169 => 212,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 184,  141 => 56,  136 => 55,  134 => 164,  131 => 31,  128 => 39,  120 => 51,  117 => 114,  114 => 113,  109 => 107,  106 => 33,  100 => 30,  96 => 29,  93 => 31,  90 => 21,  87 => 47,  83 => 38,  79 => 24,  71 => 23,  62 => 3,  58 => 20,  55 => 14,  52 => 17,  49 => 11,  46 => 11,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
