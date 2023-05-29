<?php include('partial/header.php') ?>
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
<?php include('partial/loader.php') ?>
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php') ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php') ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">

            <?php
            $title = 'Dashboard';
            include('partial/breadcrumb.php')
            ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row g-sm-3 height-equal-2 widget-charts">


                    <div class="dropdown">
                        <input type="text" id="themeSearch" class="dropdown-input form-control" style="background-color: #1d1e26;border-color: #1d1e26;color: rgba(255, 255, 255, 0.2);" placeholder="Adauga un CUI...">
                        <ul class="dropdown-list" id="themeDropdown">
                            <li>Selecteaza un CUI</li>
                            <li value="1" onclick="getLeadData('1')">13548146</li>
                            <li value="2" onclick="getLeadData('2')">6116706</li>
                            <li value="3" onclick="getLeadData('3')">43938809</li>
                            <li value="4" onclick="getLeadData('4')">15985694</li>
                            <li value="5" onclick="getLeadData('5')">37375182</li>
                            <li value="6" onclick="getLeadData('6')">18911470</li>
                            <li value="7" onclick="getLeadData('7')">40452811</li>
                        </ul>
                    </div>



                    <h4 style="color: #00CCFF">Campanii Facebook</h4>

                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                        <div class="uploadCrmFile">
                                            <button class="btn btn-primary mb-3" id="downloadExcel1">Exporta in Excel</button>
                                            <input class="form-control" type="file" id="uploadExcel1" accept=".xlsx" />
                                            <button class="btn btn-primary mb-3" id="processExcel1">Importa din Excel</button>
                                            <button class="btn btn-primary mb-3 m-l-3" id="addClient1">Adauga lead</button>

                                        </div>

                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>
                                                    <th>Factura</th>

                                                </tr>
                                            </thead>
                                            <tbody id="crmTable1">

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">



                                        <div class="uploadCrmFile">
                                            <button class="btn btn-primary mb-3" id="downloadExcel2">Exporta in Excel</button>

                                            <input class="form-control" type="file" id="uploadExcel2" accept=".xlsx" />
                                            <button class="btn btn-primary mb-3" id="processExcel2">Importa din Excel</button>
                                        </div>


                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>
                                                    <th>Factura</th>

                                                </tr>
                                            </thead>
                                            <tbody id="crmTable2">

                                            </tbody>

                                        </table>










                                    </div>
                                </div>
                            </div>

                            <!-- <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">



                                        <button class="btn btn-primary mb-3" id="downloadExcel2">Exporta in Excel</button>

                                        <input class="form-control" type="file" id="uploadExcel2" accept=".xlsx" />
                                        <button class="btn btn-primary mb-3" id="processExcel2">Importa din Excel</button>


                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>

                                                </tr>
                                            </thead>
                                            <tbody id="crmTable2">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->



                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!-- footer start-->
        <?php include('partial/footer.php') ?>
    </div>
</div>
<?php include('partial/scripts.php') ?>
<!-- Plugins JS start-->

