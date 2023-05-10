const toggles = document.querySelectorAll('[data-toggle-training]');
const trainings = document.querySelectorAll('[data-training]');

toggles.forEach(toggle => {
    toggle.addEventListener("click", (e) => {
        e.preventDefault()
        toggleTraining(e);
    });
})


function toggleTraining(e) {
    const toggleValue = e.target.closest('[data-toggle-training]').dataset.toggleTraining
    const training = document.querySelector('[data-training="' + toggleValue + '"]');
    console.log(training)

    const toggles = document.querySelectorAll('[data-toggle-training]');
    toggles.forEach(toggle => {
        toggle.classList.remove("training__switch-item--active");
    })

    trainings.forEach(training => {
        training.classList.remove("training__programs--active");
    })

    e.target.closest('[data-toggle-training]').classList.add("training__switch-item--active");
    training.classList.add("training__programs--active")
}
