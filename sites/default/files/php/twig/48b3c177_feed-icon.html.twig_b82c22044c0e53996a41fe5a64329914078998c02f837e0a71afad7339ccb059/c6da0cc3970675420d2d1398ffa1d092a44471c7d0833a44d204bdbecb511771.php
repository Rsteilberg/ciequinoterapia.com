<?php

/* core/themes/stable/templates/misc/feed-icon.html.twig */
class __TwigTemplate_5e2ea7ab6e734beb8a7d0da35de041784ef5f2fa4a0080917764d4758a38e777 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/misc/feed-icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
/* {#*/
/* /***/
/* * @file*/
/* * Theme override for a feed icon.*/
/* **/
/* * Available variables:*/
/* * - url: An internal system path or a fully qualified external URL of the feed.*/
/* * - attributes: Remaining HTML attributes for the feed link.*/
/* *   - title: A descriptive title of the feed link.*/
/* *   - class: HTML classes to be applied to the feed link.*/
/* *//* */
/* */
/* /**<a href="{{ url }}"{{ attributes.addClass('feed-icon') }}>*/
/* *  {{ 'Subscribe to @title'|t({'@title': title}) }}*/
/* *</a>*/
/* *//* */
/* #}*/
/* */
