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

/* extension/dashboard/customer_info.twig */
class __TwigTemplate_d16e210eccc05761946b0ed512d4fbcf extends Template
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
        yield "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield " <span class=\"pull-right\">
    ";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            // line 4
            yield "    <i class=\"fa fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            yield "    <i class=\"fa fa-caret-down\"></i>
    ";
        }
        // line 8
        yield "    ";
        yield ($context["percentage"] ?? null);
        yield "%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-user\"></i>
    <h2 class=\"pull-right\">";
        // line 10
        yield ($context["total"] ?? null);
        yield "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        yield ($context["customer"] ?? null);
        yield "\">";
        yield ($context["text_view"] ?? null);
        yield "</a></div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/dashboard/customer_info.twig";
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
        return array (  71 => 12,  66 => 10,  60 => 8,  56 => 6,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/dashboard/customer_info.twig", "");
    }
}
