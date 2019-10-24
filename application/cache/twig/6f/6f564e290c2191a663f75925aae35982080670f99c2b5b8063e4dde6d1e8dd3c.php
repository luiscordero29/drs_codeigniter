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

/* auth/login.twig */
class __TwigTemplate_a40735a74c9fa91d6291283f7a9472b456a10f4e490a279c2ec683012c725da2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/auth.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/auth.twig", "auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<!-- begin login-header -->
\t<div class=\"login-header\">
\t\t<div class=\"brand\">
\t\t\tIniciar Sesión
\t\t</div>
\t</div>
\t<!-- end login-header -->
\t";
        // line 10
        $this->loadTemplate("layouts/alerts.twig", "auth/login.twig", 10)->display($context);
        // line 11
        echo "\t<!-- begin login-content -->
\t<div class=\"login-content\">
\t\t";
        // line 13
        $context["attributes"] = ["class" => "margin-bottom-0"];
        // line 14
        echo "\t\t";
        echo form_open("/auth/login", ($context["attributes"] ?? null));
        echo "
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"email\">E-mail ó Cédula de Identidad</label>\t\t\t\t\t
\t\t\t\t<input id=\"email\" name=\"email\" type=\"text\" class=\"form-control form-control-lg ";
        // line 17
        if (form_error("email")) {
            echo "is-invalid";
        }
        echo "\" value=\"";
        echo set_value("email");
        echo "\">
\t\t\t\t";
        // line 18
        echo form_error("email", "<div class=\"invalid-feedback\">", "</div>");
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"clave\">Contraseña</label>
\t\t\t\t<input id=\"clave\" name=\"clave\" type=\"password\" class=\"form-control form-control-lg ";
        // line 22
        if (form_error("clave")) {
            echo "is-invalid";
        }
        echo "\">
\t\t\t\t";
        // line 23
        echo form_error("clave", "<div class=\"invalid-feedback\">", "</div>");
        echo "
\t\t\t</div>
\t\t\t<div class=\"login-buttons\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Entrar</button>
\t\t\t</div>
\t\t\t<div class=\"m-t-20 m-b-40 p-b-40 text-inverse\">
\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, site_url("/auth/register"), "html", null, true);
        echo "\" class=\"btn btn-light btn-block btn-lg\">Crear cuenta</a>
\t\t\t\t<br />
\t\t\t\t<a href=\"#\">¿Olvidaste tu cuenta?</a>
\t\t\t</div>\t\t\t
\t\t";
        // line 33
        echo form_close();
        echo "
\t</div>
\t<!-- end login-content -->
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  104 => 29,  95 => 23,  89 => 22,  82 => 18,  74 => 17,  67 => 14,  65 => 13,  61 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/auth.twig\" %}
{% block content %}
\t<!-- begin login-header -->
\t<div class=\"login-header\">
\t\t<div class=\"brand\">
\t\t\tIniciar Sesión
\t\t</div>
\t</div>
\t<!-- end login-header -->
\t{% include 'layouts/alerts.twig' %}
\t<!-- begin login-content -->
\t<div class=\"login-content\">
\t\t{% set attributes = {'class': 'margin-bottom-0'} %}
\t\t{{ form_open('/auth/login', attributes) }}
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"email\">E-mail ó Cédula de Identidad</label>\t\t\t\t\t
\t\t\t\t<input id=\"email\" name=\"email\" type=\"text\" class=\"form-control form-control-lg {% if form_error('email') %}is-invalid{% endif %}\" value=\"{{ set_value('email') }}\">
\t\t\t\t{{ form_error('email', '<div class=\"invalid-feedback\">', '</div>') }}
\t\t\t</div>
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"clave\">Contraseña</label>
\t\t\t\t<input id=\"clave\" name=\"clave\" type=\"password\" class=\"form-control form-control-lg {% if form_error('clave')  %}is-invalid{% endif %}\">
\t\t\t\t{{ form_error('clave', '<div class=\"invalid-feedback\">', '</div>') }}
\t\t\t</div>
\t\t\t<div class=\"login-buttons\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Entrar</button>
\t\t\t</div>
\t\t\t<div class=\"m-t-20 m-b-40 p-b-40 text-inverse\">
\t\t\t\t<a href=\"{{ site_url('/auth/register') }}\" class=\"btn btn-light btn-block btn-lg\">Crear cuenta</a>
\t\t\t\t<br />
\t\t\t\t<a href=\"#\">¿Olvidaste tu cuenta?</a>
\t\t\t</div>\t\t\t
\t\t{{ form_close() }}
\t</div>
\t<!-- end login-content -->
{% endblock %}", "auth/login.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/auth/login.twig");
    }
}
