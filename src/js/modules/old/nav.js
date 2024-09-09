
const menuOpenButton = document.querySelector(".openmenu");
const menuCloseButton = document.querySelector(".menu-close-button");
const mobileMenuDropdown = document.querySelector(".mobile-menu-dropdown");
const topSearchButton = document.querySelector("#topSearchButton");
const topSearchBar = document.querySelector("#topSearchBar");
const searchbarCloseButton = document.querySelector(".searchbar-close-button");


//NAV SEARCH
topSearchButton.addEventListener("click", () => {
  //document.body.classList.add("deactivatescroll");
  topSearchBar.classList.add("header-search--open");
});

searchbarCloseButton.addEventListener("click", () => {
  //document.body.classList.remove("deactivatescroll");
  topSearchBar.classList.remove("header-search--open");
});


menuOpenButton.addEventListener("click", () => {
  document.body.classList.add("deactivatescroll");
  mobileMenuDropdown.classList.add("mobile-menu-dropdown--open");
});

menuCloseButton.addEventListener("click", () => {
  document.body.classList.remove("deactivatescroll");
  mobileMenuDropdown.classList.remove("mobile-menu-dropdown--open");
});


////////////////////////////////////////////////////
// Event Listener for Menu-item's with Sub-menu's //

var menuItemWithChildren = document.querySelectorAll('.menu-item-has-children');
var mobileMenu = document.querySelector('.mobile-nav');
var desktopMenu = document.querySelector('#menu-top-menu');

menuItemWithChildren.forEach( item => {
  // Mobile menu check
/*  if( mobileMenu != null ){
    if( item.parentElement.id === 'menu-top-menu-1' ){ // check for mobile menu
      
      // get sub-menu element
      var submenuEl = item.querySelector('.sub-menu');

      // create go-back element button
      var goBackEl = document.createElement('li');
      goBackEl.innerHTML = '<a class="go-back" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg></a>';

      // add go-back button to sub-menu as the first child
      submenuEl.prepend( goBackEl );

      // add event listener to each menu item with children
      item.addEventListener("click", event => {

      var parentMenu = document.querySelector('#menu-top-menu-1'); // get the parent menu and add the move-out css class
      parentMenu.classList.add('move-out');
      
      submenuEl.classList.add('show-mobile-sub-menu'); // move the submenu into screen

      if( submenuEl != null && submenuEl.classList.contains("childrenDisplay") != true ){
        setTimeout(function () {
          submenuEl.classList.add('childrenDisplay');
        }, 10);
      } else{
        submenuEl.classList.remove('childrenDisplay');
      }

      // setup event listener for go-back button
      goBackEl.addEventListener( "click", event => {
        var parentSubmenuEl = event.target.closest('.sub-menu');

        // reset and remove sub-menu classes to hide it
        setTimeout(function () {
          parentSubmenuEl.classList.remove('show-mobile-sub-menu'); // hide the submenu
          parentSubmenuEl.classList.remove('childrenDisplay'); // hide the submenu
          parentMenu.classList.remove('move-out'); // bring back the parent menu
        }, 10);
      })
        
      })
    }
  } */

  // Desktop Menu
  if( desktopMenu != null ){
    if( item.parentElement.id === 'menu-top-menu' ){ // check for desktop menu
      
      item.addEventListener("mouseenter", event => {
        var subChildNode = event.target.querySelector('.sub-menu');
        if( subChildNode != null ){
          subChildNode.classList.add('childrenDisplay');
        }
      });
    
      item.addEventListener("mouseleave", (event) => {
        var subChildNode = event.target.querySelector('.sub-menu');
        subChildNode.classList.remove("childrenDisplay");
      });
    }
  }
  
});