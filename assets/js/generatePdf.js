function generatePdf(fileName, fieldsObj, pdfPath) {
    console.log(fieldsObj);
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');

    fetch('https://ai.aipro.ro/proxy.php?path=jspdf/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'cui': newdataObj.CUI,
            'fileName': fileName,
            'pdfPath': pdfPath,
            'fieldValues': fieldsObj
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
            window.location.href = pdfLink.link;
        })
        .catch(error => console.log(error));



}

// generatePdf('pdfSample', fieldsObj, 'https://aipro.ro/assets/pdf/cerere.pdf');


function generatePdfA6(fileName, fieldsObj) {
    console.log(fieldsObj);
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');

    fetch('https://ai.aipro.ro/proxy.php?path=jspdf/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'cui': newdataObj.firma.cui,
            'fileName': fileName,
            'pdfPath': 'https://aipro.ro/assets/pdf/anexa6_3.pdf',
            'fieldValues': fieldsObj
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
            window.location.href = pdfLink.link;
        })
        .catch(error => console.log(error));



}