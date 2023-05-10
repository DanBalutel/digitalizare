const form = document.querySelector('form');
const sendButton = document.querySelector('#send');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const to = document.querySelector('#to').value;
    const subject = document.querySelector('#subject').value;
    const message = document.querySelector('#message').value;

    sendButton.disabled = true;
    sendButton.innerText = 'Sending...';

    fetch('http://localhost:3005/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ to, subject, message })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            alert('Email sent successfully!');
            sendButton.disabled = false;
            sendButton.innerText = 'Send';
        })
        .catch(error => {
            console.error(error);
            alert('An error occurred while sending the email.');
            sendButton.disabled = false;
            sendButton.innerText = 'Send';
        });
});




function sendTest() {
    // const oName = document.getElementById('oName').value;
    // const oEmail = document.getElementById('oEmail').value;
    // const oMessage = document.getElementById('oMessage').value;

    const eTelefon = "dan";
    const eEmail = "admin@admin.admin";
    const eBuget = "textul";

    fetch('https://api.aipro.ro:3005/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: eEmail, telefon: eTelefon, buget: eBuget })
    })
        .then(response => {
            if (response.ok) {
                console.log('Email sent successfully!');
                alert('Email sent successfully!');
            } else {
                console.error('Error sending email:', response.statusText);
                alert('An error occurred while sending the email.');
            }
        })
        .catch(error => {
            console.error('Error sending email:', error);
            alert('An error occurred while sending the email.');
        });
}
