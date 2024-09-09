//import {getPersona, setPersona, checkPersonaAndSet} from "./cookieFunctions";
const personaButtons = document.getElementsByClassName("support-button");
const personaSelectButton = document.querySelector(".persona-select-button");
const personaSection = document.querySelector(".persona-section");
const personaOverlay = document.querySelector(".persona-overlay");
const logoholder = document.querySelector("#logoholder");
const mobileTopMenu = document.querySelector("#mobile-top-menu");
const logoLetters = document.getElementsByClassName("logo-letter");
const crossFill = document.getElementsByClassName("crossFill");
//young
const youngMenu = document.querySelector("#young");
//support
const supportMenu = document.querySelector("#support");
//support
const donorMenu = document.querySelector("#donor");

//default
const defaultMenu = document.querySelector("#default");
//support-button

//NAV SEARCH
personaSelectButton.addEventListener("click", () => {
  //document.body.classList.add("deactivatescroll");
  personaSection.classList.add("personaSection--open");
  personaOverlay.classList.add("persona-overlay--open");
});

// searchbarCloseButton.addEventListener("click", () => {
//   //document.body.classList.remove("deactivatescroll");
//   personaSection.classList.remove("personaSection--open");
//   personaOverlay.classList.remove("persona-overlay--open");
// });

personaOverlay.addEventListener("click", () => {
  //document.body.classList.remove("deactivatescroll");
  personaSection.classList.remove("personaSection--open");
  personaOverlay.classList.remove("persona-overlay--open");
});


var persona = localStorage.getItem("persona");
for(var i = 0; i < personaButtons.length; i++) {
  let personaButton = personaButtons[i];
  // personaSelectButton
  if(persona == personaButton.dataset.persona){
    var selectedIcon = personaButton.firstElementChild;
    const personaLink = personaButton.parentNode;
    console.log(personaLink);
    personaLink.setAttribute('href', "/");
    selectedIcon.classList.remove("d-none");
    personaButton.addEventListener("click", () => {
      var personaType =  personaButton.dataset.persona;
      
      // Set Item
      localStorage.removeItem("persona");
    });

  }else{
  personaButton.addEventListener("click", () => {
  var personaType =  personaButton.dataset.persona;
  // Set Item
  localStorage.setItem("persona", personaType);
});
  }
}

//ON PERSONA SELECTED

// localStorage.removeItem("persona");

if(persona !== null){
  // logoholder.classList.remove("bg-primary");
  mobileTopMenu.classList.add("bg-secondary");

for(var i = 0; i < crossFill.length; i++) {
  let cross = crossFill[i];
  cross.classList.add("fill-light");
}

if(persona == 'young'){

  youngMenu.classList.remove("d-none");
  youngMenu.classList.add("d-flex");
}

if(persona == 'support'){
  supportMenu.classList.remove("d-none");
  supportMenu.classList.add("d-flex");
}

if(persona == 'donor'){

  donorMenu.classList.remove("d-none");
  donorMenu.classList.add("d-flex");
}

// for(var i = 0; i < personaButtons.length; i++) {
//   let personaButton = personaButtons[i];
//   personaButton.classList.add("text-light");
// }
//support-button
  
}else{
  // logoholder.classList.add("bg-secondary");
  // mobileTopMenu.classList.add("bg-secondary");
  for(var i = 0; i < crossFill.length; i++) {
    let cross = crossFill[i];
    cross.classList.add("fill-secondary");
  }

  defaultMenu.classList.remove("d-none");
  defaultMenu.classList.add("d-flex");

}



// ////////////////////////////////////////////////////
// // Event Listener for Menu-item's with Sub-menu's //


// var menuItemWithChildren = document.querySelectorAll('.menu-item-has-children');
// var mobileMenu = document.querySelector('.mobile-nav');
// var desktopMenu = document.querySelector('#desktopNav');

