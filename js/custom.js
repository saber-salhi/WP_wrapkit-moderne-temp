/*
Template Name: Admin Press Admin
Author: salhi2design
Email: sabersalhi16@gmail.com
File: js
*/


$(function () {
   "use strict";
   // ============================================================== 
   //Tooltip
   // ============================================================== 
   $(function () {
       $('[data-toggle="tooltip"]').tooltip()
   })
   // ============================================================== 
   //Popover
   // ============================================================== 
   $(function () {
       $('[data-toggle="popover"]').popover()
   })
   
   // ============================================================== 
   // Resize all elements
   // ============================================================== 
   $("body").trigger("resize"); 

       
});


$(function(){"use strict";$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$('[data-toggle="popover"]').popover()}),$("body").trigger("resize")});


$(function (){
   'use strict';
    
   $(window).scroll(function (){
       if ( $(window).scrollTop() >= 250 ){
           $(".navbar-dark").addClass("nav-bg");
         $(".fadeInUp").css("backgroundColor", "#fff");
           $(".nav-item a, .ti-menu").css("color", "#000");
           $(".btn-hire-me").css({
               color: "#000",
               borderColor: "#000"
           });          
   $(".nav-item a").mouseleave(function (){
        $(this).css( "color", "#000");
    })
   $(".black-logo").show();
   $(".white-logo").hide();
       }else{
           $(".navbar-dark").removeClass("nav-bg"); 
           $(".fadeInUp").css("backgroundColor", "#000");
           $(".nav-item a, .ti-menu").css("color", "#fff");
            $(".btn-hire-me").css({
               color: "#fff",
               borderColor: "#fff"
           });
            $(".black-logo").hide();
            $(".white-logo").show();
       }
   })

});
$(function (){
   'use strict';
   
   $(window).scroll(function (){
       if ( $(window).scrollTop() >= 250){        
     $(".nav-item a").mouseenter(function (){
        $(this).css( "color", "#188ef4");
    })
   $(".nav-item a").mouseleave(function (){
        $(this).css( "color", "#000");
    })
       }else{
       $(".nav-item a").mouseenter(function (){
        $(this).css( "color", "red");
    })
   
   $(".nav-item a").mouseleave(function (){
        $(this).css( "color", "#fff");
    })
       }
   })
 
});

// events for contact form in home page 

  
        $('a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 90
            }, 1000);
            event.preventDefault();
            // code 
            
        });
window.onload = function(){
        var secondHand = document.querySelector(".second-hand");
        var minsHand  = document.querySelector(".min-hand");
        var hourHand  = document.querySelector(".hour-hand");
        var echoSeconds = document.querySelector(".Seconds");
        var echoMinutes = document.querySelector(".Minutes");
        var echoHours = document.querySelector(".Hours");
          function setDate(){
          var now = new Date();
          var seconds = now.getSeconds();
          var secondsDegress = ((seconds / 60) * 360) + 90;
          secondHand.style.transform = 'rotate('+secondsDegress+'deg)';

          var minutes = now.getMinutes();
          var minutesDegrees = ((minutes / 60) * 360) + 90;
          minsHand.style.transform = 'rotate('+minutesDegrees+'deg)';

          var hours = now.getHours();
          var hoursDegrees = ((hours / 12) * 360) + 90;
          hourHand.style.transform = 'rotate('+hoursDegrees+'deg)';
          if(seconds < 10 || seconds === 0){
            echoSeconds.textContent = "0"+seconds;
          } else {
            echoSeconds.textContent = seconds; 
          }
          if(minutes < 10 || minutes === 0){
            echoMinutes.textContent = "0"+minutes;
          } else {
            echoMinutes.textContent = minutes; 
          }
          if(hours < 10 || hours === 0){
            echoHours.textContent = "0"+hours;
          } else {
            echoHours.textContent = hours; 
          }
          
         
      }
      setInterval(setDate, 1000); 
         var animtion = document.querySelector(".animation");
         animtion.style.display = "none";
        
         function checkArray(){
             var firstSection = document.querySelector(".static-slider-head");
             var timeIsManySection = document.getElementById("timeismany");
             var Body = document.body;
             if(Body.contains(firstSection)){
                
             } else {
                 timeIsManySection.style.paddingTop = "200px";
             }

         }
     checkArray();
    }
    


