<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_a771296379fa3adfa73af49e34d71cbf90ae8bf0148e0027d63e4ff4d885b3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  90 => 32,  194 => 115,  170 => 107,  84 => 29,  76 => 17,  58 => 19,  70 => 29,  118 => 63,  77 => 27,  34 => 6,  424 => 186,  325 => 66,  321 => 65,  317 => 64,  313 => 63,  301 => 60,  297 => 59,  293 => 58,  289 => 57,  281 => 55,  277 => 54,  265 => 51,  255 => 45,  248 => 28,  244 => 27,  236 => 25,  232 => 24,  228 => 23,  216 => 20,  212 => 124,  200 => 118,  192 => 14,  188 => 13,  184 => 12,  180 => 11,  65 => 21,  53 => 11,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 187,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 62,  305 => 61,  298 => 91,  294 => 90,  285 => 56,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 46,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 53,  269 => 52,  254 => 92,  243 => 88,  240 => 26,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 22,  221 => 77,  219 => 129,  217 => 75,  208 => 18,  204 => 17,  179 => 109,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 30,  67 => 15,  63 => 25,  59 => 13,  38 => 6,  94 => 34,  89 => 36,  85 => 38,  75 => 17,  68 => 14,  56 => 11,  87 => 190,  21 => 2,  26 => 9,  93 => 49,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 15,  31 => 3,  28 => 3,  201 => 92,  196 => 15,  183 => 110,  171 => 7,  166 => 106,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 58,  108 => 19,  101 => 40,  98 => 31,  96 => 35,  83 => 25,  74 => 29,  66 => 15,  55 => 161,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 111,  182 => 66,  176 => 10,  173 => 108,  168 => 6,  164 => 59,  162 => 5,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 48,  103 => 40,  99 => 52,  95 => 28,  92 => 41,  86 => 45,  82 => 28,  80 => 44,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
