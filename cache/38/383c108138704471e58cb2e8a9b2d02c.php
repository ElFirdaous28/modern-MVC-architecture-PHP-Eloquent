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

/* welcome.php */
class __TwigTemplate_c52df941f2387cbc1f59b1346b027b20 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"flex flex-col items-center justify-center h-screen bg-gray-100 text-gray-800\">
    <div class=\"text-center\">
        <h1 class=\"text-4xl font-bold\">Welcome to Our Website</h1>
        <p class=\"mt-4 text-lg\">Please login or register to continue</p>
        <div class=\"mt-6\">
            <a href=\"/login\" class=\"px-6 py-2 text-white bg-gray-800 rounded-md hover:bg-gray-700\">Login</a>
            <a href=\"/register\" class=\"px-6 py-2 ml-4 text-gray-800 border border-gray-800 rounded-md hover:bg-gray-200\">Register</a>
        </div>
    </div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "welcome.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.php", "C:\\laragon\\www\\modern-MVC-architecture-PHP-Eloquent\\App\\Views\\welcome.php");
    }
}
