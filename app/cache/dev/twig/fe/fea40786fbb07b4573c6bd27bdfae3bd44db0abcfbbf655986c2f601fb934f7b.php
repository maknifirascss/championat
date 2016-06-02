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
            'panelbody' => array($this, 'block_panelbody'),
            'tableau' => array($this, 'block_tableau'),
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
                    <BR>
                    <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournament\">
                        <div class=\"spsoccer-row-fluid\">
                            <div class=\"torunament-info\">
                                <div class=\"tournament-header\">
                                    <h2 class=\"soccer-title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityLigue"]) ? $context["entityLigue"] : $this->getContext($context, "entityLigue")), "nomLigue", array()), "html", null, true);
        echo "</h2>
                                    <H3>Saison: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "libelle", array()), "html", null, true);
        echo "</h3>
                                </div>
                            </div> <!-- /.spsoccer-col-lg -->
                        </div>
                    </div>
                    <div id=\"akeeba-renderjoomla\">

                        <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournaments spsoccer-match-landing\">

                            <h3 class=\"text-center title\"><span>Matches</span></h3>
                            <!-- START:: fixture -->

                            <br>

                            <!--Debut travail -->   

                               ";
        // line 31
        $this->displayBlock('panelbody', $context, $blocks);
        // line 91
        echo "
                                    <br><br>

";
        // line 94
        $this->displayBlock('tableau', $context, $blocks);
        // line 160
        echo "


                                    <div class=\"soccer-pagination\">
                                        <ul class=\"pagination\">End</ul>\t\t\t</div>
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
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 220
            echo "            <tr>
                <td><a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 231
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
        // line 237
        echo "        </tbody>
        </table>
        
        <ul>
        <li>
            <a href=\"";
        // line 242
        echo $this->env->getExtension('routing')->getPath("matche_new");
        echo "\">
                Create a new entry
            </a>
        </li>
        </ul>
                
                
        -->  
