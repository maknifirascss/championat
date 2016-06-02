<?php

/* AcmeChampionatBundle:Classement:index.html.twig */
class __TwigTemplate_07a9d1db96609d9f6cb24cb6c6760c0da79e87b87af608e3963caafe38518be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Classement:index.html.twig", 1);
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
        echo "');\"><div class=\"container\"><h2>UEFA</h2>
<ol class=\"breadcrumb\">
\t<span>You are here: &#160;</span><li><a href=\"../../index-2.html\" class=\"pathway\">Home</a></li><li><a href=\"#\" class=\"pathway\">Point Table</a></li><li class=\"active\">UEFA</li></ol>
</div></div></div></div></div></section>
    
    
    <section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
\t</div>
<div id=\"akeeba-renderjoomla\">
<div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournament tournament-standings\">
\t<div class=\"spsoccer-tournament\">

\t\t<div class=\"spsoccer-container\">

\t\t\t<div class=\"spsoccer-row-fluid\">
\t\t\t\t<div class=\"torunament-info\">
\t\t\t\t\t<div class=\"tournament-header\">
\t\t\t\t\t\t<h2 class=\"soccer-title\"> UEFA</h2>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.spsoccer-col-lg -->
\t\t\t</div> <!-- /.spsoccer-row -->

\t\t\t
                        
                        
                        
                        <div id=\"tournament-standing\">

\t\t  \t\t<!-- has Standings -->
\t\t\t\t<div class=\"spsoccer-standings-wrapper\"   >

