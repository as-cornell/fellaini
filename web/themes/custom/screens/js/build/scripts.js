// jQuery(document).ready(function($){
//     function fadeInSequence($slides) {
//         if ($slides == null) $slides = $('.slide:lt(1)');
//
//         $slides.fadeIn(1000, function () {
//             //fade out the 3 after fadein and start
//             $(this).delay(5000).fadeOut(1000);
//         }).promise().done(function () {
//             if ($slides.last().nextAll(':lt(1)').length) {
//                 //Same function, next 3 items
//                 fadeInSequence($slides.last().nextAll(':lt(1)'));
//             } else {
//                 //Same function, from the beginning if none are left
//                 fadeInSequence();
//             }
//         });
//         console.log($slides);
//     }
//     $(function () {
//         //start the infinite looping
//         fadeInSequence();
//     });
// });
jQuery(document).ready(function($){
    $(".slides > article:gt(0)").hide();

    setInterval(function() {
      $('.slides > article:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('.slides');
    }, 10000);
});

console.log('on?');
