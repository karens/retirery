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

/* themes/custom/custom_amp/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_e7d86ff759640644d2eb906b46f41c5a467be818ed01f88ee4373b09b31ccb2c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "if" => 20];
        $filters = ["t" => 21, "escape" => 22];
        $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding", 1 => "clearfix"], "method");
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/custom_amp/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "  ";
        if (((($context["site_logo"] ?? null) && ($context["site_logo_height"] ?? null)) && ($context["site_logo_width"] ?? null))) {
            // line 21
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
      <amp-img src=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"
               height=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo_height"] ?? null)), "html", null, true);
            echo "\" width=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo_width"] ?? null)), "html", null, true);
            echo "\"
               layout=\"responsive\"
      />
    </a>
  ";
        }
        // line 28
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 29
            echo "    <div class=\"site-branding__text\">
      ";
            // line 30
            if (($context["site_name"] ?? null)) {
                // line 31
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 35
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 36
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
      ";
            }
            // line 38
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_amp/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  120 => 36,  117 => 35,  107 => 32,  104 => 31,  102 => 30,  99 => 29,  96 => 28,  86 => 23,  80 => 22,  73 => 21,  70 => 20,  67 => 19,  62 => 1,  60 => 18,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_amp/templates/block/block--system-branding-block.html.twig", "/app/web/themes/custom/custom_amp/templates/block/block--system-branding-block.html.twig");
    }
}
