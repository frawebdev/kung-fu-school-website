//to top button

$('.to-top-btn').hide();

$(document).on('scroll', ()=>{
    if($(document).scrollTop() > 200){
        $('.to-top-btn').fadeIn();
    } else if($(document).scrollTop() < 200){
        $('.to-top-btn').fadeOut();
    }
    }
)

$('.to-top-btn').click(function(){
    $('html,body').animate({
        scrollTop:$(document.body).offset().top
    }, 700);
})

//sub menù scrolling

function scrolling (scrollFrom, scrollTo) {
    scrollFrom.click(function(){
            $('html,body').animate({
                scrollTop:scrollTo.offset().top
            }, 700);
    })};

    //cultura zen 

    scrolling($('#storie'), $('#storie-section'));
    scrolling($('#tè'), $('#tè-section'));
    scrolling($('#draghi'), $('#draghi-section'));
    scrolling($('#monastero'), $('#monastero-section'));
    scrolling($('#energia'), $('#energia-section'));
    scrolling($('#stili'), $('#stili-section'));

    //kung fu

    scrolling($('#orari'), $('#orari-section'));
    scrolling($('#shaolin'), $('#shaolin-section'));
    scrolling($('#altri-corsi'), $('#corsi-section'));

    //tai chi

    scrolling($('#orari-tai'), $('#orari-tai-section'));
    scrolling($('#benefici'), $('#benefici-section'));

    //comments

    const commentOne = "<p>Avere un autentico Monaco cinese Guerriero Shaolin che insegna vicino a casa tua quotidianamente, con un orario conveniente, per un prezzo abbordabile e con una forte e bella comunità di praticanti, è proprio l'ideale!</p><p>- Mia D.</p>"
    const commentTwo = "<p>Ho trovato il corso molto positivo perché mi ha aiutato a raggiungere un equilibrio psico-fisico e a rilassarmi soprattutto la mente.</p><p>Adriana B.</p>"
    const commentThree = "<p>Quando faccio le forme di Tai Chi mi sembra di essere “sulle nuvole”.</p><p>Valeria F.</p>"
    const commentFour = "<p>Frequento il corso da tre anni ma l’entusiasmo e il coinvolgimento emotivo sono sempre gli stessi. Desidero quindi continuare l’esperienza.</p><p>Paola T.</p>"
    const commentFive = "<p>Il benessere che si prova dopo un corretto allenamento di Kung Fu si estende a lungo anche alle azioni di vita quotidiana.</p><p>Fabrizio M.</p>"
    const commentSix = "<p>Il Tai Chi mi ha trasportato in una dimensione che non è certamente quella della terza età.</p><p>Paolo S.</p>"
    const commentSeven = "<p>La mia prima esperienza con il Tai Chi è stata entusiasmante. È un’ottima disciplina per raggiungere un maggior benessere psicofisico. Sentiti complimenti al maestro Liu Peng per la pazienza dimostratami e per l’interesse che mi ha suscitato.</p><p>Laura F.</p>"
    const commentEight = "<p>Che il Kung Fu mi faccia bene ne sono convinto. Sí, è vero, se ci si è allenati per bene siesce dalla lezione un po’ doloranti. Tuttavia è innegabile che i benefici superino di granlunga la fatica: il corpo è stato ben tonificato e la resistenza è aumentata. Se a casa o allavoro ho grattacapi, poco importa, durante l´allenamento la mente è assorbita dalle tecniche e dalle sequenze delle forme e non c’è più spazio per il resto.</p>"
    let i = 0;

    const comments = [commentOne, commentTwo, commentThree, commentFour, commentFive, commentSix, commentSeven, commentEight];

    function switching (num){
        $('.slider-content').html('<p>' + comments[num] + '</p>');
        $('.count').html('<h2>' + num + '/7</h2>');
    }
    
            switching(i);

    $('.slider-counter').on('click', function(e){
        if(e.target.className === 'arrow-left' && i > 0){
            i -= 1;   
            switching(i);
        }

        if(e.target.className === 'arrow-right' && i < 7){
            i += 1;
            switching(i);
        }
    })








