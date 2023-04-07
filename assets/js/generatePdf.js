function generatePdf(fileName, fieldsObj) {
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');
    const administrator = findAdministrator(0);

    fetch('http://api.raport.ai:3003/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'cui': newdataObj.firma.cui,
            'fileName': 'pdfSample',
            'pdfPath': 'https://aipro.ro/assets/pdf/cerere.pdf',
            'fieldValues': {
                'subsemnatul': administrator,
                'domiciliat': 
            } 
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
            window.open(pdfLink.link, '_blank');
        })
        .catch(error => console.log(error));



}