<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* produit/index.html.twig */
class __TwigTemplate_c89972201998dd74df665843f4a32a26 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

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

        yield "Produit index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
        yield "    <h1>Produit index</h1>

    <table class=\"table text-center table-bordered\">
        <thead>
            <tr>
              ";
        // line 11
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                    <th>Id</th>
                ";
        }
        // line 14
        yield "                <th>Name</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                ";
        // line 18
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    <th>Actions</th>
                ";
        }
        // line 21
        yield "                <th>Producteur</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            yield "            <tr>
                ";
            // line 27
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                <td style=\"width: 100px\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                ";
            }
            // line 30
            yield "                <td style=\"width: 150px\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td style=\"width: 300px\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td style=\"width: 80px\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 32), "html", null, true);
            yield " €</td>
                <td style=\"width: 100px\">
                    ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", true, true, false, 34) && CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 34))) {
                // line 35
                yield "                    <img width= \"100 px\" src= \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "getSchemeAndHttpHost", [], "method", false, false, false, 35), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 35), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 35), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 37
                yield "                    <p>Pas d'image disponible</p>
                    ";
            }
            // line 39
            yield "                </td>
                  ";
            // line 40
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                    <td style=\"width: 200px\">
                        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                    </td>
                ";
            }
            // line 46
            yield "               <td style=\"width: 100px\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "user", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
    </table>

";
        // line 56
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            yield "\" class=\"btn btn-success\">Create new</a>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/index.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  221 => 57,  219 => 56,  214 => 53,  205 => 49,  203 => 48,  195 => 46,  189 => 43,  185 => 42,  182 => 41,  180 => 40,  177 => 39,  173 => 37,  163 => 35,  161 => 34,  156 => 32,  152 => 31,  147 => 30,  141 => 28,  139 => 27,  136 => 26,  131 => 25,  125 => 21,  121 => 19,  119 => 18,  113 => 14,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    <h1>Produit index</h1>

    <table class=\"table text-center table-bordered\">
        <thead>
            <tr>
              {% if is_granted('ROLE_ADMIN') %}
                    <th>Id</th>
                {% endif %}
                <th>Name</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                {% if is_granted('ROLE_MARAICHER') %}
                    <th>Actions</th>
                {% endif %}
                <th>Producteur</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                {% if is_granted('ROLE_ADMIN') %}
                <td style=\"width: 100px\">{{ produit.id }}</td>
                {% endif %}
                <td style=\"width: 150px\">{{ produit.name }}</td>
                <td style=\"width: 300px\">{{ produit.description }}</td>
                <td style=\"width: 80px\">{{ produit.prix }} €</td>
                <td style=\"width: 100px\">
                    {% if produit.image is defined and produit.image %}
                    <img width= \"100 px\" src= \"{{ app.request.getSchemeAndHttpHost()}}/{{produit.image}}\" alt=\"{{ produit.name }}\">
                    {% else %}
                    <p>Pas d'image disponible</p>
                    {% endif %}
                </td>
                  {% if is_granted('ROLE_MARAICHER') %}
                    <td style=\"width: 200px\">
                        <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                    </td>
                {% endif %}
               <td style=\"width: 100px\">{{ produit.user.prenom }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% if is_granted('ROLE_MARAICHER') %}
    <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success\">Create new</a>
{% endif %}
{% endblock %}
", "produit/index.html.twig", "C:\\laragon\\www\\new_circuit_court\\templates\\produit\\index.html.twig");
    }
}
