function generatePdf() {

    fetch('http://api.raport.ai:3003/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'cui': newdataObj.firma.cui,
            'pdfPath': 'https://aipro.ro/assets/pdf/cerere.pdf',
            'fieldValues': {} 
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

            if (!localStorage.conversationId) {
                localStorage.setItem("conversationId", ansText.conversationId);
                localStorage.setItem("messageId", ansText.messageId);
            } else {
                localStorage.setItem("messageId", ansText.messageId);
            }
            addMessage('left', ansText.response.replace(/(\r\n|\n|\r)/gm, '<br>'))
            chatBox.scrollTop = chatBox.scrollHeight;


        })
        .catch(error => console.log(error));



}