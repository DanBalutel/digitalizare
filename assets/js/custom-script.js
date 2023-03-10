// you can add your custom script here

function renderLoadingModal(label) {
    const modalLoading = document.getElementById('modal-loading');
    const loadingLabel = document.getElementById('loadingLabel');
    const loadingLoader = document.getElementById('loadingLoader')

    loadingLabel.innerHTML = label;
    modalLoading.style = 'display: block;background: #000000a6;';
    loadingLoader.style = "width: 0%"

    for (let i = 0; i < 100; i++) {
        setTimeout(function () {
            loadingLoader.style = `width: ${i}%`;
        }, i * 300);
    }


}
function removeLoadingModal() {
    const modalLoading = document.getElementById('modal-loading');
    modalLoading.style = 'display: none;background: #000000a6;';
};





// logOut function
function logOut() {
    localStorage.removeItem('timeOnPage');
    localStorage.removeItem('dataObj');
    console.log('removed');
}


