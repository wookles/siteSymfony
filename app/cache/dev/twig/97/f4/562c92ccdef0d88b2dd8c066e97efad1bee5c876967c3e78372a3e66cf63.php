<?php

/* ActorzzzBundle:MembreView:Membre.html.twig */
class __TwigTemplate_97f4562c92ccdef0d88b2dd8c066e97efad1bee5c876967c3e78372a3e66cf63 extends Twig_Template
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
        echo "Vos infos
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Votre page membre !</h1>    
\t<p>
\t\tVoici vos infos personnelles :
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ActorzzzBundle:MembreView:Membre.html.twig";
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
