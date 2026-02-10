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

/* default/template/common/cart.twig */
class __TwigTemplate_6ebe2eb2cdcb2b5ef19a4529b549cbd8 extends Template
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
        yield "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        yield ($context["text_items"] ?? null);
        yield "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            yield "    <li>
      <table class=\"table table-striped\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                yield "        <tr>
          <td class=\"text-center\">";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\" class=\"img-thumbnail\" /></a> ";
                }
                yield "</td>
          <td class=\"text-left\"><a href=\"";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                yield "</a> ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        yield " <br />
            - <small>";
                        // line 12
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 12);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 12);
                        yield "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    yield "            ";
                }
                // line 14
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <br />
            - <small>";
                    // line 15
                    yield ($context["text_recurring"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 15);
                    yield "</small> ";
                }
                yield "</td>
          <td class=\"text-right\">x ";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 16);
                yield "</td>
          <td class=\"text-right\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 17);
                yield "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 18);
                yield "');\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 22
                yield "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 24);
                yield "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 26);
                yield "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 27);
                yield "');\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 36
                yield "          <tr>
            <td class=\"text-right\"><strong>";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 37);
                yield "</strong></td>
            <td class=\"text-right\">";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 38);
                yield "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 42
            yield ($context["cart"] ?? null);
            yield "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            yield ($context["text_cart"] ?? null);
            yield "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            yield ($context["checkout"] ?? null);
            yield "\"><strong><i class=\"fa fa-share\"></i> ";
            yield ($context["text_checkout"] ?? null);
            yield "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 46
            yield "    <li>
      <p class=\"text-center\">";
            // line 47
            yield ($context["text_empty"] ?? null);
            yield "</p>
    </li>
    ";
        }
        // line 50
        yield "  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/cart.twig";
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
        return array (  217 => 50,  211 => 47,  208 => 46,  195 => 42,  192 => 41,  183 => 38,  179 => 37,  176 => 36,  172 => 35,  165 => 30,  154 => 27,  150 => 26,  145 => 24,  141 => 22,  136 => 21,  125 => 18,  121 => 17,  117 => 16,  109 => 15,  104 => 14,  101 => 13,  92 => 12,  85 => 11,  79 => 10,  65 => 9,  62 => 8,  58 => 7,  54 => 5,  52 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}
