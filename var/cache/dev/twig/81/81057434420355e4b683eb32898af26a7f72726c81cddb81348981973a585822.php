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

/* public/cgv.html.twig */
class __TwigTemplate_f228c1fe0d459e5578f97308ef7af4938c67a878b1d4d45f0e2a3f1fd264879f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/cgv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/cgv.html.twig"));

        $this->parent = $this->loadTemplate("public/base.html.twig", "public/cgv.html.twig", 1);
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

        echo "Conditions générales de ventes - L’animateur autodidacte accompagné";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "  <div class=\"container\">
    <div class=\"row my-5 cgv\">
      <div class=\"col-12\">

        <h1>LES FILMS DU PORT DE LA LUNE</h1>

        <p>SAS au capital de 45 000 euros<br>
        19, rue du Petit Puits, 33520 BRUGES<br>
        Téléphone : 06 48 84 65 75<br>
        Adresse mail: 3aanim@gmail.com<br>
        RCS de Bordeaux n° 825 258 585</p>

        <p>Conditions générales de vente des produits vendus sur <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a></p>
        <p>Date de dernière mise à jour : 07/08/2020</p>
        <h2>Article 1 - Objet</h2>
        <p>Les présentes conditions régissent les ventes par la société LES FILMS DU PORT DE LA LUNE de prestations de formation aux métiers du cinéma d’animation.</p>
        <h2>Article 2 - Prix</h2>
        <p>Les prix de nos produits sont indiqués en euros toutes taxes comprises (TVA et autres taxes applicables au jour de la commande), sauf indication contraire et hors frais de traitement et d'expédition. En cas de commande vers un pays autre que la France métropolitaine vous êtes l'importateur du ou des produits concernés. Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ces droits et sommes ne relèvent pas du ressort de la société LES FILMS DU PORT DE LA LUNE. Ils seront à votre charge et relèvent de votre entière responsabilité, tant en termes de déclarations que de paiements aux autorités et organismes compétents de votre pays. Nous vous conseillons de vous renseigner sur ces aspects auprès de vos autorités locales.</p>
        <p>Toutes les commandes quelle que soit leur origine sont payables en euros.</p>
        <p>La société LES FILMS DU PORT DE LA LUNE se réserve le droit de modifier ses prix à tout moment, mais le produit sera facturé sur la base du tarif en vigueur au moment de la validation de la commande et sous réserve de disponibilité. Les produits demeurent la propriété de la société LES FILMS DU PORT DE LA LUNE jusqu'au paiement complet du prix.</p>
        <p>Attention : dès que vous prenez possession physiquement des produits commandés, les risques de perte ou d'endommagement des produits vous sont transférés.</p>
        <h2>Article 3 - Commandes</h2>
        <p>Vous pouvez passer commande :</p>
        <p>Détailler les modalités choisies, par exemple :</p>
        <p>•\tSur Internet : <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a></p>
        <p>•\tPar téléphone au 06 48 84 65 75 (tarif ordinaire téléphonique) du lundi au samedi de 9h à 21h.</p>
        <p>Les informations contractuelles sont présentées en langue française et feront l'objet d'une confirmation au plus tard au moment de la validation de votre commande.
        La société LES FILMS DU PORT DE LA LUNE se réserve le droit de ne pas enregistrer un paiement, et de ne pas confirmer une commande pour quelque raison que ce soit, et plus particulièrement en cas de problème d'approvisionnement, ou en cas de difficulté concernant la commande reçue.</p>
        <h2>Article 4 - Validation de votre commande</h2>
        <p>Toute commande figurant sur le site Internet <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a> suppose l'adhésion aux présentes Conditions Générales. Toute confirmation de commande entraîne votre adhésion pleine et entière aux présentes conditions générales de vente, sans exception ni réserve.
        L'ensemble des données fournies et la confirmation enregistrée vaudront preuve de la transaction.</p>
        <p>Vous déclarez en avoir parfaite connaissance.<br>
        La confirmation de commande vaudra signature et acceptation des opérations effectuées.<br>
        Un récapitulatif des informations de votre commande et des présentes Conditions Générales, vous sera communiqué en format PDF via l'adresse e-mail de confirmation de votre commande.</p>
        <h2>Article 5 - Paiement</h2>
        <p>Le fait de valider votre commande implique pour vous l'obligation de payer le prix indiqué.<br>
        Le règlement de vos achats s'effectue par carte bancaire grâce au système sécurisé STRIPE.<br>
        Le débit de la carte est effectué au moment de l'expédition de la commande.</p>
        <h2>Article 6 - Rétractation</h2>
        <p>EXCEPTIONS AU DROIT DE RETRACTATION</p>
        <p>Conformément aux dispositions de l'article L.121-21-8 du Code de la Consommation, le droit de rétractation ne s'applique pas à :</p>
        <ul>
          <li>•\tLa fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</li>
          <li>•\tLa fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation.</li>
          <li>•\tLa fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés.</li>
          <li>•\tLa fourniture de biens susceptibles de se détériorer ou de se périmer rapidement.</li>
          <li>•\tLa fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d'hygiène ou de protection de la santé.</li>
          <li>•\tLa fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d'autres articles ;</li>
          <li>•\tLa fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel.</li>
          <li>•\tLa fourniture d'enregistrements audio ou vidéo ou de logiciels informatiques lorsqu'ils ont été descellés par le consommateur après la livraison.</li>
          <li>•\tLa fourniture d'un journal, d'un périodique ou d'un magazine, sauf pour les contrats d'abonnement à ces publications.</li>
          <li>•\tLes transactions conclues lors d'une enchère publique.</li>
          <li>•\tLa fourniture d'un contenu numérique non fourni sur un support matériel dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</li>
        </ul>
        <h2>Article 7- Disponibilité</h2>
        <p>Nos prestations/formation sont proposées tant qu'elles sont visibles sur le site <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a>.</p>
        <h2>Article 8 - Acquisition</h2>
        <p>Les produits sont acquis par le client via l’adresse mail</p>
        <p>En cas de retard d'expédition, un mail vous sera adressé pour vous informer d'une éventuelle conséquence sur le délai de livraison qui vous a été indiqué.<br>
        Conformément aux dispositions légales, en cas de retard de livraison, vous bénéficiez de la possibilité d'annuler la commande dans les conditions et modalités définies à l'article L 138-2 du Code de la Consommation. Si entre temps vous recevez le produit nous procéderons à son remboursement et aux frais d'acheminement dans les conditions de l'article L 138-3 du Code de la Consommation.</p>
        <h2>Article 9 - Garantie</h2>
        <p>Toutes les réclamations, demandes d'échange ou de remboursement doivent s'effectuer par mail à l’adresse <a href=\"mailto:3aanim@gmail.com\">3aanim@gmail.com</a> dans le délai de 30 jours de la livraison.</p>
        <h2>Article 10 - Responsabilité</h2>
        <p>Les produits proposés sont conformes à la législation française en vigueur. La responsabilité de la société LES FILMS DU PORT DE LA LUNE ne saurait être engagée en cas de non-respect de la législation du pays où le produit est livré. Il vous appartient de vérifier auprès des autorités locales les possibilités d'importation ou d'utilisation des produits ou services que vous envisagez de commander.
        Enfin la responsabilité de la société LES FILMS DU PORT DE LA LUNE ne saurait être engagée pour tous les inconvénients ou dommages inhérents à l'utilisation du réseau Internet, notamment une rupture de service, une intrusion extérieure ou la présence de virus informatiques.</p>
        <h2>Article 11 - Droit applicable en cas de litiges</h2>
        <p>La langue du présent contrat est la langue française. Les présentes conditions de vente sont soumises à la loi française. En cas de litige, les tribunaux français seront les seuls compétents.</p>
        <h2>Article 12 - Propriété intellectuelle</h2>
        <p>Tous les éléments du site <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a> sont et restent la propriété intellectuelle et exclusive de la société LES FILMS DU PORT DE LA LUNE. Nul n'est autorisé à reproduire, exploiter, rediffuser, ou utiliser à quelque titre que ce soit, même partiellement, des éléments du site qu'ils soient logiciels, visuels ou sonores. Tout lien simple ou par hypertexte est strictement interdit sans un accord écrit exprès de la société LES FILMS DU PORT DE LA  LUNE.</p>
        <h2>Article 13 - Données personnelles</h2>
        <p>La société LES FILMS DU PORT DE LA LUNE se réserve le droit de collecter les informations nominatives et les données personnelles vous concernant. Elles sont nécessaires à la gestion de votre commande, ainsi qu'à l'amélioration des services et des informations que nous vous adressons.
        Elles peuvent aussi être transmises aux sociétés qui contribuent à ces relations, telles que celles chargées de l'exécution des services et commandes pour leur gestion, exécution, traitement et paiement.
        Ces informations et données sont également conservées à des fins de sécurité, afin de respecter les obligations légales et réglementaires.
        Conformément à la loi du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et d'opposition aux informations nominatives et aux données personnelles vous concernant, directement sur le site Internet.</p>
        <h2>Article 14 - Archivage Preuve</h2>
        <p>La société LES FILMS DU PORT DE LA LUNE archivera les bons de commandes et les factures sur un support fiable et durable constituant une copie fidèle conformément aux dispositions de l'article 1348 du Code civil.
           Les registres informatisés de la société LES FILMS DU PORT DE LA LUNE seront considérés par toutes les parties concernées comme preuve des communications, commandes, paiements et transactions intervenus entre les parties.</p>

      </div>

    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/cgv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/base.html.twig' %}

