<?php

/* 404_view.html.twig */
class __TwigTemplate_f61e8322d65033fb166c2ad45f7c8be7d2221bd666d965bbdabc8d4932b7d3f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminTemplate.html.twig", "404_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>404</h1>
    <p>
        Not found
    </p>
";
    }

    public function getTemplateName()
    {
        return "404_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'adminTemplate.html.twig' %}*/
/* {% block content %}*/
/*     <h1>404</h1>*/
/*     <p>*/
/*         Not found*/
/*     </p>*/
/* {% endblock %}*/
/* */