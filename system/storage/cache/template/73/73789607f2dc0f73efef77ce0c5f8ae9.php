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

/* extension/dashboard/activity_info.twig */
class __TwigTemplate_e2529b1bfb1d2f833c0c08810281014a extends Template
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
    <h3 class=\"panel-title\"><i class=\"fa fa-calendar\"></i> ";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</h3>
  </div>
  <ul class=\"list-group\">
    ";
        // line 6
        if ((($tmp = ($context["activities"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 8
                yield "    <li class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 8);
                yield "<br />
      <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> ";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 9);
                yield "</small></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    ";
        } else {
            // line 12
            yield "    <li class=\"list-group-item text-center\">";
            yield ($context["text_no_results"] ?? null);
            yield "</li>
    ";
        }
        // line 14
        yield "  </ul>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/dashboard/activity_info.twig";
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
        return array (  81 => 14,  75 => 12,  72 => 11,  64 => 9,  59 => 8,  54 => 7,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/dashboard/activity_info.twig", "");
    }
}