// menuItemWithChildren.forEach( item => {
//   // Mobile menu check
//   if( mobileMenu != null ){
//     if( item.parentElement.id === 'menu-top-menu' ){ // check for mobile menu
      
//       var subWrapper = document.createElement('div');
//       subWrapper.classList.add('subMenuWrapper');
//       item.prepend( subWrapper );

//       // get sub-menu element
//       var submenuEl = item.querySelector('.sub-menu');

//       subWrapper.prepend( submenuEl );

//       // create go-back element button
//       var goBackEl = document.createElement('button');
//       goBackEl.classList.add('back-button');
//       goBackEl.innerHTML = '<div class="go-back" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12.286" height="21.501" viewBox="0 0 12.286 21.501"><defs><clipPath id="clip-path"><rect width="21.501" height="12.286" fill="none"/></clipPath><clipPath id="clip-path-2"><rect id="Rectangle_471" data-name="Rectangle 471" width="21.501" height="12.286" fill="#5c708a"/></clipPath></defs><g id="Group_1085" data-name="Group 1085" transform="translate(-1741.392 -40.269)"><g id="Repeat_Grid_1" data-name="Repeat Grid 1" transform="translate(1753.678 40.269) rotate(90)" clip-path="url(#clip-path)" style="isolation: isolate"><g id="Group_694" data-name="Group 694"><g id="Group_692" data-name="Group 692" clip-path="url(#clip-path-2)"><path id="Path_2744" data-name="Path 2744" d="M10.75,12.286a1.529,1.529,0,0,1-1.086-.45L.45,2.622A1.536,1.536,0,0,1,2.622.45L10.75,8.581,18.88.451a1.536,1.536,0,0,1,2.172,2.172l-9.215,9.215a1.531,1.531,0,0,1-1.087.449" fill="#5c708a"/></g></g></g></g></svg>Back</div>';

//       // add go-back button to sub-menu as the first child
//       subWrapper.prepend( goBackEl );

//       // add event listener to each menu item with children
//       item.addEventListener("click", event => {

//       var parentMenu = document.querySelector('#menu-top-menu'); // get the parent menu and add the move-out css class
//       parentMenu.classList.add('move-out');
      
//       //submenuEl.classList.add('show-mobile-sub-menu'); // move the submenu into screen

//       if( subWrapper != null && subWrapper.classList.contains("childrenDisplay") != true ){
//         setTimeout(function () {
//           subWrapper.classList.add('childrenDisplay');
//         }, 10);
//       } else{
//           subWrapper.classList.remove('childrenDisplay');
//       }

//       // setup event listener for go-back button
//       goBackEl.addEventListener( "click", event => {
//         var parentSubmenuEl = event.target.subWrapper;

//         //.closest(".subMenuWrapper");
//         // reset and remove sub-menu classes to hide it
//         //var subMenuWrapperParent = parentSubmenuEl;
//         //console.log(subMenuWrapperParent);
//         //subMenuWrapperParent.classList.remove('childrenDisplay'); 
//         setTimeout(function () {
//           //subWrapper.classList.remove('show-mobile-sub-menu'); // hide the submenu
//           parentSubmenuEl.classList.remove('childrenDisplay'); // hide the submenu
//         }, 10);
//       });
        
//       })
//     }
//   } 

//   // Desktop Menu
//   /* if( desktopMenu != null ){
//     if( item.parentElement.id === 'menu-top-menu' ){ // check for desktop menu
      
//       item.addEventListener("mouseenter", event => {
//         var subChildNode = event.target.querySelector('.sub-menu');
//         if( subChildNode != null ){
//           subChildNode.classList.add('childrenDisplay');
//           console.log('enter')
//         }
//       });
    
//       item.addEventListener("mouseleave", (event) => {
//         var subChildNode = event.target.querySelector('.sub-menu');
//         subChildNode.classList.remove("childrenDisplay");
//         console.log('leave')
//       });
//     }
//   }
//   */
  
// });