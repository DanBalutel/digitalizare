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




    function trimiteOferta(projectID, eNume, eCui, eEmail, eTelefon, eBuget, eLink, source) {
        fetch('https://aipro.ro/proxy.php?path=email/sendMail', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "projectID": projectID,
                "email": eEmail,
                "subiect": `Oferta trimisa la: ${eEmail}`,
                "continut": `
                CUI: ${eCui}
                Email: ${eEmail}
                Telefon: ${eTelefon}
                Nume Prenume: ${eNume}
                Buget: ${eBuget}
                `,
                "source": source,
                "fileList": eLink
            })
        })
            .then(response => {
                if (response.ok) {
                    console.log('Email sent successfully!');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Cererea de oferta a fost inregistrata cu succes!'
                    }).then(() => {
                        // After the Swal message, redirect the user
                        // window.location.href = `oferta.php?cui=${encodeURIComponent(eCui)}&email=${encodeURIComponent(eEmail)}&telefon=${encodeURIComponent(eTelefon)}&buget=${encodeURIComponent(eBuget)}`;
                    });
                } else {
                    console.error('Error sending email:', response.statusText);
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

    function trimiteOfertaClient(projectID, eNume, eCui, eEmail, eTelefon, eBuget, eLink, source) {
        fetch('https://aipro.ro/proxy.php?path=email/sendMail', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "projectID": projectID,
                "email": eEmail,
                "subiect": `Oferta trimisa la: ${eEmail}`,
                "continut": `
                CUI: ${eCui}
                Email: ${eEmail}
                Telefon: ${eTelefon}
                Nume Prenume: ${eNume}
                Buget: ${eBuget}
                `,
                "source": source,
                "fileList": eLink
            })
        })
            .then(response => {
                if (response.ok) {
                    console.log('Email to client sent successfully!');
                } else {
                    console.error('Error sending email:', response.statusText);
                }
            })
            .catch(error => {
                console.error('Error sending email:', error);
            });
    }





    fetch('https://aipro.ro/proxy.php?path=jspdf/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "pdfPath": "https://aipro.ro/assets/pdf/aipro_oferta.pdf",
            "fileName": "ofertapret",
            "fieldValues": {
                "nume": oNume,
                "cui": oCui,
                "email": oEmail,
                "telefon": oTelefon,
                "suma": oBuget + " Lei"
            },
            "cui": oCui
        })
    })
        // SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            console.log(result);
            return result.text();
        })
        .then((response) => {
            pdfLink = JSON.parse(response);
            console.log(pdfLink.link);

            // trimite oferta Alex
            trimiteOferta("AiPro.ro", oNume, oCui, oEmail, oTelefon, oBuget, `
            [{
                filename: 'oferta_aipro.pdf',
                path: ${pdfLink.link},
                contentType: 'application/pdf'
            }]
            `, 0);//projectID, eNume, eCui, eEmail, eTelefon, eBuget, eLink, source
            // trimite oferta client
            trimiteOfertaClient("AiPro", oNume, oCui, oEmail, oTelefon, oBuget, `
            [{
                filename: 'oferta_aipro.pdf',
                path: ${pdfLink.link},
                contentType: 'application/pdf'
            }]
            `, 0);
        })
        .catch(error => console.log(error));



}
