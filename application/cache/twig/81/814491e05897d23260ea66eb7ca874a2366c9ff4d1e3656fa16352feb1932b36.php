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

/* auth/mail/register.twig */
class __TwigTemplate_3f342cc5153cbdcedddebfb23f55264de526c6e22fe4e990dbdff73c2aae2b41 extends \Twig\Template
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
\t<meta charset=\"utf-8\" />
\t<title>Sistema de Nomina | Dirección Regional de Salud del Estado Barinas</title>
\t<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
\t<meta content=\"\" name=\"description\" />
\t<meta content=\"\" name=\"author\" />
\t
\t<style type=\"text/css\">
\t\t/******************************************************
\t\t* INK RESPONSIVE EMAIL TEMPLATE: http://zurb.com/ink/ *
\t\t******************************************************/
\t\t/* Client-specific Styles & Reset */

\t\t#outlook a {
\t\t\tpadding: 0;
\t\t}

\t\tbody {
\t\t\twidth: 100% !important;
\t\t\tmin-width: 100%;
\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t-ms-text-size-adjust: 100%;
\t\t\t-webkit-font-smoothing: antialiased;
\t\t\t-moz-osx-font-smoothing: grayscale;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass,
\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td,
\t\t.ExternalClass div {
\t\t\tline-height: 100%;
\t\t}

\t\t#backgroundTable {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100% !important;
\t\t\tline-height: 100% !important;
\t\t}

\t\timg {
\t\t\toutline: none;
\t\t\ttext-decoration: none;
\t\t\t-ms-interpolation-mode: bicubic;
\t\t\twidth: auto;
\t\t\tmax-width: 100%;
\t\t\tfloat: left;
\t\t\tclear: both;
\t\t\tdisplay: block;
\t\t}

\t\tcenter {
\t\t\twidth: 100%;
\t\t\tmin-width: 580px;
\t\t}

\t\ta img {
\t\t\tborder: none;
\t\t}

\t\tp {
\t\t\tmargin: 0 0 0 10px;
\t\t}

\t\ttable {
\t\t\tborder-spacing: 0;
\t\t\tborder-collapse: collapse;
\t\t}

\t\ttd {
\t\t\tword-break: break-word;
\t\t\t-webkit-hyphens: auto;
\t\t\t-moz-hyphens: auto;
\t\t\thyphens: auto;
\t\t\tborder-collapse: collapse !important;
\t\t}

\t\ttable,
\t\ttr,
\t\ttd {
\t\t\tpadding: 0;
\t\t\tvertical-align: top;
\t\t\ttext-align: left;
\t\t}

\t\thr {
\t\t\tcolor: #d9d9d9;
\t\t\tbackground-color: #d9d9d9;
\t\t\theight: 1px;
\t\t\tborder: none;
\t\t}


\t\t/* Responsive Grid */

\t\ttable.body {
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t}

\t\ttable.container {
\t\t\twidth: 580px;
\t\t\tmargin: 0 auto;
\t\t\ttext-align: inherit;
\t\t}

\t\ttable.row {
\t\t\tpadding: 0px;
\t\t\twidth: 100%;
\t\t\tposition: relative;
\t\t}

\t\ttable.container table.row {
\t\t\tdisplay: block;
\t\t}

\t\ttd.wrapper {
\t\t\tpadding: 10px 20px 0px 0px;
\t\t\tposition: relative;
\t\t}

\t\ttable.columns,
\t\ttable.column {
\t\t\tmargin: 0 auto;
\t\t}

\t\ttable.columns td,
\t\ttable.column td {
\t\t\tpadding: 0px 0px 10px;
\t\t}

\t\ttable.columns td.sub-columns,
\t\ttable.column td.sub-columns,
\t\ttable.columns td.sub-column,
\t\ttable.column td.sub-column {
\t\t\tpadding-right: 10px;
\t\t}

\t\ttd.sub-column,
\t\ttd.sub-columns {
\t\t\tmin-width: 0px;
\t\t}

\t\ttable.row td.last,
\t\ttable.container td.last {
\t\t\tpadding-right: 0px;
\t\t}

\t\ttable.one {
\t\t\twidth: 30px;
\t\t}

\t\ttable.two {
\t\t\twidth: 80px;
\t\t}

\t\ttable.three {
\t\t\twidth: 130px;
\t\t}

\t\ttable.four {
\t\t\twidth: 180px;
\t\t}

\t\ttable.five {
\t\t\twidth: 230px;
\t\t}

\t\ttable.six {
\t\t\twidth: 280px;
\t\t}

\t\ttable.seven {
\t\t\twidth: 330px;
\t\t}

\t\ttable.eight {
\t\t\twidth: 380px;
\t\t}

\t\ttable.nine {
\t\t\twidth: 430px;
\t\t}

\t\ttable.ten {
\t\t\twidth: 480px;
\t\t}

\t\ttable.eleven {
\t\t\twidth: 530px;
\t\t}

\t\ttable.twelve {
\t\t\twidth: 580px;
\t\t}

\t\ttable.one center {
\t\t\tmin-width: 30px;
\t\t}

\t\ttable.two center {
\t\t\tmin-width: 80px;
\t\t}

\t\ttable.three center {
\t\t\tmin-width: 130px;
\t\t}

\t\ttable.four center {
\t\t\tmin-width: 180px;
\t\t}

\t\ttable.five center {
\t\t\tmin-width: 230px;
\t\t}

\t\ttable.six center {
\t\t\tmin-width: 280px;
\t\t}

\t\ttable.seven center {
\t\t\tmin-width: 330px;
\t\t}

\t\ttable.eight center {
\t\t\tmin-width: 380px;
\t\t}

\t\ttable.nine center {
\t\t\tmin-width: 430px;
\t\t}

\t\ttable.ten center {
\t\t\tmin-width: 480px;
\t\t}

\t\ttable.eleven center {
\t\t\tmin-width: 530px;
\t\t}

\t\ttable.twelve center {
\t\t\tmin-width: 580px;
\t\t}

\t\ttable.one .panel center {
\t\t\tmin-width: 10px;
\t\t}

\t\ttable.two .panel center {
\t\t\tmin-width: 60px;
\t\t}

\t\ttable.three .panel center {
\t\t\tmin-width: 110px;
\t\t}

\t\ttable.four .panel center {
\t\t\tmin-width: 160px;
\t\t}

\t\ttable.five .panel center {
\t\t\tmin-width: 210px;
\t\t}

\t\ttable.six .panel center {
\t\t\tmin-width: 260px;
\t\t}

\t\ttable.seven .panel center {
\t\t\tmin-width: 310px;
\t\t}

\t\ttable.eight .panel center {
\t\t\tmin-width: 360px;
\t\t}

\t\ttable.nine .panel center {
\t\t\tmin-width: 410px;
\t\t}

\t\ttable.ten .panel center {
\t\t\tmin-width: 460px;
\t\t}

\t\ttable.eleven .panel center {
\t\t\tmin-width: 510px;
\t\t}

\t\ttable.twelve .panel center {
\t\t\tmin-width: 560px;
\t\t}

\t\t.body .columns td.one,
\t\t.body .column td.one {
\t\t\twidth: 8.333333%;
\t\t}

\t\t.body .columns td.two,
\t\t.body .column td.two {
\t\t\twidth: 16.666666%;
\t\t}

\t\t.body .columns td.three,
\t\t.body .column td.three {
\t\t\twidth: 25%;
\t\t}

\t\t.body .columns td.four,
\t\t.body .column td.four {
\t\t\twidth: 33.333333%;
\t\t}

\t\t.body .columns td.five,
\t\t.body .column td.five {
\t\t\twidth: 41.666666%;
\t\t}

\t\t.body .columns td.six,
\t\t.body .column td.six {
\t\t\twidth: 50%;
\t\t}

\t\t.body .columns td.seven,
\t\t.body .column td.seven {
\t\t\twidth: 58.333333%;
\t\t}

\t\t.body .columns td.eight,
\t\t.body .column td.eight {
\t\t\twidth: 66.666666%;
\t\t}

\t\t.body .columns td.nine,
\t\t.body .column td.nine {
\t\t\twidth: 75%;
\t\t}

\t\t.body .columns td.ten,
\t\t.body .column td.ten {
\t\t\twidth: 83.333333%;
\t\t}

\t\t.body .columns td.eleven,
\t\t.body .column td.eleven {
\t\t\twidth: 91.666666%;
\t\t}

