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

/* common/security.twig */
class __TwigTemplate_0b90d925412eaec400b2f9240c06cc1d extends Template
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
        yield "<div id=\"modal-security\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title text-danger\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        yield ($context["text_security"] ?? null);
        yield "</div>
        <form class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 12
        yield ($context["text_choose"] ?? null);
        yield "</legend>
            <div class=\"form-group\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                <option value=\"automatic\">";
        // line 15
        yield ($context["text_automatic"] ?? null);
        yield "</option>
                <option value=\"manual\">";
        // line 16
        yield ($context["text_manual"] ?? null);
        yield "</option>
              </select>
            </div>
          </fieldset>
          <fieldset id=\"collapse-automatic\" class=\"collapse\">
            <legend>";
        // line 21
        yield ($context["text_automatic"] ?? null);
        yield "</legend>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <div class=\"input-group-btn dropdown\">
                  <button type=\"button\" id=\"button-path\" data-toggle=\"dropdown\" class=\"btn btn-default\">";
        // line 25
        yield ($context["document_root"] ?? null);
        yield " <span class=\"caret\"></span></button>
                  <ul class=\"dropdown-menu\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paths"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 28
            yield "                    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["path"]) > Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["document_root"] ?? null)))) {
                // line 29
                yield "                    <li><a href=\"";
                yield $context["path"];
                yield "\"><i class=\"fa fa-exclamation-triangle fa-fw text-danger\"></i> ";
                yield $context["path"];
                yield "</a></li>
                    ";
            } else {
                // line 31
                yield "                    <li><a href=\"";
                yield $context["path"];
                yield "\"><i class=\"fa fa-check-circle fa-fw text-success\"></i> ";
                yield $context["path"];
                yield "</a></li>
                    ";
            }
            // line 33
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['path'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                  </ul>
                </div>
                <input type=\"text\" name=\"directory\" value=\"storage\" placeholder=\"";
        // line 36
        yield ($context["entry_directory"] ?? null);
        yield "\" class=\"form-control\" />
                <div class=\"input-group-btn\">
                  <button type=\"button\" id=\"button-move\" data-loading-text=\"";
        // line 38
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        yield ($context["button_move"] ?? null);
        yield "</button>
                </div>
              </div>
              <input type=\"hidden\" name=\"path\" value=\"";
        // line 41
        yield ($context["document_root"] ?? null);
        yield "\" />
            </div>
          </fieldset>
          <fieldset id=\"collapse-manual\" class=\"collapse\">
            <legend>";
        // line 45
        yield ($context["text_manual"] ?? null);
        yield "</legend>
            <div class=\"form-group\">
              <div style=\"height: 300px; overflow-y: scroll;\" class=\"form-control\" disabled=\"disabled\"></div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('#modal-security').modal('show');
});

\$('#modal-security select[name=\\'type\\']').on('change', function() {
\t\$('#modal-security fieldset.collapse').removeClass('in');
\t
\t\$('#modal-security #collapse-' + \$(this).val()).addClass('in');
});

\$('#modal-security select[name=\\'type\\']').trigger('change');

\$('#modal-security .dropdown-menu a').on('click', function(e) {
\te.preventDefault();
\t
\t\$('#modal-security #button-path').html(\$(this).html() + ' <span class=\"caret\"></span>');
\t
\t\$('#modal-security input[name=\\'path\\']').val(\$(this).attr('href'));
});


\$('#modal-security .dropdown-menu a').on('click', function(e) {
\te.preventDefault();
\t
\t\$('#button-path').html(\$(this).text() + ' <span class=\"caret\"></span>');
\t
\t\$('input[name=\\'path\\']').val(\$(this).attr('href'));
\t
\t\$('input[name=\\'path\\']').trigger('change');
});

\$('#button-move').on('click', function() {
\tvar element = this;
\t
\t\$.ajax({
\t\turl: 'index.php?route=common/security/move&user_token=";
        // line 91
        yield ($context["user_token"] ?? null);
        yield "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'path\\'], input[name=\\'directory\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-security .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-security .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#modal-security select[name=\\'type\\']').on('change', function () {
\thtml  = '<ol>';
\thtml += '<li><p>";
        // line 121
        yield ($context["text_move"] ?? null);
        yield "</p>';
\thtml += '<p><strong>";
        // line 122
        yield ($context["storage"] ?? null);
        yield "</strong></p>';
\thtml += '<p>";
        // line 123
        yield ($context["text_to"] ?? null);
        yield "</p>';
\thtml += '<p><strong>' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/</strong></p></li>';
\thtml += '<li><p>";
        // line 125
        yield ($context["text_config"] ?? null);
        yield "</p>';
\thtml += '<p><strong>define(\\'DIR_STORAGE\\', DIR_SYSTEM . \\'storage/\\');</strong></p>';
\thtml += '<p>";
        // line 127
        yield ($context["text_to"] ?? null);
        yield "</p>';
\thtml += '<p><strong>define(\\'DIR_STORAGE\\', \\'' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/\\');</strong></p></li>';
\thtml += '<li><p>";
        // line 129
        yield ($context["text_admin"] ?? null);
        yield "</p>';
\thtml += '<p><strong>define(\\'DIR_STORAGE\\', DIR_SYSTEM . \\'storage/\\');</strong></p>';
\thtml += '<p>";
        // line 131
        yield ($context["text_to"] ?? null);
        yield "</p>';
\thtml += '<p><strong>define(\\'DIR_STORAGE\\', \\'' + \$('#modal-security input[name=\\'path\\']').val() + \$('#modal-security input[name=\\'directory\\']').val() + '/\\');</strong></p></li>';
    html += '</ol>';
\t
\t\$('#collapse-manual .form-control').html(html);
});

\$('input[name=\\'path\\']').trigger('change');
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "common/security.twig";
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
        return array (  254 => 131,  249 => 129,  244 => 127,  239 => 125,  234 => 123,  230 => 122,  226 => 121,  193 => 91,  144 => 45,  137 => 41,  129 => 38,  124 => 36,  120 => 34,  114 => 33,  106 => 31,  98 => 29,  95 => 28,  91 => 27,  86 => 25,  79 => 21,  71 => 16,  67 => 15,  61 => 12,  55 => 9,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/security.twig", "");
    }
}
