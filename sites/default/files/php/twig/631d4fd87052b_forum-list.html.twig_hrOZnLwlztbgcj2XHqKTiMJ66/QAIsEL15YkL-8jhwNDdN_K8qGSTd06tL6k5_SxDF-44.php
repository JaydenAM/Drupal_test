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

/* themes/bootstrap/templates/forum/forum-list.html.twig */
class __TwigTemplate_9cb4235c5ce0571927808c504816556e extends \Twig\Template
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
        // line 41
        if (($context["responsive"] ?? null)) {
            // line 42
            echo "  <div class=\"table-responsive\">
";
        }
        // line 44
        $context["table_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 46
        $context["table_classes"] = [0 => "table", 1 => ((        // line 48
($context["bordered"] ?? null)) ? ("table-bordered") : ("")), 2 => ((        // line 49
($context["condensed"] ?? null)) ? ("table-condensed") : ("")), 3 => ((        // line 50
($context["hover"] ?? null)) ? ("table-hover") : ("")), 4 => ((        // line 51
($context["striped"] ?? null)) ? ("table-striped") : ("")), 5 => ((        // line 52
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 55
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["table_attributes"] ?? null), "addClass", [0 => ($context["table_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">
  <thead>
    <tr>
      <th>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forum"));
        echo "</th>
      <th>";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Topics"));
        echo "</th>
      <th>";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posts"));
        echo "</th>
      <th>";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last post"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 66
            echo "    <tr>
      <td";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 67) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 73
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 73) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 73)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "<div class=\"indent\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 74
            echo "          <div title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</span>
          </div>
          <div><a href=\"";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "link", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "label", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</a></div>
          ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78)) {
                // line 79
                echo "            <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 81
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 81) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 81)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 82
            echo "      </td>
      ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 83) == false)) {
                // line 84
                echo "        <td>
          ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_topics", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "
          ";
                // line 86
                if ((twig_get_attribute($this->env, $this->source, $context["forum"], "new_topics", [], "any", false, false, true, 86) == true)) {
                    // line 87
                    echo "            <br />
            <a href=\"";
                    // line 88
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_url", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_text", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo "</a>
          ";
                }
                // line 90
                echo "        </td>
        <td>";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_posts", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "</td>
        <td>";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "last_reply", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "</td>
      ";
            }
            // line 94
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "  </tbody>
</table>
";
        // line 98
        if (($context["responsive"] ?? null)) {
            // line 99
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/forum/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 99,  188 => 98,  184 => 96,  177 => 94,  172 => 92,  168 => 91,  165 => 90,  158 => 88,  155 => 87,  153 => 86,  149 => 85,  146 => 84,  144 => 83,  141 => 82,  129 => 81,  123 => 79,  121 => 78,  115 => 77,  110 => 75,  105 => 74,  93 => 73,  87 => 67,  84 => 66,  80 => 65,  73 => 61,  69 => 60,  65 => 59,  61 => 58,  54 => 55,  52 => 52,  51 => 51,  50 => 50,  49 => 49,  48 => 48,  47 => 46,  45 => 44,  41 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/forum/forum-list.html.twig", "E:\\XAMPP\\htdocs\\drupal\\themes\\bootstrap\\templates\\forum\\forum-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 41, "set" => 44, "for" => 65);
        static $filters = array("escape" => 55, "t" => 58);
        static $functions = array("create_attribute" => 44, "range" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't'],
                ['create_attribute', 'range']
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
