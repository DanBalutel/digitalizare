let dataObj = {};

// check if CUI is saved and render popup if no
if (document.cookie.includes("cui-present:true")) {
    render('0', false);


} else {

    document.addEventListener("DOMContentLoaded", function () {

        // create popup
        document.body.classList.toggle('hide');
        const cuiPopup = document.createElement('div');
        cuiPopup.id = 'cui-popup';
        cuiPopup.classList = 'show-over';
        cuiPopup.innerHTML = `<div id="cui-popup" class="show-over">
                                <p>Introdu CUI fara RO</p>
                                <input id="CUI" type="text">
                                <button id="render-page">Genereaza DEMO</button>
                            </div>`;
        document.body.appendChild(cuiPopup);

        // render page after CUI click
        const renderBtn = document.getElementById('render-page');
        const cuiValue = document.getElementById('CUI');
        renderBtn.addEventListener("click", function () {
            render(cuiValue.value, true);
            document.body.classList.toggle('hide');
            cuiPopup.remove();
        });


    });

}






function render(cuiValue, requestApi) {
    document.cookie = "cui-present:true";

    // TODO show a loading screen

    // we are saving API requests
    if (requestApi) {
        fetchAuth(cuiValue);
        console.log(dataObj);
    } else {
        dataObj = JSON.parse(window.localStorage.dataObj);
        // all html rendering goes here
        populatePage();

    }

    // TODO remove loading screen
}

