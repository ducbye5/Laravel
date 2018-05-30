
$(document).ready(function() {
  


//scroll
              var scrollTop = $(".scrollTop");
              $(window).scroll(function() {
                var topPos = $(this).scrollTop();
                if (topPos > 70) {
                  $(scrollTop).css("opacity", "0.4");

                } else {
                  $(scrollTop).css("opacity", "0");
                }
              }); 
              $(window).scroll(function() {
                var topPos = $(this).scrollTop();
                if(topPos>0)
                {
                  $('.section-left').css("position","fixed");
                  $('.section-center').addClass('offset-2');
                }
                else{
                  $('.section-left').css("position","static");
                  $('.section-center').removeClass('offset-2');
                }
              });
              $(scrollTop).click(function() {
                $('html, body').animate({
                  scrollTop: 0
                }, 1000);
                return false;
              }); 
              
              $('.badge').click(function() {
                      var kq= $(this).text();
                      var node = $('#'+kq).position();
                      $('html, body').animate({
                        scrollTop: node.top
                      }, 1000);
                      return false;
              });
              $('.form-group').click(function(){
                var kq= $(this).text();
                var id  =parseInt($(this).attr("id"))+50;            
                if(kq != '')
                {
                  $("table tr td button#"+id).removeClass("badge-danger");
                  $("table tr td button#"+id).addClass("badge-success");
                }
              });


               

//time down

                  function getTimeRemaining(endtime) 
                  {
                    var t = Date.parse(endtime) - Date.parse(new Date());
                    var seconds = Math.floor((t / 1000) % 60);
                    var minutes = Math.floor((t / 1000 / 60) % 60);
                    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                    //var days = Math.floor(t / (1000 * 60 * 60 * 24));
                    return {
                      'total': t,
                      //'days': days,
                      'hours': hours,
                      'minutes': minutes,
                      'seconds': seconds
                    };
                  }

                function initializeClock(id, endtime) 
                {
                  var clock = document.getElementById(id);
                  //var daysSpan = clock.querySelector('.days');
                  var hoursSpan = clock.querySelector('.hours');
                  var minutesSpan = clock.querySelector('.minutes');
                  var secondsSpan = clock.querySelector('.seconds');

                  function updateClock() 
                  {
                    var t = getTimeRemaining(endtime);

                    //daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0) {
                      clearInterval(timeinterval);
                    }
                  }

                  updateClock();
                  var timeinterval = setInterval(updateClock, 1000);
                }

                var deadline = new Date(Date.parse(new Date()) +  3 * 60 * 60 * 1000);
                //var deadline = new Date(Date.parse(new Date()) +  10 * 1000);
                initializeClock('clockdiv', deadline);


//slide 
        









});
