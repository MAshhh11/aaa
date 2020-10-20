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

/* public/formation.html.twig */
class __TwigTemplate_af4db5df7e7986b57d4b5d478688efcc039bfc37a7b04179379d83be52df0291 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/formation.html.twig"));

        // line 2
        $context["page"] = "formation";
        // line 1
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/formation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les différentes formations - L’animateur autodidacte accompagné";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<div class=\"container formBtnContainer\">
  <div class=\"formTop\">
    <div class=\"patternBlue100\">

    </div>
    <div class=\"formNavContainer\">
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"1\">
          Formation Année 1
        </div>
      </div>
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"2\">
          Formation Année 2
        </div>
      </div>
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"3\">
          Modules Thématiques
        </div>
      </div>
    </div>
  </div>
  <div class=\"row position-relative formRow\">
    <div class=\"form form1\" data-nbform=\"1\">
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/formations01.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"formationTitle\">
        Formation Année 1
      </div>
    </div>

    <div class=\"form form2\" data-nbform=\"2\">
      <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/formations02.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"formationTitle\">
        Formation Année 2
      </div>
    </div>

    <div class=\"form form3\" data-nbform=\"3\">
      <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/formations03.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"formationTitle\">
        Modules Thématiques
      </div>
    </div>

  </div>
  <div class=\"row\">
    <div class=\"formContent\" data-nbform=\"1\">
      <div class=\"patternBlue100\">
        <div class=\"blockLeft\">
          <div class=\"formHeure\">
            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures@3x.png"), "html", null, true);
        echo " 3x\" alt=\"heures\">
            <div class=\"leftText\">
              <h3>Nombres d’heures</h3>
              <p>À venir</p>
            </div>
          </div>
          <div class=\"formPrix\">
            <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs@3x.png"), "html", null, true);
        echo " 3x\" alt=\"tarifs\">
            <div class=\"leftText\">
              <h3>Tarifs</h3>
              <p>À venir</p>
            </div>
          </div>
        </div>
        <div class=\"blockRight\">
          <div class=\"formDetail\">
            <h3>Les cours</h3>
            <p>• Des documents techniques et méthodologiques (analyse d’une marche normale, la détection, la marche à caractère...)</p>
            <p>• 6 ateliers de plusieurs jours chacun abordant des thématiques spécifiques (le pré cinéma, le layout, la pixillation...)</p>
            <h3>Les exercices</h3>
            <p>• 20 exercices d’animation ,répartis sur 8 mois, parcourant les problématiques fondamentales de l’animation (anticipation/action/réaction, lourd/léger, locomotions, acting...)</p>
            <p>• 6 exercices de storyboard initial (nomenclature et découpage, découpage d’un dialogue à deux protagonistes, découpage sur une adaptation de récit petite enfance...)</p>
            <h3>Notre objectif</h3>
            <p>Les 3 buts principaux à atteindre à l’issue de la  première année seront :</p>
            <p>• La constitution d’un book (niveau concours d’entrée aux écoles d’animation).</p>
            <p>• La réalisation d’un film personnel en animation de 30 secondes, sonorisé.</p>
            <p>• La réalisation d’une animatique de 2 minutes, sonorisée, sur un projet personnel.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscription_form");
        echo "\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
    <div class=\"formContent\" data-nbform=\"2\">
      <div class=\"patternBlue100\">
        <div class=\"blockLeft\">
          <div class=\"formHeure\">
            <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/heures@3x.png"), "html", null, true);
        echo " 3x\" alt=\"heures\">
            <div class=\"leftText\">
              <h3>Nombres d’heures</h3>
              <p>À venir</p>
            </div>
          </div>
          <div class=\"formPrix\">
            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/tarifs@3x.png"), "html", null, true);
        echo " 3x\" alt=\"tarifs\">
            <div class=\"leftText\">
              <h3>Tarifs</h3>
              <p>À venir</p>
            </div>
          </div>
        </div>
        <div class=\"blockRight\">
          <div class=\"formDetail\">
            <h3>Les cours</h3>
            <p>Cette deuxième année poursuit et approfondit toutes les thématiques abordées en première année, en mettant l’accent sur la narration et la mise en scène :</p>
            <p>• Des documents techniques et méthodologiques (exposition compensée, locomotions animales, la synchronisation labiale...)</p>
            <h3>Les exercices</h3>
            <p>• 6 exercices narratifs d’animation (entre 5 et 8 séances chacun) exigeant un découpage préalable (autoportrait en mouvement, interactions, acting/lipsync...)</p>
            <p>• 5 exercices de storyboard (entre 5 et 10 séances chacun) avec animatique et son (récit parallèle, dialogue à plus de 2 protagonistes, exercice de storyboard en condition de production...)</p>
            <p>• 6 ateliers de plusieurs jours chacun abordant des thématiques spécifiques (réalisation d’un film d’animation de plus de 2 minutes, autres techniques du cinéma d’animation, portfolio…) </p>
            <h3>Notre objectif</h3>
            <p>Le but de cette 2ème année est d’avoir atteint le niveau pour postuler en tant qu’animateur 2D ou storyboarder dans un studio d’animation.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscription_form");
        echo "\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
    <div class=\"formContent\" data-nbform=\"3\">
      <div class=\"patternBlue100 moduleContainer\">
        <div class=\"blockLeftModule \">
          <div class=\"blockModule\">
            <h3>II – Locomotions humaines</h3>
            <p>Ce module d’adresse à des personnes ayant déjà quelques notions fondamentales d’animation et ayant une bonne pratique du dessin.<br>
            Les exercices explorent les modes de locomotions humaines ( marche, marche à caractère, marche contrainte, course, changements d’allure de locomotion). <br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>IV – Interactions</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
            Les exercices traitent des interactions entre personnages humains ou animaux (danse, combat) et nécessitent une planification préalable ( prédécoupage, détection, feuille d’exposition).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>VI – Pour débuter en storyboard</h3>
            <p>Ce module s’adresse aux débutants en storyboard ayant une pratique ancienne et régulière du dessin. <br>
              Les exercices et les cours les accompagnant énoncent les règles principales de la grammaire cinématographique appliquée au découpage et à la mise en scène en animation.<br>
              Certains des exercices seront finalisés sous forme d’animatiques avec son.<br>
              L’ensemble des exercices se fait en 16 jours complets de travail (journées de 6h) et ils sont de difficulté 2 et 3.</p>
              <p class=\"modulePrice\">690€</p>
          </div>
        </div>
        <div class=\"blockRightModule\">
          <div class=\"blockModule\">
            <h3>I – Pour débuter en animation</h3>
            <p>Ce module s’adresse aux débutants en animation ayant une pratique ancienne et régulière du dessin.<br>
            Les exercices proposés abordent les principes fondamentaux de l’animation ( poids, matières, conservation des volumes et proportions, anticipation/action/réaction).<br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 1 et 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>

          <div class=\"blockModule\">
            <h3>III – Locomotions animales</h3>
            <p>Ce module d’adresse à des personnes connaissant déjà les principes fondamentaux de l’animation et ayant une pratique ancienne et quotidienne du dessin.<br>
            Les exercices parcourent les différents modes de locomotions animales ( marche quadrupède, amble,  trot, galop, vol des oiseaux).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 3.</p>
            <p class=\"modulePrice\">590€</p>
          </div>

          <div class=\"blockModule\">
            <h3>V – Acting/Lipsync</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
              Les exercices nécessitent une planification préalable (pré découpage, détection, feuille d’exposition), et abordent les problématiques d’animation de personnages dialoguant. <br>
            L’ensemble des exercices se fait en 18 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>

          <div class=\"blockModule\">
            <p>Mode de fonctionnement</p>
            <p>Chaque exercice réalisé me sera envoyé, sur le site, sous forme de fichier, et je ferai un retour des corrections ou modifications à effectuer avant d’obtenir la version finale validée du travail.</p>
            <p>Une présentation et des documents techniques accompagnent chaque exercice.</p>
          </div>
        </div>
        <div class=\"blockModuleMobile\">
          <div class=\"blockModule\">
            <h3>I – Pour débuter en animation</h3>
            <p>Ce module s’adresse aux débutants en animation ayant une pratique ancienne et régulière du dessin.<br>
            Les exercices proposés abordent les principes fondamentaux de l’animation ( poids, matières, conservation des volumes et proportions, anticipation/action/réaction).<br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 1 et 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>II – Locomotions humaines</h3>
            <p>Ce module d’adresse à des personnes ayant déjà quelques notions fondamentales d’animation et ayant une bonne pratique du dessin.<br>
            Les exercices explorent les modes de locomotions humaines ( marche, marche à caractère, marche contrainte, course, changements d’allure de locomotion). <br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>III – Locomotions animales</h3>
            <p>Ce module d’adresse à des personnes connaissant déjà les principes fondamentaux de l’animation et ayant une pratique ancienne et quotidienne du dessin.<br>
            Les exercices parcourent les différents modes de locomotions animales ( marche quadrupède, amble,  trot, galop, vol des oiseaux).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 3.</p>
            <p class=\"modulePrice\">590€</p>
          </div>
          <div class=\"blockModule\">
            <h3>IV – Interactions</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
            Les exercices traitent des interactions entre personnages humains ou animaux (danse, combat) et nécessitent une planification préalable ( prédécoupage, détection, feuille d’exposition).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>V – Acting/Lipsync</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
              Les exercices nécessitent une planification préalable (pré découpage, détection, feuille d’exposition), et abordent les problématiques d’animation de personnages dialoguant. <br>
            L’ensemble des exercices se fait en 18 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>VI – Pour débuter en storyboard</h3>
            <p>Ce module s’adresse aux débutants en storyboard ayant une pratique ancienne et régulière du dessin. <br>
              Les exercices et les cours les accompagnant énoncent les règles principales de la grammaire cinématographique appliquée au découpage et à la mise en scène en animation.<br>
              Certains des exercices seront finalisés sous forme d’animatiques avec son.<br>
              L’ensemble des exercices se fait en 16 jours complets de travail (journées de 6h) et ils sont de difficulté 2 et 3.</p>
              <p class=\"modulePrice\">690€</p>
          </div>
          <div class=\"blockModule\">
            <p>Mode de fonctionnement</p>
            <p>Chaque exercice réalisé me sera envoyé, sur le site, sous forme de fichier, et je ferai un retour des corrections ou modifications à effectuer avant d’obtenir la version finale validée du travail.</p>
            <p>Une présentation et des documents techniques accompagnent chaque exercice.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscription_form");
        echo "\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
  </div>
