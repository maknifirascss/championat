<?php

/* AcmeChampionatBundle:Equipe:index.html.twig */
class __TwigTemplate_a282fb49723688ddf952e3bec7128c2704e2ce9a6146a4589e50f309c530e661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeChampionatBundle:Equipe:index.html.twig", 1);
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
        // line 6
        echo "<section id=\"sp-page-title\"><div class=\"row\"><div id=\"sp-title\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div class=\"sp-page-title\"style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/blog-bg.jpg"), "html", null, true);
        echo "')\"><div class=\"container\"><h2>federation tunisienne de football - Equipes</h2>
                        <ol class=\"breadcrumb\">
                            <span>You are here: &#160;</span><li><a href=\"../../index-2.html\" class=\"pathway\">Home</a></li><li><a href=\"7.html\" class=\"pathway\">LIGA BBVA</a></li><li class=\"active\">Equipes</li></ol>
                    </div></div></div></div></div></section><section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
                    </div>
                    <BR>
                    <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournament\">
                        <div class=\"spsoccer-row-fluid\">
                            <div class=\"torunament-info\">
                                <div class=\"tournament-header\">
                                    <h2 class=\"soccer-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nomLigue", array()), "html", null, true);
        echo "</h2>
                                    <H3>Saison: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "libelle", array()), "html", null, true);
        echo "</h3>
                                </div>
                            </div> <!-- /.spsoccer-col-lg -->
                        </div>
                    </div>
                    <div id=\"akeeba-renderjoomla\">

                        <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-tournaments spsoccer-match-landing\">

                            <h3 class=\"text-center title\"><span>Equipes</span></h3>
                            <!-- START:: fixture -->

                            <br>
                            <!-- Liste des equipe chix teriner -->

                            <section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
                                                </div>
                                                <div id=\"akeeba-renderjoomla\">

                                                    <div id=\"spsoccer\" class=\"spsoccer view-spsoccer-teams\">
                                                        <!-- Column -->
                                                        <div class=\"spsoccer-row\">
                                                            <!-- START:: SP Soccer Tournaments -->
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "                                                            <div class=\"spsoccer-col-sm-6\">
                                                                <div class=\"soccer-team\">
                                                                    <div class=\"soccer-team-logo\">
                                                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">

                                                                            <img  class=\"spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/logoEquipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ".png\" alt=\"Manchester City\">
                                                                        </a>
                                                                    </div>
                                                                    <div class=\"team-description\">
                                                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur", array("equipe" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                                            <h3>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomEquipe", array()), "html", null, true);
            echo "</h3>
                                                                        </a>


                                                                    </div>
                                                                </div>
                                                            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                                            <!-- END:: SP Soccer Tournaments -->
                                                        </div>
                                                   <!--    <a href=\"";
        // line 61
        echo "\">edit</a>   -->
                                                        <!-- /Column -->

                                                        <!-- START:: Pagination -->
                                                        <div class=\"soccer-pagination\">
                                                        </div>
                                                        <!-- END:: Pagination -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                                </div></section>

    ";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Equipe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 61,  115 => 59,  101 => 51,  97 => 50,  89 => 46,  84 => 44,  79 => 41,  75 => 40,  49 => 17,  45 => 16,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/* */
/* <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"style="background-image: url('{{ asset('template/images/demo/blog-bg.jpg') }}')"><div class="container"><h2>federation tunisienne de football - Equipes</h2>*/
/*                         <ol class="breadcrumb">*/
/*                             <span>You are here: &#160;</span><li><a href="../../index-2.html" class="pathway">Home</a></li><li><a href="7.html" class="pathway">LIGA BBVA</a></li><li class="active">Equipes</li></ol>*/
/*                     </div></div></div></div></div></section><section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">*/
/*                     </div>*/
/*                     <BR>*/
/*                     <div id="spsoccer" class="spsoccer view-spsoccer-tournament">*/
/*                         <div class="spsoccer-row-fluid">*/
/*                             <div class="torunament-info">*/
/*                                 <div class="tournament-header">*/
/*                                     <h2 class="soccer-title">{{ entity2.nomLigue }}</h2>*/
/*                                     <H3>Saison: {{entity3.libelle}}</h3>*/
/*                                 </div>*/
/*                             </div> <!-- /.spsoccer-col-lg -->*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="akeeba-renderjoomla">*/
/* */
/*                         <div id="spsoccer" class="spsoccer view-spsoccer-tournaments spsoccer-match-landing">*/
/* */
/*                             <h3 class="text-center title"><span>Equipes</span></h3>*/
/*                             <!-- START:: fixture -->*/
/* */
/*                             <br>*/
/*                             <!-- Liste des equipe chix teriner -->*/
/* */
/*                             <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">*/
/*                                                 </div>*/
/*                                                 <div id="akeeba-renderjoomla">*/
/* */
/*                                                     <div id="spsoccer" class="spsoccer view-spsoccer-teams">*/
/*                                                         <!-- Column -->*/
/*                                                         <div class="spsoccer-row">*/
/*                                                             <!-- START:: SP Soccer Tournaments -->*/
/*                                     {% for entity in entities %}*/
/*                                                             <div class="spsoccer-col-sm-6">*/
/*                                                                 <div class="soccer-team">*/
/*                                                                     <div class="soccer-team-logo">*/
/*                                                                         <a href="{{ path('joueur', { 'equipe': entity.id }) }}">*/
/* */
/*                                                                             <img  class="spsoccer-img-thumbnail spsoccer-img-responsive soccer-team-thumb" src="{{asset('template/images/logoEquipe/')}}{{ entity.id }}.png" alt="Manchester City">*/
/*                                                                         </a>*/
/*                                                                     </div>*/
/*                                                                     <div class="team-description">*/
/*                                                                         <a href="{{ path('joueur', { 'equipe': entity.id }) }}">*/
/*                                                                             <h3>{{ entity.nomEquipe }}</h3>*/
/*                                                                         </a>*/
/* */
/* */
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/* {% endfor %}*/
/*                                                             <!-- END:: SP Soccer Tournaments -->*/
/*                                                         </div>*/
/*                                                    <!--    <a href="{#{ path('equipe_edit', { 'id': entity.id }) }#}">edit</a>   -->*/
/*                                                         <!-- /Column -->*/
/* */
/*                                                         <!-- START:: Pagination -->*/
/*                                                         <div class="soccer-pagination">*/
/*                                                         </div>*/
/*                                                         <!-- END:: Pagination -->*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div></div>*/
/*                                 </div></section>*/
/* */
/*     {% endblock %}*/
/* */
