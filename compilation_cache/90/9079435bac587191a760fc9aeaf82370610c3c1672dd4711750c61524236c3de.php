<?php

/* main_view.html.twig */
class __TwigTemplate_f30db97304b9bc93e35801c2c4df960282b59d610d792cdd7eb7fe5762448b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_view.html.twig", "main_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>";
        echo $this->getAttribute((isset($context["contents"]) ? $context["contents"] : null), "title", array(), "array");
        echo "</h1>
<p>";
        // line 4
        echo $this->getAttribute((isset($context["contents"]) ? $context["contents"] : null), "content", array(), "array");
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "main_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'template_view.html.twig' %}*/
/* {% block content %}*/
/* <h1>{{ contents['title']|raw }}</h1>*/
/* <p>{{ contents['content']|raw }}</p>*/
/* {% endblock %}*/