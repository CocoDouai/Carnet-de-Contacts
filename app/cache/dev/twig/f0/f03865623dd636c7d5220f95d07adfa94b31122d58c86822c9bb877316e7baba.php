<?php

/* CarnetContactBundle:Default:editer.html.twig */
class __TwigTemplate_7b56470f4fb85eddd9856b42f26a8451e0b2fe6645e9768c792767d4ec7c01c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CarnetContactBundle:Default:editer.html.twig", 1);
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
        echo "<h1>Editer un contact</h1>

<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carnet_contact_editer", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "CarnetContactBundle:Default:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* <h1>Editer un contact</h1>*/
/* */
/* <form action="{{ path("carnet_contact_editer", { id: id } ) }}" method="post">*/
/*     {{ form_widget(form) }}*/
/*     <input type="submit">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
