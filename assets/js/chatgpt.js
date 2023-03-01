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
            ansText = response;
            console.log(ansText);

            // all html rendering goes here
            removeLoading();
            addMessage('left', ansText)
            chatBox.scrollTop = chatBox.scrollHeight;


        })
        .catch(error => console.log(error));
}

// add answer loading animation
function addLoading() {
    const loadingChild = document.createElement('div');
    loadingChild.classList = 'chat-content-leftside';
    loadingChild.id = 'loading-child'
    loadingChild.innerHTML = `
    <div class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="assets/images/user/3.png" alt="">
    <div class="message-data text-end"><span class="message-data-time">10:12 am</span></div>Tasteaza...</div>
    `;
    chatBox.appendChild(loadingChild);
    askGpt.value = '';
    chatBox.scrollTop = chatBox.scrollHeight;
};

// remove answer loading animation
function removeLoading() {
    const loadingChild = document.getElementById('loading-child');
    loadingChild.remove()

}

// add message in chat
function addMessage(msgLoc, msgText) {
    const msgChild = document.createElement('li');
    msgChild.classList = "clearfix";

    if (msgLoc === 'right') {
        msgChild.innerHTML = `
            <div class="message other-message pull-right"><img class="rounded-circle float-end chat-user-img img-30" src="assets/images/user/12.png" alt="">
                <div class="message-data"><span class="message-data-time">10:14 am</span></div>${msgText}
            </div>
        `;
    } else {
        msgChild.innerHTML = `
        <div class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="assets/images/user/3.png" alt="">
        <div class="message-data text-end"><span class="message-data-time">10:12 am</span></div>${msgText}</div>
        `;
    }
    chatBox.appendChild(msgChild);
};

// run when user press enter on chat input box
askGpt.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        console.log('asked GPT: ' + askGpt.value);
        renderAnswer(askGpt.value);
        addMessage('right', askGpt.value)
        addLoading();
    }
});


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
