"use strict";
"use strict";
"use strict";var buttons=document.querySelectorAll("[data-page]"),pages=document.querySelectorAll("[data-show-page]"),backButtons=document.querySelectorAll("[data-page-back]");function nextPage(e){e=e.target.closest("[data-page]").dataset.page,e++,e=document.querySelector('[data-show-page="'+e+'"]');pages.forEach(function(e){e.classList.remove("setup-page--show")}),e.classList.add("setup-page--show")}function previousPage(e){e=e.target.closest("[data-show-page]").dataset.showPage,e--,e=document.querySelector('[data-show-page="'+e+'"]');pages.forEach(function(e){e.classList.remove("setup-page--show")}),e.classList.add("setup-page--show")}buttons.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),nextPage(e)})}),backButtons.forEach(function(e){e.addEventListener("click",function(e){previousPage(e)})});var options=document.querySelectorAll("[data-gender-option]"),goals=(options.forEach(function(e){e.addEventListener("click",function(){toggleClass(options,e,"setup__select-item--active")})}),document.querySelectorAll("[data-goal-option]"));function toggleClass(e,t,a){e.forEach(function(e){e.classList.remove(a)}),t.classList.toggle(a)}goals.forEach(function(e){e.addEventListener("click",function(){toggleClass(goals,e,"setup__goal-tile--active")})});
"use strict";var horizontal=document.querySelector("[data-swiper-horizontal]"),interleaveOffset=.75,swiper=new Swiper(horizontal,{loop:!1,speed:100,grabCursor:!0,mousewheelControl:!0,mousewheel:!0,slidesPerView:5,freeModeMomentum:!0,freeModeSticky:!0,centeredSlides:!0}),verticals=document.querySelectorAll("[data-swiper-vertical]");verticals.forEach(function(e){console.log(e);new Swiper(e,{direction:"vertical",loop:!1,speed:100,grabCursor:!0,mousewheelControl:!0,mousewheel:!0,slidesPerView:5,freeModeMomentum:!0,freeModeSticky:!0,centeredSlides:!0})});