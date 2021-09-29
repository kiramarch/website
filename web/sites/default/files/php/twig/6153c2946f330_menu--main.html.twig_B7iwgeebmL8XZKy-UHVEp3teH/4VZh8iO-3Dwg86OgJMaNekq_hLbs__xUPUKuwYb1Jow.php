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

/* themes/custom/kira_sass/templates/header-footer/menu--main.html.twig */
class __TwigTemplate_889695007d9ec7a53b7684bac43404f5b4e371d12e167fa758e3f20c46746f6c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

<div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">

";
        // line 27
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 28
        echo "
";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 33, $context, $this->getSourceContext()));
        echo "

";
        // line 82
        echo "
</div>";
    }

    // line 35
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 36
            echo "  ";
            $macros["menus"] = $this;
            // line 37
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 38
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 39
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "nav navbar-nav ml-auto"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 41
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 43
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 44
                    echo "      ";
                    // line 45
                    $context["classes"] = [0 => ((                    // line 46
($context["menu_level"] ?? null)) ? ("dropdown-item") : ("nav-item")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "is_expanded", [], "any", false, false, true, 47)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["item"], "is_collapsed", [], "any", false, false, true, 48)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("active") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "below", [], "any", false, false, true, 50)) ? ("dropdown") : ("")), 5 => "align-self-end"];
                    // line 54
                    echo "
\t  <li";
                    // line 55
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 57
                    $context["link_classes"] = [0 => (( !                    // line 58
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 59
$context["item"], "in_active_trail", [], "any", false, false, true, 59)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 60
$context["item"], "url", [], "any", false, false, true, 60), "getOption", [0 => "attributes"], "method", false, false, true, 60), "class", [], "any", false, false, true, 60)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), "getOption", [0 => "attributes"], "method", false, false, true, 60), "class", [], "any", false, false, true, 60), 60, $this->source), " ")) : ("")), 3 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 61
$context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61), 61, $this->source)))];
                    // line 64
                    echo "\t\t
\t\t";
                    // line 65
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 66
                        echo "          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 400 400\" width=\"80px\">
            <path class=\"nav-rt\" id=\"";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "-rt\" d=\"M40.7,236.6c1.4-3.4,2.8-6.7,4.2-10c1.4-0.6,1.5-1.9,2-3c7.5-15.7,16.1-30.9,25.5-45.4 c22.8-35,50.6-65.2,85.4-88.6c37.4-25.1,78.9-39.4,123.1-46.2c2.4-0.4,5-0.2,7.2-1.5c0.5,0.2,1,0.4,1.5,0.6c1.7,2.5,3.4,5,5.1,7.5 c35,48.6,57,102.2,59.7,162.8c2.2,48.7-7.7,95.4-24.3,141c-0.9,2.3-2.1,3.5-4.6,3.9c-6.5,1-12.9,1.9-19.4,2.2 c-36.2,1.8-71.2-5.3-105.3-16.6c-27.4-9.1-53.8-20.6-78.8-35.4C90.5,289,61.8,267.2,40.7,236.6z\"/></svg>
\t    ";
                    }
                    // line 69
                    echo "        
\t\t";
                    // line 70
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 70)) {
                        // line 71
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 71), 71, $this->source), ["class" => ($context["link_classes"] ?? null), "data-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true);
                        echo "
          ";
                        // line 72
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 72, $context, $this->getSourceContext()));
                        echo "
        ";
                    } else {
                        // line 74
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
        ";
                    }
                    // line 76
                    echo "      </li>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/kira_sass/templates/header-footer/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 79,  157 => 76,  151 => 74,  146 => 72,  141 => 71,  139 => 70,  136 => 69,  131 => 67,  128 => 66,  126 => 65,  123 => 64,  121 => 61,  120 => 60,  119 => 59,  118 => 58,  117 => 57,  113 => 55,  110 => 54,  108 => 50,  107 => 49,  106 => 48,  105 => 47,  104 => 46,  103 => 45,  101 => 44,  96 => 43,  92 => 41,  86 => 39,  83 => 38,  80 => 37,  77 => 36,  62 => 35,  57 => 82,  52 => 33,  49 => 28,  47 => 27,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/kira_sass/templates/header-footer/menu--main.html.twig", "C:\\MAMP\\htdocs\\web\\themes\\custom\\kira_sass\\templates\\header-footer\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 27, "macro" => 35, "if" => 37, "for" => 43, "set" => 45);
        static $filters = array("escape" => 39, "join" => 60, "clean_class" => 61);
        static $functions = array("link" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'clean_class'],
                ['link']
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
