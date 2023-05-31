const form = document.querySelector('form');
const sendButton = document.querySelector('#send');
const findAdministratorId = function (id, dataObject) {
    const positionName = dataObject.administratori.persoane_fizice[id].functie;

    if (positionName.includes('administrator')) {
        return id;
    } else {
        const idplus = id + 1;
        return findAdministratorId(idplus, dataObject);
    }
};

function sendTest() {

    const oNume = document.getElementById('oNume').value;
    const oCui = document.getElementById('oCui').value;
    const oEmail = document.getElementById('oEmail').value;
    const oTelefon = document.getElementById('oTelefon').value;
    const oBuget = document.getElementById('oBuget').value;




    // fetch('https://api.aipro.ro:3005/send', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify({
    //         email: eEmail,
    //         telefon: eTelefon,
    //         buget: eBuget
    //     })
    // })
    //     .then(response => {
    //         if (response.ok) {
    //             console.log('Email sent successfully!');
    //             Swal.fire({
    //                 icon: 'success',
    //                 title: 'Success!',
    //                 text: 'Cererea de oferta a fost inregistrata cu succes!'
    //             }).then(() => {
    //                 // After the Swal message, redirect the user
    //                 window.location.href = `oferta.php?cui=${encodeURIComponent(eCui)}&email=${encodeURIComponent(eEmail)}&telefon=${encodeURIComponent(eTelefon)}&buget=${encodeURIComponent(eBuget)}`;
    //             });
    //         } else {
    //             console.error('Error sending email:', response.statusText);
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Ups...',
    //                 text: 'A aparut o eroare, va rugam sa incercati inca o data'
    //             });
    //         }
    //     })
    //     .catch(error => {
    //         console.error('Error sending email:', error);
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Ups...',
    //             text: 'A aparut o eroare, va rugam sa incercati inca o data'
    //         });
    //     });






    fetch('https://api.aipro.ro:3003/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "pdfPath": "https://aipro.ro/assets/pdf/aipro_prezentare.pdf",
            "fileName": "ofertapret",
            "fieldValues": {
                "client": oNume,
                "cif": oCui,
                "suma": oBuget
            },
            "cui": oCui
        })
    })
        .then(result => {
            console.log(result);

            if (result.ok) {

            } else {
                console.error('Error sending email:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    text: 'A aparut o eroare, va rugam sa incercati inca o data'
                });
            }
        })
        .catch(error => {
            console.error('Error sending email:', error);
            Swal.fire({
                icon: 'error',
                title: 'Ups...',
                text: 'A aparut o eroare, va rugam sa incercati inca o data'
            });
        });


}
