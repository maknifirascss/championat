<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_05b319e3ccfecd9e27b153faa3a5d1d565582871a5ab78186cdc46c78de6f454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Matche:index.html.twig", 1);
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
                        </div></div></div></div></div></section>
                            
                            
                            <section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
                        </div>
                        <div id=\"akeeba-renderjoomla\">

                            <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournaments spsoccer-match-landing\">

                                <h3 class=\"text-center title\"><span>Matches</span></h3>
                                <!-- START:: fixture -->

                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "
                                    <div class=\"item-list-wrap\">
                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-left\">
                                            <a href=\"matches/20-manchester-city-vs-bayen-munchen.html\">
                                                <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/team-logo/8.png"), "html", null, true);
            echo "\" alt=\"Manchester City\">
                                                <span class=\"spsoccer-team-name\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
            echo "</span>
                                            </a>
                                        </div> <!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12\">
                                            <div class=\"spsoccer-match-date-time\">
                                                <span>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</span>,
                                                <span>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "H:i"), "html", null, true);
            echo "</span>
                                            </div>

                                            <p class=\"spsoccer-match-location\">Old Trafford</p>

                                            <!--p class=\"spsoccer-match-location\">
                                                                            </p -->
                                        </div><!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right\">
                                            <a href=\"matches/20-manchester-city-vs-bayen-munchen.html\">
                                                <span class=\"spsoccer-team-name\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
            echo "</span>

                                                <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/team-logo/5.png"), "html", null, true);
            echo "\"  alt=\"Bayern M�nchen\" >


                                            </a>
                                        </div><!-- /.spsoccer-col-lg -->

                                    </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "   

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
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 112
            echo "        <tr>
            <td><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
            echo "</td>
            <td>
            <ul>
                <li>
                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </li>
                <li>
                    <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 129
        echo "    </tbody>
</table>

    <ul>
    <li>
        <a href=\"";
        // line 134
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
        return array (  224 => 134,  217 => 129,  205 => 123,  199 => 120,  192 => 116,  188 => 115,  184 => 114,  178 => 113,  175 => 112,  171 => 111,  111 => 53,  96 => 45,  91 => 43,  77 => 32,  73 => 31,  64 => 25,  60 => 24,  54 => 20,  50 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"style="background-image: url('{{ asset('template/images/demo/blog-bg.jpg') }}')"><div class="container"><h2>Copa America 2015 - Matches</h2>*/
/*                             <ol class="breadcrumb">*/
/*                                 <span>You are here: &#160;</span><li><a href="../../index-2.html" class="pathway">Home</a></li><li><a href="7.html" class="pathway">LIGA BBVA</a></li><li class="active">Matches</li></ol>*/
/*                         </div></div></div></div></div></section>*/
/*                             */
/*                             */
/*                             <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">*/
/*                         </div>*/
/*                         <div id="akeeba-renderjoomla">*/
/* */
/*                             <div id="spsoccer" class="spsoccer view-spsoccer-tournaments spsoccer-match-landing">*/
/* */
/*                                 <h3 class="text-center title"><span>Matches</span></h3>*/
/*                                 <!-- START:: fixture -->*/
/* */
/*                                 {% for entity in entities %}*/
/* */
/*                                     <div class="item-list-wrap">*/
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-left">*/
/*                                             <a href="matches/20-manchester-city-vs-bayen-munchen.html">*/
/*                                                 <img class="spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb" src="{{ asset('template/images/demo/team-logo/8.png') }}" alt="Manchester City">*/
/*                                                 <span class="spsoccer-team-name">{{entity.idEquipe}}</span>*/
/*                                             </a>*/
/*                                         </div> <!-- /.spsoccer-col-lg -->*/
/* */
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12">*/
/*                                             <div class="spsoccer-match-date-time">*/
/*                                                 <span>{{ entity.date|date('Y-m-d') }}</span>,*/
/*                                                 <span>{{ entity.date|date('H:i') }}</span>*/
/*                                             </div>*/
/* */
/*                                             <p class="spsoccer-match-location">Old Trafford</p>*/
/* */
/*                                             <!--p class="spsoccer-match-location">*/
/*                                                                             </p -->*/
/*                                         </div><!-- /.spsoccer-col-lg -->*/
/* */
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right">*/
/*                                             <a href="matches/20-manchester-city-vs-bayen-munchen.html">*/
/*                                                 <span class="spsoccer-team-name">{{entity.idEquipe2}}</span>*/
/* */
/*                                                 <img class="spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb" src="{{ asset('template/images/demo/team-logo/5.png') }}"  alt="Bayern M�nchen" >*/
/* */
/* */
/*                                             </a>*/
/*                                         </div><!-- /.spsoccer-col-lg -->*/
/* */
/*                                     </div>*/
/* */
/*                                 {% endfor %}   */
/* */
/*                                 <div class="soccer-pagination">*/
/*                                     <ul class="pagination"><li class='active'><a>1</a></li><li><a class='' href='matches9b5f.html?start=5' title='2'>2</a></li><li><a class='next' href='matches9b5f.html?start=5' title='&raquo;'>&raquo;</a></li><li><a class='' href='matches9b5f.html?start=5' title='End'>End</a></li></ul>			</div>*/
/*                                 <!-- END:: Pagination -->*/
/* */
/*                             </div></div>*/
/*                     </div></div></div></div></section>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <!--*/
/*     */
/*     <h1>Matche list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>Id</th>*/
/*                 <th>Id</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('matche_show', { 'id': entity.id }) }}">{{ entity.date|date('Y-m-d H:i:s') }}</a></td>*/
/*             <td>{{ entity.id }}</td>*/
/*             <td>{{ entity.idEquipe }}</td>*/
/*             <td>{{ entity.idEquipe2 }}</td>*/
/*             <td>*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('matche_show', { 'id': entity.id }) }}">show</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('matche_edit', { 'id': entity.id }) }}">edit</a>*/
/*                 </li>*/
/*             </ul>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/*     <ul>*/
/*     <li>*/
/*         <a href="{{ path('matche_new') }}">*/
/*             Create a new entry*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/*             */
/*             */
/*     -->  */
/* {% endblock %}*/
/* */
