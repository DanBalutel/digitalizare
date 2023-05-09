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


const oName = "dan";
const oEmail = "admin@admin.admin";
const oMessage = "textul";

function sendTest() {
    fetch('http://api.aipro.ro:3005/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ oName, oEmail, oMessage })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            alert('Email sent successfully!');
            // sendButton.disabled = false;
            // sendButton.innerText = 'Send';
        })
        .catch(error => {
            console.error(error);
            alert('An error occurred while sending the email.');
            // sendButton.disabled = false;
            // sendButton.innerText = 'Send';
        });
}