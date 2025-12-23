const animationMap = {
  "fade-up": { y: 60 },

  "fade-down": { y: -60 },

  "fade-left": { x: 60 },

  "fade-right": { x: -60 },

  "zoom-in": { scale: 0.7 },

  "zoom-out": { scale: 1.3 },
};

Object.entries(animationMap).forEach(([type, fromVars]) => {
  const elements = gsap.utils.toArray(`[data-animate="${type}"]`);

  elements.forEach((el) => {
    const durationAttr = el.getAttribute("data-animate-duration");

    const delayAttr = el.getAttribute("data-animate-delay");

    const duration = durationAttr ? parseFloat(durationAttr) / 1000 : 1;

    const delay = delayAttr ? parseFloat(delayAttr) / 1000 : 0;

    // Apply animation

    gsap.fromTo(
      el,

      {
        opacity: 0,

        visibility: "hidden",

        ...fromVars, // starting position/scale
      },

      {
        opacity: 1,

        visibility: "visible",

        x: 0,

        y: 0,

        scale: 1,

        duration: duration,

        delay: delay,

        ease: "power2.out",

        scrollTrigger: {
          trigger: el,

          start: "top 80%",

          toggleActions: "play none none reverse", // play on enter, reverse on leave

          // optional: uncomment below if you want animation only once

          // once: true
        },
      },
    );
  });
});

document.querySelectorAll(".animate-slider").forEach((sliderSection) => {
  gsap.from(sliderSection.querySelectorAll(".swiper-slide"), {
    x: "100vw",

    opacity: 0,

    duration: 4.5,

    ease: "power2.out",

    stagger: 0.15,

    scrollTrigger: {
      trigger: sliderSection,

      start: "top 80%",

      toggleActions: "play none none none",
    },
  });
});








let revealContainers = document.querySelectorAll(".reveal");

revealContainers.forEach((container) => {
  let image = container.querySelector("img");

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,

      toggleActions: "restart none none none",
    },
  });

  tl.set(container, { autoAlpha: 1 });

  tl.from(container, 1.5, {
    xPercent: -100,

    ease: Power2.out,
  });

  tl.from(image, 1.5, {
    xPercent: 100,

    scale: 1.3,

    delay: -1.5,

    ease: Power2.out,
  });
});



gsap.utils.toArray(".animateCard").forEach((card) => {
  gsap.from(card, {
    y: 80,

    x: () => gsap.utils.random(-40, 40),

    scale: 0.8,

    opacity: 0,

    rotation: () => gsap.utils.random(-4, 4),

    duration: 1.2,

    ease: "elastic.out(1, 1)",

    scrollTrigger: {
      trigger: card,

      start: "top 80%",

      end: "bottom 20%",

      scrub: 0.7,
    },
  });
});


gsap.from(".title .ar", {
  x: "100vw", 
  opacity: 0,
  duration: 3,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".title",
    start: "top 80%",
    toggleActions: "play none none none",
  },
});

gsap.from(".title .en", {
  x: "-100vw",
  opacity: 0,
  duration: 3,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".title",
    start: "top 80%",
    toggleActions: "play none none none",
  },
});

gsap.from(".enter-the-center .center-button", {
  y: -400,  
  opacity: 0, 
  duration: 3, 
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".enter-the-center", 
    start: "top 80%",
    toggleActions: "play none none none",
  },
});


// Select all swiper slides
document.querySelectorAll(".plan-visit .item").forEach((item, index) => {
  gsap.from(item, {
    y: 150,                  // start 100px below
    opacity: 0,
    duration: 1.5,
    ease: "power2.out",
    scrollTrigger: {
      trigger: item,
      start: "top 80%",       // when item comes into view
      toggleActions: "play none none none",
    },
    delay: index * 0.3        // stagger effect
  });
});


gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

ScrollSmoother.create({
  wrapper: "#smooth-wrapper",

  content: "#smooth-content",

  smooth: 1.6,

  effects: true,
});
