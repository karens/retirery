<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/custom_amp/templates/layout/html.html.twig */
class __TwigTemplate_1bca7cf650cc3624e6e9eab2f12e64df5638e341cd0d3f8530e287dbfe3b3130 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 32, "include" => 32, "if" => 42];
        $filters = ["escape" => 28, "without" => 28, "raw" => 30, "safe_join" => 31];
        $functions = ["active_theme_path" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'include', 'if'],
                ['escape', 'without', 'raw', 'safe_join'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        echo "<!doctype html>
<html amp";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "xmlns:article", "xmlns:book", "xmlns:product", "xmlns:profile", "xmlns:video"), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <style amp-boilerplate>";
        // line 32
        ob_start(function () { return ''; });
        $this->loadTemplate("@amptheme/amp-css/amp-boilerplate-styles-min.html.twig", "themes/custom/custom_amp/templates/layout/html.html.twig", 32)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</style><noscript><style amp-boilerplate>";
        ob_start(function () { return ''; });
        $this->loadTemplate("@amptheme/amp-css/amp-boilerplate-styles-noscript-min.html.twig", "themes/custom/custom_amp/templates/layout/html.html.twig", 32)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</style></noscript>
    <style amp-custom>
      ";
        // line 34
        $this->loadTemplate(($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/templates/amp-css/amp-custom-styles.html.twig"), "themes/custom/custom_amp/templates/layout/html.html.twig", 34)->display($context);
        // line 35
        echo "    </style>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    ";
        // line 38
        echo "    <js-placeholder token=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <script async src=\"https://cdn.ampproject.org/v0.js\"></script>
  </head>
  <body";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 42
        if (($context["amp_skip_link"] ?? null)) {
            // line 43
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["amp_skip_link"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 45
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_amp/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  112 => 46,  107 => 45,  101 => 43,  99 => 42,  95 => 41,  88 => 38,  84 => 35,  82 => 34,  71 => 32,  67 => 31,  63 => 30,  58 => 28,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_amp/templates/layout/html.html.twig", "/app/web/themes/custom/custom_amp/templates/layout/html.html.twig");
    }
}
