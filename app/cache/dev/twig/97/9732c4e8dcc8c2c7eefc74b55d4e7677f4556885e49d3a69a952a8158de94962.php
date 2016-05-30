<?php

/* CarnetContactBundle:Default:index.html.twig */
class __TwigTemplate_883db102ca3fe64ef64e97ce35bddc89a1ff4e441ba55fddea3787b0a3269dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CarnetContactBundle:Default:index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
<h1>Tous les contacts</h1>

    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("carnet_contact_ajouter");
        echo "\" title=\"Ajouter une adresse\">Ajouter</a></h2>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) ? $context["adresses"] : $this->getContext($context, "adresses")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 10
            echo "       
        ";
            // line 11
            $this->loadTemplate("CarnetContactBundle:Default:adresse_content.html.twig", "CarnetContactBundle:Default:index.html.twig", 11)->display(array_merge($context, array("link" => false)));
            // line 12
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
";
    }

    public function getTemplateName()
    {
        return "CarnetContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  62 => 12,  60 => 11,  57 => 10,  40 => 9,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/* <h1>Tous les contacts</h1>*/
/* */
/*     <a href="{{ path("carnet_contact_ajouter")}}" title="Ajouter une adresse">Ajouter</a></h2>*/
/*     {% for adresse in adresses %}*/
/*        */
/*         {% include "CarnetContactBundle:Default:adresse_content.html.twig" with { 'link': false } %}*/
/* */
/*     {% endfor %}*/
/*     */
/* {% endblock %}*/
/* */
