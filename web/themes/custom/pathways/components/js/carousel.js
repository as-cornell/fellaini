carousel = (function () {

    if (!document.querySelector ||
        !('classList' in document.body)) {
        return false;
    }

    var box = document.querySelector('.slider');
    //console.log(box);
    var buttons = box.querySelector('.navigation');
    var next = box.querySelector('.next');
    var prev = box.querySelector('.prev');
    var counter = 0;
    var items = box.querySelectorAll('.slide');
    var amount = items.length; console.log(amount);
    var current = items[0];


    // add .active to show buttons
    if (amount > 1) {
        box.classList.add('slider--active');




    }
    function navigate(direction) {
        // current.classList.remove('butter');
        current.setAttribute("aria-hidden", "true");
        counter = counter + direction;
        if (direction === -1 &&
            counter < 0) {
            counter = amount - 1;
        }
        if (direction === 1 &&
            !items[counter]) {
            counter = 0;
        }
        current = items[counter];
        current.setAttribute("aria-hidden", "false");
    }
    next.addEventListener('click', function (ev) {
        navigate(1);
    });
    prev.addEventListener('click', function (ev) {
        navigate(-1);
    });
    navigate(0);

})();
