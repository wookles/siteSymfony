<?php

/* ::base.html.twig */
class __TwigTemplate_254c01679872ce49972075d5f198261932f09dbd30bd18f8a980e308ea484302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" 
\t   \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
    \t<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\"/>  \t
    \t<meta name=\"keywords\" content=\"Acteurs, Actrices, Actorzzz, Actrïzzz, topTenzzz, Armanger, Parmenon, Marechal\"/>
    \t<meta name=\"description\" content=\"Site décalé de référencement et d'informations concernant des acteurs (Actorzzz) et des actrices (Actricszzz), qui permet -en tant que membre- de voter pour faire apparaître dans le topTenzzz les éluzzz de votre coeur\"/>
\t\t<meta name=\"robots\" content= \"noodp\" />
\t\t<META name=\"Date\" content=\"Wed, 16 March 2015 00:00:00\"> 
\t\t<META name=\"owner\" content=\"Armanger, Maréchal, Parminion\">
\t\t
\t\t<! link rel=\"stylesheet\" type=\"text/css\" href=\"http://site.com/resource/doc.css\" />
\t\t

                                
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "\t";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        echo "\t";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  75 => 22,  69 => 19,  63 => 17,  57 => 24,  54 => 23,  52 => 22,  48 => 20,  46 => 19,  41 => 17,  23 => 1,);
    }
}
