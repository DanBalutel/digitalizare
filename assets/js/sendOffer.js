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
    // const oName = document.getElementById('oName').value;
    // const oEmail = document.getElementById('oEmail').value;
    // const oMessage = document.getElementById('oMessage').value;

    const eEmail = document.getElementById('oEmail').value;
    const eTelefon = document.getElementById('oTelefon').value;
    const eBuget = document.getElementById('oBuget').value;
    const eCui = document.getElementById('oCui').value;
    let eClient = '';
    let eRegcom = '';
    let eAdresa = '';




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
            "pdfPath": "https://aipro.ro/assets/pdf/aipro-prezentare_3.pdf",
            "fieldValues": {
                "client": eClient,
                "cif": eCui,
                "regcom": eRegcom,
                "adresa": eAdresa,
                "suma": eBuget
            },
            "cui": eCui
        })
    })
        .then(response => {
            if (response.ok) {
                console.log(response);
                
            } else {
                
            }
        })
        .catch(error => {
            // console.error('Error sending email:', error);
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Ups...',
            //     text: 'A aparut o eroare, va rugam sa incercati inca o data'
            // });
        });


}
