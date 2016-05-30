<?php

/* CarnetContactBundle:Default:adresse_content.html.twig */
class __TwigTemplate_879f1ab31d4ceb1382a4952ac59780a80daa318c2ae516d32700d3f841fd749b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article>
            <header>
                ";
        // line 3
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 4
            echo "                <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carnet_contact_afficher", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id", array()))), "html", null, true);
            echo "\" title=\"Afficher ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "name", array()), "html", null, true);
            echo "</a></h2>
                ";
        } else {
            // line 6
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "name", array()), "html", null, true);
            echo "</h2>
                ";
        }
        // line 8
        echo "                
                <div class=\"admin-adresse\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carnet_contact_editer", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id", array()))), "html", null, true);
        echo "\" title=\"Editer cet adresse\">Editer</a>
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carnet_contact_supprimer", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id", array()))), "html", null, true);
        echo "\" title=\"Supprimer cet adresse\">Supprimer</a>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carnet_contact_homepage", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id", array()))), "html", null, true);
        echo "\" title=\"Retour aux Contacts\">Accueil</a>
                </div>
                
            </header>
                <p>
                   ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "email", array()), "html", null, true);
        echo " 
                </p>
                <p>
                   ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "adresse", array()), "html", null, true);
        echo " 
                </p>
                <p>
                   ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "telephone", array()), "html", null, true);
        echo " 
                </p>
</article>
";
    }

    public function getTemplateName()
    {
        return "CarnetContactBundle:Default:adresse_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  67 => 20,  61 => 17,  53 => 12,  49 => 11,  45 => 10,  41 => 8,  35 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <article>*/
/*             <header>*/
/*                 {% if link %}*/
/*                 <h2><a href="{{ path("carnet_contact_afficher", { id: adresse.id }) }}" title="Afficher {{ adresse.name }}">{{ adresse.name }}</a></h2>*/
/*                 {% else %}*/
/*                 <h2>{{ adresse.name }}</h2>*/
/*                 {% endif %}*/
/*                 */
/*                 <div class="admin-adresse">*/
/*                     <a href="{{ path("carnet_contact_editer", { id: adresse.id }) }}" title="Editer cet adresse">Editer</a>*/
/*                     <a href="{{ path("carnet_contact_supprimer", { id: adresse.id }) }}" title="Supprimer cet adresse">Supprimer</a>*/
/*                     <a href="{{ path("carnet_contact_homepage", { id: adresse.id }) }}" title="Retour aux Contacts">Accueil</a>*/
/*                 </div>*/
/*                 */
/*             </header>*/
/*                 <p>*/
/*                    {{ adresse.email }} */
/*                 </p>*/
/*                 <p>*/
/*                    {{ adresse.adresse }} */
/*                 </p>*/
/*                 <p>*/
/*                    {{ adresse.telephone }} */
/*                 </p>*/
/* </article>*/
/* */
