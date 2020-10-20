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

/* public/index.html.twig */
class __TwigTemplate_79715835297444b13a4367be2bbe7a2419a9f27ecea42aa073380d5fed5e03e9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        // line 2
        $context["page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/index.html.twig", 1);
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

        echo "L’animateur autodidacte accompagné";
        
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
        echo "<div class=\"container\">
  <div class=\"row presentation\">
    <div class=\"col-12 col-lg-6\">
      <p class=\"overTitle text-blue\">à qui s'adresse ce site ?</p>
      <h2 >L’animateur autodidacte <br>accompagné<span class=\"text-yellow\"> •</span></h2>
      <p><span class=\"font-bold\">Ce site s’adresse à des jeunes dessinateurs désirant devenir animateurs ou storyboarders, et plus largement souhaitant travailler dans les métiers du cinéma d’animation.</span></p>
      <p>Cet apprentissage se fera de manière progressive, à travers des exercices de difficultés croissantes, et sera <span class=\"font-bold\">supervisé par un professionnel du cinéma d’animation</span>  assurant  un <span class=\"font-bold\">accompagnement personnalisé et permanent pour chaque étudiant.</span></p>
      <ul>
        <li>• Pour des élèves souhaitant <span class=\"font-bold\">un cursus complet de formation,</span> un programme détaillé sur deux ans en animation et storyboard est proposé, ainsi qu’un regard professionnel sur des registres essentiels comme leur pratique quotidienne du dessin,  la constitution de leur book, l’enrichissement de leurs références culturelles touchant au cinéma d’animation et aux expressions artistiques en général.</li>
        <li>• Pour des élèves souhaitant <span class=\"font-bold\">une préparation aux concours d’entrée dans une école d’animation,</span> le cursus le cursus de 1 ère année de la formation aboutira à la constitition d’un book complet du niveau requis pour ces examens.</li>
        <li>• Enfin, pour des élèves qui souhaitent <span class=\"font-bold\">une pratique de l’animation ou du storyboard de manière plus ponctuelle</span> ou des <span class=\"font-bold\">jeunes professionnels souhaitant approfondir leurs conaissances,</span> je propose des modules de thématiques de travail (locomotions, acting/lipsync, le corps en mouvement, exercices narratifs etc.). </li>
      </ul>
      <p>Quelle que soit la formule choisie, <span class=\"font-bold\">un prérequis incontournable est demandé : une pratique préalable assidue du dessin.</span></p>
    </div>
    <div class=\"col-12 col-lg-6\">
      <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/accueil.jpg"), "html", null, true);
        echo "\" alt=\"\">
      <div class=\"legendeImg\">
        <p class=\"m-0\"><span class=\"font-bold\">IMPORTANT : </span>chaque exercice proposé est une création originale ayant été pratiqué de très nombreuses fois par des centaines d’étudiants ; il est donc proposé une durée optimale de réalisation pour chaque exercice et un niveau de difficulté allant de 1 (facile) à 5 (difficile). Les critères de difficulté seront :<br>
          • Pour l’animation : la complexité de l’action, l’animation en perspective, la présence de plusieurs personnages à animer, les interactions, la longueur du timing à animer.<br>
          • Pour le storyboard : la complexité des actions, le nombre de personnages dans les séquences à mettre en scène, la complexité de la structure narrative (récits parallèles, va-et-vient temporels) .</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row bg-yellow suivi\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <h2 class=\"text-white\">Un suivi personnalisé<span class=\"text-white\"> •</span></h2>
        </div>
      </div>
      <div class=\"row\" id=\"suivi\">
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_exercices.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_exercices@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_exercices@3x.png"), "html", null, true);
        echo " 3x\" alt=\"exercices\" class=\"pictoExe\">
          </div>
          <p><span class=\"font-bold\">1• Accès aux exercices</span> et cours depuis le site</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_envoi.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_envoi@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_envoi@3x.png"), "html", null, true);
        echo " 3x\" alt=\"mail\" class=\"pictoEnvoi\">
          </div>
          <p><span class=\"font-bold\">2• Échange par mail</span> avant chaque exercice</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_video.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_video@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_video@3x.png"), "html", null, true);
        echo " 3x\" alt=\"video\">
          </div>
          <p><span class=\"font-bold\">3• Envoi d’un premier export</span> vidéo de votre travail</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_corrige.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_corrige@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_corrige@3x.png"), "html", null, true);
        echo " 3x\" alt=\"corrigé\">
          </div>
          <p><span class=\"font-bold\">4• Envoi d’un corrigé détaillé</span> par votre formateur</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_fin.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_fin@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_fin@3x.png"), "html", null, true);
        echo " 3x\" alt=\"fin\">
          </div>
          <p><span class=\"font-bold\">5• Poursuite et fin du travail.</span> Envoi de votre exercice fini par export vidéo</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_debrief.png"), "html", null, true);
        echo "\"  srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_debrief@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_debrief@3x.png"), "html", null, true);
        echo " 3x\" alt=\"debrief\">
          </div>
          <p><span class=\"font-bold\">6• Débrief final</span> et passage à l’exercice suivant</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row dotPattern\">
    <div class=\"col-12 text-center suiviBtnContainer\">
      <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "/#exerciceGratuit\" class=\"suiviBtn\">voir le test gratuit</a>
    </div>
  </div>
  <div class=\"row bg-darkGrey formations\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <p class=\"overTitle text-blue\">il existe une formation adaptée pour chacun</p>
          <div class=\"\">
            <h2 class=\"text-white\">Nos différentes formations<span class=\"text-yellow\"> •</span></h2>
          </div>
          <a href=\"#\" class=\"cstBtnBorder text-yellow border-yellow\">voir plus</a>
        </div>
      </div>
        <div class=\"row formationRow\">
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer\">
                <div class=\"front\">
                  <p class=\"text-center\">Formation Année 1</p>
                </div>
                <div class=\"back\">
                  <div class=\"\">
                    <p>Ce programme est un apprentissage des métiers de l’animation au contenu équivalent à celui des « Prépas Animation ».</p>
                    <p>Il concerne donc aussi bien les élèves qui veulent constituer un book pertinent en vue de préparer les
                    concours d’entrée aux écoles d’animation, que les élèves souhaitant entamer un parcours autonome
                    accompagné en 2 ans.</p>
                  </div>
                  <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer\">
                <div class=\"front\">
                  <p class=\"text-center\">Formation Année 2</p>
                </div>
                <div class=\"back\">
                  <div class=\"\">
                    <p>Cette formation est la suite de l’apprentissage initié dans le programme Année 1.</p>
                    <p>Toutes les problématiques techniques et narratives déjà abordées l’année précédente seront approfondies et une plus large part du planning sera consacrée aux réalisations et aux projets personnels.</p>
                    <p>Elle concerne donc les élèves ayant déjà suivi la formation Année 1, mais aussi des étudiants ayant un niveau et une pratique préalable leur permettant d’aborder directement cette deuxième année.</p>
                  </div>
                  <a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer deco\">
                <div class=\"front \">
                  <p class=\"text-center\">Modules thématiques</p>
                </div>
                <div class=\"back\">
                    <p>Certains de ces modules sont accessibles à des débutants ayant déjà un certain niveau de dessin,
                    d’autres s’adressent à des dessinateurs confirmés qui veulent se perfectionner en animation ou en
                    storyboard.</p>
                  <a href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid position-relative\">
  <div class=\"travailDot\"></div>
  <div class=\"container travail\">
    <div class=\"row\">
      <div class=\"col-12\">
        <p class=\"overTitle text-blue\">une grande rigueur</p>
        <h2>Le travail autonome<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-12 col-lg-6\">
        <p>Il demande une grande rigueur de la part de l’étudiant, lequel devra obligatoirement établir un emploi du temps journalier en tenant compte des éléments ci-dessous :</p>
        <p>En plus des exercices d’animation et de storyboard ici proposés, l’élève devra :</p>
        <ul>
          <li>Tenir des carnets de croquis à travers une production journalière de dessins , quelle qu’en soit la durée de réalisation (croquis rapide ou dessin plus détaillé)</li>
          <li>Explorer de manière autonome des logiciels 2D et 3D récurremment utilisés dans les métiers du cinéma d’animation ( Photoshop, Animate, ToonBoom, TvPaint, Blender etc.)</li>
          <li>Fréquenter des cours de dessin de modèle vivant (en atelier ou en cours du soir).</li>
        </ul>
        <p>NB : un bilan régulier sera établi sur ces points avec le formateur.</p>
      </div>
      <div class=\"col-12 col-lg-6\">
        <h3>Planning journalier</h3>
        <p>L’étudiant devra disposer d’un lieu calme pour travailler.</p>
        <p>Les séances de travail conseillées sont de 3 heures continues, une le matin et une l’après-midi, les cinq jours ouvrables de la semaine.</p>
        <h3>Sur l'année</h3>
        <p>Le document intitulé « <span class=\"btnPlanning\">Planning idéal</span> » propose un emploi du temps de 1068 heures de formation allant du 1er /09/2021 au 30/06/2021, et respectant les congés du calendrier scolaire.</p>
      </div>
    </div>
    <div class=\"row prerequis\">
      <div class=\"col-12\">
        <h2>Prérequis obligatoires<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_planning.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_planning@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_planning@3x.png"), "html", null, true);
        echo " 3x\" alt=\"planning\">
        <p class=\"text-center\"><span class=\"font-bold\">1•</span> Mise en place d’un <span class=\"font-bold\">planning quotidien</span> à respecter scrupuleusement </p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_modelevivant.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_modelevivant@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_modelevivant@3x.png"), "html", null, true);
        echo " 3x\" alt=\"Modele vivant\">
        <p class=\"text-center\"><span class=\"font-bold\">2•</span> Participer à des séances de <span class=\"font-bold\">modèle vivant</span> au moins une fois par semaine</p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_croquis.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_croquis@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_croquis@3x.png"), "html", null, true);
        echo " 3x\" alt=\"Croquis\">
        <p class=\"text-center\"><span class=\"font-bold\">3• Pratique quotidienne de croquis</span> sur carnets : croquis en extérieurs, dessins d’observation, paysages, perspectives, dessin d’imagination…</p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_autoformation.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_autoformation@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_autoformation@3x.png"), "html", null, true);
        echo " 3x\" alt=\"autoformation\">
        <p class=\"text-center\"><span class=\"font-bold\">4• S’autoformer à certains logiciels</span> de base utilisés pour le film d’animation tels que : Photoshop, Première, TOONBOOM Storyboard Pro, Audition, TVpaint.</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row bg-yellow h-20\">

  </div>
  <div class=\"row bg-crayonne\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-auto tabHide\">
          <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/dessin_rouages.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/dessin_rouages@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/dessin_rouages@3x.png"), "html", null, true);
        echo " 3x\" alt=\"dessin\">
        </div>
        <div class=\"col apostrophe\">
          <p>Je porterai un regard constant avec des retours réguliers sur les pratiques de dessin de modèle vivant, croquis et j’apporterai une aide en cas de problèmatiques rencontrées sur les logiciels.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container prof\">
  <div class=\"row\">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">votre professeur</p>
      <h2>Qui suis-je ?<span class=\"text-yellow\"> •</span></h2>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"quisuisje\">
      <div class=\"autoportrait\">
        <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/autoportrait.jpg"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/autoportrait@2x.jpg"), "html", null, true);
        echo " 2x\" alt=\"alexis madrid\">
      </div>
      <div class=\"bg-darkGrey carouselContainer\">
        <p class=\"text-yellow\">Alexis Madrid</p>
        <div class=\"owl-carousel madridCarousel owl-theme\">
          <div class=\"item\">
            <h3>1986</h3>
             <p>Cofondateur de FLIP-BOOK, Bordeaux, association 1901 pour la promotion du cinéma d’animation.</p>
          </div>
          <div class=\"item\">
            <h3>1987</h3>
            <p>1er poste d’animateur traditionnel à JINGLE, Angoulême.</p>
          </div>
          <div class=\"item\">
            <h3>1989</h3>
            <p>Arrivée à LA FABRIQUE (Montpellier) au poste d’animateur traditionnel pour 8 ans.</p>
          </div>
          <div class=\"item\">
            <h3>1998</h3>
            <p>1er poste de storyboarder à ALPHANIM, Paris (futur GAUMONT Animation).</p>
          </div>
          <div class=\"item\">
            <h3>2001</h3>
            <p>Arrivée à l’EMCA, Angoulême comme formateur en animation traditionnelle durant 20 ans.</p>
          </div>
          <div class=\"item\">
            <h3>2011</h3>
            <p>Poste de lead storyboard sur long métrage d’animation COULEUR DE PEAU MIEL.</p>
          </div>
          <div class=\"item\">
            <h3>2017</h3>
            <p>Réalisation (en cours) du court-métrage DUEL À ÉTRETAT.</p>
          </div>
        </div>
        <div class=\"bandSquareContainer\">
          <div class=\"squareBand\">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid videoContainer\">
  <div class=\"videoDot\"></div>
  <div class=\"row\">
    <div class=\"container\">
      <div class=\"col-12\">
        <p class=\"overTitle text-blue\">une question ?</p>
        <h2>Me contacter<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-12 video text-right\">
        <p>Travaux d’élèves sur les exercices proposés</p>
        <video muted controls>
          <source src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/montage_travaux_eleves.mp4"), "html", null, true);
        echo "\"
          type=\"video/mp4\">
          Sorry, your browser doesn't support embedded videos.
        </video>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid contact\" id=\"contact\">
  <div class=\"row bg-darkGrey \">
    <div class=\"container formContact\">
      <div class=\"row\">
        ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "session", [], "any", false, false, false, 373), "flashbag", [], "any", false, false, false, 373), "get", [0 => "success"], "method", false, false, false, 373));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 374
            echo "             <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <span class=\"alert-icon\"><i class=\"ni ni-like-2\"></i></span>
            <span class=\"alert-text\">";
            // line 376
            echo $context["flashMessage"];
            echo "</span>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "      </div>
      ";
        // line 383
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), 'form_start');
        echo "
        <div class=\"my-custom-class-for-errors\">
            ";
        // line 385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), 'errors');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"col-12 col-lg-4 inputContainer\">
                ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "lastname", [], "any", false, false, false, 390), 'widget');
        echo "
            </div>
            <div class=\"col-12 col-lg-4 inputContainer\">
                ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "firstname", [], "any", false, false, false, 393), 'widget');
        echo "
            </div>
            <div class=\"col-12 col-lg-4 inputContainer\">
                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "email", [], "any", false, false, false, 396), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row contactSelect\">
          <div class=\"col-12\">
            ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "select", [], "any", false, false, false, 401), 'widget');
        echo "
          </div>
        </div>
        <div class=\"row messageInput\">
          <div class=\"col-12\">
            ";
        // line 406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "message", [], "any", false, false, false, 406), 'widget');
        echo "
          </div>
        </div>
        <div class=\"row contactVideo\">
          <div class=\"col-12 text-center\">
            ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "video", [], "any", false, false, false, 411), 'widget');
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\">
            <button type=\"submit\" name=\"button\" class=\"cstSubmit\">envoyer</button>
          </div>
        </div>
      ";
        // line 419
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), 'form_end');
        echo "

    </div>
  </div>
