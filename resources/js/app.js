import "./add-exercise";
import "./chart";
import "./flatpickr";
import "./friends";
import "./register";
import "./setup";

Livewire.on('addBodyClass', function (classNames) {
    if (Array.isArray(classNames)) {
        classNames.forEach(function (className) {
            document.body.classList.toggle(className);
        });
    } else {
        var classList = classNames.split(' ');
        classList.forEach(function (className) {
            document.body.classList.toggle(className);
        });
    }
});
