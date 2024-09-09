document.addEventListener('DOMContentLoaded', () => {
  // CHANGE ONLY THIS
  const SLIDETIME = 900; //ms
  // --------------------------

  const backButtonText = document.querySelector('.wbn-slider-back-btn');
  const forwardButtonText = document.querySelector('.wbn-slider-next-btn');
  // Select all slides and convert node to array for easy handling
  // const allSlidesText = Array.from(document.querySelectorAll('.wbn-slide'));
  const allSlidesText = [...document.querySelectorAll('.wbn-slide-text')];
  let clickableText = true;
  let activeText = null;
  let slideQuantity = null;
  let newActiveText = null;

  function initSliderText() {
    // Set the CSS transition on the slides to the value we specified in SLIDETIME above
    allSlidesText.forEach(slide =>
      slide.setAttribute(
        'style',
        `transition: transform ${SLIDETIME}ms ease;
                     animation-duration: ${SLIDETIME}ms`,
      ),
    );
  }
 function fadeOut(fadeTarget) {
    if (!fadeTarget.style.opacity) {
        fadeTarget.style.opacity = 0;
    }
};

function fadeIn(fadeTarget) {
  if (!fadeTarget.style.opacity) {
      fadeTarget.style.opacity = 1;
  }
};


  function changeSlideText(forward) {
    if (clickableText) {
      clickableText = false;
      activeText = document.querySelector('.activeText');
      const activeSlideIndexText = allSlidesText.indexOf(activeText);

      if (forward) {
        console.log('activeSlideIndexText: ', activeSlideIndexText);
        console.log('allSlidesText.length: ', allSlidesText.length);
        console.log('new slide: ', (activeSlideIndexText + 1) % allSlidesText.length);

        newActiveText = allSlidesText[(activeSlideIndexText + 1) % allSlidesText.length];
        activeText.classList.add('slideOutLeft');
        //fadeOut(activeText);
        newActiveText.classList.add('slideInRight', 'activeText');
        
      } else {
        console.log('activeSlideIndexText: ', activeSlideIndexText);
        console.log('allSlidesText.length: ', allSlidesText.length);
        console.log('new slide: ', (activeSlideIndexText - 1 + allSlidesText.length) % allSlidesText.length);
  
        newActiveText =
          allSlidesText[
            (activeSlideIndexText - 1 + allSlidesText.length) % allSlidesText.length
          ];
        activeText.classList.add('slideOutRight');
        newActiveText.classList.add('slideInLeft', 'activeText');
      }
    }
  }

  function changeSlideTextTimer() {

    clickableText = false;
    activeText = document.querySelector('.activeText');
    const activeSlideIndexText = allSlidesText.indexOf(activeText);


      console.log('activeSlideIndexText: ', activeSlideIndexText);
      console.log('allSlidesText.length: ', allSlidesText.length);
      console.log('new slide: ', (activeSlideIndexText + 1) % allSlidesText.length);

      newActiveText = allSlidesText[(activeSlideIndexText + 1) % allSlidesText.length];
      activeText.classList.add('slideOutLeft');
      newActiveText.classList.add('slideInRight', 'activeText');
   
  }

  // window.setInterval(function(){
  //  changeSlideTextTimer();
  // }, 9000);

  slideQuantity = 0;
  allSlidesText.forEach(slide => {
    slide.addEventListener('transitionend', e => {
      // Check for the old active transition and if clickableText is false
      // to not trigger it more than once
      if (slide === activeText && !clickableText) {
        clickableText = true;
        // Remove all CSS animation classes on old activeText
        activeText.className = 'wbn-slide-text';
      }
    });
    slideQuantity = slideQuantity + 1
  });

  if(slideQuantity > 1){
  //Event listeners
  forwardButtonText.addEventListener('click', () => {
    changeSlideText(true);
  });
  backButtonText.addEventListener('click', () => {
    changeSlideText(false);
  });
  }

  // Init the slider
  initSliderText();

});

