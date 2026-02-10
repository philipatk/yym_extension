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

/* default/template/common/header.twig */
class __TwigTemplate_344166fa8cd5f7bdf3d9e59a2459552f extends Template
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
        yield "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        yield ($context["title"] ?? null);
        yield "</title>
<base href=\"";
        // line 13
        yield ($context["base"] ?? null);
        yield "\" />
";
        // line 14
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
";
        }
        // line 17
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
";
        }
        // line 20
        yield "<script src=\"catalog/view/javascript/jquery/jquery-3.7.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 27);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 27);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 27);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 34);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 34);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            yield $context["analytic"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">";
        // line 42
        yield ($context["currency"] ?? null);
        yield "
    ";
        // line 43
        yield ($context["language"] ?? null);
        yield "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 46
        yield ($context["contact"] ?? null);
        yield "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["telephone"] ?? null);
        yield "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 47
        yield ($context["account"] ?? null);
        yield "\" title=\"";
        yield ($context["text_account"] ?? null);
        yield "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_account"] ?? null);
        yield "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 49
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "            <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 51
            yield ($context["order"] ?? null);
            yield "\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 52
            yield ($context["transaction"] ?? null);
            yield "\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 53
            yield ($context["download"] ?? null);
            yield "\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 54
            yield ($context["logout"] ?? null);
            yield "\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
            ";
        } else {
            // line 56
            yield "            <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 57
            yield ($context["login"] ?? null);
            yield "\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
            ";
        }
        // line 59
        yield "          </ul>
        </li>
        <li><a href=\"";
        // line 61
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
        <li><a href=\"";
        // line 62
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
        <li><a href=\"";
        // line 63
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 72
        if ((($tmp = ($context["logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-responsive\" /></a>";
        } else {
            // line 73
            yield "          <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
          ";
        }
        // line 74
        yield "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 76
        yield ($context["search"] ?? null);
        yield "</div>
      <div class=\"col-sm-3\">";
        // line 77
        yield ($context["cart"] ?? null);
        yield "</div>
    </div>
  </div>
</header>
";
        // line 81
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/header.twig";
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
        return array (  311 => 81,  304 => 77,  300 => 76,  296 => 74,  288 => 73,  276 => 72,  260 => 63,  252 => 62,  244 => 61,  240 => 59,  233 => 57,  226 => 56,  219 => 54,  213 => 53,  207 => 52,  201 => 51,  194 => 50,  192 => 49,  183 => 47,  177 => 46,  171 => 43,  167 => 42,  162 => 39,  154 => 37,  150 => 36,  139 => 34,  135 => 33,  132 => 32,  123 => 30,  119 => 29,  106 => 27,  102 => 26,  94 => 20,  88 => 18,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  70 => 12,  59 => 6,  52 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
