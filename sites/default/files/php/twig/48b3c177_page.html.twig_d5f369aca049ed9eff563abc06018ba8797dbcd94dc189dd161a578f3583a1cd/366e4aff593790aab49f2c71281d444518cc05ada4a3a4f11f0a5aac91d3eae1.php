<?php

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_5c9cbfdf75f286e98fd85c06ec4d8aa3802eafba1a36231838f87570c8d2c3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 54, "set" => 254);
        $filters = array("t" => 108);
        $functions = array("attach_library" => 100);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('t'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 51
        echo "<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 55
            echo "      <div id=\"logo\" class=\"site-branding col-sm-6\">
        ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 59
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\">
          <select id=\"mm0\" class=\"mnav\" onchange=\"location = this.value;\" style=\"display:none\">
            <option value=\"undefined\">Seleccione una Página</option>
            <option value=\"quienessomos\">Quienes Somos</option>
            <optgroup label=\"Terapias\">
              <option value=\"arteterapia\">Arteterapia</option>
              <option value=\"deportes\">Deportes</option>
              <option value=\"equinoterapia\">Equinoterapia</option>
              <option value=\"hortiterapia\">Hortiterapia</option>
              <option value=\"musicoterapia\">Musicoterapia</option>
              <option value=\"psicologia\">Psicologia</option>
              <option value=\"psicopedagogia\">Psicopedagogia</option>
              <option value=\"estimulaciontemprana\">Estimulación Temprana</option>
              <option value=\"hidroterapia\">Hidroterapia</option>
              <option value=\"paralelas\">Paralelas</option>
              <option value=\"terapiafisica\">Terapia Física</option>
              <option value=\"terapiaocupacional\">Terapia Ocupacional</option>
              <option value=\"terapiadelenguaje\">Terapia de Lenguaje</option>
              <option value=\"baile\">Bailoterapia</option>
              <option value=\"yogaterapia\">Yogaterapia</option>
            </optgroup>
            <option value=\"nuestropersonal\">Nuestro Personal</option>
            <option value=\"caballos\">Nuestros Caballos</option>
            <option value=\"contacto\">Contacto</option>
          </select>
        </div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 88
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array())) {
            // line 89
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
            echo "
            ";
        }
        // line 91
        echo "          </div>
        </nav>
        <a href=\"http://www.guayas.gob.ec/\" target=\"_blank\">
          <img src=\"/images/Guayas-logo.png\"/>
        </a>
      </div>
    </div>
  </header>
  ";
        // line 99
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 100
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo "
  ";
            // line 101
            if ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null)) {
                // line 102
                echo "  <div id=\"slidebox\" class=\"flexslider\">
    <ul class=\"slides\">
      <li>
        <img src=\"/images/equinoterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Equinoterapia</h2>
          <a class=\"frmore\" href=\"/equinoterapia\" target=\"_blank\">";
                // line 108
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/terapiadelenguaje.png\"/>
        <div class=\"flex-caption\">
          <h2>Terapia de Lenguaje</h2>
          <a class=\"frmore\" href=\"/terapiadelenguaje\" target=\"_blank\">";
                // line 115
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/hidroterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Hidroterapia</h2>
          <a class=\"frmore\" href=\"/hidroterapia\" target=\"_blank\">";
                // line 122
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/musicoterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Musicoterapia</h2>
          <a class=\"frmore\" href=\"/musicoterapia\" target=\"_blank\">";
                // line 129
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/estimulaciontemprana.png\"/>
        <div class=\"flex-caption\">
          <h2>Estimulación Temprana</h2>
          <a class=\"frmore\" href=\"/estimulaciontemprana\" target=\"_blank\">";
                // line 136
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/psicopedagogia.png\"/>
        <div class=\"flex-caption\">
          <h2>Psicopedagogia</h2>
          <a class=\"frmore\" href=\"/psicopedagogia\" target=\"_blank\">";
                // line 143
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/deportes.png\"/>
        <div class=\"flex-caption\">
          <h2>Deportes</h2>
          <a class=\"frmore\" href=\"/deportes\" target=\"_blank\">";
                // line 150
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/hortiterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Hortiterapia</h2>
          <a class=\"frmore\" href=\"/hortiterapia\" target=\"_blank\">";
                // line 157
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/paralelas.png\"/>
        <div class=\"flex-caption\">
          <h2>Paralelas</h2>
          <a class=\"frmore\" href=\"/paralelas\" target=\"_blank\">";
                // line 164
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/ocupacional.png\"/>
        <div class=\"flex-caption\">
          <h2>Terapia Ocupacional</h2>
          <a class=\"frmore\" href=\"/terapiaocupacional\" target=\"_blank\">";
                // line 171
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/arteterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Arteterapia</h2>
          <a class=\"frmore\" href=\"/arteterapia\" target=\"_blank\">";
                // line 178
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/psicologia.png\"/>
        <div class=\"flex-caption\">
          <h2>Psicología</h2>
          <a class=\"frmore\" href=\"/psicologia\" target=\"_blank\">";
                // line 185
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/terapiafisica.png\"/>
        <div class=\"flex-caption\">
          <h2>Terapia Física</h2>
          <a class=\"frmore\" href=\"/terapiafisica\" target=\"_blank\">";
                // line 192
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/bailoterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Bailoterapia</h2>
          <a class=\"frmore\" href=\"/baile\" target=\"_blank\">";
                // line 199
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
      <li>
        <img src=\"/images/yogaterapia.png\"/>
        <div class=\"flex-caption\">
          <h2>Yogaterapia</h2>
          <a class=\"frmore\" href=\"/yoga\" target=\"_blank\">";
                // line 206
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Leer más")));
                echo "</a>
        </div>
      </li>
    </ul><!-- /slides -->
  </div>
  ";
            }
            // line 212
            echo "  ";
        }
        // line 213
        echo "
  ";
        // line 214
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()))) {
            // line 215
            echo "  <div id=\"preface-area\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 218
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 219
                echo "        <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
          ";
                // line 220
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 223
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) {
                // line 224
                echo "        <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
          ";
                // line 225
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 228
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) {
                // line 229
                echo "        <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
          ";
                // line 230
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 233
            echo "      </div>
    </div>
  </div>
  ";
        }
        // line 237
        echo "
  ";
        // line 238
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 239
            echo "  <div id=\"highlighted-block\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          ";
            // line 243
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 249
        echo "
  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 253
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 254
            echo "        ";
            $context["primary_col"] = 8;
            // line 255
            echo "        ";
        } else {
            // line 256
            echo "        ";
            $context["primary_col"] = 12;
            // line 257
            echo "        ";
        }
        // line 258
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("content-area col-sm-" . (isset($context["primary_col"]) ? $context["primary_col"] : null)), "html", null, true));
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 260
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 261
            echo "            <div id=\"slogan\">Somos la puerta solidaria hacia la inclusión y la rehabilitación de las personas con necesidades especiales.</div><br/>
            <div id=\"youtube\">
              <iframe width=\"780\" height=\"439\" src=\"https://www.youtube-nocookie.com/embed/G3NrDi-MTCg?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
            </div>
            ";
        }
        // line 266
        echo "            ";
        if ((isset($context["show_breadcrumbs"]) ? $context["show_breadcrumbs"] : null)) {
            // line 267
            echo "            ";
            if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
                // line 268
                echo "            <div id=\"breadcrumbs\">
              ";
                // line 269
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 272
            echo "            ";
        }
        // line 273
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "
            ";
        // line 274
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 275
            echo "            <div id=\"content_top\">
              ";
            // line 276
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 279
        echo "            <div id=\"content-wrap\">
              ";
        // line 280
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
              ";
        // line 281
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
          </section>
        </div>
        ";
        // line 285
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 286
            echo "        <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
          <div id=\"media\">
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/CentroIntegralDeEquinoterapia\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/CentroIntegralDeEquinoterapia\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/CentroIntegralDeEquinoterapia\">Centro Integral de Equinoterapia</a></blockquote></div>
            <div style=\"height: 10px\"></div>
            <a href=\"https://twitter.com/cequinoterapia\" target=\"_blank\" class=\"twitter-follow-button\" data-size=\"large\" data-lang=\"es\" data-show-count=\"false\">Follow @cequinoterapia</a><script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
            <style>.ig-b- { display: inline-block; position: relative; bottom: 2px; left: 4px; }
            .ig-b- img { visibility: hidden; }
            .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
            .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
              .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
              <a href=\"https://www.instagram.com/ciequinoterapia/?ref=badge\" target=\"_blank\" class=\"ig-b- ig-b-v-24\"><img src=\"//badges.instagram.com/static/images/ig-badge-view-24.png\" alt=\"Instagram\" /></a>
            </div>
            ";
            // line 299
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
          ";
        }
        // line 302
        echo "        </div>
      </div>
    </div>

    ";
        // line 306
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 307
            echo "    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 311
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
    ";
        }
        // line 317
        echo "
    ";
        // line 318
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 319
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 322
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 323
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
            ";
                // line 324
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 327
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 328
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
            ";
                // line 329
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 332
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 333
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
            ";
                // line 334
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 337
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 338
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
            ";
                // line 339
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 342
            echo "        </div>
      </div>
    </div>
    ";
        }
        // line 346
        echo "    <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"fcred col-sm-12\">
            ";
        // line 350
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copyright")));
        echo " &copy; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["this_year"]) ? $context["this_year"] : null), "html", null, true));
        echo ", <a id=\"copyright\" href=\"http://www.guayas.gob.ec\" target=\"_blank\">Gobierno Provincial del Guayas</a>. <span>Ubicación:</span> Km 10 1/2 via Samborondón junto al Hipódromo Miguel Salen. <span>Teléfonos:</span> 2145900 - 2145902
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 350,  554 => 346,  548 => 342,  542 => 339,  537 => 338,  534 => 337,  528 => 334,  523 => 333,  520 => 332,  514 => 329,  509 => 328,  506 => 327,  500 => 324,  495 => 323,  493 => 322,  488 => 319,  486 => 318,  483 => 317,  474 => 311,  468 => 307,  466 => 306,  460 => 302,  454 => 299,  439 => 286,  437 => 285,  430 => 281,  426 => 280,  423 => 279,  417 => 276,  414 => 275,  412 => 274,  407 => 273,  404 => 272,  398 => 269,  395 => 268,  392 => 267,  389 => 266,  382 => 261,  380 => 260,  374 => 258,  371 => 257,  368 => 256,  365 => 255,  362 => 254,  360 => 253,  354 => 249,  345 => 243,  339 => 239,  337 => 238,  334 => 237,  328 => 233,  322 => 230,  317 => 229,  314 => 228,  308 => 225,  303 => 224,  300 => 223,  294 => 220,  289 => 219,  287 => 218,  282 => 215,  280 => 214,  277 => 213,  274 => 212,  265 => 206,  255 => 199,  245 => 192,  235 => 185,  225 => 178,  215 => 171,  205 => 164,  195 => 157,  185 => 150,  175 => 143,  165 => 136,  155 => 129,  145 => 122,  135 => 115,  125 => 108,  117 => 102,  115 => 101,  110 => 100,  108 => 99,  98 => 91,  92 => 89,  90 => 88,  59 => 59,  53 => 56,  50 => 55,  48 => 54,  43 => 51,);
    }
}
/* {#*/
/* /***/
/* * @file*/
/* * Bartik's theme implementation to display a single page.*/
/* **/
/* * The doctype, html, head and body tags are not in this template. Instead they*/
/* * can be found in the html.html.twig template normally located in the*/
/* * core/modules/system directory.*/
/* **/
/* * Available variables:*/
/* **/
/* * General utility variables:*/
/* * - base_path: The base URL path of the Drupal installation. Will usually be*/
/* *   "/" unless you have installed Drupal in a sub-directory.*/
/* * - is_front: A flag indicating if the current page is the front page.*/
/* * - logged_in: A flag indicating if the user is registered and signed in.*/
/* * - is_admin: A flag indicating if the user has permission to access*/
/* *   administration pages.*/
/* **/
/* * Site identity:*/
/* * - front_page: The URL of the front page. Use this instead of base_path when*/
/* *   linking to the front page. This includes the language domain or prefix.*/
/* **/
/* * Page content (in order of occurrence in the default page.html.twig):*/
/* * - node: Fully loaded node, if there is an automatically-loaded node*/
/* *   associated with the page and the node ID is the second argument in the*/
/* *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/* *   comment/reply/12345).*/
/* **/
/* * Regions:*/
/* * - page.header: Items for the Header region.*/
/* * - page.main_navigation: Items for the Main Navigation region.*/
/* * - page.preface_first: Items for the Preface First region.*/
/* * - page.preface_second: Items for the Preface Second region.*/
/* * - page.preface_third: Items for the Preface Third region.*/
/* * - page.highlighted: Items for the Highlighted region.*/
/* * - sidebar_first: Items for the First Sidebar region.*/
/* * - content_top: Items for the Content Top region.*/
/* * - help: Items for the Help region.*/
/* * - content: Items for the Content region.*/
/* * - footer: Items for the Footer region.*/
/* * - footer_first: Items for the First Bottom region.*/
/* * - footer_second: Items for the Second Bottom region.*/
/* * - footer_third: Items for the Third Bottom region.*/
/* * - footer_fourth: Items for the Fourth Bottom region.*/
/* **/
/* * @see template_preprocess_page()*/
/* * @see html.html.twig*/
/* *//* */
/* #}*/
/* <div id="page">*/
/*   <header id="masthead" class="site-header container" role="banner">*/
/*     <div class="row">*/
/*       {% if page.header %}*/
/*       <div id="logo" class="site-branding col-sm-6">*/
/*         {{ page.header }}*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-6 mainmenu">*/
/*         <div class="mobilenavi">*/
/*           <select id="mm0" class="mnav" onchange="location = this.value;" style="display:none">*/
/*             <option value="undefined">Seleccione una Página</option>*/
/*             <option value="quienessomos">Quienes Somos</option>*/
/*             <optgroup label="Terapias">*/
/*               <option value="arteterapia">Arteterapia</option>*/
/*               <option value="deportes">Deportes</option>*/
/*               <option value="equinoterapia">Equinoterapia</option>*/
/*               <option value="hortiterapia">Hortiterapia</option>*/
/*               <option value="musicoterapia">Musicoterapia</option>*/
/*               <option value="psicologia">Psicologia</option>*/
/*               <option value="psicopedagogia">Psicopedagogia</option>*/
/*               <option value="estimulaciontemprana">Estimulación Temprana</option>*/
/*               <option value="hidroterapia">Hidroterapia</option>*/
/*               <option value="paralelas">Paralelas</option>*/
/*               <option value="terapiafisica">Terapia Física</option>*/
/*               <option value="terapiaocupacional">Terapia Ocupacional</option>*/
/*               <option value="terapiadelenguaje">Terapia de Lenguaje</option>*/
/*               <option value="baile">Bailoterapia</option>*/
/*               <option value="yogaterapia">Yogaterapia</option>*/
/*             </optgroup>*/
/*             <option value="nuestropersonal">Nuestro Personal</option>*/
/*             <option value="caballos">Nuestros Caballos</option>*/
/*             <option value="contacto">Contacto</option>*/
/*           </select>*/
/*         </div>*/
/*         <nav id="navigation" role="navigation">*/
/*           <div id="main-menu">*/
/*             {% if page.main_navigation %}*/
/*             {{ page.main_navigation }}*/
/*             {% endif %}*/
/*           </div>*/
/*         </nav>*/
/*         <a href="http://www.guayas.gob.ec/" target="_blank">*/
/*           <img src="/images/Guayas-logo.png"/>*/
/*         </a>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if is_front %}*/
/*   {{ attach_library('nexus/slider-js') }}*/
/*   {% if slideshow_display %}*/
/*   <div id="slidebox" class="flexslider">*/
/*     <ul class="slides">*/
/*       <li>*/
/*         <img src="/images/equinoterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Equinoterapia</h2>*/
/*           <a class="frmore" href="/equinoterapia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/terapiadelenguaje.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Terapia de Lenguaje</h2>*/
/*           <a class="frmore" href="/terapiadelenguaje" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/hidroterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Hidroterapia</h2>*/
/*           <a class="frmore" href="/hidroterapia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/musicoterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Musicoterapia</h2>*/
/*           <a class="frmore" href="/musicoterapia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/estimulaciontemprana.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Estimulación Temprana</h2>*/
/*           <a class="frmore" href="/estimulaciontemprana" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/psicopedagogia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Psicopedagogia</h2>*/
/*           <a class="frmore" href="/psicopedagogia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/deportes.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Deportes</h2>*/
/*           <a class="frmore" href="/deportes" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/hortiterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Hortiterapia</h2>*/
/*           <a class="frmore" href="/hortiterapia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/paralelas.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Paralelas</h2>*/
/*           <a class="frmore" href="/paralelas" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/ocupacional.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Terapia Ocupacional</h2>*/
/*           <a class="frmore" href="/terapiaocupacional" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/arteterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Arteterapia</h2>*/
/*           <a class="frmore" href="/arteterapia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/psicologia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Psicología</h2>*/
/*           <a class="frmore" href="/psicologia" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/terapiafisica.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Terapia Física</h2>*/
/*           <a class="frmore" href="/terapiafisica" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/bailoterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Bailoterapia</h2>*/
/*           <a class="frmore" href="/baile" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <img src="/images/yogaterapia.png"/>*/
/*         <div class="flex-caption">*/
/*           <h2>Yogaterapia</h2>*/
/*           <a class="frmore" href="/yoga" target="_blank">{{ 'Leer más'|t }}</a>*/
/*         </div>*/
/*       </li>*/
/*     </ul><!-- /slides -->*/
/*   </div>*/
/*   {% endif %}*/
/*   {% endif %}*/
/* */
/*   {% if page.preface_first or page.preface_second or page.preface_third %}*/
/*   <div id="preface-area">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if page.preface_first %}*/
/*         <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*           {{ page.preface_first }}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if page.preface_second %}*/
/*         <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*           {{ page.preface_second }}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if page.preface_third %}*/
/*         <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*           {{ page.preface_third }}*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% if page.highlighted %}*/
/*   <div id="highlighted-block">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-12">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   <div id="main-content">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if page.sidebar_first %}*/
/*         {% set primary_col = 8 %}*/
/*         {% else %}*/
/*         {% set primary_col = 12 %}*/
/*         {% endif %}*/
/*         <div id="primary" class="{{ 'content-area col-sm-' ~ primary_col }}">*/
/*           <section id="content" role="main" class="clearfix">*/
/*             {% if is_front %}*/
/*             <div id="slogan">Somos la puerta solidaria hacia la inclusión y la rehabilitación de las personas con necesidades especiales.</div><br/>*/
/*             <div id="youtube">*/
/*               <iframe width="780" height="439" src="https://www.youtube-nocookie.com/embed/G3NrDi-MTCg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if show_breadcrumbs %}*/
/*             {% if breadcrumb %}*/
/*             <div id="breadcrumbs">*/
/*               {{ breadcrumb }}*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endif %}*/
/*             {{ messages }}*/
/*             {% if page.content_top %}*/
/*             <div id="content_top">*/
/*               {{ page.content_top }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div id="content-wrap">*/
/*               {{ page.help }}*/
/*               {{ page.content }}*/
/*             </div>*/
/*           </section>*/
/*         </div>*/
/*         {% if page.sidebar_first %}*/
/*         <aside id="sidebar" class="col-sm-4" role="complementary">*/
/*           <div id="media">*/
/*             <div class="fb-page" data-href="https://www.facebook.com/CentroIntegralDeEquinoterapia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CentroIntegralDeEquinoterapia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CentroIntegralDeEquinoterapia">Centro Integral de Equinoterapia</a></blockquote></div>*/
/*             <div style="height: 10px"></div>*/
/*             <a href="https://twitter.com/cequinoterapia" target="_blank" class="twitter-follow-button" data-size="large" data-lang="es" data-show-count="false">Follow @cequinoterapia</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>*/
/*             <style>.ig-b- { display: inline-block; position: relative; bottom: 2px; left: 4px; }*/
/*             .ig-b- img { visibility: hidden; }*/
/*             .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }*/
/*             .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }*/
/*             @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {*/
/*               .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>*/
/*               <a href="https://www.instagram.com/ciequinoterapia/?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>*/
/*             </div>*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if page.footer %}*/
/*     <div id="footer-block">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-sm-12">*/
/*             {{ page.footer }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*     <div id="bottom">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           {% if page.footer_first %}*/
/*           <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*             {{ page.footer_first }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if page.footer_second %}*/
/*           <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*             {{ page.footer_second }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if page.footer_third %}*/
/*           <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*             {{ page.footer_third }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if page.footer_fourth %}*/
/*           <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*             {{ page.footer_fourth }}*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <footer id="colophon" class="site-footer" role="contentinfo">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="fcred col-sm-12">*/
/*             {{ "Copyright"|t }} &copy; {{ this_year }}, <a id="copyright" href="http://www.guayas.gob.ec" target="_blank">Gobierno Provincial del Guayas</a>. <span>Ubicación:</span> Km 10 1/2 via Samborondón junto al Hipódromo Miguel Salen. <span>Teléfonos:</span> 2145900 - 2145902*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
