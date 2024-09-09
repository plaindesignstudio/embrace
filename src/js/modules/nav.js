const menuOpenButton = document.querySelector(".openmenu");
const menuCloseButton = document.querySelector(".menu-close-button");
const mobileMenuDropdown = document.querySelector(".mobile-menu-dropdown");
// const topSearchButton = document.querySelector("#topSearchButton");
// const topSearchBar = document.querySelector("#topSearchBar");
const searchbarCloseButton = document.querySelector(".searchbar-close-button");


//NAV SEARCH
// topSearchButton.addEventListener("click", () => {
//   //document.body.classList.add("deactivatescroll");
//   topSearchBar.classList.add("header-search--open");
// });

// searchbarCloseButton.addEventListener("click", () => {
//   //document.body.classList.remove("deactivatescroll");
//   topSearchBar.classList.remove("header-search--open");
// });


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
var desktopMenu = document.querySelector('#desktopNav');

menuItemWithChildren.forEach( item => {
  // Mobile menu check
  if( mobileMenu != null ){
    if( item.parentElement.id === 'menu-top-menu-1' ){ // check for mobile menu
      
      var subWrapper = document.createElement('div');
      subWrapper.classList.add('subMenuWrapper');
      item.prepend( subWrapper );

      // get sub-menu element
      var submenuEl = item.querySelector('.sub-menu');

      subWrapper.prepend( submenuEl );

      // create go-back element button
      var goBackEl = document.createElement('button');
      goBackEl.classList.add('back-button', 'btn', 'btn-back');
      goBackEl.innerHTML = 'Back';

      // add go-back button to sub-menu as the first child
      subWrapper.prepend( goBackEl );

      // add event listener to each menu item with children
      item.addEventListener("click", event => {

      var parentMenu = document.querySelector('#menu-top-menu-1'); // get the parent menu and add the move-out css class
      parentMenu.classList.add('move-out');
      
      //submenuEl.classList.add('show-mobile-sub-menu'); // move the submenu into screen

      if( subWrapper != null && subWrapper.classList.contains("childrenDisplay") != true ){
        setTimeout(function () {
          subWrapper.classList.add('childrenDisplay');
        }, 10);
      } else{
          subWrapper.classList.remove('childrenDisplay');
      }

      // setup event listener for go-back button
      goBackEl.addEventListener( "click", event => {
        var parentSubmenuEl = event.target.subWrapper;

        //.closest(".subMenuWrapper");
        // reset and remove sub-menu classes to hide it
        //var subMenuWrapperParent = parentSubmenuEl;
        //console.log(subMenuWrapperParent);
        //subMenuWrapperParent.classList.remove('childrenDisplay'); 
        setTimeout(function () {
          //subWrapper.classList.remove('show-mobile-sub-menu'); // hide the submenu
          parentSubmenuEl.classList.remove('childrenDisplay'); // hide the submenu
        }, 10);
      });
        
      })
    }
  } 

  // Desktop Menu
  if( desktopMenu != null ){
    if( item.parentElement.id === 'menu-top-menu' ){ // check for desktop menu
      
      item.addEventListener("mouseenter", event => {
        var subChildNode = event.target.querySelector('.sub-menu');
        if( subChildNode != null ){
          subChildNode.classList.add('childrenDisplay');
          console.log('enter')
        }
      });
    
      item.addEventListener("mouseleave", (event) => {
        var subChildNode = event.target.querySelector('.sub-menu');
        subChildNode.classList.remove("childrenDisplay");
        console.log('leave')
      });
    }
  }
  
});