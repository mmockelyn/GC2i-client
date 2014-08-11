<?php
include ('../../../inc/config.php');
$idcntinfo = $_GET['idcntinfo'];
$query_inter_info = mysql_query("SELECT * FROM client_informatique, cnt_informatique WHERE idcntinfo = $idcntinfo");
$donnee_inter_info = mysql_fetch_array($query_inter_info);

$msg = "Votre Facture en ligne\r\nhttp://client.lsiinformatique.fr/";
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<page id="cnt_first">
    <div id="header">
        <div class="header-center">
            <h1>LSI INFORMATIQUE</h1>
            35 Av. de Bretagne - 85100 Les Sables d'Olonne<br>
            Tel: 02 51 23 24 24 - Mail: contact@lsiinformatique.fr
            <hr>
        </div>
    </div>
    <div id="corps">
        <div class="corps-title">Contrat de Maintenance Informatique</div>
        <div class="corps-subtitle">FIRST</div>
            <div class="corps-sommaire">
                <div class="section">A: Convention des préstations d'assistance technique</div>
                <div class="section">B: Domaine de compétence et préstations</div>
                    <div class="subsection">B1: Matériel</div>
                    <div class="subsection">B2: Logiciel</div>
                    <div class="subsection">B3: Confidentialité</div>
                <div class="section">C: Impliquation du contrat</div>
                    <div class="subsection">C1: Interventions</div>
                    <div class="subsection">C2: Dépannages</div>
                    <div class="subsection">C3: Restriction</div>
                <div class="section">D: Durée du contrat</div>
                <div class="section">E: Generalité</div>
                <div class="section">F: Informations diverses</div>
                <div class="section">G: Tarifs et conditions de réglements</div>
            </div>

    </div>

</page>
<page_footer>
LSI Informatique - Société SARL au capital de 1000€ - Siret: 753 865 229 00011 - TVA intra: FR56 753 865 229 - APE: 4741Z
</page_footer>



<page id="cnt_first">
    <div id="header">
        <div class="header-center">
            <h1>LSI INFORMATIQUE</h1>
            35 Av. de Bretagne - 85100 Les Sables d'Olonne<br>
            Tel: 02 51 23 24 24 - Mail: contact@lsiinformatique.fr
            <hr>
        </div>
    </div>

    <div id="corps">
        <div class="section">A: Convention des préstations d'assistance technique</div>
        <div class="text">
            <p>L'objet du présent contrat est de fixer les obligations et les responsabilités de la personne <?php echo $donnee_inter_info['nom']; ?> <?php echo $donnee_inter_info['prenom']; ?>
            en la qualité de CLIENT et de la société LSI INFORMATIQUE gérer par M. MOCKELYN Maxime en sa qualité de PRESTATAIRE dans leurs relation contractuelles relatives aux services d'assistances technique (SAT).</p>

            <p>Par assistance technique on entend l'aide apportée au client par le personnel de la société LSI INFORMATIQUE pour la mise en oeuvre et l'utilisation de produits de traitement de l'information:<i>informatique, télématique, numérique</i> 
            et la mise en pratique de solutions d'ordre pratique, technique, technologique et logiciels afin d'augmenter l'efficacité de production du client.</p>

            <p>L'assistance technique comprend les interventions sur le "matériel" c'est à dire , ordinateurs, périphériques et "logiciels" soit les système d'exploitation, 
            les applications et progiciels, (ensemble complet et documenté de programme conçus pour être fourni à plusieurs utilisateurs, en vue d'une même application ou d'une 
            même fonction).</p>

            <p>Le présent contrat couvre selon les nombres, natures et prix de l'unité, c'est à dire la maintenance, la main d'oeuvre, les déplacements, le soutient logistique.</p>
        </div>
        <!-- <div class="section">B: Domaine de compétences et prestation</div>
        <div class="subsection">B1: Matériels</div>
        <div class="text">
            <p>L'assistance technique peut s'effectuer sur toutes marques de matériel informatique, après étude et analyse du parc existant par le personnel de
            LSI INFORMATIQUE et/ou sauf restrictions liées aux garanties contractuelles du fabricant et éditeurs de logiciels.</p>
        </div>
        <div class="subsection">B2: Logiciels</div>
        <div class="text">
            <p>L'assistance logiciels et progiciels inclue la conformité des licenses d'utilisation et la compatibilité de ceux-ci dans l'environnement de travail
            défini par l'éditeur ou le fournisseur initial des produits. Le personnel de LSI INFORMATIQUE a pour obligation de mettre en garde le client sur les peines pénales encourues 
            pour toutes utilisations de versions de logiciels sans license d'exploitation.</p>
        </div>
        <div class="subsection">B3: Confidentialité</div>
        <div class="text">
        </div> -->
    </div>
</page>
<page_footer>
LSI Informatique - Société SARL au capital de 1000€ - Siret: 753 865 229 00011 - TVA intra: FR56 753 865 229 - APE: 4741Z
</page_footer>

<?php
$content = ob_get_clean();

    // convert in PDF
    require_once('../../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('../../about.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>
