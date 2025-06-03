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

/* nav.html.twig */
class __TwigTemplate_eb9cd98b2fec606f722581cf9fe92297 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"app.css\">


<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
 <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mb-2 mb-lg-0 d-flex w-100 justify-content-around\">

       <span class=\"navbar-brand\">Terroir Garonnais</span>

    <form class=\"d-flex\" role=\"search\" method=\"GET\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_search");
        yield "\">
       <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher des produits\" aria-label=\"Search\" name=\"query\">
       <button class=\"btn btn-outline-success\" type=\"submit\">
         <i class=\"bi bi-search\"></i>
       </button>
    </form>


        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/produit\">Nos Produits</a>
        </li>

         <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/propos\">À Propos de Nous</a>
        </li>

<li class=\"nav-item\">
  <a class=\"btn btn-panier\" href=\"/panier\">Panier</a>
</li>

        ";
        // line 38
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROSPECT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MARAICHER"))) {
            // line 39
            yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/category\">Catégorie</a>
        </li>
        ";
        }
        // line 43
        yield "
       ";
        // line 44
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/user\">Utilisateur</a>
        </li>
          
        ";
        }
        // line 50
        yield "
        ";
        // line 65
        yield "      </ul>

       ";
        // line 67
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "     <a href=\"/login\" style=\"white-space: nowrap;\">Se connecter</a>

     ";
        } else {
            // line 71
            yield "     
     <div class=\"user-container\">
     <div class=\"user-info\">
      ";
            // line 74
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "       <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "image", [], "any", false, false, false, 75), "html", null, true);
                yield "\" alt=\"User Image\" class=\"profile-image\">
      ";
            } else {
                // line 77
                yield "      <i class=\"bi bi-person-circle\"></i>
      ";
            }
            // line 79
            yield "     <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "prenom", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
     </div>
     <a href =\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"white-space: nowrap;\">Se Déconnecter</a>
     ";
        }
        // line 83
        yield "     </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "nav.html.twig";
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
        return array (  152 => 83,  147 => 81,  141 => 79,  137 => 77,  131 => 75,  129 => 74,  124 => 71,  119 => 68,  117 => 67,  113 => 65,  110 => 50,  103 => 45,  101 => 44,  98 => 43,  92 => 39,  90 => 38,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"app.css\">


<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
 <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mb-2 mb-lg-0 d-flex w-100 justify-content-around\">

       <span class=\"navbar-brand\">Terroir Garonnais</span>

    <form class=\"d-flex\" role=\"search\" method=\"GET\" action=\"{{ path('app_produit_search') }}\">
       <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher des produits\" aria-label=\"Search\" name=\"query\">
       <button class=\"btn btn-outline-success\" type=\"submit\">
         <i class=\"bi bi-search\"></i>
       </button>
    </form>


        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/produit\">Nos Produits</a>
        </li>

         <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/propos\">À Propos de Nous</a>
        </li>

<li class=\"nav-item\">
  <a class=\"btn btn-panier\" href=\"/panier\">Panier</a>
</li>

        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_PROSPECT') or is_granted('ROLE_MARAICHER') %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/category\">Catégorie</a>
        </li>
        {% endif %}

       {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/user\">Utilisateur</a>
        </li>
          
        {% endif %}

        {# <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Dropdown
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
        </li> #}
      </ul>

       {% if not app.user %}
     <a href=\"/login\" style=\"white-space: nowrap;\">Se connecter</a>

     {% else %}
     
     <div class=\"user-container\">
     <div class=\"user-info\">
      {% if app.user.image %}
       <img src=\"{{ app.user.image }}\" alt=\"User Image\" class=\"profile-image\">
      {% else %}
      <i class=\"bi bi-person-circle\"></i>
      {% endif %}
     <span>{{ app.user.prenom }}</span>
     </div>
     <a href =\"{{ path('app_logout')}}\" style=\"white-space: nowrap;\">Se Déconnecter</a>
     {% endif %}
     </div>
</nav>", "nav.html.twig", "C:\\laragon\\www\\new_circuit_court\\templates\\nav.html.twig");
    }
}
