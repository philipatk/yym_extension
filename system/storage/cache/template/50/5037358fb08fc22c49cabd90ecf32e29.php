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

/* install/step_3.twig */
class __TwigTemplate_b0e4b99e79d798ff915e2f241134b364 extends Template
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
        <h1 class=\"pull-left\">3
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "
          <br/>
          <small>";
        // line 11
        yield ($context["text_step_3"] ?? null);
        yield "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 19
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 24
        yield "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <p>";
        // line 27
        yield ($context["text_db_connection"] ?? null);
        yield "</p>
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-driver\">";
        // line 30
        yield ($context["entry_db_driver"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["drivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 34
            yield "                  ";
            if ((($context["db_driver"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 34))) {
                // line 35
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 35);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 35);
                yield "</option>
                  ";
            } else {
                // line 37
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 37);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 37);
                yield "</option>
                  ";
            }
            // line 39
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </select>
              ";
        // line 41
        if ((($tmp = ($context["error_db_driver"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_driver"] ?? null);
            yield "</div>
              ";
        }
        // line 44
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-hostname\">";
        // line 47
        yield ($context["entry_db_hostname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_hostname\" value=\"";
        // line 49
        yield ($context["db_hostname"] ?? null);
        yield "\" id=\"input-db-hostname\" class=\"form-control\"/>
              ";
        // line 50
        if ((($tmp = ($context["error_db_hostname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_hostname"] ?? null);
            yield "</div>
              ";
        }
        // line 53
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-username\">";
        // line 56
        yield ($context["entry_db_username"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_username\" value=\"";
        // line 58
        yield ($context["db_username"] ?? null);
        yield "\" id=\"input-db-username\" class=\"form-control\"/>
              ";
        // line 59
        if ((($tmp = ($context["error_db_username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_username"] ?? null);
            yield "</div>
              ";
        }
        // line 62
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-password\">";
        // line 65
        yield ($context["entry_db_password"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"db_password\" value=\"";
        // line 67
        yield ($context["db_password"] ?? null);
        yield "\" id=\"input-db-password\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-database\">";
        // line 71
        yield ($context["entry_db_database"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_database\" value=\"";
        // line 73
        yield ($context["db_database"] ?? null);
        yield "\" id=\"input-db-database\" class=\"form-control\"/>
              ";
        // line 74
        if ((($tmp = ($context["error_db_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_database"] ?? null);
            yield "</div>
              ";
        }
        // line 77
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-port\">";
        // line 80
        yield ($context["entry_db_port"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_port\" value=\"";
        // line 82
        yield ($context["db_port"] ?? null);
        yield "\" id=\"input-db-port\" class=\"form-control\"/>
              ";
        // line 83
        if ((($tmp = ($context["error_db_port"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_port"] ?? null);
            yield "</div>
              ";
        }
        // line 86
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-prefix\">";
        // line 89
        yield ($context["entry_db_prefix"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_prefix\" value=\"";
        // line 91
        yield ($context["db_prefix"] ?? null);
        yield "\" id=\"input-db-prefix\" class=\"form-control\"/>
              ";
        // line 92
        if ((($tmp = ($context["error_db_prefix"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                <div class=\"text-danger\">";
            yield ($context["error_db_prefix"] ?? null);
            yield "</div>
              ";
        }
        // line 95
        yield "            </div>
          </div>
        </fieldset>
        <p>";
        // line 98
        yield ($context["text_db_administration"] ?? null);
        yield "</p>
        <fieldset>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 101
        yield ($context["entry_username"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 103
        yield ($context["username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
              ";
        // line 104
        if ((($tmp = ($context["error_username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                <div class=\"text-danger\">";
            yield ($context["error_username"] ?? null);
            yield "</div>
              ";
        }
        // line 107
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 110
        yield ($context["entry_password"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"password\" value=\"";
        // line 112
        yield ($context["password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
              ";
        // line 113
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                <div class=\"text-danger\">";
            yield ($context["error_password"] ?? null);
            yield "</div>
              ";
        }
        // line 116
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 119
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 121
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 122
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 125
        yield "            </div>
          </div>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 129
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 131
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 136
        yield ($context["column_left"] ?? null);
        yield "</div>
  </div>
</div>
";
        // line 139
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
        return "install/step_3.twig";
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
        return array (  360 => 139,  354 => 136,  346 => 131,  339 => 129,  333 => 125,  327 => 123,  325 => 122,  321 => 121,  316 => 119,  311 => 116,  305 => 114,  303 => 113,  299 => 112,  294 => 110,  289 => 107,  283 => 105,  281 => 104,  277 => 103,  272 => 101,  266 => 98,  261 => 95,  255 => 93,  253 => 92,  249 => 91,  244 => 89,  239 => 86,  233 => 84,  231 => 83,  227 => 82,  222 => 80,  217 => 77,  211 => 75,  209 => 74,  205 => 73,  200 => 71,  193 => 67,  188 => 65,  183 => 62,  177 => 60,  175 => 59,  171 => 58,  166 => 56,  161 => 53,  155 => 51,  153 => 50,  149 => 49,  144 => 47,  139 => 44,  133 => 42,  131 => 41,  128 => 40,  122 => 39,  114 => 37,  106 => 35,  103 => 34,  99 => 33,  93 => 30,  87 => 27,  83 => 26,  79 => 24,  71 => 20,  69 => 19,  58 => 11,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step_3.twig", "");
    }
}
