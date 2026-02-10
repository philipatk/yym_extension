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

/* common/login.twig */
class __TwigTemplate_2140bde63560f8e8af799c15f7cc2932 extends Template
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
<div id=\"content\">
  <div class=\"container-fluid\"><br/>
    <br/>
    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h1 class=\"panel-title\"><i class=\"fa fa-lock\"></i> ";
        // line 9
        yield ($context["text_login"] ?? null);
        yield "</h1>
          </div>
          <div class=\"panel-body\">
            ";
        // line 12
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 17
        yield "            ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 22
        yield "            <form action=\"";
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label for=\"input-username\">";
        // line 24
        yield ($context["entry_username"] ?? null);
        yield "</label>
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 26
        yield ($context["username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"input-password\">";
        // line 30
        yield ($context["entry_password"] ?? null);
        yield "</label>
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 32
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
                </div>
                ";
        // line 34
        if ((($tmp = ($context["forgotten"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                <span class=\"help-block\"><a href=\"";
            yield ($context["forgotten"] ?? null);
            yield "\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a></span>
                ";
        }
        // line 37
        yield "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-key\"></i> ";
        // line 39
        yield ($context["button_login"] ?? null);
        yield "</button>
              </div>
              ";
        // line 41
        if ((($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "              <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\" />
              ";
        }
        // line 44
        yield "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 51
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
        return "common/login.twig";
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
        return array (  148 => 51,  139 => 44,  133 => 42,  131 => 41,  126 => 39,  122 => 37,  114 => 35,  112 => 34,  105 => 32,  100 => 30,  91 => 26,  86 => 24,  80 => 22,  72 => 18,  69 => 17,  61 => 13,  59 => 12,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/login.twig", "");
    }
}