";
    }

    // line 31
    public function block_panelbody($context, array $blocks = array())
    {
        // line 34
        echo "<form method=\"GET\" action=\"";
        echo $this->env->getExtension('routing')->getPath("matche");
        echo "\">

                                <p >


                                <table>
                                    <tr>
                                        <td > <span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\" >     Date début Journée:";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateDebJournee"]) ? $context["dateDebJournee"] : $this->getContext($context, "dateDebJournee")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "</span></td>
                                        <td >&nbsp&nbsp&nbsp&nbsp ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
                                    </tr>
                                    <tr><td >&nbsp</td><td>&nbsp</td></tr>
                                    <tr>
                                        <td>  <span class=\"glyphicon glyphicon-dashboard\" aria-hidden=\"true\">  Date Fin Journée:";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateFinJournee"]) ? $context["dateFinJournee"] : $this->getContext($context, "dateFinJournee")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "</span></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
                                    </tr>

                                </table>











                                <BR>   <BR>

                                <table>
                                    <tr> 
                                        <td > <span class=\"glyphicon glyphicon-sort-by-order-alt\" aria-hidden=\"true\">   <label for=\"jour\">  Journeé:</label></td>
                                        <td style=\"width: 40%\"> <select style=\"width: 150px;\" name=\"journee\" id=\"jour\">
                                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libellejournne"]) ? $context["libellejournne"] : $this->getContext($context, "libellejournne")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 69
            echo "                                                        <option id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo " value =";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo " style=\"width:  50px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</option>     
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                                    </select>
                                                </td>  
                                                <td style=\"width: 20%;\"><button class=\"btn btn-warning\" style=\"background-color: #fad32b;\"  type=\"submit\"   >

                                                        Changer

                                                    </button></span><br></td> 
                                            </tr>
                                        </table>





                                        </p>
                                    </form>



                ";
    }

    // line 94
    public function block_tableau($context, array $blocks = array())
    {
        // line 97
        if (((isset($context["urlidjournee"]) ? $context["urlidjournee"] : $this->getContext($context, "urlidjournee")) > 0)) {
            // line 98
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 99
                echo "

        ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeMatcheJournee"]) ? $context["listeMatcheJournee"] : $this->getContext($context, "listeMatcheJournee")));
                foreach ($context['_seq'] as $context["_key"] => $context["listeMj"]) {
                    // line 102
                    echo "                  ";
                    if (($this->getAttribute($context["listeMj"], "id", array()) === $this->getAttribute($context["entity"], "id", array()))) {
                        // line 103
                        echo "
                                    <div class=\"item-list-wrap\">
                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-1 text-left\">


                                            <span  class=\"spsoccer-team-name\">";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
                        echo "</span>

                                            <img  class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
                        // line 110
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe", array()), "html", null, true);
                        echo ".png\" alt=\"Manchester City\">
                                        </div> <!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12\">

                                            <div class=\"spsoccer-match-date-time\">
                                                <h2>3 : 3</h2>
                                                <span>";
                        // line 117
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
                        echo "</span>,
                                                <span>";
                        // line 118
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "H:i"), "html", null, true);
                        echo " PM</span>
                                            </div>

                                            <p class=\"spsoccer-match-location\"><a href=\"";
                        // line 121
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque", array("matche" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                        echo "\">  <button type=\"button\" class=\"btn btn-info\" style=\"background-color: #fad32b;\">Détail</button></a></p>

                                            <!--p class=\"spsoccer-match-location\">
                                                                            </p -->
                                        </div><!-- /.spsoccer-col-lg -->

                                        <div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right\">
                                            <a href=\"matches/20-manchester-city-vs-bayen-munchen.html\">
                                                <span class=\"spsoccer-team-name\">";
                        // line 129
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
                        echo "</span>

                                                <img class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
                        // line 131
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoEquipeMinMatche/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEquipe2", array()), "html", null, true);
                        echo ".png\" alt=\"Bayern M�nchen\">




                                            </a>
                                        </div><!-- /.spsoccer-col-lg -->

                                    </div>




                  ";
                    }
                    // line 145
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeMj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "

            ";
        } else {
            // line 153
            echo "                                    <p class=\"bg-danger\" style=\"width: 350px; \">  Choissisez la journée</p>
            ";
        }
        // line 155
        echo "                                    </tbody>
                                    </table>


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
        return array (  423 => 155,  419 => 153,  414 => 150,  405 => 146,  399 => 145,  381 => 131,  376 => 129,  365 => 121,  359 => 118,  355 => 117,  344 => 110,  339 => 108,  332 => 103,  329 => 102,  325 => 101,  321 => 99,  316 => 98,  314 => 97,  311 => 94,  288 => 71,  275 => 69,  271 => 68,  243 => 47,  237 => 46,  226 => 42,  220 => 41,  209 => 34,  206 => 31,  193 => 242,  186 => 237,  174 => 231,  168 => 228,  161 => 224,  157 => 223,  153 => 222,  147 => 221,  144 => 220,  140 => 219,  79 => 160,  77 => 94,  72 => 91,  70 => 31,  51 => 15,  47 => 14,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"style="background-image: url('{{ asset('template/images/demo/blog-bg.jpg') }}')"><div class="container"><h2>Copa America 2015 - Matches</h2>*/
/*                         <ol class="breadcrumb">*/
/*                             <span>You are here: &#160;</span><li><a href="../../index-2.html" class="pathway">Home</a></li><li><a href="7.html" class="pathway">LIGA BBVA</a></li><li class="active">Matches</li></ol>*/
/*                     </div></div></div></div></div></section><section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">*/
/*                     </div>*/
/*                     <BR>*/
/*                     <div id="spsoccer" class="spsoccer view-spsoccer-tournament">*/
/*                         <div class="spsoccer-row-fluid">*/
/*                             <div class="torunament-info">*/
/*                                 <div class="tournament-header">*/
/*                                     <h2 class="soccer-title">{{ entityLigue.nomLigue }}</h2>*/
/*                                     <H3>Saison: {{entity3.libelle}}</h3>*/
/*                                 </div>*/
/*                             </div> <!-- /.spsoccer-col-lg -->*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="akeeba-renderjoomla">*/
/* */
/*                         <div id="spsoccer" class="spsoccer view-spsoccer-tournaments spsoccer-match-landing">*/
/* */
/*                             <h3 class="text-center title"><span>Matches</span></h3>*/
/*                             <!-- START:: fixture -->*/
/* */
/*                             <br>*/
/* */
/*                             <!--Debut travail -->   */
/* */
/*                                {% block panelbody -%}*/
/* */
/* */
/*                             <form method="GET" action="{{ path('matche') }}">*/
/* */
/*                                 <p >*/
/* */
/* */
/*                                 <table>*/
/*                                     <tr>*/
/*                                         <td > <span class="glyphicon glyphicon-time" aria-hidden="true" >     Date début Journée:{% for entity in dateDebJournee %}</span></td>*/
/*                                         <td >&nbsp&nbsp&nbsp&nbsp {{entity.dateDebut|date('Y-m-d') }}{%endfor%}</td>*/
/*                                     </tr>*/
/*                                     <tr><td >&nbsp</td><td>&nbsp</td></tr>*/
/*                                     <tr>*/
/*                                         <td>  <span class="glyphicon glyphicon-dashboard" aria-hidden="true">  Date Fin Journée:{% for entity in dateFinJournee %}</span></td>*/
/*                                         <td>&nbsp&nbsp&nbsp&nbsp {{entity.dateFin|date('Y-m-d') }}{%endfor%}</td>*/
/*                                     </tr>*/
/* */
/*                                 </table>*/
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
/*                                 <BR>   <BR>*/
/* */
/*                                 <table>*/
/*                                     <tr> */
/*                                         <td > <span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true">   <label for="jour">  Journeé:</label></td>*/
/*                                         <td style="width: 40%"> <select style="width: 150px;" name="journee" id="jour">*/
/*                                             {% for entity in libellejournne %}*/
/*                                                         <option id={{entity.id}} value ={{entity.id}} style="width:  50px;">{{entity.libelle}}</option>     */
/*                                             {% endfor%}*/
/*                                                     </select>*/
/*                                                 </td>  */
/*                                                 <td style="width: 20%;"><button class="btn btn-warning" style="background-color: #fad32b;"  type="submit"   >*/
/* */
/*                                                         Changer*/
/* */
/*                                                     </button></span><br></td> */
/*                                             </tr>*/
/*                                         </table>*/
/* */
/* */
/* */
/* */
/* */
/*                                         </p>*/
/*                                     </form>*/
/* */
/* */
/* */
/*                 {% endblock %}*/
/* */
/*                                     <br><br>*/
/* */
/* {% block tableau -%}*/
/* */
/* */
/* {% if urlidjournee >0 %}*/
/*     {% for entity in entities %}*/
/* */
/* */
/*         {% for listeMj in listeMatcheJournee %}*/
/*                   {% if listeMj.id is sameas(entity.id) %}*/
/* */
/*                                     <div class="item-list-wrap">*/
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-1 text-left">*/
/* */
/* */
/*                                             <span  class="spsoccer-team-name">{{ entity.idEquipe }}</span>*/
/* */
/*                                             <img  class="spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb" src="{{asset('template/images/logoEquipeMinMatche/')}}{{ entity.idEquipe }}.png" alt="Manchester City">*/
/*                                         </div> <!-- /.spsoccer-col-lg -->*/
/* */
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12">*/
/* */
/*                                             <div class="spsoccer-match-date-time">*/
/*                                                 <h2>3 : 3</h2>*/
/*                                                 <span>{{ entity.date|date('Y-m-d') }}</span>,*/
/*                                                 <span>{{ entity.date|date('H:i') }} PM</span>*/
/*                                             </div>*/
/* */
/*                                             <p class="spsoccer-match-location"><a href="{{ path('butmarque', { 'matche': entity.id }) }}">  <button type="button" class="btn btn-info" style="background-color: #fad32b;">Détail</button></a></p>*/
/* */
/*                                             <!--p class="spsoccer-match-location">*/
/*                                                                             </p -->*/
/*                                         </div><!-- /.spsoccer-col-lg -->*/
/* */
/*                                         <div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 text-right">*/
/*                                             <a href="matches/20-manchester-city-vs-bayen-munchen.html">*/
/*                                                 <span class="spsoccer-team-name">{{entity.idEquipe2}}</span>*/
/* */
/*                                                 <img class="spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb" src="{{asset('template/images/logoEquipeMinMatche/')}}{{ entity.idEquipe2 }}.png" alt="Bayern M�nchen">*/
/* */
/* */
/* */
/* */
/*                                             </a>*/
/*                                         </div><!-- /.spsoccer-col-lg -->*/
/* */
/*                                     </div>*/
/* */
/* */
/* */
/* */
/*                   {% endif %}*/
/*                 {% endfor%}*/
/* */
/* */
/* */
/*         {% endfor %}*/
/* */
/* */
/*             {% else%}*/
/*                                     <p class="bg-danger" style="width: 350px; ">  Choissisez la journée</p>*/
/*             {%endif%}*/
/*                                     </tbody>*/
/*                                     </table>*/
/* */
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
/*                                     <div class="soccer-pagination">*/
/*                                         <ul class="pagination">End</ul>			</div>*/
/*                                     <!-- END:: Pagination -->*/
/* */
/*                                 </div></div>*/
/*                         </div></div></div></div></section>*/
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
/*         <!--*/
/*         */
/*         <h1>Matche list</h1>*/
/*         */
/*         <table class="records_list">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Date</th>*/
/*                     <th>Id</th>*/
/*                     <th>Id</th>*/
/*                     <th>Id</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*     {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('matche_show', { 'id': entity.id }) }}">{{ entity.date|date('Y-m-d H:i:s') }}</a></td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>{{ entity.idEquipe }}</td>*/
/*                 <td>{{ entity.idEquipe2 }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('matche_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('matche_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*     {% endfor %}*/
/*         </tbody>*/
/*         </table>*/
/*         */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('matche_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*         </ul>*/
/*                 */
/*                 */
/*         -->  */
/* {% endblock %}*/
/* */