</div>
<div class=\"container exerciceGratuit\" id=\"exerciceGratuit\">
  <div class=\"row\">
    <div class=\"col-lg-6 exerciceContent order-lg-1\">
      <p class=\"overTitle text-blue\">un exercice gratuit</p>
      <h2>Vous voulez tester vos capacités ?<span class=\"text-yellow\"> •</span></h2>
      <p class=\"font-bold\">Je vous propose un exercice afin de tester vos capacités en dessin et en animation 2D…</p>
      <p>Cet exercice ludique servira d’une part à ce que l’élève puisse s’auto-évaluer quant à son aisance à l’animation, d’autre part il me servira à identifier le niveau de dessin du futur étudiant et son ressenti
      du mouvement et de l’acting.</p>
      <p>Mon retour montrera à l’élève le mode de fonctionnement que je propose et lui permettra d’évaluer la pertinence de la correction.</p>
      <p>Ce sera une manière de faire connaissance autour de l’enjeu qui nous réunira et d’apporter d’éventuels ajustements personnalisés du programme et des exercices.</p>
      <p>Cependant, il n’est nullement obligatoire de le faire avant de s’inscrire.</p>
      <p>C’est un exercice de difficulté moyenne, admettant éventuellement un traitement cartoon.</p>
      <p>Y sont présentes les problématiques de poids, d’accélération, d’anticipation, action, réaction, d’amortis, conservation des tailles et proportions etc.</p>
      <p>Il peut être réalisé en une trentaine de dessins et peut se finaliser en deux ou trois journées.</p>
      <p>Il me sera envoyé sur le site sous forme d’un export vidéo n’excédant pas 10 Mo et je répondrai par un commentaire, point par point, accompagné d’une animation de l’exercice.</p>
      <div class=\"cstBtnBorderTrame text-yellow border-yellow\" id=\"freeExe\">consulter l’énoncé de l’exercice</div>
    </div>
    <div class=\"col-lg-6 exerciceImg order-first order-lg-2\">
      <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/jump_def2.jpg"), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <div class=\"col-12 order-lg-3\">
      <p class=\"text-blue font-bold exerciceCorrige\">Je souhaite recevoir le corrigé de mon exercice, j’envoie mon export vidéo via <a class=\"text-darkBlue\" href=\"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "#contact\">le formulaire de contact en page d’accueil</a></p>
    </div>
  </div>
