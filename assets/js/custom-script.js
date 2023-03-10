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
    r(id) {
        if (this.e[id]) {
            this.e[id].parentNode.removeChild(element);
            delete this.e[id];
        } else {
            const element = document.getElementById(id);
            if (element) {
                element.parentNode.removeChild(element);
                delete this.e[id];
            }
        }

    }

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
    // const modalLoading = document.getElementById('modal-loading');
    // const loadingLabel = document.getElementById('loadingLabel');
    // const loadingLoader = document.getElementById('loadingLoader')

    // loadingLabel.innerHTML = label;
    // modalLoading.style = 'display: block;background: #000000a6;';
    // loadingLoader.style = "width: 0%"

    // for (let i = 0; i < 100; i++) {
    //     setTimeout(function () {
    //         loadingLoader.style = `width: ${i}%`;
    //     }, i * 300);
    // }

    var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼', {
        type: 'theme',
        allow_dismiss: true,
        delay: 1000000,
        showProgressbar: true,
        timer: 300,
        animate:{
            enter:'animated fadeInDown',
            exit:'animated fadeOutUp'
        }
    });

}
function removeLoadingModal() {
    // const modalLoading = document.getElementById('modal-loading');
    // modalLoading.style = 'display: none;background: #000000a6;';
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
