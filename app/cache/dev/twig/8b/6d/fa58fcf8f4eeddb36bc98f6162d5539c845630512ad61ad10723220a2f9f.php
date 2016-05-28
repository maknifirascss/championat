<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_8b6dfa58fcf8f4eeddb36bc98f6162d5539c845630512ad61ad10723220a2f9f extends Twig_Template
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
        echo "<section id=\"sp-page-title\"><div class=\"row\"><div id=\"sp-title\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div class=\"sp-page-title\"style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/blog-bg.jpg"), "html", null, true);
        echo "')\"><div class=\"container\"><h2>Copa America 2015 - Matches</h2>
                            <ol class=\"breadcrumb\">
                                <span>You are here: &#160;</span><li><a href=\"../../index-2.html\" class=\"pathway\">Home</a></li><li><a href=\"7.html\" class=\"pathway\">LIGA BBVA</a></li><li class=\"active\">Matches</li></ol>
                        </div></div></div></div></div></section><section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
                        </div>
                        <div id=\"akeeba-renderjoomla\">

                            <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournaments spsoccer-match-landing\">

                                <h3 class=\"text-center title\"><span>Matches</span></h3>
                                <!-- START:: fixture -->

                                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "
                                    <div class=\"item-list-wrap\">
                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-left\">
                                            <a href=\"matches/20-manchester-city-vs-bayen-munchen.html\">
                                                <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/team-logo/8.png"), "html", null, true);
            echo "\" alt=\"Manchester City\">
                                                <span class=\"spsoccer-team-name\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div> <!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12\">
                                            <div class=\"spsoccer-match-date-time\">
                                                <span>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
            echo "</span>,
                                                <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "H:i"), "html", null, true);
            echo "</span>
                                            </div>

                                            <p class=\"spsoccer-match-location\">Old Trafford</p>

                                            <!--p class=\"spsoccer-match-location\">
                                                                            </p -->
                                        </div><!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right\">
                                            <a href=\"matches/20-manchester-city-vs-bayen-munchen.html\">
                                                <span class=\"spsoccer-team-name\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
            echo "</span>
                                                <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/team-logo/5.png"), "html", null, true);
<<<<<<< HEAD
            echo "\"  alt=\"Bayern München\" >
=======
            echo "\"  alt=\"Bayern MÃ¼nchen\" >
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c

                                            </a>
                                        </div><!-- /.spsoccer-col-lg -->

                                    </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "   
<<<<<<< HEAD

=======
     <div class=\"item-list-wrap\">
                                                                                            <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-left\">
                                                                                                <a href=\"matches/22-france-vs-brazil.html\">
                                                                                                    <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"../../images/demo/team-logo/5.png\" alt=\"France\">
                                                                                                        <span class=\"spsoccer-team-name\">France</span>
                                                                                                </a>
                                                                                            </div> <!-- /.spsoccer-col-lg -->

                                                                                            <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12\">
                                                                                                <div class=\"spsoccer-match-date-time\">
                                                                                                    <span>05 Oct, 2015</span>,
                                                                                                    <span>02:00 AM</span>
                                                                                                </div>

                                                                                                <p class=\"spsoccer-match-location\">Allianz Arena</p>

                                                                                                <!--p class=\"spsoccer-match-location\">
                                                                                                                                </p -->
                                                                                            </div><!-- /.spsoccer-col-lg -->

                                                                                            <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right\">
                                                                                                <a href=\"matches/22-france-vs-brazil.html\">
                                                                                                    <span class=\"spsoccer-team-name\">Arsenal</span>
                                                                                                    <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"../../images/demo/team-logo/7.png\" alt=\"Arsenal\">
                                                                                                </a>
                                                                                            </div><!-- /.spsoccer-col-lg -->

                                                                                        </div>
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
                                <div class=\"soccer-pagination\">
                                    <ul class=\"pagination\"><li class='active'><a>1</a></li><li><a class='' href='matches9b5f.html?start=5' title='2'>2</a></li><li><a class='next' href='matches9b5f.html?start=5' title='&raquo;'>&raquo;</a></li><li><a class='' href='matches9b5f.html?start=5' title='End'>End</a></li></ul>\t\t\t</div>
                                <!-- END:: Pagination -->

                            </div></div>
                    </div></div></div></div></section>



































    <!--
    
    <h1>Matche list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Id</th>
                <th>Id</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    ";
<<<<<<< HEAD
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 107
            echo "        <tr>
            <td><a href=\"";
            // line 108
=======
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 134
            echo "        <tr>
            <td><a href=\"";
            // line 135
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
            <td>";
<<<<<<< HEAD
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>
            <td>";
            // line 111
=======
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>
            <td>";
            // line 138
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
            echo "</td>
            <td>
            <ul>
                <li>
                    <a href=\"";
<<<<<<< HEAD
            // line 115
=======
            // line 142
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                </li>
                <li>
                    <a href=\"";
<<<<<<< HEAD
            // line 118
=======
            // line 145
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
<<<<<<< HEAD
        // line 124
=======
        // line 151
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
        echo "    </tbody>
</table>

    <ul>
    <li>
        <a href=\"";
<<<<<<< HEAD
        // line 129
=======
        // line 156
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
        echo $this->env->getExtension('routing')->getPath("matche_new");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
            
            
    -->  
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Matche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  219 => 129,  212 => 124,  200 => 118,  194 => 115,  187 => 111,  183 => 110,  179 => 109,  173 => 108,  170 => 107,  166 => 106,  106 => 48,  92 => 41,  88 => 40,  74 => 29,  70 => 28,  61 => 22,  57 => 21,  51 => 17,  47 => 16,  31 => 4,  28 => 3,);
=======
        return array (  246 => 156,  239 => 151,  227 => 145,  221 => 142,  214 => 138,  210 => 137,  206 => 136,  200 => 135,  197 => 134,  193 => 133,  106 => 48,  92 => 41,  88 => 40,  74 => 29,  70 => 28,  61 => 22,  57 => 21,  51 => 17,  47 => 16,  31 => 4,  28 => 3,);
>>>>>>> ee1cfdefa3761c4d5f46bebf7f01f8a1eae0994c
    }
}
