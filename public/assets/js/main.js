

$( window ).on( "load", function() {

  var endTime = (new Date()).getTime();
  var millisecondsLoading = endTime - startTime;
  if (millisecondsLoading > 1000) {
     $('.loader').addClass('loaded');
  }else{
     var timeOutMilli = 1000 - millisecondsLoading;
     setTimeout(function(){
       $('.loader').addClass('loaded');
     }, timeOutMilli);
   }


});

$( window ).resize(function() {
  var styleContainer = getComputedStyle($('.container')[0])
  var marginLeftContainer = parseInt(styleContainer.marginLeft);
  var marginRightContainer = parseInt(styleContainer.marginRight);
  var qsj = $('.quisuisje');
  qsj.css('marginLeft', marginLeftContainer );

  checkHeader();

});
window.odometerOptions = {
  format: '(ddd).dd'
};
$( window ).ready(function(){

  var styleContainer = getComputedStyle($('.container')[0])
  var marginLeftContainer = parseInt(styleContainer.marginLeft);
  var marginRightContainer = parseInt(styleContainer.marginRight);
  var qsj = $('.quisuisje');
  qsj.css('marginLeft', marginLeftContainer );
  var carouselContainerW = $('.carouselContainer').width();
  $('.madridCarousel').width(carouselContainerW);

  $('.madridCarousel').owlCarousel({
    nav:true,
    stagePadding: 50,
    loop:false,
    navText: ['',''],
    responsiveBaseElement:$('.carouselContainer')[0],
    onInitialized: highlight,
    onTranslated: highlight,
    responsive:{
      0:{
         items:1
       },
       500:{
         items:2
       },
       1000:{
         items:5
       }
    }
  });
  var orgaCarousel = $('.orgaCarousel')
  orgaCarousel.owlCarousel({
    nav:false,
    loop:true,
    dots:false,
    margin:60,
    navText: ['',''],
    mouseDrag: false,
    responsive:{
      0:{
         items:1
       },
       1000:{
         items:2,
       }
    }
  });
  $('.navOrga .orgaPrev').on('click', function(){
    orgaCarousel.trigger('prev.owl.carousel');
  })
  $('.navOrga .orgaNext').on('click', function(){
    orgaCarousel.trigger('next.owl.carousel');
  })
  var orgaPopUpCarousel = $('.popUpOrgaCaroussel')
  orgaPopUpCarousel.owlCarousel({
    nav:false,
    loop:false,
    dots:false,
    margin:0,
    navText: ['',''],
    mouseDrag: false,
    items:1,
  });
  $('.navPopUpOrga .orgaPrev').on('click', function(){
    orgaPopUpCarousel.trigger('prev.owl.carousel');
  })
  $('.navPopUpOrga .orgaNext').on('click', function(){
    orgaPopUpCarousel.trigger('next.owl.carousel');
  })



  $('#header').on('scrollSpy:enter', function() {
    $('#menuFix').removeClass('shown');
  }).scrollSpy();

  $('#header').on('scrollSpy:exit', function() {
    $('#menuFix').addClass('shown');
  }).scrollSpy();

  checkHeader();

  //animation suivi
  $('#suivi').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  //animation line
  $('.orgaCarousel').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  $('.headerBand').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  $('.deco').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  $('.quisuisje').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  $('.logoFooter').on('scrollSpy:enter', function() {
    $(this).addClass('animated');
  }).scrollSpy();

  //pop up
  if (window.matchMedia("(min-width: 1100px)").matches) {
    $(document).on('click', '.orgaCarousel .owl-item.active',  function(){
      var orga = $(this).children().children().data('orga');
      $('.popUpOrga').addClass('shown');
      $('body').addClass('popUpShown');
      orgaPopUpCarousel.trigger('to.owl.carousel', [orga]);
    })
  }
  $('.popUpOrga .popUpClose').on('click', function(){
    $('.popUpOrga').removeClass('shown');
    $('body').removeClass('popUpShown');
  })
  $('#freeExe').on('click', function(){
    $('.popUpExe').addClass('shown');
    $('body').addClass('popUpShown');
  })
  $('.popUpExe .popUpClose').on('click', function(){
    $('.popUpExe').removeClass('shown');
    $('body').removeClass('popUpShown');
  })
  $('.btnList').on('click', function(){
    var data = $(this).data('list');
    $('#list_hiddenList').val(data);
    $('.popUpList').addClass('shown');
    $('body').addClass('popUpShown');
  })
  $('.popUpList .popUpClose').on('click', function(){
    $('.popUpList').removeClass('shown');
    $('body').removeClass('popUpShown');
  })
  $('.btnPlanning').on('click', function(){
    $('.popUpPlanning').addClass('shown');
    $('body').addClass('popUpShown');
  })
  $('.popUpPlanning').on('click', function(){
    $('.popUpPlanning').removeClass('shown');
    $('body').removeClass('popUpShown');
  })

  //menu Mobile
  $('.btnMenu').on('click', function(){
    $('.menuMobile').addClass('shown');
    $('body').addClass('popUpShown');
  })
  $('.btnMenuFix').on('click', function(){
    $('.menuMobile').addClass('shown');
    $('body').addClass('popUpShown');
  })
  $('.closeMobile').on('click', function(){
    $('.menuMobile').removeClass('shown');
    $('body').removeClass('popUpShown');
  })
  $('.mobileContact').on('click', function(){
    $('.menuMobile').removeClass('shown');
    $('body').removeClass('popUpShown');
  })
  //inputContainer
  $('.inputContainer input').on('change', function(){
    if ($(this).val()) {
      $(this).parent().prev('label').addClass('notEmpty');
    }
  })
  $('.inputContainer input').focusin(function(){
    $(this).parent().prev('label').addClass('notEmpty');
  });
  $('.inputContainer input').focusout(function(){
    if (!$(this).val()) {
      $(this).parent().prev('label').removeClass('notEmpty');
    }
  });

  $('.messageInput textarea').on('change', function(){
    if ($(this).val()) {
      $(this).prev('label').addClass('notEmpty');
    }
  })
  $('.messageInput textarea').focusin(function(){
    $(this).prev('label').addClass('notEmpty');
  });
  $('.messageInput textarea').focusout(function(){
    if (!$(this).val()) {
      $(this).prev('label').removeClass('notEmpty');
    }
  });
  //counter
  $('.odometer').on('scrollSpy:enter', function() {
    var nb = $(this).data('counter');
    $(this).html(nb);
  }).scrollSpy();

  //videos
  $('video').on('scrollSpy:enter', function() {
    $(this).get(0).play();
  }).scrollSpy();
  $('video').on('scrollSpy:exit', function() {
    $(this).get(0).pause();
  }).scrollSpy();

  //formation animation
  $('.form').on('click',function(){
    var nb = $(this).data('nbform');
    openFormation(nb);
  });

  $(document).on('click', '.formBtn', function(){
    var num = $(this).data('nbform')
    $('.formBtn').removeClass('active');
    $(this).addClass('active');
    $('.form').hide();
    $('.form').removeClass('active');
    $('.form'+num).show();
    $('.form'+num).addClass('active');
    $('.formContent').removeClass('active');
    $('.formContent[data-nbform='+num+']').addClass('active');
  })

  //hide envoi fichier
  $('.contactVideo').hide();
  $('.contactSelect select').on('change', function(){
    if ($(this).val() == 'exercice') {
      $('.contactVideo').show();
      $('.contactVideo input').prop('required',true)
    }else{
      $('.contactVideo').hide();
      $('.contactVideo input').prop('required',false)
    }
  })
  $('.contactVideo input').on('change', function(){
    var svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>';
    $(this).next().children('strong').html(svg + $(this)[0].files.item(0).name);
  })

})

