'use strict';
var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼', {
    type: 'theme',
    allow_dismiss: true,
    delay: 13000,
    showProgressbar: true,
    timer: 300,
    animate:{
        enter:'animated fadeInDown',
        exit:'animated fadeOutUp'
    }
});

// setTimeout(function() {
//     notify.update('message', '<i class="fa fa-bell-o"></i><strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼');
// }, 10000);