<script src="assets/js/chart/apex-chart/moment.min.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/dashboard/default.js"></script>
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<script src="assets/js/chart/morris-chart/raphael.js"></script>
<script src="assets/js/chart/morris-chart/morris.js"> </script>
<script src="assets/js/chart/morris-chart/prettify.min.js"></script>
<script src="assets/js/chart/morris-chart/morris-script.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src="assets/js/crm.js"></script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();

    function addClient1(clientData, tempID) {

        Swal.fire({
            html: `

            <div class="">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row g-sm-3 height-equal-2 widget-charts">

        <h2 style="color:#00CCFF" id="numePrenume"></h2>


            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="proforma" class="card-body primary min-h-7"> <span class="f-light">Facturi ProForma</span>
                    <br>
                    <br>
                        <div> Proforma 4.pdf </div>
                        <div> Proforma 5.pdf </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="factura" class="card-body primary min-h-7"> <span class="f-light">Facturi Fiscale</span>
                    <br>
                    <br>

                        <div class="ffGreen"> Factura Fiscala 5.pdf </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="card1" class="card-body primary min-h-7"> <span class="f-light">Cifra de afaceri</span>
                        <div class="d-flex align-items-end gap-1">
                            <h4 id="cifra-de-afaceri"></h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                        </div>
                        <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="card2" class="card-body success min-h-7"><span class="f-light">Profit</span>
                        <div class="d-flex align-items-end gap-1">
                            <h4 id="profit-actual"></h4><span class="font-success f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                        </div>
                        <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#profit"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="card3" class="card-body secondary min-h-7"><span class="f-light">Angajați</span>
                        <div class="d-flex align-items-end gap-1">
                            <h4 id="locuri-munca"></h4><span class="font-secondary f-12 f-w-500"></span>
                        </div>
                        <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card small-widget mb-sm-0">
                    <div id="card4" class="card-body success min-h-7"><span class="f-light">Cod CAEN</span>
                        <div class="flex-wrap d-flex align-items-end gap-1">
                            <h4 id="cod-caen"></h4><span class="font-success f-12 f-w-500"></span>
                            <div id="nume-caen" class="f-14 f-s-normal">denumire CAEN</div>
                        </div>
                        <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#fill-bookmark"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Date generale despre firma -->
        <div class="col-12 mt-3">
            <div class="card small-widget mb-sm-0">
                <div id="cardDateGenerale" class="card-body primary min-h-7"> <span style="font-size: 1.7rem;" class="f-w-700 f-light"></span>
                    <div class="row d-flex">
                        <div class="col-md-12" id="dateGenerale">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-3">
            <div class="card">
                <div class="card-header" style="background-color: rgba(0, 0, 0, 0.03);">
                    <h4 style="color:#00CCFF">Asociați/acționari și persoane autorizate - conexiuni cu alte firme</h4>
                    <h6 style="color:#00CCFF">Data ultimei actualizări: 02.03.2023</h6>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nume</th>
                                        <th scope="col">Functie</th>
                                        <th scope="col">%</th>
                                        <th scope="col">Firma</th>
                                        <th scope="col">Judet</th>
                                        <th scope="col">Localitate</th>
                                    </tr>
                                </thead>
                                <tbody id="asociatiConexiuni${tempID}">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
            `,
            width: "700px",
            minHeight: "500px",
            showConfirmButton: true,
            confirmButtonText: 'Adauga',
            confirmButtonColor: '#16b170 !important',
            backdrop: 'rgba(0,0,0,0.4)',
            customClass: {
                container: '.dark-mode-transparent moniModal1',
                popup: 'dark-mode',
                header: 'dark-mode-header',
                title: 'dark-mode-header',
                closeButton: 'dark-mode-close',
                content: 'dark-mode',
                confirmButton: 'dark-mode-confirm',
                actions: 'dark-mode-actions'
            }

        }).then((result) => {
            try {

                if (result.isConfirmed) {
                    // after confirm "adauga lead"
                    const administratorId = findAdministratorId(0, clientData);
                    const tempAdmin = clientData.administratori.persoane_fizice[administratorId].nume;

                    crmTable1.push({
                        id: crmTable1.length + 1,
                        name: tempAdmin,
                        phone: clientData.date_contact.telefon[0],
                        email: clientData.date_contact.email[0],
                        status: 'Nu stie',
                        factura: 'Urmeaza'
                    })

                    // adaugam leadurile in tabel, reincarcam tabelul
                    renderCrmTable(0, 1, crmTable1);
                }

            } catch (error) {
                console.log(error)
            }
        });



        console.log(clientData);

        const administratorId = findAdministratorId(0, clientData);
        const tempAdmin = clientData.administratori.persoane_fizice[administratorId].nume;

        const titleName = document.getElementById('numePrenume');
        titleName.innerHTML = clientData.firma.nume_mfinante + ' - ' + tempAdmin;

        const blockCA = document.getElementById('cifra-de-afaceri');
        blockCA.innerHTML = parseFloat(clientData.bilanturi_mfinante_scurte.ultimul_raportat.cifra_de_afaceri_neta.valoare).toLocaleString('en-US');

        const blockProfit = document.getElementById('profit-actual');
        blockProfit.innerHTML = parseFloat(clientData.bilanturi_mfinante_scurte.ultimul_raportat.profit_net.valoare).toLocaleString('en-US');

        const locuriMunca = document.getElementById('locuri-munca');
        locuriMunca.innerHTML = clientData.bilanturi_mfinante_scurte.ultimul_raportat.numar_mediu_angajati.valoare;

        const codCAEN = document.getElementById('cod-caen');
        codCAEN.innerHTML = clientData.bilanturi_mfinante_scurte.ultimul_raportat.cod_caen;
        const numeCAEN = document.getElementById('nume-caen');
        numeCAEN.innerHTML = listCaen[codCAEN.innerHTML];

        const dateGenerale = document.getElementById('dateGenerale');

        dateGenerale.innerHTML = `
                <span>
                <h4 style="color: #00CCFF">Detalii generale</h4><br>
                CUI: <span>${clientData.firma.cui}</span><br>
                Nr. de înmatriculare: <span>${clientData.firma.j}</span><br>
                Obiect activitate MFINANȚE: <span>${clientData.cod_caen.principal_mfinante.cod} - ${newdataObj.cod_caen.principal_mfinante.label}</span> <br><br>

                <h4>Adresă</h4>
                Localitate: <span>${clientData.adresa.anaf.localitate}</span>
                Județ: <span>${clientData.adresa.anaf.judet}</span>
                Sediu social (RECOM/MFINANȚE): <span>${clientData.adresa.sediu_social.formatat}</span>
                Domiciliu fiscal (ANAF): <span>${clientData.adresa.anaf.formatat}</span>

                </span>
                `;



        d.element(`asociatiConexiuni${tempID}`)
        // d.e.asociatiConexiuni.innerHTML = `<tbody id="asociatiConexiuni"> </tbody>`;


        console.log(d.element(`asociatiConexiuni${tempID}`));


        function addAsocConexLine(i, nume, functie, procentaj, firma, judet, localitate) {

            let int = parseInt(i);
            // all schema of table line
            const jsonData = {
                "tag": "tr",
                "children": [{
                        "tag": "td",
                        "innerHTML": `${++int}`,
                        "attrs": {
                            "scope": "row"
                        }
                    },
                    {
                        "tag": "td",
                        "innerHTML": `${nume}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${functie}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${procentaj}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${firma}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${judet}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${localitate}`
                    }
                ]
            }

            // end of JSON
            d.createElement(jsonData, d.element(`asociatiConexiuni${tempID}`));
        }

        // randuri tabel asociati conexiuni
        for (let i in clientData.conexiuni_asociati) { //DONE
            const nume = clientData.conexiuni_asociati[i].nume; //DONE
            let functie = '';
            let procentaj = '';
            let firma = '';
            let judet = '';
            let localitate = '';

            for (let j in clientData.conexiuni_asociati[i].legaturi) { //DONE
                functie += '<span class="cardWithGrayBorder f-s-15">' + clientData.conexiuni_asociati[i].legaturi[j].functie + '</span><br>'; //DONE
                procentaj += '<span style="color: #2F2F3B; border: none;background-color: #57e546;" class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].procentaj + '</span><br>'; //DONE
                firma += '<span class="cardWithGrayBorder f-s-15">' + clientData.conexiuni_asociati[i].legaturi[j].firma + '</span><br>'; //DONE
                judet += '<span class="cardWithGrayBorder f-s-15">' + clientData.conexiuni_asociati[i].legaturi[j].judet + '</span><br>'; //DONE
                localitate += '<span class="cardWithGrayBorder f-s-15">' + clientData.conexiuni_asociati[i].legaturi[j].localitate + '</span><br>'; //DONE

            }

            addAsocConexLine(i, nume, functie, procentaj, firma, judet, localitate)
        }
    }

    d.createHandler('addClient1', 'click', addClient1);




    const themeSearchInput = document.getElementById('themeSearch');
    const themeDropdown = document.getElementById('themeDropdown');
    const themeOptions = Array.from(themeDropdown.getElementsByTagName('li'));

    themeSearchInput.addEventListener('click', () => {
        themeDropdown.classList.toggle('show');
    });

    themeSearchInput.addEventListener('input', () => {
        const searchText = themeSearchInput.value.toLowerCase();

        themeOptions.forEach((option) => {
            if (option.textContent.toLowerCase().includes(searchText)) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
    });

    themeOptions.forEach((option) => {
        option.addEventListener('click', () => {
            themeSearchInput.value = option.textContent;
            themeDropdown.classList.remove('show');
        });
    });



    let leadData = {};

    function getLeadData(cui) {
        console.log(cui);
        // // (A) URL & CREDENTIALS
        // var url = `https://api.aipro.ro:3001/cui?cui=${cui}`
        // // (B) FETCH WITH HTTP AUTH

        // // momentan scoatem TEMP
        // fetch(url)
        //     // (C) SERVER RESPONSE
        //     .then((result) => {
        //         if (result.status != 200) {
        //             throw new Error("Bad Server Response");
        //         }
        //         return result.text();
        //     })
        //     .then((response) => {
        //         leadData = JSON.parse(response);

        //         document.addEventListener("DOMContentLoaded", function() {
        //             console.log('loaded!');
        //         });

        //         return leadData;
        //     })
        //     .then((leadData) => {
        //         // call populatePage only when newdataObj is defined
        //         if (leadData) {
        //             console.log(leadData);
        //             // also we create popup here
        //             addClient1(leadData);
        //         }
        //     })


        //     // (D) HANDLE ERRORS (OPTIONAL)
        //     .catch((error) => {
        //         // console.log(`eroare CUI: ${error}`);
        //         // localStorage.removeItem('newDataObj');
        //         // alert('CUI gresit')
        //         // window.location.href = window.location.href;
        //     });




        // TEMP folosim JSON
        // (A) URL & CREDENTIALS
        var url = `https://aipro.ro/assets/js/tempCUI${cui}.json`
        // (B) FETCH WITH HTTP AUTH

        // momentan scoatem TEMP
        fetch(url)
            // (C) SERVER RESPONSE
            .then((result) => {
                if (result.status != 200) {
                    throw new Error("Bad Server Response");
                }
                return result.text();
            })
            .then((response) => {
                leadData = JSON.parse(response);

                document.addEventListener("DOMContentLoaded", function() {
                    console.log('loaded!');
                });

                return leadData;
            })
            .then((leadData) => {
                // call populatePage only when newdataObj is defined
                if (leadData) {
                    // generates a random number between 1000 and 9999 (inclusive)
                    const randomId = Math.floor(Math.random() * 9000) + 1000;
                    // also we create popup here
                    addClient1(leadData, randomId);
                }
            })


            // (D) HANDLE ERRORS (OPTIONAL)
            .catch((error) => {
                // console.log(`eroare CUI: ${error}`);
                // localStorage.removeItem('newDataObj');
                // alert('CUI gresit')
                // window.location.href = window.location.href;
            });
    };
</script>
<?php include('partial/footer-end.php') ?>