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

/* default/template/common/home.twig */
class __TwigTemplate_c41502bb5f6865ac5ba9c4c6dd7e4237 extends Template
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
        yield "
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 3
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 6
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 8
            yield "    ";
        } else {
            // line 9
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 10
            yield "    ";
        }
        // line 11
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 12
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 14
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/home.twig";
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
        return array (  84 => 14,  79 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
