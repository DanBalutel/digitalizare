console.log('I am here !!!');


let dataJson;
let dataObj;
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

            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => { console.log(error); });
}

fetchAuth(38911092);
populatePage();

function populatePage() {
    // temp we render here all DOOM elements
    const name = document.getElementById('name');
    name.innerHTML = dataObj.DateGenerale.nume;

    const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
    chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

    const blockCA = document.getElementById('cifra-de-afaceri');
    blockCA.innerHTML = parseInt(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data[6].y);

    const blockProfit = document.getElementById('profit-actual');
    blockProfit.innerHTML = parseInt(dataObj.detalii_grafice.grafice_profit_pierdere.data[6].y);

    const mapAnaf = document.getElementById('mapAnaf');
    const addresAnaf = encodeURIComponent(dataObj.DateGenerale.adresa);
    mapAnaf.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=' + addresAnaf + '&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

    const locuriMunca = document.getElementById('locuri-munca');
    locuriMunca.innerHTML = dataObj.Bilanturi[0].numar_mediu_angajati;

    const codCAEN = document.getElementById('cod-caen');
    codCAEN.innerHTML = dataObj.Bilanturi[0].cod_caen;

    const activeTotale = document.getElementById('active-totale');
    activeTotale.innerHTML = parseInt(dataObj.Bilanturi[0].active_circulante) + parseInt(dataObj.Bilanturi[0].active_imobilizate);

    const nrStocuri = document.getElementById('nr-stocuri');
    nrStocuri.innerHTML = dataObj.Bilanturi[0].stocuri;

    const casaConturi = document.getElementById('casa-conturi');
    casaConturi.innerHTML = dataObj.Bilanturi[0].casa_si_conturi_la_banci;

    const capitalTotal = document.getElementById('capital-total');
    capitalTotal.innerHTML = dataObj.Bilanturi[0].capital_total;
    console.log(`capital Total: ${dataObj.Bilanturi[0].capital_total}`)
}