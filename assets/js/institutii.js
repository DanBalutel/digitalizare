function generatePdf(fileName, fieldsObj) {

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
                'subsemnatul': 'numele'
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

            // DEBUG
            console.log(pdfLink);


        })
        .catch(error => console.log(error));



}