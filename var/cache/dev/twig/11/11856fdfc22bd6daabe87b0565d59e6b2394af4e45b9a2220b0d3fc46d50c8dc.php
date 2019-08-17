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

/* home.html.twig */
class __TwigTemplate_aaa2bd187d50f2e138b1de86cbe22d7055ccd50791f2403d2265a0501a67d053 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Bienvenue sur le meilleur réseau d'appartements!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les prorpiétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leurs biens à la location.</p>
        <hr class=\"my-4\">
        <p>Vous êtes voyageur et vous voulez voir où vous pourrez loger pour votre prochain déplacement?</p>
        <p class=\"lead\">
            <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
        </p>
    </div>

    <h2 class=\"h1 mt-3 mb-4\" >Nos appartements stars</h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class=\"h1 mt-3 mb-4\" >Nos propriétaires stars</h2>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Lior Chamla</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar Lior\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</p>

                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Lior Chamla</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar Lior\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</p>

                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Bienvenue sur le meilleur réseau d'appartements!
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"jumbotron mt-3\">
        <h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les prorpiétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leurs biens à la location.</p>
        <hr class=\"my-4\">
        <p>Vous êtes voyageur et vous voulez voir où vous pourrez loger pour votre prochain déplacement?</p>
        <p class=\"lead\">
            <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
        </p>
    </div>

    <h2 class=\"h1 mt-3 mb-4\" >Nos appartements stars</h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header text-center\">
                    3 chambres, <strong>49&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
                    <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"heigth: 200px; width: 100%; display: block\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Appartement de ouf</h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At perspiciatis tempora dolorum iusto nesciunt quam optio libero eveniet reprehenderit assumenda.
                        </p>
                        <a href=\"#\" class=\"btn-secondary\">Voir l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class=\"h1 mt-3 mb-4\" >Nos propriétaires stars</h2>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Lior Chamla</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar Lior\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</p>

                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Lior Chamla</h4>

                    <hr>

                    <div class=\"card-text\">
                        <img src=\"http://placehold.it/64x64\" alt=\"Avatar Lior\" class=\"float-left mr-3\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</p>

                        <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "home.html.twig", "/var/www/html/Symfony/udemy/SymBNB/symbnb/templates/home.html.twig");
    }
}
