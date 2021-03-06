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
         var firstSection = document.querySelector(".static-slider-head");
         var timeIsManySection = document.getElementById("timeismany");
         var Body = document.body;
         function checkArray(){
             if(Body.contains(firstSection)){  
             } else {
                 timeIsManySection.style.paddingTop = "200px";
             }
         }
     checkArray();
     // start slider 

     var  sliderImages  = document.querySelectorAll(".slide"),
     arrowLeft    = document.getElementById("arrow-left"),
     arrowRight   = document.getElementById("arrow-right"),
     wrap         = document.querySelector(".wrap"),
     current      = 0;
   
        reset(); // call the function here
        // initialization  of slider 
        function reset(){
            for(var i = 0; i < sliderImages.length; i++){
                sliderImages[i].style.display = "none";
                }
            current++;
            console.log(current++);
            if(current > sliderImages.length){  
                current = 1    
                }
            sliderImages[current - 1].style.display = "block";
            current--;
            var timer = setTimeout(reset, 5000);
            wrap.addEventListener("mouseover", function(){
                clearTimeout(timer);
                });
            // show previous slide button
            arrowLeft.addEventListener("click", function(){
                function slideLeft(){
                    for(var i = 0; i < sliderImages.length; i++){
                        sliderImages[i].style.display = "none";
                    }
                    current--;
                    sliderImages[current].style.display = "block";
                    }
                    if(current === 0){
                        current = 4;
                        current--;
                    }
                slideLeft();
            });
            // show next slide button
            arrowRight.addEventListener("click", function(){
                function slideRight(){
                    for(var i = 0; i < sliderImages.length; i++){
                        sliderImages[i].style.display = "none";
                        }
                    current++;
                    sliderImages[current].style.display = "block";
                    console.log(current);
                    if(current === sliderImages.length - 1){
                        current = -1;
                    }
                }
                slideRight();
            });
    }   
    // restart the slider when mouse is leave
    wrap.addEventListener("mouseleave", function(){
        setTimeout(reset, 1500);
    });
    } // end of window load function
function getImgAttribute(){
    var banner1 = document.querySelector("#banner1");
    var img = document.querySelector("#banner1 img");
    var sourceAttribue = img.getAttribute("src");
    banner1.setAttribute("style", "background-image:url('"+sourceAttribue+"')");
    img.remove();
}

getImgAttribute();

/*function typeTextLive(){
    var inputValue = document.querySelector("#wpcf7-f111-o1 .wpcf7-form .wpcf7-form-control-wrap input ");
    var getPlaceHolder = inputValue.getAttribute("placeholder"); 
    var appendedText = document.querySelector("#banner1 div.m-t-40");
    var text = document.createElement("span");
    inputValue.addEventListener('keyup', function(){
        textTyped = document.createTextNode(inputValue.value);
        appendedText.appendChild(text);
        text.appendChild(textTyped);
        textTyped.addEventListener('change' , function(){

        })   
     })
} */

// admin js 



        // auto slider


        // reset();
        // function reset(){
        //     for(var i = 0; i < sliderImages.length; i++){
        //         sliderImages[i].style.display = "none";
        
        //     }
        //     current++;
        //     if(current > sliderImages.length){
        //         current = 1
        //     }
        //     sliderImages[current - 1].style.display = "block";
        //     setTimeout(reset, 3000);
            
        // } 
    

      


