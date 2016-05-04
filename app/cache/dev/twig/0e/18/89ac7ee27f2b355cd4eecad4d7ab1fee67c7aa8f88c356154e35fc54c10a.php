<?php

/* AcmeChampionatBundle:Butmarque:index.html.twig */
class __TwigTemplate_0e1889ac7ee27f2b355cd4eecad4d7ab1fee67c7aa8f88c356154e35fc54c10a extends Twig_Template
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
        // line 5
        echo "<section id=\"sp-page-title\"><div class=\"row\"><div id=\"sp-title\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \">
                    <div class=\"sp-page-title\"style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/slider/slider2.jpg"), "html", null, true);
        echo "')\"> 
                        <div class=\"container\"><h2>Bercelona</h2>
                                                                                    <ol class=\"breadcrumb\">
                                                                                        <span>You are here: &#160;</span><li><a href=\"../index-2.html\" class=\"pathway\">Home</a></li><li><a href=\"#\" class=\"pathway\">Club List</a></li><li class=\"active\">Bercelona</li></ol>
                                                                                </div></div></div></div></div></section>
                      
                      
                      <section id=\"sp-main-body\"><div class=\"container\"><div class=\"row\"><div id=\"sp-component\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><div id=\"system-message-container\">
                                                                                </div>

                                          </section>














    <h1>Butmarque list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Minute</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "            <tr>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "minute"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("butmarque_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 58
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("butmarque_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Butmarque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 63,  111 => 58,  99 => 52,  93 => 49,  86 => 45,  80 => 44,  77 => 43,  73 => 42,  34 => 6,  31 => 5,  28 => 3,);
    }
}