function populatePage() {
    // temp we render here all DOOM elements
    const name = document.getElementById('name');
    name.innerHTML = dataObj.DateGenerale.nume;

    const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
    chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

    const blockCA = document.getElementById('cifra-de-afaceri');
    blockCA.innerHTML = parseInt(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data[6].y) ;

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

    // index.JS
    $(function () {
        "use strict";


        console.log('testing dataObj');
        const chartDataCA = dataObj.detalii_grafice.grafice_cifra_de_afaceri.data;
        const chartDataPP = dataObj.detalii_grafice.grafice_profit_pierdere.data;
        console.log(dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.asociati);

        // chart 1

        var ctx = document.getElementById("chart1").getContext('2d');

        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, '#6078ea');
        gradientStroke1.addColorStop(1, '#17c5ea');

        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#ff8359');
        gradientStroke2.addColorStop(1, '#ffdf40');

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [chartDataCA[0].an, chartDataCA[1].an, chartDataCA[2].an, chartDataCA[3].an, chartDataCA[4].an, chartDataCA[5].an, chartDataCA[6].an],
                datasets: [{
                    label: 'Cifra de afaceri',
                    data: [chartDataCA[0].y, chartDataCA[1].y, chartDataCA[2].y, chartDataCA[3].y, chartDataCA[4].y, chartDataCA[5].y, chartDataCA[6].y],
                    borderColor: gradientStroke1,
                    backgroundColor: gradientStroke1,
                    hoverBackgroundColor: gradientStroke1,
                    pointRadius: 0,
                    fill: true,
                    borderWidth: 0
                }, {
                    label: 'Profit',
                    data: [chartDataPP[0].y, chartDataPP[1].y, chartDataPP[2].y, chartDataPP[3].y, chartDataPP[4].y, chartDataPP[5].y, chartDataPP[6].y],
                    borderColor: gradientStroke2,
                    backgroundColor: gradientStroke2,
                    hoverBackgroundColor: gradientStroke2,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 0
                }]
            },

            options: {
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    display: false,
                    labels: {
                        boxWidth: 8
                    }
                },
                tooltips: {
                    displayColors: false,
                },
                scales: {
                    xAxes: [{
                        barPercentage: .5
                    }]
                }
            }
        });


        // chart 2

        var ctx = document.getElementById("chart2").getContext('2d');

        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, '#fc4a1a');
        gradientStroke1.addColorStop(1, '#f7b733');

        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#4776e6');
        gradientStroke2.addColorStop(1, '#8e54e9');


        var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke3.addColorStop(0, '#ee0979');
        gradientStroke3.addColorStop(1, '#ff6a00');

        var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke4.addColorStop(0, '#42e695');
        gradientStroke4.addColorStop(1, '#3bb2b8');


        const chartAsociati = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.asociati;
        const listNameAsociati = [];
        const listCotaAsociati = [];
        const listaAsociati = document.getElementById('lista-asociati');

        for (const asoc in chartAsociati) {
            listNameAsociati.push(chartAsociati[asoc].nume);
            listCotaAsociati.push(chartAsociati[asoc].procentaj);

            const asociat = document.createElement('li');
            asociat.classList = 'list-group-item d-flex bg-transparent justify-content-between align-items-center';
            asociat.innerHTML = `${chartAsociati[asoc].nume} <span class="badge bg-success rounded-pill">${chartAsociati[asoc].procentaj}%</span>`;
            listaAsociati.appendChild(asociat);

        };

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: listNameAsociati,
                datasets: [{
                    backgroundColor: [
                        gradientStroke1,
                        gradientStroke2,
                        gradientStroke3,
                        gradientStroke4
                    ],
                    hoverBackgroundColor: [
                        gradientStroke1,
                        gradientStroke2,
                        gradientStroke3,
                        gradientStroke4
                    ],
                    data: listCotaAsociati,
                    borderWidth: [1, 1, 1, 1]
                }]
            },
            options: {
                maintainAspectRatio: false,
                cutoutPercentage: 75,
                legend: {
                    position: 'bottom',
                    display: false,
                    labels: {
                        boxWidth: 8
                    }
                },
                tooltips: {
                    displayColors: false,
                }
            }
        });



        // worl map

        jQuery('#geographic-map-2').vectorMap(
            {
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                borderColor: '#818181',
                borderOpacity: 0.25,
                borderWidth: 1,
                zoomOnScroll: false,
                color: '#009efb',
                regionStyle: {
                    initial: {
                        fill: '#008cff'
                    }
                },
                markerStyle: {
                    initial: {
                        r: 9,
                        'fill': '#fff',
                        'fill-opacity': 1,
                        'stroke': '#000',
                        'stroke-width': 5,
                        'stroke-opacity': 0.4
                    },
                },
                enableZoom: true,
                hoverColor: '#009efb',
                markers: [{
                    latLng: [21.00, 78.00],
                    name: 'Lorem Ipsum Dollar'

                }],
                hoverOpacity: null,
                normalizeFunction: 'linear',
                scaleColors: ['#b6d6ff', '#005ace'],
                selectedColor: '#c9dfaf',
                selectedRegions: [],
                showTooltip: true,
            });


        // chart 3

        const chartProdMunc = dataObj.Bilanturi;
        const listNrAngaj = [];
        const listAni = [];
        // const listaAsociati = document.getElementById('lista-asociati');

        for (const prod in chartProdMunc) {
            listNrAngaj.unshift(parseInt(chartProdMunc[prod].cifra_de_afaceri_neta) / parseInt(chartProdMunc[prod].numar_mediu_angajati));
            listAni.unshift(chartProdMunc[prod].an);

            // const asociat = document.createElement('li');
            // asociat.classList = 'list-group-item d-flex bg-transparent justify-content-between align-items-center';
            // asociat.innerHTML = `${chartAsociati[asoc].nume} <span class="badge bg-success rounded-pill">${chartAsociati[asoc].procentaj}%</span>`;
            // listaAsociati.appendChild(asociat);

        };

        var ctx = document.getElementById('chart3').getContext('2d');

        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, '#008cff');
        gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: listAni,
                datasets: [{
                    label: 'Revenue',
                    data: listNrAngaj,
                    pointBorderWidth: 2,
                    pointHoverBackgroundColor: gradientStroke1,
                    backgroundColor: gradientStroke1,
                    borderColor: gradientStroke1,
                    borderWidth: 3
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    display: false
                },
                tooltips: {
                    displayColors: false,
                    mode: 'nearest',
                    intersect: false,
                    position: 'nearest',
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                }
            }
        });



        // chart 4

        var ctx = document.getElementById("chart4").getContext('2d');

        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, '#ee0979');
        gradientStroke1.addColorStop(1, '#ff6a00');

        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#283c86');
        gradientStroke2.addColorStop(1, '#39bd3c');

        var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke3.addColorStop(0, '#7f00ff');
        gradientStroke3.addColorStop(1, '#e100ff');

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Completed", "Pending", "Process"],
                datasets: [{
                    backgroundColor: [
                        gradientStroke1,
                        gradientStroke2,
                        gradientStroke3
                    ],

                    hoverBackgroundColor: [
                        gradientStroke1,
                        gradientStroke2,
                        gradientStroke3
                    ],

                    data: [50, 50, 50],
                    borderWidth: [1, 1, 1]
                }]
            },
            options: {
                maintainAspectRatio: false,
                cutoutPercentage: 0,
                legend: {
                    position: 'bottom',
                    display: false,
                    labels: {
                        boxWidth: 8
                    }
                },
                tooltips: {
                    displayColors: false,
                },
            }
        });


        // chart 5

        var ctx = document.getElementById("chart5").getContext('2d');

        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke1.addColorStop(0, '#f54ea2');
        gradientStroke1.addColorStop(1, '#ff7676');

        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
        gradientStroke2.addColorStop(0, '#42e695');
        gradientStroke2.addColorStop(1, '#3bb2b8');

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [1, 2, 3, 4, 5, 6, 7, 8],
                datasets: [{
                    label: 'Clothing',
                    data: [40, 30, 60, 35, 60, 25, 50, 40],
                    borderColor: gradientStroke1,
                    backgroundColor: gradientStroke1,
                    hoverBackgroundColor: gradientStroke1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 1
                }, {
                    label: 'Electronic',
                    data: [50, 60, 40, 70, 35, 75, 30, 20],
                    borderColor: gradientStroke2,
                    backgroundColor: gradientStroke2,
                    hoverBackgroundColor: gradientStroke2,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    display: false,
                    labels: {
                        boxWidth: 8
                    }
                },
                scales: {
                    xAxes: [{
                        barPercentage: .5
                    }]
                },
                tooltips: {
                    displayColors: false,
                }
            }
        });




    });


}