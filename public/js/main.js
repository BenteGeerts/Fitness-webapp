const exerciseToggles=document.querySelectorAll("[data-exercise-toggle]"),exercisesGroup=document.querySelectorAll("[data-exercises]"),exercises=document.querySelectorAll("[data-exercise]");function toggleExercise(e,s){const c=e.target.closest("[data-exercise-toggle]").dataset.exerciseToggle;s.classList.toggle("add-exercise__parts--active");document.querySelector('[data-exercises="'+c+'" ]').classList.toggle("add-exercise__exercises--show")}exerciseToggles.forEach((e=>{e.addEventListener("click",(s=>{toggleExercise(s,e)}))}));
let steps=document.querySelectorAll("[data-step-count]"),dates=document.querySelectorAll("[data-step-date]"),currentDay=document.querySelector("[data-current-steps]");const dataSteps=[],dataDates=[];steps.forEach((t=>{dataSteps.push(t.innerText)})),dates.forEach((t=>{dataDates.push(t.innerText)}));var lastItem=steps[steps.length-1];currentDay.innerHTML=lastItem.innerText+"<br>Steps</br>";const chart=new Chart(document.getElementById("step-chart"),{type:"line",data:{labels:dataDates,datasets:[{data:dataSteps,borderColor:"rgba(54, 162, 235, 1)",backgroundColor:"rgba(54, 162, 235, 0)",tension:.5}]},options:{width:"auto",height:"auto",scales:{y:{grid:{display:!1},ticks:{display:!1}},x:{grid:{display:!1},ticks:{font:{size:16,family:"Inter"}}}},elements:{line:{borderWidth:3,fill:!0,stepped:!1,borderCapStyle:"round"},point:{radius:0}},plugins:{legend:{display:!1},tooltips:{mode:"nearest",intersect:!0,callbacks:{label:function(t,e){return e.datasets[0].data[t.index]}}},title:{display:!1}},hover:{mode:"nearest",intersect:!1}}});
const buttons=document.querySelectorAll("[data-toggle-ranking]"),rankings=document.querySelectorAll("[data-ranking]");function toggleRanking(t){const e=t.target.closest("[data-toggle-ranking]").dataset.toggleRanking,n=document.querySelector('[data-ranking="'+e+'"]');document.querySelectorAll("[data-toggle-ranking]").forEach((t=>{t.classList.remove("friends__switch-item--active")})),rankings.forEach((t=>{t.classList.remove("friends__ranking--show")})),t.target.closest("[data-toggle-ranking]").classList.add("friends__switch-item--active"),n.classList.add("friends__ranking--show")}buttons.forEach((t=>{t.addEventListener("click",(t=>{t.preventDefault(),toggleRanking(t)}))}));
for(var toggleVisibilityIcons=document.querySelectorAll("[data-toggle-visibility]"),i=0;i<toggleVisibilityIcons.length;i++)toggleVisibilityIcons[i].addEventListener("click",(function(){var i=this.parentElement.querySelector("[data-password]");"password"===i.type?(i.type="text",this.classList.remove("icon-visibility"),this.classList.add("icon-visibility_off")):(i.type="password",this.classList.remove("icon-visibility_off"),this.classList.add("icon-visibility"))}));
const buttonss=document.querySelectorAll("[data-page]"),pages=document.querySelectorAll("[data-show-page]"),numberPickers=document.querySelectorAll("[data-number-picker]");var goalCheckboxes=document.querySelectorAll("[data-goal-checkboxes]");function runNumberPickers(){numberPickers.forEach((e=>{const r=e.querySelector("[data-number-decrement]"),t=e.querySelector("[data-number-increment]"),n=e.querySelector("[data-number-input]"),u=n.min,c=n.max;r.addEventListener("click",(()=>{let e=parseInt(n.value);e>u&&(n.value=--e)})),t.addEventListener("click",(()=>{let e=parseInt(n.value);e<c&&(n.value=++e)}))}))}document.addEventListener("livewire:load",(function(){runNumberPickers()})),Livewire.on("inputfield",(function(){runNumberPickers()}));