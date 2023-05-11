const exerciseToggles = document.querySelectorAll('[data-exercise-toggle]');
const exercisesGroup = document.querySelectorAll('[data-exercises]');

const exercises = document.querySelectorAll('[data-exercise]');

exerciseToggles.forEach(exerciseToggle => {
    exerciseToggle.addEventListener("click", (e) => {
        toggleExercise(e, exerciseToggle)
    })
});

exercises.forEach(exercise => {
    exercise.addEventListener("click", (e) => {
        toggleCheckmark(e, exercise);
    })
})


function toggleExercise(e, exerciseToggle) {
    const exercise = e.target.closest('[data-exercise-toggle]').dataset.exerciseToggle;

    exerciseToggle.classList.toggle("add-exercise__parts--active");

    const exercises = document.querySelector('[data-exercises="' + exercise + '" ]')
    exercises.classList.toggle("add-exercise__exercises--show");
}

function toggleCheckmark(e, exercise) {
    exercise.querySelector('[data-checkmark]').classList.toggle('program__checkmark-wrapper--active')
}
