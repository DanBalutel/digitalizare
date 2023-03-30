// This function will be called when the API is ready
function onYouTubeIframeAPIReady() {

    const player = new YT.Player('moniStepsVideo', {
        videoId: moniVideoSteps, // Replace this with your video ID
        width: '100%',
        height: '100%',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

// This function will be called when the player is ready
function onPlayerReady(event) {
    event.target.playVideo(); // Automatically start the video
}

// This function will be called when the player's state changes
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
        closeVideo();
    }
}

// This function will remove the player from the page
function closeVideo() {
    const playerElement = document.getElementById('moniStepsVideo');
    playerElement.parentNode.removeChild(playerElement);
    Swal.close();

    if (window.location.pathname === '/' || window.location.href === '/index' || window.location.href === '/index.php') {
        window.location.href = window.location.href;
    }
    // d.e.demoPlay.classList.toggle('hide');

    // new version with mony video loaded instant
    // d.createElement(moniStepsJson1, demoPlayDiv);
    

}
