<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* segments/static.html */
class __TwigTemplate_0caa1806b4e6bad50c4bb59fbbdec799771fc97376dbc0dd12d0fe0df7e756ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'translations' => [$this, 'block_translations'],
            'after_translations' => [$this, 'block_after_translations'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "segments/static.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div id=\"static_segments_container\"></div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 7
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ";
    var mailpoet_beacon_articles = [
      '5a574bd92c7d3a194368233e', // https://kb.mailpoet.com/article/237-guide-to-subscriber-segmentation
      '59a89621042863033a1c82e6' // https://kb.mailpoet.com/article/205-roles-and-permissions
    ];
  </script>
";
    }

    // line 15
    public function block_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        $this->loadTemplate("segments/translations.html", "segments/static.html", 16)->display($context);
    }

    // line 19
    public function block_after_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  ";
        echo do_action("mailpoet_segments_translations_after");
        echo "
";
    }

    public function getTemplateName()
    {
        return "segments/static.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 19,  72 => 16,  68 => 15,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "segments/static.html", "/home/circleci/mailpoet/mailpoet/views/segments/static.html");
    }
}
