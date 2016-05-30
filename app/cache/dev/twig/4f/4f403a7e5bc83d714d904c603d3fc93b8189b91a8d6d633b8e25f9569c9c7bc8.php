<?php

/* CarnetContactBundle:Default:ajouter.html.twig */
class __TwigTemplate_a78f6fc852437ed8b8afa18f3c111e0687c90b0c5daa76e6ec4d4f1a8ed22f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CarnetContactBundle:Default:ajouter.html.twig", 1);
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
<h1>Ajouter un contact</h1>

<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("carnet_contact_ajouter");
        echo "\" method=\"post\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\">
</form>
   
";
    }

    public function getTemplateName()
    {
        return "CarnetContactBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/* <h1>Ajouter un contact</h1>*/
/* */
/* <form action="{{ path("carnet_contact_ajouter") }}" method="post">*/
/*     {{ form_widget(form) }}*/
/*     <input type="submit">*/
/* </form>*/
/*    */
/* {% endblock %}*/
