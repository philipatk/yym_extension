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

/* common/footer.twig */
class __TwigTemplate_dca9c97b7366b0c4d34c4742f7fc8382 extends Template
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
        yield "<footer>
  <div class=\"container\">
    <a href=\"https://www.opencart.com\" target=\"_blank\">";
        // line 3
        yield ($context["text_project"] ?? null);
        yield "</a>|<a href=\"http://docs.opencart.com/en-gb/introduction/\" target=\"_blank\">";
        yield ($context["text_documentation"] ?? null);
        yield "</a>|<a href=\"https://forum.opencart.com\" target=\"_blank\">";
        yield ($context["text_support"] ?? null);
        yield "</a><br />
  </div>
</footer>
</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "common/footer.twig";
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
        return array (  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/footer.twig", "");
    }
}
