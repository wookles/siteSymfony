<?php

/* ActorzzzBundle:ActeurView:Actorzzz.html.twig */
class __TwigTemplate_a1550a5cff1be8081c9f2697807514c976f01d664fda360382a54616c5d02c98 extends Twig_Template
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
        echo "Des acteurzzz partout
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Liste des acteurzzzs !</h1>    
\t<p>
\t\tVoici la page pour voir notre liste d'acteurzzz
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ActorzzzBundle:ActeurView:Actorzzz.html.twig";
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
