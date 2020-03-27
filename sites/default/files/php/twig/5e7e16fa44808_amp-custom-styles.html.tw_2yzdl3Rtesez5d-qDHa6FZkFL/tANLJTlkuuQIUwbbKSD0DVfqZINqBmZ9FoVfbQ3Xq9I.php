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

/* themes/custom/custom_amp/templates/amp-css/amp-custom-styles.html.twig */
class __TwigTemplate_435bb0c1bad191cfb8b87fd16bdc9fc03c03036d297a61e90589bfa9e28b1129 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
        // line 1
        echo "body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: 'Comfortaa', Georgia, sans-serif;
}

/* ---------- Layout ----------- */

html {
  height: 100%;
}

body {
  min-height: 100%;
}

.amp-header__content,
.amp-main__content,
.amp-footer__content {
  margin: 0 auto;
  max-width: 620px;
}

.amp-main {
  min-height: 300px;
}

.amp-main__content {
  padding-top: 20px;
  padding-bottom: 40px;
}

/* ---------- Typography ----------- */

body {
  font-size: large;
  word-wrap: break-word;
}

p,
dt,
dd,
div.field--name-body,
div.field--name-field-description {
  line-height: 1.8;
}
dl {
  margin-bottom: 1em;
}
dd {
  margin-left: 2em;
  margin-bottom: 1em;
}

/* --- Links --- */

a,
a.link {
  text-decoration: none;
  border-bottom: 1px dotted;
}

a:hover,
a:active,
a:focus,
.link:hover,
.link:active,
.link:focus {
  text-decoration: none;
  border-bottom-style: solid;
}

h1 a,
h2 a {
  border-bottom: none;
}

a {
  color: #337ab7;
  text-decoration: none;
}
a:hover, a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline-offset: -2px;
}

blockquote {
  font-style: italic;
}

/* --- Headings --- */

h1,
h2,
h3,
h4,
h5,
h6,
.heading-a,
.heading-b,
.heading-c,
.heading-d,
.heading-e,
.heading-f {
  font-weight: inherit;
  margin: 1rem 0 0.5rem;
}

/* ---------- Utility classes ----------- */

.hidden {
  display: none;
}

.visually-hidden {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  overflow: hidden;
  height: 1px;
  width: 1px;
  word-wrap: normal;
}

.visually-hidden.focusable:active,
.visually-hidden.focusable:focus {
  position: static;
  clip: auto;
  overflow: visible;
  height: auto;
  width: auto;
}

.invisible {
  visibility: hidden;
}

.clearfix:after {
  content: \"\";
  display: table;
  clear: both;
}

/* ---------- Skip Link ----------- */

.amp-skip-link {
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  z-index: 50;
  background: #444;
  background: rgba(0, 0, 0, 0.6);
  font-size: 0.94em;
  line-height: 1.7em;
  padding: 1px 10px 2px;
  border-radius: 0 0 10px 10px;
  border-bottom-width: 0;
  outline: 0;
}

.amp-skip-link.visually-hidden.focusable:focus {
  position: absolute;
  color: #fff;
}

/* ---------- Header ----------- */

.amp-header__content {
  padding: 0.75rem .9375rem 0.75rem;
}

.amp-header a {
  border-bottom: none;
  color: #777;
}

.brand {
  margin: 0.375rem auto 0.375rem;
}

.site-branding__text {
  display: inline-block;
  vertical-align: top;
}

.site-branding__name {
  font-size: 3em;
  color: #686868;
  line-height: 1;
}

.site-branding__slogan {
  font-size: 1em;
  margin-top: 7px;
  word-spacing: 0.1em;
  font-style: italic;
}

.amp-header {
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top, #e7e7e7 0%, #f8f8f8 100%);
  background-image: linear-gradient(to bottom, #e7e7e7 0%, #f8f8f8 100%);
}

/* Footer */
.amp-footer {
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top, #e7e7e7 0%, #f8f8f8 100%);
  background-image: linear-gradient(to bottom, #e7e7e7 0%, #f8f8f8 100%);
}

/* Breadcrumb */

#block-custom-amp-breadcrumbs ol {
    background-color: #f5f5f5;
    border-radius: 4px;
    list-style: outside none none;
    margin-bottom: 20px;
    padding: 8px 15px;
}
#block-custom-amp-breadcrumbs ol > li {
    display: inline-block;
}
#block-custom-amp-breadcrumbs ol > li + li::before {
    color: #ccc;
    content: \"/ \";
    padding: 0 5px;
}
#block-custom-amp-breadcrumbs ol > .active {
    color: #777;
}

/* Book navigation */

@media all and (min-width: 680px) {

  .book-pager__item--previous {
    text-align: left;
    width: 45%;
  }

  .book-pager__item--center {
    text-align: center;
    width: 8%;
  }

  .book-pager__item--next {
    float: right;
    text-align: right;
    width: 45%;
  }

  .book-pager__item {
    display: inline-block;
    list-style-type: none;
    vertical-align: top;
  }
}
";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_amp/templates/amp-css/amp-custom-styles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_amp/templates/amp-css/amp-custom-styles.html.twig", "/app/web/themes/custom/custom_amp/templates/amp-css/amp-custom-styles.html.twig");
    }
}
