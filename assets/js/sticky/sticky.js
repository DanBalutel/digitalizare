document.querySelector('.dark-only').classList.toggle('dark-only');

'use strict';
let tempElement;
(function ($) {
    $.fn.autogrow = function (options) {
        return this.filter('textarea').each(function () {
            var self = this;
            var $self = $(self);
            var minHeight = $self.height();
            var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;
            var shadow = $('<div></div>').css({
                position: 'absolute',
                top: -10000,
                left: -10000,
                width: $self.width(),
                fontSize: $self.css('fontSize'),
                fontFamily: $self.css('fontFamily'),
                fontWeight: $self.css('fontWeight'),
                lineHeight: $self.css('lineHeight'),
                resize: 'none',
                'word-wrap': 'break-word'
            }).appendTo(document.body);
            var update = function (event) {
                var times = function (string, number) {
                    for (var i = 0, r = ''; i < number; i++) r += string;
                    return r;
                };
                var val = self.value.replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/&/g, '&amp;')
                    .replace(/\n$/, '<br/>&nbsp;')
                    .replace(/\n/g, '<br/>')
                    .replace(/ {2,}/g, function (space) { return times('&nbsp;', space.length - 1) + ' ' });
                if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
                    val += '<br />';
                }
                shadow.css('width', $self.width());
                shadow.html(val + (noFlickerPad === 0 ? '...' : '')); // Append '...' to resize pre-emptively.
                $self.height(Math.max(shadow.height() + noFlickerPad, minHeight));
            }
            $self.change(update).keyup(update).keydown({ event: 'keydown' }, update);
            $(window).resize(update);
            update();
        });
    };
})(jQuery);
var noteTemp = '<div class="note" ondragstart=`function(){$(this).css("z-index", ++noteZindex);}`>'
    + '<input type="checkbox" class="remove">'
    + '<a href="javascript:;" class="button remove">X</a>'
    + '<div class="note_cnt">'
    + '<textarea class="cnt" rows="10" placeholder="Scrie textul aici" oninput="saveCards()"></textarea>'

    + '<div class="d-flex pers">'
    + '<img src="https://www.avocatura.com/imagini/avocati/avocat--7686.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt="">'
    + '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQNaKSnBhPL2gOjhgAgpdn_uqoXByl_aoB3zU0Poy3pXrUGSRdyQHKaTqzDxC6PeAB2Fw&amp;usqp=CAU" width="30" height="30" class="rounded-circle shadow m-1" alt="">'
    + '<img src="https://www.avocatura.com/imagini/avocati/avocat-marcu-andrei-alexandru-9317.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt="">'
    + '<img src="https://www.barou-alba.ro/wp-content/uploads/2020/12/DORIANI-CELLINI-SEBASTIAN.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt="">'
    + '</div>'

    + '<div class="d-flex">'
    + '<div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Azi</div>'
    + '<div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Important</div>'
    + '<div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Alerta</div>'
    + '<div onclick="assignNote(this)" class="cardWithGrayBorder m-1 f-s-10"><i class="icofont icofont-business-man"></i></div>'
    + '</div>'

    + '</div> '
    + '</div>';
var noteZindex = 1;
function deleteNote() {
    if (d.element('board')) {
        $(this).parent('.note').hide("puff", { percent: 133 }, 250, function () {
            $(this).remove();
        });
        saveCards();
    }

};
function newNote() {
    $(noteTemp).hide().appendTo("#board").show("fade", 300).draggable();
    $('.remove').click(deleteNote);
    $('textarea').autogrow();
    $('.note')
    saveCards()
    return false;
};
function newNote2(content) {
    var note = $(noteTemp);
    note.find('.cnt').val(content);
    note.hide().prependTo("#board").show("fade", 300).draggable();
    note.find('.remove').click(deleteNote);
    note.find('textarea').autogrow();
    saveCards()
    clearStickyForm()
    return false;
};
function newNote2Render(content) {
    var note = $(noteTemp);
    note.find('.cnt').val(content);
    note.hide().appendTo("#board").show("fade", 300).draggable();
    note.find('.remove').click(deleteNote);
    note.find('textarea').autogrow();
    saveCards()
    clearStickyForm()
    return false;
};
function clearStickyForm() {
    d.element('newNoteText').value = '';
}
(function ($) {
    ;
    $("#board").height($(document).height());
    $("#add_new").click(newNote);
    $('.remove').click(deleteNote);
    // newNote();
    return false;
})(jQuery);

