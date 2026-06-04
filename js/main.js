window.addEventListener('load', (event) => {
    document.body.classList.add("page-loaded");
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.to(".page-title-banner .page-banner-desc", {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: "power3.out",
        onComplete: () => {
            gsap.to(".page-title-banner .page-banner-desc", {
                scrollTrigger: {
                    trigger: ".page-title-banner",
                    start: "top top",
                    end: "bottom 20%",
                    scrub: 1,
                },
                y: -150,
                opacity: 0,
                ease: "none"
            });
        }
    });

    const contact_view_timeline = gsap.timeline({
        scrollTrigger: {
          trigger: ".home-page .contact .columns",
          start: "top 80%",
          end: "top 30%",
          scrub: 1,
          markers: false
        }
    });
    contact_view_timeline.from(".home-page .contact .form", {
        x: -200,
        opacity: 0,
        duration: 1
    }, 0);
    contact_view_timeline.from(".home-page .contact .address", {
        x: 200,
        opacity: 0,
        duration: 1
    }, 0);
    contact_view_timeline.from(".home-page .contact .block2", {
        y: 200,
        opacity: 0,
        duration: 1
    }, 0);


    const plan_visit_timeline = gsap.timeline({
        scrollTrigger: {
          trigger: ".home-page .plan-visit",
          start: "top 40%",
          end: "bottom 120%",
          scrub: 1,
          markers: false
        }
    });
    plan_visit_timeline.from(".home-page .plan-visit .item1", {
        y: 50,
        opacity: 0,
        duration: 1.5
    }, 0);
    plan_visit_timeline.from(".home-page .plan-visit .item2", {
        y: 100,
        opacity: 0,
        duration: 2
    }, 0);
    plan_visit_timeline.from(".home-page .plan-visit .item3", {
        y: 200,
        opacity: 0,
        duration: 2.5
    }, 0);
    
    new WOW().init();
});
document.addEventListener("DOMContentLoaded", function() {
    ascc_app.init();
});

const ascc_app = {
    init: function(){
        this.eventBindings();
        if (document.querySelector('.js-calendar')) {
            flatpickr(".js-calendar", {
                showMonths: 1,
                dateFormat: "Y-m-d",
                locale: {
                    weekdays: {
                        shorthand: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
                        longhand: [
                            "Monday",
                            "Tuesday",
                            "Wednesday",
                            "Thursday",
                            "Friday",
                            "Saturday",
                            "Sunday"
                        ]
                    }
                }
            });
        }
    },
    eventBindings: function() {
        document.getElementById("nav-icon").addEventListener("click", () => {
            document.body.classList.add('menu-opened')
            this.animateNavigation();
        });
        document.body.addEventListener('click', async (e) => {
            const trigger = e.target.closest("[data-toggle='content-modal']");
            
            if (trigger) {
                e.preventDefault();
        
                const modal = new bootstrap.Modal(document.getElementById("content-modal"));
                const dataURL = trigger.getAttribute("data-path");
                modal.show();

                try {
                    const response = await fetch(dataURL);
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.text();

                    document.getElementById("content-modal").querySelector(".modal-body").classList.remove("loading");
                    document.getElementById("content-modal").querySelector(".modal-body").innerHTML = data;
                } catch (error) {
                    document.getElementById("content-modal").querySelector(".modal-body").innerHTML = "Error! Data Not Loaded";
                }        
            }
        });
    },
    animateNavigation: function() {
        const navItems = document.querySelectorAll(".nav-list > li");
        gsap.fromTo(navItems, 
            { 
                opacity: 0, 
                x: 50,
                y: 100,
                skewX: -10
            }, 
            { 
                opacity: 1, 
                x: 0, 
                y: 0, 
                skewX: 0,
                duration: 0.6, 
                stagger: 0.1,
                ease: "power2.out" 
            }
        );
    },
    initMuseumsSlider: function() {
        const museums_swiper = new Swiper(".other-museums .swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,

            navigation: {
                nextEl: ".other-museums .arrows .next",
                prevEl: ".other-museums .arrows .prev",
            }
        });
    },
    qtyUpdate: function(el, type) {
        const qtyBox = el.closest('.qty');
        const numEl = qtyBox.querySelector('.num');
        let value = parseInt(numEl.innerText);

        if (type === 'increment') {
            value++;
        } else if (type === 'decrement' && value > 1) {
            value--;
        }

        numEl.innerText = value;
    }
};

const header = document.querySelector(".site-header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 150) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});