</div>
<div class=\"popUpExe ";
        // line 270
        if ((isset($context["freeExe"]) || array_key_exists("freeExe", $context) ? $context["freeExe"] : (function () { throw new RuntimeError('Variable "freeExe" does not exist.', 270, $this->source); })())) {
            echo "shown";
        }
        echo "\">

  <div class=\"container\">
    <div class=\"popUpClose\">
      <span></span>
      <span></span>
    </div>
    ";
        // line 277
        if ((isset($context["freeExe"]) || array_key_exists("freeExe", $context) ? $context["freeExe"] : (function () { throw new RuntimeError('Variable "freeExe" does not exist.', 277, $this->source); })())) {
            // line 278
            echo "      <a class=\"linkPdfFreeExe\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pdf/exercice_gratuit.pdf"), "html", null, true);
            echo "\">Télécharger l'exercice gratuit.</a>
    ";
        } else {
            // line 280
            echo "      <p class=\"text-white text-center\">Pour consulter l’énoncé de l’exercice, veuillez renseigner votre adresse email</p>
      ";
            // line 281
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), 'form_start');
            echo "
        <div class=\"my-custom-class-for-errors\">
            ";
            // line 283
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), 'errors');
            echo "
        </div>

        <div class=\"row\">
            <div class=\"col d-flex\">
                ";
            // line 288
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "email", [], "any", false, false, false, 288), 'widget');
            echo "
                <button type=\"submit\" name=\"button\" class=\"cstSubmit\"> <img src=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit.png"), "html", null, true);
            echo "\" srcset=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit@2x.png"), "html", null, true);
            echo " 2x, ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit@3x.png"), "html", null, true);
            echo " 3x\" alt=\"fleche\"> </button>
            </div>
        </div>
      ";
            // line 292
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 294
        echo "

  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 294,  458 => 292,  448 => 289,  444 => 288,  436 => 283,  431 => 281,  428 => 280,  422 => 278,  420 => 277,  408 => 270,  401 => 266,  395 => 263,  369 => 240,  253 => 127,  223 => 104,  209 => 97,  199 => 90,  167 => 65,  153 => 58,  138 => 46,  128 => 39,  118 => 32,  91 => 7,  81 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/base.html.twig' %}
{% set page = \"formation\" %}

{% block title %}Les différentes formations - L’animateur autodidacte accompagné{% endblock %}

{% block main %}
<div class=\"container formBtnContainer\">
  <div class=\"formTop\">
    <div class=\"patternBlue100\">

    </div>
    <div class=\"formNavContainer\">
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"1\">
          Formation Année 1
        </div>
      </div>
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"2\">
          Formation Année 2
        </div>
      </div>
      <div class=\"formNav\">
        <div class=\"formBtn\" data-nbForm=\"3\">
          Modules Thématiques
        </div>
      </div>
    </div>
  </div>
  <div class=\"row position-relative formRow\">
    <div class=\"form form1\" data-nbform=\"1\">
      <img src=\"{{ asset('assets/img/front/formations01.jpg') }}\" alt=\"\">
      <div class=\"formationTitle\">
        Formation Année 1
      </div>
    </div>

    <div class=\"form form2\" data-nbform=\"2\">
      <img src=\"{{ asset('assets/img/front/formations02.jpg') }}\" alt=\"\">
      <div class=\"formationTitle\">
        Formation Année 2
      </div>
    </div>

    <div class=\"form form3\" data-nbform=\"3\">
      <img src=\"{{ asset('assets/img/front/formations03.jpg') }}\" alt=\"\">
      <div class=\"formationTitle\">
        Modules Thématiques
      </div>
    </div>

  </div>
  <div class=\"row\">
    <div class=\"formContent\" data-nbform=\"1\">
      <div class=\"patternBlue100\">
        <div class=\"blockLeft\">
          <div class=\"formHeure\">
            <img src=\"{{ asset('assets/img/front/heures.png') }}\" srcset=\"{{ asset('assets/img/front/heures@2x.png')}} 2x, {{ asset('assets/img/front/heures@3x.png')}} 3x\" alt=\"heures\">
            <div class=\"leftText\">
              <h3>Nombres d’heures</h3>
              <p>À venir</p>
            </div>
          </div>
          <div class=\"formPrix\">
            <img src=\"{{ asset('assets/img/front/tarifs.png') }}\" srcset=\"{{ asset('assets/img/front/tarifs@2x.png')}} 2x, {{ asset('assets/img/front/tarifs@3x.png')}} 3x\" alt=\"tarifs\">
            <div class=\"leftText\">
              <h3>Tarifs</h3>
              <p>À venir</p>
            </div>
          </div>
        </div>
        <div class=\"blockRight\">
          <div class=\"formDetail\">
            <h3>Les cours</h3>
            <p>• Des documents techniques et méthodologiques (analyse d’une marche normale, la détection, la marche à caractère...)</p>
            <p>• 6 ateliers de plusieurs jours chacun abordant des thématiques spécifiques (le pré cinéma, le layout, la pixillation...)</p>
            <h3>Les exercices</h3>
            <p>• 20 exercices d’animation ,répartis sur 8 mois, parcourant les problématiques fondamentales de l’animation (anticipation/action/réaction, lourd/léger, locomotions, acting...)</p>
            <p>• 6 exercices de storyboard initial (nomenclature et découpage, découpage d’un dialogue à deux protagonistes, découpage sur une adaptation de récit petite enfance...)</p>
            <h3>Notre objectif</h3>
            <p>Les 3 buts principaux à atteindre à l’issue de la  première année seront :</p>
            <p>• La constitution d’un book (niveau concours d’entrée aux écoles d’animation).</p>
            <p>• La réalisation d’un film personnel en animation de 30 secondes, sonorisé.</p>
            <p>• La réalisation d’une animatique de 2 minutes, sonorisée, sur un projet personnel.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"{{ path('subscription_form') }}\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
    <div class=\"formContent\" data-nbform=\"2\">
      <div class=\"patternBlue100\">
        <div class=\"blockLeft\">
          <div class=\"formHeure\">
            <img src=\"{{ asset('assets/img/front/heures.png') }}\" srcset=\"{{ asset('assets/img/front/heures@2x.png')}} 2x, {{ asset('assets/img/front/heures@3x.png')}} 3x\" alt=\"heures\">
            <div class=\"leftText\">
              <h3>Nombres d’heures</h3>
              <p>À venir</p>
            </div>
          </div>
          <div class=\"formPrix\">
            <img src=\"{{ asset('assets/img/front/tarifs.png') }}\" srcset=\"{{ asset('assets/img/front/tarifs@2x.png')}} 2x, {{ asset('assets/img/front/tarifs@3x.png')}} 3x\" alt=\"tarifs\">
            <div class=\"leftText\">
              <h3>Tarifs</h3>
              <p>À venir</p>
            </div>
          </div>
        </div>
        <div class=\"blockRight\">
          <div class=\"formDetail\">
            <h3>Les cours</h3>
            <p>Cette deuxième année poursuit et approfondit toutes les thématiques abordées en première année, en mettant l’accent sur la narration et la mise en scène :</p>
            <p>• Des documents techniques et méthodologiques (exposition compensée, locomotions animales, la synchronisation labiale...)</p>
            <h3>Les exercices</h3>
            <p>• 6 exercices narratifs d’animation (entre 5 et 8 séances chacun) exigeant un découpage préalable (autoportrait en mouvement, interactions, acting/lipsync...)</p>
            <p>• 5 exercices de storyboard (entre 5 et 10 séances chacun) avec animatique et son (récit parallèle, dialogue à plus de 2 protagonistes, exercice de storyboard en condition de production...)</p>
            <p>• 6 ateliers de plusieurs jours chacun abordant des thématiques spécifiques (réalisation d’un film d’animation de plus de 2 minutes, autres techniques du cinéma d’animation, portfolio…) </p>
            <h3>Notre objectif</h3>
            <p>Le but de cette 2ème année est d’avoir atteint le niveau pour postuler en tant qu’animateur 2D ou storyboarder dans un studio d’animation.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"{{ path('subscription_form') }}\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
    <div class=\"formContent\" data-nbform=\"3\">
      <div class=\"patternBlue100 moduleContainer\">
        <div class=\"blockLeftModule \">
          <div class=\"blockModule\">
            <h3>II – Locomotions humaines</h3>
            <p>Ce module d’adresse à des personnes ayant déjà quelques notions fondamentales d’animation et ayant une bonne pratique du dessin.<br>
            Les exercices explorent les modes de locomotions humaines ( marche, marche à caractère, marche contrainte, course, changements d’allure de locomotion). <br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>IV – Interactions</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
            Les exercices traitent des interactions entre personnages humains ou animaux (danse, combat) et nécessitent une planification préalable ( prédécoupage, détection, feuille d’exposition).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>VI – Pour débuter en storyboard</h3>
            <p>Ce module s’adresse aux débutants en storyboard ayant une pratique ancienne et régulière du dessin. <br>
              Les exercices et les cours les accompagnant énoncent les règles principales de la grammaire cinématographique appliquée au découpage et à la mise en scène en animation.<br>
              Certains des exercices seront finalisés sous forme d’animatiques avec son.<br>
              L’ensemble des exercices se fait en 16 jours complets de travail (journées de 6h) et ils sont de difficulté 2 et 3.</p>
              <p class=\"modulePrice\">690€</p>
          </div>
        </div>
        <div class=\"blockRightModule\">
          <div class=\"blockModule\">
            <h3>I – Pour débuter en animation</h3>
            <p>Ce module s’adresse aux débutants en animation ayant une pratique ancienne et régulière du dessin.<br>
            Les exercices proposés abordent les principes fondamentaux de l’animation ( poids, matières, conservation des volumes et proportions, anticipation/action/réaction).<br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 1 et 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>

          <div class=\"blockModule\">
            <h3>III – Locomotions animales</h3>
            <p>Ce module d’adresse à des personnes connaissant déjà les principes fondamentaux de l’animation et ayant une pratique ancienne et quotidienne du dessin.<br>
            Les exercices parcourent les différents modes de locomotions animales ( marche quadrupède, amble,  trot, galop, vol des oiseaux).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 3.</p>
            <p class=\"modulePrice\">590€</p>
          </div>

          <div class=\"blockModule\">
            <h3>V – Acting/Lipsync</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
              Les exercices nécessitent une planification préalable (pré découpage, détection, feuille d’exposition), et abordent les problématiques d’animation de personnages dialoguant. <br>
            L’ensemble des exercices se fait en 18 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>

          <div class=\"blockModule\">
            <p>Mode de fonctionnement</p>
            <p>Chaque exercice réalisé me sera envoyé, sur le site, sous forme de fichier, et je ferai un retour des corrections ou modifications à effectuer avant d’obtenir la version finale validée du travail.</p>
            <p>Une présentation et des documents techniques accompagnent chaque exercice.</p>
          </div>
        </div>
        <div class=\"blockModuleMobile\">
          <div class=\"blockModule\">
            <h3>I – Pour débuter en animation</h3>
            <p>Ce module s’adresse aux débutants en animation ayant une pratique ancienne et régulière du dessin.<br>
            Les exercices proposés abordent les principes fondamentaux de l’animation ( poids, matières, conservation des volumes et proportions, anticipation/action/réaction).<br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 1 et 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>II – Locomotions humaines</h3>
            <p>Ce module d’adresse à des personnes ayant déjà quelques notions fondamentales d’animation et ayant une bonne pratique du dessin.<br>
            Les exercices explorent les modes de locomotions humaines ( marche, marche à caractère, marche contrainte, course, changements d’allure de locomotion). <br>
            L’ensemble des exercices se fait en 15 jours complets de travail (journées de 6h) et ils sont de difficulté 2.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>III – Locomotions animales</h3>
            <p>Ce module d’adresse à des personnes connaissant déjà les principes fondamentaux de l’animation et ayant une pratique ancienne et quotidienne du dessin.<br>
            Les exercices parcourent les différents modes de locomotions animales ( marche quadrupède, amble,  trot, galop, vol des oiseaux).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 3.</p>
            <p class=\"modulePrice\">590€</p>
          </div>
          <div class=\"blockModule\">
            <h3>IV – Interactions</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
            Les exercices traitent des interactions entre personnages humains ou animaux (danse, combat) et nécessitent une planification préalable ( prédécoupage, détection, feuille d’exposition).<br>
            L’ensemble des exercices se fait en 13 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>V – Acting/Lipsync</h3>
            <p>Ce module s’adresse à de bons dessinateurs ayant une pratique préalable de l’animation.<br>
              Les exercices nécessitent une planification préalable (pré découpage, détection, feuille d’exposition), et abordent les problématiques d’animation de personnages dialoguant. <br>
            L’ensemble des exercices se fait en 18 jours complets de travail (journées de 6h) et ils sont de difficulté 4.</p>
            <p class=\"modulePrice\">490€</p>
          </div>
          <div class=\"blockModule\">
            <h3>VI – Pour débuter en storyboard</h3>
            <p>Ce module s’adresse aux débutants en storyboard ayant une pratique ancienne et régulière du dessin. <br>
              Les exercices et les cours les accompagnant énoncent les règles principales de la grammaire cinématographique appliquée au découpage et à la mise en scène en animation.<br>
              Certains des exercices seront finalisés sous forme d’animatiques avec son.<br>
              L’ensemble des exercices se fait en 16 jours complets de travail (journées de 6h) et ils sont de difficulté 2 et 3.</p>
              <p class=\"modulePrice\">690€</p>
          </div>
          <div class=\"blockModule\">
            <p>Mode de fonctionnement</p>
            <p>Chaque exercice réalisé me sera envoyé, sur le site, sous forme de fichier, et je ferai un retour des corrections ou modifications à effectuer avant d’obtenir la version finale validée du travail.</p>
            <p>Une présentation et des documents techniques accompagnent chaque exercice.</p>
          </div>
        </div>

      </div>
      <div class=\"bg-yellow\">
        <a href=\"{{ path('subscription_form') }}\" class=\"bg-darkBlue\">M'inscrire à la formation</a>
      </div>
    </div>
  </div>
</div>
<div class=\"container exerciceGratuit\" id=\"exerciceGratuit\">
  <div class=\"row\">
    <div class=\"col-lg-6 exerciceContent order-lg-1\">
      <p class=\"overTitle text-blue\">un exercice gratuit</p>
      <h2>Vous voulez tester vos capacités ?<span class=\"text-yellow\"> •</span></h2>
      <p class=\"font-bold\">Je vous propose un exercice afin de tester vos capacités en dessin et en animation 2D…</p>
      <p>Cet exercice ludique servira d’une part à ce que l’élève puisse s’auto-évaluer quant à son aisance à l’animation, d’autre part il me servira à identifier le niveau de dessin du futur étudiant et son ressenti
      du mouvement et de l’acting.</p>
      <p>Mon retour montrera à l’élève le mode de fonctionnement que je propose et lui permettra d’évaluer la pertinence de la correction.</p>
      <p>Ce sera une manière de faire connaissance autour de l’enjeu qui nous réunira et d’apporter d’éventuels ajustements personnalisés du programme et des exercices.</p>
      <p>Cependant, il n’est nullement obligatoire de le faire avant de s’inscrire.</p>
      <p>C’est un exercice de difficulté moyenne, admettant éventuellement un traitement cartoon.</p>
      <p>Y sont présentes les problématiques de poids, d’accélération, d’anticipation, action, réaction, d’amortis, conservation des tailles et proportions etc.</p>
      <p>Il peut être réalisé en une trentaine de dessins et peut se finaliser en deux ou trois journées.</p>
      <p>Il me sera envoyé sur le site sous forme d’un export vidéo n’excédant pas 10 Mo et je répondrai par un commentaire, point par point, accompagné d’une animation de l’exercice.</p>
      <div class=\"cstBtnBorderTrame text-yellow border-yellow\" id=\"freeExe\">consulter l’énoncé de l’exercice</div>
    </div>
    <div class=\"col-lg-6 exerciceImg order-first order-lg-2\">
      <img src=\"{{ asset('assets/img/front/jump_def2.jpg') }}\" alt=\"\">
    </div>
    <div class=\"col-12 order-lg-3\">
      <p class=\"text-blue font-bold exerciceCorrige\">Je souhaite recevoir le corrigé de mon exercice, j’envoie mon export vidéo via <a class=\"text-darkBlue\" href=\"{{ path('public_home') }}#contact\">le formulaire de contact en page d’accueil</a></p>
    </div>
  </div>
</div>
<div class=\"popUpExe {% if freeExe %}shown{% endif %}\">

  <div class=\"container\">
    <div class=\"popUpClose\">
      <span></span>
      <span></span>
    </div>
    {% if freeExe %}
      <a class=\"linkPdfFreeExe\" target=\"_blank\" href=\"{{ asset('assets/pdf/exercice_gratuit.pdf') }}\">Télécharger l'exercice gratuit.</a>
    {% else %}
      <p class=\"text-white text-center\">Pour consulter l’énoncé de l’exercice, veuillez renseigner votre adresse email</p>
      {{ form_start(form) }}
        <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>

        <div class=\"row\">
            <div class=\"col d-flex\">
                {{ form_widget(form.email) }}
                <button type=\"submit\" name=\"button\" class=\"cstSubmit\"> <img src=\"{{ asset('assets/img/front/submit.png') }}\" srcset=\"{{ asset('assets/img/front/submit@2x.png')}} 2x, {{ asset('assets/img/front/submit@3x.png')}} 3x\" alt=\"fleche\"> </button>
            </div>
        </div>
      {{ form_end(form) }}
    {% endif %}


  </div>
</div>
{% endblock %}
", "public/formation.html.twig", "/Applications/MAMP/htdocs/aaa/templates/public/formation.html.twig");
    }
}
