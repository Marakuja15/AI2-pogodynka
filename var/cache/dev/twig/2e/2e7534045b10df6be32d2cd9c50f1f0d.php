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

/* measurement/show.html.twig */
class __TwigTemplate_6d7ccc3df65e2ddbd46177e4182ad523 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "measurement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "measurement/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Measurement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
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

        // line 6
        yield "    <h1>Measurement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 16
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>TemperatureC</th>
                <td>";
        // line 20
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 20, $this->source); })()), "temperatureC", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>FeelsLikeC</th>
                <td>";
        // line 24
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 24, $this->source); })()), "feelsLikeC", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PressureHpa</th>
                <td>";
        // line 28
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 28, $this->source); })()), "pressureHpa", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>HumidityPercent</th>
                <td>";
        // line 32
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 32, $this->source); })()), "humidityPercent", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>WindSpeedMs</th>
                <td>";
        // line 36
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 36, $this->source); })()), "windSpeedMs", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>WindDirectionDeg</th>
                <td>";
        // line 40
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 40, $this->source); })()), "windDirectionDeg", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PrecipitationMn</th>
                <td>";
        // line 44
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 44, $this->source); })()), "precipitationMn", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CloudCoverPercent</th>
                <td>";
        // line 48
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 48, $this->source); })()), "cloudCoverPercent", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 52
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>";
        // line 56
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 56, $this->source); })()), "source", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_measurement_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 63
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_measurement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["measurement"]) || array_key_exists("measurement", $context) ? $context["measurement"] : (function () { throw new RuntimeError('Variable "measurement" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 65
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "measurement/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "measurement/show.html.twig";
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
        return array (  208 => 65,  203 => 63,  198 => 61,  190 => 56,  183 => 52,  176 => 48,  169 => 44,  162 => 40,  155 => 36,  148 => 32,  141 => 28,  134 => 24,  127 => 20,  120 => 16,  113 => 12,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Measurement{% endblock %}

{% block body %}
    <h1>Measurement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ measurement.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ measurement.date ? measurement.date|date(\x27Y-m-d H:i:s\x27) : \x27\x27 }}</td>
            </tr>
            <tr>
                <th>TemperatureC</th>
                <td>{{ measurement.temperatureC }}</td>
            </tr>
            <tr>
                <th>FeelsLikeC</th>
                <td>{{ measurement.feelsLikeC }}</td>
            </tr>
            <tr>
                <th>PressureHpa</th>
                <td>{{ measurement.pressureHpa }}</td>
            </tr>
            <tr>
                <th>HumidityPercent</th>
                <td>{{ measurement.humidityPercent }}</td>
            </tr>
            <tr>
                <th>WindSpeedMs</th>
                <td>{{ measurement.windSpeedMs }}</td>
            </tr>
            <tr>
                <th>WindDirectionDeg</th>
                <td>{{ measurement.windDirectionDeg }}</td>
            </tr>
            <tr>
                <th>PrecipitationMn</th>
                <td>{{ measurement.precipitationMn }}</td>
            </tr>
            <tr>
                <th>CloudCoverPercent</th>
                <td>{{ measurement.cloudCoverPercent }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ measurement.description }}</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>{{ measurement.source }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path(\x27app_measurement_index\x27) }}\">back to list</a>

    <a href=\"{{ path(\x27app_measurement_edit\x27, {\x27id\x27: measurement.id}) }}\">edit</a>

    {{ include(\x27measurement/_delete_form.html.twig\x27) }}
{% endblock %}
", "measurement/show.html.twig", "C:\\Users\\piotr\\PhpstormProjects\\AI2\\pogodynka\\templates\\measurement\\show.html.twig");
    }
}
