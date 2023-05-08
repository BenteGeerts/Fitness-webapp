const buttons = document.querySelectorAll("[data-page]");
const pages = document.querySelectorAll("[data-show-page]");
const backButtons = document.querySelectorAll("[data-page-back]");
buttons.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        nextPage(e);
    });
});

backButtons.forEach(back => {
    back.addEventListener("click", (e) => {
        previousPage(e);
    });
})

function nextPage(e) {
    let page = e.target.closest('[data-page]').dataset.page;
    page++;
    const div = document.querySelector('[data-show-page="' + page + '"]');

    pages.forEach(page => {
        page.classList.remove("setup-page--show")
    });

    div.classList.add("setup-page--show");
}

function previousPage(e) {
    let page = e.target.closest('[data-show-page]').dataset.showPage;
    page--;
    const div = document.querySelector('[data-show-page="' + page + '"]');

    pages.forEach(page => {
        page.classList.remove("setup-page--show")
    });

    div.classList.add("setup-page--show");
}

const options = document.querySelectorAll('[data-gender-option]');
options.forEach(option => {
    option.addEventListener("click", function () {
        toggleClass(options, option, "setup__select-item--active");
    });
});

const goals = document.querySelectorAll('[data-goal-option]');
goals.forEach(goal => {
    goal.addEventListener("click", function () {
        toggleClass(goals, goal, "setup__goal-tile--active");
    });
});

function toggleClass(objects, object, className) {
    objects.forEach(object => {
        object.classList.remove(className);
    });
    object.classList.toggle(className);
}
