<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/kira_sass/templates/node.html.twig */
class __TwigTemplate_16ba9f43fdb44e1b52f6cc20bc5f42343c366f69247b88a4488c4d8a6a484534 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'submitted' => [$this, 'block_submitted'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : ("")), 6 => "clearfix"];
        // line 75
        echo "
<article";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
  <header>
    ";
        // line 78
        $this->displayBlock('title', $context, $blocks);
        // line 91
        echo "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 92
            echo "      <div class=\"node__meta\">
        ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 93, $this->source), "html", null, true);
            echo "
        ";
            // line 94
            $this->displayBlock('submitted', $context, $blocks);
            // line 99
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 99, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 102
        echo "  </header>
  ";
        // line 103
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "  
</article>


";
    }

    // line 78
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 79, $this->source), "html", null, true);
        echo "
      ";
        // line 80
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 81
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 82, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            echo "</a>
        </h2>
\t  ";
        } elseif ((        // line 84
($context["label"] ?? null) && ($context["page"] ?? null))) {
            // line 85
            echo "\t    <h1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo ">
          ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
            echo "
        </h1>\t
      ";
        }
        // line 89
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 89, $this->source), "html", null, true);
        echo "
\t";
    }

    // line 94
    public function block_submitted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "          <em";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 95, $this->source), "html", null, true);
        echo ">
            ";
        // line 96
        echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        // line 97
        echo "          </em>
        ";
    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
        echo ">
      ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 105, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/kira_sass/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 105,  159 => 104,  155 => 103,  150 => 97,  148 => 96,  143 => 95,  139 => 94,  132 => 89,  126 => 86,  121 => 85,  119 => 84,  112 => 82,  107 => 81,  105 => 80,  100 => 79,  96 => 78,  88 => 108,  86 => 103,  83 => 102,  76 => 99,  74 => 94,  70 => 93,  67 => 92,  64 => 91,  62 => 78,  57 => 76,  54 => 75,  52 => 71,  51 => 70,  50 => 69,  49 => 68,  48 => 67,  47 => 65,  42 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/kira_sass/templates/node.html.twig", "C:\\MAMP\\htdocs\\web\\themes\\custom\\kira_sass\\templates\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "block" => 78, "if" => 91, "trans" => 96);
        static $filters = array("escape" => 62, "clean_class" => 67);
        static $functions = array("attach_library" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['escape', 'clean_class'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