</div>
<div class=\"popUpPlanning\">
  <div class=\"popUpClose\">
    <span></span>
    <span></span>
  </div>
  <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/PLANNING_IDEAL_PREPA.jpg"), "html", null, true);
        echo "\" alt=\"planning\">
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 434
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 435
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 437
        if ((isset($context["anchor"]) || array_key_exists("anchor", $context))) {
            // line 438
            echo "  <script type=\"text/javascript\">
    document.addEventListener(\"DOMContentLoaded\", function(event) {
            if(document.getElementById(\"";
            // line 440
            echo twig_escape_filter($this->env, (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 440, $this->source); })()), "html", null, true);
            echo "\")){
                location.href = \"#";
            // line 441
            echo twig_escape_filter($this->env, (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 441, $this->source); })()), "html", null, true);
            echo "\"
            }
        });
  </script>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 441,  690 => 440,  686 => 438,  684 => 437,  679 => 435,  669 => 434,  656 => 429,  643 => 419,  632 => 411,  624 => 406,  616 => 401,  608 => 396,  602 => 393,  596 => 390,  588 => 385,  583 => 383,  580 => 382,  568 => 376,  564 => 374,  560 => 373,  545 => 361,  486 => 307,  458 => 286,  437 => 272,  426 => 268,  415 => 264,  404 => 260,  360 => 219,  342 => 204,  322 => 187,  291 => 159,  275 => 150,  249 => 131,  223 => 112,  197 => 93,  171 => 74,  145 => 55,  109 => 22,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/base.html.twig' %}
{% set page = \"home\" %}

{% block title %}L’animateur autodidacte accompagné{% endblock %}

{% block main %}
<div class=\"container\">
  <div class=\"row presentation\">
    <div class=\"col-12 col-lg-6\">
      <p class=\"overTitle text-blue\">à qui s'adresse ce site ?</p>
      <h2 >L’animateur autodidacte <br>accompagné<span class=\"text-yellow\"> •</span></h2>
      <p><span class=\"font-bold\">Ce site s’adresse à des jeunes dessinateurs désirant devenir animateurs ou storyboarders, et plus largement souhaitant travailler dans les métiers du cinéma d’animation.</span></p>
      <p>Cet apprentissage se fera de manière progressive, à travers des exercices de difficultés croissantes, et sera <span class=\"font-bold\">supervisé par un professionnel du cinéma d’animation</span>  assurant  un <span class=\"font-bold\">accompagnement personnalisé et permanent pour chaque étudiant.</span></p>
      <ul>
        <li>• Pour des élèves souhaitant <span class=\"font-bold\">un cursus complet de formation,</span> un programme détaillé sur deux ans en animation et storyboard est proposé, ainsi qu’un regard professionnel sur des registres essentiels comme leur pratique quotidienne du dessin,  la constitution de leur book, l’enrichissement de leurs références culturelles touchant au cinéma d’animation et aux expressions artistiques en général.</li>
        <li>• Pour des élèves souhaitant <span class=\"font-bold\">une préparation aux concours d’entrée dans une école d’animation,</span> le cursus le cursus de 1 ère année de la formation aboutira à la constitition d’un book complet du niveau requis pour ces examens.</li>
        <li>• Enfin, pour des élèves qui souhaitent <span class=\"font-bold\">une pratique de l’animation ou du storyboard de manière plus ponctuelle</span> ou des <span class=\"font-bold\">jeunes professionnels souhaitant approfondir leurs conaissances,</span> je propose des modules de thématiques de travail (locomotions, acting/lipsync, le corps en mouvement, exercices narratifs etc.). </li>
      </ul>
      <p>Quelle que soit la formule choisie, <span class=\"font-bold\">un prérequis incontournable est demandé : une pratique préalable assidue du dessin.</span></p>
    </div>
    <div class=\"col-12 col-lg-6\">
      <img src=\"{{ asset('assets/img/front/accueil.jpg')}}\" alt=\"\">
      <div class=\"legendeImg\">
        <p class=\"m-0\"><span class=\"font-bold\">IMPORTANT : </span>chaque exercice proposé est une création originale ayant été pratiqué de très nombreuses fois par des centaines d’étudiants ; il est donc proposé une durée optimale de réalisation pour chaque exercice et un niveau de difficulté allant de 1 (facile) à 5 (difficile). Les critères de difficulté seront :<br>
          • Pour l’animation : la complexité de l’action, l’animation en perspective, la présence de plusieurs personnages à animer, les interactions, la longueur du timing à animer.<br>
          • Pour le storyboard : la complexité des actions, le nombre de personnages dans les séquences à mettre en scène, la complexité de la structure narrative (récits parallèles, va-et-vient temporels) .</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row bg-yellow suivi\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <h2 class=\"text-white\">Un suivi personnalisé<span class=\"text-white\"> •</span></h2>
        </div>
      </div>
      <div class=\"row\" id=\"suivi\">
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_exercices.png')}}\" srcset=\"{{ asset('assets/img/front/icone_exercices@2x.png')}} 2x, {{ asset('assets/img/front/icone_exercices@3x.png')}} 3x\" alt=\"exercices\" class=\"pictoExe\">
          </div>
          <p><span class=\"font-bold\">1• Accès aux exercices</span> et cours depuis le site</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_envoi.png')}}\" srcset=\"{{ asset('assets/img/front/icone_envoi@2x.png')}} 2x, {{ asset('assets/img/front/icone_envoi@3x.png')}} 3x\" alt=\"mail\" class=\"pictoEnvoi\">
          </div>
          <p><span class=\"font-bold\">2• Échange par mail</span> avant chaque exercice</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_video.png')}}\" srcset=\"{{ asset('assets/img/front/icone_video@2x.png')}} 2x, {{ asset('assets/img/front/icone_video@3x.png')}} 3x\" alt=\"video\">
          </div>
          <p><span class=\"font-bold\">3• Envoi d’un premier export</span> vidéo de votre travail</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_corrige.png')}}\" srcset=\"{{ asset('assets/img/front/icone_corrige@2x.png')}} 2x, {{ asset('assets/img/front/icone_corrige@3x.png')}} 3x\" alt=\"corrigé\">
          </div>
          <p><span class=\"font-bold\">4• Envoi d’un corrigé détaillé</span> par votre formateur</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_fin.png')}}\" srcset=\"{{ asset('assets/img/front/icone_fin@2x.png')}} 2x, {{ asset('assets/img/front/icone_fin@3x.png')}} 3x\" alt=\"fin\">
          </div>
          <p><span class=\"font-bold\">5• Poursuite et fin du travail.</span> Envoi de votre exercice fini par export vidéo</p>
        </div>
        <div class=\"col-6 col-md-4 col-lg-2 pictoContainer\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 111 111\">
            <defs>
              <style>.cls-1{fill:none;stroke-miterlimit:10;}</style>
            </defs>
            <g id=\"Calque_2\" data-name=\"Calque 2\">
              <path stroke=\"#fff\" stroke-with=\"1px\" class=\"cls-1\"  d=\"
                      M 55, 55
                      m -55, 0
                      a 55,55 0 1,0 110,0
                      a 55,55 0 1,0 -110,0
                      \">
              </g>
            </svg>
          <div class=\"pictoSuivi\">
            <img src=\"{{ asset('assets/img/front/icone_debrief.png')}}\"  srcset=\"{{ asset('assets/img/front/icone_debrief@2x.png')}} 2x, {{ asset('assets/img/front/icone_debrief@3x.png')}} 3x\" alt=\"debrief\">
          </div>
          <p><span class=\"font-bold\">6• Débrief final</span> et passage à l’exercice suivant</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row dotPattern\">
    <div class=\"col-12 text-center suiviBtnContainer\">
      <a href=\"{{ path('public_formation') }}/#exerciceGratuit\" class=\"suiviBtn\">voir le test gratuit</a>
    </div>
  </div>
  <div class=\"row bg-darkGrey formations\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <p class=\"overTitle text-blue\">il existe une formation adaptée pour chacun</p>
          <div class=\"\">
            <h2 class=\"text-white\">Nos différentes formations<span class=\"text-yellow\"> •</span></h2>
          </div>
          <a href=\"#\" class=\"cstBtnBorder text-yellow border-yellow\">voir plus</a>
        </div>
      </div>
        <div class=\"row formationRow\">
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer\">
                <div class=\"front\">
                  <p class=\"text-center\">Formation Année 1</p>
                </div>
                <div class=\"back\">
                  <div class=\"\">
                    <p>Ce programme est un apprentissage des métiers de l’animation au contenu équivalent à celui des « Prépas Animation ».</p>
                    <p>Il concerne donc aussi bien les élèves qui veulent constituer un book pertinent en vue de préparer les
                    concours d’entrée aux écoles d’animation, que les élèves souhaitant entamer un parcours autonome
                    accompagné en 2 ans.</p>
                  </div>
                  <a href=\"{{ path('public_formation') }}\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer\">
                <div class=\"front\">
                  <p class=\"text-center\">Formation Année 2</p>
                </div>
                <div class=\"back\">
                  <div class=\"\">
                    <p>Cette formation est la suite de l’apprentissage initié dans le programme Année 1.</p>
                    <p>Toutes les problématiques techniques et narratives déjà abordées l’année précédente seront approfondies et une plus large part du planning sera consacrée aux réalisations et aux projets personnels.</p>
                    <p>Elle concerne donc les élèves ayant déjà suivi la formation Année 1, mais aussi des étudiants ayant un niveau et une pratique préalable leur permettant d’aborder directement cette deuxième année.</p>
                  </div>
                  <a href=\"{{ path('public_formation') }}\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-lg-4 formContainer\">
            <div class=\"formation\">
              <div class=\"formationContainer deco\">
                <div class=\"front \">
                  <p class=\"text-center\">Modules thématiques</p>
                </div>
                <div class=\"back\">
                    <p>Certains de ces modules sont accessibles à des débutants ayant déjà un certain niveau de dessin,
                    d’autres s’adressent à des dessinateurs confirmés qui veulent se perfectionner en animation ou en
                    storyboard.</p>
                  <a href=\"{{ path('public_formation') }}\" class=\"cstBtnBorder text-blue border-blue\">voir le detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid position-relative\">
  <div class=\"travailDot\"></div>
  <div class=\"container travail\">
    <div class=\"row\">
      <div class=\"col-12\">
        <p class=\"overTitle text-blue\">une grande rigueur</p>
        <h2>Le travail autonome<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-12 col-lg-6\">
        <p>Il demande une grande rigueur de la part de l’étudiant, lequel devra obligatoirement établir un emploi du temps journalier en tenant compte des éléments ci-dessous :</p>
        <p>En plus des exercices d’animation et de storyboard ici proposés, l’élève devra :</p>
        <ul>
          <li>Tenir des carnets de croquis à travers une production journalière de dessins , quelle qu’en soit la durée de réalisation (croquis rapide ou dessin plus détaillé)</li>
          <li>Explorer de manière autonome des logiciels 2D et 3D récurremment utilisés dans les métiers du cinéma d’animation ( Photoshop, Animate, ToonBoom, TvPaint, Blender etc.)</li>
          <li>Fréquenter des cours de dessin de modèle vivant (en atelier ou en cours du soir).</li>
        </ul>
        <p>NB : un bilan régulier sera établi sur ces points avec le formateur.</p>
      </div>
      <div class=\"col-12 col-lg-6\">
        <h3>Planning journalier</h3>
        <p>L’étudiant devra disposer d’un lieu calme pour travailler.</p>
        <p>Les séances de travail conseillées sont de 3 heures continues, une le matin et une l’après-midi, les cinq jours ouvrables de la semaine.</p>
        <h3>Sur l'année</h3>
        <p>Le document intitulé « <span class=\"btnPlanning\">Planning idéal</span> » propose un emploi du temps de 1068 heures de formation allant du 1er /09/2021 au 30/06/2021, et respectant les congés du calendrier scolaire.</p>
      </div>
    </div>
    <div class=\"row prerequis\">
      <div class=\"col-12\">
        <h2>Prérequis obligatoires<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"{{ asset('assets/img/front/icone_planning.png') }}\" srcset=\"{{ asset('assets/img/front/icone_planning@2x.png')}} 2x, {{ asset('assets/img/front/icone_planning@3x.png')}} 3x\" alt=\"planning\">
        <p class=\"text-center\"><span class=\"font-bold\">1•</span> Mise en place d’un <span class=\"font-bold\">planning quotidien</span> à respecter scrupuleusement </p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"{{ asset('assets/img/front/icone_modelevivant.png') }}\" srcset=\"{{ asset('assets/img/front/icone_modelevivant@2x.png')}} 2x, {{ asset('assets/img/front/icone_modelevivant@3x.png')}} 3x\" alt=\"Modele vivant\">
        <p class=\"text-center\"><span class=\"font-bold\">2•</span> Participer à des séances de <span class=\"font-bold\">modèle vivant</span> au moins une fois par semaine</p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"{{ asset('assets/img/front/icone_croquis.png') }}\" srcset=\"{{ asset('assets/img/front/icone_croquis@2x.png')}} 2x, {{ asset('assets/img/front/icone_croquis@3x.png')}} 3x\" alt=\"Croquis\">
        <p class=\"text-center\"><span class=\"font-bold\">3• Pratique quotidienne de croquis</span> sur carnets : croquis en extérieurs, dessins d’observation, paysages, perspectives, dessin d’imagination…</p>
      </div>
      <div class=\"col-6 col-lg-3 text-center\">
        <img src=\"{{ asset('assets/img/front/icone_autoformation.png') }}\" srcset=\"{{ asset('assets/img/front/icone_autoformation@2x.png')}} 2x, {{ asset('assets/img/front/icone_autoformation@3x.png')}} 3x\" alt=\"autoformation\">
        <p class=\"text-center\"><span class=\"font-bold\">4• S’autoformer à certains logiciels</span> de base utilisés pour le film d’animation tels que : Photoshop, Première, TOONBOOM Storyboard Pro, Audition, TVpaint.</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row bg-yellow h-20\">

  </div>
  <div class=\"row bg-crayonne\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-auto tabHide\">
          <img src=\"{{ asset('assets/img/front/dessin_rouages.png') }}\" srcset=\"{{ asset('assets/img/front/dessin_rouages@2x.png')}} 2x, {{ asset('assets/img/front/dessin_rouages@3x.png')}} 3x\" alt=\"dessin\">
        </div>
        <div class=\"col apostrophe\">
          <p>Je porterai un regard constant avec des retours réguliers sur les pratiques de dessin de modèle vivant, croquis et j’apporterai une aide en cas de problèmatiques rencontrées sur les logiciels.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container prof\">
  <div class=\"row\">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">votre professeur</p>
      <h2>Qui suis-je ?<span class=\"text-yellow\"> •</span></h2>
    </div>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"quisuisje\">
      <div class=\"autoportrait\">
        <img src=\"{{ asset('assets/img/front/autoportrait.jpg') }}\" srcset=\"{{ asset('assets/img/front/autoportrait@2x.jpg')}} 2x\" alt=\"alexis madrid\">
      </div>
      <div class=\"bg-darkGrey carouselContainer\">
        <p class=\"text-yellow\">Alexis Madrid</p>
        <div class=\"owl-carousel madridCarousel owl-theme\">
          <div class=\"item\">
            <h3>1986</h3>
             <p>Cofondateur de FLIP-BOOK, Bordeaux, association 1901 pour la promotion du cinéma d’animation.</p>
          </div>
          <div class=\"item\">
            <h3>1987</h3>
            <p>1er poste d’animateur traditionnel à JINGLE, Angoulême.</p>
          </div>
          <div class=\"item\">
            <h3>1989</h3>
            <p>Arrivée à LA FABRIQUE (Montpellier) au poste d’animateur traditionnel pour 8 ans.</p>
          </div>
          <div class=\"item\">
            <h3>1998</h3>
            <p>1er poste de storyboarder à ALPHANIM, Paris (futur GAUMONT Animation).</p>
          </div>
          <div class=\"item\">
            <h3>2001</h3>
            <p>Arrivée à l’EMCA, Angoulême comme formateur en animation traditionnelle durant 20 ans.</p>
          </div>
          <div class=\"item\">
            <h3>2011</h3>
            <p>Poste de lead storyboard sur long métrage d’animation COULEUR DE PEAU MIEL.</p>
          </div>
          <div class=\"item\">
            <h3>2017</h3>
            <p>Réalisation (en cours) du court-métrage DUEL À ÉTRETAT.</p>
          </div>
        </div>
        <div class=\"bandSquareContainer\">
          <div class=\"squareBand\">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid videoContainer\">
  <div class=\"videoDot\"></div>
  <div class=\"row\">
    <div class=\"container\">
      <div class=\"col-12\">
        <p class=\"overTitle text-blue\">une question ?</p>
        <h2>Me contacter<span class=\"text-yellow\"> •</span></h2>
      </div>
      <div class=\"col-12 video text-right\">
        <p>Travaux d’élèves sur les exercices proposés</p>
        <video muted controls>
          <source src=\"{{ asset('assets/video/montage_travaux_eleves.mp4') }}\"
          type=\"video/mp4\">
          Sorry, your browser doesn't support embedded videos.
        </video>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid contact\" id=\"contact\">
  <div class=\"row bg-darkGrey \">
    <div class=\"container formContact\">
      <div class=\"row\">
        {% for flashMessage in app.session.flashbag.get('success') %}
             <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <span class=\"alert-icon\"><i class=\"ni ni-like-2\"></i></span>
            <span class=\"alert-text\">{{ flashMessage|raw }}</span>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
         {% endfor %}
      </div>
      {{ form_start(form) }}
        <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>

        <div class=\"row\">
            <div class=\"col-12 col-lg-4 inputContainer\">
                {{ form_widget(form.lastname) }}
            </div>
            <div class=\"col-12 col-lg-4 inputContainer\">
                {{ form_widget(form.firstname) }}
            </div>
            <div class=\"col-12 col-lg-4 inputContainer\">
                {{ form_widget(form.email) }}
            </div>
        </div>
        <div class=\"row contactSelect\">
          <div class=\"col-12\">
            {{ form_widget(form.select) }}
          </div>
        </div>
        <div class=\"row messageInput\">
          <div class=\"col-12\">
            {{ form_widget(form.message) }}
          </div>
        </div>
        <div class=\"row contactVideo\">
          <div class=\"col-12 text-center\">
            {{ form_widget(form.video) }}
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\">
            <button type=\"submit\" name=\"button\" class=\"cstSubmit\">envoyer</button>
          </div>
        </div>
      {{ form_end(form) }}

    </div>
  </div>
</div>
<div class=\"popUpPlanning\">
  <div class=\"popUpClose\">
    <span></span>
    <span></span>
  </div>
  <img src=\"{{ asset('assets/img/front/PLANNING_IDEAL_PREPA.jpg') }}\" alt=\"planning\">
</div>
{% endblock %}


{% block javascripts %}
{{ parent()}}

  {% if anchor is defined %}
  <script type=\"text/javascript\">
    document.addEventListener(\"DOMContentLoaded\", function(event) {
            if(document.getElementById(\"{{anchor}}\")){
                location.href = \"#{{anchor}}\"
            }
        });
  </script>
  {% endif %}
{% endblock %}
", "public/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/public/index.html.twig");
    }
}
