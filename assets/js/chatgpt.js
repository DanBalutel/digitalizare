// Elements
const askGpt = document.getElementById('askGPT');
const chatBox = document.getElementById('chatBox');

// Load chat history from localStorage
if (localStorage.chatMoni) {
    chatBox.innerHTML = localStorage.chatMoni;
} else {
    localStorage.setItem('chatMoni', chatBox.innerHTML);
}

// Helper function to make API requests
async function makeApiRequest(url, method, headers, body) {
    try {
        const response = await fetch(url, {
            method: method,
            headers: headers,
            body: JSON.stringify(body),
            cors: 'no-cors'
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.text();
    } catch (error) {
        console.error('Request failed:', error);
        removeLoading();
    }
}

// Function to handle API responses
async function handleApiResponse(question, isImage = false) {
    const apiURL = isImage ? `https://punctaj.ro/api/image/${question}` : 'https://ai.aipro.ro/proxy.php?path=gpt';
    const method = isImage ? 'GET' : 'POST';
    const headers = { 'Content-Type': 'application/json' };
    const body = isImage ? null : { "question": question };

    const response = await makeApiRequest(apiURL, method, headers, body);

    if (response) {
        const ansText = response; // Assuming response is the text to be displayed
        removeLoading();
        addMessage('left', ansText);
        chatBox.scrollTop = chatBox.scrollHeight;
    }
}

// Add loading animation
function addLoading() {
    const loadingChild = document.createElement('div');
    loadingChild.classList = 'chat-content-leftside';
    loadingChild.id = 'loading-child';
    loadingChild.innerHTML = `
        <div id="chat-feed" class="message my-message">
            <img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
            <div class="message-data text-end">Se genereaza raspunsul 
                <img src="https://i.pinimg.com/originals/65/ba/48/65ba488626025cff82f091336fbf94bb.gif" width="80">
            </div>
        </div>
    `;
    chatBox.appendChild(loadingChild);
    askGpt.value = '';
    loadingChild.scrollTop = loadingChild.scrollHeight;
}

// Remove loading animation
function removeLoading() {
    const loadingChild = document.getElementById('loading-child');
    if (loadingChild) {
        loadingChild.remove();
    }
}

// Add message to chat
function addMessage(msgLoc, msgText) {
    const msgChild = document.createElement('li');
    msgChild.classList = "clearfix";

    if (msgLoc === 'right') {
        msgChild.innerHTML = `
            <div id="chat-feed" class="message other-message pull-right">
                <img class="rounded-circle float-end chat-user-img img-30" src="assets/images/user/12.png" alt="">
                <div class="message-data">${msgText}</div>
            </div>
        `;
    } else {
        msgChild.innerHTML = `
            <div id="chat-feed" class="message my-message">
                <img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
                <div class="message-data" style="cursor:pointer;" title="Copiaza" onclick="copyElementText(this.innerText)">${msgText}</div>
            </div>
        `;
    }
    chatBox.appendChild(msgChild);
    localStorage.setItem('chatMoni', chatBox.innerHTML);
}

function copyElementText(content) {
    const elem = document.createElement("textarea");
    document.body.appendChild(elem);
    elem.value = content;
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);
    alert('Textul a fost copiat!');
}

askGpt.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        handleApiResponse(askGpt.value);
        addMessage('right', askGpt.value);
        addLoading();
    }
});

function clearChatHistory() {
    localStorage.removeItem('chatMoni');
    localStorage.removeItem('conversationId');
    window.location.reload();
}

document.getElementById('trimite').addEventListener("click", function () {
    handleApiResponse(askGpt.value);
    addMessage('right', askGpt.value);
    addLoading();
});

document.getElementById('img_generate').addEventListener("click", function () {
    handleApiResponse(askGpt.value, true);
    addMessage('right', askGpt.value);
    addLoading();
});

const aiQuestions = document.querySelectorAll('[id^="ai-question-"]');
aiQuestions.forEach(question => {
    question.addEventListener('click', function () {
        handleApiResponse(question.innerText);
        addMessage('right', question.innerText);
        addLoading();
    });
});
