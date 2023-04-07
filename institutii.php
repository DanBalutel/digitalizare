<?php include('partial/header.php'); ?>

<?php include('partial/loader.php'); ?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">

            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <h3><a href="#" onclick="generatePdf('pdfSample', retPdfFieldsObj1());">Click DEMO</a> - Completare automata documente - Transmitere automata solicitari Institutii</h3>
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-1 mt-1 pt-3 pb-2">Ministerul Afacerilor Interne</h2>
                        <a target="_blank" href="https://b.politiaromana.ro/files/pages_files/Cerere_eliberare_certificat_cazier_persoane_fizice_anexa_7-modif.22-21.06.2022.pdf" class="h5 text-uppercase">
                            <img src="https://b.politiaromana.ro/favicon.ico" width="40" height="40" alt=""> Cazier judiciar
                        </a>
                        <br>
                        <a target="_blank" href="https://b.politiaromana.ro/files/pages_files/Cerere_eliberare_certificat_integritate_anexa_1.pdf" class="h5 text-uppercase">
                            <img src="https://b.politiaromana.ro/favicon.ico" width="40" height="40" alt=""> CERTIFICAT DE INTEGRITATE COMPORTAMENTALĂ
                        </a>
                        <h2 class="mb-1 mt-1 pt-3 pb-2">ANAF</h2>
                        <a target="_blank" href="https://static.anaf.ro/static/10/Anaf/Declaratii_R/descarcare_declaratii.htm" class="h5 text-uppercase">
                            <img src="https://www.afacerist.ro/stiri/wp-content/uploads/2020/01/ANAF_logo_transparent_PNG.png" height="40" alt=""> Descarca Declaratii
                        </a>
                        <br>
                        <a target="_blank" href="https://chat.anaf.ro/cod_tva.nsf/solicitare_tva" class="h5 text-uppercase">
                            <img src="https://www.afacerist.ro/stiri/wp-content/uploads/2020/01/ANAF_logo_transparent_PNG.png" height="40" alt=""> Solicita Cod TVA
                        </a>
                        <h2 class="mb-1 mt-1 pt-3 pb-2">Ministerul Justitiei</h2>
                        <a target="_blank" href="https://constatator.digitalizarefirme.ro/index.html" class="h5 text-uppercase">
                            <img src="https://constatator.digitalizarefirme.ro/media/content/hero-illustration.png" width="40" height="40" alt=""> Certificat constatator ONRC
                        </a>
                        <br>
                        <a target="_blank" href="https://portal.just.ro/SitePages/acasa.aspx" class="h5 text-uppercase">
                            <img src="https://portal.just.ro/_layouts/images/favicon.ico" width="40" height="40" alt=""> Portalul instantelor de judecata
                        </a>
                        <br>
                        <a target="_blank" href="https://legislatie.just.ro" class="h5 text-uppercase">
                            <img src="https://legislatie.just.ro/Content/Images/Site/temanoua/favicon.ico" width="40" height="40" alt=""> PORTAL LEGISLATIV
                        </a>
                        <h2 class="mb-1 mt-1 pt-3 pb-2">Ministerul Dezvoltarii, Lucrarilor publice si Administratiei</h2>
                        <a target="_blank" href="https://epay.ancpi.ro/epay/SelectProd.action?prodId=419" class="h5 text-uppercase">
                            <img src="https://www.finantare.ro/wp-content/uploads/bfi_thumb/phpThumb_generated_thumbnailjpg-4-oa9v7otd3nfzwsyl9cce1rxpwevxlg57uid4fiq6yg.jpg" width="40" height="40" alt=""> EXTRAS DIN PLANUL CADASTRAL, PE ORTOFOTOPLAN
                        </a>
                        <h2 class="mb-1 mt-1 pt-3 pb-2">Ministerul Finantelor</h2>
                        <a target="_blank" href="https://taxatimbru.ro/calculator-taxa.html" class="h5 text-uppercase">
                            <img src="https://taxatimbru.ro/assets/img/favicon/favicon-32x32.png" width="40" height="40" alt=""> Calculator taxă timbru judiciar online
                        </a>
                        <br>
                        <a target="_blank" href="https://taxatimbru.ro/plateste-taxa-timbru-persoana-fizica.html" class="h5 text-uppercase">
                            <img src="https://taxatimbru.ro/assets/img/favicon/favicon-32x32.png" width="40" height="40" alt=""> Plateste taxă timbru judiciar online persoana fizica
                        </a>
                        <br>
                        <a target="_blank" href="https://taxatimbru.ro/plateste-taxa-timbru-persoana-juridica.html" class="h5 text-uppercase">
                            <img src="https://taxatimbru.ro/assets/img/favicon/favicon-32x32.png" width="40" height="40" alt=""> Plateste taxă timbru judiciar online persoana judiciar
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include('partial/footer.php'); ?>
    </div>
</div>
<?php include('partial/scripts.php'); ?>
<script defer>
    const findAdministratorId = function(id, dataObject) {
        const positionName = dataObject.administratori.persoane_fizice[id].functie;
        if (positionName.includes('administrator')) {
            return id;
        } else {
            const idplus = id + 1;
            return findAdministratorId(idplus, dataObject);
        }
    };

    function retPdfFieldsObj1() {
        const
        let administratorId = findAdministratorId(0, newdataObj);
        const caen = `${newdataObj.cod_caen.principal_mfinante.cod} - ${newdataObj.cod_caen.principal_mfinante.label}`
        const fieldsObj = {
            'subsemnatul': newdataObj.administratori.persoane_fizice[administratorId].nume || '',
            'domiciliat': newdataObj.administratori.persoane_fizice[administratorId].localitate || '',
            'strada': newdataObj.administratori.persoane_fizice[administratorId].localitate || '',
            'judet': newdataObj.administratori.persoane_fizice[administratorId].judet || '',
            'calitate': newdataObj.administratori.persoane_fizice[administratorId].functie || '',
            'firma': newdataObj.firma.nume_mfinante || '',
            'nr_ordine_rc': newdataObj.firma.j || '',
            'CUI': newdataObj.firma.cui.toString() || '',
            'sediu_domiciliat': newdataObj.adresa.anaf.localitate || '',
            'sediu_strada': newdataObj.adresa.anaf.strada || '',
            'sediu_numar': newdataObj.adresa.anaf.numar || '',
            'sediu_bloc': newdataObj.adresa.anaf.bloc || '',
            'sediu_scara': newdataObj.adresa.anaf.scara || '',
            'sediu_etaj': newdataObj.adresa.anaf.etaj || '',
            'sediu_apartament': newdataObj.adresa.anaf.apartament || '',
            'sediu_judet': newdataObj.adresa.anaf.judet || '',
            'sediu_cod': newdataObj.adresa.anaf.cod_postal.toString() || '',
            'sediu_telefon': newdataObj.date_contact.telefon.toString() || '',
            'sediu_fax': newdataObj.date_contact.fax.toString() || '',
            'sediu_mail': newdataObj.date_contact.email.toString() || '',
            'sediu_web': newdataObj.date_contact.web.toString() || '',
            'CAEN_rev1.0': caen.substring(0, 40) || '',
            'CAEN_rev1.1': caen.substring(40, 400) || ''
        }

        return fieldsObj


    }
</script>
<script src="assets/js/generatePdf.js" defer></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>