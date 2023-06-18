import "./add-exercise";
import "./chart";
import "./flatpickr";
import "./friends";
import "./register";

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
}

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
