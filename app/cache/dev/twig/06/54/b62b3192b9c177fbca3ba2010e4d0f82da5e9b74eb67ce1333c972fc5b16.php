<?php

/* AcmeChampionatBundle:Journee:index.html.twig */
class __TwigTemplate_0654b62b3192b9c177fbca3ba2010e4d0f82da5e9b74eb67ce1333c972fc5b16 extends Twig_Template
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
        echo "<h1>Journee list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Libelle</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journee_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("journee_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Journee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  76 => 26,  58 => 19,  70 => 29,  118 => 63,  77 => 27,  34 => 6,  424 => 186,  325 => 66,  321 => 65,  317 => 64,  313 => 63,  301 => 60,  297 => 59,  293 => 58,  289 => 57,  281 => 55,  277 => 54,  265 => 51,  255 => 45,  248 => 28,  244 => 27,  236 => 25,  232 => 24,  228 => 23,  216 => 20,  212 => 19,  200 => 16,  192 => 14,  188 => 13,  184 => 12,  180 => 11,  65 => 21,  53 => 19,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 187,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 62,  305 => 61,  298 => 91,  294 => 90,  285 => 56,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 46,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 53,  269 => 52,  254 => 92,  243 => 88,  240 => 26,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 22,  221 => 77,  219 => 76,  217 => 75,  208 => 18,  204 => 17,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 15,  63 => 25,  59 => 20,  38 => 6,  94 => 35,  89 => 36,  85 => 38,  75 => 17,  68 => 14,  56 => 21,  87 => 190,  21 => 2,  26 => 6,  93 => 49,  88 => 6,  78 => 26,  46 => 17,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 15,  183 => 82,  171 => 7,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 58,  108 => 209,  101 => 40,  98 => 31,  96 => 35,  83 => 25,  74 => 14,  66 => 15,  55 => 161,  52 => 18,  50 => 18,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 10,  173 => 65,  168 => 6,  164 => 59,  162 => 5,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 40,  99 => 52,  95 => 28,  92 => 21,  86 => 45,  82 => 29,  80 => 44,  73 => 42,  64 => 26,  60 => 22,  57 => 18,  54 => 10,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
