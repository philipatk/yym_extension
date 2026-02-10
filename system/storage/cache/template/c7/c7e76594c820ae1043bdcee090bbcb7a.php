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

/* install/step_2.twig */
class __TwigTemplate_41ae1911a902cbe88af4f36d0b492483 extends Template
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
        <h1 class=\"pull-left\">2<small>/4</small></h1>
        <h3>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "<br/>
          <small>";
        // line 8
        yield ($context["text_step_2"] ?? null);
        yield "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 15
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 20
        yield "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 22
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 23
        yield ($context["text_install_php"] ?? null);
        yield "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 28
        yield ($context["text_setting"] ?? null);
        yield "</b></td>
                <td width=\"25%\"><b>";
        // line 29
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                <td width=\"25%\"><b>";
        // line 30
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 31
        yield ($context["text_status"] ?? null);
        yield "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 36
        yield ($context["text_version"] ?? null);
        yield "</td>
                <td>";
        // line 37
        yield ($context["php_version"] ?? null);
        yield "</td>
                <td>8.1+</td>
                <td class=\"text-center\">";
        // line 39
        if ((($context["php_version"] ?? null) >= "8.1")) {
            // line 40
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 42
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 43
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 46
        yield ($context["text_global"] ?? null);
        yield "</td>
                <td>";
        // line 47
        if ((($tmp = ($context["register_globals"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 50
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 51
        yield "</td>
                <td>";
        // line 52
        yield ($context["text_off"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 53
        if ((($tmp =  !($context["register_globals"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 56
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 57
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 60
        yield ($context["text_magic"] ?? null);
        yield "</td>
                <td>";
        // line 61
        if ((($tmp = ($context["magic_quotes_gpc"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 64
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 65
        yield "</td>
                <td>";
        // line 66
        yield ($context["text_off"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 67
        if ((($tmp =  !($context["error_magic_quotes_gpc"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 70
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 71
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 74
        yield ($context["text_file_upload"] ?? null);
        yield "</td>
                <td>";
        // line 75
        if ((($tmp = ($context["file_uploads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 78
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 79
        yield "</td>
                <td>";
        // line 80
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 81
        if ((($tmp = ($context["file_uploads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 84
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 85
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 88
        yield ($context["text_session"] ?? null);
        yield "</td>
                <td>";
        // line 89
        if ((($tmp = ($context["session_auto_start"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 92
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 93
        yield "</td>
                <td>";
        // line 94
        yield ($context["text_off"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 95
        if ((($tmp =  !($context["session_auto_start"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 98
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 99
        yield "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 104
        yield ($context["text_install_extension"] ?? null);
        yield "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 109
        yield ($context["text_extension"] ?? null);
        yield "</b></td>
                <td width=\"25%\"><b>";
        // line 110
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                <td width=\"25%\"><b>";
        // line 111
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 112
        yield ($context["text_status"] ?? null);
        yield "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 117
        yield ($context["text_db"] ?? null);
        yield "</td>
                <td>";
        // line 118
        if ((($tmp = ($context["db"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 121
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 122
        yield "</td>
                <td>";
        // line 123
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 124
        if ((($tmp = ($context["db"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 127
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 128
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 131
        yield ($context["text_gd"] ?? null);
        yield "</td>
                <td>";
        // line 132
        if ((($tmp = ($context["gd"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 135
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 136
        yield "</td>
                <td>";
        // line 137
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 138
        if ((($tmp = ($context["gd"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 141
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 142
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 145
        yield ($context["text_curl"] ?? null);
        yield "</td>
                <td>";
        // line 146
        if ((($tmp = ($context["curl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 147
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 149
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 150
        yield "</td>
                <td>";
        // line 151
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 152
        if ((($tmp = ($context["curl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 155
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 156
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 159
        yield ($context["text_openssl"] ?? null);
        yield "</td>
                <td>";
        // line 160
        if ((($tmp = ($context["openssl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 163
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 164
        yield "</td>
                <td>";
        // line 165
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 166
        if ((($tmp = ($context["openssl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 167
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 169
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 170
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 173
        yield ($context["text_zlib"] ?? null);
        yield "</td>
                <td>";
        // line 174
        if ((($tmp = ($context["zlib"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 177
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 178
        yield "</td>
                <td>";
        // line 179
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 180
        if ((($tmp = ($context["zlib"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 183
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 184
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 187
        yield ($context["text_zip"] ?? null);
        yield "</td>
                <td>";
        // line 188
        if ((($tmp = ($context["zip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 191
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 192
        yield "</td>
                <td>";
        // line 193
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 194
        if ((($tmp = ($context["zip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 197
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 198
        yield "</td>
              </tr>
              ";
        // line 200
        if ((($tmp =  !($context["iconv"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "              <tr>
                <td>";
            // line 202
            yield ($context["text_mbstring"] ?? null);
            yield "</td>
                <td>";
            // line 203
            if ((($tmp = ($context["mbstring"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 204
                yield "                  ";
                yield ($context["text_on"] ?? null);
                yield "
                  ";
            } else {
                // line 206
                yield "                  ";
                yield ($context["text_off"] ?? null);
                yield "
                  ";
            }
            // line 207
            yield "</td>
                <td>";
            // line 208
            yield ($context["text_on"] ?? null);
            yield "</td>
                <td class=\"text-center\">";
            // line 209
            if ((($tmp = ($context["mbstring"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 210
                yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
            } else {
                // line 212
                yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
            }
            // line 213
            yield "</td>
              </tr>
              ";
        }
        // line 216
        yield "              <tr>
                <td>";
        // line 217
        yield ($context["text_dom"] ?? null);
        yield "</td>
                <td>";
        // line 218
        if ((($tmp = ($context["dom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 221
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 222
        yield "</td>
                <td>";
        // line 223
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 224
        if ((($tmp = ($context["dom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 227
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 228
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 231
        yield ($context["text_hash"] ?? null);
        yield "</td>
                <td>";
        // line 232
        if ((($tmp = ($context["hash"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 233
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 235
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 236
        yield "</td>
                <td>";
        // line 237
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 238
        if ((($tmp = ($context["hash"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 241
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 242
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 245
        yield ($context["text_xmlwriter"] ?? null);
        yield "</td>
                <td>";
        // line 246
        if ((($tmp = ($context["xmlwriter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 249
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 250
        yield "</td>
                <td>";
        // line 251
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 252
        if ((($tmp = ($context["xmlwriter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 255
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 256
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 259
        yield ($context["text_json"] ?? null);
        yield "</td>
                <td>";
        // line 260
        if ((($tmp = ($context["json"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "                  ";
            yield ($context["text_on"] ?? null);
            yield "
                  ";
        } else {
            // line 263
            yield "                  ";
            yield ($context["text_off"] ?? null);
            yield "
                  ";
        }
        // line 264
        yield "</td>
                <td>";
        // line 265
        yield ($context["text_on"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 266
        if ((($tmp = ($context["json"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 269
            yield "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 270
        yield "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 275
        yield ($context["text_install_file"] ?? null);
        yield "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 280
        yield ($context["text_file"] ?? null);
        yield "</b></td>
                <td><b>";
        // line 281
        yield ($context["text_status"] ?? null);
        yield "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 286
        yield ($context["catalog_config"] ?? null);
        yield "</td>
                <td>";
        // line 287
        if ((($tmp =  !($context["error_catalog_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 288
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 290
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_catalog_config"] ?? null);
            yield "</span>
                  ";
        }
        // line 291
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 294
        yield ($context["admin_config"] ?? null);
        yield "</td>
                <td>";
        // line 295
        if ((($tmp =  !($context["error_admin_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 298
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_admin_config"] ?? null);
            yield "</span>
                  ";
        }
        // line 299
        yield "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 304
        yield ($context["text_install_directory"] ?? null);
        yield "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td align=\"left\"><b>";
        // line 309
        yield ($context["text_directory"] ?? null);
        yield "</b></td>
                <td align=\"left\"><b>";
        // line 310
        yield ($context["text_status"] ?? null);
        yield "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 315
        yield ($context["image"] ?? null);
        yield "/</td>
                <td>";
        // line 316
        if ((($tmp =  !($context["error_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 319
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_image"] ?? null);
            yield "</span>
                  ";
        }
        // line 320
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 323
        yield ($context["image_cache"] ?? null);
        yield "/</td>
                <td>";
        // line 324
        if ((($tmp =  !($context["error_image_cache"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 325
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 327
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_image_cache"] ?? null);
            yield "</span>
                  ";
        }
        // line 328
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 331
        yield ($context["image_catalog"] ?? null);
        yield "/</td>
                <td>";
        // line 332
        if ((($tmp =  !($context["error_image_catalog"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 333
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 335
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_image_catalog"] ?? null);
            yield "</span>
                  ";
        }
        // line 336
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 339
        yield ($context["cache"] ?? null);
        yield "/</td>
                <td>";
        // line 340
        if ((($tmp =  !($context["error_cache"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 341
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 343
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_cache"] ?? null);
            yield "</span>
                  ";
        }
        // line 344
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 347
        yield ($context["logs"] ?? null);
        yield "/</td>
                <td>";
        // line 348
        if ((($tmp =  !($context["error_logs"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 351
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_logs"] ?? null);
            yield "</span>
                  ";
        }
        // line 352
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 355
        yield ($context["download"] ?? null);
        yield "/</td>
                <td>";
        // line 356
        if ((($tmp =  !($context["error_download"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 357
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 359
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_download"] ?? null);
            yield "</span>
                  ";
        }
        // line 360
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 363
        yield ($context["upload"] ?? null);
        yield "/</td>
                <td>";
        // line 364
        if ((($tmp =  !($context["error_upload"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 365
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 367
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_upload"] ?? null);
            yield "</span>
                  ";
        }
        // line 368
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 371
        yield ($context["modification"] ?? null);
        yield "/</td>
                <td>";
        // line 372
        if ((($tmp =  !($context["error_modification"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 373
            yield "                  <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 375
            yield "                  <span class=\"text-danger\">";
            yield ($context["error_modification"] ?? null);
            yield "</span>
                  ";
        }
        // line 376
        yield "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 382
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 384
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 389
        yield ($context["column_left"] ?? null);
        yield "</div>
  </div>
</div>
";
        // line 392
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
        return "install/step_2.twig";
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
        return array (  1070 => 392,  1064 => 389,  1056 => 384,  1049 => 382,  1041 => 376,  1035 => 375,  1029 => 373,  1027 => 372,  1023 => 371,  1018 => 368,  1012 => 367,  1006 => 365,  1004 => 364,  1000 => 363,  995 => 360,  989 => 359,  983 => 357,  981 => 356,  977 => 355,  972 => 352,  966 => 351,  960 => 349,  958 => 348,  954 => 347,  949 => 344,  943 => 343,  937 => 341,  935 => 340,  931 => 339,  926 => 336,  920 => 335,  914 => 333,  912 => 332,  908 => 331,  903 => 328,  897 => 327,  891 => 325,  889 => 324,  885 => 323,  880 => 320,  874 => 319,  868 => 317,  866 => 316,  862 => 315,  854 => 310,  850 => 309,  842 => 304,  835 => 299,  829 => 298,  823 => 296,  821 => 295,  817 => 294,  812 => 291,  806 => 290,  800 => 288,  798 => 287,  794 => 286,  786 => 281,  782 => 280,  774 => 275,  767 => 270,  763 => 269,  759 => 267,  757 => 266,  753 => 265,  750 => 264,  744 => 263,  738 => 261,  736 => 260,  732 => 259,  727 => 256,  723 => 255,  719 => 253,  717 => 252,  713 => 251,  710 => 250,  704 => 249,  698 => 247,  696 => 246,  692 => 245,  687 => 242,  683 => 241,  679 => 239,  677 => 238,  673 => 237,  670 => 236,  664 => 235,  658 => 233,  656 => 232,  652 => 231,  647 => 228,  643 => 227,  639 => 225,  637 => 224,  633 => 223,  630 => 222,  624 => 221,  618 => 219,  616 => 218,  612 => 217,  609 => 216,  604 => 213,  600 => 212,  596 => 210,  594 => 209,  590 => 208,  587 => 207,  581 => 206,  575 => 204,  573 => 203,  569 => 202,  566 => 201,  564 => 200,  560 => 198,  556 => 197,  552 => 195,  550 => 194,  546 => 193,  543 => 192,  537 => 191,  531 => 189,  529 => 188,  525 => 187,  520 => 184,  516 => 183,  512 => 181,  510 => 180,  506 => 179,  503 => 178,  497 => 177,  491 => 175,  489 => 174,  485 => 173,  480 => 170,  476 => 169,  472 => 167,  470 => 166,  466 => 165,  463 => 164,  457 => 163,  451 => 161,  449 => 160,  445 => 159,  440 => 156,  436 => 155,  432 => 153,  430 => 152,  426 => 151,  423 => 150,  417 => 149,  411 => 147,  409 => 146,  405 => 145,  400 => 142,  396 => 141,  392 => 139,  390 => 138,  386 => 137,  383 => 136,  377 => 135,  371 => 133,  369 => 132,  365 => 131,  360 => 128,  356 => 127,  352 => 125,  350 => 124,  346 => 123,  343 => 122,  337 => 121,  331 => 119,  329 => 118,  325 => 117,  317 => 112,  313 => 111,  309 => 110,  305 => 109,  297 => 104,  290 => 99,  286 => 98,  282 => 96,  280 => 95,  276 => 94,  273 => 93,  267 => 92,  261 => 90,  259 => 89,  255 => 88,  250 => 85,  246 => 84,  242 => 82,  240 => 81,  236 => 80,  233 => 79,  227 => 78,  221 => 76,  219 => 75,  215 => 74,  210 => 71,  206 => 70,  202 => 68,  200 => 67,  196 => 66,  193 => 65,  187 => 64,  181 => 62,  179 => 61,  175 => 60,  170 => 57,  166 => 56,  162 => 54,  160 => 53,  156 => 52,  153 => 51,  147 => 50,  141 => 48,  139 => 47,  135 => 46,  130 => 43,  126 => 42,  122 => 40,  120 => 39,  115 => 37,  111 => 36,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  83 => 23,  79 => 22,  75 => 20,  67 => 16,  65 => 15,  55 => 8,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step_2.twig", "");
    }
}
