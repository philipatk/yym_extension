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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_1c799494d0ff97a5d3380742c646571a extends Template
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
        yield "<div class=\"slideshow swiper-viewport\">
  <div id=\"slideshow";
        // line 2
        yield ($context["module"] ?? null);
        yield "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            yield "      <div class=\"swiper-slide text-center\">";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 4);
                yield "\" class=\"img-responsive\" /></a>";
            } else {
                yield "<img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 4);
                yield "\" class=\"img-responsive\" />";
            }
            yield "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield " </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 7
        yield ($context["module"] ?? null);
        yield "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 14
        yield ($context["module"] ?? null);
        yield "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 17
        yield ($context["module"] ?? null);
        yield "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/extension/module/slideshow.twig";
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
        return array (  96 => 17,  90 => 14,  80 => 7,  76 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
