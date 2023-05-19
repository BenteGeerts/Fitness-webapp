const exerciseToggles=document.querySelectorAll("[data-exercise-toggle]"),exercisesGroup=document.querySelectorAll("[data-exercises]"),exercises=document.querySelectorAll("[data-exercise]");function toggleExercise(e,c){const t=e.target.closest("[data-exercise-toggle]").dataset.exerciseToggle;c.classList.toggle("add-exercise__parts--active");document.querySelector('[data-exercises="'+t+'" ]').classList.toggle("add-exercise__exercises--show")}function toggleCheckmark(e,c){c.querySelector("[data-checkmark]").classList.toggle("program__checkmark-wrapper--active")}exerciseToggles.forEach((e=>{e.addEventListener("click",(c=>{toggleExercise(c,e)}))})),exercises.forEach((e=>{e.addEventListener("click",(c=>{toggleCheckmark(c,e)}))}));


let steps=document.querySelectorAll("[data-step-count]"),dataValues=[];steps.forEach((e=>{dataValues.push(e.innerText)}));const chart=new Chart(document.getElementById("step-chart"),{type:"line",data:{labels:["02","03","04","05","06","07","08"],datasets:[{data:[1400,6e3,5e3,10236,200,8900,4125],borderColor:"rgba(54, 162, 235, 1)",backgroundColor:"rgba(54, 162, 235, 0)",tension:.5}]},options:{width:"auto",height:"auto",scales:{y:{grid:{display:!1},ticks:{display:!1}},x:{grid:{display:!1},ticks:{font:{size:16,family:"Inter"}}}},elements:{line:{borderWidth:3,fill:!0,stepped:!1,borderCapStyle:"round"},point:{radius:0}},plugins:{legend:{display:!1},tooltips:{mode:"nearest",intersect:!0,callbacks:{label:function(e,t){return t.datasets[0].data[e.index]}}},title:{display:!1}},hover:{mode:"nearest",intersect:!1}}});
const buttons=document.querySelectorAll("[data-toggle-ranking]"),rankings=document.querySelectorAll("[data-ranking]");function toggleRanking(t){const e=t.target.closest("[data-toggle-ranking]").dataset.toggleRanking,n=document.querySelector('[data-ranking="'+e+'"]');document.querySelectorAll("[data-toggle-ranking]").forEach((t=>{t.classList.remove("friends__switch-item--active")})),rankings.forEach((t=>{t.classList.remove("friends__ranking--show")})),t.target.closest("[data-toggle-ranking]").classList.add("friends__switch-item--active"),n.classList.add("friends__ranking--show")}buttons.forEach((t=>{t.addEventListener("click",(t=>{t.preventDefault(),toggleRanking(t)}))}));
for(var toggleVisibilityIcons=document.querySelectorAll("[data-toggle-visibility]"),i=0;i<toggleVisibilityIcons.length;i++)toggleVisibilityIcons[i].addEventListener("click",(function(){var i=this.parentElement.querySelector("[data-password]");"password"===i.type?(i.type="text",this.classList.remove("icon-visibility"),this.classList.add("icon-visibility_off")):(i.type="password",this.classList.remove("icon-visibility_off"),this.classList.add("icon-visibility"))}));
const buttonss=document.querySelectorAll("[data-page]"),pages=document.querySelectorAll("[data-show-page]"),numberPickers=document.querySelectorAll("[data-number-picker]");var goalCheckboxes=document.querySelectorAll("[data-goal-checkboxes]");function runNumberPickers(){numberPickers.forEach((e=>{const r=e.querySelector("[data-number-decrement]"),t=e.querySelector("[data-number-increment]"),n=e.querySelector("[data-number-input]"),u=n.min,c=n.max;r.addEventListener("click",(()=>{let e=parseInt(n.value);e>u&&(n.value=--e)})),t.addEventListener("click",(()=>{let e=parseInt(n.value);e<c&&(n.value=++e)}))}))}document.addEventListener("livewire:load",(function(){runNumberPickers()})),Livewire.on("inputfield",(function(){runNumberPickers()}));
const toggles=document.querySelectorAll("[data-toggle-training]"),trainings=document.querySelectorAll("[data-training]");function toggleTraining(t){const a=t.target.closest("[data-toggle-training]").dataset.toggleTraining,e=document.querySelector('[data-training="'+a+'"]');console.log(e);document.querySelectorAll("[data-toggle-training]").forEach((t=>{t.classList.remove("training__switch-item--active")})),trainings.forEach((t=>{t.classList.remove("training__programs--active")})),t.target.closest("[data-toggle-training]").classList.add("training__switch-item--active"),e.classList.add("training__programs--active")}toggles.forEach((t=>{t.addEventListener("click",(t=>{t.preventDefault(),toggleTraining(t)}))}));