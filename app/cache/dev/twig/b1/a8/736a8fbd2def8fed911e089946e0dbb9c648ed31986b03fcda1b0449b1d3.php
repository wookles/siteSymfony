<?php

/* ActorzzzBundle:AccueilView:Accueil.html.twig */
class __TwigTemplate_b1a8736a8fbd2def8fed911e089946e0dbb9c648ed31986b03fcda1b0449b1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Actorzzz vous souhaite la bienvenue. Actorzzzz : un beau site et bien plus encorezzz !
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Accueil du site !</h1>    
\t<p>
\t\tBienvenue sur le tout nouveau site de référencement pour les fanszzz d'actorszzz et actriszzz. 
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ActorzzzBundle:AccueilView:Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
