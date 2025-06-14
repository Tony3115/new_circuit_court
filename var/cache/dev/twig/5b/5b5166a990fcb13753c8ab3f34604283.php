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
        yield "    <h1>Fruits et légumes</h1><br>

    <form method=\"GET\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"mb-3\">
    <label for=\"categoryFilter\">Filtrer par catégorie :</label>
    <select name=\"category\" id=\"categoryFilter\" class=\"form-select\">
        <option value=\"\">Toutes les catégories</option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13), "get", ["category"], "method", false, false, false, 13) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 13))) {
                yield "selected";
            }
            yield ">
                ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "    </select>
    <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
</form>


    <table class=\"table text-center table-bordered\">
        <thead>
            <tr>
              ";
        // line 25
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                    <th>Id</th>
                ";
        }
        // line 28
        yield "                <th>Name</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                ";
        // line 32
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                    <th>Actions</th>
                ";
        }
        // line 35
        yield "                <th>Producteur</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            yield "            <tr>
                ";
            // line 41
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                <td style=\"width: 100px\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
                ";
            }
            // line 44
            yield "                <td style=\"width: 150px\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td style=\"width: 300px\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td style=\"width: 80px\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 46), "html", null, true);
            yield " €</td>
                <td style=\"width: 100px\">
                    ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", true, true, false, 48) && CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 48))) {
                // line 49
                yield "                    <img width= \"100 px\" src= \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "getSchemeAndHttpHost", [], "method", false, false, false, 49), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 49), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 51
                yield "                    <p>Pas d'image disponible</p>
                    ";
            }
            // line 53
            yield "                </td>
                  ";
            // line 54
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                    <td style=\"width: 200px\">
                        <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn custom-btn\">Show</a>
                        <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                    </td>
                ";
            }
            // line 60
            yield "               <td style=\"width: 100px\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "        </tbody>
    </table>

";
        // line 70
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
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
        return array (  257 => 71,  255 => 70,  250 => 67,  241 => 63,  239 => 62,  231 => 60,  225 => 57,  221 => 56,  218 => 55,  216 => 54,  213 => 53,  209 => 51,  199 => 49,  197 => 48,  192 => 46,  188 => 45,  183 => 44,  177 => 42,  175 => 41,  172 => 40,  167 => 39,  161 => 35,  157 => 33,  155 => 32,  149 => 28,  145 => 26,  143 => 25,  133 => 17,  124 => 14,  115 => 13,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    <h1>Fruits et légumes</h1><br>

    <form method=\"GET\" action=\"{{ path('app_produit_index') }}\" class=\"mb-3\">
    <label for=\"categoryFilter\">Filtrer par catégorie :</label>
    <select name=\"category\" id=\"categoryFilter\" class=\"form-select\">
        <option value=\"\">Toutes les catégories</option>
        {% for category in categories %}
            <option value=\"{{ category.id }}\" {% if app.request.query.get('category') == category.id %}selected{% endif %}>
                {{ category.name }}
            </option>
        {% endfor %}
    </select>
    <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
</form>


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
                        <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn custom-btn\">Show</a>
                        <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-primary\">Edit</a>
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
