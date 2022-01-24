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

/* modules/custom/form_module/templates/information.html.twig */
class __TwigTemplate_67f25d9c3eb00914771ce9087c2e0a1435e84349ea899127f1e409a4bf471ba5 extends \Twig\Template
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
        // line 1
        echo "<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Password</th>
    <th scope=\"col\">Status</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 13
            echo "    <tr>
      <th scope=\"row\">";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pro"], "uid", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</th>
      <td>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pro"], "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</td>
      <td>";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pro"], "mail", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pro"], "pass", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pro"], "status", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "modules/custom/form_module/templates/information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Name</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Password</th>
    <th scope=\"col\">Status</th>
    </tr>
  </thead>
  <tbody>
    {% for pro in items %}
    <tr>
      <th scope=\"row\">{{pro.uid}}</th>
      <td>{{pro.name}}</td>
      <td>{{pro.mail}}</td>
      <td>{{pro.pass}}</td>
      <td>{{pro.status}}</td>
    </tr>
    {% endfor %}
  </tbody>
</table>", "modules/custom/form_module/templates/information.html.twig", "C:\\xampp\\htdocs\\drupal-9.3.2\\drupal-9.3.2\\modules\\custom\\form_module\\templates\\information.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
