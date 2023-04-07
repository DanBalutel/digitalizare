function generatePdf(fileName, fieldsObj) {
    // loading
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');
    const administratorId = findAdministratorId(0);

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
                'subsemnatul': newdataObj.administratori.persoane_fizice[administratorId].nume || '',
                'domiciliat': newdataObj.administratori.persoane_fizice[administratorId].localitate || '',
                'strada': newdataObj.administratori.persoane_fizice[administratorId].localitate || '',
                'judet': newdataObj.administratori.persoane_fizice[administratorId].judet || '',
                'calitate': newdataObj.administratori.persoane_fizice[administratorId].functie || '',
                'firma':  newdataObj.firma.nume_mfinante || '',
                'nr_ordine_rc':  newdataObj.firma.j || '',
                'CUI': newdataObj.firma.cui.toString() || '',
                'sediu_domiciliat': newdataObj.adresa.anaf.localitate || '',
                'sediu_strada': newdataObj.adresa.anaf.strada || '',
                'sediu_numar': newdataObj.adresa.anaf.numar || '',
                'sediu_bloc': newdataObj.adresa.anaf.bloc || '',
                'sediu_scara': newdataObj.adresa.anaf.scara || '',
                'sediu_etaj': newdataObj.adresa.anaf.etaj || '',
                'sediu_apartament': newdataObj.adresa.anaf.apartament || '' ,
                'sediu_judet': newdataObj.adresa.anaf.judet || '',
                'sediu_cod': newdataObj.adresa.anaf.cod_postal.toString() || '',
                'sediu_telefon': newdataObj.date_contact.telefon.toString() || '',
                'sediu_fax': newdataObj.date_contact.fax.toString() || '',
                'sediu_mail': newdataObj.date_contact.email || '',
                'sediu_web': newdataObj.date_contact.web || '',
                'CAEN_rev1.0': newdataObj.cod_caen.principal_bt.substring(0,40) || '',
                'CAEN_rev1.1': newdataObj.cod_caen.principal_bt.substring(40,400) || ''
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