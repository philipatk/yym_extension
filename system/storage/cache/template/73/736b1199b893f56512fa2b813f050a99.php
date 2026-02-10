<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/dashboard/chart_info.twig */
class __TwigTemplate_bc26568d0d659a3769488adc499087dc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <div class=\"pull-right\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar\"></i> <i class=\"caret\"></i></a>
      <ul id=\"range\" class=\"dropdown-menu dropdown-menu-right\">
        <li><a href=\"day\">";
        // line 5
        yield ($context["text_day"] ?? null);
        yield "</a></li>
        <li><a href=\"week\">";
        // line 6
        yield ($context["text_week"] ?? null);
        yield "</a></li>
        <li class=\"active\"><a href=\"month\">";
        // line 7
        yield ($context["text_month"] ?? null);
        yield "</a></li>
        <li><a href=\"year\">";
        // line 8
        yield ($context["text_year"] ?? null);
        yield "</a></li>
      </ul>
    </div>
    <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> ";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"chart-sale\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.resize.min.js\"></script>
<script type=\"text/javascript\"><!--
\$('#range a').on('click', function(e) {
\te.preventDefault();
\t
\t\$(this).parent().parent().find('li').removeClass('active');
\t
\t\$(this).parent().addClass('active');
\t
\t\$.ajax({
\t\ttype: 'get',
\t\turl: 'index.php?route=extension/dashboard/chart/chart&user_token=";
        // line 29
        yield ($context["user_token"] ?? null);
        yield "&range=' + \$(this).attr('href'),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
            if (typeof json['order'] == 'undefined') { return false; }
\t\t\t
\t\t\tvar option = {\t
\t\t\t\tshadowSize: 0,
\t\t\t\tcolors: ['#9FD5F1', '#1065D2'],
\t\t\t\tbars: { 
\t\t\t\t\tshow: true,
\t\t\t\t\tfill: true,
\t\t\t\t\tlineWidth: 1
\t\t\t\t},
\t\t\t\tgrid: {
\t\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\t\thoverable: true
\t\t\t\t},
\t\t\t\tpoints: {
\t\t\t\t\tshow: false
\t\t\t\t},
\t\t\t\txaxis: {
\t\t\t\t\tshow: true,
            \t\tticks: json['xaxis']
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\t\$.plot('#chart-sale', [json['order'], json['customer']], option);\t
\t\t\t\t\t
\t\t\t\$('#chart-sale').bind('plothover', function(event, pos, item) {
\t\t\t\t\$('.tooltip').remove();
\t\t\t  
\t\t\t\tif (item) {
\t\t\t\t\t\$('<div id=\"tooltip\" class=\"tooltip top in\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');
\t\t\t\t\t
\t\t\t\t\t\$('#tooltip').css({
\t\t\t\t\t\tposition: 'absolute',
\t\t\t\t\t\tleft: item.pageX - (\$('#tooltip').outerWidth() / 2),
\t\t\t\t\t\ttop: item.pageY - \$('#tooltip').outerHeight(),
\t\t\t\t\t\tpointer: 'cusror'
\t\t\t\t\t}).fadeIn('slow');\t
\t\t\t\t\t
\t\t\t\t\t\$('#chart-sale').css('cursor', 'pointer');\t\t
\t\t\t  \t} else {
\t\t\t\t\t\$('#chart-sale').css('cursor', 'auto');
\t\t\t\t}
\t\t\t});
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
           alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});

\$('#range .active a').trigger('click');
//--></script> ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/dashboard/chart_info.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  87 => 29,  66 => 11,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/dashboard/chart_info.twig", "");
    }
}
