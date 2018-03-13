jQuery(document).ready(function($){
  $(".burger").click(function () {
     $('.menu').toggleClass('open')
  });

  // submenu
  $(".menu li").click(function (event) {
    event.preventDefault();
    $(".menu li").find('ul.sub-menu').removeClass('openSubmenu');
    $(this).find('ul.sub-menu').toggleClass('openSubmenu');
    $(this).find('ul.sub-menu').toggleClass('hide');
  });

//about section show
  // $(".menu-item-135").click(function (event) {
  //   event.preventDefault();
  //   $(".about").toggleClass('about-show');
  // });

  // scrolling
  $("#scrolling").click(function () {
        $('html, body').animate({
            scrollTop: $(".navbar").offset().top
        }, 1000);
     });
  window.onscroll = function() {scrollFunction()};
   function scrollFunction() {
       if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           document.getElementById("scrolling").style.display = "block";
       } else {
           document.getElementById("scrolling").style.display = "none";
       }
   }
// card button
  var button = document.querySelector('.want-buy');
  button.addEventListener('click', calculate);
  var price = +document.querySelector('.price').value;
  var counter = 0;

  function calculate(event) {
    event.preventDefault();
    var counter = price + counter;
    return counter;
  }
console.log(price);


// woomens arrivals start
   $(".arrival-menu > ul > li").click( function(event){
     event.preventDefault();
     var filter = $(this).data('filter'),
         selector = '.'+filter;
    //nuima backgrounda nuo visu filtru
     $(".arrival-menu > ul > li").removeClass('arrival-change-color');
     $(this).toggleClass('arrival-change-color');
     $('.list').addClass('hide');
     $( selector ).removeClass('hide');
   });

// woomens arrivals end






});