// if (localStorage.board) {
//     d.element('board') = localStorage.board;
// }



function saveCards() {
    localStorage.board = '';
    var cardsArray = [];

    setTimeout(function () {
        $('.note').each(function () {
            var cardContent = $(this).find('.cnt').val();
            var cardPersons = $(this).find('.pers').html();
            var cardObject = {
                content: cardContent,
                persons: cardPersons
            };
            cardsArray.push(cardObject);
        });

        localStorage.board = JSON.stringify(cardsArray);
    }, 1000);

}



const boardNotes = JSON.parse(localStorage.board);
if (d.element('board')) {
    boardNotes.forEach((item) => {
        newNote2Render(item.content)
    });
}


function makeThemeBlue(element) {
    element.classList.toggle('button-theme-blue');
    saveCards();
}

function popupElement(picture, element) {
    tempElement = element.parentElement.parentElement.parentElement;
    const result = `
    <div class="col-5 col-md-4 m-2">
    <div class="card radius-15">
        <div class="text-center">
            <div class="p-3">
                <img src="${picture}" width="50" height="50" class="rounded-circle shadow" alt="">
                    <h5 class="mb-0 mt-5 f-s-15">Doina Lupu</h5>
                    <p class="mb-3 f-s-15">Avocat</p>
                    <input type="checkbox" class="remove">
                    </div>
            </div>
        </div>
    </div>
</div>
    `
    return result;
}

function retCustomClass() {
    const darkClass = document.getElementsByClassName('dark-only');
    if (darkClass[0]) {
        return {
            container: '.dark-mode-transparent moniModal1',
            htmlContainer: 'd-flex flex-wrap',
            popup: 'dark-mode',
            header: 'dark-mode-header',
            title: 'dark-mode-header',
            closeButton: 'dark-mode-close',
            content: 'dark-mode',
            actions: 'dark-mode-actions'
        }
    } else {
        return {
            container: '.dark-mode-transparent moniModal1',
            htmlContainer: 'd-flex flex-wrap',
            header: 'dark-mode-header',
            title: 'dark-mode-header'
        }
    }

}

function assignNote(element) {

    console.log(retCustomClass());

    Swal.fire({
        html: `
            ${popupElement('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQNaKSnBhPL2gOjhgAgpdn_uqoXByl_aoB3zU0Poy3pXrUGSRdyQHKaTqzDxC6PeAB2Fw&amp;usqp=CAU', element)}
            ${popupElement('https://www.avocatura.com/imagini/avocati/avocat--7686.jpg', element)}
            ${popupElement('https://www.avocatura.com/imagini/avocati/avocat-marcu-andrei-alexandru-9317.jpg', element)}
            ${popupElement('https://www.barou-alba.ro/wp-content/uploads/2020/12/DORIANI-CELLINI-SEBASTIAN.jpg', element)}
        `,
        width: "700px",
        minHeight: "1200px",
        showConfirmButton: true,
        confirmButtonText: 'Atribuie',
        confirmButtonColor: '#7066e0 !important',
        backdrop: 'rgba(0,0,0,0.4)',
        customClass: retCustomClass(),
    }).then((result) => {
        console.log(result);
    });
}


function addPerson(element, picture) {
    console.log($(element).find('.pers').html());
}

tempElement.remove();

