const askGpt = document.getElementById('askGPT');
const chatBox = document.getElementById('chatBox');

// Load chat history from localStorage
chatBox.innerHTML = localStorage.chatMoni || '';
localStorage.setItem('chatMoni', chatBox.innerHTML);

let lastMessage = '';

// Simplified API request function
async function makeApiRequest(url, method, body = null) {
    const headers = { 'Content-Type': 'application/json' };
    const fetchOptions = {
        method: method,
        headers: headers,
        body: method !== 'GET' && body ? JSON.stringify(body) : null
    };

    try {
        const response = await fetch(url, fetchOptions);
        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
        return method !== 'GET' ? await response.json() : await response.text();
    } catch (error) {
        console.error('Request failed:', error);
        removeLoading();
    }
}


// Function to handle API responses
async function handleApiResponse(question, isImage = false) {
    const cui = window.localStorage.getItem('cui');
    if (isImage) {
        const incercari = document.getElementById('incercari');
        const img_generate = document.getElementById('img_generate');
        const response2 = await fetch(`https://punctaj.ro/api/incercari/${cui}`);
        const attempts = await response2.text();

        incercari.innerText = `(${1 - attempts} incercari)`;
        if (parseInt(attempts) > 0) {
            img_generate.disabled = true;
        }
    }
    const apiURL = isImage ? `https://aipro.ro/api/image/${question}/${cui}` : 'https://aipro.ro/api/chat';
    const method = isImage ? 'GET' : 'POST';
    const body = isImage ? null : { "userMessage": question, "last": lastMessage };

    askGpt.disabled = true;
    document.getElementById('img_generate').disabled = true;
    document.getElementById('trimite').disabled = true;

    const response = await makeApiRequest(apiURL, method, body);
    if (response) {
        const ansText = response;
        removeLoading();
        addMessage('left', ansText);
        askGpt.disabled = false;
        document.getElementById('img_generate').disabled = false;
        document.getElementById('trimite').disabled = false;
    }
}

// Add loading animation
function addLoading() {
    const loadingChild = document.createElement('div');
    loadingChild.classList.add('chat-content-leftside');
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
    scrollToBottom();
}

function removeLoading() {
    const loadingChild = document.getElementById('loading-child');
    if (loadingChild) {
        loadingChild.remove();
    }
}

function addMessage(msgLoc, msgText) {
    const msgChild = document.createElement('li');
    msgChild.classList.add("clearfix");
    msgChild.innerHTML = msgLoc === 'right' ? 
        `<div class="message other-message pull-right">
            <img class="rounded-circle float-end chat-user-img img-30" src="assets/images/user/12.png" alt="">
            <div class="message-data">${msgText}</div>
         </div>` : 
        `<div class="message my-message">
            <img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
            <div class="message-data">${msgText}</div> 
         </div>`;

    chatBox.appendChild(msgChild);
    localStorage.setItem('chatMoni', chatBox.innerHTML);
    scrollToBottom();
}

function scrollToBottom() {
    const lastMessageElement = chatBox.lastElementChild;
    if (lastMessageElement) {
        lastMessageElement.scrollIntoView({ behavior: 'smooth', block: 'end' });
    }
}
//onclick="copyElementText(this.innerText)"
function copyElementText(content) {
    if (content.includes('img')) {
        return;
    }

    const elem = document.createElement("textarea");
    document.body.appendChild(elem);
    elem.value = content;
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);
    Swal.fire({
        icon: 'success',
        title: 'Succes!',
        text: 'Textul a fost copiat!'
    });
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

