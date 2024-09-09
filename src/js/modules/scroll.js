// var TweenMax = require("./TweenMax.min.js");
// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
import { gsap } from "gsap/dist/gsap";
import { ScrollTrigger } from "gsap/dist/ScrollTrigger";

// import ScrollMagic from "scrollmagic";
// var addIndicators = require("../../../node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators");
// var animation = require("../../../node_modules/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap");
const revealChildren = document.getElementsByClassName("reveal-children");


gsap.registerPlugin(ScrollTrigger);

//REVEAL ANIMATION
// for(var i = 0; i < revealChildren.length; i++){
//   //do something to each div like
//   var divElement = revealChildren[i].getElementsByTagName('div');
//   console.log(divElement);
// }

gsap.utils.toArray(".reveal-children").forEach(section => {
  gsap.from(section.querySelectorAll("div, p, a, h1, h2, h3, h4, h5, h6,  #logo-icon, #logo-text", '.wp-element-button'), {
    scrollTrigger: section,
    autoAlpha: 0,
    y: 75,
    duration: 1,
    stagger: 0.1,
    ease: "sine",
  });
});

gsap.utils.toArray(".reveal-children-left").forEach(section => {
  gsap.from(section.querySelectorAll("div, p, a, h1, h2, h3, h4, h5, h6, #logo-icon, #logo-text", '.wp-element-button'), {
    scrollTrigger: section,
    autoAlpha: 0,
    //y: 75,
    x: 150,
    duration: 1,
    stagger: 0.1,
    ease: "sine",
  });
});

gsap.utils.toArray(".reveal-children-right").forEach(section => {
  gsap.from(section.querySelectorAll("div, p, a, h1, h2, h3, h4, h5, h6, #logo-icon, #logo-text", '.wp-element-button'), {
    scrollTrigger: section,
    autoAlpha: 0,
    //y: 75,
    x: -150,
    duration: 1,
    stagger: 0.1,
    ease: "sine",
  });
});

// gsap.utils.toArray(".logo-reveal").forEach(section => {
//   gsap.from(section.querySelectorAll("#logo-icon"), {
//     scrollTrigger: section,
//     autoAlpha: 0,
//     //y: 75,
//     x: -25,
//     duration: 1,
//     stagger: 0.1,
//     ease: "sine",
//   });
// });

gsap.utils.toArray(".logo-reveal").forEach(section => {
  gsap.from(section.querySelectorAll("#logo-text"), {
    scrollTrigger: section,
    autoAlpha: 0,
    //y: 75,
    x: 50,
    duration: 1,
    stagger: 0.1,
    ease: "sine",
  });
});

gsap.utils.toArray(".reveal-up").forEach(function (elem) {
  ScrollTrigger.create({
    trigger: elem,
    start: "top 80%",
    end: "bottom 20%",
    //markers: true,
    onEnter: function () {
      gsap.fromTo(
        elem,
        { y: 100, autoAlpha: 0 },
        {
          duration: 1.75,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeave: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    },
    onEnterBack: function () {
      gsap.fromTo(
        elem,
        { y: -100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeaveBack: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    }
  });
});


//SCROLL PARALLAX
gsap.utils.toArray('.scrollSpeed').forEach((elem, i) => {
  var trigger = (elem.getAttribute('data-trigger'));
  var trigger = ('#'+trigger);
  const from = JSON.parse(elem.dataset.from);
  const to = JSON.parse(elem.dataset.to);
  const stObj = {
    scrollTrigger: {
       trigger: trigger,
       start: "top 55%",
       end:"bottom",
       scrub:true,
       //markers:true
    }
  };
  const vars = Object.assign(to, stObj);
  gsap.fromTo(elem, from, vars);
});



//NAV SCROLL
const showAnim = gsap.from('#logo-text', {
  xPercent: -100,
  width: 0,
  paused: true,
  duration: 0.2
}).progress(1);
ScrollTrigger.create({
  trigger: "#topLogoTrigger",
  start: "top 55%",
  end:"bottom",
  // markers:true,
  onUpdate: (self) => {
    self.direction === -1 ? showAnim.play() : showAnim.reverse()
  }
});

const iconAnim = gsap.from('#logo-icon', {
  xPercent: 0,
  width: 45,
  paused: true,
  duration: 0.2
}).progress(1);

ScrollTrigger.create({
  start: "top top",
  end: 99999,
  onUpdate: (self) => {
    self.direction === -1 ? iconAnim.play() : iconAnim.reverse()
  }
});

const socialAnim = gsap.from('#socialNav', {
  xPercent: 0,
  top: 0,
  paused: true,
  // xPercent: -8,
  duration: 0.2
}).progress(1);

ScrollTrigger.create({
  trigger: "#topLogoTrigger",
  start: "top 60%",
  end:"bottom",
  onUpdate: (self) => {
    self.direction === -1 ? socialAnim.play() : socialAnim.reverse()
  }
});

const desktopnavAnim = gsap.from('#desktopNav', {
  yPercent: 8,
  duration: 0.5
}).progress(1);

ScrollTrigger.create({
  trigger: "#topLogoTrigger",
  start: "top 60%",
  end:"bottom",
  onUpdate: (self) => {
    self.direction === -1 ? desktopnavAnim.play() : desktopnavAnim.reverse()
  }
});


const desktopnavTop = gsap.from('#desktopNav', {
  boxShadow: "2px 4px 19px -6px rgba(19, 18, 18, 0.24)",
  background: "#ffffff",
  xPercent: 0,
}).progress(1);

ScrollTrigger.create({
  trigger: "#topLogoTrigger",
  start: "top 60%",
  end:"bottom",
  onUpdate: (self) => {
    self.direction === -1 ? desktopnavTop.play() : desktopnavTop.reverse()
  }
});

// const mobileAnim = gsap.from('#mobileNav', {
//   yPercent: 0,
//   duration: 0.5
// }).progress(1);

// ScrollTrigger.create({
//   trigger: "#topLogoTrigger",
//   start: "top 60%",
//   end:"bottom",
//   onUpdate: (self) => {
//     self.direction === -1 ? mobileAnim.play() : mobileAnim.reverse()
//   }
// });

// const mobileTop = gsap.from('#mobileNav', {
//   boxShadow: "2px 4px 19px -6px rgba(19, 18, 18, 0.24)",
//   // background: "#ffffff",
//   padding: "5px",
//   //xPercent: -5,
// }).progress(1);
// ScrollTrigger.create({
//   trigger: "#topLogoTrigger",
//   start: "top 60%",
//   end:"bottom",
//   onUpdate: (self) => {
//     self.direction === -1 ? mobileTop.play() : mobileTop.reverse()
//   }
// });


//IMG reveal
