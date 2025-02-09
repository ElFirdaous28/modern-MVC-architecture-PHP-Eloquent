<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* templates/baseTemplate.html */
class __TwigTemplate_ab1e30dfe372f83fc5228c6f7c1b213d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"flex h-screen bg-gray-100\">
    <!-- Include Sidebar Partial -->
    ";
        // line 13
        $this->loadTemplate("partials/sidebar.html", "templates/baseTemplate.html", 13)->display($context);
        // line 14
        echo "
    <!-- Main Content Area -->
    <div class=\"flex-1 flex flex-col\">
        <!-- Include Top Bar Partial -->
        ";
        // line 18
        $this->loadTemplate("partials/topBar.html", "templates/baseTemplate.html", 18)->display($context);
        // line 19
        echo "
        <!-- Content Section, This will be overwritten in child templates -->
        <div class=\"flex-1 flex items-center justify-center\">
            ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        </div>
    </div>
</body>

</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
    }

    public function getTemplateName()
    {
        return "templates/baseTemplate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  87 => 22,  81 => 7,  73 => 24,  71 => 22,  66 => 19,  64 => 18,  58 => 14,  56 => 13,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/baseTemplate.html", "C:\\laragon\\www\\modern-MVC-architecture-PHP-Eloquent\\App\\Views\\templates\\baseTemplate.html");
    }
}
