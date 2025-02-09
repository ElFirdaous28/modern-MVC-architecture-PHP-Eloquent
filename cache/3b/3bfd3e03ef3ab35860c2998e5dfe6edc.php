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

/* partials/topBar.html */
class __TwigTemplate_1ccfd0d28a720821041a9cba4338ad34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Top Bar -->
<div class=\"bg-white shadow-md p-4 flex justify-between items-center\">
    <h1 class=\"text-xl font-semibold\">Dashboard</h1>
    <span class=\"text-gray-600\">Welcome, ";
        // line 4
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/topBar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/topBar.html", "C:\\laragon\\www\\modern-MVC-architecture-PHP-Eloquent\\App\\Views\\partials\\topBar.html");
    }
}
