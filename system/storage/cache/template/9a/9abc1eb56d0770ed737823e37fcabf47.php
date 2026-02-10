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

/* common/column_left.twig */
class __TwigTemplate_d551f70074c40f111fcf2be2873ae964 extends Template
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
        yield "<ul class=\"list-group\">
  ";
        // line 2
        if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["route"] ?? null), 0, 8) != "upgrade/")) {
            // line 3
            yield "  ";
            if ((($context["route"] ?? null) == "install/step_1")) {
                // line 4
                yield "  <li class=\"list-group-item\"><b>";
                yield ($context["text_license"] ?? null);
                yield "</b></li>
  ";
            } else {
                // line 6
                yield "  <li class=\"list-group-item\">";
                yield ($context["text_license"] ?? null);
                yield "</li>
  ";
            }
            // line 8
            yield "  ";
            if ((($context["route"] ?? null) == "install/step_2")) {
                // line 9
                yield "  <li class=\"list-group-item\"><b>";
                yield ($context["text_installation"] ?? null);
                yield "</b></li>
  ";
            } else {
                // line 11
                yield "  <li class=\"list-group-item\">";
                yield ($context["text_installation"] ?? null);
                yield "</li>
  ";
            }
            // line 13
            yield "  ";
            if ((($context["route"] ?? null) == "install/step_3")) {
                // line 14
                yield "  <li class=\"list-group-item\"><b>";
                yield ($context["text_configuration"] ?? null);
                yield "</b></li>
  ";
            } else {
                // line 16
                yield "  <li class=\"list-group-item\">";
                yield ($context["text_configuration"] ?? null);
                yield "</li>
  ";
            }
            // line 18
            yield "  ";
        } else {
            // line 19
            yield "  ";
            if ((($context["route"] ?? null) == "upgrade/upgrade")) {
                // line 20
                yield "  <li class=\"list-group-item\"><b>";
                yield ($context["text_upgrade"] ?? null);
                yield "</b></li>
  ";
            } else {
                // line 22
                yield "  <li class=\"list-group-item\">";
                yield ($context["text_upgrade"] ?? null);
                yield "</li>
  ";
            }
            // line 24
            yield "  ";
            if ((($context["route"] ?? null) == "upgrade/upgrade/success")) {
                // line 25
                yield "  <li class=\"list-group-item\"><b>";
                yield ($context["text_finished"] ?? null);
                yield "</b></li>
  ";
            } else {
                // line 27
                yield "  <li class=\"list-group-item\">";
                yield ($context["text_finished"] ?? null);
                yield "</li>
  ";
            }
            // line 29
            yield "  ";
        }
        // line 30
        yield "</ul>
<form action=\"";
        // line 31
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
  <ul class=\"list-group\">
    <li class=\"list-group-item\">
      <div class=\"dropdown\">
        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">";
        // line 35
        yield ($context["text_language"] ?? null);
        yield " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\">
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            yield "          <li><a href=\"";
            yield $context["language"];
            yield "\"><img src=\"language/";
            yield $context["language"];
            yield "/";
            yield $context["language"];
            yield ".png\" /></a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </ul>
      </div>
    </li>
  </ul>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 45
        yield ($context["redirect"] ?? null);
        yield "\" />
</form>
<script type=\"text/javascript\"><!--
// Language
\$('#language a').on('click', function(e) {
\te.preventDefault();

\t\$('#language input[name=\\'code\\']').val(\$(this).attr('href'));

\t\$('#language').submit();
});
--></script> 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "common/column_left.twig";
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
        return array (  167 => 45,  160 => 40,  147 => 38,  143 => 37,  138 => 35,  131 => 31,  128 => 30,  125 => 29,  119 => 27,  113 => 25,  110 => 24,  104 => 22,  98 => 20,  95 => 19,  92 => 18,  86 => 16,  80 => 14,  77 => 13,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/column_left.twig", "");
    }
}
