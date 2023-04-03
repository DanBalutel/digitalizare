let dataJson;
let dataObj;
let newdataObj;


// detect if screen is mobile
function isScreenWidth768OrMore() {
    if (window.innerWidth >= 768) {
        return true;
    } else {
        return false;
    }
}


function setMaxHeight(ids) {

    if (isScreenWidth768OrMore()) {
        // initialize max height to 0
        let maxHeight = 0;

        // loop through each id and get its height
        ids.forEach((id) => {
            const element = document.getElementById(id);
            const height = element.clientHeight;

            // update max height if current element is taller
            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        // set all elements' height to max height
        ids.forEach((id) => {
            const element = document.getElementById(id);
            element.style.height = maxHeight + "px";
        });

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



var request = {};
var pairs = location.search.substring(1).split('&');
for (var i = 0; i < pairs.length; i++) {
    var pair = pairs[i].split('=');
    request[pair[0]] = pair[1];
}


if (window.localStorage.dataObj) {

    // show Monica first modal
    showVideoMonica(localStorage.displayedModal1);

    dataObj = JSON.parse(window.localStorage.dataObj);
    newdataObj = JSON.parse(window.localStorage.newDataObj);

    // temp we add if check for login
    if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {

        // show Monica forst modal
        showVideoMonica(localStorage.displayedModal1);

        populatePage();
    }

} else if (request['cui']) {

    // show Monica first modal
    showVideoMonica(localStorage.displayedModal1);

    fetchAuth(request['cui']);

} else {

    // temp we add if check for login
    if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {

        let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
        if (codulCUI == null || codulCUI == "") {
            window.location.href = window.location.href;
        } else {
            window.location.href = window.location.href + `?cui=${codulCUI}`;
        }
        console.log(window.location.pathname);
    }
}

// CUI 38911092
function fetchAuth(cuiValue) {

    renderLoadingModal('Datele se incarca...');

    // (A) URL & CREDENTIALS
    var url = `https://api.raport.ai/cui?cui=${cuiValue}`
    // (B) FETCH WITH HTTP AUTH

    // for testing with new API from termene TEMP

    fetch(url)

        // (C) SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            //   document.getElementById("demoShow").innerHTML = response;
            dataJson = response;
            if (dataJson.DateGenerale = undefined && (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php")) {
                let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
                if (codulCUI == null || codulCUI == "") {
                    window.location.href = window.location.href;
                } else {
                    window.location.href = window.location.href + `?cui=${codulCUI}`;
                }
                return;
            }
            window.localStorage.setItem('dataObj', dataJson);
            dataObj = JSON.parse(dataJson);
            console.log(dataObj);

            document.addEventListener("DOMContentLoaded", function () {
                console.log('loaded!');
            });

            // temp we add if check for login
            if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {
                populatePage();
            }

            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => {
            console.log(error);
            localStorage.removeItem('dataObj');
            alert('CUI gresit')
            window.location.href = window.location.origin;
        });
}

function getTermeneData(cuiValue) {

    // (A) URL & CREDENTIALS
    var url = `https://api.raport.ai:3001/cui?cui=${cuiValue}`
    // (B) FETCH WITH HTTP AUTH

    fetch(url)

        // (C) SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            dataJson = response;
            window.localStorage.setItem('newDataObj', dataJson);
            dataObj = JSON.parse(dataJson);
            console.log(dataObj);

            document.addEventListener("DOMContentLoaded", function () {
                console.log('loaded!');
            });

            // // temp we add if check for login
            // if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {
            //     populatePage();
            // }

            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => {
            console.log(error);
            localStorage.removeItem('dataObj');
            //alert('CUI gresit')
            //            window.location.href = window.location.origin;
        });

}





if (request['cui']) {
    // new Termene API
    getTermeneData(request['cui']);
    newdataObj = JSON.parse(localStorage.newDataObj);
}

function populatePage() {

    try {
        removeLoadingModal();
    } catch (e) {
        console.log(e);
    }

    function findAdministrator(id) {
        const positionName = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.administratori[id].functie;
        if (positionName.includes('administrator')) {
            return dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.administratori[id];
        } else {
            const idplus = id + 1; // increment id by 1 using the + operator instead of ++ 
            console.log(idplus);
            return findAdministrator(idplus); // add return statement to ensure the function returns a value
        }
    };


    try {

        const administrator = findAdministrator(0);

        const loggedName = document.getElementById('loggedName');
        loggedName.innerHTML = administrator.nume;
        const loggedPosition = document.getElementById('loggedPosition');
        loggedPosition.innerHTML = 'Administrator';

        const loggedNameProfile = document.getElementById('loggedNameProfile');
        if (loggedNameProfile) {

            loggedNameProfile.innerHTML = administrator.nume;
            const loggedPositionProfile = document.getElementById('loggedPositionProfile');
            loggedPositionProfile.innerHTML = 'Administrator';

            const adresa = document.getElementById('adresa');
            adresa.innerHTML = administrator.adresa;
            document.getElementById('numeBuletin').value = administrator.nume;

            const dataNastere = document.getElementById('dataNastere');
            dataNastere.innerHTML = administrator.dataNastere.slice(8, 10) + '.' + administrator.dataNastere.slice(5, 7) + '.' + administrator.dataNastere.slice(0, 4);
        }
        if (document.getElementById('cui_file')) {
            document.getElementById('cui_file').value = dataObj.DateGenerale.cui;
        }

        // debug
        console.log(dataObj)

        // temp we render here all DOOM elements
        const name = document.getElementById('name');
        d.element('dash').innerHTML = dataObj.DateGenerale.nume;
        d.element('nameAdmin').innerHTML = administrator.nume;
        if (name) {
            name.innerHTML = `${dataObj.DateGenerale.nume} - Administrator: <br><span style="color: #00CCFF">${administrator.nume}</span>`;
            const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
            chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

            const blockCA = document.getElementById('cifra-de-afaceri');
            blockCA.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data.pop().y).toLocaleString('en-US');;

            const blockProfit = document.getElementById('profit-actual');
            blockProfit.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_profit_pierdere.data.pop().y).toLocaleString('en-US');

            const mapAnaf = document.getElementById('mapAnaf');
            const addresAnaf = encodeURIComponent(dataObj.DateGenerale.adresa);
            mapAnaf.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=' + addresAnaf + '&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

            const locuriMunca = document.getElementById('locuri-munca');
            locuriMunca.innerHTML = dataObj.Bilanturi[0].numar_mediu_angajati;

            const codCAEN = document.getElementById('cod-caen');
            codCAEN.innerHTML = dataObj.Bilanturi[0].cod_caen;
            const numeCAEN = document.getElementById('nume-caen');
            numeCAEN.innerHTML = listCaen[codCAEN.innerHTML];

            const activeTotale = document.getElementById('active-totale');
            const activeTotaleData = parseFloat(dataObj.Bilanturi[0].active_circulante) + parseFloat(dataObj.Bilanturi[0].active_imobilizate);
            activeTotale.innerHTML = activeTotaleData.toLocaleString('en-US')


            const nrStocuri = document.getElementById('nr-stocuri');
            nrStocuri.innerHTML = parseFloat(dataObj.Bilanturi[0].stocuri).toLocaleString('en-US');

            const casaConturi = document.getElementById('casa-conturi');
            casaConturi.innerHTML = parseFloat(dataObj.Bilanturi[0].casa_si_conturi_la_banci).toLocaleString('en-US');

            const capitalTotal = document.getElementById('capital-total');
            capitalTotal.innerHTML = parseFloat(dataObj.Bilanturi[0].capital_total).toLocaleString('en-US');

            const dateGenerale = document.getElementById('dateGenerale');
            dateGenerale.innerHTML = `
                                        <span>
                                        <h4 style="color: #00CCFF">Detalii generale</h4><br>
                                        CUI: <span>${dataObj.DateGenerale.cui}</span><br>
                                        Nr. de înmatriculare: <span>${dataObj.DateGenerale.cod_inmatriculare}</span><br>
                                        Obiect activitate MFINANȚE: <span>${dataObj.Bilanturi[0].cod_caen} - ${listCaen[codCAEN.innerHTML]}</span> <br><br>

                                        <h4>Adresă</h4>
                                        Localitate: <span>${dataObj.DateGenerale.localitate}</span>
                                        Județ: <span>${dataObj.DateGenerale.judet}</span>
                                        Sediu social (RECOM/MFINANȚE): <span>${dataObj.DateGenerale.adresa}</span>
                                        Domiciliu fiscal (ANAF): <span>${dataObj.DateGenerale.adresa_anaf}</span>

                                        </span>
                                        `;

            const dateNow = document.getElementById('dateNow');
            const today = new Date();
            const day = today.getDate().toString().padStart(2, '0');
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const year = today.getFullYear().toString();
            dateNow.innerHTML = `Log in ${day}/${month}/${year}`;

            const chartAsociati = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.asociati;
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
            const chartProdMunc = dataObj.Bilanturi;
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
                roundOf(listNrAngaj.unshift(parseInt(chartProdMunc[prod].cifra_de_afaceri_neta) / parseInt(chartProdMunc[prod].numar_mediu_angajati))).toFixed(2);
                roundOf(listAni.unshift(chartProdMunc[prod].an)).toFixed(2);
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
            const chartDataCA = dataObj.detalii_grafice.grafice_cifra_de_afaceri.data;
            const chartDataPP = dataObj.detalii_grafice.grafice_profit_pierdere.data;
            const chartDataDa = dataObj.detalii_grafice.grafice_datorii.data;

            // for (const pP in chartDataPP) {



            // };

            const minLen = Math.min(chartDataCA.length, chartDataPP.length, chartDataDa.length);
            console.log(`lungimea minima e de: ${minLen}`);

            for (i = 0; i < minLen; i++) {
                console.log(i);
                const temp = {
                    x: `${chartDataCA[i].an}`,
                    y: parseInt(chartDataCA[i].y),
                    z: parseInt(chartDataPP[i].y),
                    a: parseInt(chartDataDa[i].y)
                };

                constSitFin.push(temp);
            }


            "use strict";
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
                "use strict";
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
        for (let i in newdataObj.conexiuni_asociati) {
            console.log(newdataObj.conexiuni_asociati[i]);

            const nume = newdataObj.conexiuni_asociati[i].nume;
            let functie = '';
            let procentaj = '';
            let firma = '';
            let judet = '';
            let localitate = '';

            for (let j in newdataObj.conexiuni_asociati[i].legaturi) {
                functie += '<span class="cardWithGrayBorder">' + newdataObj.conexiuni_asociati[i].legaturi[j].functie + '</span><br>';
                procentaj += '<span style="color: #2F2F3B; border: none;background-color: #57e546;" class="cardWithGrayBorder">' + newdataObj.conexiuni_asociati[i].legaturi[j].procentaj + '</span><br>';
                firma += '<span class="cardWithGrayBorder">' + newdataObj.conexiuni_asociati[i].legaturi[j].firma + '</span><br>';
                judet += '<span class="cardWithGrayBorder">' + newdataObj.conexiuni_asociati[i].legaturi[j].judet + '</span><br>';
                localitate += '<span class="cardWithGrayBorder">' + newdataObj.conexiuni_asociati[i].legaturi[j].localitate + '</span><br>';

            }

            addAsocConexLine(i, nume, functie, procentaj, firma, judet, localitate)
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



