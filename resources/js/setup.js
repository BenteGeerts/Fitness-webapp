const buttonss = document.querySelectorAll("[data-page]");
const pages = document.querySelectorAll("[data-show-page]");
const backButtons = document.querySelectorAll("[data-page-back]");
const swiperSubmit = document.querySelector('[data-setup-submit]');
const numberPickers = document.querySelectorAll('[data-number-picker]');
var genderCheckboxes = document.querySelectorAll('[data-gender-checkboxes]');
var goalCheckboxes = document.querySelectorAll('[data-goal-checkboxes]');

buttonss.forEach(button => {
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

numberPickers.forEach(numberPicker => {

    const decrementBtn = numberPicker.querySelector('[data-number-decrement]');
    const incrementBtn = numberPicker.querySelector('[data-number-increment]');
    const quantityInput = numberPicker.querySelector('[data-number-input]');
    const min = quantityInput.min;
    const max = quantityInput.max;

    decrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > min) {
            quantityInput.value = --currentValue;
        }
    });

    incrementBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue < max) {
            quantityInput.value = ++currentValue;
        }
    });
})

genderCheckboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        // If the current checkbox is checked
        if (this.checked) {
            // Uncheck all other checkboxes
            genderCheckboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});


swiperSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    submitData();
})

function nextPage(e) {
    let page = e.target.closest('[data-page]').dataset.page;

    if (page != 4) {
        page++;
    }
    if (page == 4) {
        genderCheckboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                page++;
            }
        });
    }

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

function submitData() {
    var gender = null;
    var goal = null;

    genderCheckboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            gender = checkbox.value;
        }
    });

    goalCheckboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            goal = checkbox.value;
        }
    });

    var weight = document.querySelector('[data-number-input="1"]');
    var height = document.querySelector('[data-number-input="2"]');
    var age = document.querySelector('[data-number-input="3"]');
    var visits = document.querySelector('[data-number-input="4"]');


    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var url = '/setup';
    var data = {
        weight: weight.value,
        height: height.value,
        age: age.value,
        gender: gender,
        goal: goal,
        visits: visits.value
    };

    var jsonData = JSON.stringify(data);

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: jsonData
    })
        .then(response => {
        if (!response.ok) {
            throw new Error('Request failed with status ' + response.status);
        }
        return response.json();
    })
        .then(responseData => {
            if (!responseData) {
                throw new Error('Empty response received');
            }
            console.log(responseData);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
