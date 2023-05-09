const buttons = document.querySelectorAll('[data-toggle-ranking]');
const rankings = document.querySelectorAll('[data-ranking]');

buttons.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault()
        toggleRanking(e);
    });
})


function toggleRanking(e) {
    const buttonValue = e.target.closest('[data-toggle-ranking]').dataset.toggleRanking
    const ranking = document.querySelector('[data-ranking="' + buttonValue + '"]');

    const buttons = document.querySelectorAll('[data-toggle-ranking]');
    buttons.forEach(button => {
        button.classList.remove("friends__switch-item--active");
    })

    rankings.forEach(ranking => {
        ranking.classList.remove("friends__ranking--show");
    })

    e.target.closest('[data-toggle-ranking]').classList.add("friends__switch-item--active");
    ranking.classList.add("friends__ranking--show")
}
