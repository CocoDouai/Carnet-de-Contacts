<?php

/* CarnetContactBundle:Default:afficher.html.twig */
class __TwigTemplate_862de805d2c0e1f448eaea116f633444aeadd82fbadfdcbcf1e013971c822047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CarnetContactBundle:Default:afficher.html.twig", 1);
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
        ";
        // line 6
        $this->loadTemplate("CarnetContactBundle:Default:adresse_content.html.twig", "CarnetContactBundle:Default:afficher.html.twig", 6)->display(array_merge($context, array("link" => false)));
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "CarnetContactBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*         {% include "CarnetContactBundle:Default:adresse_content.html.twig" with { 'link': false } %}*/
/* */
/* {% endblock %}*/
/* */