\t\t\t\t\t<div class=\"pointboard-header\" >
\t\t\t\t\t\t<div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 header-left spsoccer-col-xs-5\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Position</li>
\t\t\t\t\t\t\t\t<li>Team</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"spsoccer-col-lg-8 spsoccer-col-md-8 spsoccer-col-sm-12 header-right spsoccer-col-xs-7\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>P</li>
\t\t\t\t\t\t\t\t<li>W</li>
\t\t\t\t\t\t\t\t<li>D</li>
\t\t\t\t\t\t\t\t<li>L</li>
\t\t\t\t\t\t\t\t<li>GF</li>
\t\t\t\t\t\t\t\t<li>GA</li>
\t\t\t\t\t\t\t\t<li>AVG</li>
\t\t\t\t\t\t\t\t<li>PTS</li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t <div id=\"container\">
                                     ";
        // line 56
        $context["i"] = 0;
        // line 57
        echo "                                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityeq"]) {
            // line 58
            echo "                                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 59
            echo "                                    
                                   
                                    
                                    
\t\t\t\t\t
\t\t\t\t\t<div class=\"item-list-wrap\">
";
            // line 65
            if (($this->getAttribute($context["entityeq"], "id", array()) === (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 66
                echo "\t\t\t\t\t\t<div class=\"spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 spsoccer-col-xs-5 team-position\">
\t\t\t\t\t\t\t<div class=\"teamthumb\">
\t\t\t\t\t\t\t\t<div class=\"inline-block\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 69
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img class=\"spsoccer-img-thumbnail spsoccer-img-responsive\" src=";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoEquipeMin/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "id", array()), "html", null, true);
                echo ".png alt=\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "nomEquipe", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"spsoccer-team-name\"> ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["entityeq"], "nomEquipe", array()), "html", null, true);
                echo "</span>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.spsoccer-col-lg -->
                                                ";
                // line 75
                $context["id"] = $this->getAttribute($context["entityeq"], "id", array());
                // line 76
                echo "                            ";
                $context["nom"] = $this->getAttribute($context["entityeq"], "nomEquipe", array());
            }
            // line 78
            echo "

";
            // line 80
            $context["mj"] = 0;
            $context["mg"] = 0;
            // line 81
            echo "                    ";
            $context["mp"] = 0;
            $context["mn"] = 0;
            $context["bm"] = 0;
            // line 82
            echo "                    ";
            $context["bc"] = 0;
            $context["df"] = 0;
            $context["p"] = 0;
            // line 83
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matche"]) ? $context["matche"] : $this->getContext($context, "matche")));
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 84
                echo "
 
                            ";
                // line 86
                $context["pieces"] = twig_split_filter($this->env, $this->getAttribute($context["mat"], "resultat", array()), "-");
                echo "                     
                        
                        
                        ";
                // line 89
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe", array()))) {
                    // line 90
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 91
                    echo "
                            ";
                    // line 92
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 93
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 94
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 95
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 96
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 97
                        echo "
                            ";
                    }
                    // line 99
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 100
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "   
                                ";
                        // line 101
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 102
                        echo "                            ";
                    }
                    // line 103
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 104
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 105
                        echo "                            ";
                    }
                    // line 106
                    echo "
                        ";
                }
                // line 108
                echo "
                        ";
                // line 109
                if (($this->getAttribute($context["entityeq"], "nomEquipe", array()) == $this->getAttribute($context["mat"], "idEquipe2", array()))) {
                    // line 110
                    echo "                            ";
                    $context["mj"] = ((isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")) + 1);
                    // line 111
                    echo "

                            ";
                    // line 113
                    $context["bm"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"));
                    // line 114
                    echo "                            ";
                    $context["bc"] = ((isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")) + $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array"));
                    // line 115
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") < $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 116
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 3);
                        echo "  
                                ";
                        // line 117
                        $context["mg"] = ((isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")) + 1);
                        // line 118
                        echo "
                            ";
                    }
                    // line 120
                    echo "                            ";
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") == $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 121
                        echo "                                ";
                        $context["p"] = ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1);
                        echo "    
                                ";
                        // line 122
                        $context["mn"] = ((isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")) + 1);
                        // line 123
                        echo "                            ";
                    }
                    // line 124
                    echo "
                            ";
                    // line 125
                    if (($this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 0, array(), "array") > $this->getAttribute((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")), 1, array(), "array"))) {
                        // line 126
                        echo "                                ";
                        $context["mp"] = ((isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")) + 1);
                        // line 127
                        echo "                            ";
                    }
                    // line 128
                    echo "
                        ";
                }
                // line 130
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                    ";
            // line 131
            $context["df"] = ((isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")) - (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")));
            // line 132
            echo "








\t\t\t\t\t\t<div class=\"spsoccer-col-lg-8 spsoccer-col-md-8 spsoccer-col-sm-12 spsoccer-col-xs-7 team-stats\">
\t\t\t\t\t\t\t<div class=\"team-point-table\">
\t\t\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t\t\t<li> ";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["mj"]) ? $context["mj"] : $this->getContext($context, "mj")), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t<li> ";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["mg"]) ? $context["mg"] : $this->getContext($context, "mg")), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t\t\t<li> ";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t\t\t<li> ";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["mn"]) ? $context["mn"] : $this->getContext($context, "mn")), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t\t\t<li> ";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["bm"]) ? $context["bm"] : $this->getContext($context, "bm")), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t\t\t<li> ";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["bc"]) ? $context["bc"] : $this->getContext($context, "bc")), "html", null, true);
            echo " </li>
                                                                        <li> ";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["df"]) ? $context["df"] : $this->getContext($context, "df")), "html", null, true);
            echo " </li>
                                                                        <li class=\"f\">";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- /.spsoccer-col-lg -->

\t\t\t\t\t</div> <!-- ./spsoccer-row -->

\t\t\t\t\t
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityeq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo " \t
                                         </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div> <!-- ./spsoccer-standings-wrapper -->
\t\t\t\t\t\t  \t</div> <!-- /.tournament-standing -->
\t\t
\t\t</div> <!-- /. spsoccer-container -->

