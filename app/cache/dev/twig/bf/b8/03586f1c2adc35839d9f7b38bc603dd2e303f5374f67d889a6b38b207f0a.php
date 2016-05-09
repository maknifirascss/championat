<?php

/* AcmeChampionatBundle:Matche:index.html.twig */
class __TwigTemplate_bfb803586f1c2adc35839d9f7b38bc603dd2e303f5374f67d889a6b38b207f0a extends Twig_Template
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
            echo "\"  alt=\"Bayern München\" >

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
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 107
            echo "        <tr>
            <td><a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe"), "html", null, true);
            echo "</td>
            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEquipe2"), "html", null, true);
            echo "</td>
            <td>
            <ul>
                <li>
                    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matche_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                </li>
                <li>
                    <a href=\"";
            // line 118
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
        // line 124
        echo "    </tbody>
</table>

    <ul>
    <li>
        <a href=\"";
        // line 129
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
        return array (  219 => 129,  212 => 124,  200 => 118,  194 => 115,  187 => 111,  183 => 110,  179 => 109,  173 => 108,  170 => 107,  166 => 106,  106 => 48,  92 => 41,  88 => 40,  74 => 29,  70 => 28,  61 => 22,  57 => 21,  51 => 17,  47 => 16,  31 => 4,  28 => 3,);
    }
}
