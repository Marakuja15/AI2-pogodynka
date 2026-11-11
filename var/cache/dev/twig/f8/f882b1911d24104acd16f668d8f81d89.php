<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* location/index.html.twig */
class __TwigTemplate_b97abf89d554a940f11c9a55718ab53c extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Location index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>Location index</h1>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
                <th>Country</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Region</th>
                <th>Timezone</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 21
            yield "                <tr>
                    <td>";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "city", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "country", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "latitude", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "longitude", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "region", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "timezone", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 30
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LOCATION_SHOW")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\">show</a>
                        ";
            }
            // line 33
            yield "                        ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LOCATION_EDIT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\">edit</a>
                        ";
            }
            // line 36
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 43
        yield "            </tbody>
        </table>
    </div>
    ";
        // line 46
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LOCATION_NEW")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_new");
            yield "\">Create new</a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "location/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  202 => 47,  200 => 46,  195 => 43,  185 => 39,  183 => 38,  177 => 36,  171 => 34,  168 => 33,  162 => 31,  160 => 30,  155 => 28,  151 => 27,  147 => 26,  143 => 25,  139 => 24,  135 => 23,  131 => 22,  128 => 21,  123 => 20,  105 => 4,  92 => 3,  69 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}
{% block title %}Location index{% endblock %}
{% block body %}
    <h1>Location index</h1>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
                <th>Country</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Region</th>
                <th>Timezone</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for location in locations %}
                <tr>
                    <td>{{ location.id }}</td>
                    <td>{{ location.city }}</td>
                    <td>{{ location.country }}</td>
                    <td>{{ location.latitude }}</td>
                    <td>{{ location.longitude }}</td>
                    <td>{{ location.region }}</td>
                    <td>{{ location.timezone }}</td>
                    <td>
                        {% if is_granted(\x27ROLE_LOCATION_SHOW\x27) %}
                            <a href=\"{{ path(\x27app_location_show\x27, {\x27id\x27: location.id}) }}\">show</a>
                        {% endif %}
                        {% if is_granted(\x27ROLE_LOCATION_EDIT\x27) %}
                            <a href=\"{{ path(\x27app_location_edit\x27, {\x27id\x27: location.id}) }}\">edit</a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if is_granted(\x27ROLE_LOCATION_NEW\x27) %}
        <a href=\"{{ path(\x27app_location_new\x27) }}\">Create new</a>
    {% endif %}
{% endblock %}
", "location/index.html.twig", "C:\\Users\\piotr\\PhpstormProjects\\AI2\\pogodynka\\templates\\location\\index.html.twig");
    }
}