\t</div> <!-- /.spsoccer-tournament -->
</div> <!-- /#spsoccer .spsoccer --></div>
</div></div></div></div></section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
    ";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Classement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 159,  332 => 151,  328 => 150,  324 => 149,  320 => 148,  316 => 147,  312 => 146,  308 => 145,  304 => 144,  290 => 132,  288 => 131,  280 => 130,  276 => 128,  273 => 127,  270 => 126,  268 => 125,  265 => 124,  262 => 123,  260 => 122,  255 => 121,  252 => 120,  248 => 118,  246 => 117,  241 => 116,  238 => 115,  235 => 114,  233 => 113,  229 => 111,  226 => 110,  224 => 109,  221 => 108,  217 => 106,  214 => 105,  211 => 104,  208 => 103,  205 => 102,  203 => 101,  198 => 100,  195 => 99,  191 => 97,  189 => 96,  184 => 95,  181 => 94,  178 => 93,  176 => 92,  173 => 91,  170 => 90,  168 => 89,  162 => 86,  158 => 84,  153 => 83,  148 => 82,  143 => 81,  140 => 80,  136 => 78,  132 => 76,  130 => 75,  124 => 72,  117 => 71,  112 => 69,  107 => 66,  105 => 65,  97 => 59,  94 => 58,  89 => 57,  87 => 56,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*      <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"style="background-image: url('{{ asset('template/images/demo/blog-bg.jpg') }}');"><div class="container"><h2>UEFA</h2>*/
