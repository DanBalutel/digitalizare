// elements
const askGpt = document.getElementById('askGPT');
const chatBox = document.getElementById('chatBox');


// functions

// acces API with question
function renderAnswer(question) {
    fetch('https://api.raport.ai/post', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            'quest': question
        }),
        cors: {
            origin: ['https://danbalutel.github.io', 'http://penguin.linux.test'],
            methods: 'GET, HEAD, PUT, PATCH, DELETE',
        }


    })
        // SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            ansText = JSON.parse(response);

            // all html rendering goes here
            removeLoading();
            addMessage('left', ansText.message)
            chatBox.scrollTop = chatBox.scrollHeight;


        })
        .catch(error => console.log(error));
}

function addLoading() {
    const loadingChild = document.createElement('div');
    loadingChild.classList = 'chat-content-leftside';
    loadingChild.id = 'loading-child'
    loadingChild.innerHTML = `
    <div id="chat-feed" class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="assets/images/user/3.png" alt="">
    <div class="message-data text-end"></div>Se genereaza raspunsul <img src="https://i.pinimg.com/originals/65/ba/48/65ba488626025cff82f091336fbf94bb.gif" width="80"></div>
    `;
    chatBox.appendChild(loadingChild);
    askGpt.value = '';
    loadingChild.scrollTop = loadingChild.scrollHeight;
    renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');
    loadingChild.scrollIntoView()
};

// remove answer loading animation
function removeLoading() {
    const loadingChild = document.getElementById('loading-child');
    loadingChild.remove()
    removeLoadingModal();

}

// add message in chat
function addMessage(msgLoc, msgText) {
    const msgChild = document.createElement('li');
    msgChild.classList = "clearfix";

    if (msgLoc === 'right') {
        msgChild.innerHTML = `
            <div id="chat-feed" class="message other-message pull-right"><img class="rounded-circle float-end chat-user-img img-30" src="assets/images/user/12.png" alt="">
                <div class="message-data" id="text">${msgText}
            </div>
        `;
    } else {
        msgChild.innerHTML = `
        <div id="chat-feed" class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="assets/images/user/3.png" alt="">
        <div class="message-data text-end" id="text" onclick="copyElementText(this.id)">${msgText}</div>
        `;
    }
    chatBox.appendChild(msgChild);
    msgChild.scrollIntoView()
};

function copyElementText(id) {
    var text = document.getElementById(id).innerText;
    var elem = document.createElement("textarea");
    document.body.appendChild(elem);
    elem.value = text;
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);
}
// run when user press enter on chat input box
askGpt.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        renderAnswer(askGpt.value);
        addMessage('right', askGpt.value)
        addLoading();
    }
});

document.getElementById('trimite').addEventListener("click", function () {
    renderAnswer(askGpt.value);
    addMessage('right', askGpt.value)
    addLoading();
})

const aiQuestion1 = document.getElementById('ai-question-1');
aiQuestion1.addEventListener('click', function () {
    renderAnswer(aiQuestion1.innerHTML);
    addMessage('right', aiQuestion1.innerHTML)
    addLoading();
})
const aiQuestion2 = document.getElementById('ai-question-2');
aiQuestion2.addEventListener('click', function () {
    renderAnswer(aiQuestion2.innerHTML);
    addMessage('right', aiQuestion2.innerHTML)
    addLoading();
})
const aiQuestion3 = document.getElementById('ai-question-3');
aiQuestion3.addEventListener('click', function () {
    renderAnswer(aiQuestion3.innerHTML);
    addMessage('right', aiQuestion3.innerHTML)
    addLoading();
})
const aiQuestion4 = document.getElementById('ai-question-4');
aiQuestion4.addEventListener('click', function () {
    renderAnswer(aiQuestion4.innerHTML);
    addMessage('right', aiQuestion4.innerHTML)
    addLoading();
})
const aiQuestion5 = document.getElementById('ai-question-5');
aiQuestion5.addEventListener('click', function () {
    renderAnswer(aiQuestion5.innerHTML);
    addMessage('right', aiQuestion5.innerHTML)
    addLoading();
})
const aiQuestion6 = document.getElementById('ai-question-6');
aiQuestion6.addEventListener('click', function () {
    renderAnswer(aiQuestion6.innerHTML);
    addMessage('right', aiQuestion6.innerHTML)
    addLoading();
})
