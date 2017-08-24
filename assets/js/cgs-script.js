var a = $(".nav").offset().top;

$(document).scroll(function(){
    if($(this).scrollTop() > a)
    {   
//       $('.nav-container').css({"background":"#232a34"});
//       $('.nav-container').css({"border-bottom-width":"0.5px"});
//       $('.nav-container').css({"border-bottom-color":"white"});
//       $('.nav-container').css({"border-bottom-style":"solid"});
//       $('.fa-bars').css({"color":"white"});
//       $('.navbar-brand').css({"color":"white"});
//       $('.navbar-nav>li>a').css({"color":"white"});
//       $('.navbar-fixed-top').css({"border-color":"transparent"});
    } else {
//       $('.nav-container').css({"background":"white"});
//       $('.nav-container').css({"border-bottom-width":"0.5px"});
//       $('.nav-container').css({"border-bottom-color":"#232a34"});
//       $('.nav-container').css({"border-bottom-style":"solid"});
//       $('.fa-bars').css({"color":"#232a34"});
//       $('.navbar-brand').css({"color":"#262626"});
//       $('.navbar-nav>li>a').css({"color":"#262626"});
//       $('.navbar-fixed-top').css({"border-color":"#ddd"});
    }
});

//$(window).scroll(
//    {
//        previousTop: 0
//    }, 
//    function () {
//    var currentTop = $(window).scrollTop();
//    if (currentTop < this.previousTop) {
//        $(".sidebar em").text("Up"); /* optional for demo */
//        $("#top-alert").show();
//    } else {
//        $(".sidebar em").text("Down");
//        $("#top-alert").hide();
//    }
//    this.previousTop = currentTop;
//});

$(document).ready(function() {

    var phrases = [
        'INNOVATION',
        'EXCELLENCE',
        'QUALITY',
        'VALUE CREATION',
    ];
    var len = phrases.length;
    var index = 0;

    var ctrl = bubbleText({
        element: $('#bubble'),
        newText: phrases[index++],
        letterSpeed: 300,
        repeat: Infinity,
        timeBetweenRepeat: 1000,
        callback: function() {
            this.newText = phrases[index++ % len];
        },
    });

});