\t\t.body .columns td.twelve,
\t\t.body .column td.twelve {
\t\t\twidth: 100%;
\t\t}

\t\ttd.offset-by-one {
\t\t\tpadding-left: 50px;
\t\t}

\t\ttd.offset-by-two {
\t\t\tpadding-left: 100px;
\t\t}

\t\ttd.offset-by-three {
\t\t\tpadding-left: 150px;
\t\t}

\t\ttd.offset-by-four {
\t\t\tpadding-left: 200px;
\t\t}

\t\ttd.offset-by-five {
\t\t\tpadding-left: 250px;
\t\t}

\t\ttd.offset-by-six {
\t\t\tpadding-left: 300px;
\t\t}

\t\ttd.offset-by-seven {
\t\t\tpadding-left: 350px;
\t\t}

\t\ttd.offset-by-eight {
\t\t\tpadding-left: 400px;
\t\t}

\t\ttd.offset-by-nine {
\t\t\tpadding-left: 450px;
\t\t}

\t\ttd.offset-by-ten {
\t\t\tpadding-left: 500px;
\t\t}

\t\ttd.offset-by-eleven {
\t\t\tpadding-left: 550px;
\t\t}

\t\ttd.expander {
\t\t\tvisibility: hidden;
\t\t\twidth: 0px;
\t\t\tpadding: 0 !important;
\t\t}

\t\ttable.columns .text-pad,
\t\ttable.column .text-pad {
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t}

\t\ttable.columns .left-text-pad,
\t\ttable.columns .text-pad-left,
\t\ttable.column .left-text-pad,
\t\ttable.column .text-pad-left {
\t\t\tpadding-left: 10px;
\t\t}

\t\ttable.columns .right-text-pad,
\t\ttable.columns .text-pad-right,
\t\ttable.column .right-text-pad,
\t\ttable.column .text-pad-right {
\t\t\tpadding-right: 10px;
\t\t}


\t\t/* Block Grid */

\t\t.block-grid {
\t\t\twidth: 100%;
\t\t\tmax-width: 580px;
\t\t}

\t\t.block-grid td {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 10px;
\t\t}

\t\t.two-up td {
\t\t\twidth: 270px;
\t\t}

\t\t.three-up td {
\t\t\twidth: 173px;
\t\t}

\t\t.four-up td {
\t\t\twidth: 125px;
\t\t}

\t\t.five-up td {
\t\t\twidth: 96px;
\t\t}

\t\t.six-up td {
\t\t\twidth: 76px;
\t\t}

\t\t.seven-up td {
\t\t\twidth: 62px;
\t\t}

\t\t.eight-up td {
\t\t\twidth: 52px;
\t\t}


\t\t/* Alignment & Visibility Classes */

\t\ttable.center,
\t\ttd.center {
\t\t\ttext-align: center;
\t\t}

\t\th1.center,
\t\th2.center,
\t\th3.center,
\t\th4.center,
\t\th5.center,
\t\th6.center {
\t\t\ttext-align: center;
\t\t}

\t\tspan.center {
\t\t\tdisplay: block;
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t}

\t\timg.center {
\t\t\tmargin: 0 auto;
\t\t\tfloat: none;
\t\t}

\t\t.show-for-small,
\t\t.hide-for-desktop {
\t\t\tdisplay: none;
\t\t}


\t\t/* Typography */

\t\tbody,
\t\ttable.body,
\t\th1,
\t\th2,
\t\th3,
\t\th4,
\t\th5,
\t\th6,
\t\tp,
\t\ttd {
\t\t\tcolor: #222222;
\t\t\tfont-family: \"Helvetica\", \"Arial\", sans-serif;
\t\t\tfont-weight: normal;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\ttext-align: left;
\t\t\tline-height: 1.3;
\t\t}

\t\th1,
\t\th2,
\t\th3,
\t\th4,
\t\th5,
\t\th6 {
\t\t\tword-break: normal;
\t\t}

\t\th1 {
\t\t\tfont-size: 40px;
\t\t}

\t\th2 {
\t\t\tfont-size: 36px;
\t\t}

\t\th3 {
\t\t\tfont-size: 32px;
\t\t}

\t\th4 {
\t\t\tfont-size: 28px;
\t\t}

\t\th5 {
\t\t\tfont-size: 24px;
\t\t}

\t\th6 {
\t\t\tfont-size: 20px;
\t\t}

\t\tbody,
\t\ttable.body,
\t\tp,
\t\ttd {
\t\t\tfont-size: 14px;
\t\t\tline-height: 19px;
\t\t}

\t\tp.lead,
\t\tp.lede,
\t\tp.leed {
\t\t\tfont-size: 18px;
\t\t\tline-height: 21px;
\t\t}

\t\tp {
\t\t\tmargin-bottom: 10px;
\t\t}

\t\tsmall {
\t\t\tfont-size: 10px;
\t\t}

\t\ta {
\t\t\tcolor: #2ba6cb;
\t\t\ttext-decoration: none;
\t\t}

\t\ta:hover {
\t\t\tcolor: #2795b6 !important;
\t\t}

\t\ta:active {
\t\t\tcolor: #2795b6 !important;
\t\t}

\t\ta:visited {
\t\t\tcolor: #2ba6cb !important;
\t\t}

\t\th1 a,
\t\th2 a,
\t\th3 a,
\t\th4 a,
\t\th5 a,
\t\th6 a {
\t\t\tcolor: #2ba6cb;
\t\t}

\t\th1 a:active,
\t\th2 a:active,
\t\th3 a:active,
\t\th4 a:active,
\t\th5 a:active,
\t\th6 a:active {
\t\t\tcolor: #2ba6cb !important;
\t\t}

\t\th1 a:visited,
\t\th2 a:visited,
\t\th3 a:visited,
\t\th4 a:visited,
\t\th5 a:visited,
\t\th6 a:visited {
\t\t\tcolor: #2ba6cb !important;
\t\t}


\t\t/* Panels */

\t\t.panel {
\t\t\tbackground: #f2f2f2;
\t\t\tborder: 1px solid #d9d9d9;
\t\t\tpadding: 10px !important;
\t\t}

\t\t.sub-grid table {
\t\t\twidth: 100%;
\t\t}

\t\t.sub-grid td.sub-columns {
\t\t\tpadding-bottom: 0;
\t\t}


\t\t/* Buttons */

\t\ttable.button,
\t\ttable.tiny-button,
\t\ttable.small-button,
\t\ttable.medium-button,
\t\ttable.large-button {
\t\t\twidth: 100%;
\t\t\toverflow: hidden;
\t\t}

\t\ttable.button td,
\t\ttable.tiny-button td,
\t\ttable.small-button td,
\t\ttable.medium-button td,
\t\ttable.large-button td {
\t\t\tdisplay: block;
\t\t\twidth: auto !important;
\t\t\ttext-align: center;
\t\t\tbackground: #2ba6cb;
\t\t\tborder: 1px solid #2284a1;
\t\t\tcolor: #ffffff;
\t\t\tpadding: 8px 0;
\t\t}

\t\ttable.tiny-button td {
\t\t\tpadding: 5px 0 4px;
\t\t}

\t\ttable.small-button td {
\t\t\tpadding: 8px 0 7px;
\t\t}

\t\ttable.medium-button td {
\t\t\tpadding: 12px 0 10px;
\t\t}

\t\ttable.large-button td {
\t\t\tpadding: 21px 0 18px;
\t\t}

\t\ttable.button td a,
\t\ttable.tiny-button td a,
\t\ttable.small-button td a,
\t\ttable.medium-button td a,
\t\ttable.large-button td a {
\t\t\tfont-weight: bold;
\t\t\ttext-decoration: none;
\t\t\tfont-family: Helvetica, Arial, sans-serif;
\t\t\tcolor: #ffffff;
\t\t\tfont-size: 16px;
\t\t}

\t\ttable.tiny-button td a {
\t\t\tfont-size: 12px;
\t\t\tfont-weight: normal;
\t\t}

\t\ttable.small-button td a {
\t\t\tfont-size: 16px;
\t\t}

\t\ttable.medium-button td a {
\t\t\tfont-size: 20px;
\t\t}

\t\ttable.large-button td a {
\t\t\tfont-size: 24px;
\t\t}

\t\ttable.button:hover td,
\t\ttable.button:visited td,
\t\ttable.button:active td {
\t\t\tbackground: #2795b6 !important;
\t\t}

\t\ttable.button:hover td a,
\t\ttable.button:visited td a,
\t\ttable.button:active td a {
\t\t\tcolor: #fff !important;
\t\t}

