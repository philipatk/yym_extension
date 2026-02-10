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

/* default/template/common/currency.twig */
class __TwigTemplate_7036e709eb8fbb636d991182878b1d49 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
            // line 2
            yield "<div class=\"pull-left\">
  <form action=\"";
            // line 3
            yield ($context["action"] ?? null);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    yield " <strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6);
                    yield "</strong> ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    yield " <strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6);
                    yield "</strong> ";
                }
                // line 7
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " <span class=\"hidden-xs hidden-sm hidden-md\">";
            yield ($context["text_currency"] ?? null);
            yield "</span>&nbsp;<i class=\"fa fa-caret-down\"></i></button>
      <ul class=\"dropdown-menu\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 10
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 12
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 12);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 12);
                    yield "</button>
        </li>
        ";
                } else {
                    // line 15
                    yield "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 16
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 16);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 16);
                    yield "</button>
        </li>
        ";
                }
                // line 19
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 23
            yield ($context["redirect"] ?? null);
            yield "\" />
  </form>
</div>
";
        }
        // line 26
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/currency.twig";
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
        return array (  129 => 26,  122 => 23,  117 => 20,  111 => 19,  101 => 16,  98 => 15,  88 => 12,  85 => 11,  82 => 10,  78 => 9,  67 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/currency.twig", "");
    }
}
