const askGpt = document.getElementById('askGPT');
const chatBox = document.getElementById('chatBox');
 // Load chat history from localStorage
 if (localStorage.chatMoni) {
    chatBox.innerHTML = localStorage.chatMoni;
} else {
    localStorage.setItem('chatMoni', chatBox.innerHTML);
}

let lastMessage = '';
// Helper function to make API requests
async function makeApiRequest(url, method, headers, body = null) {
    try {
        const fetchOptions = {
            method: method,
            headers: headers,
            cors: 'no-cors'
        };

        // Only add body for methods other than GET
        if (method !== 'GET' && body) {
            fetchOptions.body = JSON.stringify(body);
        }

        const response = await fetch(url, fetchOptions);

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        if (method !== 'GET') {
            const result = await response.json()
            lastMessage = result.data; 
            return result.data;
        } else {
            
            return await response.text();
        }

    } catch (error) {
        console.error('Request failed:', error);
        removeLoading();
    }
}


// Function to handle API responses
async function handleApiResponse(question, isImage = false) {
    const cui = window.localStorage.getItem('cui')
    if(isImage) {
        const incercari = document.getElementById('incercari');
        const img_generate = document.getElementById('img_generate');
        const response2 = await fetch(`https://punctaj.ro/api/incercari/${cui}`);
        const attempts = await response2.text(); // Get the text from the response

        incercari.innerText = `(${1 - attempts} incercari)`; // Update the text

        if (parseInt(attempts) > 0) {
            img_generate.disabled = true; // Disable the button if attempts are 0
        }
    }
    const apiURL = isImage ? `https://punctaj.ro/api/image/${question}/${cui}` : 'https://punctaj.ro/api/chat';
    const method = isImage ? 'GET' : 'POST';
    const headers = { 'Content-Type': 'application/json' };
    const body = isImage ? null : { "userMessage": question, "last": lastMessage  };

  
    const response = await makeApiRequest(apiURL, method, headers, body);

    if (response) {
        const ansText = response; 
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
                <div class="message-data">${msgText}</div> 
            </div>
        `;
    }
    chatBox.appendChild(msgChild);
    localStorage.setItem('chatMoni', chatBox.innerHTML);
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

const aiQuestions = document.querySelectorAll('[id^="ai-question-"]');
aiQuestions.forEach(question => {
    question.addEventListener('click', function () {
        console.log(question.innerText)
        handleApiResponse(question.innerText);
        addMessage('right', question.innerText);
        addLoading();
    });
});
