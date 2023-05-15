var toggleVisibilityIcons = document.querySelectorAll('[data-toggle-visibility]');

for (var i = 0; i < toggleVisibilityIcons.length; i++) {
    toggleVisibilityIcons[i].addEventListener('click', function () {
        var passwordInput = this.parentElement.querySelector('[data-password]');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.classList.remove('icon-visibility');
            this.classList.add('icon-visibility_off');
        } else {
            passwordInput.type = 'password';
            this.classList.remove('icon-visibility_off');
            this.classList.add('icon-visibility');
        }
    });
}
