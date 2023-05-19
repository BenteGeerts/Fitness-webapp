const buttonss = document.querySelectorAll("[data-page]");
const pages = document.querySelectorAll("[data-show-page]");
const numberPickers = document.querySelectorAll('[data-number-picker]');
var goalCheckboxes = document.querySelectorAll('[data-goal-checkboxes]');


document.addEventListener('livewire:load', function () {
   runNumberPickers();
})
Livewire.on('inputfield', function() {
   runNumberPickers();
})


function runNumberPickers() {
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
}
