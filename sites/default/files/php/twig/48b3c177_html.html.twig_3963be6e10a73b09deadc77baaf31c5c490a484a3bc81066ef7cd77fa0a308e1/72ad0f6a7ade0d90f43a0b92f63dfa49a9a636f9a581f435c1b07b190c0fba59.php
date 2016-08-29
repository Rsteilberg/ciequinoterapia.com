<?php

/* themes/nexus/templates/html.html.twig */
class __TwigTemplate_ecfe57e569ba0f933355be33e11a616662bab5af146406bc56a20f6ce2cbb2aa extends Twig_Template
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
        $tags = array();
        $filters = array("raw" => 32);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
                array()
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

        // line 28
        echo "
<!DOCTYPE html>
<html";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
<head>
  <head-placeholder token=\"";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>Centro Integral de Equinoterapia</title>
    <css-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
      <js-placeholder token=\"";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
      </head>
      <body";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
      ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
      ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
      ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
      <js-bottom-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/es_CO/sdk.js#xfbml=1&version=v2.7\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
      </body>
      </html>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  61 => 35,  57 => 34,  52 => 32,  47 => 30,  43 => 28,);
    }
}
/* {#*/
/* /***/
/* * @file*/
/* * Default theme implementation for the basic structure of a single Drupal page.*/
/* **/
/* * Variables:*/
/* * - logged_in: A flag indicating if user is logged in.*/
/* * - root_path: The root path of the current page (e.g., node, admin, user).*/
/* * - node_type: The content type for the current node, if the page is a node.*/
/* * - head_title: List of text elements that make up the head_title variable.*/
/* *   May contain or more of the following:*/
/* *   - title: The title of the page.*/
/* *   - name: The name of the site.*/
/* *   - slogan: The slogan of the site.*/
/* * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/* * - page: The rendered page markup.*/
/* * - page_bottom: Closing rendered markup. This variable should be printed after*/
/* *   'page'.*/
/* * - db_offline: A flag indicating if the database is offline.*/
/* * - placeholder_token: The token for generating head, css, js and js-bottom*/
/* *   placeholders.*/
/* **/
/* * @see template_preprocess_html()*/
/* **/
/* * @ingroup themeable*/
/* *//* */
/* #}*/
/* */
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/* <head>*/
/*   <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>Centro Integral de Equinoterapia</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*       <js-placeholder token="{{ placeholder_token|raw }}">*/
/*       </head>*/
/*       <body{{ attributes }}>*/
/*       {{ page_top }}*/
/*       {{ page }}*/
/*       {{ page_bottom }}*/
/*       <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*         <div id="fb-root"></div>*/
/*         <script>(function(d, s, id) {*/
/*           var js, fjs = d.getElementsByTagName(s)[0];*/
/*           if (d.getElementById(id)) return;*/
/*           js = d.createElement(s); js.id = id;*/
/*           js.src = "//connect.facebook.net/es_CO/sdk.js#xfbml=1&version=v2.7";*/
/*           fjs.parentNode.insertBefore(js, fjs);*/
/*         }(document, 'script', 'facebook-jssdk'));</script>*/
/*       </body>*/
/*       </html>*/
/* */
