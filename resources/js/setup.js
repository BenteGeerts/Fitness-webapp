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
