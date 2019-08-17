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

/* layouts/auth.twig */
class __TwigTemplate_6dd5f0981a55dbdc4747c64011a18becc6864f67a2dd70b7ec072462452a874c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null), "html", null, true);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("assets/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, site_url("/"), "html", null, true);
        echo "\"><b>Sistema de Nominas</b></a>
        </div>
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div>
<!-- jQuery -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url("assets/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url("assets/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 30,  85 => 28,  81 => 26,  79 => 25,  74 => 23,  64 => 16,  59 => 14,  52 => 10,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{{ data['title'] }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/fontawesome-free/css/all.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ base_url('icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ base_url('assets/css/adminlte.min.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ site_url('/') }}\"><b>Sistema de Nominas</b></a>
        </div>
        {% block content %}{% endblock %}
    </div>
<!-- jQuery -->
<script src=\"{{ base_url('assets/jquery/jquery.min.js') }}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ base_url('assets/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
</body>
</html>
", "layouts/auth.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/layouts/auth.twig");
    }
}
