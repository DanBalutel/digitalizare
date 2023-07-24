let dataJson;
let newdataObj;

// detect if screen is mobile
function isScreenWidth768OrMore() {
    if (window.innerWidth >= 768) {
        return true;
    } else {
        return false;
    }
}
var request = {};
var pairs = location.search.substring(1).split('&');
for (var i = 0; i < pairs.length; i++) {
    var pair = pairs[i].split('=');
    request[pair[0]] = pair[1];
}

if (request['cui']) {

    window.localStorage.setItem('cui', request['cui']);
    // REMOVED TEMP monica video popup
    // showVideoMonica(localStorage.displayedModal1);
    getTermeneData(request['cui']);
    populatePage();

} else if (localStorage.cui) {

    getTermeneData(localStorage.cui)
} else {

    // // TEMP removed request for CUI
    // window.localStorage.setItem('cui', '19');
    // REMOVED TEMP monica video popup
    // showVideoMonica(localStorage.displayedModal1);
    getTermeneData(request['cui']);
    populatePage();
    // END TEMP


    // // temp we add if check for login
    // if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {

    //     let codulCUI = prompt("Te rog sa introduci codul CUI :", "");
    //     if (codulCUI == null || codulCUI == "") {
    //         window.location.href = window.location.href;
    //     } else {
    //         window.location.href = window.location.href + `?cui=${codulCUI}`;
    //     }
    // }
}

// temp we add if check for login
if (newdataObj == undefined && window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {

    let codulCUI = prompt("Te rog sa introduci codul CUI :", "");
    if (codulCUI == null || codulCUI == "") {
        window.location.href = window.location.href;
    } else {
        window.location.href = window.location.href + `?cui=${codulCUI}`;
    }
}


function startTimer() {
    // check if local storage has a previous time value
    let prevTime = localStorage.getItem("timeOnPage") || 0;

    // convert previous time to number and start timer
    let time = Number(prevTime);
    let timer = setInterval(() => {
        // increment time and format display
        time++;
        const hours = Math.floor(time / 3600);
        const minutes = Math.floor((time % 3600) / 60);
        const seconds = time % 60;
        const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        if (document.getElementById("timer")) {
            document.getElementById("timer").innerHTML = formattedTime;
        }

        // save current time to local storage
        localStorage.setItem("timeOnPage", time);
    }, 1000);
}



// // CUI 38911092
// function fetchAuth(cuiValue) {
//     // // (A) URL & CREDENTIALS
//     // var url = `https://api.aipro.ro:3004/cui?cui=${cuiValue}`
//     // // (B) FETCH WITH HTTP AUTH
//     // // for testing with new API from termene TEMP
//     // getTermeneData(cuiValue);
//     fetch(url)

//         // // (C) SERVER RESPONSE
//         // .then((result) => {
//         //     if (result.status != 200) { throw new Error("Bad Server Response"); }
//         //     return result.text();
//         // })
//         .then((response) => {

//             dataJson = response;
//             if (dataJson.DateGenerale = undefined && (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php")) {
//                 let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
//                 if (codulCUI == null || codulCUI == "") {
//                     window.location.href = window.location.href;
//                 } else {
//                     window.location.href = window.location.href + `?cui=${codulCUI}`;
//                 }
//                 return;
//             }
//             window.localStorage.setItem('dataObj', dataJson);
//             dataObj = JSON.parse(dataJson);

//             document.addEventListener("DOMContentLoaded", function () {
//                 console.log('loaded!');
//             });

//             // // temp we add if check for login
//             // if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {
//             //     populatePage();
//             // }

//             // all html rendering goes here
//             // populatePage();
//         })
//         // (D) HANDLE ERRORS (OPTIONAL)
//         .catch((error) => {
//             console.log(`eroarea raspuns: ${error}`);
//             // localStorage.removeItem('dataObj');
//             alert('CUI gresit')
//             window.location.href = window.location.origin;
//         });
// }

function getTermeneData(cuiValue) {

    renderLoadingModal('Datele se incarca...');

    // (A) URL & CREDENTIALS
    var url = `https://api.aipro.ro:3001/cui?cui=${cuiValue}`
    // (B) FETCH WITH HTTP AUTH

    // // TEMP we use a local file for fetch
    //     var url = `https://aipro.ro/assets/js/tempCUI9.json`
    localStorage.removeItem("cui");

    fetch(url)

        // (C) SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            newdataJson = response;
            if (newdataJson.DateGenerale = undefined && (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php")) {
                let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
                if (codulCUI == null || codulCUI == "") {
                    window.location.href = window.location.href;
                } else {
                    window.location.href = window.location.href + `?cui=${codulCUI}`;
                }
                return;
            }
            window.localStorage.setItem('newDataObj', newdataJson);
            newdataObj = JSON.parse(newdataJson);

            document.addEventListener("DOMContentLoaded", function () {
                console.log('loaded!');
            });

            return newdataObj;
        })
        .then((newdataObj) => {
            // call populatePage only when newdataObj is defined
            if (newdataObj) {
                populatePage(newdataObj);
            }
        })


        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => {
            console.log(`eroare CUI: ${error}`);
            // localStorage.removeItem('newDataObj');
            // alert('CUI gresit')
            window.location.href = window.location.href;
        });

}

