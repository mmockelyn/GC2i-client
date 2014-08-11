
<?php
include ('../inc/config.php');
$idintervention = $_GET['idintervention'];
$query_inter_info = "SELECT * FROM client, intervention, technicien
    WHERE intervention.idclient = client.idclient
    AND idintervention =".$idintervention;
$result = mysql_query($query_inter_info);
$donnee_inter_info = mysql_fetch_array($result);

$msg = "Votre Facture en ligne\r\nhttp://client.lsiinformatique.fr/";
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<page id="inter_info">
    <div id="header">
        <div class="societe">
            <b>LSI INFORMATIQUE</b><br>
            35 Avenue de Bretagne<br>
            85100 Les Sables d'Olonne<br>
            Tel: 02 51 23 24 24
        </div>
        <div class="left">
            <h3><b>BON D'INTERVENTION N°<?php echo $donnee_inter_info['idintervention']; ?></b></h3><br>
            <br>
            <br>
            Date de fin prévu: <?php echo $donnee_inter_info['date_maintenance_prevue']; ?><br>
            Technicien Responsable: 
                <?php
                    if($donnee_inter_info['idtechnicien'] == 1){echo "Maxime";}
                    if($donnee_inter_info['idtechnicien'] == 2){echo "Alexis";}
                    if($donnee_inter_info['idtechnicien'] == 3){echo "Valentin";}
                ?>
            <br><br>

            <qrcode value="<?php echo $msg; ?>" style="width: 20mm;"></qrcode>
            <u><b>Vos Identifiants de connexion:</b></u><br>
            Votre Login: <?php echo $donnee_inter_info['nom']; ?><br>
            Votre Mot de Passe: Non afficher par sécurité
        </div>
        <div class="right">
            <h2><b><?php echo $donnee_inter_info['nom']; ?> <?php echo $donnee_inter_info['prenom']; ?></b></h2><br>
            <br>
            <?php echo $donnee_inter_info['adresse1']; ?><br>
            <br>
            <?php echo $donnee_inter_info['adresse2']; ?>
            <br>
            <br>
            <?php echo $donnee_inter_info['cp']; ?> <?php echo $donnee_inter_info['ville']; ?>
            <br>
            <br>
            Tel: <?php echo $donnee_inter_info['tel']; ?><br>
            Portable: <?php echo $donnee_inter_info['port']; ?><br>
            Mail: <?php echo $donnee_inter_info['mail']; ?>
        </div>
    </div>
    <div id="corps">
        <div class="prestation_realise">
            <div class="titre">Prestation à réaliser</div>
            <div class="box"><?php echo $donnee_inter_info['desc_probleme']; ?></div>
        </div>
        <div class="inter_materiel">
            <div class="titre">Intervention sur</div>
            <div class="box">
                <?php
                    if($donnee_inter_info['materiel'] == 1){echo "Pc Portable ";}
                    if($donnee_inter_info['materiel'] == 2){echo "Pc Fixe ";}
                    if($donnee_inter_info['materiel'] == 3){echo "Autre ";}
                ?>
                <?php echo $donnee_inter_info['marque']; ?> <?php echo $donnee_inter_info['serie']; ?>
                <br><br>
                N° de Serie: <b><?php echo $donnee_inter_info['num_serie']; ?></b>
                <br><br>
                Etat du matériel:<br>
                <b>
                <?php
                    if($donnee_inter_info['etat_materiel'] == 1){echo "Neuf";}
                    if($donnee_inter_info['etat_materiel'] == 2){echo "Bon état apparent";}
                    if($donnee_inter_info['etat_materiel'] == 3){echo "Etat Moyen";}
                    if($donnee_inter_info['etat_materiel'] == 4){echo "Mauvais état";}
                ?>
                </b>
            </div>
        </div>
        <div class="materiel_fournis">
            <div class="titre">Matériel Fournis</div>
            <div class="box">
                Accessoire:<br />
                <?php echo $donnee_inter_info['accessoire']; ?>
                <br>
            </div>
        </div>
        <div class="signature_client">
            <div class="titre">Signature du Client</div>
            <div class="box"></div>
        </div>
        <div class="signature_technique">
            <div class="titre">Signature du Technicien</div>
            <div class="box"></div>
        </div>
    </div>
</page>
<page_footer>
LSI Informatique - Société SARL au capital de 1000€ - Siret: 753 865 229 00011 - TVA intra: FR56 753 865 229 - APE: 4741Z
</page_footer>
<?php
$content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>