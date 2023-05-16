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


function toggleClass(objects, object, className) {
    objects.forEach(object => {
        object.classList.remove(className);
    });
    object.classList.toggle(className);
}


const resultHorizontals = document.querySelectorAll('[data-swiper-horizontal]');
const resultVerticals = document.querySelectorAll('[data-swiper-vertical]');
const setupResults = [];



const swiperSubmit = document.querySelector('[data-setup-submit]');
swiperSubmit.addEventListener("click", () => {
    resultVerticals.forEach(result => {
        setupResults.push(result.querySelector(".swiper-slide-active").innerText);
    })

    resultHorizontals.forEach(result => {
        setupResults.push(result.querySelector(".swiper-slide-active").innerText);
    })

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var xhr = new XMLHttpRequest();
    var url = '/setup';
    var data = {
        weight: 90,
        height: 125,
        age: 25,
        gender: "male" ,
        goal: "loose weight",
        visits: 5
    };

    var jsonData = JSON.stringify(data);

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
        }
    };

    xhr.send(jsonData)
})
