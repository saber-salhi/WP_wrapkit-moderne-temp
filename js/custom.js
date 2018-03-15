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
       if ( $(window).scrollTop() >= 250){
           $(".navbar-dark").addClass("nav-bg");
           $(".nav-link, .ti-menu").css("color", "#000");
           $(".btn-hire-me").css({
               color: "#000",
               borderColor: "#000",
           });
               
   $(".nav-link").mouseleave(function (){
        $(this).css( "color", "#000");
    })
   $(".black-logo").show();
   $(".white-logo").hide();
       }else{
           $(".navbar-dark").removeClass("nav-bg"); 
           $(".nav-link, .ti-menu").css("color", "#fff");
            $(".btn-hire-me").css({
               color: "#fff",
               borderColor: "#fff",
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
     $(".nav-link").mouseenter(function (){
        $(this).css( "color", "#188ef4");
    })
   
   $(".nav-link").mouseleave(function (){
        $(this).css( "color", "#000");
    })
       }else{
       $(".nav-link").mouseenter(function (){
        $(this).css( "color", "red");
    })
   
   $(".nav-link").mouseleave(function (){
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
        



