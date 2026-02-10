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

/* install/step_1.twig */
class __TwigTemplate_3eb608de8939642608fa31f2e78ffdf6 extends Template
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
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">1<small>/4</small></h1>
        <h3>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "<br/>
          <small>";
        // line 8
        yield ($context["text_step_1"] ?? null);
        yield "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 17
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"terms\">";
        // line 18
        yield ($context["text_terms"] ?? null);
        yield "</div>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 21
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 26
        yield ($context["column_left"] ?? null);
        yield "</div>
  </div>
</div>
";
        // line 29
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step_1.twig";
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
        return array (  91 => 29,  85 => 26,  77 => 21,  71 => 18,  67 => 17,  55 => 8,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step_1.twig", "");
    }
}
