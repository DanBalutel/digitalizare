'use strict';
(function($){
    $.fn.autogrow = function(options)
    {
        return this.filter('textarea').each(function()
        {
            var self         = this;
            var $self        = $(self);
            var minHeight    = $self.height();
            var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;
            var shadow = $('<div></div>').css({
                position:    'absolute',
                top:         -10000,
                left:        -10000,
                width:       $self.width(),
                fontSize:    $self.css('fontSize'),
                fontFamily:  $self.css('fontFamily'),
                fontWeight:  $self.css('fontWeight'),
                lineHeight:  $self.css('lineHeight'),
                resize:      'none',
                'word-wrap': 'break-word'
            }).appendTo(document.body);
            var update = function(event)
            {
                var times = function(string, number)
                {
                    for (var i=0, r=''; i<number; i++) r += string;
                        return r;
                };
                var val = self.value.replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/&/g, '&amp;')
                .replace(/\n$/, '<br/>&nbsp;')
                .replace(/\n/g, '<br/>')
                .replace(/ {2,}/g, function(space){ return times('&nbsp;', space.length - 1) + ' ' });
                if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
                    val += '<br />';
                }
                shadow.css('width', $self.width());
                shadow.html(val + (noFlickerPad === 0 ? '...' : '')); // Append '...' to resize pre-emptively.
                $self.height(Math.max(shadow.height() + noFlickerPad, minHeight));
            }
            $self.change(update).keyup(update).keydown({event:'keydown'},update);
            $(window).resize(update);
            update();
        });
    };
})(jQuery);
var noteTemp =  '<div class="note" ondragstart=`function(){$(this).css("z-index", ++noteZindex);}`>'
+	'<a href="javascript:;" class="button remove">X</a>'
+ 	'<div class="note_cnt">'
+		'<textarea class="title" placeholder="Enter note title" oninput="saveCards()"></textarea>'
+ 		'<textarea class="cnt" placeholder="Enter note description here" oninput="saveCards()"></textarea>'
+	'</div> '
+'</div>';
var noteZindex = 1;
function deleteNote(){
    $(this).parent('.note').hide("puff",{ percent: 133}, 250);
};
function newNote() {
    $(noteTemp).hide().appendTo("#board").show("fade", 300).draggable();
    $('.remove').click(deleteNote);
    $('textarea').autogrow();
    $('.note')
    return false; 
};
(function($) {
    "use strict";
    $("#board").height($(document).height());
    $("#add_new").click(newNote);
    $('.remove').click(deleteNote);
    newNote();
    return false;
})(jQuery);

// if (localStorage.board) {
//     d.element('board') = localStorage.board;
// }


function saveBoard() {
    // localStorage.board = d.element('board').innerHTML;
    console.log('save');

}

function saveCards() {
    var cardsArray = [];
  
    $('.note').each(function() {
      var cardTitle = $(this).find('.title').val();
      var cardContent = $(this).find('.cnt').val();
      var cardObject = {
        title: cardTitle,
        content: cardContent
      };
      cardsArray.push(cardObject);
    });

    localStorage.board = JSON.stringify(cardsArray);
  }
  