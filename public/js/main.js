"use strict";
"use strict";var steps=document.querySelectorAll("[data-step-count]"),dataValues=[],chart=(steps.forEach(function(e){dataValues.push(e.innerText)}),new Chart(document.getElementById("step-chart"),{type:"line",data:{labels:["02","03","04","05","06","07","08"],datasets:[{data:[1400,6e3,5e3,10236,200,8900,4125],borderColor:"rgba(54, 162, 235, 1)",backgroundColor:"rgba(54, 162, 235, 0)",tension:.5}]},options:{width:"auto",height:"auto",scales:{y:{grid:{display:!1},ticks:{display:!1}},x:{grid:{display:!1},ticks:{font:{size:16,family:"Inter"}}}},elements:{line:{borderWidth:3,fill:!0,stepped:!1,borderCapStyle:"round"},point:{radius:0}},plugins:{legend:{display:!1},tooltips:{mode:"nearest",intersect:!0,callbacks:{label:function(e,t){return t.datasets[0].data[e.index]}}},title:{display:!1}},hover:{mode:"nearest",intersect:!1}}}));
"use strict";var buttons=document.querySelectorAll("[data-toggle-ranking]"),rankings=document.querySelectorAll("[data-ranking]");function toggleRanking(t){var n=t.target.closest("[data-toggle-ranking]").dataset.toggleRanking,n=document.querySelector('[data-ranking="'+n+'"]');document.querySelectorAll("[data-toggle-ranking]").forEach(function(t){t.classList.remove("friends__switch-item--active")}),rankings.forEach(function(t){t.classList.remove("friends__ranking--show")}),t.target.closest("[data-toggle-ranking]").classList.add("friends__switch-item--active"),n.classList.add("friends__ranking--show")}buttons.forEach(function(t){t.addEventListener("click",function(t){t.preventDefault(),toggleRanking(t)})});
"use strict";var buttons=document.querySelectorAll("[data-page]"),pages=document.querySelectorAll("[data-show-page]"),backButtons=document.querySelectorAll("[data-page-back]");function nextPage(e){e=e.target.closest("[data-page]").dataset.page,e++,e=document.querySelector('[data-show-page="'+e+'"]');pages.forEach(function(e){e.classList.remove("setup-page--show")}),e.classList.add("setup-page--show")}function previousPage(e){e=e.target.closest("[data-show-page]").dataset.showPage,e--,e=document.querySelector('[data-show-page="'+e+'"]');pages.forEach(function(e){e.classList.remove("setup-page--show")}),e.classList.add("setup-page--show")}buttons.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),nextPage(e)})}),backButtons.forEach(function(e){e.addEventListener("click",function(e){previousPage(e)})});var options=document.querySelectorAll("[data-gender-option]"),goals=(options.forEach(function(e){e.addEventListener("click",function(){toggleClass(options,e,"setup__select-item--active")})}),document.querySelectorAll("[data-goal-option]"));function toggleClass(e,t,a){e.forEach(function(e){e.classList.remove(a)}),t.classList.toggle(a)}goals.forEach(function(e){e.addEventListener("click",function(){toggleClass(goals,e,"setup__goal-tile--active")})});
"use strict";var horizontal=document.querySelector("[data-swiper-horizontal]"),interleaveOffset=.75,swiper=new Swiper(horizontal,{loop:!1,speed:100,grabCursor:!0,mousewheelControl:!0,mousewheel:!0,slidesPerView:5,freeModeMomentum:!0,freeModeSticky:!0,centeredSlides:!0}),verticals=document.querySelectorAll("[data-swiper-vertical]");verticals.forEach(function(e){console.log(e);new Swiper(e,{direction:"vertical",loop:!1,speed:100,grabCursor:!0,mousewheelControl:!0,mousewheel:!0,slidesPerView:5,freeModeMomentum:!0,freeModeSticky:!0,centeredSlides:!0})});
"use strict";var toggles=document.querySelectorAll("[data-toggle-training]"),trainings=document.querySelectorAll("[data-training]");function toggleTraining(t){var a=t.target.closest("[data-toggle-training]").dataset.toggleTraining,a=document.querySelector('[data-training="'+a+'"]');console.log(a),document.querySelectorAll("[data-toggle-training]").forEach(function(t){t.classList.remove("training__switch-item--active")}),trainings.forEach(function(t){t.classList.remove("training__programs--active")}),t.target.closest("[data-toggle-training]").classList.add("training__switch-item--active"),a.classList.add("training__programs--active")}toggles.forEach(function(t){t.addEventListener("click",function(t){t.preventDefault(),toggleTraining(t)})});