function populatePage(termeneData) {

    const findAdministratorId = function (id, dataObject) {
        const positionName = newdataObj.administratori.persoane_fizice[id].functie;

        if (positionName.includes('administrator')) {
            return id;
        } else {
            const idplus = id + 1;
            return findAdministratorId(idplus, dataObject);
        }
    };

    try {
        removeLoadingModal();
    } catch (e) {
        console.log(e);
    }

    // using new dataObj !!!!!!!!!!!!!!!
    const administratorId = findAdministratorId(0, newdataObj);

    try {

        const loggedName = document.getElementById('loggedName');
        loggedName.innerHTML = newdataObj.administratori.persoane_fizice[administratorId].nume;  //DONE
        const loggedPosition = document.getElementById('loggedPosition');
        loggedPosition.innerHTML = newdataObj.administratori.persoane_fizice[administratorId].functie;  //DONE

        const loggedNameProfile = document.getElementById('loggedNameProfile');
        if (loggedNameProfile) {

            loggedNameProfile.innerHTML = newdataObj.administratori.persoane_fizice[administratorId].nume;  //DONE
            const loggedPositionProfile = document.getElementById('loggedPositionProfile');
            loggedPositionProfile.innerHTML = 'Administrator';

            const adresa = document.getElementById('adresa');
            adresa.innerHTML = newdataObj.administratori.persoane_fizice[administratorId].adresa;  //DONE
            document.getElementById('numeBuletin').value = newdataObj.administratori.persoane_fizice[administratorId].nume;  //DONE

            const dataNastere = document.getElementById('dataNastere');
            dataNastere.innerHTML = newdataObj.administratori.persoane_fizice[administratorId].data_nastere;  //DONE
        }
        if (document.getElementById('cui_file')) {
            document.getElementById('cui_file').value = newdataObj.firma.cui;  //DONE
        }

        // temp we render here all DOOM elements
        const name = document.getElementById('name');
        d.element('dash').innerHTML = newdataObj.firma.nume_mfinante;  //DONE
        // d.element('nameAdmin').innerHTML = newdataObj.administratori.persoane_fizice[administratorId].nume;
        if (name) {
            name.innerHTML = `${newdataObj.firma.nume_mfinante} - Administrator: <br><span style="color: #00CCFF">${newdataObj.administratori.persoane_fizice[administratorId].nume}</span>`;  //DONE
            const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
            chartSituatieFianciara.innerHTML = `Situatie finaciara ${newdataObj.firma.nume_mfinante}`;  //DONE

            const blockCA = document.getElementById('cifra-de-afaceri');
            blockCA.innerHTML = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.cifra_de_afaceri_neta.valoare).toLocaleString('en-US');

            const blockProfit = document.getElementById('profit-actual');
            blockProfit.innerHTML = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.profit_net.valoare).toLocaleString('en-US');

            const mapAnaf = document.getElementById('mapAnaf');
            const addresAnaf = encodeURIComponent(`${newdataObj.adresa.anaf.tara} judet: ${newdataObj.adresa.anaf.judet} ${newdataObj.adresa.anaf.formatat}`);
            mapAnaf.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=' + addresAnaf + '&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

            const locuriMunca = document.getElementById('locuri-munca');
            locuriMunca.innerHTML = newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.numar_mediu_angajati.valoare;

            const codCAEN = document.getElementById('cod-caen');
            codCAEN.innerHTML = newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.cod_caen;
            const numeCAEN = document.getElementById('nume-caen');
            numeCAEN.innerHTML = listCaen[codCAEN.innerHTML];

            const activeTotale = document.getElementById('active-totale');
            const activeTotaleData = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.active_circulante.valoare) + parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.active_imobilizate.valoare);
            activeTotale.innerHTML = activeTotaleData.toLocaleString('en-US')


            const nrStocuri = document.getElementById('nr-stocuri');
            nrStocuri.innerHTML = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.stocuri.valoare).toLocaleString('en-US');

            const casaConturi = document.getElementById('casa-conturi');
            casaConturi.innerHTML = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.casa_si_conturi_la_banci.valoare).toLocaleString('en-US');

            const capitalTotal = document.getElementById('capital-total');
            capitalTotal.innerHTML = parseFloat(newdataObj.bilanturi_mfinante_scurte.ultimul_raportat.capital_total.valoare).toLocaleString('en-US');

            const dateGenerale = document.getElementById('dateGenerale');
            dateGenerale.innerHTML = `
                                        <span>
                                        <h4 style="color: #00CCFF">Detalii generale</h4><br>
                                        CUI: <span>${newdataObj.firma.cui}</span><br>
                                        Nr. de înmatriculare: <span>${newdataObj.firma.j}</span><br>
                                        Obiect activitate MFINANȚE: <span>${newdataObj.cod_caen.principal_mfinante.cod} - ${newdataObj.cod_caen.principal_mfinante.label}</span> <br><br>

                                        <h4>Adresă</h4>
                                        Localitate: <span>${newdataObj.adresa.anaf.localitate}</span>
                                        Județ: <span>${newdataObj.adresa.anaf.judet}</span>
                                        Sediu social (RECOM/MFINANȚE): <span>${newdataObj.adresa.sediu_social.formatat}</span>
                                        Domiciliu fiscal (ANAF): <span>${newdataObj.adresa.anaf.formatat}</span>

                                        </span>
                                        `;

            const dateNow = document.getElementById('dateNow');
            const today = new Date();
            const day = today.getDate().toString().padStart(2, '0');
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const year = today.getFullYear().toString();
            dateNow.innerHTML = `Log in ${day}/${month}/${year}`;

            const chartAsociati = newdataObj.asociati.persoane_fizice;
            const listNameAsociati = [];
            const listCotaAsociati = [];
            let listAsocMobile = '';

            for (const asoc in chartAsociati) {
                listNameAsociati.push(chartAsociati[asoc].nume);
                listCotaAsociati.push(parseFloat(chartAsociati[asoc].procentaj));
                listAsocMobile = listAsocMobile + `<li>${chartAsociati[asoc].nume} - ${chartAsociati[asoc].procentaj}</li>`;
            };

            // pie chart, asociati
            var options8 = {
                chart: {
                    width: 450,
                    type: 'pie',
                },
                series: listCotaAsociati,
                labels: listNameAsociati,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 400
                        },
                        legend: {
                            show: false
                        }
                    }
                }],
                colors: [CubaAdminConfig.primary, CubaAdminConfig.secondary, '#51bb25', '#a927f9', '#f8d62b']
            }

            var chart8 = new ApexCharts(
                document.querySelector("#piechart"),
                options8
            );

            chart8.render();
            d.element('listAsoc').innerHTML = listAsocMobile;

            // basic area chart
            const chartProdMunc = newdataObj.bilanturi_mfinante_scurte;
            const listNrAngaj = [];
            const listAni = [];

            function roundOf(n, p) {
                const n1 = n * Math.pow(10, p + 1);
                const n2 = Math.floor(n1 / 10);
                if (n1 >= (n2 * 10 + 5)) {
                    return (n2 + 1) / Math.pow(10, p);
                }
                return n2 / Math.pow(10, p);
            }

            for (const prod in chartProdMunc) {

                if (chartProdMunc[prod] != null && chartProdMunc[prod].cifra_de_afaceri_neta.valoare != null && chartProdMunc[prod].numar_mediu_angajati.valoare != null) {

                    let nrAngaj = parseInt(chartProdMunc[prod].numar_mediu_angajati.valoare);
                    if (nrAngaj == 0) {
                        nrAngaj = 1;
                    }

                    roundOf(listNrAngaj.push(parseInt(chartProdMunc[prod].cifra_de_afaceri_neta.valoare) / nrAngaj)).toFixed(2);
                    roundOf(listAni.push(chartProdMunc[prod].an)).toFixed(2);
                }

            };

            var options = {
                chart: {
                    height: 350,
                    type: 'area',
                    zoom: {
                        enabled: true
                    },
                    toolbar: {
                        show: true
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 350
                        },
                        legend: {
                            show: true
                        }
                    }
                }],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                series: [{
                    name: "Rentabilitatea",
                    data: listNrAngaj
                }],
                labels: listAni,
                xaxis: {
                    type: 'yeartime',
                },
                yaxis: {
                    opposite: true
                },
                legend: {
                    horizontalAlign: 'left'
                },
                colors: [CubaAdminConfig.primary]

            }

            var chart = new ApexCharts(
                document.querySelector("#basic-apex"),
                options
            );

            chart.render();


            // situatiile financiare
            constSitFin = [];

            for (const prod in chartProdMunc) {
                if (chartProdMunc[prod] != null && chartProdMunc[prod].cifra_de_afaceri_neta.valoare != null && chartProdMunc[prod].profit_pierdere_neta.valoare != null && chartProdMunc[prod].datorii.valoare != null) {
                    const temp = {
                        x: `${chartProdMunc[prod].an}`,
                        y: parseInt(chartProdMunc[prod].cifra_de_afaceri_neta.valoare),
                        z: parseInt(chartProdMunc[prod].profit_pierdere_neta.valoare),
                        a: parseInt(chartProdMunc[prod].datorii.valoare)
                    };
                    constSitFin.push(temp);
                }
            };


            var morris_chart = {
                init: function () {
                    Morris.Bar({
                        element: "morris-simple-bar-chart",
                        data: constSitFin,
                        xkey: "x",
                        ykeys: ["y", "z", "a"],
                        barColors: [CubaAdminConfig.primary, "#51bb25", CubaAdminConfig.secondary],
                        labels: ["Cifra de afaceri", "Profit", "Datorii"]
                    })
                }
            };
            (function ($) {

                morris_chart.init()
            })(jQuery);
        }

        // BLOCKS HEIGHT IN DASHBOARD
        // carduri 4 prima linie
        const ids0 = ["card1", "card2", "card3", "card4"];
        // blocurile de exemplu date generale
        const ids1 = ["cardExemplu", "cardDateGenerale"];
        // harta si asociatii
        const ids2 = ["cardAF", "cardAsoc"];
        // rentabilitatea si situatia fnanciara
        const ids3 = ["cardRA", "cardSF"];
        // carduri cu banci si prognoza meteo
        const ids4 = ['card-1', 'card-2', 'card-3'];
        // carduri active, stocuri, banci si capital total
        const ids5 = ['card5', 'card6', 'card7', 'card8',]

        setMaxHeight(ids0);
        setMaxHeight(ids1);
        setMaxHeight(ids2);
        setMaxHeight(ids3);
        setMaxHeight(ids4);
        setMaxHeight(ids5);



        // using newTermene from now

        d.element('asociatiConexiuni');
        function addAsocConexLine(i, nume, functie, procentaj, firma, judet, localitate) {

            let int = parseInt(i);
            // all schema of table line
            const jsonData = {
                "tag": "tr",
                "children": [
                    {
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
            d.createElement(jsonData, d.e.asociatiConexiuni);
        }

        // randuri tabel asociati conexiuni
        for (let i in newdataObj.conexiuni_asociati) {  //DONE
            const nume = newdataObj.conexiuni_asociati[i].nume;  //DONE
            let functie = '';
            let procentaj = '';
            let firma = '';
            let judet = '';
            let localitate = '';

            for (let j in newdataObj.conexiuni_asociati[i].legaturi) {  //DONE
                functie += '<span class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].functie + '</span><br>';  //DONE
                procentaj += '<span style="color: #2F2F3B; border: none;background-color: #57e546;" class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].procentaj + '</span><br>';  //DONE
                firma += '<span class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].firma + '</span><br>';  //DONE
                judet += '<span class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].judet + '</span><br>';  //DONE
                localitate += '<span class="cardWithGrayBorder f-s-15">' + newdataObj.conexiuni_asociati[i].legaturi[j].localitate + '</span><br>';  //DONE

            }

            addAsocConexLine(i, nume, functie, procentaj, firma, judet, localitate)
        }



        d.element('dosareFirma');
        function addDosare(i, numar, instanta, data, parti, materie, obiect, stadiu) {

            let int = parseInt(i);
            // all schema of table line
            const jsonData = {
                "tag": "tr",
                "children": [
                    {
                        "tag": "td",
                        "innerHTML": `${++int}`,
                        "attrs": {
                            "scope": "row"
                        }
                    },
                    {
                        "tag": "td",
                        "innerHTML": `${numar}<br>${instanta}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${data}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${materie}`
                    },
                    {
                        "tag": "td",
                        "class": "columnCustomFlex",
                        "innerHTML": `${obiect}<br>${stadiu}`
                    }
                ]
            }

            // end of JSON
            d.createElement(jsonData, d.e.dosareFirma);
        }

        const dosare = newdataObj.dosare.rezultate;  //DONE

        // randuri tabel asociati conexiuni
        for (let i in dosare) {

            dataDosar = new Date(dosare[i].data_dosar);
            let numar = `Nr.: ${dosare[i].nr_dosar}`;
            let instanta = `<span class="cardWithGrayBorder f-s-15">${dosare[i].nume_instanta}</span>`;
            let data = `<span class="cardWithGrayBorder f-s-15">${dataDosar.getUTCDate()}/${dataDosar.getUTCMonth() + 1}/${dataDosar.getUTCFullYear()}</span>`;
            let parti = '';
            let materie = dosare[i].materie_juridica;
            let obiect = dosare[i].obiect;
            let stadiu = `<span class="cardWithGrayBorder f-s-15">Stadiu: ${dosare[i].stadiu_procesual}</span>`;

            for (let j in dosare[i].rezultate) {
                parti += `${dosare[i].rezultate[j].denumire}<br>${dosare[i].rezultate[j].calitate}<br><br>`
            }

            addDosare(i, numar, instanta, data, parti, materie, obiect, stadiu)
        }





    } catch (error) {
        console.log(error);
    }





    // END populate page
};

function showVideoMonica(displayedModal1) {
    if (!displayedModal1) {
        localStorage.setItem("displayedModal1", true);
        Swal.fire({
            html: `
                <div class="videoWrapper">
                    <div id="moniStepsVideo"></div>
                </div>
            `,
            width: "700px",
            minHeight: "500px",
            showConfirmButton: true,
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
                const monica1 = document.getElementById("monicaModal1");
                monica1.parentNode.removeChild(monica1);
            } catch (error) {
                console.log(error)
            }

            console.log(result);
            if (window.location.pathname === '/' || window.location.pathname === '/index' || window.location.pathname === '/index.php') {
                window.location.href = window.location.href;
            }
        });

        onYouTubeIframeAPIReady();

    }
}



