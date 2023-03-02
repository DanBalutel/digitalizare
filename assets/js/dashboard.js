let dataJson;
let dataObj;

var request = {};
var pairs = location.search.substring(1).split('&');
for (var i = 0; i < pairs.length; i++) {
    var pair = pairs[i].split('=');
    request[pair[0]] = pair[1];
}

if (window.localStorage.dataObj) {
    dataObj = JSON.parse(window.localStorage.dataObj);
    populatePage();

} else if (request['cui']) {
    fetchAuth(request['cui']);
} else {

    let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
    if (codulCUI == null || codulCUI == "") {
        window.location.href = window.location.href;
    } else {
        window.location.href = window.location.href + `?cui=${codulCUI}`;
    }
}


console.log(request['cui']);


// CUI 38911092
function fetchAuth(cuiValue) {
    // (A) URL & CREDENTIALS
    var url = `https://api.raport.ai/cui?cui=${cuiValue}`
    // (B) FETCH WITH HTTP AUTH
    fetch(url)

        // (C) SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            //   document.getElementById("demoShow").innerHTML = response;
            dataJson = response;
            window.localStorage.setItem('dataObj', dataJson);
            dataObj = JSON.parse(dataJson);
            console.log(dataObj);

            document.addEventListener("DOMContentLoaded", function () {
                console.log('loaded!');
            });

            populatePage();


            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => { console.log(error); });
}

function populatePage() {
    // temp we render here all DOOM elements
    const name = document.getElementById('name');
    name.innerHTML = dataObj.DateGenerale.nume;

    // const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
    // chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

    const blockCA = document.getElementById('cifra-de-afaceri');
    blockCA.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data.pop().y).toLocaleString('en-US');    ;

    const blockProfit = document.getElementById('profit-actual');
    blockProfit.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_profit_pierdere.data.pop().y).toLocaleString('en-US');

    const mapAnaf = document.getElementById('mapAnaf');
    const addresAnaf = encodeURIComponent(dataObj.DateGenerale.adresa);
    mapAnaf.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=' + addresAnaf + '&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

    const locuriMunca = document.getElementById('locuri-munca');
    locuriMunca.innerHTML = dataObj.Bilanturi[0].numar_mediu_angajati;

    const codCAEN = document.getElementById('cod-caen');
    codCAEN.innerHTML = dataObj.Bilanturi[0].cod_caen;

    const activeTotale = document.getElementById('active-totale');
    const activeTotaleData = parseFloat(dataObj.Bilanturi[0].active_circulante) + parseFloat(dataObj.Bilanturi[0].active_imobilizate);
    activeTotale.innerHTML = activeTotaleData.toLocaleString('en-US')


    const nrStocuri = document.getElementById('nr-stocuri');
    nrStocuri.innerHTML = parseFloat(dataObj.Bilanturi[0].stocuri).toLocaleString('en-US');

    const casaConturi = document.getElementById('casa-conturi');
    casaConturi.innerHTML = parseFloat(dataObj.Bilanturi[0].casa_si_conturi_la_banci).toLocaleString('en-US');

    const capitalTotal = document.getElementById('capital-total');
    capitalTotal.innerHTML = parseFloat(dataObj.Bilanturi[0].capital_total).toLocaleString('en-US');


    const chartAsociati = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.asociati;
    const listNameAsociati = [];
    const listCotaAsociati = [];

    for (const asoc in chartAsociati) {
        listNameAsociati.push(chartAsociati[asoc].nume);
        listCotaAsociati.push(chartAsociati[asoc].procentaj);

    };


    var optionsCircle = {
        chart: {
            type: "radialBar",
            height: 375,
            offsetY: -30,
            offsetX: 20,
        },
        plotOptions: {
            radialBar: {
                size: undefined,
                inverseOrder: false,
                hollow: {
                    margin: 10,
                    size: "30%",
                    background: "transparent",
                },
                track: {
                    show: true,
                    background: "#f2f2f2",
                    strokeWidth: "10%",
                    opacity: 1,
                    margin: 3,
                },
            },
        },
        series: listCotaAsociati,
        labels: listNameAsociati,
        legend: {
            show: true,
            fontSize: "16px",
            fontFamily: "Roboto, sans-serif",
            fontWeight: 500,
            labels: {
                colors: "#2C323F",
            },
            markers: {
                width: 86,
                height: 18,
                radius: 3,
            },
        },
        colors: [CubaAdminConfig.secondary, CubaAdminConfig.primary, "#51bb25"],
        responsive: [{
            breakpoint: 767,
            options: {
                title: {
                    style: {
                        fontSize: "16px",
                    },
                },
            },
        }]
    };

    var chartCircle = new ApexCharts(
        document.querySelector("#circlechart"),
        optionsCircle
    );
    chartCircle.render();





}