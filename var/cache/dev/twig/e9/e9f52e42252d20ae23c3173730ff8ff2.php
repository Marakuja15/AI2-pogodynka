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

/* measurement/index.html.twig */
class __TwigTemplate_77ed4b323bdad76e58ad2cca54139c98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "measurement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "measurement/index.html.twig"));

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

        yield "Measurement index";
        
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
        yield "    <h1>Measurement index</h1>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>TemperatureC</th>
                <th>FeelsLikeC</th>
                <th>PressureHpa</th>
                <th>HumidityPercent</th>
                <th>WindSpeedMs</th>
                <th>WindDirectionDeg</th>
                <th>PrecipitationMn</th>
                <th>CloudCoverPercent</th>
                <th>Description</th>
                <th>Source</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["measurements"]) || array_key_exists("measurements", $context) ? $context["measurements"] : (function () { throw new RuntimeError('Variable "measurements" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["measurement"]) {
            // line 26
            yield "                <tr>
                    <td>";
            // line 27
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "date", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "date", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 29
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "temperatureC", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "feelsLikeC", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "pressureHpa", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "humidityPercent", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "windSpeedMs", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "windDirectionDeg", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td>";
            // line 35
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "precipitationMn", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>";
            // line 36
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "cloudCoverPercent", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                    <td>";
            // line 37
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "description", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                    <td>";
            // line 38
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "source", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 40
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEASUREMENT_SHOW")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_measurement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\">show</a>
                        ";
            }
            // line 43
            yield "                        ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEASUREMENT_EDIT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_measurement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["measurement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\">edit</a>
                        ";
            }
            // line 46
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                <tr>
                    <td colspan=\"13\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['measurement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 53
        yield "            </tbody>
        </table>
    </div>
    ";
        // line 56
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEASUREMENT_NEW")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_measurement_new");
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
        return "measurement/index.html.twig";
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
        return array (  227 => 57,  225 => 56,  220 => 53,  210 => 49,  208 => 48,  202 => 46,  196 => 44,  193 => 43,  187 => 41,  185 => 40,  180 => 38,  176 => 37,  172 => 36,  168 => 35,  164 => 34,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 29,  140 => 28,  136 => 27,  133 => 26,  128 => 25,  105 => 4,  92 => 3,  69 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}
{% block title %}Measurement index{% endblock %}
{% block body %}
    <h1>Measurement index</h1>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>TemperatureC</th>
                <th>FeelsLikeC</th>
                <th>PressureHpa</th>
                <th>HumidityPercent</th>
                <th>WindSpeedMs</th>
                <th>WindDirectionDeg</th>
                <th>PrecipitationMn</th>
                <th>CloudCoverPercent</th>
                <th>Description</th>
                <th>Source</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for measurement in measurements %}
                <tr>
                    <td>{{ measurement.id }}</td>
                    <td>{{ measurement.date ? measurement.date|date(\x27Y-m-d H:i:s\x27) : \x27\x27 }}</td>
                    <td>{{ measurement.temperatureC }}</td>
                    <td>{{ measurement.feelsLikeC }}</td>
                    <td>{{ measurement.pressureHpa }}</td>
                    <td>{{ measurement.humidityPercent }}</td>
                    <td>{{ measurement.windSpeedMs }}</td>
                    <td>{{ measurement.windDirectionDeg }}</td>
                    <td>{{ measurement.precipitationMn }}</td>
                    <td>{{ measurement.cloudCoverPercent }}</td>
                    <td>{{ measurement.description }}</td>
                    <td>{{ measurement.source }}</td>
                    <td>
                        {% if is_granted(\x27ROLE_MEASUREMENT_SHOW\x27) %}
                            <a href=\"{{ path(\x27app_measurement_show\x27, {\x27id\x27: measurement.id}) }}\">show</a>
                        {% endif %}
                        {% if is_granted(\x27ROLE_MEASUREMENT_EDIT\x27) %}
                            <a href=\"{{ path(\x27app_measurement_edit\x27, {\x27id\x27: measurement.id}) }}\">edit</a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"13\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if is_granted(\x27ROLE_MEASUREMENT_NEW\x27) %}
        <a href=\"{{ path(\x27app_measurement_new\x27) }}\">Create new</a>
    {% endif %}
{% endblock %}
", "measurement/index.html.twig", "C:\\Users\\piotr\\PhpstormProjects\\AI2\\pogodynka\\templates\\measurement\\index.html.twig");
    }
}
