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

/* default/template/common/footer.twig */
class __TwigTemplate_357c0af9445f2a3ad0cbd4b3b12e6eed extends Template
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
    <div class=\"row\">
      ";
        // line 4
        if ((($tmp = ($context["informations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            yield ($context["text_information"] ?? null);
            yield "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                yield "          <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
                yield "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "        </ul>
      </div>
      ";
        }
        // line 14
        yield "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        yield ($context["text_service"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 18
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 19
        yield ($context["sitemap"] ?? null);
        yield "\">";
        yield ($context["text_sitemap"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 23
        yield ($context["text_extra"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        yield ($context["manufacturer"] ?? null);
        yield "\">";
        yield ($context["text_manufacturer"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 26
        yield ($context["voucher"] ?? null);
        yield "\">";
        yield ($context["text_voucher"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 27
        yield ($context["affiliate"] ?? null);
        yield "\">";
        yield ($context["text_affiliate"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 28
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 32
        yield ($context["text_account"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 35
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 36
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 37
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 42
        yield ($context["powered"] ?? null);
        yield "</p>
  </div>
</footer>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 46);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 46);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 46);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/footer.twig";
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
        return array (  207 => 51,  198 => 49,  194 => 48,  181 => 46,  177 => 45,  171 => 42,  161 => 37,  155 => 36,  149 => 35,  143 => 34,  138 => 32,  129 => 28,  123 => 27,  117 => 26,  111 => 25,  106 => 23,  97 => 19,  91 => 18,  85 => 17,  80 => 15,  77 => 14,  72 => 11,  61 => 9,  57 => 8,  52 => 6,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
