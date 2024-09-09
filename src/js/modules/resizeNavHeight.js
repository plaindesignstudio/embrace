  // resize divs on window resize

  window.onload = function() {

 //navigation-spacer
const navigationSpacer = document.querySelector("#navigation-spacer");
const banner_menu_top = document.querySelector("#banner-menu-top");

// console.log(banner_menu_top);
//logoholder
const logoholder = document.querySelector("#logoholder");

  var navHeightArray = [];

  function windowResize(){

    //console.log(banner_menu_top);

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
    banner_menu_top.style.height = '100%';
    banner_menu_top.style.height = heightNavInner;
    // banner_menu_top.style.top = "-"+heghtNavInner;

   }

  window.addEventListener('resize', function(event) {
    windowResize();
   }, true);

  windowResize();

}