/* <ol class="breadcrumb">*/
/* 	<span>You are here: &#160;</span><li><a href="../../index-2.html" class="pathway">Home</a></li><li><a href="#" class="pathway">Point Table</a></li><li class="active">UEFA</li></ol>*/
/* </div></div></div></div></div></section>*/
/*     */
/*     */
/*     <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">*/
/* 	</div>*/
/* <div id="akeeba-renderjoomla">*/
/* <div id="spsoccer" class="spsoccer view-spsoccer-tournament tournament-standings">*/
/* 	<div class="spsoccer-tournament">*/
/* */
/* 		<div class="spsoccer-container">*/
/* */
/* 			<div class="spsoccer-row-fluid">*/
/* 				<div class="torunament-info">*/
/* 					<div class="tournament-header">*/
/* 						<h2 class="soccer-title"> UEFA</h2>*/
/* 					</div>*/
/* 				</div> <!-- /.spsoccer-col-lg -->*/
/* 			</div> <!-- /.spsoccer-row -->*/
/* */
/* 			*/
/*                         */
/*                         */
/*                         */
/*                         <div id="tournament-standing">*/
/* */
/* 		  		<!-- has Standings -->*/
/* 				<div class="spsoccer-standings-wrapper"   >*/
/* */
/* 					<div class="pointboard-header" >*/
/* 						<div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 header-left spsoccer-col-xs-5">*/
/* 							<ul>*/
/* 								<li>Position</li>*/
/* 								<li>Team</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="spsoccer-col-lg-8 spsoccer-col-md-8 spsoccer-col-sm-12 header-right spsoccer-col-xs-7">*/
/* 							<ul>*/
/* 								<li>P</li>*/
/* 								<li>W</li>*/
/* 								<li>D</li>*/
/* 								<li>L</li>*/
/* 								<li>GF</li>*/
/* 								<li>GA</li>*/
/* 								<li>AVG</li>*/
/* 								<li>PTS</li>																					*/
/* 							</ul>*/
/* 						</div>					*/
/* 					</div>*/
/* 					 <div id="container">*/
/*                                      {% set i = 0 %}*/
/*                                      {% for entityeq in entity4 %}*/
/*                                     {% set i = i+1 %}*/
/*                                     */
/*                                    */
/*                                     */
/*                                     */
/* 					*/
/* 					<div class="item-list-wrap">*/
/* {% if entityeq.id is sameas(i) %}*/
/* 						<div class="spsoccer-col-lg-4 spsoccer-col-md-4 spsoccer-col-sm-12 spsoccer-col-xs-5 team-position">*/
/* 							<div class="teamthumb">*/
/* 								<div class="inline-block">*/
/* 									<p>{{i}}</p>*/
/* 								</div>*/
/* 								<img class="spsoccer-img-thumbnail spsoccer-img-responsive" src={{asset('template/images/logoEquipeMin/')}}{{ entityeq.id }}.png alt=" {{ entityeq.nomEquipe }}">*/
/* 								<span class="spsoccer-team-name"> {{ entityeq.nomEquipe }}</span>		*/
/* 							</div>*/
/* 						</div> <!-- /.spsoccer-col-lg -->*/
/*                                                 {% set id = entityeq.id %}*/
/*                             {% set nom= entityeq.nomEquipe %}*/
/* {% endif %}*/
/* */
/* */
/* {% set mj = 0 %}{% set mg = 0 %}*/
/*                     {% set mp = 0 %}{% set mn = 0 %}{% set bm = 0 %}*/
/*                     {% set bc = 0 %}{% set df = 0 %}{% set p = 0 %}*/
/*                     {% for mat in matche %}*/
/* */
/*  */
/*                             {% set pieces =  mat.resultat |split("-") %}                     */
/*                         */
/*                         */
/*                         {% if entityeq.nomEquipe  == mat.idEquipe %}*/
/*                             {% set mj = mj + 1 %}*/
/* */
/*                             {% set bm = bm + pieces[0] %}*/
/*                             {% set bc = bc + pieces[1] %}*/
/*                             {% if pieces[0] > pieces[1] %}*/
/*                                 {% set p =p+ 3 %}  */
/*                                 {% set mg = mg + 1 %}*/
/* */
/*                             {% endif%}*/
/*                             {% if pieces[0] == pieces[1] %}*/
/*                                 {% set p =p+ 1 %}   */
/*                                 {% set mn = mn + 1 %}*/
/*                             {% endif%}*/
/*                             {% if pieces[0] < pieces[1] %}*/
/*                                 {% set mp = mp + 1 %}*/
/*                             {% endif%}*/
/* */
/*                         {% endif%}*/
/* */
/*                         {% if entityeq.nomEquipe  ==mat.idEquipe2 %}*/
/*                             {% set mj = mj + 1 %}*/
/* */
/* */
/*                             {% set bm = bm + pieces[1] %}*/
/*                             {% set bc = bc + pieces[0] %}*/
/*                             {% if pieces[0] < pieces[1] %}*/
/*                                 {% set p =p+ 3 %}  */
/*                                 {% set mg = mg + 1 %}*/
/* */
/*                             {% endif%}*/
/*                             {% if pieces[0] == pieces[1] %}*/
/*                                 {% set p =p+ 1 %}    */
/*                                 {% set mn = mn + 1 %}*/
/*                             {% endif%}*/
/* */
/*                             {% if pieces[0] > pieces[1] %}*/
/*                                 {% set mp = mp + 1 %}*/
/*                             {% endif%}*/
/* */
/*                         {% endif%}*/
/*                     {% endfor%} */
/*                     {% set df = bm - bc %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 						<div class="spsoccer-col-lg-8 spsoccer-col-md-8 spsoccer-col-sm-12 spsoccer-col-xs-7 team-stats">*/
/* 							<div class="team-point-table">*/
/* 								<ul >*/
/* 									<li> {{mj}}</li>*/
/* 									<li> {{mg}} </li>*/
/* 									<li> {{mp}} </li>*/
/* 									<li> {{mn}} </li>*/
/* 									<li> {{bm}} </li>*/
/* 									<li> {{bc}} </li>*/
/*                                                                         <li> {{df}} </li>*/
/*                                                                         <li class="f">{{p}}</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div> <!-- /.spsoccer-col-lg -->*/
/* */
/* 					</div> <!-- ./spsoccer-row -->*/
/* */
/* 					*/
/* 				  {% endfor%} 	*/
/*                                          </div>*/
/* 									*/
/* 				</div> <!-- ./spsoccer-standings-wrapper -->*/
/* 						  	</div> <!-- /.tournament-standing -->*/
/* 		*/
/* 		</div> <!-- /. spsoccer-container -->*/
/* */
/* 	</div> <!-- /.spsoccer-tournament -->*/
/* </div> <!-- /#spsoccer .spsoccer --></div>*/
/* </div></div></div></div></section>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*   */
/*     {% endblock %}*/
/* */
