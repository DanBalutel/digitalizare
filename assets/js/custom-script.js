// you can add your custom script here

class ElementHandler {
    constructor() {
        this.e = {};
    }

    // add Element
    a(id) {
        if (this.e[id]) {
            console.log('element already added');
            return this.e[id];
        } else {
            const element = document.getElementById(id);
            this.e[id] = element;
            console.log(`added new element with id: ${id}`);
            return element;
        }

    }

    // Remove Element
    // r(id) {
    //     if (this.e[id]) {
    //         this.e[id].parentNode.removeChild(element);
    //         delete this.e[id];
    //     } else {
    //         const element = document.getElementById(id);
    //         if (element) {
    //             element.parentNode.removeChild(element);
    //             delete this.e[id];
    //         }
    //     }

    // }

    // Create Event Handler
    ch(id, type, handler) {
        if (this.e[id]) {
            const element = this.e[id];
            if (element) {
                element.addEventListener(type, handler);
            }
        } else {
            const element = this.addElement(id);
            if (element) {
                element.addEventListener(type, handler);
            }
        }
    }

    // Create Element from JSON
    c(json, parent) {
        const element = document.createElement(json.tag);
        element.classList = (json.class);
        element.id = (json.id);

        // for (const [attr, value] of Object.entries(json.attrs)) {
        //     element.setAttribute(attr, value);
        // }
        // for (const childJSON of json.children) {
        //     const childElement = this.createElementFromJSON(childJSON);
        //     element.appendChild(childElement);
        // }
        if (parent) {
            parent.appendChild(element);
        }
        return element;
    }
}

const d = new ElementHandler();




function renderLoadingModal(label) {

    var notify = $.notify(`<i class="fa fa-bell-o"></i>${label}`, {
        type: 'theme',
        allow_dismiss: true,
        delay: 13000,
        showProgressbar: true,
        timer: 300,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        }
    });

}
function removeLoadingModal() {
    $.notifyClose();
};





// logOut function
function logOut() {
    localStorage.removeItem('timeOnPage');
    localStorage.removeItem('dataObj');
    console.log('removed');
}

console.log('test');


d.a('profileImg');
d.a('profileDropdown');
function toggleSubmenu() {
    d.a('profileDropdown').classList.toggle("active");
}
d.ch('profileImg', 'click', toggleSubmenu);

const dateNow = document.getElementById('dateNow');
const today = new Date();
const day = today.getDate().toString().padStart(2, '0');
const month = (today.getMonth() + 1).toString().padStart(2, '0');
const year = today.getFullYear().toString();
dateNow.innerHTML = `Log in ${day}/${month}/${year}`;

d.a('timerWork')
function hideTime() {
    setTimeout(function () {
        d.a('timer')
        d.e.timerWork.innerHTML = "🟢"
        d.e.timerWork.classList.toggle('timerBlink');
        d.r('timer');
    }, 5000);
}
window.addEventListener('load', hideTime);
function showTimeOnClick() {
    d.e.timerWork.classList.toggle('timerBlink');

    // adding human redable time
    d.e.timerWork.innerHTML = `🟢 <span id="timer"></span>`;
    hideTime();
}
d.ch('timerWork', 'click', showTimeOnClick)