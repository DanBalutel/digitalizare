const form = document.querySelector('form');
const sendButton = document.querySelector('#send');

function sendTest() {
    // const oName = document.getElementById('oName').value;
    // const oEmail = document.getElementById('oEmail').value;
    // const oMessage = document.getElementById('oMessage').value;

    const eEmail = document.getElementById('oEmail').value;
    const eTelefon = document.getElementById('oTelefon').value;
    const eBuget = document.getElementById('oBuget').value;
    const dateGenerale = `
    
    Detalii generale:
    CUI: ${newdataObj.firma.cui}
    Nr. de înmatriculare: ${newdataObj.firma.j}
    Cod CAEN: ${newdataObj.cod_caen.principal_mfinante.cod} - ${newdataObj.cod_caen.principal_mfinante.label}
    Administrator: ${findAdministratorId(0, newdataObj)}

    Adresă:
    Localitate: ${newdataObj.adresa.anaf.localitate}
    Județ: ${newdataObj.adresa.anaf.judet}
    Sediu social (RECOM/MFINANȚE): ${newdataObj.adresa.sediu_social.formatat}
    Domiciliu fiscal (ANAF): ${newdataObj.adresa.anaf.formatat}
    `;

    fetch('https://api.aipro.ro:3005/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: eEmail,
            telefon: eTelefon,
            buget: eBuget,
            dateGenerale: dateGenerale

        })
    })
        .then(response => {
            if (response.ok) {
                console.log('Email sent successfully!');
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Cererea de oferta a fost inregistrata cu succes!'
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
