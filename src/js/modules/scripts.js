const pillGroup = document.querySelectorAll(".pill-group");

      // get sub-menu element

      function openFilter(filter){
        filter.classList.remove("closed");
        filter.classList.add("open");
      }

      function closeFilter(filter){
        filter.classList.remove("open");
        filter.classList.add("closed");
      }


      function filterSwitchCheck(closed, filter){
        if(closed == true){
          console.log("closed filters");
          openFilter(filter);
        }else{
          console.log("open filters");
          closeFilter(filter);
        }
      }

      var filter_wrapper = document.querySelector('.sf-field-taxonomy-product_categories');
      if(filter_wrapper){

        const filter_list = filter_wrapper.querySelectorAll('ul');
        const filters = filter_list[0];
        filters.classList.add("closed");
      // create go-back element button
      var filter_button = document.createElement('div');
      filter_button.classList.add("filter_toggle", "btn_filter", "btn-otlined-primary");
      filter_button.innerHTML = '<div class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12.986" height="13.361" viewBox="0 0 12.986 13.361"><g id="Group_2393" data-name="Group 2393" transform="translate(-204.453 -219.819)"><line id="Line_139" data-name="Line 139" x2="10.986" transform="translate(205.453 220.819)" fill="none" stroke="#730067" stroke-linecap="round" stroke-width="2"/><line id="Line_140" data-name="Line 140" x2="7.553" transform="translate(205.453 226.5)" fill="none" stroke="#730067" stroke-linecap="round" stroke-width="2"/><line id="Line_141" data-name="Line 141" x2="4.12" transform="translate(205.453 232.181)" fill="none" stroke="#730067" stroke-linecap="round" stroke-width="2"/></g></svg><span class="mx-2">Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="14.221" height="8.697" viewBox="0 0 14.221 8.697"><g id="Group_1270" data-name="Group 1270" transform="translate(1.414 7.283) rotate(-90)"><line id="Line_20" data-name="Line 20" y1="5.524" x2="5.869" transform="translate(0 0)" fill="none" stroke="#730067" stroke-linecap="round" stroke-width="2"/><line id="Line_21" data-name="Line 21" x2="5.869" y2="5.869" transform="translate(0 5.524)" fill="none" stroke="#730067" stroke-linecap="round" stroke-width="2"/></g></svg></div>';

      // add go-back button to sub-menu as the first child
      filter_wrapper.prepend( filter_button );

      filter_button.addEventListener("click", () => {

         var closed = filters.classList.contains("closed");
         filterSwitchCheck(closed, filters)
        //  filter_list[0].classList.add("closed");
      });

      }

//NAV SEARCH
if(pillGroup !== null){
  // const pillChoices = pillGroup.getElementsByTagName('input');
  pillGroup.forEach( item => {
    const pillChoices = item.getElementsByTagName('input');
for (let i = 0; i < pillChoices.length; i++) {
 
  var pillChoice = pillChoices[i];

  if(pillChoice.checked){
        //Add styles
        addStyles(pillChoice);
  }


  pillChoice.addEventListener('change', function (event) {
    // Log the clicked element in the console
    const pillTarget = event.target;

    //Remove styles
    removeStyles(pillChoices);

    //Add styles
    addStyles(pillTarget);
  
  }, false);
}
  });
 //Remove styles called when item is clicked
 //primary f5f0e5
 //secondary 5c708a
function removeStyles(pillChoices){
for (let a = 0; a < pillChoices.length; a++) {
     //removeStyles(parentPillTarget);
  const parentPillChoice = pillChoices[a].closest('.gchoice');
  parentPillChoice.style.cssText += 'background-color:#f1f1f6;'; //f1f1f6
  parentPillChoice.style.cssText += 'border-color:#f1f1f6;';
}
}

 //Add styles on clicked item
function addStyles(pillChoice){
  const parentPillTarget = pillChoice.closest('.gchoice');
  parentPillTarget.style.cssText += 'background-color:#12C3F0;';
  parentPillTarget.style.cssText += 'border-color:#12C3F0;';
}
  
  
}