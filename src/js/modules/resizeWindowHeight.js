  // resize divs on window resize
  window.onload = function() {

  var reslides = document.querySelectorAll(".slide");
   var reslidesInner = document.querySelectorAll(".slides-inner");
  var heightArray = [];
   //navigation-spacer
const navigationSpacer = document.querySelector("#navigation-spacer");
//logoholder
const logoholder = document.querySelector("#logoholder");
const banner_menu_top = document.querySelector("#banner-menu-top");

  var navHeightArray = [];

  for (let i = 0; i < reslides.length; i++) {
    var slideheight = reslides[i].offsetHeight;
    heightArray.push(slideheight);
  }

  //console.log(heightArray);
  for (let i = 0; i < reslidesInner.length; i++) {
    var slideInner = reslidesInner[i];
    var maxHeightSlide = Math.max(...heightArray);
    var heghtSlideInner = (maxHeightSlide+"px");
    slideInner.style.height = heghtSlideInner;
    banner_menu_top.style.height = heghtNavInner;
  }

  function windowResize(){

    navHeightArray = [];

    var navheight = logoholder.offsetHeight;
    navHeightArray.push(navheight);
    addNewSize();
  }

 
  function addNewSize(){

    var maxHeightSlide = Math.max(...navHeightArray);
    var heightNavInner = (maxHeightSlide+"px");
    navigationSpacer.style.height = '100%';
    
    navigationSpacer.style.height = heightNavInner;
    banner_menu_top.style.height = heightNavInner;

   }

  window.addEventListener('resize', function(event) {
    windowResize();
   }, true);

   windowResize();

  }

//windowResize();