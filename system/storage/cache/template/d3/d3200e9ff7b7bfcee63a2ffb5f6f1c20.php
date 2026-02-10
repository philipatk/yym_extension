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

/* extension/dashboard/recent_info.twig */
class __TwigTemplate_9e79e016aef08cd9f39600a41d636cef extends Template
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
    <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</h3>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table\">
      <thead>
        <tr>
          <td class=\"text-right\">";
        // line 9
        yield ($context["column_order_id"] ?? null);
        yield "</td>
          <td>";
        // line 10
        yield ($context["column_customer"] ?? null);
        yield "</td>
          <td>";
        // line 11
        yield ($context["column_status"] ?? null);
        yield "</td>
          <td>";
        // line 12
        yield ($context["column_date_added"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 13
        yield ($context["column_total"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 14
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                yield "        <tr>
          <td class=\"text-right\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 21);
                yield "</td>
          <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 22);
                yield "</td>
          <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 23);
                yield "</td>
          <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 24);
                yield "</td>
          <td class=\"text-right\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 25);
                yield "</td>
          <td class=\"text-right\"><a href=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 26);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        ";
        } else {
            // line 30
            yield "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 31
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
        ";
        }
        // line 34
        yield "      </tbody>
    </table>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/dashboard/recent_info.twig";
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
        return array (  135 => 34,  129 => 31,  126 => 30,  123 => 29,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  89 => 20,  84 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/dashboard/recent_info.twig", "");
    }
}
