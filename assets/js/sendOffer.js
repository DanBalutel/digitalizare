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

    const eEmail = document.getElementById('oEmail').value;
    const eTelefon = document.getElementById('oTelefon').value;
    const eBuget = document.getElementById('oBuget').value;

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
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Email sent successfully'
                });
            } else {
                console.error('Error sending email:', response.statusText);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred while sending the email'
                });
            }
        })
        .catch(error => {
            console.error('Error sending email:', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'An error occurred while sending the email'
            });
        });
}
