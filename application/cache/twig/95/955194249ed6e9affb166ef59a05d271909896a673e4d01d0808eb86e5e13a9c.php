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
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Sistema de Nomina | Dirección Regional de Salud del Estado Barinas</title>
\t<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
\t<meta content=\"\" name=\"description\" />
\t<meta content=\"\" name=\"author\" />
\t
\t<!-- ================== BEGIN BASE CSS STYLE ================== -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url("assets/css/default/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("assets/plugins/fontawesome/css/fontawesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class=\"pace-top\">
\t<!-- begin #page-loader -->
\t<div id=\"page-loader\" class=\"fade show\"><span class=\"spinner\"></span></div>
\t<!-- end #page-loader -->
\t
\t<!-- begin #page-container -->
\t<div id=\"page-container\" class=\"fade\">
\t\t<!-- begin login -->
\t\t<div class=\"login login-with-news-feed\">
\t\t\t<!-- begin news-feed -->
\t\t\t<div class=\"news-feed\">
\t\t\t\t<div class=\"news-image\" style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, base_url("assets/img/login-bg/login-bg-11.jpg"), "html", null, true);
        echo ")\"></div>
\t\t\t\t<div class=\"news-caption\">
\t\t\t\t\t<h4 class=\"caption-title\"><b>Sistema de Nomina</b></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tDirección Regional de Salud del Estado Barinas
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\tIng. Luis Cordero - luis.cordero@dirsaludbarinas.gob.ve
\t\t\t\t\t\t</small>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end news-feed -->
\t\t\t<!-- begin right-content -->
\t\t\t<div class=\"right-content\">
                ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "            </div>
\t\t\t<!-- end right-container -->
\t\t</div>
\t\t<!-- end login -->
    </div>
\t<!-- end page container -->
\t
\t<!-- ================== BEGIN BASE JS ================== -->
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url("assets/js/theme/default.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- ================== END BASE JS ================== -->
</body>
</html>";
    }

    // line 42
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
        return array (  114 => 42,  106 => 52,  102 => 51,  92 => 43,  90 => 42,  72 => 27,  55 => 13,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Sistema de Nomina | Dirección Regional de Salud del Estado Barinas</title>
\t<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
\t<meta content=\"\" name=\"description\" />
\t<meta content=\"\" name=\"author\" />
\t
\t<!-- ================== BEGIN BASE CSS STYLE ================== -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
\t<link href=\"{{ base_url('assets/css/default/app.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ base_url('assets/plugins/fontawesome/css/fontawesome.css') }}\" rel=\"stylesheet\">
\t<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class=\"pace-top\">
\t<!-- begin #page-loader -->
\t<div id=\"page-loader\" class=\"fade show\"><span class=\"spinner\"></span></div>
\t<!-- end #page-loader -->
\t
\t<!-- begin #page-container -->
\t<div id=\"page-container\" class=\"fade\">
\t\t<!-- begin login -->
\t\t<div class=\"login login-with-news-feed\">
\t\t\t<!-- begin news-feed -->
\t\t\t<div class=\"news-feed\">
\t\t\t\t<div class=\"news-image\" style=\"background-image: url({{ base_url('assets/img/login-bg/login-bg-11.jpg') }})\"></div>
\t\t\t\t<div class=\"news-caption\">
\t\t\t\t\t<h4 class=\"caption-title\"><b>Sistema de Nomina</b></h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tDirección Regional de Salud del Estado Barinas
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\tIng. Luis Cordero - luis.cordero@dirsaludbarinas.gob.ve
\t\t\t\t\t\t</small>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end news-feed -->
\t\t\t<!-- begin right-content -->
\t\t\t<div class=\"right-content\">
                {% block content %}{% endblock %}
            </div>
\t\t\t<!-- end right-container -->
\t\t</div>
\t\t<!-- end login -->
    </div>
\t<!-- end page container -->
\t
\t<!-- ================== BEGIN BASE JS ================== -->
\t<script src=\"{{ base_url('assets/js/app.min.js') }}\"></script>
\t<script src=\"{{ base_url('assets/js/theme/default.min.js') }}\"></script>
\t<!-- ================== END BASE JS ================== -->
</body>
</html>", "layouts/auth.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/layouts/auth.twig");
    }
}