{% block title %}Conditions générales de ventes - L’animateur autodidacte accompagné{% endblock %}

{% block main %}
  <div class=\"container\">
    <div class=\"row my-5 cgv\">
      <div class=\"col-12\">

        <h1>LES FILMS DU PORT DE LA LUNE</h1>

        <p>SAS au capital de 45 000 euros<br>
        19, rue du Petit Puits, 33520 BRUGES<br>
        Téléphone : 06 48 84 65 75<br>
        Adresse mail: 3aanim@gmail.com<br>
        RCS de Bordeaux n° 825 258 585</p>

        <p>Conditions générales de vente des produits vendus sur <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a></p>
        <p>Date de dernière mise à jour : 07/08/2020</p>
        <h2>Article 1 - Objet</h2>
        <p>Les présentes conditions régissent les ventes par la société LES FILMS DU PORT DE LA LUNE de prestations de formation aux métiers du cinéma d’animation.</p>
        <h2>Article 2 - Prix</h2>
        <p>Les prix de nos produits sont indiqués en euros toutes taxes comprises (TVA et autres taxes applicables au jour de la commande), sauf indication contraire et hors frais de traitement et d'expédition. En cas de commande vers un pays autre que la France métropolitaine vous êtes l'importateur du ou des produits concernés. Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ces droits et sommes ne relèvent pas du ressort de la société LES FILMS DU PORT DE LA LUNE. Ils seront à votre charge et relèvent de votre entière responsabilité, tant en termes de déclarations que de paiements aux autorités et organismes compétents de votre pays. Nous vous conseillons de vous renseigner sur ces aspects auprès de vos autorités locales.</p>
        <p>Toutes les commandes quelle que soit leur origine sont payables en euros.</p>
        <p>La société LES FILMS DU PORT DE LA LUNE se réserve le droit de modifier ses prix à tout moment, mais le produit sera facturé sur la base du tarif en vigueur au moment de la validation de la commande et sous réserve de disponibilité. Les produits demeurent la propriété de la société LES FILMS DU PORT DE LA LUNE jusqu'au paiement complet du prix.</p>
        <p>Attention : dès que vous prenez possession physiquement des produits commandés, les risques de perte ou d'endommagement des produits vous sont transférés.</p>
        <h2>Article 3 - Commandes</h2>
        <p>Vous pouvez passer commande :</p>
        <p>Détailler les modalités choisies, par exemple :</p>
        <p>•\tSur Internet : <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a></p>
        <p>•\tPar téléphone au 06 48 84 65 75 (tarif ordinaire téléphonique) du lundi au samedi de 9h à 21h.</p>
        <p>Les informations contractuelles sont présentées en langue française et feront l'objet d'une confirmation au plus tard au moment de la validation de votre commande.
        La société LES FILMS DU PORT DE LA LUNE se réserve le droit de ne pas enregistrer un paiement, et de ne pas confirmer une commande pour quelque raison que ce soit, et plus particulièrement en cas de problème d'approvisionnement, ou en cas de difficulté concernant la commande reçue.</p>
        <h2>Article 4 - Validation de votre commande</h2>
        <p>Toute commande figurant sur le site Internet <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a> suppose l'adhésion aux présentes Conditions Générales. Toute confirmation de commande entraîne votre adhésion pleine et entière aux présentes conditions générales de vente, sans exception ni réserve.
        L'ensemble des données fournies et la confirmation enregistrée vaudront preuve de la transaction.</p>
        <p>Vous déclarez en avoir parfaite connaissance.<br>
        La confirmation de commande vaudra signature et acceptation des opérations effectuées.<br>
        Un récapitulatif des informations de votre commande et des présentes Conditions Générales, vous sera communiqué en format PDF via l'adresse e-mail de confirmation de votre commande.</p>
        <h2>Article 5 - Paiement</h2>
        <p>Le fait de valider votre commande implique pour vous l'obligation de payer le prix indiqué.<br>
        Le règlement de vos achats s'effectue par carte bancaire grâce au système sécurisé STRIPE.<br>
        Le débit de la carte est effectué au moment de l'expédition de la commande.</p>
        <h2>Article 6 - Rétractation</h2>
        <p>EXCEPTIONS AU DROIT DE RETRACTATION</p>
        <p>Conformément aux dispositions de l'article L.121-21-8 du Code de la Consommation, le droit de rétractation ne s'applique pas à :</p>
        <ul>
          <li>•\tLa fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</li>
          <li>•\tLa fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation.</li>
          <li>•\tLa fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés.</li>
          <li>•\tLa fourniture de biens susceptibles de se détériorer ou de se périmer rapidement.</li>
          <li>•\tLa fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d'hygiène ou de protection de la santé.</li>
          <li>•\tLa fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d'autres articles ;</li>
          <li>•\tLa fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel.</li>
          <li>•\tLa fourniture d'enregistrements audio ou vidéo ou de logiciels informatiques lorsqu'ils ont été descellés par le consommateur après la livraison.</li>
          <li>•\tLa fourniture d'un journal, d'un périodique ou d'un magazine, sauf pour les contrats d'abonnement à ces publications.</li>
          <li>•\tLes transactions conclues lors d'une enchère publique.</li>
          <li>•\tLa fourniture d'un contenu numérique non fourni sur un support matériel dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</li>
        </ul>
        <h2>Article 7- Disponibilité</h2>
        <p>Nos prestations/formation sont proposées tant qu'elles sont visibles sur le site <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a>.</p>
        <h2>Article 8 - Acquisition</h2>
        <p>Les produits sont acquis par le client via l’adresse mail</p>
        <p>En cas de retard d'expédition, un mail vous sera adressé pour vous informer d'une éventuelle conséquence sur le délai de livraison qui vous a été indiqué.<br>
        Conformément aux dispositions légales, en cas de retard de livraison, vous bénéficiez de la possibilité d'annuler la commande dans les conditions et modalités définies à l'article L 138-2 du Code de la Consommation. Si entre temps vous recevez le produit nous procéderons à son remboursement et aux frais d'acheminement dans les conditions de l'article L 138-3 du Code de la Consommation.</p>
        <h2>Article 9 - Garantie</h2>
        <p>Toutes les réclamations, demandes d'échange ou de remboursement doivent s'effectuer par mail à l’adresse <a href=\"mailto:3aanim@gmail.com\">3aanim@gmail.com</a> dans le délai de 30 jours de la livraison.</p>
        <h2>Article 10 - Responsabilité</h2>
        <p>Les produits proposés sont conformes à la législation française en vigueur. La responsabilité de la société LES FILMS DU PORT DE LA LUNE ne saurait être engagée en cas de non-respect de la législation du pays où le produit est livré. Il vous appartient de vérifier auprès des autorités locales les possibilités d'importation ou d'utilisation des produits ou services que vous envisagez de commander.
        Enfin la responsabilité de la société LES FILMS DU PORT DE LA LUNE ne saurait être engagée pour tous les inconvénients ou dommages inhérents à l'utilisation du réseau Internet, notamment une rupture de service, une intrusion extérieure ou la présence de virus informatiques.</p>
        <h2>Article 11 - Droit applicable en cas de litiges</h2>
        <p>La langue du présent contrat est la langue française. Les présentes conditions de vente sont soumises à la loi française. En cas de litige, les tribunaux français seront les seuls compétents.</p>
        <h2>Article 12 - Propriété intellectuelle</h2>
        <p>Tous les éléments du site <a href=\"https://www.aaanim.fr/\">https://www.aaanim.fr/</a> sont et restent la propriété intellectuelle et exclusive de la société LES FILMS DU PORT DE LA LUNE. Nul n'est autorisé à reproduire, exploiter, rediffuser, ou utiliser à quelque titre que ce soit, même partiellement, des éléments du site qu'ils soient logiciels, visuels ou sonores. Tout lien simple ou par hypertexte est strictement interdit sans un accord écrit exprès de la société LES FILMS DU PORT DE LA  LUNE.</p>
        <h2>Article 13 - Données personnelles</h2>
        <p>La société LES FILMS DU PORT DE LA LUNE se réserve le droit de collecter les informations nominatives et les données personnelles vous concernant. Elles sont nécessaires à la gestion de votre commande, ainsi qu'à l'amélioration des services et des informations que nous vous adressons.
        Elles peuvent aussi être transmises aux sociétés qui contribuent à ces relations, telles que celles chargées de l'exécution des services et commandes pour leur gestion, exécution, traitement et paiement.
        Ces informations et données sont également conservées à des fins de sécurité, afin de respecter les obligations légales et réglementaires.
        Conformément à la loi du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et d'opposition aux informations nominatives et aux données personnelles vous concernant, directement sur le site Internet.</p>
        <h2>Article 14 - Archivage Preuve</h2>
        <p>La société LES FILMS DU PORT DE LA LUNE archivera les bons de commandes et les factures sur un support fiable et durable constituant une copie fidèle conformément aux dispositions de l'article 1348 du Code civil.
           Les registres informatisés de la société LES FILMS DU PORT DE LA LUNE seront considérés par toutes les parties concernées comme preuve des communications, commandes, paiements et transactions intervenus entre les parties.</p>

      </div>

    </div>
  </div>
{% endblock %}
", "public/cgv.html.twig", "/Applications/MAMP/htdocs/aaa/templates/public/cgv.html.twig");
    }
}