\t\ttable.button:hover td,
\t\ttable.tiny-button:hover td,
\t\ttable.small-button:hover td,
\t\ttable.medium-button:hover td,
\t\ttable.large-button:hover td {
\t\t\tbackground: #2795b6 !important;
\t\t}

\t\ttable.button:hover td a,
\t\ttable.button:active td a,
\t\ttable.button td a:visited,
\t\ttable.tiny-button:hover td a,
\t\ttable.tiny-button:active td a,
\t\ttable.tiny-button td a:visited,
\t\ttable.small-button:hover td a,
\t\ttable.small-button:active td a,
\t\ttable.small-button td a:visited,
\t\ttable.medium-button:hover td a,
\t\ttable.medium-button:active td a,
\t\ttable.medium-button td a:visited,
\t\ttable.large-button:hover td a,
\t\ttable.large-button:active td a,
\t\ttable.large-button td a:visited {
\t\t\tcolor: #ffffff !important;
\t\t}

\t\ttable.secondary td {
\t\t\tbackground: #e9e9e9;
\t\t\tborder-color: #d0d0d0;
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary td a {
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary:hover td {
\t\t\tbackground: #d0d0d0 !important;
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary:hover td a,
\t\ttable.secondary td a:visited,
\t\ttable.secondary:active td a {
\t\t\tcolor: #555 !important;
\t\t}

\t\ttable.success td {
\t\t\tbackground: #5da423;
\t\t\tborder-color: #457a1a;
\t\t}

\t\ttable.success:hover td {
\t\t\tbackground: #457a1a !important;
\t\t}

\t\ttable.alert td {
\t\t\tbackground: #c60f13;
\t\t\tborder-color: #970b0e;
\t\t}

\t\ttable.alert:hover td {
\t\t\tbackground: #970b0e !important;
\t\t}

\t\ttable.radius td {
\t\t\t-webkit-border-radius: 3px;
\t\t\t-moz-border-radius: 3px;
\t\t\tborder-radius: 3px;
\t\t}

\t\ttable.round td {
\t\t\t-webkit-border-radius: 500px;
\t\t\t-moz-border-radius: 500px;
\t\t\tborder-radius: 500px;
\t\t}


\t\t/* Outlook First */

\t\tbody.outlook p {
\t\t\tdisplay: inline !important;
\t\t}


\t\t/*  Media Queries */

\t\t@media only screen and (max-width: 600px) {
\t\t\ttable[class=\"body\"] img {
\t\t\t\twidth: auto !important;
\t\t\t\theight: auto !important;
\t\t\t}
\t\t\ttable[class=\"body\"] center {
\t\t\t\tmin-width: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .container {
\t\t\t\twidth: 95% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .row {
\t\t\t\twidth: 100% !important;
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper {
\t\t\t\tdisplay: block !important;
\t\t\t\tpadding-right: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns,
\t\t\ttable[class=\"body\"] .column {
\t\t\t\ttable-layout: fixed !important;
\t\t\t\tfloat: none !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tpadding-right: 0px !important;
\t\t\t\tpadding-left: 0px !important;
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper.first .columns,
\t\t\ttable[class=\"body\"] .wrapper.first .column {
\t\t\t\tdisplay: table !important;
\t\t\t}
\t\t\ttable[class=\"body\"] table.columns td,
\t\t\ttable[class=\"body\"] table.column td {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.one,
\t\t\ttable[class=\"body\"] .column td.one {
\t\t\t\twidth: 8.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.two,
\t\t\ttable[class=\"body\"] .column td.two {
\t\t\t\twidth: 16.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.three,
\t\t\ttable[class=\"body\"] .column td.three {
\t\t\t\twidth: 25% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.four,
\t\t\ttable[class=\"body\"] .column td.four {
\t\t\t\twidth: 33.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.five,
\t\t\ttable[class=\"body\"] .column td.five {
\t\t\t\twidth: 41.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.six,
\t\t\ttable[class=\"body\"] .column td.six {
\t\t\t\twidth: 50% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.seven,
\t\t\ttable[class=\"body\"] .column td.seven {
\t\t\t\twidth: 58.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.eight,
\t\t\ttable[class=\"body\"] .column td.eight {
\t\t\t\twidth: 66.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.nine,
\t\t\ttable[class=\"body\"] .column td.nine {
\t\t\t\twidth: 75% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.ten,
\t\t\ttable[class=\"body\"] .column td.ten {
\t\t\t\twidth: 83.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.eleven,
\t\t\ttable[class=\"body\"] .column td.eleven {
\t\t\t\twidth: 91.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.twelve,
\t\t\ttable[class=\"body\"] .column td.twelve {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] td.offset-by-one,
\t\t\ttable[class=\"body\"] td.offset-by-two,
\t\t\ttable[class=\"body\"] td.offset-by-three,
\t\t\ttable[class=\"body\"] td.offset-by-four,
\t\t\ttable[class=\"body\"] td.offset-by-five,
\t\t\ttable[class=\"body\"] td.offset-by-six,
\t\t\ttable[class=\"body\"] td.offset-by-seven,
\t\t\ttable[class=\"body\"] td.offset-by-eight,
\t\t\ttable[class=\"body\"] td.offset-by-nine,
\t\t\ttable[class=\"body\"] td.offset-by-ten,
\t\t\ttable[class=\"body\"] td.offset-by-eleven {
\t\t\t\tpadding-left: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] table.columns td.expander {
\t\t\t\twidth: 1px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .right-text-pad,
\t\t\ttable[class=\"body\"] .text-pad-right {
\t\t\t\tpadding-left: 10px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .left-text-pad,
\t\t\ttable[class=\"body\"] .text-pad-left {
\t\t\t\tpadding-right: 10px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .hide-for-small,
\t\t\ttable[class=\"body\"] .show-for-desktop {
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .show-for-small,
\t\t\ttable[class=\"body\"] .hide-for-desktop {
\t\t\t\tdisplay: inherit !important;
\t\t\t}
\t\t}
\t</style>
\t<style type=\"text/css\">
\t\t/********************************
\t\t* CUSTOM STYLING - SYSTEM EMAIL *
\t\t********************************/

\t\tbody {
\t\t\tbackground: #d9e0e7;
\t\t}

\t\ta:hover,
\t\ta:focus {
\t\t\ttext-decoration: underline;
\t\t}


\t\t/* Typography */

\t\tbody,
\t\ttable.body,
\t\tp,
\t\ttd {
\t\t\tfont-size: 12px;
\t\t}

\t\th1,
\t\th2,
\t\th3,
\t\th4 {
\t\t\tmargin: 5px 0 10px;
\t\t}

\t\th5,
\t\th6 {
\t\t\tmargin: 5px 0;
\t\t}

\t\th1 {
\t\t\tfont-size: 36px;
\t\t}

\t\th2 {
\t\t\tfont-size: 30px;
\t\t}

\t\th3 {
\t\t\tfont-size: 24px;
\t\t}

\t\th4 {
\t\t\tfont-size: 18px;
\t\t}

\t\th5 {
\t\t\tfont-size: 14px;
\t\t}

\t\th6 {
\t\t\tfont-size: 12px;
\t\t}


\t\t/* Predefined Class */

\t\th1.last,
\t\th2.last,
\t\th3.last,
\t\th4.last,
\t\th5.last,
\t\th6.last,
\t\tp.last {
\t\t\tmargin-bottom: 0;
\t\t}

\t\ttd.last {
\t\t\tpadding-bottom: 0 !important;
\t\t}

\t\ttd.wrapper {
\t\t\tpadding: 15px 15px 0 15px;
\t\t}

\t\ttable.columns td,
\t\ttable.column td {
\t\t\tpadding: 0 0 15px 0;
\t\t}

\t\t.header,
\t\t.footer {
\t\t\tbackground: #ffffff;
\t\t}

\t\t.content.dark-theme {
\t\t\tbackground: #2d353c;
\t\t}

\t\t.content.dark-theme .panel {
\t\t\tbackground: #1b2024;
\t\t\tborder: none;
\t\t}

\t\t.content.dark-theme h1,
\t\t.content.dark-theme h2,
\t\t.content.dark-theme h3,
\t\t.content.dark-theme h4,
\t\t.content.dark-theme h5,
\t\t.content.dark-theme h6,
\t\t.content.dark-theme .highlight {
\t\t\tcolor: #fff !important;
\t\t}

\t\t.content.dark-theme a,
\t\ta {
\t\t\tcolor: #00acac;
\t\t}

\t\t.content.dark-theme p,
\t\t.content.dark-theme td {
\t\t\tcolor: #a8acb1 !important;
\t\t}

\t\t.divider {
\t\t\theight: 1px;
\t\t\twidth: 100%;
\t\t\tbackground: #444c54;
\t\t\tmargin-top: 5px;
\t\t}

\t\t.text-right {
\t\t\ttext-align: right;
\t\t}

\t\t.valign-middle {
\t\t\tvertical-align: middle;
\t\t}

\t\t.m-t-0 {
\t\t\tmargin-top: 0px !important;
\t\t}

\t\t.m-t-5 {
\t\t\tmargin-top: 5px !important;
\t\t}

\t\t.m-t-10 {
\t\t\tmargin-top: 10px !important;
\t\t}

\t\t.m-t-15 {
\t\t\tmargin-top: 15px !important;
\t\t}

\t\t.m-b-0 {
\t\t\tmargin-bottom: 0px !important;
\t\t}

\t\t.m-b-5 {
\t\t\tmargin-bottom: 5px !important;
\t\t}

\t\t.m-b-10 {
\t\t\tmargin-bottom: 10px !important;
\t\t}

\t\t.m-b-15 {
\t\t\tmargin-bottom: 15px !important;
\t\t}

\t\t.p-t-0 {
\t\t\tpadding-top: 0px !important;
\t\t}

\t\t.p-t-5 {
\t\t\tpadding-top: 5px !important;
\t\t}

\t\t.p-t-10 {
\t\t\tpadding-top: 10px !important;
\t\t}

\t\t.p-t-15 {
\t\t\tpadding-top: 15px !important;
\t\t}


\t\t/* Button */

\t\t.btn a,
\t\t.button a {
\t\t\tcolor: #fff !important;
\t\t\tfont-weight: normal !important;
\t\t\ttext-decoration: none !important;
\t\t}

\t\ttable.btn td,
\t\ttable.button td {
\t\t\tvertical-align: middle !important;
\t\t\tpadding: 6px 18px !important;
\t\t\tbackground: #00acac !important;
\t\t\tborder-color: #00acac !important;
\t\t\t-webkit-border-radius: 6px !important;
\t\t\t-moz-border-radius: 6px !important;
\t\t\tborder-radius: 6px !important;
\t\t}

\t\ttable.btn:hover td,
\t\ttable.button:hover td,
\t\ttable.btn:visited td,
\t\ttable.button:visited td,
\t\ttable.btn:active td,
\t\ttable.button:active td {
\t\t\tbackground: #008a8a !important;
\t\t\tborder-color: #008a8a !important;
\t\t}


\t\t/* Button Orange */

\t\ttable.btn.orange td,
\t\ttable.button.orange td {
\t\t\tbackground: #f59c1a !important;
\t\t\tborder-color: #f59c1a !important;
\t\t}

\t\ttable.btn.orange:hover td,
\t\ttable.button.orange:hover td,
\t\ttable.btn.orange:visited td,
\t\ttable.button.orange:visited td,
\t\ttable.btn.orange:active td,
\t\ttable.button.orange:active td {
\t\t\tbackground: #c47d15 !important;
\t\t\tborder-color: #c47d15 !important;
\t\t}


\t\t/* Button Blue */

\t\ttable.btn.blue td,
\t\ttable.button.blue td {
\t\t\tbackground: #348fe2 !important;
\t\t\tborder-color: #348fe2 !important;
\t\t}

\t\ttable.btn.blue:hover td,
\t\ttable.button.blue:hover td,
\t\ttable.btn.blue:visited td,
\t\ttable.button.blue:visited td,
\t\ttable.btn.blue:active td,
\t\ttable.button.blue:active td {
\t\t\tbackground: #2a72b5 !important;
\t\t\tborder-color: #2a72b5 !important;
\t\t}


\t\t/* Button Red */

\t\ttable.btn.red td,
\t\ttable.button.red td {
\t\t\tbackground: #ff5b57 !important;
\t\t\tborder-color: #ff5b57 !important;
\t\t}

\t\ttable.btn.red:hover td,
\t\ttable.button.red:hover td,
\t\ttable.btn.red:visited td,
\t\ttable.button.red:visited td,
\t\ttable.btn.red:active td,
\t\ttable.button.red:active td {
\t\t\tbackground: #cc4946 !important;
\t\t\tborder-color: #cc4946 !important;
\t\t}


\t\t/* Button White */

\t\ttable.btn.white td a,
\t\ttable.button.white td a {
\t\t\tcolor: #333 !important;
\t\t}

\t\ttable.btn.white td,
\t\ttable.button.white td {
\t\t\tbackground: #ffffff !important;
\t\t\tborder-color: #ffffff !important;
\t\t}

\t\ttable.btn.white:hover td,
\t\ttable.button.white:hover td,
\t\ttable.btn.white:visited td,
\t\ttable.button.white:visited td,
\t\ttable.btn.white:active td,
\t\ttable.button.white:active td {
\t\t\tbackground: #e2e7eb !important;
\t\t\tborder-color: #e2e7eb !important;
\t\t}


\t\t/* Button Grey */

\t\ttable.btn.grey td,
\t\ttable.button.grey td {
\t\t\tbackground: #348fe2 !important;
\t\t\tborder-color: #348fe2 !important;
\t\t}

\t\ttable.btn.grey:hover td,
\t\ttable.button.grey:hover td,
\t\ttable.btn.grey:visited td,
\t\ttable.button.grey:visited td,
\t\ttable.btn.grey:active td,
\t\ttable.button.grey:active td {
\t\t\tbackground: #929ba1 !important;
\t\t\tborder-color: #929ba1 !important;
\t\t}

\t\t.wrapper+.wrapper {
\t\t\tpadding-left: 0 !important;
\t\t}

\t\t@media only screen and (max-width: 600px) {
\t\t\t.body .container.content {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\t.wrapper+.wrapper {
\t\t\t\tpadding-left: 15px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .row.header {
\t\t\t\tdisplay: table !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper {
\t\t\t\tpadding-right: 15px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .header img {
\t\t\t\theight: 20px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .header .wrapper {
\t\t\t\tdisplay: table-cell !important;
\t\t\t\tpadding-left: 5px !important;
\t\t\t\tpadding-right: 5px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper .text-right {
\t\t\t\ttext-align: right !important;
\t\t\t}
\t\t\t.text-right {
\t\t\t\ttext-align: left !important;
\t\t\t}
\t\t}
\t</style>
</head>
<body>
\t<!-- begin page body -->
\t<table class=\"body\">
\t\t<tr>
\t\t\t<td class=\"center\" align=\"center\" valign=\"top\">
\t\t\t\t<center>
\t\t\t\t\t<!-- begin page container -->
\t\t\t\t\t<table class=\"container content dark-theme\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<!-- begin row -->
\t\t\t\t\t\t\t\t<table class=\"row\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<!-- begin wrapper -->
\t\t\t\t\t\t\t\t\t\t<td class=\"wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"twelve columns\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Bienvendo al Sistema de Nomina</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-5\">Haga clic en la siguiente URL para activar su cuenta:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1306
        echo twig_escape_filter($this->env, site_url(("auth/verification/" . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usu_llave", [], "any", false, false, false, 1306))), "html", null, true);
        echo "\">
                                                            ";
        // line 1307
        echo twig_escape_filter($this->env, site_url(("auth/verification/" . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usu_llave", [], "any", false, false, false, 1307))), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-t-15 last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSi hacer clic en la URL anterior no funciona, copie y pegue la URL en una ventana del navegador.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<!-- end wrapper -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t<!-- begin divider -->
\t\t\t\t\t\t\t\t<table class=\"divider\"></table>
\t\t\t\t\t\t\t\t<!-- end divider -->
\t\t\t\t\t\t\t\t<!-- begin row -->
\t\t\t\t\t\t\t\t<table class=\"row\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<!-- begin wrapper -->
\t\t\t\t\t\t\t\t\t\t<td class=\"wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<!-- begin twelve columns -->
\t\t\t\t\t\t\t\t\t\t\t<table class=\"twelve columns\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Datos de la cuenta</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Cedula de Identidad:</b> ";
        // line 1338
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usu_cedula_identidad", [], "any", false, false, false, 1338), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Clave:</b> ";
        // line 1341
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usu_clave_plano", [], "any", false, false, false, 1341), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Email:</b> ";
        // line 1344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usu_email", [], "any", false, false, false, 1344), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<!-- end wrapper -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<!-- end page container -->
\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<!-- end page body -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "auth/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1394 => 1344,  1388 => 1341,  1382 => 1338,  1348 => 1307,  1344 => 1306,  37 => 1,);
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
\t<style type=\"text/css\">
\t\t/******************************************************
\t\t* INK RESPONSIVE EMAIL TEMPLATE: http://zurb.com/ink/ *
\t\t******************************************************/
\t\t/* Client-specific Styles & Reset */

\t\t#outlook a {
\t\t\tpadding: 0;
\t\t}

\t\tbody {
\t\t\twidth: 100% !important;
\t\t\tmin-width: 100%;
\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t-ms-text-size-adjust: 100%;
\t\t\t-webkit-font-smoothing: antialiased;
\t\t\t-moz-osx-font-smoothing: grayscale;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}

\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass,
\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td,
\t\t.ExternalClass div {
\t\t\tline-height: 100%;
\t\t}

\t\t#backgroundTable {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100% !important;
\t\t\tline-height: 100% !important;
\t\t}

\t\timg {
\t\t\toutline: none;
\t\t\ttext-decoration: none;
\t\t\t-ms-interpolation-mode: bicubic;
\t\t\twidth: auto;
\t\t\tmax-width: 100%;
\t\t\tfloat: left;
\t\t\tclear: both;
\t\t\tdisplay: block;
\t\t}

\t\tcenter {
\t\t\twidth: 100%;
\t\t\tmin-width: 580px;
\t\t}

\t\ta img {
\t\t\tborder: none;
\t\t}

\t\tp {
\t\t\tmargin: 0 0 0 10px;
\t\t}

\t\ttable {
\t\t\tborder-spacing: 0;
\t\t\tborder-collapse: collapse;
\t\t}

\t\ttd {
\t\t\tword-break: break-word;
\t\t\t-webkit-hyphens: auto;
\t\t\t-moz-hyphens: auto;
\t\t\thyphens: auto;
\t\t\tborder-collapse: collapse !important;
\t\t}

\t\ttable,
\t\ttr,
\t\ttd {
\t\t\tpadding: 0;
\t\t\tvertical-align: top;
\t\t\ttext-align: left;
\t\t}

\t\thr {
\t\t\tcolor: #d9d9d9;
\t\t\tbackground-color: #d9d9d9;
\t\t\theight: 1px;
\t\t\tborder: none;
\t\t}


\t\t/* Responsive Grid */

\t\ttable.body {
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t}

\t\ttable.container {
\t\t\twidth: 580px;
\t\t\tmargin: 0 auto;
\t\t\ttext-align: inherit;
\t\t}

\t\ttable.row {
\t\t\tpadding: 0px;
\t\t\twidth: 100%;
\t\t\tposition: relative;
\t\t}

\t\ttable.container table.row {
\t\t\tdisplay: block;
\t\t}

\t\ttd.wrapper {
\t\t\tpadding: 10px 20px 0px 0px;
\t\t\tposition: relative;
\t\t}

\t\ttable.columns,
\t\ttable.column {
\t\t\tmargin: 0 auto;
\t\t}

\t\ttable.columns td,
\t\ttable.column td {
\t\t\tpadding: 0px 0px 10px;
\t\t}

\t\ttable.columns td.sub-columns,
\t\ttable.column td.sub-columns,
\t\ttable.columns td.sub-column,
\t\ttable.column td.sub-column {
\t\t\tpadding-right: 10px;
\t\t}

\t\ttd.sub-column,
\t\ttd.sub-columns {
\t\t\tmin-width: 0px;
\t\t}

\t\ttable.row td.last,
\t\ttable.container td.last {
\t\t\tpadding-right: 0px;
\t\t}

\t\ttable.one {
\t\t\twidth: 30px;
\t\t}

\t\ttable.two {
\t\t\twidth: 80px;
\t\t}

\t\ttable.three {
\t\t\twidth: 130px;
\t\t}

\t\ttable.four {
\t\t\twidth: 180px;
\t\t}

\t\ttable.five {
\t\t\twidth: 230px;
\t\t}

\t\ttable.six {
\t\t\twidth: 280px;
\t\t}

\t\ttable.seven {
\t\t\twidth: 330px;
\t\t}

\t\ttable.eight {
\t\t\twidth: 380px;
\t\t}

\t\ttable.nine {
\t\t\twidth: 430px;
\t\t}

\t\ttable.ten {
\t\t\twidth: 480px;
\t\t}

\t\ttable.eleven {
\t\t\twidth: 530px;
\t\t}

\t\ttable.twelve {
\t\t\twidth: 580px;
\t\t}

\t\ttable.one center {
\t\t\tmin-width: 30px;
\t\t}

\t\ttable.two center {
\t\t\tmin-width: 80px;
\t\t}

\t\ttable.three center {
\t\t\tmin-width: 130px;
\t\t}

\t\ttable.four center {
\t\t\tmin-width: 180px;
\t\t}

\t\ttable.five center {
\t\t\tmin-width: 230px;
\t\t}

\t\ttable.six center {
\t\t\tmin-width: 280px;
\t\t}

\t\ttable.seven center {
\t\t\tmin-width: 330px;
\t\t}

\t\ttable.eight center {
\t\t\tmin-width: 380px;
\t\t}

\t\ttable.nine center {
\t\t\tmin-width: 430px;
\t\t}

\t\ttable.ten center {
\t\t\tmin-width: 480px;
\t\t}

\t\ttable.eleven center {
\t\t\tmin-width: 530px;
\t\t}

\t\ttable.twelve center {
\t\t\tmin-width: 580px;
\t\t}

\t\ttable.one .panel center {
\t\t\tmin-width: 10px;
\t\t}

\t\ttable.two .panel center {
\t\t\tmin-width: 60px;
\t\t}

\t\ttable.three .panel center {
\t\t\tmin-width: 110px;
\t\t}

\t\ttable.four .panel center {
\t\t\tmin-width: 160px;
\t\t}

\t\ttable.five .panel center {
\t\t\tmin-width: 210px;
\t\t}

\t\ttable.six .panel center {
\t\t\tmin-width: 260px;
\t\t}

\t\ttable.seven .panel center {
\t\t\tmin-width: 310px;
\t\t}

\t\ttable.eight .panel center {
\t\t\tmin-width: 360px;
\t\t}

\t\ttable.nine .panel center {
\t\t\tmin-width: 410px;
\t\t}

\t\ttable.ten .panel center {
\t\t\tmin-width: 460px;
\t\t}

\t\ttable.eleven .panel center {
\t\t\tmin-width: 510px;
\t\t}

\t\ttable.twelve .panel center {
\t\t\tmin-width: 560px;
\t\t}

\t\t.body .columns td.one,
\t\t.body .column td.one {
\t\t\twidth: 8.333333%;
\t\t}

\t\t.body .columns td.two,
\t\t.body .column td.two {
\t\t\twidth: 16.666666%;
\t\t}

\t\t.body .columns td.three,
\t\t.body .column td.three {
\t\t\twidth: 25%;
\t\t}

\t\t.body .columns td.four,
\t\t.body .column td.four {
\t\t\twidth: 33.333333%;
\t\t}

\t\t.body .columns td.five,
\t\t.body .column td.five {
\t\t\twidth: 41.666666%;
\t\t}

\t\t.body .columns td.six,
\t\t.body .column td.six {
\t\t\twidth: 50%;
\t\t}

\t\t.body .columns td.seven,
\t\t.body .column td.seven {
\t\t\twidth: 58.333333%;
\t\t}

\t\t.body .columns td.eight,
\t\t.body .column td.eight {
\t\t\twidth: 66.666666%;
\t\t}

\t\t.body .columns td.nine,
\t\t.body .column td.nine {
\t\t\twidth: 75%;
\t\t}

\t\t.body .columns td.ten,
\t\t.body .column td.ten {
\t\t\twidth: 83.333333%;
\t\t}

\t\t.body .columns td.eleven,
\t\t.body .column td.eleven {
\t\t\twidth: 91.666666%;
\t\t}

\t\t.body .columns td.twelve,
\t\t.body .column td.twelve {
\t\t\twidth: 100%;
\t\t}

\t\ttd.offset-by-one {
\t\t\tpadding-left: 50px;
\t\t}

\t\ttd.offset-by-two {
\t\t\tpadding-left: 100px;
\t\t}

\t\ttd.offset-by-three {
\t\t\tpadding-left: 150px;
\t\t}

\t\ttd.offset-by-four {
\t\t\tpadding-left: 200px;
\t\t}

\t\ttd.offset-by-five {
\t\t\tpadding-left: 250px;
\t\t}

\t\ttd.offset-by-six {
\t\t\tpadding-left: 300px;
\t\t}

\t\ttd.offset-by-seven {
\t\t\tpadding-left: 350px;
\t\t}

\t\ttd.offset-by-eight {
\t\t\tpadding-left: 400px;
\t\t}

\t\ttd.offset-by-nine {
\t\t\tpadding-left: 450px;
\t\t}

\t\ttd.offset-by-ten {
\t\t\tpadding-left: 500px;
\t\t}

\t\ttd.offset-by-eleven {
\t\t\tpadding-left: 550px;
\t\t}

\t\ttd.expander {
\t\t\tvisibility: hidden;
\t\t\twidth: 0px;
\t\t\tpadding: 0 !important;
\t\t}

\t\ttable.columns .text-pad,
\t\ttable.column .text-pad {
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t}

\t\ttable.columns .left-text-pad,
\t\ttable.columns .text-pad-left,
\t\ttable.column .left-text-pad,
\t\ttable.column .text-pad-left {
\t\t\tpadding-left: 10px;
\t\t}

\t\ttable.columns .right-text-pad,
\t\ttable.columns .text-pad-right,
\t\ttable.column .right-text-pad,
\t\ttable.column .text-pad-right {
\t\t\tpadding-right: 10px;
\t\t}


\t\t/* Block Grid */

\t\t.block-grid {
\t\t\twidth: 100%;
\t\t\tmax-width: 580px;
\t\t}

\t\t.block-grid td {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 10px;
\t\t}

\t\t.two-up td {
\t\t\twidth: 270px;
\t\t}

\t\t.three-up td {
\t\t\twidth: 173px;
\t\t}

\t\t.four-up td {
\t\t\twidth: 125px;
\t\t}

\t\t.five-up td {
\t\t\twidth: 96px;
\t\t}

\t\t.six-up td {
\t\t\twidth: 76px;
\t\t}

\t\t.seven-up td {
\t\t\twidth: 62px;
\t\t}

\t\t.eight-up td {
\t\t\twidth: 52px;
\t\t}


\t\t/* Alignment & Visibility Classes */

\t\ttable.center,
\t\ttd.center {
\t\t\ttext-align: center;
\t\t}

\t\th1.center,
\t\th2.center,
\t\th3.center,
\t\th4.center,
\t\th5.center,
\t\th6.center {
\t\t\ttext-align: center;
\t\t}

\t\tspan.center {
\t\t\tdisplay: block;
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t}

\t\timg.center {
\t\t\tmargin: 0 auto;
\t\t\tfloat: none;
\t\t}

\t\t.show-for-small,
\t\t.hide-for-desktop {
\t\t\tdisplay: none;
\t\t}


\t\t/* Typography */

\t\tbody,
\t\ttable.body,
\t\th1,
\t\th2,
\t\th3,
\t\th4,
\t\th5,
\t\th6,
\t\tp,
\t\ttd {
\t\t\tcolor: #222222;
\t\t\tfont-family: \"Helvetica\", \"Arial\", sans-serif;
\t\t\tfont-weight: normal;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\ttext-align: left;
\t\t\tline-height: 1.3;
\t\t}

\t\th1,
\t\th2,
\t\th3,
\t\th4,
\t\th5,
\t\th6 {
\t\t\tword-break: normal;
\t\t}

\t\th1 {
\t\t\tfont-size: 40px;
\t\t}

\t\th2 {
\t\t\tfont-size: 36px;
\t\t}

\t\th3 {
\t\t\tfont-size: 32px;
\t\t}

\t\th4 {
\t\t\tfont-size: 28px;
\t\t}

\t\th5 {
\t\t\tfont-size: 24px;
\t\t}

\t\th6 {
\t\t\tfont-size: 20px;
\t\t}

\t\tbody,
\t\ttable.body,
\t\tp,
\t\ttd {
\t\t\tfont-size: 14px;
\t\t\tline-height: 19px;
\t\t}

\t\tp.lead,
\t\tp.lede,
\t\tp.leed {
\t\t\tfont-size: 18px;
\t\t\tline-height: 21px;
\t\t}

\t\tp {
\t\t\tmargin-bottom: 10px;
\t\t}

\t\tsmall {
\t\t\tfont-size: 10px;
\t\t}

\t\ta {
\t\t\tcolor: #2ba6cb;
\t\t\ttext-decoration: none;
\t\t}

\t\ta:hover {
\t\t\tcolor: #2795b6 !important;
\t\t}

\t\ta:active {
\t\t\tcolor: #2795b6 !important;
\t\t}

\t\ta:visited {
\t\t\tcolor: #2ba6cb !important;
\t\t}

\t\th1 a,
\t\th2 a,
\t\th3 a,
\t\th4 a,
\t\th5 a,
\t\th6 a {
\t\t\tcolor: #2ba6cb;
\t\t}

\t\th1 a:active,
\t\th2 a:active,
\t\th3 a:active,
\t\th4 a:active,
\t\th5 a:active,
\t\th6 a:active {
\t\t\tcolor: #2ba6cb !important;
\t\t}

\t\th1 a:visited,
\t\th2 a:visited,
\t\th3 a:visited,
\t\th4 a:visited,
\t\th5 a:visited,
\t\th6 a:visited {
\t\t\tcolor: #2ba6cb !important;
\t\t}


\t\t/* Panels */

\t\t.panel {
\t\t\tbackground: #f2f2f2;
\t\t\tborder: 1px solid #d9d9d9;
\t\t\tpadding: 10px !important;
\t\t}

\t\t.sub-grid table {
\t\t\twidth: 100%;
\t\t}

\t\t.sub-grid td.sub-columns {
\t\t\tpadding-bottom: 0;
\t\t}


\t\t/* Buttons */

\t\ttable.button,
\t\ttable.tiny-button,
\t\ttable.small-button,
\t\ttable.medium-button,
\t\ttable.large-button {
\t\t\twidth: 100%;
\t\t\toverflow: hidden;
\t\t}

\t\ttable.button td,
\t\ttable.tiny-button td,
\t\ttable.small-button td,
\t\ttable.medium-button td,
\t\ttable.large-button td {
\t\t\tdisplay: block;
\t\t\twidth: auto !important;
\t\t\ttext-align: center;
\t\t\tbackground: #2ba6cb;
\t\t\tborder: 1px solid #2284a1;
\t\t\tcolor: #ffffff;
\t\t\tpadding: 8px 0;
\t\t}

\t\ttable.tiny-button td {
\t\t\tpadding: 5px 0 4px;
\t\t}

\t\ttable.small-button td {
\t\t\tpadding: 8px 0 7px;
\t\t}

\t\ttable.medium-button td {
\t\t\tpadding: 12px 0 10px;
\t\t}

\t\ttable.large-button td {
\t\t\tpadding: 21px 0 18px;
\t\t}

\t\ttable.button td a,
\t\ttable.tiny-button td a,
\t\ttable.small-button td a,
\t\ttable.medium-button td a,
\t\ttable.large-button td a {
\t\t\tfont-weight: bold;
\t\t\ttext-decoration: none;
\t\t\tfont-family: Helvetica, Arial, sans-serif;
\t\t\tcolor: #ffffff;
\t\t\tfont-size: 16px;
\t\t}

\t\ttable.tiny-button td a {
\t\t\tfont-size: 12px;
\t\t\tfont-weight: normal;
\t\t}

\t\ttable.small-button td a {
\t\t\tfont-size: 16px;
\t\t}

\t\ttable.medium-button td a {
\t\t\tfont-size: 20px;
\t\t}

\t\ttable.large-button td a {
\t\t\tfont-size: 24px;
\t\t}

\t\ttable.button:hover td,
\t\ttable.button:visited td,
\t\ttable.button:active td {
\t\t\tbackground: #2795b6 !important;
\t\t}

\t\ttable.button:hover td a,
\t\ttable.button:visited td a,
\t\ttable.button:active td a {
\t\t\tcolor: #fff !important;
\t\t}

\t\ttable.button:hover td,
\t\ttable.tiny-button:hover td,
\t\ttable.small-button:hover td,
\t\ttable.medium-button:hover td,
\t\ttable.large-button:hover td {
\t\t\tbackground: #2795b6 !important;
\t\t}

\t\ttable.button:hover td a,
\t\ttable.button:active td a,
\t\ttable.button td a:visited,
\t\ttable.tiny-button:hover td a,
\t\ttable.tiny-button:active td a,
\t\ttable.tiny-button td a:visited,
\t\ttable.small-button:hover td a,
\t\ttable.small-button:active td a,
\t\ttable.small-button td a:visited,
\t\ttable.medium-button:hover td a,
\t\ttable.medium-button:active td a,
\t\ttable.medium-button td a:visited,
\t\ttable.large-button:hover td a,
\t\ttable.large-button:active td a,
\t\ttable.large-button td a:visited {
\t\t\tcolor: #ffffff !important;
\t\t}

\t\ttable.secondary td {
\t\t\tbackground: #e9e9e9;
\t\t\tborder-color: #d0d0d0;
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary td a {
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary:hover td {
\t\t\tbackground: #d0d0d0 !important;
\t\t\tcolor: #555;
\t\t}

\t\ttable.secondary:hover td a,
\t\ttable.secondary td a:visited,
\t\ttable.secondary:active td a {
\t\t\tcolor: #555 !important;
\t\t}

\t\ttable.success td {
\t\t\tbackground: #5da423;
\t\t\tborder-color: #457a1a;
\t\t}

\t\ttable.success:hover td {
\t\t\tbackground: #457a1a !important;
\t\t}

\t\ttable.alert td {
\t\t\tbackground: #c60f13;
\t\t\tborder-color: #970b0e;
\t\t}

\t\ttable.alert:hover td {
\t\t\tbackground: #970b0e !important;
\t\t}

\t\ttable.radius td {
\t\t\t-webkit-border-radius: 3px;
\t\t\t-moz-border-radius: 3px;
\t\t\tborder-radius: 3px;
\t\t}

\t\ttable.round td {
\t\t\t-webkit-border-radius: 500px;
\t\t\t-moz-border-radius: 500px;
\t\t\tborder-radius: 500px;
\t\t}


\t\t/* Outlook First */

\t\tbody.outlook p {
\t\t\tdisplay: inline !important;
\t\t}


\t\t/*  Media Queries */

\t\t@media only screen and (max-width: 600px) {
\t\t\ttable[class=\"body\"] img {
\t\t\t\twidth: auto !important;
\t\t\t\theight: auto !important;
\t\t\t}
\t\t\ttable[class=\"body\"] center {
\t\t\t\tmin-width: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .container {
\t\t\t\twidth: 95% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .row {
\t\t\t\twidth: 100% !important;
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper {
\t\t\t\tdisplay: block !important;
\t\t\t\tpadding-right: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns,
\t\t\ttable[class=\"body\"] .column {
\t\t\t\ttable-layout: fixed !important;
\t\t\t\tfloat: none !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tpadding-right: 0px !important;
\t\t\t\tpadding-left: 0px !important;
\t\t\t\tdisplay: block !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper.first .columns,
\t\t\ttable[class=\"body\"] .wrapper.first .column {
\t\t\t\tdisplay: table !important;
\t\t\t}
\t\t\ttable[class=\"body\"] table.columns td,
\t\t\ttable[class=\"body\"] table.column td {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.one,
\t\t\ttable[class=\"body\"] .column td.one {
\t\t\t\twidth: 8.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.two,
\t\t\ttable[class=\"body\"] .column td.two {
\t\t\t\twidth: 16.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.three,
\t\t\ttable[class=\"body\"] .column td.three {
\t\t\t\twidth: 25% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.four,
\t\t\ttable[class=\"body\"] .column td.four {
\t\t\t\twidth: 33.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.five,
\t\t\ttable[class=\"body\"] .column td.five {
\t\t\t\twidth: 41.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.six,
\t\t\ttable[class=\"body\"] .column td.six {
\t\t\t\twidth: 50% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.seven,
\t\t\ttable[class=\"body\"] .column td.seven {
\t\t\t\twidth: 58.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.eight,
\t\t\ttable[class=\"body\"] .column td.eight {
\t\t\t\twidth: 66.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.nine,
\t\t\ttable[class=\"body\"] .column td.nine {
\t\t\t\twidth: 75% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.ten,
\t\t\ttable[class=\"body\"] .column td.ten {
\t\t\t\twidth: 83.333333% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.eleven,
\t\t\ttable[class=\"body\"] .column td.eleven {
\t\t\t\twidth: 91.666666% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .columns td.twelve,
\t\t\ttable[class=\"body\"] .column td.twelve {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\ttable[class=\"body\"] td.offset-by-one,
\t\t\ttable[class=\"body\"] td.offset-by-two,
\t\t\ttable[class=\"body\"] td.offset-by-three,
\t\t\ttable[class=\"body\"] td.offset-by-four,
\t\t\ttable[class=\"body\"] td.offset-by-five,
\t\t\ttable[class=\"body\"] td.offset-by-six,
\t\t\ttable[class=\"body\"] td.offset-by-seven,
\t\t\ttable[class=\"body\"] td.offset-by-eight,
\t\t\ttable[class=\"body\"] td.offset-by-nine,
\t\t\ttable[class=\"body\"] td.offset-by-ten,
\t\t\ttable[class=\"body\"] td.offset-by-eleven {
\t\t\t\tpadding-left: 0 !important;
\t\t\t}
\t\t\ttable[class=\"body\"] table.columns td.expander {
\t\t\t\twidth: 1px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .right-text-pad,
\t\t\ttable[class=\"body\"] .text-pad-right {
\t\t\t\tpadding-left: 10px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .left-text-pad,
\t\t\ttable[class=\"body\"] .text-pad-left {
\t\t\t\tpadding-right: 10px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .hide-for-small,
\t\t\ttable[class=\"body\"] .show-for-desktop {
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .show-for-small,
\t\t\ttable[class=\"body\"] .hide-for-desktop {
\t\t\t\tdisplay: inherit !important;
\t\t\t}
\t\t}
\t</style>
\t<style type=\"text/css\">
\t\t/********************************
\t\t* CUSTOM STYLING - SYSTEM EMAIL *
\t\t********************************/

\t\tbody {
\t\t\tbackground: #d9e0e7;
\t\t}

\t\ta:hover,
\t\ta:focus {
\t\t\ttext-decoration: underline;
\t\t}


\t\t/* Typography */

\t\tbody,
\t\ttable.body,
\t\tp,
\t\ttd {
\t\t\tfont-size: 12px;
\t\t}

\t\th1,
\t\th2,
\t\th3,
\t\th4 {
\t\t\tmargin: 5px 0 10px;
\t\t}

\t\th5,
\t\th6 {
\t\t\tmargin: 5px 0;
\t\t}

\t\th1 {
\t\t\tfont-size: 36px;
\t\t}

\t\th2 {
\t\t\tfont-size: 30px;
\t\t}

\t\th3 {
\t\t\tfont-size: 24px;
\t\t}

\t\th4 {
\t\t\tfont-size: 18px;
\t\t}

\t\th5 {
\t\t\tfont-size: 14px;
\t\t}

\t\th6 {
\t\t\tfont-size: 12px;
\t\t}


\t\t/* Predefined Class */

\t\th1.last,
\t\th2.last,
\t\th3.last,
\t\th4.last,
\t\th5.last,
\t\th6.last,
\t\tp.last {
\t\t\tmargin-bottom: 0;
\t\t}

\t\ttd.last {
\t\t\tpadding-bottom: 0 !important;
\t\t}

\t\ttd.wrapper {
\t\t\tpadding: 15px 15px 0 15px;
\t\t}

\t\ttable.columns td,
\t\ttable.column td {
\t\t\tpadding: 0 0 15px 0;
\t\t}

\t\t.header,
\t\t.footer {
\t\t\tbackground: #ffffff;
\t\t}

\t\t.content.dark-theme {
\t\t\tbackground: #2d353c;
\t\t}

\t\t.content.dark-theme .panel {
\t\t\tbackground: #1b2024;
\t\t\tborder: none;
\t\t}

\t\t.content.dark-theme h1,
\t\t.content.dark-theme h2,
\t\t.content.dark-theme h3,
\t\t.content.dark-theme h4,
\t\t.content.dark-theme h5,
\t\t.content.dark-theme h6,
\t\t.content.dark-theme .highlight {
\t\t\tcolor: #fff !important;
\t\t}

\t\t.content.dark-theme a,
\t\ta {
\t\t\tcolor: #00acac;
\t\t}

\t\t.content.dark-theme p,
\t\t.content.dark-theme td {
\t\t\tcolor: #a8acb1 !important;
\t\t}

\t\t.divider {
\t\t\theight: 1px;
\t\t\twidth: 100%;
\t\t\tbackground: #444c54;
\t\t\tmargin-top: 5px;
\t\t}

\t\t.text-right {
\t\t\ttext-align: right;
\t\t}

\t\t.valign-middle {
\t\t\tvertical-align: middle;
\t\t}

\t\t.m-t-0 {
\t\t\tmargin-top: 0px !important;
\t\t}

\t\t.m-t-5 {
\t\t\tmargin-top: 5px !important;
\t\t}

\t\t.m-t-10 {
\t\t\tmargin-top: 10px !important;
\t\t}

\t\t.m-t-15 {
\t\t\tmargin-top: 15px !important;
\t\t}

\t\t.m-b-0 {
\t\t\tmargin-bottom: 0px !important;
\t\t}

\t\t.m-b-5 {
\t\t\tmargin-bottom: 5px !important;
\t\t}

\t\t.m-b-10 {
\t\t\tmargin-bottom: 10px !important;
\t\t}

\t\t.m-b-15 {
\t\t\tmargin-bottom: 15px !important;
\t\t}

\t\t.p-t-0 {
\t\t\tpadding-top: 0px !important;
\t\t}

\t\t.p-t-5 {
\t\t\tpadding-top: 5px !important;
\t\t}

\t\t.p-t-10 {
\t\t\tpadding-top: 10px !important;
\t\t}

\t\t.p-t-15 {
\t\t\tpadding-top: 15px !important;
\t\t}


\t\t/* Button */

\t\t.btn a,
\t\t.button a {
\t\t\tcolor: #fff !important;
\t\t\tfont-weight: normal !important;
\t\t\ttext-decoration: none !important;
\t\t}

\t\ttable.btn td,
\t\ttable.button td {
\t\t\tvertical-align: middle !important;
\t\t\tpadding: 6px 18px !important;
\t\t\tbackground: #00acac !important;
\t\t\tborder-color: #00acac !important;
\t\t\t-webkit-border-radius: 6px !important;
\t\t\t-moz-border-radius: 6px !important;
\t\t\tborder-radius: 6px !important;
\t\t}

\t\ttable.btn:hover td,
\t\ttable.button:hover td,
\t\ttable.btn:visited td,
\t\ttable.button:visited td,
\t\ttable.btn:active td,
\t\ttable.button:active td {
\t\t\tbackground: #008a8a !important;
\t\t\tborder-color: #008a8a !important;
\t\t}


\t\t/* Button Orange */

\t\ttable.btn.orange td,
\t\ttable.button.orange td {
\t\t\tbackground: #f59c1a !important;
\t\t\tborder-color: #f59c1a !important;
\t\t}

\t\ttable.btn.orange:hover td,
\t\ttable.button.orange:hover td,
\t\ttable.btn.orange:visited td,
\t\ttable.button.orange:visited td,
\t\ttable.btn.orange:active td,
\t\ttable.button.orange:active td {
\t\t\tbackground: #c47d15 !important;
\t\t\tborder-color: #c47d15 !important;
\t\t}


\t\t/* Button Blue */

\t\ttable.btn.blue td,
\t\ttable.button.blue td {
\t\t\tbackground: #348fe2 !important;
\t\t\tborder-color: #348fe2 !important;
\t\t}

\t\ttable.btn.blue:hover td,
\t\ttable.button.blue:hover td,
\t\ttable.btn.blue:visited td,
\t\ttable.button.blue:visited td,
\t\ttable.btn.blue:active td,
\t\ttable.button.blue:active td {
\t\t\tbackground: #2a72b5 !important;
\t\t\tborder-color: #2a72b5 !important;
\t\t}


\t\t/* Button Red */

\t\ttable.btn.red td,
\t\ttable.button.red td {
\t\t\tbackground: #ff5b57 !important;
\t\t\tborder-color: #ff5b57 !important;
\t\t}

\t\ttable.btn.red:hover td,
\t\ttable.button.red:hover td,
\t\ttable.btn.red:visited td,
\t\ttable.button.red:visited td,
\t\ttable.btn.red:active td,
\t\ttable.button.red:active td {
\t\t\tbackground: #cc4946 !important;
\t\t\tborder-color: #cc4946 !important;
\t\t}


\t\t/* Button White */

\t\ttable.btn.white td a,
\t\ttable.button.white td a {
\t\t\tcolor: #333 !important;
\t\t}

\t\ttable.btn.white td,
\t\ttable.button.white td {
\t\t\tbackground: #ffffff !important;
\t\t\tborder-color: #ffffff !important;
\t\t}

\t\ttable.btn.white:hover td,
\t\ttable.button.white:hover td,
\t\ttable.btn.white:visited td,
\t\ttable.button.white:visited td,
\t\ttable.btn.white:active td,
\t\ttable.button.white:active td {
\t\t\tbackground: #e2e7eb !important;
\t\t\tborder-color: #e2e7eb !important;
\t\t}


\t\t/* Button Grey */

\t\ttable.btn.grey td,
\t\ttable.button.grey td {
\t\t\tbackground: #348fe2 !important;
\t\t\tborder-color: #348fe2 !important;
\t\t}

\t\ttable.btn.grey:hover td,
\t\ttable.button.grey:hover td,
\t\ttable.btn.grey:visited td,
\t\ttable.button.grey:visited td,
\t\ttable.btn.grey:active td,
\t\ttable.button.grey:active td {
\t\t\tbackground: #929ba1 !important;
\t\t\tborder-color: #929ba1 !important;
\t\t}

\t\t.wrapper+.wrapper {
\t\t\tpadding-left: 0 !important;
\t\t}

\t\t@media only screen and (max-width: 600px) {
\t\t\t.body .container.content {
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\t.wrapper+.wrapper {
\t\t\t\tpadding-left: 15px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .row.header {
\t\t\t\tdisplay: table !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper {
\t\t\t\tpadding-right: 15px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .header img {
\t\t\t\theight: 20px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .header .wrapper {
\t\t\t\tdisplay: table-cell !important;
\t\t\t\tpadding-left: 5px !important;
\t\t\t\tpadding-right: 5px !important;
\t\t\t}
\t\t\ttable[class=\"body\"] .wrapper .text-right {
\t\t\t\ttext-align: right !important;
\t\t\t}
\t\t\t.text-right {
\t\t\t\ttext-align: left !important;
\t\t\t}
\t\t}
\t</style>
</head>
<body>
\t<!-- begin page body -->
\t<table class=\"body\">
\t\t<tr>
\t\t\t<td class=\"center\" align=\"center\" valign=\"top\">
\t\t\t\t<center>
\t\t\t\t\t<!-- begin page container -->
\t\t\t\t\t<table class=\"container content dark-theme\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<!-- begin row -->
\t\t\t\t\t\t\t\t<table class=\"row\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<!-- begin wrapper -->
\t\t\t\t\t\t\t\t\t\t<td class=\"wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"twelve columns\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Bienvendo al Sistema de Nomina</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-b-5\">Haga clic en la siguiente URL para activar su cuenta:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ site_url('auth/verification/' ~ data.usu_llave) }}\">
                                                            {{ site_url('auth/verification/' ~ data.usu_llave) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-t-15 last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSi hacer clic en la URL anterior no funciona, copie y pegue la URL en una ventana del navegador.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<!-- end wrapper -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t\t<!-- begin divider -->
\t\t\t\t\t\t\t\t<table class=\"divider\"></table>
\t\t\t\t\t\t\t\t<!-- end divider -->
\t\t\t\t\t\t\t\t<!-- begin row -->
\t\t\t\t\t\t\t\t<table class=\"row\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<!-- begin wrapper -->
\t\t\t\t\t\t\t\t\t\t<td class=\"wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<!-- begin twelve columns -->
\t\t\t\t\t\t\t\t\t\t\t<table class=\"twelve columns\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Datos de la cuenta</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Cedula de Identidad:</b> {{ data.usu_cedula_identidad }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Clave:</b> {{ data.usu_clave_plano }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Email:</b> {{ data.usu_email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<!-- end wrapper -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<!-- end page container -->
\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<!-- end page body -->
</body>
</html>", "auth/mail/register.twig", "/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/application/views/auth/mail/register.twig");
    }
}
