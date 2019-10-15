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

/* layouts/alerts.twig */
class __TwigTemplate_40766ba46a62e7a1556ac0bc6055ed3ac910118dad11ecf905128fc6a7a43c3b extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 1), "alert_primary", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"alert alert-primary\" role=\"alert\">
    ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 3), "alert_primary", [], "any", false, false, false, 3), "html", null, true);
            echo "
</div>
";
        }
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 6), "alert_secondary", [], "any", false, false, false, 6)) {
            // line 7
            echo "<div class=\"alert alert-secondary\" role=\"alert\">
    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 8), "alert_secondary", [], "any", false, false, false, 8), "html", null, true);
            echo "
</div>
";
        }
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 11), "alert_success", [], "any", false, false, false, 11)) {
            // line 12
            echo "<div class=\"alert alert-success\" role=\"alert\">
    ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 13), "alert_success", [], "any", false, false, false, 13), "html", null, true);
            echo "
</div>
";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 16), "alert_danger", [], "any", false, false, false, 16)) {
            // line 17
            echo "<div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 18), "alert_danger", [], "any", false, false, false, 18), "html", null, true);
            echo "
</div>
";
        }
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 21), "alert_warning", [], "any", false, false, false, 21)) {
            // line 22
            echo "<div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 23), "alert_warning", [], "any", false, false, false, 23), "html", null, true);
            echo "
</div>
";
        }
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 26), "alert_info", [], "any", false, false, false, 26)) {
            // line 27
            echo "<div class=\"alert alert-info\" role=\"alert\">
    ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 28), "alert_info", [], "any", false, false, false, 28), "html", null, true);
            echo "
</div>
";
        }
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 31), "alert_light", [], "any", false, false, false, 31)) {
            // line 32
            echo "<div class=\"alert alert-light\" role=\"alert\">
    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 33), "alert_light", [], "any", false, false, false, 33), "html", null, true);
            echo "
</div>
";
        }
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 36), "alert_dark", [], "any", false, false, false, 36)) {
            // line 37
            echo "<div class=\"alert alert-dark\" role=\"alert\">
    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "userdata", [], "any", false, false, false, 38), "alert_dark", [], "any", false, false, false, 38), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts/alerts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  116 => 37,  114 => 36,  108 => 33,  105 => 32,  103 => 31,  97 => 28,  94 => 27,  92 => 26,  86 => 23,  83 => 22,  81 => 21,  75 => 18,  72 => 17,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  53 => 8,  50 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if session.userdata.alert_primary %}
<div class=\"alert alert-primary\" role=\"alert\">
    {{ session.userdata.alert_primary }}
</div>
{% endif %}
{% if session.userdata.alert_secondary %}
<div class=\"alert alert-secondary\" role=\"alert\">
    {{ session.userdata.alert_secondary }}
</div>
{% endif %}
{% if session.userdata.alert_success %}
<div class=\"alert alert-success\" role=\"alert\">
    {{ session.userdata.alert_success }}
</div>
{% endif %}
{% if session.userdata.alert_danger %}
<div class=\"alert alert-danger\" role=\"alert\">
    {{ session.userdata.alert_danger }}
</div>
{% endif %}
{% if session.userdata.alert_warning %}
<div class=\"alert alert-warning\" role=\"alert\">
    {{ session.userdata.alert_warning }}
</div>
{% endif %}
{% if session.userdata.alert_info %}
<div class=\"alert alert-info\" role=\"alert\">
    {{ session.userdata.alert_info }}
</div>
{% endif %}
{% if session.userdata.alert_light %}
<div class=\"alert alert-light\" role=\"alert\">
    {{ session.userdata.alert_light }}
</div>
{% endif %}
{% if session.userdata.alert_dark %}
<div class=\"alert alert-dark\" role=\"alert\">
    {{ session.userdata.alert_dark }}
</div>
{% endif %}", "layouts/alerts.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/layouts/alerts.twig");
    }
}
