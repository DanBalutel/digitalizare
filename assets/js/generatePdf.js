function generatePdf(fileName, fieldsObj, pdfPath) {
    console.log(fieldsObj);
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');

    fetch('http://api.aipro.ro:3003/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'cui': newdataObj.firma.cui,
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


function generatePdfA6(fileName, fieldsObj) {
    console.log(fieldsObj);
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');

    fetch('http://api.aipro.ro:3003/generate-pdf', {
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