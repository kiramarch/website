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

/* field.html.twig */
class __TwigTemplate_4af024cf7f06df97783056883116ebe3d2311cb47d520095acd794fe9f161704 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'label' => [$this, 'block_label'],
            'content' => [$this, 'block_content'],
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 28
($context["field_name"] ?? null), 28, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 29
($context["field_type"] ?? null), 29, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 30
($context["label_display"] ?? null), 30, $this->source))];
        // line 34
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 36
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
    ";
        // line 42
        $this->displayBlock('label', $context, $blocks);
        // line 47
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "  </div>
";
    }

    // line 42
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "      ";
        if ((($context["label"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 44
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 46
        echo "    ";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "      ";
        if (($context["multiple"] ?? null)) {
            // line 49
            echo "        <div class=\"field__items\">
          ";
            // line 50
            $this->displayBlock('items', $context, $blocks);
            // line 55
            echo "        </div>
      ";
        } else {
            // line 57
            echo "        ";
            $this->displayBlock("items", $context, $blocks);
            echo "
      ";
        }
        // line 59
        echo "    ";
    }

    // line 50
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [0 => "field__item"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          ";
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  130 => 52,  125 => 51,  121 => 50,  117 => 59,  111 => 57,  107 => 55,  105 => 50,  102 => 49,  99 => 48,  95 => 47,  91 => 46,  83 => 44,  80 => 43,  76 => 42,  71 => 60,  68 => 47,  66 => 42,  61 => 41,  54 => 40,  51 => 39,  49 => 36,  48 => 34,  46 => 30,  45 => 29,  44 => 28,  43 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "field.html.twig", "themes/custom/kira_sass/templates/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "block" => 40, "if" => 43, "for" => 51);
        static $filters = array("clean_class" => 28, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape'],
                []
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
