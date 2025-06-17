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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "\" class=\"mb-3 filter-form\">
        <label for=\"categoryFilter\">Filtrer par catégorie :</label>
        <select name=\"category\" id=\"categoryFilter\" class=\"form-select\">
            <option value=\"\">Toutes les catégories</option>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            yield "                <option value=\"";
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
        yield "        </select>
        <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
    </form>


    <div class=\"products-grid\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            yield "            <div class=\"product-card\">
                ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", true, true, false, 25) && CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 25))) {
                // line 26
                yield "                    <img class=\"product-img\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "getSchemeAndHttpHost", [], "method", false, false, false, 26), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 26), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 26), "html", null, true);
                yield "\">
                ";
            } else {
                // line 28
                yield "                    <p class=\"text-center\">Pas d'image disponible</p>
                ";
            }
            // line 30
            yield "                <div class=\"product-info\">
                    <h5>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</h5>
                    <p>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                    <p class=\"price\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 33), "html", null, true);
            yield " €</p>
                    <p class=\"producer\">Producteur : ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "user", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    ";
            // line 35
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" class=\"btn custom-btn\">Show</a>
                        <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                    ";
            }
            // line 39
            yield "
<form method=\"POST\" action=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">
    <button type=\"submit\" class=\"btn btn-success\" onclick=\"showFlashcard(event)\">Ajouter au panier</button>
    <div id=\"flashcard-";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\" class=\"flashcard hidden\">
        Produit ajouté au panier !
    </div>
</form>

                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "            <p class=\"text-center\">Aucun produit trouvé.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </div>

    ";
        // line 54
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "        <div class=\"text-center mt-3\">
            <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            yield "\" class=\"btn btn-success\">Créer un nouveau produit</a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "    <script>
    function showFlashcard(event) {
        event.preventDefault(); // Empêche l'envoi immédiat du formulaire
        let button = event.target;
        let flashcard = button.nextElementSibling;
        flashcard.classList.add('show');

        setTimeout(() => {
            flashcard.classList.remove('show'); // Cache la flashcard après quelques secondes
        }, 2000);
    }
    </script>
";
        
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
        return array (  263 => 62,  250 => 61,  235 => 56,  232 => 55,  230 => 54,  226 => 52,  219 => 50,  217 => 49,  205 => 42,  200 => 40,  197 => 39,  192 => 37,  187 => 36,  185 => 35,  181 => 34,  177 => 33,  173 => 32,  169 => 31,  166 => 30,  162 => 28,  152 => 26,  150 => 25,  147 => 24,  142 => 23,  134 => 17,  125 => 14,  116 => 13,  112 => 12,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    <h1>Fruits et légumes</h1><br>

    <form method=\"GET\" action=\"{{ path('app_produit_index') }}\" class=\"mb-3 filter-form\">
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


    <div class=\"products-grid\">
        {% for produit in produits %}
            <div class=\"product-card\">
                {% if produit.image is defined and produit.image %}
                    <img class=\"product-img\" src=\"{{ app.request.getSchemeAndHttpHost() }}/{{ produit.image }}\" alt=\"{{ produit.name }}\">
                {% else %}
                    <p class=\"text-center\">Pas d'image disponible</p>
                {% endif %}
                <div class=\"product-info\">
                    <h5>{{ produit.name }}</h5>
                    <p>{{ produit.description }}</p>
                    <p class=\"price\">{{ produit.prix }} €</p>
                    <p class=\"producer\">Producteur : {{ produit.user.prenom }}</p>
                    {% if is_granted('ROLE_MARAICHER') %}
                        <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn custom-btn\">Show</a>
                        <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-primary\">Edit</a>
                    {% endif %}

<form method=\"POST\" action=\"{{ path('app_produit_index', {'id': produit.id}) }}\">
    <button type=\"submit\" class=\"btn btn-success\" onclick=\"showFlashcard(event)\">Ajouter au panier</button>
    <div id=\"flashcard-{{ produit.id }}\" class=\"flashcard hidden\">
        Produit ajouté au panier !
    </div>
</form>

                </div>
            </div>
        {% else %}
            <p class=\"text-center\">Aucun produit trouvé.</p>
        {% endfor %}
    </div>

    {% if is_granted('ROLE_MARAICHER') %}
        <div class=\"text-center mt-3\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success\">Créer un nouveau produit</a>
        </div>
    {% endif %}
{% endblock %}

{% block javascripts %}
    <script>
    function showFlashcard(event) {
        event.preventDefault(); // Empêche l'envoi immédiat du formulaire
        let button = event.target;
        let flashcard = button.nextElementSibling;
        flashcard.classList.add('show');

        setTimeout(() => {
            flashcard.classList.remove('show'); // Cache la flashcard après quelques secondes
        }, 2000);
    }
    </script>
{% endblock %}

", "produit/index.html.twig", "C:\\laragon\\www\\new_circuit_court\\templates\\produit\\index.html.twig");
    }
}
