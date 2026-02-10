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

/* common/dashboard.twig */
class __TwigTemplate_5e28f34f2f451cef6778697c8a57afdd extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-developer\" title=\"";
        // line 6
        yield ($context["button_developer"] ?? null);
        yield "\" data-loading-text=\"";
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
      </div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((($tmp = ($context["error_install"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\">
      <button type=\"button\" class=\"close pull-right\" data-dismiss=\"alert\">&times;</button>
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            yield ($context["error_install"] ?? null);
            yield "</div>
    ";
        }
        // line 21
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            yield "    <div class=\"row\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 23
                yield "      ";
                $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 23), "col-md-3 col-sm-6");
                // line 24
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 25
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 25) > 3)) {
                        // line 26
                        yield "      ";
                        $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 26), "col-md-12 col-sm-12");
                        // line 27
                        yield "      ";
                    }
                    // line 28
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dashboard_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "      <div class=\"";
                yield ($context["class"] ?? null);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 29);
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dashboard_1'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "</div>
    ";
        // line 32
        yield ($context["security"] ?? null);
        yield "
  <script type=\"text/javascript\"><!--
\$('#button-developer').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer&user_token=";
        // line 36
        yield ($context["user_token"] ?? null);
        yield "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-developer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-developer').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#modal-developer').remove();
\t\t\t
\t\t\t\$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-developer').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t
//--></script> 
</div>
";
        // line 58
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "common/dashboard.twig";
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
        return array (  180 => 58,  155 => 36,  148 => 32,  145 => 31,  138 => 30,  127 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  107 => 24,  104 => 23,  99 => 22,  94 => 21,  89 => 19,  85 => 17,  83 => 16,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/dashboard.twig", "");
    }
}
