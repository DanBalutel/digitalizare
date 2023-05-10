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
