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

/* install/step_4.twig */
class __TwigTemplate_0df2613f70fdeaca6936bcf0320f46fb extends Template
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
        <h1 class=\"pull-left\">4
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "
          <br/>
          <small>";
        // line 11
        yield ($context["text_step_4"] ?? null);
        yield "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 19
        yield ($context["error_warning"] ?? null);
        yield " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 24
        yield ($context["text_catalog"] ?? null);
        yield "</a>
      </div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 28
        yield ($context["text_admin"] ?? null);
        yield "</a>
      </div>
    </div>
  </div>
  <div class=\"core-modules\">";
        // line 32
        yield ($context["promotion"] ?? null);
        yield "</div>
  <div class=\"modules\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&amp;utm_source=opencart_install&amp;utm_medium=store_link&amp;utm_campaign=opencart_install\" target=\"_BLANK\" class=\"btn btn-default\">";
        // line 33
        yield ($context["text_extension"] ?? null);
        yield "</a></div>
  <div class=\"mailing\">
    <div class=\"row\">
      <div class=\"col-sm-12\"><i class=\"fa fa-envelope-o fa-5x\"></i>
        <h3>";
        // line 37
        yield ($context["text_mail"] ?? null);
        yield "
          <br/>
          <small>";
        // line 39
        yield ($context["text_mail_description"] ?? null);
        yield "</small>
        </h3>
        <button type=\"button\" class=\"btn btn-secondary subscribe pull-right-md\">";
        // line 41
        yield ($context["button_mail"] ?? null);
        yield "</button>
      </div>
    </div>
  </div>
  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <a href=\"https://www.facebook.com/opencart/\" class=\"icon transition\"><i class=\"fa fa-facebook fa-4x\"></i></a>
        <h3>";
        // line 49
        yield ($context["text_facebook"] ?? null);
        yield "</h3>
        <p>";
        // line 50
        yield ($context["text_facebook_description"] ?? null);
        yield "</p>
        <a href=\"https://www.facebook.com/opencart/\">";
        // line 51
        yield ($context["text_facebook_visit"] ?? null);
        yield "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 55
        yield ($context["text_forum"] ?? null);
        yield "</h3>
        <p>";
        // line 56
        yield ($context["text_forum_description"] ?? null);
        yield "</p>
        <a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\">";
        // line 57
        yield ($context["text_forum_visit"] ?? null);
        yield "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 61
        yield ($context["text_commercial"] ?? null);
        yield "</h3>
        <p>";
        // line 62
        yield ($context["text_commercial_description"] ?? null);
        yield "</p>
        <a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" target=\"_BLANK\">";
        // line 63
        yield ($context["text_commercial_visit"] ?? null);
        yield "</a>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-newsletter\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\">Sign up to our newsletter</h4>
      </div>
      <div class=\"modal-body\">
        <div id=\"mc_embed_shell\">
          <link href=\"//cdn-images.mailchimp.com/embedcode/classic-061523.css\" rel=\"stylesheet\" type=\"text/css\">
          <div id=\"mc_embed_signup\">
            <form action=\"https://opencart.us2.list-manage.com/subscribe/post?u=7682b9d9bc273d548837cfa79&amp;id=88ee7f5931&amp;f_id=00a853e0f0\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\">
              <div id=\"mc_embed_signup_scroll\"><h2>Subscribe</h2>
                <div class=\"indicates-required\"><span class=\"asterisk\">*</span> indicates required</div>
                <div class=\"mc-field-group\"><label for=\"mce-EMAIL\">Email Address <span class=\"asterisk\">*</span></label><input type=\"email\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\" required=\"\" value=\"\"></div>
                <div id=\"mce-responses\" class=\"clearfalse\">
                  <div class=\"response\" id=\"mce-error-response\" style=\"display: none;\"></div>
                  <div class=\"response\" id=\"mce-success-response\" style=\"display: none;\"></div>
                </div>
                <div aria-hidden=\"true\" style=\"position: absolute; left: -5000px;\"><input type=\"text\" name=\"b_7682b9d9bc273d548837cfa79_88ee7f5931\" tabindex=\"-1\" value=\"\"></div>
                <div class=\"clear\"><input type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\" value=\"Subscribe\"></div>
             </div>
           </form>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    \$('#modal-newsletter').hide();
    \$('.subscribe').on('click', function() {
        \$('#modal-newsletter').modal('show');
    });
});
//--></script>

";
        // line 108
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
        return "install/step_4.twig";
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
        return array (  209 => 108,  161 => 63,  157 => 62,  153 => 61,  146 => 57,  142 => 56,  138 => 55,  131 => 51,  127 => 50,  123 => 49,  112 => 41,  107 => 39,  102 => 37,  95 => 33,  91 => 32,  84 => 28,  77 => 24,  69 => 19,  58 => 11,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step_4.twig", "");
    }
}
