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

            document.addEventListener( "DOMContentLoaded", function() {
                console.log('loaded!');
            });

            populatePage();


            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => { console.log(error); });
}

fetchAuth(38911092);

function populatePage() {
    // temp we render here all DOOM elements
    const name = document.getElementById('name');
    name.innerHTML = dataObj.DateGenerale.nume;

    // const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
    // chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

    const blockCA = document.getElementById('cifra-de-afaceri');
    blockCA.innerHTML = parseInt(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data.pop().y);

    const blockProfit = document.getElementById('profit-actual');
    blockProfit.innerHTML = parseInt(dataObj.detalii_grafice.grafice_profit_pierdere.data.pop().y);

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
        series: [90, 63, 50],
        labels: ["Skill 01", "Skill 02", "Skill 03"],
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