function highlight(event) {
  if (window.matchMedia("(min-width: 768px)").matches) {
    $('.madridCarousel .owl-item').removeClass('highlight');
    var highlight = event.item.index + 3;

    $('.madridCarousel .owl-item:nth-of-type('+highlight+')').addClass('highlight')
  }
}

function checkHeader(){

  var height = $('#header').height();
  var position = $('#header')[0].getBoundingClientRect();
  if( (height + position.top )>0 ){
    $('#menuFix').removeClass('shown');
  }else{
    $('#menuFix').addClass('shown');
  }
}

function openFormation(numero){
   var active = $('.form'+numero);
   if (!active.hasClass('active')) {
     $('.form:not(.form'+numero+')').addClass('hide');
     $('.formTop').addClass('active');
     $('.formBtn[data-nbform='+numero+']').addClass('active');
     if (window.matchMedia("(min-width: 768px)").matches) {
      /* the view port is at least 768px pixels wide */
      setTimeout(function(){
        if(numero == 1){
          active.css('transform', 'translateX(80px)');
        }else if (numero == 2) {
          var width = active.width();
          active.css('transform', 'translateX('+ -(width - 80) +'px)');
        }else if ( numero == 3 ) {
          var width = active.width();
          active.css('transform', 'translateX('+ -(width*2 - 80) +'px)');
        }
      }, 600);
      var timer = 2100;
    }else{
      setTimeout(function(){
        if(numero == 1){
          active.css('transform', 'translateY(0px)');
        }else if (numero == 2) {
          var width = active.width();
          active.css('transform', 'translateY(-200px)');
        }else if ( numero == 3 ) {
          var width = active.width();
          active.css('transform', 'translateY(-400px)');
        }
      }, 600);
      var timer = 1500;
    }

     setTimeout(function(){
        $('.form:not(.form'+numero+')').hide();
        $('.form').removeClass('hide');
       active.addClass('active');
       active.css('transform', 'translateX(0)');
       $('.formContent[data-nbform='+numero+']').addClass('active');
     }, timer);
   }


}
