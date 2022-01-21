document.addEventListener('DOMContentLoaded', function() {
    var stream = document.querySelector('#slide');
    var items = document.querySelectorAll('.item');
    var prev = document.querySelector('#slide__prev');
    var next = document.querySelector('#slide__next');
    
    let time = 3000;
    setInterval(function() {
        stream.insertBefore(items[items.length - 1], items[0]);
        items = document.querySelectorAll('.item');
      }, time);

    prev.addEventListener('click', function() {
      stream.insertBefore(items[items.length - 1], items[0]);
      items = document.querySelectorAll('.item');
    });
  
    next.addEventListener('click', function() {
      stream.appendChild(items[0]);
      items = document.querySelectorAll('.item');
    });

    //controle do slide "em breve"
    var strea = document.querySelector('#cont_img');
    var item = document.querySelectorAll('.slide_js');
    var pre = document.querySelector('#volt');
    var nex = document.querySelector('#avan');

    pre.addEventListener('click', function() {
      strea.insertBefore(item[item.length - 1], item[0]);
      item = document.querySelectorAll('.slide_js');
    });
  
    nex.addEventListener('click', function() {
      strea.appendChild(item[0]);
      item = document.querySelectorAll('.slide_js');
    });
  });