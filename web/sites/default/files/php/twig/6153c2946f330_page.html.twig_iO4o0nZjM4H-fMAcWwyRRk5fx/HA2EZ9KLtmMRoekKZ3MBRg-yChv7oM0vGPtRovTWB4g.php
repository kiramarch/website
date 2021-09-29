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

/* themes/custom/kira_sass/templates/page.html.twig */
class __TwigTemplate_6aa8049cad4218770589bfd2779b07940f5a455e829cfd4b83172899a3fc3804 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">  
     <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 71
        $this->displayBlock('head', $context, $blocks);
        // line 93
        echo "    </header>
    ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 94)) {
            // line 95
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 96, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 101
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 101)) {
            // line 102
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 109
            echo "    ";
        }
        // line 110
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 138
        echo "    </div>
    ";
        // line 139
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 139) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 139)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 139))) {
            // line 140
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 141, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "
          ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
          ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 148
        echo "    <footer class=\"site-footer\">
      ";
        // line 149
        $this->displayBlock('footer', $context, $blocks);
        // line 166
        echo "    </footer>
  </div>
</div>
";
    }

    // line 71
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 72) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 72)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 72))) {
            // line 73
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 73, $this->source), "html", null, true);
            echo ">
          ";
            // line 74
            if (($context["container_navbar"] ?? null)) {
                // line 75
                echo "          <div class=\"container\">
          ";
            }
            // line 77
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
              ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
              ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 79)) {
                // line 80
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 84
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 85
                echo "          </div>
          ";
            }
            // line 87
            echo "          </nav>
        ";
        }
        // line 89
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 89, $this->source), "html", null, true);
        echo ">
            ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
        </nav>
      ";
    }

    // line 102
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 104, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 111
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 112, $this->source), "html", null, true);
        echo "\">
          ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 115, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121)) {
            // line 122
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 122, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 128
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128)) {
            // line 129
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 129, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 135
        echo "          </div>
        </div>
      ";
    }

    // line 149
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 150, $this->source), "html", null, true);
        echo "\">
          ";
        // line 151
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 151) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 151)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 151)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 151))) {
            // line 152
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
              ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
              ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
              ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 159
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 159)) {
            // line 160
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 164
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/kira_sass/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 164,  306 => 161,  303 => 160,  300 => 159,  294 => 156,  290 => 155,  286 => 154,  282 => 153,  279 => 152,  277 => 151,  272 => 150,  268 => 149,  262 => 135,  255 => 131,  249 => 129,  246 => 128,  239 => 124,  233 => 122,  231 => 121,  225 => 118,  219 => 115,  214 => 113,  209 => 112,  205 => 111,  197 => 105,  193 => 104,  190 => 103,  186 => 102,  179 => 90,  174 => 89,  170 => 87,  166 => 85,  163 => 84,  157 => 81,  154 => 80,  152 => 79,  148 => 78,  143 => 77,  139 => 75,  137 => 74,  132 => 73,  129 => 72,  125 => 71,  118 => 166,  116 => 149,  113 => 148,  106 => 144,  102 => 143,  98 => 142,  94 => 141,  91 => 140,  89 => 139,  86 => 138,  84 => 111,  81 => 110,  78 => 109,  75 => 102,  72 => 101,  65 => 97,  61 => 96,  58 => 95,  56 => 94,  53 => 93,  51 => 71,  47 => 70,  43 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/kira_sass/templates/page.html.twig", "C:\\MAMP\\htdocs\\web\\themes\\custom\\kira_sass\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 71, "if" => 94);
        static $filters = array("t" => 70, "escape" => 96);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
