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
class __TwigTemplate_848e506bc6c4d33677304cb6e8aac7787e0a920079930e21ab891e41fbf474b8 extends Template
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
      <meta charset=\"UTF-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
      <title>Belajar Twig</title>
      <link rel=\"stylesheet\" href=\"/node_modules/bootstrap/dist/css/bootstrap.min.css\">
   </head>

   <body>
      <h1>Welcome ";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>
      <i>Umur <b> ";
        // line 14
        echo twig_escape_filter($this->env, ($context["umur"] ?? null), "html", null, true);
        echo "</b></i>
      <h2>Alamat ";
        // line 15
        echo twig_escape_filter($this->env, ($context["alamat"] ?? null), "html", null, true);
        echo "</h2>
   </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "welcome.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.php", "C:\\xampp\\htdocs\\php-twig-posgres-bootstrap\\templates\\welcome.php");
    }
}
