import flatpickr from "flatpickr";
Livewire.on('datepicker', function() {
    flatpickr("[data-input]", {
        enableTime: false,
        dateFormat: "Y-m-d",
    })
})
