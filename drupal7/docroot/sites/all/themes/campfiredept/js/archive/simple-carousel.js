carousel = (function(){

  if (!document.querySelector ||
      !('classList' in document.body)) {
    return false;
  }

  var box = document.querySelector('.slider');
  var buttons = box.querySelector('.buttons');
  var next = box.querySelector('.next');
  var prev = box.querySelector('.prev');
  var counter = 0;
  var items = box.querySelectorAll('.slide');
  var amount = items.length;
  var current = items[0];
  
  // add .active to show buttons
  if(amount > 1){
    box.classList.add('active');
  }
  function navigate(direction) {
    current.classList.remove('current');
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
    current.classList.add('current');
  }
  next.addEventListener('click', function(ev) {
    navigate(1);
  });
  prev.addEventListener('click', function(ev) {
    navigate(-1);
  });
  navigate(0);

})();