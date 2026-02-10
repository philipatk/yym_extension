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
class __TwigTemplate_f477f0f47dcfd44f9734cffb536eb60e extends Template
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
        yield "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        yield ($context["text_navigation"] ?? null);
        yield "</div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            yield "    <li id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            yield "\">
        ";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7);
                yield "\"><i class=\"fa ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                yield " fw\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                yield "</a>";
            } else {
                yield "<a href=\"#collapse";
                yield ($context["i"] ?? null);
                yield "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                yield " fw\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                yield "</a>";
            }
            // line 8
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "          <ul id=\"collapse";
                yield ($context["i"] ?? null);
                yield "\" class=\"collapse\">
            ";
                // line 10
                $context["j"] = 0;
                // line 11
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 12
                    yield "              <li>";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 13
                        yield "                  <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 13);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 13);
                        yield "</a>
                ";
                    } else {
                        // line 15
                        yield "                  <a href=\"#collapse";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 15);
                        yield "</a>
                ";
                    }
                    // line 17
                    yield "
                ";
                    // line 18
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 19
                        yield "                  <ul id=\"collapse";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" class=\"collapse\">
                    ";
                        // line 20
                        $context["k"] = 0;
                        // line 21
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 22
                            yield "                      <li>";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 23
                                yield "                          <a href=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 23);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 23);
                                yield "</a>
                        ";
                            } else {
                                // line 25
                                yield "                          <a href=\"#collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 25);
                                yield "</a>
                        ";
                            }
                            // line 27
                            yield "                        ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 28
                                yield "                          <ul id=\"collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" class=\"collapse\">
                            ";
                                // line 29
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 29));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 30
                                    yield "                              <li><a href=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 30);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 30);
                                    yield "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['children_3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                yield "                          </ul>
                        ";
                            }
                            // line 33
                            yield "</li>
                      ";
                            // line 34
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 35
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['children_2'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        yield "                  </ul>
                ";
                    }
                    // line 37
                    yield " </li>
              ";
                    // line 38
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 39
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['children_1'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "          </ul>
        ";
            }
            // line 42
            yield "      </li>
    ";
            // line 43
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 44
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 49
        yield ($context["text_complete_status"] ?? null);
        yield " <span class=\"pull-right\">";
        yield ($context["complete_status"] ?? null);
        yield "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 51
        yield ($context["complete_status"] ?? null);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        yield ($context["complete_status"] ?? null);
        yield "%\"> <span class=\"sr-only\">";
        yield ($context["complete_status"] ?? null);
        yield "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 55
        yield ($context["text_processing_status"] ?? null);
        yield " <span class=\"pull-right\">";
        yield ($context["processing_status"] ?? null);
        yield "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 57
        yield ($context["processing_status"] ?? null);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        yield ($context["processing_status"] ?? null);
        yield "%\"> <span class=\"sr-only\">";
        yield ($context["processing_status"] ?? null);
        yield "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 61
        yield ($context["text_other_status"] ?? null);
        yield " <span class=\"pull-right\">";
        yield ($context["other_status"] ?? null);
        yield "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 63
        yield ($context["other_status"] ?? null);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        yield ($context["other_status"] ?? null);
        yield "%\"> <span class=\"sr-only\">";
        yield ($context["other_status"] ?? null);
        yield "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
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
        return array (  279 => 63,  272 => 61,  261 => 57,  254 => 55,  243 => 51,  236 => 49,  230 => 45,  224 => 44,  222 => 43,  219 => 42,  215 => 40,  209 => 39,  207 => 38,  204 => 37,  200 => 36,  194 => 35,  192 => 34,  189 => 33,  185 => 32,  174 => 30,  170 => 29,  161 => 28,  158 => 27,  146 => 25,  138 => 23,  135 => 22,  130 => 21,  128 => 20,  121 => 19,  119 => 18,  116 => 17,  106 => 15,  98 => 13,  95 => 12,  90 => 11,  88 => 10,  83 => 9,  80 => 8,  62 => 7,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/column_left.twig", "");
    }
}
