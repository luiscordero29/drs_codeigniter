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
\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control form-control-lg ";
        // line 17
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["has_email"] ?? null) : null)) {
            echo "is-invalid";
        }
        echo "\" id=\"email\" value=\"";
        echo set_value("email");
        echo "\">
\t\t\t\t";
        // line 18
        echo form_error("email", "<div class=\"invalid-feedback\">", "</div>");
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t<input type=\"password\" class=\"form-control form-control-lg ";
        // line 22
        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["has_password"] ?? null) : null)) {
            echo "is-invalid";
        }
        echo "\" id=\"password\">
\t\t\t\t";
        // line 23
        echo form_error("password", "<div class=\"invalid-feedback\">", "</div>");
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
  \t<!-- /.login-logo 
  \t<div class=\"card\">
    \t<div class=\"card-body login-card-body\">
      \t\t<p class=\"login-box-msg\">Iniciar Sessión</p>
\t\t\t";
        // line 40
        echo form_open("/auth/login", (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["form_attributes"] ?? null) : null));
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\">E-mail ó Cédula de Identidad</label>\t\t\t\t\t
\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control ";
        // line 43
        if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["has_email"] ?? null) : null)) {
            echo "is-invalid";
        }
        echo "\" id=\"email\" value=\"";
        echo set_value("email");
        echo "\">
\t\t\t\t\t";
        // line 44
        echo form_error("email", "<div class=\"invalid-feedback\">", "</div>");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control ";
        // line 48
        if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["has_password"] ?? null) : null)) {
            echo "is-invalid";
        }
        echo "\" id=\"password\">
\t\t\t\t\t";
        // line 49
        echo form_error("password", "<div class=\"invalid-feedback\">", "</div>");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, site_url("/auth/register"), "html", null, true);
        echo "\" class=\"btn btn-light btn-block btn-flat\">Crear cuenta</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Entrar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        // line 59
        echo form_close();
        echo "
\t\t\t<p class=\"mt-3\">
\t\t\t\t<a href=\"#\">¿Olvidaste tu cuenta?</a>
\t\t\t</p>
    \t</div>
    </div -->
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
        return array (  164 => 59,  155 => 53,  148 => 49,  142 => 48,  135 => 44,  127 => 43,  121 => 40,  111 => 33,  104 => 29,  95 => 23,  89 => 22,  82 => 18,  74 => 17,  67 => 14,  65 => 13,  61 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
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
\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control form-control-lg {% if data['has_email']  %}is-invalid{% endif %}\" id=\"email\" value=\"{{ set_value('email') }}\">
\t\t\t\t{{ form_error('email', '<div class=\"invalid-feedback\">', '</div>') }}
\t\t\t</div>
\t\t\t<div class=\"form-group m-b-15\">
\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t<input type=\"password\" class=\"form-control form-control-lg {% if data['has_password']  %}is-invalid{% endif %}\" id=\"password\">
\t\t\t\t{{ form_error('password', '<div class=\"invalid-feedback\">', '</div>') }}
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
  \t<!-- /.login-logo 
  \t<div class=\"card\">
    \t<div class=\"card-body login-card-body\">
      \t\t<p class=\"login-box-msg\">Iniciar Sessión</p>
\t\t\t{{ form_open('/auth/login', data['form_attributes']) }}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\">E-mail ó Cédula de Identidad</label>\t\t\t\t\t
\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control {% if data['has_email']  %}is-invalid{% endif %}\" id=\"email\" value=\"{{ set_value('email') }}\">
\t\t\t\t\t{{ form_error('email', '<div class=\"invalid-feedback\">', '</div>') }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control {% if data['has_password']  %}is-invalid{% endif %}\" id=\"password\">
\t\t\t\t\t{{ form_error('password', '<div class=\"invalid-feedback\">', '</div>') }}
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<a href=\"{{ site_url('/auth/register') }}\" class=\"btn btn-light btn-block btn-flat\">Crear cuenta</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Entrar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{{ form_close() }}
\t\t\t<p class=\"mt-3\">
\t\t\t\t<a href=\"#\">¿Olvidaste tu cuenta?</a>
\t\t\t</p>
    \t</div>
    </div -->
{% endblock %}", "auth/login.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/auth/login.twig");
    }
}
