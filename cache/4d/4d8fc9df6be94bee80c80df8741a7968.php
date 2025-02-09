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

/* partials/sidebar.html */
class __TwigTemplate_06a817b66a1a26736f98bb63399e3d02 extends Template
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
        echo "<!-- Sidebar -->
<div class=\"w-64 bg-gray-800 text-white flex flex-col p-4\">
    <h2 class=\"text-xl font-bold mb-4\">Admin Panel</h2>
    <nav class=\"space-y-2\">
        <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-700 rounded\">Dashboard</a>
        <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-700 rounded\">Users</a>
        <a href=\"#\" class=\"block px-4 py-2 hover:bg-gray-700 rounded\">Settings</a>
    </nav>
    <div class=\"mt-auto\">
        <a href=\"/logout\" class=\"block px-4 py-2 mt-6 bg-red-600 text-center rounded hover:bg-red-500\">Logout</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sidebar.html", "C:\\laragon\\www\\modern-MVC-architecture-PHP-Eloquent\\App\\Views\\partials\\sidebar.html");
    }
}
